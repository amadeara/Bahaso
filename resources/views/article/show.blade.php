@extends('layout/main')

@section('container')

<div class="row m-3" >
    <div class="col m-1">
        <input  type="button" value="Kembali ke halaman sebelumnya" style="" onclick="history.back()"/>
    </div>
</div>

<div class="container mt-10">

    <div class="col mt-5">
 
        <div class="row mt-10">
            <div class="card-body mt-10" style="text-align:center">
                <h1 class="card-title">{{ $article->judul }}</h1>
                <h5 class="card-text">Author: {{ $article->penulis}}</h5>
                <p class="card-text">{{ $article->deskripsi }}</p>

            </div>
        </div>
    
    </div>


</div>


@endsection