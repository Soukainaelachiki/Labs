<?php

namespace App\Http\Controllers;

use App\Article;
use App\User;
use App\Tag;
use App\Categorie;
use Illuminate\Http\Request;
use App\Services\ImageResize;

class ArticleController extends Controller
{
    public function __construct(ImageResize $imageResize){
        $this->imageResize = $imageResize;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::with("user")->get();
        return view("admin.article.index", compact("articles"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        $tags = Tag::all();
        $categories = Categorie::all();
        return view("admin.article.create",compact("users","tags","categories"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $article = new Article;
        $article->titre = $request->titre;
        $arg = [
            'request' => $request->image,
            'disk' => 'ArticleImageResize',
            'x' => "",
        ];
        $article->image = $this->imageResize->imageStore($arg);
        $article->contenu = $request->contenu;
        $article->user_id = $request->name;
        $article->categorie_id =$request->categorie_id;
        $article->validation = 2;
        if($article->save())
        {
            foreach($request->tags_id as $tag){
                $article->tags()->attach($tag);
            };
            return redirect()->route("article.index")->with([
                "status"=> "success",
                "message"=> "Votre article a bien été enregistré"
                ]);
        }else{
            return redirect()->route("article.index")->with([
                "status"=> "danger",
                "message"=> "Une erreur est survenue"
                ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        return view("admin.article.show",compact("article"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        return view("admin.article.edit",compact("article"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        $article->titre = $request->titre;
        if($request->image != null){
            $article->image =$this->imageResize->imageDestroy($article->image);
            $arg = [
                'request' => $request->image,
                'disk' => 'ArticleImageResize',
                'x' => "",
            ];
            $article->image = $this->imageResize->imageStore($arg);
        }
        $article->contenu = $request->contenu;
        //$article->user_id = $request->name;
        $article->validation = 2;
        if($article->save()){
            return redirect()->route("article.index")->with([
                "status"=> "success",
                "message"=> "Votre article a bien été modifié"
                ]);
        }else{
            return redirect()->route("article.index")->with([
                "status"=> "danger",
                "message"=> "Une erreur est survenue"
                ]);     
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        $article->image =$this->imageResize->imageDestroy($article->image);
        if($article->delete()){
            return redirect()->route('article.index')->with([
                "status"=>"success",
                "message"=>"votre article a bien été supprimé"
            ]);
        }else{
            return redirect()->route("article.index")->with([
                "status"=> "danger",
                "message"=> "Une erreur est survenue"
                ]);   
        }
    }
}
