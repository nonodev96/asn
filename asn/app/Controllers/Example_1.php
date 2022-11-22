<?php

namespace App\Controllers;
use Config\Services;
use App\Models\Example_1Model;

class Example_1 extends BaseController
{
    protected $helpers = ["form"];

    public function index(): string
    {
        return view("pages/index");
    }

    public function secure()
    {
        $formModel = new Example_1Model();
        $data['data'] = $formModel->fetch_all_example_1();
        if (strtolower($this->request->getMethod()) === 'post') {
            $rules = [
                'title'     => 'required|min_length[5]',
                'message'   => 'required|min_length[10]',
            ];
            if ($this->validate($rules)) {
                $formModel->save([
                    'title'     => $this->request->getVar('title'),
                    'message'   => $this->request->getVar('message'),
                ]);
                return redirect()->route('Example_1::secure');
            }
            $data["validation"] = $this->validator;
        }       
        return view('pages/example1_secure', $data);
    }


    public function insecure()
    {
        $formModel = new Example_1Model();
        $data['data'] = $formModel->fetch_all_example_1();
        if (strtolower($this->request->getMethod()) === 'post') {
            $formModel->save([
                'title'     => $this->request->getVar('title'),
                'message'   => $this->request->getVar('message'),
            ]);
            return redirect()->route('Example_1::insecure');
        }
        return view('pages/example1_insecure', $data);
    }

}
