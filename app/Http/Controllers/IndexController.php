<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;

class IndexController extends Controller
{
    /**
     * @return Application|Factory|View
     */
    public function index(): View
    {
        return view('index.index');
    }
}
