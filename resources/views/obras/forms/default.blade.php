
  <div class="form-group">
    {{-- <label for="titulo_obra">Titulo Obra</label> --}}
    
    <ul class="nav nav-tabs">
       @if($obras->titulo_multilenguaje)
            @foreach($obras->titulo_multilenguajes  as $indexKey => $idioma)
                  @if($indexKey == 0)
                  <li class="active">
                    @else
                  <li class="">
                   @endif
                    <a href="#{{$idioma->id}}" data-toggle="tab" aria-expanded="false">{{$idioma->idioma->descripcion}}</a>
                  </li>
            @endforeach
        @endif    
      </ul>

      <div class="tab-content">
        @foreach($obras->titulo_multilenguajes as $indexKey => $objeto)

              <div class="tab-pane fade  @if($indexKey == 0) active in @endif"  id="{{$objeto->id}}">
                {{-- <h3>{{$objeto->descripcion}}</h3> --}}
                <h3>Titulo de la Obra</h3>
                    <input 
                    type="text" 
                    class="form-control" 
                    id="titulo_obra" 
                    name="titulo_obra" 
                    aria-describedby="emailHelp" 
                    placeholder="Titulo de la obra"  @if(isset($obras)) value="{{$objeto->descripcion}}" @endif @if($disabled) disabled @endif>
              </div>  
        @endforeach
        </div> 
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>

  {{-- contenido_obra --}}
    <div class="form-group">
    {{-- <label for="titulo_obra">Titulo Obra</label> --}}
    
    <ul class="nav nav-tabs">
       @if($obras->contenido_obra_2s)
            @foreach($obras->contenido_obra_2s  as $indexKey => $idioma)
                  @if($indexKey==0)
                  <li class="active">
                    @else
                  <li class="">
                   @endif
                    <a href="#{{$idioma->id}}" data-toggle="tab" aria-expanded="false">{{$idioma->idioma->descripcion}}</a>
                  </li>
            @endforeach
        @endif    
      </ul>

      <div class="tab-content">
        @foreach($obras->contenido_obra_2s  as $indexKey => $objeto)
              <div class="tab-pane fade @if($indexKey==0) active in @endif" id="{{$objeto->id}}">
                <h3>Contenido de la Obra</h3>
                    <textarea 
                    class="form-control" 
                    name="contenido_obra_2" 
                    id="contenido_obra_2"
                    cols="30" 
                    rows="10" 
                    aria-describedby="emailHelp" 
                    placeholder="Contenido de la obra" 
                    @if($disabled) disabled @endif>@if(isset($obras)) {{ $objeto->descripcion }} @endif</textarea>
              </div>  
        @endforeach
        </div> 
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
  {{-- contenido_obra --}}


    {{-- <div class="form-group"> --}}
    {{-- <label for="contenido_obra">Contenido Obra</label> --}}

{{--     <textarea 
    class="form-control" 
    name="contenido_obra" 
    id="contenido_obra" 
    cols="30" 
    rows="10" 
    aria-describedby="emailHelp" 
    placeholder="Contenido de la obra" 
    @if($disabled) disabled @endif>@if(isset($obras)) {{ $obras->contenido_obra }} @endif
  </textarea>
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
 --}}




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