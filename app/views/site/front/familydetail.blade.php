@extends('site.layouts.default')
{{-- Content --}}
@section('content')

<div class="row">
	<h1 class="text-center">{{$family['GeneFamilyName']}}</h1>
    <div class="col-lg-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                Details
            </div>
            <div class="panel-body">
                <h4>NoIncludedTaxa
                    <small>{{$family['NoIncludedTaxa']}}</small>
                </h4>
                <h4>Function
                    <small>{{$family['Function']}}</small>
                </h4>
                <h4>NoSeqIncluded
                    <small>{{$family['NoSeqIncluded']}}</small>
                </h4>
                <h4>TPName
                    <small>{{$family['TPName']}}</small>
                </h4>
                <h4>Year
                    <small>{{$family['Year']}}</small>
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
				  <div class="col-sm-12 col-md-3">
				    <div class="thumbnail">
						<a href="data:image/jpeg;base64, {{{ $family['TPPic'] }}}" data-toggle="lightbox" data-title="TPPic" data-footer="" title="">
							<img src="data:image/jpeg;base64, {{{ $family['TPPic'] }}}" class="img-responsive" title="" style="width:200px">
						</a>
				      <div class="caption">
				        <h3>TPPic</h3>
				      </div>
				    </div>
				  </div>
				  <div class="col-sm-12 col-md-3">
				    <div class="thumbnail">
				    <a href="data:image/jpeg;base64, {{{ $family['NjTreePic'] }}}" data-toggle="lightbox" data-title="NjTreePic" data-footer="" title="">
							<img src="data:image/jpeg;base64, {{{ $family['NjTreePic'] }}}" class="img-responsive" title="" style="width:200px">
						</a>
				      
				      <div class="caption">
				        <h3>NjTreePic</h3>
				      </div>
				    </div>
				  </div>
				  <div class="col-sm-12 col-md-3">
				    <div class="thumbnail">
				     <a href="data:image/jpeg;base64, {{{ $family['MLTreePic'] }}}" data-toggle="lightbox" data-title="MLTreePic" data-footer="" title="">
							<img src="data:image/jpeg;base64, {{{ $family['MLTreePic'] }}}" class="img-responsive" title="" style="width:200px">
						</a>
				      
				      <div class="caption">
				        <h3>MLTreePic</h3>
				      </div>
				    </div>
				  </div>
				 <div class="col-sm-12 col-md-3">
				    <div class="thumbnail">
				    <a href="data:image/jpeg;base64, {{{ $family['Tree'] }}}" data-toggle="lightbox" data-title="Tree" data-footer="" title="">
							<img src="data:image/jpeg;base64, {{{ $family['Tree'] }}}" class="img-responsive" title="" style="width:200px">
						</a>
				      
				      <div class="caption">
				        <h3>Tree</h3>
				      </div>
				    </div>
				  </div>
				  <div class="col-sm-12 col-md-3">
				    <div class="thumbnail">
				     <a href="data:image/jpeg;base64, {{{ $family['Syntany'] }}}" data-toggle="lightbox" data-title="Sytany" data-footer="" title="">
							<img src="data:image/jpeg;base64, {{{ $family['Syntany'] }}}" class="img-responsive" title="" style="width:200px">
						</a>
				      
				      <div class="caption">
				        <h3>Syntany</h3>
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

@stop
