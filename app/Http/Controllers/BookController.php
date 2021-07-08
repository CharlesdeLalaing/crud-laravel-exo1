<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function store(Request $request){
        $store = new Book;
        $store->title = $request->title;
        $store->number_of_page = $request->number_of_page;
        $store->review = $request->review;
        $store->save();

        return redirect('/two');
    }
}
