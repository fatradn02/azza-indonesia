<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <script src="{{ asset('js/app.js') }}" defer></script>
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Passion+One&display=swap" rel="stylesheet"> 
        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
            .bg-green{
                background-color: #82954B;
            }
            .banner-image {
                background-image: linear-gradient(rgba(0, 0, 0, 0.226),rgba(0, 0, 0, 0.2)) , url('/img/benner/benner_7.jpg');
                width: 100%;
                background-position: center;
                background-size: cover;
                    
            }
            button{
            background: none;
            border-radius: none #000;
            }
            .benner-button {
            --c: #BABD42;
            color: var(--c);
            font-size: 14px;
            border: 0.1em solid var(--c);
            border-radius: 0.5em;
            width: 14em;
            height: 3em;
            text-transform: uppercase;
            font-weight: normal;
            font-family: sans-serif;
            letter-spacing: 0.1em;
            text-align: center;
            line-height: 3em;
            position: relative;
            overflow: hidden;
            z-index: 1;
            transition: 0.5s;
            margin: 1em;
            list-style-type: none;
            margin: 0;
            padding: 0;
            }

            .benner-button span {
            position: absolute;
            width: 25%;
            height: 100%;
            background-color: var(--c);
            transform: translateY(150%);
            border-radius: 50%;
            left: calc((var(--n) - 1) * 25%);
            transition: 0.5s;
            transition-delay: calc((var(--n) - 1) * 0.1s);
            z-index: -1;
            }

            .benner-buttoni:hover {
                color: black;
            }

            .benner-button:hover span {
                transform: translateY(0) scale(2);
            }

            .benner-button span:nth-child(1) {
                --n: 1;
            }

            .benner-button span:nth-child(2) {
                --n: 2;
            }

            .benner-button span:nth-child(3) {
                --n: 3;
            }

            .benner-button span:nth-child(4) {
                --n: 4;
            }
             /* kontak button */
            .button-kontak-wrapper {
                position: fixed;
                bottom: 4 %;
                right: 2%;
            }

            .button-item-kontak-wrapper {
                background-color: var(--orange);
                border-radius: 8px;
                color: var(--white);
                font-weight: bold;
                font-size: 1rem;
                padding: 10px;
            }
            .wa-icon {
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
            }
            .pulse {
                width: 70px;
                height: 70px;
                background-color: whitesmoke;
                border-radius: 50%;
                position: relative;
                animation: animate 3s linear infinite;
            }
            .pulse i {
                position: relative;
                display: flex;
                justify-content: center;
                align-items: center;
                font-size: 30px;
                color: #fff;
                height: 100%;
                cursor: pointer;
            }
            @keyframes animate {
                0% {
                    box-shadow: 0 0 0 0 rgb(186, 189, 66), 0 0 0 0 rgb(186, 189, 66);
                }

                40% {
                    box-shadow: 0 0 0 50px rgb(255, 109, 74, 0), 0 0 0 0 rgb(186, 189, 66);
                }

                80% {
                    box-shadow: 0 0 0 50px rgb(255, 109, 74, 0),
                        0 0 0 30px rgb(255, 109, 74, 0);
                }

                100% {
                    box-shadow: 0 0 0 0 rgb(255, 109, 74, 0),
                        0 0 0 30px rgb(255, 109, 74, 0);
                }
            }
        </style>
    </head>
    <body class="antialiased">

        {{-- Navbar Desktop--}}
        <nav class="navbar navbar-expand-lg navbar-light d-none d-md-block fixed-top py-4">
            <div class="container">
              <a class="navbar-brand fs-3 text-white" href="#" style="font-family: 'Passion One', cursive;">AZZA INDONESIA SUPPLIER</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav gap-4 d-flex justify-content-end w-100">
                    <li class="nav-item">
                      <a class="nav-link text-white fw-bold fs-5" href="#">ABOUT</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-white fw-bold fs-5" href="#">FEATURE</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-white fw-bold fs-5" href="#">PRODUCT</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-white fw-bold fs-5" href="#">TEAM</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-white fw-bold fs-5" href="#">GALLERY</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-white fw-bold fs-5" href="#">CONTACT</a>
                    </li>
                  </ul>
              </div>
            </div>
        </nav>

        {{-- Navbar Mobile && Ipad --}}
        <nav class="navbar navbar-expand-lg navbar-light d-block d-md-none bg-green fixed-top">
            <div class="container">
              <a class="navbar-brand fs-3 text-white" href="#" style="font-family: 'Passion One', cursive;">AZZA INDONESIA SUPPLIER</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav gap-3 d-flex justify-content-end w-100">
                    <li class="nav-item">
                      <a class="nav-link text-white fw-bold fs-5" href="#">ABOUT</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-white fw-bold fs-5" href="#">FEATURE</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-white fw-bold fs-5" href="#">PRODUCT</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-white fw-bold fs-5" href="#">TEAM</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-white fw-bold fs-5" href="#">GALLERY</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-white fw-bold fs-5" href="#">CONTACT</a>
                    </li>
                  </ul>
              </div>
            </div>
        </nav>

         <!-- Banner Image  -->
        <div>
            <div class="banner-image w-100 vh-100 d-flex justify-content-center align-items-center">
            <div class="container" data-aos="fade-right" data-aos-duration="1000" data-aos-easing="linear" >
            <div class="col-md-6" >
                <div>
                <h4 class="text-white" >The best from the others</h4>
                </div>
                <div class="text-white lh-1 d-none d-md-block" style="max-width:80%; ">
                <h1 style="font-size:45px;">
                    We are the solution for you in looking for coconut products            
                </h1>
                </div>
                <div class="text-white lh-1 d-block d-md-none" style="max-width:90%; ">
                <h1 style="font-size:40px;">
                    We are the solution for you in looking for coconut products            
                </h1>
                </div>

                <div class="row mt-5">
                <div class="container d-flex gap-5 ">
                    <div class="col-md-2 benner-button">
                        <a href="#" class="text-decoration-none text-white mb-0">About Us
                        <span></span><span></span><span></span><span></span>
                        </a>
                    </div>
                    <div class="col-md-1 benner-button">
                        <a href="#" class="text-decoration-none text-white mb-0">Products Us
                        <span></span><span></span><span></span><span></span>
                        </a>
                    </div>                  
                </div>
                </div>
            
            </div>
            
            </div>
            </div>
        </div>


         {{-- About Us --}}
        <section class="container" style="margin-top:150px;">
            <div class="row py-5">
                <div class="col-md-6 col-12" data-aos="fade-right" data-aos-duration="1000" data-aos-easing="linear">
                    <div class="">
                    <h1 class="fw-bold" style="font-size:32px;">About Us</h1>
                    
                    </div>
                    <div class="w-100 lh-base mt-3 d-block d-md-none" style="font-size:19px;">
                        AZZA INDONESIA SUPPLIER company engaged in the export of commodity products from Indonesia, We are engaged in manufacturing with export quality, Our products come from the territory of Indonesia,                    </div>
                    <div class="w-75 lh-base mt-3 d-none d-md-block" style="font-size:19px;">
                        AZZA INDONESIA SUPPLIER company engaged in the export of commodity products from Indonesia, We are engaged in manufacturing with export quality, Our products come from the territory of Indonesia,                    </div>
                    <div class="w-100 lh-base mt-3 d-block d-md-none" style="font-size:16px;">
                        We are the place for those of you who are looking for genuine products from Indonesia, the products we sell are export quality products, with a long process to get the best results we sell quality products for you                    </div>
                    <div class="w-75 lh-base mt-3 d-none d-md-block" style="font-size:16px;">
                        We are the place for those of you who are looking for genuine products from Indonesia, the products we sell are export quality products, with a long process to get the best results we sell quality products for you                    </div>
                    <div class="w-100 lh-base mt-3 d-block d-md-none" style="font-size:16px;">
                        Azza Coco is committed to providing the best service in our customer satisfaction,
                        We serve customers from all over the world            
                    </div>
                    <div class="w-75 lh-base mt-3 d-none d-md-block" style="font-size:16px;">
                        Azza INDONESIA SUPPLIER is committed to providing the best service in our customer satisfaction, We serve customers from all over the world            
                    </div>
                </div>
                <div class="col-md-6 col-12" data-aos="fade-left" data-aos-duration="1000" data-aos-easing="linear">
                    <div class=" d-flex justify-content-center">
                        <img src="/img/products/products_7.jpg" alt="" class="shadow mb-5 img-fluid d-block d-md-none mt-5 mt-md-0" style="width:90%; height:90%; border-radius:25px; ">
                        <img src="/img/products/products_7.jpg" alt="" class="shadow mb-5 img-fluid d-none d-md-block" style="width:55%; height:90%; border-radius:25px; ">
                    </div>
        
                </div>
            </div>
        </section>

         {{-- Our Key Features --}}
        <section class="container " style="margin-top:150px;" data-aos="fade-down" data-aos-duration="1000" data-aos-easing="linear">
            <h1 class="text-center fw-bold" style="font-size:32px;">Our Key Feature</h1>
            <div class="row g-5 my-5">
            <div class="col-md-6">
            <div class="d-flex justify-content-center flex-column align-items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="#82954B" class="bi bi-heart-pulse" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053.918 3.995.78 5.323 1.508 7H.43c-2.128-5.697 4.165-8.83 7.394-5.857.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17c3.23-2.974 9.522.159 7.394 5.856h-1.078c.728-1.677.59-3.005.108-3.947C13.486.878 10.4.28 8.717 2.01L8 2.748ZM2.212 10h1.315C4.593 11.183 6.05 12.458 8 13.795c1.949-1.337 3.407-2.612 4.473-3.795h1.315c-1.265 1.566-3.14 3.25-5.788 5-2.648-1.75-4.523-3.434-5.788-5Zm8.252-6.686a.5.5 0 0 0-.945.049L7.921 8.956 6.464 5.314a.5.5 0 0 0-.88-.091L3.732 8H.5a.5.5 0 0 0 0 1H4a.5.5 0 0 0 .416-.223l1.473-2.209 1.647 4.118a.5.5 0 0 0 .945-.049l1.598-5.593 1.457 3.642A.5.5 0 0 0 12 9h3.5a.5.5 0 0 0 0-1h-3.162l-1.874-4.686Z"/>
                </svg>      
                <h5 class="text-center mt-3 fw-bold" style="color:#82954B; font-size:20px;">Integrity</h5>
                <div class="text-center lh-md mt-2 w-75 fw-light">
                We are integrity, we strive to keep our promises, and act fairly and with respect, integrity is our asset, that's how our products will be known to people.
                </div>
            </div>
            </div>
            <div class="col-md-6">
            <div class="d-flex justify-content-center flex-column align-items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="#82954B" class="bi bi-shield-check" viewBox="0 0 16 16">
                <path d="M5.338 1.59a61.44 61.44 0 0 0-2.837.856.481.481 0 0 0-.328.39c-.554 4.157.726 7.19 2.253 9.188a10.725 10.725 0 0 0 2.287 2.233c.346.244.652.42.893.533.12.057.218.095.293.118a.55.55 0 0 0 .101.025.615.615 0 0 0 .1-.025c.076-.023.174-.061.294-.118.24-.113.547-.29.893-.533a10.726 10.726 0 0 0 2.287-2.233c1.527-1.997 2.807-5.031 2.253-9.188a.48.48 0 0 0-.328-.39c-.651-.213-1.75-.56-2.837-.855C9.552 1.29 8.531 1.067 8 1.067c-.53 0-1.552.223-2.662.524zM5.072.56C6.157.265 7.31 0 8 0s1.843.265 2.928.56c1.11.3 2.229.655 2.887.87a1.54 1.54 0 0 1 1.044 1.262c.596 4.477-.787 7.795-2.465 9.99a11.775 11.775 0 0 1-2.517 2.453 7.159 7.159 0 0 1-1.048.625c-.28.132-.581.24-.829.24s-.548-.108-.829-.24a7.158 7.158 0 0 1-1.048-.625 11.777 11.777 0 0 1-2.517-2.453C1.928 10.487.545 7.169 1.141 2.692A1.54 1.54 0 0 1 2.185 1.43 62.456 62.456 0 0 1 5.072.56z"/>
                <path d="M10.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                </svg>     
                <h5 class="text-center mt-3 fw-bold" style="color:#82954B; font-size:20px;">COMMITMENT</h5>
                <div class="text-center lh-md mt-2 w-75">
                Commitment is us, which means we are committed to providing the best service for customers all the time.
                </div>
            </div>
            </div>
            <div class="col-md-6">
            <div class="d-flex justify-content-center flex-column align-items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="#82954B" class="bi bi-award" viewBox="0 0 16 16">
                <path d="M9.669.864 8 0 6.331.864l-1.858.282-.842 1.68-1.337 1.32L2.6 6l-.306 1.854 1.337 1.32.842 1.68 1.858.282L8 12l1.669-.864 1.858-.282.842-1.68 1.337-1.32L13.4 6l.306-1.854-1.337-1.32-.842-1.68L9.669.864zm1.196 1.193.684 1.365 1.086 1.072L12.387 6l.248 1.506-1.086 1.072-.684 1.365-1.51.229L8 10.874l-1.355-.702-1.51-.229-.684-1.365-1.086-1.072L3.614 6l-.25-1.506 1.087-1.072.684-1.365 1.51-.229L8 1.126l1.356.702 1.509.229z"/>
                <path d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1 4 11.794z"/>
                </svg>
                <h5 class="text-center mt-3 fw-bold" style="color:#82954B; font-size:20px;">Quality</h5>
                <div class="text-center lh-md mt-2 w-75 ">
                Quality is important in marketing products, and we try to provide the best product quality, we have carried out periodic checks to ensure the products we sell meet customer expectations.
                </div>
            </div>
            </div>
            <div class="col-md-6">
            <div class="d-flex justify-content-center flex-column align-items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="#82954B" class="bi bi-lightbulb" viewBox="0 0 16 16">
                <path d="M2 6a6 6 0 1 1 10.174 4.31c-.203.196-.359.4-.453.619l-.762 1.769A.5.5 0 0 1 10.5 13a.5.5 0 0 1 0 1 .5.5 0 0 1 0 1l-.224.447a1 1 0 0 1-.894.553H6.618a1 1 0 0 1-.894-.553L5.5 15a.5.5 0 0 1 0-1 .5.5 0 0 1 0-1 .5.5 0 0 1-.46-.302l-.761-1.77a1.964 1.964 0 0 0-.453-.618A5.984 5.984 0 0 1 2 6zm6-5a5 5 0 0 0-3.479 8.592c.263.254.514.564.676.941L5.83 12h4.342l.632-1.467c.162-.377.413-.687.676-.941A5 5 0 0 0 8 1z"/>
                </svg>
                <h5 class="text-center mt-3 fw-bold" style="color:#82954B; font-size:20px;">Innovation</h5>
                <div class="text-center lh-md mt-2 w-75">
                Us to create something new, and design our products to have a high appeal in the market and give satisfaction to our customers
                </div>
            </div>
            </div>
            </div>
        </section>


        {{-- Our Product --}}
        <section class="container-fluid  py-5" style="margin-top:150px;">
            <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="10000">
                    <div class="container ">
                        <div class="row d-flex align-items-start">
                            <div class="col-md-6">
                                <h1 class="text-start fw-bold" style="font-size:32px;">Our Products</h1>
                                <h3 class="fw-bold mt-3" style="color:#82954B; font-size:22px;">Coconut Husked</h3>
                                <div class="w-75">
                                    We sell coconut husked with various grades, our products are almost entirely light brown, semi husked coconut is a practical import process which does not lose all its economic value, this is our superior commodity from the island of Sumatra, we sell it at the best price for you
                                </div>
                                <div class="col-md-1 benner-button bg-green mt-5">
                                    <a href="#" class="text-decoration-none text-white mb-0">Contact Us
                                    <span></span><span></span><span></span><span></span>
                                    </a>
                                </div> 
                            </div>
                            <div class="col-md-6">
                                <img src="/img/products/products_4.jpg" alt="" class="w-100 mt-3 mt-md-0" style="border-radius:10%;">
                            </div>
                        </div>
                    </div>
                    </div>
                    
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>


        {{-- Our Team --}}
        <section class="container" style="margin-top:150px;" data-aos="fade-down" data-aos-duration="1000" data-aos-easing="linear">
            <h1 class="text-center fw-bold" style="font-size:32px;">Our Teams</h1>
            <div class="row mt-5">
            <div class="col-md-4">
                <div class="d-flex justify-content-center align-items-center flex-column mt-4">
                <img src="/img/user/user.jpg" alt="" class="img-fluid w-50" style="width:50%; clip-path:circle();">
                <h5 class="text-dark mt-2" style="">Fatra Dinata</h5>
                <h6 class="fw-bold" style="color:#82954B;">Founder</h6>
                </div>
            </div>
            <div class="col-md-4">
                <div class="d-flex justify-content-center align-items-center flex-column mt-4">
                <img src="/img/user/user.jpg" alt="" class="img-fluid w-50" style="width:50%; clip-path:circle();">
                <h5 class="text-dark mt-2" style="">Fatra Dinata</h5>
                <h6 class="fw-bold" style="color:#82954B;">Founder</h6>
                </div>
            </div>
            <div class="col-md-4">
                <div class="d-flex justify-content-center align-items-center flex-column mt-4">
                <img src="/img/user/user.jpg" alt="" class="img-fluid w-50" style="width:50%; clip-path:circle();">
                <h5 class="text-dark mt-2" style="">Fatra Dinata</h5>
                <h6 class="fw-bold" style="color:#82954B;">Founder</h6>
                </div>
            </div>
            
            </div>
        </section>

        
        {{-- We Are Registered && Work Documentacion --}}
        <section class="container-fluid py-5 " style="margin-top:150px; background-color:rgba(130, 149, 75, 0.9);  ">
            <div data-aos="fade-down" data-aos-duration="1000" data-aos-easing="linear">
            <h1 class="text-center fw-bold text-white" style="font-size:30px; ">We are Registered On</h1>
    
            <div class="row d-flex justify-content-center mt-1 g-5">
                <div class="col-md-2 d-flex justify-content-center">
                <img src="https://upload.wikimedia.org/wikipedia/id/4/49/LOGO_BEA_CUKAI.png" alt="" class="w-50">
                </div>
                <div class="col-md-2 d-flex justify-content-center">
                <img src="https://upload.wikimedia.org/wikipedia/id/4/49/LOGO_BEA_CUKAI.png" alt="" class="w-50">
                </div>
                <div class="col-md-2 d-flex justify-content-center">
                <img src="https://upload.wikimedia.org/wikipedia/id/4/49/LOGO_BEA_CUKAI.png" alt="" class="w-50">
                </div>
                <div class="col-md-2 d-flex justify-content-center">
                <img src="https://upload.wikimedia.org/wikipedia/id/4/49/LOGO_BEA_CUKAI.png" alt="" class="w-50">
                </div>
            </div>
            </div>
        </section>
      
        {{-- Footer --}}
        <section>
            <footer class="p-5" style="background-color:rgba(130, 149, 75, 1);">
            
            <div class="container">
                <div class="d-flex justify-content-center my-4" data-aos="fade-down" data-aos-duration="1000" data-aos-easing="linear">
                <h2 class="text-center text-white fw-bold">Questions?<br>
                    Let’s Get In Touch</h2>
                </div>
                <div class="row d-flex justify-content-start align-items-start mt-5">
                <!--Grid column-->
                <div class="col-lg-6 col-md-6 mb-4 mb-md-0">
                    <div data-aos="fade-right" data-aos-duration="1000" data-aos-easing="linear">
                    <div class="text-white fs-1"style="font-family: 'Passion One', cursive;">AZZA INDONESIA SUPPLIER</div>
                    <div class="text-white w-75">
                        We are a company engaged in managing natural resources from Indonesia,
                        we are aware of the environment of our area which has a lot of natural resources to process, PT AZZA INDONESIA SUPPLIER is here as a forum to manage Indonesia's natural resources, we hope to help farmers and prosper them
                    </div>
                    
                    </div>
                </div>
                <div class="col-md-3">
                    <div data-aos="fade-left" data-aos-duration="1000" data-aos-easing="linear">
                    <span class="fs-4 text-white fw-bold">Sosial Media</span>
                    <div class="fw-bold mt-3 d-flex align-items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#fff" class="bi bi-instagram" viewBox="0 0 16 16">
                            <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                        </svg>
                        <a href="" class="text-decoration-none text-white" >Instagram</a>
                    </div>
                    <div class="fw-bold mt-3 d-flex align-items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#fff" class="bi bi-facebook" viewBox="0 0 16 16">
                            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                        </svg>
                        <a href="" class="text-decoration-none text-white ">Facebook</a>
                    </div>
                    
                    <div class="fw-bold mt-3 d-flex align-items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#fff" class="bi bi-linkedin" viewBox="0 0 16 16">
                            <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
                        </svg>                        
                        <a href="" class="text-decoration-none text-white">Linkendin</a>
                    </div>
                    <div class="fw-bold mt-3 d-flex align-items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#fff" class="bi bi-youtube" viewBox="0 0 16 16">
                            <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z"/>
                        </svg>
                        <a href="" class="text-decoration-none text-white">Youtube</a>
                    </div>
                    </div>
                </div>
                <div class="col-md-3 mt-4 mt-md-0">
                    <div data-aos="fade-left" data-aos-duration="1000" data-aos-easing="linear">
                    <span class="fs-4 text-white fw-bold">Address</span>
                        <div class="mt-3 d-flex align-items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#fff" class="bi bi-geo-alt fw-bold" viewBox="0 0 16 16">
                                <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
                                <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                            </svg>
                            <span class="text-white fw-bold"> Jln Krapyak Sleman Jogja </span>
                        </div>
                        <div class="mt-3 d-flex align-items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#fff" class="bi bi-envelope" viewBox="0 0 16 16">
                                <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
                            </svg>
                            <span class="text-white fw-bold">AzzaIndonesia@gmail.com</span>
                        </div>

                        <div class="mt-3 d-flex align-items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#fff" class="bi bi-telephone" viewBox="0 0 16 16">
                                <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                              </svg>
                            <span class="text-white fw-bold">+62877665544332211</span>

                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 mb-4 mb-md-0">
                    <div class="container-fluid">
                    <div class="row me-4">
                        <div class="col-md-6 text-white me-5" data-aos="fade-left" data-aos-duration="1000" data-aos-easing="linear">
                        
                        
                        </div>
                        <div class="col-md-6 text-white" data-aos="fade-left" data-aos-duration="1000" data-aos-easing="linear">
                        
                        </div>
                    </div>
                </div>
                </div>
                
            
                
                
                </div>
            </div>
            </footer>
        </section>
       
         <!-- Copyright -->
        <div
        class="text-start p-4  container-fluid"
        style="background-color:rgba(130, 149, 75, 1);"
        >
        <hr class="container-fluid" style="background-color:#fff; height:3px;">
        <div class="container" >  
            <div class="text-white">
                © 2022 Copyright:
                <a class="text-white text-decoration-none " href="https://mdbootstrap.com/"
                >Azza Coco</a
                >
            </div>
            </div>
        </div>

        <div class="button-kontak-wrapper">
            <div class="button-item-kontak-wrapper wa-icon">
                <a href="https://wa.link/wdw11s" class="pulse">
                <img src="/img/wa.png" alt="" style="width:70px;">
                </a>
            </div>
        </div>
    
        
        
        <script type="text/javascript">
            var nav = document.querySelector('nav');
      
            window.addEventListener('scroll', function () {
              if (window.pageYOffset > 100) {
                nav.classList.add('bg-green', 'shadow');
              } else {
                nav.classList.remove('bg-green', 'shadow');
              }
            
            });
        </script>

        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>
    </body>
</html>
