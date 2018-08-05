<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\user\post;
use App\Model\user\like;
use Auth;


class PostController extends Controller
{
    public function post(post $post){
    	return view('user.post',compact('post'));
    }

    public function getAllPosts(){
    	return $post = post::with('likes')->where('status',1)->orderBy('created_at', 'DEC')->paginate(1);
    	
    }

    public function saveLike(Request $Request){
    	$likecheck = like::where(['user_id'=>Auth::id(),'post_id'=>$Request->id])->first();
    	if($likecheck){
    		like::where(['user_id'=>Auth::id(),'post_id'=>$Request->id])->delete();
    		return 'deleted';
    	} else {
    		$like = new like;
    		$like->user_id = Auth::id();
    		$like->post_id = $Request->id;
    		$like->save();
    		
    	}
    	

    }
}
