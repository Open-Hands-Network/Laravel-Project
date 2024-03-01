<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Like;
use App\Models\Post;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\Cast\Bool_;

class PostController extends Controller
{
    public function fetch($id = 0){ #to fetch posts in counts of 10
        $data = Post::latest()
        ->withCount([
            "comments",
            "likes"
            ])
        ->paginate(10)
        ->load([
            "user" => fn($q) => $q->select("id","first_name","last_name","image"),
            "comments" => fn($q) => $q->with('user:id,image,first_name,last_name,created_at'),
            "likes" => fn($q) => $q->where('user_id','=',$id)
        ]);
        
        return response($data);
    }

    public function fetchUser($id){
        $data = Post::where("user_id","=",$id)
        ->latest()
        ->withCount([
            "comments",
            "likes"
            ])
        ->paginate(10)
        ->load([
            "user" => fn($q) => $q->select("id","first_name","last_name","image"),
            "comments" => fn($q) => $q->with('user:id,image,first_name,last_name,created_at'),
            "likes" => fn($q) => $q->where('user_id','=',$id)
        ]);
        return response($data);
    }

    public function addComment(Request $req){

        $req->validate([
            "post_id" => 'required',
            "comment" => "required"
        ]);

        Comment::insert([
            "user_id" => $req->user()->id,
            "post_id" => $req->post_id,
            "comment" => $req->comment,
            "created_at" => now("Africa/Cairo")
        ]);
    }

    public function addLike(Request $req,$post_id){
        $like = Like::where("post_id","=",$post_id)
        ->where("user_id","=",$req->user()->id)->first();

        if($like){
            $like->delete();
            return response()->json([
                "action" => "removed"
            ]);
        }
        if(!$like){
            Like::insert([
                "post_id" => $post_id,
                "user_id" => $req->user()->id,
                "created_at" => now("Africa/Cairo")
            ]);
            return response()->json([
                "action" => "added"
            ]);
        }
    }
    public function addPost(Request $req){
        $req->validate([
            'title' => 'required|max:255|string',
            'image' => 'sometimes|file|mimes:png,jpg,jpeg|max:15360'
        ]);
        if ($req->has('image')){
            $image = $req->image;
            $imageName = time()."_".$image->getClientOriginalName();
            $image->move(public_path('assets/images/Posts'),$imageName);
        }
        Post::insert([
            "user_id" => $req->user()->id,
            "title" => $req->title,
            "image" => $imageName??null,
            "created_at" => now("Africa/Cairo")
        ]);
        return redirect()->route("home");
    }
}
