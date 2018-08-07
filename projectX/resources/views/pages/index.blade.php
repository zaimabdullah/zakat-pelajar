@extends('layouts.app')

@section('content')    
        {{-- <div class="container">
            <h1 class="display-3 text-center">{{$title}}</h1>
            <p>e-Zakat adalah sebuah sistem yang telah dibina oleh pihak UiTM bagi memudahkan para pelajar membuat permohonan zakat secara atas talian. Sistem ini juga membolehkan para pelajar membuat permohonan dengan lebih efektif dan pantas.</p>
        </div> --}}
    <div class="jumbotron text-center">
        <div class="container">
          <h1 class="display-3">{{$title}}</h1>
          <p>e-Zakat adalah sebuah sistem yang telah dibina oleh pihak UiTM bagi memudahkan para pelajar membuat permohonan zakat secara atas talian. Sistem ini juga membolehkan para pelajar membuat permohonan dengan lebih efektif dan pantas.</p>
          <p><a class="btn btn-primary btn-lg" href="/posts/create" role="button">Buat Permohonan</a></p>
        </div>
    </div>
@endsection
