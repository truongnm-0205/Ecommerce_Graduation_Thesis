<x-guest-layout>
    <main id="main" class="main-site left-sidebar">

		<div class="container">

			<div class="wrap-breadcrumb">
				<ul>
					<li class="item-link"><a href="#" class="link">trang chủ</a></li>
					<li class="item-link"><span>Đăng ký</span></li>
				</ul>
			</div>
			<div class="row">
				<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12 col-md-offset-3">							
					<div class=" main-content-area">
						<div class="wrap-login-item ">
							<div class="register-form form-item ">
                                <x-jet-validation-errors class="mb-4" />
								<form class="form-stl" name="frm-login" method="POST" action="{{route('register')}}" >
                                    @csrf
                                    <fieldset class="wrap-title">
										<h3 class="form-title">Tạo tài khoản</h3>
										<h4 class="form-subtitle">Thông tin cá nhân</h4>
									</fieldset>									
									<fieldset class="wrap-input">
										<label for="frm-reg-lname">Tên*</label>
										<input type="text" id="frm-reg-lname" name="name" placeholder="Tên của bạn*" value="{{old('name')}}" required autofocus autocomplete="name">
									</fieldset>
									<fieldset class="wrap-input">
										<label for="frm-reg-email">Email*</label>
										<input type="email" id="frm-reg-email" name="email" placeholder="Email" value="{{old('email')}}">
									</fieldset>

									<fieldset class="wrap-title">
										<h3 class="form-title">Thông tin đăng nhập</h3>
									</fieldset>
									<fieldset class="wrap-input item-width-in-half left-item ">
										<label for="frm-reg-pass">Mật khẩu *</label>
										<input type="password" id="frm-reg-pass" name="password" placeholder="Password" required autocomplete="new-password">
									</fieldset>
									<fieldset class="wrap-input item-width-in-half ">
										<label for="frm-reg-cfpass">Nhập lại mật khẩu *</label>
										<input type="password" id="frm-reg-cfpass" name="password_confirmation" placeholder="Confirm Password" required autocomplete="new-password">
									</fieldset>
									<input type="submit" class="btn btn-sign" value="Đăng ký" name="register">
								</form>
							</div>											
						</div>
					</div><!--end main products area-->		
				</div>
			</div><!--end row-->

		</div><!--end container-->

	</main>
</x-guest-layout>