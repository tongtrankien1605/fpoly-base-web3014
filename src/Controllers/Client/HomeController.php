<?php

namespace Tongtrankien1605\FpolyBaseWeb3014\Controllers\Client;

use Tongtrankien1605\FpolyBaseWeb3014\Commons\Controller;

class HomeController extends Controller
{
    public function index(){
        $name = 'KienTTPH45089';

        $this->renderViewClient('home', [
            'name' => $name
        ]);
    }
}