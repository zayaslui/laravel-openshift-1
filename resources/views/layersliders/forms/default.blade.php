
  <div class="form-group">
    <label for="tabla">Tabla</label>
   <input type="text" class="form-control" id="tabla" name="tabla" aria-describedby="emailHelp" placeholder="Tabla"  @if(isset($layerslider)) value="{{ $layerslider->tabla }}" @endif @if($disabled) disabled @endif>
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>

  <div class="form-group">
    <label for="clase">Clase</label>
    <input type="text" class="form-control" id="clase" name="clase" aria-describedby="emailHelp" placeholder="Clase" @if(isset($layerslider)) value="{{ $layerslider->clase }}"@endif @if($disabled) disabled @endif>
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>

  <div class="form-group">
    <label for="style">Style</label>
    <input type="text" class="form-control" id="style" name="style" placeholder="Style" @if(isset($layerslider)) value="{{ $layerslider->style }}" @endif @if($disabled) disabled @endif>
  </div>