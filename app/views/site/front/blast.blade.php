@extends('site.layouts.default')
{{-- Content --}}
@section('content')
<div class= "container">
	<div class="row">
<div class= "col-sm-6 col-md-12" style="height: 530px;">
				<div class="panel panel-primary">
						<div class="panel-heading">
							 <h4 class="panel-title text-center">Search via Sequence</h4>
				 		</div> 
				 	<div class="panel-body">
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
									    					<button type="submit" class="btn btn-primary btn-sm ">SEARCH</button>
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
</div>



@stop