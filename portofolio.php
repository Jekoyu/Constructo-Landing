<!DOCTYPE html>
<html lang="en">
<?php include 'head.php'; ?>
<body class="font-sans text-gray-800 bg-white">
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

  <!-- Page Header -->
  <section class="relative py-20 bg-primary bg-pattern-dark">
    <div class="container mx-auto px-4 md:px-6 lg:px-8">
      <div class="text-center text-white" >
        <h1 class="text-5xl text-white md:text-6xl font-bold mb-6">Our Portfolio</h1>
        <div
          class="w-24 h-1 bg-gradient-to-r from-accent to-secondary mx-auto mb-6"></div>
        <nav class="text-lg">
          <a
            href="index.html"
            class="text-accent hover:text-white transition-colors">Home</a>
          <span class="mx-3">/</span>
          <span class="text-gray-300">Portfolio</span>
        </nav>
      </div>
    </div>
  </section>

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

      <!-- Portfolio Filter -->
      <div
        class="flex flex-wrap justify-center mb-12">
        <button
          class="portfolio-filter active px-6 py-3 mx-2 mb-2 bg-primary text-white rounded-lg font-medium transition-colors shadow-md"
          data-filter="all">
          All Projects
        </button>
        <button
          class="portfolio-filter px-6 py-3 mx-2 mb-2 bg-white text-gray-700 rounded-lg font-medium hover:bg-primary hover:text-white transition-colors shadow-md"
          data-filter="building">
          Building Construction
        </button>
        <button
          class="portfolio-filter px-6 py-3 mx-2 mb-2 bg-white text-gray-700 rounded-lg font-medium hover:bg-primary hover:text-white transition-colors shadow-md"
          data-filter="infrastructure">
          Infrastructure
        </button>
        <button
          class="portfolio-filter px-6 py-3 mx-2 mb-2 bg-white text-gray-700 rounded-lg font-medium hover:bg-primary hover:text-white transition-colors shadow-md"
          data-filter="residential">
          Residential
        </button>
        <button
          class="portfolio-filter px-6 py-3 mx-2 mb-2 bg-white text-gray-700 rounded-lg font-medium hover:bg-primary hover:text-white transition-colors shadow-md"
          data-filter="commercial">
          Commercial
        </button>
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

  <?php
  include 'footer.php';
  ?>

  <!-- Back to Top Button -->
  <button
    id="back-to-top"
    class="fixed bottom-6 right-6 bg-secondary hover:bg-orange-600 text-white w-12 h-12 rounded-full shadow-lg flex items-center justify-center transition-all opacity-0 invisible z-50">
    <svg
      xmlns="http://www.w3.org/2000/svg"
      class="h-6 w-6"
      fill="none"
      viewBox="0 0 24 24"
      stroke="currentColor">
      <path
        stroke-linecap="round"
        stroke-linejoin="round"
        stroke-width="2"
        d="M5 10l7-7m0 0l7 7m-7-7v18"></path>
    </svg>
  </button>
  <!-- Custom JavaScript -->
  <script src="./assets/js/script.js"></script>
</body>

</html>