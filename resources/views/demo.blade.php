@extends('layouts.principal')
@section('content')

<!---start-content---->
<div class="content">	
		<!-- layerslayer -->
	<div id="slider-wrapper">
	</div>
</div>

<script>
$.ajax({
      url: 'puta',
      type: "post",
      headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
      data: {},
      success: function(data){
      console.log(data);
      }
    });
</script>


@stop