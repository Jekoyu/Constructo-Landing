/**
 * PT. Ancatama Citra Abadi - Main JavaScript File
 * Modern, maintainable JavaScript with ES6+ features
 */

class AncatamaWebsite {
  constructor() {
    this.init();
  }

  init() {
    this.initializeOnDOMLoad();
  }

  initializeOnDOMLoad() {
    if (document.readyState === "loading") {
      document.addEventListener("DOMContentLoaded", () => this.onDOMReady());
    } else {
      this.onDOMReady();
    }
  }

  onDOMReady() {
    this.initAOS();
    this.initSwipers();
    this.initNavigation();
    this.initPortfolioFilter();
    this.initCounters();
    this.initBackToTop();
    this.initForms();
    this.initSmoothScrolling();
    this.initLazyLoading();
    this.initPerformanceOptimizations();
  }

  /**
   * Initialize AOS (Animate On Scroll) library
   */
  initAOS() {
    if (typeof AOS !== "undefined") {
      AOS.init({
        duration: 800,
        easing: "ease-in-out-cubic",
        once: true,
        offset: 100,
        delay: 0,
        anchorPlacement: "top-bottom",
      });
    }
  }

  /**
   * Initialize Swiper sliders
   */
  initSwipers() {
    // Hero Swiper
    if (document.querySelector(".hero-swiper")) {
      new Swiper(".hero-swiper", {
        loop: true,
        autoplay: {
          delay: 6000,
          disableOnInteraction: false,
          pauseOnMouseEnter: true,
        },
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
          dynamicBullets: true,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
        effect: "fade",
        fadeEffect: {
          crossFade: true,
        },
        speed: 1000,
        on: {
          slideChange: function () {
            // Restart AOS animations on slide change
            if (typeof AOS !== "undefined") {
              AOS.refresh();
            }
          },
        },
      });
    }

    // Testimonials Swiper
    if (document.querySelector(".testimonials-swiper")) {
      new Swiper(".testimonials-swiper", {
        loop: true,
        autoplay: {
          delay: 5000,
          disableOnInteraction: false,
        },
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        spaceBetween: 30,
        breakpoints: {
          640: {
            slidesPerView: 1,
            spaceBetween: 20,
          },
          768: {
            slidesPerView: 2,
            spaceBetween: 30,
          },
          1024: {
            slidesPerView: 3,
            spaceBetween: 40,
          },
        },
        speed: 800,
      });
    }
  }

  /**
   * Initialize navigation functionality
   */
  initNavigation() {
    this.initMobileMenu();
    this.initActiveNavLinks();
    this.initStickyHeader();
  }

  initMobileMenu() {
    const mobileMenuButton = document.getElementById("mobile-menu-button");
    if (!mobileMenuButton) return;

    // Create mobile menu if it doesn't exist
    let mobileMenu = document.querySelector(".mobile-menu");
    if (!mobileMenu) {
      mobileMenu = this.createMobileMenu();
      document.body.appendChild(mobileMenu);
    }

    const closeMenuButton = mobileMenu.querySelector("#close-mobile-menu");
    const menuLinks = mobileMenu.querySelectorAll("a");

    // Toggle mobile menu
    mobileMenuButton.addEventListener("click", () => {
      mobileMenu.classList.add("active");
      document.body.style.overflow = "hidden";
    });

    // Close mobile menu
    const closeMobileMenu = () => {
      mobileMenu.classList.remove("active");
      document.body.style.overflow = "";
    };

    closeMenuButton?.addEventListener("click", closeMobileMenu);

    // Close menu when clicking on links
    menuLinks.forEach((link) => {
      link.addEventListener("click", closeMobileMenu);
    });

    // Close menu when clicking outside
    mobileMenu.addEventListener("click", (e) => {
      if (e.target === mobileMenu) {
        closeMobileMenu();
      }
    });

    // Close menu on escape key
    document.addEventListener("keydown", (e) => {
      if (e.key === "Escape" && mobileMenu.classList.contains("active")) {
        closeMobileMenu();
      }
    });
  }

  createMobileMenu() {
    const mobileMenu = document.createElement("div");
    mobileMenu.className = "mobile-menu";
    mobileMenu.innerHTML = `
      <div class="flex justify-end p-6">
        <button id="close-mobile-menu" class="text-white focus:outline-none hover:text-accent transition-colors">
          <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
          </svg>
        </button>
      </div>
      <div class="flex flex-col items-center text-white space-y-8">
        <a href="index.php" class="mobile-menu-link">HOME</a>
        <a href="company.php" class="mobile-menu-link">COMPANY</a>
        <a href="service.php" class="mobile-menu-link">SERVICES</a>
        <a href="experience.php" class="mobile-menu-link">EXPERIENCE</a>
        <a href="portofolio.php" class="mobile-menu-link">PORTFOLIO</a>
      </div>
    `;
    return mobileMenu;
  }

  initActiveNavLinks() {
    const currentPage =
      window.location.pathname.split("/").pop() || "index.php";
    const navLinks = document.querySelectorAll(".nav-link");

    navLinks.forEach((link) => {
      const href = link.getAttribute("href");
      if (
        href === currentPage ||
        (currentPage === "" && href === "index.php")
      ) {
        link.classList.add("active");
      }
    });
  }

  initStickyHeader() {
    const header = document.querySelector("nav");
    if (!header) return;

    let lastScrollY = window.scrollY;

    window.addEventListener("scroll", () => {
      const currentScrollY = window.scrollY;

      if (currentScrollY > 100) {
        header.classList.add("shadow-lg");
      } else {
        header.classList.remove("shadow-lg");
      }

      lastScrollY = currentScrollY;
    });
  }

  /**
   * Initialize portfolio filtering
   */
  initPortfolioFilter() {
    const filterButtons = document.querySelectorAll(".portfolio-filter");
    const portfolioItems = document.querySelectorAll(".portfolio-item");

    if (!filterButtons.length || !portfolioItems.length) return;

    filterButtons.forEach((button) => {
      button.addEventListener("click", () => {
        const filter = button.getAttribute("data-filter");

        // Update active button with smooth transition
        this.updateActiveFilterButton(filterButtons, button);

        // Filter portfolio items with animation
        this.filterPortfolioItems(portfolioItems, filter);
      });
    });
  }

  updateActiveFilterButton(buttons, activeButton) {
    buttons.forEach((btn) => {
      btn.classList.remove("active", "bg-primary", "text-white");
      btn.classList.add("bg-white", "text-gray-700");
    });

    activeButton.classList.add("active", "bg-primary", "text-white");
    activeButton.classList.remove("bg-white", "text-gray-700");
  }

  filterPortfolioItems(items, filter) {
    items.forEach((item, index) => {
      const shouldShow = filter === "all" || item.classList.contains(filter);

      if (shouldShow) {
        item.style.display = "block";
        setTimeout(() => {
          item.style.opacity = "1";
          item.style.transform = "scale(1)";
        }, index * 50); // Stagger animation
      } else {
        item.style.opacity = "0";
        item.style.transform = "scale(0.8)";
        setTimeout(() => {
          item.style.display = "none";
        }, 300);
      }
    });
  }

  /**
   * Initialize animated counters
   */
  initCounters() {
    const counters = document.querySelectorAll(".counter-value");
    if (!counters.length) return;

    const observerOptions = {
      threshold: 0.5,
      rootMargin: "0px 0px -100px 0px",
    };

    const observer = new IntersectionObserver((entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          this.animateCounter(entry.target);
          observer.unobserve(entry.target);
        }
      });
    }, observerOptions);

    counters.forEach((counter) => observer.observe(counter));
  }

  animateCounter(element) {
    const target = parseInt(element.getAttribute("data-target"));
    const duration = 2000; // 2 seconds
    const step = target / (duration / 16); // 60fps
    let current = 0;

    const updateCounter = () => {
      current += step;
      if (current < target) {
        element.textContent = Math.floor(current);
        requestAnimationFrame(updateCounter);
      } else {
        element.textContent = target;
      }
    };

    updateCounter();
  }

  /**
   * Initialize back to top button
   */
  initBackToTop() {
    let backToTopButton = document.getElementById("back-to-top");

    if (!backToTopButton) {
      backToTopButton = this.createBackToTopButton();
      document.body.appendChild(backToTopButton);
    }

    // Show/hide button based on scroll position
    window.addEventListener(
      "scroll",
      this.throttle(() => {
        if (window.pageYOffset > 300) {
          backToTopButton.classList.add("visible");
        } else {
          backToTopButton.classList.remove("visible");
        }
      }, 100)
    );

    // Smooth scroll to top
    backToTopButton.addEventListener("click", () => {
      window.scrollTo({
        top: 0,
        behavior: "smooth",
      });
    });
  }

  createBackToTopButton() {
    const button = document.createElement("button");
    button.id = "back-to-top";
    button.className = "back-to-top no-print";
    button.innerHTML = `
      <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"></path>
      </svg>
    `;
    button.setAttribute("aria-label", "Back to top");
    return button;
  }

  /**
   * Initialize form handling
   */
  initForms() {
    const forms = document.querySelectorAll("form");

    forms.forEach((form) => {
      form.addEventListener("submit", (e) => {
        e.preventDefault();
        this.handleFormSubmission(form);
      });

      // Add real-time validation
      const inputs = form.querySelectorAll("input, textarea, select");
      inputs.forEach((input) => {
        input.addEventListener("blur", () => this.validateField(input));
        input.addEventListener("input", () => this.clearFieldError(input));
      });
    });
  }

  handleFormSubmission(form) {
    const formData = new FormData(form);
    const data = Object.fromEntries(formData);

    // Basic validation
    if (this.validateForm(form)) {
      this.showFormSuccess(form);
      form.reset();
    }
  }

  validateForm(form) {
    const requiredFields = form.querySelectorAll("[required]");
    let isValid = true;

    requiredFields.forEach((field) => {
      if (!this.validateField(field)) {
        isValid = false;
      }
    });

    return isValid;
  }

  validateField(field) {
    const value = field.value.trim();
    const fieldType = field.type;
    let isValid = true;
    let errorMessage = "";

    // Required field validation
    if (field.hasAttribute("required") && !value) {
      isValid = false;
      errorMessage = "This field is required";
    }
    // Email validation
    else if (fieldType === "email" && value && !this.isValidEmail(value)) {
      isValid = false;
      errorMessage = "Please enter a valid email address";
    }
    // Phone validation
    else if (fieldType === "tel" && value && !this.isValidPhone(value)) {
      isValid = false;
      errorMessage = "Please enter a valid phone number";
    }

    this.showFieldError(field, isValid ? "" : errorMessage);
    return isValid;
  }

  showFieldError(field, message) {
    this.clearFieldError(field);

    if (message) {
      field.classList.add("border-red-500");
      const errorElement = document.createElement("div");
      errorElement.className = "field-error text-red-500 text-sm mt-1";
      errorElement.textContent = message;
      field.parentNode.appendChild(errorElement);
    }
  }

  clearFieldError(field) {
    field.classList.remove("border-red-500");
    const errorElement = field.parentNode.querySelector(".field-error");
    if (errorElement) {
      errorElement.remove();
    }
  }

  showFormSuccess(form) {
    const successMessage = document.createElement("div");
    successMessage.className =
      "bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4";
    successMessage.innerHTML = `
      <div class="flex items-center">
        <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
          <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
        </svg>
        Thank you for your message! We will get back to you soon.
      </div>
    `;

    form.parentNode.insertBefore(successMessage, form);

    setTimeout(() => {
      successMessage.remove();
    }, 5000);
  }

  /**
   * Initialize smooth scrolling for anchor links
   */
  initSmoothScrolling() {
    document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
      anchor.addEventListener("click", (e) => {
        e.preventDefault();
        const target = document.querySelector(anchor.getAttribute("href"));

        if (target) {
          const headerHeight = document.querySelector("nav")?.offsetHeight || 0;
          const targetPosition = target.offsetTop - headerHeight - 20;

          window.scrollTo({
            top: targetPosition,
            behavior: "smooth",
          });
        }
      });
    });
  }

  /**
   * Initialize lazy loading for images
   */
  initLazyLoading() {
    if ("IntersectionObserver" in window) {
      const imageObserver = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            const img = entry.target;
            img.src = img.dataset.src;
            img.classList.remove("lazy");
            imageObserver.unobserve(img);
          }
        });
      });

      document.querySelectorAll("img[data-src]").forEach((img) => {
        imageObserver.observe(img);
      });
    }
  }

  /**
   * Initialize performance optimizations
   */
  initPerformanceOptimizations() {
    // Preload critical resources
    this.preloadCriticalResources();

    // Initialize service worker if available
    this.initServiceWorker();

    // Add performance monitoring
    this.initPerformanceMonitoring();
  }

  preloadCriticalResources() {
    const criticalImages = [
      "https://images.unsplash.com/photo-1503387762-592deb58ef4e?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80",
      "https://images.unsplash.com/photo-1541888946425-d81bb19240f5?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80",
    ];

    criticalImages.forEach((src) => {
      const link = document.createElement("link");
      link.rel = "preload";
      link.as = "image";
      link.href = src;
      document.head.appendChild(link);
    });
  }

  initServiceWorker() {
    if ("serviceWorker" in navigator) {
      window.addEventListener("load", () => {
        navigator.serviceWorker
          .register("/sw.js")
          .then((registration) => {
            console.log("SW registered: ", registration);
          })
          .catch((registrationError) => {
            console.log("SW registration failed: ", registrationError);
          });
      });
    }
  }

  initPerformanceMonitoring() {
    // Monitor Core Web Vitals
    if ("web-vital" in window) {
      import("web-vitals").then(
        ({ getCLS, getFID, getFCP, getLCP, getTTFB }) => {
          getCLS(console.log);
          getFID(console.log);
          getFCP(console.log);
          getLCP(console.log);
          getTTFB(console.log);
        }
      );
    }
  }

  /**
   * Utility functions
   */
  throttle(func, limit) {
    let inThrottle;
    return function () {
      const args = arguments;
      const context = this;
      if (!inThrottle) {
        func.apply(context, args);
        inThrottle = true;
        setTimeout(() => (inThrottle = false), limit);
      }
    };
  }

  debounce(func, wait, immediate) {
    let timeout;
    return function () {
      const context = this;
      const args = arguments;
      const later = function () {
        timeout = null;
        if (!immediate) func.apply(context, args);
      };
      const callNow = immediate && !timeout;
      clearTimeout(timeout);
      timeout = setTimeout(later, wait);
      if (callNow) func.apply(context, args);
    };
  }

  isValidEmail(email) {
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
  }

  isValidPhone(phone) {
    const phoneRegex = /^[\+]?[1-9][\d]{0,15}$/;
    return phoneRegex.test(phone.replace(/\s/g, ""));
  }
}

// Initialize the website
new AncatamaWebsite();

// Export for module usage
if (typeof module !== "undefined" && module.exports) {
  module.exports = AncatamaWebsite;
}

// Toggle mobile menu
document
  .getElementById("mobile-menu-button")
  .addEventListener("click", function () {
    document.getElementById("mobile-menu").classList.toggle("hidden");
  });

// Active menu item based on current page
const path = window.location.pathname;

function setActive(id) {
  document.getElementById(id)?.classList.add("text-accent", "font-bold");
  // For underline effect
  document.getElementById(id)?.classList.add("after:w-full");
}

if (path.endsWith("/") || path.includes("index.php")) {
  setActive("nav-home");
  setActive("mobile-nav-home");
} else if (path.includes("company.php")) {
  setActive("nav-company");
  setActive("mobile-nav-company");
} else if (path.includes("service.php")) {
  setActive("nav-services");
  setActive("mobile-nav-services");
} else if (path.includes("experience.php")) {
  setActive("nav-experience");
  setActive("mobile-nav-experience");
} else if (path.includes("portofolio.php")) {
  setActive("nav-portofolio");
  setActive("mobile-nav-portofolio");
}

/**
 * Enhanced Marquee functionality
 */
class MarqueeManager {
  constructor() {
    this.init();
  }

  init() {
    this.setupIntersectionObserver();
    this.setupResponsiveSpeed();
    this.setupAccessibility();
  }

  setupIntersectionObserver() {
    const marquees = document.querySelectorAll(".marquee");

    const observer = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          const marqueeContent = entry.target.querySelector(".marquee-content");
          if (entry.isIntersecting) {
            marqueeContent.style.animationPlayState = "running";
          } else {
            marqueeContent.style.animationPlayState = "paused";
          }
        });
      },
      {
        threshold: 0.1,
      }
    );

    marquees.forEach((marquee) => observer.observe(marquee));
  }

  setupResponsiveSpeed() {
    const updateMarqueeSpeed = () => {
      const marquees = document.querySelectorAll(".marquee-content");
      const isMobile = window.innerWidth < 768;

      marquees.forEach((marquee) => {
        if (isMobile) {
          marquee.style.animationDuration = "20s";
        } else {
          marquee.style.animationDuration = "30s";
        }
      });
    };

    updateMarqueeSpeed();
    window.addEventListener("resize", this.throttle(updateMarqueeSpeed, 250));
  }

  setupAccessibility() {
    const marquees = document.querySelectorAll(".marquee");

    marquees.forEach((marquee) => {
      // Add ARIA label
      marquee.setAttribute("aria-label", "Client logos carousel");
      marquee.setAttribute("role", "region");

      // Pause on focus for accessibility
      const marqueeContent = marquee.querySelector(".marquee-content");
      const focusableElements = marquee.querySelectorAll("img");

      focusableElements.forEach((element) => {
        element.addEventListener("focus", () => {
          marqueeContent.style.animationPlayState = "paused";
        });

        element.addEventListener("blur", () => {
          marqueeContent.style.animationPlayState = "running";
        });
      });

      // Respect prefers-reduced-motion
      if (window.matchMedia("(prefers-reduced-motion: reduce)").matches) {
        marqueeContent.style.animation = "none";
        marquee.style.overflow = "auto";
      }
    });
  }

  throttle(func, limit) {
    let inThrottle;
    return function () {
      const args = arguments;
      const context = this;
      if (!inThrottle) {
        func.apply(context, args);
        inThrottle = true;
        setTimeout(() => (inThrottle = false), limit);
      }
    };
  }
}

// Initialize marquee manager when DOM is ready
document.addEventListener("DOMContentLoaded", () => {
  new MarqueeManager();
});

// Mobile Menu Toggle Functionality
document.addEventListener("DOMContentLoaded", function () {
  const mobileMenuButton = document.getElementById("mobile-menu-button");
  const mobileMenu = document.getElementById("mobile-menu");

  if (mobileMenuButton && mobileMenu) {
    mobileMenuButton.addEventListener("click", function () {
      // Toggle mobile menu visibility
      if (mobileMenu.classList.contains("hidden")) {
        mobileMenu.classList.remove("hidden");
        mobileMenu.classList.add("mobile-menu-visible");
        mobileMenuButton.classList.add("active");
        mobileMenuButton.setAttribute("aria-expanded", "true");
      } else {
        mobileMenu.classList.add("hidden");
        mobileMenu.classList.remove("mobile-menu-visible");
        mobileMenuButton.classList.remove("active");
        mobileMenuButton.setAttribute("aria-expanded", "false");
      }
    });

    // Close mobile menu when clicking outside
    document.addEventListener("click", function (event) {
      if (
        !mobileMenuButton.contains(event.target) &&
        !mobileMenu.contains(event.target)
      ) {
        mobileMenu.classList.add("hidden");
        mobileMenu.classList.remove("mobile-menu-visible");
        mobileMenuButton.classList.remove("active");
        mobileMenuButton.setAttribute("aria-expanded", "false");
      }
    });

    // Close mobile menu on window resize
    window.addEventListener("resize", function () {
      if (window.innerWidth >= 1024) {
        mobileMenu.classList.add("hidden");
        mobileMenu.classList.remove("mobile-menu-visible");
        mobileMenuButton.classList.remove("active");
        mobileMenuButton.setAttribute("aria-expanded", "false");
      }
    });
  }

  // Active page highlighting
  const currentPage = window.location.pathname;
  const navLinks = document.querySelectorAll(".nav-link, #mobile-menu a");

  navLinks.forEach((link) => {
    if (
      link.getAttribute("href") &&
      currentPage.includes(link.getAttribute("href"))
    ) {
      link.classList.add("active");
    }
  });

  // Smooth scroll for anchor links
  const anchorLinks = document.querySelectorAll('a[href^="#"]');
  anchorLinks.forEach((link) => {
    link.addEventListener("click", function (e) {
      e.preventDefault();
      const targetId = this.getAttribute("href").substring(1);
      const targetElement = document.getElementById(targetId);

      if (targetElement) {
        targetElement.scrollIntoView({
          behavior: "smooth",
          block: "start",
        });

        // Close mobile menu after clicking anchor link
        if (window.innerWidth < 1024) {
          mobileMenu.classList.add("hidden");
          mobileMenu.classList.remove("mobile-menu-visible");
          mobileMenuButton.classList.remove("active");
        }
      }
    });
  });
});
