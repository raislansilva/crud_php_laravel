@extends('layouts.app')

@section('content')
 <div class="border border-secondary">
   <h3>Cadastro de Curso</h3>
   <form class="form2" action="{{route('cadastro.save')}}" method="post" enctype="multipart/form-data">
      {{csrf_field()}}
      @include('admin.form')
      
      <button class="btn btn-primary">Salvar</button>
   <form>
</div>    
@endsection