<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forex-System | Trading</title>

    <link rel="icon" href="{{ asset('storage/app/public/photos/'.$settings->favicon)}}" type="image/png"/>

   <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.1/dist/alpine.min.js" defer></script>

    <!-- Bootstrap CSS File -->
    <link rel="stylesheet" href="./temp/lib/bootstrap/css/bootstrap.min.css">

    <!-- Libraries CSS Files -->
        <link rel="stylesheet" href="./temp/lib/font-awesome/css/font-awesome.min.css">
        <link href="./temp/lib/animate/animate.min.css" rel="stylesheet">
        <link href="./temp/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
        <link href="./temp/lib/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="./temp/lib/icofont/icofont.min.css" rel="stylesheet">
        <link href="./temp/lib/jquery/magnific-popup.css" rel="stylesheet">
        <link href="./temp/lib/aos/aos.css" rel="stylesheet">
        <link href="./temp/lib/venobox/venobox.css" rel="stylesheet">
        <link href="./temp/lib/icofont/icofont.min.css" rel="stylesheet">
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
        <link href="./temp/css/frontend_style_blue.css" rel="stylesheet">
        
        <!-- JavaScript Libraries -->
        
        <script src="./temp/lib/jquery/jquery.min.js"></script>
        <script src="./temp/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="./temp/lib/jquery.easing/jquery.easing.min.js"></script>
        <script src="./temp/lib/php-email-form/validate.js"></script>
        <script src="./temp/lib/waypoints/jquery.waypoints.min.js"></script>
        <script src="./temp/lib/counterup/counterup.min.js"></script>
        <script src="./temp/lib/isotope-layout/isotope.pkgd.min.js"></script>
        <script src="./temp/lib/venobox/venobox.min.js"></script>
        <script src="./temp/lib/owl.carousel/owl.carousel.min.js"></script>
        <script src="./temp/lib/aos/aos.js"></script>

        <!-- Template Main Javascript File -->
        <script src="./temp/js/main.js"></script>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</head>
<body class="d-flex flex-column h-100 auth-Page">
  <!-- ======= signup Section ======= -->
  <section class="auth ">
      <div class="container">
          <div class="row justify-content-center user-auth bg-purple">
              <div class="col-12 col-md-6 col-lg-6 col-sm-10 col-xl-6">
                  <div class="mb-4 text-center">
                      <a href="./index.html"><img src="" alt="" title="" class="img-fluid" />Forex-System </a>

                          <!-- @if(Session::has('status'))
                          <div class="alert alert-success alert-dismissible fade show" role="alert">
                              {{ Session::get('status') }}
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                              </button>
                          </div>
                          @endif -->
                  </div>
                  <div class="card">
                      <h1 class="mt-3 text-center"> Create an Account</h1>

                      <form method="POST" action="" class="mt-5 card__form">
                        
                          <div class="form-row">
                              <div class="form-group col-md-12">
                                <label for="f_name">FullName</label>
                                <input type="text" class="mr-2 form-control" name="name" value="" id="f_name" placeholder="Enter FullName">
                              </div>

                          </div>

                          <div class="form-group ">
                              <label for="email">Email address</label>
                              <input type="email" class="form-control" name="email" value="" id="email" placeholder="name@example.com">
                          </div>

                          <div class="form-group ">
                              <label for="phone">Phone Number</label>
                              <input type="mumber" class="form-control" name="phone" value="" id="phone" placeholder="Enter Phone number">
                          </div>
                          <div class="form-row">
                              <div class="form-group col-md-6">
                                  <label for="password">Password</label>
                                  <input type="password" class="form-control" name="password" id="password" placeholder="Enter Password">
                              </div>
                              <div class="form-group col-md-6">
                                  <label for="confirm-password">Confirm Password</label>
                                  <input type="password" class="form-control" name="password_confirmation" value="" id="cpassword" placeholder="Confirm Password">
                              </div>
                          </div>
                          <div class="form-group">
                              <label for="country" name="country">Country</label>
                              <select class="form_control" name="country" id="country" required>
                                  <option selected disabled>Choose Country</option>
                                      <option value="Afganistan">Afghanistan</option>
                                      <option value="Albania">Albania</option>
                                      <option value="Algeria">Algeria</option>
                                      <option value="American Samoa">American Samoa</option>
                                      <option value="Andorra">Andorra</option>
                                      <option value="Angola">Angola</option>
                                      <option value="Anguilla">Anguilla</option>
                                      <option value="Antigua &amp; Barbuda">Antigua &amp; Barbuda</option>
                                      <option value="Argentina">Argentina</option>
                                      <option value="Armenia">Armenia</option>
                                      <option value="Aruba">Aruba</option>
                                      <option value="Australia">Australia</option>
                                      <option value="Austria">Austria</option>
                                      <option value="Azerbaijan">Azerbaijan</option>
                                      <option value="Bahamas">Bahamas</option>
                                      <option value="Bahrain">Bahrain</option>
                                      <option value="Bangladesh">Bangladesh</option>
                                      <option value="Barbados">Barbados</option>
                                      <option value="Belarus">Belarus</option>
                                      <option value="Belgium">Belgium</option>
                                      <option value="Belize">Belize</option>
                                      <option value="Benin">Benin</option>
                                      <option value="Bermuda">Bermuda</option>
                                      <option value="Bhutan">Bhutan</option>
                                      <option value="Bolivia">Bolivia</option>
                                      <option value="Bonaire">Bonaire</option>
                                      <option value="Bosnia &amp; Herzegovina">Bosnia &amp; Herzegovina</option>
                                      <option value="Botswana">Botswana</option>
                                      <option value="Brazil">Brazil</option>
                                      <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                                      <option value="Brunei">Brunei</option>
                                      <option value="Bulgaria">Bulgaria</option>
                                      <option value="Burkina Faso">Burkina Faso</option>
                                      <option value="Burundi">Burundi</option>
                                      <option value="Cambodia">Cambodia</option>
                                      <option value="Cameroon">Cameroon</option>
                                      <option value="Canada">Canada</option>
                                      <option value="Canary Islands">Canary Islands</option>
                                      <option value="Cape Verde">Cape Verde</option>
                                      <option value="Cayman Islands">Cayman Islands</option>
                                      <option value="Central African Republic">Central African Republic</option>
                                      <option value="Chad">Chad</option>
                                      <option value="Channel Islands">Channel Islands</option>
                                      <option value="Chile">Chile</option>
                                      <option value="China">China</option>
                                      <option value="Christmas Island">Christmas Island</option>
                                      <option value="Cocos Island">Cocos Island</option>
                                      <option value="Colombia">Colombia</option>
                                      <option value="Comoros">Comoros</option>
                                      <option value="Congo">Congo</option>
                                      <option value="Cook Islands">Cook Islands</option>
                                      <option value="Costa Rica">Costa Rica</option>
                                      <option value="Cote DIvoire">Cote D'Ivoire</option>
                                      <option value="Croatia">Croatia</option>
                                      <option value="Cuba">Cuba</option>
                                      <option value="Curaco">Curacao</option>
                                      <option value="Cyprus">Cyprus</option>
                                      <option value="Czech Republic">Czech Republic</option>
                                      <option value="Denmark">Denmark</option>
                                      <option value="Djibouti">Djibouti</option>
                                      <option value="Dominica">Dominica</option>
                                      <option value="Dominican Republic">Dominican Republic</option>
                                      <option value="East Timor">East Timor</option>
                                      <option value="Ecuador">Ecuador</option>
                                      <option value="Egypt">Egypt</option>
                                      <option value="El Salvador">El Salvador</option>
                                      <option value="Equatorial Guinea">Equatorial Guinea</option>
                                      <option value="Eritrea">Eritrea</option>
                                      <option value="Estonia">Estonia</option>
                                      <option value="Ethiopia">Ethiopia</option>
                                      <option value="Falkland Islands">Falkland Islands</option>
                                      <option value="Faroe Islands">Faroe Islands</option>
                                      <option value="Fiji">Fiji</option>
                                      <option value="Finland">Finland</option>
                                      <option value="France">France</option>
                                      <option value="French Guiana">French Guiana</option>
                                      <option value="French Polynesia">French Polynesia</option>
                                      <option value="French Southern Ter">French Southern Ter</option>
                                      <option value="Gabon">Gabon</option>
                                      <option value="Gambia">Gambia</option>
                                      <option value="Georgia">Georgia</option>
                                      <option value="Germany">Germany</option>
                                      <option value="Ghana">Ghana</option>
                                      <option value="Gibraltar">Gibraltar</option>
                                      <option value="Great Britain">Great Britain</option>
                                      <option value="Greece">Greece</option>
                                      <option value="Greenland">Greenland</option>
                                      <option value="Grenada">Grenada</option>
                                      <option value="Guadeloupe">Guadeloupe</option>
                                      <option value="Guam">Guam</option>
                                      <option value="Guatemala">Guatemala</option>
                                      <option value="Guinea">Guinea</option>
                                      <option value="Guyana">Guyana</option>
                                      <option value="Haiti">Haiti</option>
                                      <option value="Hawaii">Hawaii</option>
                                      <option value="Honduras">Honduras</option>
                                      <option value="Hong Kong">Hong Kong</option>
                                      <option value="Hungary">Hungary</option>
                                      <option value="Iceland">Iceland</option>
                                      <option value="India">India</option>
                                      <option value="Indonesia">Indonesia</option>
                                      <option value="Iran">Iran</option>
                                      <option value="Iraq">Iraq</option>
                                      <option value="Ireland">Ireland</option>
                                      <option value="Isle of Man">Isle of Man</option>
                                      <option value="Israel">Israel</option>
                                      <option value="Italy">Italy</option>
                                      <option value="Jamaica">Jamaica</option>
                                      <option value="Japan">Japan</option>
                                      <option value="Jordan">Jordan</option>
                                      <option value="Kazakhstan">Kazakhstan</option>
                                      <option value="Kenya">Kenya</option>
                                      <option value="Kiribati">Kiribati</option>
                                      <option value="Korea North">Korea North</option>
                                      <option value="Korea Sout">Korea South</option>
                                      <option value="Kuwait">Kuwait</option>
                                      <option value="Kyrgyzstan">Kyrgyzstan</option>
                                      <option value="Laos">Laos</option>
                                      <option value="Latvia">Latvia</option>
                                      <option value="Lebanon">Lebanon</option>
                                      <option value="Lesotho">Lesotho</option>
                                      <option value="Liberia">Liberia</option>
                                      <option value="Libya">Libya</option>
                                      <option value="Liechtenstein">Liechtenstein</option>
                                      <option value="Lithuania">Lithuania</option>
                                      <option value="Luxembourg">Luxembourg</option>
                                      <option value="Macau">Macau</option>
                                      <option value="Macedonia">Macedonia</option>
                                      <option value="Madagascar">Madagascar</option>
                                      <option value="Malaysia">Malaysia</option>
                                      <option value="Malawi">Malawi</option>
                                      <option value="Maldives">Maldives</option>
                                      <option value="Mali">Mali</option>
                                      <option value="Malta">Malta</option>
                                      <option value="Marshall Islands">Marshall Islands</option>
                                      <option value="Martinique">Martinique</option>
                                      <option value="Mauritania">Mauritania</option>
                                      <option value="Mauritius">Mauritius</option>
                                      <option value="Mayotte">Mayotte</option>
                                      <option value="Mexico">Mexico</option>
                                      <option value="Midway Islands">Midway Islands</option>
                                      <option value="Moldova">Moldova</option>
                                      <option value="Monaco">Monaco</option>
                                      <option value="Mongolia">Mongolia</option>
                                      <option value="Montserrat">Montserrat</option>
                                      <option value="Morocco">Morocco</option>
                                      <option value="Mozambique">Mozambique</option>
                                      <option value="Myanmar">Myanmar</option>
                                      <option value="Nambia">Nambia</option>
                                      <option value="Nauru">Nauru</option>
                                      <option value="Nepal">Nepal</option>
                                      <option value="Netherland Antilles">Netherland Antilles</option>
                                      <option value="Netherlands">Netherlands (Holland, Europe)</option>
                                      <option value="Nevis">Nevis</option>
                                      <option value="New Caledonia">New Caledonia</option>
                                      <option value="New Zealand">New Zealand</option>
                                      <option value="Nicaragua">Nicaragua</option>
                                      <option value="Niger">Niger</option>
                                      <option value="Nigeria">Nigeria</option>
                                      <option value="Niue">Niue</option>
                                      <option value="Norfolk Island">Norfolk Island</option>
                                      <option value="Norway">Norway</option>
                                      <option value="Oman">Oman</option>
                                      <option value="Pakistan">Pakistan</option>
                                      <option value="Palau Island">Palau Island</option>
                                      <option value="Palestine">Palestine</option>
                                      <option value="Panama">Panama</option>
                                      <option value="Papua New Guinea">Papua New Guinea</option>
                                      <option value="Paraguay">Paraguay</option>
                                      <option value="Peru">Peru</option>
                                      <option value="Phillipines">Philippines</option>
                                      <option value="Pitcairn Island">Pitcairn Island</option>
                                      <option value="Poland">Poland</option>
                                      <option value="Portugal">Portugal</option>
                                      <option value="Puerto Rico">Puerto Rico</option>
                                      <option value="Qatar">Qatar</option>
                                      <option value="Republic of Montenegro">Republic of Montenegro</option>
                                      <option value="Republic of Serbia">Republic of Serbia</option>
                                      <option value="Reunion">Reunion</option>
                                      <option value="Romania">Romania</option>
                                      <option value="Russia">Russia</option>
                                      <option value="Rwanda">Rwanda</option>
                                      <option value="St Barthelemy">St Barthelemy</option>
                                      <option value="St Eustatius">St Eustatius</option>
                                      <option value="St Helena">St Helena</option>
                                      <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                                      <option value="St Lucia">St Lucia</option>
                                      <option value="St Maarten">St Maarten</option>
                                      <option value="St Pierre &amp; Miquelon">St Pierre &amp; Miquelon</option>
                                      <option value="St Vincent &amp; Grenadines">St Vincent &amp; Grenadines</option>
                                      <option value="Saipan">Saipan</option>
                                      <option value="Samoa">Samoa</option>
                                      <option value="Samoa American">Samoa American</option>
                                      <option value="San Marino">San Marino</option>
                                      <option value="Sao Tome &amp; Principe">Sao Tome &amp; Principe</option>
                                      <option value="Saudi Arabia">Saudi Arabia</option>
                                      <option value="Senegal">Senegal</option>
                                      <option value="Serbia">Serbia</option>
                                      <option value="Seychelles">Seychelles</option>
                                      <option value="Sierra Leone">Sierra Leone</option>
                                      <option value="Singapore">Singapore</option>
                                      <option value="Slovakia">Slovakia</option>
                                      <option value="Slovenia">Slovenia</option>
                                      <option value="Solomon Islands">Solomon Islands</option>
                                      <option value="Somalia">Somalia</option>
                                      <option value="South Africa">South Africa</option>
                                      <option value="Spain">Spain</option>
                                      <option value="Sri Lanka">Sri Lanka</option>
                                      <option value="Sudan">Sudan</option>
                                      <option value="Suriname">Suriname</option>
                                      <option value="Swaziland">Swaziland</option>
                                      <option value="Sweden">Sweden</option>
                                      <option value="Switzerland">Switzerland</option>
                                      <option value="Syria">Syria</option>
                                      <option value="Tahiti">Tahiti</option>
                                      <option value="Taiwan">Taiwan</option>
                                      <option value="Tajikistan">Tajikistan</option>
                                      <option value="Tanzania">Tanzania</option>
                                      <option value="Thailand">Thailand</option>
                                      <option value="Togo">Togo</option>
                                      <option value="Tokelau">Tokelau</option>
                                      <option value="Tonga">Tonga</option>
                                      <option value="Trinidad &amp; Tobago">Trinidad &amp; Tobago</option>
                                      <option value="Tunisia">Tunisia</option>
                                      <option value="Turkey">Turkey</option>
                                      <option value="Turkmenistan">Turkmenistan</option>
                                      <option value="Turks &amp; Caicos Is">Turks &amp; Caicos Is</option>
                                      <option value="Tuvalu">Tuvalu</option>
                                      <option value="Uganda">Uganda</option>
                                      <option value="Ukraine">Ukraine</option>
                                      <option value="United Arab Erimates">United Arab Emirates</option>
                                      <option value="United Kingdom">United Kingdom</option>
                                      <option value="United States of America">United States of America</option>
                                      <option value="Uraguay">Uruguay</option>
                                      <option value="Uzbekistan">Uzbekistan</option>
                                      <option value="Vanuatu">Vanuatu</option>
                                      <option value="Vatican City State">Vatican City State</option>
                                      <option value="Venezuela">Venezuela</option>
                                      <option value="Vietnam">Vietnam</option>
                                      <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                                      <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                                      <option value="Wake Island">Wake Island</option>
                                      <option value="Wallis &amp; Futana Is">Wallis &amp; Futana Is</option>
                                      <option value="Yemen">Yemen</option>
                                      <option value="Zaire">Zaire</option>
                                      <option value="Zambia">Zambia</option>
                                      <option value="Zimbabwe">Zimbabwe</option>
                              </select>
                          </div>
                          <!-- @if($settings->captcha == "true")
                              <div class="form-group{{ $errors->has('g-recaptcha-response') ? ' has-error' : '' }}">
                                  <label class="col-md-4 control-label">Captcha</label>
                                  <div class="col-md-6">
                                      {!! NoCaptcha::display() !!}
                                      @if ($errors->has('g-recaptcha-response'))
                                          <span class="help-block">
                                              <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                                          </span>
                                      @endif
                                  </div>
                              </div>
                          @endif -->
                          
                          <div class="form-group">
                              <button class="mt-4 btn btn-primary" type="submit">Register</button>
                          </div>
  
                          <div class="mb-3 text-center">
                              <small class="mb-2 text-center ">Already have an Account  <a href="./login.html">Login.</a> </small>

                              <small class="text-center">&copy; Copyright  2024 &nbsp; Forex-System &nbsp; All Rights Reserved.</small>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
  
  </section>

  <!-- Wrapper Ends -->
</body>
</html>