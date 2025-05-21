<?php

namespace App\Http\Controllers\footer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Location;
class StoreController extends Controller
{
   public function index()
    {       
        $locations = Location::all(); 
        return view('footer-url.store-locator', compact('locations'));

    }
}
