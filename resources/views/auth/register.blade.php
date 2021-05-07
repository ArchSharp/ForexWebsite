<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  @include('layouts/dashPages.head')
</head>
<body>

<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-primary fw-bolder">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="../images/fxGlobe.gif" alt="LOGO" style="width:30px; ">ArchFxGlobe</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
        <div class="container collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav ms-auto mb-2 mb-md-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
            </li>
          </ul>
        </div>
  </div>
</nav>

<section style="margin-top: 100px;">
  <div class="container card my-5" style="max-width: 540px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="..." alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title text-center">Register</h5>
          <form action="{{ route('auth.save') }}" class="mt-5 form-inline" name="home" id="home" method="post">
            
            @if(Session::get('success'))
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ Session::get('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            @endif

            @if(Session::get('fail'))
              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ Session::get('fail') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            @endif


            @csrf
            <div class="input-group">
              <input type="text" class="form-control mb-2 mr-sm-2 border-start-0 border-end-0 border-top-0" placeholder="Enter First Name" id="firstname" name="firstname" value="{{ old('firstname') }}" required>
            </div>
            <div class="alert-danger text-danger d-none justify-content-center rounded p-2 confFNameError">First name cannot be empty</div>
            <div class="input-group">
              <input type="text" class="form-control mb-2 mr-sm-2 border-start-0 border-end-0 border-top-0" placeholder="Enter Last Name" id="lastname" name="lastname" value="{{ old('lastname') }}" required>
            </div>
            <div class="alert-danger text-danger d-none justify-content-center rounded p-2 confLNameError">Last name cannot be empty</div>
            <div class="form-group">
              <input type="text" class="form-control mb-2 mr-sm-2 border-start-0 border-end-0 border-top-0" placeholder="Enter Email" id="email" name="email" value="{{ old('email') }}" required>
              <span class="text-danger">@error('email'){{ $message }} @enderror</span>
            </div>
            <div class="alert-danger text-danger d-none justify-content-center rounded p-2 confemailError">Email cannot be empty</div>
            <div class="input-group">
              <input onkeyup="active()" type="password" class="form-control mb-2 mr-sm-2 border-start-0 border-end-0 border-top-0" placeholder="Enter Password" id="pswrd_1" name="password" required>
            </div>
            <div class="input-group">
              <input onkeyup="active_2()" type="password" class="form-control mb-2 mr-sm-2 border-start-0 border-end-0 border-top-0" placeholder="Confirm Password" id="pswrd_2" name="confirm_password" required disabled>
              <div class="input-group-append">
                <button class="btn btn-outline-none d-none fw-bold text-primary show" type="button" id="decide"><i class="fa fa-eye-slash"></i></button>
              </div>
            </div>
            <div class="alert-danger text-danger d-none justify-content-center rounded p-2 confPassError"></div>
            <button onclick="pass1equalpass2()" type="submit" class="btn btn-primary disabled spSignUp">Sign Up</button>
            <p class="mt-3"> Already have an account? <a href="{{ route('auth.login') }}">Sign In</a></p>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- footer section start -->
<footer class="footer other mt-1 py-1 bg-light">
  <div class="container">
    <div class="row">
      <div class="col-sm text-center">
        <span class="text-muted">
          &copy; <?php
          $fromYear = 2018;
          $thisYear = (int)date('Y');
          echo $fromYear . (($fromYear != $thisYear) ? '-' . $thisYear : '');?> ArchFxGlobe Ltd.
        </span>
        <span class="ms-4"><a href="#" data-bs-toggle="modal" data-bs-target="#privacyModal">Privacy policy</a></span>
        <span class="ms-4"><a href="#" data-bs-toggle="modal" data-bs-target="#termsModal">Terms of reference</a></span>
      </div>
    </div>
  </div>
</footer>

<!-- modal for  privacy policy-->
<div class="modal fade" id="privacyModal" tabindex="-1" aria-labelledby="privacyModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header justify-content-center">
        <h5 class="modal-title" id="exampleModalLabel">OUR PRIVACY POLICY</h5>
      </div>
      <div class="modal-body">
        <div class="col">
          <ol>
            Every user is entitled to 2 MT4 account activation. In any case your previous account is no longer been used, we can deactivate the old MT4 account number and grant license on the new account. This offer is available only ones. <br> <br>
            PURPOSE OF THIS PRIVACY POLICY <br> <br>

            This Policy aims to define the process how ARCHFXGLOBE collects and processes personal data of the Clients through the use of ARCHFXGLOBE.com (hereinafter referred to as the “Website”), including any data the Client may provide through the Website when providing or summiting any information thereto. <br>
            <br>
            This Website is not intended for children and no data related to children may be collected.
            <li> DATA CONTROLLER</li>

            ARCHFXGLOBE is the controller and responsible person/entity for Client’s personal data. It is important that the personal data the Company holds about the Client is accurate and current. The obligation to inform the Company about any changes in personal data will be on Client’s side.
            <li>DATA COLLECTED</li>

            Personal data, or personal information, means any information about an individual from which that person can be identified. It does not include data where the identity has been removed (anonymous data). The Company may collect, use, store and transfer different kinds of personal data about the Client which we have grouped together follows:

            Identity Data includes first name, maiden name, last name, username or similar identifier.
            Contact Data includes email address and telephone numbers.
            Technical Data includes internet protocol (IP) address, Client’s login data, browser type and version, time zone setting and location, browser plug-in types and versions, operating system and platform and other technology on the devices the Client uses to access this website.
            Profile Data includes the username and password of the Client, his interests, preferences, feedback and survey responses.
            Usage Data includes information about how you use our website, products and services.
            Marketing and Communications Data includes preferences of the Client in relation to receiving marketing from the Company and its third parties and respective communication preferences.
            Automated technologies or interactions. As the Client interacts with the Website, his Technical Data about his equipment, browsing actions and patterns may be collected automatically. The Company collects such personal data by using cookies, server logs and other similar technologies. Technical Data about the Client may also be requested if such Client visits other websites by employing cookies of the Company. 

            <li>HOW THE COMPANY USES PERSONAL DATA OF THE CLIENTS</li>

            Client’s personal data will be used only in case where the law allows the Company to do so. Most commonly, we will use Client’s personal data in the following circumstances:

            Where there is a need to perform the agreement (concluded or in a process of conclusion with the Client).
            Where it is necessary for Company’s legitimate interests (or those of a third party) and if such interests and fundamental rights do not override these interests.
            Where the Company shall comply with a legal or regulatory obligation.

            In general, the Company does not rely on respective consent, forming a legal basis for processing of Client’s personal data, other than in relation to sending third party direct marketing communications to you via email or text message. The Client has the right to withdraw his consent to marketing purposes at any time by contacting the Company via mail to info@ARCHFXGLOBE.com
            <li>PURPOSES FOR WHICH THE COMPANY USES PERSONAL DATA OF THE CLIENTS</li>

            Client’s personal data may be processed for more than one lawful ground depending on the specific purpose for which we are using your data. If necessary, the Client shall contact the Company via mail to info@ARCHFXGLOBE.com for the purpose of obtaining necessary details about the specific legal ground the Company relies on to process his personal data where more than one ground has been set out.
            <li>DISCLOSURE OF CLIENT’S PERSONAL DATA</li>

            The Company may share Client‘s personal data with third parties for the purpose of carrying out its services related to ARCHFXGLOBE properly. Security of Client‘s personal data shall be fully respected by such third parties and treated in accordance with the law. Such Client‘s personal data may not be used by third parties for their own purposes while they may be processed only for specified purposes by the Company and in accordance with Company‘s instructions. Such providers are: <br>

            Paystack Inc. www.paystack.com
            Coinbase Commerce Inc. www.coinbase.com
          </ol>
        </div>
      </div>
      <div class="modal-footer justify-content-center">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- modal end for privacy policy -->

<!-- modal for  terms and condition-->
<div class="modal fade" id="termsModal" tabindex="-1" aria-labelledby="termsModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header justify-content-center">
        <h5 class="modal-title" id="exampleModalLabel">TERMS OF REFERENCE</h5>
      </div>
      <div class="modal-body">
        <div class="col">
          
          <ol>
            <li>No professional advice or investment recommendation.</li>
            Any recommendations on the website should not be considered as a solicitation to buy or an offer to sell. The recommendations are not individual recommendations to a specific user. ARCHFXGLOBE is not an investment adviser, therefore, any trade ideas or signals should not be taken as investment advice. The users are solely responsible for the investment decisions they make. Users should consult a tax professional or attorney to understand their tax or legal obligations.
            <li>No refund policy.</li>
            The licensed ARCHFXGLOBE indicator and scanner is a lifetime license activation product and cannot be deactivated once it has been licensed to your MT4 account number. The licensed cannot be transfered from one MT4 account number to the other. It is a virtual digital product that cannot be returned and therefore is nonrefundable.
            <li>Access to website.</li>
            The website, or any part of it, may not be duplicated, copied, used, or otherwise exploited for any commercial mean without our express, written permission. You may not use any framing techniques to acquire any logo, trademark or other proprietary content (textual, images, text, layouts or forms) of our website without our prior written approval.
            <li>Website policies.</li>
            ARCHFXGLOBE reserves the right to make changes to the website, policies, and terms of use at any given time and does not need to inform its users when doing so. It is the responsibility of the members to check the privacy policy and terms of use frequently to see any recent changes.
            <li>Limited warranties.</li>
            We do not warrant the completeness or accuracy of the information published on this website; nor do we commit to ensuring that the website remains available or that the material on the website is kept up to date.
            <li>Limitations and exclusions of liability</li>
            ARCHFXGLOBE will not be responsible to any fraud activities carried out by anybody direct or indirect with any product, item, material or information from this website. We are not liable for any wrong interpretation, distributing or sharing of information from this website. We will not be liable to you in respect of any losses arising out of any event or events beyond our reasonable control. We will not be liable to you in respect of any business losses, including (without limitation) loss of or damage to profits, income, revenue, use, production, anticipated savings, business, contracts, commercial opportunities or goodwill. Neither we nor any third parties provide any warranty or guarantee as to the accuracy, timeliness, performance, completeness or suitability of the information and materials found or offered on this website for any particular purpose. You acknowledge that such information and materials may contain inaccuracies or errors and we expressly exclude liability for any such inaccuracies or errors to the fullest extent permitted by law. Your use of any information or materials on this website is entirely at your own risk, for which we shall not be liable. It shall be your own responsibility to ensure that any products, services or information available through this website meet your specific requirements.
            <li>High risk investment.</li>
            Trading foreign exchange on margin carries a high level of risk, and may not be suitable for all investors. The high degree of leverage can work against you as well as for you. Before deciding to trade foreign exchange, you should carefully consider your investment objectives, level of experience, and risk appetite. The possibility exists that you could sustain a loss of some or all of your initial investment and therefore you should not invest money that you cannot afford to lose. You should be aware of all the risks associated with foreign exchange trading, and seek advice from an independent financial advisor if you have any doubts.
            <li>Disclaimer.</li>
            All information posted on this website is of our opinion and the opinion of reviewers, and may not reflect the truth. Please use your own good judgment and use common sense as well as seeking advice from a qualified consultant before believing and accepting any information posted on this website.
            <li>Changes to this Statement.</li>
            ArchFxGlobe.com will occasionally update this Terms of Service to reflect company and customer feedback. ARCHFXGLOBE.com encourages you to periodically review this Statement to be informed of how ARCHFXGLOBE.com is protecting your information. All of these terms are subject to change without notice. Changes will be posted on this page.
          </ol>
        </div>
      </div>
      <div class="modal-footer justify-content-center">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<script src="archjs.js"></script>
<script>
  const pswrd_1 = document.querySelector("#pswrd_1");
  const pswrd_2 = document.querySelector("#pswrd_2");
  const firstname = document.querySelector("#firstname");
  const lastname = document.querySelector("#lastname");
  const email = document.querySelector("#email");
  const confPassError = document.querySelector(".confPassError");
  const confFNameError = document.querySelector(".confFNameError");
  const confLNameError = document.querySelector(".confLNameError");
  const confemailError = document.querySelector(".confemailError");
  const btn = document.querySelector("button");
  const showBtn = document.querySelector(".show");
  

function active(){
    if(pswrd_1.value.length >= 6){
        $('.spSignUp').removeClass("disabled");
        pswrd_2.removeAttribute("disabled", "");
    }else{
      $('.spSignUp').addClass("disabled");
      pswrd_2.setAttribute("disabled", "");
    }
}

//confPassError.onclick = 
function pass1equalpass2(){
  if(pswrd_1.value != pswrd_2.value){
    $('.confPassError').removeClass("d-none");
    $('.confPassError').removeClass("alert-success");
    $('.confPassError').addClass("alert-danger");
    $('.confPassError').addClass("d-flex");
    confPassError.style.display = "block";
    confPassError.textContent = "Password not matched";
  }else if(pswrd_1.value === pswrd_2.value){
    $('.confPassError').removeClass("d-none");
    $('.confPassError').removeClass("alert-danger");
    $('.confPassError').removeClass("text-danger");
    $('.confPassError').addClass("alert-success");
    $('.confPassError').addClass("d-flex");
    confPassError.style.display = "block";
    confPassError.textContent = "Password matched";
  }
  if(firstname.value != ""){
    $('.confFNameError').addClass("d-none");
    confFNameError.textContent = "";
  }else{
    $('.confFNameError').removeClass("d-none");
    $('.confFNameError').addClass("alert-danger");
    $('.confFNameError').addClass("d-flex");
    confFNameError.textContent = "First name cannot be empty";
  }

  if(lastname.value != ""){
    $('.confLNameError').addClass("d-none");
    confLNameError.textContent = "";
  }else{
    $('.confLNameError').removeClass("d-none");
    $('.confLNameError').addClass("alert-danger");
    $('.confLNameError').addClass("d-flex");
    confFNameError.textContent = "Last name cannot be empty";
  }

  if(email.value != ""){
    $('.confemailError').addClass("d-none");
    email.textContent = "";
  }else{
    $('.confemailError').removeClass("d-none");
    $('.confemailError').addClass("alert-danger");
    $('.confemailError').addClass("d-flex");
    email.textContent = "Email cannot be empty";
  }
  
}



function active_2(){
  if(pswrd_2.value != ""){
    $('.show').removeClass("d-none");
    showBtn.style.display = "block";
    showBtn.onclick = function(){
      if((pswrd_1.type == "password") && (pswrd_2.type == "password")){
        pswrd_1.type = "text";
        pswrd_2.type = "text";
        $('.fa').removeClass("fa-eye-slash");
        $('.fa').addClass("fa-eye");
        //document.getElementById('decide').innerText = "Hide";
        //this.textContent = "Hide";
      }else{
        $('.show').removeClass("d-none");
        pswrd_1.type = "password";
        pswrd_2.type = "password";
        $('.fa').removeClass("fa-eye");
        $('.fa').addClass("fa-eye-slash");
        //document.getElementById('decide').innerText = "Show";
        //this.textContent = "Show";
        
      }
    }
  }else{
      $('.show').addClass("d-none");
      showBtn.style.display = "none";
  }
}



</script>
<!--<script src="bootstrap5/js/bootstrap.js"></script>-->
</body>
</html>