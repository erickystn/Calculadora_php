<?php

namespace app\controllers;

use app\core\Controller;
use app\models\Operacao;

class HomeController extends Controller
{

    public function index()
    {
        $dados["view"] = "home";
        $this->load("template", $dados);
    }

    public function somar()
    {
        $dados["view"] = "soma";
        $this->load("template", $dados);
    }
    public function calcularSoma()
    {
        $dados["a"]  = (int) $_POST["a"] ?? 0;
        $dados["b"]  = (int) $_POST["b"] ?? 0;
        $obj = new Operacao();
        $dados["view"] = "soma";
        $dados["resultado"] = $obj->somar($dados["a"], $dados["b"]);
        $this->load("template", $dados);
    }


    public function subtrair()
    {
        $dados["view"] = "subtracao";
        $this->load("template", $dados);
    }
    public function calcularSubtracao()
    {
        $obj = new Operacao();
        $dados["a"] = (int) $_POST["a"] ?? 0;
        $dados["b"] = (int) $_POST["b"] ?? 0;
        $dados["view"] = "subtracao";
        $dados["resultado"] = $obj->subtrair($dados["a"],  $dados["b"]);
        $this->load("template", $dados);
    }

    public function dividir()
    {
        $dados["view"] = "divisao";
        $this->load("template", $dados);
    }
    public function calcularDivisao()
    {
        $obj = new Operacao();
        $dados["a"]  = (int) $_POST["a"] ?? 0;
        $dados["b"]  = (int) $_POST["b"] ?? 0;
        $dados["view"] = "divisao";
        $dados["resultado"] = $obj->dividir($dados["a"],  $dados["b"]);
        $this->load("template", $dados);
    }



    public function multiplicar()
    {
        $dados["view"] = "multiplicacao";
        $this->load("template", $dados);
    }
    public function calcularMultiplicacao()
    {
        $dados["a"]  = $_POST["a"] ?? 0;
        $dados["b"]  = $_POST["b"] ?? 0;
        $obj = new Operacao();
        $dados["view"] = "multiplicacao";
        $dados["resultado"] = $obj->multiplicar($dados["a"],  $dados["b"]);
        $this->load("template", $dados);
    }
}
