<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\View\View;

class BannerController extends Controller
{
    public function index(): View
    {
        $listaBanner = Banner::all();

        return view('admin.banner.index', compact('listaBanner'));
    }
}