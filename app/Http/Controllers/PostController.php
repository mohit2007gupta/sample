<?php namespace App\Http\Controllers;

/* Posts rest is not yet made

use App\Posts;
*/
use App\User;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PostController extends Controller
{

  public function index()
  {
    /*
    Should return posts for index page by some ordering
    */
  }

  public function createPost(Request $request)
  {
    /*
    Should route to view for creating posts if user is
    allowed to create posts.
    check using user->canPost()
    then return view('create_post');
    */
    if($request->user()->canPost())
    {
      return view('createPost')
    }
  }


}
