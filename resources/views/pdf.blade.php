@php
    $today = date("d/m/y H:i:s")
@endphp
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <!-- Kalau style dibawah terbuka. tutup aja bang wkwkkw -->
  <style>
    /* Utility */

    /* Margin */
    .m-0 {
      margin: 0 !important;
    }

    .m-1 {
      margin: 0.25rem !important;
    }

    .m-2 {
      margin: 0.5rem !important;
    }

    .m-3 {
      margin: 0.75rem !important;
    }

    .m-4 {
      margin: 1rem !important;
    }

    .m-5 {
      margin: 1.25rem !important;
    }

    .m-6 {
      margin: 1.5rem !important;
    }

    /* Margin Top */
    .mt-0 {
      margin-top: 0 !important;
    }

    .mt-1 {
      margin-top: 0.25rem !important;
    }

    .mt-2 {
      margin-top: 0.5rem !important;
    }

    .mt-3 {
      margin-top: 0.75rem !important;
    }

    .mt-4 {
      margin-top: 1rem !important;
    }

    .mt-5 {
      margin-top: 1.25rem !important;
    }

    .mt-6 {
      margin-top: 1.5rem !important;
    }

    /* Margin Right */
    .mr-0 {
      margin-right: 0 !important;
    }

    .mr-1 {
      margin-right: 0.25rem !important;
    }

    .mr-2 {
      margin-right: 0.5rem !important;
    }

    .mr-3 {
      margin-right: 0.75rem !important;
    }

    .mr-4 {
      margin-right: 1rem !important;
    }

    .mr-5 {
      margin-right: 1.25rem !important;
    }

    .mr-6 {
      margin-right: 1.5rem !important;
    }

    /* Margin Bottom */
    .mb-0 {
      margin-bottom: 0 !important;
    }

    .mb-1 {
      margin-bottom: 0.25rem !important;
    }

    .mb-2 {
      margin-bottom: 0.5rem !important;
    }

    .mb-3 {
      margin-bottom: 0.75rem !important;
    }

    .mb-4 {
      margin-bottom: 1rem !important;
    }

    .mb-5 {
      margin-bottom: 1.25rem !important;
    }

    .mb-6 {
      margin-bottom: 1.5rem !important;
    }

    /* Margin Left */
    .ml-0 {
      margin-left: 0 !important;
    }

    .ml-1 {
      margin-left: 0.25rem !important;
    }

    .ml-2 {
      margin-left: 0.5rem !important;
    }

    .ml-3 {
      margin-left: 0.75rem !important;
    }

    .ml-4 {
      margin-left: 1rem !important;
    }

    .ml-5 {
      margin-left: 1.25rem !important;
    }

    .ml-6 {
      margin-left: 1.5rem !important;
    }

    /* Margin X-axis (Left & Right) */
    .mx-0 {
      margin-left: 0 !important;
      margin-right: 0 !important;
    }

    .mx-1 {
      margin-left: 0.25rem !important;
      margin-right: 0.25rem !important;
    }

    .mx-2 {
      margin-left: 0.5rem !important;
      margin-right: 0.5rem !important;
    }

    .mx-3 {
      margin-left: 0.75rem !important;
      margin-right: 0.75rem !important;
    }

    .mx-4 {
      margin-left: 1rem !important;
      margin-right: 1rem !important;
    }

    .mx-5 {
      margin-left: 1.25rem !important;
      margin-right: 1.25rem !important;
    }

    .mx-6 {
      margin-left: 1.5rem !important;
      margin-right: 1.5rem !important;
    }

    .mx-0 {
      margin-left: auto !important;
      margin-right: auto !important;
    }

    /* Margin Y-axis (Top & Bottom) */
    .my-0 {
      margin-top: 0 !important;
      margin-bottom: 0 !important;
    }

    .my-1 {
      margin-top: 0.25rem !important;
      margin-bottom: 0.25rem !important;
    }

    .my-2 {
      margin-top: 0.5rem !important;
      margin-bottom: 0.5rem !important;
    }

    .my-3 {
      margin-top: 0.75rem !important;
      margin-bottom: 0.75rem !important;
    }

    .my-4 {
      margin-top: 1rem !important;
      margin-bottom: 1rem !important;
    }

    .my-5 {
      margin-top: 1.25rem !important;
      margin-bottom: 1.25rem !important;
    }

    .my-6 {
      margin-top: 1.5rem !important;
      margin-bottom: 1.5rem !important;
    }

    /* Padding */
    .p-0 {
      padding: 0 !important;
    }

    .p-1 {
      padding: 0.25rem !important;
    }

    .p-2 {
      padding: 0.5rem !important;
    }

    .p-3 {
      padding: 0.75rem !important;
    }

    .p-4 {
      padding: 1rem !important;
    }

    .p-5 {
      padding: 1.25rem !important;
    }

    .p-6 {
      padding: 1.5rem !important;
    }

    /* Padding Top */
    .pt-0 {
      padding-top: 0 !important;
    }

    .pt-1 {
      padding-top: 0.25rem !important;
    }

    .pt-2 {
      padding-top: 0.5rem !important;
    }

    .pt-3 {
      padding-top: 0.75rem !important;
    }

    .pt-4 {
      padding-top: 1rem !important;
    }

    .pt-5 {
      padding-top: 1.25rem !important;
    }

    .pt-6 {
      padding-top: 1.5rem !important;
    }

    /* Padding Right */
    .pr-0 {
      padding-right: 0 !important;
    }

    .pr-1 {
      padding-right: 0.25rem !important;
    }

    .pr-2 {
      padding-right: 0.5rem !important;
    }

    .pr-3 {
      padding-right: 0.75rem !important;
    }

    .pr-4 {
      padding-right: 1rem !important;
    }

    .pr-5 {
      padding-right: 1.25rem !important;
    }

    .pr-6 {
      padding-right: 1.5rem !important;
    }

    /* Padding Bottom */
    .pb-0 {
      padding-bottom: 0 !important;
    }

    .pb-1 {
      padding-bottom: 0.25rem !important;
    }

    .pb-2 {
      padding-bottom: 0.5rem !important;
    }

    .pb-3 {
      padding-bottom: 0.75rem !important;
    }

    .pb-4 {
      padding-bottom: 1rem !important;
    }

    .pb-5 {
      padding-bottom: 1.25rem !important;
    }

    .pb-6 {
      padding-bottom: 1.5rem !important;
    }

    /* Padding Left */
    .pl-0 {
      padding-left: 0 !important;
    }

    .pl-1 {
      padding-left: 0.25rem !important;
    }

    .pl-2 {
      padding-left: 0.5rem !important;
    }

    .pl-3 {
      padding-left: 0.75rem !important;
    }

    .pl-4 {
      padding-left: 1rem !important;
    }

    .pl-5 {
      padding-left: 1.25rem !important;
    }

    .pl-6 {
      padding-left: 1.5rem !important;
    }

    /* Padding X-axis (Left & Right) */
    .px-0 {
      padding-left: 0 !important;
      padding-right: 0 !important;
    }

    .px-1 {
      padding-left: 0.25rem !important;
      padding-right: 0.25rem !important;
    }

    .px-2 {
      padding-left: 0.5rem !important;
      padding-right: 0.5rem !important;
    }

    .px-3 {
      padding-left: 0.75rem !important;
      padding-right: 0.75rem !important;
    }

    .px-4 {
      padding-left: 1rem !important;
      padding-right: 1rem !important;
    }

    .px-5 {
      padding-left: 1.25rem !important;
      padding-right: 1.25rem !important;
    }

    .px-6 {
      padding-left: 1.5rem !important;
      padding-right: 1.5rem !important;
    }

    /* Padding Y-axis (Top & Bottom) */
    .py-0 {
      padding-top: 0 !important;
      padding-bottom: 0 !important;
    }

    .py-1 {
      padding-top: 0.25rem !important;
      padding-bottom: 0.25rem !important;
    }

    .py-2 {
      padding-top: 0.5rem !important;
      padding-bottom: 0.5rem !important;
    }

    .py-3 {
      padding-top: 0.75rem !important;
      padding-bottom: 0.75rem !important;
    }

    .py-4 {
      padding-top: 1rem !important;
      padding-bottom: 1rem !important;
    }

    .py-5 {
      padding-top: 1.25rem !important;
      padding-bottom: 1.25rem !important;
    }

    .py-6 {
      padding-top: 1.5rem !important;
      padding-bottom: 1.5rem !important;
    }

    .row::after {
      content: "";
      clear: both;
      display: table;
    }

    .col {
      float: left;
      width: 100%;
      box-sizing: border-box;
    }

    .col-1 {
      width: 8.333333%;
    }

    .col-2 {
      width: 16.666667%;
    }

    .col-3 {
      width: 25%;
    }

    .col-4 {
      width: 33.333333%;
    }

    .col-5 {
      width: 41.666667%;
    }

    .col-6 {
      width: 50%;
    }

    .col-7 {
      width: 58.333333%;
    }

    .col-8 {
      width: 66.666667%;
    }

    .col-9 {
      width: 75%;
    }

    .col-10 {
      width: 83.333333%;
    }

    .col-11 {
      width: 91.666667%;
    }

    .col-12 {
      width: 100%;
    }

    h1 {
      font-size: 2.4em;
      padding: 0;
      margin: 0;
      margin-bottom: 1em;
      /* 2 times the body font size */
    }

    h2 {
      font-size: 1.8em;
      padding: 0;
      margin: 0;
      margin-bottom: 1em;
      /* 1.5 times the body font size */
    }

    h3 {
      font-size: 1.17em;
      padding: 0;
      margin: 0;
      margin-bottom: 1em;
      /* 1.17 times the body font size */
    }

    h4 {
      font-size: 1em;
      padding: 0;
      margin: 0;
      margin-bottom: 1em;
      /* Same as body font size */
    }

    h5 {
      font-size: 0.83em;
      padding: 0;
      margin: 0;
      margin-bottom: 1em;
      /* 0.83 times the body font size */
    }

    h6 {
      font-size: 0.67em;
      padding: 0;
      margin: 0;
      margin-bottom: 1em;
      /* 0.67 times the body font size */
    }

    .text-left {
      text-align: left;
    }

    .text-center {
      text-align: center;
    }

    .text-right {
      text-align: right;
    }

    .text-justify {
      text-align: justify;
    }

    p {
      margin: 0;
      padding: 0;
      text-indent: 16px;

    }

    .no-indent {
      text-indent: 0px;

    }

    .float-right {
      float: right;
    }

    .float-left {
      float: left;
    }

    .disable-margin {
      margin: 0 !important;
    }

    .bold {
      font-weight: 700;
    }

    table {
      width: 100%;
      margin: 0;
      border-collapse: collapse;
    }

    table td {
      width: 68%;
      vertical-align: middle;
    }

    table td img {
      max-width: 65%
    }

    table td.label {
      width: 30%;
    }

    table td.colon {
      width: 2%;
      margin: 0;
      padding: 0;
      text-align: center;
    }

    .border tr td,
    th {
      border: 1px solid black;
      padding: 7px;

    }
  </style>


  <!--  -->
  <style>
    @page {
      margin: 2cm 2.5cm !important;
    }

    * {
      font-family: 'Times New Roman', Times, serif !important;
    }

    body {
      margin-top: .5cm;
      margin-bottom: 1.5cm;
      font-family: sans-serif;
      width: 100%;
      margin-right: auto;
      margin-left: auto;
    }

    .page {
      page-break-after: always;
      margin-bottom: 0;
    }

    main {
      padding: 0;
      margin: 0;
      font-size: 16px;
      line-height: 24px;
    }

    header {
      position: fixed;
      margin: -2cm -2cm 0;
      top: 0cm;
      left: 0cm;
      right: 0cm;
    }

    /** Define the footer rules **/
    footer {
      font-size: 14px;
      margin: 0cm -2cm -2cm;
      position: fixed;
      bottom: 0cm;
      left: 0cm;
      right: 0cm;
    }

    .color-box {
      width: 22px;
      height: 10px;
      margin-right: 10px;
      display: inline-block;
    }
  </style>

</head>

<body>
  <!-- Cover -->
  <div class="page">
    <header class="p-2" style="margin: -2cm -2.5cm 0cm;background-color:#ffffff;">
      <div class="row">
        <div class="col col-3 text-center mt-1" style="margin-left: .5cm">
          <div style="padding: 7px; border: 1px solid black; font-size: 90%">
            <p class="no-indent" style="border-bottom: 1px solid black">Dokumen Terbatas</p>
            <small>Diunduh pada: {{ $today }}</small>
          </div>
        </div>
        <div class="col col-2 float-right text-center">
          <img class="p-2" src="{{ public_path('img/ifri-nobg.png') }}" alt="" style="width: 95%">
        </div>
        <div class="col col-3 float-right text-center">
          <img class="p-1" src="{{ public_path('img/pi.png') }}" alt="" style="width: 60%">
        </div>
        <div class="col col-2 float-right text-center">
          <img class="my-5" src="{{ public_path('img/bumn.png') }}" alt="" style="width: 100%">
        </div>

      </div>

    </header>


    <div style="
    margin: 0 -1.5cm;
    ">
      <img src="{{ public_path('img/precix.png') }}" alt=""
        style="
            position: absolute;
            left: -40;
            top: 37%;
            transform: translateY(-50%);
            opacity: 0.2; /* Adjust the opacity as needed */
            width: 100%; /* Adjust the width as needed */
            z-index: -1;
    ">
      <div class="row" style="margin-top: 2.5rem;">
        <div class="col col-8">
          <h1 style="line-height: 1.5em;">PREDIKSI UNSUR HARA & REKOMENDASI PEMUPUKAN PADI</h1>
        </div>
      </div>

      <div style="margin-top: -9.2rem; margin-right: 85px;">
        <div class="row">
          <div class="col col-4"></div>
          <div class="col col-8">
            <div class="row">
              <div class="col col-12 text-right">
                <img src="{{ public_path('img/poligon4.png') }}" alt="" style="width: 35%">
              </div>
            </div>
            <div class="row">
              <div class="col col-12 text-center" style="margin-top: -2.7rem; margin-left: 10px">
                <img src="{{ public_path('img/poligon1.png') }}" alt="" style="width: 35%">
              </div>
            </div>
          </div>
        </div>
        <div class="row" style="margin-top: 1.2rem">
          <div class="col col-4" style="margin-top: 2rem; padding: 0">
            <div style="position: absolute; width: 300px">
              <h2 style="font-weight: normal; line-height: 1.5em">Lahan Mapping Bali Subak Umadesa</h2>
            </div>
          </div>
          <div class="col col-8">
            <div class="row">
              <div class="col col-12 text-right" style="margin-left: 3rem">
                <img src="{{ public_path('img/poligon2.png') }}" alt="" style="width: 35%">
              </div>
            </div>
            <div class="row">
              <div class="col col-12 text-center" style="margin-top: -3rem; margin-left: 10px">
                <img src="{{ public_path('img/poligon3.png') }}" alt="" style="width: 35%">
              </div>
            </div>
          </div>
        </div>
      </div>
      <div
        style="position: fixed; bottom: 0; background-image: linear-gradient(to bottom, #0773c1, #007eb8, #008299, #00836d, #197f3f, #407c2c, #58781b, #6d730c, #6d730c, #6d730c, #6d730c, #6d730c);">
        <div class="row">
          <div class="col col-5">
            <img src="{{ public_path('img/satelit.png') }}" alt="" style="width: 100%">
          </div>
          <div class="col col-1" style="width: 20px">

          </div>
          <div class="col col-5">
            <img src="{{ public_path('img/maria.jpg') }}" alt="" style="width: 150%">
          </div>
        </div>
      </div>
    </div>




    <footer class="p-4" style="margin: 0cm -2.5cm -2cm;background-color:#23325b; color: white;">
      <div class="row mt-2 p-2">
        <div class="col col-6">
          <h3>
            <a href="https://www.pupuk-indonesia.com"
              style="text-decoration: none; color: white;">https://www.pupuk-indonesia.com</a>
          </h3>
        </div>
        <div class="col col-6 text-right">
          <h3>Makmur Bersama Indonesia</h3>
        </div>
      </div>
    </footer>
  </div>
  <!-- End Cover -->

  <header class="p-5">
    <div class="row">
      <div class="col col-2">
        <img class="my-5" src="{{ public_path('img/bumn.png') }}" alt="" style="width: 100%">
      </div>
      <div class="col col-3 ml-2 ">
        <img class="p-1" src="{{ public_path('img/pi.png') }}" alt="" style="width: 60%">
      </div>
      <div class="col col-2 float-right">
        <img class="p-2" src="{{ public_path('img/ifri-white.png') }}" alt="" style="width: 95%">
      </div>
    </div>
  </header>
  <footer class="p-5">
    <div class="row">
      <div class="col col-3" style="vertical-align: middle;">
        <img src="{{ public_path('img/precix.png') }}" alt="" style="width: 70%">
      </div>
      <div class="col col-7" style="border-left: 2px solid black;">
        <p>Jl.Kemanggisan No.1 Jakarta Barat 75313</p>
        <p>DKI Jakarta</p>
      </div>
      <div class="col col-3 ml-4 text-center float-right">
        <div style="padding: 3px; border: 1px solid black">
          <p class="no-indent" style="border-bottom: 1px solid black">Dokumen Terbatas</p>
          <small>Diunduh pada: {{ $today }}</small>
        </div>
      </div>
    </div>
    <div>
      <div class="row mt-2 p-2" style="background-color: #4f81bd; color: white;">
        <div class="col col-6">
          <a href="https://www.pupuk-indonesia.com"
            style="text-decoration: none; color: white;">https://www.pupuk-indonesia.com</a>
        </div>
        <div class="col col-6 text-right">
          Phone : 082256316947
        </div>
      </div>
    </div>
  </footer>
  <main>

    <!-- Prakata -->
    <div class="page" id="prakata">
      <h3 class="text-center">PRAKATA</h3>
      <div class="text-justify">
        <p>
          Puji dan syukur kehadirat Allah SWT berkat petunjuk dan hidayah-Nya, Laporan Prediksi Unsur Hara & Rekomendasi
          Pemupukan Padi di lahan Subak Umadesadapat diselesaikan sesuai dengan jadwal yang ditentukan.
        </p>
        <p>
          Sejak tahun 2017,
          PT Pupuk Indonesia Grup bersama mitra ahli baik dari akademisi maupun bussiness start up telah mengembangkan
          platform pertanian presisi berbasis digital (Preci-X) untuk meningkatkan produktivitas pertanian dan mendukung
          pertanian berkelanjutan. Platform ini memanfaatkan teknologi remote sensing yang ada di satelit dan drone
          (UAV)
          serta menggunakan machine learning sebagai analysis tools-nya. Dengan fitur prediksi unsur hara, pengguna akan
          mendapatkan informasi kandungan dan distribusi unsur hara makro di lahan pertaniannya sehingga monitoring
          kondisi unsur hara pasca pemupukan dapat diperoleh secara realtime. Selain itu, platform ini memiliki fitur
          rekomendasi pemupukan spesifik tanaman dan lokasi. Khusus tanaman padi, platform ini juga menyediakan fitur
          prediksi biomasa panen yang dapat membantu perencanaan dan pengelolaan pasca panen.</p>
        <p>
          Dalam rangka pelindungan
          karya di bidang ilmu pengetahuan, aplikasi PreciX telah terdaftar pada Direktorat Jenderal Kekayaan
          Intelektual
          - Kementerian Hukum dan HAM dengan nomor pencatatan 000143780, tanggal 18 Desember 2018. Adapun dengan adanya
          laporan rekomendasi pemupukan Preci-X ini, dapat menjadi acuan Bapak/Ibu dalam kegiatan pemupukan secara
          presisi.
        </p>
      </div>

      <div id="sign-ifri" class="mt-5">
        <div class="row">
          <div class="col-4 float-right">
            <p class="no-indent">Jakarta, 19 Januari 2024</p>
            <div class="">
              <img class="" src="{{ public_path('img/ifri-sign.png') }}" alt="" style="width: 50%">
            </div>
            <p class="no-indent">Departemen Riset <br> PT Pupuk Indonesia</p>
          </div>
        </div>
      </div>
    </div>
    <!-- End Prakata -->

    <!-- Daftar Isi -->
    <div class="page" id="daftar-isi">
      <h3 class="text-center">DAFTAR ISI</h3>
      <div class="text-justify">
        
      </div>
    </div>
    <!-- End Daftar Isi -->

    <!-- Gambaran Umum -->
    <div class="page" id="gambaran-umum">
      <h3 class="text-center">Gambaran Umum Budidaya Pertanian</h3>
      <div class="text-justify">
        <p>
          Produktifitas pertanian lahan padi dapat dipengaruhi oleh beberapa faktor yaitu benih (faktor internal),
          lingkungan biotik dan abiotik (faktor eksternal) serta teknis budidaya. Berdasarkan hasil kajian riset secara
          sampling responden 300 petani padi yang memiliki luas lahan pada luasan 0,5 – 2,0 ha, dapat diketahui lebih
          lanjut beberapa faktor yang mempengaruhi produktivitas pertanian antara lain kualitas/jenis benih, penggunaan
          pupuk organik dan non-organik, dan penggunaan sumber daya manusia/tenaga. Faktor-faktor tersebut menjadi
          parameter yang perlu diperhatikan oleh petani untuk meningkatkan produktifitas lahan pertanian padi.
        </p>
        <div class="mb-2" style="box-sizing: border-box; text-align: center; width: 100%;">
          <img class=" text-center" src="{{ public_path('img/n2o.png') }}" alt="" style="width: 65%">
          <p class="no-indent"> <i>Gambar Siklus Nitrogen dalam Tanah</i> </p>
        </div>
        <p>
          Dalam hal manajemen pemupukan lahan pertanian padi, penentuan dosis pupuk (organik ataupun an-organik) menjadi
          parameter penting yang harus diperhatikan mengingat setiap jenis tanaman memiliki kebutuhan akan unsur hara
          yang berbeda-beda. Selain itu, variasi lahan seperti kondisi geologi, cuaca, dan aktifitas pertanian juga akan
          mempengaruhi tingkat ketersediaan unsur hara alami di lahan.
        </p>
        <p>
          Pada saat pupuk diaplikasikan ke lahan, maka terjadi proses nutrient uptake dan nutrient losses. Sekitar 50%
          unsur hara di dalam pupuk yang dapat diserap oleh tanaman. Sisa nutrisi akan terlepas ke lingkungan atau
          nutrient losses melalui mekanisme leaching (larut terbawa air) dan volatilisasi (penguapan). Pemakaian pupuk
          sesuai dosis (precision farming) memiliki beberapa dampak antara lain sebagai berikut:
        </p>
        <p class="no-indent bold mt-2">Aspek Produktifitas Lahan (Dampak Utama)</p>
        <p>
          Setiap jenis tanaman memiliki kebutuhan akan unsur hara yang berbeda-beda. Selain itu, variasi lahan seperti
          kondisi geologi, cuaca, dan aktifitas pertanian juga akan mempengaruhi tingkat ketersediaan unsur hara alami
          di lahan. Sehingga kebutuhan pupuk yang berasal dari aktifitas pemupukan (agro input) memang bersifat spesifik
          baik dari sisi komoditas maupun lahan. Pemberian pupuk tidak sesuai kebutuhan tanaman, maka akan berpotensi
          terjadinya kekurangan nutrisi sehingga produktifitas lahan akan rendah. Sebaliknya jika terjadi kelebihan
          penggunaan pupuk, maka akan menambah biaya pertanian.
        </p>
        <p class="no-indent bold mt-2">Aspek Lingkungan (Dampak Lain)</p>
        <p>
          Dampak lain penggunaan pupuk tidak sesuai kebutuhan (berlebih) adalah meningkatkan potensi nutrient losses.
          Akumulasi pelepasan gas turunan Nitrogen (N2O dan NOx) akan berdampak pada pemanasan suhu lingkungan global
          dan perubahan cuaca. Hal ini tentunya akan semakin mempersulit petani dala menentukan kegiatan pertanian
          seperti aktivitas tanam dan pemupukan. Selain itu adanya bencana alam yang mengancam tidak hanya pertanian
          tetapi juga akan mengancam kestabilan ekosistem.
        </p>
      </div>
    </div>
    <!-- End Gambaran Umum -->

    <!-- Informasi Preci X -->
    <div class="page" id="informasi-precix">
      <h3 class="text-center">Informasi Pemrosesan PreciX</h3>
      <div>
        <table>
          <tr>
            <td class="label">No. Referensi</td>
            <td class="colon">:</td>
            <td>005/BESTPURCH/DOC/I/2024</td>
          </tr>
          <tr>
            <td class="label">Nama Lahan</td>
            <td class="colon">:</td>
            <td>Subak Umadesa</td>
          </tr>
          <tr>
            <td class="label">Luas area yang terproses</td>
            <td class="colon">:</td>
            <td>11.370 Ha</td>
          </tr>
          <tr>
            <td class="label">Lokasi Sawah</td>
            <td class="colon">:</td>
            <td>Denpasar Timur, Subak Umadesa</td>
          </tr>
          <tr>
            <td class="label">Hafi Setelah Tanam</td>
            <td class="colon">:</td>
            <td>Sesuai SHP</td>
          </tr>
          <tr>
            <td class="label">Lokasi Pemrosesan</td>
            <td class="colon">:</td>
            <td>Provinsi Bali</td>
          </tr>
          <tr>
            <td class="label">Jenis Citra</td>
            <td class="colon">:</td>
            <td>Drone Mavic 3 Muktispectral</td>
          </tr>
          <tr>
            <td class="label">Tanggal Pemrosesan</td>
            <td class="colon">:</td>
            <td>19 Januari 2024</td>
          </tr>
          <tr>
            <td class="label">Proporsi Dosis</td>
            <td class="colon">:</td>
            <td><span class="highlight-bold">100% (untuk 1 musim tanam)</span></td>
          </tr>
        </table>

        <p class="mt-2">Terdapat 4 zona hubungan antara kadar unsur hara dengan status nutrisi. Secara umum
          warna-warna
          pada peta sebaran nutrisi dapat dijelaskan sebagai berikut:</p>
        <div class="row mt-2">
          <div class="col col-3"></div>
          <div class="col col-6 p-1 px-2" style="border: 1px solid black">
            <table>
              <tr>
                <td class="label">
                  <div class="color-box" style="background-color: red;"></div>
                  Merah
                </td>
                <td class="colon pr-3">=</td>
                <td>200</td>
              </tr>
              <tr>
                <td class="label">
                  <div class="color-box" style="background-color: orange;"></div>
                  Orange
                </td>
                <td class="colon pr-3">=</td>
                <td>300</td>
              </tr>
              <tr>
                <td class="label">
                  <div class="color-box" style="background-color: yellow;"></div>
                  Kuning
                </td>
                <td class="colon pr-3">=</td>
                <td>300</td>
              </tr>
              <tr>
                <td class="label">
                  <div class="color-box" style="background-color: green;"></div>
                  Hijau
                </td>
                <td class="colon pr-3">=</td>
                <td>300</td>
              </tr>
            </table>
          </div>
        </div>
        <p class="no-indent">
          Rekomendasi pemupukan padi memperhatikan status hara pada kondisi di atas agar pemupukan menjadi efektif dan
          efisien.
        </p>
      </div>
    </div>
    <!-- End Informasi Preci X -->

    <div class="page">
      <h3 class="text-center">Rekomendasi Produk</h3>
      <div class="text-justify">
        <p class="mb-3">Untuk memenuhi kebutuhan hara tersebut, kami menyediakan beberapa produk yang sesuai untuk
          produktivitas
          tanaman
          padi Anda. Beberapa produk berkualitas yang kami sediakan terdapat dalam tabel di bawah.</p>
        <table class="border mt-2">
          <tr>
            <th class="text-center">Pupuk</th>
            <th class="text-center">Deskripsi</th>
          </tr>
          <tr>
            <td class="text-center" style="width: 40%;">
              <img
                src="https://www.pupuk-indonesia.com/assets/img/product/pupuk-indonesia-produk-single-branding-urea.png"
                alt="">
              <h4>Pupuk Nitrea</h4>
            </td>
            <td class="" style="width: 60%; vertical-align: top;">Lorem ipsum dolor sit amet consectetur
              adipisicing
              elit. Officia fuga temporibus, nobis maiores, a eius hic repellat quia repellendus cupiditate mollitia
              expedita, similique rem cum reprehenderit in necessitatibus omnis quos!</td>
          </tr>
          <tr>
            <td class="text-center" style="width: 40%;">
              <img
                src="https://www.pupuk-indonesia.com/assets/img/product/pupuk-indonesia-produk-single-branding-npk.png"
                alt="">
              <h4>Pupuk Phonska Plus</h4>
            </td>
            <td class="" style="width: 60%; vertical-align: top;">Lorem ipsum dolor sit amet consectetur
              adipisicing
              elit. Officia fuga temporibus, nobis maiores, a eius hic repellat quia repellendus cupiditate mollitia
              expedita, similique rem cum reprehenderit in necessitatibus omnis quos!</td>
          </tr>
        </table>
      </div>
    </div>

    <!-- Penutup -->
    <div class="page">
      <h3 class="text-center">Penutup</h3>
      <div class="text-justify">
        <p>
          Dengan tersusunnya laporan rekomendasi pemupukan menggunakan aplikasi PreciX di Lahan Subak Umadesa diharapkan
          dapat menghemat biaya dalam menganalisa kebutuhan pupuk dan menjadi acuan dalam kegiatan pemupukan.
        </p>
        <p>Demikian kami sampaikan, terima kasih atas kepercayaan Bapak/Ibu telah menggunakan jasa rekomendedasi
          pemupukan Padi
          PreciX.</p>
      </div>
    </div>
    <!-- End Penutup -->
  </main>


</body>

</html>
