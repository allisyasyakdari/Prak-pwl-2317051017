<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Navbar dengan Dark Mode</title>

  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      darkMode: 'class',
    }
  </script>

  <style>
    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(-10px); }
      to { opacity: 1; transform: translateY(0); }
    }
    .animate-fade-in {
      animation: fadeIn 0.3s ease-out forwards;
    }
    .nav-link {
      position: relative;
      overflow: hidden;
    }
    .nav-link::after {
      content: '';
      position: absolute;
      bottom: 0;
      left: 0;
      width: 100%;
      height: 2px;
      background-color: currentColor;
      transform: scaleX(0);
      transform-origin: right;
      transition: transform 0.3s ease-out;
    }
    .nav-link:hover::after {
      transform: scaleX(1);
      transform-origin: left;
    }
    .mobile-menu {
      transition: transform 0.3s ease-out, opacity 0.3s ease-out;
    }
  </style>
</head>
<body class="bg-gray-50 dark:bg-gray-900 text-gray-900 dark:text-white transition-colors duration-500">

  <nav class="bg-white dark:bg-gray-800 shadow-md p-4">
    <div class="container mx-auto flex justify-between items-center">
      <h1 class="text-2xl font-bold text-indigo-700 dark:text-indigo-400">Welcome</h1>

      <div class="hidden md:flex items-center space-x-4">
        
        <button id="darkModeToggle"
          class="text-gray-700 dark:text-gray-200 hover:text-indigo-700 dark:hover:text-indigo-400 focus:outline-none transition-colors duration-300">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
            viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
          </svg>
        </button>
      </div>

      <button id="mobileMenuButton" class="md:hidden text-gray-700 dark:text-gray-200 focus:outline-none">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
          viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M4 6h16M4 12h16M4 18h16" />
        </svg>
      </button>
    </div>
  </nav>

  <main class="container mx-auto mt-8 text-center">
    <h2 class="text-3xl font-semibold mb-4">Hello There!</h2>
  </main>

  <script>
    const darkModeToggle = document.getElementById('darkModeToggle');
    const mobileMenuButton = document.getElementById('mobileMenuButton');
    const mobileMenu = document.getElementById('mobileMenu');
    let isDarkMode = false;
    let isMobileMenuOpen = false;

    function toggleDarkMode() {
      isDarkMode = !isDarkMode;
      document.documentElement.classList.toggle('dark');
      updateDarkModeIcon();
    }

    function updateDarkModeIcon() {
      darkModeToggle.innerHTML = isDarkMode
        ? '<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" /></svg>'
        : '<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" /></svg>';
    }

    function toggleMobileMenu() {
      isMobileMenuOpen = !isMobileMenuOpen;
      if (isMobileMenuOpen) {
        mobileMenu.classList.remove('-translate-y-full', 'opacity-0');
        mobileMenu.classList.add('translate-y-0', 'opacity-100');
      } else {
        mobileMenu.classList.remove('translate-y-0', 'opacity-100');
        mobileMenu.classList.add('-translate-y-full', 'opacity-0');
      }
    }

    darkModeToggle.addEventListener('click', toggleDarkMode);
    mobileMenuButton.addEventListener('click', toggleMobileMenu);

    if (window.matchMedia('(prefers-color-scheme: dark)').matches) {
      toggleDarkMode();
    }
  </script>
</body>
</html>
