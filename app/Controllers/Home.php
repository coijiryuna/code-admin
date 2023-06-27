<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view(!on_groups()->name ? '' : on_groups()->name . '/dashboard');
    }
}
