{{--
Template Name: Template Page MasteryX
--}}

<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ลงทะเบียน MasteryX กับ ANGA</title>
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<style>

@font-face {
    font-family: "aktiv_grotesk_thai_bold";
    src: url('/wp-content/themes/custom/resources/assets/fonts/Aktiv_Grotesk_Thai_Bold.otf');
}
@font-face {
    font-family: "aktiv_grotesk_thai_medium";
    src: url('/wp-content/themes/custom/resources/assets/fonts/Aktiv_Grotesk_Thai_Medium.otf');
}
@font-face {
    font-family: "aktiv_grotesk_thai";
    src: url('/wp-content/themes/custom/resources/assets/fonts/Aktiv_Grotesk_Thai.otf');
}
@font-face {
    font-family: "aktiv_grotesk_thai_light";
    src: url('/wp-content/themes/custom/resources/assets/fonts/Aktiv_Grotesk_Thai_Light.otf');
}


@font-face {
    font-family: "poppins-bold";
    src: url('/wp-content/themes/custom/resources/assets/fonts/Poppins-Bold.woff2');
}
@font-face {
    font-family: "poppins-semiBold";
    src: url('/wp-content/themes/custom/resources/assets/fonts/Poppins-SemiBold.woff2');
}
@font-face {
    font-family: "poppins-regular";
    src: url('/wp-content/themes/custom/resources/assets/fonts/Poppins-Regular.woff2');
}
@font-face {
    font-family: "poppins-medium";
    src: url('/wp-content/themes/custom/resources/assets/fonts/Poppins-Medium.woff2');
}
@font-face {
    font-family: "poppins-light";
    src: url('/wp-content/themes/custom/resources/assets/fonts/Poppins-Light.woff2');
}
@font-face {
    font-family: "poppins-thin";
    src: url('/wp-content/themes/custom/resources/assets/fonts/Poppins-Thin.ttf');
}
@font-face {
    font-family: "kanit-regular";
    src: url('/wp-content/themes/custom/resources/assets/fonts/Kanit-Regular.woff2');
}


*, *::before, *::after{
    box-sizing: border-box; 
}
* {
    margin: 0; 
    padding: 0; 
}
html, body {
    overflow-x: hidden;
}
ul[role='list'], ol[role='list'] {
    list-style: none; 
}
li {
    list-style: none;
}
a {
    text-decoration: none;
}
a:visited {
   
}
body, html{
    scroll-behavior: smooth;
    font-family: "Plus Jakarta Sans", sans-serif;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}
h1 , h2 ,h3 ,h4 ,h5 ,h6 {
    font-weight: inherit;
}
html:focus-within{
    scroll-behavior: smooth; 
}
a:not([class]){
    text-decoration-skip-ink: none; 
    text-decoration: none;
}
img, picture, svg, video, canvas{
    max-width: 100%;
    height: auto;
}
img, picture, svg, video, canvas{
    vertical-align: middle; 
}
img, picture, svg, video, canvas{
    font-style: italic; 
}
img, picture, svg, video, canvas{
    background-repeat: no-repeat; 
    background-size: cover;
    height: 100%;
    width: auto;
}
input, button, textarea, select{
    font: inherit; 
}
.nav-mobile {
    display: none;
}
div {
    height: max-content;
}

section {
    position: relative;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    display: flex;
    overflow: hidden;
}
@media (prefers-reduced-motion: reduce) {
    html:focus-within {
        scroll-behavior: auto;
    }
    *, *::before, *::after {
        animation-duration: 0.01ms !important;
        animation-iteration-count: 1 !important;
        transition-duration: 0.01ms !important;
        scroll-behavior: auto !important;
        transition: none;
    }
}

.section-hero {
    position: relative;
    display: flex;
    height: 1370px;
    background-color: #010101;
}
.section-hero-image-1 {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: auto;
}
.section-hero-image-1 img {
    width: 100%;
    height: 100%;
}
.section-hero-image-2 {
    display: none;
    position: absolute;
    top: 100px;
    right: 0;
    width: 460px;
    height: 924px;
}
.section-hero-image-2 img {
    width: 100%;
    height: 100%;
}
.section-hero-image-3 {
    position: absolute;
    top: 55px;
    right: -64px;
    width: 224px;
    height: 202px;
}
.section-hero-image-3 img {
    width: auto;
    height: 100%;
}
.section-hero-image-4 {
    position: absolute;
    top: 538px;
    right: 50px;
    width: 826px;
    height: 460px;
    z-index: 2;
}
.section-hero-image-4 img {
    width: 100%;
    height: 100%;
}
.section-hero-image-5 {
    position: absolute;
    bottom: 0;
    right: 0;
    width: 100%;
    height: 460px;
}
.section-hero-image-5 img {
    width: 100%;
    height: 100%;
}
.section-hero-wrapper {
    display: flex;
    width: 100%;
    flex-direction: column;
    gap: 26px;
}
.section-hero-top-wrapper {
    display: flex;
    z-index: 1;
}
.section-hero-box {
    display: flex;
    flex-direction: column;
    align-items: center;
    width: 814px;
    margin: 64px 0 0 162px;
}
.section-hero-logo {
    display: flex;
    width: 360px;
    height: 96px;
    margin-bottom: 10px;
}
.section-hero-logo img {
    width: 100%;
    height: 100%;
}
.section-hero-header-box {
    display: flex;
    margin-bottom: 18px;
}
.section-hero-header {
    font-family: "poppins-bold";
    font-size: 110px;
    color: #fff;
    text-align: center;
    line-height: 1;
    background: linear-gradient(101deg, #FFF 56.61%, rgba(255, 255, 255, 0.00) 126.53%);
    background-clip: text;
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}
.section-hero-paragraph-box {
    display: flex;
    margin-bottom: 38px;
}
.section-hero-paragraph {
    font-family: "poppins-light";
    font-size: 34px;
    line-height: 1.2;
    background: linear-gradient(101deg, #FFF 53.54%, rgba(255, 255, 255, 0.00) 118.16%);
    background-clip: text;
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}
.section-hero-form-wrapper {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 24px;
}
.section-hero-form-header-box {
    display: flex;
}
.section-hero-form-header {
    font-family: "poppins-semiBold";
    font-size: 16px;
    color: #FF5300;
    line-height: 1;
}

.form-container {
    display: flex;
    flex-direction: column;
    justify-content: center;
    width: 814px;
    height: 416px;
    border-radius: 40px;
    background: rgba(48, 48, 48, 0.50);
    backdrop-filter: blur(7.5px);
    gap: 20px;
    padding: 0 42px;
}
.form-container h2 {
    font-family: "aktiv_grotesk_thai_bold";
    font-size: 20px;
    color: #fff;
    line-height: 1;
    padding: 0;
}
.form-wrapper {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 20px;
}
.form-group {
    display: flex;
    flex-direction: column;
    gap: 10px;
    text-align: left;
    width: 350px;
}
.form-group label {
    font-family: "aktiv_grotesk_thai_bold";
    font-size: 16px;
    color: #fff;
    line-height: 1;
}
.form-group input {
    font-family: "aktiv_grotesk_thai";
    font-size: 16px;
    color: #222;
    width: 100%;
    height: 56px;
    padding: 0 28px;
    border-radius: 22px;
    border: none;
    align-items: center;
}
.form-group input::placeholder {
    font-family: "aktiv_grotesk_thai_light";
    color: #bdbdbd;
}
.form-group input:focus-visible {
    outline: unset;
}
.btn {
    display: flex;
    align-items: center;
    justify-content: center;
    font-family: "aktiv_grotesk_thai_bold";
    font-size: 20px;
    color: #fff;
    line-height: 1;
    width: 236px;
    height: 56px;
    background: var(--01, linear-gradient(151deg, #FF5300 20.05%, #FE4C06 36.69%, #FA3916 60.73%, #F31A31 89.13%, #F21436 93.66%));
    border: none;
    color: white;
    cursor: pointer;
    border-radius: 22px;
    margin-top: 12px;
}

.section-top-image-silde-wrapper {
    display: flex;
    justify-content: center;
    width: 826px;
    height: 1008px;
    padding-top: 60px;
}
.section-top-image-silde-1 {
    position: relative;
    display: flex;
    width: 680px;
    height: 1010px;
}
.section-top-image-silde-1 img {
    width: 100%;
}
.section-top-image-silde-paragraph-box {
    display: flex;
    position: absolute;
    right: 300px;
    bottom: 170px;
    opacity: 0;
    transform: translateY(2vw);
    transition: opacity 0.8s ease-out, transform 0.8s ease-out;
    z-index: 3;
}
.section-top-image-silde-paragraph-box.active {
    opacity: 1;
    transform: translateY(0);
}
.section-top-image-silde-paragraph {
    font-family: "poppins-regular";
    font-size: 24px;
    color: #fff;
    line-height: 1.4;
    /* background-color: #222; */
}

.section-hero-bottom-container {
    display: flex;
    width: 100%;
    justify-content: center;
}
.section-hero-bottom-wrapper {
    display: flex;
    width: 1650px;
    height: 336px;
    border-radius: 40px;
    background: linear-gradient(168deg, #FF5300 18.58%, #FE4C06 31.54%, #FA3916 50.28%, #F31A31 72.42%, #F21436 75.95%);
    padding: 48px 0 0 140px;
    z-index: 1;
    gap: 244px;
}
.section-hero-bottom-header-box {
    display: flex;
    position: relative;
}
.section-hero-bottom-header-box:before {
    content: "";
    position: absolute;
    top: 0;
    right: -110px;
    width: 1px;
    height: 230px;
    background-color: #fff;
}
.section-hero-bottom-header {
    font-family: "aktiv_grotesk_thai_medium";
    font-size: 64px;
    color: #fff;
    line-height: 1.3;
}
.section-hero-bottom-header span {
    font-family: "aktiv_grotesk_thai_light";
    font-weight: 100;
}
.section-hero-bottom-detail-box {
    display: flex;
    width: 720px;
    flex-wrap: wrap;
}
.section-hero-bottom-detail-date-box {
    display: flex;
    flex-direction: column;
    gap: 26px;
    margin-right: 102px;
}
.section-hero-bottom-detail-date-header-box {
    display: flex;
}
.section-hero-bottom-detail-date-header {
    font-family: "poppins-medium";
    font-size: 24px;
    color: #FED7D0;
    line-height: 1;
}
.section-hero-bottom-detail-date-paragraph-box {
    display: flex;
}
.section-hero-bottom-detail-date-paragraph {
    font-family: "poppins-regular";
    font-size: 32px;
    color: #fff;
    line-height: 1;
}
.section-hero-bottom-detail-time-box {
    display: flex;
    flex-direction: column;
    gap: 26px;
}
.section-hero-bottom-detail-time-header-box {
    display: flex;
}
.section-hero-bottom-detail-time-header {
    font-family: "poppins-medium";
    font-size: 24px;
    color: #FED7D0;
    line-height: 1;
}
.section-hero-bottom-detail-time-paragraph-box {
    display: flex;
}
.section-hero-bottom-detail-time-paragraph {
    font-family: "poppins-regular";
    font-size: 32px;
    color: #fff;
    line-height: 1;
}
.section-hero-bottom-detail-location-header-box {
    display: flex;
}
.section-hero-bottom-detail-location-header {
    font-family: "poppins-medium";
    font-size: 24px;
    color: #FED7D0;
    line-height: 1;
}
.section-hero-bottom-detail-location-box {
    display: flex;
    flex-direction: column;
    gap: 20px;
    margin-top: 44px;
}
.section-hero-bottom-detail-location-bottom-box {
    display: flex;
    gap: 30px;
}
.section-hero-bottom-detail-location-image {
    width: 130px;
    height: 72px;
}
.section-hero-bottom-detail-location-image img {
    width: 100%;
}
.section-hero-bottom-detail-location-paragraph-bottom-box {
    display: flex;
    flex-direction: column;
    gap: 16px;
}
.section-hero-bottom-detail-location-paragraph-1-box {
    display: flex;
    align-items: center;
    gap: 16px;
}
.section-hero-bottom-detail-location-paragraph-1 {
    font-family: "poppins-regular";
    font-size: 32px;
    color: #fff;
    line-height: 1;
}
.section-hero-bottom-detail-location-paragraph-1-image {
    display: flex;
    width: 22px;
    height: 22px;
}
.section-hero-bottom-detail-location-paragraph-1-image img {
    width: 100%;
}
.section-hero-bottom-detail-location-paragraph-2-box {
    display: flex;
}
.section-hero-bottom-detail-location-paragraph-2 {
    font-family: "poppins-light";
    font-size: 19px;
    color: #fff;
    line-height: 1;
}
.section-speaker {
    display: flex;
    justify-content: center;
    height: 1634px;
    background-color: #010101;
    padding-top: 128px;
}
.section-speaker-wrapper {
    display: flex;
    flex-direction: column;
    z-index: 1;
    gap: 60px;
}
.section-speaker-background-image-1 {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 1252px;
    z-index: 0;
}
.section-speaker-background-image-1 img {
    width: 100%;
}
.section-speaker-background-image-2 {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 1010px;
    z-index: 0;
}
.section-speaker-background-image-2 img {
    width: 100%;
}
.section-speaker-background-image-3 {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 564px;
    z-index: 0;
}
.section-speaker-background-image-3 img {
    width: 100%;
}
.section-speaker-background-image-4 {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 554px;
    z-index: 0;
}
.section-speaker-background-image-4 img {
    width: 100%;
}
.section-speaker-background-image-5 {
    position: absolute;
    bottom: 0;
    right: 0;
    width: 520px;
    height: 1250px;
    z-index: 0;
}
.section-speaker-background-image-5 img {
    width: 100%;
}
.section-speaker-header-box {
    display: flex;
    justify-content: center;
    z-index: 1;
}
.section-speaker-header {
    font-family: "aktiv_grotesk_thai_medium";
    font-size: 64px;
    color: #fff;
    line-height: 1;
}
.section-speaker-header span {
    font-family: "aktiv_grotesk_thai_light";
    font-weight: 100;
}
.section-speaker-detail-container {
    display: flex;
}
.section-speaker-detail-wrapper {
    display: flex;
    flex-wrap: wrap;
    width: 1150px;
    justify-content: space-between;
    z-index: 1;
}
.section-speaker-detail-box {
    display: flex;
    flex-direction: column;
    width: 320px;
    height: 594px;
    margin-bottom: 62px;
    cursor: pointer;
}
.section-speaker-detail-box:nth-of-type(4),
.section-speaker-detail-box:nth-of-type(5) {
    margin-bottom: 0;
}
.section-speaker-detail-box:nth-child(6) {
    margin-bottom: 0;
    cursor: unset;
}
.section-speaker-detail-image {
    width: 320px;
    height: 456px;
    background-image: url(/wp-content/themes/custom/resources/assets/images/MasteryX/speaker/background-speaker.png);
    background-position: bottom;
    background-repeat: no-repeat;
    background-size: auto 430px;
    border-radius: 24px;
    margin-bottom: 22px;
    transition: all 0.4s ease;
}
.section-speaker-detail-box:nth-child(6) .section-speaker-detail-image,
.section-speaker-detail-box:hover:nth-child(6) .section-speaker-detail-image {
    background-image: url(/wp-content/themes/custom/resources/assets/images/MasteryX/speaker/background-speaker-1.png);
}
.section-speaker-detail-box:hover .section-speaker-detail-image {
    background-image: url(/wp-content/themes/custom/resources/assets/images/MasteryX/speaker/background-speaker-h.png);
}
.section-speaker-detail-image img {
    width: auto;
    height: 456px;
}
.section-speaker-detail-name-box {
    display: flex;
    margin-bottom: 16px;
}
.section-speaker-detail-name {
    font-family: "poppins-medium";
    font-size: 32px;
    color: #fff;
    line-height: 1.3;
}
.section-speaker-detail-position-box {
    display: flex;
}
.section-speaker-detail-position {
    font-family: "poppins-regular";
    font-size: 16px;
    color: #C2C2C2;
    line-height: 1;
}
.section-agenda {
    display: flex;
    justify-content: center;
    background-color: #000;
    height: 2740px;
    padding-top: 150px;
}
.section-agenda-wrapper {
    display: flex;
    flex-direction: column;
    gap: 100px;
}
.section-agenda-background-image-1 {
    position: absolute;
    width: 100%;
    height: 1400px;
    top: 0;
    left: 0;
    z-index: 0;
}
.section-agenda-background-image-1 img {
    width: 100%;
}
.section-agenda-background-image-2 {
    position: absolute;
    width: 770px;
    height: 2300px;
    top: 0;
    left: 0;
    z-index: 0;
    opacity: 0.6;
}
.section-agenda-background-image-2 img {
    width: 100%;
}
.section-agenda-header-box {
    display: flex;
    justify-content: center;
    z-index: 1;
}
.section-agenda-header {
    font-family: "aktiv_grotesk_thai_medium";
    font-size: 64px;
    color: #fff;
    line-height: 1;
}
.section-agenda-detail-wrapper {
    display: flex;
    flex-direction: column;
}
.section-agenda-detail-box {
    position: relative;
    display: flex;
    width: 1656px;
    height: 326px;
    z-index: 1;
    padding: 66px 0 0 134px;
}
.section-agenda-detail-box:hover::before {
    content: "";
    position: absolute;
    top: -16px;
    left: -16px;
    width: 1334px;
    height: 324px;
    background-image: url(/wp-content/themes/custom/resources/assets/images/MasteryX/agenda/agenda-background-hover.png);
    background-position: center;
    background-size: contain;
    background-repeat: no-repeat;
}
.section-agenda-detail-1-box {
    display: flex;
    flex-direction: column;
    width: 320px;
    margin-right: 146px;
}
.section-agenda-detail-1-header-box {
    display: flex;
    margin-bottom: 28px;
}
.section-agenda-detail-1-header {
    font-family: "poppins-medium";
    font-size: 24px;
    color: #FF5300;
    line-height: 1;
}
.section-agenda-detail-1-paragraph-1-box {
    display: flex;
    margin-bottom: 24px;
}
.section-agenda-detail-1-paragraph-1 {
    font-family: "poppins-thin";
    font-size: 54px;
    color: #fff;
    line-height: 1;
}
.section-agenda-detail-1-paragraph-2-wrapper {
    display: flex;
    align-items: center;
    gap: 14px;
}
.section-agenda-detail-1-paragraph-2-image {
    width: 28px;
    height: 28px;
}
.section-agenda-detail-1-paragraph-2-image img {
    width: 100%;
}
.section-agenda-detail-1-paragraph-2-box {
    display: flex;
}
.section-agenda-detail-1-paragraph-2 {
    font-family: "poppins-regular";
    font-size: 20px;
    color: #fff;
    line-height: 1;
}
.section-agenda-detail-2-box {
    display: flex;
    flex-direction: column;
    width: 500px;
    margin-right: 94px;
}
.section-agenda-detail-2-header-box {
    display: flex;
    margin-bottom: 28px;
}
.section-agenda-detail-2-header {
    font-family: "poppins-medium";
    font-size: 24px;
    color: #FF5300;
    line-height: 1;
}
.section-agenda-detail-2-paragraph-box {
    display: flex;
}
.section-agenda-detail-2-paragraph {
    font-family: "aktiv_grotesk_thai_light";
    font-size: 20px;
    color: #fff;
    line-height: 1.6;
}
.section-agenda-detail-3-box {
    display: flex;
    width: 164px;
    height: 164px;
    margin-right: 42px;
}
.section-agenda-detail-3-box img {
    width: 100%;
}
.section-agenda-detail-4-box {
    display: flex;
    flex-direction: column;
    width: 260px;
    margin-top: 34px;
    gap: 14px;
}
.section-agenda-detail-4-header-box {
    display: flex;
}
.section-agenda-detail-4-header {
    font-family: "poppins-medium";
    font-size: 24px;
    color: #fff;
    line-height: 1.4;
}
.section-agenda-detail-4-paragraph-box {
    display: flex;
}
.section-agenda-detail-4-paragraph {
    font-family: "poppins-light";
    font-size: 18px;
    color: #fff;
    line-height: 1;
}
.section-agenda-detail-background {
    position: absolute;
    top: 0;
    left: 0;
    width: 1282px;
    height: 292px;
    border-radius: 64px;
    opacity: 0.8;
    background: rgba(255, 255, 255, 0.10);
    backdrop-filter: blur(96.20555877685547px);
    z-index: -1;
}
.section-slide-show {
    display: flex;
    justify-content: center;
    height: 1040px;
    background-color: #000;
    padding-top: 80px;
}
.section-slide-show-wrapper {
    display: flex;
}
.section-slide-show-image-wrapper {
    display: flex;
}
.section-slide-show-image {
    width: auto;
}
.section-slide-show-image img {
    width: 100%;
}
.section-slide-show-background {
    position: absolute;
    bottom: -500px;
    right: 0;
    width: 784px;
    height: 1328px;
    z-index: 0;
    transform: rotate(45deg);
    opacity: 0.6;
}
.section-slide-show-background img {
    width: 100%;
}
.section-footer {
    display: flex;
    align-items: center;
    height: 502px;
    background-color: #000;
    border-top: 12px solid #FE4C05;
}
.section-footer-wrapper {
    display: flex;
    justify-content: space-around;
    width: 100%;
}
.section-footer-header-wrapper {
    display: flex;
    flex-direction: column;
    gap: 42px;
}
.section-footer-header-box {
    display: flex;
}
.section-footer-header {
    font-family: "poppins-semiBold";
    font-size: 84px;
    background: var(--02, linear-gradient(103deg, #FFF 40.62%, rgba(255, 255, 255, 0.00) 104%));
    background-clip: text;
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    line-height: 1;
}
.section-footer-header-detail-box {
    display: flex;
}
.section-footer-header-detail {
    font-family: "poppins-medium";
    font-size: 24px;
    color: #B8BBC2;
    line-height: 1;
}
.section-footer-detail-wrapper {
    display: flex;
    flex-direction: column;
    width: 670px;
    margin-top: 30px;
}
.section-footer-detail-header-box {
    display: flex;
    margin-bottom: 12px;
}
.section-footer-detail-header {
    font-family: "poppins-semiBold";
    font-size: 32px;
    color: #fff;
    line-height: 1;
}
.section-footer-detail-paragraph-box {
    display: flex;
    margin-bottom: 20px;
}
.section-footer-detail-paragraph {
    font-family: "poppins-regular";
    font-size: 24px;
    color: #C2C2C2;
    line-height: 1.6;
}
.section-footer-detail-button {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 270px;
    height: 70px;
    border-radius: 110px;
    background: var(--01, linear-gradient(151deg, #FF5300 20.05%, #FE4C06 36.69%, #FA3916 60.73%, #F31A31 89.13%, #F21436 93.66%));
    gap: 14px;
}
.section-footer-detail-button-paragraph {
    font-family: "aktiv_grotesk_thai_bold";
    font-size: 20px;
    color: #fff;
    line-height: 1;
}
.section-footer-detail-button-image {
    width: 18px;
    height: 18px;
    margin-bottom: 4px;
}
.section-footer-background {
    position: absolute;
    bottom: -80px;
    left: 0;
    width: auto;
    height: 478px;
    z-index: 0;
}
.section-footer-background img {
    width: 100%;
}

/* ซ่อน Popup ตอนเริ่มต้น */
.popup-overlay {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: #000;
    opacity: 0.95;
    z-index: 1000;
    justify-content: center;
    align-items: center;
}

/* กล่องเนื้อหา Popup */
.popup-content {
    width: 816px;
}

/* ปุ่มปิด Popup */
.close-popup {
    position: absolute;
    top: 334px;
    right: 442px;
    width: 80px;
    height: 80px;
    cursor: pointer;
    color: #fff;
    background-image: url(/wp-content/themes/custom/resources/assets/images/MasteryX/footer/close-button.png);
    background-position: center;
    background-size: contain;
    background-repeat: no-repeat;
}

.hbspt-form iframe {
    width: 738px !important;
    height: 264px !important;
    margin: 0 auto;
}
.hbspt-form-e381b916-3b50-4153-a7f2-291824b38726 .hsForm_1dfcbf8d-e1aa-4234-a735-d95f0c9f8249 .form-columns-2 {
    display: flex;
}


/* Fade-in Animation */
@keyframes fadeIn {
    from { opacity: 0; transform: scale(0.9); }
    to { opacity: 1; transform: scale(1); }
}



img.d {
    display: block;
}
img.m {
    display: none;
}
br.d {
    display: block;
}
br.m {
    display: none;
}
@media screen and (min-width: 1921px) {
    .section-hero {
        height: 71.354vw;
    }
    .section-hero-image-2 {
        top: 5.208vw;
        width: 23.958vw;
        height: 48.125vw;
    }
    .section-hero-image-3 {
        top: 2.8vw;
        right: -3.2vw;
        width: 11.667vw;
        height: 10.521vw;
    }
    .section-hero-image-4 {
        top: 28.021vw;
        right: 2.604vw;
        width: 43.021vw;
        height: 23.958vw;
    }
    .section-hero-image-5 {
        height: 23.958vw;
    }
    .section-hero-wrapper {
        gap: 1.354vw;
    }
    .section-hero-box {
        width: 42.396vw;
        margin: 3.333vw 0 0 8.438vw;
    }
    .section-hero-logo {
        width: 18.75vw;
        height: 5vw;
        margin-bottom: 0.521vw;
    }
    .section-hero-header-box {
        margin-bottom: 0.938vw;
    }
    .section-hero-header {
        font-size: 5.729vw;
    }
    .section-hero-paragraph-box {
        margin-bottom: 1.979vw;
    }
    .section-hero-paragraph {
        font-size: 1.771vw;
    }
    .section-hero-form-wrapper {
        gap: 1.25vw;
    }
    .section-hero-form-header {
        font-size: 0.833vw;
    }
    .form-container {
        width: 40.396vw;
        height: 17.667vw;
        border-radius: 2.083vw;
        gap: 1.042vw;
    }
    .form-container h2 {
        font-size: 1.042vw;
    }
    .form-wrapper {
        gap: 1.042vw;
    }
    .form-group {
        gap: 0.521vw;
        width: 18.229vw;
    }
    .form-group label {
        font-size: 0.833vw;
    }
    .form-group input {
        font-size: 0.833vw;
        height: 2.917vw;
        padding: 0 1.458vw;
        border-radius: 1.146vw;
    }
    .btn {
        font-size: 1.042vw;
        width: 12.292vw;
        height: 2.917vw;
        border-radius: 1.146vw;
        margin-top: 0.625vw;
    }
    
    .section-top-image-silde-wrapper {
        width: 43.021vw;
        height: 52.5vw;
        padding-top: 3.125vw;
    }
    .section-top-image-silde-1 {
        width: 35.417vw;
        height: 52.604vw;
    }
    .section-top-image-silde-paragraph-box {
        right: 16.25vw;
        bottom: 11.417vw;
    }
    .section-top-image-silde-paragraph {
        font-size: 1.25vw;
    }
    .section-hero-bottom-wrapper {
        width: 85.938vw;
        height: 17.5vw;
        border-radius: 2.083vw;
        padding: 2.5vw 0 0 7.292vw;
        gap: 12.708vw;
    }
    .section-hero-bottom-header-box:before {
        right: -5.729vw;
        width: 0.052vw;
        height: 11.979vw;
    }
    .section-hero-bottom-header {
        font-size: 3.333vw;
    }
    .section-hero-bottom-detail-box {
        width: 37.5vw;
    }
    .section-hero-bottom-detail-date-box {
        gap: 1.354vw;
        margin-right: 5.313vw;
    }
    .section-hero-bottom-detail-date-header {
        font-size: 1.25vw;
    }
    .section-hero-bottom-detail-date-paragraph {
        font-size: 1.667vw;
    }
    .section-hero-bottom-detail-time-box {
        gap: 1.354vw;
    }
    .section-hero-bottom-detail-time-header {
        font-size: 1.25vw;
    }
    .section-hero-bottom-detail-time-paragraph {
        font-size: 1.667vw;
    }
    .section-hero-bottom-detail-location-header {
        font-size: 1.25vw;
    }
    .section-hero-bottom-detail-location-box {
        gap: 1.042vw;
        margin-top: 2.292vw;
    }
    .section-hero-bottom-detail-location-bottom-box {
        gap: 1.563vw;
    }
    .section-hero-bottom-detail-location-image {
        width: 6.771vw;
        height: 3.75vw;
    }
    .section-hero-bottom-detail-location-paragraph-bottom-box {
        gap: 0.833vw;
    }
    .section-hero-bottom-detail-location-paragraph-1-box {
        gap: 0.833vw;
    }
    .section-hero-bottom-detail-location-paragraph-1 {
        font-size: 1.667vw;
    }
    .section-hero-bottom-detail-location-paragraph-1-image {
        width: 1.146vw;
        height: 1.146vw;
    }
    .section-hero-bottom-detail-location-paragraph-2 {
        font-size: 0.99vw;
    }
    .section-speaker {
        height: 85.104vw;
        padding-top: 6.667vw;
    }
    .section-speaker-wrapper {
        gap: 3.125vw;
    }
    .section-speaker-background-image-1 {
        height: 65.208vw;
    }
    .section-speaker-background-image-2 {
        height: 52.604vw;
    }
    .section-speaker-background-image-3 {
        height: 29.375vw;
    }
    .section-speaker-background-image-4 {
        height: 28.854vw;
    }
    .section-speaker-background-image-5 {
        width: 27.083vw;
        height: 65.104vw;
    }
    .section-speaker-header {
        font-size: 3.333vw;
    }
    .section-speaker-detail-wrapper {
        width: 59.896vw;
    }
    .section-speaker-detail-box {
        width: 16.667vw;
        height: 30.938vw;
        margin-bottom: 3.229vw;
    }
    .section-speaker-detail-image {
        width: 16.667vw;
        height: 23.75vw;
        background-size: auto 22.396vw;
        border-radius: 1.25vw;
        margin-bottom: 1.146vw;
    }
    .section-speaker-detail-image img {
        height: 23.75vw;
    }
    .section-speaker-detail-name-box {
        margin-bottom: 0.833vw;
    }
    .section-speaker-detail-name {
        font-size: 1.667vw;
    }
    .section-speaker-detail-position {
        font-size: 0.833vw;
    }
    .section-agenda {
        height: 142.708vw;
        padding-top: 7.813vw;
    }
    .section-agenda-wrapper {
        gap: 5.208vw;
    }
    .section-agenda-background-image-1 {
        height: 72.917vw;
    }
    .section-agenda-background-image-2 {
        width: 40.104vw;
        height: 119.792vw;
    }
    .section-agenda-header {
        font-size: 3.333vw;
    }
    .section-agenda-detail-box {
        width: 86.25vw;
        height: 16.979vw;
        padding: 3.438vw 0 0 6.979vw;
    }
    .section-agenda-detail-box:hover::before {
        top: -0.833vw;
        left: -0.833vw;
        width: 69.479vw;
        height: 16.875vw;
    }
    .section-agenda-detail-1-box {
        width: 16.667vw;
        margin-right: 7.604vw;
    }
    .section-agenda-detail-1-header-box {
        margin-bottom: 1.458vw;
    }
    .section-agenda-detail-1-header {
        font-size: 1.25vw;
    }
    .section-agenda-detail-1-paragraph-1-box {
        margin-bottom: 1.25vw;
    }
    .section-agenda-detail-1-paragraph-1 {
        font-size: 2.813vw;
    }
    .section-agenda-detail-1-paragraph-2-wrapper {
        gap: 0.729vw;
    }
    .section-agenda-detail-1-paragraph-2-image {
        width: 1.458vw;
        height: 1.458vw;
    }
    .section-agenda-detail-1-paragraph-2 {
        font-size: 1.042vw;
    }
    .section-agenda-detail-2-box {
        width: 26.042vw;
        margin-right: 4.896vw;
    }
    .section-agenda-detail-2-header-box {
        margin-bottom: 1.458vw;
    }
    .section-agenda-detail-2-header {
        font-size: 1.25vw;
    }
    .section-agenda-detail-2-paragraph {
        font-size: 1.042vw;
    }
    .section-agenda-detail-3-box {
        width: 8.542vw;
        height: 8.542vw;
        margin-right: 2.188vw;
    }
    .section-agenda-detail-4-box {
        width: 13.542vw;
        margin-top: 1.771vw;
        gap: 0.729vw;
    }
    .section-agenda-detail-4-header {
        font-size: 1.25vw;
    }
    .section-agenda-detail-4-paragraph {
        font-size: 0.938vw;
    }
    .section-agenda-detail-background {
        width: 66.771vw;
        height: 15.208vw;
        border-radius: 3.333vw;
        backdrop-filter: blur(5vw);
    }
    .section-slide-show {
        height: 54.167vw;
        padding-top: 4.167vw;
    }
    /* .section-slide-show-image {
        width: 71.458vw;
        height: 37.604vw;
    } */
    .section-slide-show-background {
        bottom: -26.042vw;
        width: 40.833vw;
        height: 69.167vw;
    }
    .section-footer {
        height: 26.146vw;
        border-top: 0.625vw solid #FE4C05;
    }
    .section-footer-header-wrapper {
        gap: 2.188vw;
    }
    .section-footer-header {
        font-size: 4.375vw;
    }
    .section-footer-header-detail {
        font-size: 1.25vw;
    }
    .section-footer-detail-wrapper {
        width: 34.896vw;
        margin-top: 1.563vw;
    }
    .section-footer-detail-header-box {
        margin-bottom: 0.625vw;
    }
    .section-footer-detail-header {
        font-size: 1.667vw;
    }
    .section-footer-detail-paragraph-box {
        margin-bottom: 1.042vw;
    }
    .section-footer-detail-paragraph {
        font-size: 1.25vw;
    }
    .section-footer-detail-button {
        width: 14.063vw;
        height: 3.646vw;
        border-radius: 5.729vw;
        gap: 0.729vw;
    }
    .section-footer-detail-button-paragraph {
        font-size: 1.042vw;
    }
    .section-footer-detail-button-image {
        width: 0.938vw;
        height: 0.938vw;
        margin-bottom: 0.208vw;
    }
    .section-footer-background {
        bottom: -4.167vw;
        height: 24.896vw;
    }

    .popup-content {
        width: 42.5vw;
    }
    .close-popup {
        top: 15.396vw;
        right: 23.021vw;
        width: 4.167vw;
        height: 4.167vw;
    }

    .hbspt-form iframe {
        width: 37.396vw !important;
        height: 10.75vw !important;
    }

}

@media screen and (max-width: 1919px) {
    .section-hero {
        height: 71.354vw;
    }
    .section-hero-image-2 {
        top: 5.208vw;
        width: 23.958vw;
        height: 48.125vw;
    }
    .section-hero-image-3 {
        top: 2.8vw;
        right: -3.2vw;
        width: 11.667vw;
        height: 10.521vw;
    }
    .section-hero-image-4 {
        top: 28.021vw;
        right: 2.604vw;
        width: 43.021vw;
        height: 23.958vw;
    }
    .section-hero-image-5 {
        height: 23.958vw;
    }
    .section-hero-wrapper {
        gap: 1.354vw;
    }
    .section-hero-box {
        width: 42.396vw;
        margin: 3.333vw 0 0 8.438vw;
    }
    .section-hero-logo {
        width: 18.75vw;
        height: 5vw;
        margin-bottom: 0.521vw;
    }
    .section-hero-header-box {
        margin-bottom: 0.938vw;
    }
    .section-hero-header {
        font-size: 5.729vw;
    }
    .section-hero-paragraph-box {
        margin-bottom: 1.979vw;
    }
    .section-hero-paragraph {
        font-size: 1.771vw;
    }
    .section-hero-form-wrapper {
        gap: 1.25vw;
    }
    .section-hero-form-header {
        font-size: 0.833vw;
    }
    .form-container {
        width: 42.396vw;
        height: 21.667vw;
        border-radius: 2.083vw;
        gap: 1.042vw;
    }
    .form-container h2 {
        font-size: 1.042vw;
        padding: 0;
    }
    .form-wrapper {
        gap: 1.042vw;
    }
    .form-group {
        gap: 0.521vw;
        width: 18.229vw;
    }
    .form-group label {
        font-size: 0.833vw;
    }
    .form-group input {
        font-size: 0.833vw;
        height: 2.917vw;
        padding: 0 1.458vw;
        border-radius: 1.146vw;
    }
    .btn {
        font-size: 1.042vw;
        width: 12.292vw;
        height: 2.917vw;
        border-radius: 1.146vw;
        margin-top: 0.625vw;
    }
    
    .section-top-image-silde-wrapper {
        width: 43.021vw;
        height: 52.5vw;
        padding-top: 3.125vw;
    }
    .section-top-image-silde-1 {
        width: 35.417vw;
        height: 52.604vw;
    }
    .section-top-image-silde-paragraph-box {
        right: 16.25vw;
        bottom: 11.417vw;
    }
    .section-top-image-silde-paragraph {
        font-size: 1.25vw;
    }
    .section-hero-bottom-wrapper {
        width: 85.938vw;
        height: 17.5vw;
        border-radius: 2.083vw;
        padding: 2.5vw 0 0 7.292vw;
        gap: 12.708vw;
    }
    .section-hero-bottom-header-box:before {
        right: -5.729vw;
        width: 0.052vw;
        height: 11.979vw;
    }
    .section-hero-bottom-header {
        font-size: 3.333vw;
    }
    .section-hero-bottom-detail-box {
        width: 37.5vw;
    }
    .section-hero-bottom-detail-date-box {
        gap: 1.354vw;
        margin-right: 5.313vw;
    }
    .section-hero-bottom-detail-date-header {
        font-size: 1.25vw;
    }
    .section-hero-bottom-detail-date-paragraph {
        font-size: 1.667vw;
    }
    .section-hero-bottom-detail-time-box {
        gap: 1.354vw;
    }
    .section-hero-bottom-detail-time-header {
        font-size: 1.25vw;
    }
    .section-hero-bottom-detail-time-paragraph {
        font-size: 1.667vw;
    }
    .section-hero-bottom-detail-location-header {
        font-size: 1.25vw;
    }
    .section-hero-bottom-detail-location-box {
        gap: 1.042vw;
        margin-top: 2.292vw;
    }
    .section-hero-bottom-detail-location-bottom-box {
        gap: 1.563vw;
    }
    .section-hero-bottom-detail-location-image {
        width: 6.771vw;
        height: 3.75vw;
    }
    .section-hero-bottom-detail-location-paragraph-bottom-box {
        gap: 0.833vw;
    }
    .section-hero-bottom-detail-location-paragraph-1-box {
        gap: 0.833vw;
    }
    .section-hero-bottom-detail-location-paragraph-1 {
        font-size: 1.667vw;
    }
    .section-hero-bottom-detail-location-paragraph-1-image {
        width: 1.146vw;
        height: 1.146vw;
    }
    .section-hero-bottom-detail-location-paragraph-2 {
        font-size: 0.99vw;
    }
    .section-speaker {
        height: 85.104vw;
        padding-top: 6.667vw;
    }
    .section-speaker-wrapper {
        gap: 3.125vw;
    }
    .section-speaker-background-image-1 {
        height: 65.208vw;
    }
    .section-speaker-background-image-2 {
        height: 52.604vw;
    }
    .section-speaker-background-image-3 {
        height: 29.375vw;
    }
    .section-speaker-background-image-4 {
        height: 28.854vw;
    }
    .section-speaker-background-image-5 {
        width: 27.083vw;
        height: 65.104vw;
    }
    .section-speaker-header {
        font-size: 3.333vw;
    }
    .section-speaker-detail-wrapper {
        width: 59.896vw;
    }
    .section-speaker-detail-box {
        width: 16.667vw;
        height: 30.938vw;
        margin-bottom: 3.229vw;
    }
    .section-speaker-detail-image {
        width: 16.667vw;
        height: 23.75vw;
        background-size: auto 22.396vw;
        border-radius: 1.25vw;
        margin-bottom: 1.146vw;
    }
    .section-speaker-detail-image img {
        height: 23.75vw;
    }
    .section-speaker-detail-name-box {
        margin-bottom: 0.833vw;
    }
    .section-speaker-detail-name {
        font-size: 1.667vw;
    }
    .section-speaker-detail-position {
        font-size: 0.833vw;
    }
    .section-agenda {
        height: 143.5vw;
        padding-top: 7.813vw;
    }
    .section-agenda-wrapper {
        gap: 5.208vw;
    }
    .section-agenda-background-image-1 {
        height: 72.917vw;
    }
    .section-agenda-background-image-2 {
        width: 40.104vw;
        height: 119.792vw;
    }
    .section-agenda-header {
        font-size: 3.333vw;
    }
    .section-agenda-detail-box {
        width: 86.25vw;
        height: 16.979vw;
        padding: 3.438vw 0 0 6.979vw;
    }
    .section-agenda-detail-box:hover::before {
        top: -0.833vw;
        left: -0.833vw;
        width: 69.479vw;
        height: 16.875vw;
    }
    .section-agenda-detail-1-box {
        width: 16.667vw;
        margin-right: 7.604vw;
    }
    .section-agenda-detail-1-header-box {
        margin-bottom: 1.458vw;
    }
    .section-agenda-detail-1-header {
        font-size: 1.25vw;
    }
    .section-agenda-detail-1-paragraph-1-box {
        margin-bottom: 1.25vw;
    }
    .section-agenda-detail-1-paragraph-1 {
        font-size: 2.813vw;
    }
    .section-agenda-detail-1-paragraph-2-wrapper {
        gap: 0.729vw;
    }
    .section-agenda-detail-1-paragraph-2-image {
        width: 1.458vw;
        height: 1.458vw;
    }
    .section-agenda-detail-1-paragraph-2 {
        font-size: 1.042vw;
    }
    .section-agenda-detail-2-box {
        width: 26.042vw;
        margin-right: 4.896vw;
    }
    .section-agenda-detail-2-header-box {
        margin-bottom: 1.458vw;
    }
    .section-agenda-detail-2-header {
        font-size: 1.25vw;
    }
    .section-agenda-detail-2-paragraph {
        font-size: 1.042vw;
    }
    .section-agenda-detail-3-box {
        width: 8.542vw;
        height: 8.542vw;
        margin-right: 2.188vw;
    }
    .section-agenda-detail-4-box {
        width: 13.542vw;
        margin-top: 1.771vw;
        gap: 0.729vw;
    }
    .section-agenda-detail-4-header {
        font-size: 1.25vw;
    }
    .section-agenda-detail-4-paragraph {
        font-size: 0.938vw;
    }
    .section-agenda-detail-background {
        width: 66.771vw;
        height: 15.208vw;
        border-radius: 3.333vw;
        backdrop-filter: blur(5vw);
    }
    .section-slide-show {
        height: 54.167vw;
        padding-top: 4.167vw;
    }
    /* .section-slide-show-image {
        width: 71.458vw;
        height: 37.604vw;
    } */
    .section-slide-show-background {
        bottom: -26.042vw;
        width: 40.833vw;
        height: 69.167vw;
    }
    .section-footer {
        height: 26.146vw;
        border-top: 0.625vw solid #FE4C05;
    }
    .section-footer-header-wrapper {
        gap: 2.188vw;
    }
    .section-footer-header {
        font-size: 4.375vw;
    }
    .section-footer-header-detail {
        font-size: 1.25vw;
    }
    .section-footer-detail-wrapper {
        width: 34.896vw;
        margin-top: 1.563vw;
    }
    .section-footer-detail-header-box {
        margin-bottom: 0.625vw;
    }
    .section-footer-detail-header {
        font-size: 1.667vw;
    }
    .section-footer-detail-paragraph-box {
        margin-bottom: 1.042vw;
    }
    .section-footer-detail-paragraph {
        font-size: 1.25vw;
    }
    .section-footer-detail-button {
        width: 14.063vw;
        height: 3.646vw;
        border-radius: 5.729vw;
        gap: 0.729vw;
    }
    .section-footer-detail-button-paragraph {
        font-size: 1.042vw;
    }
    .section-footer-detail-button-image {
        width: 0.938vw;
        height: 0.938vw;
        margin-bottom: 0.208vw;
    }
    .section-footer-background {
        bottom: -4.167vw;
        height: 24.896vw;
    }

    .popup-content {
        width: 42.5vw;
    }

    .close-popup {
        top: 15.396vw;
        right: 23.021vw;
        width: 4.167vw;
        height: 4.167vw;
    }

    .hbspt-form iframe {
        width: 37.396vw !important;
        height: 17.75vw !important;
    }

}

@media screen and (max-width: 1300px) {
    .form-container {
        height: 35.667vw;
    }
    .section-hero {
        height: 83.354vw;
    }
    .hbspt-form iframe {
        height: 23.75vw !important;
    }

}

@media screen and (max-width: 1070px) {
    .form-container {
        height: 55.667vw;
        padding: 0 3vw;
    }
    .section-hero {
        height: 103.354vw;
    }
    .hbspt-form iframe {
        height: 43.75vw !important;
    }

}

@media screen and (max-width: 918px) {
    .form-container {
        height: 65.667vw;
        padding: 0 3vw;
    }
    .section-hero {
        height: 113.354vw;
    }
    .hbspt-form iframe {
        height: 53.75vw !important;
    }

}

@media screen and (max-width: 750px) {
    .form-container {
        height: 75.667vw;
        padding: 0 3vw;
    }
    .section-hero {
        height: 123.354vw;
    }
    .hbspt-form iframe {
        height: 63.75vw !important;
    }

}

@media screen and (max-width: 618px) {
    .form-container {
        height: 85.667vw;
        padding: 0 3vw;
    }
    .section-hero {
        height: 133.354vw;
    }
    .hbspt-form iframe {
        height: 73.75vw !important;
    }

}

@media screen and (max-width: 543px) {
    .form-container {
        height: 95.667vw;
        padding: 0 3vw;
    }
    .section-hero {
        height: 143.354vw;
    }
    .hbspt-form iframe {
        height: 83.75vw !important;
    }

}

@media screen and (max-width: 430px) {
    .section-hero {
        height: 528vw;
        padding-top: 17.209vw;
    }
    .section-hero-image-2 {
        display: none;
        top: 5.208vw;
        width: 23.958vw;
        height: 48.125vw;
    }
    .section-hero-image-3 {
        display: none;
        top: 2.396vw;
        right: -3.438vw;
        width: 11.667vw;
        height: 10.521vw;
    }
    .section-hero-image-4 {
        top: 63vw;
        right: 0;
        width: 100%;
        height: 28.229vw;
    }
    .section-hero-image-4 img {
        width: 100% !important;
        height: auto;
    }
    .section-hero-image-5 {
        height: 23.958vw;
    }
    .section-hero-wrapper {
        justify-content: space-between;
        height: 100%;
        gap: 0;
    }
    .section-hero-top-wrapper {
        flex-direction: column;
    }
    .section-hero-box {
        width: 42.396vw;
        margin: 3.333vw 0 0 8.438vw;
    }
    .section-hero-box {
        width: 100%;
        margin: 0;
    }
    .section-hero-logo {
        width: 44.651vw;
        height: 12.093vw;
        margin-bottom: 4vw;
    }
    .section-hero-header-box {
        margin-bottom: 2vw;
    }
    .section-hero-header {
        font-size: 12.093vw;
    }
    .section-hero-paragraph-box {
        margin-bottom: 4vw;
    }
    .section-hero-paragraph {
        font-size: 4.186vw;
    }
    .section-hero-form-wrapper {
        gap: 4.729vw;
    }
    .section-hero-form-header {
        font-family: "poppins-light";
        font-size: 3.721vw;
        text-align: center;
        line-height: 1.5;
    }
    .form-container {
        position: absolute;
        justify-content: flex-start;
        width: 90.698vw;
        height: 162.86vw;
        border-radius: 11.163vw;
        gap: 5.651vw;
        top: 200vw;
        z-index: 2;
        padding: 12vw 6vw;
        backdrop-filter: unset;
        background-color: #191919;
    }
    .form-container h2 {
        font-size: 4.651vw;
        padding: 0;
    }
    .form-wrapper {
        gap: 5.116vw;
    }
    .form-group {
        gap: 2.326vw;
        width: 81.395vw;
    }
    .form-group label {
        font-size: 3.721vw;
    }
    .form-group input {
        font-size: 3.721vw;
        height: 15.349vw;
        padding: 0 6.047vw;
        border-radius: 5.116vw;
    }
    .btn {
        font-size: 4.651vw;
        width: 65.116vw;
        height: 14.884vw;
        border-radius: 5.116vw;
        margin-top: 3.837vw;
    }
    
    .section-top-image-silde-wrapper {
        width: 100%;
        height: auto;
        padding-top: 6.977vw;
    }
    .section-top-image-silde-1 {
        width: 78.605vw;
        height: 116.279vw;
    }
    .section-top-image-silde-paragraph-box {
        right: 22.25vw;
        bottom: 16.417vw;
    }
    .section-top-image-silde-paragraph {
        font-size: 3.256vw;
    }
    .section-hero-bottom-wrapper {
        flex-direction: column;
        width: 90.698vw;
        height: 154.419vw;
        border-radius: 11.163vw;
        padding: 15.209vw 6.977vw 0;
        gap: 12.708vw;
    }
    .section-hero-bottom-header-box:before {
        top: 28.837vw;
        right: 50%;
        transform: translateX(50%);
        width: 77.674vw;
        height: 0.233vw;
    }
    .section-hero-bottom-header {
        font-size: 9.302vw;
    }
    .section-hero-bottom-detail-box {
        width: 100%;
    }
    .section-hero-bottom-detail-date-box {
        gap: 4.186vw;
        margin-right: 0;
        margin-bottom: 6.977vw;
    }
    .section-hero-bottom-detail-date-header {
        font-size: 3.721vw;
    }
    .section-hero-bottom-detail-date-paragraph {
        font-size: 5.581vw;
        font-family: "poppins-light";
    }
    .section-hero-bottom-detail-time-box {
        gap: 4.186vw;
        margin-bottom: 6.977vw;
    }
    .section-hero-bottom-detail-time-header {
        font-size: 3.721vw;
    }
    .section-hero-bottom-detail-time-paragraph {
        font-size: 5.581vw;
        font-family: "poppins-light";
    }
    .section-hero-bottom-detail-location-header {
        font-size: 3.721vw;
    }
    .section-hero-bottom-detail-location-box {
        gap: 4.186vw;
        margin-top: 2.292vw;
    }
    .section-hero-bottom-detail-location-bottom-box {
        gap: 4.651vw;
        flex-direction: column-reverse;
        align-items: center;
    }
    .section-hero-bottom-detail-location-image {
        width: 35.814vw;
        height: 20vw;
    }
    .section-hero-bottom-detail-location-paragraph-bottom-box {
        gap: 4.651vw;
    }
    .section-hero-bottom-detail-location-paragraph-1-box {
        gap: 0.833vw;
    }
    .section-hero-bottom-detail-location-paragraph-1 {
        font-size: 5.3vw;
        font-family: "poppins-light";
    }
    .section-hero-bottom-detail-location-paragraph-1-image {
        width: 3.488vw;
        height: 3.488vw;
    }
    .section-hero-bottom-detail-location-paragraph-2 {
        font-size: 3.488vw;
        font-family: "poppins-thin";
    }
    .section-speaker {
        height: 233.488vw;
        padding-top: 18.605vw;
    }
    .section-speaker-wrapper {
        gap: 10.233vw;
    }
    .section-speaker-background-image-1 {
        height: 100%;
    }
    .section-speaker-background-image-2 {
        display: none;
        height: 52.604vw;
    }
    .section-speaker-background-image-3 {
        display: none;
        height: 29.375vw;
    }
    .section-speaker-background-image-4 {
        display: none;
        height: 28.854vw;
    }
    .section-speaker-background-image-5 {
        display: none;
        width: 27.083vw;
        height: 65.104vw;
    }
    .section-speaker-header {
        font-size: 9.302vw;
        text-align: center;
        line-height: 1.4;
    }
    .section-speaker-detail-container {
        overflow-x: scroll;
        width: 100vw;
    }
    .section-speaker-detail-wrapper {
        width: max-content;
        flex-wrap: nowrap;
        padding: 0 4.186vw;
        gap: 6.047vw;
    }
    .section-speaker-detail-box {
        width: 74.419vw;
        height: 136.744vw;
        margin-bottom: 3.229vw;
    }
    .section-speaker-detail-image {
        width: 100%;
        height: 106.047vw;
        background-size: auto 100vw;
        border-radius: 5.581vw;
        margin-bottom: 4.581vw;
    }
    .section-speaker-detail-image img {
        height: 100%;
    }
    .section-speaker-detail-name-box {
        margin-bottom: 2.791vw;
    }
    .section-speaker-detail-name {
        font-size: 7.442vw;
    }
    .section-speaker-detail-position {
        font-size: 3.721vw;
    }
    .section-agenda {
        height: auto;
        padding-top: 22.326vw;
    }
    .section-agenda-wrapper {
        gap: 12.558vw;
    }
    .section-agenda-background-image-1 {
        height: 72.917vw;
    }
    .section-agenda-background-image-2 {
        width: auto;
        height: auto;
        opacity: 0.5;
    }
    .section-agenda-background-image-3 {
        position: absolute;
        right: 0;
        bottom: 104vw;
        width: auto;
        height: auto;
        opacity: 0.5;
    }
    .section-agenda-header {
        font-size: 9.302vw;
    }
    .section-agenda-detail-box {
        flex-direction: column;
        width: 90.698vw;
        height: auto;
        padding: 13.023vw 7.907vw 11.023vw;
        border-radius: 14.884vw;
        opacity: 0.8;
        background: rgba(255, 255, 255, 0.10);
        backdrop-filter: blur(22.326vw);
    }
    .section-agenda-detail-box:hover::before {
        content: unset;
    }
    .section-agenda-detail-box:nth-child(even) {
        background: unset;
        backdrop-filter: unset;
    }
    .section-agenda-detail-1-box {
        width: 100%;
        margin-right: 0;
        margin-bottom: 7.907vw;
    }
    .section-agenda-detail-1-header-box {
        margin-bottom: 6.512vw;
    }
    .section-agenda-detail-1-header {
        font-size: 5.581vw;
    }
    .section-agenda-detail-1-paragraph-1-box {
        margin-bottom: 5.581vw;
    }
    .section-agenda-detail-1-paragraph-1 {
        font-size: 12.558vw;
    }
    .section-agenda-detail-1-paragraph-2-wrapper {
        gap: 3.256vw;
    }
    .section-agenda-detail-1-paragraph-2-image {
        width: 6.512vw;
        height: 6.512vw;
    }
    .section-agenda-detail-1-paragraph-2 {
        font-size: 4.651vw;
    }
    .section-agenda-detail-2-box {
        width: 100%;
        margin-right: 4.896vw;
    }
    .section-agenda-detail-2-header-box {
        margin-bottom: 3.256vw;
    }
    .section-agenda-detail-2-header {
        font-size: 4.651vw;
        line-height: 1.4;
    }
    .section-agenda-detail-2-paragraph-box {
        margin-bottom: 7.442vw;
    }
    .section-agenda-detail-2-paragraph {
        font-size: 3.721vw;
    }
    .section-agenda-detail-3-box {
        justify-content: center;
        width: 100%;
        height: 38.14vw;
        margin-right: 0;
    }
    .section-agenda-detail-3-box img {
        width: 38.14vw;
    }
    .section-agenda-detail-4-box {
        align-items: center;
        width: 100%;
        margin-top: 4.651vw;
        gap: 2.791vw;
    }
    .section-agenda-detail-4-header {
        font-size: 5.581vw;
        text-align: center;
    }
    .section-agenda-detail-4-paragraph {
        font-size: 4.186vw;
        line-height: 1.4;
    }
    .section-agenda-detail-background {
        display: none;
        width: 66.771vw;
        height: 15.208vw;
        border-radius: 3.333vw;
        backdrop-filter: blur(5vw);
    }
    .section-slide-show {
        height: 88.372vw;
        padding-top: 17.167vw;
    }
    .section-slide-show-image {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 90.698vw;
        height: 51.163vw;
    }
    .section-slide-show-background {
        bottom: -35.042vw;
        width: 70.833vw;
        height: 99.167vw;
    }
    .section-footer {
        align-items: flex-start;
        height: 132.093vw;
        border-top: 1.86vw solid #FE4C05;
        padding-top: 15.349vw;
    }
    .section-footer-header-wrapper {
        gap: 5.116vw;
    }
    .section-footer-header {
        font-size: 9.698vw;
        line-height: 1.1;
    }
    .section-footer-header-detail {
        font-size: 4.351vw;
    }
    .section-footer-detail-wrapper {
        align-items: center;
        width: 100%;
        margin-top: 1.563vw;
        z-index: 1;
    }
    .section-footer-detail-header-box {
        width: 100%;
        margin-bottom: 2.791vw;
    }
    .section-footer-detail-header {
        font-size: 4.651vw;
    }
    .section-footer-detail-paragraph-box {
        margin-bottom: 4.186vw;
    }
    .section-footer-detail-paragraph {
        font-size: 3.721vw;
    }
    .section-footer-detail-button {
        width: 62.791vw;
        height: 16.279vw;
        border-radius: 25.581vw;
        gap: 3.256vw;
    }
    .section-footer-detail-button-paragraph {
        font-size: 4.651vw;
    }
    .section-footer-detail-button-image {
        width: 4.186vw;
        height: 4.186vw;
        margin-bottom: 1.163vw;
    }
    .section-footer-wrapper {
        flex-direction: column;
        padding: 0 12.558vw;
        gap: 15.349vw;
    }
    .section-footer-background {
        bottom: -4.167vw;
        height: 64.896vw;
    }

    .popup-overlay {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: #000;
        opacity: 0.95;
        z-index: 1000;
        justify-content: center;
        align-items: flex-start;
    }
    .popup-content {
        width: 90.698vw;
    }
    .popup-content .form-container {
        top: 34.884vw;
    }
    .close-popup {
        top: 18vw;
        right: 50%;
        transform: translateX(50%);
        width: 10.698vw;
        height: 10.698vw;
    }

    img.d {
        display: none;
    }
    img.m {
        display: block;
    }
    br.d {
        display: none;
    }
    br.m {
        display: block;
    }


    .hbspt-form iframe {
        width: 80.698vw !important;
        height: 122.791vw !important;
        background-color: #191919;
    }

    .section-speaker-detail-box:hover .section-speaker-detail-image {
        background-image: url(/wp-content/themes/custom/resources/assets/images/MasteryX/speaker/background-speaker.png);
    }
}



.swiper-container.main-swiper {
    display: flex;
    justify-content: center;
    width: 826px;
    height: 1008px;
    padding-top: 60px;
    overflow: hidden;
    margin: 0 auto;
}
.swiper-slide {
    position: relative;
    display: flex;
    width: 680px;
    height: 1010px;
}
.swiper-slide img {
    width: auto;
    height: 100%;
    object-fit: cover;
}
.swiper-container.section-slide-show-swiper {
    display: flex;
    width: 1372px;
    overflow: hidden;
}
.swiper-container.section-slide-show-swiper .swiper-pagination {
    display: flex;
    justify-content: center;
    align-items: center;
    bottom: 96px !important;
    left: 50%;
    transform: translateX(-50%);
    width: 134px;
    height: 44px;
    border-radius: 22.194px;
    background: rgba(255, 255, 255, 0.08);
}
.swiper-container.section-slide-show-swiper .swiper-pagination-bullet-active {
    background: #FC420F !important;
}
.swiper-container.section-slide-show-swiper .swiper-pagination-bullet {
    background: #D9D9D9;
    width: 8px;
    height: 8px;
}

@media screen and (min-width: 1921px) {
    .swiper-container.main-swiper {
        width: 43.021vw;
        height: 52.5vw;
        padding-top: 3.125vw;
    }
    .swiper-slide {
        width: 35.417vw;
        height: 52.604vw;
    }
    .swiper-container.section-slide-show-swiper {
        width: 71.458vw;
    }
    .swiper-container.section-slide-show-swiper .swiper-pagination {
        bottom: 6vw !important;
        width: 6.979vw;
        height: 2.292vw;
        border-radius: 1.146vw;
    }
    .swiper-container.section-slide-show-swiper .swiper-pagination-bullet {
        width: 0.417vw;
        height: 0.417vw;
    }
}

@media screen and (max-width: 1919px) {
    .swiper-container.main-swiper {
        width: 43.021vw;
        height: 52.5vw;
        padding-top: 3.125vw;
    }
    .swiper-slide {
        width: 35.417vw;
        height: 52.604vw;
    }
    .swiper-container.section-slide-show-swiper {
        width: 71.458vw;
    }
    .swiper-container.section-slide-show-swiper .swiper-pagination {
        bottom: 6vw !important;
        width: 6.979vw;
        height: 2.292vw;
        border-radius: 1.146vw;
    }
    .swiper-container.section-slide-show-swiper .swiper-pagination-bullet {
        width: 0.417vw;
        height: 0.417vw;
    }
}

@media screen and (max-width: 430px) {
    .swiper-container.main-swiper {
        width: 100%;
        height: auto;
        padding-top: 6.977vw;
    }
    .swiper-slide {
        display: flex !important;
        width: 100% !important;
        height: 107.7vw !important;
        justify-content: center;
    }
    .swiper-slide img {
        width: auto !important;
        height: 116.279vw;
    }
    .swiper-container.section-slide-show-swiper .swiper-slide {
        height: auto !important;
    }
    .swiper-container.section-slide-show-swiper {
        width: 90.698vw;
    }
    .swiper-container.section-slide-show-swiper .swiper-slide img {
        width: 100% !important;
        height: 51.163vw;
    }
    .swiper-container.section-slide-show-swiper .swiper-pagination {
        bottom: 12vw !important;
        width: 16.279vw;
        height: 5.581vw;
        border-radius: 6.146vw;
        z-index: 1;
    }
    .swiper-container.section-slide-show-swiper .swiper-pagination-bullet {
        width: 0.93vw;
        height: 0.93vw;
    }
}

</style>
</head>
    <main id="main" class="site-main">
    <section class="section-hero">
        <div class="section-hero-image-1">
            <img class="d" src="/wp-content/themes/custom/resources/assets/images/MasteryX/hero/hero-background-1.png" alt="<?php bloginfo( 'name' ); ?> Logo">
            <img class="m" src="/wp-content/themes/custom/resources/assets/images/MasteryX/hero/hero-background-1-m.png" alt="<?php bloginfo( 'name' ); ?> Logo">
        </div>
        <div class="section-hero-image-2">
            <img src="/wp-content/themes/custom/resources/assets/images/MasteryX/hero/hero-background-2.png" alt="<?php bloginfo( 'name' ); ?> Logo">
        </div>
        <div class="section-hero-image-3">
            <img src="/wp-content/themes/custom/resources/assets/images/MasteryX/hero/hero-background-3.png" alt="<?php bloginfo( 'name' ); ?> Logo">
        </div>
        <div class="section-hero-image-5">
            <img src="/wp-content/themes/custom/resources/assets/images/MasteryX/hero/hero-background-5.png" alt="<?php bloginfo( 'name' ); ?> Logo">
        </div>
        <div class="section-hero-wrapper">
            <div class="section-hero-top-wrapper">
                <div class="section-hero-box">
                    <div class="section-hero-logo">
                        <img src="/wp-content/themes/custom/resources/assets/images/MasteryX/hero/logo.png" alt="<?php bloginfo( 'name' ); ?> Logo">
                    </div>
                    <div class="section-hero-header-box">
                        <h1 class="section-hero-header">FLY HIGH<br>WITH ANGA</h1>
                    </div>
                    <div class="section-hero-paragraph-box">
                        <p class="section-hero-paragraph">Strategy That Leaves the Ground</p>
                    </div>
                    <div class="section-hero-form-wrapper">
                        <div class="section-hero-form-header-box">
                            <p class="section-hero-form-header">By invitation Only.<br class="m"> Register To Join Our Exclusive ANGA Event<br class="m"> And Gain Valuable Insights.</p>
                        </div>
                        <div class="form-container">
                            <h2>ลงทะเบียนเข้าร่วมงาน</h2>
                            <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/embed/v2.js"></script>
                            <script>
                                hbspt.forms.create({
                                    portalId: "47478898",
                                    formId: "1dfcbf8d-e1aa-4234-a735-d95f0c9f8249",
                                    region: "na1"
                                });
                            </script>
                            
                        </div>
                        <!-- <div class="form-container">
                            <h2>ลงทะเบียนเข้าร่วมงาน</h2>
                            <form id="registerForm" class="form-wrapper">
                                <div class="form-group">
                                    <label for="name">ชื่อ-นามสกุล*</label>
                                    <input type="text" id="name" placeholder="กรอกชื่อ-นามสกุล" required>
                                </div>
                                <div class="form-group">
                                    <label for="phone">เบอร์โทร*</label>
                                    <input type="tel" id="phone" placeholder="กรอกเบอร์โทร" required>
                                </div>
                                <div class="form-group">
                                    <label for="position">ตำแหน่ง</label>
                                    <input type="text" id="position" placeholder="กรอกตำแหน่ง">
                                </div>
                                <div class="form-group">
                                    <label for="company">ชื่อบริษัท</label>
                                    <input type="text" id="company" placeholder="กรอกชื่อบริษัท">
                                </div>
                                <button type="submit" class="btn">ลงทะเบียน</button>
                            </form>
                            
                        </div> -->
                    </div>
                </div>

                <div class="swiper-container main-swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="/wp-content/themes/custom/resources/assets/images/MasteryX/hero/image-hero-slide-1.png" alt="<?php bloginfo( 'name' ); ?> Logo">
                            <div class="section-top-image-silde-paragraph-box active">
                                <p class="section-top-image-silde-paragraph">Digital<br>Strategist</p>
                            </div>
                            <div class="section-hero-image-4">
                                <img src="/wp-content/themes/custom/resources/assets/images/MasteryX/hero/hero-background-4.png" alt="<?php bloginfo( 'name' ); ?> Logo">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <img src="/wp-content/themes/custom/resources/assets/images/MasteryX/hero/image-hero-slide-2.png" alt="<?php bloginfo( 'name' ); ?> Logo">
                            <div class="section-top-image-silde-paragraph-box">
                                <p class="section-top-image-silde-paragraph">Social Media</p>
                            </div>
                            <div class="section-hero-image-4">
                                <img src="/wp-content/themes/custom/resources/assets/images/MasteryX/hero/hero-background-4.png" alt="<?php bloginfo( 'name' ); ?> Logo">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <img src="/wp-content/themes/custom/resources/assets/images/MasteryX/hero/image-hero-slide-3.png" alt="<?php bloginfo( 'name' ); ?> Logo">
                            <div class="section-top-image-silde-paragraph-box">
                                <p class="section-top-image-silde-paragraph">Performance<br>Marketing</p>
                            </div>
                            <div class="section-hero-image-4">
                                <img src="/wp-content/themes/custom/resources/assets/images/MasteryX/hero/hero-background-4.png" alt="<?php bloginfo( 'name' ); ?> Logo">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <img src="/wp-content/themes/custom/resources/assets/images/MasteryX/hero/image-hero-slide-4.png" alt="<?php bloginfo( 'name' ); ?> Logo">
                            <div class="section-top-image-silde-paragraph-box">
                                <p class="section-top-image-silde-paragraph">SEO</p>
                            </div>
                            <div class="section-hero-image-4">
                                <img src="/wp-content/themes/custom/resources/assets/images/MasteryX/hero/hero-background-4.png" alt="<?php bloginfo( 'name' ); ?> Logo">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <img src="/wp-content/themes/custom/resources/assets/images/MasteryX/hero/image-hero-slide-5.png" alt="<?php bloginfo( 'name' ); ?> Logo">
                            <div class="section-top-image-silde-paragraph-box">
                                <p class="section-top-image-silde-paragraph">MarTech & AI</p>
                            </div>
                            <div class="section-hero-image-4">
                                <img src="/wp-content/themes/custom/resources/assets/images/MasteryX/hero/hero-background-4.png" alt="<?php bloginfo( 'name' ); ?> Logo">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <img src="/wp-content/themes/custom/resources/assets/images/MasteryX/hero/image-hero-slide-6.png" alt="<?php bloginfo( 'name' ); ?> Logo">
                            <div class="section-top-image-silde-paragraph-box">
                                <p class="section-top-image-silde-paragraph">Branding</p>
                            </div>
                            <div class="section-hero-image-4">
                                <img src="/wp-content/themes/custom/resources/assets/images/MasteryX/hero/hero-background-4.png" alt="<?php bloginfo( 'name' ); ?> Logo">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section-hero-bottom-container">
                <div class="section-hero-bottom-wrapper">
                    <div class="section-hero-bottom-header-box">
                        <h2 class="section-hero-bottom-header">DATE &<br><span>LOCATION</span></h2>
                    </div>
                    <div class="section-hero-bottom-detail-box">
                        <div class="section-hero-bottom-detail-date-box">
                            <div class="section-hero-bottom-detail-date-header-box">
                                <p class="section-hero-bottom-detail-date-header">Date</p>
                            </div>
                            <div class="section-hero-bottom-detail-date-paragraph-box">
                                <p class="section-hero-bottom-detail-date-paragraph">March 28th, 2025</p>
                            </div>
                        </div>
                        <div class="section-hero-bottom-detail-time-box">
                            <div class="section-hero-bottom-detail-time-header-box">
                                <p class="section-hero-bottom-detail-time-header">Time</p>
                            </div>
                            <div class="section-hero-bottom-detail-time-paragraph-box">
                                <p class="section-hero-bottom-detail-time-paragraph">09:00 AM - 04:00 PM</p>
                            </div>
                        </div>
                        <div class="section-hero-bottom-detail-location-box">
                            <div class="section-hero-bottom-detail-location-header-box">
                                <p class="section-hero-bottom-detail-location-header">Location</p>
                            </div>
                            <div class="section-hero-bottom-detail-location-bottom-box">
                                <div class="section-hero-bottom-detail-location-image">
                                    <img src="/wp-content/themes/custom/resources/assets/images/MasteryX/hero/KIMPTON_LOGO_OPTION_2_BLACK.png" alt="<?php bloginfo( 'name' ); ?> Logo">
                                </div>
                                <div class="section-hero-bottom-detail-location-paragraph-bottom-box">
                                    <a href="https://maps.app.goo.gl/SoVCycP6Qf48VgM79" class="section-hero-bottom-detail-location-paragraph-1-box" target="_blank">
                                        <p class="section-hero-bottom-detail-location-paragraph-1">KIMPTON MAA-LAI BANGKOK</p>
                                        <div class="section-hero-bottom-detail-location-paragraph-1-image">
                                            <img src="/wp-content/themes/custom/resources/assets/images/MasteryX/hero/arrow_outward.png" alt="<?php bloginfo( 'name' ); ?> Logo">
                                        </div>
                                    </a>
                                    <div class="section-hero-bottom-detail-location-paragraph-2-box">
                                        <p class="section-hero-bottom-detail-location-paragraph-2">78 SOI TONSON LUMPINI PATHUMWAN BANGKOK</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-speaker">
        <div class="section-speaker-wrapper">
            <div class="section-speaker-background-image-1">
                <img class="d" src="/wp-content/themes/custom/resources/assets/images/MasteryX/speaker/speaker-background-1.png" alt="<?php bloginfo( 'name' ); ?> Logo">
                <img class="m" src="/wp-content/themes/custom/resources/assets/images/MasteryX/speaker/speaker-background-1-m.png" alt="<?php bloginfo( 'name' ); ?> Logo">
            </div>
            <div class="section-speaker-background-image-2">
                <img src="/wp-content/themes/custom/resources/assets/images/MasteryX/speaker/speaker-background-2.png" alt="<?php bloginfo( 'name' ); ?> Logo">
            </div>
            <div class="section-speaker-background-image-3">
                <img src="/wp-content/themes/custom/resources/assets/images/MasteryX/speaker/speaker-background-3.png" alt="<?php bloginfo( 'name' ); ?> Logo">
            </div>
            <div class="section-speaker-background-image-4">
                <img src="/wp-content/themes/custom/resources/assets/images/MasteryX/speaker/speaker-background-4.png" alt="<?php bloginfo( 'name' ); ?> Logo">
            </div>
            <div class="section-speaker-background-image-5">
                <img src="/wp-content/themes/custom/resources/assets/images/MasteryX/speaker/speaker-background-5.png" alt="<?php bloginfo( 'name' ); ?> Logo">
            </div>
            <div class="section-speaker-header-box">
                <h2 class="section-speaker-header">SPEAKER <br class="m"><span>ภายในงาน</span></h2>
            </div>
            <div class="section-speaker-detail-container">
                <div class="section-speaker-detail-wrapper">
                    <a href="https://angamastery.co.th/rachavit-whangpatanathon/" class="section-speaker-detail-box" target="_blank">
                        <div class="section-speaker-detail-image">
                            <img src="/wp-content/themes/custom/resources/assets/images/MasteryX/speaker/speaker-1.png" alt="<?php bloginfo( 'name' ); ?> Logo">
                        </div>
                        <div class="section-speaker-detail-name-box">
                            <h3 class="section-speaker-detail-name">Rachavit<br>Whangpatanathon</h3>
                        </div>
                        <div class="section-speaker-detail-position-box">
                            <p class="section-speaker-detail-position">Managing Director of ANGA</p>
                        </div>
                    </a>
                    <a href="https://angamastery.co.th/kantika-waewsawang/" class="section-speaker-detail-box" target="_blank">
                        <div class="section-speaker-detail-image">
                            <img src="/wp-content/themes/custom/resources/assets/images/MasteryX/speaker/speaker-2.png" alt="<?php bloginfo( 'name' ); ?> Logo">
                        </div>
                        <div class="section-speaker-detail-name-box">
                            <h3 class="section-speaker-detail-name">Kantika<br>Waewsawang</h3>
                        </div>
                        <div class="section-speaker-detail-position-box">
                            <p class="section-speaker-detail-position">Team Lead, Paid Media</p>
                        </div>
                    </a>
                    <a href="https://angamastery.co.th/tanin-chulasub/" class="section-speaker-detail-box" target="_blank">
                        <div class="section-speaker-detail-image">
                            <img src="/wp-content/themes/custom/resources/assets/images/MasteryX/speaker/speaker-3.png" alt="<?php bloginfo( 'name' ); ?> Logo">
                        </div>
                        <div class="section-speaker-detail-name-box">
                            <h3 class="section-speaker-detail-name">Tanin<br>Chulasub</h3>
                        </div>
                        <div class="section-speaker-detail-position-box">
                            <p class="section-speaker-detail-position">Head of Performance Marketing</p>
                        </div>
                    </a>
                    <a href="https://angamastery.co.th/rynlita-yosvimonpat/" class="section-speaker-detail-box" target="_blank">
                        <div class="section-speaker-detail-image">
                            <img src="/wp-content/themes/custom/resources/assets/images/MasteryX/speaker/speaker-4.png" alt="<?php bloginfo( 'name' ); ?> Logo">
                        </div>
                        <div class="section-speaker-detail-name-box">
                            <h3 class="section-speaker-detail-name">Rynlita<br>Yosvimonpat</h3>
                        </div>
                        <div class="section-speaker-detail-position-box">
                            <p class="section-speaker-detail-position">Head of SEO</p>
                        </div>
                    </a>
                    <a href="https://angamastery.co.th/pailin-pama/" class="section-speaker-detail-box" target="_blank">
                        <div class="section-speaker-detail-image">
                            <img src="/wp-content/themes/custom/resources/assets/images/MasteryX/speaker/speaker-5.png" alt="<?php bloginfo( 'name' ); ?> Logo">
                        </div>
                        <div class="section-speaker-detail-name-box">
                            <h3 class="section-speaker-detail-name">Pailin<br>Pama</h3>
                        </div>
                        <div class="section-speaker-detail-position-box">
                            <p class="section-speaker-detail-position">Special Guest</p>
                        </div>
                    </a>
                    <div class="section-speaker-detail-box">
                        <div class="section-speaker-detail-image">
                            <img src="/wp-content/themes/custom/resources/assets/images/MasteryX/speaker/speaker-6.png" alt="<?php bloginfo( 'name' ); ?> Logo">
                        </div>
                        <div class="section-speaker-detail-name-box">
                            <h3 class="section-speaker-detail-name">Raziqaa<br>Paneewong</h3>
                        </div>
                        <div class="section-speaker-detail-position-box">
                            <p class="section-speaker-detail-position">Special Guest</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section>

    <section class="section-agenda">
        <div class="section-agenda-wrapper">
            <div class="section-agenda-background-image-1">
                <img src="/wp-content/themes/custom/resources/assets/images/MasteryX/agenda/agenda-background-1.png" alt="<?php bloginfo( 'name' ); ?> Logo">
            </div>
            <div class="section-agenda-background-image-2">
                <img class="d" src="/wp-content/themes/custom/resources/assets/images/MasteryX/agenda/agenda-background-2.png" alt="<?php bloginfo( 'name' ); ?> Logo">
                <img class="m" src="/wp-content/themes/custom/resources/assets/images/MasteryX/agenda/agenda-background-2-m.png" alt="<?php bloginfo( 'name' ); ?> Logo">
            </div>
            <div class="section-agenda-background-image-3">
                <img class="m" src="/wp-content/themes/custom/resources/assets/images/MasteryX/agenda/agenda-background-3-m.png" alt="<?php bloginfo( 'name' ); ?> Logo">
            </div>

            <div class="section-agenda-header-box">
                <h2 class="section-agenda-header">AGENDA</h2>
            </div>
            <div class="section-agenda-detail-wrapper">
                <div class="section-agenda-detail-box">
                    <div class="section-agenda-detail-1-box">
                        <div class="section-agenda-detail-1-header-box">
                            <p class="section-agenda-detail-1-header">Time</p>
                        </div>
                        <div class="section-agenda-detail-1-paragraph-1-box">
                            <p class="section-agenda-detail-1-paragraph-1">09:30 - 10:00</p>
                        </div>
                        <div class="section-agenda-detail-1-paragraph-2-wrapper">
                            <div class="section-agenda-detail-1-paragraph-2-image">
                                <img src="/wp-content/themes/custom/resources/assets/images/MasteryX/agenda/icon-clock.png" alt="<?php bloginfo( 'name' ); ?> Logo">
                            </div>
                            <div class="section-agenda-detail-1-paragraph-2">
                                <p class="section-agenda-detail-1-paragraph-2">30 Mins.</p>
                            </div>
                        </div>
                    </div>
                    <div class="section-agenda-detail-2-box">
                        <div class="section-agenda-detail-2-header-box">
                            <p class="section-agenda-detail-2-header">ANGA's Agency Insights in <br class="m">2024</p>
                        </div>
                        <div class="section-agenda-detail-2-paragraph-box">
                            <p class="section-agenda-detail-2-paragraph">Key takeaways from ANGA’s 2024 experiences— marketing insights, and lessons learned to shape winning strategies for 2025.</p>
                        </div>
                    </div>
                    <div class="section-agenda-detail-3-box">
                        <img src="/wp-content/themes/custom/resources/assets/images/MasteryX/agenda/agenda-image-1.png" alt="<?php bloginfo( 'name' ); ?> Logo">
                    </div>
                    <div class="section-agenda-detail-4-box">
                        <div class="section-agenda-detail-4-header-box">
                            <p class="section-agenda-detail-4-header">Rachavit<br>Whangpatanathon</p>
                        </div>
                        <div class="section-agenda-detail-4-paragraph-box">
                            <p class="section-agenda-detail-4-paragraph">Managing Director of ANGA</p>
                        </div>
                    </div>

                    <div class="section-agenda-detail-background"></div>
                </div>

                <div class="section-agenda-detail-box">
                    <div class="section-agenda-detail-1-box">
                        <div class="section-agenda-detail-1-header-box">
                            <p class="section-agenda-detail-1-header">Time</p>
                        </div>
                        <div class="section-agenda-detail-1-paragraph-1-box">
                            <p class="section-agenda-detail-1-paragraph-1">10:00 - 10:30</p>
                        </div>
                        <div class="section-agenda-detail-1-paragraph-2-wrapper">
                            <div class="section-agenda-detail-1-paragraph-2-image">
                                <img src="/wp-content/themes/custom/resources/assets/images/MasteryX/agenda/icon-clock.png" alt="<?php bloginfo( 'name' ); ?> Logo">
                            </div>
                            <div class="section-agenda-detail-1-paragraph-2">
                                <p class="section-agenda-detail-1-paragraph-2">30 Mins.</p>
                            </div>
                        </div>
                    </div>
                    <div class="section-agenda-detail-2-box">
                        <div class="section-agenda-detail-2-header-box">
                            <p class="section-agenda-detail-2-header">Social Media Marketing in 2025</p>
                        </div>
                        <div class="section-agenda-detail-2-paragraph-box">
                            <p class="section-agenda-detail-2-paragraph">Stay ahead with 2025’s social media trends, creatives guidelines that sells, and ANGA’s proven strategies to boost engagement, visibility, and conversions.</p>
                        </div>
                    </div>
                    <div class="section-agenda-detail-3-box">
                        <img src="/wp-content/themes/custom/resources/assets/images/MasteryX/agenda/agenda-image-2.png" alt="<?php bloginfo( 'name' ); ?> Logo">
                    </div>
                    <div class="section-agenda-detail-4-box">
                        <div class="section-agenda-detail-4-header-box">
                            <p class="section-agenda-detail-4-header">Kantika<br>Waewsawang</p>
                        </div>
                        <div class="section-agenda-detail-4-paragraph-box">
                            <p class="section-agenda-detail-4-paragraph">Team Lead, Paid Media</p>
                        </div>
                    </div>

                    <!-- <div class="section-agenda-detail-background"></div> -->

                </div>

                <div class="section-agenda-detail-box">
                    <div class="section-agenda-detail-1-box">
                        <div class="section-agenda-detail-1-header-box">
                            <p class="section-agenda-detail-1-header">Time</p>
                        </div>
                        <div class="section-agenda-detail-1-paragraph-1-box">
                            <p class="section-agenda-detail-1-paragraph-1">10:45 - 11:15</p>
                        </div>
                        <div class="section-agenda-detail-1-paragraph-2-wrapper">
                            <div class="section-agenda-detail-1-paragraph-2-image">
                                <img src="/wp-content/themes/custom/resources/assets/images/MasteryX/agenda/icon-clock.png" alt="<?php bloginfo( 'name' ); ?> Logo">
                            </div>
                            <div class="section-agenda-detail-1-paragraph-2">
                                <p class="section-agenda-detail-1-paragraph-2">30 Mins.</p>
                            </div>
                        </div>
                    </div>
                    <div class="section-agenda-detail-2-box">
                        <div class="section-agenda-detail-2-header-box">
                            <p class="section-agenda-detail-2-header">Google Ads in 2025</p>
                        </div>
                        <div class="section-agenda-detail-2-paragraph-box">
                            <p class="section-agenda-detail-2-paragraph">Discover ANGA’s key success factors in Google Ads, including Google Ads Updates and Optimization Best Practices.</p>
                        </div>
                    </div>
                    <div class="section-agenda-detail-3-box">
                        <img src="/wp-content/themes/custom/resources/assets/images/MasteryX/agenda/agenda-image-3.png" alt="<?php bloginfo( 'name' ); ?> Logo">
                    </div>
                    <div class="section-agenda-detail-4-box">
                        <div class="section-agenda-detail-4-header-box">
                            <p class="section-agenda-detail-4-header">Tanin<br>Chulasub</p>
                        </div>
                        <div class="section-agenda-detail-4-paragraph-box">
                            <p class="section-agenda-detail-4-paragraph">Head of Performance<br>Marketing</p>
                        </div>
                    </div>

                    <div class="section-agenda-detail-background"></div>

                </div>

                <div class="section-agenda-detail-box">
                    <div class="section-agenda-detail-1-box">
                        <div class="section-agenda-detail-1-header-box">
                            <p class="section-agenda-detail-1-header">Time</p>
                        </div>
                        <div class="section-agenda-detail-1-paragraph-1-box">
                            <p class="section-agenda-detail-1-paragraph-1">11:15 - 12:00</p>
                        </div>
                        <div class="section-agenda-detail-1-paragraph-2-wrapper">
                            <div class="section-agenda-detail-1-paragraph-2-image">
                                <img src="/wp-content/themes/custom/resources/assets/images/MasteryX/agenda/icon-clock.png" alt="<?php bloginfo( 'name' ); ?> Logo">
                            </div>
                            <div class="section-agenda-detail-1-paragraph-2">
                                <p class="section-agenda-detail-1-paragraph-2">45 Mins.</p>
                            </div>
                        </div>
                    </div>
                    <div class="section-agenda-detail-2-box">
                        <div class="section-agenda-detail-2-header-box">
                            <p class="section-agenda-detail-2-header">SEO in 2025</p>
                        </div>
                        <div class="section-agenda-detail-2-paragraph-box">
                            <p class="section-agenda-detail-2-paragraph">Decode the One Year of SEO Audit Secrets with ANGA from 10,000 Keywords and 200+ Websites</p>
                        </div>
                    </div>
                    <div class="section-agenda-detail-3-box">
                        <img src="/wp-content/themes/custom/resources/assets/images/MasteryX/agenda/agenda-image-4.png" alt="<?php bloginfo( 'name' ); ?> Logo">
                    </div>
                    <div class="section-agenda-detail-4-box">
                        <div class="section-agenda-detail-4-header-box">
                            <p class="section-agenda-detail-4-header">Rynlita<br>Yosvimonpat</p>
                        </div>
                        <div class="section-agenda-detail-4-paragraph-box">
                            <p class="section-agenda-detail-4-paragraph">Head of SEO</p>
                        </div>
                    </div>

                    <!-- <div class="section-agenda-detail-background"></div> -->

                </div>

                <div class="section-agenda-detail-box">
                    <div class="section-agenda-detail-1-box">
                        <div class="section-agenda-detail-1-header-box">
                            <p class="section-agenda-detail-1-header">Time</p>
                        </div>
                        <div class="section-agenda-detail-1-paragraph-1-box">
                            <p class="section-agenda-detail-1-paragraph-1">13:00 - 13:30</p>
                        </div>
                        <div class="section-agenda-detail-1-paragraph-2-wrapper">
                            <div class="section-agenda-detail-1-paragraph-2-image">
                                <img src="/wp-content/themes/custom/resources/assets/images/MasteryX/agenda/icon-clock.png" alt="<?php bloginfo( 'name' ); ?> Logo">
                            </div>
                            <div class="section-agenda-detail-1-paragraph-2">
                                <p class="section-agenda-detail-1-paragraph-2">30 Mins.</p>
                            </div>
                        </div>
                    </div>
                    <div class="section-agenda-detail-2-box">
                        <div class="section-agenda-detail-2-header-box">
                            <p class="section-agenda-detail-2-header">MarTech Innovations & AI</p>
                        </div>
                        <div class="section-agenda-detail-2-paragraph-box">
                            <p class="section-agenda-detail-2-paragraph">Discover how MarTech and AI are transforming marketing, from automation to data-driven personalization, enhancing efficiency and impact.</p>
                        </div>
                    </div>
                    <div class="section-agenda-detail-3-box">
                        <img src="/wp-content/themes/custom/resources/assets/images/MasteryX/agenda/agenda-image-5.png" alt="<?php bloginfo( 'name' ); ?> Logo">
                    </div>
                    <div class="section-agenda-detail-4-box">
                        <div class="section-agenda-detail-4-header-box">
                            <p class="section-agenda-detail-4-header">Pailin<br>Pama</p>
                        </div>
                        <div class="section-agenda-detail-4-paragraph-box">
                            <p class="section-agenda-detail-4-paragraph">Special Guest</p>
                        </div>
                    </div>

                    <div class="section-agenda-detail-background"></div>

                </div>

                <div class="section-agenda-detail-box">
                    <div class="section-agenda-detail-1-box">
                        <div class="section-agenda-detail-1-header-box">
                            <p class="section-agenda-detail-1-header">Time</p>
                        </div>
                        <div class="section-agenda-detail-1-paragraph-1-box">
                            <p class="section-agenda-detail-1-paragraph-1">13:30 - 14:00</p>
                        </div>
                        <div class="section-agenda-detail-1-paragraph-2-wrapper">
                            <div class="section-agenda-detail-1-paragraph-2-image">
                                <img src="/wp-content/themes/custom/resources/assets/images/MasteryX/agenda/icon-clock.png" alt="<?php bloginfo( 'name' ); ?> Logo">
                            </div>
                            <div class="section-agenda-detail-1-paragraph-2">
                                <p class="section-agenda-detail-1-paragraph-2">30 Mins.</p>
                            </div>
                        </div>
                    </div>
                    <div class="section-agenda-detail-2-box">
                        <div class="section-agenda-detail-2-header-box">
                            <p class="section-agenda-detail-2-header">Branding for Corporates</p>
                        </div>
                        <div class="section-agenda-detail-2-paragraph-box">
                            <p class="section-agenda-detail-2-paragraph">Master corporate branding with powerful storytelling, strategic positioning, and digital touchpoints to build trust and long-term customer loyalty.</p>
                        </div>
                    </div>
                    <div class="section-agenda-detail-3-box">
                        <img src="/wp-content/themes/custom/resources/assets/images/MasteryX/agenda/agenda-image-6.png" alt="<?php bloginfo( 'name' ); ?> Logo">
                    </div>
                    <div class="section-agenda-detail-4-box">
                        <div class="section-agenda-detail-4-header-box">
                            <p class="section-agenda-detail-4-header">RaziQaa<br>Paneewong</p>
                        </div>
                        <div class="section-agenda-detail-4-paragraph-box">
                            <p class="section-agenda-detail-4-paragraph">Special Guest</p>
                        </div>
                    </div>

                    <!-- <div class="section-agenda-detail-background"></div> -->

                </div>

                <div class="section-agenda-detail-box">
                    <div class="section-agenda-detail-1-box">
                        <div class="section-agenda-detail-1-header-box">
                            <p class="section-agenda-detail-1-header">Time</p>
                        </div>
                        <div class="section-agenda-detail-1-paragraph-1-box">
                            <p class="section-agenda-detail-1-paragraph-1">14:00 - 15:00</p>
                        </div>
                        <div class="section-agenda-detail-1-paragraph-2-wrapper">
                            <div class="section-agenda-detail-1-paragraph-2-image">
                                <img src="/wp-content/themes/custom/resources/assets/images/MasteryX/agenda/icon-clock.png" alt="<?php bloginfo( 'name' ); ?> Logo">
                            </div>
                            <div class="section-agenda-detail-1-paragraph-2">
                                <p class="section-agenda-detail-1-paragraph-2">60 Mins.</p>
                            </div>
                        </div>
                    </div>
                    <div class="section-agenda-detail-2-box">
                        <div class="section-agenda-detail-2-header-box">
                            <p class="section-agenda-detail-2-header">Optional - Workshop</p>
                        </div>
                        <div class="section-agenda-detail-2-paragraph-box">
                            <p class="section-agenda-detail-2-paragraph">A hands-on session of Secret SEO & Paid Media Chrome Extensions and tools from ANGA Mastery.</p>
                        </div>
                    </div>


                    <div class="section-agenda-detail-background"></div>

                </div>

                
            </div>
        </div>
    </section>

    <section class="section-slide-show">
        <div class="section-slide-show-wrapper">
            <div class="section-slide-show-background">
                <img src="/wp-content/themes/custom/resources/assets/images/MasteryX/slide-show/slide-show-background.png" alt="<?php bloginfo( 'name' ); ?> Logo">
            </div>

            <!-- Swiper Container -->
            <div class="swiper-container section-slide-show-swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="section-slide-show-image">
                            <img src="/wp-content/themes/custom/resources/assets/images/MasteryX/slide-show/slide-show-1.png" alt="<?php bloginfo( 'name' ); ?> Logo">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="section-slide-show-image">
                            <img src="/wp-content/themes/custom/resources/assets/images/MasteryX/slide-show/slide-show-2.png" alt="<?php bloginfo( 'name' ); ?> Logo">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="section-slide-show-image">
                            <img src="/wp-content/themes/custom/resources/assets/images/MasteryX/slide-show/slide-show-3.png" alt="<?php bloginfo( 'name' ); ?> Logo">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="section-slide-show-image">
                            <img src="/wp-content/themes/custom/resources/assets/images/MasteryX/slide-show/slide-show-4.png" alt="<?php bloginfo( 'name' ); ?> Logo">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="section-slide-show-image">
                            <img src="/wp-content/themes/custom/resources/assets/images/MasteryX/slide-show/slide-show-5.png" alt="<?php bloginfo( 'name' ); ?> Logo">
                        </div>
                    </div>
                </div>

                <!-- Pagination Dots -->
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>


    <section class="section-footer">
        <div class="section-footer-wrapper">
            <div class="section-footer-background">
                <img src="/wp-content/themes/custom/resources/assets/images/MasteryX/footer/footer-background.png" alt="<?php bloginfo( 'name' ); ?> Logo">
            </div>

            <div class="section-footer-header-wrapper">
                <div class="section-footer-header-box">
                    <h2 class="section-footer-header">FLY HIGH WITH<br class="d"> ANGA</h2>
                </div>
                <div class="section-footer-header-detail-box">
                    <p class="section-footer-header-detail">Strategy That Leaves the Ground</p>
                </div>
            </div>
            <div class="section-footer-detail-wrapper">
                <div class="section-footer-detail-header-box">
                    <p class="section-footer-detail-header">Register Now</p>
                </div>
                <div class="section-footer-detail-paragraph-box">
                    <p class="section-footer-detail-paragraph">By invitation only. Register to join our exclusive ANGA event and gain valuable insights.</p>
                </div>
                <!-- ปุ่มกดเพื่อเปิด Popup -->
                <a href="#" class="section-footer-detail-button" id="openPopup">
                    <p class="section-footer-detail-button-paragraph">ลงทะเบียน</p>
                    <div class="section-footer-detail-button-image">
                        <img src="/wp-content/themes/custom/resources/assets/images/MasteryX/hero/arrow_outward.png" alt="<?php bloginfo( 'name' ); ?> Logo">
                    </div>
                </a>

                <!-- Popup เต็มหน้าจอ (เริ่มต้นซ่อน) -->
                <div id="popup" class="popup-overlay">
                    <div class="popup-content">
                        <span class="close-popup"></span> <!-- ปุ่มปิด -->
                        <div class="form-container">
                            <h2>ลงทะเบียนเข้าร่วมงาน</h2>
                            <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/embed/v2.js"></script>
                            <script>
                                hbspt.forms.create({
                                    portalId: "47478898",
                                    formId: "1dfcbf8d-e1aa-4234-a735-d95f0c9f8249",
                                    region: "na1"
                                });
                            </script>
                            
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </section>

</main>

<script>
  document.addEventListener("DOMContentLoaded", function () {
    // 🎯 Swiper ตัวแรก (Hero Section)
    var mainSwiper = new Swiper(".main-swiper", {
        loop: true, // ให้วนซ้ำ
        autoplay: {
            delay: 3000, // เปลี่ยนภาพทุก 3 วินาที
            disableOnInteraction: false, // ให้ autoplay ทำงานต่อแม้มีการคลิกหรือแตะ
        },
        speed: 800, // ความเร็วในการเลื่อน
        effect: "slide", // ใช้ effect แบบ slide
        allowTouchMove: true, // ปิดการลาก
        // **ลบ pagination ออก เพื่อไม่ให้มีจุด Dot**
        pagination: false, // 👈 ปิด Pagination

        // Event เมื่อ Slide เปลี่ยนเสร็จ
        on: {
            slideChangeTransitionStart: function () {
                // ซ่อนเฉพาะข้อความใน Swiper ตัวนี้
                mainSwiper.el.querySelectorAll(".section-top-image-silde-paragraph-box").forEach(el => {
                    el.classList.remove("active");
                });
            },
            slideChangeTransitionEnd: function () {
                // แสดงข้อความของ Slide ที่กำลังแสดงอยู่
                let activeSlide = mainSwiper.el.querySelector(".swiper-slide-active .section-top-image-silde-paragraph-box");
                if (activeSlide) {
                    activeSlide.classList.add("active");
                }
            }
        }
    });
});

document.addEventListener("DOMContentLoaded", function () {
    // 🎯 Swiper ตัวที่สอง (Slide Show) - มี Pagination
    var slideShowSwiper = new Swiper(".section-slide-show-swiper", {
        loop: true,
        autoplay: {
            delay: 4000, // เลื่อนอัตโนมัติทุก 4 วินาที
            disableOnInteraction: false,
        },
        speed: 1000, // ความเร็วของการเปลี่ยนภาพ
        pagination: {
            el: ".swiper-pagination",
            clickable: true, // สามารถคลิก Dot ได้
        },
        effect: "slide",
        allowTouchMove: true, // ปิดการลาก
    });
});

document.addEventListener("DOMContentLoaded", function () {
    const openPopup = document.getElementById("openPopup");
    const popup = document.getElementById("popup");
    const closePopup = document.querySelector(".close-popup");

    // เปิด Popup เมื่อคลิกปุ่ม "ลงทะเบียน"
    openPopup.addEventListener("click", function (event) {
        event.preventDefault(); // ป้องกันการโหลดหน้าใหม่
        popup.style.display = "flex";
    });

    // ปิด Popup เมื่อคลิกที่ปุ่ม "close-popup" เท่านั้น
    closePopup.addEventListener("click", function () {
        popup.style.display = "none";
    });
});


document.addEventListener('DOMContentLoaded', function () {
    let swiper1 = null;

    function initializeSwiper() {
        const viewportWidth = window.innerWidth;

        if (viewportWidth >= 431) {
            if (!swiper1) {
                swiper1 = new Swiper('#swiper1', {
                    slidesPerView: 6,
                    slidesPerGroup: 6,
                    spaceBetween: 0,
                    navigation: {
                        nextEl: '.swiper1-button-next',
                        prevEl: '.swiper1-button-prev',
                        type: "progressbar",
                    },
                    loop: false,
                    simulateTouch: false, // ปิดการลากด้วยเมาส์
                    allowTouchMove: false, // ปิดการลากด้วยนิ้วบนหน้าจอสัมผัส
                    on: {
                        init: function () {
                            updateNavigationButtons(this);
                        },
                        slideChange: function () {
                            updateNavigationButtons(this);
                        },
                    },
                });
            }
        } else if (swiper1) {
            swiper1.destroy(true, true); // ทำลาย Swiper เมื่อหน้าจอต่ำกว่า 431px
            swiper1 = null;
        }
    }

    function updateNavigationButtons(swiper) {
        const prevButton = document.querySelector('.swiper1-button-prev');
        const nextButton = document.querySelector('.swiper1-button-next');

        if (swiper.isBeginning) {
            prevButton.style.display = 'none';
        } else {
            prevButton.style.display = 'flex';
        }

        if (swiper.isEnd) {
            nextButton.style.display = 'none';
        } else {
            nextButton.style.display = 'flex';
        }
    }

    // เรียกใช้งาน Swiper หรือทำลาย Swiper ตามขนาดหน้าจอ
    initializeSwiper();

    // ตรวจสอบเมื่อหน้าต่างถูกปรับขนาด
    window.addEventListener('resize', initializeSwiper);
});


document.addEventListener('DOMContentLoaded', function () {
    let swiper2 = null;

    function initializeSwiper() {
        const viewportWidth = window.innerWidth;

        if (viewportWidth >= 431) {
            if (!swiper2) {
                swiper2 = new Swiper('#swiper2', {
                    slidesPerView: 10,
                    spaceBetween: 0,
                    autoplay: {
                        delay: 2000,
                        disableOnInteraction: false,
                    },
                    navigation: {
                        nextEl: '.swiper2-button-next',
                        prevEl: '.swiper2-button-prev',
                        type: "progressbar",
                    },
                    loop: false,
                    simulateTouch: false, // ปิดการลากด้วยเมาส์
                    allowTouchMove: false, // ปิดการลากด้วยนิ้วบนหน้าจอสัมผัส
                    on: {
                        init: function () {
                            updateNavigationButtons(this);
                        },
                        slideChange: function () {
                            updateNavigationButtons(this);
                        },
                    },
                });
            }
        } else if (swiper2) {
            swiper2.destroy(true, true); // ทำลาย Swiper เมื่อหน้าจอต่ำกว่า 431px
            swiper2 = null;
        }
    }

    function updateNavigationButtons(swiper) {
        const prevButton = document.querySelector('.swiper2-button-prev');
        const nextButton = document.querySelector('.swiper2-button-next');
    }

    // เรียกใช้งาน Swiper หรือทำลาย Swiper ตามขนาดหน้าจอ
    initializeSwiper();

    // ตรวจสอบเมื่อหน้าต่างถูกปรับขนาด
    window.addEventListener('resize', initializeSwiper);
});


document.addEventListener('DOMContentLoaded', function () {
    let swiper3 = null;

    function initializeSwiper() {
        const viewportWidth = window.innerWidth;

        if (viewportWidth >= 431) {
            if (!swiper3) {
                swiper3 = new Swiper('#swiper3', {
                    slidesPerView: 3,
                    spaceBetween: 0,
                    navigation: {
                        nextEl: '.swiper3-button-next',
                        prevEl: '.swiper3-button-prev',
                        type: "progressbar",
                    },
                    loop: false,
                    simulateTouch: false, // ปิดการลากด้วยเมาส์
                    allowTouchMove: false, // ปิดการลากด้วยนิ้วบนหน้าจอสัมผัส
                    on: {
                        init: function () {
                            updateNavigationButtons(this);
                        },
                        slideChange: function () {
                            updateNavigationButtons(this);
                        },
                    },
                });
            }
        } else if (swiper3) {
            swiper3.destroy(true, true); // ทำลาย Swiper เมื่อหน้าจอต่ำกว่า 431px
            swiper3 = null;
        }
    }

    function updateNavigationButtons(swiper) {
        const prevButton = document.querySelector('.swiper3-button-prev');
        const nextButton = document.querySelector('.swiper3-button-next');
    }

    // เรียกใช้งาน Swiper หรือทำลาย Swiper ตามขนาดหน้าจอ
    initializeSwiper();

    // ตรวจสอบเมื่อหน้าต่างถูกปรับขนาด
    window.addEventListener('resize', initializeSwiper);
});


document.addEventListener('DOMContentLoaded', function () {
    let swiper4 = null;

    function initializeSwiper() {
        const viewportWidth = window.innerWidth;

        if (viewportWidth >= 431) {
            if (!swiper4) {
                swiper4 = new Swiper('#swiper4', {
                    slidesPerView: 6,
                    slidesPerGroup: 6,
                    spaceBetween: 0,
                    navigation: {
                        nextEl: '.swiper4-button-next',
                        prevEl: '.swiper4-button-prev',
                    },
                    loop: false,
                    simulateTouch: false,
                    allowTouchMove: false,
                    on: {
                        init: function () {
                            updateNavigationButtons(this);
                            updateProgressBar(this); // เรียกฟังก์ชัน updateProgressBar เมื่อ Swiper เริ่มต้น
                        },
                        slideChange: function () {
                            updateNavigationButtons(this);
                            updateProgressBar(this); // เรียกฟังก์ชัน updateProgressBar เมื่อสไลด์เปลี่ยน
                        },
                    },
                });
            }
        } else if (swiper4) {
            swiper4.destroy(true, true);
            swiper4 = null;
        }
    }

    // ฟังก์ชันอัปเดต Navigation Buttons
    function updateNavigationButtons(swiper) {
        const prevButton = document.querySelector('.swiper4-button-prev');
        const nextButton = document.querySelector('.swiper4-button-next');

        if (swiper.isBeginning) {
            prevButton.style.display = 'none';
        } else {
            prevButton.style.display = 'flex';
        }

        if (swiper.isEnd) {
            nextButton.style.display = 'none';
        } else {
            nextButton.style.display = 'flex';
        }
    }

    // ฟังก์ชันอัปเดต Progress Bar
    function updateProgressBar(swiper) {
        const progressBar = document.querySelector('.swiper4-progressbar .swiper4-progressbar-fill');
        const progress = (swiper.progress) * 100;
        progressBar.style.width = progress + '%'; // อัปเดตความยาวของ progress bar
    }

    initializeSwiper();

    window.addEventListener('resize', initializeSwiper);
});


document.addEventListener('DOMContentLoaded', function () {
    // สร้าง Thumbnail Swiper
    const swiperThumbnails5 = new Swiper('.swiper-thumbnails-5', {
        slidesPerView: 3, // จำนวน Thumbnail ที่แสดง
        spaceBetween: 10, // ระยะห่างระหว่าง Thumbnail
        navigation: {
            nextEl: '.swiper5-button-next', // ปุ่มถัดไป
            prevEl: '.swiper5-button-prev', // ปุ่มก่อนหน้า
        },
        loop: true, // เปิดใช้งาน Loop
        simulateTouch: false, // ปิดการลากด้วยเมาส์
        allowTouchMove: false, // ปิดการลากด้วยนิ้วบนหน้าจอสัมผัส
    });

    // อัปเดตรูปภาพหลัก (Product Image) เมื่อคลิก Thumbnail
    const productMainImage = document.getElementById('product-main-image');
    document.querySelectorAll('.swiper-thumbnails-5 .swiper-slide img').forEach((thumbnail) => {
        thumbnail.addEventListener('click', function () {
            productMainImage.src = this.src; // เปลี่ยน src ของ Product Image
        });
    });
});


</script>
</body>
</html>