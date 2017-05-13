<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;
class CommentsController extends Controller
{
    public function store($id)
    {
        $comment = new Comment();
        $comment->body = request('body');
        $comment->post_id = $id;
        $comment->save();
        return back();
    }
}
