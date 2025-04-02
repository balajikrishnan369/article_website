<?php

namespace App\Http\Controllers;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(Request $request)
    {
        $request->validate([
            'page' => 'nullable|integer|min:1'
        ]);

        $articles = Article::where('status','published')
                    ->whereNotNull('publishing_date')
                    ->orderBy('publishing_date', 'desc')
                    ->paginate(5);

        return view('index', compact('articles'));
    }
}
