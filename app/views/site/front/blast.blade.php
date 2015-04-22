@extends('site.layouts.default')
{{-- Content --}}
@section('content')
<div class= "col-sm-6 col-md-12" style="height: 530px;">
<form name="searchForm" action="{{url('blastresult')}}" enctype="multipart/form-data" method="post" class="f-wrap-1 all" id="searchForm">
      <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
     <h2 class="text-center"><b><span style="color:#80BFFF">VLAST  </span> </b></h2>
        <div id="query" class="section">                
   			<fieldset>
     			 <legend>Enter Query Sequence</legend>       
      				<div class="qs">
        				<div class="formblock all" id="qseq">
           					 <label for="seq">Please enter Protein FASTA sequence of minimum 100 in aminoacid length.               
               						<a href="#" title="Clear query" class="clearlink" fieldtoclear="seq" id="clearquery">Clear</a>                              
           					 </label>
            
           						 <textarea id="seq" class="reset" rows="5" cols="80" name="QUERY"></textarea>
           							 <br>
            									<!-- This of course would have to change with selected program -->
            							<input type="hidden" id="db" value="protein" name="db">
         				</div>        
       				</div><!-- /.qs -->

						      	<label for="upl" class="m">Or, upload file</label>
						     	<div class="input  all">
						      		<input type="file" id="upl" name="QUERYFILE">             
						      			<a class="helplink jig-ncbitoggler ui-ncbitoggler ui-widget" title="Upload query file help" id="uploadHelp" href="#" aria-disabled="false" role="button" aria-expanded="false"><span class="ui-ncbitoggler-master-text"><span>[?]</span></span>
											<span class="ui-icon ui-icon-triangle-1-e"></span></a>
						     					<div class="ui-helper-reset" aria-live="assertive">
						      						<p class="helpbox ui-ncbitoggler-slave ui-ncbitoggler" aria-hidden="true">
						      							 Use the browse button to upload sequence file in fasta from your local disk.     
						      						</p>      
						      					</div><!-- ARIA -->
						        </div>
      
							  <label for="qtitle" class="m">Job Title</label>
							   <div class="input  all">
							      <input name="JOB_TITLE" id="qtitle" class="reset" size="80" value=""><br>
							      <span class="help">Enter a descriptive title for your VLAST search</span>      
							      <a class="helplink jig-ncbitoggler ui-ncbitoggler ui-widget" title="Job title help" href="#" id="titleHelp" aria-disabled="false" role="button" aria-expanded="false"><span class="ui-ncbitoggler-master-text"><span>[?]</span></span>
								</div> 
   			</fieldset>   
		</div>

        <div id="choosedb" class="section">
				<div class="searchInfo all">
					<div class="summary">
    					<input type="image" src="{{asset('assets/img/vlast.png')}}" id="b1" class="blastbutton" alt="VLAST" mouseovimg="images/blastButtonOver.jpg" mouseoutimg="images/blastButton.jpg" mousedownimg="images/blastButtonDown.jpg" mouseupimg="images/blastButtonOver.jpg">
  					</div>

 					<div class="searchsummary">
   						 <div class="openNewWin all">
						      <span class="infoTitle">Search</span>
						      <span class="dbInfo">Local database</span>
						      <span class="infoTitle">using</span>
						      <span class="progInfo">Blastp</span>
    						  <span class="progDescr">(protein-protein VLAST) </span><br>
      							<input class="newwin" type="checkbox" name="NEWWIN" id="nw1" form="searchForm" wintype="random">
        						<label class="inlineLabel all" for="nw1">Show results in a new window</label>
     					 </div>
  					</div>
				</div>
		</div>
 </form>
</div>


@stop