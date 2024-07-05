<?php

declare(strict_types=1);

namespace App\Services;

use App\Models\Url;
use App\Repositories\UrlRepositoryInterface;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Str;

class UrlShortnerService
{
    /**
     * __construct
     *
     * @param UrlRepositoryInterface $urlRepository
     * @param GoogleService $googleService
     * @return void
     */
    public function __construct(
        private UrlRepositoryInterface $urlRepository,
        private GoogleService $googleService,
    ) {
    }

    /**
     * Get Shorten Url by Url
     *
     * @param string $url
     * @return Url|null
     */
    public function getShortentUrlByUrl(string $url): ?Url
    {
        return $this->urlRepository->getShortentUrlByUrl($url);
    }

    /**
     * Get Shorten Url by Slug
     *
     * @param string $slug
     * @return Url|null
     */
    public function getShortentUrlBySlug(string $slug): ?Url
    {
        return $this->urlRepository->getShortentUrlBySlug($slug);
    }

    /**
     * Generate Short URL
     *
     * @param string $url
     * @param string $ip
     * @return JsonResponse
     */
    public function generateShortUrl(string $url, string $ip): JsonResponse
    {
        $shortenUrl = $this->getShortentUrlByUrl($url);

        if ($shortenUrl) {
            return response()->json(['url' => $shortenUrl->slug]);
        }

        $validation = $this->googleService->validateUrl($url);

        if (!$validation) {
            return response()->json(['error' => 'URL is unsafe'], 400);
        }

        // Create short URL slug
        do {
            $slug = Str::random(6);
        } while ((bool) $this->getShortentUrlBySlug($slug));

        $attrributes = [
            'url' => $url,
            'slug' => $slug,
            'ip_address' => $ip
        ];

        $shortenUrl = $this->urlRepository->create($attrributes);

        return response()->json(['url' => $shortenUrl->slug]);
    }
}
