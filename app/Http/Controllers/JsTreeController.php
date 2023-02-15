<?php

namespace App\Http\Controllers;

use App\Helpers\DirektoriPohonHelper;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;

class JsTreeController extends Controller
{
    public function index(): Factory|View|Application
    {
        return view('jstree');
    }

    public function data(): JsonResponse
    {
        $direktori = sprintf('%s/app/public/galeri/foto', storage_path());

        $direktoriPohon = (new DirektoriPohonHelper())->buatPohon($direktori);

        return response()->json($direktoriPohon);
    }
}
