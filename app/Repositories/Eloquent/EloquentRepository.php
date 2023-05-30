<?php

namespace App\Repositories\Eloquent;

use App\Repositories\Contracts\EloquentRepositoryInterface;
use Exception;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

abstract class EloquentRepository implements EloquentRepositoryInterface
{
    public function __construct(protected Model $model)
    {
    }

    public function model(): Model
    {
        return $this->model;
    }

    public function createQuery(): Builder
    {
        return $this->model->newQuery();
    }

    public function all(
        array $columns = ['*'],
        array $relations = [],
        ?array $filters = []
    ): Collection {
        return $this->createQuery()
            ->filter($filters)
            ->with($relations)
            ->get($columns);
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
        $query = $this->createQuery()
            ->filter($filters)
            ->addSelect($this->reformatColumns($columns))
            ->with($relations);

        $tableName = $this->model->getTable();

        //add custom filters
        if ($customConditions) {
            $query = $this->addCustomConditions($query, $customConditions);
        }

        //add conditions
        foreach ($conditions as $condition) {
            $query->where($tableName . '.' . $condition[0], $condition[1], $condition[2]);
        }

        //add custom sorting
        if ($customSorting) {
            $attr = ltrim($customSorting, '-');

            $direction = $customSorting == $attr ? 'ASC' : 'DESC';

            $query = $this->addCustomSorting($query, $attr, $direction);
        } elseif ($sorting) {  //add sorting
            $attr = ltrim($sorting, '-');

            $direction = $sorting == $attr ? 'ASC' : 'DESC';

            $query->orderBy($tableName . '.' . $attr, $direction);
        }

        //add custom relations
        if ($customRelations) {
            $query = $this->addCustomRelations($query, $customRelations);
        }

        return $query->paginate($perPage);
    }

    public function allTrashed(): Collection
    {
        return $this->model->onlyTrashed()->get();
    }

    public function findById(
        int $modelId,
        array $columns = ['*'],
        array $relations = [],
        array $customRelations = [],
        array $appends = []
    ): ?Model {
        $query = $this->createQuery()
            ->select($this->reformatColumns($columns))
            ->with($relations);

        if ($customRelations) {
            $query = $this->addCustomRelations($query, $customRelations);
        }

        return $query->findOrFail($modelId)->append($appends);
    }

    public function findTrashedById(int $modelId): ?Model
    {
        return $this->model->withTrashed()->findOrFail($modelId);
    }

    public function findOnlyTrashedById(int $modelId): ?Model
    {
        return $this->model->onlyTrashed()->findOrFail($modelId);
    }

    public function create(array $payload): ?Model
    {
        $model = $this->model->create($payload);

        return $model->refresh();
    }

    public function update(Model|int $model, array $payload): ?Model
    {
        $model = is_int($model) ? $this->findById($model) : $model;
        $model->update($payload);

        return $model;
    }

    public function deleteById(int $modelId): bool
    {
        $model = $this->findById($modelId);

        DB::beginTransaction();

        try {
            $model->delete();

            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();

            abort(403, 'Forbidden. This item has relations to other items');
        }

        return 1;
    }

    public function deleteByModel(Model $model): bool
    {
        DB::beginTransaction();

        try {
            $model->delete();

            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();

            abort(403, 'Forbidden. This item has relations to other items');
        }

        return 1;
    }

    public function restoreById(int $modelId): bool
    {
        return $this->findOnlyTrashedById($modelId)->restore();
    }

    public function permanentlyDeleteById(int $modelId): bool
    {
        return $this->findTrashedById($modelId)->forceDelete();
    }

    public function count($columns = '*'): int
    {
        return $this->createQuery()->count($columns);
    }

    protected function reformatColumns(array $columns, ?string $tableName = null): array
    {
        $tableName = $tableName ?: $this->model->getTable();

        foreach ($columns as &$column) {
            if (!Str::contains($column, '.')) {
                $column = $tableName . '.' . $column;
            }
        }

        return $columns;
    }

    protected function addCustomConditions(Builder $query, array $filters): Builder
    {
        //add custom filters here
        return $query;
    }

    protected function addCustomSorting(Builder $query, string $attr, string $direction): Builder
    {
        //add custom filters here
        return $query;
    }

    protected function addCustomRelations(Builder $query, array $relations): Builder
    {
        //add custom relations here
        return $query;
    }
}
