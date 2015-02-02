@extends('site.layouts.default')
{{-- Content --}}
@section('content')
<div class="panel-group" id="accordion">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" class="">Family Details</a>
            </h4>
        </div>
        <div id="collapseOne" class="panel-collapse collapse" aria-expanded="true" style="">
            <div class="panel-body">
            	<div class="row">
					<h1 class="text-center">{{$family['family']['GeneFamilyName']}}</h1>
				    <div class="col-lg-4">
				        <div class="panel panel-default">
				            <div class="panel-heading">
				                Details
				            </div>
				            <div class="panel-body">
				                <h4>NoIncludedTaxa
				                    <small>{{$family['family']['NoIncludedTaxa']}}</small>
				                </h4>
				                <h4>Function
				                    <small>{{$family['family']['Function']}}</small>
				                </h4>
				                <h4>NoSeqIncluded
				                    <small>{{$family['family']['NoSeqIncluded']}}</small>
				                </h4>
				                <h4>TPName
				                    <small>{{$family['family']['TPName']}}</small>
				                </h4>
				                <h4>Year
				                    <small>{{$family['family']['Year']}}</small>
				                </h4>
				               
				            </div>
				            <!-- /.panel-body -->
				        </div>
				        <!-- /.panel -->
				    </div>
				    <!-- /.col-lg-4 -->
				    <div class="col-lg-8">
				        <div class="panel panel-default">
				            <div class="panel-heading">
				                Images
				            </div>
				            <div class="panel-body">
					            <div class="row">
								  <div class="col-sm-6 col-md-4">
								    <div class="thumbnail">
								    <a href="data:image/jpeg;base64, {{{ $family['family']['TPPic'] }}}" data-toggle="lightbox" data-title="TPPic" data-footer="" title="">
										<img src="data:image/jpeg;base64, {{{ $family['family']['TPPic'] }}}" class="img-responsive" title="" style="width:200px">
									</a>
								      
								      <div class="caption">
								        <h3>TPPic</h3>
								      </div>
								    </div>
								  </div>
								  <div class="col-sm-6 col-md-4">
								    <div class="thumbnail">
								    <a href="data:image/jpeg;base64, {{{ $family['family']['NjTreePic'] }}}" data-toggle="lightbox" data-title="NjTreePic" data-footer="" title="">
										<img src="data:image/jpeg;base64, {{{ $family['family']['NjTreePic'] }}}" class="img-responsive" title="" style="width:200px">
									</a>
								      <div class="caption">
								        <h3>NjTreePic</h3>
								      </div>
								    </div>
								  </div>
								  <div class="col-sm-6 col-md-4">
								    <div class="thumbnail">
								    <a href="data:image/jpeg;base64, {{{ $family['family']['MLTreePic'] }}}" data-toggle="lightbox" data-title="MLTreePic" data-footer="" title="">
										<img src="data:image/jpeg;base64, {{{ $family['family']['MLTreePic'] }}}" class="img-responsive" title="" style="width:200px">
									</a>
								      <div class="caption">
								        <h3>MLTreePic</h3>
								      </div>
								    </div>
								  </div>
								</div>
				            </div>
				            <!-- /.panel-body -->
				        </div>
				        <!-- /.panel -->
				    </div>
				    <!-- /.col-lg-4 -->
				</div>
            </div>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" class="" aria-expanded="true">Member Details</a>
            </h4>
        </div>
        <div id="collapseTwo" class="panel-collapse collapse in" aria-expanded="true" style="">
            <div class="panel-body">
            	<div class="row">
					<h1 class="text-center">{{$family['member']['MemberName']}}</h1>
				    <div class="col-lg-4">
				        <div class="panel panel-default">
				            <div class="panel-heading">
				                Details
				            </div>
				            <div class="panel-body">
				                <h4>ChrLocation
				                    <small>{{$family['member']['ChrLocation']}}</small>
				                </h4>
				                <h4>HumnaProAccNo
				                    <small><a href="http://www.uniprot.org/uniprot/{{$family['member']['HumnaProAccNo']}}" target="_blank" >{{$family['member']['HumnaProAccNo']}}</a></small>
				                </h4>
				            </div>
				            <!-- /.panel-body -->
				        </div>
				        <!-- /.panel -->
				    </div>
				    <!-- /.col-lg-4 -->
				    <div class="col-lg-8">
				        <div class="panel panel-default">
				            <div class="panel-heading">
				                Images
				            </div>
				            <div class="panel-body">
					            <div class="row">
								  <div class="col-sm-6 col-md-4">
								    <div class="thumbnail">
								    <a href="data:image/jpeg;base64, {{{ $family['member']['Topology'] }}}" data-toggle="lightbox" data-title="Topology" data-footer="" title="">
										<img src="data:image/jpeg;base64, {{{ $family['member']['Topology'] }}}" class="img-responsive" title="" style="width:200px">
									</a>
								      
								      <div class="caption">
								        <h3>TPPic</h3>
								      </div>
								    </div>
								  </div>
								  <div class="col-sm-6 col-md-4">
								    <div class="thumbnail">
								    <a href="data:image/jpeg;base64, {{{ $family['member']['Syntany'] }}}" data-toggle="lightbox" data-title="Syntany" data-footer="" title="">
										<img src="data:image/jpeg;base64, {{{ $family['member']['Syntany'] }}}" class="img-responsive" title="" style="width:200px">
									</a>
								      
								      <div class="caption">
								        <h3>NjTreePic</h3>
								      </div>
								    </div>
								  </div>
								</div>
				            </div>
				            <!-- /.panel-body -->
				        </div>
				        <!-- /.panel -->
				    </div>
				    <!-- /.col-lg-4 -->
				</div>
            </div>
        </div>
    </div>
</div>


@stop