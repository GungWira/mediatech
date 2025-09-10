<nav id="navbar" class="w-full text-white z-50 transition-all duration-300 absolute top-0 left-0 bg-transparent">
    <div class="max-w-6xl mx-auto px-8 lg:px-8">
        <div id="nav-container" class="flex items-center justify-between transition-all duration-300 h-16 pt-4">
            {{-- Logo --}}
            <div class="flex items-center">
                <img
                    src="{{ asset('/dist/logo-white.webp') }}"
                    alt="Mediatech Indonesia"
                    class="h-8 w-auto"
                />
            </div>

            {{-- Desktop Navigation --}}
            <div class="hidden md:flex items-center space-x-8">
                <a href="#home" class="text-white/80 hover:text-white transition-colors duration-200 font-medium">
                    Home
                </a>
                <a href="#about" class="text-white/80 hover:text-white transition-colors duration-200 font-medium">
                    About
                </a>
                <a href="#services" class="text-white/80 hover:text-white transition-colors duration-200 font-medium">
                    Services
                </a>
                <a href="#blog" class="text-white/80 hover:text-white transition-colors duration-200 font-medium">
                    Blog
                </a>
                <a href="#csr" class="text-white/80 hover:text-white transition-colors duration-200 font-medium">
                    CSR
                </a>
            </div>

            {{-- Contact Us Button --}}
            <div class="hidden md:flex items-center">
                <button class="bg-[#2563EB] hover:bg-[#1D4ED8] text-white px-6 py-2.5 rounded font-medium flex items-center gap-2 transition-colors duration-200">
                    Contact Us
                    <img
                        src="{{ asset('/dist/arrow-icon.webp') }}"
                        alt="Arrow"
                        class="w-4 h-4"
                    />
                </button>
            </div>

            {{-- Mobile menu button --}}
            <div class="md:hidden">
                <button
                    id="mobile-menu-toggle"
                    class="text-white/80 hover:text-white focus:outline-none"
                >
                    <svg
                        id="hamburger-icon"
                        class="w-6 h-6"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16"
                        />
                    </svg>
                    <svg
                        id="close-icon"
                        class="w-6 h-6 hidden"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M6 18L18 6M6 6l12 12"
                        />
                    </svg>
                </button>
            </div>
        </div>

        {{-- Mobile Navigation --}}
        <div id="mobile-menu" class="md:hidden pt-4 pb-6 bg-[#081425] hidden">
            <div class="flex flex-col space-y-4">
                <a href="#home" class="text-white/80 hover:text-white transition-colors duration-200 font-medium py-2 mobile-nav-link">
                    Home
                </a>
                <a href="#about" class="text-white/80 hover:text-white transition-colors duration-200 font-medium py-2 mobile-nav-link">
                    About
                </a>
                <a href="#services" class="text-white/80 hover:text-white transition-colors duration-200 font-medium py-2 mobile-nav-link">
                    Services
                </a>
                <a href="#blog" class="text-white/80 hover:text-white transition-colors duration-200 font-medium py-2 mobile-nav-link">
                    Blog
                </a>
                <a href="#csr" class="text-white/80 hover:text-white transition-colors duration-200 font-medium py-2 mobile-nav-link">
                    CSR
                </a>
                <button class="bg-[#2563EB] hover:bg-[#1D4ED8] text-white px-6 py-3 rounded-lg font-medium flex items-center justify-center gap-2 transition-colors duration-200 mt-4">
                    Contact Us
                    <img
                        src="{{ asset('arrow-icon.webp') }}"
                        alt="Arrow"
                        class="w-4 h-4"
                    />
                </button>
            </div>
        </div>
    </div>
</nav>

{{-- JavaScript untuk fungsionalitas navbar --}}
<script>
document.addEventListener('DOMContentLoaded', function() {
    const navbar = document.getElementById('navbar');
    const navContainer = document.getElementById('nav-container');
    const mobileMenuToggle = document.getElementById('mobile-menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');
    const hamburgerIcon = document.getElementById('hamburger-icon');
    const closeIcon = document.getElementById('close-icon');
    const mobileNavLinks = document.querySelectorAll('.mobile-nav-link');

    let isMobileMenuOpen = false;
    let isScrolled = false;

    // Handle scroll effect
    function handleScroll() {
        const scrollTop = window.scrollY;
        const newIsScrolled = scrollTop > 50;

        if (newIsScrolled !== isScrolled) {
            isScrolled = newIsScrolled;
            updateNavbarClasses();
        }
    }

    // Update navbar classes based on state
    function updateNavbarClasses() {
        // Reset classes
        navbar.className = 'w-full text-white z-50 transition-all duration-300';
        navContainer.className = 'flex items-center justify-between transition-all duration-300';

        // Add position and background classes
        if (isScrolled) {
            navbar.className += ' fixed top-0 left-0 bg-[#081425]';
            navContainer.className += ' h-18 py-4';
        } else {
            navbar.className += ' absolute top-0 left-0 bg-transparent';
            navContainer.className += ' h-16 pt-4';
        }

        // Add mobile menu background if open
        if (isMobileMenuOpen) {
            navbar.className += ' md:bg-transparent bg-[#081425]';
        }
    }

    // Toggle mobile menu
    function toggleMobileMenu() {
        isMobileMenuOpen = !isMobileMenuOpen;

        if (isMobileMenuOpen) {
            mobileMenu.classList.remove('hidden');
            hamburgerIcon.classList.add('hidden');
            closeIcon.classList.remove('hidden');
        } else {
            mobileMenu.classList.add('hidden');
            hamburgerIcon.classList.remove('hidden');
            closeIcon.classList.add('hidden');
        }

        updateNavbarClasses();
    }

    // Close mobile menu when clicking nav links
    function closeMobileMenu() {
        if (isMobileMenuOpen) {
            isMobileMenuOpen = false;
            mobileMenu.classList.add('hidden');
            hamburgerIcon.classList.remove('hidden');
            closeIcon.classList.add('hidden');
            updateNavbarClasses();
        }
    }

    // Event listeners
    window.addEventListener('scroll', handleScroll);
    mobileMenuToggle.addEventListener('click', toggleMobileMenu);

    // Close mobile menu when clicking nav links
    mobileNavLinks.forEach(link => {
        link.addEventListener('click', closeMobileMenu);
    });

    // Initial call
    handleScroll();
});
</script>
