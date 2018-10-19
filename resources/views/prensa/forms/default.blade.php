
  <div class="form-group">
    <label for="descripcion">Descripcion</label>
   <input type="text" class="form-control" id="descripcion" name="descripcion" aria-describedby="emailHelp" placeholder="Descripcion"  @if(isset($prensa)) value="{{ $prensa->descripcion }}" @endif @if($disabled) disabled @endif>
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>

  <div class="form-group">
    <label for="link">Link</label>
   <input type="text" class="form-control" id="link" name="link" aria-describedby="emailHelp" placeholder="Link"  @if(isset($prensa)) value="{{ $prensa->link }}" @endif @if($disabled) disabled @endif>
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
