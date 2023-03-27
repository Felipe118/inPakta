<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmpresaRequest;
use App\Repository\EmpresaRepository;
use Illuminate\Http\Request;
use Inertia\Inertia;

class EmpresaController extends Controller
{
    public function __construct(
        protected EmpresaRepository $repository,
    ){}

    public function index()
    {
        return Inertia::render('Empresa/Empresa');
    }

    public function index_store()
    {
        return Inertia::render('Empresa/CadastraEmpresa'); 
    }

    public function store(EmpresaRequest $request)
    {
        $this->repository->store($request->all());
    }

    public function getAll()
    {
        return $this->repository->getAll();
    }

    public function show($id)
    {
        $empresa = $this->repository->show($id);

        return Inertia::render('Empresa/EditarEmpresa', [
            'empresa' => $empresa
        ]);
    }

    public function update(EmpresaRequest $request)
    {
        $this->repository->update($request->all());
    }

    public function destroy(Request $request)
    {
        return $this->repository->delete($request->id);
    }
}
