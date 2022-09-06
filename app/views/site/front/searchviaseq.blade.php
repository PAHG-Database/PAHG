@extends('site.layouts.default')
{{-- Content --}}
@section('content')
<div class= "container">
	<div class="row">
		
		<div class= "col-sm-6 col-md-7 col-md-push-2"  style=" height: 550px;">
			<div class="panel panel-primary" style=" height: 350px;" id="svs">
				<div class="panel-heading">
					<h4 class="panel-title text-center">Search via Sequence</h4>
				</div> 
				<div class="panel-body">
					<div class="row">
						<div class="well">
							<form name="searchForm" action="{{url('blastresult')}}" target="_blank" enctype="multipart/form-data" method="post" class="f-wrap-1 all" id="searchForm">
								<input type="hidden" name="_token" value="{{{ csrf_token() }}}"/>
									<div id="query" class="section">                
									   	<fieldset>
									     	<legend>Enter Query Sequence</legend>       
									      	<div class="qs">
									        	<div class="formblock all" id="qseq">
									           		<label for="seq">Please enter Protein FASTA sequence of minimum 100 in amino acid length.</label>
									           		<textarea id="seq" class="reset" rows="5" cols="84" name="QUERY"></textarea> <br>
									            	<!-- This of course would have to change with selected program -->
									            	<input type="hidden" id="db" value="protein" name="db">
									         	</div>        
									       	</div><!-- /.qs -->
										</fieldset>   
									</div>
									<div id="choosedb" class="section">
										<div class="searchInfo all">
											<div class="summary">
									    		<button type="submit" class="btn btn-primary btn-lg btn-group-justified dropdown-toggle ">SEARCH</button>
									  		</div>
									  	</div>
									  </div>
									</form>
								</div>
							</div>
						</div>	
					</div>	
			<p xmlns="http://www.w3.org/1999/xhtml" id="sites-page-title-header" style="" align="middle">
<span id="sites-page-title" dir="ltr" style="outline: none"><strong><i><b>* BLAST is against very well curated protein sequences from diverse set of animal species that available in PAHG database.</b></strong> </span>
</i></p>                                                                                                                                                                                                                                                         
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
