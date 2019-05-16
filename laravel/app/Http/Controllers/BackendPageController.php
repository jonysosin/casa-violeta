<?php

namespace App\Http\Controllers;

use App\StaticPage;
use App\Product;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use App\AdminMenu;

class BackendPageController extends Controller
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

    public function showLogin (Request $request, $seoUrl = null) 
    {
        $isLoggedIn = $request->session()->get('login');
        if ($isLoggedIn) {
            return redirect('admin');
        }

        return view('login');
    }

    public function showHome (Request $request, $seoUrl = null)
    {
        $isLoggedIn = $request->session()->get('login');
        if (!$isLoggedIn) {
            return redirect('admin/login');
        }
    }

    public function login (Request $request)
    {
        if ($request->isMethod('post')) {
            $parameters = $request->all();
            if ($parameters['username'] == 'admin' && $parameters['password'] == 'casavioleta2019') {
                $request->session()->put('login', true);
            }
        }
    }

    public function prepareAdminView ($parameters) {
        $parameters = array_merge($parameters, [
            'menuItems' => AdminMenu::getMenu(),
            'title' => AdminMenu::getPageTitle(),
            'siteName' => AdminMenu::getSiteName()
        ]);
        
        return view($parameters['view'],$parameters);
    }

    public function listing (Request $request, $entityName) {
        $entityName = "App\\" . ucfirst($entityName);
        $entity = new $entityName;

        return $this->prepareAdminView([
            'view' => 'admin.base',
            'fillable' => $entity->backendTitles(),
            'data' => $entity::all()
        ]);
    }

    public function crud (Request $request, $entityName, $id) {
        $entityName = "App\\" . ucfirst($entityName);
        $class = new $entityName;
        $item = $class::where('id', $id)->first();

        return $this->prepareAdminView([
            'view' => 'admin.crudbase',
            'fillable' => $class->backendTitles(),
            'data' => $item
        ]);
    }

    public function save (Request $request, $entityName, $id) {
        $entityName = "App\\" . ucfirst($entityName);
        $class = new $entityName;
        $item = $class::where('id', $id)->first();

        $parameters = $request->all();
        foreach ($parameters as $key => $value) {
            if (strpos($key, 'edit:') === 0) {
                $property = str_replace('edit:', '', $key);
                $item->$property = $value;
            }
        }

        $item->save();

        return $this->prepareAdminView([
            'view' => 'admin.crudbase',
            'fillable' => $class->backendTitles(),
            'data' => $item
        ]);
    }

    public function createProduct (Request $request) {
        $product = Product::create([
            'name' => 'Jonathan', 'subTitle' => 'Subtitulo', 'link' => 'http://google.com', 'isPromo' => false
        ]);

        $parameters = $request->all();
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

    protected function listCategories () {
    }
}
