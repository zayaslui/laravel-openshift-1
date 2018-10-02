@extends('layouts.principal')
@section('content')

<!---start-content---->
<div class="content">	
		<!-- layerslayer -->
	<div id="slider-wrapper">
	</div>
</div>
<div id="script_start_layerslider">
  
</div>
<script>
$.ajax({
      url: 'create_layerslider',
      type: "post",
      headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
      data: {},
      success: function(data){
        $("#slider-wrapper").append(data.arr.html);
        $("#script_start_layerslider").append(data.arr.script);
      }
    });

</script>




@stop