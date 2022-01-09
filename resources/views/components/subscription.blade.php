<section class="email-subscription position-relative" id="Contact">
    <div class="container">
        <div class="row specialities-top">
            <div class="col-12 col-md-12 col-lg-12">
                <div class="wow fadeInDown" data-wow-duration="2s" data-wow-delay=".4s">
                    <h2 class="mb-0">Want to get the latest update?</h2>
                </div>
                <p class="wow fadeIn" data-wow-duration="2s" data-wow-delay=".4s">There are many variations of passagessuffered alteration or eipsum dolor sit amet, consectetur adipiscing elit, sed do teiusmod tempor.<br>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                    ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit in voluptate velit.</p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-6">
                <form class="email-form" method="post" action="{{ url('store-form-contact') }}">
                    @csrf
                    <div class="form-group position-relative mb-0">
                        <input type="email" class="form-control" placeholder="Your Email Id" id="email" name="email">
                        <button type="submit" class="btn btn-primary email-form-button">SEND</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
