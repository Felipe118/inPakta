<?php

namespace App\Repository;

use App\Models\Funcionario;

class FuncionarioRepository {

    public function __construct(
        protected Funcionario $funcionario
    ){}

   public function getAll()
   {
        $funcionarios = $this->funcionario->with('empresa')->get();
        return $funcionarios->toArray();
   }

   public function store(array $dados)
    {
        $store = $this->funcionario->create($dados);

        if($store){
            return response()->json(['message' => 'Funcionario cadastrada com sucesso']);
        }

        return response()->json(['message' => 'Erro ao cadastrar a funcionario']);
    }

}