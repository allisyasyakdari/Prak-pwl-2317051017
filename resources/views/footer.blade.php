<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Footer Tailwind Example</title>
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body class="flex flex-col min-h-screen">

    <footer>
      <div class="bg-gray-800 py-4 text-gray-400">
        <div class="container px-4 mx-auto">
          <div class="-mx-4 flex flex-wrap justify-between">
            <div class="px-4 my-4 w-full xl:w-1/5">
              <a href="/" class="block w-56 mb-10">
                <svg version="1.1" viewBox="0 0 3368 512" xmlns="http://www.w3.org/2000/svg">
                  <g fill="none" fill-rule="evenodd">
                    <g transform="translate(0 -75)">
                      <g transform="translate(0 75)">
                        <rect width="512" height="512" rx="128" fill="#3D5AFE"></rect>
                        <rect x="149" y="176" width="220" height="220" fill="#fff"></rect>
                        <circle cx="259" cy="156" r="40" fill="#fff"></circle>
                        <circle cx="369" cy="286" r="40" fill="#2962FF"></circle>
                      </g>
                      <text fill="white" font-family="Nunito-Bold, Nunito" font-size="512" font-weight="bold">
                        <tspan x="654" y="518">Tailwindow</tspan>
                      </text>
                    </g>
                  </g>
                </svg>
              </a>
              <p class="text-justify">
                Tailwindow is a collection of UI Components created using Tailwind CSS Framework. The UI Components gives you all of the building blocks you need to build any designs without any annoying opinionated styles you have to fight to override.
              </p>
            </div>

            <div class="px-4 my-4 w-full sm:w-auto">
              <div>
                <h2 class="inline-block text-2xl pb-4 mb-4 border-b-4 border-blue-600">Company</h2>
              </div>
              <ul class="leading-8">
                <li><a href="#" class="hover:text-blue-400">About Us</a></li>
                <li><a href="#" class="hover:text-blue-400">Terms &amp; Conditions</a></li>
                <li><a href="#" class="hover:text-blue-400">Privacy Policy</a></li>
                <li><a href="#" class="hover:text-blue-400">Contact Us</a></li>
              </ul>
            </div>

            <div class="px-4 my-4 w-full sm:w-auto">
              <div>
                <h2 class="inline-block text-2xl pb-4 mb-4 border-b-4 border-blue-600">Blog</h2>
              </div>
              <ul class="leading-8">
                <li><a href="#" class="hover:text-blue-400">Getting Started With HTML and CSS</a></li>
                <li><a href="#" class="hover:text-blue-400">What Is Flex And When to Use It?</a></li>
                <li><a href="#" class="hover:text-blue-400">How TailwindCSS Can Help Your Productivity?</a></li>
                <li><a href="#" class="hover:text-blue-400">5 Tips to Make Responsive Website</a></li>
                <li><a href="#" class="hover:text-blue-400">See More</a></li>
              </ul>
            </div>

            <div class="px-4 my-4 w-full sm:w-auto xl:w-1/5">
              <div>
                <h2 class="inline-block text-2xl pb-4 mb-4 border-b-4 border-blue-600">Connect With Us</h2>
              </div>

              <a href="#" class="inline-flex items-center justify-center h-8 w-8 border border-gray-100 rounded-full mr-1 hover:text-blue-400 hover:border-blue-400">
                <svg clas
