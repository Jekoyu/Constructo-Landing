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
      <div class="text-center text-white">
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
          class="portfolio-item building commercial group relative overflow-hidden rounded-lg shadow-lg bg-white cursor-pointer"
          onclick="openModal('modal-1')">
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
        <!-- Portfolio Item 1 -->
        <div
          class="portfolio-item building commercial group relative overflow-hidden rounded-lg shadow-lg bg-white cursor-pointer"
          onclick="openModal('modal-1')">
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
        <!-- Portfolio Item 1 -->
        <div
          class="portfolio-item building commercial group relative overflow-hidden rounded-lg shadow-lg bg-white cursor-pointer"
          onclick="openModal('modal-1')">
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

  <!-- Modal Structure -->
  <div id="modal-1" class="fixed inset-0 z-50 hidden overflow-auto bg-black bg-opacity-50 flex justify-center items-center p-4">
    <div class="bg-white rounded-lg shadow-2xl w-full max-w-lg md:max-w-2xl lg:max-w-3xl mx-auto relative max-h-[90vh] flex flex-col overflow-hidden">
      <!-- Close Button -->
      <button onclick="closeModal('modal-1')" class="absolute top-4 right-4 text-gray-500 hover:text-gray-800 z-20">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
        </svg>
      </button>
      <!-- Gambar -->
      <div class="w-full aspect-[3/2] bg-gray-100 relative">
        <img
          src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80"
          alt="Grand Plaza Commercial Center"
          class="absolute inset-0 w-full h-full object-cover rounded-t-lg" />
      </div>
      <!-- Isi Modal Scrollable -->
      <div class="overflow-y-auto p-4 md:p-8 flex-1">
        <div class="mb-6">
          <h2 class="text-2xl md:text-3xl font-bold text-gray-800 mb-2">Grand Plaza Commercial Center</h2>
          <div class="flex items-center mb-4 flex-wrap gap-2">
            <span class="px-3 py-1 bg-primary text-white rounded-full text-sm mr-2">Commercial</span>
            <span class="px-3 py-1 bg-secondary text-white rounded-full text-sm">Building</span>
          </div>
          <div class="text-gray-600 mb-4">
            <strong>Location:</strong> Jakarta, Indonesia<br>
            <strong>Completion:</strong> 2023<br>
            <strong>Client:</strong> Grand Developers Ltd.<br>
            <strong>Project Value:</strong> $45 Million
          </div>
        </div>

        <div class="mb-6">
          <h3 class="text-xl font-bold text-gray-800 mb-3">Project Description</h3>
          <p class="text-gray-600 mb-4">
            The Grand Plaza Commercial Center is a landmark development in Jakarta's bustling business district.
            This 15-story mixed-use complex features premium office spaces, a luxury retail mall, and modern
            amenities that cater to international businesses and local enterprises alike.
          </p>
          <p class="text-gray-600 mb-4">
            The building incorporates state-of-the-art sustainable design elements, including solar panels,
            rainwater harvesting systems, and energy-efficient climate control. Its striking façade combines
            glass, steel, and local materials to create an iconic addition to Jakarta's skyline.
          </p>
        </div>

        <div class="mb-6">
          <h3 class="text-xl font-bold text-gray-800 mb-3">Key Features</h3>
          <ul class="list-disc list-inside text-gray-600 space-y-2">
            <li>15 floors of premium office space</li>
            <li>3-level retail mall with international brands</li>
            <li>Energy-efficient HVAC systems</li>
            <li>4-level underground parking facility</li>
            <li>Rooftop garden and event space</li>
            <li>LEED Gold certification</li>
          </ul>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
          <img src="https://images.unsplash.com/photo-1497366858526-0766cadbe8fa?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" alt="Interior" class="w-full h-32 md:h-40 object-cover rounded">
          <img src="https://images.unsplash.com/photo-1600585153490-76fb20a32601?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" alt="Front View" class="w-full h-32 md:h-40 object-cover rounded">
          <img src="https://images.unsplash.com/photo-1577760258779-eb2868608c57?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" alt="Aerial View" class="w-full h-32 md:h-40 object-cover rounded">
        </div>
      </div>
    </div>
  </div>

  <script>
    // Modal open/close function
    function openModal(modalId) {
      document.getElementById(modalId).classList.remove('hidden');
      document.body.style.overflow = 'hidden'; // Lock scroll
    }

    function closeModal(modalId) {
      document.getElementById(modalId).classList.add('hidden');
      document.body.style.overflow = 'auto';
    }

    // Click outside modal closes
    document.addEventListener('click', function(event) {
      const modals = document.querySelectorAll('[id^="modal-"]');
      modals.forEach(modal => {
        if (!modal.classList.contains('hidden') && event.target === modal) {
          closeModal(modal.id);
        }
      });
    });

    // Esc to close modal
    document.addEventListener('keydown', function(event) {
      if (event.key === 'Escape') {
        const visibleModal = document.querySelector('[id^="modal-"]:not(.hidden)');
        if (visibleModal) closeModal(visibleModal.id);
      }
    });
  </script>
  <!-- Custom JavaScript -->
  <script src="./assets/js/script.js"></script>
</body>

</html>