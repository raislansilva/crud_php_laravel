
        <div class="form-group" >
            <label for="usr">Name:</label>
            <input type="text" name="name" class="form-control" value="{{isset($registro->name)? $registro->name:''}}">
        </div>

        <div class="form-group">
            <label for="pwd">Descrição:</label>
            <input type="text" name="descricao" class="form-control" value="{{isset($registro->descricao)? $registro->descricao:''}}">
        </div>

        <div class="form-group">
            <label for="pwd">Carga:</label>
            <input type="text" name="carga" class="form-control" value="{{isset($registro->carga)? $registro->carga:''}}">
        </div>

        <div class="form-group">
            <label for="pwd">Valor:</label>
            <input type="number" name="valor" class="form-control" value="{{isset($registro->valor)? $registro->valor:''}}">
        </div>

        <div class="form-group">
           <label><input type="checkbox" name="publicado" {{isset($registro->publicado) && $registro->publicado =='sim' ? 'checked': '' }} value="true">Publicado</label>
       </div>
       
      
 