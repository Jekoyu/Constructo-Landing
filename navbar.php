   <!-- Navigation -->
   <nav class="bg-white shadow-lg sticky top-0 z-50">
       <div class="container mx-auto px-4 md:px-6 lg:px-8">
           <div class="flex justify-between items-center py-4">
               <div class="flex items-center">
                   <div class="w-12 h-12 rounded-lg flex items-center justify-center mr-3">
                       <img
                           src="./assets/images/logo.webp"
                           alt="PT. Ancatama Citra Abadi" />
                   </div>
                   <div>
                       <h1 class="text-xl font-bold text-primary">
                           PT. Ancatama Citra Abadi
                       </h1>
                       <p class="text-xs text-gray-500">
                           Construction & Infrastructure Excellence
                       </p>
                   </div>
               </div>
               <!-- Desktop Menu -->
               <div class="hidden lg:flex space-x-8">
                   <a href="/constructo-landing/index.php" class="nav-link font-medium transition-colors relative after:content-[''] after:absolute after:bottom-[-4px] after:left-0 after:h-[3px] after:w-0 hover:after:w-full after:transition-all after:duration-300 after:bg-accent" id="nav-home">
                       HOME
                   </a>
                   <a href="/constructo-landing/company.php" class="nav-link font-medium transition-colors relative after:content-[''] after:absolute after:bottom-[-4px] after:left-0 after:h-[3px] after:w-0 hover:after:w-full after:transition-all after:duration-300 after:bg-accent" id="nav-company">
                       COMPANY
                   </a>
                   <a href="/constructo-landing/service.php" class="nav-link font-medium transition-colors relative after:content-[''] after:absolute after:bottom-[-4px] after:left-0 after:h-[3px] after:w-0 hover:after:w-full after:transition-all after:duration-300 after:bg-accent" id="nav-services">
                       SERVICES
                   </a>
                   <a href="/constructo-landing/experience.php" class="nav-link font-medium transition-colors relative after:content-[''] after:absolute after:bottom-[-4px] after:left-0 after:h-[3px] after:w-0 hover:after:w-full after:transition-all after:duration-300 after:bg-accent" id="nav-experience">
                       EXPERIENCE
                   </a>
                   <a href="/constructo-landing/portofolio.php" class="nav-link font-medium transition-colors relative after:content-[''] after:absolute after:bottom-[-4px] after:left-0 after:h-[3px] after:w-0 hover:after:w-full after:transition-all after:duration-300 after:bg-accent" id="nav-portfolio">
                       PORTFOLIO
                   </a>
               </div>
               <div class="lg:hidden">
                   <button
                       id="mobile-menu-button"
                       class="text-gray-700 focus:outline-none">
                       <svg
                           class="w-6 h-6"
                           fill="none"
                           stroke="currentColor"
                           viewBox="0 0 24 24">
                           <path
                               stroke-linecap="round"
                               stroke-linejoin="round"
                               stroke-width="2"
                               d="M4 6h16M4 12h16M4 18h16"></path>
                       </svg>
                   </button>
               </div>
           </div>
           <!-- Mobile Menu -->
           <div id="mobile-menu" class="lg:hidden hidden py-4">
               <a href="/constructo-landing/index.php" class="block py-2 px-4 text-sm" id="mobile-nav-home">HOME</a>
               <a href="/constructo-landing/company.php" class="block py-2 px-4 text-sm" id="mobile-nav-company">COMPANY</a>
               <a href="/constructo-landing/services.php" class="block py-2 px-4 text-sm" id="mobile-nav-services">SERVICES</a>
               <a href="/constructo-landing/experience.php" class="block py-2 px-4 text-sm" id="mobile-nav-experience">EXPERIENCE</a>
               <a href="/constructo-landing/portfolio.php" class="block py-2 px-4 text-sm" id="mobile-nav-portfolio">PORTFOLIO</a>
           </div>
       </div>
   </nav>