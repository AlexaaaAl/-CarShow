@extends('main')

@section('title','Car')

@section('custom_css')
<link rel="stylesheet" type="text/css" href="/styles/product.css">
<link rel="stylesheet" type="text/css" href="/styles/product_responsive.css">
@endsection
@section('custom_js')
<script src="/js/product.js"></script>
@endsection

@section('content')
<!-- Home -->

<div class="home">
    <div class="home_container">
        <div class="home_background" style="background-image:url(/images/home_slider_2.jpg)"></div>
        <div class="home_content_container">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="home_content">
                            <div class="home_title"><span>{{$item->category->title}}</span></div>
                            <div class="home_text"><p>{{$item->category->sketch}}</p></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Product Details -->
<div>

</div>
<div class="product_details">
    <div class="container">
        <div class="row details_row">

            <!-- Product Image -->
            <div class="col-lg-6">
                <div class="details_image">
                    <div class="details_image_large"><img src="/images/{{$item->images[0]['img']}}" alt=""><div class="product_extra product_new"><a href="categories.html">New</a></div></div>
                    <div class="details_image_thumbnails d-flex flex-row align-items-start justify-content-between">
                        @foreach($item->images as $images)
                        
                        <!-- Product -->
                        <div class="details_image_thumbnail active" data-image="/images/{{$images->img}} "><img src="/images/{{$images->img}}" alt=""></div>
                        @endforeach

                    </div>
                </div>
            </div>

            <!-- Product Content -->
            <div class="col-lg-6">
                <div class="details_content">
                    <div class="details_name">{{$item->category->title}} {{$item->title}}</div>
                    <div class="details_discount">{{$item->price}}</div>
                    <div class="details_price">{{$item->new_price}}</div>

                    <!-- In Stock -->
                    <div class="in_stock_container">
                        <div class="availability">Availability:</div>
                        <span>In Stock</span>
                    </div>
                    <div class="details_text">
                        <p>{{$item->description}}</p>
                    </div>

                    <!-- Product Quantity -->
                    <div class="product_quantity_container">

                        <div class="button cart_button"><a href="#">Оформить завку</a></div>
                    </div>

                    <!-- Share -->
                    <div class="details_share">
                        <span>Share:</span>
                        <ul>
                            <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        </ul>
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
                        <form action="http://carshow/contact" id="newsletter_form" class="newsletter_form">
                            
                            <button class="newsletter_button trans_200"><span>Связаться</span></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
