<?php

namespace App\Repositories\Contracts;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;

interface EloquentRepositoryInterface
{
    public function all(
        array $columns = ['*'],
        array $relations = [],
        ?array $filters = []
    ): Collection;

    public function model(): Model;

    public function createQuery(): Builder;

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
    ): LengthAwarePaginator;

    public function allTrashed(): Collection;

    public function findById(
        int $modelId,
        array $columns = ['*'],
        array $relations = [],
        array $customRelations = [],
        array $appends = []
    ): ?Model;

    public function findTrashedById(int $modelId): ?Model;

    public function findOnlyTrashedById(int $modelId): ?Model;

    public function create(array $payload): ?Model;

    public function update(Model|int $model, array $payload): ?Model;

    public function deleteById(int $modelId): bool;

    public function deleteByModel(Model $model): bool;

    public function restoreById(int $modelId): bool;

    public function permanentlyDeleteById(int $modelId): bool;

    public function count($columns = '*'): int;
}
