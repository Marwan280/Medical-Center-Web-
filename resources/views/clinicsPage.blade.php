<!DOCTYPE html>

<html lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Clinics Page | COOMING SOON</title>
<!-- BEGIN: Tailwind CDN -->
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<!-- END: Tailwind CDN -->
<!-- BEGIN: Custom Configurations -->
<script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            medicalTeal: '#00D1C1',
            neonOrange: '#FF5F1F',
            darkNavy: '#0A192F',
          },
          fontFamily: {
            display: ['Inter', 'system-ui', 'sans-serif'],
          },
          animation: {
            'blob-float': 'blob-float 10s infinite alternate',
            'spin-slow': 'spin 12s linear infinite',
          },
          keyframes: {
            'blob-float': {
              '0%': { transform: 'translate(0px, 0px) scale(1)' },
              '33%': { transform: 'translate(30px, -50px) scale(1.1)' },
              '66%': { transform: 'translate(-20px, 20px) scale(0.9)' },
              '100%': { transform: 'translate(0px, 0px) scale(1)' },
            }
          }
        }
      }
    }
  </script>
<!-- END: Custom Configurations -->
<!-- BEGIN: Custom Styles -->
<style data-purpose="background-shapes">
    .blob {
      position: absolute;
      filter: blur(60px);
      z-index: -1;
      opacity: 0.6;
    }
    .blob-1 {
      width: 400px;
      height: 400px;
      background: #00D1C1;
      top: -100px;
      left: -100px;
      border-radius: 40% 60% 70% 30% / 40% 50% 60% 50%;
    }
    .blob-2 {
      width: 500px;
      height: 500px;
      background: #FF5F1F;
      bottom: -150px;
      right: -100px;
      border-radius: 60% 40% 30% 70% / 60% 30% 70% 40%;
    }
  </style>
<style data-purpose="typography-effects">
    .outline-text {
      -webkit-text-stroke: 2px #00D1C1;
      color: transparent;
    }
    .funky-shadow {
      text-shadow: 4px 4px 0px #FF5F1F;
    }
  </style>
<!-- END: Custom Styles -->
</head>
<body class="bg-darkNavy min-h-screen flex items-center justify-center overflow-hidden font-display selection:bg-neonOrange selection:text-white">
<!-- BEGIN: Background Elements -->
<div class="fixed inset-0 overflow-hidden pointer-events-none">
<div class="blob blob-1 animate-blob-float"></div>
<div class="blob blob-2 animate-blob-float" style="animation-delay: -5s;"></div>
<!-- Decorative Grid Overlay -->
<div class="absolute inset-0 opacity-10" style="background-image: radial-gradient(#00D1C1 1px, transparent 1px); background-size: 40px 40px;"></div>
</div>
<!-- END: Background Elements -->
<!-- BEGIN: Main Content Container -->
<main class="relative z-10 text-center px-6 max-w-4xl" data-purpose="landing-content">
<!-- BEGIN: Icon/Logo Visual -->
<div class="mb-12 flex justify-center items-center" data-purpose="brand-visual">
<div class="relative w-32 h-32 md:w-48 md:h-48 flex items-center justify-center">
<!-- Rotating Outer Ring -->
<div class="absolute inset-0 border-4 border-dashed border-medicalTeal rounded-full animate-spin-slow opacity-50"></div>
<!-- Decorative Cross Shape -->
<div class="relative bg-neonOrange p-6 md:p-8 rounded-2xl shadow-2xl rotate-12 transform hover:rotate-0 transition-transform duration-500">
<svg class="h-12 w-12 md:h-20 md:w-20 text-white" fill="none" stroke="currentColor" stroke-width="3" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
<path d="M12 4v16m8-8H4" stroke-linecap="round" stroke-linejoin="round"></path>
</svg>
</div>
</div>
</div>
<!-- END: Icon/Logo Visual -->
<!-- BEGIN: Messaging -->
<div class="space-y-6" data-purpose="main-typography">
<h2 class="text-medicalTeal uppercase tracking-[0.5em] text-sm md:text-lg font-black mb-4">
        Vitality Redefined
      </h2>
<h1 class="text-white text-5xl md:text-8xl font-black leading-tight">
       COMING <br/>
<span class="outline-text">SOON</span> <br/>
        
      </h1>
<div class="flex flex-col md:flex-row items-center justify-center gap-4 mt-8">
<span class="bg-white/10 backdrop-blur-md text-medicalTeal px-6 py-2 rounded-full border border-medicalTeal/30 font-bold text-lg">
          EST. 2024
        </span>
<span class="text-neonOrange font-black text-2xl uppercase italic tracking-tighter funky-shadow">
          Your way soon.
        </span>
</div>
</div>
<!-- END: Messaging -->
<!-- BEGIN: Secondary Visual Accent -->
<div class="mt-16 flex justify-center gap-2" data-purpose="visual-footer-accents">
<div class="h-1 w-12 bg-medicalTeal rounded-full"></div>
<div class="h-1 w-24 bg-neonOrange rounded-full"></div>
<div class="h-1 w-12 bg-medicalTeal rounded-full"></div>
</div>
<!-- END: Secondary Visual Accent -->
</main>
<!-- END: Main Content Container -->
</body></html>