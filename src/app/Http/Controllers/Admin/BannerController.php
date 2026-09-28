<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\View\View;
use App\Models\Banner;

class BannerController extends Controller
{
    public function index(): View
    {
        $listarBanner = Banner::all();

        return view('admin.banner.index', compact('listarBanner'));
    }
}
