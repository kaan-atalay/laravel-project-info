<?php

namespace KaanAtalay\LaravelProjectInfo\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InfoController extends Controller
{
    public function index(Request $request)
    {
        return response()->json([
            'name' => config('app.name'),
            'description' => config('app.description'),
            'icon' => asset('storage/icon.png'),
        ]);
    }
}
