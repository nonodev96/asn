<?php

namespace App\Controllers;
use Config\Services;
use App\Models\FormModelExample1;

class Example_1 extends BaseController
{
    public function index(): string
    {
        return view("pages/index");
    }

    public function secure(): string
    {
        helper('form');

        $rules = [
            'email'     => 'required|valid_email',
            'password'  => 'required',
        ];

        if (strtolower($this->request->getMethod()) !== 'post') {
            return view('pages/example1_secure', [
                'validation' => Services::validation(),
            ]);
        }
        if ($this->validate($rules)) {
            $formModel = new FormModelExample1();
            $data = [
                'email'     => $this->request->getVar('email'),
                'password'  => $this->request->getVar('password'),
            ];
            $formModel->save($data);
            return redirect()->to('/Example_1/secure');
        } else {
            $data['validation'] = $this->validator;
            return view('pages/example1_secure', $data);
        }        
    }


    public function insecure(): string
    {
        return view('pages/example1_insecure');
    }

}
