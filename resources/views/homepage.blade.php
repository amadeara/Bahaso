@extends('layout/main')


@section('container')


<div class="container mt-5 mb-5">
<h1 class="card-title" style= "text-align:center">Health Articles</h1>
    
    <div class="row m-3" >
        <div class="col m-1">
        <a href="/add_article" class="btn btn-outline-info ">Buat Artikel</a>
        </div>
        
    </div>

    <div class="row m-3" >
        <div class="col m-1">
        <a href="/update_article" class="btn btn-outline-info ">Update</a>
        </div>
    </div>

    <div class="row m-3" >
        <div class="col m-1">
        {{$article->links()}}
        </div>
    </div>

    <div class="row">
    @foreach($article as $article)
    <div class="col-sm-6 mt-3">
        <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $article->judul }}</h5>
            <p class="card-text">by: {{ $article->penulis }}</p>
            <a href="/lihatArtikel/{{ $article->id }}" class="btn btn-outline-info btn-block">Lihat Artikel</a>
            
        </div>
        </div>
    </div>
    @endforeach

</div>

@endsection
