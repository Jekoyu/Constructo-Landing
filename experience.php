<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<!DOCTYPE html>
<html lang="en">
<?php require  'head.php'; ?>

<body class="font-sans text-gray-800 bg-gray-50">
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
    <?php require  'navbar.php'; ?>

    <!-- Page Header -->
    <section class="relative py-20 bg-primary bg-pattern-dark">
        <div class="container mx-auto px-4 md:px-6 lg:px-8">
            <div class="text-center text-white">
                <h1 class="text-5xl text-white md:text-6xl font-bold mb-6">Our Experience</h1>
                <div
                    class="w-24 h-1 bg-gradient-to-r from-accent to-secondary mx-auto mb-6"></div>
                <p class="text-xl max-w-3xl mx-auto">
                    8+ Years of Excellence • 70+ Projects Completed • Trusted by
                    Leading Companies
                </p>
                <nav class="text-lg mt-6">
                    <a
                        href="index.html"
                        class="text-accent hover:text-white transition-colors">Home</a>
                    <span class="mx-3">/</span>
                    <span class="text-gray-300">Experience</span>
                </nav>
            </div>
        </div>
    </section>
    <!-- Key Achievements -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4 md:px-6 lg:px-8">
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="text-4xl md:text-5xl font-bold mb-6">Key Achievements</h2>
                <div
                    class="w-24 h-1 bg-gradient-to-r from-accent to-secondary mx-auto mb-6"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div
                    class="card p-8 text-center"
                    data-aos="fade-right"
                    data-aos-delay="100">
                    <div
                        class="w-16 h-16 bg-accent rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-8 w-8 text-white"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-3">ISO 9001:2015 Certified</h3>
                    <p class="text-gray-600">
                        Quality management system certification ensuring consistent
                        high-quality delivery
                    </p>
                </div>

                <div
                    class="card p-8 text-center"
                    data-aos="fade-left"
                    data-aos-delay="200">
                    <div
                        class="w-16 h-16 bg-secondary rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-8 w-8 text-white"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-3">98% On-Time Delivery</h3>
                    <p class="text-gray-600">
                        Exceptional project completion rate within scheduled timelines
                    </p>
                </div>

                <div
                    class="card p-8 text-center"
                    data-aos="fade-right"
                    data-aos-delay="300">
                    <div
                        class="w-16 h-16 bg-primary rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-8 w-8 text-white"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Zero Safety Incidents</h3>
                    <p class="text-gray-600">
                        Maintaining the highest safety standards across all project sites
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- Work Experience Table -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-4 md:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold mb-6">
                    Work Experience List
                </h2>
                <div
                    class="w-24 h-1 bg-gradient-to-r from-accent to-secondary mx-auto mb-6"></div>
                <p class="text-gray-600 max-w-3xl mx-auto text-lg">
                    Detailed record of our completed projects and client partnerships
                </p>
            </div>

            <!-- Data Table (Sesuai Gambar) -->
            <div
                class="table-container overflow-x-auto">
                <table class="min-w-full border border-gray-200 rounded-lg">
                    <thead>
                        <tr class="bg-gray-100">
                            <th class="py-3 px-4 text-left font-bold">NO</th>
                            <th class="py-3 px-4 text-left font-bold">DESCRIPTION WORK</th>
                            <th class="py-3 px-4 text-left font-bold">CLIENTS</th>
                            <th class="py-3 px-4 text-left font-bold">YEAR</th>
                        </tr>
                    </thead>
                    <tbody id="experience-table-body">
                        <!-- Data akan diisi oleh JavaScript -->
                    </tbody>

                </table>
            </div>

            <!-- Load More Button -->
            <div class="text-center mt-8">
                <button id="loadMoreBtn" class="btn btn-primary">
                    Load More Projects
                </button>
            </div>
        </div>
    </section>
    <?php
    require 'footer.php';
    include 'config.php'; // Tambahkan agar window.API_BASE_URL tersedia
    ?>
    <!-- JavaScript -->
    <script src="./assets/js/script.js"></script>
    <!-- Fetch Tabel experience -->
    <script>
        function renderExperienceTable(experiences) {
            const tbody = document.getElementById('experience-table-body');
            if (!Array.isArray(experiences) || experiences.length === 0) {
                tbody.innerHTML = `<tr><td colspan="4" class="py-3 px-4 text-center text-gray-400">No experience data found.</td></tr>`;
                return;
            }
            tbody.innerHTML = experiences.map((exp, idx) => `
            <tr class="${idx % 2 === 0 ? 'bg-white' : 'bg-gray-200'}">
                <td class="py-3 px-4">${idx + 1}</td>
                <td class="py-3 px-4">${exp.description}</td>
                <td class="py-3 px-4">${exp.client}</td>
                <td class="py-3 px-4">${exp.year}</td>
            </tr>
        `).join('');
        }

        // Fetch experience data from API pakai base URL dari window.API_BASE_URL
        function fetchExperience() {
            fetch(window.API_BASE_URL + '/data.php?action=experience')
                .then(res => res.json())
                .then(res => {
                    if (res.status === "success" && Array.isArray(res.experience)) {
                        renderExperienceTable(res.experience);
                    } else {
                        renderExperienceTable([]);
                    }
                })
                .catch(() => {
                    renderExperienceTable([]);
                });
        }

        // Panggil fetch saat halaman load
        fetchExperience();
    </script>

</body>

</html>