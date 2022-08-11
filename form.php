<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Application Form</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Favicon -->
  <link rel="icon" href="assets/images/favicon.png">

  <!-- CSS
        ============================================ -->

  <!-- Vendor & Plugins CSS (Please remove the comment from below vendor.min.css & plugins.min.css for better website load performance and remove css files from avobe) -->
  <link rel="stylesheet" href="assets/css/form.css">
  <link rel="stylesheet" href="assets/css/vendor/vendor.min.css">
  <link rel="stylesheet" href="assets/css/plugins/plugins.min.css">

  <!-- Main Style CSS -->
  <link rel="stylesheet" href="assets/css/style.css">



</head>

<body>

  <!-- 
    <div class="preloader-activate preloader-active open_tm_preloader">
        <div class="preloader-area-wrap">
            <div class="spinner d-flex justify-content-center align-items-center h-100">
                <div class="bounce1"></div>
                <div class="bounce2"></div>
                <div class="bounce3"></div>
            </div>
        </div>
    </div> -->

  <?php require("templates/page-header.php"); ?>

  <!-- breadcrumb-area start -->
  <div class="breadcrumb-area">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="breadcrumb_box text-center">
            <h2 class="breadcrumb-title text-color-white">Application Form</h2>
            <!-- breadcrumb-list start -->
            <ul class="breadcrumb-list">
              <!-- <li class="breadcrumb-item"><a href="./">Home</a></li> -->
              <!-- <li class="breadcrumb-item active">Contact us </li> -->
            </ul>
            <!-- breadcrumb-list end -->
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- breadcrumb-area end -->

  <div id="main-wrapper">
    <div class="site-wrapper-reveal">

      <div class="row">
        <div class="col-md-12 mt-4 mb-5">
          <form action="insert.php" method="post">

            <fieldset>

              <legend><span class="number">1</span> Basics </legend>

              <label for="name">What is your name? You will be the primary contact for your team!</label>
              <input type="text" id="name" name="user_name">

              <label for="email">Email:</label>
              <input type="email" id="mail" name="user_email">

              <label for="name">Name of company</label>
              <input type="text" id="companyname" name="company_name">

              <label>Does your startup have an existing legal entity in Africa? </label>
              <input type="radio" id="under_13" value="under_13" name="user_age"><label for="under_13" class="light">Yes</label><br>
              <input type="radio" id="Yes" value="over_13" name="existing"><label for="No" class="light">No</label>

              <label for="name">Company URL</label>
              <input type="text" id="companyurl" name="company_url">
              <label for="name">Describe what you are building in 100 characters or less (your mission)</label>
              <input type="text" id="mission" name="mission_description">
              <label for="name">What year did you start working on this idea?</label>
              <input type="text" id="workingyear" name="working_year">

              <label for="job">Which country is your company based in?:</label>
              <select id="country" name="country">
                <optgroup label="Select Country">
                  <option value="AF">Afghanistan</option>
                  <option value="AX">Aland Islands</option>
                  <option value="AL">Albania</option>
                  <option value="DZ">Algeria</option>
                  <option value="AS">American Samoa</option>
                  <option value="AD">Andorra</option>
                  <option value="AO">Angola</option>
                  <option value="AI">Anguilla</option>
                  <option value="AQ">Antarctica</option>
                  <option value="AG">Antigua and Barbuda</option>
                  <option value="AR">Argentina</option>
                  <option value="AM">Armenia</option>
                  <option value="AW">Aruba</option>
                  <option value="AU">Australia</option>
                  <option value="AT">Austria</option>
                  <option value="AZ">Azerbaijan</option>
                  <option value="BS">Bahamas</option>
                  <option value="BH">Bahrain</option>
                  <option value="BD">Bangladesh</option>
                  <option value="BB">Barbados</option>
                  <option value="BY">Belarus</option>
                  <option value="BE">Belgium</option>
                  <option value="BZ">Belize</option>
                  <option value="BJ">Benin</option>
                  <option value="BM">Bermuda</option>
                  <option value="BT">Bhutan</option>
                  <option value="BO">Bolivia</option>
                  <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                  <option value="BA">Bosnia and Herzegovina</option>
                  <option value="BW">Botswana</option>
                  <option value="BV">Bouvet Island</option>
                  <option value="BR">Brazil</option>
                  <option value="IO">British Indian Ocean Territory</option>
                  <option value="BN">Brunei Darussalam</option>
                  <option value="BG">Bulgaria</option>
                  <option value="BF">Burkina Faso</option>
                  <option value="BI">Burundi</option>
                  <option value="KH">Cambodia</option>
                  <option value="CM">Cameroon</option>
                  <option value="CA">Canada</option>
                  <option value="CV">Cape Verde</option>
                  <option value="KY">Cayman Islands</option>
                  <option value="CF">Central African Republic</option>
                  <option value="TD">Chad</option>
                  <option value="CL">Chile</option>
                  <option value="CN">China</option>
                  <option value="CX">Christmas Island</option>
                  <option value="CC">Cocos (Keeling) Islands</option>
                  <option value="CO">Colombia</option>
                  <option value="KM">Comoros</option>
                  <option value="CG">Congo</option>
                  <option value="CD">Congo, Democratic Republic of the Congo</option>
                  <option value="CK">Cook Islands</option>
                  <option value="CR">Costa Rica</option>
                  <option value="CI">Cote D'Ivoire</option>
                  <option value="HR">Croatia</option>
                  <option value="CU">Cuba</option>
                  <option value="CW">Curacao</option>
                  <option value="CY">Cyprus</option>
                  <option value="CZ">Czech Republic</option>
                  <option value="DK">Denmark</option>
                  <option value="DJ">Djibouti</option>
                  <option value="DM">Dominica</option>
                  <option value="DO">Dominican Republic</option>
                  <option value="EC">Ecuador</option>
                  <option value="EG">Egypt</option>
                  <option value="SV">El Salvador</option>
                  <option value="GQ">Equatorial Guinea</option>
                  <option value="ER">Eritrea</option>
                  <option value="EE">Estonia</option>
                  <option value="ET">Ethiopia</option>
                  <option value="FK">Falkland Islands (Malvinas)</option>
                  <option value="FO">Faroe Islands</option>
                  <option value="FJ">Fiji</option>
                  <option value="FI">Finland</option>
                  <option value="FR">France</option>
                  <option value="GF">French Guiana</option>
                  <option value="PF">French Polynesia</option>
                  <option value="TF">French Southern Territories</option>
                  <option value="GA">Gabon</option>
                  <option value="GM">Gambia</option>
                  <option value="GE">Georgia</option>
                  <option value="DE">Germany</option>
                  <option value="GH">Ghana</option>
                  <option value="GI">Gibraltar</option>
                  <option value="GR">Greece</option>
                  <option value="GL">Greenland</option>
                  <option value="GD">Grenada</option>
                  <option value="GP">Guadeloupe</option>
                  <option value="GU">Guam</option>
                  <option value="GT">Guatemala</option>
                  <option value="GG">Guernsey</option>
                  <option value="GN">Guinea</option>
                  <option value="GW">Guinea-Bissau</option>
                  <option value="GY">Guyana</option>
                  <option value="HT">Haiti</option>
                  <option value="HM">Heard Island and Mcdonald Islands</option>
                  <option value="VA">Holy See (Vatican City State)</option>
                  <option value="HN">Honduras</option>
                  <option value="HK">Hong Kong</option>
                  <option value="HU">Hungary</option>
                  <option value="IS">Iceland</option>
                  <option value="IN">India</option>
                  <option value="ID">Indonesia</option>
                  <option value="IR">Iran, Islamic Republic of</option>
                  <option value="IQ">Iraq</option>
                  <option value="IE">Ireland</option>
                  <option value="IM">Isle of Man</option>
                  <option value="IL">Israel</option>
                  <option value="IT">Italy</option>
                  <option value="JM">Jamaica</option>
                  <option value="JP">Japan</option>
                  <option value="JE">Jersey</option>
                  <option value="JO">Jordan</option>
                  <option value="KZ">Kazakhstan</option>
                  <option value="KE">Kenya</option>
                  <option value="KI">Kiribati</option>
                  <option value="KP">Korea, Democratic People's Republic of</option>
                  <option value="KR">Korea, Republic of</option>
                  <option value="XK">Kosovo</option>
                  <option value="KW">Kuwait</option>
                  <option value="KG">Kyrgyzstan</option>
                  <option value="LA">Lao People's Democratic Republic</option>
                  <option value="LV">Latvia</option>
                  <option value="LB">Lebanon</option>
                  <option value="LS">Lesotho</option>
                  <option value="LR">Liberia</option>
                  <option value="LY">Libyan Arab Jamahiriya</option>
                  <option value="LI">Liechtenstein</option>
                  <option value="LT">Lithuania</option>
                  <option value="LU">Luxembourg</option>
                  <option value="MO">Macao</option>
                  <option value="MK">Macedonia, the Former Yugoslav Republic of</option>
                  <option value="MG">Madagascar</option>
                  <option value="MW">Malawi</option>
                  <option value="MY">Malaysia</option>
                  <option value="MV">Maldives</option>
                  <option value="ML">Mali</option>
                  <option value="MT">Malta</option>
                  <option value="MH">Marshall Islands</option>
                  <option value="MQ">Martinique</option>
                  <option value="MR">Mauritania</option>
                  <option value="MU">Mauritius</option>
                  <option value="YT">Mayotte</option>
                  <option value="MX">Mexico</option>
                  <option value="FM">Micronesia, Federated States of</option>
                  <option value="MD">Moldova, Republic of</option>
                  <option value="MC">Monaco</option>
                  <option value="MN">Mongolia</option>
                  <option value="ME">Montenegro</option>
                  <option value="MS">Montserrat</option>
                  <option value="MA">Morocco</option>
                  <option value="MZ">Mozambique</option>
                  <option value="MM">Myanmar</option>
                  <option value="NA">Namibia</option>
                  <option value="NR">Nauru</option>
                  <option value="NP">Nepal</option>
                  <option value="NL">Netherlands</option>
                  <option value="AN">Netherlands Antilles</option>
                  <option value="NC">New Caledonia</option>
                  <option value="NZ">New Zealand</option>
                  <option value="NI">Nicaragua</option>
                  <option value="NE">Niger</option>
                  <option value="NG">Nigeria</option>
                  <option value="NU">Niue</option>
                  <option value="NF">Norfolk Island</option>
                  <option value="MP">Northern Mariana Islands</option>
                  <option value="NO">Norway</option>
                  <option value="OM">Oman</option>
                  <option value="PK">Pakistan</option>
                  <option value="PW">Palau</option>
                  <option value="PS">Palestinian Territory, Occupied</option>
                  <option value="PA">Panama</option>
                  <option value="PG">Papua New Guinea</option>
                  <option value="PY">Paraguay</option>
                  <option value="PE">Peru</option>
                  <option value="PH">Philippines</option>
                  <option value="PN">Pitcairn</option>
                  <option value="PL">Poland</option>
                  <option value="PT">Portugal</option>
                  <option value="PR">Puerto Rico</option>
                  <option value="QA">Qatar</option>
                  <option value="RE">Reunion</option>
                  <option value="RO">Romania</option>
                  <option value="RU">Russian Federation</option>
                  <option value="RW">Rwanda</option>
                  <option value="BL">Saint Barthelemy</option>
                  <option value="SH">Saint Helena</option>
                  <option value="KN">Saint Kitts and Nevis</option>
                  <option value="LC">Saint Lucia</option>
                  <option value="MF">Saint Martin</option>
                  <option value="PM">Saint Pierre and Miquelon</option>
                  <option value="VC">Saint Vincent and the Grenadines</option>
                  <option value="WS">Samoa</option>
                  <option value="SM">San Marino</option>
                  <option value="ST">Sao Tome and Principe</option>
                  <option value="SA">Saudi Arabia</option>
                  <option value="SN">Senegal</option>
                  <option value="RS">Serbia</option>
                  <option value="CS">Serbia and Montenegro</option>
                  <option value="SC">Seychelles</option>
                  <option value="SL">Sierra Leone</option>
                  <option value="SG">Singapore</option>
                  <option value="SX">Sint Maarten</option>
                  <option value="SK">Slovakia</option>
                  <option value="SI">Slovenia</option>
                  <option value="SB">Solomon Islands</option>
                  <option value="SO">Somalia</option>
                  <option value="ZA">South Africa</option>
                  <option value="GS">South Georgia and the South Sandwich Islands</option>
                  <option value="SS">South Sudan</option>
                  <option value="ES">Spain</option>
                  <option value="LK">Sri Lanka</option>
                  <option value="SD">Sudan</option>
                  <option value="SR">Suriname</option>
                  <option value="SJ">Svalbard and Jan Mayen</option>
                  <option value="SZ">Swaziland</option>
                  <option value="SE">Sweden</option>
                  <option value="CH">Switzerland</option>
                  <option value="SY">Syrian Arab Republic</option>
                  <option value="TW">Taiwan, Province of China</option>
                  <option value="TJ">Tajikistan</option>
                  <option value="TZ">Tanzania, United Republic of</option>
                  <option value="TH">Thailand</option>
                  <option value="TL">Timor-Leste</option>
                  <option value="TG">Togo</option>
                  <option value="TK">Tokelau</option>
                  <option value="TO">Tonga</option>
                  <option value="TT">Trinidad and Tobago</option>
                  <option value="TN">Tunisia</option>
                  <option value="TR">Turkey</option>
                  <option value="TM">Turkmenistan</option>
                  <option value="TC">Turks and Caicos Islands</option>
                  <option value="TV">Tuvalu</option>
                  <option value="UG">Uganda</option>
                  <option value="UA">Ukraine</option>
                  <option value="AE">United Arab Emirates</option>
                  <option value="GB">United Kingdom</option>
                  <option value="US">United States</option>
                  <option value="UM">United States Minor Outlying Islands</option>
                  <option value="UY">Uruguay</option>
                  <option value="UZ">Uzbekistan</option>
                  <option value="VU">Vanuatu</option>
                  <option value="VE">Venezuela</option>
                  <option value="VN">Viet Nam</option>
                  <option value="VG">Virgin Islands, British</option>
                  <option value="VI">Virgin Islands, U.s.</option>
                  <option value="WF">Wallis and Futuna</option>
                  <option value="EH">Western Sahara</option>
                  <option value="YE">Yemen</option>
                  <option value="ZM">Zambia</option>
                  <option value="ZW">Zimbabwe</option><br>

                  <label>Does your startup have an existing legal entity in Africa? </label>
                  <input type="radio" id="under_13" value="under_13" name="user_age"><label for="under_13" class="light">Yes</label><br>
                  <input type="radio" id="Yes" value="over_13" name="existing"><label for="No" class="light">No</label>

                  <label for="name">How many people does your startup currently impact?</label>
                  <input type="text" id="peopleinstartup" name="peoplein_startup">

                  <label for="name">What's your current revenue?</label>
                  <input type="text" id="currentrevenue" name="current_revenue">

                  <label for="job">How many founders are you?</label>
                  <select id="founders" name="founder">
                    <optgroup label="Select founders">
                      <option value="AF">1</option>
                      <option value="AX">2</option>
                      <option value="AX">3</option>
                      <option value="AX">4</option>
                      <option value="AX">5+</option>

                      <label>Where did you hear about the HealthTech Hub Africa?</label>
                      <input type="checkbox" id="linkedin" value="linked_in" name="linked_in"><label class="light" for="linkedin">Linkedin</label><br>
                      <input type="checkbox" id="facebook" value="face_book" name="face_book"><label class="light" for="facebook">Facebook</label><br>
                      <input type="checkbox" id="novartisfoundation" value="norvatis_foundation" name="norvatis_foundation"><label class="light" for="norvatisfoundation">Norvatis Foundation</label>
                      <input type="checkbox" id="norrskenfoundation" value="norrsken_foundation" name="norrsken_foundation"><label class="light" for="norrskenfoundation">Norrsken Foundation</label>
                      <input type="checkbox" id="philipsfoundation" value="philips_foundation" name="philips_foundation"><label class="light" for="philips_foundation">Philips Foundation</label>
                      <input type="checkbox" id="twitter" value="twitter" name="twitter"><label class="light" for="twitter">Twitter</label>
                      <input type="checkbox" id="other" value="other" name="other"><label class="light" for="other">Other</label>
                      <div class="upload-documents">
                        <h3>Upload your pitch deck (max 10 slides)</h3>
                        <div class="upload-araa bg-white">
                          <input type="hidden" value="" name="fileContent" id="fileContent">
                          <input type="hidden" value="" name="filename" id="filename">
                          <div class="upload-icon float-left">
                            <i class="fas fa-cloud-upload-alt"></i>
                          </div>
                          <div class="upload-text">
                            <span>( File accepted: pdf. doc/ docx -
                              Max file size : 150kb for demo limit )</span>
                          </div>
                          <div class="upload-option text-center">
                            <label for="attach">Upload your pitch deck (max 10 slides)</label>
                            <input id="attach" style="visibility:hidden;" type="file">
                          </div>
                        </div>
                      </div>






            </fieldset>
            <fieldset>

              <legend><span class="number">2</span> Team</legend>

              <label for="bio">Name all co-founders, and what role they have in your company. Share Linkedin addresses to your co-founders (or similar website such as github, dribble, personal website, etc.)</label>
              <textarea id="co-founders" name="co_founders"></textarea>
              <label for="innovation">What made you work together on this idea and why is your team the best in the world for this innovation?</label>
              <textarea id="innovation" name="innovation"></textarea>

              <legend><span class="number">2</span> Impact</legend>



              <label for="mainhealthtech">In which main HealthTech area are you aiming to achieve impact?</label>
              <select id="mainhealthtech" name="mainhealthTech">
                <optgroup label="Cardiovascular Health
">
                  <option value="Cardiovascular Health
">Cardiovascular Health
                  </option>
                  <option value="Breast Cancer">Breast Cancer</option>
                  <option value="Virtual Care">Virtual Care</option>
                  <option value="Community Health">Community Health</option>
                </optgroup>
              </select>
              <label for="bio">What population health insights driven by data does the solution generate? With what data sets?</label>
              <textarea id="population" name="populationhealth"></textarea>
              <label for="technologyfit">How is your technology fit to use low income settings? How do you tackle problems linked to but not limited to: infrastructure availability, broadband connectivity, devices accessibility, availability and affordability of health services, data health system fragmentation and interoperability, digital literacy?</label>
              <textarea id="technologyfit" name="technologyfit"></textarea>
              <label for="impactproduct">Is your impact integrated into your product on a per unit or per user basis?</label>
              <textarea id="impactproduct" name="impactproduct"></textarea>
              <label for="servicelastonce">How long will the impact from one unit of your product / service last once it starts to have an impact?</label>
              <select id="servicelastonce" name="servicelastonce">
                <optgroup label="days
">
                  <option value="days">days</option>
                  <option value="weeks">weeks</option>
                  <option value="months">Months</option>
                  <option value="years">Years</option>
                </optgroup>
              </select>

              <label for="anythingtoadd">Is there anything you want to add about the impact your innovation might have that we didn't capture? e.g. have you done any calculations on your impact potential? have you set KPIs to measure your impact?</label>
              <textarea id="anythingtoadd" name="anythingtoadd"></textarea>

              <legend><span class="number">4</span> Product</legend>

              <label for="businessmodel">What is the primary component of your business model?</label>
              <select id="businessmodel" name="businessmodel">
                <optgroup label="API">
                  <option value="API">API</option>
                  <option value="SaaS">SaaS</option>
                  <option value="hardware">hardware</option>
                  <option value="Marketplace">Marketplace</option>
                  <option value="Ads">Ads</option>
                  <option value="other">Other</option>
                </optgroup>
              </select>

              <label for="customerbase">What is your customer base?</label>
              <select id="customerbase" name="customerbase">
                <optgroup label="b2c">
                  <option value="b2c">B2C</option>
                  <option value="b2g">B2G</option>
                  <option value="b2b"> B2B</option>
                  <option value="other">Other</option>
                </optgroup>
              </select>
              <label for="beneficiaries">Who are the main beneficiaries (users) of the solution?</label>
              <select id="beneficiaries" name="beneficiaries">
                <optgroup label="Patients">
                  <option value="patients">Patients</option>
                  <option value="healthcareproffesionals">Healthcare Professionals</option>
                  <option value="healthsystemanagers"> Health System Managers</option>
                  <option value="policymakers">Policy Makers</option>
                  <option value="other">Others</option>
                </optgroup>
              </select>
              <label for="solution">How does your team know that people want your solution, instead of currently existing solutions? Why you have not launched yet / who is using the product today / what users are paying today and in which geographies?</label>
              <textarea id="solution" name="solution"></textarea>
              <label for="productdevelopment">What is your primary focus for product development right now?</label>
              <textarea id="productdevelopment" name="productdevelopment"></textarea>
              <label for="challenges">What challenges will you have with scaling? (Legal aspects, network effects)</label>
              <textarea id="challenges" name="challenges"></textarea>

              <legend><span class="number">5</span>Market</legend>

              <label>How far have you gotten with your startup growth?</label>
              <input type="checkbox" id="nouseryet" value="no_useryet" name="no_useryet"><label class="light" for="nouseryet">No User Yet</label><br>
              <input type="checkbox" id="earlyfreeusers" value="earlyfree_users" name="earlyfree_users"><label class="light" for="earlyfreeusers">Early Free Users</label><br>
              <input type="checkbox" id="payingusers" value="paying_users" name="paying_users"><label class="light" for="payingusers">Paying Users</label>

              <label for="competitors">Who are your competitors today, and in the future? (Be honest, all innovators have rivals...)</label>
              <textarea id="competitors" name="competitors"></textarea>


            </fieldset>

            <button type="submit">Apply</button>

          </form>
        </div>
      </div>

      <!--========== Call to Action Area Start ============-->
      <?php require("templates/calltoaction.php"); ?>
      <!--========== Call to Action Area End ============-->
    </div>
    <?php require("templates/page-footer.php"); ?>
  </div>

  <?php require("templates/mobile-header.php"); ?>

  <!-- JS
    ============================================ -->
  <!-- Modernizer JS -->
  <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>

  <!-- jQuery JS -->
  <script src="assets/js/vendor/jquery-3.5.1.min.js"></script>
  <script src="assets/js/vendor/jquery-migrate-3.3.0.min.js"></script>

  <!-- Bootstrap JS -->
  <script src="assets/js/vendor/bootstrap.min.js"></script>

  <!-- Plugins JS (Please remove the comment from below plugins.min.js for better website load performance and remove plugin js files from avobe) -->

  <script src="assets/js/plugins/plugins.min.js"></script>

  <!-- Main JS -->
  <script src="assets/js/main.js"></script>

</body>

</html>