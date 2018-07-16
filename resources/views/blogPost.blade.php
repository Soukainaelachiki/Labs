@extends('layout.layout')
@section('blogPostcontent')
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
                <!-- Single Post -->
                <div class="single-post">
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
                            <a href="">2 Comments</a>
                        </div>
                        <p>{{$article->contenu}}</p>
                    </div>
                    <!-- Post Author -->
                    <div class="author">
                        <div class="avatar">
                            <img src="{{asset('template/img/avatar/03.jpg')}}" alt="">
                        </div>
                        <div class="author-info">
                        <h2>{{$article->user->name}}, <span>Author</span></h2>
                            <p>Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique. </p>
                        </div>
                    </div>
                    <!-- Post Comments -->
                    <div class="comments">
                        <h2>Comments (2)</h2>
                        <ul class="comment-list">
                            <li>
                                <div class="avatar">
                                    <img src="{{asset('template/img/avatar/01.jpg')}}" alt="">
                                </div>
                                <div class="commetn-text">
                                    <h3>Michael Smith | 03 nov, 2017 | Reply</h3>
                                    <p>Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique. </p>
                                </div>
                            </li>
                            <li>
                                <div class="avatar">
                                    <img src="{{asset('template/img/avatar/02.jpg')}}" alt="">
                                </div>
                                <div class="commetn-text">
                                    <h3>Michael Smith | 03 nov, 2017 | Reply</h3>
                                    <p>Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique. </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                   @include("partials.commentform")
                </div>
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
                        <li><img src="{{asset('temlate/img/instagram/6.jpg')}}" alt=""></li>
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
                        <p>Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique. Sed lacinia turpis at ultricies vestibulum.</p>
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