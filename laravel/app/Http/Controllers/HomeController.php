<?php

namespace App\Http\Controllers;

use App\StaticPage;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use App\Http\Controllers\ProductController;

class HomeController extends Controller
{

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    private $productController;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(ProductController $productController)
    {
        $this->middleware('guest');
        $this->productController = $productController;
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    public function show (Request $request, $seoUrl = null)
    {
        return view('home',
        [
            'pageTitle' => 'NOVEDADES',
            'headerIcon' => 'contact.png',
            'bodyExtraClass' => 'home-page',
            'categories' => $this->productController->getCategories()
        ]);
    }
}
