<div class="col-md-6 col-pull">
    <form class="form-class" id="con_form" action="{{route('contactform')}}" method="post">
        @csrf
        <div class="row">
            <div class="col-sm-6">
                <input type="text" name="name" placeholder="Your name">
            </div>
            <div class="col-sm-6">
                <input type="text" name="email" placeholder="Your email">
            </div>
            <div class="col-sm-12">
                <input type="text" name="subject" placeholder="Subject">
                <textarea name="message" placeholder="Message"></textarea>
                <button class="site-btn" type="submit">send</button>
            </div>
        </div>
    </form>
</div>