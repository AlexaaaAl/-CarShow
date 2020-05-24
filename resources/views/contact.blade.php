@extends('main')

@section('title','Categories')

@section('custom_css')
<link rel="stylesheet" type="text/css" href="/styles/contact.css">
<link rel="stylesheet" type="text/css" href="/styles/contact_responsive.css">
@endsection
@section('custom_js')
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
<script src="/js/contact.js"></script>
@endsection


@section('content')
<!-- Home -->

<div class="home">
    <div class="home_container">
        <div class="home_background" style="background-image:url(images/contact.jpg)"></div>
        <div class="home_content_container">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="home_content">
                            <div class="breadcrumbs">
                                <ul>
                                    <li><a href="/">Home</a></li>
                                    <li>Contact</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Contact -->

<div class="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-xl-1 contact_col text-center newsletter_title ">
                Контактная информация дилерского центра ООО ''Автолидер''

                Автоцентр ООО "Автолидер"  расположен по адресу: г.Росстов-на-Дону, ул.Таганрогская, 211,

                тел.8(863) 309 21 40 (многоканальный).

                Мы работаем без перерывов и выходных: пн-сб с 8:00 до 20:00, вс - с 8:00 до 20:00.

                «Авто-Ревю» — мы делаем комфортное движение доступным! Мы дорожим каждым клиентом!

            </div>

            <!-- Contact Info -->
            <div class="col-lg-3 offset-xl-1 contact_col">

                <div class="contact_info_section">
                    <div class="contact_info_title">Реализация</div>
                    <ul>
                        <li>Phone: <span>8(863) 309 21 40</span></li>
                        <li>Email: <span>yourmail@gmail.com</span></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 offset-xl-1 contact_col">
                <div class="contact_info_section">
                    <div class="contact_info_title">Доставка И Возврат Товара</div>
                    <ul>
                        <li>Phone: <span>8(863) 309 21 40</span></li>
                        <li>Email: <span>yourmail@gmail.com</span></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 offset-xl-1 contact_col">
                <div class="contact_info_section">
                    <div class="contact_info_title">Справка</div>
                    <ul>
                        <li>Phone: <span>8(863) 309 21 40</span></li>
                        <li>Email: <span>yourmail@gmail.com</span></li>
                    </ul>
                </div>
            </div>

        </div>
        <div class="row map_row">
            <div class="col">

                <!-- Google Map -->
                <div class="map">
                    <div id="google_map" class="google_map">
                        <div class="map_container">
                            <div id="map"></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection
