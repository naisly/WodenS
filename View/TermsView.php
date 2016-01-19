<?php

/**
 * Created by PhpStorm.
 * User: Home
 * Date: 31.12.2015
 * Time: 1:48
 */

include_once('DefaultView.php');

class TermsView extends DefaultView
{
    private $model;
    public function __construct(DefaultModel $model)
    {
        parent::__construct( $model );
        $this->model = $model;
    }

    public function getTermsPage() {

        $this->DoctypeView( 'Terms of Use' );
        $this->headerView( 'Terms of Use' );
        $this->getMain();
        $this->actionGetFooter( 'Terms of Use' );
        $this->endHTML();
    }

    private function getMain() {

        echo '<div class="container">
                  <div class="row" style="border-bottom: 1px solid #e4e4e4; margin-top: -15px;">
                      <div class="col-md-3" style="margin-top: 15px;">
                          <h1 class="sub-h-terms">Terms of Use</h1>
                      </div>
                      <div class="col-md-1"></div>
                      <div class="col-md-8">
                          <ul class="navigation">
                              <li><a class="application-and-acceptance" href="#">Application and Acceptance of the Terms</a></li>
                              <li><a class="provision-of-services" href="#">Provision of Services</a></li>
                              <li><a class="users-generally" href="#">Users Generally</a></li>
                              <li><a class="member-accounts" href="#">Member Accounts</a></li>
                              <li><a class="breaches-by-members" href="#">Breaches by Members</a></li>
                              <li><a class="limitation-of-liability" href="#">Limitation of Liability</a></li>
                              <li><a class="notices" href="#">Notices</a></li>
                              <li><a class="general-provisions" href="#">General Provisions</a></li>
                          </ul>
                      </div>
                  </div>';

        echo '<div class="text-center" style="margin-top: 6%;">
                  <h1 class="h-terms">Woden Sims Terms of Use</h1>
                  <h1 class="read-terms">Please, read these terms and conditions carefully.</h1>

                  <div class="divider-terms" style="margin-top: 90px;"></div>
              </div>
              <div class="paddings-terms-content">
                   <div id="application-and-acceptance"></div>

                   <h1 class="main-header-terms">Application and Acceptance of the Terms</h1>

                   <h1 class="sub-header-terms">
                        Your use of the Sites and <a href="http://woden-sims.hol.es">Woden-sims.hol.es</a>\'s services, software and products (collectively the as the
                        "<b>Services</b>" hereinafter) is subject to the terms and conditions contained in this document as well
                        as the <a href="/';

        if ($_SESSION['language'] !== 'us') {
            echo $_SESSION['language'] . '/';
        }

        echo 'privacy-policy/">Privacy Policy</a> , the Product Listing Policy  and any other rules and policies of the Sites
                        that <a href="http://woden-sims.hol.es">Woden-sims.hol.es</a> may publish from time to time.  This document and such other rules and policies
                        of the Sites are collectively referred to below as the "<b>Terms</b>".  By accessing the Sites or using
                        the Services, you agree to accept and be bound by the Terms.  Please do not use the Services or
                        the Sites if you do not accept all of the Terms.
                   </h1>
                   <h1 class="sub-header-terms">
                        You may not use the Services and may not accept the Terms if (a) you are not of legal age to form a
                        binding contract with <a href="http://woden-sims.hol.es">Woden-sims.hol.es</a>, or (b) you are not permitted to receive any Services under the
                        laws of any country / regions including the country / region in which you are
                        resident or from which you use the Services.
                   </h1>
                   <h1 class="sub-header-terms">
                        You acknowledge and agree that <a href="http://woden-sims.hol.es">Woden-sims.hol.es</a> may amend any Terms at any time by posting the relevant
                        amended and restated Terms on the Sites.  By continuing to use the Services or the Sites, you agree
                        that the amended Terms will apply to you.
                   </h1>
                   <h1 class="sub-header-terms">
                        If <a href="http://woden-sims.hol.es">Woden-sims.hol.es</a> has posted or provided a translation of the English language version of the Terms, you
                        agree that the translation is provided for convenience only and that the English language version
                        will govern your uses of the Services or the Sites.
                   </h1>
                   <h1 class="sub-header-terms">
                        You may be required to enter into a separate agreement, whether online or offline, with <a href="http://woden-sims.hol.es">Woden-sims.hol.es</a> or
                        our affiliate for any Service ("<b>Additional Agreements</b>").  If there is any conflict or inconsistency
                        between the Terms and an Additional Agreement, the Additional Agreement shall take precedence over
                        the Terms only in relation to that Service concerned.
                   </h1>
                   <h1 class="sub-header-terms">
                        The Terms may not otherwise be modified except in writing by an authorized officer of <a href="http://woden-sims.hol.es">Woden-sims.hol.es</a>.
                   </h1>

                   <div id="provision-of-services"></div>

                   <h1 class="main-header-terms">Provision of Services</h1>

                   <h1 class="sub-header-terms">
                       The <a href="http://woden-sims.hol.es">Woden-sims.hol.es</a> contracting entity that you are contracting with is <a href="http://woden-sims.hol.es">Woden-sims.hol.es</a> Kyiv Limited if you are a
                       registered member of the Sites and registered or resident in Kyiv.  If you registered in a
                       jurisdiction outside Kyiv, you are contracting with <a href="http://woden-sims.hol.es">Woden-sims.hol.es</a> Ukraine
                       E-Commerce Private Limited (incorporated in Ukraine).  If you registered
                       in or are a resident of mainland Ukraine, you are contracting with Woden Sims OOO, Ltd.
                       As some or part of the Services may be supported and provided by affiliates of <a href="http://woden-sims.hol.es">Woden-sims.hol.es</a>, <a href="http://woden-sims.hol.es">Woden-sims.hol.es</a>
                       may delegate some of the Services to its affiliates, particularly <a href="http://woden-sims.hol.es">Woden-sims.hol.es</a> (Europe) Limited incorporated
                       in the United Kingdom, who you agree may invoice you for their part of the Services.
                   </h1>
                   <h1 class="sub-header-terms">
                       You must register as a member on the Sites in order to access and use some Services. Further, <a href="http://woden-sims.hol.es">Woden-sims.hol.es</a>
                       reserves the right, without prior notice, to restrict access to or use of certain Services (or any
                       features within the Services) to paying Users or subject to other conditions that <a href="http://woden-sims.hol.es">Woden-sims.hol.es</a>  may
                       impose in our discretion.
                   </h1>
                   <h1 class="sub-header-terms">
                       Services (or any features within the Services) may vary for different regions and countries.
                       No warranty or representation is given that a particular Service or feature or function
                       thereof or the same type and extent of the Service or features and functions thereof will
                       be available for Users. <a href="http://woden-sims.hol.es">Woden-sims.hol.es</a>  may in our sole discretion limit, deny or create
                       different level of access to and use of any Services (or any features within the Services)
                       with respect to different Users.
                   </h1>
                   <h1 class="sub-header-terms">
                       <a href="http://woden-sims.hol.es">Woden-sims.hol.es</a>  may launch, change, upgrade, impose conditions to, suspend, or stop any Services
                       (or any features within the Services) without prior notice except that in case of a fee-based
                       Service, such changes will not substantially adversely affect the paying Users in enjoying
                       that Service.
                   </h1>
                   <h1 class="sub-header-terms">
                       Some Services may be provided by <a href="http://woden-sims.hol.es">Woden-sims.hol.es</a>\'s affiliates on behalf of <a href="http://woden-sims.hol.es">Woden-sims.hol.es</a>.
                   </h1>

                   <div id="users-generally"></div>

                   <h1 class="main-header-terms">Users Generally</h1>

                   <h1 class="sub-header-terms">
                       As a condition of your access to and use of the Sites or Services, you agree that you will comply
                       with all applicable laws and regulations when using the Sites or Services.
                   </h1>
                   <h1 class="sub-header-terms">
                       You agree to use the Sites or Services solely for your own private and internal purposes. You
                       agree that (a) you will not copy, reproduce, download, re-publish, sell, distribute or
                       resell any Services or any information, text, images, graphics, video clips, sound,
                       directories, files, databases or listings, etc available on or through the Sites
                       (the "Site Content"), and (b) you will not copy, reproduce, download, compile or
                       otherwise use any Site Content for the purposes of operating a business that competes
                       with <a href="http://woden-sims.hol.es">Woden-sims.hol.es</a>, or otherwise commercially exploiting the Site Content. Systematic
                       retrieval of Site Content from the Sites to create or compile, directly or indirectly,
                       a collection, compilation, database or directory (whether through robots, spiders,
                       automatic devices or manual processes) without written permission from <a href="http://woden-sims.hol.es">Woden-sims.hol.es</a>
                       is prohibited. Use of any content or materials on the Sites for any purpose not
                       expressly permitted in the Terms is prohibited.
                   </h1>
                   <h1 class="sub-header-terms">
                       You must read <a href="http://woden-sims.hol.es">Woden-sims.hol.es</a>\'s <a href="/';

        if ($_SESSION['language'] !== 'us') {
            echo $_SESSION['language'] . '/';
        }

        echo 'privacy-policy/">Privacy Policy</a> which governs the protection and use of personal
                       information about Users in the possession of <a href="http://woden-sims.hol.es">Woden-sims.hol.es</a> and our affiliates. You accept
                       the terms of the <a href="/';

        if ($_SESSION['language'] !== 'us') {
            echo $_SESSION['language'] . '/';
        }

        echo 'privacy-policy/">Privacy Policy</a> and agree to the use of the personal information about
                       you in accordance with the <a href="/';

        if ($_SESSION['language'] !== 'us') {
            echo $_SESSION['language'] . '/';
        }

        echo 'privacy-policy/">Privacy Policy</a>.
                   </h1>
                   <h1 class="sub-header-terms">
                       <a href="http://woden-sims.hol.es">Woden-sims.hol.es</a> may allow Users to access to content, products or services offered by third parties
                       through hyperlinks (in the form of word link, banners, channels or otherwise), API or otherwise
                       to such third parties\' web sites. You are cautioned to read such web sites\' terms
                       and conditions and/or privacy policies before using the Sites. You acknowledge that
                       <a href="http://woden-sims.hol.es">Woden-sims.hol.es</a> has no control over such third parties\' web sites, does not monitor
                       such web sites, and shall not be responsible or liable to anyone for such web sites,
                       or any content, products or services made available on such web sites.
                   </h1>

                   <div id="member-accounts"></div>

                   <h1 class="main-header-terms">Member Accounts</h1>

                   <h1 class="sub-header-terms">
                       User must be registered on the Sites to access or use some Services (a registered User is also
                       referred to as a "<b>Member</b>" below). Except with <a href="http://woden-sims.hol.es">Woden-sims.hol.es</a>\'s approval, one User may only register
                       one member account on the Sites. <a href="http://woden-sims.hol.es">Woden-sims.hol.es</a> may cancel or terminate a User\'s member account if
                       <a href="http://woden-sims.hol.es">Woden-sims.hol.es</a> has reasons to suspect that the User has concurrently registered or controlled two
                       or more member accounts. Further, <a href="http://woden-sims.hol.es">Woden-sims.hol.es</a> may reject Use\'s application for registration
                       for any reason.
                   </h1>
                   <h1 class="sub-header-terms">
                       Upon registration on the Sites, <a href="http://woden-sims.hol.es">Woden-sims.hol.es</a> shall assign an account and issue a member ID
                       and password (the latter shall be chosen by a registered User during registration) to each
                       registered User. An account may have a web-based email account with limited storage space
                       for the Member to send or receive emails.
                   </h1>
                   <h1 class="sub-header-terms">
                       A set of Member ID and password is unique to a single account. Each Member shall be solely
                       responsible for maintaining the confidentiality and security of your Member ID and password
                       and for all activities that occur under your account. No Member may share, assign, or permit
                       the use of your Member account, ID or password by another person outside of the Member\'s own
                       business entity. Member agrees to notify <a href="http://woden-sims.hol.es">Woden-sims.hol.es</a> immediately if you become aware of any
                       unauthorized use of your password or your account or any other breach of security of your account.
                   </h1>
                   <h1 class="sub-header-terms">
                       Member agrees that all activities that occur under your account (including without limitation,
                       posting any company or product information, clicking to accept any Additional Agreements or
                       rules, subscribing to or making any payment for any services, sending emails using the email
                       account or sending SMS) will be deemed to have been authorized by the Member.
                   </h1>

                   <div id="breaches-by-members"></div>

                   <h1 class="main-header-terms">Breaches by Members</h1>

                   <h1 class="sub-header-terms">
                       <a href="http://woden-sims.hol.es">Woden-sims.hol.es</a> reserves the right in our sole
                       discretion to remove, modify or reject any User Content that you submit to, post or
                       display on the Sites which we reasonably believe is unlawful, violates the Terms,
                       could subject <a href="http://woden-sims.hol.es">Woden-sims.hol.es</a> or our affiliates to
                       liability, or is otherwise found inappropriate in <a href="http://woden-sims.hol.es">Woden-sims.hol.es</a>\'s opinion.
                   </h1>
                   <h1 class="sub-header-terms">
                        If any Member breaches any Terms or if <a href="http://woden-sims.hol.es">Woden-sims.hol.es</a>\'s
                         has reasonable grounds to believe that any Member is in breach of any the Terms, <a href="http://woden-sims.hol.es">Woden-sims.hol.es</a>
                          shall have the right to impose a penalty against the Member, or suspend or terminate the
                          Member\'s account or subscription of any Service without any liability to the Member.
                          <a href="http://woden-sims.hol.es">Woden-sims.hol.es</a> shall also have the right to restrict,
                          refuse or ban any and all current or future use of any other Service that may be provided
                          by <a href="http://woden-sims.hol.es">Woden-sims.hol.es</a>.  The penalties that <a href="http://woden-sims.hol.es">Woden-sims.hol.es</a>
                           may impose include, among others, warning, removing any product listing or other User Content
                           that the Member has submitted, posted or displayed, imposing restrictions on the number of
                           product listings that the Member may post or display, or imposing restrictions on the Member\'s
                           use of any features or functions of any Service for such period as <a href="http://woden-sims.hol.es">Woden-sims.hol.es</a> may consider
                           appropriate in our sole discretion.
                   </h1>
                   <h1 class="sub-header-terms">
                        <a href="http://woden-sims.hol.es">Woden-sims.hol.es</a> reserves the right to cooperate fully
                        with governmental authorities, private investigators and/or injured third parties in
                        the investigation of any suspected criminal or civil wrongdoing.  Further,
                        <a href="http://woden-sims.hol.es">Woden-sims.hol.es</a> may disclose the Member\'s
                        identity and contact information, if requested by a government or law enforcement
                        body, an injured third party, or as a result of a subpoena or other legal action.
                        <a href="http://woden-sims.hol.es">Woden-sims.hol.es</a> shall not be liable for
                        damages or results arising from such disclosure, and Member agrees not to bring any action or
                        claim against <a href="http://woden-sims.hol.es">Woden-sims.hol.es</a> for such disclosure.
                   </h1>

                   <div id="limitation-of-liability"></div>

                   <h1 class="main-header-terms">Limitation of Liability</h1>

                   <h1 class="sub-header-terms">
                       TO THE MAXIMUM EXTENT PERMITTED BY LAW, THE SERVICES PROVIDED BY <a href="http://woden-sims.hol.es">WODEN-SIMS.HOL.ES</a>  ON OR THROUGH
                       THE SITES ARE PROVIDED "AS IS", "AS AVAILABLE" AND "WITH ALL FAULTS", AND <a href="http://woden-sims.hol.es">WODEN-SIMS.HOL.ES</a> HEREBY
                       EXPRESSLY DISCLAIMS ANY AND ALL WARRANTIES, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO,
                       ANY WARRANTIES OF CONDITION, QUALITY, DURABILITY, PERFORMANCE, ACCURACY, RELIABILITY,
                       MERCHANTABILITY OR FITNESS FOR A PARTICULAR PURPOSE. ALL SUCH WARRANTIES, REPRESENTATIONS,
                       CONDITIONS, AND UNDERTAKINGS ARE HEREBY EXCLUDED.
                   </h1>
                   <h1 class="sub-header-terms">
                       TO THE MAXIMUM EXTENT PERMITTED BY LAW, <a href="http://woden-sims.hol.es">WODEN-SIMS.HOL.ES</a>
                       MAKES NO REPRESENTATIONS OR WARRANTIES ABOUT THE VALIDITY, ACCURACY, CORRECTNESS, RELIABILITY,
                       QUALITY, STABILITY, COMPLETENESS OR CURRENTNESS OF ANY INFORMATION PROVIDED ON OR THROUGH THE
                       SITES; <a href="http://woden-sims.hol.es">WODEN-SIMS.HOL.ES</a> DOES NOT REPRESENT OR WARRANT
                       THAT THE MANUFACTURE, IMPORTATION, EXPORT, DISTRIBUTION, OFFER, DISPLAY, PURCHASE,
                       SALE AND/OR USE OF PRODUCTS OR SERVICES OFFERED OR DISPLAYED ON THE SITES DOES NOT
                       VIOLATE ANY THIRD PARTY RIGHTS; AND <a href="http://woden-sims.hol.es">WODEN-SIMS.HOL.ES</a>
                        MAKES NO REPRESENTATIONS OR WARRANTIES
                       OF ANY KIND CONCERNING ANY PRODUCT OR SERVICE OFFERED OR DISPLAYED ON THE SITES.
                   </h1>
                   <h1 class="sub-header-terms">
                       Any material downloaded or otherwise obtained through the Sites is done at each User\'s sole
                       discretion and risk and each User is solely responsible for any damage to <a href="http://woden-sims.hol.es">Woden-sims.hol.es</a>\'s
                       computer system or loss of data that may result from the download of any such material.
                       No advice or information, whether oral or written, obtained by any User from <a href="http://woden-sims.hol.es">Woden-sims.hol.es</a>
                       or through or from the Sites shall create any warranty not expressly stated herein.
                   </h1>
                   <h1 class="sub-header-terms">
                       Each User hereby agrees to indemnify and save <a href="http://woden-sims.hol.es">Woden-sims.hol.es</a>,
                       our affiliates, directors, officers and employees harmless, from any and all losses, claims, liabilities
                       (including legal costs on a full indemnity basis) which may arise from such User\'s use of the Sites or
                       Services (including but not limited to the display of such User\'s information on the Sites) or from your
                       breach of any of the terms and conditions of the Terms. Each User hereby further agrees to indemnify and
                       save <a href="http://woden-sims.hol.es">Woden-sims.hol.es</a>, our affiliates, directors, officers and
                       employees harmless, from any and all losses, damages, claims, liabilities (including legal costs on a
                       full indemnity basis) which may arise from User\'s breach of any representations and warranties made
                       by User to <a href="http://woden-sims.hol.es">Woden-sims.hol.es</a>, including but not limited to those set forth in Section 5 hereunder.
                   </h1>

                   <div id="notices"></div>

                   <h1 class="main-header-terms">Notices</h1>

                   <h1 class="sub-header-terms">
                       All legal notices or demands to or upon <a href="http://woden-sims.hol.es">Woden-sims.hol.es</a> shall be made in writing and sent to
                       <a href="http://woden-sims.hol.es">Woden-sims.hol.es</a> personally, by courier, certified mail, or facsimile to the following entity The notices shall
                       be effective when they are
                       received by <a href="http://woden-sims.hol.es">Woden-sims.hol.es</a> in any of the above-mentioned manner.
                   </h1>
                   <h1 class="sub-header-terms">
                       You agree that all agreements, notices, demands, disclosures and other communications
                       that <a href="http://woden-sims.hol.es">Woden-sims.hol.es</a> sends to you electronically satisfy the legal requirement that such
                       communication should be in writing.
                   </h1>

                   <div id="general-provisions"></div>

                   <h1 class="main-header-terms">General Provisions</h1>

                   <h1 class="sub-header-terms">
                       Subject to any Additional Agreements, the Terms constitute the entire agreement between you and
                       <a href="http://woden-sims.hol.es">Woden-sims.hol.es</a> with respect to and govern your use of the Sites and Services, superseding any prior
                       written or oral agreements in relation to the same subject matter herein.
                   </h1>
                   <h1 class="sub-header-terms">
                        <a href="http://woden-sims.hol.es">Woden-sims.hol.es</a> and you are independent contractors, and no agency, partnership, joint venture,
                        employee-employer or franchiser-franchisee relationship is intended or created by the Terms.
                   </h1>
                   <h1 class="sub-header-terms">
                        If any provision of the Terms is held to be invalid or unenforceable, such provision shall
                        be deleted and the remaining provisions shall remain valid and be enforced.
                   </h1>
                   <h1 class="sub-header-terms">
                         <a href="http://woden-sims.hol.es">Woden-sims.hol.es</a> shall have the right to assign the Terms (including all of our rights, titles,
                         benefits, interests, and obligations and duties in the Terms to any person or entity (including
                         any affiliates of <a href="http://woden-sims.hol.es">Woden-sims.hol.es</a>). You may not assign, in whole or part, the Terms to any person
                         or entity.
                   </h1>
                   <h1 class="sub-header-terms">
                        <a href="http://woden-sims.hol.es">Woden-sims.hol.es</a>\'s failure to enforce any right or failure to act with respect to any breach by
                        you under the Terms will not constitute a waiver of that right nor a waiver of <a href="http://woden-sims.hol.es">Woden-sims.hol.es</a>\'s
                        right to act with respect to subsequent or similar breaches.
                   </h1>

              </div>';
    }

    public function endHTML() {

        echo '<script src="/js/terms-scroll.js"></script>';
        echo '</body>
            </html>';
    }
}