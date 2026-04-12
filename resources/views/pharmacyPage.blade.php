<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#ec5b13",
                        "background-light": "#f8f6f6",
                        "background-dark": "#221610",
                    },
                    fontFamily: {
                        "display": ["Public Sans"]
                    },
                    borderRadius: {"DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px"},
                },
            },
        }
    </script>
<title>Pharmacy Information | HealthPlatform</title>
</head>
<body class="bg-background-light dark:bg-background-dark font-display text-slate-900 dark:text-slate-100 antialiased">
<!-- Navigation -->
<header class="sticky top-0 z-50 w-full border-b border-slate-200 dark:border-slate-800 bg-white/80 dark:bg-background-dark/80 backdrop-blur-md">
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
<div class="flex h-16 items-center justify-between">
<div class="flex items-center gap-8">
<div class="flex items-center gap-2 text-primary">
<span class="material-symbols-outlined text-3xl">medical_services</span>
<h2 class="text-slate-900 dark:text-white text-xl font-bold leading-tight tracking-tight">HealthPlatform</h2>
</div>
<nav class="hidden md:flex items-center gap-6">
<a class="text-slate-600 dark:text-slate-300 hover:text-primary dark:hover:text-primary text-sm font-medium transition-colors" href="#">Home</a>
<a class="text-slate-600 dark:text-slate-300 hover:text-primary dark:hover:text-primary text-sm font-medium transition-colors" href="#">Services</a>
<a class="text-primary text-sm font-semibold transition-colors border-b-2 border-primary" href="#">Pharmacies</a>
<a class="text-slate-600 dark:text-slate-300 hover:text-primary dark:hover:text-primary text-sm font-medium transition-colors" href="#">Contact</a>
</nav>
</div>
<div class="flex items-center gap-4">
<div class="hidden sm:flex items-center bg-slate-100 dark:bg-slate-800 rounded-xl px-3 py-1.5 border border-slate-200 dark:border-slate-700">
<span class="material-symbols-outlined text-slate-400 text-xl">search</span>
<input class="bg-transparent border-none focus:ring-0 text-sm placeholder:text-slate-400 w-40 lg:w-64" placeholder="Search medications..." type="text"/>
</div>
<button class="bg-primary hover:bg-primary/90 text-white px-5 py-2 rounded-xl text-sm font-bold transition-all shadow-lg shadow-primary/20">
                        Login
                    </button>
</div>
</div>
</div>
</header>
<main>
<!-- Hero Section -->
<section class="relative h-[400px] md:h-[500px] flex items-center justify-center overflow-hidden">
<div class="absolute inset-0 z-0">
<div class="absolute inset-0 bg-slate-900/40 z-10"></div>
<div class="w-full h-full bg-cover bg-center" data-alt="Modern pharmacy interior with clean medicine shelves" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuABMSQeOf0qRt1qRoDBS4ssb3kOcYXucae4v11L0OL_htkCbOhw-UzErUM7eKujhViWyeXq3m7YDwEUMYFElo8Gsx9cJpSdkPjwjV6QI_RZXMCbbkLfChUcB0oqYYcpoxyDGzOQ4bQWTz0QXuDBEMRSje3j3xl5341Oqvl4mkn1egOxGEUtjtWhMySHggkSORZWtxX12QbR-djkCokZWkzSsbDwb36gcjnFkcSYGaRTdFc_CDKl2bP9B-PfXqPDa-xGvptTzBxmBIfS')"></div>
</div>
<div class="relative z-20 text-center px-4 max-w-4xl mx-auto">
<h1 class="text-white text-4xl md:text-6xl font-black leading-tight tracking-tight mb-4 drop-shadow-md">
                    Pharmacy Information
                </h1>
<p class="text-white/90 text-lg md:text-xl font-normal max-w-2xl mx-auto mb-8 drop-shadow">
                    Find pharmacy details and contact information easily. Locate the best healthcare providers in your neighborhood.
                </p>

</div>
</section>
<div class="max-w-7xl mx-auto px-4 py-12 sm:px-6 lg:px-8">
<div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
<!-- Left Column: Pharmacy Info & Address -->
<div class="lg:col-span-2 space-y-8">
<!-- Pharmacy Info Card -->
<div class="bg-white dark:bg-slate-900 rounded-xl overflow-hidden shadow-sm border border-slate-200 dark:border-slate-800 transition-all hover:shadow-md">
<div class="p-8">
<div class="flex items-center justify-between mb-4">
<span class="inline-flex items-center rounded-full bg-green-100 dark:bg-green-900/30 px-3 py-1 text-xs font-semibold text-green-700 dark:text-green-400">
<span class="w-2 h-2 rounded-full bg-green-500 mr-2"></span> Open Now
                                </span>
<!-- -->
</div>
<h2 class="text-2xl md:text-3xl font-bold text-slate-900 dark:text-white mb-4">City Center Pharmacy</h2>
<p class="text-slate-600 dark:text-slate-400 text-lg leading-relaxed mb-6">
                                Your trusted local healthcare partner providing expert advice and a wide range of medications. We specialize in prescription fulfillment, over-the-counter wellness products, and personalized consultations.
                            </p>
<div class="grid grid-cols-1 md:grid-cols-2 gap-6 p-6 bg-slate-50 dark:bg-slate-800/50 rounded-xl">
<div class="flex items-start gap-4">
<span class="material-symbols-outlined text-primary bg-primary/10 p-2 rounded-lg">schedule</span>
<div>
<p class="text-sm font-bold text-slate-900 dark:text-white">Working Hours</p>
<p class="text-sm text-slate-500 dark:text-slate-400">Mon-Sun | 08:00 AM - 10:00 PM</p>
</div>
</div>
<div class="flex items-start gap-4">
<span class="material-symbols-outlined text-primary bg-primary/10 p-2 rounded-lg">vaccines</span>
<div>
<p class="text-sm font-bold text-slate-900 dark:text-white">Services</p>
<p class="text-sm text-slate-500 dark:text-slate-400">Vaccinations, Home Delivery</p>
</div>
</div>
</div>
</div>
</div>
<!-- Address Section -->
<div class="bg-white dark:bg-slate-900 rounded-xl overflow-hidden shadow-sm border border-slate-200 dark:border-slate-800">
<div class="p-8">
<h3 class="text-xl font-bold text-slate-900 dark:text-white mb-6 flex items-center gap-2">
<span class="material-symbols-outlined text-primary">location_on</span>
                                Address
                            </h3>
<div class="flex flex-col md:flex-row gap-8 items-start">
<div class="flex-1 space-y-4">
<p class="text-slate-600 dark:text-slate-400 text-lg">
                                        123 Healthcare Plaza, Medical District<br/>
                                        Downtown Metropolis, NY 10001<br/>
                                        United States
                                    </p>
<button class="flex items-center gap-2 text-primary font-bold hover:underline">
<span class="material-symbols-outlined">directions</span>
                                        Get Directions
                                    </button>
</div>

<div class="w-full h-full bg-cover bg-center" data-alt="Map location of the pharmacy" data-location="New York" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCloTIVmEtQfaxUGOzzPavdEiMXPtnIsZFlw8ELIOai9q-40T16iKASNmTROlhOngZXCKIp486jVneaRuPNmDBibZOfIwh35bl5CX8O3Hl4xUMpSqADLZBH3VZxv0MD4ztNupanx91AXkjOC7uO5oB1kPuU5bmibkZ73NFmV1bREtk-3NNV0X--aezY-jcBShhv_dHli8Pz6hAfEPqnB6EPUvENUTWukdbMgTQqJbsK7O8JnxZnFULNXyzsQ1LfmVcjtlkJYXOPmhyH')"></div>
</div>
</div>
</div>
</div>
</div>
<!-- Right Column: Contact -->
<div class="space-y-8">
<div class="bg-white dark:bg-slate-900 rounded-xl overflow-hidden shadow-sm border border-slate-200 dark:border-slate-800 p-8 sticky top-24">
<h3 class="text-xl font-bold text-slate-900 dark:text-white mb-6">Contact the Pharmacy</h3>
<div class="flex flex-col gap-4">
<!-- Phone Number -->
<a class="flex items-center gap-4 p-4 rounded-xl border border-slate-200 dark:border-slate-700 hover:border-primary/50 hover:bg-primary/5 transition-all group" href="tel:+1234567890">
<div class="bg-primary/10 text-primary p-3 rounded-full group-hover:bg-primary group-hover:text-white transition-colors">
<span class="material-symbols-outlined">call</span>
</div>
<div>
<p class="text-xs font-semibold text-slate-500 uppercase tracking-wider">Call Us</p>
<p class="text-lg font-bold text-slate-900 dark:text-white">+1 (234) 567-890</p>
</div>
</a>
<!-- WhatsApp -->
<a class="flex items-center gap-4 p-4 rounded-xl border border-slate-200 dark:border-slate-700 hover:border-[#25D366]/50 hover:bg-[#25D366]/5 transition-all group" href="#">
<div class="bg-[#25D366]/10 text-[#25D366] p-3 rounded-full group-hover:bg-[#25D366] group-hover:text-white transition-colors">
<span class="material-symbols-outlined">chat</span>
</div>
<div>
<p class="text-xs font-semibold text-slate-500 uppercase tracking-wider">WhatsApp</p>
<p class="text-lg font-bold text-slate-900 dark:text-white">Chat with Pharmacist</p>
</div>
</a>
<!-- Facebook -->
<a class="flex items-center gap-4 p-4 rounded-xl border border-slate-200 dark:border-slate-700 hover:border-[#1877F2]/50 hover:bg-[#1877F2]/5 transition-all group" href="#">
<div class="bg-[#1877F2]/10 text-[#1877F2] p-3 rounded-full group-hover:bg-[#1877F2] group-hover:text-white transition-colors">
<span class="material-symbols-outlined">public</span>
</div>
<div>
<p class="text-xs font-semibold text-slate-500 uppercase tracking-wider">Facebook</p>
<p class="text-lg font-bold text-slate-900 dark:text-white">Follow our Page</p>
</div>
</a>
</div>
<!-- <div class="mt-8 pt-8 border-t border-slate-100 dark:border-slate-800">
<p class="text-sm text-slate-500 dark:text-slate-400 text-center mb-4 italic">
                                For medical emergencies, please dial 911 or your local emergency number immediately.
                            </p>
<button class="w-full py-4 bg-slate-900 dark:bg-white text-white dark:text-slate-900 font-bold rounded-xl transition-transform hover:scale-[1.02] active:scale-95">
                                Send Message
                            </button>
</div> -->
</div>
</div>
</div>
</div>
</main>
<footer class="bg-white dark:bg-slate-900 border-t border-slate-200 dark:border-slate-800 py-12 mt-12">
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
<div class="flex flex-col md:flex-row justify-between items-center gap-8">
<div class="flex items-center gap-2 text-primary">
<span class="material-symbols-outlined text-2xl">medical_services</span>
<span class="text-slate-900 dark:text-white text-lg font-bold">HealthPlatform</span>
</div>
<div class="flex gap-8 text-sm text-slate-500 dark:text-slate-400">
<a class="hover:text-primary transition-colors" href="#">Privacy Policy</a>
<a class="hover:text-primary transition-colors" href="#">Terms of Service</a>
<a class="hover:text-primary transition-colors" href="#">Cookie Policy</a>
</div>
<p class="text-sm text-slate-500 dark:text-slate-400">
                    © 2024 HealthPlatform. All rights reserved.
                </p>
</div>
</div>
</footer>
</body></html>