@extends('layouts.app')
@section('page-content')
<section id="contact" class="account">

    <img class="login-detail-left" src="assets/images/login-detail-left.png">

    <img class="login-detail-right" src="assets/images/login-detail-right.png">

    <div class="background-wrapper">

        <h2 class="text-center"><strong>My Settings</strong></h2>

        <div class="container h-100 account-box">

            <div class="row h-100 height-auto">

                <div class="col-lg-3 h-100 height-auto px-0">

                    <div class="navbar-light h-100 height-auto">

                        <div class="h-100">

                            <div class="d-flex justify-content-center flex-column position-relative">

                                <img class="avatar-img mx-auto mx-lg-0" src="assets/images/profile3.png" alt="avatar" title="avatar">

                                <button class="change-avatar-img-btn"><i class="fa fa-camera"></i></button>

                            </div>

                            <div class="d-flex nav mt-0">

                                <ul class="nav nav-tabs d-flex flex-column mx-auto mx-lg-0" id="myAccount">

                                    <li class="nav-item">

                                        <a href="#information" class="nav-link py-2" data-toggle="tab">User information</a>

                                    </li>

                                    <li class="nav-item">

                                        <a href="#email-settings" class="nav-link py-2" data-toggle="tab">Email settings</a>

                                    </li>

                                    <li class="nav-item">

                                        <a href="#delete-acc" class="nav-link py-2" data-toggle="tab">Detele account</a>

                                    </li>

                                </ul>

                            </div>

                        </div>

                    </div>

                </div>



                <div class="col-lg-9">

                    <div class="pl-sm-0 h-100 input-box pb-lg-0 pb-3 tab-content">

                        <div class="tab-pane fade" id="information">

                            <div class="row">

                                <div class="col-md-5 text-center text-lg-left">

                                    <h3 class="mt-2 account-settings-name mb-0">{{ Auth::user()->name }}</h3>

                                    <p class="account-settings-loc">New York</p>

                                    <div class="acc-avatar-details">
                                    <input type="hidden" name="id" id="id" value="{{ Auth::user()->id }}">

                                        <input type="text" name="name" id="name" value="{{ Auth::user()->name }}" required>

                                        <input type="email" name="email" id="email" value="{{ Auth::user()->email }}" required>
                                        
                                        <select class="form-control select2me input-lg" style="margin-bottom:15px;" id="language" required>
                                            <option value=""></option>
                                            <option value="us">English(United States)</option>
                                            <option value="uk">English(United Kingdom)</option>
                                        </select>

                                        <select name="" id="country" class="form-control input-lg select2" required>
                                            <option value=""></option>
                                            <option value="AF">Afghanistan</option>
                                            <option value="AL">Albania</option>
                                            <option value="DZ">Algeria</option>
                                            <option value="AS">American Samoa</option>
                                            <option value="AD">Andorra</option>
                                            <option value="AO">Angola</option>
                                            <option value="AI">Anguilla</option>
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
                                            <option value="BA">Bosnia and Herzegowina</option>
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
                                            <option value="CD">Congo, the Democratic Republic of the</option>
                                            <option value="CK">Cook Islands</option>
                                            <option value="CR">Costa Rica</option>
                                            <option value="CI">Cote d'Ivoire</option>
                                            <option value="HR">Croatia (Hrvatska)</option>
                                            <option value="CU">Cuba</option>
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
                                            <option value="GN">Guinea</option>
                                            <option value="GW">Guinea-Bissau</option>
                                            <option value="GY">Guyana</option>
                                            <option value="HT">Haiti</option>
                                            <option value="HM">Heard and Mc Donald Islands</option>
                                            <option value="VA">Holy See (Vatican City State)</option>
                                            <option value="HN">Honduras</option>
                                            <option value="HK">Hong Kong</option>
                                            <option value="HU">Hungary</option>
                                            <option value="IS">Iceland</option>
                                            <option value="IN">India</option>
                                            <option value="ID">Indonesia</option>
                                            <option value="IR">Iran (Islamic Republic of)</option>
                                            <option value="IQ">Iraq</option>
                                            <option value="IE">Ireland</option>
                                            <option value="IL">Israel</option>
                                            <option value="IT">Italy</option>
                                            <option value="JM">Jamaica</option>
                                            <option value="JP">Japan</option>
                                            <option value="JO">Jordan</option>
                                            <option value="KZ">Kazakhstan</option>
                                            <option value="KE">Kenya</option>
                                            <option value="KI">Kiribati</option>
                                            <option value="KP">Korea, Democratic People's Republic of</option>
                                            <option value="KR">Korea, Republic of</option>
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
                                            <option value="MO">Macau</option>
                                            <option value="MK">Macedonia, The Former Yugoslav Republic of</option>
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
                                            <option value="KN">Saint Kitts and Nevis</option>
                                            <option value="LC">Saint LUCIA</option>
                                            <option value="VC">Saint Vincent and the Grenadines</option>
                                            <option value="WS">Samoa</option>
                                            <option value="SM">San Marino</option>
                                            <option value="ST">Sao Tome and Principe</option>
                                            <option value="SA">Saudi Arabia</option>
                                            <option value="SN">Senegal</option>
                                            <option value="SC">Seychelles</option>
                                            <option value="SL">Sierra Leone</option>
                                            <option value="SG">Singapore</option>
                                            <option value="SK">Slovakia (Slovak Republic)</option>
                                            <option value="SI">Slovenia</option>
                                            <option value="SB">Solomon Islands</option>
                                            <option value="SO">Somalia</option>
                                            <option value="ZA">South Africa</option>
                                            <option value="GS">South Georgia and the South Sandwich Islands</option>
                                            <option value="ES">Spain</option>
                                            <option value="LK">Sri Lanka</option>
                                            <option value="SH">St. Helena</option>
                                            <option value="PM">St. Pierre and Miquelon</option>
                                            <option value="SD">Sudan</option>
                                            <option value="SR">Suriname</option>
                                            <option value="SJ">Svalbard and Jan Mayen Islands</option>
                                            <option value="SZ">Swaziland</option>
                                            <option value="SE">Sweden</option>
                                            <option value="CH">Switzerland</option>
                                            <option value="SY">Syrian Arab Republic</option>
                                            <option value="TW">Taiwan, Province of China</option>
                                            <option value="TJ">Tajikistan</option>
                                            <option value="TZ">Tanzania, United Republic of</option>
                                            <option value="TH">Thailand</option>
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
                                            <option value="VG">Virgin Islands (British)</option>
                                            <option value="VI">Virgin Islands (U.S.)</option>
                                            <option value="WF">Wallis and Futuna Islands</option>
                                            <option value="EH">Western Sahara</option>
                                            <option value="YE">Yemen</option>
                                            <option value="ZM">Zambia</option>
                                            <option value="ZW">Zimbabwe</option>
                                        </select>
                                        <div class="input-icon right">
                                            <i class="fa fa-pencil"></i>
                                            <input type="password" class="form-control" name="password" id="password" required>
                                        </div>
                                        
                                        

                                    </div>

                                </div>

                                <div class="col-md-7 account-numbers">
                                   
                                    <ul class="d-flex pl-0">

                                        <li class="d-flex align-items-center flex-column">

                                            <div class="acc-single-number">0</div>

                                            <div class="acc-single-description"><i class="far fa-star"></i> Reviews</div>

                                        </li>

                                        <li class="d-flex align-items-center flex-column">

                                            <div class="acc-single-number">0</div>

                                            <div class="acc-single-description"><i class="fas fa-user"></i> Reads</div>

                                        </li>

                                        <li class="d-flex align-items-center flex-column">

                                            <div class="acc-single-number">0</div>

                                            <div class="acc-single-description"><i class="fas fa-thumbs-up"></i> Useful</div>

                                        </li>

                                    </ul>

                                    <button class="btn btn-circle btn-info btn-lg" type="button" id="btn_save">Save</button>
                                </div>

                            </div>

                        </div>	
                        
                        <div class="tab-pane fade" id="email-settings">

                            <p class="w-100 f-15 mb-50">

                                We only want to send you emails that you want. Select your preferences below and remember that you can always unsubscribe.

                            </p>

                            <div class="row">

                                <div class="col-md-6">

                                    <div class="acc-check-boxes-d">

                                        <h4 class="acc-checkboxes-title">Contribution</h4>

                                        <form class="acc-contribution-form">

                                            <input type="checkbox" id="reviews" name="reviews" value="">

                                            <label for="reviews"><u>Your reviews: Who did you help?</u></label><br>

                                            <input type="checkbox" id="companies" name="companies" value="">

                                            <label for="companies"><u>Companies on Logohere can invite me to write reviews</u></label>

                                        </form>

                                    </div>

                                    <div class="acc-check-boxes-d">

                                        <h4 class="acc-checkboxes-title">Updates</h4>

                                        <form class="acc-updates-form">

                                            <input type="checkbox" id="updates" name="updates" value="">

                                            <label for="updates"><u>General updates</u></label><br>

                                            <input type="checkbox" id="insparation" name="insparation" value="">

                                            <label for="insparation"><u>Insparation</u></label><br>

                                            <input type="checkbox" id="new-features" name="new-features" value="">

                                            <label for="new-features"><u>New features</u></label>

                                        </form>

                                    </div>

                                </div>

                                <div class="col-md-6">

                                    <div class="acc-check-boxes-d">

                                        <h4 class="acc-checkboxes-title">Account support</h4>

                                        <p class="f-15">This setting is always enabled so we can send account-related emails, e.g., if you request a new password.</p>

                                        <form class="acc-support-form d-flex">

                                            <input type="checkbox" id="support" name="support" value="">

                                            <label for="support"><u>Account-related emails: This is enabled for 

                                                every Trustpilot user</u></label>

                                        </form>

                                    </div>

                                </div>

                                <button class="acc-setting-save">Save</button>

                            </div>

                        </div>

                        <div class="tab-pane fade  text-center text-lg-left" id="delete-acc">
                            <form action="{{url('/profile/delete')}}/{{ Auth::user()->id }}" method="POST">
                                {{ csrf_field() }}
                            <h4 class="acc-checkboxes-title">Delete user</h4>

                            <p class="f-15 mb-50">When you delete your user profile, your reviews are deleted as well and can not be restored</p>

                            <button class="acc-setting-save mx-0">Delete</button>
                            </form>
                        </div>

                    </div>

                </div>

            </div>

        </div>

</section>

<script src="{{ url('assets/js/pages/profile.js') }}"></script>
@endsection