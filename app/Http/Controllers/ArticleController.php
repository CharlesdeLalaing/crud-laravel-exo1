<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function store (Request $request) {
        $store = new Article;
        $store->auteur = $request->auteur;
        $store->titre = $request->titre;
        $store->text = $request->text;
        $store->save();

        return redirect('/');
        // return redirect()->back();
    }
}
