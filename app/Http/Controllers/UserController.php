<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\Product;
use App\Models\Category;
use App\Models\Origin;
use App\Models\News;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

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
    // lien he
    public function getContact(Request $request)
    {
        return view('frontend.contact');
    }
    // cam nang du lich
    public function getTipTravel(Request $request)
    {
        return view('frontend.tipTravel');
    }
    //gio hang
    public function getCart(Request $request)
    {
        $cart = $request->session()->get('cart', []);

        return view('frontend.cartDetail', compact('cart'));
    }
    // them gio hang
    public function addToCart(Request $request, $productId)
    {
        $product = Product::findOrFail($productId);
        $quantity = $request->input('quantity', 1);

        // Kiểm tra xem giỏ hàng đã tồn tại chưa
        if (!$request->session()->has('cart')) {
            $request->session()->put('cart', []);
        }

        $cart = $request->session()->get('cart');

        // Thêm sản phẩm vào giỏ hàng
        $cart[$productId] = [
            'product' => $product,
            'quantity' => $quantity,
            'total_price' => $product->price * $quantity
        ];

        $request->session()->put('cart', $cart);

        return redirect()->route('getCart');
    }
    // Xóa sản phẩm khỏi giỏ hàng
    public function removeFromCart(Request $request, $productId)
    {
        // Kiểm tra xem giỏ hàng có tồn tại không
        if ($request->session()->has('cart')) {
            $cart = $request->session()->get('cart');

            // Kiểm tra xem sản phẩm có tồn tại trong giỏ hàng không
            if (isset($cart[$productId])) {
                // Xóa sản phẩm khỏi giỏ hàng
                unset($cart[$productId]);
                $request->session()->put('cart', $cart);
            }
        }

        return redirect()->route('getCart');
    }
    public function updateCart(Request $request, $productId)
    {
        $quantity = $request->input('quantity');

        // Kiểm tra xem giỏ hàng đã tồn tại chưa
        if ($request->session()->has('cart')) {
            $cart = $request->session()->get('cart');

            // Kiểm tra xem sản phẩm có tồn tại trong giỏ hàng không
            if (isset($cart[$productId])) {
                // Cập nhật số lượng sản phẩm trong giỏ hàng
                $cart[$productId]['quantity'] = $quantity;
                // Tính lại thành tiền dựa trên số lượng mới và giá của sản phẩm
                $cart[$productId]['total_price'] = $cart[$productId]['product']->price * $quantity;
                $request->session()->put('cart', $cart);
            }
        }

        return redirect()->route('getCart');
    }

    // checkout
    public function getCheckout(Request $request)
    {
        $cart = $request->session()->get('cart', []);
        return view('frontend.checkout', compact('cart'));
    }
    // thanh toan thanh cong or failed
    public function getSuccess(Request $request)
    {
        return view('frontend.order');
    }
    // dich vu
    public function getService(Request $request){
        return view('frontend.service');
    }
    // chi tiet phong

    public function getDetailRoom(Request $request){
        return view('frontend.serviceRoom');
    }
    //dat tour
    public function getTour(Request $request){
        return view('frontend.serviceTour');
    }
}