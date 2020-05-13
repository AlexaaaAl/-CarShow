@extends('main')

@section('title','Categories')

@section('custom_css')
    <link rel="stylesheet" type="text/css" href="/styles/contact.css">
    <link rel="stylesheet" type="text/css" href="/styles/contact_responsive.css">
@endsection
@section('custom_js')
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
                                        <li>Categories</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <p><p>
        <!-- Ad -->
    @foreach($cat as $cat)
    <div class="avds_xl">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="avds_xl_container clearfix">
                        <div class="avds_xl_background" style="background-image:url(/images/{{$cat->img}})"></div>
                        <div class="avds_xl_content">
                            <div class="avds_title">{{$cat->title}}</div>
                            <div class="avds_text">{{$cat->sketch}}</div>
                            <div class="avds_link avds_xl_link"><a href="/category/{{$cat->title}}">Посмотреть модели</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <p></p>
    @endforeach
    <!-- Newsletter -->

    <div class="newsletter">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="newsletter_border"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="newsletter_content text-center">
                        <div class="newsletter_title">Остались вопросы?</div>
                        <div class="newsletter_text"><p>Свяжитесь с нами , и мы обязательно ответим в течение суток!</p></div>
                        <div class="newsletter_form_container">
                            <form action="http://blog/contact" id="newsletter_form" class="newsletter_form">

                                <button class="newsletter_button trans_200"><span>Связаться</span></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
