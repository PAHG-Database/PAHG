@extends('site.layouts.default')
{{-- Content --}}
@section('content')
<div class= "container">
	<div class="row">
		<div class= "col-sm-6 col-md-7 col-md-push-2" style=" height: 550px;" >
			<div class="panel panel-primary "  id="svf">
				<div class="panel-heading" >
					<h4 class="panel-title text-center">Search via Family</h4>
				</div> 
				<div class="panel-body" id="svfb">
					<div class="row">
						<div class="well">
							<form method="GET" action="{{url('search')}}">
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
									<button type="submit" id="search-family" class="btn btn-primary btn-lg btn-block">SEARCH</button>
							</form>
		   				</div>
					</div>
				</div>
			</div>
		</div>
		
	</div>
</div>
@stop

@section('scripts')
<script>
				function selectFamily(e){
					if($('#select-state').selectize().val() == ''){
						alert('Please Select a Family');
						e.preventDefault();
					}
				}
				document.getElementById("search-family").addEventListener("click", function(event){
					selectFamily(event);
				    
				});
				$(document).ready(function(){
					var xhr;
					var mid, $mid='';
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
						},
						onInitialize: function(value){
							this.clear();
						},
						disableCaret : true
					});
					$select_city = $('#select-city').selectize({
						valueField: 'id',
						labelField: 'name',
						searchField: ['name']
					});
					select_city  = $select_city[0].selectize;
					select_state = $select_state[0].selectize;
					select_city.disable();
					
				});
				
</script>
@stop
