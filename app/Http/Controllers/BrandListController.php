<?php
namespace App\Http\Controllers;
use App\Models\Brand;
use Illuminate\Support\Facades\DB;
class BrandListController extends Controller
{
    public function show(string $brand_letter)
    {
        $brands = Brand::where('name', 'LIKE', $brand_letter . '%')->get();
        return view('pages.brand_list', ["brands" => $brands, "brand_letter" => $brand_letter]);
    }
}
