@extends('layouts.app')

@section('content')
    <h1 class="text-center">Butiran Permohonan</h1>
    <h3>Maklumat Pelajar</h3>
    <hr>
    <div class="form-group row">
    	{{Form::label('pelajar', 'Nama Pelajar', ['class' => 'col-sm-2 col-form-label'])}}
        <div>
            {{Form::text('pelajar', strtoupper($post->pelajar), ['class' => 'form-control-plaintext', 'readonly'])}}
        </div>
    </div>
    <div class="form-row">
    	<div class="form-group row col-md-6">
    		{{Form::label('no_telefon', 'No H/p', ['class' => 'col-sm-2 col-form-label'])}}
            <div class="col-sm-10">
                {{Form::text('no_telefon', $post->no_telefon, ['class' => 'form-control-plaintext', 'readonly'])}}
            </div>
    	</div>
    	<div class="form-group row col-md-6">
    		{{Form::label('no_matrik', 'No Matrik', ['class' => 'col-form-label'])}}
            <div class="col-sm-10">
                {{Form::text('no_matrik', $post->no_matrik, ['class' => 'form-control-plaintext', 'readonly'])}}
            </div>
    	</div>
    </div>
    <div class="form-row">
    	<div class="form-group row col-md-6">
    		{{Form::label('fakulti', 'Fakulti', ['class' => 'col-sm-2 col-form-label'])}}
            <div class="col-sm-10">
                {{Form::text('fakulti', $post->fakulti, ['class' => 'form-control-plaintext', 'readonly'])}}
            </div>
    	</div>
    	<div class="form-group row col-md-6">
    		{{Form::label('kod_program', 'Kod Program', ['class' => 'col-form-label'])}}
            <div class="col-sm-10">
                {{Form::text('kod_program', strtoupper($post->kod_program), ['class' => 'form-control-plaintext', 'readonly'])}}
            </div>
    	</div>
    </div>    
    <div class="form-group row">
    	{{Form::label('cgpa', 'CGPA', ['class' => 'col-sm-2 col-form-label'])}}
        <div>
            {{Form::text('cgpa', number_format($post->cgpa, 2), ['class' => 'form-control-plaintext', 'readonly'])}}
        </div>
    </div>
    <hr>
    <h3>Maklumat Ibu Bapa/Penjaga</h3>
    <hr>
    <div class="form-group row">
    	{{Form::label('penjaga', 'Nama Ibu Bapa/Penjaga', ['class' => 'col-sm-2 col-form-label'])}}
        <div class="col-sm-10">
            {{Form::text('penjaga', strtoupper($post->penjaga), ['class' => 'form-control-plaintext', 'readonly'])}}
        </div>
    </div>
    <div class="form-row">
    	<div class="form-group row col-md-6">
    		{{Form::label('gaji', 'Pendapatan Keluarga', ['class' => 'col-sm-5 col-form-label'])}}
            <div class="">
                {{Form::text('gaji', 'RM'.$post->gaji, ['class' => 'form-control-plaintext', 'readonly'])}}
            </div>
    	</div>
    	<div class="form-group row col-md-6">
    		{{Form::label('tanggungan', 'Tanggungan', ['class' => 'col-form-label'])}}
            <div class="col-sm-10">
                {{Form::text('tanggungan', $post->tanggungan, ['class' => 'form-control-plaintext', 'readonly'])}}
            </div>
    	</div>
    </div>
    <a href="/posts/{{$post->id}}/edit" class="btn btn-secondary">Edit</a>

    {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'post', 'class' => 'float-right'])!!}
        {{Form::hidden('_method', 'delete')}}
        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
    {!!Form::close()!!}
@endsection