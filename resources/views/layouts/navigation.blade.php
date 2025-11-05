<nav class="navigation">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center py-4">
            <!-- Logo -->
            <div class="flex items-center">
                <a href="{{ url('/') }}">
                    <img src="{{ asset('images/growin.png') }}" 
                        alt="GrowIn Logo" 
                        class="h-12 md:h-14 w-auto drop-shadow-sm">
                </a>
            </div>

            <!-- Desktop Navigation -->
            <div class="hidden md:flex items-center space-x-1">
                <a href="{{ url('/') }}" class="nav-link {{ request()->is('/') ? 'active' : '' }}">
                    Home
                </a>
                <a href="{{ url('/services') }}" class="nav-link {{ request()->is('services') ? 'active' : '' }}">
                    Services
                </a>
                <a href="{{ url('/about') }}" class="nav-link {{ request()->is('about') ? 'active' : '' }}">
                    About
                </a>

                <!-- Authentication Links -->
                @auth
                    <a href="{{ url('/dashboard') }}" class="nav-link {{ request()->is('dashboard*') ? 'active' : '' }}">
                        Dashboard
                    </a>
                @else
                    <a href="{{ route('login') }}" class="nav-link {{ request()->is('login') ? 'active' : '' }}">
                        Log in
                    </a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="btn-primary ml-2">
                            Get Started
                        </a>
                    @endif
                @endauth
            </div>

            <!-- Mobile menu button -->
            <div class="md:hidden">
                <button type="button" class="mobile-menu-button text-gray-500 hover:text-gray-600 focus:outline-none focus:text-gray-600 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Navigation -->
        <div class="mobile-menu hidden md:hidden">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3 bg-white rounded-lg shadow-lg mt-2">
                <a href="{{ url('/') }}" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50 transition duration-150 ease-in-out {{ request()->is('/') ? 'bg-gray-50 text-gray-900' : '' }}">
                    Home
                </a>
                <a href="{{ url('/services') }}" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50 transition duration-150 ease-in-out {{ request()->is('services') ? 'bg-gray-50 text-gray-900' : '' }}">
                    Services
                </a>
                <a href="{{ url('/about') }}" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50 transition duration-150 ease-in-out {{ request()->is('about') ? 'bg-gray-50 text-gray-900' : '' }}">
                    About
                </a>

                <!-- Authentication Links -->
                @auth
                    <a href="{{ url('/dashboard') }}" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50 transition duration-150 ease-in-out {{ request()->is('dashboard*') ? 'bg-gray-50 text-gray-900' : '' }}">
                        Dashboard
                    </a>
                @else
                    <a href="{{ route('login') }}" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50 transition duration-150 ease-in-out {{ request()->is('login') ? 'bg-gray-50 text-gray-900' : '' }}">
                        Log in
                    </a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="block px-3 py-2 rounded-md text-base font-medium text-white bg-gradient-to-r from-blue-500 to-purple-600 hover:from-blue-600 hover:to-purple-700 transition duration-150 ease-in-out mt-2 text-center">
                            Get Started
                        </a>
                    @endif
                @endauth
            </div>
        </div>
    </div>
</nav>

<style>
    /* Navigation Styles */
    .navigation {
        background: rgba(255, 255, 255, 0.95);
        backdrop-filter: blur(10px);
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
        position: sticky;
        top: 0;
        z-index: 1000;
        transition: all 0.3s ease;
    }
    
    .navigation.scrolled {
        background: rgba(255, 255, 255, 0.98);
        box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
    }
    
    .nav-link {
        color: var(--dark);
        font-weight: 500;
        padding: 0.5rem 1rem;
        border-radius: 8px;
        transition: all 0.3s ease;
        position: relative;
    }
    
    .nav-link:hover {
        color: var(--primary);
        background-color: rgba(67, 97, 238, 0.05);
    }
    
    .nav-link.active {
        color: var(--primary);
        font-weight: 600;
    }
    
    .nav-link.active::after {
        content: '';
        position: absolute;
        bottom: -5px;
        left: 1rem;
        right: 1rem;
        height: 2px;
        background: var(--gradient);
        border-radius: 2px;
    }
    .navigation img {
        max-height: 56px;
        width: auto;
        object-fit: contain;
    }

</style>

<script>
    // Mobile menu functionality
    document.addEventListener('DOMContentLoaded', function() {
        const mobileMenuButton = document.querySelector('.mobile-menu-button');
        const mobileMenu = document.querySelector('.mobile-menu');
        
        if (mobileMenuButton && mobileMenu) {
            mobileMenuButton.addEventListener('click', function() {
                mobileMenu.classList.toggle('hidden');
                
                // Toggle menu icon
                const icon = mobileMenuButton.querySelector('svg');
                if (mobileMenu.classList.contains('hidden')) {
                    icon.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>';
                } else {
                    icon.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>';
                }
            });
        }
        
        // Close mobile menu when clicking on a link
        const mobileLinks = document.querySelectorAll('.mobile-menu a');
        mobileLinks.forEach(link => {
            link.addEventListener('click', function() {
                mobileMenu.classList.add('hidden');
                const icon = mobileMenuButton.querySelector('svg');
                icon.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>';
            });
        });
    });
</script>