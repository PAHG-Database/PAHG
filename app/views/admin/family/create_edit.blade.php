@extends('admin.layouts.modal')

{{-- Content --}}
@section('content')
	{{-- Edit Blog Form --}}
	<form class="form-horizontal" enctype="multipart/form-data" accept-charset="UTF-8" method="post" action="@if (isset($post)){{ URL::to('admin/family/' . $post->FID . '/edit') }}@endif" autocomplete="off">
		<!-- CSRF Token -->
		<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
		<!-- ./ csrf token -->

		<!-- Tabs Content -->
		<div class="tab-content">
			<!-- General tab -->
			<div class="tab-pane active" id="tab-general">
				<!-- Post Title -->
				<div class="form-group {{{ $errors->has('year') ? 'error' : '' }}}">
		    <div class="col-md-12">
                        <label class="control-label" for="year">Select Year</label>
						<input class="form-control" type="date" name="year" id="year" value="{{{ Input::old('year', isset($post) ? $post->Year.'-01-01' : null) }}}" />
						{{ $errors->first('year', '<span class="help-block">:message</span>') }}
					</div>
				</div>
				<!-- ./ post title -->
	<!-- Post Title -->
				<div class="form-group {{{ $errors->has('genefamily') ? 'error' : '' }}}">
		    <div class="col-md-12">
                        <label class="control-label" for="genefamily">Gene Family</label>
						<input class="form-control" type="text" name="genefamily" id="genefamily" value="{{{ Input::old('genefamily', isset($post) ? $post->GeneFamilyName : null) }}}" />
						{{ $errors->first('genefamily', '<span class="help-block">:message</span>') }}
					</div>
				</div>
				<!-- ./ post title -->
	<!-- Post Title -->
				<div class="form-group {{{ $errors->has('taxa') ? 'error' : '' }}}">
		    <div class="col-md-12">
                        <label class="control-label" for="taxa">No of included Taxa</label>
						<input class="form-control" type="text" name="taxa" id="taxa" value="{{{ Input::old('taxa', isset($post) ? $post->NoIncludedTaxa : null) }}}" />
						{{ $errors->first('taxa', '<span class="help-block">:message</span>') }}
					</div>
				</div>
				<!-- ./ post title -->
	<!-- Post Title -->
				<div class="form-group {{{ $errors->has('function') ? 'error' : '' }}}">
		    <div class="col-md-12">
                        <label class="control-label" for="function">Function</label>
						<input class="form-control" type="text" name="function" id="function" value="{{{ Input::old('function', isset($post) ? $post->Function : null) }}}" />
						{{ $errors->first('function', '<span class="help-block">:message</span>') }}
					</div>
				</div>
				<!-- ./ post title -->
	<!-- Post Title -->
				<div class="form-group {{{ $errors->has('seq') ? 'error' : '' }}}">
		    <div class="col-md-12">
                        <label class="control-label" for="seq">No of Sequence Included</label>
						<input class="form-control" type="text" name="seq" id="seq" value="{{{ Input::old('seq', isset($post) ? $post->NoSeqIncluded : null) }}}" />
						{{ $errors->first('seq', '<span class="help-block">:message</span>') }}
					</div>
				</div>

				<div class="form-group {{{ $errors->has('seqfile') ? 'error' : '' }}}">
		    <div class="col-md-12">
                        <label class="control-label" for="syntany">Invertebrate Sequence</label>
						{{ Form::file('seqfile','',array('id'=>'seq','class'=>'seq')) }}
						{{ $errors->first('sequence', '<span class="help-block">:message</span>') }}
					</div>
				</div>
												<!-- NEW CODE -->
				<div class="form-group {{{ $errors->has('alignfile') ? 'error' : '' }}}">
		    <div class="col-md-12">
                        <label class="control-label" for="alignment">Alignment File</label>
						{{ Form::file('alignfile','',array('id'=>'alignfile','class'=>'alignfile')) }}
						{{ $errors->first('alignment', '<span class="help-block">:message</span>') }}
					</div>
				</div>
												<!-- NEW CODE -->

				<!-- ./ post title -->
	<!-- Post Title -->
				<div class="form-group {{{ $errors->has('tp') ? 'error' : '' }}}">
		    <div class="col-md-12">
                        <label class="control-label" for="tp">Time Period Picture</label>
						<input class="form-control" type="file" name="tp" id="tp"/>
						{{ $errors->first('tp', '<span class="help-block">:message</span>') }}
					</div>
				</div>
				<!-- ./ post title -->
		<!-- Post Title -->
				<div class="form-group {{{ $errors->has('nj') ? 'error' : '' }}}">
		    <div class="col-md-12">
                        <label class="control-label" for="nj">NJ Tree Picture</label>
						<input class="form-control" type="file" name="nj" id="nj"/>
						{{ $errors->first('nj', '<span class="help-block">:message</span>') }}
					</div>
				</div>
				<!-- ./ post title -->
	<!-- Post Title -->
				<div class="form-group {{{ $errors->has('ml') ? 'error' : '' }}}">
		    <div class="col-md-12">
                        <label class="control-label" for="title">ML Tree Picture</label>
						<input class="form-control" type="file" name="ml" id="ml"/>
						{{ $errors->first('ml', '<span class="help-block">:message</span>') }}
					</div>
				</div>
				<!-- ./ post title -->
	<!-- Post Title -->
				<div class="form-group {{{ $errors->has('tree') ? 'error' : '' }}}">
		    <div class="col-md-12">
                        <label class="control-label" for="tree">Combine Topology</label>
						<input class="form-control" type="file" name="tree" id="tree"/>
						{{ $errors->first('tree', '<span class="help-block">:message</span>') }}
					</div>
				</div>
				<!-- ./ post title -->
<!-- Post Title -->
				<div class="form-group {{{ $errors->has('syntanyy') ? 'error' : '' }}}">
		    <div class="col-md-12">
                        <label class="control-label" for="syntany">Combine Synteny </label>
						<input class="form-control" type="file" name="syntany" id="syntany"/>
						{{ $errors->first('syntany', '<span class="help-block">:message</span>') }}
					</div>
				</div>
				<!-- ./ post title -->


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
