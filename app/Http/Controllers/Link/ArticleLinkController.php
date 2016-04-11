<?php
/**
 * Created by PhpStorm.
 * User: anand
 * Date: 4/10/16
 * Time: 4:56 PM
 */

namespace app\Http\Controllers\Link;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ArticleLinkController extends Controller
{
    public function index()
    {
        return view('article.article');
    }
    public function create()
    {
        if (Auth::user()->level()->first()->can_publish)
            return view('article.create');
        else
            return redirect('home');
    }
    public function article($id)
    {
        return view('article.article');
    }
}