@extends('site.layouts.default')

{{-- Web site Title --}}
@section('title')
{{{ $title }}} :: @parent
@stop

@section('keywords')Blogs administration @stop
@section('author')Laravel 4 Bootstrap Starter SIte @stop
@section('description')Blogs administration index @stop

{{-- Content --}}
@section('content')
	<div class="page-header">
		<h3>
			{{{ $title }}}
			<div class="pull-right">
				<a href="{{{ URL::to('admin/blogs/create') }}}" class="btn btn-small btn-info iframe"><span class="glyphicon glyphicon-plus-sign"></span> Create</a>
			</div>
		</h3>
	</div>

	<table id="blogs" class="table table-striped table-hover">
		<thead>
			<tr>
				<th class="col-md-4">Member Name</th>
				<th class="col-md-1">Chromosome Location</th>
				<th class="col-md-2">Protein Accession Number</th>
			</tr>
		</thead>
		<tbody>
		</tbody>
	</table>
@stop

{{-- Scripts --}}
@section('scripts')
	<script type="text/javascript">
		var oTable;
		$(document).ready(function() {
			oTable = $('#blogs').dataTable( {
				"sDom": "<'row'<'col-md-6'l><'col-md-6'f>r>t<'row'<'col-md-6'i><'col-md-6'p>>",
				"sPaginationType": "bootstrap",
				"oLanguage": {
					"sLengthMenu": "_MENU_ records per page"
				},
				"bProcessing": true,
				"bServerSide": true,
				"sAjaxSource": "{{ URL::to('hoxfamily/'.$memberId . '/data') }}",
				"fnDrawCallback": function ( oSettings ) {
					$(".iframe").colorbox({iframe:true, width:"80%", height:"80%"});
				}
			});
		});
	</script>
@stop