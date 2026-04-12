<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>MediConnect - Select Your Role</title>
    <!-- Tailwind CSS v3 with Plugins -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <!-- Google Fonts: Inter for a clean, modern medical look -->
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&amp;display=swap"
      rel="stylesheet"
    />
    <style data-purpose="typography">
      body {
        font-family: "Inter", sans-serif;
      }
    </style>
    <style data-purpose="animations">
      .hover-scale {
        transition: transform 0.3s cubic-bezier(0.4, 0, 0.2, 1),
          box-shadow 0.3s ease;
      }
      .hover-scale:hover {
        transform: scale(1.05);
        box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1),
          0 8px 10px -6px rgba(0, 0, 0, 0.1);
      }
      /* Smooth gradient for the hero overlay */
      .hero-gradient {
        background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5));
      }
    </style>
  </head>
  <body class="bg-slate-50 text-slate-900 overflow-x-hidden">
    <!-- BEGIN: Navigation -->
    <nav
      class="absolute top-0 left-0 w-full z-50 px-6 py-6 md:px-12 flex justify-between items-center bg-transparent"
      data-purpose="main-navigation"
    >
      <div class="flex items-center gap-2">
        <!-- Simple Medical Logo -->
        <div
          class="w-10 h-10 bg-teal-500 rounded-lg flex items-center justify-center shadow-lg"
        >
          <svg
            class="h-6 w-6 text-white"
            fill="none"
            stroke="currentColor"
            viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              d="M12 4v16m8-8H4"
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
            ></path>
          </svg>
        </div>
        <span class="text-white text-2xl font-bold tracking-tight">MediConnect</span>
      </div>

    </nav>
    <!-- END: Navigation -->

    <!-- BEGIN: Hero Section -->
    <main>
      <section
        class="relative h-screen min-h-[700px] w-full flex items-center justify-center overflow-hidden"
        data-purpose="hero-banner"
      >
        <!-- Background Image -->
        <img
          alt="Modern Hospital with Doctors and Medical Technology"
          class="absolute inset-0 w-full h-full object-cover"
          src="https://images.unsplash.com/photo-1742137587510-389de3549208?q=80&w=1172&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
        />
        <!-- Dark Overlay -->
        <div class="absolute inset-0 hero-gradient"></div>

        <!-- Hero Content -->
        <div class="relative z-10 container mx-auto px-4 text-center">
          <!-- Main Headline -->
          <h1
            class="text-4xl md:text-6xl lg:text-7xl font-bold text-white mb-6 tracking-tight max-w-4xl mx-auto leading-tight"
          >
            Select Your <span class="text-teal-400">Role</span>
          </h1>
          <!-- Subtitle -->
          <p class="text-lg md:text-xl text-slate-200 mb-12 max-w-2xl mx-auto font-light">
            Please choose how you want to continue.
          </p>

          <!-- Role Selection Buttons -->
          <div
            class="flex flex-col md:flex-row items-center justify-center gap-6"
            data-purpose="service-navigation"
          >
            <!-- Patient Button -->
            <a
              class="group hover-scale flex items-center justify-center gap-3 bg-white px-8 py-5 rounded-2xl shadow-xl w-64 md:w-auto min-w-[220px]"
              href="{{ route('patient') }}"
            >
              <div
                class="p-3 bg-teal-100 rounded-full group-hover:bg-teal-200 transition-colors"
              >
                <svg
                  class="h-6 w-6 text-teal-600"
                  fill="none"
                  stroke="currentColor"
                  viewBox="0 0 24 24"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M16 11c1.657 0 3-1.567 3-3.5S17.657 4 16 4s-3 1.567-3 3.5S14.343 11 16 11zM8 11c1.657 0 3-1.567 3-3.5S9.657 4 8 4 5 5.567 5 7.5 6.343 11 8 11zm0 2c-2.761 0-5 1.79-5 4v1h10v-1c0-2.21-2.239-4-5-4zm8 0c-.665 0-1.302.104-1.89.296A5.978 5.978 0 0118 17v1h6v-1c0-2.21-2.239-4-5-4z"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="1.5"
                  ></path>
                </svg>
              </div>
              <span class="text-xl font-bold text-slate-800">Patient</span>
            </a>

            <!-- Doctor Button -->
            <a
              class="group hover-scale flex items-center justify-center gap-3 bg-white px-8 py-5 rounded-2xl shadow-xl w-64 md:w-auto min-w-[220px]"
              href="/doctor"
            >
              <div
                class="p-3 bg-blue-100 rounded-full group-hover:bg-blue-200 transition-colors"
              >
                <svg
                  class="h-6 w-6 text-blue-600"
                  fill="none"
                  stroke="currentColor"
                  viewBox="0 0 24 24"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M9 12h6m-3-3v6m8 1a9 9 0 11-18 0 9 9 0 0118 0z"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                  ></path>
                </svg>
              </div>
              <span class="text-xl font-bold text-slate-800">Doctor</span>
            </a>

            <!-- Admin Button -->
            <a
              class="group hover-scale flex items-center justify-center gap-3 bg-white px-8 py-5 rounded-2xl shadow-xl w-64 md:w-auto min-w-[220px]"
              href="/admin"
            >
              <div
                class="p-3 bg-indigo-100 rounded-full group-hover:bg-indigo-200 transition-colors"
              >
                <svg
                  class="h-6 w-6 text-indigo-600"
                  fill="none"
                  stroke="currentColor"
                  viewBox="0 0 24 24"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M12 8c1.657 0 3-1.567 3-3.5S13.657 1 12 1 9 2.567 9 4.5 10.343 8 12 8zm0 2c-3.314 0-6 2.239-6 5v2h12v-2c0-2.761-2.686-5-6-5zm7 7v-2c0-1.425-.59-2.73-1.55-3.73A4.97 4.97 0 0121 16v1h-2z"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="1.5"
                  ></path>
                </svg>
              </div>
              <span class="text-xl font-bold text-slate-800">Admin</span>
            </a>
          </div>
        </div>

        <!-- Scroll Indicator -->
        <div class="absolute bottom-10 left-1/2 -translate-x-1/2 animate-bounce">
          <svg
            class="h-6 w-6 text-white opacity-60"
            fill="none"
            stroke="currentColor"
            viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              d="M19 14l-7 7-7-7"
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
            ></path>
          </svg>
        </div>
      </section>
    </main>
    <!-- END: Hero Section -->

    <!-- BEGIN: Footer -->
    <footer class="bg-slate-900 text-slate-400 py-12 px-6" data-purpose="main-footer">
      <div
        class="container mx-auto flex flex-col md:flex-row justify-between items-center gap-6"
      >
        <div class="flex items-center gap-2">
          <div class="w-8 h-8 bg-teal-500 rounded flex items-center justify-center">
            <svg
              class="h-5 w-5 text-white"
              fill="none"
              stroke="currentColor"
              viewBox="0 0 24 24"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M12 4v16m8-8H4"
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
              ></path>
            </svg>
          </div>
          <span class="text-white font-bold">MediConnect</span>
        </div>
        <p class="text-sm">© 2026 MediConnect Healthcare. All rights reserved.</p>
        <div class="flex gap-4">
          <a class="hover:text-white transition-colors" href="#">Privacy Policy</a>
          <a class="hover:text-white transition-colors" href="#">Terms of Service</a>
        </div>
      </div>
    </footer>
    <!-- END: Footer -->
  </body>
</html>

