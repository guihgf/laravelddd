<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Application\Interfaces\IUsuarioApp;
use App\Http\Requests;


class UsuarioController extends Controller
{
    private $app;

    public function __construct(IUsuarioApp $app)
    {
        $this->app=$app;

    }

    public function index()
    {
        return response()->json($this->app->listar());
    }


}
