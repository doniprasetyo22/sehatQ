<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="theme_color" content="#ffffff">   
  <title>SehatQ | Test</title>
  <!-- Favicon -->
  <!-- <link href="/assets/icon/72x72.png" rel="icon" type="image/png"> -->
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.min.css">
  <!-- Icons -->
  <link href="/assets/js/plugins/nucleo/css/nucleo.css" rel="stylesheet" />
  <link href="/assets/js/plugins/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet" />

  <!-- CSS Files -->
  <link href="/assets/css/argon-dashboard.css?v=1.1.0" rel="stylesheet" />

  <style>
    #footer {
      position: fixed;
      bottom: 0;
      width: 100%;
      height: 5rem;
    }

    .swiper-container {
      width: 150%;
      height: 100%;
    }
    .swiper-slide {
      text-align: center;
      font-size: 18px;
      background: #fff;
      /* Center slide text vertically */
      display: -webkit-box;
      display: -ms-flexbox;
      display: -webkit-flex;
      display: flex;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      -webkit-justify-content: center;
      justify-content: center;
      -webkit-box-align: center;
      -ms-flex-align: center;
      -webkit-align-items: center;
      align-items: center;
    }

    .love2 {
      position: absolute;
      top: 5%;
      left: 5%;
      width: 10%;
    }

    .love2 .circle4 {
      width: 50px;
      height: 50px;
      border-radius: 50%;
      font-size: 24px;
      color: #000;
      line-height: 60px;
      text-align: center;
      background: #ffcb45
    }

    .love {
      position: absolute;
      top: 2%;
      left: 77%;
      width: 16%;
    }

    .love .circle3 {
      width: 60px;
      height: 60px;
      border-radius: 50%;
      font-size: 25px;
      color: #000;
      line-height: 70px;
      text-align: center;
      background: #ffcb45
    }

    #myUL {
      list-style-type: none;
      padding: 0;
      margin: 0;
    }

    #myUL li a {
      margin-top: -1px; /* Prevent double borders */
      background-color: #ffffff;
      text-decoration: none;
      font-size: 18px;
      color: black;
      display: block
    }

    #myUL li a:hover:not(.header) {
      background-color: #eee;
    }
  </style>

</head>
<body class="">
  <nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-iolo-blue" id="sidenav-main">
    {{ csrf_field() }}
    <div class="container-fluid">
      <!-- Toggler -->
        <table width="100%">
            <tr>
                <td width="5%" align="left">
                    <button class="navbar-toggler" type="button" >
                        <span style="color: white;" id="icons" class="ni ni-favourite-28"></span>
                      </button>
                </td>
                <td>
                    <form class="d-md-none">
                      <div class="input-group input-group-rounded input-group-merge">
                        <input type="search" class="form-control form-control-rounded form-control-prepended shadow" id="search" onkeyup="myFunction()" placeholder="Search" aria-label="Search">
                      </div>
                    </form>
                </td>
            </tr>
        </table>
    </div>
  </nav>
