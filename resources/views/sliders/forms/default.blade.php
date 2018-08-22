
  <div class="form-group">
    <label for="tabla">Layerslider_id</label>
   <input type="text" class="form-control" id="tabla" name="name" aria-describedby="emailHelp" placeholder="Tabla"  @if(isset($slider)) value="{{ $slider->layerslider_id }}" disabled @endif>
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>

  <div class="form-group">
    <label for="clase">Clase</label>
    <input type="text" class="form-control" id="clase" name="clase" aria-describedby="emailHelp" placeholder="Clase" @if(isset($slider)) value="{{ $slider->clase }}" disabled @endif>
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>

  <div class="form-group">
    <label for="style">Data-ls</label>
    <input 
      type="text" 
      class="form-control" 
      id="style" 
      name="style" 
      placeholder="Style" @if(isset($slider)) value="{{ $slider->data_ls }}" disabled @endif>
  </div>