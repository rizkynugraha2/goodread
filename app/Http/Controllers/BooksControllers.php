<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\User;
use App\Models\Category;

class BooksControllers extends Controller
{
    
    
    public function index(){
        $title = " ";
        if(request('category')){
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in '  . $category->name;
        }
        
        if(request('author')){
            $author = User::firstWhere('username', request('author'));
            $title = ' by ' . $author->name;
        }
        return view('posts', [
            'title' => 'GoodRead'. $title,
            'posts' => Book::latest()->filter(request(['search', 'category' , 'author']))->paginate(6)->withQueryString()
        ]);
    }
    
    public function show(Book $post)
    {
        return view('post',[
            "title" => 'Child',
            "post" => $post
        ]);
    }
}
