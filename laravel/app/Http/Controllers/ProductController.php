<?php

namespace App\Http\Controllers;

use App\StaticPage;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;

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

    public function showProduct (Request $request, $productId = null) {
        /** View Properties */
        $productCategoryName = 'Lociones';
        $categories = [];
        $bodyExtraClass = 'product-page';
        $product = new \stdClass();
        $footerTitle = 'COMO USAR LAS LOCIONES:';
        $footerDetail = 'Rociarlas sobre nuestra cabeza y dejar que caigan como lluvia en nuestra aura. También podemos pulverizar un poco en nuestra palma y frotar en zonas específicas que sintamos lo necesitan de acuerdo al caso (sienes, detrás de las orejas, espalda, riñones, detrás de rodillas o tobillos, plantas, etc.). Se potencian aún más si repetimos al menos 3 veces el nombre de la loción en voz alta.';
        /** View Properties */

        $category = new \stdClass();
        $category->name = 'Lociones';
        $category->href = 'asasa';
        $category->img = asset('img/categories/lociones.png');

        $categories[] = $category;
        $categories[] = $category;
        $categories[] = $category;
        $categories[] = $category;

        $product->name = 'YO SOY EL QUE YO SOY';
        $product->subTitle = 'MEDITACIÓN, CREATIVIDAD, INSPIRACIÓN, CONEXIÓN SUPERIOR';
        $product->detail = 'Ideal para meditar, realizar trabajos espirituales, estudiar, crear… Nos conecta con nuestra Amada Presencia permitiendo la “inspiración”. Repite el nombre de la locion al rociar.';
        $product->price = 350;
        $product->buyLink = 'http://google.com';
        
        return view('productPage', [
            'categories' => $categories,
            'productCategoryName' => $productCategoryName,
            'bodyExtraClass' => $bodyExtraClass,
            'product' => $product,
            'footerTitle' => $footerTitle,
            'footerDetail' => $footerDetail,
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
