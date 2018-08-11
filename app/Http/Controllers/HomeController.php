<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Curso;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registros = Curso::all();

        return view('home', compact('registros'));
    }

    public function create(){
        return view('admin.create');
    }

    public function save(Request $req){
        $dados = $req->all();
        
        if(isset($dados['publicado'])){
            $dados['publicado'] = 'sim';
        }else{
            $dados['publicado'] = 'não';
        }

        Curso::create($dados);

        return redirect()->route('home');

       
    }

    public function update($id){
        $registro = curso::find($id);
        return view('admin.update',compact('registro'));

    }

    public function updateSave(Request $req, $id){
     $dados = $req->all();

     if(isset($dados['publicado'])){
        $dados['publicado'] = 'sim';
      }else{
        $dados['publicado'] = 'não';
     }

     Curso::find($id)->update($dados);

     return redirect()->route('home');

    }

    public function delete($id){
        Curso::find($id)->delete();
        return redirect()->route('home');
    }


}
