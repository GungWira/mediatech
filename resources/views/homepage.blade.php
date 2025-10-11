<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=montserrat:400,500,600,700,800,900" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <style>
          /* Partner Slider Animation */
          @keyframes infinite-scroll {
            0% { transform: translateX(0); }
            100% { transform: translateX(-50%); }
          }

          .animate-infinite-scroll {
            animation: infinite-scroll 20s linear infinite;
            width: calc(200%);
          }
        </style>
    </head>
    <body class="bg-white">
        <section
        class="w-full flex justify-center items-center bg-[#0C192B] bg-cover bg-center relative pt-20"
        style="background-image: url('/assets/bgheader.png');"
        id="home"
      >
      <x-navbar/>
        <div class="w-full min-h-[80vh] max-w-6xl px-4 md:px-6 flex justify-center items-center">
          <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12 items-center w-full">
            <div class="flex flex-col justify-center items-start md:items-center lg:items-start gap-4 text-left md:text-center lg:text-left">
              <p class="italic opacity-60 text-white text-sm md:text-base">
                Indonesian Digital Company
              </p>
              <h1 class="font-bold text-3xl md:text-4xl lg:text-6xl leading-tight text-white p-2 rounded">
                Powered by Smart Tech 
              </h1>
              <p class="text-sm md:text-base opacity-60 text-white max-w-lg">
                Solusi digital terintegrasi untuk mendukung transformasi dan
                pertumbuhan bisnis Anda di era teknologi.
              </p>
              <div class="mt-4 w-full flex justify-start md:justify-center lg:justify-start md:mb-8">
                <button class="bg-blue-600 hover:bg-blue-700 text-white font-medium py-3 px-6 rounded transition-colors duration-200">
                  Get in touch
                  <img src="dist/arrow-icon.webp" alt="" class="w-4 h-4 inline-block ml-2" />
                </button>
              </div>
            </div>

            <div class="flex justify-center lg:justify-end items-center order-first lg:order-last">
              <img
                src="/dist/header-home.png"
                alt="Mediatech Hero Image"
                class="w-full max-w-md lg:max-w-none lg:w-4/5 h-auto object-contain"
              />
            </div>
          </div>
        </div>
      </section>

      <!-- Partner Slider Section -->
      <section class="w-full bg-[#0C192B] py-8" role="region" aria-label="Partner section">
        <div class="w-full overflow-hidden">
          <div class="flex animate-infinite-scroll whitespace-nowrap">
            <!-- First set of partners -->
            <div class="flex-shrink-0 mx-8 flex justify-center items-center min-w-[100px]">
              <img
                src="dist/partners/partner (1).svg"
                alt="Partner 1"
                class="h-8 md:h-10 w-auto object-contain filter brightness-0 invert opacity-60 hover:opacity-80 transition-opacity duration-300"
                loading="lazy"
              />
            </div>
            <div class="flex-shrink-0 mx-8 flex justify-center items-center min-w-[100px]">
              <img
                src="dist/partners/partner (2).svg"
                alt="Partner 2"
                class="h-8 md:h-10 w-auto object-contain filter brightness-0 invert opacity-60 hover:opacity-80 transition-opacity duration-300"
                loading="lazy"
              />
            </div>
            <div class="flex-shrink-0 mx-8 flex justify-center items-center min-w-[100px]">
              <img
                src="dist/partners/partner (3).svg"
                alt="Partner 3"
                class="h-8 md:h-10 w-auto object-contain filter brightness-0 invert opacity-60 hover:opacity-80 transition-opacity duration-300"
                loading="lazy"
              />
            </div>
            <div class="flex-shrink-0 mx-8 flex justify-center items-center min-w-[100px]">
              <img
                src="dist/partners/partner (4).svg"
                alt="Partner 4"
                class="h-8 md:h-10 w-auto object-contain filter brightness-0 invert opacity-60 hover:opacity-80 transition-opacity duration-300"
                loading="lazy"
              />
            </div>
            <div class="flex-shrink-0 mx-8 flex justify-center items-center min-w-[100px]">
              <img
                src="dist/partners/partner (5).svg"
                alt="Partner 5"
                class="h-8 md:h-10 w-auto object-contain filter brightness-0 invert opacity-60 hover:opacity-80 transition-opacity duration-300"
                loading="lazy"
              />
            </div>
            <div class="flex-shrink-0 mx-8 flex justify-center items-center min-w-[100px]">
              <img
                src="dist/partners/partner (6).svg"
                alt="Partner 6"
                class="h-8 md:h-10 w-auto object-contain filter brightness-0 invert opacity-60 hover:opacity-80 transition-opacity duration-300"
                loading="lazy"
              />
            </div>

            <!-- Second set of partners (exact duplicate) -->
            <div class="flex-shrink-0 mx-8 flex justify-center items-center min-w-[100px]">
              <img
                src="dist/partners/partner (1).svg"
                alt="Partner 1"
                class="h-8 md:h-10 w-auto object-contain filter brightness-0 invert opacity-60 hover:opacity-80 transition-opacity duration-300"
                loading="lazy"
              />
            </div>
            <div class="flex-shrink-0 mx-8 flex justify-center items-center min-w-[100px]">
              <img
                src="dist/partners/partner (2).svg"
                alt="Partner 2"
                class="h-8 md:h-10 w-auto object-contain filter brightness-0 invert opacity-60 hover:opacity-80 transition-opacity duration-300"
                loading="lazy"
              />
            </div>
            <div class="flex-shrink-0 mx-8 flex justify-center items-center min-w-[100px]">
              <img
                src="dist/partners/partner (3).svg"
                alt="Partner 3"
                class="h-8 md:h-10 w-auto object-contain filter brightness-0 invert opacity-60 hover:opacity-80 transition-opacity duration-300"
                loading="lazy"
              />
            </div>
            <div class="flex-shrink-0 mx-8 flex justify-center items-center min-w-[100px]">
              <img
                src="dist/partners/partner (4).svg"
                alt="Partner 4"
                class="h-8 md:h-10 w-auto object-contain filter brightness-0 invert opacity-60 hover:opacity-80 transition-opacity duration-300"
                loading="lazy"
              />
            </div>
            <div class="flex-shrink-0 mx-8 flex justify-center items-center min-w-[100px]">
              <img
                src="dist/partners/partner (5).svg"
                alt="Partner 5"
                class="h-8 md:h-10 w-auto object-contain filter brightness-0 invert opacity-60 hover:opacity-80 transition-opacity duration-300"
                loading="lazy"
              />
            </div>
            <div class="flex-shrink-0 mx-8 flex justify-center items-center min-w-[100px]">
              <img
                src="dist/partners/partner (6).svg"
                alt="Partner 6"
                class="h-8 md:h-10 w-auto object-contain filter brightness-0 invert opacity-60 hover:opacity-80 transition-opacity duration-300"
                loading="lazy"
              />
            </div>

            <!-- Third set of partners (exact duplicate) -->
            <div class="flex-shrink-0 mx-8 flex justify-center items-center min-w-[100px]">
              <img
                src="dist/partners/partner (1).svg"
                alt="Partner 1"
                class="h-8 md:h-10 w-auto object-contain filter brightness-0 invert opacity-60 hover:opacity-80 transition-opacity duration-300"
                loading="lazy"
              />
            </div>
            <div class="flex-shrink-0 mx-8 flex justify-center items-center min-w-[100px]">
              <img
                src="dist/partners/partner (2).svg"
                alt="Partner 2"
                class="h-8 md:h-10 w-auto object-contain filter brightness-0 invert opacity-60 hover:opacity-80 transition-opacity duration-300"
                loading="lazy"
              />
            </div>
            <div class="flex-shrink-0 mx-8 flex justify-center items-center min-w-[100px]">
              <img
                src="dist/partners/partner (3).svg"
                alt="Partner 3"
                class="h-8 md:h-10 w-auto object-contain filter brightness-0 invert opacity-60 hover:opacity-80 transition-opacity duration-300"
                loading="lazy"
              />
            </div>
            <div class="flex-shrink-0 mx-8 flex justify-center items-center min-w-[100px]">
              <img
                src="dist/partners/partner (4).svg"
                alt="Partner 4"
                class="h-8 md:h-10 w-auto object-contain filter brightness-0 invert opacity-60 hover:opacity-80 transition-opacity duration-300"
                loading="lazy"
              />
            </div>
            <div class="flex-shrink-0 mx-8 flex justify-center items-center min-w-[100px]">
              <img
                src="dist/partners/partner (5).svg"
                alt="Partner 5"
                class="h-8 md:h-10 w-auto object-contain filter brightness-0 invert opacity-60 hover:opacity-80 transition-opacity duration-300"
                loading="lazy"
              />
            </div>
            <div class="flex-shrink-0 mx-8 flex justify-center items-center min-w-[100px]">
              <img
                src="dist/partners/partner (6).svg"
                alt="Partner 6"
                class="h-8 md:h-10 w-auto object-contain filter brightness-0 invert opacity-60 hover:opacity-80 transition-opacity duration-300"
                loading="lazy"
              />
            </div>
          </div>
        </div>
      </section>

      <section class="relative w-full flex flex-col items-center py-16 md:py-20 bg-white overflow-hidden">
      <div class="absolute top-[240px] right-0 md:bottom-[430px] md:top-[270px] md:right-0 lg:right-35 pointer-events-none z-20">
        <img
          src="/dist/gear.svg"
          alt="Gear ornament"
          class="w-20 h-20 md:w-24 md:h-24 lg:w-40 lg:h-40 text-blue-500"
        />
      </div>

      <div class="absolute bottom-6 left-4 md:bottom-6 md:left-8 lg:left-40  pointer-events-none z-20">
        <img
          src="/dist/gear.svg"
          alt="Gear ornament"
          class="w-16 h-16 md:w-20 md:h-20 lg:w-28 lg:h-28 text-blue-400"
        />
      </div>

      <div class="w-full max-w-6xl px-4 md:px-6 flex justify-center items-center flex-col relative z-10">
        <div class="text-center space-y-4 md:space-y-6">
          <h3 class="text-blue-600 tracking-widest text-sm font-medium">
            ABOUT US
          </h3>
          <h2 class="text-[#202020] text-2xl md:text-3xl lg:text-4xl leading-tight font-bold max-w-xl mx-auto">
            Technology Partner for Digital Transformation
          </h2>
          <p class="text-sm md:text-base opacity-80 leading-relaxed max-w-3xl mx-auto">
            Mediatech Indonesia telah membantu berbagai sektor mengembangkan
            bisnis melalui smart tech dan digital ecosystem yang scalable
            selama lebih dari satu dekade.
          </p>
        </div>

        <div class="relative mt-8 md:mt-12 w-full max-w-6xl rounded-2xl overflow-hidden shadow-lg bg-[#d9d9d9] z-0">
          <img
            src="/dist/video-placeholder.png"
            alt="Video about Mediatech"
            class="w-full h-64 md:h-80 lg:h-96 object-cover brightness-75"
          />
          <button
            class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 bg-white bg-opacity-80 rounded-full shadow-lg hover:scale-105 transition-transform"
            aria-label="Play Video"
          >
            <svg width="60" height="60" viewBox="0 0 48 48" fill="none" class="md:w-20 md:h-20">
              <circle
                cx="24"
                cy="24"
                r="24"
                fillOpacity="0.15"
              />
              <polygon points="20,16 34,24 20,32" fill="#101010" />
            </svg>
          </button>
        </div>
      </div>
    </section>

    <!-- Services Section -->
    <section class="w-full py-16 md:py-20 bg-white flex justify-center items-center">
      <div class="w-full max-w-6xl px-4 md:px-6 flex justify-center items-center flex-col">
        <div class="w-full mx-auto">
          <!-- Header -->
          <div class="flex flex-col lg:flex-row lg:items-end gap-6 md:gap-8 mb-8 md:mb-12">
            <div class="lg:w-1/2">
              <h3 class="text-blue-600 tracking-widest text-sm font-medium">
                SERVICES
              </h3>
              <h2 class="text-[#202020] mt-2 text-2xl md:text-3xl lg:text-4xl leading-tight font-bold">
                Smart, Scalable, and Integrated Digital Solutions
              </h2>
            </div>
            <div class="lg:w-1/2 flex justify-start lg:justify-end items-end">
              <p class="text-sm md:text-base opacity-80 leading-relaxed text-left lg:text-right lg:max-w-[540px] lg:pl-[100px]">
                Kami menyediakan layanan berbasis teknologi, mulai dari UI/UX,
                software development, hingga cloud-based solutions — semuanya
                dirancang untuk pertumbuhan yang berkelanjutan dan efisien.
              </p>
            </div>
          </div>

          <!-- Services Grid -->
          <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-4 auto-rows-fr lg:h-[600px]">
            <!-- Koding Akademi - Top Left -->
            <div class="lg:col-span-6 lg:row-span-1 relative rounded-2xl overflow-hidden shadow-lg group cursor-pointer transition-transform duration-300 hover:scale-[1.02] min-h-[250px] md:min-h-[300px]">
              <!-- Background placeholder -->
              <div class="absolute inset-0 bg-[#d9d9d9]"></div>

              <!-- Image -->
              <img
                src="/dist/services (1).png"
                alt="Koding Akademi"
                class="absolute inset-0 w-full h-full object-cover"
              />

              <!-- Content -->
              <div class="absolute bottom-0 left-0 right-0 p-4 md:p-6 text-white backdrop-blur-sm bg-black/30">
                <div class="flex items-center gap-3 mb-3">
                  <div class="w-3 h-3 bg-white rounded-full"></div>
                  <h3 class="text-lg md:text-xl font-bold">Koding Akademi</h3>
                </div>
                <p class="text-gray-200 text-sm leading-relaxed">
                  Kursus belajar teknologi di Indonesia untuk berbagai kalangan usia
                </p>
              </div>
            </div>

            <!-- Virtual Office - Top Right -->
            <div class="lg:col-span-6 lg:row-span-1 relative rounded-2xl overflow-hidden shadow-lg group cursor-pointer transition-transform duration-300 hover:scale-[1.02] min-h-[250px] md:min-h-[300px]">
              <!-- Background placeholder -->
              <div class="absolute inset-0 bg-[#d9d9d9]"></div>

              <!-- Image -->
              <img
                src="/dist/services (2).png"
                alt="Virtual Office"
                class="absolute inset-0 w-full h-full object-cover"
              />

              <!-- Content -->
              <div class="absolute bottom-0 left-0 right-0 p-4 md:p-6 text-white backdrop-blur-sm bg-black/30">
                <div class="flex items-center gap-3 mb-3">
                  <div class="w-3 h-3 bg-white rounded-full"></div>
                  <h3 class="text-lg md:text-xl font-bold">Virtual Office</h3>
                </div>
                <p class="text-gray-200 text-sm leading-relaxed">
                  Kursus belajar teknologi di Indonesia...
                </p>
              </div>
            </div>

            <!-- FNB Bali - Bottom Left (Smaller) -->
            <div class="lg:col-span-4 lg:row-span-1 relative rounded-2xl overflow-hidden shadow-lg group cursor-pointer transition-transform duration-300 hover:scale-[1.02] min-h-[250px] md:min-h-[300px] mt-2">
              <!-- Background placeholder -->
              <div class="absolute inset-0 bg-[#d9d9d9]"></div>

              <!-- Image -->
              <img
                src="/dist/services (3).png"
                alt="FNB Bali"
                class="absolute inset-0 w-full h-full object-cover"
              />

              <!-- Content -->
              <div class="absolute bottom-0 left-0 right-0 p-4 md:p-6 text-white backdrop-blur-sm bg-black/30">
                <div class="flex items-center gap-3 mb-3">
                  <div class="w-3 h-3 bg-white rounded-full"></div>
                  <h3 class="text-lg md:text-xl font-bold">FNB Bali</h3>
                </div>
                <p class="text-gray-200 text-sm leading-relaxed">
                  Kursus belajar teknologi di Indonesia...
                </p>
              </div>
            </div>

            <!-- Software House - Bottom Right (Larger) -->
            <div class="lg:col-span-8 lg:row-span-1 relative rounded-2xl overflow-hidden shadow-lg group cursor-pointer transition-transform duration-300 hover:scale-[1.02] min-h-[250px] md:min-h-[300px] mt-2">
              <!-- Background placeholder -->
              <div class="absolute inset-0 bg-[#d9d9d9]"></div>

              <!-- Image -->
              <img
                src="/dist/services.png"
                alt="Software House"
                class="absolute inset-0 w-full h-full object-cover"
              />

              <!-- Content -->
              <div class="absolute bottom-0 left-0 right-0 p-4 md:p-6 text-white backdrop-blur-sm bg-black/30">
                <div class="flex items-center gap-3 mb-3">
                  <div class="w-3 h-3 bg-white rounded-full"></div>
                  <h3 class="text-lg md:text-xl font-bold">Software House</h3>
                </div>
                <p class="text-gray-200 text-sm leading-relaxed">
                  Kursus belajar teknologi di Indonesia untuk berbagai kalangan usia
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Why Choose Us Section -->
    <section class="relative w-full py-16 md:py-20 bg-cover bg-center bg-no-repeat flex justify-center items-center overflow-hidden" style="background-image: url('dist/backgrounds/why-choose-us.png');">
      <!-- Gear Ornaments -->
      <div class="absolute top-0 right-0 transform -translate-y-8 md:top-0 md:right-0 pointer-events-none z-20 lg:top-4 lg:right-0 lg:transform-none">
        <img
          src="/dist/gear.svg"
          alt="Gear ornament"
          class="w-24 h-24 md:w-32 md:h-32 lg:w-40 lg:h-40"
        />
      </div>

      <div class="absolute bottom-0 left-0 md:bottom-0 md:left-0 pointer-events-none z-20 transform translate-y-20 -translate-x-20">
        <img
          src="/dist/gear.svg"
          alt="Gear ornament"
          class="w-16 h-16 md:w-24 md:h-24 lg:w-48 lg:h-48"
        />
      </div>

      <!-- Blue Ball Ornaments -->
      <div class="absolute top-10 left-2/4 pointer-events-none z-20 hidden lg:block">
        <img
          src="/dist/blue-ball.svg"
          alt="Blue ball ornament"
          class="w-8 h-8 md:w-18 md:h-18"
        />
      </div>

      <div class="absolute bottom-1/8 left-120 pointer-events-none z-20 hidden lg:block">
        <img
          src="/dist/blue-ball.svg"
          alt="Blue ball ornament"
          class="w-4 h-4 md:w-14 md:h-14"
        />
      </div>

      <!-- Content -->
      <div class="w-full max-w-6xl px-4 md:px-6 flex justify-center items-center flex-col relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center">
          <!-- Left Content -->
          <div class="text-white flex flex-col gap-4 text-left">
            <h3 class="text-white tracking-widest text-sm font-medium mb-8 md:mb-14">
              WHY CHOOSE US
            </h3>
            <h2 class="text-white text-2xl md:text-3xl lg:text-4xl leading-tight font-bold">
              Trusted Digital Solutions for Every Industry
            </h2>
            <p class="text-sm sm:text-base opacity-60 leading-7 mt-3">
              Dengan pengalaman lebih dari 10 tahun, kami membangun sistem
              digital yang fleksibel, terintegrasi, dan siap mendukung
              pertumbuhan bisnis di berbagai sektor.
            </p>

            <!-- Client Stats -->
            <div class="flex items-center justify-start gap-4 mb-6 md:mb-8 mt-3">
              <div class="flex -space-x-2">
                <div class="w-10 h-10 rounded-full border-2 border-white bg-cover bg-center" style="background-image: url('/dist/person.png');"></div>
                <div class="w-10 h-10 rounded-full border-2 border-white bg-cover bg-center" style="background-image: url('/dist/person.png');"></div>
                <div class="w-10 h-10 rounded-full border-2 border-white bg-cover bg-center" style="background-image: url('/dist/person.png');"></div>
              </div>
              <div>
                <div class="text-xl md:text-2xl font-bold text-[#006EFF]">600+</div>
                <div class="text-xs md:text-sm opacity-60">Our Trusted Clients</div>
              </div>
            </div>

            <!-- CTA Button -->
            <div class="flex justify-start">
              <button class="bg-blue-600 hover:bg-blue-700 text-white font-medium py-3 px-6 rounded transition-colors duration-200">
                Get in touch
                <img src="dist/arrow-icon.webp" alt="" class="w-4 h-4 inline-block ml-2" />
              </button>
            </div>
          </div>

          <!-- Right Content - Feature Cards -->
          <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 md:gap-6">
            <!-- Diversified Solutions -->
            <div class="bg-gray-800 bg-opacity-90 backdrop-blur-sm rounded-2xl p-4 md:p-6 hover:bg-opacity-100 transition-all duration-300 border border-gray-600 border-opacity-30">
              <!-- Icon Box -->
              <div class="w-16 h-16 md:w-20 md:h-20 rounded-lg mb-3 flex items-center justify-center border-2 border-transparent">
                <img
                  src="/dist/reason-icon (2).svg"
                  alt="Diversified Solutions icon"
                  class="w-full h-full object-contain"
                />
              </div>

              <h3 class="text-white font-bold mb-2 text-sm md:text-base">
                Diversified Solutions
              </h3>
              <p class="text-white opacity-80 text-xs md:text-sm leading-relaxed">
                Melayani sektor teknologi, properti, edukasi, dan F&B.
              </p>
            </div>

            <!-- Integrated Ecosystem -->
            <div class="bg-gray-800 bg-opacity-90 backdrop-blur-sm rounded-2xl p-4 md:p-6 hover:bg-opacity-100 transition-all duration-300 border border-gray-600 border-opacity-30">
              <!-- Icon Box -->
              <div class="w-16 h-16 md:w-20 md:h-20 rounded-lg mb-3 flex items-center justify-center border-2 border-transparent">
                <img
                  src="/dist/reason-icon (3).svg"
                  alt="Integrated Ecosystem icon"
                  class="w-full h-full object-contain"
                />
              </div>

              <h3 class="text-white font-bold mb-2 text-sm md:text-base">
                Integrated Ecosystem
              </h3>
              <p class="text-white opacity-80 text-xs md:text-sm leading-relaxed">
                Setiap lini bisnis saling bersinergi untuk pertumbuhan.
              </p>
            </div>

            <!-- Commitment to Quality -->
            <div class="bg-gray-800 bg-opacity-90 backdrop-blur-sm rounded-2xl p-4 md:p-6 hover:bg-opacity-100 transition-all duration-300 border border-gray-600 border-opacity-30">
              <!-- Icon Box -->
              <div class="w-16 h-16 md:w-20 md:h-20 rounded-lg mb-3 flex items-center justify-center border-2 border-transparent">
                <img
                  src="/dist/reason-icon (1).svg"
                  alt="Commitment to Quality icon"
                  class="w-full h-full object-contain"
                />
              </div>

              <h3 class="text-white font-bold mb-2 text-sm md:text-base">
                Commitment to Quality
              </h3>
              <p class="text-white opacity-80 text-xs md:text-sm leading-relaxed">
                Fokus pada kualitas dari desain hingga implementasi.
              </p>
            </div>

            <!-- People-Centric Approach -->
            <div class="bg-gray-800 bg-opacity-90 backdrop-blur-sm rounded-2xl p-4 md:p-6 hover:bg-opacity-100 transition-all duration-300 border border-gray-600 border-opacity-30">
              <!-- Icon Box -->
              <div class="w-16 h-16 md:w-20 md:h-20 rounded-lg mb-3 flex items-center justify-center border-2 border-transparent">
                <img
                  src="/dist/reason-icon (4).svg"
                  alt="People-Centric Approach icon"
                  class="w-full h-full object-contain"
                />
              </div>

              <h3 class="text-white font-bold mb-2 text-sm md:text-base">
                People-Centric Approach
              </h3>
              <p class="text-white opacity-80 text-xs md:text-sm leading-relaxed">
                Fokus pada kolaborasi dan pengguna.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Testimonials Section -->
    <section class="relative w-full py-16 md:py-20 bg-gray-50">
      <div class="w-full max-w-6xl mx-auto px-4 md:px-6">
        <!-- Header -->
        <div class="mb-8 md:mb-12">
          <div class="flex flex-col lg:flex-row items-center justify-between gap-6 md:gap-8">
            <div class="lg:w-1/2 text-center lg:text-left">
              <h3 class="text-blue-600 tracking-widest text-sm font-medium mb-4">
                TESTIMONIALS
              </h3>
              <h2 class="text-[#202020] text-3xl md:text-4xl lg:text-5xl font-bold leading-tight">
                What Our Clients Say
              </h2>
            </div>
            <div class="lg:w-1/2 lg:pl-12">
              <p class="text-gray-600 text-sm md:text-base leading-relaxed text-center lg:text-left">
                Kami dipercaya oleh banyak klien dari berbagai industri. Berikut kesan mereka terhadap layanan dan kolaborasi bersama Mediatech.
              </p>
            </div>
          </div>
        </div>

        <!-- Testimonials Layout - Masonry Style -->
        <div class="columns-1 md:columns-2 lg:columns-3 gap-4 md:gap-6 space-y-0">
          <!-- Testimonial 1 -->
          <div class="break-inside-avoid mb-4 md:mb-6">
            <div class="rounded-2xl flex flex-col gap-3 md:gap-4">
              <p class="text-gray-800 leading-relaxed italic border-gray-200 border rounded-2xl p-4 md:p-6 text-sm md:text-base">
                "Bersama Mediatech, kami berhasil mendigitalisasi seluruh operasional restoran kami. Profesional dan penuh solusi!"
              </p>
              <div class="flex items-center gap-3 px-2">
                <div class="w-10 h-10 md:w-12 md:h-12 rounded-full bg-[#d9d9d9] flex items-center justify-center overflow-hidden flex-shrink-0">
                  <img
                    src="/dist/person.png"
                    alt="Sarah Wijaya"
                    class="w-full h-full object-cover"
                  />
                </div>
                <div>
                  <h4 class="font-semibold text-gray-900 text-xs md:text-sm">
                    Sarah Wijaya
                  </h4>
                  <p class="text-gray-600 text-xs">
                    CEO TasteLab
                  </p>
                </div>
              </div>
            </div>
          </div>

          <!-- Testimonial 2 -->
          <div class="break-inside-avoid mb-4 md:mb-6">
            <div class="rounded-2xl flex flex-col gap-3 md:gap-4">
              <p class="text-gray-800 leading-relaxed italic border-gray-200 border rounded-2xl p-4 md:p-6 text-sm md:text-base">
                "Mediatech punya pendekatan unik: tidak hanya teknis, tapi juga memahami brand kami secara menyeluruh."
              </p>
              <div class="flex items-center gap-3 px-2">
                <div class="w-10 h-10 md:w-12 md:h-12 rounded-full bg-[#d9d9d9] flex items-center justify-center overflow-hidden flex-shrink-0">
                  <img
                    src="/dist/person.png"
                    alt="Lina Marlina"
                    class="w-full h-full object-cover"
                  />
                </div>
                <div>
                  <h4 class="font-semibold text-gray-900 text-xs md:text-sm">
                    Lina Marlina
                  </h4>
                  <p class="text-gray-600 text-xs">
                    Digital Consultant
                  </p>
                </div>
              </div>
            </div>
          </div>

          <!-- Testimonial 3 -->
          <div class="break-inside-avoid mb-4 md:mb-6">
            <div class="rounded-2xl flex flex-col gap-3 md:gap-4">
              <p class="text-gray-800 leading-relaxed italic border-gray-200 border rounded-2xl p-4 md:p-6 text-sm md:text-base">
                "Tim Mediatech tidak hanya membangun produk, tetapi juga memahami visi edukasi kami!"
              </p>
              <div class="flex items-center gap-3 px-2">
                <div class="w-10 h-10 md:w-12 md:h-12 rounded-full bg-[#d9d9d9] flex items-center justify-center overflow-hidden flex-shrink-0">
                  <img
                    src="/dist/person.png"
                    alt="Budi Santosa"
                    class="w-full h-full object-cover"
                  />
                </div>
                <div>
                  <h4 class="font-semibold text-gray-900 text-xs md:text-sm">
                    Budi Santosa
                  </h4>
                  <p class="text-gray-600 text-xs">
                    Founder KampusTech
                  </p>
                </div>
              </div>
            </div>
          </div>

          <!-- Testimonial 4 -->
          <div class="break-inside-avoid mb-4 md:mb-6">
            <div class="rounded-2xl flex flex-col gap-3 md:gap-4">
              <p class="text-gray-800 leading-relaxed italic border-gray-200 border rounded-2xl p-4 md:p-6 text-sm md:text-base">
                "Pertama kali kerjasama dan sangat puas! Good Job!"
              </p>
              <div class="flex items-center gap-3 px-2">
                <div class="w-10 h-10 md:w-12 md:h-12 rounded-full bg-[#d9d9d9] flex items-center justify-center overflow-hidden flex-shrink-0">
                  <img
                    src="/dist/person.png"
                    alt="Budi Santosa"
                    class="w-full h-full object-cover"
                  />
                </div>
                <div>
                  <h4 class="font-semibold text-gray-900 text-xs md:text-sm">
                    Budi Santosa
                  </h4>
                  <p class="text-gray-600 text-xs">
                    Founder KampusTech
                  </p>
                </div>
              </div>
            </div>
          </div>

          <!-- Testimonial 5 -->
          <div class="break-inside-avoid mb-4 md:mb-6">
            <div class="rounded-2xl flex flex-col gap-3 md:gap-4">
              <p class="text-gray-800 leading-relaxed italic border-gray-200 border rounded-2xl p-4 md:p-6 text-sm md:text-base">
                "Tidak ada kata lain selain luar biasa untuk Mediatech!"
              </p>
              <div class="flex items-center gap-3 px-2">
                <div class="w-10 h-10 md:w-12 md:h-12 rounded-full bg-[#d9d9d9] flex items-center justify-center overflow-hidden flex-shrink-0">
                  <img
                    src="/dist/person.png"
                    alt="Clara Anggraini"
                    class="w-full h-full object-cover"
                  />
                </div>
                <div>
                  <h4 class="font-semibold text-gray-900 text-xs md:text-sm">
                    Clara Anggraini
                  </h4>
                  <p class="text-gray-600 text-xs">
                    Property Manager BuiltHome Realty
                  </p>
                </div>
              </div>
            </div>
          </div>

          <!-- Testimonial 6 -->
          <div class="break-inside-avoid mb-4 md:mb-6">
            <div class="rounded-2xl flex flex-col gap-3 md:gap-4">
              <p class="text-gray-800 leading-relaxed italic border-gray-200 border rounded-2xl p-4 md:p-6 text-sm md:text-base">
                "Kolaborasi dengan Mediatech sangat mulus. Mereka cepat tanggap dan fleksibel dalam menyesuaikan kebutuhan teknologi kami."
              </p>
              <div class="flex items-center gap-3 px-2">
                <div class="w-10 h-10 md:w-12 md:h-12 rounded-full bg-[#d9d9d9] flex items-center justify-center overflow-hidden flex-shrink-0">
                  <img
                    src="/dist/person.png"
                    alt="Rizky Ramadhan"
                    class="w-full h-full object-cover"
                  />
                </div>
                <div>
                  <h4 class="font-semibold text-gray-900 text-xs md:text-sm">
                    Rizky Ramadhan
                  </h4>
                  <p class="text-gray-600 text-xs">
                    CTO @Innotech Global
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Partnership Section -->
    <section class="relative w-full py-16 md:py-20 bg-gray-50">
      <div class="w-full max-w-6xl mx-auto px-4 md:px-6">
        <!-- Header -->
        <div class="text-center mb-12 md:mb-16">
          <h3 class="text-blue-600 tracking-widest text-sm font-medium mb-4">
            PARTNERSHIP
          </h3>
          <h2 class="text-[#202020] text-3xl md:text-4xl lg:text-5xl font-bold leading-tight mb-4 md:mb-6 max-w-4xl mx-auto">
            Partnered with Leading Brands
          </h2>
          <p class="text-gray-600 text-sm md:text-base leading-relaxed max-w-3xl mx-auto">
            Kami berkolaborasi dengan brand ternama dari sektor F&B, edukasi,
            properti, teknologi, dan lainnya — untuk bersama menghadirkan solusi
            digital yang berdampak nyata.
          </p>
        </div>

        <!-- Partnership Logos -->
        <div class="relative w-full flex justify-center">
          <img
            src="/dist/partnership-logos.png"
            alt="Partnership Logos - Mediatech's trusted partners including leading brands from F&B, education, property, technology and other sectors"
            class="w-full max-w-5xl h-auto object-contain"
          />
        </div>
      </div>
    </section>

    <!-- Blog Section -->
    <section class="relative w-full py-16 md:py-20 bg-white">
      <div class="w-full max-w-6xl mx-auto px-4 md:px-6">
        <!-- Header -->
        <div class="text-center mb-12 md:mb-16">
          <h3 class="text-blue-600 tracking-widest text-sm font-medium mb-4">
            BLOGS
          </h3>
          <h2 class="text-[#202020] text-3xl md:text-4xl lg:text-5xl font-bold leading-tight mb-4 md:mb-6">
            Insights & Innovation
          </h2>
          <p class="text-gray-600 text-sm md:text-base leading-relaxed max-w-3xl mx-auto">
            Wawasan dan informasi seputar strategi digital, desain produk, hingga
            pengembangan teknologi terbaru di berbagai sektor industri.
          </p>
        </div>

        <!-- Blog Posts Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">
          <!-- Blog Post 1 -->
          <article class="cursor-pointer">
            <!-- Blog Image -->
            <div class="relative w-full h-48 md:h-64 lg:h-72 overflow-hidden mb-4 md:mb-6 bg-gray-200 rounded-lg">
              <img
                src="/dist/blog-img.png"
                alt="Mengapa UI/UX Menjadi Kunci Transformasi Digital"
                class="w-full h-full object-cover"
              />
            </div>

            <!-- Blog Content -->
            <div class="space-y-2 md:space-y-3">
              <h3 class="text-lg md:text-xl lg:text-2xl font-semibold text-gray-900 leading-tight">
                Mengapa UI/UX Menjadi Kunci Transformasi Digital
              </h3>

              <p class="text-gray-600 text-sm md:text-sm lg:text-base leading-relaxed line-clamp-3">
                Kami membahas peran penting desain dalam membentuk pengalaman pengguna yang optimal dan strategis untuk bisnis modern.
              </p>
            </div>
          </article>

          <!-- Blog Post 2 -->
          <article class="cursor-pointer">
            <!-- Blog Image -->
            <div class="relative w-full h-48 md:h-64 lg:h-72 overflow-hidden mb-4 md:mb-6 bg-gray-200 rounded-lg">
              <img
                src="/dist/blog-img.png"
                alt="Mediatech Ekspansi ke Sektor F&B Digital"
                class="w-full h-full object-cover"
              />

            </div>

            <!-- Blog Content -->
            <div class="space-y-2 md:space-y-3">
              <h3 class="text-lg md:text-xl lg:text-2xl font-semibold text-gray-900 leading-tight">
                Mediatech Ekspansi ke Sektor F&B Digital
              </h3>

              <p class="text-gray-600 text-sm md:text-sm lg:text-base leading-relaxed line-clamp-3">
                Langkah strategis terbaru kami dalam membawa teknologi ke industri kuliner lokal dengan solusi digital terintegrasi.
              </p>
            </div>
          </article>

          <!-- Blog Post 3 -->
          <article class="cursor-pointer">
            <!-- Blog Image -->
            <div class="relative w-full h-48 md:h-64 lg:h-72 overflow-hidden mb-4 md:mb-6 bg-gray-200 rounded-lg">
              <img
                src="/dist/blog-img.png"
                alt="Tips Membangun Startup Properti dengan Dukungan Teknologi"
                class="w-full h-full object-cover"
              />

            </div>

            <!-- Blog Content -->
            <div class="space-y-2 md:space-y-3">
              <h3 class="text-lg md:text-xl lg:text-2xl font-semibold text-gray-900 leading-tight">
                Tips Membangun Startup Properti dengan...
              </h3>

              <p class="text-gray-600 text-sm md:text-sm lg:text-base leading-relaxed line-clamp-3">
                Panduan singkat bagi pelaku bisnis properti dalam memanfaatkan solusi digital untuk mengoptimalkan operasional dan pengalaman pelanggan.
              </p>
            </div>
          </article>
        </div>
      </div>
    </section>

    <!-- Careers Section -->
    <section class="relative w-full py-4 md:py-4 min-h-[40vh] lg:min-h-[80vh] lg:py-16 bg-cover bg-center bg-no-repeat overflow-hidden" style="background-image: url('/dist/careers-background.jpg');">
      <div class="relative w-full min-h-[40vh] lg:min-h-[80vh] lg:py-16 max-w-6xl mx-auto px-4 md:px-6 z-10 flex justify-center items-center">
        <!-- Floating Images -->
        <div class="absolute inset-0 pointer-events-none hidden lg:block">
          <!-- Top Left Image -->
          <div class="absolute top-0 left-5 w-48 lg:w-64 h-auto rounded-2xl overflow-hidden opacity-80">
            <img
              src="/dist/carreers (3).png"
              alt="Career opportunity 1"
              class="w-full h-auto object-contain"
            />
          </div>

          <!-- Top Right Image -->
          <div class="absolute top-0 right-5 w-44 lg:w-56 h-auto rounded-2xl overflow-hidden opacity-80">
            <img
              src="/dist/carreers (2).png"
              alt="Career opportunity 2"
              class="w-full h-auto object-contain"
            />
          </div>

          <!-- Bottom Left Image -->
          <div class="absolute bottom-0 left-5 lg:left-16 w-48 lg:w-60 h-auto rounded-2xl overflow-hidden opacity-80">
            <img
              src="/dist/carreers (1).png"
              alt="Career opportunity 3"
              class="w-full h-auto object-contain"
            />
          </div>

          <!-- Bottom Right Image -->
          <div class="absolute bottom-0 right-5 w-48 lg:w-64 h-auto rounded-2xl overflow-hidden opacity-80">
            <img
              src="/dist/carreers (4).png"
              alt="Career opportunity 4"
              class="w-full h-auto object-contain"
            />
          </div>
        </div>

        <!-- Main Content -->
        <div class="flex flex-col items-center justify-center min-h-[300px] md:min-h-[400px] text-center relative z-20 px-4">
          <!-- Header -->
          <h3 class="text-blue-400 tracking-widest text-sm font-medium mb-4">
            CAREERS
          </h3>

          <h2 class="text-white text-3xl md:text-4xl lg:text-6xl font-bold leading-tight mb-4 md:mb-6">
            Grow with Us
          </h2>

          <p class="text-gray-300 text-sm md:text-base lg:text-lg leading-relaxed mb-6 md:mb-8 max-w-sm md:max-w-md opacity-60">
            Bergabunglah bersama tim Mediatech dan ikut membangun solusi digital inovatif yang berdampak luas.
          </p>

          <!-- CTA Button -->
          <button class="bg-blue-600 hover:bg-blue-700 text-white font-medium py-3 px-6 rounded transition-colors duration-200">
            Peluang Karir
            <img src="dist/arrow-icon.webp" alt="" class="w-4 h-4 inline-block ml-2" />
          </button>
        </div>
      </div>
    </section>

    <!-- Digital Idea Section -->
    <section class="relative w-full py-16 md:py-18 bg-gradient-to-br from-blue-600 via-blue-500 to-blue-700 flex justify-center items-center overflow-hidden">
      <!-- White Ball Ornaments -->
      <div class="absolute top-8 right-1.5/2 pointer-events-none z-20">
        <img
          src="/dist/white-ball.svg"
          alt="White ball ornament"
          class="w-16 h-16 md:w-20 md:h-20 lg:w-20 lg:h-20"
        />
      </div>

      <div class="absolute bottom-0 right-0 pointer-events-none z-20 transform translate-y-2 translate-x-14">
        <img
          src="/dist/white-ball.svg"
          alt="White ball ornament"
          class="w-24 h-24 md:w-32 md:h-32 lg:w-38 lg:h-38"
        />
      </div>

      <div class="absolute bottom-0 left-0 pointer-events-none z-20 transform translate-y-8 -translate-x-10">
        <img
          src="/dist/white-ball.svg"
          alt="White ball ornament"
          class="w-20 h-20 md:w-24 md:h-24 lg:w-28 lg:h-28"
        />
      </div>

      <!-- Content -->
      <div class="w-full max-w-6xl px-4 md:px-6 flex justify-start flex-col items-start relative z-10 text-left">
        <div class="w-full max-w-4xl">
          <!-- Subtitle -->
          <p class="text-white/80 text-sm md:text-base italic mb-4 md:mb-6">
            It's Your Time!
          </p>
        </div>

        <div class="flex justify-between w-full items-start flex-col md:flex-row">
          <!-- Main Title -->
          <h2 class="text-white text-3xl md:text-4xl lg:text-5xl xl:text-6xl leading-tight font-bold max-w-[680px]">
            Have a Digital Idea? Let's Build Together
          </h2>

          <!-- CTA Button -->
          <button class="bg-white w-[180px] mt-8 md:mt-0 lg:mt-0 hover:bg-gray-100 text-blue-600 h-fit justify-center align-center py-3 text-lg font-medium rounded transition-colors duration-300 flex items-center gap-2">
            Get in touch
            <img
              src="/dist/arrow-icon-blue.webp"
              alt="Arrow"
              class="w-4 h-4"
            />
          </button>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer class="bg-[#0F172A] text-white pt-16 pb-6 px-4 md:px-12 w-full flex justify-center items-center">
      <div class="flex flex-col w-full max-w-6xl">
        <div class="max-w-7xl mx-auto flex flex-row justify-between items-start gap-10 w-full flex-wrap sm:flex-nowrap">
          <!-- Logo + Description -->
          <div class="flex flex-col gap-4 justify-start items-start w-full sm:w-fit sm:max-w-sm">
            <img
              src="/dist/logo-white.webp"
              alt="Mediatech Indonesia"
              class="h-8 w-auto"
            />
            <p class="text-sm text-gray-300">
              Jelajahi setiap lini kehidupan penuh warna bersama Mediatech
              Indonesia
            </p>
          </div>

          <!-- Company Links -->
          <div>
            <h4 class="font-semibold mb-4">Company</h4>
            <ul class="space-y-2 text-sm text-gray-300">
              <li>Home</li>
              <li>About Us</li>
              <li>Service</li>
              <li>Choose Us</li>
              <li>Testimonials</li>
            </ul>
          </div>

          <!-- Support Links -->
          <div>
            <h4 class="font-semibold mb-4">Support</h4>
            <ul class="space-y-2 text-sm text-gray-300">
              <li>Contact Us</li>
              <li>Help Us</li>
              <li>Customer Center</li>
            </ul>
          </div>

          <!-- Contact -->
          <div>
            <h4 class="font-semibold mb-4">Contact</h4>
            <ul class="space-y-2 text-sm text-gray-300">
              <li>mediatech@company.com</li>
              <li>+62 8123-4567-8900</li>
            </ul>
          </div>
        </div>

        <!-- Branch Locations -->
        <div class="mt-16 max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-8 text-sm text-gray-300">
          <!-- Location 1: Bali - Denpasar (Head) -->
          <div>
            <h5 class="font-semibold text-white mb-2">Bali - Denpasar (Head)</h5>
            <div class="flex items-start gap-2">
              <img
                src="/dist/location-icon.webp"
                alt="location icon"
                class="w-4"
              />
              <p>Jl. Tukad Batanghari No.55, Panjer, Denpasar Selatan, Kota Denpasar, Bali 80225</p>
            </div>
            <a
              href="#"
              class="flex items-center gap-1 mt-1 text-[#06b6d4] cursor-pointer hover:underline"
            >
              <img
                src="/dist/to-maps-icon.webp"
                alt="to maps icon"
                class="w-4"
              />
              <span class="text-white opacity-80">Lihat di Peta</span>
            </a>
          </div>

          <!-- Location 2: Bali - Gianyar -->
          <div>
            <h5 class="font-semibold text-white mb-2">Bali - Gianyar</h5>
            <div class="flex items-start gap-2">
              <img
                src="/dist/location-icon.webp"
                alt="location icon"
                class="w-4"
              />
              <p>Jl. Dharma Giri No.777, Bitera, Kec. Gianyar, Kabupaten Gianyar, Bali 80581</p>
            </div>
            <a
              href="#"
              class="flex items-center gap-1 mt-1 text-[#06b6d4] cursor-pointer hover:underline"
            >
              <img
                src="/dist/to-maps-icon.webp"
                alt="to maps icon"
                class="w-4"
              />
              <span class="text-white opacity-80">Lihat di Peta</span>
            </a>
          </div>

          <!-- Location 3: Surabaya -->
          <div>
            <h5 class="font-semibold text-white mb-2">Surabaya</h5>
            <div class="flex items-start gap-2">
              <img
                src="/dist/location-icon.webp"
                alt="location icon"
                class="w-4"
              />
              <p>Jl. Tenggilis Tengah III No.1, Kendangsari, Kec. Tenggilis Mejoyo, Surabaya, Jawa Timur 60231</p>
            </div>
            <a
              href="#"
              class="flex items-center gap-1 mt-1 text-[#06b6d4] cursor-pointer hover:underline"
            >
              <img
                src="/dist/to-maps-icon.webp"
                alt="to maps icon"
                class="w-4"
              />
              <span class="text-white opacity-80">Lihat di Peta</span>
            </a>
          </div>

          <!-- Location 4: Surabaya - Citraland -->
          <div>
            <h5 class="font-semibold text-white mb-2">Surabaya - Citraland</h5>
            <div class="flex items-start gap-2">
              <img
                src="/dist/location-icon.webp"
                alt="location icon"
                class="w-4"
              />
              <p>Ruko Palma Galeria, RA3 No.11, Sememi, Kec. Benowo, Surabaya, Jawa Timur 60198</p>
            </div>
            <a
              href="#"
              class="flex items-center gap-1 mt-1 text-[#06b6d4] cursor-pointer hover:underline"
            >
              <img
                src="/dist/to-maps-icon.webp"
                alt="to maps icon"
                class="w-4"
              />
              <span class="text-white opacity-80">Lihat di Peta</span>
            </a>
          </div>

          <!-- Location 5: Jember -->
          <div>
            <h5 class="font-semibold text-white mb-2">Jember</h5>
            <div class="flex items-start gap-2">
              <img
                src="/dist/location-icon.webp"
                alt="location icon"
                class="w-4"
              />
              <p>Jl. Majapahit, Komplek Ruko Esplanade, no R-22 Kaliwates, Jember</p>
            </div>
            <a
              href="#"
              class="flex items-center gap-1 mt-1 text-[#06b6d4] cursor-pointer hover:underline"
            >
              <img
                src="/dist/to-maps-icon.webp"
                alt="to maps icon"
                class="w-4"
              />
              <span class="text-white opacity-80">Lihat di Peta</span>
            </a>
          </div>

          <!-- Location 6: Banyuwangi -->
          <div>
            <h5 class="font-semibold text-white mb-2">Banyuwangi</h5>
            <div class="flex items-start gap-2">
              <img
                src="/dist/location-icon.webp"
                alt="location icon"
                class="w-4"
              />
              <p>NX Point Lt. 2, Jl. Kepiting No.7 Sobo, Kec. Banyuwangi, Banyuwangi, Jawa Timur 68418</p>
            </div>
            <a
              href="#"
              class="flex items-center gap-1 mt-1 text-[#06b6d4] cursor-pointer hover:underline"
            >
              <img
                src="/dist/to-maps-icon.webp"
                alt="to maps icon"
                class="w-4"
              />
              <span class="text-white opacity-80">Lihat di Peta</span>
            </a>
          </div>

          <!-- Location 7: Sidoarjo -->
          <div>
            <h5 class="font-semibold text-white mb-2">Sidoarjo</h5>
            <div class="flex items-start gap-2">
              <img
                src="/dist/location-icon.webp"
                alt="location icon"
                class="w-4"
              />
              <p>Jl. Thamrin no 13, Sidokumpul, Kec. Sidoarjo</p>
            </div>
            <a
              href="#"
              class="flex items-center gap-1 mt-1 text-[#06b6d4] cursor-pointer hover:underline"
            >
              <img
                src="/dist/to-maps-icon.webp"
                alt="to maps icon"
                class="w-4"
              />
              <span class="text-white opacity-80">Lihat di Peta</span>
            </a>
          </div>
        </div>

        <!-- Footer Bottom -->
        <div class="mt-12 border-t border-white/10 pt-6 text-center text-xs text-gray-400">
          © 2025 Mediatech All Right Reserved
        </div>
      </div>
    </footer>
    </body>
</html>
