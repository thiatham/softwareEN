@extends('layouts.website.app')

@section('style')
    <link href="{{ asset('css/website/terms-of-use.css') }}" rel="stylesheet">
@endsection

@section('body')
    <!-- Banner -->
    <div class="bannerTitle">
        <figure class="bg-filter" style="background: url({{asset('images/shadow.png')}}) no-repeat center center;"></figure>
        <figure class="group-banner" style="background-image: url({{asset('images/thumbnail.jpg')}})">
            <figcaption class="group-title col-12 col-lg-6 offset-lg-1">
                <div class="bg">
                    <div class="text">
                        <h1 class="font-weight-bold">Policy</h1>
                        <p class="text-justify">
                            PLEASE READ THESE TERMS OF USE CAREFULLY BEFORE USING THE SERVICES (DEFINED BELOW) BECAUSE THEY AFFECT YOUR LEGAL RIGHTS AND OBLIGATIONS, INCLUDING, BUT NOT LIMITED TO, MANDATORY ARBITRATION AND CLASS ACTION WAIVER (PARA. 26), LIMITATION OF LIABILITY (PARA. 18), AND INDEMNITY TO US (PARA. 25). BY USING ANY OF THE SERVICES, YOU ACCEPT THESE TERMS OF USE AND AGREE TO BE LEGALLY BOUND BY THEM. IF YOU DO NOT AGREE TO THESE TERMS OF USE, PLEASE DO NOT USE ANY OF THE SERVICES.
                        </p>
                    </div>
                </div>
            </figcaption>
        </figure>
    </div>
    <!-- End Banner -->
    <div class="main-container" style="background: url({{asset('images/bg-fish.png')}});">
        <div id="app" class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-10 col-md-10 col-lg-10 mini-col">
                    <div class="section">
                        <p>This agreement ("Agreement," "Terms of Use," or "Terms") is a legally binding agreement between Pride Publishing Inc. and its subsidiaries and affiliates ("Pride Publishing," "we," "us" or "our") and you concerning Pride Publishing's digital, online and mobile products and services that link to these Terms of Use, including, but not limited to, online and mobile websites (such as out.com, advocate.com, pride.com, hivplusmag.com and outtraveler.com) ("Sites"), mobile applications, and related interactive features, content and user interfaces, as well as related software, downloads and updates (collectively, “Services”). Access to and use of the Services is provided by Pride Publishing subject to these Terms of Use.</p>
                    </div>
                    <div class="section">
                        <p> By using the Services, you accept and agree to be legally bound by these Terms of Use as well as our Privacy Policy, which is incorporated by this reference into these Terms of Use.</p>
                    </div>
                    <div class="section">
                        <p>Please note that these Terms of Use include capitalized words or phrases. These capitalized words and phrases are defined terms. The defined terms are first set off from other text in parentheses. Their definitions are found either in these Terms of Use or our Privacy Policy</p>
                    </div>
                    <div class="section">
                        <p  class="font-bold">1. Eligibility</p>
                        <p class="mt-4">To be eligible to subscribe to the Services that require a subscription, you must meet the following criteria (the "Eligibility Criteria"): (a) You must have reached the age of 18, or the age of legal majority in your state, province, territory or country of residence (collectively, “Services Area"); (b) You must have an account in good standing with Pride Publishing or an authorized subscription provider of the Services (collectively, "Subscription Provider") and have activated your subscription to the Services (the "Subscription") with the Subscription Provider; and (c) You must establish a registered profile with Pride Publishing tied to the Services. Your profile together with your Subscription will establish your registered account ("Registered Account"). For some Subscription Providers, such as Apple TV, your Registered Account will be created for you when you purchase your Subscription.</p>
                    </div>
                    <div class="section">
                        <p class="font-bold">2. Changes to Terms</p>
                        <p>Pride Publishing reserves the right to modify the terms of this Agreement or to change, modify or otherwise alter any feature of the Services or the Sites at any time in its sole discretion. Changes to this Agreement may be communicated to you by making the revised Agreement available for your review on the Services or the Sites. Please review the Terms and Privacy Policy periodically for any changes. The date that these Terms were last modified can be found at the top of this Agreement. Any modifications to this Agreement, including, but not limited to, any modifications to the warranty disclaimers or limitations of liability contained in this Agreement, will supersede the prior Agreement provisions for all activity occurring after the revised version has been made available. To the extent any change materially impacts the availability of the Services, such as a change to your Subscription, in addition to posting the revised document on the Services, we will communicate such a change directly to you via the email address associated with your Registered Account. Your continued use of the Services or the Sites after the changes come into effect and, in the case of any Subscription, your failure to cancel the same within the relevant notice period, will mean you accept and agree to be bound to the changes.</p>
                    </div>
                    <div class="section">
                        <p  class="font-bold">3. Consent to Electronic Communications</p>
                        <p>Your registration and use of the Services constitutes consent to receiving electronic communications from Pride Publishing and our Subscription Providers regarding your account. You agree that any such communications from either Pride Publishing or our Subscription Providers will satisfy any legal requirements, such as that notice be provided to you in writing. You also consent to receiving promotional messages, offers, surveys, and requests electronically. For more information about how we communicate with you, please review our Privacy Policy. If you no longer want to receive non-transactional communications, you may unsubscribe at any time using the link at the bottom of the electronic communication or you may sign in to your Registered Account</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('javascript')
    <script>
        $(document).ready(function() {
			// Transition effect for navbar 
			$(window).scroll(function() {
			  if($(this).scrollTop() > 70) { 
				  $('.navbar').removeClass('bg-transparent ');
			  } else {
				    $('.navbar').addClass('bg-transparent ');
			  }
			});
		});

    </script>
    <script src="{{ asset('js/website/terms-of-use.js') }}"></script>
@endsection
