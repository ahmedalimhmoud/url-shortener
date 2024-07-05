<?php

declare(strict_types=1);

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class BaseRepository implements BaseRepositoryInterface
{
    /**
     * BaseRepository constructor.
     *
     * @param Model $model
     */
    public function __construct(protected Model $model)
    {
    }

    /**
     * Create Record in Model
     *
     * @param array $attributes
     * @return Model
     */
    public function create(array $attributes): Model
    {
        return $this->model->create($attributes);
    }

    /**
     * Insert Records in Model
     *
     * @param array $attributes
     * @return boolean
     */
    public function insert(array $attributes)
    {
        return $this->model->insert($attributes);
    }

    /**
     * Create/Update Record in Model
     *
     * @param array $attributes
     * @param array $values
     * @return Model
     */
    public function updateOrCreate(array $attributes, array $values): Model
    {
        return $this->model->updateOrCreate($attributes, $values);
    }

    /**
     * Find Record in Model
     *
     * @param int $id
     * @return Model|null
     */
    public function find(int $id): ?Model
    {
        return $this->model->find($id);
    }

    /**
     * Get all data in Model
     *
     * @return Collection
     */
    public function all(): Collection
    {
        return $this->model->all();
    }

    /**
     * Delete Record in Model
     *
     * @param int $id
     * @return void
     */
    public function destroy(int $id): void
    {
        $this->model->findOrFail($id)->delete();
    }

    /**
     * Count Records in Model
     *
     * @return int
     */
    public function count(): int
    {
        return (int) $this->model->count();
    }

    /**
     * Update Record in Model
     *
     * @param $id
     * @param $data
     * @return bool
     */
    public function update(int $id, array $data): bool
    {
        return $this->model->findOrFail($id)->update($data);
    }

    /**
     * Restore Record in Model
     *
     * @param $id
     * @return bool
     */
    public function restore(int $id): bool
    {
        return $this->model->withTrashed()->find($id)->update(['deleted_at' => null]);
    }
}
