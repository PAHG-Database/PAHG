@extends('site.layouts.default')
{{-- Content --}}
@section('content')

<div class= "col-sm-6 col-md-12">
<div class="row">
	<h1 class="text-center"> Search Page</h1>
	<div class="well">
		<form method="GET" action="index.php/search">
			<div class="form-group control-group">
				<label for="select-beast">Family:</label>
				<select id="select-state" name="fid" placeholder="Pick a Family...">
					<option value="">Select a family...</option>
					@foreach ($posts as $post)
					<option value="{{$post->FID}}">{{$post->GeneFamilyName}}</option>
					@endforeach
				</select>
				<label for="select-beast" style="margin-top:20px">Members:</label>
				<select id="select-city" name="mid" placeholder="Select a member..."></select>
			</div>
			<button type="submit" class="btn btn-primary btn-lg btn-block">SEARCH</button>
		</form>
    </div>
</div>
	
@stop

@section('scripts')
<script>
var xhr;
				var select_state, $select_state;
				var select_city, $select_city;
				$select_state = $('#select-state').selectize({
					onChange: function(value) {
						if (!value.length) return;
						select_city.disable();
						select_city.clearOptions();
						select_city.load(function(callback) {
							xhr && xhr.abort();
							xhr = $.ajax({
								url: 'getmembers/' + value,
								success: function(results) {
									select_city.enable();
									callback(results);
								},
								error: function() {
									callback();
								}
							})
						});
					}
				});
				$select_city = $('#select-city').selectize({
					valueField: 'id',
					labelField: 'name',
					searchField: ['name']
				});
				select_city  = $select_city[0].selectize;
				select_state = $select_state[0].selectize;
				select_city.disable();
        	
</script>
@stop