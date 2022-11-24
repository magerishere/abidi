<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class BackController extends BaseController
{
    public function __construct()
    {
        // Share menus into all admin views
        View::share('menus',__('menus'));
    }
}
