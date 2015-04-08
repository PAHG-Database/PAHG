@extends('site.layouts.default')
{{-- Content --}}
@section('content')
		<div id="content-wrap">                    
		 	<h4 class="panel-title text-center"><strong>Protein Blast</strong></h4>              
		 </div>

        <div id="query" class="section">                
   <fieldset>
                  <legend>Enter Query Sequence</legend>       
                  <div class="qs">
                     <div class="formblock all" id="qseq">
                        <label for="seq">Please enter FASTA sequence(s)                              
                        </label>
                        <div class="ui-helper-reset" aria-live="assertive">
                                                                                                 
                        </div><!-- ARIA -->
                        <textarea id="seq" class="reset" rows="5" cols="80" name="QUERY"></textarea>
                        <br>
                        <!-- This of course would have to change with selected program -->
                        <input type="hidden" id="db" value="protein" name="db">
                     </div>         
                  </div><!-- /#qrange -->      
                  </div><!-- /.qs -->

                  <label for="upl" class="m">Or, upload file</label>
                  <div class="input  all">
                  <input type="file" id="upl" name="QUERYFILE">             
                  <a class="helplink jig-ncbitoggler ui-ncbitoggler ui-widget" title="Upload query file help" id="uploadHelp" href="#" aria-disabled="false" role="button" aria-expanded="false"><span class="ui-ncbitoggler-master-text"></span>
            <span class="ui-icon ui-icon-triangle-1-e"></span></a>
                  <div class="ui-helper-reset" aria-live="assertive">
                  <p class="helpbox ui-ncbitoggler-slave ui-ncbitoggler" aria-hidden="true">
                   Use the browse button to upload a file from your local disk.      
                  </p>      
                  </div><!-- ARIA -->
                      </div>
                  
               <label for="qtitle" class="m">Job Title</label>
               <div class="input  all">
                  <input name="JOB_TITLE" id="qtitle" class="reset" size="80" value=""><br>
                  <span class="help">Enter a descriptive title for your BLAST search</span>      
                  
               </div> 
                          
               </fieldset>   
       </div>
 
         

  
<div class="all blastp" id="optSection">
<div id="sopts">
<!-- Note: tables in the page used only to get around an IE presentation bug.
           Problem: the first <input> tag after a floated element causes
                    a line break that it shouldn't cause. Happens only in IE.
           If you can fix this bug, do so, and remove the tables from this page.
-->

   
   <div class="searchInfo all">

  <div class="summary">
    <input type="image" src="images/blastButton.jpg" id="b1" class="blastbutton" alt="BLAST" mouseovimg="images/blastButtonOver.jpg" mouseoutimg="images/blastButton.jpg" mousedownimg="images/blastButtonDown.jpg" mouseupimg="images/blastButtonOver.jpg">
  </div>

  <div class="searchsummary">
    <div class="openNewWin all">
      <span class="infoTitle">Search</span>
      <span class="dbInfo">local database to match the patch</span>
      <span class="infoTitle">using</span>
      <span class="progInfo">
        Blastp
      </span>
      <span class="progDescr">
        (protein-protein BLAST) 
      </span>
      <br>
      <input class="newwin" type="checkbox" name="NEWWIN" id="nw1" form="searchForm" wintype="random">
        <label class="inlineLabel all" for="nw1">Show results in a new window</label>
      </div>
  </div>
</div>
 
    	

@stop
