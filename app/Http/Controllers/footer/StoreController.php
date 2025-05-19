<?php

namespace App\Http\Controllers\footer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StoreController extends Controller
{
   public function index()
    {
        return view('footer-url.store-locator'); 
    }
}
