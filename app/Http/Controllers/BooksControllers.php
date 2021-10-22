<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\User;
use App\Models\Category;

class BooksControllers extends Controller
{
    
    
    public function index(){
        $title = '';
        if(request('category')){
            $category = Category::firstWhere('slug', request('category'));
            $title = 'in' . $category;
        }
        
        if(request('author')){
            $author = User::firstWhere('username', request('author'));
            $title = ' by ' . $author;
        }
        return view('posts', [
            'title' => 'GoodRead',
            'posts' => Book::latest()->filter(request(['search', 'category' , 'author']))->paginate(5)->withQueryString()
        ]);
    }
    
    public function show(Book $slug)
    {
        return view('post',[
            "title" => 'Child',
            "post" => $slug
        ]);
    }
}
