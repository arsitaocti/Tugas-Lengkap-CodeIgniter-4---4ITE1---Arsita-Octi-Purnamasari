<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Ngetesaja extends BaseController
{
    public function index()
    {
        $data = [
            "title" => "ALooha",
            "name" => "Hi woman!"
        ];

        echo view('index', $data);
    }
}
