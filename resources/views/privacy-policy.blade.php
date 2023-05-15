<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <link href="https://unpkg.com/tailwindcss@2.0.2/dist/tailwind.min.css" rel="stylesheet">

</head>

<body>
    <div class="w-full px-4 py-6 mx-auto lg:py-8 md:px-24 lg:px-8 bg-gray-200">
        <div class="relative flex items-center justify-between max-w-6xl mx-auto lg:justify-center lg:space-x-16">
            <ul class="flex items-center hidden space-x-8 lg:flex">
                <li><a href="/" aria-label="Our product" title="Our product"
                        class="font-medium tracking-wide text-gray-700 transition-colors duration-200 hover:text-gray-900">Features</a>
                </li>
                <li><a href="/" aria-label="Our product" title="Our product"
                        class="font-medium tracking-wide text-gray-700 transition-colors duration-200 hover:text-gray-900">Pricing</a>
                </li>
                <li><a href="/" aria-label="Product pricing" title="Product pricing"
                        class="font-medium tracking-wide text-gray-700 transition-colors duration-200 hover:text-gray-900">Contact
                        us</a></li>
            </ul> <a href="/" aria-label="alceo.my.id" title="alceo.my.id" class="inline-flex items-center"><svg
                    viewBox="0 0 24 24" stroke-linejoin="round" stroke-width="2" stroke-linecap="round"
                    stroke-miterlimit="10" stroke="currentColor" fill="none" class="w-8 text-${design.text.primary}">
                    <rect x="3" y="1" width="7" height="12"></rect>
                    <rect x="3" y="17" width="7" height="6"></rect>
                    <rect x="14" y="1" width="7" height="6"></rect>
                    <rect x="14" y="11" width="7" height="12"></rect>
                </svg> <span class="ml-2 text-xl font-bold tracking-wide text-gray-800 uppercase">alceo.my.id</span></a>
            <ul class="flex items-center hidden space-x-8 lg:flex">
                @if (Route::has('login'))
                    @auth
                        <li><a href="{{ url('/home') }}" aria-label="Dashboard" title="Dashboard"
                                class="font-medium tracking-wide text-gray-700 transition-colors duration-200 hover:text-gray-900">Dashboard</a>
                        </li>
                    @else
                        <li><a href="{{ route('login') }}" aria-label="Log in" title="Log in"
                                class="font-medium tracking-wide text-gray-700 transition-colors duration-200 hover:text-gray-900">Log
                                in</a>
                        </li>

                        @if (Route::has('register'))
                            <li><a href="{{ route('register') }}" aria-label="Register" title="Register"
                                    class="font-medium tracking-wide text-gray-700 transition-colors duration-200 hover:text-gray-900">Register</a>
                            </li>
                        @endif
                    @endauth
                @endif
            </ul>
            <div class="lg:hidden"><button aria-label="Open Menu" title="Open Menu"
                    class="p-2 -mr-1 transition duration-200 rounded focus:outline-none focus:shadow-outline hover:bg-deep-purple-50 focus:bg-deep-purple-50"><svg
                        viewBox="0 0 24 24" class="w-5 text-gray-600">
                        <path fill="currentColor"
                            d="M23,13H1c-0.6,0-1-0.4-1-1s0.4-1,1-1h22c0.6,0,1,0.4,1,1S23.6,13,23,13z"></path>
                        <path fill="currentColor" d="M23,6H1C0.4,6,0,5.6,0,5s0.4-1,1-1h22c0.6,0,1,0.4,1,1S23.6,6,23,6z">
                        </path>
                        <path fill="currentColor"
                            d="M23,20H1c-0.6,0-1-0.4-1-1s0.4-1,1-1h22c0.6,0,1,0.4,1,1S23.6,20,23,20z"></path>
                    </svg></button></div>
        </div>
    </div>
    <div class="px-4 py-16 bg-white mx-auto w-1/2 md:px-24 lg:px-8 lg:py-20 text-justify">
        {{-- privacy-policy --}}
        <strong>Privacy Policy</strong>
        <p>
            Melon Droid Art built the wallpaper app as
            an Ad Supported app. This SERVICE is provided by
            Melon Droid Art at no cost and is intended for use as
            is.
        </p>
        <p>
            This page is used to inform visitors regarding my
            policies with the collection, use, and disclosure of Personal
            Information if anyone decided to use my Service.
        </p>
        <p>
            If you choose to use my Service, then you agree to
            the collection and use of information in relation to this
            policy. The Personal Information that I collect is
            used for providing and improving the Service. I will not use or share your information with
            anyone except as described in this Privacy Policy.
        </p>
        <p>
            The terms used in this Privacy Policy have the same meanings
            as in our Terms and Conditions, which are accessible at
            wallpaper unless otherwise defined in this Privacy Policy.
        </p>
        <p><strong>Information Collection and Use</strong></p>
        <p>
            For a better experience, while using our Service, I
            may require you to provide us with certain personally
            identifiable information. The information that
            I request will be retained on your device and is not collected by me in any way.
        </p>
        <div>
            <p>
                The app does use third-party services that may collect
                information used to identify you.
            </p>
            <p>
                Link to the privacy policy of third-party service providers used
                by the app
            </p>
            <ul>
                <li><a href="https://www.google.com/policies/privacy/" target="_blank" rel="noopener noreferrer">Google
                        Play Services</a></li>
                <li><a href="https://support.google.com/admob/answer/6128543?hl=en" target="_blank"
                        rel="noopener noreferrer">AdMob</a></li>
                <li><a href="https://firebase.google.com/policies/analytics" target="_blank"
                        rel="noopener noreferrer">Google Analytics for Firebase</a></li>
                <!---->
                <!---->
                <!---->
                <!---->
                <!---->
                <!---->
                <!---->
                <!---->
                <!---->
                <!---->
                <!---->
                <!---->
                <!---->
                <!---->
                <li><a href="https://www.applovin.com/privacy/" target="_blank" rel="noopener noreferrer">AppLovin</a>
                </li>
                <!---->
                <!---->
                <!---->
                <!---->
                <!---->
                <!---->
                <!---->
                <!---->
                <!---->
                <!---->
            </ul>
        </div>
        <p><strong>Log Data</strong></p>
        <p>
            I want to inform you that whenever you
            use my Service, in a case of an error in the app
            I collect data and information (through third-party
            products) on your phone called Log Data. This Log Data may
            include information such as your device Internet Protocol
            (“IP”) address, device name, operating system version, the
            configuration of the app when utilizing my Service,
            the time and date of your use of the Service, and other
            statistics.
        </p>
        <p><strong>Cookies</strong></p>
        <p>
            Cookies are files with a small amount of data that are
            commonly used as anonymous unique identifiers. These are sent
            to your browser from the websites that you visit and are
            stored on your device's internal memory.
        </p>
        <p>
            This Service does not use these “cookies” explicitly. However,
            the app may use third-party code and libraries that use
            “cookies” to collect information and improve their services.
            You have the option to either accept or refuse these cookies
            and know when a cookie is being sent to your device. If you
            choose to refuse our cookies, you may not be able to use some
            portions of this Service.
        </p>
        <p><strong>Service Providers</strong></p>
        <p>
            I may employ third-party companies and
            individuals due to the following reasons:
        </p>
        <ul>
            <li>To facilitate our Service;</li>
            <li>To provide the Service on our behalf;</li>
            <li>To perform Service-related services; or</li>
            <li>To assist us in analyzing how our Service is used.</li>
        </ul>
        <p>
            I want to inform users of this Service
            that these third parties have access to their Personal
            Information. The reason is to perform the tasks assigned to
            them on our behalf. However, they are obligated not to
            disclose or use the information for any other purpose.
        </p>
        <p><strong>Security</strong></p>
        <p>
            I value your trust in providing us your
            Personal Information, thus we are striving to use commercially
            acceptable means of protecting it. But remember that no method
            of transmission over the internet, or method of electronic
            storage is 100% secure and reliable, and I cannot
            guarantee its absolute security.
        </p>
        <p><strong>Links to Other Sites</strong></p>
        <p>
            This Service may contain links to other sites. If you click on
            a third-party link, you will be directed to that site. Note
            that these external sites are not operated by me.
            Therefore, I strongly advise you to review the
            Privacy Policy of these websites. I have
            no control over and assume no responsibility for the content,
            privacy policies, or practices of any third-party sites or
            services.
        </p>
        <p><strong>Children’s Privacy</strong></p>
        <div>
            <p>
                These Services do not address anyone under the age of 13.
                I do not knowingly collect personally
                identifiable information from children under 13 years of age. In the case
                I discover that a child under 13 has provided
                me with personal information, I immediately
                delete this from our servers. If you are a parent or guardian
                and you are aware that your child has provided us with
                personal information, please contact me so that
                I will be able to do the necessary actions.
            </p>
        </div>
        <!---->
        <p><strong>Changes to This Privacy Policy</strong></p>
        <p>
            I may update our Privacy Policy from
            time to time. Thus, you are advised to review this page
            periodically for any changes. I will
            notify you of any changes by posting the new Privacy Policy on
            this page.
        </p>
        <p>This policy is effective as of 2023-05-15</p>
        <p><strong>Contact Us</strong></p>
        <p>
            If you have any questions or suggestions about my
            Privacy Policy, do not hesitate to contact me at sky101198@gmail.com.
        </p>
        <p>This privacy policy page was created at <a href="https://privacypolicytemplate.net" target="_blank"
                rel="noopener noreferrer">privacypolicytemplate.net </a>and modified/generated by <a
                href="https://app-privacy-policy-generator.nisrulz.com/" target="_blank" rel="noopener noreferrer">App
                Privacy Policy Generator</a></p>
        {{-- end privacy-policy --}}
    </div>
    <div class="bg-gray-100 w-full">
        <div class="px-4 pt-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8">
            <div class="grid row-gap-10 mb-8 lg:grid-cols-6">
                <div class="grid grid-cols-2 gap-5 row-gap-8 lg:col-span-4 md:grid-cols-4">
                    <div>
                        <p class="font-medium tracking-wide text-gray-900">
                            Category
                        </p>
                        <ul class="mt-2 space-y-2">
                            <li><a href="/"
                                    class="text-gray-700 transition-colors duration-300 hover:gray-700">News</a></li>
                            <li><a href="/"
                                    class="text-gray-700 transition-colors duration-300 hover:gray-700">World</a></li>
                            <li><a href="/"
                                    class="text-gray-700 transition-colors duration-300 hover:gray-700">Games</a></li>
                            <li><a href="/"
                                    class="text-gray-700 transition-colors duration-300 hover:gray-700">References</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <p class="font-medium tracking-wide text-gray-900">
                            Apples
                        </p>
                        <ul class="mt-2 space-y-2">
                            <li><a href="/"
                                    class="text-gray-700 transition-colors duration-300 hover:gray-700">Web</a></li>
                            <li><a href="/"
                                    class="text-gray-700 transition-colors duration-300 hover:gray-700">eCommerce</a>
                            </li>
                            <li><a href="/"
                                    class="text-gray-700 transition-colors duration-300 hover:gray-700">Business</a>
                            </li>
                            <li><a href="/"
                                    class="text-gray-700 transition-colors duration-300 hover:gray-700">Entertainment</a>
                            </li>
                            <li><a href="/"
                                    class="text-gray-700 transition-colors duration-300 hover:gray-700">Portfolio</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <p class="font-medium tracking-wide text-gray-900">
                            Cherry
                        </p>
                        <ul class="mt-2 space-y-2">
                            <li><a href="/"
                                    class="text-gray-700 transition-colors duration-300 hover:gray-700">Media</a></li>
                            <li><a href="/"
                                    class="text-gray-700 transition-colors duration-300 hover:gray-700">Brochure</a>
                            </li>
                            <li><a href="/"
                                    class="text-gray-700 transition-colors duration-300 hover:gray-700">Nonprofit</a>
                            </li>
                            <li><a href="/"
                                    class="text-gray-700 transition-colors duration-300 hover:gray-700">Educational</a>
                            </li>
                            <li><a href="/"
                                    class="text-gray-700 transition-colors duration-300 hover:gray-700">Projects</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <p class="font-medium tracking-wide text-gray-900">
                            Business
                        </p>
                        <ul class="mt-2 space-y-2">
                            <li><a href="/"
                                    class="text-gray-700 transition-colors duration-300 hover:gray-700">Infopreneur</a>
                            </li>
                            <li><a href="/"
                                    class="text-gray-700 transition-colors duration-300 hover:gray-700">Personal</a>
                            </li>
                            <li><a href="/"
                                    class="text-gray-700 transition-colors duration-300 hover:gray-700">Wiki</a></li>
                            <li><a href="/"
                                    class="text-gray-700 transition-colors duration-300 hover:gray-700">Forum</a></li>
                        </ul>
                    </div>
                </div>
                <div class="md:max-w-md lg:col-span-2"><span
                        class="text-base font-medium tracking-wide text-gray-900">Subscribe
                        for updates</span>
                    <form class="flex flex-col mt-4 md:flex-row"><input placeholder="Email" required="required"
                            type="text"
                            class="flex-grow w-full h-12 px-4 mb-3 transition duration-200 bg-white border border-gray-900 border-opacity-10 rounded shadow-sm appearance-none md:mr-2 md:mb-0 focus:border-deep-purple-accent-400 focus:outline-none focus:shadow-outline">
                        <button type="submit"
                            class="inline-flex items-center justify-center h-12 px-6 font-medium tracking-wide text-white transition duration-200 rounded shadow-md bg-indigo-500 hover:bg-indigo-500 focus:shadow-outline focus:outline-none">
                            Subscribe
                        </button>
                    </form>
                    <p class="mt-4 text-sm text-gray-700">
                        Android Application Development
                    </p>
                </div>
            </div>
            <div
                class="flex flex-col justify-between pt-5 pb-10 border-t border-gray-900 border-opacity-10 sm:flex-row">
                <p class="text-sm text-gray-700">
                    © Copyright 2020 Company. All rights reserved.
                </p>
                <div class="flex items-center mt-4 space-x-4 sm:mt-0"><a href="/"
                        class="text-gray-700 transition-colors duration-300 hover:text-indigo-500"><svg
                            viewBox="0 0 24 24" fill="currentColor" class="h-5">
                            <path
                                d="M24,4.6c-0.9,0.4-1.8,0.7-2.8,0.8c1-0.6,1.8-1.6,2.2-2.7c-1,0.6-2,1-3.1,1.2c-0.9-1-2.2-1.6-3.6-1.6 c-2.7,0-4.9,2.2-4.9,4.9c0,0.4,0,0.8,0.1,1.1C7.7,8.1,4.1,6.1,1.7,3.1C1.2,3.9,1,4.7,1,5.6c0,1.7,0.9,3.2,2.2,4.1 C2.4,9.7,1.6,9.5,1,9.1c0,0,0,0,0,0.1c0,2.4,1.7,4.4,3.9,4.8c-0.4,0.1-0.8,0.2-1.3,0.2c-0.3,0-0.6,0-0.9-0.1c0.6,2,2.4,3.4,4.6,3.4 c-1.7,1.3-3.8,2.1-6.1,2.1c-0.4,0-0.8,0-1.2-0.1c2.2,1.4,4.8,2.2,7.5,2.2c9.1,0,14-7.5,14-14c0-0.2,0-0.4,0-0.6 C22.5,6.4,23.3,5.5,24,4.6z">
                            </path>
                        </svg></a> <a href="/"
                        class="text-gray-700 transition-colors duration-300 hover:text-indigo-500"><svg
                            viewBox="0 0 30 30" fill="currentColor" class="h-6">
                            <circle cx="15" cy="15" r="4"></circle>
                            <path
                                d="M19.999,3h-10C6.14,3,3,6.141,3,10.001v10C3,23.86,6.141,27,10.001,27h10C23.86,27,27,23.859,27,19.999v-10   C27,6.14,23.859,3,19.999,3z M15,21c-3.309,0-6-2.691-6-6s2.691-6,6-6s6,2.691,6,6S18.309,21,15,21z M22,9c-0.552,0-1-0.448-1-1   c0-0.552,0.448-1,1-1s1,0.448,1,1C23,8.552,22.552,9,22,9z">
                            </path>
                        </svg></a> <a href="/"
                        class="text-gray-700 transition-colors duration-300 hover:text-indigo-500"><svg
                            viewBox="0 0 24 24" fill="currentColor" class="h-5">
                            <path
                                d="M22,0H2C0.895,0,0,0.895,0,2v20c0,1.105,0.895,2,2,2h11v-9h-3v-4h3V8.413c0-3.1,1.893-4.788,4.659-4.788 c1.325,0,2.463,0.099,2.795,0.143v3.24l-1.918,0.001c-1.504,0-1.795,0.715-1.795,1.763V11h4.44l-1,4h-3.44v9H22c1.105,0,2-0.895,2-2 V2C24,0.895,23.105,0,22,0z">
                            </path>
                        </svg></a></div>
            </div>
        </div>
    </div>
</body>

</html>
