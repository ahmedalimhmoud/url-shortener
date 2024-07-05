<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Models\Url;
use App\Repositories\BaseRepository;

class UrlRepository extends BaseRepository implements UrlRepositoryInterface
{
    /**
     * __construct.
     *
     * @param Url $model
     */
    public function __construct(Url $model)
    {
        parent::__construct($model);
    }

    /**
     * get shorten url by original url
     *
     * @param string $url
     * @return Url|null
     */
    public function getShortentUrlByUrl(string $url): ?Url
    {
        return $this->model->where('url', $url)->first();
    }

    /**
     * get shorten url by slug
     *
     * @param string $slug
     * @return Url|null
     */
    public function getShortentUrlBySlug(string $slug): ?Url
    {
        return $this->model->where('slug', $slug)->first();
    }
}
