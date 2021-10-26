<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<div>
	<select name="district" id="district" class="form-control input-lg dynamic" data-dependent="moharea">
		<option value="">Select District</option>
		@foreach($district as $district)
		<option value="{{$district->district}}">{{$district->district}}</option>

		@endforeach

	</select>
</div>
<div>
	<select name="moharea" id="moharea" class="form-control input-lg dynamic" data-dependent="phirange">
		<option value="">Select MOH Range</option>

	</select>
</div>
<div>
	<select name="phirange" id="phirange" class="form-control input-lg dynamic" data-dependent="contactno">
		<option value="">Select PHI Range</option>

	</select>
</div>
<div>
	<select name="contactno" id="contactno" class="form-control input-lg dynamic">
		<option value="">Select PHI Range</option>

	</select>
</div>
{{ csrf_field() }}
</body>
</html>

<script>
	$(document).ready(function(){

		$('.dynamic').change(function(){
			if($(this).val() != '')
			{
				var select = $(this).attr("id");
				var value = $(this).val();
				var dependent = $(this).data('dependent');
				var _token = $ ('input[name="_token"]').val();
				$.ajax({
					url:"{{route('dynamicdependent.fetch') }}", 
					method:"POST",
					data:{select:select, value:value, _token:_token,
					 dependent:dependent},
					 success:function(result)
					 {
					 	$('#'+dependent).html(result);
					 }
				})
			}


		});

$('#district').change(function(){
	$('#moharea').val('');
	$('#phirange').val('');
});

$('#moharea').change(function(){
  $('#phirange').val('');

});

	});



</script>




