<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $query = request(['search', 'author', 'category']);
        $posts = Post::filter($query)->latest()->paginate(6)->withQueryString();

        $title = "Blogs"; // Default title

        if (request('author')) {
            $author = User::where('username', request('author'))->first();
            if ($author) {
                $title = "Posts by " . $author->name;
            }
        } elseif (request('category')) {
            $category = Category::where('slug', request('category'))->first();
            if ($category) {
                $title = "Posts in " . $category->name;
            }
        }

        return view('posts', ["title" => $title, 'posts' => $posts]);
    }

    public function singlePost(Post $post){
    // $post = post::find($slug);
        
        return view('post', ["title" => "Blog", "post" => $post]);
    }

    // public function author(User $user){
    // // $posts = $user->posts->load(['category', 'author']);
    
    //     return view('posts', ["title" => count($user->posts) . " Articles by " . $user->name, "posts" => $user->posts]);

    // }

    // public function category(Category $category){
    // // $posts = $category->posts->load(['category', 'author']);
        
    //     return view('posts', ["title" => count($category->posts) . " Articles in " . $category->name, "posts" => $category->posts]);

    // }
}
