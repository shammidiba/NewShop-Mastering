<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewShopController extends Controller
{
    public function index(){
        return view('front-end.home.home');
    }
    public function categoryProductWomen(){
        return view('front-end.category.category-women');
    }
    public function categoryProductMen(){
        return view('front-end.category.category-men');
    }
    public function shortCodes(){
        return view('front-end.short-codes.short-codes');
    }
    public function Mail(){
        return view('front-end.mail.mail');
    }
    public function Checkout(){
        return view('front-end.checkout.checkout');
    }
    public function Login(){
        return view('front-end.login.login');
    }
    public function Registration(){
        return view('front-end.registration.registration');
    }
    public function singleContent(){
        return view('single-content.single-content');
    }
}
