
@extends('layouts.app')

@section('content')
 <div class="border border-secondary">
   <h3>Cadastro de Curso</h3>
   <form class="form2" action="{{route('cadastro.updateSave', $registro->id)}}" method="post" enctype="multipart/form-data">
      {{csrf_field()}}
      <input type="hidden" name="_method" value="put">
      @include('admin.form')
      
      <button class="btn btn-primary">Atualizar</button>
   <form>
</div>    
@endsection