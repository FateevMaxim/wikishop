<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Images;
use App\Models\Menu;
use App\Models\ProductsMainPageModel;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

class MenuController extends Controller
{
    public function index()
    {
        $items = Menu::all();
        $products = ProductsMainPageModel::with(['brand'])->take(20)->get();
        $featureds = ProductsMainPageModel::where('online', 1)->orderByDesc('id')->take(3)->get();

        return view('home', compact('items', 'products', 'featureds'));

    }
    public function shop()
    {
        $items = Menu::all();
        $products = ProductsMainPageModel::with(['brand'])->where('brand_id', '!=', '')->paginate(15);
        $productsWithImages = Images::with(['image'])->paginate(15);
        $featureds = ProductsMainPageModel::where('online', 1)->orderByDesc('id')->take(3)->get();
        $brands = Brand::all()->take(6);
        return view('shop', compact('items', 'products', 'featureds', 'brands', 'productsWithImages'));

    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function product($id, $brandId)
    {
        $items = Menu::all();
        $products = ProductsMainPageModel::where('id', $id)->with(['brand'])->first();
        $featureds = ProductsMainPageModel::where('online', 1)->orderByDesc('id')->take(3)->get();

        $relateds = ProductsMainPageModel::where('brand_id', '=', $brandId)->with(['brand'])->take(11)->get();

        return view('product', compact('items', 'products', 'featureds', 'relateds'));

    }
}
