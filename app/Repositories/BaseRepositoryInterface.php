<?php

declare(strict_types=1);

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

/**
 * Interface BaseRepositoryInterface
 *
 * @package App\Repositories
 */
interface BaseRepositoryInterface
{
    /**
     * Create Record in Model
     *
     * @param array $attributes
     * @return Model
     */
    public function create(array $attributes): Model;

    /**
     * Insert Records in Model
     *
     * @param array $attributes
     * @return void
     */
    public function insert(array $attributes);

    /**
     * Create/Update Record in Model
     *
     * @param array $attributes
     * @param array $values
     * @return Model
     */
    public function updateOrCreate(array $attributes, array $values): Model;

    /**
     * Find Record in Model
     *
     * @param int $id
     * @return Model|null
     */
    public function find(int $id): ?Model;

    /**
     * @return Collection
     */
    public function all(): Collection;

    /**
     * Delete Record in Model
     *
     * @param int $id
     * @return void
     */
    public function destroy(int $id): void;

    /**
     * Count Records in Model
     *
     * @return int
     */
    public function count(): int;

    /**
     * Update Record in Model
     *
     * @param $id
     * @param $data
     * @return bool
     */
    public function update(int $id, array $data): bool;

    /**
     * Restore Record in Model
     *
     * @param $id
     * @return bool
     */
    public function restore(int $id): bool;
}
