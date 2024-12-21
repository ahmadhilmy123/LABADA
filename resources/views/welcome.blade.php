<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <title>LABADA | Layanan Bantuan Darurat</title>
   
   <link href="{{ asset('css/app.css') }}" rel="stylesheet">
   <link rel="icon" href="{{ asset('img/favicon.svg')}}">
   <style>
     html {
       scroll-behavior: smooth;
     }
   </style>
</head>
<body class="leading-normal tracking-normal" style="font-family: 'Montserrat', sans-serif">
   <nav class="flex items-center justify-between flex-wrap bg-blue-200 p-4 md:p-7 md:px-20">
     <div class="flex items-center flex-shrink-0 text-black mr-6 w-full justify-between">
       <div class="flex items-center">
         <img src="{{ asset('img/logo.svg')}}" alt=""
           class="w-12 h-12 transform transition hover:scale-125 duration-300 ease-in-out" />
         <span class="font-bold tracking-wider text-xl ml-2">LABADA</span>
       </div>
       <div class="block lg:hidden">
         <button
           class="flex items-center px-3 py-2 border rounded text-teal-200 border-teal-400 hover:text-white hover:border-white">
           <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
             <title>Menu</title>
             <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
           </svg>
         </button>
       </div>
     </div>
     <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto text-center hidden lg:block">
       <div class="text-md lg:flex-grow">
         <a href="/" class="block mt-4 lg:inline-block lg:mt-0 text-black mr-4">
           Home
         </a>
         <a href="#how" class="block mt-4 lg:inline-block lg:mt-0 text-black mr-4">
           Tata Cara
         </a>
         <a href="#berita" class="block mt-4 lg:inline-block lg:mt-0 text-black mr-4">
           Berita
         </a>
         <a href="#darurat" class="block mt-4 lg:inline-block lg:mt-0 text-black mr-4">
           Kontak Darurat
         </a>
       </div>
       <div>
         <button
           class="text-black font-normal rounded-md py-3 border-black px-4 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
           <a href="{{ url('login')}}">Masuk</a>
         </button>
         <button
           class="text-blue-500 font-medium rounded-md py-3 px-4 border-2 border-white focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
           <a href="{{ url('register')}}">Daftar</a>
         </button>
       </div>
     </div>
   </nav>

   <!-- Hero Section -->
   <div class="pt-12 px-4 md:pt-24 md:px-16 bg-blue-200">
     <div class="container px-3 mx-auto flex flex-wrap flex-col md:flex-row items-center">
       <!-- Left Column -->
       <div class="flex flex-col w-full md:w-2/5 justify-center items-center md:items-start text-center md:text-left text-gray-800">
         <h1 class="my-4 text-2xl md:text-4xl font-bold leading-tight text-center md:text-left">
           Layanan Panggilan Darurat Online
         </h1>
         <p class="leading-normal text-base md:text-xl mb-8 text-center md:text-left">
           Silakan sampaikan laporan masalah Anda di sini. Kami akan segera memprosesnya dengan cepat untuk memberikan solusi terbaik. Jika ini keadaan darurat, harap tuliskan detail masalah dengan lengkap agar penanganan dapat segera dilakukan!
         </p>
         <button
           class="mx-auto md:mx-0 bg-blue-500 text-white font-bold rounded-md my-6 py-3 px-6 md:py-4 md:px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
           <a href="{{ url('login')}}">Darurat!</a>
         </button>
       </div>
       
       <!-- Right Column -->
       <div class="w-full md:w-3/5 text-center">
         <img 
           class="w-full max-w-md mx-auto object-contain transform transition hover:scale-110 duration-300 ease-in-out"
           src="{{ asset('img/hero.svg')}}" 
           alt="Hero Image"
         />
       </div>
     </div>
   </div>

  <!-- How -->
  <div id="how" class="container my-20 mx-auto px-4 md:px-12">
    <div class="flex flex-wrap -mx-1 lg:-mx-4">
      <!-- Column -->
      <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/4">
        <!-- Article -->
        <article class="overflow-hidden rounded-lg shadow-lg  text-gray-800">
          <img alt="Tulis"
            class="block h-auto w-full lg:w-28 mx-auto my-10 transform transition hover:scale-125 duration-300 ease-in-out"
            src="{{ asset('img/tulis.svg')}}" />
          <header class="leading-tight p-2 md:p-4 text-center ">
            <h1 class="text-lg font-bold">1. Tulis Laporan</h1>
            <p class="text-grey-darker text-sm py-4">
              Tulis laporan keluhan Anda dengan jelas.
            </p>
          </header>
        </article>
        <!-- END Article -->
      </div>
      <!-- END Column -->
      <!-- Column -->
      <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/4">
        <!-- Article -->
        <article class="overflow-hidden rounded-lg shadow-lg text-gray-800">
          <img alt="Proses"
            class="block h-auto w-full lg:w-28 mx-auto my-10 transform transition hover:scale-125 duration-300 ease-in-out"
            src="{{ asset('img/processing.svg')}}" />
          <header class="leading-tight p-2 md:p-4 text-center">
            <h1 class="text-lg font-bold">2. Proses Verifikasi</h1>
            <p class="text-grey-darker text-sm py-4">
              Tunggu sampai laporan Anda di verifikasi.
            </p>
          </header>
        </article>
        <!-- END Article -->
      </div>
      <!-- END Column -->
      <!-- Column -->
      <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/4">
        <!-- Article -->
        <article class="overflow-hidden rounded-lg shadow-lg  text-gray-800">
          <img alt="Ditindak"
            class="block h-auto w-full lg:w-28 mx-auto my-10 transform transition hover:scale-125 duration-300 ease-in-out"
            src="{{ asset('img/act.svg')}}" />
          <header class="leading-tight p-2 md:p-4 text-center">
            <h1 class="text-lg font-bold">3. Tindak Lanjut</h1>
            <p class="text-grey-darker text-sm py-4">
              Laporan Anda sedang dalam tindak lanjut.
            </p>
          </header>
        </article>
        <!-- END Article -->
      </div>
      <!-- END Column -->
      <!-- Column -->
      <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/4">
        <!-- Article -->
        <article class="overflow-hidden rounded-lg shadow-lg  text-gray-800">
          <img alt="Selesai"
            class="block h-auto w-full lg:w-28 mx-auto my-10 transform transition hover:scale-125 duration-300 ease-in-out"
            src="{{ asset('img/verification.svg')}}" />
          <header class="leading-tight p-2 md:p-4 text-center">
            <h1 class="text-lg font-bold">4. Selesai</h1>
            <p class="text-grey-darker text-sm py-4">
              Laporan pengaduan telah selesai ditindak.
            </p>
          </header>
        </article>
        
        <!-- END Article -->
      </div>
      <!-- END Column -->
    </div>
  </div>

  <div id="berita" class="container my-20 mx-auto px-4 md:px-12">
    <h2 class="text-3xl font-bold text-center mb-12">Berita Terkini</h2>
    <div class="flex flex-wrap -mx-1 lg:-mx-4">
      <!-- Berita Card 1 -->
      <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">
        <article class="overflow-hidden rounded-lg shadow-lg">
          <img alt="Berita 1" class="w-full h-48 object-cover"
            src="{{ asset('img/berita1.jpg') }}" />
          <div class="p-4">
            <h3 class="font-bold text-xl mb-2">Pengaduan Berhasil Diselesaikan</h3>
            <p class="text-gray-700 text-base">
              Laporan masyarakat tentang kerusakan infrastruktur segera ditindaklanjuti.
            </p>
            <div class="pt-4 pb-2">
              <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">
                Infrastruktur
              </span>
            </div>
          </div>
        </article>
      </div>

      <!-- Berita Card 2 -->
      <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">
        <article class="overflow-hidden rounded-lg shadow-lg">
          <img alt="Berita 2" class="w-full h-48 object-cover"
            src="{{ asset('img/berita2.jpg') }}" />
          <div class="p-4">
            <h3 class="font-bold text-xl mb-2">Sosialisasi Layanan PENGKAT</h3>
            <p class="text-gray-700 text-base">
              Tim PENGKAT mengadakan sosialisasi layanan pengaduan di kecamatan.
            </p>
            <div class="pt-4 pb-2">
              <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">
                Sosialisasi
              </span>
            </div>
          </div>
        </article>
      </div>

      <!-- Berita Card 3 -->
      <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">
        <article class="overflow-hidden rounded-lg shadow-lg">
          <img alt="Berita 3" class="w-full h-48 object-cover"
            src="{{ asset('img/berita3.jpg') }}" />
          <div class="p-4">
            <h3 class="font-bold text-xl mb-2">Peningkatan Kualitas Layanan</h3>
            <p class="text-gray-700 text-base">
              PENGKAT terus mengembangkan sistem untuk memberikan layanan terbaik.
            </p>
            <div class="pt-4 pb-2">
              <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">
                Pengembangan
              </span>
            </div>
          </div>
        </article>
      </div>
    </div>
  </div>

  <div id="darurat" class="container my-20 mx-auto px-4 md:px-12">
    <h2 class="text-3xl font-bold text-center mb-12 text-red-600">Kontak Darurat</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
      <!-- Emergency Contact Card 1 -->
      <div class="bg-white shadow-lg rounded-lg p-6 text-center hover:bg-gray-100 transition duration-300">
        <div class="mb-4">
          <i class="fas fa-ambulance text-4xl text-red-500"></i>
        </div>
        <h3 class="text-xl font-semibold mb-3">Ambulans</h3>
        <a href="https://wa.me/6288905784020" target="_blank" class="text-green-600 font-bold text-lg hover:text-green-700 flex items-center justify-center">
          <i class="fab fa-whatsapp mr-2"></i> 0889-0578-4020
        </a>
      </div>

      <!-- Emergency Contact Card 2 -->
      <div class="bg-white shadow-lg rounded-lg p-6 text-center hover:bg-gray-100 transition duration-300">
        <div class="mb-4">
          <i class="fas fa-fire text-4xl text-orange-500"></i>
        </div>
        <h3 class="text-xl font-semibold mb-3">Pemadam Kebakaran</h3>
        <a href="https://wa.me/6288905784020" target="_blank" class="text-green-600 font-bold text-lg hover:text-green-700 flex items-center justify-center">
          <i class="fab fa-whatsapp mr-2"></i> 0889-0578-4020
        </a>
      </div>

      <!-- Emergency Contact Card 3 -->
      <div class="bg-white shadow-lg rounded-lg p-6 text-center hover:bg-gray-100 transition duration-300">
        <div class="mb-4">
          <i class="fas fa-shield-alt text-4xl text-blue-500"></i>
        </div>
        <h3 class="text-xl font-semibold mb-3">Polisi</h3>
        <a href="https://wa.me/6288905784020" target="_blank" class="text-green-600 font-bold text-lg hover:text-green-700 flex items-center justify-center">
          <i class="fab fa-whatsapp mr-2"></i> 0889-0578-4020
        </a>
      </div>

      <!-- Emergency Contact Card 4 -->
      <div class="bg-white shadow-lg rounded-lg p-6 text-center hover:bg-gray-100 transition duration-300">
        <div class="mb-4">
          <i class="fas fa-heart text-4xl text-red-400"></i>
        </div>
        <h3 class="text-xl font-semibold mb-3">Kesehatan</h3>
        <a href="https://wa.me/6288905784020" target="_blank" class="text-green-600 font-bold text-lg hover:text-green-700 flex items-center justify-center">
          <i class="fab fa-whatsapp mr-2"></i> 0889-0578-4020
        </a>
      </div>

      <!-- Emergency Contact Card 5 -->
      <div class="bg-white shadow-lg rounded-lg p-6 text-center hover:bg-gray-100 transition duration-300">
        <div class="mb-4">
          <i class="fas fa-search text-4xl text-purple-500"></i>
        </div>
        <h3 class="text-xl font-semibold mb-3">SAR (Pencarian & Pertolongan)</h3>
        <a href="https://wa.me/6288905784020" target="_blank" class="text-green-600 font-bold text-lg hover:text-green-700 flex items-center justify-center">
          <i class="fab fa-whatsapp mr-2"></i> 0889-0578-4020
        </a>
      </div>

      <!-- Emergency Contact Card 6 -->
      <div class="bg-white shadow-lg rounded-lg p-6 text-center hover:bg-gray-100 transition duration-300">
        <div class="mb-4">
          <i class="fas fa-tty text-4xl text-gray-500"></i>
        </div>
        <h3 class="text-xl font-semibold mb-3">Pusat Pengaduan</h3>
        <a href="https://wa.me/6288905784020" target="_blank" class="text-green-600 font-bold text-lg hover:text-green-700 flex items-center justify-center">
          <i class="fab fa-whatsapp mr-2"></i> 0889-0578-4020
        </a>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <footer class="bg-blue-200 py-12">
    <div class="container mx-auto px-4 md:px-12 flex flex-wrap">
      <!-- Contact Info -->
      <div class="w-full md:w-1/3 mb-6 md:mb-0">
        <h3 class="text-xl font-bold mb-4">Hubungi Kami</h3>
        <div class="text-gray-700">
          <p class="mb-2">
            <i class="fas fa-phone mr-2"></i> +62 889-0578-4020
          </p>
          <p class="mb-2">
            <i class="fas fa-envelope mr-2"></i> pengkat@pemerintah.go.id
          </p>
          <p>
            <i class="fas fa-map-marker-alt mr-2"></i> 
            Jalan Pemerintahan No. 45, 
            Kelurahan Sejahtera, 
            Kecamatan Pembangunan, 
            Kota Madya
          </p>
        </div>
      </div>

      <!-- Quick Links -->
      <div class="w-full md:w-1/3 mb-6 md:mb-0">
        <h3 class="text-xl font-bold mb-4">Tautan Cepat</h3>
        <ul class="text-gray-700">
          <li class="mb-2"><a href="/" class="hover:text-blue-500">Beranda</a></li>
          <li class="mb-2"><a href="#how" class="hover:text-blue-500">Tata Cara</a></li>
          <li class="mb-2"><a href="#berita" class="hover:text-blue-500">Berita</a></li>
          <li><a href="{{ url('login') }}" class="hover:text-blue-500">Login</a></li>
        </ul>
      </div>

      <!-- Social Media -->
      <div class="w-full md:w-1/3">
        <h3 class="text-xl font-bold mb-4">Ikuti Kami</h3>
        <div class="flex space-x-4">
          <a href="https://instagram.com/pengkat_official" target="_blank" class="text-2xl hover:text-blue-500">
            <i class="fab fa-instagram"></i>
          </a>
          <a href="https://facebook.com/pengkat" target="_blank" class="text-2xl hover:text-blue-500">
            <i class="fab fa-facebook"></i>
          </a>
          <a href="https://twitter.com/pengkat" target="_blank" class="text-2xl hover:text-blue-500">
            <i class="fab fa-twitter"></i>
          </a>
        </div>
      </div>
    </div>

    <!-- Copyright -->
    <div class="text-center font-medium bg-blue-300 py-5 mt-6">
      © {{ now()->year }} LABADA | By
      <a href="#" class="text-blue-700" target="_blank">Kudalaut</a>
    </div>
  </footer>

  @include('sweetalert::alert')

  <!-- Optional: Font Awesome for icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</body>

</html>
  