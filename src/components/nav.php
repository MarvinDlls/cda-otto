<nav class="bg-white border-b border-gray-200 p-4">
    <!-- Desktop Navigation -->
    <div class="lg:flex lg:items-center lg:justify-between max-w-7xl mx-auto">
        <div class="flex justify-between items-center">
            <h2 class="text-3xl font-bold text-gray-900 sm:text-4xl">
                <a href="/" class="hover:text-amber-600 transition-colors">CDA OTTO</a>
            </h2>
            <!-- Hamburger Button -->
            <button id="menu-btn" class="lg:hidden text-gray-500 hover:text-gray-700 focus:outline-none">
                <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>

        <!-- Desktop Menu -->
        <div class="hidden lg:flex lg:items-center lg:space-x-4">
            <a href="/cars" class="px-4 py-2 text-gray-500 hover:bg-amber-500 hover:text-white transition-colors uppercase">
                <h6>Cars</h6>
            </a>
            <a href="/contact" class="px-4 py-2 text-gray-500 hover:bg-amber-500 hover:text-white transition-colors uppercase">
                <h6>Contact</h6>
            </a>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden lg:hidden mt-4">
        <div class="flex flex-col space-y-2">
            <a href="/cars" class="px-4 py-2 text-gray-500 hover:bg-amber-500 hover:text-white transition-colors uppercase text-center">
                <h6>Cars</h6>
            </a>
            <a href="/contact" class="px-4 py-2 text-gray-500 hover:bg-amber-500 hover:text-white transition-colors uppercase text-center">
                <h6>Contact</h6>
            </a>
        </div>
    </div>
</nav>
