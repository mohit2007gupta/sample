<?php
/**
 * Created by PhpStorm.
 * User: anand
 * Date: 4/10/16
 * Time: 4:56 PM
 */

namespace App\Http\Controllers\Link;

use App\Http\Controllers\Controller;

class GuestLinkController extends Controller
{
    public function index()
    {
        return view('home.home');
    }
}