@extends('front.layouts')
@section('content')
    <div class="main_silder">

        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                @foreach ($sliders as $slider)
                    <div class="swiper-slide">
                        <img src="{{ asset($slider->s_cover) }}" alt="">
                    </div>
                @endforeach



            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
    <div style="margin-top: 3rem;" class="container main_div">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-8">
                <div style="line-height: 50px;" class="main_text">
                    {!! $first_section->s_description !!}
                </div>
            </div>
            <div class="col-lg-3">
            </div>
        </div>
    </div>
    <div style="margin-top: 3rem; width: 100%;padding: 20px 0; background-color: #fffb00; ">
        <div class="container main_div">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-8">
                    <div class="main_text_balck" style="font-size: 25px;">
                        {!! $second_section->s_description !!}
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="sojod_imgs">
                        <img src="{{ asset($second_section->s_cover) }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div style="margin-top: 3rem;" class="container main_div"id="sojoood">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-12">

                <div style="text-align: center;padding: 20px; font-size: 50px;"> {{ $third_section->s_title }} </div>
                <div style="text-align: center; display: flex; flex-direction: column;" class="main_text">
                    {!! $third_section->s_description !!}
                </div>
            </div>

        </div>
    </div>
    <div style="margin-top: 3rem; width: 100%;padding: 20px 0; background-color: #fffb00;">
        <div class="container main_div">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-8">
                    <div style="line-height: 50px;" class="main_text_balck" style="font-size: 25px;">
                        {!! $forth_section->s_description !!}
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="sojod_imgs">
                        <img src="{{ asset($forth_section->s_cover) }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div style="margin-top: 3rem;" class="container main_div">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-8">
                <div style=" font-size: 30px;">
                    {{ $fifth_section->s_title }}
                </div>
                <div style="line-height: 50px;" class="main_text">
                    {!! $fifth_section->s_description !!}
                </div>
            </div>
            <div class="col-lg-3">

            </div>
        </div>
    </div>
    <div style="margin-top: 3rem; width: 100%;padding: 20px 0; background-color: #fffb00;" id="awerwerfawef">
        <div class="container main_div">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-12">
                    <div style="text-align: center;padding: 20px; font-size: 50px; color: #000000;">
                        {{ $sixth_section->s_title }}
                    </div>
                    <div style="line-height: 59px; text-align: center;color: #000000;" class="main_text_balck"
                        style="font-size: 25px;">
                        {!! $sixth_section->s_description !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div style="margin-top: 3rem;" class="container main_div">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-8">
                <div style=" font-size: 30px;"> وفي نهاية الدورة سنقدم لك:
                </div>
                <div style="line-height: 50px;" class="main_text">
                    <div class="d-flex align-items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
                            fill="#d7c800">
                            <path
                                d="m424-296 282-282-56-56-226 226-114-114-56 56 170 170Zm56 216q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q134 0 227-93t93-227q0-134-93-227t-227-93q-134 0-227 93t-93 227q0 134 93 227t227 93Zm0-320Z" />
                        </svg>
                        <p style="margin-bottom: 0 !important;"> شهاده اسعاف اولي.</p>
                    </div>
                    <div class="d-flex align-items-center gap-2"><svg xmlns="http://www.w3.org/2000/svg" height="24px"
                            viewBox="0 -960 960 960" width="24px" fill="#d7c800">
                            <path
                                d="m424-296 282-282-56-56-226 226-114-114-56 56 170 170Zm56 216q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q134 0 227-93t93-227q0-134-93-227t-227-93q-134 0-227 93t-93 227q0 134 93 227t227 93Zm0-320Z" />
                        </svg>

                        <p style="margin-bottom: 0 !important;"> دعم مهني على طول الطريق.
                        </p>
                    </div>
                    <div class="d-flex align-items-center gap-2"><svg xmlns="http://www.w3.org/2000/svg" height="24px"
                            viewBox="0 -960 960 960" width="24px" fill="#d7c800">
                            <path
                                d="m424-296 282-282-56-56-226 226-114-114-56 56 170 170Zm56 216q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q134 0 227-93t93-227q0-134-93-227t-227-93q-134 0-227 93t-93 227q0 134 93 227t227 93Zm0-320Z" />
                        </svg>

                        <p style="margin-bottom: 0 !important;"> محتوى ملهم لجميع أجزاء الدرس.
                        </p>
                    </div>
                    <div class="d-flex align-items-center gap-2"><svg xmlns="http://www.w3.org/2000/svg" height="24px"
                            viewBox="0 -960 960 960" width="24px" fill="#d7c800">
                            <path
                                d="m424-296 282-282-56-56-226 226-114-114-56 56 170 170Zm56 216q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q134 0 227-93t93-227q0-134-93-227t-227-93q-134 0-227 93t-93 227q0 134 93 227t227 93Zm0-320Z" />
                        </svg>

                        <p style="margin-bottom: 0 !important;"> موسيقى متنوعه مع إيقاع حماسي.
                        </p>
                    </div>
                    <div class="d-flex align-items-center gap-2"><svg xmlns="http://www.w3.org/2000/svg" height="24px"
                            viewBox="0 -960 960 960" width="24px" fill="#d7c800">
                            <path
                                d="m424-296 282-282-56-56-226 226-114-114-56 56 170 170Zm56 216q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q134 0 227-93t93-227q0-134-93-227t-227-93q-134 0-227 93t-93 227q0 134 93 227t227 93Zm0-320Z" />
                        </svg>

                        <p style="margin-bottom: 0 !important;"> ترتيب رحله سولا إلى خارج البلاد مع اسعار
                            خاصه لمدربين السولا.</p>
                    </div>

                </div>
            </div>
            <div class="col-lg-3">
                <div class="sojod_imgs">
                    <img src="{{ asset('front/img/sec88888.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </div>
    <div style="margin-top: 3rem; width: 100%;padding: 20px 0; background-color: #fffb00; color: #000000;"
        id="qwrweqrwerqwr">
        <div class="container main_div">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-8">
                    <div style=" font-size: 30px;"> انتظروا ، ماذا تتعلمون في التدريب؟

                    </div>
                    <div style="line-height: 50px;  color: #000000;" class="main_text">


                        <div class="d-flex align-items-center gap-2"><svg xmlns="http://www.w3.org/2000/svg"
                                height="24px" viewBox="0 -960 960 960" width="24px" fill="#000000">
                                <path
                                    d="m424-296 282-282-56-56-226 226-114-114-56 56 170 170Zm56 216q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q134 0 227-93t93-227q0-134-93-227t-227-93q-134 0-227 93t-93 227q0 134 93 227t227 93Zm0-320Z" />
                            </svg>

                            <p style="margin-bottom: 0 !important;"> سوف تقومون في تدريب لياقة بدنية فريد ومتنوع
                                ومبتكر.
                            </p>
                        </div>
                        <div class="d-flex align-items-center gap-2"><svg xmlns="http://www.w3.org/2000/svg"
                                height="24px" viewBox="0 -960 960 960" width="24px" fill="#000000">
                                <path
                                    d="m424-296 282-282-56-56-226 226-114-114-56 56 170 170Zm56 216q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q134 0 227-93t93-227q0-134-93-227t-227-93q-134 0-227 93t-93 227q0 134 93 227t227 93Zm0-320Z" />
                            </svg>

                            <p style="margin-bottom: 0 !important;"> سوف تتعلمون كيفية الجمع بين العناصر اللاهوائية
                                والهوائية والوظيفية في تمرين واحد.

                            </p>
                        </div>
                        <div class="d-flex align-items-center gap-2"><svg xmlns="http://www.w3.org/2000/svg"
                                height="24px" viewBox="0 -960 960 960" width="24px" fill="#000000">
                                <path
                                    d="m424-296 282-282-56-56-226 226-114-114-56 56 170 170Zm56 216q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q134 0 227-93t93-227q0-134-93-227t-227-93q-134 0-227 93t-93 227q0 134 93 227t227 93Zm0-320Z" />
                            </svg>

                            <p style="margin-bottom: 0 !important;"> ستكونون قادرون على كتابة التدريب والتخطيط له في
                                وقت قصير جدًا.

                            </p>
                        </div>
                        <div class="d-flex align-items-center gap-2"><svg xmlns="http://www.w3.org/2000/svg"
                                height="24px" viewBox="0 -960 960 960" width="24px" fill="#000000">
                                <path
                                    d="m424-296 282-282-56-56-226 226-114-114-56 56 170 170Zm56 216q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q134 0 227-93t93-227q0-134-93-227t-227-93q-134 0-227 93t-93 227q0 134 93 227t227 93Zm0-320Z" />
                            </svg>

                            <p style="margin-bottom: 0 !important;"> سوف تقومون بتطوير القدرة على
                                التنويع ببساطة وكفاءة.
                            </p>
                        </div>


                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="sojod_imgs">
                        <img src="{{ asset('front/img/sec7777777777.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    @isset($cources)
    <!--///////////////////start-Career ///////////////////////-->
    <div class="main_Career" id="qwrqweq24124">
        <div class="container">
            <div class="Career_div">
                <div id="servises" class="Career_manegment">
                    <div class="Career_content">
                        <div>
                        </div>
                        <div class="services-section-text">
                            <h1 class="heading-1">الكورسات </h1>
                            <div class="paragraph-2">احدث الكورسات التي تقدمها <span style="color:#dec719 ;">سجود</span>
                            </div>
                        </div>
                        <!-- <a style="margin-top: 50px; width: 150px;" class="contact_as_but" type="submit">
                              انضم لنا  <img src="https://uploads-ssl.webflow.com/63b47a4f00ab98da785b4d1e/63b47dc13b5bb3e4f1906f7a_Arrow%20Left.svg" loading="lazy" alt="" class="icon"></a> -->
                    </div>
                </div>
                <div class="row justify-content-between row_Career_control row_ggap_Career">
                @foreach ($cources as $cource)
                    <a  href="{{ route('cource.detials', $cource->pk_i_id) }}" class="col-lg-4 col-md-12 col-sm-12 vfvf">
                        <div class="Career_card">
                            <div class="Career_card_div_yallow">
                                <div class="service-icon">
                                    <img class="card_imgs" src="{{ asset($cource->s_cover) }}" alt="">
                                </div>
                            </div>
                            <div class="cards_content">
                                <div class="heading-heading-h6-bold">
                                {{ $cource->s_title }}
                                </div>
                                <div class="base-light">
                                     {!! Str::words(strip_tags($cource->s_description), 30, $end = '...') !!}
                                </div>
                            </div>
                            <!-- <div class="card_link">
                                  <a class="join-btn card_link" href="">اشترك الان</a></div> -->
                        </div>
                    </a>
                 @endforeach
                </div>

                <div class="services-section-text">

                    <div class="see_more_div">
                        <a class="see_more_button" href="{{ route('cources') }}">
                            شاهد المزيد

                        </a>
                    </div>

                </div>

            </div>
        </div>
    </div>
    @endisset
    <div>
        <!--///////////////////start-Career ///////////////////////-->
        <div id="register" class="main_Career_servicess">
            <div style="padding: 26px 0;" id="baqat" class="Choose_Us_manegment">
                <div class="Choose_Us_content">
                    <p class="Choose_Us_content_topic"> سجل بياناتك </p>
                </div>
            </div>
            <div class="container d-flex justify-content-center">
                <div class="Career_div222">
                    <div class="col-lg-12 col-md-12 col-sm-12 tryy_cardddd">
                        <form id="form" action="{{ route('register') }}" method="post" class="ogoag">
                        @csrf
                            <div class="row ContactUs_row">
                                <div class="col-lg-5">
                                    <div class="input_jops_topic"> الاسم </div>
                                    <div class=" ContactUs_inp">
                                        <div class="ContactUs_inp_div">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M12 12C14.7614 12 17 9.76142 17 7C17 4.23858 14.7614 2 12 2C9.23858 2 7 4.23858 7 7C7 9.76142 9.23858 12 12 12Z"
                                                    stroke="#999999" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path
                                                    d="M20.5901 22C20.5901 18.13 16.7402 15 12.0002 15C7.26015 15 3.41016 18.13 3.41016 22"
                                                    stroke="#999999" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                            <input class="EmailSubscription_inp" type="text" placeholder="الاسم" name="s_name" id="name" required>
                                        </div>
                                    </div>
                                </div>
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
                                            <input class="EmailSubscription_inp"id="email" name="s_email" type="email" placeholder="البريد الالكتروني" required>
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
                                            <input class="EmailSubscription_inp" type="password" id="password" name="s_password" placeholder=" كلمة السر" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="input_jops_topic"> رقم الهاتف</div>
                                    <div class=" ContactUs_inp">
                                        <div class="ContactUs_inp_div">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M15 22.75H9C4.59 22.75 3.25 21.41 3.25 17V7C3.25 2.59 4.59 1.25 9 1.25H15C19.41 1.25 20.75 2.59 20.75 7V17C20.75 21.41 19.41 22.75 15 22.75ZM9 2.75C5.42 2.75 4.75 3.43 4.75 7V17C4.75 20.57 5.42 21.25 9 21.25H15C18.58 21.25 19.25 20.57 19.25 17V7C19.25 3.43 18.58 2.75 15 2.75H9Z"
                                                    fill="#999999" />
                                                <path
                                                    d="M14 6.25H10C9.59 6.25 9.25 5.91 9.25 5.5C9.25 5.09 9.59 4.75 10 4.75H14C14.41 4.75 14.75 5.09 14.75 5.5C14.75 5.91 14.41 6.25 14 6.25Z"
                                                    fill="#999999" />
                                                <path
                                                    d="M12.0002 19.8578C10.7302 19.8578 9.7002 18.8278 9.7002 17.5578C9.7002 16.2878 10.7302 15.2578 12.0002 15.2578C13.2702 15.2578 14.3002 16.2878 14.3002 17.5578C14.3002 18.8278 13.2702 19.8578 12.0002 19.8578ZM12.0002 16.7478C11.5602 16.7478 11.2002 17.1078 11.2002 17.5478C11.2002 17.9878 11.5602 18.3478 12.0002 18.3478C12.4402 18.3478 12.8002 17.9878 12.8002 17.5478C12.8002 17.1078 12.4402 16.7478 12.0002 16.7478Z"
                                                    fill="#999999" />
                                            </svg>
                                            <input class="EmailSubscription_inp" id="mobile" type="text" name="s_mobile" required
                                                placeholder=" رقم الهاتف">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="contact_as_but_form" id="send" type="submit">اشترك الان </button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">تسجيل الدخول</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
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
                                        <input class="EmailSubscription_inp" name="email" type="text"
                                            placeholder=" بريد الرسمي">
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
                                        <input class="EmailSubscription_inp" name="password" type="password" placeholder=" كلمة السر">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" style="background: #dec719">تسجيل</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">اغلاق</button>

                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        $(document).ready(function() {

            $('#form').submit(function(event) {
                event.preventDefault(); // Prevent the form from submitting normally
                var csrfToken = $('meta[name="csrf-token"]').attr('content');
                // Get the form data
                var formData = {
                    s_name: $('#name').val(),
                    s_email: $('#email').val(),
                    s_mobile: $('#mobile').val(),
                    s_password: $('#password').val(),
                    _token: csrfToken
                };

                // Send the AJAX request
                $.ajax({
                    url: "{{ route('register') }}",
                    method: 'POST',
                    data: formData,
                    headers: {
                        'X-CSRF-TOKEN': csrfToken // Include the CSRF token in the request headers
                    },
                    success: function(response) {
                        // Code to handle successful response
                        console.log(response);
                        $('#form')[0].reset();
                        $('#exampleModa2').modal('show');

                    },
                    error: function(xhr, status, error) {
                        // Code to handle error
                        console.log(status + ': ' + error);
                    }
                });
            });
            $('#go_home').on('click', function() {
                window.location.href = "{{ route('home') }}";
            });
        });
    </script>
@endpush
