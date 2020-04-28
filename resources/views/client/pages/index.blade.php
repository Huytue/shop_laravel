@extends('client.layouts.master')
@section('title')
	Trang chủ
@endsection

@section('slide')
	@include('client.layouts.slide')
@endsection

@section('content')
	<!-- tittle heading -->
	<h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
		<span>O</span>ur
		<span>N</span>ew
		<span>P</span>roducts</h3>
	<!-- //tittle heading -->
	<div class="row">
		<!-- product left -->
		<div class="agileinfo-ads-display col-lg-9">
			<div class="wrapper">
				<!-- first section -->
				<div class="product-sec1 px-sm-4 px-3 py-sm-5  py-3 mb-4">
					<h3 class="heading-tittle text-center font-italic">@if(isset($product1)){{ $product1[0]->categories->name }} @endif</h3>
					<div class="row">
						@foreach($product1 as $pro)
							<div class="col-md-4 product-men mt-5">
								<div class="men-pro-item simpleCart_shelfItem">
									<div class="men-thumb-item text-center">
										<img src="img/upload/product/{{ $pro->image }}" class="img-fluid" alt="{{ $pro->name }}">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="{{ $pro->slug }}.html" class="link-product-add-cart">Chi tiết</a>
											</div>
										</div>
									</div>
									<div class="item-info-product text-center border-top mt-4">
										<h4 class="pt-1">
											<a href="{{ $pro->slug }}.html">{{ substr($pro->name, 0, 23) }}</a>
										</h4>
										<div class="info-product-price my-2">
											@if($pro->promotional>0)
												<span class="item_price">
													{{ number_format($pro->promotional) }}&nbsp;VND
												</span>
												<del>{{ number_format($pro->price) }}&nbsp;VND</del>
											@else
												<span class="item_price">
													{{ number_format($pro->price) }}&nbsp;VND
												</span>
											@endif
										</div>
										<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
											<a href="{{ route('addCart',['id' => $pro->id]) }}">Thêm vào giỏ hàng</a>
										</div>
									</div>
								</div>
							</div>
						@endforeach	
					</div>
				</div>
				<!-- //first section -->
				<div class="product-sec1 px-sm-4 px-3 py-sm-5  py-3 mb-4">
					<h3 class="heading-tittle text-center font-italic">@if(isset($product2)){{ $product2[0]->categories->name }} @endif</h3>
					<div class="row">
						@foreach($product2 as $pro)
							<div class="col-md-4 product-men mt-5">
								<div class="men-pro-item simpleCart_shelfItem">
									<div class="men-thumb-item text-center">
										<img src="img/upload/product/{{ $pro->image }}" class="img-fluid" alt="{{ $pro->name }}">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="{{ $pro->slug }}.html" class="link-product-add-cart">Chi tiết</a>
											</div>
										</div>
									</div>
									<div class="item-info-product text-center border-top mt-4">
										<h4 class="pt-1">
											<a href="{{ $pro->slug }}.html">{{ substr($pro->name, 0, 23) }}</a>
										</h4>
										<div class="info-product-price my-2">
											@if($pro->promotional>0)
												<span class="item_price">
													{{ number_format($pro->promotional) }}&nbsp;VND
												</span>
												<del>{{ number_format($pro->price) }}&nbsp; VND</del>
											@else
												<span class="item_price">
													{{ number_format($pro->price)}}&nbsp;VND
												</span>
											@endif
										</div>
										<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
											<a href="{{ route('addCart',['id' => $pro->id]) }}">Thêm vào giỏ hàng</a>
										</div>
									</div>
								</div>
							</div>
						@endforeach	
					</div>
				</div>
				<!-- second section -->
				<div class="product-sec1 px-sm-4 px-3 py-sm-5  py-3 mb-4">
					<h3 class="heading-tittle text-center font-italic">@if(isset($product4)){{ $product4[0]->categories->name }} @endif</h3>
					<div class="row">
						@foreach($product4 as $pro)
							<div class="col-md-4 product-men mt-5">
								<div class="men-pro-item simpleCart_shelfItem">
									<div class="men-thumb-item text-center">
										<img src="img/upload/product/{{ $pro->image }}" class="img-fluid" alt="{{ $pro->name }}">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="{{ $pro->slug }}.html" class="link-product-add-cart">Chi tiết</a>
											</div>
										</div>
									</div>
									<div class="item-info-product text-center border-top mt-4">
										<h4 class="pt-1">
											<a href="{{ $pro->slug }}.html">{{ substr($pro->name, 0, 23) }}</a>
										</h4>
										<div class="info-product-price my-2">
											@if($pro->promotional>0)
												<span class="item_price">
													{{ number_format($pro->promotional) }}&nbsp;VND
												</span>
												<del>{{ number_format($pro->price) }}&nbsp; VND</del>
											@else
												<span class="item_price">
													{{ number_format($pro->price)}}&nbsp;VND
												</span>
											@endif
										</div>
										<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
											<a href="{{ route('addCart',['id' => $pro->id]) }}">Thêm vào giỏ hàng</a>
										</div>
									</div>
								</div>
							</div>
						@endforeach	
					</div>
				</div>
				<!-- //second section -->
				<!-- third section -->
				<div class="product-sec1 product-sec2 px-sm-5 px-3">
					<div class="row">
						<h3 class="col-md-4 effect-bg">Summer Carnival</h3>
						<p class="w3l-nut-middle">Get Extra 10% Off</p>
						<div class="col-md-8 bg-right-nut">
							<img src="assets/client/images/image1.png" alt="">
						</div>
					</div>
				</div>
				<!-- //third section -->
				
				<!-- fourth section -->
				<div class="product-sec1 px-sm-4 px-3 py-sm-5  py-3 mb-4">
					<h3 class="heading-tittle text-center font-italic">@if(isset($product3)){{ $product3[0]->categories->name }} @endif</h3>
					<div class="row">
						@foreach($product3 as $pro)
							<div class="col-md-4 product-men mt-5">
								<div class="men-pro-item simpleCart_shelfItem">
									<div class="men-thumb-item text-center">
										<img src="img/upload/product/{{ $pro->image }}" class="img-fluid" alt="{{ $pro->name }}">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="{{ $pro->slug }}.html" class="link-product-add-cart">Chi tiết</a>
											</div>
										</div>
									</div>
									<div class="item-info-product text-center border-top mt-4">
										<h4 class="pt-1">
											<a href="{{ $pro->slug }}.html">{{ substr($pro->name, 0, 23) }}</a>
										</h4>
										<div class="info-product-price my-2">
											@if($pro->promotional>0)
												<span class="item_price">
													{{ number_format($pro->promotional) }}&nbsp;VND
												</span>
												<del>{{ number_format($pro->price) }}&nbsp; VND</del>
											@else
												<span class="item_price">
													{{ number_format($pro->price)}}&nbsp;VND
												</span>
											@endif
										</div>
										<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
											<a href="{{ route('addCart',['id' => $pro->id]) }}">Thêm vào giỏ hàng</a>
										</div>
									</div>
								</div>
							</div>
						@endforeach	
					</div>
				</div>
				
				<!-- //fourth section -->
			</div>
		</div>
		<!-- //product left -->

		<!-- product right -->
        @include('client.layouts.sidebar')
	</div>
@endsection