@extends('admin.layouts.modal')

{{-- Content --}}
@section('content')
	{{-- Edit Blog Form --}}
	<form class="form-horizontal" enctype="multipart/form-data" accept-charset="UTF-8" method="post" action="@if (isset($post)){{ URL::to('admin/summary/' . $post->SID . '/edit') }}@endif" autocomplete="off">
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
                        <label class="control-label" for="name">Family Name</label>
						<input class="form-control" type="text" name="name" id="name" value="{{{ Input::old('name', isset($post) ? $post->Family_Name : null) }}}" />
						{{ $errors->first('name', '<span class="help-block">:message</span>') }}
					</div>
				</div>
				<!-- ./ post title -->
	<!-- Post Title -->
				<div class="form-group {{{ $errors->has('hsa21') ? 'error' : '' }}}">
		    <div class="col-md-12">
                        <label class="control-label" for="hsa21">Hsa 2</label>
						<input class="form-control" type="text" name="hsa21" id="hsa21" value="{{{ Input::old('hsa21', isset($post) ? $post->Hsa21 : null) }}}" />
						{{ $errors->first('hsa21', '<span class="help-block">:message</span>') }}
					</div>
				</div>
				<!-- ./ post title -->
	<!-- Post Title -->
				<div class="form-group {{{ $errors->has('hsa73') ? 'error' : '' }}}">
		    <div class="col-md-12">
                        <label class="control-label" for="hsa73">Hsa 7</label>
						<input class="form-control" type="text" name="hsa73" id="hsa73" value="{{{ Input::old('hsa73', isset($post) ? $post->Hsa73 : null) }}}" />
						{{ $errors->first('hsa73', '<span class="help-block">:message</span>') }}
					</div>
				</div>
				<!-- ./ post title -->
	<!-- Post Title -->
					<div class="form-group {{{ $errors->has('hsa12') ? 'error' : '' }}}">
		    <div class="col-md-12">
                        <label class="control-label" for="hsa12">Hsa 12</label>
						<input class="form-control" type="text" name="hsa12" id="hsa73" value="{{{ Input::old('hsa12', isset($post) ? $post->Hsa12 : null) }}}" />
						{{ $errors->first('hsa12', '<span class="help-block">:message</span>') }}
					</div>
				</div>
				<!-- ./ post title -->
	<!-- Post Title -->
				<div class="form-group {{{ $errors->has('hsa17') ? 'error' : '' }}}">
		    <div class="col-md-12">
                        <label class="control-label" for="hsa17">Hsa 17</label>
						<input class="form-control" type="text" name="hsa17" id="hsa17" value="{{{ Input::old('hsa17', isset($post) ? $post->Hsa17 : null) }}}" />
						{{ $errors->first('hsa17', '<span class="help-block">:message</span>') }}
					</div>
				</div>
				<!-- ./ post title -->
	<!-- Post Title -->
				<div class="form-group {{{ $errors->has('cons') ? 'error' : '' }}}">
		    <div class="col-md-12">
                        <label class="control-label" for="cons">Consistency_with_HOX_Phylogeny</label>
						<input class="form-control" type="text" name="cons" id="cons" value="{{{ Input::old('cons', isset($post) ? $post->Consistency_with_HOX_Phylogeny : null) }}}" />
						{{ $errors->first('cons', '<span class="help-block">:message</span>') }}
					</div>
				</div>
				<!-- ./ post title -->
		<!-- Post Title -->
			<div class="form-group {{{ $errors->has('top') ? 'error' : '' }}}">
		    <div class="col-md-12">
                        <label class="control-label" for="top">Topology</label>
						<input class="form-control" type="text" name="top" id="top" value="{{{ Input::old('top', isset($post) ? $post->Topology : null) }}}" />
						{{ $errors->first('top', '<span class="help-block">:message</span>') }}
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
