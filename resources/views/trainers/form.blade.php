<h2>PEGADA</h2>
<label>Descripción</label>
@if (empty($trainer))
<input name="descripcion" type="text"  class="form-control">
<div class="form-group">
        <label for="">Nombre</label>
        <input name="nombre" type="text" class="form-control">
    </div>
@else
<input name="descripcion" type="text" value="{{$trainer->descripcion}}" class="form-control">
<div class="form-group">
        <label for="">Nombre</label>
        <input name="nombre" type="text" class="form-control" value="{{$trainer->name}}">
    </div>
@endif
        
    <div class="form-group">
    <label for="">AVATAR</label>
    <input type="file" name="avatar" >
    </div>
</div>
