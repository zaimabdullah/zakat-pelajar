@extends('layouts.app')

@section('content')
	<h1 class="text-center">Senarai Permohonan Zakat</h1>
	<div class="table-responsive">
		<table class="table table-striped table-bordered">
			<tr>
				<th>Bil.</th>
				<th>Pelajar</th>
				<th>No. Telefon</th>
				<th>No. Matrik</th>
				<th>Fakulti</th>
				<th>Kod Program</th>
				<th>CGPA</th>
				<th>Fungsi</th>
				{{-- <th>Penjaga</th>
				<th>Gaji</th>
				<th>Tanggungan</th>
				<th>Waktu Dihantar</th> --}}
			</tr>
			@if(count($posts) > 0)
				@foreach($posts as $x => $post)
					<tr>
						<td>{{$x+1}}</td> {{-- +1 sebab PHP iterator mula dengan 0 --}}
						<td>{{$post->pelajar}}</td>
						<td>{{$post->no_telefon}}</td>
						<td>{{$post->no_matrik}}</td>
						<td>{{$post->fakulti}}</td>
						<td>{{$post->kod_program}}</td>
						<td>{{$post->cgpa}}</td>
						<td><a class="btn btn-primary" href="/posts/{{$post->id}}" role="button">Butiran</a></td>
						{{-- <td>{{$post->penjaga}}</td>
						<td>{{$post->gaji}}</td>
						<td>{{$post->tanggungan}}</td>
						<td>{{$post->created_at}}</td> --}}
					</tr>			
				@endforeach
				{{$posts->links()}}
			@else
				<p>Tiada Permohonan yang dibuat</p>
			@endif		
		</table>
	</div>
@endsection