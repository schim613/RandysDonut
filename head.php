<!DOCTYPE html>
<html lang="ko">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>랜디스 도넛</title>

  <!-- 제이쿼리 불러오기 -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.17.19/lodash.min.js"></script>

  <!-- imagesloaded -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.imagesloaded/4.1.4/imagesloaded.pkgd.min.js"></script>

  <!-- 풀페이지 -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.1.2/fullpage.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.1.2/fullpage.css">

  <!-- 테일윈드 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.4/tailwind.min.css">
  <!-- 테일윈드 치트시트 : https://nerdcave.com/tailwind-cheat-sheet -->
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

  <!-- 스와이퍼 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.8.4/swiper-bundle.min.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.8.4/swiper-bundle.min.js">
  
  <!-- light box -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css">

  <!-- 사이트 공통 JS -->
  <script src="resource/common.js" defer></script>

  <!-- 사이트 공통 CSS -->
  <link rel="stylesheet" href="resource/common.css">
</head>

<body class="<?=$pagecode == "home" ? "" : "bg__navy"?>">
  <header class="top-bar relative <?=$pagecode == "home" ? "" : "sub-page__top-bar"?>">
    <div class="wrap flex h-full">
      <ul class="main-menu site-wrap flex items-center justify-around">
        <li class="sub-menu">BRAND</li>
        <li class="sub-menu">MENU</li>
        <li class="sub-menu">
          <img src="resource/img/logo.png" alt="로고" class="logo">
        </li>
        <li class="sub-menu">STORE</li>
        <li class="sub-menu">EVENT</li>
      </ul>
    </div>
  </header>