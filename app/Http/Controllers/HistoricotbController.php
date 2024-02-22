<?php

namespace App\Http\Controllers;

use Illuminate\support\facades\redirect;
use Illuminate\Http\Request;
use App\Models\historicotb;

class HistoricotbController extends Controller
{
    public function showFormHistorico(){
        return view('TelaHistorico');
    }

    public function showGerenciador(Request $request){
       $dados= historicotb::query();
       $dados->when($request->nome,function($query,$nome){
        $query->where('nome', 'like' , '%'.$nome.'%');
       });

       $dados = $dados->get();

       return view('TelaHistorico', ['historicotb' => $dados]);
    }


    public function destroy(historicotb $id){
        $id->delete();
        return redirect::route('xxx');
        
    }


    public function update(historico $id, Request $request){
        $historico = $request->validate([
            'xxx'=>'string|required',
            'xxx'=>'string|required',
            'xxx'=>'string|required'
        ]);

        $id->fill($historico);
        $id->save();
        return redirect::route('xxx');
    }


    public function show(historico $id){
        return view('xxx', ['historicotb'=> $id]);
    }
}
