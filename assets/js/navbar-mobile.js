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
