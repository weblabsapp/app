@extends('layouts.privacy.layout')

@section('body')
    <div class="row text-center overflow-hidden">
        <div class=" col-md-12 m-auto">
            <img class="mb-4" src="{{ asset('images/code_64.png') }}" alt="" width="72" height="72">
        </div>
        <div class="col-md-12 pr-5 pl-5">
            <div class="card">
                <div class="card-header">
                    Privacy policy
                </div>
                <div class="card-body">
                    <div class="text-left mt-3">
                        <p>Web Labs Privacy Policy</p>
                        <p>This Privacy Policy describes how your personal information is collected, used, and shared when you visit or make a purchase from https://weblabs.app (the “Site”).</p>

                        <p>PERSONAL INFORMATION WE COLLECT</p>

                        <p>When you visit the Site, we automatically collect certain information about your device, including information about your web browser, IP address, time zone, and some of the cookies that are installed on your device. Additionally, as you browse the Site, we collect information about the individual web pages or products that you view, what websites or search terms referred you to the Site, and information about how you interact with the Site. We refer to this automatically-collected information as “Device Information.”</p>

                        <p>We collect Device Information using the following technologies:</p>
                        <ul>
                            <li>“Cookies” are data files that are placed on your device or computer and often include an anonymous unique identifier. For more information about cookies, and how to disable cookies, visit http://www.allaboutcookies.org.</li>
                            <li>“Log files” track actions occurring on the Site, and collect data including your IP address, browser type, Internet service provider, referring/exit pages, and date/time stamps.</li>
                        </ul>

                        <p>Additionally when you make a purchase or attempt to make a purchase through the Site, we collect certain information from you, including your name, billing address, email address, and phone number.  We refer to this information as “Order Information.”</p>

                        <p>When we talk about “Personal Information” in this Privacy Policy, we are talking both about Device Information and Order Information.</p>

                        <p>HOW DO WE USE YOUR PERSONAL INFORMATION?</p>

                        <p>We use the Order Information that we collect generally to fulfill any orders placed through the Site (including processing your payment information, arranging for shipping, and providing you with invoices and/or order confirmations).  Additionally, we use this Order Information to:</p>
                        <p>Communicate with you;</p>
                        <p>Screen our orders for potential risk or fraud; and</p>
                        <p>When in line with the preferences you have shared with us, provide you with information or advertising relating to our products or services.</p>

                        <p>We use the Device Information that we collect to help us screen for potential risk and fraud (in particular, your IP address), and more generally to improve and optimize our Site (for example, by generating analytics about how our customers browse and interact with the Site, and to assess the success of our marketing and advertising campaigns).</p>

                        <p>SHARING YOUR PERSONAL INFORMATION</p>
                        <p>We do NOT share any of your personal information to any other parties.</p>

                        <p>We may share your Personal Information to comply with applicable laws and regulations, to respond to a subpoena, search warrant or other lawful request for information we receive, or to otherwise protect our rights.</p>

                        <p>You can opt out of newsletters and upcoming news related to our services by visiting:</p>
                        <a href="https://weblabs.app/account/unsubscribe"></a>

                        <p>DO NOT TRACK</p>
                        <p>Please note that we do not alter our Site’s data collection and use practices when we see a Do Not Track signal from your browser.</p>


                        <p>YOUR RIGHTS</p>
                        <p>If you are a European resident, you have the right to access personal information we hold about you and to ask that your personal information be corrected, updated, or deleted. If you would like to exercise this right, please contact us through the contact information below.</p>

                        <p>DATA RETENTION</p>
                        <p>When you place an order through the Site, we will maintain your Order Information for our records unless and until you ask us to delete this information.</p>

                        <p>CHANGES</p>
                        <p>We may update this privacy policy from time to time in order to reflect, for example, changes to our practices or for other operational, legal or regulatory reasons.</p>

                        <p>CONTACT US</p>
                        <p>For more information about our privacy practices, if you have questions, or if you would like to make a complaint, please contact us by e-mail at <a href="mailto:info@weblabs.app">info@weblabs.app</a> or by mail using the details provided below:</p>
                        <p>To: info@weblabs.app</p>
                        <p>Subject: Inquiry about {Your inquiry subject}</p>
                    </div>
                </div>
            </div>
            <div class="mt-3">
                <a class="btn btn-secondary" href="{{ get_route('web.homePage') }}">Go Home</a>
            </div>
        </div>
    </div>
@endsection

@section('footer')
    <footer class="text-center">
        <p class="mt-5 mb-3 text-muted">&copy; 2022-2023 - weblabs.app</p>
    </footer>
@endsection