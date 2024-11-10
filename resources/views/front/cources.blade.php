@extends('front.layouts')
@section('content')
    <!--///////////////////start-Career ///////////////////////-->
    <div class="main_Career">
        <div class="container marginffff">
            <div class="Career_div">
                <div id="servises" class="Career_manegment">
                    <div class="Career_content">
                        <div>

                        </div>

                        <div class="services-section-text">
                            <h1 class="heading-1">الكورسات </h1>
                            <div class="paragraph-2">احدث الكورسات التي تقدمها <span style="color:#dec719 ;">سجود</span></div>
                        </div>
                        <!-- <a style="margin-top: 50px; width: 150px;" class="contact_as_but" type="submit">
                      انضم لنا  <img src="https://uploads-ssl.webflow.com/63b47a4f00ab98da785b4d1e/63b47dc13b5bb3e4f1906f7a_Arrow%20Left.svg" loading="lazy" alt="" class="icon"></a> -->
                    </div>
                </div>
                <div class="container">
                    <div class="row justify-content-between row_Career_control row_ggap_Career">
                        @foreach ($cources as $cource)
                            <a href="{{ route('cource.detials', $cource->pk_i_id) }}"
                                class="col-lg-4 col-md-12 col-sm-12 vfvf">
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
                </div>
            </div>
        </div>
    </div>

    <!--///////////////////start-Career ///////////////////////-->

    </div>
@endsection
