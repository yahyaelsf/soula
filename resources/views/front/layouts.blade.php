<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('front/css/style.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
    <!-- Link Swiper's CSS -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.rtl.min.css"
        integrity="sha384-PJsj/BTMqILvmcej7ulplguok8ag4xFTPryRq8xevL7eBYSmpXKcbNVuy+P0RMgq" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" />

    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <link rel="icon" href="{{ asset('front/img/looogooooooooo.png') }}">



    <link rel="shortcut icon" href="/favicon.ico">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.1.6/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.1/aos.css">

    <link rel="stylesheet" type="text/css" href="/Common/_Bundles/main.min.css">


    <script type="text/javascript">
        var abp = abp || {};
        abp.appPath = '/';
    </script>

    <style type="text/css"></style>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link href="https://db.onlinewebfonts.com/c/2581b069e2f5c90669a7af674748e98f?family=Teshrin+AR%2BLT+Medium"
        rel="stylesheet">
    <!-- Include the FancyBox JS file -->
    <link rel="shortcut icon" href="/favicon.ico">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    @stack('styles')
    <title>{{ $settings['title'] ?? 'Sojoud' }}</title>
</head>

<body>
    <!--///////////////////start-nav ///////////////////////-->
    <a href="https://api.whatsapp.com/send/?phone=972509559404&text&type=phone_number&app_absent=0" target="_blank"
        style="position: fixed; z-index:9999999999999999999999; right: 5px; bottom: 100px;">
        <svg style="pointer-events:none; display:block; height:50px; width:50px;" width="50px" height="50px"
            viewBox="0 0 1024 1024">
            <defs>
                <path id="htwasqicona-chat"
                    d="M1023.941 765.153c0 5.606-.171 17.766-.508 27.159-.824 22.982-2.646 52.639-5.401 66.151-4.141 20.306-10.392 39.472-18.542 55.425-9.643 18.871-21.943 35.775-36.559 50.364-14.584 14.56-31.472 26.812-50.315 36.416-16.036 8.172-35.322 14.426-55.744 18.549-13.378 2.701-42.812 4.488-65.648 5.3-9.402.336-21.564.505-27.15.505l-504.226-.081c-5.607 0-17.765-.172-27.158-.509-22.983-.824-52.639-2.646-66.152-5.4-20.306-4.142-39.473-10.392-55.425-18.542-18.872-9.644-35.775-21.944-50.364-36.56-14.56-14.584-26.812-31.471-36.415-50.314-8.174-16.037-14.428-35.323-18.551-55.744-2.7-13.378-4.487-42.812-5.3-65.649-.334-9.401-.503-21.563-.503-27.148l.08-504.228c0-5.607.171-17.766.508-27.159.825-22.983 2.646-52.639 5.401-66.151 4.141-20.306 10.391-39.473 18.542-55.426C34.154 93.24 46.455 76.336 61.07 61.747c14.584-14.559 31.472-26.812 50.315-36.416 16.037-8.172 35.324-14.426 55.745-18.549 13.377-2.701 42.812-4.488 65.648-5.3 9.402-.335 21.565-.504 27.149-.504l504.227.081c5.608 0 17.766.171 27.159.508 22.983.825 52.638 2.646 66.152 5.401 20.305 4.141 39.472 10.391 55.425 18.542 18.871 9.643 35.774 21.944 50.363 36.559 14.559 14.584 26.812 31.471 36.415 50.315 8.174 16.037 14.428 35.323 18.551 55.744 2.7 13.378 4.486 42.812 5.3 65.649.335 9.402.504 21.564.504 27.15l-.082 504.226z">
                </path>
            </defs>
            <linearGradient id="htwasqiconb-chat" gradientUnits="userSpaceOnUse" x1="512.001" y1=".978"
                x2="512.001" y2="1025.023">
                <stop offset="0" stop-color="#61fd7d"></stop>
                <stop offset="1" stop-color="#2bb826"></stop>
            </linearGradient>
            <use xlink:href="#htwasqicona-chat" overflow="visible" style="fill: url(#htwasqiconb-chat)"
                fill="url(#htwasqiconb-chat)"></use>
            <g>
                <path style="fill: #FFFFFF;" fill="#FFF"
                    d="M783.302 243.246c-69.329-69.387-161.529-107.619-259.763-107.658-202.402 0-367.133 164.668-367.214 367.072-.026 64.699 16.883 127.854 49.017 183.522l-52.096 190.229 194.665-51.047c53.636 29.244 114.022 44.656 175.482 44.682h.151c202.382 0 367.128-164.688 367.21-367.094.039-98.087-38.121-190.319-107.452-259.706zM523.544 808.047h-.125c-54.767-.021-108.483-14.729-155.344-42.529l-11.146-6.612-115.517 30.293 30.834-112.592-7.259-11.544c-30.552-48.579-46.688-104.729-46.664-162.379.066-168.229 136.985-305.096 305.339-305.096 81.521.031 158.154 31.811 215.779 89.482s89.342 134.332 89.312 215.859c-.066 168.243-136.984 305.118-305.209 305.118zm167.415-228.515c-9.177-4.591-54.286-26.782-62.697-29.843-8.41-3.062-14.526-4.592-20.645 4.592-6.115 9.182-23.699 29.843-29.053 35.964-5.352 6.122-10.704 6.888-19.879 2.296-9.176-4.591-38.74-14.277-73.786-45.526-27.275-24.319-45.691-54.359-51.043-63.543-5.352-9.183-.569-14.146 4.024-18.72 4.127-4.109 9.175-10.713 13.763-16.069 4.587-5.355 6.117-9.183 9.175-15.304 3.059-6.122 1.529-11.479-.765-16.07-2.293-4.591-20.644-49.739-28.29-68.104-7.447-17.886-15.013-15.466-20.645-15.747-5.346-.266-11.469-.322-17.585-.322s-16.057 2.295-24.467 11.478-32.113 31.374-32.113 76.521c0 45.147 32.877 88.764 37.465 94.885 4.588 6.122 64.699 98.771 156.741 138.502 21.892 9.45 38.982 15.094 52.308 19.322 21.98 6.979 41.982 5.995 57.793 3.634 17.628-2.633 54.284-22.189 61.932-43.615 7.646-21.427 7.646-39.791 5.352-43.617-2.294-3.826-8.41-6.122-17.585-10.714z">
                </path>
            </g>
        </svg></a></div>
    <div>
        <nav style=" z-index: 125;background-color: #000000 !important;height: 88px; width: 100%;  position: fixed; top: 0; display: flex;"
            class="navbar navbar-expand-lg navbar-light bg-light">
            <div style="background-color: #000000 !important;" class="container-fluid">
                <a class="navbar-brand " href="#">
                    <img class="iru" src="{{ asset('front/img/looogooooooooo.png') }}" alt="logo">
                    <img class="iru_s" src="{{ asset('front/img/Asslogo.png') }}" alt="logo">
                </a>

                <button style="background-color: #fffb00; " class="navbar-toggler" type="button"
                    data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div style="width: 65%;" class="collapse navbar-collapse justify-content-between  gap-5"
                    id="navbarNavDropdown">
                    <ul class="navbar-nav coloor gap-5">

                        <li class="ul_nav_styl">
                            <a aria-current="page" href="#sojoood">سجود زومبا</a>
                        </li>

                        <li class="ul_nav_styl">
                            <a aria-current="page" href="#awerwerfawef">ما فوائد السولا</a>
                        </li>
                        <li class="ul_nav_styl">
                            <a aria-current="page" href="#qwrweqrwerqwr">ماذا تتعلمون ؟ </a>
                        </li>
                        <li class="ul_nav_styl">
                            <a aria-current="page" href="#qwrqweq24124">الكورسات</a>
                        </li>
                    </ul>

                    </li>
                    </ul>

                    <span class="navbar-text ">
                        <div class="gap-3">
                            <div class=" " id="navbarTogglerDemo02">
                                <div class="d-flex justify-content-center align-items-center gap-2" role="search">
                                    @if (auth()->user())
                                        <a class="join-btn" href="{{ route('logout') }}">تسجيل خروج</a>
                                    @else
                                        <button type="button" class="modal_link_but" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            تسجيل الدخول
                                        </button>
                                    @endif
                                        <a class="join-btn" href="{{ route('home') }}#register">اشترك الان</a>
                                </div>
                            </div>

                        </div>
                    </span>
                </div>
            </div>
        </nav>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">تسجيل الدخول</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                @isset($data)
                    <div class="alert alert-danger" role="alert">
                        {{ $data }}
                    </div>
                @endisset

                    <form action="{{ route('front.logging') }}" method="post" id="login-form" class="ogoag">
                    @csrf
                        <div class="row ContactUs_row">
                            <div class="col-lg-5">
                                <div class="input_jops_topic">البريد الالكتروني</div>
                                <div class=" ContactUs_inp">
                                    <div class="ContactUs_inp_div">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M17 21.25H7C3.35 21.25 1.25 19.15 1.25 15.5V8.5C1.25 4.85 3.35 2.75 7 2.75H17C20.65 2.75 22.75 4.85 22.75 8.5V15.5C22.75 19.15 20.65 21.25 17 21.25ZM7 4.25C4.14 4.25 2.75 5.64 2.75 8.5V15.5C2.75 18.36 4.14 19.75 7 19.75H17C19.86 19.75 21.25 18.36 21.25 15.5V8.5C21.25 5.64 19.86 4.25 17 4.25H7Z"
                                                fill="#999999" />
                                            <path
                                                d="M11.9988 12.868C11.1588 12.868 10.3088 12.608 9.6588 12.078L6.5288 9.57802C6.2088 9.31802 6.14881 8.84802 6.4088 8.52802C6.66881 8.20802 7.13881 8.14802 7.45881 8.40802L10.5888 10.908C11.3488 11.518 12.6388 11.518 13.3988 10.908L16.5288 8.40802C16.8488 8.14802 17.3288 8.19802 17.5788 8.52802C17.8388 8.84802 17.7888 9.32802 17.4588 9.57802L14.3288 12.078C13.6888 12.608 12.8388 12.868 11.9988 12.868Z"
                                                fill="#999999" />
                                        </svg>
                                        <input class="EmailSubscription_inp" name="email" id="email" type="text"
                                            placeholder="بريد الرسمي">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="input_jops_topic"> كلمة السر</div>
                                <div class=" ContactUs_inp">
                                    <div class="ContactUs_inp_div">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5 10H7C9 10 10 9 10 7V5C10 3 9 2 7 2H5C3 2 2 3 2 5V7C2 9 3 10 5 10Z"
                                                stroke="#999999" stroke-width="1.5" stroke-miterlimit="10"
                                                stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path
                                                d="M17 10H19C21 10 22 9 22 7V5C22 3 21 2 19 2H17C15 2 14 3 14 5V7C14 9 15 10 17 10Z"
                                                stroke="#999999" stroke-width="1.5" stroke-miterlimit="10"
                                                stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path
                                                d="M17 22H19C21 22 22 21 22 19V17C22 15 21 14 19 14H17C15 14 14 15 14 17V19C14 21 15 22 17 22Z"
                                                stroke="#999999" stroke-width="1.5" stroke-miterlimit="10"
                                                stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path
                                                d="M5 22H7C9 22 10 21 10 19V17C10 15 9 14 7 14H5C3 14 2 15 2 17V19C2 21 3 22 5 22Z"
                                                stroke="#999999" stroke-width="1.5" stroke-miterlimit="10"
                                                stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                        <input class="EmailSubscription_inp" name="password" id="password" type="password" placeholder=" كلمة السر" required>
                                    </div>
                                </div>
                            </div>
                        </div>

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" style="background: #dec719">تسجيل</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">اغلاق</button>

                </div>
                </form>
            </div>
        </div>
    </div>
    <!--///////////////////end-nav ///////////////////////-->
    @yield('content')

    <!--///////////////////start-footer ///////////////////////-->
    <footer>
        <div class="container">
            <div class="footer-area">
                <div style="row-gap: 20px;" class="row">
                    <div class="col-lg">
                        <div class="footer-col about-col">
                            <div class="footer-about">
                                <div class="about-logo">
                                    <a href="/">
                                        <img class="img-fluid"
                                            src="{{ asset('front/img/Asset_12Sola_dance_logo-removebg-preview.png') }}"
                                            alt="sojoud">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="footer-col menu-col">
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="footer-col menu-col">
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="footer-col social-col">
                            <h1 style="margin-right: 20px;" class="menu-title">تواصل معنا</h1>
                            <ul class="menu-list contact-list">
                                @isset($settings['mobile'])
                                    <li class="list-item">
                                        <a style="color: #ffffff  !important;" class="item-link"
                                            href="https://api.whatsapp.com/send?phone=+966566882682">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="17" height="23"
                                                viewBox="0 0 17 23">
                                                <path id="Icon_material-phone-android"
                                                    data-name="Icon material-phone-android"
                                                    d="M20.071,1.5H10.929A3.231,3.231,0,0,0,7.5,4.5v16a3.231,3.231,0,0,0,3.429,3h9.143a3.231,3.231,0,0,0,3.429-3V4.5A3.231,3.231,0,0,0,20.071,1.5Zm-2.286,20H13.214v-1h4.571Zm3.714-3H9.5V4.5h12Z"
                                                    transform="translate(-7 -1)" fill="none" stroke-width="1"></path>
                                            </svg>
                                            <span><bdi>{{ $settings['mobile'] }}</bdi></span>
                                        </a>
                                    </li>
                                @endisset
                                @isset($settings['email'])
                                    <li class="list-item">
                                        <a style="color:#ffffff !important;" class="item-link"
                                            href="mailto:Sujood911@gmail.com">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="21" height="17"
                                                viewBox="0 0 21 17">
                                                <path id="Icon_material-email" data-name="Icon material-email"
                                                    d="M21,6H5A2,2,0,0,0,3.01,8L3,20a2.006,2.006,0,0,0,2,2H21a2.006,2.006,0,0,0,2-2V8A2.006,2.006,0,0,0,21,6Zm0,4-8,5L5,10V8l8,5,8-5Z"
                                                    transform="translate(-2.5 -5.5)" fill="none" stroke-width="1">
                                                </path>
                                            </svg>
                                            <span>{{ $settings['email'] }}</span>
                                        </a>
                                    </li>
                                @endisset
                                <li class="list-item">
                                    <div class="col-md-auto">
                                        <div class="social-list">
                                            @isset($settings['tiktok'])
                                                <a class="social-item" href="{{ $settings['tiktok'] }}"
                                                    target="_blank"><i class="fab fa-tiktok"></i>
                                                </a>
                                            @endisset
                                            @isset($settings['instagram'])
                                                <a class="social-item" href="{{ $settings['instagram'] }}"
                                                    target="_blank"><i class="fab fa-instagram"></i>
                                                </a>
                                            @endisset
                                            @isset($settings['facebook'])
                                                <a class="social-item" href="{{ $settings['facebook'] }}"
                                                    target="_blank"><i class="fab fa-facebook-f"></i>
                                                </a>
                                            @endisset
                                            @isset($settings['youtube'])
                                                <a class="social-item" href="{{ $settings['youtube'] }}"
                                                    target="_blank"><i class="fab fa-fw fa-youtube"></i>
                                                </a>
                                            @endisset
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-end">
                <div class="row gx-5 justify-content-md-between justify-content-center align-items-center ">
                    <div class="col-md-auto">
                        <div class="copy-rights">
                            <p>
                                جميع الحقوق محفوظة
                                <span>
                                    <script>
                                        document.write(new Date().getFullYear());
                                    </script>©
                                </span>
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </footer>

    {{-- <script src="{{ asset('front/js/script.js') }}"></script> --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
    <!-- Swiper JS -->

     <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script>
        $(document).on('submit', '#login-form', function(e) {
            e.preventDefault();
            var formData = new FormData(this);
            $.ajax({
                url: "{{ route('front.logging') }}",
                type: "post",
                cache: false,
                contentType: false,
                processData: false,
                data: formData,
                success: function(data) {
                    if (data.success == true) {
                        window.location.href = data.href_link;
                    } else {
                        swal.fire({
                            title: "",
                            text: data.data,
                            type: "error",
                            showCancelButton: false,
                            confirmButtonColor: "#DD6B55",
                            confirmButtonText: "{{ __('alerts.ok') }}",
                            cancelButtonText: "{{ __('alerts.cancel') }}",
                            closeOnConfirm: true,
                            closeOnCancel: true
                        });
                    }
                },
                error: function(response) {
                    swal.fire({
                        title: "",
                        text: '{{ __('alerts.something_wrong') }}',
                        type: "error",
                        showCancelButton: false,
                        confirmButtonColor: "#DD6B55",
                        confirmButtonText: "{{ __('alerts.ok') }}",
                        cancelButtonText: "{{ __('alerts.cancel') }}",
                        closeOnConfirm: true,
                        closeOnCancel: true
                    });

                }
            });
        });
    </script>
     @stack('scripts')
    <!-- Initialize Swiper -->
    <script>

        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 3,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            breakpoints: {
                340: {
                    slidesPerView: 1,
                    spaceBetween: 20,
                },
                640: {
                    slidesPerView: 1,
                    spaceBetween: 20,
                },
                768: {
                    slidesPerView: 3,
                    spaceBetween: 40,
                },
                1024: {
                    slidesPerView: 4,
                    spaceBetween: 50,
                },
            },
            spaceBetween: 10,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });

        ////////////////////////////
        let counterValue = 0;
        let counterValue2 = 0;
        const counterElement = document.querySelector('.counter');
        const resultElement = document.getElementById('result');
        const sumResultElement = document.getElementById('sumResult');
        const counterElement2 = document.querySelector('.counter2');
        const resultElement2 = document.getElementById('result2');
        const sumResultElement2 = document.getElementById('sumResult2');
        const result2Times12Element = document.getElementById('result2Times12');
        const result2Times12Minus30PercentElement = document.getElementById('result2Times12Minus30Percent'); // New <p> tag

        function updateCounterDisplay() {
            counterElement.textContent = counterValue;
        }

        function updateResults() {
            const result = counterValue * 249;
            const sumResult = result + (counterValue * 200);
            resultElement.textContent = result;
            sumResultElement.textContent = sumResult;
        }

        function incrementCounter() {
            if (counterValue < 20) {
                counterValue++;
                updateCounterDisplay();
                updateResults();
            }
        }

        function decrementCounter() {
            if (counterValue > 0) {
                counterValue--;
                updateCounterDisplay();
                updateResults();
            }
        }

        // Functions for the second counter
        function updateCounterDisplay2() {
            counterElement2.textContent = counterValue2;
        }

        function updateResults2() {
            const result2 = counterValue2 * 199;
            const sumResult2 = result2 + (counterValue2 * 200);
            const bfbbr = result2 * 12;
            resultElement2.textContent = result2;
            sumResultElement2.textContent = sumResult2;

            // Update result2 * 12
            result2Times12Element.textContent = result2 * 12;

            // Calculate and update result2 - (result2 * 0.3)
            const result2Minus30Percent = Math.floor(bfbbr - (bfbbr * 0.3));
            result2Times12Minus30PercentElement.textContent = result2Minus30Percent;
        }

        function incrementCounter2() {
            if (counterValue2 < 20) {
                counterValue2++;
                updateCounterDisplay2();
                updateResults2();
            }
        }

        function decrementCounter2() {
            if (counterValue2 > 0) {
                counterValue2--;
                updateCounterDisplay2();
                updateResults2();
            }
        }




        function startAnimation(entries) {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animation-started');
                }
            });
        }

        // Create an Intersection Observer for all .animation-container elements
        const animationContainers = document.querySelectorAll('.animation-container');

        animationContainers.forEach((container) => {
            const observer = new IntersectionObserver(startAnimation);
            observer.observe(container);
        });

         $(document).ready(function() {
            $('[data-fancybox]').fancybox()
         });

        var counter = 0;
    </script>

    </script>
</body>

</html>
