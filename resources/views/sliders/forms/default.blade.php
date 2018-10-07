
  <div class="form-group">
    {{-- <label for="layerslider_id">Layerslider_id</label> --}}
   <input type="hidden" class="form-control" id="layerslider_id" name="layerslider_id" aria-describedby="emailHelp" placeholder=""  
    @if(isset($slider)) value="{{ $slider->layerslider_id }}" @elseif(isset($datos)) value="{{$datos['layerslider_id']}}" @endif>
    {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> --}}
  </div>
<div class="row">
  
  <div class="form-group col-md-8">
    <label for="clase">Clase</label>
    <input type="text" class="form-control" id="clase" name="clase" aria-describedby="emailHelp" placeholder="Clase" @if(isset($slider)) value="{{ $slider->clase }}" @else  @endif>
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
</div>

<div class="row">
    <div class="form-group col-md-8">
      <label for="data_ls">Data-ls</label>
      <input 
        type="text" 
        class="form-control" 
        id="data_ls" 
        name="data_ls" 
        placeholder="Style" @if(isset($slider)) value="{{ $slider->data_ls }}" @endif>
    </div>
</div>