@extends('layout.layout')
@section('contactcontent')
<!-- Page header -->
<div class="page-top-section">
    <div class="overlay"></div>
    <div class="container text-right">
        <div class="page-info">
            <h2>Contact</h2>
            <div class="page-links">
                <a href="#">Home</a>
                <span>Contact</span>
            </div>
        </div>
    </div>
</div>
<!-- Page header end -->


<!-- Google map -->
<div class="map" id="map-area"></div>


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