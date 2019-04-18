<?php

namespace App\Http\Controllers\AdminA;


use Core\Components\Controllers\Base\AdminController;

class IndexController extends AdminController
{
    public function index()
    {
        return response(['hei' => 'hi']);
    }
}
