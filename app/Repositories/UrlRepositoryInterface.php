<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Models\Url;
use App\Repositories\BaseRepositoryInterface;

/**
 * Interface UserRepositoryInterface
 *
 * @package App\Repositories
 */
interface UrlRepositoryInterface extends BaseRepositoryInterface
{
    /**
     * get shorten url by url
     *
     * @param string $url
     * @return Url|null
     */
    public function getShortentUrlByUrl(string $url): ?Url;

    /**
     * get shorten url by slug
     *
     * @param string $slug
     * @return Url|null
     */
    public function getShortentUrlBySlug(string $slug): ?Url;
}
