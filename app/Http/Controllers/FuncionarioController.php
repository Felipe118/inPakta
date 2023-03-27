<?php

namespace App\Http\Controllers;

use App\Http\Requests\FuncionarioRequest;
use App\Repository\FuncionarioRepository;
use Illuminate\Http\Request;
use Inertia\Inertia;

class FuncionarioController extends Controller
{
    public function __construct(
        protected FuncionarioRepository $repository
    ){}

    public function index()
    {
        return Inertia::render('Funcionario/Funcionario');
    }

    public function index_store()
    {
        return Inertia::render('Funcionario/CadastraFuncionario');
    }

    public function getAll()
    { 
       return $this->repository->getAll();
    }

    public function store(FuncionarioRequest $request)
    {
        $this->repository->store($request->all());
    }
}
