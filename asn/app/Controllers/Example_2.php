<?php

namespace App\Controllers;

class Example_2 extends BaseController
{
    public function index(): string
    {
        return view("pages/index");
    }

    public function insecure(): string
    {
        return view('pages/example2_insecure');
    }

    public function secure(): string
    {
        return view('pages/example2_secure');
    }
}
