<!DOCTYPE html>
<html lang="en">
<?php include 'head.php'; ?>

<body>

    <!-- Top Bar -->
    <div class="bg-primary text-white py-2 px-4 hidden md:block lg:block">
        <div
            class="container mx-auto flex flex-col sm:flex-row justify-between items-center text-sm">
            <div class="flex items-center space-x-4 mb-2 sm:mb-0">
                <a
                    href="tel:+622155556666"
                    class="flex items-center hover:text-accent transition-colors">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-4 w-4 mr-1"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                    </svg>
                    + 62 82136849377
                </a>
                <a
                    href="mailto:info@ancatama.co.id"
                    class="flex items-center hover:text-accent transition-colors">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-4 w-4 mr-1"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                    ancatamaabadi@gmail.com
                </a>
            </div>
            <div class="flex items-center space-x-4">
                <span class="flex items-center">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-4 w-4 mr-1"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                    Kota Cilegon, Provinsi Banten 42434.
                </span>
            </div>
        </div>
    </div>
    <!-- navbar -->
    <?php include 'navbar.php'; ?>
    <!-- Hero Section with Carousel -->
    <section id="home" class="relative h-screen overflow-hidden">
        <div class="swiper hero-swiper overflow-hidden h-full">
            <div class="swiper-wrapper">
                <!-- Slide 1 -->
                <div class="swiper-slide relative">
                    <div
                        class="absolute inset-0 bg-cover bg-center"
                        style="
                background-image: url('https://images.unsplash.com/photo-1503387762-592deb58ef4e?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80');
              "></div>
                    <div class="hero-overlay absolute inset-0"></div>
                    <div
                        class="relative z-10 h-full flex items-center justify-center text-center text-white">
                        <div class="container mx-auto px-4">
                            <h1
                                class="text-5xl md:text-7xl text-white font-bold mb-6">
                                Welcome to<br />
                                <span class="text-secondary">PT. Ancatama Citra Abadi</span>
                            </h1>
                            <p
                                class="text-xl md:text-2xl mb-8 max-w-3xl mx-auto"

                                data-aos-delay="200">
                                Excellence in Construction Since 2018
                            </p>
                            <div
                                class="flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-4"

                                data-aos-delay="400">
                                <a
                                    href="#contact"
                                    class="px-8 py-4 bg-secondary text-white font-bold rounded-lg hover:bg-orange-600 transition-colors shadow-lg">
                                    GET CONSULTATION
                                </a>
                                <a
                                    href="./portofolio.php"
                                    class="px-8 py-4 border-2 border-white text-white font-bold rounded-lg hover:bg-white hover:text-primary transition-colors">
                                    VIEW PORTFOLIO
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="swiper-slide  relative">
                    <div
                        class="absolute inset-0 bg-cover bg-center"
                        style="
                background-image: url('https://images.unsplash.com/photo-1541888946425-d81bb19240f5?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80');
              "></div>
                    <div class="hero-overlay absolute inset-0"></div>
                    <div
                        class="relative z-10 h-full flex items-center justify-center text-center text-white">
                        <div class="container mx-auto px-4">
                            <h1 class="text-5xl md:text-7xl text-white font-bold mb-6">
                                Engineering <span class="text-accent">Excellence</span><br />
                                <span class="text-secondary">Innovative Solutions</span>
                            </h1>
                            <p class="text-xl md:text-2xl mb-8 max-w-3xl mx-auto">
                                Your Trusted Construction Partner
                            </p>
                            <div
                                class="flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-4">
                                <a
                                    href="./service.php"
                                    class="px-8 py-4 bg-accent text-white font-bold rounded-lg hover:bg-cyan-600 transition-colors shadow-lg">
                                    OUR SERVICES
                                </a>
                                <a
                                    href="./company.php"
                                    class="px-8 py-4 border-2 border-white text-white font-bold rounded-lg hover:bg-white hover:text-primary transition-colors">
                                    LEARN MORE
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="swiper-slide relative">
                    <div
                        class="absolute inset-0 bg-cover bg-center"
                        style="
                background-image: url('https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80');
              "></div>
                    <div class="hero-overlay absolute inset-0"></div>
                    <div
                        class="relative z-10 h-full flex items-center justify-center text-center text-white">
                        <div class="container mx-auto px-4">
                            <h1 class="text-5xl text-white md:text-7xl font-bold mb-6">
                                Connecting <span class="text-accent">Communities</span><br />
                                <span class="text-secondary">Building Future</span>
                            </h1>
                            <p class="text-xl md:text-2xl mb-8 max-w-3xl mx-auto">
                                Sustainable Infrastructure Development
                            </p>
                            <div
                                class="flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-4">
                                <a
                                    href="./experience.php"
                                    class="px-8 py-4 bg-primary text-white font-bold rounded-lg hover:bg-slate-800 transition-colors shadow-lg">
                                    OUR EXPERIENCE
                                </a>
                                <a
                                    href="#contact"
                                    class="px-8 py-4 border-2 border-white text-white font-bold rounded-lg hover:bg-white hover:text-primary transition-colors">
                                    CONTACT US
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Navigation arrows - hidden on mobile -->
            <div class="swiper-button-next text-white hidden sm:flex"></div>
            <div class="swiper-button-prev text-white hidden sm:flex"></div>

            <!-- Pagination -->
            <div class="swiper-pagination"></div>
        </div>
    </section>
    <!-- About Us Section -->
    <section id="about" class="py-20 bg-white">
        <div class="container mx-auto px-4 md:px-6 lg:px-8">
            <!-- Company Profile Header -->
            <div class="text-center mb-16" data-aos="fade-up">
                <span
                    class="inline-block w-12 h-12 bg-secondary rounded-full mb-4 flex items-center justify-center">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-6 w-6 text-white"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                    </svg>
                </span>
                <h2 class="text-4xl md:text-5xl font-bold mb-6">About Us</h2>
                <div
                    class="w-24 h-1 bg-gradient-to-r from-accent to-secondary mx-auto mb-6"></div>
                <nav class="text-sm text-gray-600">
                    <span class="bg-secondary text-white px-4 py-2 rounded-full">Home</span>
                    <span class="mx-2">/</span>
                    <span>Profil Perusahaan</span>
                </nav>
            </div>

            <!-- Main Content -->
            <div class="flex flex-col flex-col-reverse lg:flex-row gap-12 mb-16">
                <div class="lg:w-1/2" data-aos="fade-right">
                    <h3 class="text-3xl font-bold mb-6 text-primary">
                        Profil Perusahaan
                    </h3>
                    <div class="space-y-4 text-gray-600 leading-relaxed text-justify">
                        <p>
                            PT. Ancatama Citra Abadi adalah perusahaan swasta berskala
                            nasional yang didirikan di Kota Cilegon pada tanggal 20 Desember
                            2018. Berdiri di bawah akta notaris Ny. Nurlaelah, SH., MKn.,
                            dan telah mendapatkan persetujuan dari Menteri Kehakiman dan Hak
                            Asasi Manusia Republik Indonesia No. 4019011436102079. Sebagai
                            mitra terpercaya dalam pembangunan, PT. Ancatama Citra Abadi
                            berkomitmen menerapkan Total Quality Management untuk
                            menghadirkan Total Quality Services kepada seluruh klien.
                        </p>
                        <p class="mt-4">
                            Kami terus berkembang dengan layanan yang berfokus pada kepuasan
                            pelanggan, mutu pekerjaan, serta integritas tinggi di setiap
                            proyek yang kami tangani. Kami telah dipercaya untuk berbagai
                            proyek konstruksi dan desain interior di tingkat nasional,
                            berkolaborasi dengan perusahaan swasta, instansi pemerintah,
                            maupun BUMN. Dengan pengalaman, profesionalisme, dan dedikasi,
                            kami siap menjadi partner pembangunan terbaik bagi Indonesia.
                        </p>
                    </div>
                    <div class="mt-8 flex space-x-4">
                        <a
                            href="#contact"
                            class="px-6 py-3 bg-accent text-white font-bold rounded-lg hover:bg-cyan-600 transition-colors shadow-md flex items-center">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="h-5 w-5 mr-2"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                            </svg>
                            Contact Us
                        </a>
                        <a
                            href="./service.php"
                            class="px-6  py-3 border-2 border-accent text-accent font-bold rounded-lg hover:bg-accent hover:text-white transition-colors flex items-center">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="h-5 w-5 mr-2"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                            </svg>
                            Our Services
                        </a>
                    </div>
                </div>
                <div class="lg:w-1/2" data-aos="fade-left">
                    <div class="relative">
                        <img
                            src="https://images.unsplash.com/photo-1504307651254-35680f356dfd?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80"
                            alt="Modern Office Building"
                            class="rounded-lg shadow-xl w-full h-auto object-cover" />
                        <div
                            class="absolute -bottom-6 -right-6 w-32 h-32 bg-accent rounded-full opacity-20"></div>
                        <div
                            class="absolute -top-6 -left-6 w-24 h-24 bg-secondary rounded-full opacity-20"></div>
                        <div
                            class="absolute bottom-4 right-4 bg-white p-4 rounded-lg shadow-lg">
                            <p class="font-bold text-primary">Established</p>
                            <p class="text-3xl font-bold text-secondary">2018</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Compact Clients Marquee -->
    <section class="py-12 bg-white border-t border-b border-gray-200">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold mb-6"> LIST OF CLIENTS</h2>
                <div
                    class="w-24 h-1 bg-gradient-to-r from-accent to-secondary mx-auto mb-6"></div>
            </div>


            <!-- Single Row Marquee -->
            <div class="marquee">
                <div class="marquee-content">
                    <div class="marquee-item">
                        <img src="./assets/images/21.png"
                            alt="Client 1" class="h-10 md:h-12">
                    </div>
                    <div class="marquee-item">
                        <img src="./assets/images/cabot_logo2x.png"
                            alt="Client 2" class="h-10 md:h-12">
                    </div>
                    <div class="marquee-item">
                        <img src="./assets/images/logo-batangalum.png"
                            alt="Client 3" class="h-10 md:h-12">
                    </div>
                    <div class="marquee-item">
                        <img src="./assets/images/logo-krakatau.png"
                            alt="Client 3" class="h-10 md:h-12">
                    </div>
                    <div class="marquee-item">
                        <img src="./assets/images/logo_tereosfks.png"
                            alt="Client 4" class="h-10 md:h-12">
                    </div>
                    <div class="marquee-item">
                        <img src="./assets/images/pt-jawamanis.jpg"
                            alt="Client 5" class="h-10 md:h-12">
                    </div>
                    <div class="marquee-item">
                        <img src="./assets/images/pt-permata.png"
                            alt="Client 6" class="h-10 md:h-12">
                    </div>
                    <div class="marquee-item">
                        <img src="./assets/images/pt-suj.png"
                            alt="Client 7" class="h-10 md:h-12">
                    </div>
                    <!-- Duplicate for seamless loop -->
                    <div class="marquee-item">
                        <img src="./assets/images//21.png"
                            alt="Client 1" class="h-10 md:h-12">
                    </div>
                    <div class="marquee-item">
                        <img src="./assets/images/cabot_logo2x.png"
                            alt="Client 2" class="h-10 md:h-12">
                    </div>
                    <div class="marquee-item">
                        <img src="./assets/images/logo-batangalum.png"
                            alt="Client 3" class="h-10 md:h-12">
                    </div>
                    <div class="marquee-item">
                        <img src="./assets/images/logo-krakatau.png"
                            alt="Client 3" class="h-10 md:h-12">
                    </div>
                    <div class="marquee-item">
                        <img src="./assets/images/logo_tereosfks.png"
                            alt="Client 4" class="h-10 md:h-12">
                    </div>
                    <div class="marquee-item">
                        <img src="./assets/images/logo_tereosfks.png"
                            alt="Client 5" class="h-10 md:h-12">
                    </div>
                    <div class="marquee-item">
                        <img src="./assets/images/pt-jawamanis.jpg"
                            alt="Client 5" class="h-10 md:h-12">
                    </div>
                    <div class="marquee-item">
                        <img src="./assets/images/pt-permata.png"
                            alt="Client 6" class="h-10 md:h-12">
                    </div>
                    <div class="marquee-item">
                        <img src="./assets/images/pt-suj.png"
                            alt="Client 7" class="h-10 md:h-12">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <!-- Portfolio Section -->
    <section class="py-20 bg-gray-50 bg-pattern-light">
        <div class="container mx-auto px-4 md:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold mb-6">Our Projects</h2>
                <div
                    class="w-24 h-1 bg-gradient-to-r from-accent to-secondary mx-auto mb-6"></div>
                <p class="text-gray-600 max-w-3xl mx-auto text-lg">
                    Explore our diverse portfolio of completed projects across various
                    sectors and industries.
                </p>
            </div>

            <!-- Portfolio Grid -->
            <div
                class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8"
                id="portfolio-grid">
                <!-- Portfolio Item 1 -->
                <div
                    class="portfolio-item building commercial group relative overflow-hidden rounded-lg shadow-lg bg-white">
                    <div class="relative overflow-hidden h-64">
                        <img
                            src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                            alt="Grand Plaza Commercial Center"
                            class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" />
                        <div
                            class="portfolio-content absolute bottom-4 left-4 right-4 text-white z-10">
                            <h3 class="text-xl font-bold mb-2">
                                Grand Plaza Commercial Center
                            </h3>
                            <p class="text-sm opacity-90">
                                A modern commercial complex in the heart of Jakarta's business
                                district featuring state-of-the-art facilities and sustainable
                                design.
                            </p>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2 text-gray-800">
                            Grand Plaza Commercial Center
                        </h3>
                        <p class="text-gray-600 mb-4">
                            Modern commercial complex with premium facilities and strategic
                            location in Jakarta's central business district.
                        </p>
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-gray-500">Jakarta • 2023</span>
                            <span
                                class="px-3 py-1 bg-primary text-white rounded-full text-sm">Commercial</span>
                        </div>
                    </div>
                </div>

                <!-- Portfolio Item 2 -->
                <div
                    class="portfolio-item residential group relative overflow-hidden rounded-lg shadow-lg bg-white">
                    <div class="relative overflow-hidden h-64">
                        <img
                            src="https://images.unsplash.com/photo-1560518883-ce09059eeffa?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                            alt="Sunrise Residential Complex"
                            class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" />
                        <div
                            class="portfolio-content absolute bottom-4 left-4 right-4 text-white z-10">
                            <h3 class="text-xl font-bold mb-2">
                                Sunrise Residential Complex
                            </h3>
                            <p class="text-sm opacity-90">
                                A luxury residential development featuring modern amenities,
                                green spaces, and family-friendly environment.
                            </p>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2 text-gray-800">
                            Sunrise Residential Complex
                        </h3>
                        <p class="text-gray-600 mb-4">
                            Luxury residential development with modern amenities and
                            sustainable design in Bandung.
                        </p>
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-gray-500">Bandung • 2022</span>
                            <span
                                class="px-3 py-1 bg-accent text-white rounded-full text-sm">Residential</span>
                        </div>
                    </div>
                </div>

                <!-- Portfolio Item 3 -->
                <div
                    class="portfolio-item infrastructure group relative overflow-hidden rounded-lg shadow-lg bg-white">
                    <div class="relative overflow-hidden h-64">
                        <img
                            src="https://images.unsplash.com/photo-1545558014-8692077e9b5c?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                            alt="Central Highway Extension"
                            class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" />
                        <div
                            class="portfolio-content absolute bottom-4 left-4 right-4 text-white z-10">
                            <h3 class="text-xl font-bold mb-2">
                                Central Highway Extension
                            </h3>
                            <p class="text-sm opacity-90">
                                Major infrastructure project connecting key economic zones
                                with advanced traffic management systems.
                            </p>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2 text-gray-800">
                            Central Highway Extension
                        </h3>
                        <p class="text-gray-600 mb-4">
                            Major infrastructure project connecting key economic zones in
                            Central Java with modern highway standards.
                        </p>
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-gray-500">Central Java • 2021</span>
                            <span
                                class="px-3 py-1 bg-secondary text-white rounded-full text-sm">Infrastructure</span>
                        </div>
                    </div>
                </div>

                <!-- Portfolio Item 4 -->
                <div
                    class="portfolio-item building commercial group relative overflow-hidden rounded-lg shadow-lg bg-white">
                    <div class="relative overflow-hidden h-64">
                        <img
                            src="https://images.unsplash.com/photo-1497366754035-f200968a6e72?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                            alt="Tech Innovation Center"
                            class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" />
                        <div
                            class="portfolio-content absolute bottom-4 left-4 right-4 text-white z-10">
                            <h3 class="text-xl font-bold mb-2">Tech Innovation Center</h3>
                            <p class="text-sm opacity-90">
                                State-of-the-art office complex designed for technology
                                companies with smart building features.
                            </p>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2 text-gray-800">
                            Tech Innovation Center
                        </h3>
                        <p class="text-gray-600 mb-4">
                            State-of-the-art office complex designed for technology
                            companies in Surabaya with smart building features.
                        </p>
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-gray-500">Surabaya • 2020</span>
                            <span
                                class="px-3 py-1 bg-primary text-white rounded-full text-sm">Commercial</span>
                        </div>
                    </div>
                </div>

                <!-- Portfolio Item 5 -->
                <div
                    class="portfolio-item commercial group relative overflow-hidden rounded-lg shadow-lg bg-white">
                    <div class="relative overflow-hidden h-64">
                        <img
                            src="https://images.unsplash.com/photo-1566073771259-6a8506099945?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                            alt="Green Valley Resort"
                            class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" />
                        <div
                            class="portfolio-content absolute bottom-4 left-4 right-4 text-white z-10">
                            <h3 class="text-xl font-bold mb-2">Green Valley Resort</h3>
                            <p class="text-sm opacity-90">
                                Eco-friendly luxury resort that harmoniously blends with
                                Bali's natural landscape and cultural heritage.
                            </p>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2 text-gray-800">
                            Green Valley Resort
                        </h3>
                        <p class="text-gray-600 mb-4">
                            Eco-friendly luxury resort that harmoniously blends with Bali's
                            natural landscape and cultural heritage.
                        </p>
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-gray-500">Bali • 2019</span>
                            <span
                                class="px-3 py-1 bg-accent text-white rounded-full text-sm">Commercial</span>
                        </div>
                    </div>
                </div>

                <!-- Portfolio Item 6 -->
                <div
                    class="portfolio-item infrastructure group relative overflow-hidden rounded-lg shadow-lg bg-white">
                    <div class="relative overflow-hidden h-64">
                        <img
                            src="https://images.unsplash.com/photo-1574155376612-bfa4ed8aabfd?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                            alt="Urban Water Treatment Plant"
                            class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" />
                        <div
                            class="portfolio-content absolute bottom-4 left-4 right-4 text-white z-10">
                            <h3 class="text-xl font-bold mb-2">
                                Urban Water Treatment Plant
                            </h3>
                            <p class="text-sm opacity-90">
                                Modern water treatment facility serving the growing urban
                                population with advanced filtration technology.
                            </p>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2 text-gray-800">
                            Urban Water Treatment Plant
                        </h3>
                        <p class="text-gray-600 mb-4">
                            Modern water treatment facility serving the growing urban
                            population of Makassar with advanced technology.
                        </p>
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-gray-500">Makassar • 2018</span>
                            <span
                                class="px-3 py-1 bg-secondary text-white rounded-full text-sm">Infrastructure</span>
                        </div>
                    </div>
                </div>

                <!-- Portfolio Item 7 -->
                <div
                    class="portfolio-item building residential group relative overflow-hidden rounded-lg shadow-lg bg-white">
                    <div class="relative overflow-hidden h-64">
                        <img
                            src="https://images.unsplash.com/photo-1570129477492-45c003edd2be?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                            alt="Modern Housing Estate"
                            class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" />
                        <div
                            class="portfolio-content absolute bottom-4 left-4 right-4 text-white z-10">
                            <h3 class="text-xl font-bold mb-2">Modern Housing Estate</h3>
                            <p class="text-sm opacity-90">
                                Contemporary residential development with sustainable features
                                and community amenities.
                            </p>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2 text-gray-800">
                            Modern Housing Estate
                        </h3>
                        <p class="text-gray-600 mb-4">
                            Contemporary residential development with sustainable features
                            and community amenities in Tangerang.
                        </p>
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-gray-500">Tangerang • 2021</span>
                            <span
                                class="px-3 py-1 bg-green-500 text-white rounded-full text-sm">Residential</span>
                        </div>
                    </div>
                </div>

                <!-- Portfolio Item 8 -->
                <div
                    class="portfolio-item infrastructure group relative overflow-hidden rounded-lg shadow-lg bg-white">
                    <div class="relative overflow-hidden h-64">
                        <img
                            src="https://images.unsplash.com/photo-1449824913935-59a10b8d2000?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                            alt="Metropolitan Bridge Project"
                            class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" />
                        <div
                            class="portfolio-content absolute bottom-4 left-4 right-4 text-white z-10">
                            <h3 class="text-xl font-bold mb-2">
                                Metropolitan Bridge Project
                            </h3>
                            <p class="text-sm opacity-90">
                                Iconic bridge connecting major districts with innovative
                                engineering and architectural design.
                            </p>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2 text-gray-800">
                            Metropolitan Bridge Project
                        </h3>
                        <p class="text-gray-600 mb-4">
                            Iconic bridge connecting major districts with innovative
                            engineering and architectural design in Jakarta.
                        </p>
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-gray-500">Jakarta • 2020</span>
                            <span
                                class="px-3 py-1 bg-secondary text-white rounded-full text-sm">Infrastructure</span>
                        </div>
                    </div>
                </div>

                <!-- Portfolio Item 9 -->
                <div
                    class="portfolio-item building commercial group relative overflow-hidden rounded-lg shadow-lg bg-white">
                    <div class="relative overflow-hidden h-64">
                        <img
                            src="https://images.unsplash.com/photo-1545324418-cc1a3fa10c00?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                            alt="Corporate Headquarters"
                            class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" />
                        <div
                            class="portfolio-content absolute bottom-4 left-4 right-4 text-white z-10">
                            <h3 class="text-xl font-bold mb-2">Corporate Headquarters</h3>
                            <p class="text-sm opacity-90">
                                Modern corporate headquarters with sustainable design and
                                advanced technology integration.
                            </p>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2 text-gray-800">
                            Corporate Headquarters
                        </h3>
                        <p class="text-gray-600 mb-4">
                            Modern corporate headquarters with sustainable design and
                            advanced technology integration in Medan.
                        </p>
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-gray-500">Medan • 2022</span>
                            <span
                                class="px-3 py-1 bg-primary text-white rounded-full text-sm">Commercial</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Load More Button -->
            <div class="text-center mt-12">
                <button
                    class="px-8 py-3 bg-primary text-white font-medium rounded-lg hover:bg-slate-800 transition-colors shadow-md hover:shadow-lg">
                    Load More Projects
                </button>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-gray-50 bg-pattern-light">
        <div class="container mx-auto px-4 md:px-6 lg:px-8">
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="text-4xl md:text-5xl font-bold mb-6">Contact Us</h2>
                <div class="w-24 h-1 bg-gradient-to-r from-accent to-secondary mx-auto mb-6"></div>
                <p class="text-gray-600 max-w-3xl mx-auto text-lg">
                    Ready to start your next construction project? Our team is here to help you bring your vision to life.
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
                <!-- Contact Information -->
                <div class="lg:col-span-1" data-aos="fade-right">
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                        <!-- Main Office -->
                        <div class="p-8 border-b border-gray-100">
                            <h3 class="text-2xl font-bold mb-6 text-primary text-center sm:text-left">Head Office</h3>
                            <div class="space-y-6">
                                <div class="flex flex-col sm:flex-row items-center sm:items-start text-center sm:text-left">
                                    <div class="w-12 h-12 bg-accent rounded-lg flex items-center justify-center mb-4 sm:mb-0 sm:mr-4 flex-shrink-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h4 class="font-bold text-gray-800 mb-2">Office</h4>
                                        <p class="text-gray-600">
                                            euweung Sawo RT/RW. 002/009,
                                            Kelurahan Kotabumi, Kecamatan Purwakarta,
                                            Kota Cilegon, Provinsi Banten 42434.
                                        </p>
                                    </div>
                                </div>

                                <div class="flex flex-col sm:flex-row items-center sm:items-start text-center sm:text-left">
                                    <div class="w-12 h-12 bg-secondary rounded-lg flex items-center justify-center mb-4 sm:mb-0 sm:mr-4 flex-shrink-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h4 class="font-bold text-gray-800 mb-2">Phone & Fax</h4>
                                        <p class="text-gray-600">
                                            Phone: <a href="tel:+622182850095" class="text-accent hover:underline">+62 82136849377</a><br>
                                            Phone: <a href="tel:+6282311377731" class="text-accent hover:underline">+62 82311377731 </a><br>
                                        </p>
                                    </div>
                                </div>

                                <div class="flex flex-col sm:flex-row items-center sm:items-start text-center sm:text-left">
                                    <div class="w-12 h-12 bg-primary rounded-lg flex items-center justify-center mb-4 sm:mb-0 sm:mr-4 flex-shrink-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h4 class="font-bold text-gray-800 mb-2">Email</h4>
                                        <p class="text-gray-600">
                                            Email: <a href="mailto:ancatamaabadi@gmail.com" class="text-accent hover:underline">ancatamaabadi@gmail.com</a><br>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Office Hours -->
                        <div class="p-8 border-b border-gray-100">
                            <h3 class="text-xl font-bold mb-4 text-primary">Office Hours</h3>
                            <ul class="space-y-2 text-gray-600">
                                <li class="flex justify-between">
                                    <span>Monday - Friday:</span>
                                    <span class="font-medium">08:00 - 17:00</span>
                                </li>
                                <li class="flex justify-between">
                                    <span>Saturday:</span>
                                    <span class="font-medium">09:00 - 13:00</span>
                                </li>
                                <li class="flex justify-between">
                                    <span>Sunday & Public Holidays:</span>
                                    <span class="font-medium">Closed</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Contact Form and Map -->
                <div class="lg:col-span-2">
                    <!-- Contact Form -->
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-8" data-aos="fade-left">
                        <div class="p-8">
                            <h3 class="text-2xl font-bold mb-6 text-primary">Send Us a Message</h3>
                            <form id="contactForm" class="space-y-6">
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <div>
                                        <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Full Name *</label>
                                        <input type="text" id="name" name="name" required
                                            class="form-input w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-accent focus:border-accent transition-colors"
                                            placeholder="Your full name">
                                    </div>
                                    <div>
                                        <label for="company" class="block text-sm font-medium text-gray-700 mb-2">Company Name</label>
                                        <input type="text" id="company" name="company"
                                            class="form-input w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-accent focus:border-accent transition-colors"
                                            placeholder="Your company name">
                                    </div>
                                </div>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <div>
                                        <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email Address *</label>
                                        <input type="email" id="email" name="email" required
                                            class="form-input w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-accent focus:border-accent transition-colors"
                                            placeholder="Your email address">
                                    </div>
                                    <div>
                                        <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">Phone Number</label>
                                        <input type="tel" id="phone" name="phone"
                                            class="form-input w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-accent focus:border-accent transition-colors"
                                            placeholder="Your phone number">
                                    </div>
                                </div>
                                <div>
                                    <label for="subject" class="block text-sm font-medium text-gray-700 mb-2">Subject *</label>
                                    <select id="subject" name="subject" required
                                        class="form-input w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-accent focus:border-accent transition-colors">
                                        <option value="" disabled selected>Select a subject</option>
                                        <option value="General Inquiry">General Inquiry</option>
                                        <option value="Project Consultation">Project Consultation</option>
                                        <option value="Partnership Opportunity">Partnership Opportunity</option>
                                        <option value="Career Information">Career Information</option>
                                        <option value="Support Request">Support Request</option>
                                    </select>
                                </div>
                                <div>
                                    <label for="message" class="block text-sm font-medium text-gray-700 mb-2">Message *</label>
                                    <textarea id="message" name="message" rows="6" required
                                        class="form-input w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-accent focus:border-accent transition-colors resize-none"
                                        placeholder="Your message"></textarea>
                                </div>
                                <div class="flex items-center">
                                    <input type="checkbox" id="privacy" name="privacy" required class="h-4 w-4 text-accent focus:ring-accent border-gray-300 rounded">
                                    <label for="privacy" class="ml-2 block text-sm text-gray-700">
                                        I agree to the <a href="#" class="text-accent hover:underline">privacy policy</a> and consent to being contacted regarding my inquiry.
                                    </label>
                                </div>
                                <div>
                                    <button type="submit" class="btn btn-primary w-full flex items-center justify-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />
                                        </svg>
                                        Send Message
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer -->
    <?php
    include 'footer.php';
    ?>
    <script src="./assets/js/script.js"></script>
</body>

</html>