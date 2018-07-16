@extends('layout.layout')

@section('servicecontent')
<!-- Page header -->
<div class="page-top-section">
    <div class="overlay"></div>
    <div class="container text-right">
        <div class="page-info">
            <h2>Services</h2>
            <div class="page-links">
                <a href="#">Home</a>
                <span>Services</span>
            </div>
        </div>
    </div>
</div>
<!-- Page header end-->


<!-- services section -->
<div class="services-section spad">
    <div class="container">
        <div class="section-title dark">
            <h2>Get in <span>the Lab</span> and see the services</h2>
        </div>
        <div class="row">
            <!-- single service -->
            @foreach($services as $service)
            <div class="col-md-4 col-sm-6">
                <div class="service">
                    <div class="icon">
                        <i class="{{$service->icon->name}}"></i>
                    </div>
                    <div class="service-text">
                        <h2>{{$service->titre}}</h2>
                        <p>{{$service->contenu}}</p>
                    </div>
                </div>
            </div>
            @endforeach
           
        </div>
        <div class="text-center">
            <a href="" class="site-btn">Browse</a>
        </div>
    </div>
</div>
<!-- services section end -->


<!-- features section -->
<div class="team-section spad">
    <div class="overlay"></div>
    <div class="container">
        <div class="section-title">
            <h2>Get in <span>the Lab</span> and  discover the world</h2>
        </div>
        <div class="row">
            <!-- feature item -->
            <div class="col-md-4 col-sm-4 features">
                    @foreach($servicesgauche as $service)
                <div class="icon-box light left">
                    <div class="service-text">
                    <h2>{{$service->titre}}</h2>
                    <p>{{$service->contenu}}</p>
                    </div>
                    <div class="icon">
                    <i class="{{$service->icon->name}}"></i>
                    </div>
                </div>
                @endforeach
            </div>
            <!-- Devices -->
            <div class="col-md-4 col-sm-4 devices">
                <div class="text-center">
                    <img src="{{asset('template/img/device.png')}}" alt="">
                </div>
            </div>
            <div class="col-md-4 col-sm-4 features">
                    @foreach($servicesdroite as $service)
                <div class="icon-box light right">
                    <div class="service-text">
                    <h2>{{$service->titre}}</h2>
                    <p>{{$service->contenu}}</p>
                    </div>
                    <div class="icon">
                    <i class="{{$service->icon->name}}"></i>
                    </div>
                </div>
                    @endforeach
            </div>
            <!-- feature item -->
        </div>

        <div class="text-center mt100">
            <a href="" class="site-btn">Browse</a>
        </div>
    </div>
</div>
<!-- features section end-->


<!-- services card section-->
<div class="services-card-section spad">
    <div class="container">
        <div class="row">
            <!-- Single Card -->
            @foreach($projets as $projet)
            <div class="col-md-4 col-sm-6">
                <div class="sv-card">
                    <div class="card-img">
                    <img src="{{Storage::disk('ProjetImageResize')->url($projet->image)}}" alt="">
                    </div>
                    <div class="card-text">
                        <h2>{{$projet->titre}}</h2>
                        <p>{{$projet->contenu}}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- services card section end-->


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


<!-- Contact section -->
<div class="contact-section spad fix">
    <div class="container">
        <div class="row">
            <!-- contact info -->
            <div class="col-md-5 col-md-offset-1 contact-info col-push">
                <div class="section-title left">
                    <h2>Contact us</h2>
                </div>
                <p>Cras ex mauris, ornare eget pretium sit amet, dignissim et turpis. Nunc nec maximus dui, vel suscipit dolor. Donec elementum velit a orci facilisis rutrum. </p>
                <h3 class="mt60">Main Office</h3>
                <p class="con-item">C/ Libertad, 34 <br> 05200 Arévalo </p>
                <p class="con-item">0034 37483 2445 322</p>
                <p class="con-item">hello@company.com</p>
            </div>
            <!-- contact form -->
            @include("partials.contact")
        </div>
    </div>
</div>
<!-- Contact section end-->
@endsection

