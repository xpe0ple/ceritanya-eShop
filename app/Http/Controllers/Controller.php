<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function index ()
    {
        return view ('user.page.home',[
            'title' => 'Home',
        ]);
    }
    public function shop ()
    {
        return view ('user.page.shop',[
            'title' => 'Shop',
        ]);
    }    public function transaksi ()
    {
        return view ('user.page.transaksi',[
            'title' => 'Transaksi',
        ]);
    }
    public function contact ()
    {
        return view ('user.page.contact',[
            'title' => 'Contact Us',
        ]);
    }
    public function checkOut ()
    {
        return view ('user.page.checkOut',[
            'title' => 'Check Out',
        ]);
    }
}
