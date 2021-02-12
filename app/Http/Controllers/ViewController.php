<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ArticleModel;
use Illuminate\Support\Facades\DB;

class ViewController extends Controller
{
    public function homepage(){
        $article = ArticleModel::paginate(10);
        return view('homepage', compact('article'));
    }

    public function lihatArtikel($id){
        $article = ArticleModel::find($id);
       

        return view('article\show', compact('article'));
    }

    public function berhasil()
    {
        return "Artikel berhasil ditambahkan";
    }

    public function add_article()
    {
        
        return view('add');
    }

    public function create_article(Request $request){
        ArticleModel::create([
            'judul' =>$request->get('judul'),
            'penulis' =>$request->get('penulis'),
            'deskripsi' => $request->get('deskripsi'),
        ]);

        return redirect()->intended('/');
        
    }

    public function listArtikel(){
        $article = ArticleModel::all();
        return view('listartikel', compact('article'));
    }

    public function edit_article(ArticleModel $article){
        return view('editartikel', compact('article'));
    }

    public function update_post(ArticleModel $article,Request $request){
        $target = ArticleModel::findOrFail($article->id);
        $target->judul = $request->judul;
        $target->penulis = $request->penulis;
        $target->deskripsi = $request->deskripsi;
        $target->save();

        return redirect()->intended('/');
        
    }

    public function delete(ArticleModel $article){
        $article->delete();
        return redirect()->intended('/');
    }
}
