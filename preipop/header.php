<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="//unpkg.com/alpinejs" defer></script>
	<?php
	wp_head();
	?>
</head>

<body class="relative" x-data="{ anyArtistOpen: false, navopen : false }" :class="anyArtistOpen ? 'overflow-hidden' : ''">
    <nav class="bg-black border-gray-200 px-2 sm:px-4 py-5 md:py-0.5 rounded dark:bg-gray-900 sticky top-0 z-30">
        <div class="container flex flex-wrap justify-between items-center mx-auto">
            <a href="/" class="flex items-center">
                <svg id="Layer_1" class="mr-3 h-9 stroke-white fill-white" alt="Preipop Logo"
                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 979.15 778.6">
                    <path
                        d="m702.81,311.13c0,34.3,0,68.59,0,102.89,0,20.38-27.49,37.32-65.47,40.3-40.1,3.15-78.99-12.14-84.91-33.46-.74-2.65-1.15-5.36-1.15-8.04-.06-68.26-.05-136.53-.06-204.79,0-20.33,28.68-37.74,66.18-40.15,40.36-2.59,76.45,11.53,84,32.93.84,2.37,1.34,4.82,1.34,7.24.09,34.36.06,68.72.06,103.09Zm-56.07.12c0-34.42.03-68.84-.02-103.26-.01-8.13-15.86-13.21-29.1-9.32-7.21,2.12-10.52,5.56-10.52,9.94.02,66.54.01,133.07.02,199.61,0,2.11-.1,4.21.02,6.32.36,6.01,10.36,10.84,21.37,10.36,10.45-.45,18.21-5.1,18.21-10.98.02-34.22,0-68.44.01-102.67Z" />
                    <path
                        d="m372.29,167.57v70.44h-78.82v151.41h54.93v70.45h-54.93v177.32h83.59v70.44h-139.12V167.57h134.34Z" />
                    <path d="m446.46,707.64h-56.33V167.23h56.33v540.42Z" />
                    <path
                        d="m574.36,750.94v.96h45.89v25.54h-71.62v-26.69c24.58-28.03,42.63-52.23,42.63-75.08,0-8.83-2.69-12.87-8.83-12.87-6.91,0-10.75,4.99-10.75,20.74v6.34h-22.47v-6.53c0-34.95,18.43-45.51,35.72-45.51,19.01,0,34.76,12.86,34.76,38.98,0,32.26-24.2,52.42-45.32,74.12Z" />
                    <path
                        d="m672.64,615.89c-36.87,0-36.87-30.72-36.87-55.3v-31.11c0-24.77,0-55.49,36.87-55.49s36.87,27.84,36.87,55.49v31.11c0,27.46,0,55.3-36.87,55.3Zm-8.06-46.08c0,13.82,0,21.31,8.06,21.31s8.07-7.49,8.07-21.31v-49.73c0-13.83,0-21.31-8.07-21.31s-8.06,7.49-8.06,21.31v49.73Z" />
                    <path
                        d="m574.36,589.4v.96h45.89v25.54h-71.62v-26.69c24.58-28.03,42.63-52.23,42.63-75.08,0-8.83-2.69-12.86-8.83-12.86-6.91,0-10.75,4.99-10.75,20.74v6.34h-22.47v-6.53c0-34.95,18.43-45.51,35.72-45.51,19.01,0,34.76,12.87,34.76,38.98,0,32.26-24.2,52.42-45.32,74.12Z" />
                    <path
                        d="m659.78,725.41c0,17.09.58,31.11,13.63,31.11,10.95,0,12.48-9.6,12.48-20.74,0-18.82-4.42-22.66-13.63-22.66h-10.18v-20.36h9.03c9.79,0,11.33-6.53,11.33-18.05,0-12.29-1.73-18.44-9.22-18.44-8.06,0-10.18,6.91-10.18,19.01v4.61h-24.39v-5.38c0-27.07,13.63-37.83,35.72-37.83,23.43,0,36.1,11.9,36.1,35.14,0,17.47-7.3,24.58-14.98,29.76v.96c12.48,4.8,19.01,18.05,19.01,34.95,0,26.31-15.55,41.09-41.28,41.09-28.23,0-37.44-17.86-37.44-44.74v-8.45h24Z" />
                    <path
                        d="m912.04,0h-182.01v152.5h.4v626.04h56.55V152.5h125.06c37.84-4.81,67.11-37.1,67.11-76.25S949.88,4.81,912.04,0Zm-26.24,102.05h-98.87v-51.61h98.87c20.56,1.63,36.45,12.55,36.45,25.8s-15.9,24.18-36.45,25.8Z" />
                    <path
                        d="m649.37,0h-182.01v145.23h-.03v567.15c0,5.28-4.28,9.56-9.56,9.56-83.79,0-147.46,0-231.24.01-.62,0-40.43-138.98-74.79-138.95-41.21.03,27.01,0-14.2,0-1.12,0-2.28.13-3.37-.07-3.23-.59-5.5-2.3-5.92-5.79-.4-3.32,1.22-5.57,4.16-6.75,1.21-.49,2.68-.39,4.04-.43,10.22-.28,20.58.48,30.63-.95,33.47-4.79,57.38-33.1,57.38-66.75-.02-91.08.01-182.16-.04-273.25,0-3.23-.25-6.47-.88-9.64-6.75-33.72-33.69-55.78-67.87-55.82-26.6-.03-53.2,0-79.8,0h-3.99v614.74h56.04c0-1.47,0-2.7,0-3.93,0-37.34,0-74.69,0-112.03,0-6.62.06-13.24,0-19.86-.02-2.23.41-3.27,3.12-3.26,41.34.15,18.32.16,20.19.25,3.7.19,6.3,2.58,6.59,5.93.29,3.46,13.6,133.14,46.49,133.14,87.68.01,175.36,0,263.04,0h0c18.76,0,37.33,0,56.55,0v-418.22h.08v-207.82h125.41c37.84-4.81,67.11-37.1,67.11-76.25S687.21,4.81,649.37,0ZM128.19,220.13c10.02,0,19.68-.17,29.32.06,4.63.11,9.32,3.9,10.16,8.45.37,2,.54,4.06.54,6.1.02,88.04,0,176.08.03,264.12,0,4.62-.34,9.13-4.46,12.09-1.56,1.12-3.58,2.21-5.42,2.25-9.96.22-19.92.1-30.18.1V220.13Zm494.93-118.08h-98.87v-51.61h98.87c20.56,1.63,36.45,12.55,36.45,25.8s-15.9,24.18-36.45,25.8Z" />
                    <path
                        d="m185.09,0H0v778.54h56.55V152.5h128.54c37.84-4.81,67.11-37.1,67.11-76.25S222.93,4.81,185.09,0Zm-26.24,102.05H56.9v-51.61h101.94c20.56,1.63,36.45,12.55,36.45,25.8s-15.9,24.18-36.45,25.8Z" />
                </svg>
                <span class="text-white">
                2-3 Februari
            </span>
            </a>
            <button data-collapse-toggle="navbar-default" type="button"
                class="inline-flex items-center p-2 ml-3 text-sm text-white rounded-lg md:hidden hover:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-gray-200"
                aria-controls="navbar-default" aria-expanded="false" @click="navopen = !navopen">
                <span class="sr-only">Open main menu</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
            <div class="menu w-full md:block md:w-auto" id="navbar-default" :class="navopen === true ? '' : 'hidden'"
                x-cloak>
<?php
	wp_nav_menu(
		array(
			"menu" => "Hoofdmenu",
			"container" => "",
			"theme_location" => "primary",
			//"menu_class" => "",
			//"items_wrap" => '<ul id="" class="%2$s">%3$s</ul>'
		)
	);
?>
                <!--<ul class="flex flex-col w-full p-4 mt-4 border border-gray-100 rounded-lg md:flex-row md:space-x-8 md:mt-0 items-center text-lg  md:border-0 ">
                    <li class="w-full md:w-fit text-center">
                        <a href="./index.html"
                            class="block py-2 w-full md:w-fit md:px-4 hover:bg-gray-900 rounded md:bg-transparent text-white font-bold md:hover:bg-purple-900"
                            aria-current="page">Home</a>
                    </li>
                    <li class="w-full md:w-fit text-center">
                        <a href="./crew.html"
                            class="block py-2 w-full md:w-fit md:px-4 hover:bg-gray-900 text-white rounded md:border-0 md:hover:bg-purple-900">Crew</a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/preipop/?hl=en" target="_blank" rel="noreferrer noopener">
                        <svg fill="#ffffff" version="1.1" id="Layer_1" class="h-6 w-6 stroke-white" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 169.063 169.063" xml:space="preserve"><g  stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <path d="M122.406,0H46.654C20.929,0,0,20.93,0,46.655v75.752c0,25.726,20.929,46.655,46.654,46.655h75.752 c25.727,0,46.656-20.93,46.656-46.655V46.655C169.063,20.93,148.133,0,122.406,0z M154.063,122.407 c0,17.455-14.201,31.655-31.656,31.655H46.654C29.2,154.063,15,139.862,15,122.407V46.655C15,29.201,29.2,15,46.654,15h75.752 c17.455,0,31.656,14.201,31.656,31.655V122.407z"></path> <path d="M84.531,40.97c-24.021,0-43.563,19.542-43.563,43.563c0,24.02,19.542,43.561,43.563,43.561s43.563-19.541,43.563-43.561 C128.094,60.512,108.552,40.97,84.531,40.97z M84.531,113.093c-15.749,0-28.563-12.812-28.563-28.561 c0-15.75,12.813-28.563,28.563-28.563s28.563,12.813,28.563,28.563C113.094,100.281,100.28,113.093,84.531,113.093z"></path> <path d="M129.921,28.251c-2.89,0-5.729,1.17-7.77,3.22c-2.051,2.04-3.23,4.88-3.23,7.78c0,2.891,1.18,5.73,3.23,7.78 c2.04,2.04,4.88,3.22,7.77,3.22c2.9,0,5.73-1.18,7.78-3.22c2.05-2.05,3.22-4.89,3.22-7.78c0-2.9-1.17-5.74-3.22-7.78 C135.661,29.421,132.821,28.251,129.921,28.251z"></path> </g> </g></svg>
                        </a>
                    </li>
                </ul>-->
            </div>
        </div>
    </nav>
    <!-- Marquee section -->
<section class="overflow-x-hidden flex bg-black text-white sticky top-20 md:top-20 z-30 font-medium" x-show="!anyArtistOpen" :class="navopen ? 'hidden' : ''">
    <div class="py-2 motion-safe:animate-marquee whitespace-nowrap motion-reduce:mx-auto">
<?php
$bands = [
	"Lange Mannen met Haast",
	"Rantsoen",
	"Kayleigh Beard",
	"Naduah",
	"Plunder",
	"Get Jealous",
	"Jelle Mulder",
	"Diamonds//Honey",
	"Cavolo Nero",
	"Misprint",
	"Chris Egbers",
	"Fred Goverde"
];

foreach ($bands as $band) {
	printf('<span class="mx-4 text-xl motion-reduce:text-base">%s</span>', $band);
}
?>
    </div>

    <div class="py-2 animate-marquee2 whitespace-nowrap absolute top-0 motion-reduce:hidden">
<?php
foreach ($bands as $band) {
	printf('<span class="mx-4 text-xl motion-reduce:text-base">%s</span>', $band);
}
?>
    </div>
</section>

<div class="absolute top-0 bottom-0 left-0 right-3/4 bg-gradient-to-r from-purple-900 via-black to-black -z-10"></div>
<div class="absolute top-0 bottom-0 right-0 left-3/4 bg-gradient-to-l from-green-900 via-black to-black -z-10"></div>
<div class="absolute inset-0 left-1/4 right-1/4 bg-black -z-10"></div>

<?php 
if ( is_front_page()) {
//if (empty($GLOBALS["preipop_use_normal_header"])) {
?>
<main>
        <!-- Hero Section -->
        <section>
        <div class="relative flex items-center justify-center h-screen mb-12 overflow-hidden">
            <div class="flex flex-col items-center min-w-full">
                <div class="text-white max-w-5xl text-center text-lg z-20">
                    <img src="https://preipop.nl/preipop_img/Preipop2023.png" class="object-cover w-full">
                </div>
                <h1 class="font-bold text-5xl z-20 uppercase">
                    <span class="text-purple-800">2-3 februari</span>
                    <span class="text-green-800">2023</span>    
                    </h1>
                <button
                    class="py-2 px-5 bg-black text-white rounded-lg border border-green-300 hover:bg-purple-900 text-2xl font-bold mt-4 z-20 w-fit">
                    <a href="#line-up-h1">Bekijk de line-up</a>
                </button>
            </div>
            <video
              autoplay
              loop
              muted
              class="absolute z-10 w-auto min-w-full min-h-full max-w-none hidden lg:block"
            >
              <source
                src="https://preipop.nl/preipop_img/Rotting Christ - 1275.mp4"
                type="video/mp4"
              />
              Your browser does not support the video tag.
            </video>
            <!-- First square -->
            <img src="https://preipop.nl/preipop_img/Sfeer3.jpg" class="absolute z-10 w-auto min-w-full min-h-full max-w-none object-cover lg:hidden">\
            <div class="p-4 bg-purple-800 top-[5%] z-20 absolute transform animate-square delay-75"></div>
            <div class="p-8 hidden md:block bg-green-800 top-[55%] right-[18%] z-20 absolute transform animate-square delay-500"></div>
            <div class="p-6 hidden md:block bg-purple-800 left-[12.5%] z-20 absolute transform animate-square delay-200"></div>
            <div class="p-10 bg-purple-800 left-[18%] top-[12%] z-20 absolute transform animate-square delay-300"></div>
            <div class="p-10 bg-purple-800 right-[18%] top-[17%] z-20 absolute transform animate-square delay-100"></div>
            <div class="p-12 bg-green-800 left-[20%] bottom-[17%] z-20 absolute transform animate-square delay-1000"></div>
            

            <!-- Second square -->
            <div class="p-8 bg-purple-800 right-[42%] bottom-[9%] z-20 absolute transform animate-square2 delay-700"></div>
            <div class="p-6 bg-green-800 right-[36%] top-[8%] z-20 absolute transform animate-square2 delay-300"></div>
            <div class="p-10 hidden md:block bg-green-800 left-[14%] top-[35%] z-20 absolute transform animate-square2 delay-500"></div>
            <div class="p-12 bg-purple-800 left-[31%] bottom-[10%] z-20 absolute transform animate-square2 delay-100"></div>
            <div class="p-4 bg-green-800 right-[31%] bottom-[16%] z-20 absolute transform animate-square2 delay-500"></div>
            <div class="p-8 bg-green-800 left-[31%] top-[16%] z-20 absolute transform animate-square2 delay-300"></div>
        </div>
        </section>
<?php
} else {
?>
<!-- Main Section -->
<main class="max-w-5xl mx-auto text-white">
<?php
}
?>
