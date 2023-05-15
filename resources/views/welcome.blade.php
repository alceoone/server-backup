<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <link href="https://unpkg.com/tailwindcss@2.0.2/dist/tailwind.min.css" rel="stylesheet">

</head>

<body>
    <!---->
    <!---->
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
    <div class="relative w-full"><img
            src="https://images.pexels.com/photos/3228766/pexels-photo-3228766.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;h=750&amp;w=1260"
            alt="" class="absolute inset-0 object-cover w-full h-full">
        <div class="relative bg-opacity-75 bg-indigo-500"><svg viewBox="0 0 1160 163"
                class="absolute inset-x-0 bottom-0 text-white" style="bottom: -1px;">
                <path fill="currentColor"
                    d="M-164 13L-104 39.7C-44 66 76 120 196 141C316 162 436 152 556 119.7C676 88 796 34 916 13C1036 -8 1156 2 1216 7.7L1276 13V162.5H1216C1156 162.5 1036 162.5 916 162.5C796 162.5 676 162.5 556 162.5C436 162.5 316 162.5 196 162.5C76 162.5 -44 162.5 -104 162.5H-164V13Z">
                </path>
            </svg>
            <div
                class="relative px-4 py-16 mx-auto overflow-hidden sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
                <div class="flex flex-col items-center justify-between xl:flex-row">
                    <div class="w-full max-w-xl mb-12 xl:mb-0 xl:pr-16 xl:w-7/12">
                        <h2
                            class="max-w-lg mb-6 font-sans text-3xl font-bold tracking-tight text-white sm:text-4xl sm:leading-none">
                            Create your own Android Application
                        </h2>
                        <p class="max-w-xl mb-4 text-base text-gray-200 md:text-lg">
                            No coding required. Easy to use drag-and-drop interface.
                        </p> <a href="/" aria-label=""
                            class="inline-flex items-center font-semibold tracking-wider transition-colors duration-200 text-white">
                            Get Started Now
                            <svg fill="currentColor" viewBox="0 0 12 12" class="inline-block w-3 ml-2">
                                <path
                                    d="M9.707,5.293l-5-5A1,1,0,0,0,3.293,1.707L7.586,6,3.293,10.293a1,1,0,1,0,1.414,1.414l5-5A1,1,0,0,0,9.707,5.293Z">
                                </path>
                            </svg></a>
                    </div>
                    <div class="w-full max-w-xl xl:px-8 xl:w-5/12">
                        <div class="bg-white rounded shadow-2xl p-7 sm:p-10">
                            <h3 class="mb-4 text-xl font-semibold sm:text-center sm:mb-6 sm:text-2xl">
                                Sign up for updates
                            </h3>
                            <form>
                                <div class="mb-1 sm:mb-2"><label for="firstName"
                                        class="inline-block mb-1 font-medium">First
                                        name</label> <input id="firstName" placeholder="John" required="required"
                                        type="text" name="firstName"
                                        class="flex-grow w-full h-12 px-4 mb-2 transition duration-200 bg-white border border-gray-300 rounded shadow-sm appearance-none focus:bg-indigo-500 focus:outline-none focus:shadow-outline">
                                </div>
                                <div class="mb-1 sm:mb-2"><label for="lastName"
                                        class="inline-block mb-1 font-medium">Last name</label>
                                    <input id="lastName" placeholder="Doe" required="required" type="text"
                                        name="lastName"
                                        class="flex-grow w-full h-12 px-4 mb-2 transition duration-200 bg-white border border-gray-300 rounded shadow-sm appearance-none focus:bg-indigo-500 focus:outline-none focus:shadow-outline">
                                </div>
                                <div class="mb-1 sm:mb-2"><label for="email"
                                        class="inline-block mb-1 font-medium">E-mail</label> <input id="email"
                                        placeholder="john.doe@example.org" required="required" type="text"
                                        name="email"
                                        class="flex-grow w-full h-12 px-4 mb-2 transition duration-200 bg-white border border-gray-300 rounded shadow-sm appearance-none focus:bg-indigo-500 focus:outline-none focus:shadow-outline">
                                </div>
                                <div class="mt-4 mb-2 sm:mb-4"><button type="submit"
                                        class="inline-flex items-center justify-center w-full h-12 px-6 font-medium tracking-wide text-white transition duration-200 rounded shadow-md bg-indigo-500 hover:bg-indigo-500 focus:shadow-outline focus:outline-none">
                                        Subscribe
                                    </button></div>
                                <p class="text-xs text-gray-600 sm:text-sm">
                                    We respect your privacy. Unsubscribe at any time.
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="px-4 py-16 bg-white mx-auto w-full md:px-24 lg:px-8 lg:py-20">
        <div class="flex flex-col max-w-4xl mx-auto mb-6 lg:flex-row md:mb-10">
            <div class="lg:w-1/2">
                <h2
                    class="max-w-md mb-6 font-sans text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl sm:leading-none xl:max-w-lg">
                    Develop android apps for any purpose.
                </h2>
            </div>
            <div class="lg:w-1/2">
                <p class="text-base text-gray-700 md:text-lg">
                    We offer a wide range of features, including voice recognition and speech synthesis for smart
                    phones, tablets
                    and wearables.
                </p>
            </div>
        </div>
        <div class="grid max-w-4xl gap-8 row-gap-10 mx-auto sm:grid-cols-2 lg:grid-cols-2">
            <div class="max-w-md">
                <div class="flex items-center justify-center w-16 h-16 mb-4 rounded-full bg-indigo-100"><svg
                        stroke="currentColor" viewBox="0 0 52 52" class="w-12 h-12 text-indigo-500">
                        <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none"
                            points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
                    </svg></div>
                <h6 class="mb-2 font-semibold leading-5 text-gray-900">
                    Engage your customers.
                </h6>
                <p class="mb-3 text-sm text-gray-900">
                    Leverage natural language processing to create interactive conversations with your users that feel
                    like
                    they're talking to another person  —  not an automated system.
                </p> <a href="/" aria-label=""
                    class="inline-flex items-center font-semibold transition-colors duration-200 text-indigo-500 hover:text-indigo-500">Learn
                    more</a>
            </div>
            <div class="max-w-md">
                <div class="flex items-center justify-center w-16 h-16 mb-4 rounded-full bg-indigo-100"><svg
                        stroke="currentColor" viewBox="0 0 52 52" class="w-12 h-12 text-indigo-500">
                        <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none"
                            points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
                    </svg></div>
                <h6 class="mb-2 font-semibold leading-5 text-gray-900">
                    Boost efficiency in the workplace.
                </h6>
                <p class="mb-3 text-sm text-gray-900">
                    Streamline processes by enabling business managers to easily monitor their staff's performance or
                    give
                    instructions remotely from their smartphone or tablet.
                </p> <a href="/" aria-label=""
                    class="inline-flex items-center font-semibold transition-colors duration-200 text-indigo-500 hover:text-indigo-500">Learn
                    more</a>
            </div>
        </div>
    </div>
    <div class="px-4 py-16 mx-auto w-full bg-white md:px-24 lg:px-8 lg:py-20">
        <div class="max-w-xl mb-10 md:mx-auto sm:text-center lg:max-w-2xl md:mb-12">
            <h2
                class="max-w-lg mb-6 font-sans text-3xl font-bold leading-none tracking-tight text-gray-900 sm:text-4xl md:mx-auto">
                Android app developers
            </h2>
            <p class="text-base text-gray-700 md:text-lg">
                Our experienced team of Android app developers are skilled in the latest technologies and techniques,
                with many
                years of experience. We have successfully developed apps for startups, SMEs and multinational companies.
            </p>
        </div>
        <div class="grid gap-10 mx-auto sm:grid-cols-2 lg:grid-cols-4 lg:max-w-screen-lg">
            <div><img
                    src="https://images.pexels.com/photos/220453/pexels-photo-220453.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=3&amp;h=750&amp;w=1260"
                    alt="Person" class="object-cover w-24 h-24 rounded-full shadow">
                <div class="flex flex-col justify-center mt-2">
                    <p class="text-lg font-bold text-gray-900">
                        Oliver Aguilerra
                    </p>
                    <p class="mb-4 text-xs text-gray-900">
                        Product Manager
                    </p>
                    <p class="text-sm tracking-wide text-gray-900">
                        Pommy ipsum bent as a nine bob note naff off biscuits nowt, a cuppa unhand me sir hadn't done it
                        in donkey's
                        years sod's law.
                    </p>
                </div>
            </div>
            <div><img
                    src="https://images.pexels.com/photos/2381069/pexels-photo-2381069.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;h=750&amp;w=1260"
                    alt="Person" class="object-cover w-24 h-24 rounded-full shadow">
                <div class="flex flex-col justify-center mt-2">
                    <p class="text-lg font-bold text-gray-900">
                        Marta Clermont
                    </p>
                    <p class="mb-4 text-xs text-gray-900">
                        Design Team Lead
                    </p>
                    <p class="text-sm tracking-wide text-gray-900">
                        Secondary fermentation degrees plato units of bitterness, cask conditioned ale ibu real ale pint
                        glass craft
                        beer. krausen goblet grainy ibu.
                    </p>
                </div>
            </div>
            <div><img
                    src="https://images.pexels.com/photos/3747435/pexels-photo-3747435.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;h=750&amp;w=1260"
                    alt="Person" class="object-cover w-24 h-24 rounded-full shadow">
                <div class="flex flex-col justify-center mt-2">
                    <p class="text-lg font-bold text-gray-900">
                        Alice Melbourne
                    </p>
                    <p class="mb-4 text-xs text-gray-900">
                        Human Resources
                    </p>
                    <p class="text-sm tracking-wide text-gray-900">
                        I just closed my eyes and in a nanosecond I cured myself from this ridiculous model of disease,
                        addiction
                        and obsession.
                    </p>
                </div>
            </div>
            <div><img
                    src="https://images.pexels.com/photos/3931603/pexels-photo-3931603.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;h=750&amp;w=1260"
                    alt="Person" class="object-cover w-24 h-24 rounded-full shadow">
                <div class="flex flex-col justify-center mt-2">
                    <p class="text-lg font-bold text-gray-900">
                        Martin Garix Potter
                    </p>
                    <p class="mb-4 text-xs text-gray-900">
                        Good guy
                    </p>
                    <p class="text-sm tracking-wide text-gray-900">
                        Est Schlitz shoreditch fashion axe. Messenger bag cupidatat Williamsburg sustainable aliqua,
                        umami shabby
                        chic artisan duis pickled.
                    </p>
                </div>
            </div>
        </div>
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
<!-- Meta Pixel Code -->
<script>
    ! function(f, b, e, v, n, t, s) {
        if (f.fbq) return;
        n = f.fbq = function() {
            n.callMethod ?
                n.callMethod.apply(n, arguments) : n.queue.push(arguments)
        };
        if (!f._fbq) f._fbq = n;
        n.push = n;
        n.loaded = !0;
        n.version = '2.0';
        n.queue = [];
        t = b.createElement(e);
        t.async = !0;
        t.src = v;
        s = b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t, s)
    }(window, document, 'script',
        'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '141910578797189');
    fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
        src="https://www.facebook.com/tr?id=141910578797189&ev=PageView&noscript=1" /></noscript>
<!-- End Meta Pixel Code -->

</html>
