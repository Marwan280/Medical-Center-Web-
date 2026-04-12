<!DOCTYPE html><html lang="en"><head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>MediConnect - Your Healthcare Services in One Place</title>
    <!-- Tailwind CSS v3 with Plugins -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <!-- Google Fonts: Inter for a clean, modern medical look -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet">
    <style data-purpose="typography">
        body {
          font-family: 'Inter', sans-serif;
        }
      </style>
    <style data-purpose="animations">
        .hover-scale {
          transition: transform 0.3s cubic-bezier(0.4, 0, 0.2, 1), box-shadow 0.3s ease;
        }
        .hover-scale:hover {
          transform: scale(1.05);
          box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1), 0 8px 10px -6px rgba(0, 0, 0, 0.1);
        }
        /* Smooth gradient for the hero overlay */
        .hero-gradient {
          background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5));
        }
      </style>
    </head>
    <body class="bg-slate-50 text-slate-900 overflow-x-hidden">
    <!-- BEGIN: Navigation -->
    <nav class="absolute top-0 left-0 w-full z-50 px-6 py-6 md:px-12 flex justify-between items-center bg-transparent" data-purpose="main-navigation">
    <div class="flex items-center gap-2">
    <!-- Simple Medical Logo -->
    <div class="w-10 h-10 bg-teal-500 rounded-lg flex items-center justify-center shadow-lg">
    <svg class="h-6 w-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M12 4v16m8-8H4" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
    </svg>
    </div>
    <span class="text-white text-2xl font-bold tracking-tight" style="">MediConnect</span>
    </div>
    
   
    </nav>
    <!-- END: Navigation -->
    <!-- BEGIN: Hero Section -->
    <main>
    <section class="relative h-screen min-h-[700px] w-full flex items-center justify-center overflow-hidden" data-purpose="hero-banner">
    <!-- Background Image -->
    <img alt="Modern Hospital with Doctors and Medical Technology" class="absolute inset-0 w-full h-full object-cover" src="https://images.unsplash.com/photo-1742137587510-389de3549208?q=80&w=1172&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" style="">
    <!-- Dark Overlay -->
    <div class="absolute inset-0 hero-gradient"></div>
    <!-- Hero Content -->
    <div class="relative z-10 container mx-auto px-4 text-center">
    <!-- Main Headline -->
    <h1 class="text-4xl md:text-6xl lg:text-7xl font-bold text-white mb-6 tracking-tight max-w-4xl mx-auto leading-tight" style="">
              Your Healthcare Services <span class="text-teal-400" style="">In One Place</span>
    </h1>
    <!-- Subtitle -->
    <p class="text-lg md:text-xl text-slate-200 mb-12 max-w-2xl mx-auto font-light" style="">
              Find pharmacies, clinics, and laboratories near you easily. Professional medical assistance at your fingertips.
            </p>
    <!-- Service Choice Buttons -->
    <div class="flex flex-col md:flex-row items-center justify-center gap-6" data-purpose="service-navigation">
    <!-- Pharmacy Button -->
    <a class="group hover-scale flex items-center justify-center gap-3 bg-white px-8 py-5 rounded-2xl shadow-xl w-64 md:w-auto min-w-[220px]" href="{{ route('pharmacies') }}" style="">
    <div class="p-3 bg-teal-100 rounded-full group-hover:bg-teal-200 transition-colors">
    <svg class="h-6 w-6 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
    </svg>
    </div>
    <span class="text-xl font-bold text-slate-800" style="">Pharmacy</span>
    </a>
    <!-- Clinics Button -->
    <a class="group hover-scale flex items-center justify-center gap-3 bg-white px-8 py-5 rounded-2xl shadow-xl w-64 md:w-auto min-w-[220px]" href="{{ route('clinics') }}" style="">
    <div class="p-3 bg-blue-100 rounded-full group-hover:bg-blue-200 transition-colors">
    <svg class="h-6 w-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
    </svg>
    </div>
    <span class="text-xl font-bold text-slate-800" style="">Clinics</span>
    </a>
    <!-- Lab Button -->
    <a class="group hover-scale flex items-center justify-center gap-3 bg-white px-8 py-5 rounded-2xl shadow-xl w-64 md:w-auto min-w-[220px]" href="{{ route('laboratories') }}" style="">
    <div class="p-3 bg-indigo-100 rounded-full group-hover:bg-indigo-200 transition-colors">
    <svg class="h-6 w-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
    </svg>
    </div>
    <span class="text-xl font-bold text-slate-800" style="">Lab</span>
    </a>
    </div>
    </div>
    <!-- Scroll Indicator -->
    <div class="absolute bottom-10 left-1/2 -translate-x-1/2 animate-bounce">
    <svg class="h-6 w-6 text-white opacity-60" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M19 14l-7 7-7-7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
    </svg>
    </div>
    </section>
    </main>

    <!-- END: Stats Bar -->
    <!-- BEGIN: Footer -->
    <footer class="bg-slate-900 text-slate-400 py-12 px-6" data-purpose="main-footer">
    <div class="container mx-auto flex flex-col md:flex-row justify-between items-center gap-6">
    <div class="flex items-center gap-2">
    <div class="w-8 h-8 bg-teal-500 rounded flex items-center justify-center">
    <svg class="h-5 w-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path d="M12 4v16m8-8H4" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
    </svg>
    </div>
    <span class="text-white font-bold" style="">MediConnect</span>
    </div>
    <p class="text-sm" style="">© 2026 MediConnect Healthcare. All rights reserved.</p>
    <div class="flex gap-4">
    <a class="hover:text-white transition-colors" href="#" style="">Privacy Policy</a>
    <a class="hover:text-white transition-colors" href="#" style="">Terms of Service</a>
    </div>
    </div>
    </footer>
    <!-- END: Footer -->
    </body></html>