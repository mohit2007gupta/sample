<?php
/**
 * Created by PhpStorm.
 * User: anand
 * Date: 4/11/16
 * Time: 7:28 AM
 */

namespace App\Http\Controllers\Link;


use App\Http\Controllers\Controller;

class UserLinkController extends Controller
{
    public function user($id)
    {
        return view('user.user')->with('userId', $id);
    }

}