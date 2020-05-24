@extends('main')

@section('title','Categories')

@section('custom_css')
    <link rel="stylesheet" type="text/css" href="/styles/categories.css">
    <link rel="stylesheet" type="text/css" href="/styles/categories_responsive.css">
@endsection
@section('custom_js')
    <script src="/js/categories.js"></script>
@endsection


@section('content')
    <!-- Home -->

    <div class="home">
        <div class="home_container">
            <div class="home_background" style="background-image:url(/images/{{$category->img}})"></div>
            <div class="home_content_container">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="home_content">
                                <div class="home_title">{{$category->title}}<span>.</span></div>
                                <div class="home_text"><p>{{$category->description}}</p></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Products -->

    <div class="products">
        <div class="container">
            <div class="row">
                <div class="col">


                </div>
            </div>
            <div class="row">
                <div class="col">

                    <div class="product_grid">

                        <!-- Product -->
                    @foreach($category->cars as $cars)
                    @php
                            
                            //dd($cars->images[0]['img']);
                             // @foreach($category->cars as $cars) 
                        @endphp
                        <!-- Product -->
                        <div class="product">
                            <div class="product_image"><img src="/images/{{$cars->images[0]['img']}}" alt=""></div>

                            <div class="product_content">
                                <div class="product_title"><a href="{{$cars->category->title}}/{{$cars->id}}">{{$cars->title}}</a></div>
                                <div class="product_price">${{$cars->price}}</div>
                            </div>
                        </div>
                        @endforeach


                    </div>
                    <div class="product_pagination">
                        <ul>
                            <li class="active"><a href="#">01.</a></li>
                            <li><a href="#">02.</a></li>
                            <li><a href="#">03.</a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- Icon Boxes -->

    <div class="icon_boxes">
        <div class="container">
            <div class="row icon_box_row">

                <!-- Icon Box -->
                <div class="col-lg-4 icon_box_col">
                    <div class="icon_box">
                        <div class="icon_box_image"><img src="/images/icon_1.svg" alt=""></div>
                        <div class="icon_box_title">Диллеры всегда рядом</div>
                        <div class="icon_box_text">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a ultricies metus. Sed nec molestie.</p>
                        </div>
                    </div>
                </div>

                <!-- Icon Box -->
                <div class="col-lg-4 icon_box_col">
                    <div class="icon_box">
                        <div class="icon_box_image"><img src="/images/icon_2.svg" alt=""></div>
                        <div class="icon_box_title">Возможность обмена</div>
                        <div class="icon_box_text">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a ultricies metus. Sed nec molestie.</p>
                        </div>
                    </div>
                </div>

                <!-- Icon Box -->
                <div class="col-lg-4 icon_box_col">
                    <div class="icon_box">
                        <div class="icon_box_image"><img src="/images/icon_3.svg" alt=""></div>
                        <div class="icon_box_title">24h Быстрая помощь</div>
                        <div class="icon_box_text">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a ultricies metus. Sed nec molestie.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


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
