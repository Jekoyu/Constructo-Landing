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

      <div class="flex flex-wrap justify-center gap-4 mb-12" id="portfolio-filters">
      </div>

      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8" id="portfolio-grid">
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
  <!-- Modal Project (JANGAN hapus id/modal di bawah ini) -->
  <div id="project-modal" class="fixed inset-0 z-50 hidden overflow-auto bg-black bg-opacity-50 flex justify-center items-center p-4">
    <div id="project-modal-content" class="bg-white rounded-lg shadow-2xl w-full max-w-lg md:max-w-2xl lg:max-w-3xl mx-auto relative max-h-[90vh] flex flex-col overflow-hidden"></div>
    <button onclick="closeProjectModal()" class="absolute top-4 right-4 text-gray-500 hover:text-gray-800 z-20">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
      </svg>
    </button>
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

  <!-- Fetch Categories and project -->
  <!-- sebelum <script> yang JS fetch! -->
  <?php include 'config.php'; ?>
  <script>
    window.API_BASE_URL = "<?= $apiBaseUrl ?>";
  </script>

  <script>
    const PROJECT_IMAGE_BASE = window.API_BASE_URL + "/admin/uploads/img/";

    let allProjects = []; // cache project

    // 1. Render kategori filter (MODIFIED)
    function renderPortfolioFilters(categories) {
      const filterDiv = document.getElementById('portfolio-filters');
      // MODIFIED: Dihapus mx-2 mb-2 dari tombol
      let btns = `
    <button class="portfolio-filter active px-6 py-3 bg-primary text-white rounded-lg font-medium transition-colors shadow-md"
      data-filter="all">All Projects</button>
  `;
      categories.forEach(category => {
        // MODIFIED: Dihapus mx-2 mb-2 dari tombol
        btns += `
    <button class="portfolio-filter px-6 py-3 bg-white text-gray-700 rounded-lg font-medium hover:bg-primary hover:text-white transition-colors shadow-md"
      data-filter="${category}">${category}</button>
    `;
      });
      filterDiv.innerHTML = btns;
    }

    // 2. Render project card grid
    function getProjectImage(project) {
      if (project.images && project.images.length && project.images[0].url) {
        let img = project.images[0].url.trim();
        // Pastikan path sesuai
        if (!img.startsWith('/Constructo-Landing/admin/uploads/img/')) {
          img = img.replace(/^uploads\/img\//, '').replace(/^\/+/, '');
          img = '/Constructo-Landing/admin/uploads/img/' + img;
        }
        return `<img src="${img}" loading="lazy" alt="${project.name}" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" />`;
      }
      return `<div class="w-full h-full bg-gray-100 flex items-center justify-center text-gray-400">No Image</div>`;
    }

    function renderProjects(projects) {
      const grid = document.getElementById('portfolio-grid');
      if (!Array.isArray(projects) || !projects.length) {
        grid.innerHTML = `<div class="col-span-3 text-center text-gray-400">No projects found.</div>`;
        return;
      }
      grid.innerHTML = projects.map(project => `
    <div class="portfolio-item group relative overflow-hidden rounded-lg shadow-lg bg-white cursor-pointer"
      onclick='openProjectModal(${JSON.stringify(project)})'>
      <div class="relative overflow-hidden aspect-square">
        ${getProjectImage(project)}
      </div>
      <div class="p-5">
        <h3 class="text-lg font-bold mb-1 text-gray-800">${project.name}</h3>
        <p class="text-gray-600 mb-2 truncate">${project.description || ''}</p>
        <div class="flex flex-col-reverse items-start gap-4 ">
          <span class="text-xs text-gray-500">${project.year || ''}</span>
          <span class="px-2 py-1 bg-primary text-white rounded-full text-xs">${project.category || ''}</span>
        </div>
      </div>
    </div>
  `).join('');
    }

    // 3. Event filter
    function setupPortfolioFilter() {
      const filters = document.querySelectorAll('.portfolio-filter');
      filters.forEach(btn => {
        btn.addEventListener('click', function() {
          filters.forEach(b => b.classList.remove('active', 'bg-primary', 'text-white'));
          this.classList.add('active', 'bg-primary', 'text-white');
          const filter = this.dataset.filter;
          if (filter === "all") {
            renderProjects(allProjects);
          } else {
            renderProjects(allProjects.filter(p => (p.category || "").toLowerCase() === filter.toLowerCase()));
          }
        });
      });
    }

    // 4. Fetch & render all
    function loadPortfolio() {
      // Fetch categories
      fetch(window.API_BASE_URL + '/data.php?action=categories')  
        .then(res => res.json())
        .then(cats => {
          if (cats.status === "success" && Array.isArray(cats.categories)) {
            renderPortfolioFilters(cats.categories);
          }
          // Fetch projects setelah kategori sudah render
          fetch(window.API_BASE_URL + '/data.php?action=projects')
            .then(res => {
              if (!res.ok) throw new Error('Network response was not ok');
              return res.json();
            })
            .then(res => {
              if (Array.isArray(res.projects)) {
                allProjects = res.projects;
                renderProjects(allProjects);
                setTimeout(setupPortfolioFilter, 200); // tunggu DOM tombol filter sudah ada
              }
            });
        });
    }

    document.addEventListener('DOMContentLoaded', loadPortfolio);

    // --- MODAL PROJECT
    function openProjectModal(project) {
      // Main image 1:1
      const mainImg = project.images && project.images.length ?
        `<div class="w-full p-4 aspect-square  flex items-center justify-center overflow-hidden rounded-t-lg mb-2">
      <img src="${getProjectImageUrl(project.images[0].url)}" loading="lazy" alt="${project.name}" class="w-full h-full rounded-md object-cover" />
    </div>` :
        `<div class="w-full p-4  aspect-square flex items-center justify-center text-gray-400 mb-2">No Image</div>`;

      // Extra images grid
      let extraImgs = '';
      if (project.images && project.images.length > 1) {
        extraImgs = `<div class="grid grid-cols-3 gap-2 mb-4">` +
          project.images.slice(1, 4).map(img =>
            `<div class="aspect-square overflow-hidden rounded">
              <img src="${getProjectImageUrl(img.url)}" loading="lazy" class="w-full h-full rounded-md object-cover" alt="Project Image">
            </div>`
          ).join('') + `</div>`;
      }

      // Feature list (if any)
      let list = '';
      if (Array.isArray(project.features)) {
        list = `<ul class="list-disc list-inside text-gray-600 mb-3 space-y-1">
      ${project.features.map(f => `<li>${f}</li>`).join('')}
    </ul>`;
      }

      // Project details
      document.getElementById('project-modal-content').innerHTML = `
    ${mainImg}
    <div class="px-5 pb-5">
      <h2 class="text-xl md:text-2xl font-bold mb-2">${project.name}</h2>
      <div class="flex items-center gap-2 flex-wrap mb-3">
        <span class="px-2 py-1 bg-primary text-white rounded-full text-xs">${project.category || ''}</span>
        <span class="px-2 py-1 bg-secondary text-white rounded-full text-xs">${project.year || ''}</span>
      </div>
      <p class="text-gray-600 mb-3">${project.description || ''}</p>
      ${list}
      ${extraImgs}
    </div>
  `;
      document.getElementById('project-modal').classList.remove('hidden');
      document.body.style.overflow = 'hidden';
    }

    function closeProjectModal() {
      document.getElementById('project-modal').classList.add('hidden');
      document.body.style.overflow = '';
      document.getElementById('project-modal-content').innerHTML = '';
    }

    // Utility: Path gambar biar selalu bener
    function getProjectImageUrl(img) {
      if (!img) return '';
      if (!img.startsWith('/Constructo-Landing/admin/uploads/img/')) {
        img = '/Constructo-Landing/admin/uploads/img/' + img.replace(/^uploads\/img\//, '').replace(/^\/+/, '');
      }
      return img;
    }

    // Esc key & click overlay = close
    document.addEventListener('keydown', function(event) {
      if (event.key === 'Escape') closeProjectModal();
    });
    document.getElementById('project-modal').addEventListener('click', function(e) {
      if (e.target === this) closeProjectModal();
    });
  </script>

</body>

</html>