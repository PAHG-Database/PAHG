@extends('admin.layouts.modal')

{{-- Content --}}
@section('content')
	{{-- Edit Blog Form --}}
	<table id="blogs" class="table table-striped table-hover">
		<thead>
			<tr>
				<th class="col-md-4">Name</th>
				<th class="col-md-1">Chrm Location</th>
				<th class="col-md-2">Human PA No.</th>
				<th class="col-md-4">Topology</th>
				<th class="col-md-1">Syntany</th>
				
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>{{{ $post->MemberName }}}</td> 
				<td>{{{ $post->ChrLocation }}}</td> 
				<td>{{{ $post->HumnaProAccNo }}}</td>  
				<td><img src="data:image/jpeg;base64,{{{ $post->Topology }}}" width="200" height="300"></td> 
				<td><img src="data:image/jpeg;base64,{{{ $post->Syntany }}}" width="200" height="300"></td> 
			</tr>
		</tbody>
	</table>
@stop
