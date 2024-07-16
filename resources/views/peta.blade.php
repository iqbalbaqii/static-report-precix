@php
  $today = date('d/m/y H:i:s');
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
    .mx-auto {
      margin-left: auto !important;
      margin-right: auto !important;
    }

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
      font-size: 1.5em;
      padding: 0;
      margin: 0;
      margin-bottom: 1em;
      /* 1.5 times the body font size */
    }

    h3 {
      font-size: 1.17em;
      padding: 0;
      margin: 0;
      margin-bottom: .5em;
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
      margin: 0cm !important;
      size: A4 landscape !important;
    }

    * {
      font-family: Arial, Helvetica, sans-serif !important;
    }

    body {
      font-family: Arial, Helvetica, sans-serif;
      width: 100vw;
      height: 100vh;
      padding-top: 1.5cm !important;
      padding-bottom: 30px !important;

    }

    .map-container {
      font-size: 12px;
      width: 90vh;
      height: 100vh;
      padding: 10px;
      margin-right: auto;
      margin-left: auto;
      margin-top: -57px;
      margin-bottom: -37px;

    }



    main {
      padding: 0;
      margin: 0;
    }

    .page {
      page-break-after: always;
      margin-bottom: 0;
    }

    .border {
      border: 1px solid black;
    }

    .h-100 {
      height: 98.6%;
    }

    .color-box {
      width: 35px;
      height: 15px;
      margin-right: 10px;
      display: inline-block;
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
      font-size: 12px;
      position: fixed;
      bottom: .3cm;
      left: 0cm;
      right: 0cm;
    }
  </style>

</head>

<body>
  <footer>
    <div class="row">
      <div class="col col-2 ml-4 text-center">
        <div style="padding: 2px; border: 1px solid black; background-color: #fff; color: black">
          <p class="no-indent" style="border-bottom: 1px solid black">Dokumen Terbatas</p>
          <small>Diunduh pada: {{ $today }}</small>
        </div>
      </div>
    </div>
  </footer>
  <div>

    {{-- Lahan --}}
    <div class="page">
      <div class="map-container">
        <div class="p-2 border">
          <div class="row">
            <div class="col col-8 h-100" style="width: 70%;">
              <img src="{{ public_path('img/sample2.jpg') }}" alt="" style="width: 100%; height: 100%">
            </div>
            <div class="col col-3 border float-right">
              <div class="text-center"
                style="position: relative; border-bottom: 1px solid black; height: 33%; width: 100%;">
                <h2 class="text-center" style="line-height: 26px">
                  PETA PETAK SAWAH SUBAK UMADESA
                </h2>
                <div class="my-5"></div>
                <img src="{{ public_path('img/north.png') }}" alt="" style="width: 20%; margin-top: 0px"
                  class="text-center">
                <p class="no-indent mt-2">Skala 1:1.900</p>

                <div class="text-left" style="width: 60%;margin: 0 auto;">
                  <small>0</small>
                  <small style="margin-left: 35%">0,04</small>
                  <small class="float-right">0,08</small>
                </div>
                <div style=" border: 1px solid black; width: 60%; margin: 0 auto; height: 7px">
                  <div style="height: 100%; width: 50%; background-color: black;"></div>
                </div>

              </div>
              <div
                style="position: relative; vertical-align: middle; border-bottom: 1px solid black; height: 33%; width: 100%;">
                <div class="p-3">
                  <h3>Legenda</h3>
                  <div>
                    <div class="color-box" style="border: 2px solid red; vertical-align: middle"></div> <span
                      style="vertical-align: middle">Batas Sawah</span>
                  </div>
                  <h3>Sebaran Unsur {P} (%)</h3>
                  <ul class="p-0 mt-0" style="list-style: none; line-height: 20px">
                    <li>
                      <div class="color-box" style="background-color: #2892c6; vertical-align: middle"></div> <span
                        class="" style="vertical-align: middle">-0,15 - 0,11</span>
                    </li>
                    <li>
                      <div class="color-box" style="background-color: #a1c19c; vertical-align: middle"></div> <span
                        class="" style="vertical-align: middle">0,12 - 0,14</span>
                    </li>
                    <li>
                      <div class="color-box" style="background-color: #fafa62; vertical-align: middle"></div> <span
                        class="" style="vertical-align: middle">0,15 - 0,16</span>
                    </li>
                    <hr class="mt-0 p-0" style="margin-left: 0px; border: 1px solid black;">
                    <span class="m-0 p-0" style="position: absolute; left: 76%; top:48%; font-size: 9px">Critical
                      level</span>
                    <li>
                      <div class="color-box" style="background-color: #fa8c33; vertical-align: middle"></div> <span
                        class="" style="vertical-align: middle">0,12 - 0,14</span>
                    </li>
                    <li>
                      <div class="color-box" style="background-color: #e90e16; vertical-align: middle"></div> <span
                        class="" style="vertical-align: middle">0,15 - 0,16</span>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="p-1" style="position: relative; height: 32%; line-height: 18px">
                <p class="no-indent">Sumber: Foto Udara Bali</p>
                <p class="no-indent">Pupuk Indonesia</p>
                <div class="mt-2 text-center">
                  <img src="{{ public_path('img/sample1.png') }}" alt=""
                    style="width: 265px; max-height: 150px;" class="text-center">
                </div>

                <div
                  style="
                    position: absolute;
                    bottom: 0;
                    margin-bottom: 0;
                    ">
                  <div class="text-center">
                    <img style="margin: 0" src="{{ public_path('img/bumn.png') }}" alt="" style="width: 30%">
                    <img style="margin: 0" src="{{ public_path('img/pi.png') }}" alt="" style="width: 20%">
                    <img style="margin: 0" src="{{ public_path('img/ifri-white.png') }}" alt=""
                      style="width: 20%">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


    </div>

    {{-- Unsur N --}}
    <div class="page">
      <div class="map-container">
        <div class="p-2 border">
          <div class="row">
            <div class="col col-8 h-100" style="width: 70%;">
              <img src="{{ public_path('img/sample2.jpg') }}" alt="" style="width: 100%; height: 100%">
            </div>
            <div class="col col-3 border float-right">
              <div class="text-center"
                style="position: relative; border-bottom: 1px solid black; height: 33%; width: 100%;">
                <h2 class="text-center" style="line-height: 26px">
                  PETA PETAK SAWAH SUBAK UMADESA
                </h2>
                <div class="my-5"></div>
                <img src="{{ public_path('img/north.png') }}" alt="" style="width: 20%; margin-top: 0px"
                  class="text-center">
                <p class="no-indent mt-2">Skala 1:1.900</p>

                <div class="text-left" style="width: 60%;margin: 0 auto;">
                  <small>0</small>
                  <small style="margin-left: 35%">0,04</small>
                  <small class="float-right">0,08</small>
                </div>
                <div style=" border: 1px solid black; width: 60%; margin: 0 auto; height: 7px">
                  <div style="height: 100%; width: 50%; background-color: black;"></div>
                </div>

              </div>
              <div
                style="position: relative; vertical-align: middle; border-bottom: 1px solid black; height: 33%; width: 100%;">
                <div class="p-3">
                  <h3>Legenda</h3>
                  <div>
                    <div class="color-box" style="border: 2px solid red; vertical-align: middle"></div> <span
                      style="vertical-align: middle">Batas Sawah</span>
                  </div>
                  <h3>Sebaran Unsur {P} (%)</h3>
                  <ul class="p-0 mt-0" style="list-style: none; line-height: 20px">
                    <li>
                      <div class="color-box" style="background-color: #2892c6; vertical-align: middle"></div> <span
                        class="" style="vertical-align: middle">-0,15 - 0,11</span>
                    </li>
                    <li>
                      <div class="color-box" style="background-color: #a1c19c; vertical-align: middle"></div> <span
                        class="" style="vertical-align: middle">0,12 - 0,14</span>
                    </li>
                    <li>
                      <div class="color-box" style="background-color: #fafa62; vertical-align: middle"></div> <span
                        class="" style="vertical-align: middle">0,15 - 0,16</span>
                    </li>
                    <hr class="mt-0 p-0" style="margin-left: 0px; border: 1px solid black;">
                    <span class="m-0 p-0" style="position: absolute; left: 76%; top:48%; font-size: 9px">Critical
                      level</span>
                    <li>
                      <div class="color-box" style="background-color: #fa8c33; vertical-align: middle"></div> <span
                        class="" style="vertical-align: middle">0,12 - 0,14</span>
                    </li>
                    <li>
                      <div class="color-box" style="background-color: #e90e16; vertical-align: middle"></div> <span
                        class="" style="vertical-align: middle">0,15 - 0,16</span>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="p-1" style="position: relative; height: 32%; line-height: 18px">
                <p class="no-indent">Sumber: Foto Udara Bali</p>
                <p class="no-indent">Pupuk Indonesia</p>
                <div class="mt-2 text-center">
                  <img src="{{ public_path('img/sample1.png') }}" alt=""
                    style="width: 265px; max-height: 150px;" class="text-center">
                </div>

                <div
                  style="
                    position: absolute;
                    bottom: 0;
                    margin-bottom: 0;
                    ">
                  <div class="text-center">
                    <img style="margin: 0" src="{{ public_path('img/bumn.png') }}" alt=""
                      style="width: 30%">
                    <img style="margin: 0" src="{{ public_path('img/pi.png') }}" alt="" style="width: 20%">
                    <img style="margin: 0" src="{{ public_path('img/ifri-white.png') }}" alt=""
                      style="width: 20%">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


    </div>

    {{-- Unsur P --}}
    <div class="page">
      <div class="map-container">
        <div class="p-2 border">
          <div class="row">
            <div class="col col-8 h-100" style="width: 70%;">
              <img src="{{ public_path('img/sample2.jpg') }}" alt="" style="width: 100%; height: 100%">
            </div>
            <div class="col col-3 border float-right">
              <div class="text-center"
                style="position: relative; border-bottom: 1px solid black; height: 33%; width: 100%;">
                <h2 class="text-center" style="line-height: 26px">
                  PETA PETAK SAWAH SUBAK UMADESA
                </h2>
                <div class="my-5"></div>
                <img src="{{ public_path('img/north.png') }}" alt="" style="width: 20%; margin-top: 0px"
                  class="text-center">
                <p class="no-indent mt-2">Skala 1:1.900</p>

                <div class="text-left" style="width: 60%;margin: 0 auto;">
                  <small>0</small>
                  <small style="margin-left: 35%">0,04</small>
                  <small class="float-right">0,08</small>
                </div>
                <div style=" border: 1px solid black; width: 60%; margin: 0 auto; height: 7px">
                  <div style="height: 100%; width: 50%; background-color: black;"></div>
                </div>

              </div>
              <div
                style="position: relative; vertical-align: middle; border-bottom: 1px solid black; height: 33%; width: 100%;">
                <div class="p-3">
                  <h3>Legenda</h3>
                  <div>
                    <div class="color-box" style="border: 2px solid red; vertical-align: middle"></div> <span
                      style="vertical-align: middle">Batas Sawah</span>
                  </div>
                  <h3>Sebaran Unsur {P} (%)</h3>
                  <ul class="p-0 mt-0" style="list-style: none; line-height: 20px">
                    <li>
                      <div class="color-box" style="background-color: #2892c6; vertical-align: middle"></div> <span
                        class="" style="vertical-align: middle">-0,15 - 0,11</span>
                    </li>
                    <li>
                      <div class="color-box" style="background-color: #a1c19c; vertical-align: middle"></div> <span
                        class="" style="vertical-align: middle">0,12 - 0,14</span>
                    </li>
                    <li>
                      <div class="color-box" style="background-color: #fafa62; vertical-align: middle"></div> <span
                        class="" style="vertical-align: middle">0,15 - 0,16</span>
                    </li>
                    <hr class="mt-0 p-0" style="margin-left: 0px; border: 1px solid black;">
                    <span class="m-0 p-0" style="position: absolute; left: 76%; top:48%; font-size: 9px">Critical
                      level</span>
                    <li>
                      <div class="color-box" style="background-color: #fa8c33; vertical-align: middle"></div> <span
                        class="" style="vertical-align: middle">0,12 - 0,14</span>
                    </li>
                    <li>
                      <div class="color-box" style="background-color: #e90e16; vertical-align: middle"></div> <span
                        class="" style="vertical-align: middle">0,15 - 0,16</span>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="p-1" style="position: relative; height: 32%; line-height: 18px">
                <p class="no-indent">Sumber: Foto Udara Bali</p>
                <p class="no-indent">Pupuk Indonesia</p>
                <div class="mt-2 text-center">
                  <img src="{{ public_path('img/sample1.png') }}" alt=""
                    style="width: 265px; max-height: 150px;" class="text-center">
                </div>

                <div
                  style="
                    position: absolute;
                    bottom: 0;
                    margin-bottom: 0;
                    ">
                  <div class="text-center">
                    <img style="margin: 0" src="{{ public_path('img/bumn.png') }}" alt=""
                      style="width: 30%">
                    <img style="margin: 0" src="{{ public_path('img/pi.png') }}" alt="" style="width: 20%">
                    <img style="margin: 0" src="{{ public_path('img/ifri-white.png') }}" alt=""
                      style="width: 20%">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


    </div>

    {{-- Unsur K --}}
    <div class="">
      <div class="map-container">
        <div class="p-2 border">
          <div class="row">
            <div class="col col-8 h-100" style="width: 70%;">
              <img src="{{ public_path('img/sample2.jpg') }}" alt="" style="width: 100%; height: 100%">
            </div>
            <div class="col col-3 border float-right">
              <div class="text-center"
                style="position: relative; border-bottom: 1px solid black; height: 33%; width: 100%;">
                <h2 class="text-center" style="line-height: 26px">
                  PETA PETAK SAWAH SUBAK UMADESA
                </h2>
                <div class="my-5"></div>
                <img src="{{ public_path('img/north.png') }}" alt="" style="width: 20%; margin-top: 0px"
                  class="text-center">
                <p class="no-indent mt-2">Skala 1:1.900</p>

                <div class="text-left" style="width: 60%;margin: 0 auto;">
                  <small>0</small>
                  <small style="margin-left: 35%">0,04</small>
                  <small class="float-right">0,08</small>
                </div>
                <div style=" border: 1px solid black; width: 60%; margin: 0 auto; height: 7px">
                  <div style="height: 100%; width: 50%; background-color: black;"></div>
                </div>

              </div>
              <div
                style="position: relative; vertical-align: middle; border-bottom: 1px solid black; height: 33%; width: 100%;">
                <div class="p-3">
                  <h3>Legenda</h3>
                  <div>
                    <div class="color-box" style="border: 2px solid red; vertical-align: middle"></div> <span
                      style="vertical-align: middle">Batas Sawah</span>
                  </div>
                  <h3>Sebaran Unsur {P} (%)</h3>
                  <ul class="p-0 mt-0" style="list-style: none; line-height: 20px">
                    <li>
                      <div class="color-box" style="background-color: #2892c6; vertical-align: middle"></div> <span
                        class="" style="vertical-align: middle">-0,15 - 0,11</span>
                    </li>
                    <li>
                      <div class="color-box" style="background-color: #a1c19c; vertical-align: middle"></div> <span
                        class="" style="vertical-align: middle">0,12 - 0,14</span>
                    </li>
                    <li>
                      <div class="color-box" style="background-color: #fafa62; vertical-align: middle"></div> <span
                        class="" style="vertical-align: middle">0,15 - 0,16</span>
                    </li>
                    <hr class="mt-0 p-0" style="margin-left: 0px; border: 1px solid black;">
                    <span class="m-0 p-0" style="position: absolute; left: 76%; top:48%; font-size: 9px">Critical
                      level</span>
                    <li>
                      <div class="color-box" style="background-color: #fa8c33; vertical-align: middle"></div> <span
                        class="" style="vertical-align: middle">0,12 - 0,14</span>
                    </li>
                    <li>
                      <div class="color-box" style="background-color: #e90e16; vertical-align: middle"></div> <span
                        class="" style="vertical-align: middle">0,15 - 0,16</span>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="p-1" style="position: relative; height: 32%; line-height: 18px">
                <p class="no-indent">Sumber: Foto Udara Bali</p>
                <p class="no-indent">Pupuk Indonesia</p>
                <div class="mt-2 text-center">
                  <img src="{{ public_path('img/sample1.png') }}" alt=""
                    style="width: 265px; max-height: 150px;" class="text-center">
                </div>

                <div
                  style="
                    position: absolute;
                    bottom: 0;
                    margin-bottom: 0;
                    ">
                  <div class="text-center">
                    <img style="margin: 0" src="{{ public_path('img/bumn.png') }}" alt=""
                      style="width: 30%">
                    <img style="margin: 0" src="{{ public_path('img/pi.png') }}" alt="" style="width: 20%">
                    <img style="margin: 0" src="{{ public_path('img/ifri-white.png') }}" alt=""
                      style="width: 20%">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


    </div>

  </div>
</body>

</html>
