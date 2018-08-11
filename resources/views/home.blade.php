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
       @can('visualizar', $registro)
        <tr>
          <td>{{$registro->name}}</td>
          <td>{{$registro->descricao}}</td>
          <td>{{$registro->carga}}</td>
          <td>{{$registro->valor}}</td>
          <td>{{$registro->publicado}}</td>
          @can('editar', $registro)
          <td><a href="{{route('cadastro.update',$registro->id)}}">Editar</a></td>
          <td><a href="{{route('cadastro.delete',$registro->id)}}">Excluir</a></td>
          @endcan 
        </tr>
       @endcan 
       @endforeach
     </tbody>
   </table> 
 
 </div>

@endsection
