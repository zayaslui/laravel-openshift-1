
  <div class="form-group">
    <label for="titulo_obra">Titulo Obra</label>
    
    <ul class="nav nav-tabs">
        <li class="">
          <a href="#1" data-toggle="tab" aria-expanded="false">Español</a>
        </li>
        <li class="active">
          <a href="#2" data-toggle="tab" aria-expanded="true">Inglés</a>
        </li>
      </ul>
      <div class="tab-content">
        <div class="tab-pane active fade" id="1">
          <h3>Titulo de la Obra</h3>
              <input 
              type="text" 
              class="form-control" 
              id="titulo_obra" 
              name="titulo_obra" 
              aria-describedby="emailHelp" 
              placeholder="Titulo de la obra"  @if(isset($obras)) value="{{ $obras->titulo_obra }}" @endif @if($disabled) disabled @endif>
        </div>          
        <div class="tab-pane fade" id="2">
          <h3>Title of the Work</h3>
                <input 
              type="text" 
              class="form-control" 
              id="titulo_obra2" 
              name="titulo_obra2" 
              aria-describedby="emailHelp" 
              placeholder="Titulo de la obra en ingles" >
        </div>
        </div>
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
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

  <div class="form-group">
    <label for="layerslider_id">LayerSlider</label>
    <select class="form-control" id="layerslider_id" name="layerslider_id" @if($disabled) disabled @endif>
      <option value="">Ninguno</option>
        @if(isset($layersliders))
            @foreach($layersliders  as $layerslider)
                <option
                @if(isset($obras->layerslider_id))
                    @if($obras->layerslider_id == $layerslider->id) 
                        selected 
                    @endif
                @endif
                value="{{$layerslider->id}}">
                    {{$layerslider->descripcion}}
              </option>
            @endforeach
        @endif
    </select>
  </div>