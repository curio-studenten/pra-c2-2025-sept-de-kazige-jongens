<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Manual;
use Illuminate\Support\Facades\DB;
use function Webmozart\Assert\Tests\StaticAnalysis\length;

class BrandController extends Controller
{
    public function show($brand_id, $brand_slug)
    {

        $brand = Brand::findOrFail($brand_id);
        $topManuals = DB::table('manuals')->where('brand_id', $brand_id)
            ->orderBy('count', 'desc')
            ->limit(5)
            ->get();
        $manuals = DB::table('manuals')->where('brand_id', $brand_id)->get();
        return view('pages/manual_list', [
            "brand" => $brand,
            "top_manuals" => $topManuals,
            "manuals" => $manuals
        ]);

    }
}
