<?php

declare(strict_types=1);

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Services\UrlShortnerService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

/**
 * RedirectController
 */
class RedirectController extends Controller
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
     * Redirect to original url
     *
     * @param string $slug
     * @return RedirectResponse|Response
     */
    public function __invoke(string $slug): RedirectResponse|Response
    {
        $shortenUrl = $this->urlShortnerService->getShortentUrlBySlug($slug);

        if ($shortenUrl) {
            return redirect($shortenUrl->url);
        }

        return response()->view('404', [], 404);
    }
}
