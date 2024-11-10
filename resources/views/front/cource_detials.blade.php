@extends('front.layouts')
@push('styles')
    <style>
        .tap-cont {
            margin-top: 50px;
            margin-bottom: 50px;
        }
    </style>
@endpush
@section('content')
    <div class="container margincorss">
        <div class="Career_div_corssss">
            <div class="Career_card_div_corss">
                <img class="card_imgs_corss" src="{{ asset($cource->s_cover) }}" alt="">
            </div>
        </div>
    </div>
    <div class="cards_content">
        <div class="container">
            <div style="row-gap: 20px;" class="row justify-content-between ">
                <div class="col-lg-8 col-sm-12">
                    <div class="news_date_row">
                    </div>
                    <div class="heading-heading-h6-bold_corsses">{{ $cource->s_title }}
                    </div>
                    <div class="base-light">
                         {!! $cource->s_description !!}
                    </div>
                    <div>
                    </div>
                    <div>
                        <div class="Sections_department ">
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-12">
                    <div class="detials">
                        <p class="Share_this_news_p"> بيانات التواصل</p>
                        <div style="  justify-content: start !important;" class="social-list">
                            <a class="social-item" href="https://www.tiktok.com/@sujoodzumba?_t=8pTRreJjrFA&_r=1"
                                target="_blank"><i class="fab fa-tiktok"></i></a>
                            <a class="social-item" href="https://www.instagram.com/sujood_zumba?igsh=ZzlpZTg5emhiY2Nw"
                                target="_blank"><i class="fab fa-instagram"></i></a>
                            <a class="social-item" href="https://www.facebook.com/sujood.zumba1?mibextid=ZbWKwL"
                                target="_blank"><i class="fab fa-facebook-f"></i></a>
                            <a class="social-item" href="https://youtube.com/@sujood_zumba?si=nmekapB39Nj0YYIY"
                                target="_blank"><i class="fab fa-fw fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            @if($vedios->count() > 0)
             <div style="margin-top: 2rem;" class="heading-heading-h6-bold_corsses"> الفيديوهات
            </div>
                <div style="margin-top: 2rem;" class="row">
                @foreach ($vedios as $vedio)
                @forelse($subscriptions as $subscription)
                    <div class=" col-lg-4 col-md-6 col-sl-6">
                        <a href="{{ asset($subscription->fk_i_vedio_id ==$vedio->pk_i_id ? $vedio->s_vedio : '') }}" data-fancybox="gallery"
                            data-caption="{{ $vedio->s_title }}">
                            <figure class="Videos_figure Videos_figure_s">
                                <img class="Videos_img_s" src="{{ asset($vedio->s_cover) }}" alt="">
                                <div class="image-text">
                                    <svg class="svg_vdieo_style" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="97" height="97"
                                        viewBox="0 0 97 97">
                                        <defs>
                                            <filter id="Mask" x="0" y="0" width="97" height="97"
                                                filterUnits="userSpaceOnUse">
                                                <feOffset dy="8" input="SourceAlpha"></feOffset>
                                                <feGaussianBlur stdDeviation="8" result="blur"></feGaussianBlur>
                                                <feFlood flood-color="#0f0f0f" flood-opacity="0.2"></feFlood>
                                                <feComposite operator="in" in2="blur"></feComposite>
                                                <feComposite in="SourceGraphic"></feComposite>
                                            </filter>
                                        </defs>
                                        <g id="Group_66641" data-name="Group 66641"
                                            transform="translate(-4033.416 1447.5)">
                                            <g transform="matrix(1, 0, 0, 1, 4033.42, -1447.5)" filter="url(#Mask)">
                                                <rect id="Mask-2" data-name="Mask" width="48" height="48"
                                                    rx="24" transform="translate(24.5 16.5)" fill="none"
                                                    stroke="rgba(255,255,255,0.5)" stroke-width="1"></rect>
                                            </g>
                                            <circle id="Ellipse_11726" data-name="Ellipse 11726" cx="20"
                                                cy="20" r="20" transform="translate(4061.916 -1427)"
                                                fill="#fff" stroke="#fff" stroke-width="1"></circle>
                                            <g id="Group_66494" data-name="Group 66494"
                                                transform="translate(4076.729 -1414.166)">
                                                <path id="Path_55008" data-name="Path 55008"
                                                    d="M246.161,178.833v-5.746a1.944,1.944,0,0,1,2.915-1.684l4.977,2.873,4.976,2.873a1.944,1.944,0,0,1,0,3.366l-4.976,2.873-4.977,2.873a1.943,1.943,0,0,1-2.915-1.684Z"
                                                    transform="translate(-246.161 -171.14)" fill="#151515"></path>
                                            </g>
                                        </g>
                                    </svg>
                                    <div>
                                        <p class="video_topic_p_s"> {{ $vedio->s_title }}</p>
                                        <p class="video_des_p_s"> Danza Kuduro </p>
                                    </div>
                                </div>
                            </figure>
                        </a>
                        <div class="mr-3">
                        @if($subscription->fk_i_vedio_id == $vedio->pk_i_id)
                                <a class="coorss_dawnlood_button" href="{{ asset($vedio->s_vedio) }}"
                                download="{{ asset($vedio->s_vedio) }}">
                                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960"
                                    width="24px" fill="CurrentColor">
                                    <path
                                        d="M480-320 280-520l56-58 104 104v-326h80v326l104-104 56 58-200 200ZM240-160q-33 0-56.5-23.5T160-240v-120h80v120h480v-120h80v120q0 33-23.5 56.5T720-160H240Z" />
                                </svg>
                                تحميل الفيديو
                                </a>
                                @if ($vedio->music)
                                    <a class="coorss_dawnlood_button" href="{{ asset($vedio->music->s_music) }}"
                                        download="{{ asset($vedio->music->s_music) }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960"
                                            width="24px" fill="CurrentColor">
                                            <path
                                                d="M480-320 280-520l56-58 104 104v-326h80v326l104-104 56 58-200 200ZM240-160q-33 0-56.5-23.5T160-240v-120h80v120h480v-120h80v120q0 33-23.5 56.5T720-160H240Z" />
                                        </svg>
                                        تحميل الأغنية
                                    </a>
                                @endif
                        @else
                            <button type="button"class="coorss_button" data-bs-toggle="modal"
                                data-bs-target="#exampleModal{{ $vedio->pk_i_id }}">
                                اشترك بالفديو
                            </button>
                        @endif

                        </div>
                    </div>
                    <div class="modal fade" id="exampleModal{{ $vedio->pk_i_id }}" tabindex="-1"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog ">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel"> اختار وسيلة الدفع</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="bd-example bd-example-tabs">
                                        <div>
                                            <ul class="nav nav-pills">
                                                <li class="nav-item">
                                                    <a class="nav-link active " data-toggle="pill" href="#menu0">
                                                        الدفع كاش </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="pill" href="#menu1">
                                                        الحساب البنكي </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="pill" href="#menu2">
                                                        الدفع عن طريق paypal </a>
                                                </li>
                                            </ul>
                                            <div class="tab-content">
                                                <div id="menu0" class="tab-pane fade show active">
                                                    <div class="tap-cont">
                                                        <div class="steps">
                                                            <h4> الخطوات للاشتراك بالفيديوهات :</h4>
                                                            <ul>
                                                                <li>أولا : التسجيل بالموقع</li>
                                                                <li>ثانيا : تسجيل الدخول</li>
                                                                <li>يمكن الاشتراك بالكورس أو الفيديوهات لتتمكن مش مشاهدة
                                                                    الفيديوهات وتحميلها</li>
                                                                <li>سعر الفيديو : 60 شيكل</li>
                                                            </ul>
                                                        </div>

                                                        اذا كنت ترغب في الدفع عن طريق الكاش يمكن تقديم طلب
                                                        الاشتراك من هنا ومن ثم مراجعة
                                                        <span style="color:#dec719">
                                                            سجود
                                                        </span>
                                                    </div>
                                                    <form action="{{ route('front.subscription') }}" method="post">
                                                        @csrf
                                                        <input type="hidden" value="{{ $vedio->pk_i_id }}"
                                                            name="vedio_id">
                                                        <input type="hidden" value="cash" name="gateway">
                                                        <button type="submit"class="coorss_button">
                                                            قم بتقديم طلب اشتراك
                                                        </button>
                                                    </form>

                                                </div>
                                                <div id="menu1" class="tab-pane fade">
                                                    <div class="tap-cont">
                                                        <div class="steps">
                                                            <h4> الخطوات للاشتراك بالفيديوهات :</h4>
                                                            <ul>
                                                                <li>أولا : التسجيل بالموقع</li>
                                                                <li>ثانيا : تسجيل الدخول</li>
                                                                <li>يمكن الاشتراك بالكورس أو الفيديوهات لتتمكن مش مشاهدة
                                                                    الفيديوهات وتحميلها</li>
                                                                <li>سعر الفيديو : 60 شيكل</li>
                                                            </ul>
                                                        </div>
                                                        <i>
                                                            اذا كنت ترغب في الدفع عن طريق الحساب البنكي يمكن تقديم
                                                            طلب
                                                            الاشتراك من هنا ومن ثم مراجعة
                                                            <span style="color:#dec719">
                                                                سجود
                                                            </span>
                                                        </i>
                                                    </div>
                                                    <form action="{{ route('front.subscription') }}" method="post">
                                                        @csrf
                                                        <input type="hidden" value="{{ $vedio->pk_i_id }}"
                                                            name="vedio_id">
                                                        <input type="hidden" value="visa" name="gateway">
                                                        <button type="submit"class="coorss_button">
                                                            قم بتقديم طلب اشتراك
                                                        </button>
                                                    </form>
                                                </div>
                                                <div id="menu2" class="tab-pane fade">
                                                    <div class="tap-cont">
                                                        <div class="steps">
                                                            <h4> الخطوات للاشتراك بالفيديوهات :</h4>
                                                            <ul>
                                                                <li>أولا : التسجيل بالموقع</li>
                                                                <li>ثانيا : تسجيل الدخول</li>
                                                                <li>يمكن الاشتراك بالكورس أو الفيديوهات لتتمكن مش مشاهدة
                                                                    الفيديوهات وتحميلها</li>
                                                                <li>سعر الفيديو : 60 شيكل</li>
                                                            </ul>
                                                        </div>
                                                        <i>
                                                            ألبوابة قيد التطوير
                                                        </i>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">

                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                 <div class=" col-lg-4 col-md-6 col-sl-6">
                        <a href="{{ asset($vedio->pk_i_id) }}" data-fancybox="gallery"
                            data-caption="{{ $vedio->s_title }}">
                            <figure class="Videos_figure Videos_figure_s">
                                <img class="Videos_img_s" src="{{ asset($vedio->s_cover) }}" alt="">
                                <div class="image-text">
                                    <svg class="svg_vdieo_style" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="97" height="97"
                                        viewBox="0 0 97 97">
                                        <defs>
                                            <filter id="Mask" x="0" y="0" width="97" height="97"
                                                filterUnits="userSpaceOnUse">
                                                <feOffset dy="8" input="SourceAlpha"></feOffset>
                                                <feGaussianBlur stdDeviation="8" result="blur"></feGaussianBlur>
                                                <feFlood flood-color="#0f0f0f" flood-opacity="0.2"></feFlood>
                                                <feComposite operator="in" in2="blur"></feComposite>
                                                <feComposite in="SourceGraphic"></feComposite>
                                            </filter>
                                        </defs>
                                        <g id="Group_66641" data-name="Group 66641"
                                            transform="translate(-4033.416 1447.5)">
                                            <g transform="matrix(1, 0, 0, 1, 4033.42, -1447.5)" filter="url(#Mask)">
                                                <rect id="Mask-2" data-name="Mask" width="48" height="48"
                                                    rx="24" transform="translate(24.5 16.5)" fill="none"
                                                    stroke="rgba(255,255,255,0.5)" stroke-width="1"></rect>
                                            </g>
                                            <circle id="Ellipse_11726" data-name="Ellipse 11726" cx="20"
                                                cy="20" r="20" transform="translate(4061.916 -1427)"
                                                fill="#fff" stroke="#fff" stroke-width="1"></circle>
                                            <g id="Group_66494" data-name="Group 66494"
                                                transform="translate(4076.729 -1414.166)">
                                                <path id="Path_55008" data-name="Path 55008"
                                                    d="M246.161,178.833v-5.746a1.944,1.944,0,0,1,2.915-1.684l4.977,2.873,4.976,2.873a1.944,1.944,0,0,1,0,3.366l-4.976,2.873-4.977,2.873a1.943,1.943,0,0,1-2.915-1.684Z"
                                                    transform="translate(-246.161 -171.14)" fill="#151515"></path>
                                            </g>
                                        </g>
                                    </svg>
                                    <div>
                                        <p class="video_topic_p_s"> {{ $vedio->s_title }}</p>
                                        <p class="video_des_p_s"> Danza Kuduro </p>
                                    </div>
                                </div>
                            </figure>
                        </a>
                        <div class="mr-3">
                            <button type="button"class="coorss_button" data-bs-toggle="modal"
                                data-bs-target="#exampleModal{{ $vedio->pk_i_id }}">
                                اشترك بالفديو
                            </button>
                        </div>
                    </div>
                    <div class="modal fade" id="exampleModal{{ $vedio->pk_i_id }}" tabindex="-1"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog ">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel"> اختار وسيلة الدفع</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="bd-example bd-example-tabs">
                                        <div>
                                            <ul class="nav nav-pills">
                                                <li class="nav-item">
                                                    <a class="nav-link active " data-toggle="pill" href="#menu0">
                                                        الدفع كاش </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="pill" href="#menu1">
                                                        الحساب البنكي </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="pill" href="#menu2">
                                                        الدفع عن طريق paypal </a>
                                                </li>
                                            </ul>
                                            <div class="tab-content">
                                                <div id="menu0" class="tab-pane fade show active">
                                                    <div class="tap-cont">
                                                        <div class="steps">
                                                            <h4> الخطوات للاشتراك بالفيديوهات :</h4>
                                                            <ul>
                                                                <li>أولا : التسجيل بالموقع</li>
                                                                <li>ثانيا : تسجيل الدخول</li>
                                                                <li>يمكن الاشتراك بالكورس أو الفيديوهات لتتمكن مش مشاهدة
                                                                    الفيديوهات وتحميلها</li>
                                                                <li>سعر الفيديو : 60 شيكل</li>
                                                            </ul>
                                                        </div>

                                                        اذا كنت ترغب في الدفع عن طريق الكاش يمكن تقديم طلب
                                                        الاشتراك من هنا ومن ثم مراجعة
                                                        <span style="color:#dec719">
                                                            سجود
                                                        </span>
                                                    </div>
                                                    <form action="{{ route('front.subscription') }}" method="post">
                                                        @csrf
                                                        <input type="hidden" value="{{ $vedio->pk_i_id }}"
                                                            name="vedio_id">
                                                        <input type="hidden" value="cash" name="gateway">
                                                        <button type="submit"class="coorss_button">
                                                            قم بتقديم طلب اشتراك
                                                        </button>
                                                    </form>

                                                </div>
                                                <div id="menu1" class="tab-pane fade">
                                                    <div class="tap-cont">
                                                        <div class="steps">
                                                            <h4> الخطوات للاشتراك بالفيديوهات :</h4>
                                                            <ul>
                                                                <li>أولا : التسجيل بالموقع</li>
                                                                <li>ثانيا : تسجيل الدخول</li>
                                                                <li>يمكن الاشتراك بالكورس أو الفيديوهات لتتمكن مش مشاهدة
                                                                    الفيديوهات وتحميلها</li>
                                                                <li>سعر الفيديو : 60 شيكل</li>
                                                            </ul>
                                                        </div>
                                                        <i>
                                                            اذا كنت ترغب في الدفع عن طريق الحساب البنكي يمكن تقديم
                                                            طلب
                                                            الاشتراك من هنا ومن ثم مراجعة
                                                            <span style="color:#dec719">
                                                                سجود
                                                            </span>
                                                        </i>
                                                    </div>
                                                    <form action="{{ route('front.subscription') }}" method="post">
                                                        @csrf
                                                        <input type="hidden" value="{{ $vedio->pk_i_id }}"
                                                            name="vedio_id">
                                                        <input type="hidden" value="visa" name="gateway">
                                                        <button type="submit"class="coorss_button">
                                                            قم بتقديم طلب اشتراك
                                                        </button>
                                                    </form>
                                                </div>
                                                <div id="menu2" class="tab-pane fade">
                                                    <div class="tap-cont">
                                                        <div class="steps">
                                                            <h4> الخطوات للاشتراك بالفيديوهات :</h4>
                                                            <ul>
                                                                <li>أولا : التسجيل بالموقع</li>
                                                                <li>ثانيا : تسجيل الدخول</li>
                                                                <li>يمكن الاشتراك بالكورس أو الفيديوهات لتتمكن مش مشاهدة
                                                                    الفيديوهات وتحميلها</li>
                                                                <li>سعر الفيديو : 60 شيكل</li>
                                                            </ul>
                                                        </div>
                                                        <i>
                                                            ألبوابة قيد التطوير
                                                        </i>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">

                                </div>
                            </div>
                        </div>
                    </div>
                @endforelse
                <div class="modal fade" id="exampleModalCouece{{ $cource->pk_i_id }}" tabindex="-1"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog ">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel"> اختار وسيلة الدفع</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="bd-example bd-example-tabs">
                                <div>
                                    <ul class="nav nav-pills" id="courceTab">
                                        <li class="nav-item">
                                            <a class="nav-link active " data-toggle="pill" href="#menuc0">
                                                الدفع كاش </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="pill" href="#menuc1">
                                                الحساب البنكي </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="pill" href="#menuc2">
                                                الدفع عن طريق paypal </a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <div id="menuc0" class="tab-pane fade show active">
                                            <div class="tap-cont">
                                                <div class="steps">
                                                    <h4> الخطوات للاشتراك بالكورس كامل :</h4>
                                                    <ul>
                                                        <li>أولا : التسجيل بالموقع</li>
                                                        <li>ثانيا : تسجيل الدخول</li>
                                                        <li>يمكن الاشتراك بالكورس أو الفيديوهات لتتمكن مش مشاهدة
                                                            الفيديوهات وتحميلها</li>
                                                        <li>سعر الكورس : {{ $cource->vedios->count() * 50 }} شيكل</li>
                                                    </ul>
                                                </div>

                                                اذا كنت ترغب في الدفع عن طريق الكاش يمكن تقديم طلب
                                                الاشتراك من هنا ومن ثم مراجعة
                                                <span style="color:#dec719">
                                                    سجود
                                                </span>
                                            </div>
                                            <form action="{{ route('front.subscription') }}" method="post">
                                                @csrf
                                                <input type="hidden" value="cash" name="gateway">
                                                <input type="hidden" value="{{ $cource->pk_i_id }}" name="cource_id">
                                                <button type="submit"class="coorss_button">
                                                    قم بتقديم طلب اشتراك
                                                </button>
                                            </form>

                                        </div>
                                        <div id="menuc1" class="tab-pane fade">
                                            <div class="tap-cont">
                                                <div class="steps">
                                                    <h4> الخطوات للاشتراك بالفيديوهات :</h4>
                                                    <ul>
                                                        <li>أولا : التسجيل بالموقع</li>
                                                        <li>ثانيا : تسجيل الدخول</li>
                                                        <li>يمكن الاشتراك بالكورس أو الفيديوهات لتتمكن مش مشاهدة
                                                            الفيديوهات وتحميلها</li>
                                                        <li>سعر الكورس : {{ $cource->vedios->count() * 50 }} شيكل</li>
                                                    </ul>
                                                </div>
                                                <i>
                                                    اذا كنت ترغب في الدفع عن طريق الحساب البنكي يمكن تقديم
                                                    طلب
                                                    الاشتراك من هنا ومن ثم مراجعة
                                                    <span style="color:#dec719">
                                                        سجود
                                                    </span>
                                                </i>
                                            </div>
                                            <form action="{{ route('front.subscription', $vedio->pk_i_id) }}"
                                                method="post">
                                                @csrf
                                                <input type="hidden" value="visa" name="gateway">
                                                <input type="hidden" value="{{ $cource->pk_i_id }}" name="cource_id">
                                                <button type="submit"class="coorss_button">
                                                    قم بتقديم طلب اشتراك
                                                </button>
                                            </form>
                                        </div>
                                        <div id="menuc2" class="tab-pane fade">
                                            <div class="tap-cont">
                                                <div class="steps">
                                                    <h4> الخطوات للاشتراك بالفيديوهات :</h4>
                                                    <ul>
                                                        <li>أولا : التسجيل بالموقع</li>
                                                        <li>ثانيا : تسجيل الدخول</li>
                                                        <li>يمكن الاشتراك بالكورس أو الفيديوهات لتتمكن مش مشاهدة
                                                            الفيديوهات وتحميلها</li>
                                                        <li>سعر الكورس : {{ $cource->vedios->count() * 50 }} شيكل</li>
                                                    </ul>
                                                </div>
                                                <i>
                                                    ألبوابة قيد التطوير
                                                </i>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">

                        </div>
                    </div>
                </div>
            </div>
                @endforeach
            </div>
            <div style="margin-top: 70px;">
                <button class="coorss_button" data-bs-toggle="modal"
                    data-bs-target="#exampleModalCouece{{ $cource->pk_i_id }}">اشترك بالكورس كامل</button>
            </div>

            @endif


        </div>



    </div>
    </div>
    <!--///////////////////start-Career ///////////////////////-->

    </div>
@endsection
@push('scripts')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        $('.nav-pills a').on('click', function(event) {
            event.preventDefault()
            $(this).tab('show')
        })
        $('#courceTab a').on('click', function(event) {
            event.preventDefault()
            $(this).tab('show')
        })
    </script>
@endpush
