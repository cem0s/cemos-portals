<?php

namespace App\Http\Controllers\Webshop;

use Illuminate\Http\Request;

class ProductStatusController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('webshop.pages.product.product-status');
    }

}
