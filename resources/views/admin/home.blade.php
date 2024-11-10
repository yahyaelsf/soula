@extends('admin.layouts.dashboard')
@section('content')
   <div class="kt-portlet__body kt-portlet__body--fit">
        <div class="kt-widget17">
            <div class="kt-widget17__visual kt-widget17__visual--chart kt-portlet-fit--top kt-portlet-fit--sides" style="background-color: #dec719">
                <div class="kt-widget17__chart" style="height:100px;"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                    <canvas id="kt_chart_activities" width="488" height="216" class="chartjs-render-monitor" style="display: block; width: 488px; height: 216px;"></canvas>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="kt-widget17__stats" style="margin-bottom: 20px">
                        <div class="kt-widget17__items">

                            <div class="kt-widget17__item">
                                <a href="{{route('admin.cources.index')}}">
															<span class="kt-widget17__icon">
																<i class="fa fa-envelope-open-text"></i> </span>
                                    <span class="kt-widget17__subtitle">
																عدد الكورسات
															</span>
                                    <span class="kt-widget17__desc">
															{{$cources}}
															</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="kt-widget17__stats" style="margin-bottom: 20px">
                        <div class="kt-widget17__items">

                            <div class="kt-widget17__item">
                                <a href="{{route('admin.vedios.index')}}">
															<span class="kt-widget17__icon">
																<i class="fa fa-envelope-open-text"></i> </span>
                                    <span class="kt-widget17__subtitle">
																عدد الفيديوهات
															</span>
                                    <span class="kt-widget17__desc">
															{{$vedios}}
															</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="kt-widget17__stats" style="margin-bottom: 20px">
                        <div class="kt-widget17__items">

                            <div class="kt-widget17__item">
                                <a href="{{route('admin.users.index')}}">
															<span class="kt-widget17__icon">
																<i class="fa fa-envelope-open-text"></i> </span>
                                    <span class="kt-widget17__subtitle">
																عدد المستخدمين
															</span>
                                    <span class="kt-widget17__desc">
															{{$users}}
															</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="kt-widget17__stats" style="margin-bottom: 20px">
                        <div class="kt-widget17__items">

                            <div class="kt-widget17__item">
                                <a href="{{route('admin.users.index')}}">
															<span class="kt-widget17__icon">
																<i class="fa fa-envelope-open-text"></i> </span>
                                    <span class="kt-widget17__subtitle">
																عدد المشتركين
															</span>
                                    <span class="kt-widget17__desc">
															{{$subscriptions}}
															</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
