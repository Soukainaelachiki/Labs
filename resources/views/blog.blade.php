@extends('layout.layout')
@section('blogcontent')
<!-- Page header -->
<div class="page-top-section">
    <div class="overlay"></div>
    <div class="container text-right">
        <div class="page-info">
            <h2>Blog</h2>
            <div class="page-links">
                <a href="#">Home</a>
                <span>Blog</span>
            </div>
        </div>
    </div>
</div>
<!-- Page header end-->


<!-- page section -->
<div class="page-section spad">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-7 blog-posts">
                    @foreach($articles as $article)
                <!-- Post item -->
                <div class="post-item">
                    <div class="post-thumbnail">
                        <img src="{{Storage::disk('ArticleImageResize')->url($article->image)}}" alt="">
                        <div class="post-date">
                            <h2>03</h2>
                            <h3>Nov 2017</h3>
                        </div>
                    </div>
                    <div class="post-content">
                        <h2 class="post-title">{{$article->titre}}</h2>
                        <div class="post-meta">
                            <a href="">{{$article->user->name}}</a>
                            <a href="">
                                @foreach($article->tags as $tag)
                                    {{$tag->theme}}
                                    @endforeach</a>
                            <a href="">1 Comments</a>
                        </div>
                        <p>{{$article->contenu}}</p>
                        <a href="{{route('blogpost',['article'=>$article->id])}}" class="read-more">Read More</a>
                    </div>
                </div>
                @endforeach
            </div>
            
            <!-- Sidebar area -->
            <div class="col-md-4 col-sm-5 sidebar">
                <!-- Single widget -->
                <div class="widget-item">
                    <form action="#" class="search-form">
                        <input type="text" placeholder="Search">
                        <button class="search-btn"><i class="flaticon-026-search"></i></button>
                        </form>
                    </div>
                    <!-- Single widget -->
                    <div class="widget-item">
                        <h2 class="widget-title">Categories</h2>
                        <ul>
                            @foreach($categories as $categorie)
                            <li><a href="#">{{$categorie->nom}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <!-- Single widget -->
                    <div class="widget-item">
                        <h2 class="widget-title">Instagram</h2>
                        <ul class="instagram">
                            <li><img src="{{asset('template/img/instagram/1.jpg')}}" alt=""></li>
                            <li><img src="{{asset('template/img/instagram/2.jpg')}}" alt=""></li>
                            <li><img src="{{asset('template/img/instagram/3.jpg')}}" alt=""></li>
                            <li><img src="{{asset('template/img/instagram/4.jpg')}}" alt=""></li>
                            <li><img src="{{asset('template/img/instagram/5.jpg')}}" alt=""></li>
                            <li><img src="{{asset('template/img/instagram/6.jpg')}}" alt=""></li>
                        </ul>
                    </div>
                    <!-- Single widget -->
                    <div class="widget-item">
                        <h2 class="widget-title">Tags</h2>
                        <ul class="tag">
                            @foreach($tags as $tag)
                            <li><a href="">{{$tag->theme}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <!-- Single widget -->
                    <div class="widget-item">
                        <h2 class="widget-title">Quote</h2>
                        <div class="quote">
                            <span class="quotation">‘​‌‘​‌</span>
                        <p></p>
                        </div>
                    </div>
                    <!-- Single widget -->
                    <div class="widget-item">
                        <h2 class="widget-title">Add</h2>
                        <div class="add">
                            <a href=""><img src="{{asset('template/img/add.jpg')}}" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
                <!-- Pagination -->
                <div class="page-pagination">
                    <a class="active" href="">01.</a>
                    <a href="">02.</a>
                    <a href="">03.</a>
                </div>
        </div>
    </div>
</div>
    <!-- page section end-->
    

<!-- newsletter section -->
<div class="newsletter-section spad">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h2>Newsletter</h2>
            </div>
            <div class="col-md-9">
                <!-- newsletter form -->
                @include("partials.newsletter")
            </div>
        </div>
    </div>
</div>
<!-- newsletter section end-->
@endsection