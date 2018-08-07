@extends('layouts.app')

@section('content')
	<h1 class="text-center">Membuat Permohonan</h1>
	<h3>Maklumat Pelajar</h3>
	<hr>
	{!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'post']) !!}
    	<div class="form-group">
    		{{Form::label('pelajar', 'Nama Pelajar')}}
    		{{Form::text('pelajar', $post->pelajar, ['class' => 'form-control', 'placeholder' => 'Nama Pelajar'])}}
    	</div>
    	<div class="form-row">
    		<div class="form-group col-md-6">
    			{{Form::label('no_telefon', 'No H/p')}}
    			{{Form::text('no_telefon', $post->no_telefon, ['class' => 'form-control', 'placeholder' => 'No Telefon'])}}
    		</div>
    		<div class="form-group col-md-6">
    			{{Form::label('no_matrik', 'No Matrik')}}
    			{{Form::text('no_matrik', $post->no_matrik, ['class' => 'form-control', 'placeholder' => 'No Matrik'])}}
    		</div>
    	</div>
    	<div class="form-row">
    		<div class="form-group col-md-6">
    			{{Form::label('fakulti', 'Fakulti')}}
    			{{Form::select('fakulti', ['FSKM' => 'Fakulti Sains Komputer dan Matematik', 'FP' => 'Fakulti Perakaunan', 'FPM' => 'Fakulti Pengurusan Maklumat', 'FSS' => 'Fakulti Seni Lukis dan Seni Reka', 'FPP' => 'Fakulti Pengurusan dan Perniagaan'], '', ['class' => 'form-control', 'placeholder' => 'Pilih Fakulti'])}}
    		</div>
    		<div class="form-group col-md-3">
    			{{Form::label('kod_program', 'Kod Program')}}
    			{{Form::select('kod_program', ['cs110' => 'CS110', 'cs143' => 'CS143', 'im110' => 'IM110', 'ad112' => 'AD112', 'ad113' => 'AD113', 'bm111' => 'BM111', 'bm119' => 'BM119'], '', ['class' => 'form-control', 'placeholder' => 'Pilih Kod Program'])}}
    		</div>
    		<div class="form-group col-md-3">
    			{{Form::label('cgpa', 'CGPA')}}
    			{{Form::text('cgpa', $post->cgpa, ['class' => 'form-control', 'placeholder' => 'CGPA'])}}
    		</div>
    	</div>
    	<hr>
    	<h3>Maklumat Ibu Bapa/Penjaga</h3>
    	<hr>
    	<div class="form-group">
    		{{Form::label('penjaga', 'Nama Ibu Bapa/Penjaga')}}
    		{{Form::text('penjaga', $post->penjaga, ['class' => 'form-control', 'placeholder' => 'Nama Penuh'])}}
    	</div>
    	<div class="form-row">
    		<div class="form-group col-md-6">
    			{{Form::label('gaji', 'Pendapatan Keluarga')}}
    			{{Form::text('gaji', $post->gaji, ['class' => 'form-control', 'placeholder' => 'Pendapatan Keluarga', 'aria-describedby' => 'HelpBlock'])}}
    			<small class="HelpBlock" class="form-text text-muted">Sila masukkan angka sahaja tanpa *RM</small>
    		</div>
    		<div class="form-group col-md-6">
    			{{Form::label('tanggungan', 'Tanggungan')}}
    			{{Form::text('tanggungan', $post->tanggungan, ['class' => 'form-control', 'placeholder' => 'Jumlah Tanggungan'])}}
    		</div>
    	</div>
        {{Form::hidden('_method', 'put')}}
    	{{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
	{!! Form::close() !!}
@endsection