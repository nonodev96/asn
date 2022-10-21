<?php

namespace App\Controllers;

class Example_3 extends BaseController
{
    public function index(): string
    {
        return view("pages/index");
    }

    public function insecure(): string
    {
        return view('pages/example3_insecure');
    }

    public function secure(): string
    {
        helper('form');
        return view('pages/example3_secure');
    }
}
