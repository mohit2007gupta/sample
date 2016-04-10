<?php
/**
 * Created by PhpStorm.
 * User: anand
 * Date: 4/10/16
 * Time: 4:56 PM
 */

namespace app\Http\Controllers\Link;

use App\Http\Controllers\Controller;

class ArticleLinkController extends Controller
{
    public function index()
    {
        return view('article.article');
    }
    public function create()
    {
        return view('article.create');
    }
    public function article($id)
    {
        return view('article.article');
    }
}