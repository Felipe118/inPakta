<?php

namespace App\Repository;

use App\Models\Empresa;

class EmpresaRepository {

    public function __construct(
        protected Empresa $empresa
    ){}

    public function store(array $dados)
    {
        $store = $this->empresa->create($dados);

        if($store){
            return response()->json(['message' => 'Empresa cadastrada com sucesso']);
        }

        return response()->json(['message' => 'Erro ao cadastrar a empresa']);
    }

    public function getAll()
    {
       return $this->empresa->paginate(10);
    }

    public function show($id)
    {
        return $this->empresa->findOrFail($id);
    }

    public function update(array $dados)
    {
        $empresa = $this->empresa->findOrFail($dados['id']);
        $update = $empresa->update($dados);

        if($update){
            return response()->json(['message' => 'Empresa editada com sucesso']);
        }

        return response()->json(['message' => 'Erro ao editada a empresa']);
    }

    public function delete($id)
    {
        $empresa = $this->empresa->find($id);
  
        $empresa->delete();
        
        return response()->json(['message' => 'Empresa deletada com sucesso'], 200);
    }
}