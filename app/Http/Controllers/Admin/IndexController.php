<?php

namespace App\Http\Controllers\Admin;


use Core\Components\Controllers\Base\AdminController;

class IndexController extends AdminController
{
    public function index()
    {
        return view('welcome');
    }
}
