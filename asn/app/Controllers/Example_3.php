<?php

namespace App\Controllers;

use App\Models\Example_3Model;

class Example_3 extends BaseController
{
    protected $helpers = ["form"];

    public function index(): string
    {
        return view("pages/index");
    }

    public function insecure(): string
    {
        $formModel = new Example_3Model();
        if (strtolower($this->request->getMethod()) === 'post') {
            $formModel->save([
                'title'     => $this->request->getVar('title'),
                'message'   => $this->request->getVar('message'),
            ]);
        }
        $data['data'] = $formModel->fetch_all_example_3();
        return view('pages/example3_insecure', $data);
    }

    public function secure(): string
    {
        $formModel = new Example_3Model();
        if (strtolower($this->request->getMethod()) === 'post') {
            $formModel->save([
                'title'     => $this->request->getVar('title'),
                'message'   => $this->request->getVar('message'),
            ]);
        }
        $data['data'] = $formModel->fetch_all_example_3();
        return view('pages/example3_secure', $data);
    }
}
