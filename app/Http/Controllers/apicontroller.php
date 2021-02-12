<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\ArticleModel;


class apicontroller extends Controller
{
    //mengambil semua data yang ada (GET)
    public function index(){
        $article=ArticleModel::all();
        return response()->json($article, 200);

        //return ArticleModel::all();

    }

    //menyimpan data ke database(POST)
    public function create(request $request){
        $article = new ArticleModel();
        $article->judul = $request->judul;
        $article->penulis = $request->penulis;
        $article->deskripsi = $request->deskripsi;
        $article->save();
    }
    // public function store(){
    //     $article= new ArticleModel;
    //     $article->judul=Input::get('judul');
    //     $article->penulis=Input::get('penulis');
    //     $article->deskripsi=Input::get('deskripsi');

    //     // $article = $request->all();



    //     $success=$article->save();

        
    // }

    //mengambil dengan id tertentu(GET)
    public function show($id)
    {
        $article=ArticleModel::find($id);
        if(is_null($article))
        {
            return Response::json("not found",404);
        }
    
        return response()->json($article,200);
    }

    

    //mengupdate database di server (PUT)
    public function update1(request $request, $id){
        $judul = $request->judul;
        $penulis = $request->penulis;
        $deskripsi = $request->deskripsi;

        $article = ArticleModel::find($id);
        $article->judul = $judul;
        $article->penulis = $penulis;
        $article->deskripsi = $deskripsi;
        $article->save();

        return "Data Berhasil ter-Update!";
    }

    // public function update($id){
    //     $article=ArticleModel::find($id);

    //     if(!is_null(Input::get('judul'))){
    //         $article->judul=Input::get('judul');
    //     }
    //     if(!is_null(Input::get('penulis'))){
    //         $article->author=Input::get('penulis');
    //     }
    //     if(!is_null(Input::get('deskripsi'))){
    //         $article->deskripsi=Input::get('deskripsi');
    //     }

    //     $success=$article->save();

    //     if(!$success){
    //         return Response::json("error updating", 500);
    //     }

    //     return response()->json("success", 201);
    // }

    //menghapus data (DELETE)
    public function delete($id){
        $article=ArticleModel::find($id);
        if(is_null($article)){
            return Response::json("not found", 404);
        }

        $success=$article->delete();

        if(!$success){
            return Respons::json("error deleting", 500);
        }

        return response()->json("success", 200);

    }

    // public function delete1($id){
    //     $article = ArticleModel::find($id);
    //     $article->delete();

    //     return "Data Berhasil ter-Delete!";
    // }


}
