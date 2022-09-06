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
		<div class="well" style="padding: 15px">
		<h4>
			Members Table
			<a class="btn btn-primary pull-right" type="button" href="{{{ URL::to('/Frizzledfamilydata') }}}"><i class="icon-arrow-left icon-white"></i> Back to Family</a>
		</h4>
		</div>
	</div>
<div class="well" style="padding: 5px">
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
</div>
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
