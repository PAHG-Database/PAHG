@extends('site.layouts.default')
{{-- Content --}}
@section('content')

	
<div class= "col-md-10 col-md-push-1">
					<div class="jumbotron " >
        		 		<div class= "container " >
        			 		 <img src="{{asset('assets/img/main.png')}}" class="img-responsive img-rounded pull-right" alt="Responsive image" style="width:400px;height:300px;">
 							  <h2 class="no-margin text-primary">VGA~ Vertebrate Genome Architecture</h2>
 							  <p> VGA is a database which throws light on the concept of 2R and !2R. It elucidate the evolution of organismal complexity in animal lineage.</p>
					 		  <p><a button type="button" class="btn btn-info" href="#" role="button">Read more</a></p>
				 		</div>
					</div>
</div>
<div class="content row">
<aside class= " col-md-2 col-md-pull-11 " >
   					<div class="panel panel-primary">
   						<div class="panel-heading">
							 <h4 class="panel-title"><span class="glyphicon glyphicon-hand-right"> Get Start </span></h4>
				 		</div>
   							<div class="panel-body">
   								<ul class="nav nav-tabs nav-stacked">
				                    <li><a href="{{{ URL::to('background') }}}">Background</a></li>
				                    <li><a href="{{{ URL::to('methodology') }}}">Methodology</a></li>
				                    <li><a href="{{{ URL::to('/lab') }}}">Evolutionary Genomics Lab</a></li>
				                    <li><a href="{{{ URL::to('/blast') }}}">Blast</a></li>
				                    
               					</ul>
   							</div>
  					</div>
  				</aside>
</div>

		 <div class= "col-sm-6 col-md-3">
		 	<div class="panel panel-primary">
		 		<div class="panel-heading">
				 	<p><a href="{{{ URL::to('synteny-info') }}}" ><b> <font color="#FFFFFF" >Synteny</font></b></a></p>
				 </div>
   			<div class="panel-body">

                      <p><a href="{{{ URL::to('synteny-info') }}}" class="nodeco"><img src="{{asset('assets/img/synteny.png')}}" alt="Synteny" style="width:200px;height:120px;"></a></p>
                   	  
             </div>
		</div>
		</div>

		<div class= "col-sm-6 col-md-3">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<p><a href="{{asset('assets/img/topology/ci.png')}}" ><b> <font color="#FFFFFF" >Co-duplicated groups</font></b></a></p>
				 </div>
				 <div class="panel-body">
								<style>
								        #carousel-example-generic
								        {
								        	width:200px;
								        }
								</style>
							<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
								<ol class="carousel-indicators">
									<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
									<li data-target="#carousel-example-generic" data-slide-to="1" ></li>
									<li data-target="#carousel-example-generic" data-slide-to="2" ></li>
									<li data-target="#carousel-example-generic" data-slide-to="3" ></li>
									<li data-target="#carousel-example-generic" data-slide-to="4" ></li>
								</ol>
										<div class="carousel-inner">
												<div class="item active">
													<img src="{{asset('assets/img/topology/a.png')}}" alt="Topology" style="width:200px;height:130px;">
														
												</div>
												<div class="item">
													<img src="{{asset('assets/img/topology/b.png')}}" alt="Topology" style="width:200px;height:130px;">
														
												</div>
												<div class="item">
													<img src="{{asset('assets/img/topology/c.png')}}" alt="Topology" style="width:200px;height:130px;">
														
												</div>
												<div class="item">
													<img src="{{asset('assets/img/topology/d.png')}}" alt="Topology" style="width:200px;height:130px;">
														
												</div>
												<div class="item">
													<img src="{{asset('assets/img/topology/e.png')}}" alt="Topology" style="width:200px;height:130px;">
												</div>
										</div>
								<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
								<span class="glyphicon glyphicon-chevron-left"></span></a>
								<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
								<span class="glyphicon glyphicon-chevron-right"></span></a>
							</div>
			  			</div>
		</div>
		</div>

	<div class= "col-sm-6 col-md-3">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<p><a href="{{asset('assets/img/TP.png')}}" ><b> <font color="#FFFFFF" >Time Period</font></b></a></p>
				 </div>
   			<div class="panel-body">
		 	   <p><a href="{{asset('assets/img/TP.png')}}" class="nodeco"><img src="{{asset('assets/img/TP.png')}}" alt="Topology" style="width:200px;height:120px;"></a></p>
			</div>
		</div>
	</div>
	<div class= "col-sm-6 col-md-3">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<p><a href="{{asset('assets/img/t.png')}}" ><b> <font color="#FFFFFF" >Phylogenetic Trees</font></b></a></p>				 
				 </div>
						<div class="panel-body">
								<style>
								        #carousel-example-generic
								        {
								        	width:200px;
								        }
								</style>
							<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
								<ol class="carousel-indicators">
									<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
									<li data-target="#carousel-example-generic" data-slide-to="1" ></li>
									<li data-target="#carousel-example-generic" data-slide-to="2" ></li>
								</ol>
										<div class="carousel-inner">
												<div class="item active">
													<img src="{{asset('assets/img/t.png')}}" alt="Topology" style="width:200px;height:130px;">
														<div class="carousel-caption">
															<h2 class="no-margin text-info">N.J</h2>	
														</div>
												</div>
												<div class="item">
													<img src="{{asset('assets/img/t.png')}}" alt="Topology" style="width:200px;height:130px;">
														<div class="carousel-caption">
															<h2 class="text-info">M.L</h2>
														</div>
												</div>
										</div>
								<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
								<span class="glyphicon glyphicon-chevron-left"></span></a>
								<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
								<span class="glyphicon glyphicon-chevron-right"></span></a>
							</div>
			  			</div>
			</div>
   </div>
</div>

   
   

	
@stop