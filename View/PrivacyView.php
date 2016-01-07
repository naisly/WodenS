<?php

/**
 * Created by PhpStorm.
 * User: Home
 * Date: 31.12.2015
 * Time: 19:08
 */

include_once('DefaultView.php');

class PrivacyView extends DefaultView
{
    private $model;
    public function __construct(DefaultModel $model)
    {
        parent::__construct( $model );
        $this->model = $model;
    }

    public function getPrivacyPage() {

        $this->DoctypeView( 'Privacy Policy' );
        $this->headerView( 'Privacy Policy' );
        $this->getMain();
        $this->actionGetFooter( 'Privacy Policy' );
        $this->endHTML();
    }

    public function endHTML() {

        echo '    <script src="/shop/js/privacy-scroll.js"></script>
                </body>
            </html>';
    }

    private function getMain() {

        echo '<div class="container">
                  <div class="row" style="border-bottom: 1px solid #e4e4e4;">
                      <div class="col-md-3">
                          <h1 class="sub-h-terms">Privacy</h1>
                      </div>
                      <div class="col-md-1"></div>
                      <div class="col-md-8">
                          <ul class="navigation">
                              <li><a class="collection-of-information" href="#">Collection Of Information</a></li>
                              <li><a class="use-of-personal-data" href="#">Use of Personal Data</a></li>
                              <li><a class="disclosure-of-personal-data" href="#">Disclosure of Personal Data</a></li>
                              <li><a class="security-measures" href="#">Security Measures</a></li>
                              <li><a class="cookies" href="#">Cookies</a></li>
                          </ul>
                      </div>
                  </div>';

        echo '<div class="text-center" style="margin-top: 6%;">
                  <h1 class="h-terms">Privacy Policy</h1>
                  <h1 class="read-terms">Updated as of November 2015</h1>

                  <div class="divider-terms" style="margin-top: 90px;"></div>
              </div>
              <div class="paddings-terms-content">

                   <h1 class="sub-header-terms">
                        <a href="http://woden-sims.hol.es">Woden-sims.hol.es</a> (called a "Site") is electronic commerce
                        platform are predominantly used by business entities to facilitate electronic commerce and
                        such business use does not generally involve the collection of personal information of
                        individuals. <a href="http://woden-sims.hol.es">Woden Sims</a> recognizes the importance of privacy as well as the importance of
                        maintaining the confidentiality of personal information. This Privacy Policy applies to
                        all products and services provided by us and sets out how we may collect, use and disclose
                        information in relation to users of the Sites.
                   </h1>

                   <h1 class="sub-header-terms">
                       You may use our services and products via a mobile device either through mobile applications
                       or mobile optimized websites. This Privacy Policy also applies to such use of our
                       services and products.
                   </h1>

                   <div id="collection-of-information"></div>

                   <h1 class="main-header-terms">Collection of Information</h1>

                   <h1 class="sub-header-terms">
                       Your privacy is important to us and we have taken steps to ensure that we do not collect
                       more information from you than is necessary for us to provide you with our services and
                       to protect your account.
                   </h1>
                   <h1 class="sub-header-terms">
                        Information including, but not limited to, user name, address, phone number, fax number,
                        email address, gender, date and/or year of birth and user preferences ("Registration
                        Information") may be collected at the time of user registration on the Sites.
                   </h1>
                   <h1 class="sub-header-terms">
                       In connection with any transaction and payment services or services under our buyer
                       protection schemes we provide on the Sites, information, including but not limited
                       to, bank account numbers, billing and delivery information, credit/debit card numbers
                       and expiration dates and tracking information from cheques or money orders ("Account
                       Information") may be collected to, among other things, facilitate the sale and purchase
                       as well as the settlement of purchase price of the products or services transacted on or
                       procured through the Sites.
                   </h1>
                   <h1 class="sub-header-terms">
                       We record and retain records of users\' buying and browsing activities on our platform
                       including but not limited to IP addresses, browsing patterns and buyer behavioral patterns.
                       In addition, we gather statistical information about the Sites and visitors to the Sites
                       including, but not limited to, IP addresses, browser software, operating system, software
                       and hardware attributes, pages viewed, number of sessions and unique visitors
                       (together "Browsing Information").
                   </h1>
                   <h1 class="sub-header-terms">
                       Registration Information, Account Information, Activities Information, Event Information and
                       Browsing Information generally relate to business entities and are together referred to as
                       business data ("Business Data"). Insofar and only insofar as they constitute personally
                       identifiable data of living individuals, such information are together referred to as
                       personal data ("Personal Data").
                   </h1>

                   <div id="use-of-personal-data"></div>

                   <h1 class="main-header-terms">Use of Personal Data</h1>

                   <h1 class="sub-header-terms">
                       If you provide any Personal Data to us, you are deemed to have authorized us to collect,
                       retain and use that Personal Data for the following purposes:

                       <ul style="list-style-type: disc;" class="items-list">
                           <li>verifying your identity;</li>
                           <li>processing your registration as a user, providing you with a log-in ID for the Sites and
                           maintaining and managing your registration;</li>
                           <li>performing research or statistical analysis in order to improve the content and layout
                           of the Sites, to improve our product offerings and services and for marketing and promotional
                           purposes;</li>
                           <li>subject to obtaining your consent in such form as may be required under the applicable
                           law, we may use your name, phone number, residential address, email address and fax number
                           ("Marketing Data") to provide notices, surveys, product alerts, communications and other
                           marketing materials to you relating to goods and services offered by us on the Sites
                           including Gold Suppliers membership, Verified Members membership, Free Members membership
                           (each of Gold Suppliers membership, Verified Members membership, and Free Members membership,
                           a "Membership" and collectively, the "Memberships") the value added services ancillary to
                           the Memberships, and other products and services offered by us from time to time to
                           members of the Sites;</li>
                           <li>if you voluntarily submit any information to the Sites for publication on the Sites
                           through the publishing tools, including but not limited to, Company Profile, Product Catalog,
                           Trade Leads, TrustPass Profile and any discussion forum, then you are deemed to have given
                           consent to the publication of such information on the Sites ("Voluntary Information");
                           and</li>
                           <li>making such disclosures as may be required for any of the above purposes or as required
                           by law or in respect of any claims or potential claims brought against us.</li>
                       </ul>
                   </h1>

                   <div id="disclosure-of-personal-data"></div>

                   <h1 class="main-header-terms">Disclosure of Personal Data</h1>

                   <h1 class="sub-header-terms">
                       You further agree that we may disclose and transfer (whether within or outside the jurisdiction
                       of the <a href="http://woden-sims.hol.es">Woden Sims</a> entity that you are contracting with) your Personal Data to service providers
                       engaged by us to assist us with providing you with our services (including but not limited
                       to data entry, database management, promotions, products and services alerts, delivery services,
                       payment extension services, and membership authentication and verification services)
                       ("Service Providers"). These Service Providers are under a duty of confidentiality to us and are
                       only permitted to use your Personal Data in connection with the purposes specified at
                       <a class="use-of-personal-data" href="#">Section 2</a> above, and not for their own purposes (including direct marketing).
                   </h1>
                   <h1 class="sub-header-terms">
                       When necessary we may also disclose and transfer (whether within or outside the jurisdiction
                       of the <a href="http://woden-sims.hol.es">Woden Sims</a> entity that you are contracting with) your Personal Data to our professional
                       advisers, law enforcement agencies, insurers, government and regulatory and other
                       organizations for the purposes specified at <a class="use-of-personal-data" href="#">Section 2</a> above.
                   </h1>
                   <h1 class="sub-header-terms">
                       All Voluntary Information may be made publicly available on the Sites and therefore accessible
                       by any internet user. Any Voluntary Information that you disclose to us becomes public
                       information and you relinquish any proprietary rights (including but not limited to
                       the rights of confidentiality and copyright) in such information. You should exercise
                       caution when deciding to include personal or proprietary information in the Voluntary
                       Information that you submit to us.
                   </h1>
                   <h1 class="sub-header-terms">
                       We may provide statistical information to third parties, but when we do so, we do not provide
                       personally-identifying information without your permission.
                   </h1>
                   <h1 class="sub-header-terms">
                       We may share your Account Information with banks or vendors to enable your transactions on
                       the Sites to be completed. In addition, we may use your Account Information to determine
                       your credit-worthiness and, in the process of such determination, we may need to make such
                       Account Information available to banks or credit agencies. While we have in place up-to-date
                       technology and internal procedures to keep your Account Information and other Personal Data
                       secure from intruders, there is no guarantee that such technology or procedures can eliminate
                       all of the risks of theft, loss or misuse.
                   </h1>

                   <div id="security-measures"></div>

                   <h1 class="main-header-terms">Security Measures</h1>

                   <h1 class="sub-header-terms">
                       We employ commercially reasonable security methods to prevent unauthorized access to the Sites,
                       to maintain data accuracy and to ensure the correct use of the information we hold.
                   </h1>
                   <h1 class="sub-header-terms">
                       For registered users of the Sites, your Registration Information and Account Information (if any)
                       can be viewed and edited through your account, which is protected by a password. We recommend
                       that you do not divulge your password to anyone. Our personnel will never ask you for your
                       password in an unsolicited phone call or in an unsolicited email. If you share a computer with
                       others, you should not choose to save your log-in information (e.g., user ID and password) on
                       that shared computer. Remember to sign out of your account and close your browser window when
                       you have finished your session.
                   </h1>
                   <h1 class="sub-header-terms">
                       No data transmission over the internet or any wireless network can be guaranteed to be perfectly
                       secure. As a result, while we try to protect the information we hold for you, we cannot guarantee
                       the security of any information you transmit to us and you do so at your own risk.
                   </h1>

                   <div id="cookies"></div>

                   <h1 class="main-header-terms">Cookies</h1>

                   <h1 class="sub-header-terms">
                       We use "cookies" to store specific information about you and track your visits to the Sites.
                       It is not uncommon for websites to use cookies to enhance identification of their users.
                   </h1>
                   <h1 class="sub-header-terms">
                       A "cookie" is a small amount of data that is sent to your browser and stored on your computer\'s
                       hard drive. A cookie can be sent to your computer\'s hard drive only if you access the Sites
                       using a computer. If you do not de-activate or erase the cookie, each time you use the
                       same computer to access the Sites, our web servers will be notified of your visit to the
                       Sites and in turn we may have knowledge of your visit and the pattern of your usage.
                   </h1>
                   <h1 class="sub-header-terms">
                       Generally, we use cookies to identify you and enable us to
                        <ul style="list-style-type: disc;" class="items-list">
                            <li>Access your Registration Information or Account Information so you do not have to re-enter it; </li>
                            <li>Gather statistical information about usage by users;</li>
                            <li>Research visiting patterns and help target advertisements based on user interests;</li>
                            <li>Assist our partners to track user visits to the Sites and process orders;</li>
                            <li>Track progress and participation in promotions.</li>
                       </ul>
                   </h1>
                   <h1 class="sub-header-terms">
                       You can determine if and how a cookie will be accepted by configuring the browser which is
                       installed in the computer you are using to access the Sites. If you choose, you can change
                       those configurations. By setting your preferences in the browser, you can accept all cookies
                       or you can choose to be notified when a cookie is sent or you can choose to reject all cookies.
                       If you reject all cookies by choosing the cookie-disabling function in your browser, you may be
                       required to re-enter information on the Sites more often and certain features of the Sites
                       may be unavailable.
                   </h1>
              </div>';
    }
}