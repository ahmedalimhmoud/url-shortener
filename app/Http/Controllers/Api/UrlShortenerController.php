<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\UrlShortenRequest;
use App\Services\UrlShortnerService;
use Illuminate\Http\JsonResponse;

/**
 * UrlShortenerController
 */
class UrlShortenerController extends Controller
{
    /**
     * __construct
     *
     * @param UrlShortnerService $urlShortnerService
     * @return void
     */
    public function __construct(
        private UrlShortnerService $urlShortnerService,
    ) {
    }

    /**
     * Shorten URL
     *
     * @param UrlShortenRequest $request
     * @return JsonResponse
     */
    public function __invoke(UrlShortenRequest $request): JsonResponse
    {
        return $this->urlShortnerService->generateShortUrl($request->url, $request->ip());
    }
}
