@extends('site.layouts.default')
{{-- Content --}}
@section('content')
<div class= "container">
	<div class="row">
		<div class= "col-sm-6 col-md-5" >
			<div class="panel panel-primary " style=" height: 390px;" id="svf">
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
									<button type="submit" class="btn btn-primary btn-lg btn-block">SEARCH</button>
								</form>
		   					</div>
						</div>
					</div>
			</div>
		</div>

			<div class= "col-sm-6 col-md-7" style=" height: 530px;">
				<div class="panel panel-primary" style=" height: 390px;" id="svs">
						<div class="panel-heading">
							 <h4 class="panel-title text-center">Search via Sequence</h4>
				 		</div> 
				 	
						<div class="panel-body">
							<div class="row">
								<div class="well">
									<form name="searchForm" action="{{url('blastresult')}}" enctype="multipart/form-data" method="post" class="f-wrap-1 all" id="searchForm">
									      <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
									        <div id="query" class="section">                
									   			<fieldset>
									     			 <legend>Enter Query Sequence</legend>       
									      				<div class="qs">
									        				<div class="formblock all" id="qseq">
									           					 <label for="seq">Please enter Protein FASTA sequence of minimum 100 in aminoacid length.               
									               						                            
									           					 </label>
									            
									           						 <textarea id="seq" class="reset" rows="5" cols="80" name="QUERY"></textarea>
									           							 <br>
									            									<!-- This of course would have to change with selected program -->
									            							<input type="hidden" id="db" value="protein" name="db">
									         				</div>        
									       				</div><!-- /.qs -->

															      											  
									   			</fieldset>   
											</div>


									       		<div id="choosedb" class="section">
													<div class="searchInfo all">
														<div class="summary">
									    					<button type="submit" class="btn btn-primary btn-lg btn-block">SEARCH</button>
									  					</div>
									  					<div class="searchsummary">
									   						 <div class="openNewWin all">
															      <span class="infoTitle">Search</span>
															      <span class="dbInfo">Local database</span>
															      <span class="infoTitle">by</span>
															      <span class="progInfo">performing</span>
									    						  <span class="progDescr">protein-protein search approach </span><br>
									      							<input class="newwin" type="checkbox" name="NEWWIN" id="nw1" form="searchForm" wintype="random">
									        						<label class="inlineLabel all" for="nw1">Show results in a new window</label>
									     					 </div>
									  					</div>
													</div>
												</div>
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
