<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\Product;
use App\Models\Category;
use App\Models\Origin;
use App\Models\News;

class UserController extends Controller
{
    //trang chu
    public function getIndex(Request $request)
    {
        //hiển thi banner
        $banners = Banner::where('status', 1)->get();
        //hien thi sanpham trang header
        $products = Product::all();
        $categories = Category::all();
        $origins = Origin::all();
        return view('frontend.index', compact('banners', 'products', 'categories', 'origins'));
    }

    //loai san pham & chi tiet san pham & tim kiem & tat ca san pham
    public function getProduct(Request $request)
    {

        $products = Product::where('status', 1)->get();
        $categories = Category::all();
        $origins = Origin::all();
        return view('frontend.product', compact('products', 'categories', 'origins'));
    }
    public function getDetailProduct(Request $request)
    {
        return view('frontend.detailProduct');
    }
    // gioi thieu, tin tuc, lien he  //
    public  function getIntro(Request $request)
    {
        return view('frontend.intro');
    }
    public function getNews(Request $request)
    {
        //hien thi tin tuc
        $news = News::where('status', 1)->get();
        return view('frontend.news', compact('news'));
    }
    public function getContact(Request $request)
    {
        return view('frontend.contact');
    }
    public function getTipTravel(Request $request)
    {
        return view('frontend.tipTravel');
    }
}
