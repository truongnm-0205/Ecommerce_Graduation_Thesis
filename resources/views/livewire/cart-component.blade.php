<main id="main" class="main-site">

		<div class="container">

			<div class="wrap-breadcrumb">
				<ul>
					<li class="item-link"><a href="/" class="link">trang chủ</a></li>
					<li class="item-link"><span>giỏ hàng</span></li>
				</ul>
			</div>
			<div class=" main-content-area">

				<div class="wrap-iten-in-cart">
					@if(Session::has('success_message'))
						<div class="alert alert-success">
							<strong>Success</strong>{{Session::get('success_message')}}
						</div>
					@endif
					@if(Cart::count() > 0)
					<h3 class="box-title">Tên sách</h3>
					<ul class="products-cart">
						@foreach(Cart::content() as $item)
						<li class="pr-cart-item">
							<div class="product-image">
								<figure><img src="{{asset('assets/images/products/'.$item->model->image)}}" alt="{{$item->model->name}}"></figure>
							</div>
							<div class="product-name">
								<a class="link-to-product" href="{{route('product.details',['slug'=>$item->model->slug])}}">{{$item->model->name}}</a>
							</div>
							<div class="price-field produtc-price"><p class="price">${{$item->regular_price}}</p></div>
							<div class="quantity">
								<div class="quantity-input">
									<input type="text" name="product-quatity" value="{{$item->qty}}" data-max="120" pattern="[0-9]*" >									
									<a class="btn btn-increase" href="#" wire:click.prevent="increaseQuantity('{{$item->rowId}}')"></a>
									<a class="btn btn-reduce" href="#" wire:click.prevent="decreaseQuantity('{{$item->rowId}}')"></a>
								</div>
							</div>
							<div class="price-field sub-total"><p class="price">${{$item->subtotal}}</p></div>
							<div class="delete">
								<a href="#" wire:click.prevent="destroy('{{$item->rowId}}')" class="btn btn-delete" title="">
									<span>Xóa khỏi giỏ hàng</span>
									<i class="fa fa-times-circle" aria-hidden="true"></i>
								</a>
							</div>
						</li>
						@endforeach
												
					</ul>
					@else
						<p>Không có sách trong giỏ hàng</p>
					@endif
				</div>

				<div class="summary">
					<div class="order-summary">
						<h4 class="title-box">Hóa đơn</h4>
						<p class="summary-info"><span class="title">Giá</span><b class="index">${{Cart::subtotal()}}</b></p>
						<p class="summary-info"><span class="title">Thuế</span><b class="index">${{Cart::tax()}}</b></p>
						<p class="summary-info"><span class="title">Shipping</span><b class="index">Free Shipping</b></p>
						<p class="summary-info total-info "><span class="title">Tổng</span><b class="index">${{Cart::total()}}</b></p>
					</div>
					<div class="checkout-info">
						<label class="checkbox-field">
							<input class="frm-input " name="have-code" id="have-code" value="" type="checkbox"><span>Tôi có mã giảm giá</span>
						</label>
						<a class="btn btn-checkout" href="checkout.html">Thanh toán</a>
						<a class="link-to-shop" href="shop.html">Tiếp tục mua sắm<i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
					</div>
					<div class="update-clear">
						<a class="btn btn-clear" wire:click.prevent="destroyAll()" href="#">Xóa toàn bộ giỏ hàng</a>
						<a class="btn btn-update" href="#">Cập nhật giỏ hàng</a>
					</div>
				</div>

				<div class="wrap-show-advance-info-box style-1 box-in-site" style="display:block">
					<h3 class="title-box">Sách được xem nhiều</h3>
					<div class="wrap-products">
						<div class="products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"3"},"1200":{"items":"5"}}' >

							<div class="product product-style-2 equal-elem ">
								<div class="product-thumnail">
									<a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
										<figure><img src="https://bizweb.dktcdn.net/thumb/1024x1024/100/017/781/products/1-1e313fc9-6145-4c33-93ed-c8c5ab5d75a8.jpg?v=1656504213333" width="214" height="214" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
									</a>
									<div class="group-flash">
										<span class="flash-item new-label">mới</span>
									</div>
									<div class="wrap-btn">
										<a href="#" class="function-link">xem nhanh</a>
									</div>
								</div>
								<div class="product-info">
									<a href="#" class="product-name"><span>[FREESHIP] Combo 6 quyển tiếng Nhật dành cho người trưởng thành</span></a>
									<div class="wrap-price"><span class="product-price">$250.00</span></div>
								</div>
							</div>

						</div>
					</div><!--End wrap-products-->
				</div>

			</div><!--end main content area-->
		</div><!--end container-->

	</main>