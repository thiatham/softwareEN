@extends('layouts.website.app')

@section('style')
    <link href="{{ asset('css/website/privacy-policy.css') }}" rel="stylesheet">
@endsection

@section('body')
	<!-- Banner -->
	<div class="bannerTitle">
		<figure class="bg-filter" style="background: url({{asset('images/shadow.png')}}) no-repeat center center;"></figure>
		<figure class="group-banner" style="background-image: url({{asset('images/banner.jpg')}})">
			<figcaption class="group-title col-12 col-lg-6 offset-lg-1">
				<div class="bg">
					<div class="text">
						<h1 class="font-weight-bold">Privacy</h1>
						<p class="text-justify">
							PLEASE READ THIS PRIVACY POLICY CAREFULLY.
							<br/>
							BY USING THE SERVICES (DEFINED BELOW), YOU ARE AGREEING TO THIS PRIVACY POLICY, INCLUDING THE COLLECTION, USE AND SHARING OF YOUR INFORMATION AND DATA. IF YOU DO NOT AGREE TO THIS PRIVACY POLICY OR THE RELATED TERMS OF USE, PLEASE DO NOT USE ANY OF THE SERVICES
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
	        			<p>This Privacy Policy describes the privacy practices of Pride Publishing Inc. ("Pride Publishing," "we," "us" or "our"), including the types of information we collect, how that information may be used, with whom it may be shared, and your choices about such collection, use and disclosure. Unless specifically noted otherwise, this Privacy Policy applies to all of Pride Publishing's websites, mobile sites, applications, downloads, interactive features and other services to which this Privacy Policy is linked, including, without limitation, out.com, advocate.com, pride.com, hivplusmag.com and outtraveler.com ("Services”).</p>
	        		</div>
	        		<div class="section">
	        			<p class="a-link">
							This Privacy Policy covers the following:
						<a href="#">1. Types of Information We Collect About You </a>
						<a href="#">2. How We Collect Your Information </a>
						<a href="#">3. How We Use Your Information </a>
						<a href="#">4. How Your Information Is Shared </a>
						<a href="#">5. Your Choices and Controls </a>
						<a href="#">6. Privacy Policies of Linked Sites and Advertisers </a>
						<a href="#">7. Children's Privacy</a>
						<a href="#">8. Data Security </a>
						<a href="#">9. International Transfer of Data </a>
						<a href="#">10. Notice to California Residents </a>
						<a href="#">11. Changes to This Privacy Policy </a>
						<a href="#">12. How to Contact Us</a>
	        			</p>
	        		</div>
	        		<div class="section">
	        			<p class="font-weight-bold link-content" id="link-1">1. Types of Information We Collect About You</p>
	        			<p>
		        			When you use the Services, we may collect two basic types of information: personally identifiable information (PII) and nonpersonally identifiable information (Non-PII). PIl consists of any information that can be used to specifically identify you as an individual, whereas Non-Pll consists of activity or aggregate information that does not reveal your identity. We collect the following categories of information:
		        		</p>
						<ul class="list mb-0">
							<li>
								Registration information you provide when you create an account, including your first name and surname, country of residence, gender, date of birth, email address, username and password.
							</li>
							<li>
								Transaction information you provide when you request information or purchase a product or service from us, whether on our sites or through our applications, including your postal address, telephone number and payment information.
							</li>
							<li>
								Information you provide in public forums on our sites and applications.
							</li>
							<li>
								Information sent either one-to-one or within a limited group using our message, chat, post or similar functionality, where we are permitted by law to collect this information.
							</li>
							<li>
								Information you provide to us when you use our sites and applications, our applications on third-party sites or platforms such as social networking sites, or link your profile on a third-party site or platform with your registration account.
							</li>
							<li>
								Location information when you visit our sites or use our applications, including location information either provided by a mobile device interacting with one of our sites or applications, or associated with your IP address, where we are permitted by law to process this information or have your permission.
							</li>
							<li>
								Usage, viewing and technical data when you visit our sites, use our applications on third-party sites or platforms or open emails we send, including your device identifier or IP address, browser type, language preference, operating system, referring/exit pages, and date and time of site visits or application use.
							</li>
							<li>
								With your permission, we access information on your device, such as your phone book, calendar or messages, in order to provide certain products or services to you.
							</li>
						</ul>
	        		</div>
	        		<div class="section">
	        			<p>
						<span class="font-weight-bold">Linking Information.</span>
						We may link your Pll with your activities in the course of providing the Services to you (such as purchase history, what content you viewed, which web pages you visited, or things you click on or search).</p>
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
    <script src="{{ asset('js/website/privacy-policy.js') }}"></script>
@endsection
