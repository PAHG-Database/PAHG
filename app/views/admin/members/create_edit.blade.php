@extends('admin.layouts.modal')

{{-- Content --}}
@section('content')
	{{-- Edit Blog Form --}}
	<form class="form-horizontal" enctype="multipart/form-data" accept-charset="UTF-8" method="post" action="@if (isset($fid)){{ URL::to('admin/members/create/' . $fid) }}@endif @if (isset($mid)){{ URL::to('admin/members/' . $mid . '/edit') }}@endif" autocomplete="off">
		<!-- CSRF Token -->
		<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
		<!-- ./ csrf token -->

		<!-- Tabs Content -->
		<div class="tab-content">
			<!-- General tab -->
			<div class="tab-pane active" id="tab-general">
				<!-- Post Title -->
				<div class="form-group {{{ $errors->has('name') ? 'error' : '' }}}">
		    			<div class="col-md-12">
                        			<label class="control-label" for="name">Member Name</label>
						<input class="form-control" type="text" name="name" id="name" value="{{{ Input::old('name', isset($post) ? $post->MemberName : null) }}}" />
						{{ $errors->first('name', '<span class="help-block">:message</span>') }}
					</div>
				</div>
				<!-- ./ post title -->
	<!-- Post Title -->
				<div class="form-group {{{ $errors->has('loc') ? 'error' : '' }}}">
		    	<div class="col-md-12">
                        <label class="control-label" for="loc">Chromosome Location</label>
						<input class="form-control" type="text" name="loc" id="loc" value="{{{ Input::old('loc', isset($post) ? $post->ChrLocation : null) }}}" />
						{{ $errors->first('loc', '<span class="help-block">:message</span>') }}
					</div>
				</div>
				<!-- ./ post title -->
	<!-- Post Title -->
				<div class="form-group {{{ $errors->has('acc') ? 'error' : '' }}}">
		    <div class="col-md-12">
                        <label class="control-label" for="acc">Protein Accession Number</label>
						<input class="form-control" type="text" name="acc" id="acc" value="{{{ Input::old('acc', isset($post) ? $post->HumnaProAccNo : null) }}}" />
						{{ $errors->first('acc', '<span class="help-block">:message</span>') }}
					</div>
				</div>
				<!-- ./ post title -->
	<!-- Post Title -->
				<div class="form-group {{{ $errors->has('topology') ? 'error' : '' }}}">
		    <div class="col-md-12">
                        <label class="control-label" for="topology">Topology</label>
						{{ Form::file('tp','',array('id'=>'tp','class'=>'tp')) }}
						{{ $errors->first('topology', '<span class="help-block">:message</span>') }}
					</div>
				</div>
				<!-- ./ post title -->
				<!-- ./ post title -->
				<div class="form-group {{{ $errors->has('seqfile') ? 'error' : '' }}}">
		    <div class="col-md-12">
                        <label class="control-label" for="syntany">Sequence</label>
						{{ Form::file('seqfile','',array('id'=>'seq','class'=>'seq')) }}
						{{ $errors->first('sequence', '<span class="help-block">:message</span>') }}
					</div>
				</div>
	<!-- Post Title -->
				<div class="form-group {{{ $errors->has('syntany') ? 'error' : '' }}}">
		    <div class="col-md-12">
                        <label class="control-label" for="syntany">Syntany</label>
						{{ Form::file('sn','',array('id'=>'sn','class'=>'sn')) }}
						{{ $errors->first('syntany', '<span class="help-block">:message</span>') }}
					</div>
				</div>

			
				
	<!-- Post Title -->
	
			</div>
			<!-- ./ general tab -->
		</div>
		<!-- ./ tabs content -->

		<!-- Form Actions -->
		<div class="form-group">
			<div class="col-md-12">
				<element class="btn-cancel close_popup">Cancel</element>
				<button type="reset" class="btn btn-default">Reset</button>
				<button type="submit" class="btn btn-success">Update</button>
			</div>
		</div>
		<!-- ./ form actions -->
	</form>
@stop
