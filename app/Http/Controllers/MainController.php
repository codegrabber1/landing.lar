<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

abstract class MainController extends Controller
{
    //
    protected $model;

    /**
     * MainController constructor.
     */
    public function __construct()
    {

    }

    /**
     * @return mixed
     */
//    abstract function getModels();
//
//    public function startCondition(){
//
//        return clone $this->model;
//    }

}
