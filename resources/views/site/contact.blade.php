@extends('layouts.site')

@section('content')
<div class="page-title text-center">
    <h2 class="title"> {{ __('site.contact_us') }} </h2>

</div>
<!-- Page Title -->
<!-- Breadcrumbs -->
<div class="breadcrumbs">
    <div class="container">
        <span class="parent"> <i class="fa fa-home"></i> <a href="{{ route('home') }}"> Home </a> </span>
        <i class="fa fa-chevron-right"></i>
        <span class="child"> Contact </span>
    </div>
</div>
<!-- Breadcrumbs -->

<div class="container">
    <section class="contact">
        <div class="row contact-centers">
            <div class="col-md-4">

            </div>

            <div class="col-md-6">
                <div class="contact-area-box">
                    <h4 class="contact-title subtitle">Cameroon</h4>
                    <div class="address">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        <p>Yaounde
                            <br> Etug Ebe
                            <br> After Biyelmasi </p>
                    </div>
                    <div class="phone">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        <p>+237 673 90 19 39 </p>
                    </div>
                    <div class="email">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        <p> <a href="mailto:london@offshoreindustry.com"> london@offshoreindustry.com </a> </p>
                    </div>
                </div>
            </div>


        </div>
    </section>

    <section class="contact-form">
        <div class="row form">
            <div class="col-md-3">

            </div>
            <div class="col-md-6">
                <h2 class="title-2"> Send us a message </h2>
                <form id="contact_form" class="form well-form" action=" {{ route('contact.store') }} " method="post">
                    <!-- Text input-->
                    <div class="form-group">
                        <input name="name" placeholder="Full Name" class="form-control" type="text" required
                        title="Please enter your full name">
                    </div>
                    <!-- Email input-->
                    <div class="form-group">
                        <input name="email" placeholder="Email Address" class="form-control" type="email"
                        required title="Please enter your email address" data-msg-email="Ouch, that doesn't look like an email">
                    </div>

                    <!-- Phone Number-->
                    <div class="form-group">
                        <input name="phone" placeholder="Phone Number" class="form-control" type="text"
                        data-rule-phoneUS="false" title="Please enter your phone number"
                        data-msg-phoneUS="Ouch, that doesn't look like a valid phone number" required>
                    </div>

                    <!-- Text area -->
                    <div class="form-group">
                        <textarea class="form-control" name="message" placeholder="Message"
                        required data-rule-minlength="10" data-msg-minlength="Please enter atleast 10 characters" title="Please enter your message"></textarea>
                    </div>
                    <!-- Button -->
                    <button type="submit" class="btn btn-block btn-warning" id="js-contact-btn"> SEND MESSAGE </button>

                    <div id="js-contact-result" data-success-msg="Form submitted successfully." data-error-msg="Oops. Something went wrong."></div>

                </form>
            </div>

        </div>

    </section>
</div>
@endsection
