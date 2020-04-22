<!-- newsletter section -->
<div class="newsletter-section spad" id="newsletter">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h2>Newsletter</h2>
            </div>
            <div class="col-md-9">
                <!-- newsletter form -->
                @if (session()->has('msgnews'))
                <p class="alert alert-success">{{session('msgnews')}}</p>
                @endif
                <form class="nl-form" action="{{route('storenews')}}" method="POST">
                    @csrf
                    <input type="text" name="email" placeholder="Your e-mail here">
                    <button class="site-btn btn-2" type="submit">Newsletter</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- newsletter section end-->
