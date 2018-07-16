<form class="nl-form"action="{{route('newsletterform')}}" method="post">
    @csrf
        <input type="text" name="email" placeholder="Your e-mail here">
        <button class="site-btn btn-2" type="submit">Newsletter</button>
    </form>