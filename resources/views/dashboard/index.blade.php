@extends('layout.estrutura.inicio')

@section('content')
<!--Begin::Row-->
<div class="row">
    <div class="col-lg-6 col-xl-4 order-lg-1 order-xl-1">

        <!--begin:: Widgets/Trends-->
        <div class="kt-portlet kt-portlet--head--noborder kt-portlet--height-fluid">
            <div class="kt-portlet__head kt-portlet__head--noborder">
                <div class="kt-portlet__head-label">
                    <h3 class="kt-portlet__head-title">
                        Trends
                    </h3>
                </div>
                <div class="kt-portlet__head-toolbar">
                    <div class="dropdown dropdown-inline">
                        <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-lg" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="flaticon-more-1"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <ul class="kt-nav">
                                <li class="kt-nav__item">
                                    <a href="#" class="kt-nav__link">
                                        <i class="kt-nav__link-icon flaticon2-line-chart"></i>
                                        <span class="kt-nav__link-text">Reports</span>
                                    </a>
                                </li>
                                <li class="kt-nav__item">
                                    <a href="#" class="kt-nav__link">
                                        <i class="kt-nav__link-icon flaticon2-send"></i>
                                        <span class="kt-nav__link-text">Messages</span>
                                    </a>
                                </li>
                                <li class="kt-nav__item">
                                    <a href="#" class="kt-nav__link">
                                        <i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
                                        <span class="kt-nav__link-text">Charts</span>
                                    </a>
                                </li>
                                <li class="kt-nav__item">
                                    <a href="#" class="kt-nav__link">
                                        <i class="kt-nav__link-icon flaticon2-avatar"></i>
                                        <span class="kt-nav__link-text">Members</span>
                                    </a>
                                </li>
                                <li class="kt-nav__item">
                                    <a href="#" class="kt-nav__link">
                                        <i class="kt-nav__link-icon flaticon2-settings"></i>
                                        <span class="kt-nav__link-text">Settings</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="kt-portlet__body kt-portlet__body--fluid kt-portlet__body--fit">
                <div class="kt-widget4 kt-widget4--sticky">
                    <div class="kt-widget4__chart">
                        <canvas id="kt_chart_trends_stats" style="height: 240px;"></canvas>
                    </div>
                    <div class="kt-widget4__items kt-widget4__items--bottom kt-portlet__space-x kt-margin-b-20">
                        <div class="kt-widget4__item">
                            <div class="kt-widget4__img kt-widget4__img--logo">
                                <img src="assets/media/client-logos/logo3.png" alt="">
                            </div>
                            <div class="kt-widget4__info">
                                <a href="#" class="kt-widget4__title">
                                    Phyton
                                </a>
                                <span class="kt-widget4__sub">
                                    A Programming Language
                                </span>
                            </div>
                            <span class="kt-widget4__ext">
                                <span class="kt-widget4__number kt-font-danger">+$17</span>
                            </span>
                        </div>
                        <div class="kt-widget4__item">
                            <div class="kt-widget4__img kt-widget4__img--logo">
                                <img src="assets/media/client-logos/logo1.png" alt="">
                            </div>
                            <div class="kt-widget4__info">
                                <a href="#" class="kt-widget4__title">
                                    FlyThemes
                                </a>
                                <span class="kt-widget4__sub">
                                    A Let's Fly Fast Again Language
                                </span>
                            </div>
                            <span class="kt-widget4__ext">
                                <span class="kt-widget4__number kt-font-danger">+$300</span>
                            </span>
                        </div>
                        <div class="kt-widget4__item">
                            <div class="kt-widget4__img kt-widget4__img--logo">
                                <img src="assets/media/client-logos/logo2.png" alt="">
                            </div>
                            <div class="kt-widget4__info">
                                <a href="#" class="kt-widget4__title">
                                    AirApp
                                </a>
                                <span class="kt-widget4__sub">
                                    Awesome App For Project Management
                                </span>
                            </div>
                            <span class="kt-widget4__ext">
                                <span class="kt-widget4__number kt-font-danger">+$6700</span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--end:: Widgets/Trends-->
    </div>
    <div class="col-lg-6 col-xl-4 order-lg-1 order-xl-1">

        <!--begin:: Widgets/Sales Stats-->
        <div class="kt-portlet kt-portlet--head--noborder kt-portlet--height-fluid">
            <div class="kt-portlet__head kt-portlet__head--noborder">
                <div class="kt-portlet__head-label">
                    <h3 class="kt-portlet__head-title">
                        Sales Stats
                    </h3>
                </div>
                <div class="kt-portlet__head-toolbar">
                    <div class="dropdown dropdown-inline">
                        <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-lg" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="flaticon-more-1"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <ul class="kt-nav">
                                <li class="kt-nav__section kt-nav__section--first">
                                    <span class="kt-nav__section-text">Finance</span>
                                </li>
                                <li class="kt-nav__item">
                                    <a href="#" class="kt-nav__link">
                                        <i class="kt-nav__link-icon flaticon2-graph-1"></i>
                                        <span class="kt-nav__link-text">Statistics</span>
                                    </a>
                                </li>
                                <li class="kt-nav__item">
                                    <a href="#" class="kt-nav__link">
                                        <i class="kt-nav__link-icon flaticon2-calendar-4"></i>
                                        <span class="kt-nav__link-text">Events</span>
                                    </a>
                                </li>
                                <li class="kt-nav__item">
                                    <a href="#" class="kt-nav__link">
                                        <i class="kt-nav__link-icon flaticon2-layers-1"></i>
                                        <span class="kt-nav__link-text">Reports</span>
                                    </a>
                                </li>
                                <li class="kt-nav__section">
                                    <span class="kt-nav__section-text">Customers</span>
                                </li>
                                <li class="kt-nav__item">
                                    <a href="#" class="kt-nav__link">
                                        <i class="kt-nav__link-icon flaticon2-calendar-4"></i>
                                        <span class="kt-nav__link-text">Notifications</span>
                                    </a>
                                </li>
                                <li class="kt-nav__item">
                                    <a href="#" class="kt-nav__link">
                                        <i class="kt-nav__link-icon flaticon2-file-1"></i>
                                        <span class="kt-nav__link-text">Files</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="kt-portlet__body">

                <!--begin::Widget 6-->
                <div class="kt-widget15">
                    <div class="kt-widget15__chart">
                        <canvas id="kt_chart_sales_stats" style="height:160px;"></canvas>
                    </div>
                    <div class="kt-widget15__items kt-margin-t-40">
                        <div class="row">
                            <div class="col">
                                <div class="kt-widget15__item">
                                    <span class="kt-widget15__stats">
                                        63%
                                    </span>
                                    <span class="kt-widget15__text">
                                        Sales Grow
                                    </span>
                                    <div class="kt-space-10"></div>
                                    <div class="progress kt-widget15__chart-progress--sm">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="kt-widget15__item">
                                    <span class="kt-widget15__stats">
                                        54%
                                    </span>
                                    <span class="kt-widget15__text">
                                        Orders Grow
                                    </span>
                                    <div class="kt-space-10"></div>
                                    <div class="progress kt-progress--sm">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 40%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="kt-widget15__item">
                                    <span class="kt-widget15__stats">
                                        41%
                                    </span>
                                    <span class="kt-widget15__text">
                                        Profit Grow
                                    </span>
                                    <div class="kt-space-10"></div>
                                    <div class="progress kt-progress--sm">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 55%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="kt-widget15__item">
                                    <span class="kt-widget15__stats">
                                        79%
                                    </span>
                                    <span class="kt-widget15__text">
                                        Member Grow
                                    </span>
                                    <div class="kt-space-10"></div>
                                    <div class="progress kt-progress--sm">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 60%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="kt-widget15__desc">
                                    * lorem ipsum dolor sit amet consectetuer sediat elit
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--end::Widget 6-->
            </div>
        </div>

        <!--end:: Widgets/Sales Stats-->
    </div>

</div>
@endsection
