
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
                    <a href="#contenido_{{$idioma->id}}" 
                      class="idioma_{{$idioma->idioma->id}}" 
                      data-toggle="tab" 
                      aria-expanded="false">{{$idioma->idioma->descripcion}}<i class="@if($indexKey == 0) @else fa fa-times icon-delete @endif "></i></a>
                  </li>
            @endforeach
        @endif    
      </ul>

      <div class="tab-content">
        @foreach($obras->titulo_multilenguajes as $indexKey => $objeto)

              <div class="tab-pane fade  @if($indexKey == 0) active in @endif"  id="contenido_{{$objeto->id}}">
                <h3>Titulo de la Obra</h3>
                    <input 
                    type="text" 
                    class="form-control" 
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
                    <a href="#contenido_{{$idioma->id}}" class="idioma_{{$idioma->idioma->id}}" data-toggle="tab" aria-expanded="false">{{$idioma->idioma->descripcion}}<i class=""></i></a>
                  </li>
            @endforeach
        @endif    
      </ul>

      <div class="tab-content">
        @foreach($obras->contenido_obra_2s  as $indexKey => $objeto)
              <div class="tab-pane fade @if($indexKey==0) active in @endif" id="#contenido_{{$objeto->id}}">
                <h3>Contenido de la Obra</h3>
                    <textarea 
                    class="form-control" 
                    name="contenido_obra_2" 
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


{{-- introduccion --}}

    <div class="form-group">
      <ul class="nav nav-tabs">
         @if($obras->introduccion_2s)
              @foreach($obras->introduccion_2s  as $indexKey => $idioma)
                    @if($indexKey==0)
                    <li class="active">
                      @else
                    <li class="">
                     @endif
                      <a href="#contenido_c{{$idioma->id}}" class="idioma_{{$idioma->idioma->id}}" data-toggle="tab" aria-expanded="false">{{$idioma->idioma->descripcion}}<i class=""></i></a>
                    </li>
              @endforeach
          @endif    
        </ul>
      @foreach($obras->contenido_obra_2s  as $indexKey => $objeto)
              <div class="tab-pane fade @if($indexKey==0) active in @endif" id="#contenido_{{$objeto->id}}">
                <h3>Introducción</h3>

              <textarea 
              class="form-control" 
              name="introduccion"
              cols="30" 
              rows="10" 
              aria-describedby="emailHelp" 
              placeholder="Introducción de la obra" 
              @if($disabled) disabled @endif>
                        @if(isset($obras)) {{ $objeto->descripcion }} @endif
            </textarea>
          </div>
    @endforeach
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>

{{-- introduccion --}}


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


  <script>
    
    var servicios = {

      launch : (e) => {
        //ul id
        var ul_id = $(e.target).parent().parent().get(0).id;
        servicios.createTab(ul_id);
      },
      createTab : (ul_id) => {
            if(!ul_id)
              return false;
            servicios.idiomas(ul_id);
      },
      createContent: (ul_id) => {
        console.log("crear contenido");
      },
      seteo: () => {
        var that = this;
        that.c=0;
        //crear tab add
        $(".nav.nav-tabs").append('<li><a class="add" href=""><i class="fa fa-plus-circle"></i></a></li>');

        var elements =$(".nav.nav-tabs").each(function(i,e){
            that.c++;
            e.setAttribute('id','tab_'+that.c);
          });
        //add event remove
        servicios.removeTab(1);
      },
      goTopTab: (id) => {
        $("#"+id+" li:first").addClass("active");
        var id_contenido = $("#"+id+" li:first a").attr('href');
        $(id_contenido).addClass("active in");
        // console.log($("#"+id+" li:first a").attr('href'));
      },
      // id => id del tab
      // option => segun desde donde se crea
      // 1=> agregar el evento a los tab que se genera
      // 0=> agregar el evento desde boton con clase .add
      removeTab : (option,id=null) =>{
        switch(option) {
           case 1:
                $(" li a").on('click','.icon-delete',function(e){
                        //remove contenido
                        var tag_id = $(this).parent('a').attr('href');
                        //refrescar el tab
                        var primer_elemento = $(this).parent().parent('li').parent('ul').attr('id');
                        servicios.goTopTab(primer_elemento);
                        $(tag_id).remove();
                        // console.log(tag_id);
                        //remover el tab
                        $(this).parent().parent('li').remove();
                  });           
            break;
           case 0:
                  $("#"+id+" li a").off('click','.icon-delete');
                  $("#"+id+" li a").on('click','.icon-delete',function(e){
                      //remove contenido
                      var tag_id = $(this).parent('a').attr('href');
                      //refrescar el tab
                      var primer_elemento = $(this).parent().parent('li').parent('ul').attr('id');
                      servicios.goTopTab(primer_elemento);
                      $(tag_id).remove();
                      // console.log(tag_id);
                      //remover el tab
                      $(this).parent().parent('li').remove(); 
                   });
            break;
        }

      },
      create:(data,id) => {
            // siempre traera un dato por default
            var val = data[0].descripcion;
            var class_a = "idioma_"+data[0].id;
            var tag = $("#"+id+" li").last();
            var href = 'contenido_'+id+'_'+class_a;
            var link = '<a href="#'+href+'" class="'+class_a+'" data-toggle="tab" aria-expanded="false">'+val+'<i class="fa fa-times icon-delete"></i></a>';
            var li = '<li class="">'+link+'</li>';
            var newHtml = $(li);
            $(newHtml).insertBefore(tag);
            //event remove
            // id => id del tab
            servicios.removeTab(0,id);
            //crear el contenido
           var contenido = $("#"+id).next();
           //editar
           var img = $("#"+id).next().find('input[type=text], textarea').first().clone();
           //setear sus valores
          $(img).val('id');
           //var img  ='<input class="form-control" id="titulo_obra" name="titulo_obra" aria-describedby="emailHelp" placeholder="Titulo de la obra" value="" type="text">';

           var html = '<div class="tab-pane fade" id="'+href+'"><h3>Titulo de la Obra</h3></div>';
           var html2 = $(html).append(img);
            ($("#"+id).next(".tab-content")).prepend(html2);
      },
      idiomas: (id) =>{ 
        if(!id)
          return false;
        var array = [];
        $("#"+id+" a").each(function(i,e){
            if(e.className.split("_")[0]=='idioma'){
              array.push(e.className.split("_")[1]);
            }
        });
        /*obtener el idioma que esta en el campo*/
        var data= {idiomas:array};
          $.ajax({
            url:"/getIdiomas",
            type: 'POST',
            headers: {'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')},
            beforeSend:function(){

            },
            data:data,
            success:function(data){
                  return (data.length>0)?servicios.create(data,id):false;
            },
            error: function(data) {
                  var errors = data.responseJSON;
                  console.log(errors);
              }     
          });

      },
    }

    $(document).ready(function(){
        servicios.seteo();
        $(".add").click(function(e){
          e.preventDefault();
            servicios.launch(e);
        })
    })
  </script>