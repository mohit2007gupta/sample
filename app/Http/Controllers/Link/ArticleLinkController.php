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

    public function edit($id)
    {
        $user = Auth::user();
        if ($user) {
            $article = $this->articleDomainService->getArticle($id);

            if ($article->author_id == $user->id or $user->level()->first()->can_edit or !$article->contributors()->where('id', $id)->isEmpty()) {
                return view('article.edit');
            }
        }
        else
            return Redirect::to(URL::previous());

    }
    public function article($id)
    {
        return view('article.article');
    }
}