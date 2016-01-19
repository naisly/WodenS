<?php

/**
 * Created by PhpStorm.
 * User: Home
 * Date: 05.11.2015
 * Time: 22:32
 *
 * ==================
 * Register view, errors messages, login view,
 * added item to the cart message
 * =================
 */

include_once('DefaultView.php');

class LoginView extends DefaultView
{
    /*
     * MVC constructor
     * with LoginModel
     *
     * @private $model
     */
    private $model;
    public function __construct(LoginModel $model)
    {
        parent::__construct($model);
        $this->model = $model;
    }

    public function getRegisterHeader() {

        echo '<div class="register-bg">
                  <div class="text-center">
                       <h1 style="padding-top: 20px; color: white;">' . $this->model->Translate('Create Woden Sims Account') . '</h1>
                  </div>
              </div>';
    }

    /*
     * Register page
     */
    public function RegisterView() {

        $this->headerView( 'register' );
        if(isset($_GET['email_error'])){
            if($_GET['email_error'] == 1){
                $this->errorRegisteredEmailMessage();
            }
        }

        echo '<form action="/register" method="post" id="registation">
              <div class="container">
                  <div class="row">
                      <div class="col-md-3"></div>
                      <div class="col-md-6 text-center" style="margin-top: 40px;">
                          <h1 class="one-account">' . $this->model->Translate('Only one Account for all your needs.') . '</h1>
                          <h1 class="one-account">' . $this->model->Translate('Already have Woden Sims Account?') . '<a href="/';

        if ($_SESSION['language'] !== 'us') {
            echo $_SESSION['language'] . '/';
        }

        echo 'login">Find it here<img style="margin-left: 3px;" src="/images/arrow-blue.png" width="13" height="13"/></a></h1>

                          <div class="form-group" style="margin-top: 30px;">
                              <input type="email" class="form-control" placeholder="email@example.com" id="email" name="email" required />
                          </div>
                          <div class="form-group">
                              <input type="password" class="form-control" placeholder="' . $this->model->Translate('password') . '" id="password" name="password" required />
                          </div>
                          <div class="form-group">
                              <input type="password" class="form-control" placeholder="' . $this->model->Translate('password again') . '" id="password-again" name="password-again" required />
                          </div>
                          <div class="form-group" style="margin-top: 35px;">
                              <input type="text" class="form-control" placeholder="' . $this->model->Translate('First name') . '" style="width: 49%; float: left;" id="first_name" name="first_name" required />
                              <input type="text" class="form-control" placeholder="' . $this->model->Translate('Last name') . '" style="width: 49%; float: right;" id="last_name" name="last_name" required />
                          </div>
                          <div class="form-group" style="position: relative; top: 15px;">
                              <input type="date" class="form-control" placeholder="' . $this->model->Translate('Birthday') . '" id="day_of_birth" name="day_of_birth" required />
                          </div>
                      </div>
                      <div class="col-md-3"></div>
                  </div>

                  <div class="divider-register"></div>

                  <div class="row">
                      <div class="col-md-3"></div>
                      <div class="col-md-6">
                        <select class="form-control" id="sc-q-1" name="sc-q-1" required>
                            <option value="">' . $this->model->Translate('Secret Question 1') . '</option>
                            <option value="What was your childhood nickname?">' . $this->model->Translate('What was your childhood nickname?') . '</option>
                            <option value="What is your oldest sibling\'s birthday month and year?">' . $this->model->Translate('What is your oldest sibling\'s birthday month and year?') . '</option>
                            <option value="What is your oldest cousin\'s first and last name?">' . $this->model->Translate('What is your oldest cousin\'s first and last name?') . '</option>
                            <option value="What is your youngest brother\'s birthday?">' . $this->model->Translate('What is your youngest brother\'s birthday?') . '</option>
                        </select>
                        <div class="form-group" style="position: relative; top: 15px;">
                              <input type="text" class="form-control" placeholder="' . $this->model->Translate('Secret Answer 1') . '" id="sc-a-1" name="sc-a-1" required />
                        </div>

                        <select class="form-control" style="position: relative; top: 15px;" id="sc-q-2" name="sc-q-2" required>
                            <option value="">' . $this->model->Translate('Secret Question 2') . '</option>
                            <option value="What was the name of your elementary / primary school?">' . $this->model->Translate('What was the name of your elementary / primary school?') . '</option>
                            <option value="What is the name of your grandmother\'s dog?">' . $this->model->Translate('What is the name of your grandmother\'s dog?') . '</option>
                            <option value="What are the last 5 digits of your driver\'s license number?">' . $this->model->Translate('What are the last 5 digits of your driver\'s license number?') . '</option>
                            <option value="On which wrist do you wear your watch?">' . $this->model->Translate('On which wrist do you wear your watch?') . '</option>
                        </select>
                        <div class="form-group" style="position: relative; top: 30px;">
                              <input type="text" class="form-control" placeholder="' . $this->model->Translate('Secret Answer 2') . '" id="sc-a-2" name="sc-a-2" required />
                        </div>

                        <select class="form-control" style="position: relative; top: 30px;" id="sc-q-3" name="sc-q-3" required>
                            <option value="">' . $this->model->Translate('Secret Question 3') . '</option>
                            <option value="What was the name of your first boss?">' . $this->model->Translate('What was the name of your first boss?') . '</option>
                            <option value="What was the model of your first car?">' . $this->model->Translate('What was the model of your first car?') . '</option>
                            <option value="Your mother\'s first name?">' . $this->model->Translate('Your mother\'s first name?') . '</option>
                            <option value="What is the name of your first dog?">' . $this->model->Translate('What is the name of your first dog?') . '</option>
                        </select>
                        <div class="form-group" style="position: relative; top: 45px;">
                              <input type="text" class="form-control" placeholder="' . $this->model->Translate('Secret Answer 3') . '" id="sc-a-3" name="sc-a-3" required />
                        </div>

                        <div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-8">
                                <h1 class="text-center questions-identity">' . $this->model->Translate('These questions are developed to verify your identity and for the reason if you forget your valuable data.') . '</h1>
                            </div>
                            <div class="col-md-2"></div>
                        </div>
                      </div>
                      <div class="col-md-3"></div>
                  </div>

                  <div class="divider-register"></div>

                  <div class="row">
                      <div class="col-md-3"></div>
                      <div class="col-md-6">
                          <select class="form-control" name="country" required>
                            <option value="">' . $this->model->Translate('Select your country of residence') . '</option>
                            <option value="AFG">Afghanistan</option>
                            <option value="ALB">Albania</option>
                            <option value="DZA">Algeria</option>
                            <option value="ASM">American Samoa</option>
                            <option value="AND">Andorra</option>
                            <option value="AGO">Angola</option>
                            <option value="AIA">Anguilla</option>
                            <option value="ATA">Antarctica</option>
                            <option value="ATG">Antigua and Barbuda</option>
                            <option value="ARG">Argentina</option>
                            <option value="ARM">Armenia</option>
                            <option value="ABW">Aruba</option>
                            <option value="AUS">Australia</option>
                            <option value="AUT">Austria</option>
                            <option value="AZE">Azerbaijan</option>
                            <option value="BHS">Bahamas</option>
                            <option value="BHR">Bahrain</option>
                            <option value="BGD">Bangladesh</option>
                            <option value="BRB">Barbados</option>
                            <option value="BLR">Belarus</option>
                            <option value="BEL">Belgium</option>
                            <option value="BLZ">Belize</option>
                            <option value="BEN">Benin</option>
                            <option value="BMU">Bermuda</option>
                            <option value="BTN">Bhutan</option>
                            <option value="BOL">Bolivia</option>
                            <option value="BIH">Bosnia and Herzegovina</option>
                            <option value="BWA">Botswana</option>
                            <option value="BRA">Brazil</option>
                            <option value="IOT">British Indian Ocean Territory</option>
                            <option value="VGB">British Virgin Islands</option>
                            <option value="BRN">Brunei</option>
                            <option value="BGR">Bulgaria</option>
                            <option value="BFA">Burkina Faso</option>
                            <option value="BDI">Burundi</option>
                            <option value="KHM">Cambodia</option>
                            <option value="CMR">Cameroon</option>
                            <option value="CAN">Canada</option>
                            <option value="CPV">Cape Verde</option>
                            <option value="CYM">Cayman Islands</option>
                            <option value="CYM">Central African Republic</option>
                            <option value="CAF">Chad</option>
                            <option value="TCD">Chile</option>
                            <option value="CHL">China</option>
                            <option value="CHN">Christmas Island</option>
                            <option value="CXR">Cocos Islands</option>
                            <option value="CCK">Colombia</option>
                            <option value="COL">Comoros</option>
                            <option value="COM">Cook Islands</option>
                            <option value="COK">Costia Rica</option>
                            <option value="CRI">Croatia</option>
                            <option value="HRV">Cuba</option>
                            <option value="CUB">Cyprus</option>
                            <option value="CYP">Czech Republic</option>
                            <option value="CZE">Democratic Republic of the Congo</option>
                            <option value="COD">Denmark</option>
                            <option value="DJI">Djibouti</option>
                            <option value="DMA">Dominica</option>
                            <option value="DOM">Dominican Republic</option>
                            <option value="TLS">East Timor</option>
                            <option value="ECU">Ecuador</option>
                            <option value="EGY">Egypt</option>
                            <option value="SLV">El Salvador</option>
                            <option value="GNQ">Equatorial Guinea</option>
                            <option value="ERI">Eritrea</option>
                            <option value="EST">Estonia</option>
                            <option value="ETH">Ethiopia</option>
                            <option value="FLK">Falkland Islands</option>
                            <option value="FRO">Faroe Islands</option>
                            <option value="FJI">Fiji</option>
                            <option value="FIN">Finland</option>
                            <option value="FRA">France</option>
                            <option value="PYF">French Polynesia</option>
                            <option value="GAB">Gabon</option>
                            <option value="GMB">Gambia</option>
                            <option value="GEO">Georgia</option>
                            <option value="DEU">Germany</option>
                            <option value="GHA">Ghana</option>
                            <option value="GIB">Gibraltar</option>
                            <option value="GRC">Greece</option>
                            <option value="GRL">Greenland</option>
                            <option value="GRD">Grenada</option>
                            <option value="CUM">Guam</option>
                            <option value="GTM">Guatemala</option>
                            <option value="GIN">Guinea</option>
                            <option value="GNB">Guinea-Bissau</option>
                            <option value="GUY">Guyana</option>
                            <option value="HTI">Haiti</option>
                            <option value="HND">Honduras</option>
                            <option value="HKG">Hong Kong</option>
                            <option value="HUN">Hungary</option>
                            <option value="ISL">Iceland</option>
                            <option value="IND">India</option>
                            <option value="IDN">Indonesia</option>
                            <option value="IRN">Iran</option>
                            <option value="IRQ">Iraq</option>
                            <option value="IRL">Ireland</option>
                            <option value="IMN">Isle of Man</option>
                            <option value="ISR">Israel</option>
                            <option value="ITA">Italy</option>
                            <option value="CIV">Ivory Coast</option>
                            <option value="JAM">Jamaika</option>
                            <option value="JPN">Japan</option>
                            <option value="JEY">Jersey</option>
                            <option value="JOR">Jordan</option>
                            <option value="KAZ">Kazakhstan</option>
                            <option value="KEN">Kenya</option>
                            <option value="KIR">Kiribati</option>
                            <option value="KWT">Kuwait</option>
                            <option value="KGZ">Kyrgyzstan</option>
                            <option value="LAO">Laos</option>
                            <option value="LVA">Latvia</option>
                            <option value="LBN">Lebanon</option>
                            <option value="LSO">Lesotho</option>
                            <option value="LBR">Liberia</option>
                            <option value="LBY">Libya</option>
                            <option value="LIE">Liechtenstein</option>
                            <option value="LTU">Lithuania</option>
                            <option value="LUX">Luxembourg</option>
                            <option value="MAC">Macao</option>
                            <option value="MKD">Macedonia</option>
                            <option value="MDG">Madagascar</option>
                            <option value="MDG">Malawi</option>
                            <option value="MWI">Malaysia</option>
                            <option value="MYS">Maldives</option>
                            <option value="MDV">Mali</option>
                            <option value="MLT">Malta</option>
                            <option value="MHT">Marshall Islands</option>
                            <option value="MRT">Mauritania</option>
                            <option value="MUS">Mauritius</option>
                            <option value="MYT">Mayotte</option>
                            <option value="MEX">Mexico</option>
                            <option value="FSM">Micronesia</option>
                            <option value="MDA">Moldova</option>
                            <option value="MCO">Monaco</option>
                            <option value="MNG">Mongolia</option>
                            <option value="MNE">Montenegro</option>
                            <option value="MSR">Montserrat</option>
                            <option value="MAR">Morocco</option>
                            <option value="MOZ">Mozambique</option>
                            <option value="MMR">Myanmar</option>
                            <option value="NAM">Namibia</option>
                            <option value="NRU">Nauru</option>
                            <option value="NPL">Nepal</option>
                            <option value="NLD">Netherlands</option>
                            <option value="ANT">Netherlands Antilles</option>
                            <option value="NCL">New Caledonia</option>
                            <option value="NZL">New Zealand</option>
                            <option value="NIC">Nicaragua</option>
                            <option value="NER">Niger</option>
                            <option value="NGA">Nigeria</option>
                            <option value="NIU">Niue</option>
                            <option value="PRK">North Korea</option>
                            <option value="MNP">Northern Mariana Islands</option>
                            <option value="NOR">Norway</option>
                            <option value="OMN">Oman</option>
                            <option value="PAK">Pakistan</option>
                            <option value="PLW">Palau</option>
                            <option value="PAN">Panama</option>
                            <option value="PNG">Papua New Guinea</option>
                            <option value="PRY">Paraguay</option>
                            <option value="PER">Peru</option>
                            <option value="PHL">Philippines</option>
                            <option value="PCN">Pitcairn</option>
                            <option value="POL">Poland</option>
                            <option value="PRT">Portugal</option>
                            <option value="PRI">Puerto Rico</option>
                            <option value="QAT">Qatar</option>
                            <option value="COG">Republic of the Congo</option>
                            <option value="ROU">Romania</option>
                            <option value="RUS">Russia</option>
                            <option value="RWA">Rwanda</option>
                            <option value="BLM">Saint Barthelemy</option>
                            <option value="SHN">Saint Helena</option>
                            <option value="KNA">Saint Kitts and Nevis</option>
                            <option value="LCA">Saint Lucia</option>
                            <option value="MAF">Saint Martin</option>
                            <option value="SPM">Saint Pierre and Miquelon</option>
                            <option value="VCT">Saint Vincent and the Grenadines</option>
                            <option value="WSM">Samoa</option>
                            <option value="SMR">San Marino</option>
                            <option value="STP">Sao Tome and Principe</option>
                            <option value="SAU">Saudi Arabia</option>
                            <option value="SEN">Senegal</option>
                            <option value="SRB">Serbia</option>
                            <option value="SYC">Seychelles</option>
                            <option value="SLE">Sierra Leone</option>
                            <option value="SGP">Singapore</option>
                            <option value="SVK">Slovakia</option>
                            <option value="SVN">Slovenia</option>
                            <option value="SLB">Solomon Islands</option>
                            <option value="SOM">Somalia</option>
                            <option value="ZAF">South Africa</option>
                            <option value="SGS">South Georgia and the South Sandwich Islands</option>
                            <option value="KOR">South Korea</option>
                            <option value="ESP">Spain</option>
                            <option value="LKA">Sri Lanka</option>
                            <option value="SDN">Sudan</option>
                            <option value="SUR">Suriname</option>
                            <option value="SJM">Svalbard and Jan Mayen</option>
                            <option value="SWZ">Swaziland</option>
                            <option value="SWE">Sweden</option>
                            <option value="CHE">Switzerland</option>
                            <option value="SYR">Syria</option>
                            <option value="TWN">Taiwan</option>
                            <option value="TJK">Tajikistan</option>
                            <option value="TZA">Tanzania</option>
                            <option value="THA">Thailand</option>
                            <option value="TGO">Togo</option>
                            <option value="TKL">Tokelau</option>
                            <option value="TON">Tonga</option>
                            <option value="TTO">Trinidad and Tobago</option>
                            <option value="TUN">Tunisia</option>
                            <option value="TUR">Turkey</option>
                            <option value="TKM">Turkmenistan</option>
                            <option value="TCA">Turks and Caicos Islands</option>
                            <option value="TUV">Tuvalu</option>
                            <option value="VIR">U.S. Virgin Islands</option>
                            <option value="UGA">Uganda</option>
                            <option value="UKR">Ukraine</option>
                            <option value="ARE">United Arab Emirates</option>
                            <option value="GBR">United Kingdom</option>
                            <option value="USA">United States</option>
                            <option value="URY">Uruguay</option>
                            <option value="UZB">Uzbekistan</option>
                            <option value="VUT">Vanuatu</option>
                            <option value="VAT">Vatican</option>
                            <option value="VEN">Venezuela</option>
                            <option value="VNM">Vietnam</option>
                            <option value="WLF">Wallis and Futuna</option>
                            <option value="ESH">Western Sahara</option>
                            <option value="YEM">Yemen</option>
                            <option value="ZMB">Zambia</option>
                            <option value="ZWE">Zimbabwe</option>
                        </select>

                        <div class="for-your-choice" style="border-bottom: 1px solid #e4e4e4;  margin-top: 50px;">
                            <h1 class="choice">' . $this->model->Translate('For your choice') . '</h1>
                        </div>


                        <div class="checkbox" style="margin-top: 15px;">
                          <label style="padding-left: 0 !important;">
                              <input type="checkbox" value="" id="advertisements" style="margin-left: 0px;" name="advertisements" checked>
                              <span style="font-size: 22px; margin-left: 25px;">' . $this->model->Translate('Advertisements') . '</span><br />
                              <div class="row">
                                  <div class="col-md-8" style="margin-left: 25px;">
                                      <span style="font-size: 13px;">' . $this->model->Translate('Get announcements, news about interested for You items, recommendations and much more.') . '</span>
                                  </div>
                                  <div class="col-md-4"></div>
                              </div>
                          </label>
                        </div>

                        <div class="for-your-choice" style="border-bottom: 1px solid #e4e4e4;  margin-top: 50px;">
                            <h1 class="choice">' . $this->model->Translate('Is a must') . '</h1>
                        </div>

                        <div class="checkbox" style="margin-top: 15px;">
                          <label style="padding-left: 0 !important;" class="checkbox control-label">
                              <input type="checkbox" id="privacy-policy" style="margin-left: 0px;" name="privacy-policy" checked required>
                              <span style="font-size: 22px; margin-left: 25px;">' . $this->model->Translate('You are accepting Woden Sims Privacy Policy') . '</span><br />
                              <div class="row">
                                  <div class="col-md-10" style="margin-left: 25px;">
                                      <span style="font-size: 13px;">' . $this->model->Translate('This') . '<a href="/';

        if ($_SESSION['language'] !== 'us') {
            echo $_SESSION['language'] . '/';
        }

        echo 'privacy-policy/" id="main-link-check">' . $this->model->Translate('Privacy Policy') . '</a>' . $this->model->Translate('is meant to help you understand what data we collect, why we collect it, and what we do with it. This is important; we hope you will take time to read it carefully. And remember, you can find controls to manage your information and protect your privacy and security at');

        echo '<a href="/';

        if ($_SESSION['language'] !== 'us') {
            echo $_SESSION['language'] . '/';
        }

        echo 'account/" id="main-link-check">' . $this->model->Translate('My Account') . '.</a></span>
                                  </div>
                                  <div class="col-md-2"></div>
                              </div>
                          </label>
                        </div>

                        <div class="checkbox" style="margin-top: 15px;">
                          <label style="padding-left: 0 !important;" class="checkbox control-label">
                              <input type="checkbox" value="some" id="site-terms" name="site-terms" style="margin-left: 0px;" checked required>
                              <span style="font-size: 22px; margin-left: 25px;">' . $this->model->Translate('You are accepting Woden Sims Site Terms of Use') . '</span><br />
                              <div class="row">
                                  <div class="col-md-10" style="margin-left: 25px;">
                                      <span style="font-size: 13px;">' . $this->model->Translate('Woden Sims reserves the right, at its sole discretion, to change, modify, add or remove portions of these') .
            '<a href="/';

        if ($_SESSION['language'] !== 'us') {
            echo $_SESSION['language'] . '/';
        }

        echo 'terms/" id="main-link-check">' . $this->model->Translate('Terms of Use') . '</a>, ' . $this->model->Translate('at any time. It is your responsibility to check these Terms of Use periodically for changes.') . '</span>
                                  </div>
                                  <div class="col-md-2"></div>
                              </div>
                          </label>
                        </div>
                      </div>
                      <div class="col-md-3"></div>
                  </div>

                  <div class="text-center" style="margin-bottom: 40px; margin-top: 40px;">
                      <button class="register">' . $this->model->Translate('Register') . '<img src="/images/arrow-blue.png" width="20" height="20"/></button>
                  </div>
              </div>
              </form>';

        echo '<script type="text/javascript">
                  $(\'.dropdown-menu a\').on(\'click\', function(){
                      $(\'.dropdown-toggle\').html($(this).html() + \'<span class="caret"></span>\');
                  })
              </script>';

        $this->actionGetFooter( 'Registration' );
    }

    /*
     * Alert wrong password
     */
    private function errorPasswordMessage() {

        echo '<div class="alert alert-danger" role="alert" style="margin-top: -20px">
                <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                <span class="sr-only">Error:</span>
                ' . $this->model->Translate('Please write correct password or check the second one') . '
              </div>';
    }

    /*
     * Alert Min Count error
     */
    private function errorMinCountMessage() {

        echo '<div class="alert alert-danger" role="alert" style="margin-top: -20px;">
                <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                <span class="sr-only">Error:</span>
                ' . $this->model->Translate('Password may contain at least 6 characters') . '
              </div>';
    }

    /*
     * Alert wrong email or password
     */
    private function errorLoginMessage() {

        echo '<div class="alert alert-danger" role="alert" style="position: relative; top: -20px;">
                <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                <span class="sr-only">Error:</span>
                ' . $this->model->Translate('Incorrert email or password! Please check again') . '
              </div>';
    }

    /*
     * Alert already registered
     */
    private function errorRegisteredEmailMessage() {

        echo '<div class="alert alert-danger" role="alert">
                <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                <span class="sr-only">Error:</span>
                ' . $this->model->Translate('This email is already in use! Try another one') . '
              </div>';
    }

    /*
     * Alert success
     */
    private function successMessage() {

        echo '<div class="text-center thank-you">
                  <h1>' . $this->model->Translate('Thank you for the registration.') . '</h1>
                  <a class="links" id="main-link" href="/';

        if ($_SESSION['language'] !== 'us') {
            echo $_SESSION['language'] . '/';
        }

        echo 'login" style="text-decoration: none; margin: 0 !important;">';

        echo $this->model->Translate('Login');

        echo         ' ' . '<img src="/images/arrow-blue.png" width="20" height="20"/></a>
              </div>';
    }

    /*
     * Alert item has been added
     * to the cart
     */
    public function addedItemMessage() {

        echo '<div class="alert alert-success" role="alert" style="margin-top: -20px;">
                <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                <span class="sr-only">Error:</span>
                <img src="/' . $_SESSION['photo'] . '" width="50" height="50" />
                ' . $this->model->Translate('Your selected item was Added to cart! Cart subtotal') . '(' . $this->model->getAItems() . $this->model->Translate('items') .  '$' . $this->model->getAPrice() .'
                    <div class="pull-right" style="margin-top: 8px;">
                        <button class="cart btn btn-default" style="margin-right: 20px;" onclick="location.href=';
                            echo "'/account/cart'";
                            echo '">' . $this->model->Translate('Cart') . '</button>';
        echo            '<button class="cart btn btn-primary" onclick="location.href=';
                            echo "'/account/placeorder'";
                            echo '">' . $this->model->Translate('Procceed to checkout') . '(' . $this->model->getAItems() . $this->model->Translate('items') . '</button>
                    </div>
                </div>';

        $this->getFooter();
    }

    /*
     * Error login
     */
    private function errorAddItemMessage() {

        echo '<div class="alert alert-danger" role="alert" style="margin-top: -20px;">
                <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                <span class="sr-only">Error:</span>
                ' . $this->model->Translate('Please, login to add items in your cart') . '
                </div>';
    }

    /*
     * Footer at the bottom
     */

    public function getLoginForm() {

        echo  '<!--<div class="login-bg-for-xs">-->
                  <div class="text-center" style="';

        if(isset($_GET['auth'])){
            echo 'margin-top: 5%;';
        } else {
            echo 'margin-top: 12%;';
        }

        echo       '"><h1 class="sign">' . $this->model->Translate('Sign in Account') . '</h1>
                      <h2 class="only-one">' . $this->model->Translate('Only one Account for All your needs') . '</h2>
                      <h2 class="only-one" style="font-size: 20px;">' . $this->model->Translate('Have no account?') . '<a href="/';

        if ($_SESSION['language'] !== 'us') {
            echo $_SESSION['language'] . '/';
        }

        echo 'register" class="links" id="link" style="text-decoration: none;">' . $this->model->Translate('Create your Woden Sims ID') . '<img style="margin-top: -5px;" src="/images/arrow-blue.png" width="15" height="15"/></a></h2>
                  </div>
                  <div class="margin-auto" style="margin-top: 5%;"><form action="/check" method="post">
                              <div class="input-group" style="width: 100%;">
                                  <input type="text" name="email" id="email" class="form-control woden-sims-email" placeholder="Woden Sims Email">
                              </div>
                              <div class="input-group">
                                  <input type="password" name="password" id="password" class="form-control" placeholder="' . $this->model->Translate('Password') . '" style="height: 40px !important; border-right: none !important;">
                                  <span class="input-group-addon" id="basic-addon2"><button class="image-as-button"><span class="glyphicon glyphicon-arrow-right" style="color: #666;"></span></button></span>
                              </div>
                          </form>
                  </div>
                  <div class="text-center" style="margin-top: 15px;">
                      <a href="/';

        if ($_SESSION['language'] !== 'us') {
            echo $_SESSION['language'] . '/';
        }

        echo 'forgot-password/?session_auth=' . $_SESSION["session_auth"] . '" class="forgot links" id="link">' . $this->model->Translate('Forgot your password?') . '</a>
                  </div>
                  <img style="margin-top: 40px;" src="/images/phones-category-white.png" class="full-image-cascade" />
               </div>';

        $this->actionGetFooter( 'Login' );
    }

    public function displayLoginErrors() {

        if(isset($_SESSION['login_user'])){

            header("Location: account/");
        }

        if(isset($_GET['auth'])){
            if($_GET['auth'] == 'false'){
                $this->errorLoginMessage();
            }
        }

        if(isset($_SESSION['add_item'])){
            if($_SESSION['add_item'] == 1) {
                $this->errorAddItemMessage();
            }
        }
    }

    public function actionValidate() {

        if($_POST['password'] !== $_POST['password-again']){
            $this->errorPasswordMessage();
            $this->RegisterView();
        } else if(($_POST['password'] == $_POST['password-again']) && (strlen($_POST['password']) < 7)){
            $this->errorMinCountMessage();
            $this->RegisterView();
        } else if(isset($_GET['email_error'])){
            if($_GET['email_error'] == 1) {
                $this->errorRegisteredEmailMessage();
                $this->RegisterView();
            }
        } else {
            $this->headerView( 'login' );
            $this->successMessage();

            $this->actionGetFooter( 'Thank You' );
        }
    }
}