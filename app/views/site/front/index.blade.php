@extends('site.layouts.default')
{{-- Content --}}
@section('content')

	
	<div class= "col-md-11">
	<div class="jumbotron " >
        		 <div class= "container " >
        			  <img src="{{asset('assets/img/ohno.png')}}" class="img-responsive img-rounded pull-right" alt="Responsive image">
 							 
 							  <h2 class="no-margin">VGA~ Vertebrate Genome Architecture</h2>
 							  <p> VGA is a database which throws light on the concept of 2R and !2R. It elucidate the evolution of organismal complexity in animal lineage.</p>
					 		  <p><a button type="button" class="btn btn-info" href="#" role="button">Read more</a></p>
				 </div>
		</div>
					
		 

		 <div class= "col-sm-6 col-md-3">
		 	 <h4 class="no-margin">Synteny</h4>
		 	 <p class="text-justify"> Gene families with members on at least three of the human HOX-cluster bearing chromosomes 2, 7, 12 and 17. HOX-cluster paralogons might have been shaped by two rounds of duplications.</p>
		 	 <p><a href="{{{ URL::to('synteny-info') }}}">Details</a> </p>
		</div>

		<div class= "col-sm-6 col-md-3">
			  <h4 class="no-margin">Co-duplicated groups</h4>
		 	  <p class="text-justify"> Four distinct co-duplication events which occurred within the time window of vertebrate–invertebrate and tetrapod–bony fish divergence.</p>
			  <p><a href="{{asset('assets/img/Toplogy.png')}}">Details</a></p>
		</div>

		<div class= "col-sm-6 col-md-3">
			   <h4 class="no-margin">Time Period</h4>
		 	   <p class="text-justify"> The relative timing of duplication events that diversified the multigene families residing on human HOX-cluster paralogons.</p>
			   <p><a href="{{asset('assets/img/TP.png')}}">Details</a></p>
		</div>

		<div class= "col-sm-6 col-md-3">
			    <h4 class="no-margin">Phylogenetic Trees</h4>
		 	    <p class="text-justify"> Th phylogenetic comparission was carried out using the N.J & ML trees.</p>
		 	<div class= "col-sm-6 col-md-6">
		 	   	<h5 class="no-margin"><b>N.J Trees</b></h5>
		 	   <p class="text-justify"> <small> The phylogenetic comparission was carried out using the N.J trees. </small></p>
			</div>
				<div class= "col-sm-6 col-md-6">
		 	   	<h5 class="no-margin"><b>M.L Trees</b></h5>
		 	   <p class="text-justify"> <small>The phylogenetic comparission was carried out using the M.L trees. </small></p>
		</div>
   </div>

   </div>
   <div class= "col-md-1">
   					<h4> Get Start:</h4>
   				<ul>
                    <li><a href="{{{ URL::to('background') }}}">Background</a></li>
                    <li><a href="{{{ URL::to('methodology') }}}">Methodology</a></li>
               </ul>
   </div>
   
   

	
@stop