@extends('client.layouts.master')

@section('title')
Chi tiết sản phẩm - {{ $product->name }}
@endsection

@section('content')
<!-- banner-2 -->
<div class="page-head_agile_info_w3l"></div>
<!-- //banner-2 -->
<!-- page -->
<div class="services-breadcrumb">
    <div class="agile_inner_breadcrumb">
        <div class="container">
            <ul class="w3_short">
                <li>
                    <a href="trangchu">Trang Chủ</a>
                    <i>|</i>
                </li>
                <li>{{ $product->name }}</li>
            </ul>
        </div>
    </div>
</div>
<!-- //page -->

<!-- Single Page -->
<div class="banner-bootom-w3-agileits py-5">
    <div class="container py-xl-4 py-lg-2">
        <!-- tittle heading -->
        <h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
            <span>S</span>ản
            <span>P</span>hẩm</h3>

        <!-- //tittle heading -->
        <div class="row">
            <div class="col-lg-5 col-md-8 single-right-left ">
                <div class="grid images_3_of_2">
                    <div class="flexslider">
                        <ul class="slides">
                            <li data-thumb="img/upload/product/{{ $product->image }}">
                                <div class="thumb-image">
                                    <img src="img/upload/product/{{ $product->image }}" data-imagezoom="true"
                                        class="img-fluid" alt="">
                                </div>
                            </li>
                            <li data-thumb="img/upload/product/{{ $product->image }}">
                                <div class="thumb-image">
                                    <img src="img/upload/product/{{ $product->image }}" data-imagezoom="true"
                                        class="img-fluid" alt="">
                                </div>
                            </li>
                            <li data-thumb="img/upload/product/{{ $product->image }}">
                                <div class="thumb-image">
                                    <img src="img/upload/product/{{ $product->image }}" data-imagezoom="true"
                                        class="img-fluid" alt="">
                                </div>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>

            <div class="col-lg-7 single-right-left simpleCart_shelfItem">
                <h3 class="mb-3">{{ $product->name }}</h3>
                <p class="mb-3">
                    @if($product->promotional > 0)
                    <span class="item_price">
                        {{ number_format($product->promotional) }}&nbsp;VND
                    </span>
                    <del class="mx-2 font-weight-light">
                        {{ number_format($product->price) }}&nbsp;VND
                    </del>
                    @else
                    <span class="item_price">
                        {{ number_format($product->price) }}&nbsp;VND
                    </span>
                    @endif

                    <label>Giao hàng miễn phí</label>
                </p>
                <div class="single-infoagile">
                    <ul>
                        <li class="mb-3">
                            Thanh toán sau khi giao hàng
                        </li>
                        <li class="mb-3">
                            Giao hàng sớm nhất có thể
                        </li>
                        <li class="mb-3">
                            Khuyến mãi từ 500.000 VNĐ/tháng
                        </li>
                        <li class="mb-3">
                            Ưu đãi giảm 5% khi thanh toán bằng thẻ ngân hàng
                        </li>
                    </ul>
                </div>
                <div class="product-single-w3l">
                    <p class="my-3">
                        <i class="far fa-hand-point-right mr-2"></i>
                        {!! $product->description !!}
                    </p>
                    <p class="my-sm-4 my-3">
                        <i class="fas fa-retweet mr-3"></i>Net banking & Credit/ Debit/ ATM card
                    </p>
                </div>
                <div class="occasion-cart">
                    <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                        <a href="{{ route('addCart',['id' => $product->id]) }}">Thêm vào giỏ hàng</a>
                    </div>
                </div>
            </div>
        </div>
        <br>



        <div class="site-section block-3 site-blocks-2">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-7 site-section-heading text-center pt-4">
                        <h2>Comment & assess</h2>
                    </div>
                </div>
                <div class="row">

                    @foreach ($comments as $item)
                        
                        <div class="col-md-12">
                                <div class="comment-assess">
                                    <h5>{{$item->user->name}}</h5> <span>{{$item->created_at}}</span>
                                    <div class="star-rating">
                                            <fieldset class="rating">
                                       @if ($item->star > 0)
                                            @for ($i = 0; $i < $item->star; $i++)
                                                <label class="full aed" for="" title="Awesome - 5 stars"></label>
                                            @endfor                                           
                                       @else
                                           Chưa đánh giá!!
                                       @endif
                                    </fieldset>                                                                                  
                                    </div>
                                    <br>
                                   <div class="content-cmt mt-3">
                                    <em>{{$item->comment_content}}</em>
                                   </div>                                    
                                </div>
                        </div>
                    @endforeach
                    
                    @if (Auth::check())
                    <div class="col-md-12">
                            <form action="{{ route('comment.store')}}" method="post">
                                @csrf
                                        <div class="form-group mt-5">
                                                <label for="comment">Comment:</label>
                                                <textarea class="form-control" rows="3" id="comment_content" name="comment_content"></textarea>
                                        </div>
                                    <fieldset class="rating">
                                        <input type="radio" id="star5" name="rating" value="5" /><label class="full" for="star5"
                                            title="Awesome - 5 stars"></label>
                                        <input type="radio" id="star4half" name="rating" value="4.5" /><label
                                            class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                                        <input type="radio" id="star4" name="rating" value="4" /><label class="full" for="star4"
                                            title="Pretty good - 4 stars"></label>
                                        <input type="radio" id="star3half" name="rating" value="3.5" /><label
                                            class="half" for="star3half" title="Meh - 3.5 stars"></label>
                                        <input type="radio" id="star3" name="rating" value="3" /><label class="full" for="star3"
                                            title="Meh - 3 stars"></label>
                                        <input type="radio" id="star2half" name="rating" value="2.5" /><label
                                            class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                                        <input type="radio" id="star2" name="rating" value="2" /><label class="full" for="star2"
                                            title="Kinda bad - 2 stars"></label>
                                        <input type="radio" id="star1half" name="rating" value="1.5" /><label
                                            class="half" for="star1half" title="Meh - 1.5 stars"></label>
                                        <input type="radio" id="star1" name="rating" value="1" /><label class="full" for="star1"
                                            title="Sucks big time - 1 star"></label>
                                        <input type="radio" id="starhalf" name="rating" value="0.5" /><label class="half"
                                            for="starhalf" title="Sucks big time - 0.5 stars"></label>
                                    </fieldset>
                                    <br> <br>
                                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                                    <input type="hidden" name="user_id" value="{{Auth::user()->id}}">  
                                    <input class="btn btn-primary" type="submit" value="Submit">                                  
                                </form>       
                            </div>
                    @else
                        Đăng nhập để bình luận
                    @endif
                    
                </div>
            </div>
        </div>

        @endsection