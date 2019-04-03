<?php

namespace App\Http\Controllers;

use App\StaticPage;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;

class StaticPageController extends Controller
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
