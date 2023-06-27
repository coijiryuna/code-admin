<?php

namespace App\Controllers;

/**
 * Class DashboardController.
 */
class DashboardController extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home',
        ];

        return view(on_groups()->name . '/dashboard', $data);
    }
}
