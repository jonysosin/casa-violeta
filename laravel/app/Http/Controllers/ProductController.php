<?php

namespace App\Http\Controllers;

use App\StaticPage;
use App\Category;
use App\Product;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function getCategories () {
        return Category::where('active', true)->get();
    }

    public function showProducts (Request $request) {
        /** View Properties */
        $title = 'Productos';
        $products = Product::orderBy('isPromo', 'desc')->get();
        /** View Properties */

        // // $product = new \stdClass();
        // // $product->name = 'YO SOY EL QUE YO SOY';
        // // $product->subTitle = 'Meditación, Creatividad, Inspiración y Conexión Superior';
        // // $product->link = '/producto/1';
        // // $product->isPromo = true;

        // $products[] = $product;
        // $products[] = $product;
        // $products[] = $product;

        // $productB = clone($product);
        // $productB->isPromo = false;
        // $products[] = $productB;
        // $products[] = $productB;
        // $products[] = $productB;


        return view('categoryPage', [
            'categories' => $this->getCategories(),
            'categoryName' => strtoupper($title),
            'title' => $title,
            'products' => $products,
            'pageTitle' => strtoupper($title),
            'bodyExtraClass' => 'category-list',
        ]);
    }

    public function showCategoryProducts (Request $request, $categorySeo = null) {
        $products = [];
        $category = Category::where('seo', $categorySeo)->first();
        if ($category) {
            $products = Product::where('category', $category->id)->get();
        }
        
        return view('categoryPage', [
            'categories' => $this->getCategories(),
            'categoryName' => $category->name,
            'title' => $category->name,
            'products' => $products,
            'pageTitle' => $category->name,
            'bodyExtraClass' => 'category-list',
        ]);
    }

    public function showProduct (Request $request, $productName = null, $productId = null) {
        $product = Product::where('id', $productId)->first();
        $category = Category::where('id', $product->category)->first();
        
        return view('productPage', [
            'categories' => $this->getCategories(),
            'pageTitle' => $category->name,
            'title' => $product->name,
            'bodyExtraClass' => 'product-page product-' . Str::slug($product->name),
            'product' => $product,
            'footerTitle' => $category->footerTitle,
            'footerDetail' => $category->footerDetail,
        ]);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    public function show (Request $request, $seoUrl = null)
    {

        // StaticPage::create([
        //     'title' => 'Quienes Somos.',
        //     'seoUrl' => 'quienes-somos',
        //     'shortDescription' => 'This is short.',
        //     'longDescription' => 'This is long.',
        // ]);

        $staticPage = StaticPage::where('seoUrl', $seoUrl)->first();

        // dd($staticPage, $staticPage->title);

        return view('staticpage', ['pageTitle' => $staticPage->title]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }
}
