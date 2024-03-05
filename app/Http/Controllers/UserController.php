<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\Product;
use App\Models\Category;
use App\Models\Origin;
use App\Models\News;
use Carbon\Carbon;

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
        // Tạo một mảng chứa các sản phẩm theo từng danh mục
        $productsByCategory = [];
        foreach ($categories as $category) {
            $productsByCategory[$category->name] = Product::where('category_id', $category->id)->where('status', 1)
                ->latest()->limit(4)
                ->get();
        }
        return view('frontend.product', compact('products', 'categories', 'origins', 'productsByCategory'));
    }
    public function getDetailProduct(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        // Lấy danh mục của sản phẩm đang xem
        $category = $product->category;
        // Lấy ra các sản phẩm cùng danh mục (trừ sản phẩm đang xem)
        $relatedProducts = Product::where('category_id', $category->id)
            ->where('id', '!=', $product->id) // Loại bỏ sản phẩm đang xem
            ->limit(4) // Giới hạn số lượng sản phẩm liên quan
            ->get();
        return view('frontend.detailProduct', compact('product', 'category', 'relatedProducts'));
    }
    // gioi thieu, tin tuc, lien he  //
    public  function getIntro(Request $request)
    {
        return view('frontend.intro');
    }
    // tin tuc va chi tiet tin tuc
    public function getNews(Request $request)
    {
        //hien thi tin tuc
        $news = News::where('status', 1)->get();
        // Lấy 4 tin tức mới nhất với trường status là 1, sắp xếp theo thời gian tạo giảm dần
        $latest_news = News::where('status', 1)->orderBy('created_at', 'desc')->take(4)->get();

        $latest_titles = News::where('status', 1)->orderBy('created_at', 'desc')->take(5)->get();
        return view('frontend.news', compact('news', 'latest_news', 'latest_titles'));
    }
    public function getDetailNews(Request $request, $id)
    {
        $news = News::findOrFail($id);

        return view('frontend.newDetail', compact('news'));
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
