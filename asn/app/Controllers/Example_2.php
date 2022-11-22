<?php

namespace App\Controllers;

use App\Models\Example_2Model;

class Example_2 extends BaseController
{
    protected $helpers = ["form"];

    public function index(): string
    {
        return view("pages/index");
    }

    public function insecure()
    {
        $mysqli =  mysqli_connect(
            $_SERVER["database.default.hostname"], 
            $_SERVER["database.default.username"], 
            $_SERVER["database.default.password"], 
            $_SERVER["database.default.database"]
        );
        $result = $mysqli->query("SELECT * FROM `example_2`");
        // Para que sea un mapa con las columnas 
        $data["data"] = $result->fetch_all(MYSQLI_ASSOC); 
        if (strtolower($this->request->getMethod()) === 'post') {
            // real_escape_string
            $title = $this->request->getVar('title');
            $message = $this->request->getVar('message');
            // <script>console.log("hack")</script>
            $query = "INSERT INTO example_2 (example_2_id, title, message) VALUES (NULL, '". $title ."', '". $message ."')";
            $mysqli->query($query);
            // d(mysqli_error($mysqli));
            return redirect()->route('Example_2::insecure');
        }
        return view('pages/example2_insecure', $data);
    }

    public function secure(): string
    {
        $formModel = new Example_2Model();
        $data['data'] = $formModel->fetch_all_example_2();

        if (strtolower($this->request->getMethod()) === 'post') {
            // Este método ya protege ante inyecciones SQL, aunque podemos poner muchas más medidas de protección
            $formModel->save([
                'title'     => $this->request->getVar('title'),
                'message'   => $this->request->getVar('message'),
            ]);
            return redirect()->route('Example_2::secure');
        }
        return view('pages/example2_secure', $data);
    }
}
