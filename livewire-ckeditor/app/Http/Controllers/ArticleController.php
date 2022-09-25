<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function show($id)
    {
        return view('article', [
            'article' => Article::find($id)
        ]);
    }
}
