<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogController extends Blog
{
    protected $table = 'blog_entries';

    public function showBlog()
    {
        $blog = Blog::orderBy('updated_at', 'desc')->take(5)->get();

        return view('auth.blog')->with('blogs', $blog);
    }

    public function entradaBlog(Request $request)
    {

        $data = array(
            'user_id' => Auth::user()->id,
            'user_name' => Auth::user()->name,
            'blog_titulo' => $request->input('titulo'),
            'blog_entrada' => $request->input('entrada'),
            'created_at' => date($this->timestamps)
        );
        $this->create($data);

        $data = "La entrada ha sido posteada";

        return redirect('blog')->with('message', $data);
    }

    public function showByEntrie($id)
    {
        $blog = Blog::where('id', $id)->get();;

        return view('front.sections.entrades')->with('blogs', $blog);
    }

    public function showByName($id)
    {
        $user = Blog::where('user_name', $id)->get();

        return view('auth.entrada')->with('user', $user);
    }
}

