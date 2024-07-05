<?php

declare(strict_types=1);

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;

/**
 * HomeController
 */
class HomeController extends Controller
{
    /**
     * View Homepage
     *
     * @return View
     */
    public function __invoke()
    {
        return view('index');
    }
}
