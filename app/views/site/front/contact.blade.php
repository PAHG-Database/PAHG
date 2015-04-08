@extends('site.layouts.default')
{{-- Content --}}
@section('content')
<div class= "container">

	<div class="row">
		
			<div class= "col-md-7">
					<div class="panel panel-primary">
						<div class="panel-heading">
							 <h4 class="panel-title text-center">Contact Form</h4>
				 		</div> 
							<div class="panel-body">
								<form method="post"  action="" role="form">
									
				 					<div class="form-group">
   										 <label for="contactname">Name</label>
   											 <input type="text" class="form-control" id="contactname" placeholder="Enter Name">
 									</div>

				 						<div class="form-group has-success has-feedback ">
   										 		<label class="control-label" for="contactemail">Email address</label>
   											 	<div class="input-group">
    												<span class="input-group-addon">@</span>
   											 		<input type="email" class="form-control" id="contactemail" placeholder="Enter email">
   										</div>
   										</div>
 											<div class="form-group">
    											<label for="adress">Address</label>
    											<input type="text" class="form-control" id="adress" placeholder="Adress">
  											</div>
  										<div class="form-group">
   										 <label for="contactsubject">Subject</label>
   											 <input type="text" class="form-control" id="contactsubject" placeholder="Enter Subject">
 										</div>
 											<div class="form-group">
   										 		<label for="contactmessage">Message</label>
   											 	<textarea class="form-control" id="contactmessage" rows="3" ></textarea>
 											</div>
 									<div class="form-group">
    									<label for="exampleInputFile">File input</label>
    										<input type="file" id="exampleInputFile">
   
  									</div>

  									
  									<button type="button" id="contactbtn" class="btn btn-primary">Submit</button>
 								</form>
  							</div>
  					</div>

			</div>
			<div class= "col-md-5">
				
				 		<div class= "col-md-12 ">
			<div class="panel panel-primary">
					<div class="panel-heading">
				 		<h4 class="panel-title text-center">Contact Adress</h4>
					</div>
   				<div class="panel-body">
					<address>
						<strong>National center for Bioinformatics</strong><br>
						Quaid-i-Azam University Islamabad,45320, Pakistan<br>
						Tel: +92-051 9064-4066<br>
						Email: hoxinfo.qau@gmail.com
					</address>
				</div>
			</div>
		</div>
		<div class="panel panel-primary">
						<div class="panel-heading">
							 <h4 class="panel-title text-center">National Center for Bioinformatics</h4>
				 		</div> 
				 		<div class="panel-body">
					<td class="sites-layout-tile sites-tile-name-content-2"><div dir="ltr"><div class="sites-embed-align-left-wrapping-off"><div class="sites-embed-border-off sites-embed sites-embed-full-width" style="width:100%;"><div class="sites-embed-object-title" style="display:none;">Untitled Location</div><div class="sites-embed-content sites-embed-type-map"><iframe src="//maps.google.com/?ll=33.748461%2C73.148249&amp;spn=0.012775%2C0.022273&amp;ie=UTF8&amp;z=15&amp;t=roadmap&amp;sll=33.748461%2C73.148249&amp;sspn=0.012775%2C0.022273&amp;q=33.750117%2C73.148822%20(Untitled%20Location)&amp;output=embed" title="Untitled Location" width="100%" height="500" frameborder="0" class="map_embed" scrolling="no"></iframe></div></div></div></div></td>
						
						</div>
</div>
	</div>

		
</div>
 
@stop