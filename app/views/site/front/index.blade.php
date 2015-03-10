@extends('site.layouts.default')
{{-- Content --}}
@section('content')

	
	<div class= "col-md-10 col-md-push-1">
	<div class="jumbotron " >
        		 <div class= "container " >
        			  <img src="{{asset('assets/img/WGD.png')}}" class="img-responsive img-rounded pull-right" alt="Responsive image">
 							 
 							  <h2 class="no-margin">VGA~ Vertebrate Genome Architecture</h2>
 							  <p> VGA is a database which throws light on the concept of 2R and !2R. It elucidate the evolution of organismal complexity in animal lineage.</p>
					 		  <p><a button type="button" class="btn btn-info" href="#" role="button">Read more</a></p>
				 </div>
		</div>
					
		 

		 <div class= "col-sm-6 col-md-3">
		 	<div class="panel panel-default">
		 		<div class="panel-heading">
				 <h4 class="panel-title"><b>Synteny</b></h4>
				 </div>
   			<div class="panel-body">
		 	
		 	 <p class="text-justify"> Gene families with members on at least three of the human HOX-cluster bearing chromosomes 2, 7, 12 and 17. HOX-cluster paralogons might have been shaped by two rounds of duplications.</p>
		 	 <p><a href="{{{ URL::to('synteny-info') }}}">Details</a> </p>
		</div>
		</div>
		</div>

		<div class= "col-sm-6 col-md-3">
			<div class="panel panel-default">
				<div class="panel-heading">
				 <h4 class="panel-title"><b>Co-duplicated groups</b></h4>
				 </div>
   			<div class="panel-body">
		 	  <p class="text-justify"> Four distinct co-duplication events which occurred within the time window of vertebrate–invertebrate and tetrapod–bony fish divergence.</p>
			  <p><a href="{{asset('assets/img/Toplogy.png')}}">Details</a></p>
		</div>
		</div>
		</div>

	<div class= "col-sm-6 col-md-3">
		<div class="panel panel-default">
			<div class="panel-heading">
				 <h4 class="panel-title"><b>Time Period</b></h4>
				 </div>
   			<div class="panel-body">
		 	   <p class="text-justify"> The relative timing of duplication events that diversified the multigene families residing on human HOX-cluster paralogons.</p>
			   <p><a href="{{asset('assets/img/TP.png')}}">Details</a></p>
			</div>
		</div>
	</div>


	<div class= "col-sm-6 col-md-3">
		<div class="panel panel-default">
			<div class="panel-heading">
				 <h4 class="panel-title"><b>Phylogenetic Trees</b></h4>
				 </div>
   			<div class="panel-body">
			   
		 	    <p class="text-justify"> Th phylogenetic comparission was carried out using the N.J & ML trees.</p>
		 			<div class= "col-sm-6 col-md-6">
		 	   			<h5 class="no-margin"><b>N.J Trees</b></h5>
		 	   			<p class="text-justify"> <small> The phylogenetic comparission was carried out using the N.J trees. </small></p>
						<p><a href="{{asset('assets/img/TP.png')}}">Details</a></p>
					</div>
				<div class= "col-sm-6 col-md-6">
		 	   		<h5 class="no-margin"><b>M.L Trees</b></h5>
		 	   		<p class="text-justify"> <small>The phylogenetic comparission was carried out using the M.L trees. </small></p>
					<p><a href="{{asset('assets/img/TP.png')}}">Details</a></p>
				</div>
  			</div>
		</div>
   </div>
</div>

   
   <div class= " col-md-2 col-md-pull-11" >
   	<div class="panel panel-default">
   		<div class="panel-heading">
				 <h4 class="panel-title"><span class="glyphicon glyphicon-hand-right"></span><b> Get Start</b></h4>
				 </div>
   		<div class="panel-body">
   					
   				<ul>
                    <li><a href="{{{ URL::to('background') }}}">Background</a></li>
                    <li><a href="{{{ URL::to('methodology') }}}">Methodology</a></li>
               </ul>
   
   </div>
   </div>
   </div>
   

	
@stop