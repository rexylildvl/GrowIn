<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'GrowIn') }} - Digital Marketing Services</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <!-- Additional modern font -->
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        
        <style>
            :root {
                --primary: #4361ee;
                --primary-dark: #3a56d4;
                --secondary: #7209b7;
                --accent: #f72585;
                --light: #f8f9fa;
                --dark: #212529;
                --gray: #6c757d;
                --success: #4cc9f0;
                --gradient: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
            }
            
            body {
                font-family: 'Inter', 'Figtree', sans-serif;
                color: var(--dark);
                line-height: 1.6;
            }
            
            .min-h-screen {
                min-height: 100vh;
                background-color: #f9fafb;
            }
            
            /* Modern Page Header */
            .page-header {
                background: var(--gradient);
                color: white;
                padding: 2rem 0;
                margin-bottom: 2rem;
                position: relative;
                overflow: hidden;
            }
            
            .page-header::before {
                content: '';
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.05'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
            }
            
            .page-header-content {
                position: relative;
                z-index: 1;
            }
            
            /* Main Content */
            main {
                padding: 2rem 0;
            }
            
            /* Modern Card Styles */
            .modern-card {
                background: white;
                border-radius: 12px;
                box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
                border: 1px solid rgba(0, 0, 0, 0.05);
                transition: all 0.3s ease;
                overflow: hidden;
            }
            
            .modern-card:hover {
                transform: translateY(-5px);
                box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            }
            
            /* Button Styles */
            .btn-primary {
                background: var(--gradient);
                color: white;
                font-weight: 500;
                padding: 0.5rem 1.5rem;
                border-radius: 8px;
                transition: all 0.3s ease;
                box-shadow: 0 4px 15px rgba(67, 97, 238, 0.3);
            }
            
            .btn-primary:hover {
                transform: translateY(-2px);
                box-shadow: 0 6px 20px rgba(67, 97, 238, 0.4);
            }
            
            /* Responsive adjustments */
            @media (max-width: 768px) {
                .page-header {
                    padding: 1.5rem 0;
                }
                
                main {
                    padding: 1rem 0;
                }
            }
        </style>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @isset($header)
                <header class="page-header">
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                        <div class="page-header-content">
                            {{ $header }}
                        </div>
                    </div>
                </header>
            @endisset

            <!-- Page Content -->
            <main>
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    {{ $slot }}
                </div>
            </main>
            @include('layouts.footer')
        </div>

        <script>
            // Add scroll effect to navigation
            window.addEventListener('scroll', function() {
                const nav = document.querySelector('.navigation');
                if (nav && window.scrollY > 10) {
                    nav.classList.add('scrolled');
                } else if (nav) {
                    nav.classList.remove('scrolled');
                }
            });
            // Navigation scroll effect
            window.addEventListener('scroll', function() {
                const nav = document.querySelector('.navigation');
                if (nav && window.scrollY > 10) {
                    nav.classList.add('scrolled');
                } else if (nav) {
                    nav.classList.remove('scrolled');
                }
            });
        </script>
    </body>
</html>