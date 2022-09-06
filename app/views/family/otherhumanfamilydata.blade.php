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

	<div class="col-md-9">

		<div class="well" style="padding: 15px">
   			 <h4><strong> Table: Families analysed for Other Human Multi gene Family</strong></h4><h6> List of Human multigene families whose members are dispersed on two or more human chromosomes, though these families are not residing on 2R/not 2R relevant paralogons but our search group has thoroughly investigated their history. Please click on particular family to view its members. </h6>
		</div>
	</div>
		<div class="col-md-3 pull-right">
            <div class="alert alert-defsult fade in" style="width:300px; padding: 8px 0; margin-bottom: 10px; background-color: #f5f5f5; ">                     
                <h4>&nbsp;&nbsp;Human Multi gene Family Summary</h4><hr style="margin: 10px 0; color: #f5f5f5; background-color: #f5f5f5;">
                        
                <strong>&nbsp;&nbsp;Paralogon:</strong>&nbsp;&nbsp;<div class="pull-right"><a href="#"><span class="label label-default">Other Human Multi gene Family</span>&nbsp;&nbsp;&nbsp;</a></div><br>          
                <strong>&nbsp;&nbsp;Number of Families:</strong>&nbsp;&nbsp;<div class="pull-right"><span class="label label-default">2</span>&nbsp;&nbsp;&nbsp;</div><br>
                <strong>&nbsp;&nbsp;Number of Family Members:</strong>&nbsp;&nbsp;<div class="pull-right"><span class="label label-default">7</span>&nbsp;&nbsp;&nbsp;</div><br>
                <strong>&nbsp;&nbsp;Number of Sequences:</strong>&nbsp;&nbsp;<div class="pull-right"><span class="label label-default">102</span>&nbsp;&nbsp;&nbsp;</div><br>
                            
            </div>
        </div>
    
	<div class= "col-md-12">
		<div class="well" style="padding: 5px">

    
	<table id="blogs" class="table table-striped table-hover">
		<thead>
			
			<tr>
				<th class="col-md-4">Gene Family Name</th>
				<th class="col-md-1">Years</th>
				<th class="col-md-2">Number of Included Taxa</th>
				<th class="col-md-4">Functions</th>
				<th class="col-md-1">Number of Sequences Included</th>
			</tr>

		</thead>
		<tbody>
		</tbody>

	</table>
	</div>
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
				"sAjaxSource": "{{ URL::to('Otherhumangenefamily/Otherhumangenefamilydata') }}",
				"fnDrawCallback": function ( oSettings ) {
					$(".iframe").colorbox({iframe:true, width:"80%", height:"80%"});
				}
			});
		});
	</script>
@stop
