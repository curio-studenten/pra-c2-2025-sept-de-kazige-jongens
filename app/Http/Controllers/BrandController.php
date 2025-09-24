<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Manual;
use Illuminate\Support\Facades\DB;

class BrandController extends Controller
{
    public function show($brand_id, $brand_slug)
    {

        $brand = Brand::findOrFail($brand_id);
        $topManuals = DB::table('manuals')
            ->orderBy('count', 'desc')
            ->limit(5)
            ->get();
        return view('pages/manual_list', [
            "brand" => $brand,
            "manuals" => $topManuals
        ]);

    }
}
