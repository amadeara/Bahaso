<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <h1>EDIT ARTIKEL</h1>

    <div class="row m-3" >
        <div class="col m-1">
            <input  type="button" value="Kembali ke halaman sebelumnya" style="" onclick="history.back()"/>
        </div>
    </div>

    <div class="container mt-10">
        <div class="col-md-8 col-sm-12 bg-white p-4">
        <form method="post" action="/post_article/{{ $article->id }}">

            @csrf
            <div class="form-group">
                <label>Judul Artikel</label>
                <input type="text" class="form-control" name="judul" placeholder="Judul artikel">
            </div>
            <div class="form-group">
                <label>Nama Penulis</label>
                <input type="text" class="form-control" name="penulis" placeholder="Nama Penulis">
            </div>
            <div class="form-group">
                <label>Isi Artikel</label>
                <textarea class="form-control" name="deskripsi" rows="15"></textarea>
            </div>
        </div>

        <div class="col-md-3 ml-md-5 col-sm-12 bg-white p-4" style="height:120px !important">
            <div class="form-group">
                <label>Submit Changes</label>

                <input type="submit" class="form-control btn btn-primary" value="Upload">
            </div>
        </div>
        </form>
    </div>
  </body>
</html>