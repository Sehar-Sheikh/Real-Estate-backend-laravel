@extends('auth.partials.app')
@section('content')

    <!-- Hero Section -->
    <section class="relative flex items-center hero-bg"
        style="
        /* height: 600px; */
        background-image: url('https://anywhere.re/wp-content/uploads/2023/05/633f08923c4c51e97e723cde_State-of-Luxury-Real-Estate-in-Partnership-with-AREAA-2048x1406-1-1024x703.jpeg?height=600&width=1200');
        background-size: cover;
        background-position: center;
      ">
        <div
            style="
          position: absolute;
          inset: 0;
          background-color: rgba(26, 30, 33, 0.6);
        ">
        </div>
        <div
            style="
          max-width: 1200px;
          margin: 0 auto;
          padding: 1rem;
          z-index: 10;
          color: white;
        ">
            <h1 style="font-size: 2rem; font-weight: bold; margin-bottom: 1rem" class="animate-fade-in-left">
                <span style="display: block">Find Your</span>
                <span style="display: block; color: #81e6d9">Dream Home</span>
            </h1>
            <p style="font-size: 1.25rem; margin-bottom: 2rem; max-width: 40rem" class="animate-fade-in-right">
                Discover the perfect property that suits your lifestyle and dreams
            </p>
            <div class="animate-fade-in-up" id="hero-search"
                style="
            background-color: white;
            padding: 1rem;
            border-radius: 0.5rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            max-width: 30rem;
          ">
                <div style="display: flex">
                    <input type="text" placeholder="Search for properties..."
                        style="
                flex-grow: 1;
                padding: 0.5rem;
                border: 2px solid #bcbfc2;
                border-radius: 0.375rem;
                color: #6d6b6b;
                background-color: #ffffff;
              ">
                    <button
                        style="
                margin-left: 0.5rem;
                background-color: #38b2ac;
                color: white;
                padding: 0.5rem;
                border-radius: 0.375rem;
              "
                        class="transform transition duration-200 hover:scale-103">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="1.5rem" height="1.5rem"
                            viewBox="0,0,256,256">
                            <g fill="#ffffff" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt"
                                stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray stroke-dashoffset="0"
                                font-family="none" font-weight="none" font-size="none" text-anchor="none"
                                style="mix-blend-mode: normal">
                                <g transform="scale(8.53333,8.53333)">
                                    <path
                                        d="M13,3c-5.511,0 -10,4.489 -10,10c0,5.511 4.489,10 10,10c2.39651,0 4.59738,-0.85101 6.32227,-2.26367l5.9707,5.9707c0.25082,0.26124 0.62327,0.36648 0.97371,0.27512c0.35044,-0.09136 0.62411,-0.36503 0.71547,-0.71547c0.09136,-0.35044 -0.01388,-0.72289 -0.27512,-0.97371l-5.9707,-5.9707c1.41266,-1.72488 2.26367,-3.92576 2.26367,-6.32227c0,-5.511 -4.489,-10 -10,-10zM13,5c4.43012,0 8,3.56988 8,8c0,4.43012 -3.56988,8 -8,8c-4.43012,0 -8,-3.56988 -8,-8c0,-4.43012 3.56988,-8 8,-8z">
                                    </path>
                                </g>
                            </g>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Services -->
    <section class="py-16 bg-white" id="services">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12 text-teal-800 animate-fade-in-up">
                Our Services
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8" id="services">
                <div class="text-center hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1 bg-gradient-to-b from-blue-200 to-white rounded-[10px] animate-card-down"
                    style="border: 2px solid #dfe6f0; border-radius: 10px">
                    <div class="pt-6">
                        <img src="https://img.icons8.com/?size=100&id=8434&format=png&color=005757" alt="Buying"
                            class="mx-auto h-12 w-12 text-teal-600 mb-4">
                        <h3 class="text-xl font-semibold mb-2 text-teal-800">Buying</h3>
                        <p class="text-teal-600 m-2">
                            Find your perfect home with our expert guidance
                        </p>
                    </div>
                </div>
                <div class="text-center hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1 bg-gradient-to-b from-blue-200 to-white rounded-[10px] animate-card-up"
                    style="border: 2px solid #dfe6f0; border-radius: 10px">
                    <div class="pt-6" id="selling">
                        <img src="https://img.icons8.com/?size=100&id=19997&format=png&color=005757" alt="Selling"
                            class="mx-auto h-12 w-12 text-teal-600 mb-4">
                        <h3 class="text-xl font-semibold mb-2 text-teal-800">Selling</h3>
                        <p class="text-teal-600 m-2">
                            Get the best value for your property
                        </p>
                    </div>
                </div>
                <div class="text-center hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1 bg-gradient-to-b from-blue-200 to-white rounded-[10px] animate-card-down"
                    style="border: 2px solid #dfe6f0; border-radius: 10px">
                    <div class="pt-6">
                        <img src="https://img.icons8.com/?size=100&id=20034&format=png&color=005757" alt="Renting"
                            class="mx-auto h-12 w-12 text-teal-600 mb-4">
                        <h3 class="text-xl font-semibold mb-2 text-teal-800">Renting</h3>
                        <p class="text-teal-600 m-2">
                            Discover great rental opportunities
                        </p>
                    </div>
                </div>
                <div class="text-center hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1 bg-gradient-to-b from-blue-200 to-white rounded-[10px] animate-card-up"
                    style="border: 2px solid #dfe6f0; border-radius: 10px">
                    <div class="pt-6">
                        <img src="https://img.icons8.com/?size=100&id=15565&format=png&color=005757" alt="Leasing"
                            class="mx-auto h-12 w-12 text-teal-600 mb-4">
                        <h3 class="text-xl font-semibold mb-2 text-teal-800">Leasing</h3>
                        <p class="text-teal-600 m-2">
                            Professional leasing services for property owners
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Us -->
    <section class="py-16 bg-gradient-to-br from-teal-100 to-teal-200" id="about">
        <div class="container mx-auto" style="padding-left: 2.25rem; padding-right: 2.25rem">
            <div class="flex flex-col md:flex-row items-center gap-12">
                <div class="md:w-1/2 animate-fade-in-left">
                    <h2 class="text-3xl font-bold mb-6 text-teal-800">
                        About Dream Homes Realty
                    </h2>
                    <p class="text-lg mb-6 text-teal-700">
                        With over 20 years of experience in the real estate industry,
                        Dream Homes Realty has been helping clients find their perfect
                        homes and make smart property investments. Our team of expert
                        agents is dedicated to providing personalized service and ensuring
                        smooth transactions for all our clients.
                    </p>
                    <button
                        style="
                background-color: #4f9f89;
                color: white;
                padding: 0.75rem 1.5rem;
                border-radius: 0.375rem;
                transition: background-color 0.3s;
              "
                        onmouseover="this.style.backgroundColor='#3B8A75'"
                        onmouseout="this.style.backgroundColor='#4F9F89'">
                        Learn More About Us
                    </button>
                </div>
                <div class="md:w-1/2 relative animate-fade-in-right">
                    <img src="https://cdn.businessday.ng/2021/07/luxury-residential-real-estate.png?height=400&width=600"
                        alt="About Dream Homes Realty"
                        style="
                border-radius: 0.5rem;
                box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
              ">
                    <div class="bounce"
                        style="
                        position: absolute;
                        bottom: -1.5rem;
                        left: -1.5rem;
                        background-color: #4f9f89;
                        color: white;
                        border-radius: 0.375rem;
                        animation: bounce 1s infinite;
                      ">
                        <p style="font-weight: bold;">20+ Years</p>
                        <p>of Excellence</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Customer Reviews -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4 mb-2">
            <h2 class="text-3xl font-bold text-center mb-12 text-teal-800 animate-fade-in-up">
                What Our Clients Say
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
                <div
                    class="bg-gradient-to-b from-white to-blue-100 shadow-lg rounded-lg overflow-hidden transform transition-all duration-300 hover:-translate-y-1 animate-card-up">
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <img src="https://decisionsystemsgroup.github.io/workshop-html/img/john-doe.jpg"
                                alt="John Doe" class="h-10 w-10 mr-4 rounded-full object-cover">
                            <div>
                                <p class="font-semibold text-teal-800">John Doe</p>
                                <div class="flex text-yellow-400">
                                    <!-- Star Rating -->
                                    <starrating stars="5" />
                                </div>
                            </div>
                        </div>
                        <p class="text-teal-700">
                            Dream Homes Realty made finding our first home a breeze. Highly
                            recommended!
                        </p>
                    </div>
                </div>
                <div
                    class="bg-gradient-to-b from-white to-blue-100 shadow-lg rounded-lg overflow-hidden transform transition-all duration-300 hover:-translate-y-1 animate-card-down">
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <img src="https://lawtheme.theironnetwork.org/demo3/wp-content/uploads/sites/4/2017/08/5.jpg"
                                alt="Jane Smith" class="h-10 w-10 mr-4 rounded-full object-cover">
                            <div>
                                <p class="font-semibold text-teal-800">Jane Smith</p>
                                <div class="flex text-yellow-400">
                                    <!-- Star Rating -->
                                    <starrating stars="5" />
                                </div>
                            </div>
                        </div>
                        <p class="text-teal-700">
                            Excellent service and a wide range of properties to choose from.
                            Very satisfied!
                        </p>
                    </div>
                </div>
                <div
                    class="bg-gradient-to-b from-white to-blue-100 shadow-lg rounded-lg overflow-hidden transform transition-all duration-300 hover:-translate-y-1 animate-card-up">
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <img src="https://xs-79.com/wp-content/uploads/2018/06/team5-2.jpg" alt="Mike Johnson"
                                class="h-10 w-10 mr-4 rounded-full object-cover">
                            <div>
                                <p class="font-semibold text-teal-800">Mike Johnson</p>
                                <div class="flex text-yellow-400">
                                    <!-- Star Rating -->
                                    <starrating stars="5" />
                                </div>
                            </div>
                        </div>
                        <p class="text-teal-700">
                            Fantastic experience from start to finish! Would definitely use
                            again.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="max-w-md mx-auto p-6">
            <h3 class="text-2xl font-semibold mb-4 text-center text-teal-800 animate-fade-in-up">
                Add Your Review
            </h3>
            <form class="space-y-4">
                <input type="text" placeholder="Enter Your Name..."
                    class="bg-teal-50 border-teal-200 focus:border-teal-500 w-full p-2 border rounded"
                    style="
              border: 2px solid #bcbfc2;
              border-radius: 0.375rem;
              color: #000000;
              background-color: #ffffff;
            ">
                <input type="email" placeholder="Enter Your Email..."
                    class="bg-teal-50 border-teal-200 focus:border-teal-500 w-full p-2 border rounded"
                    style="
              border: 2px solid #bcbfc2;
              border-radius: 0.375rem;
              color: #000000;
              background-color: #ffffff;
            ">
                <textarea placeholder="How was your overall experience?"
                    class="bg-teal-50 border-teal-200 focus:border-teal-500 w-full p-2 border rounded"
                    style="
              border: 2px solid #bcbfc2;
              border-radius: 0.375rem;
              color: #000000;
              background-color: #ffffff;
            "></textarea>
                <div class="flex items-center space-x-4">
                    <p class="text-lg font-semibold">Rating :</p>
                    <div class="star-rating flex">
                        <span class="star" data-value="1">&#9733;</span>
                        <span class="star" data-value="2">&#9733;</span>
                        <span class="star" data-value="3">&#9733;</span>
                        <span class="star" data-value="4">&#9733;</span>
                        <span class="star" data-value="5">&#9733;</span>
                    </div>
                    <input type="hidden" id="rating" name="rating" value="0">
                </div>
                <button type="submit" class="w-full bg-teal-600 hover:bg-teal-700 text-white p-2 rounded">
                    Submit Review
                </button>
            </form>
        </div>
    </section>

    <!-- Why Choose Us -->
    <section class="py-16 relative"
        style="
        background-image: url('https://realestate.apleona.com/fileadmin/media/images/ESG_Bild.png');

        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
      ">
        <!-- Overlay for opacity on the background image -->
        <div
            style="
          position: absolute;
          top: 0;
          left: 0;
          right: 0;
          bottom: 0;
          background-color: rgba(
            255,
            255,
            255,
            0.5
          ); /* White with 40% opacity */
        ">
        </div>
        <!-- Content overlay -->
        <div class="relative container mx-auto px-4 flex flex-col items-center justify-center text-center">
            <!-- Centered Heading -->
            <h2 class="text-3xl font-bold mb-12 text-teal-900 animate-fade-in-up"
                style="
            background-color: #004d4d;
            padding: 20px;
            display: inline-block;
            box-shadow: 2px 4px 6px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            color: #ffffff;
          ">
                Why Choose Us
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Card 1 -->
                <div class="bg-white shadow-lg rounded-lg p-6 text-center animate-fade-in-up"
                    style="
              animation-delay: 0ms;
              border: 1px solid #007f7f;
              border-radius: 20px;
            ">
                    <img src="https://img.icons8.com/?size=100&id=102261&format=png&color=005757" alt="Expert Agents"
                        class="mx-auto h-16 w-16 text-teal-600 mb-4">
                    <h3 class="text-xl font-semibold mb-2 text-teal-800">
                        Expert Agents
                    </h3>
                    <p class="text-teal-700">
                        Our team of experienced agents provides unparalleled service and
                        expertise.
                    </p>
                </div>
                <!-- Card 2 -->
                <div class="bg-white shadow-lg rounded-lg p-6 text-center animate-fade-in-up"
                    style="
              animation-delay: 200ms;
              border: 1px solid #007f7f;
              border-radius: 20px;
            ">
                    <img src="https://img.icons8.com/?size=100&id=CtbB7gx6C8GT&format=png&color=005757"
                        alt="Extensive Listings" class="mx-auto h-14 w-14 text-teal-600 mb-4">
                    <h3 class="text-xl font-semibold mb-2 text-teal-800">
                        Extensive Listings
                    </h3>
                    <p class="text-teal-700">
                        Access to a wide range of properties to suit every need and
                        budget.
                    </p>
                </div>
                <!-- Card 3 -->
                <div class="bg-white shadow-lg rounded-lg p-6 text-center animate-fade-in-up"
                    style="
              animation-delay: 400ms;
              border: 1px solid #007f7f;
              border-radius: 20px;
            ">
                    <img src="https://img.icons8.com/?size=100&id=15214&format=png&color=005757"
                        alt="Smooth Transactions" class="mx-auto h-16 w-16 text-teal-600 mb-4">
                    <h3 class="text-xl font-semibold mb-2 text-teal-800">
                        Smooth Transactions
                    </h3>
                    <p class="text-teal-700">
                        We ensure a hassle-free experience from property search to
                        closing.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Us -->
    <section class="py-16 bg-gray-50" id="contact">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-bold text-center mb-12 text-teal-800 animate-fade-in-up">
                Contact Us
            </h2>
            <div class="flex flex-col md:flex-row gap-12">
                <div class="md:w-1/2 animate-fade-in-left bg-white p-6 rounded-lg shadow-lg">
                    <form class="space-y-4" action="/submit-form" method="POST">
                        <div>
                            <!-- <label for="name" class="block text-sm font-medium text-gray-700">Name</label> -->
                            <input id="name" type="text" placeholder="Your Name"
                                class="mt-1 bg-teal-50 border border-teal-200 focus:border-teal-500 focus:ring focus:ring-teal-200 block w-full rounded-md shadow-sm p-2 transition duration-200 ease-in-out transform hover:scale-105"
                                required>
                        </div>
                        <div>
                            <!-- <label for="email" class="block text-sm font-medium text-gray-700">Email</label> -->
                            <input id="email" type="email" placeholder="Your Email"
                                class="mt-1 bg-teal-50 border border-teal-200 focus:border-teal-500 focus:ring focus:ring-teal-200 block w-full rounded-md shadow-sm p-2 transition duration-200 ease-in-out transform hover:scale-105"
                                required>
                        </div>
                        <div>
                            <!-- <label for="phone" class="block text-sm font-medium text-gray-700">Phone Number</label> -->
                            <input id="phone" type="tel" placeholder="Phone Number"
                                class="mt-1 bg-teal-50 border border-teal-200 focus:border-teal-500 focus:ring focus:ring-teal-200 block w-full rounded-md shadow-sm p-2 transition duration-200 ease-in-out transform hover:scale-105"
                                required>
                        </div>
                        <div>
                            <!-- <label for="message" class="block text-sm font-medium text-gray-700">Your Message</label> -->
                            <textarea id="message" placeholder="Your Message"
                                class="mt-1 bg-teal-50 border border-teal-200 focus:border-teal-500 focus:ring focus:ring-teal-200 block w-full rounded-md shadow-sm p-2 transition duration-200 ease-in-out transform hover:scale-105"
                                required></textarea>
                        </div>
                        <button type="submit"
                            class="w-full bg-teal-600 hover:bg-teal-700 text-white font-bold py-2 rounded-md transition duration-200 ease-in-out transform hover:scale-105">
                            Send Message
                        </button>
                    </form>
                </div>
                <div class="md:w-1/2 animate-fade-in-right">
                    <!-- <img src="https://images.pexels.com/photos/1475938/pexels-photo-1475938.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1?height=400&width=600"
            alt="Map" class="w-full h-64 object-cover rounded-lg shadow-lg mb-4" /> -->
                    <iframe class="w-full h-64 rounded-lg shadow-lg mb-4"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387190.27990201765!2d-74.25986568745145!3d40.69767006312518!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a17b1f46c7d%3A0x5f1d3a567bfbc32a!2sNew%20York%2C%20NY%20-%20USA!5e0!3m2!1sen!2sin!4v1675195006006!5m2!1sen!2sin"
                        allowfullscreen loading="lazy"></iframe>
                    <div class="bg-white p-4 rounded-lg shadow-lg">
                        <div class="flex items-center mb-4 text-teal-700">
                            <!-- <svg
                  class="h-6 w-6 text-teal-600 mr-2"
                  fill="currentColor"
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 24 24">
                  <path
                    d="M12 2a10 10 0 0 0-9.95 8.34C2.06 10.94 2 10.98 2 11c0 5.22 3.9 9.46 8.96 9.93A9.993 9.993 0 0 0 20 12c0-.02-.06-1.04-1.05-1.45A9.958 9.958 0 0 0 12 2zm0 2c1.9 0 3.64.67 5 1.78A9.966 9.966 0 0 0 12 4zM5 11a7 7 0 0 1 0 2h2v-2H5zm14 2c0-1.07-.16-2.1-.44-3h-1.56v2H19zm-2-7c-1.76 0-3.39.64-4.68 1.83C12.24 8.58 12 9.27 12 10h2a7.978 7.978 0 0 1 4-1c0-1.04-.16-2.06-.44-3H19zM12 16c-2.5 0-4.59-.83-6.36-2.24A6.97 6.97 0 0 1 12 16zM6 11H4a7 7 0 0 1 0-2h2v2zm8 2c-1.27 0-2.5-.35-3.56-.96A7.977 7.977 0 0 1 12 18a7.977 7.977 0 0 1-5.76-2.33C5.27 16.15 4 18.09 4 20c0 2.21 2.39 4 6 4s6-1.79 6-4c0-1.89-1.28-3.5-3.36-4.45C13.76 17.11 15 18.55 15 20a5 5 0 0 1-5 5c-2.3 0-4.11-1.14-5-3a7.99 7.99 0 0 1 7.14-4.66C12.18 18.19 14 20 16 20c2.21 0 4-1.79 4-4 0-1.74-1.48-3.48-3.86-4.45C17.84 18.73 18 20 18 20c0 1.35-.45 2.55-1.19 3.5A5.994 5.994 0 0 1 16 24c-3.31 0-6-2.69-6-6s2.69-6 6-6c1.42 0 2.76.5 3.82 1.34A6.982 6.982 0 0 1 18 12c0-3.86-3.14-7-7-7z" />
                </svg> -->
                            <img src="https://img.icons8.com/?size=100&id=53430&format=png&color=005757"
                                alt="Home Icon" class="h-6 w-6 text-teal-600 mr-2">
                            <p>123 Dream Home Street, Real Estate City, 12345</p>
                        </div>
                        <div class="flex items-center mb-4 text-teal-700">
                            <img src="https://img.icons8.com/?size=100&id=9730&format=png&color=005757"
                                alt="Home Icon" class="h-6 w-6 text-teal-600 mr-2">
                            <p>+1 (123) 456-7890</p>
                        </div>
                        <div class="flex items-center text-teal-700">
                            <img src="https://img.icons8.com/?size=100&id=12623&format=png&color=005757"
                                alt="Home Icon" class="h-6 w-6 text-teal-600 mr-2">
                            <p>info@example.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
