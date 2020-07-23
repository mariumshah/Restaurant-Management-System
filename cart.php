<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Azure Resturant</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

  <!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">
	<!-- Flaticons  -->
	<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
	<!-- Date Picker -->
	<link rel="stylesheet" href="css/bootstrap-datepicker.css">

	<link rel="stylesheet" href="css/style.css">


	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	<style>
		@font-face {
  font-family: 'icomoon';
  src: url("../fonts/icomoon/icomoon.eot?srf3rx");
  src: url("../fonts/icomoon/icomoon.eot?srf3rx#iefix") format("embedded-opentype"), url("../fonts/icomoon/icomoon.ttf?srf3rx") format("truetype"), url("../fonts/icomoon/icomoon.woff?srf3rx") format("woff"), url("../fonts/icomoon/icomoon.svg?srf3rx#icomoon") format("svg");
  font-weight: normal;
  font-style: normal; }

/* =======================================================
*
* 	Template Style 
*	Edit this section
*
* ======================================================= */
body {
  font-family: "Poppins", Arial, sans-serif;
  line-height: 1.8;
  font-size: 15px;
  font-weight: 400;
  background: #FBFBFB;
  color: #7d7d7d; }
  body.menu-show {
    overflow: hidden;
    position: fixed;
    height: 100%;
    width: 100%; }

#colorlib-wrapper {
  height: 100%;
  width: 100%;
  overflow: hidden; }
  #colorlib-wrapper > div {
    width: 100%;
    height: 100%;
    overflow-y: hidden; }

a {
  color: #FF6107;
  text-decoration: none;
  -webkit-transition: 0.5s;
  -o-transition: 0.5s;
  transition: 0.5s; }
  a:hover {
    text-decoration: underline;
    color: #FF6107; }
  a:focus, a:active {
    outline: none; }

p, span {
  margin-bottom: 1.5em;
  font-weight: 400;
  font-family: "Poppins", Arial, sans-serif; }

ul, ol {
  display: block;
  margin-bottom: 1.5em; }

span {
  font-size: 16px; }

h1, h2, h3, h4, h5, h6 {
  color: #404044;
  font-family: "Lora", Georgia, serif;
  margin: 0 0 30px 0; }

::-webkit-selection {
  color: #fcfcfc;
  background: #FF6107; }

::-moz-selection {
  color: #fcfcfc;
  background: #FF6107; }

::selection {
  color: #fcfcfc;
  background: #FF6107; }

#colorlib-page {
  position: relative;
  -webkit-transition: all 0.8s cubic-bezier(0.175, 0.885, 0.32, 1.275);
  -moz-transition: all 0.8s cubic-bezier(0.175, 0.885, 0.32, 1.275);
  -ms-transition: all 0.8s cubic-bezier(0.175, 0.885, 0.32, 1.275);
  -o-transition: all 0.8s cubic-bezier(0.175, 0.885, 0.32, 1.275);
  transition: all 0.8s cubic-bezier(0.175, 0.885, 0.32, 1.275);
  -webkit-transform: scale(1);
  -moz-transform: scale(1);
  -ms-transform: scale(1);
  -o-transform: scale(1);
  transform: scale(1); }
  .menu-show #colorlib-page {
    -webkit-transform: scale(1.01);
    -moz-transform: scale(1.01);
    -ms-transform: scale(1.01);
    -o-transform: scale(1.01);
    transform: scale(1.01);
    position: relative; }
    .menu-show #colorlib-page:after {
      position: absolute;
      top: 0;
      bottom: 0;
      left: 0;
      right: 0;
      content: '';
      background: rgba(0, 0, 0, 0.4); }

.ftco-section-parallax {
  position: relative; }
  .ftco-section-parallax .parallax-img {
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center center;
    position: relative;
    padding: 1em 0;
    background: #fff; }
    .ftco-section {
  padding: 9em 0;
  position: relative; }
  @media (max-width: 767.98px) {
    .ftco-section {
      padding: 6em 0; } }


.ftco-cart button i {
  color: #ffa45c; }

.ftco-cart .quantity-left-minus {
  background: transparent;
  padding: 16px 20px; }

.ftco-cart .quantity-right-plus {
  background: transparent;
  padding: 16px 20px; }

.ftco-cart button, .ftco-cart .form-control {
  height: 54px !important;
  text-align: center;
  bordeR: 1px solid rgba(0, 0, 0, 0.05) !important;
  color: #000000 !important;
  padding: 0;
  font-size: 14px; }

.ftco-cart .form-group {
  position: relative; }
  .ftco-cart .form-group .form-control {
    padding-right: 40px; }
  .ftco-cart .form-group .icon {
    position: absolute;
    top: 50%;
    right: 20px;
    font-size: 14px;
    -webkit-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    transform: translateY(-50%);
    color: #ffa45c; }
    .ftco-cart .form-group .icon span {
      color: #ffa45c; }
    @media (max-width: 767.98px) {
      .ftco-cart .form-group .icon {
        right: 10px; } }
  .ftco-cart .form-group .select-wrap {
    position: relative; }
    .ftco-cart .form-group .select-wrap select {
      font-size: 14px;
      -webkit-appearance: none;
      -moz-appearance: none;
      appearance: none; }

      .billing-heading {
  font-size: 24px;
  text-transform: uppercase; }

.billing-form .form-group {
  position: relative; }

.billing-form label {
  color: #000000;
  font-size: 14px; }

.billing-form .icon {
  position: absolute;
  top: 50% !important;
  right: 15px;
  font-size: 14px;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%); }
  .billing-form .icon span {
    color: black !important; }

.billing-form .select-wrap, .billing-form .input-wrap {
  position: relative; }
  .billing-form .select-wrap select, .billing-form .input-wrap select {
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none; }

.billing-form .form-control {
  font-weight: 300;
  border: black !important;
  border: 1px solid rgba(0, 0, 0, 0.4) !important;
  height: 40px !important;
  padding-left: 15px;
  padding-right: 15px;
  background: transparent !important;
  color: rgba(0, 0, 0, 2) !important;
  font-size: 14px;
  border-radius: 0px;
  -webkit-box-shadow: none !important;
  box-shadow: none !important; }
  .billing-form .form-control::-webkit-input-placeholder {
    /* Chrome/Opera/Safari */
    color: rgba(0, 0, 0, 0.4); }
  .billing-form .form-control::-moz-placeholder {
    /* Firefox 19+ */
    color: rgba(0, 0, 0, 0.4); }
  .billing-form .form-control:-ms-input-placeholder {
    /* IE 10+ */
    color: rgba(0, 0, 0, 0.4); }
  .billing-form .form-control:-moz-placeholder {
    /* Firefox 18- */
    color: rgba(0, 0, 0, 0.4); }
  .billing-form .form-control:focus, .billing-form .form-control:active {
    border-color: #ffa45c !important; }

.billing-form textarea.form-control {
  height: inherit !important; }

  .align-items-end {
  -webkit-box-align: end !important;
  -ms-flex-align: end !important;
  align-items: flex-end !important; }


.cart-list {
  overflow-x: scroll; }
.table {
  min-width: 1000px !important;
  width: 100%;
  text-align: center; }
  .table th {
    font-weight: 500; }
  .table .thead-primary {
    background: black; }
    .table .thead-primary tr th {
      padding: 20px 10px;
      color: #fff !important;
      border: 1px solid transparent !important; }
  .table tbody tr td {
    text-align: center !important;
    vertical-align: middle;
    padding: 40px 10px;
    border: 1px solid transparent !important;
    border-bottom: 1px solid rgba(0, 0, 0, 0.05) !important; }


      .table .thead-primary {
    background: black; }
    .table .thead-primary tr th {
      padding: 20px 10px;
      color: #fff !important;
      border: 1px solid transparent !important; }

#colorlib-main-nav {
  position: absolute;
  top: 0;
  bottom: 0;
  right: 0;
  padding: 4em 40px 40px 40px;
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0.8);
  z-index: 1002;
  text-align: center;
  visibility: hidden;
  opacity: 0;
  -webkit-transition: all 0.8s cubic-bezier(0.175, 0.885, 0.32, 1.275);
  -moz-transition: all 0.8s cubic-bezier(0.175, 0.885, 0.32, 1.275);
  -ms-transition: all 0.8s cubic-bezier(0.175, 0.885, 0.32, 1.275);
  -o-transition: all 0.8s cubic-bezier(0.175, 0.885, 0.32, 1.275);
  transition: all 0.8s cubic-bezier(0.175, 0.885, 0.32, 1.275);
  -webkit-transform: scale(0);
  -moz-transform: scale(0);
  -ms-transform: scale(0);
  -o-transform: scale(0);
  transform: scale(0);
  overflow-y: scroll; }
  #colorlib-main-nav .colorlib-nav-toggle {
    position: absolute;
    top: 5px;
    right: 40px;
    padding: 20px;
    height: 44px;
    width: 44px;
    background: transparent;
    line-height: 0;
    padding: 0 !important;
    visibility: hidden;
    opacity: 0;
    -webkit-border-radius: 2px;
    -moz-border-radius: 2px;
    -ms-border-radius: 2px;
    border-radius: 2px;
    -webkit-transition: 0.3s;
    -o-transition: 0.3s;
    transition: 0.3s; }
    #colorlib-main-nav .colorlib-nav-toggle i {
      top: 18px !important;
      left: 0 !important;
      margin: 0 !important;
      padding: 0 !important;
      line-height: 0;
      text-indent: 0; }
    #colorlib-main-nav .colorlib-nav-toggle.show {
      visibility: visible;
      opacity: 1; }
    #colorlib-main-nav .colorlib-nav-toggle:hover {
      background: transparent; }
      #colorlib-main-nav .colorlib-nav-toggle:hover i::before, #colorlib-main-nav .colorlib-nav-toggle:hover i::after {
        content: '';
        width: 20px;
        height: 1px;
        background: #fff;
        position: absolute;
        left: 0; }
  .menu-show #colorlib-main-nav {
    visibility: visible;
    opacity: 1;
    -webkit-transform: scale(1);
    -moz-transform: scale(1);
    -ms-transform: scale(1);
    -o-transform: scale(1);
    transform: scale(1); }
  #colorlib-main-nav ul {
    padding: 0;
    margin: 0 0 3em 0; }
    @media screen and (max-width: 768px) {
      #colorlib-main-nav ul {
        padding: 20px 0 0 0; } }
    #colorlib-main-nav ul li {
      padding: 0;
      margin: 0;
      list-style: none; }
      #colorlib-main-nav ul li a {
        display: block;
        color: rgba(255, 255, 255, 0.9);
        font-size: 30px;
        padding: 5px 0;
        font-weight: 500; }
        @media screen and (max-width: 768px) {
          #colorlib-main-nav ul li a {
            font-size: 16px; } }
        #colorlib-main-nav ul li a:hover, #colorlib-main-nav ul li a:active, #colorlib-main-nav ul li a:focus {
          color: white;
          outline: none;
          text-decoration: none; }
      #colorlib-main-nav ul li.active a {
        color: #FF6107; }
  #colorlib-main-nav .form-group {
    margin-bottom: 40px;
    position: relative;
    width: 100%; }
    @media screen and (max-width: 480px) {
      #colorlib-main-nav .form-group {
        width: 100%; } }
    #colorlib-main-nav .form-group input::-webkit-input-placeholder {
      color: #636363; }
    #colorlib-main-nav .form-group input::-moz-input-placeholder {
      color: #636363; }
    #colorlib-main-nav .form-group input::-ms-input-placeholder {
      color: #636363; }
    #colorlib-main-nav .form-group input::-o-input-placeholder {
      color: #636363; }
    #colorlib-main-nav .form-group input::input-placeholder {
      color: #636363; }
  #colorlib-main-nav #search {
    font-size: 14px;
    width: 100%;
    padding-right: 3em;
    border: none;
    border: 2px solid rgba(255, 255, 255, 0.1);
    background: transparent;
    color: rgba(255, 255, 255, 0.5) !important; }
  #colorlib-main-nav button {
    position: absolute;
    top: 0;
    right: -4px;
    -webkit-border-radius: 0;
    -moz-border-radius: 0;
    -ms-border-radius: 0;
    border-radius: 0;
    background: transparent;
    color: #fff;
    border: none;
    padding: 16px; }
  #colorlib-main-nav #email {
    font-size: 18px;
    width: 100%;
    border: none;
    border: 2px solid #fff;
    background: #fff;
    color: #636363 !important; }

header {
  padding: 2em 0;
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  z-index: 9;
  margin: 0 auto; }
  @media screen and (max-width: 768px) {
    header {
      padding: 2em 0; } }
  header .colorlib-navbar-brand {
    float: left; }
    header .colorlib-navbar-brand .colorlib-logo {
      font-size: 20px;
      text-transform: uppercase;
      color: #fff;
      font-weight: 400;
      letter-spacing: 5px;
      padding: 7px 7px 7px 58px;
      display: block;
      text-align: center;
      background: black;
      position: relative; }
      header .colorlib-navbar-brand .colorlib-logo span {
        font-size: 19px;
        display: block;
        margin-bottom: 0;
        line-height: 1.0;
        color: #fff; }
      header .colorlib-navbar-brand .colorlib-logo i {
        color: #FF6107;
        position: absolute;
        top: -18px;
        bottom: 0;
        left: 7px;
        font-size: 48px; }
      header .colorlib-navbar-brand .colorlib-logo:hover {
        text-decoration: none !important; }
      header .colorlib-navbar-brand .colorlib-logo:active, header .colorlib-navbar-brand .colorlib-logo:focus {
        outline: none;
        text-decoration: none; }

#colorlib-hero {
  min-height: 750px;
  background: #fff url(../images/loader.gif) no-repeat center center;
  width: 100%;
  float: left; }
  #colorlib-hero .flexslider {
    border: none;
    z-index: 1;
    margin-bottom: 0;
    position: relative; }
    #colorlib-hero .flexslider .slides {
      position: relative;
      overflow: hidden; }
      #colorlib-hero .flexslider .slides li {
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center center;
        min-height: 750px;
        position: relative; }
        #colorlib-hero .flexslider .slides li .overlay {
          position: absolute;
          top: 0;
          bottom: 0;
          left: 0;
          right: 0;
          opacity: .5;
          background: #303030; }
    #colorlib-hero .flexslider .flex-control-nav {
      bottom: 2em;
      z-index: 1000;
      width: 0 auto; }
      #colorlib-hero .flexslider .flex-control-nav li a {
        background: white;
        -webkit-box-shadow: none;
        box-shadow: none;
        cursor: pointer;
        position: relative; }
        #colorlib-hero .flexslider .flex-control-nav li a:after {
          position: absolute;
          top: -3px;
          left: -3px;
          right: -3px;
          bottom: -3px;
          content: '';
          border: 1px solid #fff;
          -webkit-border-radius: 50%;
          -moz-border-radius: 50%;
          -ms-border-radius: 50%;
          border-radius: 50%; }
        #colorlib-hero .flexslider .flex-control-nav li a.flex-active {
          cursor: pointer;
          background: transparent;
          background: #FF6107; }
          #colorlib-hero .flexslider .flex-control-nav li a.flex-active:after {
            border: 1px solid #FF6107; }
    #colorlib-hero .flexslider .flex-direction-nav {
      display: none; }
    #colorlib-hero .flexslider .slider-text {
      max-width: 100%;
      display: table;
      opacity: 0;
      height: 750px;
      z-index: 9; }
      #colorlib-hero .flexslider .slider-text > .slider-text-inner {
        display: table-cell;
        vertical-align: middle;
        height: 750px;
        padding: 2em; }
        @media screen and (max-width: 768px) {
          #colorlib-hero .flexslider .slider-text > .slider-text-inner {
            text-align: center; } }
        #colorlib-hero .flexslider .slider-text > .slider-text-inner span i {
          font-size: 24px;
          color: #F7AF1D; }
        #colorlib-hero .flexslider .slider-text > .slider-text-inner h1, #colorlib-hero .flexslider .slider-text > .slider-text-inner h2 {
          margin: 0;
          padding: 0;
          color: white; }
        #colorlib-hero .flexslider .slider-text > .slider-text-inner h1 {
          margin-bottom: 30px;
          font-size: 44px;
          line-height: 1.3;
          font-weight: 400;
          font-family: "Lora", Georgia, serif; }
          @media screen and (max-width: 768px) {
            #colorlib-hero .flexslider .slider-text > .slider-text-inner h1 {
              font-size: 38px; } }
        #colorlib-hero .flexslider .slider-text > .slider-text-inner h2 {
          font-size: 18px;
          line-height: 1.5;
          margin-bottom: 20px;
          font-weight: 300;
          color: rgba(255, 255, 255, 0.7); }
          #colorlib-hero .flexslider .slider-text > .slider-text-inner h2 a {
            color: #FF6107; }
        #colorlib-hero .flexslider .slider-text > .slider-text-inner p {
          color: #fff;
          font-family: "Lora", Georgia, serif;
          font-size: 16px; }
        @media screen and (max-width: 480px) {
          #colorlib-hero .flexslider .slider-text > .slider-text-inner .btn {
            width: 100%; } }
        #colorlib-hero .flexslider .slider-text > .slider-text-inner .desc {
          padding: 0;
          position: relative; }
          #colorlib-hero .flexslider .slider-text > .slider-text-inner .desc .icon {
            display: block;
            position: relative;
            line-height: 1;
            background: transparent; }
            #colorlib-hero .flexslider .slider-text > .slider-text-inner .desc .icon i {
              font-size: 60px;
              color: #fff; }
          #colorlib-hero .flexslider .slider-text > .slider-text-inner .desc:before, #colorlib-hero .flexslider .slider-text > .slider-text-inner .desc:after {
            position: absolute;
            top: -2em;
            right: -2em;
            bottom: 0;
            content: '';
            width: 250px;
            height: 1px;
            background: #fff;
            opacity: .3; }
            @media screen and (max-width: 768px) {
              #colorlib-hero .flexslider .slider-text > .slider-text-inner .desc:before, #colorlib-hero .flexslider .slider-text > .slider-text-inner .desc:after {
                display: none; } }
          #colorlib-hero .flexslider .slider-text > .slider-text-inner .desc:after {
            height: 250px;
            width: 1px; }
          #colorlib-hero .flexslider .slider-text > .slider-text-inner .desc .desc2 {
            width: 100%;
            display: block;
            position: relative; }
            #colorlib-hero .flexslider .slider-text > .slider-text-inner .desc .desc2:before, #colorlib-hero .flexslider .slider-text > .slider-text-inner .desc .desc2:after {
              position: absolute;
              bottom: -1em;
              left: -2em;
              content: '';
              width: 250px;
              height: 1px;
              background: #fff;
              opacity: .3; }
              @media screen and (max-width: 768px) {
                #colorlib-hero .flexslider .slider-text > .slider-text-inner .desc .desc2:before, #colorlib-hero .flexslider .slider-text > .slider-text-inner .desc .desc2:after {
                  display: none; } }
            #colorlib-hero .flexslider .slider-text > .slider-text-inner .desc .desc2:after {
              height: 250px;
              width: 1px; }

.mouse {
  position: absolute;
  left: 0;
  right: 0;
  bottom: 8em;
  z-index: 99; }
  @media screen and (max-width: 480px) {
    .mouse {
      bottom: 5em; } }

.mouse-icon {
  width: 30px;
  height: 45px;
  border: 1px solid rgba(255, 255, 255, 0.8);
  border-radius: 15px;
  cursor: pointer;
  position: relative;
  text-align: center;
  margin: 0 auto;
  display: block; }

.mouse-wheel {
  height: 6px;
  margin: 2px auto 0;
  display: block;
  width: 4px;
  background: rgba(255, 255, 255, 0.8);
  border-radius: 50%;
  -webkit-animation: 1.6s ease infinite wheel-up-down;
  -moz-animation: 1.6s ease infinite wheel-up-down;
  animation: 1.6s ease infinite wheel-up-down; }

@-webkit-keyframes wheel-up-down {
  0% {
    margin-top: 2px;
    opacity: 0; }
  30% {
    opacity: 1; }
  100% {
    margin-top: 20px;
    opacity: 0; } }

@-moz-keyframes wheel-up-down {
  0% {
    margin-top: 2px;
    opacity: 0; }
  30% {
    opacity: 1; }
  100% {
    margin-top: 20px;
    opacity: 0; } }

@keyframes wheel-up-down {
  0% {
    margin-top: 2px;
    opacity: 0; }
  30% {
    opacity: 1; }
  100% {
    margin-top: 20px;
    opacity: 0; } }

.colorlib-reservation,
.colorlib-menu,
.colorlib-services,
#colorlib-contact,
.colorlib-blog,
.colorlib-testimony,
#colorlib-contact,
.colorlib-about {
  padding: 7em 0;
  clear: both;
  position: relative; }
  @media screen and (max-width: 768px) {
    .colorlib-reservation,
    .colorlib-menu,
    .colorlib-services,
    #colorlib-contact,
    .colorlib-blog,
    .colorlib-testimony,
    #colorlib-contact,
    .colorlib-about {
      padding: 5em 0; } }

.colorlib-intro {
  padding: 2.5em 0;
  clear: both;
  background: #302939; }
  .colorlib-intro .intro {
    position: relative; }
    @media screen and (max-width: 768px) {
      .colorlib-intro .intro {
        margin-bottom: 30px; } }
    .colorlib-intro .intro .icon i {
      font-size: 20px;
      color: white; }
    .colorlib-intro .intro p, .colorlib-intro .intro span {
      margin: 0;
      color: rgba(255, 255, 255, 0.6); }
      .colorlib-intro .intro p a, .colorlib-intro .intro span a {
        color: white; }
    .colorlib-intro .intro h2 {
      font-size: 16px;
      color: #fff;
      margin-bottom: 15px; }

.about-desc {
  padding-right: 1.5em; }
  @media screen and (max-width: 768px) {
    .about-desc {
      padding-right: 0; } }

.about-img {
  height: 450px; }

.about-img-2 {
  margin-top: 50px; }

.chef-wrap {
  margin-bottom: 30px; }
  .chef-wrap .desc h3 {
    font-size: 20px;
    margin-bottom: 15px; }

.chef-img {
  height: 400px;
  margin-bottom: 30px; }

.colorlib-video {
  overflow: hidden;
  position: relative;
  height: 300px;
  margin-bottom: 40px; }
  .colorlib-video a {
    z-index: 1001;
    position: absolute;
    top: 50%;
    left: 50%;
    margin-top: -45px;
    margin-left: -45px;
    width: 90px;
    height: 90px;
    display: table;
    text-align: center;
    background: #fff;
    text-decoration: none;
    -webkit-box-shadow: 0px 14px 30px -15px rgba(0, 0, 0, 0.75);
    -moz-box-shadow: 0px 14px 30px -15px rgba(0, 0, 0, 0.75);
    -ms-box-shadow: 0px 14px 30px -15px rgba(0, 0, 0, 0.75);
    -o-box-shadow: 0px 14px 30px -15px rgba(0, 0, 0, 0.75);
    box-shadow: 0px 14px 30px -15px rgba(0, 0, 0, 0.75);
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    -ms-border-radius: 50%;
    border-radius: 50%; }
    .colorlib-video a i {
      text-align: center;
      display: table-cell;
      vertical-align: middle;
      font-size: 40px;
      color: #FF6107; }
  .colorlib-video .overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(0, 0, 0, 0.3);
    -webkit-transition: 0.5s;
    -o-transition: 0.5s;
    transition: 0.5s; }
  .colorlib-video:hover .overlay {
    background: rgba(0, 0, 0, 0.7); }
  .colorlib-video:hover a {
    -webkit-transform: scale(1.1);
    -moz-transform: scale(1.1);
    -ms-transform: scale(1.1);
    -o-transform: scale(1.1);
    transform: scale(1.1); }

.colorlib-introduction {
  padding: 7em 0 0 0;
  clear: both; }
  .colorlib-introduction .overlay {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    content: '';
    background: #303030;
    opacity: .4; }
  .colorlib-introduction .intro-box {
    padding: 3em 3em 3em 3em;
    background: #FBFBFB;
    position: relative;
    z-index: 0; }
    .colorlib-introduction .intro-box:after {
      position: absolute;
      top: 1.5em;
      left: 1.5em;
      right: 1.5em;
      bottom: 1.5em;
      content: '';
      border: 1px solid rgba(0, 0, 0, 0.2);
      z-index: -1; }
    .colorlib-introduction .intro-box h2 {
      font-size: 34px; }


          .table tbody tr td.product-remove a {
      bordeR: 1px solid rgba(0, 0, 0, 0.1);
      padding: 5px 10px;
      color: #000000; }
      .table tbody tr td.product-remove a:hover {
        border: 1px solid #ffa45c;
        background: #ffa45c; }
        .table tbody tr td.product-remove a:hover span {
          color: #fff; }
    .table tbody tr td.quantity {
      width: 20%; }
    .table tbody tr td.image-prod .img {
      height: 70px;
      width: 70px;
      -webkit-border-radius: 50%;
      -moz-border-radius: 50%;
      -ms-border-radius: 50%;
      border-radius: 50%; 
        background-size: cover;
  background-position: center center;
  background-repeat: no-repeat;
  position: relative;
}
    .table tbody tr td.product-name {
      width: 30%; }
      .table tbody tr td.product-name h3 {
        font-size: 14px;
        text-transform: uppercase;
        letter-spacing: 2px; }
    .table tbody tr td.total, .table tbody tr td.price {
      color: #000000; }

      

.dish-wrap {
  overflow: hidden;
  height: 400px;
  display: block;
  width: 100%;
  position: relative;
  z-index: 0;
  background: #f7f7f7;
  margin-bottom: 30px; }
  .dish-wrap .price {
    position: absolute;
    top: 5px;
    display: table;
    width: 60px;
    height: 60px;
    text-align: center;
    color: #fff;
    background: #FF6107;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    -ms-border-radius: 50%;
    border-radius: 50%; }
    .dish-wrap .price span {
     
      display: table-cell;
      vertical-align: middle;
       }
  .dish-wrap .addtocart {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    display: table;
    height: 400px;
    width: 100%;
    text-align: center;
    z-index: 1;
    -webkit-transition: 0.3s;
    -o-transition: 0.3s;
    transition: 0.3s;
    opacity: 0; }
    .dish-wrap .addtocart .dis-tc {
      width: 100%;
      display: table-cell;
      vertical-align: middle; }
      .dish-wrap .addtocart .dis-tc span {
        padding: 5px 10px;
        background: rgba(0, 0, 0, 0.5);
        -webkit-border-radius: 4px;
        -moz-border-radius: 4px;
        -ms-border-radius: 4px;
        border-radius: 4px; }
        .dish-wrap .addtocart .dis-tc span a {
          color: #fff;
          text-decoration: none; }
  @media screen and (max-width: 768px) {
    .dish-wrap {
      height: auto;
      margin-bottom: 20px; } }
  .dish-wrap .dish-img {
    height: 400px;
    z-index: -1; }
  .dish-wrap .desc {
    padding: 1.5em;
    text-align: center; }
    .dish-wrap .desc h2 {
      font-size: 22px;
      margin-bottom: 0; }
      .dish-wrap .desc h2 a {
        color: rgba(48, 48, 48, 0.75);
        text-decoration: none; }
  .dish-wrap .wrap {
    position: relative;
    -webkit-transition: 0.2s;
    -o-transition: 0.2s;
    transition: 0.2s; }
  .dish-wrap:hover .addtocart {
    opacity: 1; }
  .dish-wrap:hover .wrap {
    margin-top: -70px; }

.colorlib-menu-2 {
  margin-top: -13em;
  padding-top: 5em;
  background: #FBFBFB; }

.menu-dish {
  padding: 0 2em;
  margin: 0; }
  @media screen and (max-width: 768px) {
    .menu-dish {
      padding: 0; } }
  .menu-dish li {
    padding: 0;
    margin: 0;
    list-style: none;
    display: block;
    position: relative;
    padding: 10px;
    -webkit-transition: 0.3s;
    -o-transition: 0.3s;
    transition: 0.3s; }
    .menu-dish li:hover, .menu-dish li:focus, .menu-dish li.active {
      background: rgba(255, 255, 255, 0.1); }
    .menu-dish li .dish-entry, .menu-dish li .text {
      display: table-cell;
      vertical-align: top;
      }
    .menu-dish li .dish-img {
      height: 70px;
      width: 70px;
      -webkit-border-radius: 50%;
      -moz-border-radius: 50%;
      -ms-border-radius: 50%;
      border-radius: 50%; }
    .menu-dish li .text {
      padding-left: 20px; }
      .menu-dish li .text h3 {
        margin: 10px 0 10px 0;
        font-size: 16px;
        font-weight: 700; }
        @media screen and (max-width: 768px) {
          .menu-dish li .text h3 {
            margin-top: 0px; } }
      .menu-dish li .text .cat {
        color: #7d7d7d;
        font-size: 14px; }
      .menu-dish li .text .price {
        position: absolute;
        top: 20px;
        right: 10px;
        font-size: 24px;
        color: #404044;
        font-family: "Lora", Georgia, serif; }
        @media screen and (max-width: 480px) {
          .menu-dish li .text .price {
            right: 0;
            top: 0px;
            position: relative;
            display: block;
            margin-bottom: 0px; } }

.tab-pane {
  padding: 2em 0;
  -webkit-transition: 0.3s;
  -o-transition: 0.3s;
  transition: 0.3s; }

.nav-tabs {
  border: none;
  border-bottom: none;
  display: inline-block;
  -webkit-transition: 0.3s;
  -o-transition: 0.3s;
  transition: 0.3s; }
  .nav-tabs li {
    margin: 0 auto;
    font-size: 20px;
    display: block;
    font-weight: 500; }
    @media screen and (max-width: 768px) {
      .nav-tabs li {
        font-size: 12px; } }
    .nav-tabs li a {
      border: none !important;
      border-bottom: none !important;
      background: transparent;
      color: #404044;
      bordeR: 1px solid red;
      padding: 0;
      margin: 0 1em; }
      .nav-tabs li a:hover, .nav-tabs li a:focus {
        background: transparent; }
    .nav-tabs li.active a {
      border: none !important;
      border-bottom: none !important;
      color: #404044 !important;
      background: transparent !important;
      position: relative; }
      .nav-tabs li.active a:after {
        position: absolute;
        bottom: -5px;
        left: 0;
        right: 0;
        content: '';
        width: 100%;
        height: 2px;
        background: #FF6107;
        margin: 0 auto; }

.intro-heading {
  margin-bottom: 3em;
  position: relative; }
  .intro-heading h2 {
    font-size: 44px;
    font-weight: 400;
    line-height: 1.4;
    position: relative; }
  .intro-heading span {
    display: block;
    font-size: 18px;
    font-style: italic;
    margin-bottom: 10px;
    font-family: "Lora", Georgia, serif;
    color: #969696;
    font-weight: 400; }
  .intro-heading .icon {
    position: relative;
    padding: 0;
    line-height: 1.3; }
    .intro-heading .icon:after, .intro-heading .icon:before {
      position: absolute;
      top: 51%;
      left: 0;
      right: 0;
      width: 400px;
      height: 1px;
      content: '';
      margin: 0 auto;
      background: #e3e3e3;
      z-index: -1; }
      @media screen and (max-width: 768px) {
        .intro-heading .icon:after, .intro-heading .icon:before {
          width: 250px; } }
    .intro-heading .icon:after {
      top: 48%;
      width: 300px; }
      @media screen and (max-width: 768px) {
        .intro-heading .icon:after {
          width: 180px; } }
    .intro-heading .icon i {
      font-size: 60px;
      padding: 0 20px;
      background: #FBFBFB;
      color: #b0b0b0; }

.article-entry {
  background: white; }
  .article-entry .blog-img {
    height: 250px;
    display: block; }
    @media screen and (max-width: 768px) {
      .article-entry .blog-img {
        height: 400px; } }
    @media screen and (max-width: 480px) {
      .article-entry .blog-img {
        height: 270px; } }
  .article-entry .desc {
    padding: 1.5em 1em;
    margin-bottom: 20px;
    padding-left: 80px;
    position: relative; }
    .article-entry .desc h2 {
      font-size: 20px; }
      .article-entry .desc h2 a {
        color: #303030;
        text-decoration: none; }
    .article-entry .desc .meta {
      text-transform: uppercase;
      position: absolute;
      top: 0px;
      left: 0;
      background: #303030;
      text-align: center;
      padding: 0 .5em; }
      .article-entry .desc .meta span {
        display: block;
        color: #fff;
        font-weight: 400;
        margin-bottom: 0;
        padding: 0; }
      .article-entry .desc .meta .day {
        font-size: 30px;
        position: relative;
        border-bottom: 1px solid #FF6107; }
      .article-entry .desc .meta .month {
        font-size: 16px;
        font-weight: 400;
        padding: 0; }
    .article-entry .desc .admin {
      margin-bottom: 20px; }
      .article-entry .desc .admin span:last-child {
        color: #303030; }

.blog-img,
.insta-img,
.featured-img,
.dish-img,
.about-img,
.chef-img {
  background-size: cover;
  background-position: center center;
  background-repeat: no-repeat;
  position: relative; }

.reservation-img,
.colorlib-introduction,
.colorlib-testimony {
  background-size: cover;
  background-attachment: fixed;
  background-position: center center;
  position: relative; }

.colorlib-testimony {
  padding-bottom: 10em;
  position: relative; }
  .colorlib-testimony .intro-heading h2 {
    color: #fff; }
  .colorlib-testimony .overlay {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    content: '';
    background: #303030;
    opacity: .8; }
  .colorlib-testimony .owl-theme .owl-dots .owl-dot span {
    width: 10px;
    height: 10px;
    position: relative;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    -ms-border-radius: 50%;
    border-radius: 50%; }
    .colorlib-testimony .owl-theme .owl-dots .owl-dot span:after {
      position: absolute;
      top: -3px;
      left: -3px;
      right: -3px;
      bottom: -3px;
      content: '';
      border: 1px solid #fff;
      -webkit-border-radius: 50%;
      -moz-border-radius: 50%;
      -ms-border-radius: 50%;
      border-radius: 50%; }
  .colorlib-testimony .owl-theme .owl-dots .owl-dot.active span,
  .colorlib-testimony .owl-theme .owl-dots .owl-dot:hover span {
    height: 10px;
    background: #FF6107; }
    .colorlib-testimony .owl-theme .owl-dots .owl-dot.active span:after,
    .colorlib-testimony .owl-theme .owl-dots .owl-dot:hover span:after {
      border: 1px solid #FF6107; }

.testimony blockquote {
  border: none; }
  .testimony blockquote p {
    font-family: "Lora", Georgia, serif;
    color: #fff;
    font-size: 20px; }
  .testimony blockquote span {
    font-family: "Lora", Georgia, serif;
    color: #fff;
    font-size: 20px; }

.colorlib-reservation {
  position: relative; }
  .colorlib-reservation .overlay {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    content: '';
    background: #303030;
    opacity: .8; }
  .colorlib-reservation .intro-heading h2 {
    color: #fff; }
  .colorlib-reservation .intro-heading p {
    color: rgba(255, 255, 255, 0.8); }

.colorlib-form label {
  font-weight: normal;
  color: white; }

.colorlib-form .form-control {
  height: 50px;
  -webkit-box-shadow: none;
  box-shadow: none;
  font-size: 16px;
  -webkit-appearance: none;
  -moz-appearance: none;
  -ms-appearance: none;
  -o-appearance: none;
  appearance: none;
  background: rgba(255, 255, 255, 0.03);
  border: 2px solid rgba(255, 255, 255, 0.1);
  color: rgba(255, 255, 255, 0.7); }
  .colorlib-form .form-control:active, .colorlib-form .form-control:focus {
    -webkit-box-shadow: none;
    box-shadow: none;
    border-color: #FF6107; }
  .colorlib-form .form-control::-webkit-input-placeholder {
    /* Chrome/Opera/Safari */
    color: rgba(255, 255, 255, 0.7); }
  .colorlib-form .form-control::-moz-placeholder {
    /* Firefox 19+ */
    color: rgba(255, 255, 255, 0.7); }
  .colorlib-form .form-control:-ms-input-placeholder {
    /* IE 10+ */
    color: rgba(255, 255, 255, 0.7); }
  .colorlib-form .form-control:-moz-placeholder {
    /* Firefox 18- */
    color: rgba(255, 255, 255, 0.7); }

.colorlib-form .form-group {
  margin-bottom: 15px; }
  .colorlib-form .form-group .form-field {
    position: relative;
    padding: 0;
    margin: 0; }
    .colorlib-form .form-group .form-field .icon {
      position: absolute;
      top: 50%;
      -webkit-transform: translateY(-50%);
      -moz-transform: translateY(-50%);
      -ms-transform: translateY(-50%);
      -o-transform: translateY(-50%);
      transform: translateY(-50%);
      right: 20px;
      color: rgba(255, 255, 255, 0.5); }
    .colorlib-form .form-group .form-field .form-control {
      padding-right: 50px; }

.colorlib-form textarea.form-control {
  height: inherit;
  resize: vertical; }

.colorlib-form .btn-block {
  margin-top: 28px;
  padding: 12px !important; }

.reservation-page .intro-heading h2 {
  color: #404044; }

.reservation-page .intro-heading p {
  color: #7d7d7d; }

.reservation-page .form-control {
  border: 1px solid rgba(0, 0, 0, 0.1);
  color: #b0b0b0; }
  .reservation-page .form-control::-webkit-input-placeholder {
    /* Chrome/Opera/Safari */
    color: #b0b0b0; }
  .reservation-page .form-control::-moz-placeholder {
    /* Firefox 19+ */
    color: #b0b0b0; }
  .reservation-page .form-control:-ms-input-placeholder {
    /* IE 10+ */
    color: #b0b0b0; }
  .reservation-page .form-control:-moz-placeholder {
    /* Firefox 18- */
    color: #b0b0b0; }

.reservation-page label {
  font-weight: normal;
  color: #7d7d7d; }

.f-entry {
  position: relative;
  margin-bottom: 20px; }
  .f-entry .featured-img {
    height: 60px;
    width: 60px;
    display: block;
    position: absolute;
    top: 0;
    left: 0;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    -ms-border-radius: 50%;
    border-radius: 50%; }
  .f-entry .desc {
    padding-left: 80px; }
    .f-entry .desc h3 {
      font-size: 16px;
      line-height: 1.4;
      margin-bottom: 10px; }
      .f-entry .desc h3 a {
        color: rgba(255, 255, 255, 0.8);
        text-decoration: none; }
    .f-entry .desc span {
      color: rgba(255, 255, 255, 0.6);
      font-size: 12px;
      text-transform: uppercase;
      letter-spacing: 2px;
      display: block;
      margin-bottom: 10px; }

.btn {
  margin-right: 4px;
  margin-bottom: 4px;
  font-size: 13px !important;
  font-weight: 400;
  font-family: "Lora", Georgia, serif;
  text-transform: uppercase;
  letter-spacing: 2px;
  -webkit-border-radius: 30px;
  -moz-border-radius: 30px;
  -ms-border-radius: 30px;
  border-radius: 30px;
  -webkit-transition: 0.5s;
  -o-transition: 0.5s;
  transition: 0.5s;
  padding: 8px 20px; }
  .btn.btn-md {
    padding: 8px 20px !important; }
  .btn.btn-lg {
    padding: 18px 36px !important; }
  .btn:hover, .btn:active, .btn:focus {
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    outline: none !important; }

.btn-primary {
  background: #FF6107;
  color: #fff;
  border: 2px solid #FF6107; }
  .btn-primary:hover, .btn-primary:focus, .btn-primary:active {
    background: #ff7121 !important;
    border-color: #ff7121 !important; }
  .btn-primary.btn-outline {
    background: transparent;
    color: #7d7d7d;
    color: #FF6107;
    border: 1px solid #FF6107; }
    .btn-primary.btn-outline:hover, .btn-primary.btn-outline:focus, .btn-primary.btn-outline:active {
      background: #FF6107;
      color: #fff; }

.btn-success {
  background: #5cb85c;
  color: #fff;
  border: 2px solid #5cb85c; }
  .btn-success:hover, .btn-success:focus, .btn-success:active {
    background: #4cae4c !important;
    border-color: #4cae4c !important; }
  .btn-success.btn-outline {
    background: transparent;
    color: #5cb85c;
    border: 2px solid #5cb85c; }
    .btn-success.btn-outline:hover, .btn-success.btn-outline:focus, .btn-success.btn-outline:active {
      background: #5cb85c;
      color: #fff; }

.btn-info {
  background: #5bc0de;
  color: #fff;
  border: 2px solid #5bc0de; }
  .btn-info:hover, .btn-info:focus, .btn-info:active {
    background: #46b8da !important;
    border-color: #46b8da !important; }
  .btn-info.btn-outline {
    background: transparent;
    color: #5bc0de;
    border: 2px solid #5bc0de; }
    .btn-info.btn-outline:hover, .btn-info.btn-outline:focus, .btn-info.btn-outline:active {
      background: #5bc0de;
      color: #fff; }

.btn-warning {
  background: #f0ad4e;
  color: #fff;
  border: 2px solid #f0ad4e; }
  .btn-warning:hover, .btn-warning:focus, .btn-warning:active {
    background: #eea236 !important;
    border-color: #eea236 !important; }
  .btn-warning.btn-outline {
    background: transparent;
    color: #f0ad4e;
    border: 2px solid #f0ad4e; }
    .btn-warning.btn-outline:hover, .btn-warning.btn-outline:focus, .btn-warning.btn-outline:active {
      background: #f0ad4e;
      color: #fff; }

.btn-danger {
  background: #d9534f;
  color: #fff;
  border: 2px solid #d9534f; }
  .btn-danger:hover, .btn-danger:focus, .btn-danger:active {
    background: #d43f3a !important;
    border-color: #d43f3a !important; }
  .btn-danger.btn-outline {
    background: transparent;
    color: #d9534f;
    border: 2px solid #d9534f; }
    .btn-danger.btn-outline:hover, .btn-danger.btn-outline:focus, .btn-danger.btn-outline:active {
      background: #d9534f;
      color: #fff; }

.btn-outline {
  background: none;
  border: 2px solid #b0b0b0;
  font-size: 16px;
  -webkit-transition: 0.3s;
  -o-transition: 0.3s;
  transition: 0.3s; }
  .btn-outline:hover, .btn-outline:focus, .btn-outline:active {
    -webkit-box-shadow: none;
    box-shadow: none; }

.row-padded-bottom {
  margin-bottom: 4em; }

.col-pb-sm {
  margin-bottom: 5em !important; }
  .col-pb-sm:last-child {
    margin-bottom: 0; }


.d-flex {
  display: -webkit-box !important;
  display: -ms-flexbox !important;
  display: flex !important; }

  .cart-total {
  width: 100%;
  display: block;
  border: 1px solid rgba(0, 0, 0, 0.05);
  padding: 20px; }
  .cart-total h3 {
    font-size: 18px;
    text-transform: uppercase;
    letter-spacing: 2px;
    margin-bottom: 20px; }
  .cart-total p {
    width: 100%;
    display: block; }
    .cart-total p span {
      display: block;
      width: 50%; }
    .cart-total p.total-price span {
      text-transform: uppercase; }
      .cart-total p.total-price span:last-child {
        color: #000000;
        font-weight: 600; }
  .cart-total hr {
    background: rgba(255, 255, 255, 0.1); }

.btn.with-arrow {
  position: relative;
  -webkit-transition: 0.3s;
  -o-transition: 0.3s;
  transition: 0.3s; }
  .btn.with-arrow i {
    visibility: hidden;
    opacity: 0;
    position: absolute;
    right: 0px;
    top: 50%;
    margin-top: -8px;
    -webkit-transition: 0.2s;
    -o-transition: 0.2s;
    transition: 0.2s; }
  .btn.with-arrow:hover {
    padding-right: 50px; }
    .btn.with-arrow:hover i {
      color: #fff;
      right: 18px;
      visibility: visible;
      opacity: 1; }

.colorlib-nav-toggle {
  cursor: pointer;
  text-decoration: none; }
  .colorlib-nav-toggle.active i::before, .colorlib-nav-toggle.active i::after {
    background: #303030; }
  .colorlib-nav-toggle.dark.active i::before, .colorlib-nav-toggle.dark.active i::after {
    background: #303030; }
  .colorlib-nav-toggle:hover, .colorlib-nav-toggle:focus, .colorlib-nav-toggle:active {
    outline: none;
    border-bottom: none !important; }
  .colorlib-nav-toggle i {
    position: relative;
    display: -moz-inline-stack;
    display: inline-block;
    zoom: 1;
    *display: inline;
    width: 20px;
    height: 2px;
    color: #303030;
    font: bold 14px/.4 Helvetica;
    text-transform: uppercase;
    text-indent: -55px;
    background: #fff;
    -webkit-transition: all .2s ease-out;
    -o-transition: all .2s ease-out;
    transition: all .2s ease-out; }
    .menu-show .colorlib-nav-toggle i {
      background: #fff;
      color: #fff; }
    .colorlib-nav-toggle i::before, .colorlib-nav-toggle i::after {
      content: '';
      width: 20px;
      height: 2px;
      background: #fff;
      position: absolute;
      left: 0;
      -webkit-transition: 0.2s;
      -o-transition: 0.2s;
      transition: 0.2s; }
      .menu-show .colorlib-nav-toggle i::before, .menu-show .colorlib-nav-toggle i::after {
        background: #fff; }
  .colorlib-nav-toggle.dark i {
    position: relative;
    color: #fff;
    background: #fff;
    -webkit-transition: all .2s ease-out;
    -o-transition: all .2s ease-out;
    transition: all .2s ease-out; }
    .colorlib-nav-toggle.dark i::before, .colorlib-nav-toggle.dark i::after {
      background: #fff;
      -webkit-transition: 0.2s;
      -o-transition: 0.2s;
      transition: 0.2s; }

.colorlib-nav-toggle i::before {
  top: -7px; }

.colorlib-nav-toggle i::after {
  bottom: -7px; }

.colorlib-nav-toggle:hover i::before {
  top: -10px; }

.colorlib-nav-toggle:hover i::after {
  bottom: -10px; }

.colorlib-nav-toggle.active i {
  background: transparent; }

.colorlib-nav-toggle.active i::before {
  top: 0;
  -webkit-transform: rotateZ(45deg);
  -moz-transform: rotateZ(45deg);
  -ms-transform: rotateZ(45deg);
  -o-transform: rotateZ(45deg);
  transform: rotateZ(45deg); }

.colorlib-nav-toggle.active i::after {
  bottom: 0;
  -webkit-transform: rotateZ(-45deg);
  -moz-transform: rotateZ(-45deg);
  -ms-transform: rotateZ(-45deg);
  -o-transform: rotateZ(-45deg);
  transform: rotateZ(-45deg); }

.colorlib-nav-toggle {
  float: right;
  z-index: 1003;
  position: relative;
  display: block;
  margin: 0 auto;
  cursor: pointer;
  margin-top: 0; }
  @media screen and (max-width: 768px) {
    .colorlib-nav-toggle {
      display: block;
      top: 0px; } }

.contact-info {
  margin-bottom: 4em;
  padding: 0; }
  .contact-info li {
    list-style: none;
    margin: 0 0 30px 0;
    position: relative;
    padding-left: 60px; }
    .contact-info li span {
      position: absolute;
      top: -0.3em;
      left: 0;
      width: 40px;
      height: 40px;
      background: #fff;
      display: table;
      text-align: center;
      -webkit-border-radius: 50%;
      -moz-border-radius: 50%;
      -ms-border-radius: 50%;
      border-radius: 50%; }
    .contact-info li i {
      display: table-cell;
      vertical-align: middle;
      font-size: 16px;
      color: rgba(48, 48, 48, 0.5); }
    .contact-info li a {
      color: #FF6107; }

.form-control {
  -webkit-box-shadow: none;
  -moz-box-shadow: none;
  -ms-box-shadow: none;
  -o-box-shadow: none;
  box-shadow: none;
  border: none;
  border: transparent;
  font-size: 16px;
  font-weight: 300;
  -webkit-border-radius: 0px;
  -moz-border-radius: 0px;
  -ms-border-radius: 0px;
  border-radius: 0px; }
  .form-control:focus, .form-control:active {
    -webkit-box-shadow: none;
    box-shadow: none; }

input[type="text"] {
  height: 50px; }

.form-group {
  margin-bottom: 30px; }

.colorlib-social-icons a:hover, .colorlib-social-icons a:focus {
  text-decoration: none !important; }

.colorlib-social-icons i {
  font-size: 24px;
  color: #FF6107; }

#map {
  width: 100%;
  height: 500px;
  position: relative; }
  @media screen and (max-width: 768px) {
    #map {
      height: 200px; } }

#footer {
  padding: 7em 0;
  display: block;
  width: 100%;
  background: #303030; }
  #footer h2 {
    font-size: 18px;
    color: #fff;
    letter-spacing: 1px;
    font-weight: 300;
    margin-bottom: 2em; }
  #footer p:last-child {
    margin-bottom: 0; }
  #footer p.colorlib-social-icons a:hover, #footer p.colorlib-social-icons a:focus {
    text-decoration: none !important; }
  #footer p.colorlib-social-icons i {
    font-size: 24px;
    color: #FF6107; }
  #footer p .block {
    color: #969696;
    font-size: 14px; }
  #footer .subscribe .form-control {
    -webkit-box-shadow: none;
    -moz-box-shadow: none;
    -ms-box-shadow: none;
    -o-box-shadow: none;
    box-shadow: none;
    border: none;
    border: 2px solid rgba(255, 255, 255, 0.1);
    font-size: 16px;
    background: transparent;
    font-weight: 400;
    margin-bottom: 5px; }
    #footer .subscribe .form-control:focus, #footer .subscribe .form-control:active {
      -webkit-box-shadow: none;
      box-shadow: none;
      border: 2px solid rgba(255, 97, 7, 0.8); }
  #footer .subscribe .btn-custom {
    width: 100%;
    padding: 14px 0;
    font-size: 16px;
    border: 2px solid #FF6107;
    -webkit-border-radius: 0;
    -moz-border-radius: 0;
    -ms-border-radius: 0;
    border-radius: 0; }
  #footer .instagram .insta-img {
    display: inline-block;
    width: 50%;
    padding: 0 !important;
    height: 120px;
    margin-right: -5px;
    margin-bottom: -8px; }
    @media screen and (max-width: 768px) {
      #footer .instagram .insta-img {
        height: 200px; } }

.js .animate-box {
  opacity: 0; }

  .dishprice
  {
    position: absolute;
    top: 5px;
    display: table;
    width: 60px;
    height: 60px;
    text-align: center;
    color:orange;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    -ms-border-radius: 50%;
    border-radius: 50%; 
    vertical-align: middle;
    top: 20px;
    float: right;
    font-size: 24px;
    color: #404044;
    font-family: "Lora", Georgia, serif;
    float: right;
    left:500px;
  }
  .priceButton
  {
    position: absolute;
    display: table;
    text-align: center;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    -ms-border-radius: 50%;
    border-radius: 50%; 
    vertical-align: middle;
    top: 20px;
    color: #404044;
    font-family: "Lora", Georgia, serif;
    right:10px;
  }
  .btn-order {
   top:5px;
color: #fff;
background-color :#303030;
border-color: #F05F40;
outline: none;
height: 30px;
width: 40px;
display: inline-block;

}
.btn-order, .btn-order:hover, .btn-order:focus, .btn-order:active {
color: #fff;
background-color:  #303030;
cursor: pointer;
border-color: #F05F40;
outline: none;
}
}
.iconFeature span
{
  display: inline-block;
  padding: 10px;
  text-align: center;
  justify-content: center !important;
  background-color: #303030;
}
.iconFeature span::before
{
  margin-left: 0;
  font-size: 10px;
  color:white;
  background-color: #303030;
}

	</style>

	</head>
	<body>

	<nav id="colorlib-main-nav" role="navigation">
		<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle active"><i></i></a>
		<div class="js-fullheight colorlib-table">
			<div class="colorlib-table-cell js-fullheight">
				<div class="row">
					<div class="col-md-6 col-md-offset-3">
						<div class="form-group">
							<input type="text" class="form-control" id="search" placeholder="Enter any key to search...">
							<button type="submit" class="btn btn-primary"><i class="icon-search3"></i></button>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 text-center">
						<ul>
							<li><a href="index.html">Home</a></li>
							<li><a href="menu.html">Menu</a></li>
							<li><a href="specialties.html">specialties</a></li>
							<li class="active"><a href="reservation.html">Reservation</a></li>
							<li><a href="blog.html">Blog</a></li>
							<li><a href="about.html">About us</a></li>
							<li><a href="contact.html">Contact</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</nav>
	
	<div id="colorlib-page">
		<header>
			<div class="container">
				<div class="row">
					<div class="col-md-12">

						<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
					</div>
				</div>
			</div>
		</header>
		<aside id="colorlib-hero">
			<div class="flexslider">
				<ul class="slides">
			   	<li style="background-image: url(images/tablebook.jpg);" data-stellar-background-ratio="0.5">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-sm-12 col-xs-12 col-md-offset-3 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<div class="desc">
				   						<span class="icon"><i class="flaticon-cutlery"></i></span>
					   					<h1>Cart</h1>
					   					<p><span><a href="#">Home</a></span> <span></span></p>
					   					<div class="desc2"></div>
				   					</div>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			  	</ul>
		  	</div>
		</aside>

		<div class="colorlib-intro">
			<div class="container">
				<div class="row">
					<div class="col-md-3 col-sm-6 text-center">
						<div class="intro animate-box">
							<span class="icon">
								<i class="icon-map4"></i>
							</span>
							<h2>Address</h2>
							<p>68-D Khayaban-e-Shahbaz, D.H.A Phase 6 Commercial Area Phase 6 Defence Housing Authority, Karachi City, Sindh 75500</p>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 text-center">
						<div class="intro animate-box">
							<span class="icon">
								<i class="icon-clock4"></i>
							</span>
							<h2>Opening Time</h2>
							<p>Monday - Sunday</p>
							<span>8am - 9pm</span>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 text-center">
						<div class="intro animate-box">
							<span class="icon">
								<i class="icon-mobile2"></i>
							</span>
							<h2>Phone</h2>
							<p>021 - 32506810</p>
							<p>021 - 35874723</p>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 text-center">
						<div class="intro animate-box">
							<span class="icon">
								<i class="icon-envelope"></i>
							</span>
							<h2>Email</h2>
							<p><a href="#">k173897@nu.edu.pk</a><br><a href="#">k173879@nu.edu.pk</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>

    <section class="ftco-section ftco-cart">
			<div class="container">
				<div class="row">
    			<div class="col-md-12">
    				<div class="cart-list">
	    				<table class="table">
						    <thead class="thead-primary">
						      <tr class="text-center">
						        <th>&nbsp;</th>
						        <th>&nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Product</th>
						        <th> &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Price</th>
						        <th> &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Quantity</th>
						        <th> &nbsp; Total</th>
						      </tr>
						    </thead>
						    <tbody>
						      <tr class="text-center">
				
						        
						        <td class="image-prod"><div class="img" style="background-image:url(images/dish-3.jpg);"></div></td>
						        
						        <td class="product-name">
						        	<h3>Mutton Chops</h3>
						        	<p>Meat / Potatoes / Rice / Tomatoe</p>
						        </td>
						        
						        <td class="price">75</td>
						        
						        <td class="quantity">
						        	<div class="input-group mb-3">
					             	<input type="text" name="quantity" class="quantity form-control input-number" value="1" min="1" max="100">
					          	</div>
					          </td>
						        
						        <td class="total">75</td>
						      </tr><!-- END TR-->

						      <tr class="text-center">
					
						        
						        <td class="image-prod"><div class="img" style="background-image:url(images/dish-4.jpg);"></div></td>
						        
						        <td class="product-name">
						        	<h3>Tuna Roast</h3>
						        	<p>Tuna / Potatoes / Rice</p>
						        </td>
						        
						        <td class="price">50</td>
						        
						        <td class="quantity">
						        	<div class="input-group mb-3">
					             	<input type="text" name="quantity" class="quantity form-control input-number" value="2" min="1" max="100">
					          	</div>
					          </td>
						        
						        <td class="total">100</td>
						      </tr><!-- END TR-->
						          <tr class="text-center">
				
						        
						        <td class="image-prod"><div class="img" style="background-image:url(images/dessert-1.jpg);"></div></td>
						        
						        <td class="product-name">
						        	<h3>Special Cake</h3>
						        	<p>Cake / Ice / Vanilla /Fruit</p>
						        </td>
						        
						        <td class="price">90</td>
						        
						        <td class="quantity">
						        	<div class="input-group mb-3">
					             	<input type="text" name="quantity" class="quantity form-control input-number" value="3" min="1" max="100">
					          	</div>
					          </td>
						        
						        <td class="total">270</td>
						      </tr><!-- END TR-->

						          <tr class="text-center">
				
						        
						        <td class="image-prod"><div class="img" style="background-image:url(images/drink-2.jpg);"></div></td>
						        
						        <td class="product-name">
						        	<h3>Fresh Juice</h3>
						        	<p>Lemon with sugar juice</p>
						        </td>
						        
						        <td class="price">70</td>
						        
						        <td class="quantity">
						        	<div class="input-group mb-3">
					             	<input type="text" name="quantity" class="quantity form-control input-number" value="1" min="1" max="100">
					          	</div>
					          </td>
						        
						        <td class="total">70</td>
						      </tr><!-- END TR-->
						    </tbody>
						  </table>
					  </div>
    			</div>
    		</div>
    		<br>
    		<br>
    		<div class="row justify-content-center">
    			<div class="col col-lg-12 col-md-1 cart-wrap ftco-animate">
    				<p class="text-center"><a href="checkout.php" class="btn btn-primary py-3 px-4">Proceed to Checkout</a></p>
    			</div>
    		</div>
			</div>
		</section>

		<footer>
			<div id="footer">
				<div class="container">
					<div class="row">
						<div class="col-md-3 col-pb-sm">
							<h2>Follow Us</h2>
							
							<p class="colorlib-social-icons">
								<a href="https://www.facebook.com/"><i class="icon-facebook4"></i></a>
								<a href="https://twitter.com/Twitter?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor"><i class="icon-twitter3"></i></a>
								<a href="https://www.google.com/gmail/"><i class="icon-googleplus"></i></a>
								
							</p>
						</div>
						<div class="col-md-3 col-pb-sm">
							<h2>Latest Blog</h2>
							<div class="f-entry">
								<a href="#" class="featured-img" style="background-image: url(images/dish-5.jpg);"></a>
								<div class="desc">
									<span>May 5, 2018</span>
									<h3><a href="#">How to cook beef Grilled with potato</a></h3>
								</div>
							</div>
							<div class="f-entry">
								<a href="#" class="featured-img" style="background-image: url(images/dish-7.jpg);"></a>
								<div class="desc">
									<span>May 5, 2018</span>
									<h3><a href="#">A Japanese Master Chef</a></h3>
								</div>
							</div>
							<div class="f-entry">
								<a href="#" class="featured-img" style="background-image: url(images/dessert-3.jpg);"></a>
								<div class="desc">
									<span>May 5, 2018</span>
									<h3><a href="#">Special Recipe for this month</a></h3>
								</div>
							</div>
						</div>
						<div class="col-md-3 col-pb-sm">
							<h2>Instagram</h2>
							<div class="instagram">
								<a href="https://www.instagram.com/" class="insta-img" style="background-image: url(images/dessert-1.jpg);"></a>
								<a href="https://www.instagram.com/" class="insta-img" style="background-image: url(images/dessert-2.jpg);"></a>
								<a href="https://www.instagram.com/" class="insta-img" style="background-image: url(images/dish-9.jpg);"></a>
								<a href="https://www.instagram.com/" class="insta-img" style="background-image: url(images/dish-2.jpg);"></a>
							</div>
						</div>
						<div class="col-md-3 col-pb-sm">
							<h2>Newsletter</h2>
							<p>Subscribe our newsletter and receive daily basis discounts</p>
							<div class="subscribe text-center">
								<div class="form-group">
									<input type="text" class="form-control text-center" placeholder="Enter Email address">
									<input type="submit" value="Subscribe" class="btn btn-primary btn-custom">
								</div>
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</footer>
	
	</div>

	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Parallax -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Owl Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Date Picker -->
	<script src="js/bootstrap-datepicker.js"></script>

	<!-- Main JS (Do not remove) -->
	<script src="js/main.js"></script>

	</body>
</html>

