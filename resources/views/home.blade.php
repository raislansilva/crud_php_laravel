@extends('layouts.app')

@section('content')
  
<div class="container">
     <a class="btn blue" href="{{route('cadastro.curso')}}" >Adicionar</a>     

     <table class="table">
     <thead>
       <tr>
         <th>curso</th>
         <th>Descrição</th>
         <th>Carga H</th>
         <th>Valor</th>
         <th>Status</th>
       </tr>
     </thead>
     <tbody>
       @foreach($registros as $registro)
        <tr>
          <td>{{$registro->name}}</td>
          <td>{{$registro->descricao}}</td>
          <td>{{$registro->carga}}</td>
          <td>{{$registro->valor}}</td>
          <td>{{$registro->publicado}}</td>
          <td><a href="{{route('cadastro.update')}}">Editar</a></td>
        </tr>
       @endforeach
     </tbody>
   </table> 
 
 </div>

@endsection
