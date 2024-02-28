<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saadi Renovatiebedrijf</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link crossorigin="anonymous" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.3.2/swiper-bundle.css" rel="stylesheet" />
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="img/logo.png">
    <meta name="keywords" content="keuken renovatie, badkamer renovatie, maatwerk keuken, vakkundige montage, plafondverlagingen, toilet renovatie">
    <meta name="description" content="Ontdek de vakmanschap en toewijding van Saadi Renovatiebedrijf. Wij realiseren jouw dromen voor keuken- en badkamer renovaties van ontwerp tot installatie. Maatwerk keukens, vakkundige montage, en stijlvolle badkamertransformaties wachten op jou. Neem contact op voor een unieke renovatie-ervaring.">
    <meta name="description" content="Saadi Renovatiebedrijf - Jouw partner sinds 2017 voor keuken- en badkamerrenovaties. Wij begeleiden je van ontwerp tot installatie met een toegewijd team van ondernemers en adviseurs. Ontdek onze mogelijkheden voor maatwerk keukens, vakkundige montage, plafondverlagingen, koofconstructies en toiletrenovaties. Kies voor comfort en stijl met Saadi Renovatiebedrijf.">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@glidejs/glide/dist/css/glide.core.min.css">
    <?php
    $status = isset($_GET['status']) ? $_GET['status'] : '';
    ?>
    <?php if ($status === 'success') : ?>
        <script>
            alert('Bericht succesvol verzonden!');
        </script>
    <?php elseif ($status === 'error') : ?>
        <script>
            alert('Fout bij het verzenden van het bericht. Probeer het opnieuw.');
        </script>
    <?php endif; ?>

    <script type="application/ld+json">
        {
            "@context": "https://saadirenovatiebedrijf.nl/",
            "@type": "LocalBusiness",
            "name": "Saadi renovatiebedrijf",
            "logo": "https://saadirenovatiebedrijf.nl/img/logo.png",
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "Lange Heul 196",
                "addressLocality": "Bussum",
                "postalCode": "1403 NS",
                "addressCountry": "Netherlands"
            },
            "telephone": "+31619187075",
            "openingHours": "Monday	9 am–7:30 am
            Tuesday 9 am– 5: 30 pm
            Wednesday 9 am– 5: 30 pm
            Thursday 9 am– 5: 30 pm
            Friday 9 am– 5: 30 pm
            Saturday Closed
            Sunday Closed ",
            "sameAs": [
                "https://www.instagram.com/saadi.renovatiebedrijf?igsh=YmczdGJwd3ljeXA3",
                "https://www.google.com/maps/place/Lange+Heul+196,+1403+NS+Bussum/@52.264432,5.1635835,17z/data=!3m1!4b1!4m6!3m5!1s0x47c61358ccdb2c81:0x88e1d1c6790aac15!8m2!3d52.2644287!4d5.1661584!16s%2Fg%2F11c2b4jyzg?entry=tts",
                "https://saadirenovatiebedrijf.nl"
            ]
        }
    </script>


</head>

<body>
    <header>
        <section class="flex items-center shadow-md badage">
            <div class="w-full max-w-screen-xl px-4 mx-auto lg:px-12">
                <div class="flex-row items-center justify-center p-4 space-y-3 sm:flex sm:space-y-0 sm:space-x-4">
                    <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0 text-white text-center">
                        <li>
                            <svg class="w-6 h-6 text-gray-800 dark:text-white inline-block" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 21 21">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m6.072 10.072 2 2 6-4m3.586 4.314.9-.9a2 2 0 0 0 0-2.828l-.9-.9a2 2 0 0 1-.586-1.414V5.072a2 2 0 0 0-2-2H13.8a2 2 0 0 1-1.414-.586l-.9-.9a2 2 0 0 0-2.828 0l-.9.9a2 2 0 0 1-1.414.586H5.072a2 2 0 0 0-2 2v1.272a2 2 0 0 1-.586 1.414l-.9.9a2 2 0 0 0 0 2.828l.9.9a2 2 0 0 1 .586 1.414v1.272a2 2 0 0 0 2 2h1.272a2 2 0 0 1 1.414.586l.9.9a2 2 0 0 0 2.828 0l.9-.9a2 2 0 0 1 1.414-.586h1.272a2 2 0 0 0 2-2V13.8a2 2 0 0 1 .586-1.414Z" />
                            </svg>
                            Maatwerk
                        </li>
                        <li>
                            <svg class="w-6 h-6 text-gray-800 dark:text-white inline-block" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 21 21">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m6.072 10.072 2 2 6-4m3.586 4.314.9-.9a2 2 0 0 0 0-2.828l-.9-.9a2 2 0 0 1-.586-1.414V5.072a2 2 0 0 0-2-2H13.8a2 2 0 0 1-1.414-.586l-.9-.9a2 2 0 0 0-2.828 0l-.9.9a2 2 0 0 1-1.414.586H5.072a2 2 0 0 0-2 2v1.272a2 2 0 0 1-.586 1.414l-.9.9a2 2 0 0 0 0 2.828l.9.9a2 2 0 0 1 .586 1.414v1.272a2 2 0 0 0 2 2h1.272a2 2 0 0 1 1.414.586l.9.9a2 2 0 0 0 2.828 0l.9-.9a2 2 0 0 1 1.414-.586h1.272a2 2 0 0 0 2-2V13.8a2 2 0 0 1 .586-1.414Z" />
                            </svg>
                            Voldoet aan je verwachting
                        </li>
                        <li>
                            <svg class="w-6 h-6 text-gray-800 dark:text-white inline-block" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 21 21">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m6.072 10.072 2 2 6-4m3.586 4.314.9-.9a2 2 0 0 0 0-2.828l-.9-.9a2 2 0 0 1-.586-1.414V5.072a2 2 0 0 0-2-2H13.8a2 2 0 0 1-1.414-.586l-.9-.9a2 2 0 0 0-2.828 0l-.9.9a2 2 0 0 1-1.414.586H5.072a2 2 0 0 0-2 2v1.272a2 2 0 0 1-.586 1.414l-.9.9a2 2 0 0 0 0 2.828l.9.9a2 2 0 0 1 .586 1.414v1.272a2 2 0 0 0 2 2h1.272a2 2 0 0 1 1.414.586l.9.9a2 2 0 0 0 2.828 0l.9-.9a2 2 0 0 1 1.414-.586h1.272a2 2 0 0 0 2-2V13.8a2 2 0 0 1 .586-1.414Z" />
                            </svg>
                            Specialist in badkamer
                        </li>
                        <li>
                            <svg class="w-6 h-6 text-gray-800 dark:text-white inline-block" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 21 21">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m6.072 10.072 2 2 6-4m3.586 4.314.9-.9a2 2 0 0 0 0-2.828l-.9-.9a2 2 0 0 1-.586-1.414V5.072a2 2 0 0 0-2-2H13.8a2 2 0 0 1-1.414-.586l-.9-.9a2 2 0 0 0-2.828 0l-.9.9a2 2 0 0 1-1.414.586H5.072a2 2 0 0 0-2 2v1.272a2 2 0 0 1-.586 1.414l-.9.9a2 2 0 0 0 0 2.828l.9.9a2 2 0 0 1 .586 1.414v1.272a2 2 0 0 0 2 2h1.272a2 2 0 0 1 1.414.586l.9.9a2 2 0 0 0 2.828 0l.9-.9a2 2 0 0 1 1.414-.586h1.272a2 2 0 0 0 2-2V13.8a2 2 0 0 1 .586-1.414Z" />
                            </svg>
                            Luxe houtwerken
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <nav class="nav px-4 lg:px-6 py-2.5 shadow-md">
            <div class="flex flex-wrap justify-center items-center mx-auto max-w-screen-xl">
                <a href="https://saadirenovatiebedrijf.nl/" class="flex items-center pr-11">
                    <img src="img/logo.png" class="mr-3 logo" alt="Saadi Logo" />
                </a>
                <div class="flex items-center lg:order-2">
                    <button data-collapse-toggle="mobile-menu-2" type="button" class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-200 text-gray-400" aria-controls="mobile-menu-2" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                        </svg>
                        <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
                <div class="hidden justify-between items-center w-full lg:flex lg:w-auto lg:order-1 pl-20" id="mobile-menu-2">
                    <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
                        <li>
                            <a href="https://saadirenovatiebedrijf.nl" class="block py-2 pr-4 pl-3 text-gray-400 rounded bg-primary-600 lg:bg-transparent lg:text-primary-700 lg:p-0" aria-current="page">Home</a>
                        </li>
                        <li>
                            <a href="/#offerte" class="block py-2 pr-4 pl-3 text-gray-400 border-b border-gray-700 hover:bg-gray-700 lg:hover:bg-transparent lg:border-0 lg:hover:text-white lg:p-0">Offerte</a>
                        </li>
                        <li>
                            <a href="/projecten" class="block py-2 pr-4 pl-3 text-white border-b border-gray-700 hover:bg-gray-700 lg:hover:bg-transparent lg:border-0 lg:hover:text-white lg:p-0">Projecten</a>
                        </li>
                        <li>
                            <a href="/#footer" class="block py-2 pr-4 pl-3 text-gray-400 border-b border-gray-700 hover:bg-gray-700 lg:hover:bg-transparent lg:border-0 lg:hover:text-white lg:p-0">Contact</a>
                        </li>
                    </ul>

                </div>

            </div>
        </nav>
    </header>

    <div class="bg-no-repeat bg-cover bg-center relative" style="background-image: url(img/Badkamer-renovatie-bedrijf.jpg);">
        <div class="absolute bg-gradient-to-r from-gray-900 to-gray-900 opacity-75 inset-0 z-0"></div>
        <div>
            <div class="min-h-screen flex justify-center">

                <div class="grid grid-cols-2 gap-4 items-center z-10">
                    <div class="max-w-lg text-center sm:text-center tekst-slider">
                        <h2 class="text-4xl font-bold text-gray-100 tracking-tight">
                            Waar uw visie onze renovatiecreatie wordt.
                        </h2>

                        <p class="mt-4 text-gray-300">
                            Saadi Renovatiebedrijf
                        </p>
                    </div>

                    <div class="mx-0 max-w-xl flex rounded-2xl slider-conterin">
                        <div class="swiper-container flex-col flex  self-center ">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <blockquote class="text-left ">
                                        <div class="relative">
                                            <div class="relative">
                                                <img src="https://www.nuvakeukens.nl/site/assets/files/5310/fotonique_20200430-0129-_nuva_keukens_tilburg_-k2_-hdr-_lowres.1280x1280.jpg" alt="aji" class="object-cover w-full h-60 mx-auto rounded-t-2xl" />
                                                <div class="rounded-t-2xl absolute inset-0 z-0"></div>
                                            </div>
                                        </div>

                                        <div class="relative m-5 p-5">
                                            <svg class="absolute left-0 w-6 swiper-D9AD5B fill-current" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M464 256h-80v-64c0-35.3 28.7-64 64-64h8c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24h-8c-88.4 0-160 71.6-160 160v240c0 26.5 21.5 48 48 48h128c26.5 0 48-21.5 48-48V304c0-26.5-21.5-48-48-48zm-288 0H96v-64c0-35.3 28.7-64 64-64h8c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24h-8C71.6 32 0 103.6 0 192v240c0 26.5 21.5 48 48 48h128c26.5 0 48-21.5 48-48V304c0-26.5-21.5-48-48-48z" />
                                            </svg>
                                            <p class="text-gray-100 text-xl px-5">
                                                Een keuken op maat, speciaal voor u ontworpen. Ons team zorgt voor vakkundige montage en een snelle plaatsing, zodat u snel van uw nieuwe keuken kunt genieten.
                                            </p>
                                            <svg class="absolute right-0 w-6 swiper-D9AD5B fill-current" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M464 32H336c-26.5 0-48 21.5-48 48v128c0 26.5 21.5 48 48 48h80v64c0 35.3-28.7 64-64 64h-8c-13.3 0-24 10.7-24 24v48c0 13.3 10.7 24 24 24h8c88.4 0 160-71.6 160-160V80c0-26.5-21.5-48-48-48zm-288 0H48C21.5 32 0 53.5 0 80v128c0 26.5 21.5 48 48 48h80v64c0 35.3-28.7 64-64 64h-8c-13.3 0-24 10.7-24 24v48c0 13.3 10.7 24 24 24h8c88.4 0 160-71.6 160-160V80c0-26.5-21.5-48-48-48z" />
                                            </svg>
                                            <div class="text-sm mt-5 mx-5">
                                                <p class="mt-1 text-gray-300">Keuken</p>
                                            </div>
                                        </div>

                                    </blockquote>
                                </div>

                                <div class="swiper-slide">
                                    <blockquote class="text-left ">
                                        <div class="relative">
                                            <div class="relative">
                                                <img src="img/Tegelzetten.jpg" alt="aji" class="object-cover w-full h-60 mx-auto rounded-t-2xl" />
                                                <div class="rounded-t-2xl absolute inset-0 z-0"></div>
                                            </div>
                                        </div>

                                        <div class="relative m-5 p-5">
                                            <svg class="absolute left-0 w-6 swiper-D9AD5B fill-current" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M464 256h-80v-64c0-35.3 28.7-64 64-64h8c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24h-8c-88.4 0-160 71.6-160 160v240c0 26.5 21.5 48 48 48h128c26.5 0 48-21.5 48-48V304c0-26.5-21.5-48-48-48zm-288 0H96v-64c0-35.3 28.7-64 64-64h8c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24h-8C71.6 32 0 103.6 0 192v240c0 26.5 21.5 48 48 48h128c26.5 0 48-21.5 48-48V304c0-26.5-21.5-48-48-48z" />
                                            </svg>
                                            <p class="text-gray-100 text-xl px-5">
                                                Wij bieden een assortiment aan van wand- en vloertegels die met precisie en vakmanschap worden geplaatst, altijd met oog voor een naadloze en perfecte pasvorm.
                                            </p>
                                            <svg class="absolute right-0 w-6 swiper-D9AD5B fill-current" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M464 32H336c-26.5 0-48 21.5-48 48v128c0 26.5 21.5 48 48 48h80v64c0 35.3-28.7 64-64 64h-8c-13.3 0-24 10.7-24 24v48c0 13.3 10.7 24 24 24h8c88.4 0 160-71.6 160-160V80c0-26.5-21.5-48-48-48zm-288 0H48C21.5 32 0 53.5 0 80v128c0 26.5 21.5 48 48 48h80v64c0 35.3-28.7 64-64 64h-8c-13.3 0-24 10.7-24 24v48c0 13.3 10.7 24 24 24h8c88.4 0 160-71.6 160-160V80c0-26.5-21.5-48-48-48z" />
                                            </svg>
                                            <div class="text-sm mt-5 mx-5">
                                                <p class="mt-1 text-gray-300">Tegelen</p>
                                            </div>
                                        </div>

                                    </blockquote>
                                </div>

                                <div class="swiper-slide">
                                    <blockquote class="text-left ">
                                        <div class="relative">
                                            <div class="relative">
                                                <img src="img/img-5.jpg" alt="aji" class="object-cover w-full h-60 mx-auto rounded-t-2xl" />
                                                <div class="rounded-t-2xl absolute inset-0 z-0"></div>
                                            </div>
                                        </div>

                                        <div class="relative m-5 p-5">
                                            <svg class="absolute left-0 w-6 swiper-D9AD5B fill-current" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M464 256h-80v-64c0-35.3 28.7-64 64-64h8c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24h-8c-88.4 0-160 71.6-160 160v240c0 26.5 21.5 48 48 48h128c26.5 0 48-21.5 48-48V304c0-26.5-21.5-48-48-48zm-288 0H96v-64c0-35.3 28.7-64 64-64h8c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24h-8C71.6 32 0 103.6 0 192v240c0 26.5 21.5 48 48 48h128c26.5 0 48-21.5 48-48V304c0-26.5-21.5-48-48-48z" />
                                            </svg>
                                            <p class="text-gray-100 text-xl px-5">
                                                Onze loodgieters beschikken over uitgebreide expertise en zijn goed op de hoogte van de meest recente technologische ontwikkelingen dankzij jarenlange ervaring.
                                            </p>
                                            <svg class="absolute right-0 w-6 swiper-D9AD5B fill-current" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M464 32H336c-26.5 0-48 21.5-48 48v128c0 26.5 21.5 48 48 48h80v64c0 35.3-28.7 64-64 64h-8c-13.3 0-24 10.7-24 24v48c0 13.3 10.7 24 24 24h8c88.4 0 160-71.6 160-160V80c0-26.5-21.5-48-48-48zm-288 0H48C21.5 32 0 53.5 0 80v128c0 26.5 21.5 48 48 48h80v64c0 35.3-28.7 64-64 64h-8c-13.3 0-24 10.7-24 24v48c0 13.3 10.7 24 24 24h8c88.4 0 160-71.6 160-160V80c0-26.5-21.5-48-48-48z" />
                                            </svg>
                                            <div class="text-sm mt-5 mx-5">
                                                <p class="mt-1 text-gray-300">Loodgieten</p>
                                            </div>

                                        </div>

                                    </blockquote>
                                </div>

                            </div>

                            <div class="mt-12 swiper-pagination hidden"></div>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </div>

    <section class="bg-white dark:bg-gray-900">
        <div class="container flex flex-col items-center px-4 py-12 mx-auto xl:flex-row">
            <div class="flex justify-center xl:w-1/2">
                <img class="section-bg h-80 w-96 sm:w-[28rem] sm:h-[28rem] flex-shrink-0 object-cover " src="img/section-bg.jpg" alt="">
            </div>

            <div class="flex flex-col items-center mt-6 xl:items-start xl:w-1/2 xl:mt-0">
                <h2 class="text-3xl font-bold tracking-tight text-gray-800 xl:text-4xl dark:text-white">
                    Vanaf het allereerste moment genieten,<br>
                    Dát is onze belofte.
                </h2>

                <p class="block max-w-2xl mt-4 text-xl text-gray-500 dark:text-gray-300">Sinds ons begin in 2017 als Saadi Renovatiebedrijf, hebben we je volledig ontzorgd bij het realiseren van jouw keuken- en badkamerdromen. Wij zijn er om je van A tot Z te begeleiden. Onze toegewijde ondernemers en adviseurs staan voor je klaar, om je te helpen bij elke stap - van het ontwerp tot de installatie.
                    Bij Saadi Renovatiebedrijf is werkelijk alles mogelijk. Ontdek ons ruime aanbod aan keukens en badkamers en laat je inspireren!</p>
                <div class="mt-6 sm:-mx-2">

                    <div class="inline-flex w-full mt-4 overflow-hidden rounded-lg shadow sm:w-auto sm:mx-2 sm:mt-0">
                        <a href="#" class="afspraak-knop inline-flex items-center justify-center w-full px-5 py-3 text-base font-medium text-white transition-colors duration-150 transform sm:w-auto">
                            <svg class="w-4 h-4 inline-block mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                            </svg>
                            <span class="mx-2">
                                Contact
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="text-gray-700 body-font">
        <div class="container mx-auto flex px-4 py-12 flex-wrap">
            <div class="flex flex-col text-center w-full mb-10">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-white">
                    <svg class="inline-block w-6 h-6 ml-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v14m0 0l-3-3m3 3l3-3m-6-4v14m0 0l3-3m-3 3l-3-3"></path>
                    </svg>
                    Onze Diensten
                </h2>
            </div>
            <div class="lg:w-1/3 md:w-full mb-10 lg:mb-0 pr-4">
                <div class="h-full bg-white bg-opacity-10 rounded-lg overflow-hidden">
                    <img alt="Placeholder" class="object-cover object-center w-full h-64 mb-6" src="img/img-1.jpg">
                    <h1 class="text-lg font-bold title-font mb-3 mr-4 ml-4">
                        <i class="fas fa-utensils mr-2"></i> Keuken Plaatsen
                    </h1>
                    <p class="leading-relaxed mb-3 mr-4 ml-4">
                        Een keuken op maat, speciaal voor u ontworpen. Ons team zorgt voor vakkundige montage en een snelle plaatsing, zodat u snel van uw nieuwe keuken kunt genieten.
                    </p>
                </div>
            </div>

            <div class="lg:w-1/3 md:w-full mb-10 lg:mb-0 pr-4">
                <div class="h-full bg-white bg-opacity-10 rounded-lg overflow-hidden">
                    <img alt="Placeholder" class="object-cover object-center w-full h-64 mb-6" src="img/img-2.jpg">
                    <h1 class="text-lg font-bold title-font mb-3 mr-4 ml-4">
                        <i class="fas fa-paint-roller mr-2"></i> Decoratie
                    </h1>
                    <p class="leading-relaxed mb-3 mr-4 ml-4">
                        Van het creëren van plafondverlagingen tot het vervaardigen van koofconstructies, en zelfs het nauwkeurig inbouwen van verlichtingselementen zoals spotjes.
                    </p>
                </div>
            </div>

            <div class="lg:w-1/3 md:w-full mb-10 lg:mb-0 pr-4 ">
                <div class="h-full bg-white bg-opacity-10 rounded-lg overflow-hidden">
                    <img alt="Placeholder" class="object-cover object-center w-full h-64 mb-6" src="img/img-3.jpg">
                    <h1 class="text-lg font-bold title-font mb-3 mr-4 ml-4">
                        <i class="fas fa-bath mr-2"></i> Badkamer renovatie
                    </h1>
                    <p class="leading-relaxed mb-3 mr-4 ml-4">
                        Transformeer je badkamer met onze snelle en vakkundige renovaties. Ontdek de perfecte oplossing voor jouw ruimte met ons toegewijde team. Kies voor comfort en stijl in een handomdraai!
                    </p>
                </div>
            </div>

            <div class="hidden lg:w-1/3 md:w-full mb-10 lg:mb-0 pr-4 pt-4 additional-service" id="service1">
                <div class="h-full bg-white bg-opacity-10 rounded-lg overflow-hidden">
                    <img alt="Placeholder" class="object-cover object-center w-full h-64 mb-6" src="https://sloopbedrijfkalker.nl/wp-content/uploads/2023/09/WhatsApp-Image-2023-09-13-at-09.09.50-2-1024x768.jpeg">
                    <h1 class="text-lg font-bold title-font mb-3 mr-4 ml-4">
                        <i class="fas fa-tools mr-2"></i> Sloopwerk
                    </h1>
                    <p class="leading-relaxed mb-3 mr-4 ml-4">
                        Vakkundig sloopwerk voor jouw project. Wij zorgen voor een snelle en veilige sloop, met oog voor duurzaamheid en efficiëntie. Neem afscheid van oude structuren en maak ruimte voor iets nieuws.
                    </p>
                </div>
            </div>

            <div class="hidden lg:w-1/3 md:w-full mb-10 lg:mb-0 pr-4 pt-4 additional-service" id="service2">
                <div class="h-full bg-white bg-opacity-10 rounded-lg overflow-hidden">
                    <img alt="Placeholder" class="object-cover object-center w-full h-64 mb-6" src="https://www.klussenier.nl/upload/images/loodgieterswerk-2.jpg">
                    <h1 class="text-lg font-bold title-font mb-3 mr-4 ml-4">
                        <i class="fas fa-wrench mr-2"></i> Loodgieterswerk
                    </h1>
                    <p class="leading-relaxed mb-3 mr-4 ml-4">
                        Professioneel loodgieterswerk voor al jouw installatiebehoeften. Van reparaties tot installaties, ons toegewijde team staat klaar om hoogwaardige diensten te leveren. Vertrouw op ons vakmanschap voor betrouwbare oplossingen.
                    </p>
                </div>
            </div>

            <div class="hidden lg:w-1/3 md:w-full mb-10 lg:mb-0 pr-4 pt-4 additional-service" id="service3">
                <div class="h-full bg-white bg-opacity-10 rounded-lg overflow-hidden">
                    <img alt="Placeholder" class="object-cover object-center w-full h-64 mb-6" src="https://www.terhaartechniek.nl/images/tegelzetten-slider/tegelzetten.jpg">
                    <h1 class="text-lg font-bold title-font mb-3 mr-4 ml-4">
                        <i class="fas fa-wrench mr-2"></i> Tegelzetten
                    </h1>
                    <p class="leading-relaxed mb-3 mr-4 ml-4">
                        Professioneel tegelzetten voor een verbluffende afwerking. Ons team biedt hoogwaardige tegeldiensten, van installatie tot renovatie. Vertrouw op ons vakmanschap voor duurzame en esthetische tegeloplossingen.
                    </p>
                </div>
            </div>

            <div class="hidden lg:w-1/3 md:w-full mb-10 lg:mb-0 pr-4 pt-4 additional-service" id="service1">
                <div class="h-full bg-white bg-opacity-10 rounded-lg overflow-hidden">
                    <img alt="Placeholder" class="object-cover object-center w-full h-64 mb-6" src="https://www.mtelektro.be/wp-content/uploads/IMG_6613-scaled.jpg">
                    <h1 class="text-lg font-bold title-font mb-3 mr-4 ml-4">
                        <i class="fas fa-bolt mr-2"></i> Elektriciteit
                    </h1>
                    <p class="leading-relaxed mb-3 mr-4 ml-4">
                        Professionele elektriciteitsdiensten voor al uw behoeften. Van installatie van stopcontacten tot volledige bedrading en elektrische reparaties, ons team staat klaar om hoogwaardige service te bieden.
                    </p>
                </div>
            </div>

            <div class="hidden lg:w-1/3 md:w-full mb-10 lg:mb-0 pr-4 pt-4 additional-service" id="service2">
                <div class="h-full bg-white bg-opacity-10 rounded-lg overflow-hidden">
                    <img alt="Placeholder" class="object-cover object-center w-full h-64 mb-6" src="https://bouwsectornederland.nl/wp-content/uploads/2022/04/shutterstock_1719977707.jpg">
                    <h1 class="text-lg font-bold title-font mb-3 mr-4 ml-4">
                        <i class="fas fa-paint-roller mr-2"></i> Vloerlegging
                    </h1>
                    <p class="leading-relaxed mb-3 mr-4 ml-4">
                        Hoogwaardige vloerlegging voor elke ruimte. Ons ervaren team zorgt voor een perfecte installatie van verschillende vloermaterialen, waaronder tegels, laminaat en meer.
                    </p>

                </div>
            </div>

            <div class="hidden lg:w-1/3 md:w-full mb-10 lg:mb-0 pr-4 pt-4 additional-service" id="service3">
                <div class="h-full bg-white bg-opacity-10 rounded-lg overflow-hidden">
                    <img alt="Placeholder" class="object-cover object-center w-full h-64 mb-6" src="https://straatwerk-tuinwerk.nl/inhoud/uploads/2016/08/Enschede-Straatwerk-VG-08-1024x576.jpg">
                    <h1 class="text-lg font-bold title-font mb-3 mr-4 ml-4">
                        <i class="fas fa-leaf mr-2"></i> Tuinwerk
                    </h1>
                    <p class="leading-relaxed mb-3 mr-4 ml-4">
                        Geef uw tuin de aandacht die het verdient. Ons team van ervaren tuiniers staat klaar om verschillende tuinwerkzaamheden uit te voeren, van ontwerp en aanleg tot onderhoud.
                    </p>
                </div>
            </div>

            <div class=" mb-10 lg:mb-0 pt-4 mx-auto">
                <button onclick="toggleServices()" class="afspraak-knop inline-flex items-center justify-center w-full px-5 py-3 text-base font-medium text-white transition-colors duration-150 transform sm:w-auto">Meer Diensten</button>
            </div>

        </div>
    </section>

    <section id="projecten" class="bg-white">
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-8 lg:px-6 ">
            <div class="mx-auto max-w-screen-sm text-center mb-8 lg:mb-16">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">

                    <svg class="inline-block w-6 h-6  ml-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A8.962 8.962 0 0 0 24 7c0-4.418-3.582-8-8-8s-8 3.582-8 8a8.962 8.962 0 0 0 2.745 6.443M16.172 21.172a1 1 0 0 0 0 1.414c.39.39 1.022.39 1.414 0a9.956 9.956 0 0 1 0-14.142 1 1 0 0 0-1.414 0 9.956 9.956 0 0 1 0 14.142zM12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10-4.486-10-10-10z"></path>
                    </svg>
                    Projecten
                </h2>
                <p class="font-light text-gray-500 lg:mb-16 sm:text-xl dark:text-gray-400">Hieronder ziet u een selectie van enkele projecten die wij succesvol hebben uitgevoerd</p>
            </div>

            <div class="flex flex-wrap justify-center items-center">

                <div class="glide">
                    <div class="glide__track" data-glide-el="track">
                        <ul class="glide__slides">
                            <li class="glide__slide">
                                <div class="card bg-white rounded-lg shadow-lg overflow-hidden">
                                    <img class="w-full h-80 object-cover object-center" src="https://cdn.shopify.com/s/files/1/0696/0385/2574/files/WhatsApp_Image_2023-08-10_at_20.52.211_2048x2048.jpg?v=1693345252" alt="Card Image">
                                </div>
                            </li>
                            <li class="glide__slide">
                                <div class="card bg-white rounded-lg shadow-lg overflow-hidden">
                                    <img class="w-full h-80 object-cover object-center" src="https://cdn.shopify.com/s/files/1/0696/0385/2574/files/WhatsApp_Image_2023-08-10_at_20.52.26_2048x2048.jpg?v=1693347571" alt="Card Image">
                                </div>
                            </li>
                            <li class="glide__slide">
                                <div class="card bg-white rounded-lg shadow-lg overflow-hidden">
                                    <img class="w-full h-80 object-cover object-center" src="https://cdn.shopify.com/s/files/1/0696/0385/2574/files/54839cfe-0809-4507-970f-58644756db33_9c6940d2-554c-46a1-851b-8f07eda171cf_2048x2048.jpg?v=1693348127" alt="Card Image">
                                </div>
                            </li>
                            <li class="glide__slide">
                                <div class="card bg-white rounded-lg shadow-lg overflow-hidden">
                                    <img class="w-full h-80 object-cover object-center" src="https://cdn.shopify.com/s/files/1/0696/0385/2574/files/6e107804-feda-41c5-9d3a-a8f07108024f_2048x2048.jpg?v=1693348183" alt="Card Image">
                                </div>
                            </li>
                            <li class="glide__slide">
                                <div class="card bg-white rounded-lg shadow-lg overflow-hidden">
                                    <img class="w-full h-80 object-cover object-center" src="https://cdn.shopify.com/s/files/1/0696/0385/2574/files/steven-ungermann-1AF5hP6F4tI-unsplash_2048x2048.jpg?v=1693348212" alt="Card Image">
                                </div>
                            </li>

                        </ul>
                    </div>
                    <div class="glide__arrows" data-glide-el="controls">
                        <button class="glide__arrow glide__arrow--left" data-glide-dir="<">
                            <i class="fas fa-chevron-left"></i>
                        </button>
                        <button class="glide__arrow glide__arrow--right" data-glide-dir=">">
                            <i class="fas fa-chevron-right"></i>
                        </button>
                    </div>
                </div>


            </div>

    </section>

    <section id="offerte">
        <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
            <h2 class="mb-4 text-xl font-bold">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" className="w-6 h-6" class="inline-block w-6 h-6  ml-2">
                    <path strokeLinecap="round" strokeLinejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
                </svg>
                Afspraak Maken
            </h2>
            <form action="process_form.php" method="post">
                <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                    <div>
                        <label for="salutation" class="block mb-2 text-sm font-medium text-white">Aanhef</label>
                        <select id="salutation" name="salutation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option value="Dhr.">Dhr.</option>
                            <option value="Dhr.">Mevr.</option>
                        </select>
                    </div>
                    <div>
                        <label for="lastName" class="block mb-2 text-sm font-medium text-white">Achternaam *</label>
                        <input type="text" name="lastName" id="lastName" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Uw achternaam" required="">
                    </div>
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-white">E-mailadres *</label>
                        <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Uw e-mailadres" required="">
                    </div>
                    <div>
                        <label for="phone" class="block mb-2 text-sm font-medium text-white">Telefoonnummer *</label>
                        <input type="tel" name="phone" id="phone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Uw telefoonnummer" required="">
                    </div>
                    <div>
                        <label for="preferredDate" class="block mb-2 text-sm font-medium text-white">Kies een voorkeurdatum *</label>
                        <input type="date" name="preferredDate" id="preferredDate" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required="">
                    </div>
                    <div>
                        <label for="preferredTime" class="block mb-2 text-sm font-medium text-white">Kies een voorkeurstijd *</label>
                        <input type="time" name="preferredTime" id="preferredTime" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required="">
                    </div>
                    <div class="sm:col-span-2">
                        <label for="spaceDetails" class="block mb-2 text-sm font-medium text-white">Afmetingen en eventuele voorkeuren en ideeën:</label>
                        <textarea id="spaceDetails" name="spaceDetails" rows="8" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Uw bericht hier"></textarea>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="terms" class="block mb-2 text-sm font-medium text-white">Voorwaarden *</label>
                        <div class="flex items-center">
                            <input type="checkbox" name="terms" id="terms" class="form-checkbox h-4 w-4 text-primary-600 rounded dark:text-primary-400 accent-black">
                            <span class="ml-2 text-sm text-white">Ja, ik sta open voor contact van Saadi om een afspraak te regelen.</span>
                        </div>
                    </div>
                </div>
                <div class="sm:col-span-2">
                    <button type="submit" class="afspraak-knop inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" className="w-6 h-6" class="inline-block w-6 h-6  mr-2">
                            <path strokeLinecap="round" strokeLinejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
                        </svg>
                        Afspraak aanvragen
                    </button>
                </div>
            </form>
        </div>
    </section>

    <footer id="footer" class="bg-white  shadow sm:flex sm:items-center sm:justify-between p-4 sm:p-6 xl:p-8 dark:bg-gray-800 antialiased">
        <p class="mb-4 text-sm text-center text-gray-500 dark:text-gray-400 sm:mb-0">
            &copy; 2023 Saadi Renovatiebedrijf
        </p>

        <div class="flex justify-center items-center space-x-1">
            <a href="https://web.whatsapp.com/send?phone=31619187075" data-tooltip-target="tooltip-Whats App" class="inline-flex justify-center p-2 text-gray-500 rounded-lg cursor-pointer dark:text-gray-400 dark:hover:text-white hover:text-gray-900 hover:bg-gray-100 dark:hover:bg-gray-600">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 " viewBox="0 0 48 48">
                    <path fill="#fff" d="M4.868,43.303l2.694-9.835C5.9,30.59,5.026,27.324,5.027,23.979C5.032,13.514,13.548,5,24.014,5c5.079,0.002,9.845,1.979,13.43,5.566c3.584,3.588,5.558,8.356,5.556,13.428c-0.004,10.465-8.522,18.98-18.986,18.98c-0.001,0,0,0,0,0h-0.008c-3.177-0.001-6.3-0.798-9.073-2.311L4.868,43.303z"></path>
                    <path fill="#fff" d="M4.868,43.803c-0.132,0-0.26-0.052-0.355-0.148c-0.125-0.127-0.174-0.312-0.127-0.483l2.639-9.636c-1.636-2.906-2.499-6.206-2.497-9.556C4.532,13.238,13.273,4.5,24.014,4.5c5.21,0.002,10.105,2.031,13.784,5.713c3.679,3.683,5.704,8.577,5.702,13.781c-0.004,10.741-8.746,19.48-19.486,19.48c-3.189-0.001-6.344-0.788-9.144-2.277l-9.875,2.589C4.953,43.798,4.911,43.803,4.868,43.803z"></path>
                    <path fill="#cfd8dc" d="M24.014,5c5.079,0.002,9.845,1.979,13.43,5.566c3.584,3.588,5.558,8.356,5.556,13.428c-0.004,10.465-8.522,18.98-18.986,18.98h-0.008c-3.177-0.001-6.3-0.798-9.073-2.311L4.868,43.303l2.694-9.835C5.9,30.59,5.026,27.324,5.027,23.979C5.032,13.514,13.548,5,24.014,5 M24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974 M24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974 M24.014,4C24.014,4,24.014,4,24.014,4C12.998,4,4.032,12.962,4.027,23.979c-0.001,3.367,0.849,6.685,2.461,9.622l-2.585,9.439c-0.094,0.345,0.002,0.713,0.254,0.967c0.19,0.192,0.447,0.297,0.711,0.297c0.085,0,0.17-0.011,0.254-0.033l9.687-2.54c2.828,1.468,5.998,2.243,9.197,2.244c11.024,0,19.99-8.963,19.995-19.98c0.002-5.339-2.075-10.359-5.848-14.135C34.378,6.083,29.357,4.002,24.014,4L24.014,4z"></path>
                    <path fill="#40c351" d="M35.176,12.832c-2.98-2.982-6.941-4.625-11.157-4.626c-8.704,0-15.783,7.076-15.787,15.774c-0.001,2.981,0.833,5.883,2.413,8.396l0.376,0.597l-1.595,5.821l5.973-1.566l0.577,0.342c2.422,1.438,5.2,2.198,8.032,2.199h0.006c8.698,0,15.777-7.077,15.78-15.776C39.795,19.778,38.156,15.814,35.176,12.832z"></path>
                    <path fill="#fff" fill-rule="evenodd" d="M19.268,16.045c-0.355-0.79-0.729-0.806-1.068-0.82c-0.277-0.012-0.593-0.011-0.909-0.011c-0.316,0-0.83,0.119-1.265,0.594c-0.435,0.475-1.661,1.622-1.661,3.956c0,2.334,1.7,4.59,1.937,4.906c0.237,0.316,3.282,5.259,8.104,7.161c4.007,1.58,4.823,1.266,5.693,1.187c0.87-0.079,2.807-1.147,3.202-2.255c0.395-1.108,0.395-2.057,0.277-2.255c-0.119-0.198-0.435-0.316-0.909-0.554s-2.807-1.385-3.242-1.543c-0.435-0.158-0.751-0.237-1.068,0.238c-0.316,0.474-1.225,1.543-1.502,1.859c-0.277,0.317-0.554,0.357-1.028,0.119c-0.474-0.238-2.002-0.738-3.815-2.354c-1.41-1.257-2.362-2.81-2.639-3.285c-0.277-0.474-0.03-0.731,0.208-0.968c0.213-0.213,0.474-0.554,0.712-0.831c0.237-0.277,0.316-0.475,0.474-0.791c0.158-0.317,0.079-0.594-0.04-0.831C20.612,19.329,19.69,16.983,19.268,16.045z" clip-rule="evenodd"></path>
                </svg>
                <span class="sr-only">Whats App</span>
            </a>
            <div id="tooltip-Whats App" role="tooltip" class="inline-block absolute invisible z-10 py-2 px-3 text-sm font-medium text-white icon-bg rounded-lg shadow-sm opacity-0 transition-opacity duration-300 tooltip dark:bg-gray-700">
                +31 619187075
                <div class="tooltip-arrow" data-popper-arrow></div>
            </div>
            <a href="https://www.instagram.com/saadi.renovatiebedrijf?igsh=YmczdGJwd3ljeXA3" data-tooltip-target="tooltip-instragram" class="inline-flex justify-center p-2 text-gray-500 rounded-lg cursor-pointer dark:text-gray-400 dark:hover:text-white hover:text-gray-900 hover:bg-gray-100 dark:hover:bg-gray-600" _blank>
                <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 " viewBox="0 0 48 48">
                    <radialGradient id="yOrnnhliCrdS2gy~4tD8ma_Xy10Jcu1L2Su_gr1" cx="19.38" cy="42.035" r="44.899" gradientUnits="userSpaceOnUse">
                        <stop offset="0" stop-color="#fd5"></stop>
                        <stop offset=".328" stop-color="#ff543f"></stop>
                        <stop offset=".348" stop-color="#fc5245"></stop>
                        <stop offset=".504" stop-color="#e64771"></stop>
                        <stop offset=".643" stop-color="#d53e91"></stop>
                        <stop offset=".761" stop-color="#cc39a4"></stop>
                        <stop offset=".841" stop-color="#c837ab"></stop>
                    </radialGradient>
                    <path fill="url(#yOrnnhliCrdS2gy~4tD8ma_Xy10Jcu1L2Su_gr1)" d="M34.017,41.99l-20,0.019c-4.4,0.004-8.003-3.592-8.008-7.992l-0.019-20	c-0.004-4.4,3.592-8.003,7.992-8.008l20-0.019c4.4-0.004,8.003,3.592,8.008,7.992l0.019,20	C42.014,38.383,38.417,41.986,34.017,41.99z"></path>
                    <radialGradient id="yOrnnhliCrdS2gy~4tD8mb_Xy10Jcu1L2Su_gr2" cx="11.786" cy="5.54" r="29.813" gradientTransform="matrix(1 0 0 .6663 0 1.849)" gradientUnits="userSpaceOnUse">
                        <stop offset="0" stop-color="#4168c9"></stop>
                        <stop offset=".999" stop-color="#4168c9" stop-opacity="0"></stop>
                    </radialGradient>
                    <path fill="url(#yOrnnhliCrdS2gy~4tD8mb_Xy10Jcu1L2Su_gr2)" d="M34.017,41.99l-20,0.019c-4.4,0.004-8.003-3.592-8.008-7.992l-0.019-20	c-0.004-4.4,3.592-8.003,7.992-8.008l20-0.019c4.4-0.004,8.003,3.592,8.008,7.992l0.019,20	C42.014,38.383,38.417,41.986,34.017,41.99z"></path>
                    <path fill="#fff" d="M24,31c-3.859,0-7-3.14-7-7s3.141-7,7-7s7,3.14,7,7S27.859,31,24,31z M24,19c-2.757,0-5,2.243-5,5	s2.243,5,5,5s5-2.243,5-5S26.757,19,24,19z"></path>
                    <circle cx="31.5" cy="16.5" r="1.5" fill="#fff"></circle>
                    <path fill="#fff" d="M30,37H18c-3.859,0-7-3.14-7-7V18c0-3.86,3.141-7,7-7h12c3.859,0,7,3.14,7,7v12	C37,33.86,33.859,37,30,37z M18,13c-2.757,0-5,2.243-5,5v12c0,2.757,2.243,5,5,5h12c2.757,0,5-2.243,5-5V18c0-2.757-2.243-5-5-5H18z"></path>
                </svg>
                <span class="sr-only">Instragram</span>
            </a>
            <div id="tooltip-instragram" role="tooltip" class="inline-block absolute invisible z-10 py-2 px-3 text-sm font-medium text-white icon-bg rounded-lg shadow-sm opacity-0 transition-opacity duration-300 tooltip dark:bg-gray-700">
                Saadi_renovatiebedrijf
                <div class="tooltip-arrow" data-popper-arrow></div>
            </div>
            <a href="#" data-tooltip-target="tooltip-gmail" class="inline-flex justify-center p-2 text-gray-500 rounded-lg cursor-pointer dark:text-gray-400 dark:hover:text-white hover:text-gray-900 hover:bg-gray-100 dark:hover:bg-gray-600">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" viewBox="0 0 48 48">
                    <path fill="#4caf50" d="M45,16.2l-5,2.75l-5,4.75L35,40h7c1.657,0,3-1.343,3-3V16.2z"></path>
                    <path fill="#1e88e5" d="M3,16.2l3.614,1.71L13,23.7V40H6c-1.657,0-3-1.343-3-3V16.2z"></path>
                    <polygon fill="#e53935" points="35,11.2 24,19.45 13,11.2 12,17 13,23.7 24,31.95 35,23.7 36,17"></polygon>
                    <path fill="#c62828" d="M3,12.298V16.2l10,7.5V11.2L9.876,8.859C9.132,8.301,8.228,8,7.298,8h0C4.924,8,3,9.924,3,12.298z"></path>
                    <path fill="#fbc02d" d="M45,12.298V16.2l-10,7.5V11.2l3.124-2.341C38.868,8.301,39.772,8,40.702,8h0 C43.076,8,45,9.924,45,12.298z"></path>
                </svg>
                <span class="sr-only">Gmail</span>
            </a>
            <div id="tooltip-gmail" role="tooltip" class="inline-block absolute invisible z-10 py-2 px-3 text-sm font-medium text-white icon-bg rounded-lg shadow-sm opacity-0 transition-opacity duration-300 tooltip dark:bg-gray-700">
                saadirenovatiebedrijf@gmail.com
                <div class="tooltip-arrow" data-popper-arrow></div>
            </div>
            <a href="https://maps.app.goo.gl/fDwFKB1FAXQZCoom8" data-tooltip-target="tooltip-dribbble" class="inline-flex justify-center p-2 text-gray-500 rounded-lg cursor-pointer dark:text-gray-400 dark:hover:text-white hover:text-gray-900 hover:bg-gray-100 dark:hover:bg-gray-600">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-gray-500 ">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                </svg>

                <span class="sr-only">Dribbble</span>
            </a>
            <div id="tooltip-dribbble" role="tooltip" class="inline-block absolute invisible z-10 py-2 px-3 text-sm font-medium text-white icon-bg rounded-lg shadow-sm opacity-0 transition-opacity duration-300 tooltip dark:bg-gray-700">
                Lange heul 196 <br>
                1403NS Bussum
                <div class="tooltip-arrow" data-popper-arrow></div>
            </div>
        </div>

        <div class="flex justify-center items-center space-x-1">
            <p class="mb-4 text-sm text-center text-gray-500 dark:text-gray-400 sm:mb-0">
                KVK: 88042308
            </p>

        </div>
    </footer>

    <script crossorigin="anonymous" defer src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.3.2/swiper-bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            new Swiper('.swiper-container', {
                loop: true,
                slidesPerView: 1,
                spaceBetween: 8,
                autoplay: {
                    delay: 8000,
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                breakpoints: {
                    645: {
                        slidesPerView: 1.5,
                    },
                    1024: {
                        slidesPerView: 1,
                    },
                },
            })
        })
    </script>

    <script src="https://cdn.jsdelivr.net/npm/@glidejs/glide/dist/glide.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            new Glide('.glide', {
                type: 'carousel',
                startAt: 0,
                perView: 3, // Number of visible slides
                focusAt: 'center',
                gap: 20, // Space between slides
                breakpoints: {
                    768: {
                        perView: 1,
                    },
                    1024: {
                        perView: 2,
                    },
                },
            }).mount();
        });
    </script>
    <script>
        $(document).ready(function() {
            // Wanneer er wordt geklikt op een koppeling in de header
            $('header a').on('click', function(e) {
                e.preventDefault(); // Voorkom standaard linkgedrag

                // Haal de doel-koppeling op en de offset van de header
                var target = $($(this).attr('href'));
                var offset = $('header').height();

                // Animeer het scrollen naar het doel
                $('html, body').animate({
                    scrollTop: target.offset().top - offset
                }, 800); // Pas de snelheid aan naar wens
            });
        });
    </script>

    <script>
        let showAdditionalServices = false;

        function toggleServices() {
            const additionalServices = document.querySelectorAll('.additional-service');

            showAdditionalServices = !showAdditionalServices;

            additionalServices.forEach(service => {
                if (showAdditionalServices) {
                    service.classList.remove('hidden');
                } else {
                    service.classList.add('hidden');
                }
            });
        }
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.0.0/flowbite.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

</body>

</html>