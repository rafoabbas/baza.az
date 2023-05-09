<?php

namespace App\Services\Eloquent\Contracts;

use App\Repositories\Contracts\EloquentRepositoryInterface;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

abstract class CrudService implements ValidationRoleIterface
{
    public function __construct(protected EloquentRepositoryInterface $repository)
    {
    }

    public function paginate(
        array $columns = ['*'],
        array $conditions = [],
        array $relations = [],
        ?string $sorting = null,
        ?int $perPage = 20,
        ?array $customConditions = [],
        ?string $customSorting = null,
        ?array $customRelations = [],
        ?array $filters = [],
    ): LengthAwarePaginator {
        return $this->repository->paginate(
            $columns,
            $conditions,
            $relations,
            $sorting,
            $perPage,
            $customConditions,
            $customSorting,
            $customRelations,
            $filters
        );
    }

    public function store(array $data): Model
    {
        return $this->repository->create($data);
    }

    public function update(Model|int $model, array $data): Model
    {
        if (is_int($model)) {
            $model = $this->findById($model);
        }

        $model->update($data);

        return $model;
    }

    public function destroySelected(array $selected): bool
    {
        return $this->query()->whereIn('id', $selected)->delete();
    }

    public function destroy(Model|int $model): bool
    {
        return $this->repository->deleteByModel($model);
    }

    public function findById(
        int $modelId,
        array $columns = ['*'],
        array $relations = [],
        array $customRelations = [],
        array $appends = []
    ): Model {
        return $this->repository->findById($modelId, $columns, $relations, $customRelations, $appends);
    }

    public function props(array $data = []): Model
    {

        $model = $this->model();

        $array = [];

        foreach ($model->getFillable() as $value) {
            $array[$value] = old($value);
        }

        return new $model(array_merge($array, $data));
    }

    public function model(): Model
    {
        return $this->repository->model();
    }

    public function query(): Builder
    {
        return $this->repository->createQuery();
    }
}
