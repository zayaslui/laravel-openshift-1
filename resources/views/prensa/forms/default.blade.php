
  <div class="form-group">
    <label for="titulo_obra">Titulo Obra</label>
   <input type="text" class="form-control" id="titulo_obra" name="titulo_obra" aria-describedby="emailHelp" placeholder="Titulo de la obra"  @if(isset($obras)) value="{{ $obras->titulo_obra }}" @endif @if($disabled) disabled @endif>
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>

    <div class="form-group">
    <label for="contenido_obra">Contenido Obra</label>
    <textarea class="form-control" name="contenido_obra" id="contenido_obra" cols="30" rows="10" aria-describedby="emailHelp" placeholder="Contenido de la obra" @if($disabled) disabled @endif>@if(isset($obras)) {{ $obras->contenido_obra }} @endif</textarea>
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>

    <div class="form-group">
    <label for="introduccion">Introducción</label>
    <textarea class="form-control" name="introduccion" id="introduccion" cols="30" rows="10" aria-describedby="emailHelp" placeholder="Introducción de la obra" @if($disabled) disabled @endif>@if(isset($obras)) {{ $obras->introduccion }} @endif</textarea>
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
