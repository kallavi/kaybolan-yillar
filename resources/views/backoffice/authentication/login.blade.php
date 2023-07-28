<!DOCTYPE html>
<html lang="tr">
	@include('backoffice.include.head')
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="app-blank app-blank">
		<!--begin::Theme mode setup on page load-->
		<script>
            var defaultThemeMode = "light";
            var themeMode; if ( document.documentElement ) { if ( document.documentElement.hasAttribute("data-theme-mode")) { themeMode = document.documentElement.getAttribute("data-theme-mode"); } else { if ( localStorage.getItem("data-theme") !== null ) { themeMode = localStorage.getItem("data-theme"); } else { themeMode = defaultThemeMode; } } if (themeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } document.documentElement.setAttribute("data-theme", themeMode); }</script>
		<!--end::Theme mode setup on page load-->
		<!--begin::Root-->
		<div class="d-flex flex-column flex-root" id="kt_app_root">
			<!--begin::Authentication - Sign-in -->
			<div class="d-flex flex-column flex-lg-row flex-column-fluid">
				<!--begin::Body-->
				<div class="d-flex flex-column flex-lg-row-fluid w-lg-50 p-10 order-2 order-lg-1">
					<!--begin::Form-->
					<div class="d-flex flex-center flex-column flex-lg-row-fluid">
						<!--begin::Wrapper-->
						<div class="w-lg-500px p-10">
							<!--begin::Form-->
							<form class="form w-100" novalidate="novalidate" id="kt_sign_in_form" action="{{ route('login.auth') }}" method="post">
								<!--begin::Heading-->
								<div class="text-center mb-11">
									<!--begin::Title-->
									<h1 class="text-dark fw-bolder mb-3">Yönetim Paneli</h1>
									<!--end::Title-->
									<!--begin::Subtitle-->
									<div class="text-gray-500 fw-semibold fs-6">İstanbul'un Kaybolan Yılları</div>
									<!--end::Subtitle=-->
								</div>
								<!--begin::Heading-->
{{--								<!--begin::Login options-->--}}
{{--								<div class="row g-3 mb-9">--}}
{{--									<!--begin::Col-->--}}
{{--									<div class="col-md-6">--}}
{{--										<!--begin::Google link=-->--}}
{{--										<a href="#" class="btn btn-flex btn-outline btn-text-gray-700 btn-active-color-primary bg-state-light flex-center text-nowrap w-100">--}}
{{--										<img alt="Logo" src="{{ asset('assets/media/svg/brand-logos/google-icon.svg') }}" class="h-15px me-3" />Sign in with Google</a>--}}
{{--										<!--end::Google link=-->--}}
{{--									</div>--}}
{{--									<!--end::Col-->--}}
{{--									<!--begin::Col-->--}}
{{--									<div class="col-md-6">--}}
{{--										<!--begin::Google link=-->--}}
{{--										<a href="#" class="btn btn-flex btn-outline btn-text-gray-700 btn-active-color-primary bg-state-light flex-center text-nowrap w-100">--}}
{{--										<img alt="Logo" src="{{ asset('assets/media/svg/brand-logos/apple-black.svg') }}" class="theme-light-show h-15px me-3" />--}}
{{--										<img alt="Logo" src="{{ asset('assets/media/svg/brand-logos/apple-black-dark.svg') }}" class="theme-dark-show h-15px me-3" />Sign in with Apple</a>--}}
{{--										<!--end::Google link=-->--}}
{{--									</div>--}}
{{--									<!--end::Col-->--}}
{{--								</div>--}}
{{--								<!--end::Login options-->--}}
{{--								<!--begin::Separator-->--}}
{{--								<div class="separator separator-content my-14">--}}
{{--									<span class="w-125px text-gray-500 fw-semibold fs-7">Or with email</span>--}}
{{--								</div>--}}
								<!--end::Separator-->
                                @csrf
                                @if($errors->any())
                                    <h4>{{$errors->first()}}</h4>
                                @endif
								<!--begin::Input group=-->
								<div class="fv-row mb-8">
									<!--begin::Email-->
									<input type="text" placeholder="Eposta" name="email" autocomplete="on" class="form-control bg-transparent" required />
									<!--end::Email-->
								</div>
								<!--end::Input group=-->
								<div class="fv-row mb-3">
									<!--begin::Password-->
									<input type="password" placeholder="Şifre" name="password" autocomplete="on" class="form-control bg-transparent" required/>
									<!--end::Password-->
								</div>
								<!--end::Input group=-->
								<!--begin::Wrapper-->
								<div class="d-flex flex-stack flex-wrap gap-3 fs-base fw-semibold mb-8">
									<div></div>
									<!--begin::Link-->
									<a href="javascript:;" class="link-primary">Şifremi Unuttum ?</a>
									<!--end::Link-->
								</div>
								<!--end::Wrapper-->
								<!--begin::Submit button-->
								<div class="d-grid mb-10">
									<button type="submit" id="kt_sign_in_submit" class="btn btn-primary">
										<!--begin::Indicator label-->
										<span class="indicator-label">Giriş Yap</span>
										<!--end::Indicator label-->
										<!--begin::Indicator progress-->
										<span class="indicator-progress">Lütfen bekleyiniz...
										<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
										<!--end::Indicator progress-->
									</button>
								</div>
								<!--end::Submit button-->
								<!--begin::Sign up-->
{{--								<div class="text-gray-500 text-center fw-semibold fs-6">Not a Member yet?--}}
{{--								<a href="../../demo1/dist/authentication/layouts/corporate/sign-up.html" class="link-primary">Sign up</a></div>--}}
								<!--end::Sign up-->
							</form>
							<!--end::Form-->
						</div>
						<!--end::Wrapper-->
					</div>
					<!--end::Form-->
					<!--begin::Footer-->
					<div class="d-flex flex-center flex-wrap px-5">
						<!--begin::Links-->
{{--						<div class="d-flex fw-semibold text-primary fs-base">--}}
{{--							<a href="../../demo1/dist/pages/team.html" class="px-5" target="_blank">Terms</a>--}}
{{--							<a href="../../demo1/dist/pages/pricing/column.html" class="px-5" target="_blank">Plans</a>--}}
{{--							<a href="../../demo1/dist/pages/contact.html" class="px-5" target="_blank">Contact Us</a>--}}
{{--						</div>--}}
						<!--end::Links-->
					</div>
					<!--end::Footer-->
				</div>
				<!--end::Body-->
				<!--begin::Aside-->
				<div class="d-flex flex-lg-row-fluid w-lg-50 bgi-size-cover bgi-position-center order-1 order-lg-2" style="background-image: url(assets/media/misc/auth-bg-ist.png)">
					<!--begin::Content-->
					<div class="d-flex flex-column flex-center py-7 py-lg-15 px-5 px-md-15 w-100">
						<!--begin::Logo-->
{{--						<a href="../../demo1/dist/index.html" class="mb-0 mb-lg-12">--}}
{{--							<img alt="Logo" src="assets/media/logos/custom-1.png" class="h-60px h-lg-75px" />--}}
{{--						</a>--}}
						<!--end::Logo-->
						<!--begin::Image-->
						<img class=" d-none d-lg-block mx-auto w-200px w-md-50 w-xl-350px mb-10 mb-lg-20" src="{{ asset('backoffice/assets/media/logos/logo.svg') }}" alt="" />
						<!--end::Image-->
						<!--begin::Title-->
						<!--<h2 class="d-none d-lg-block text-white fs-2qx fw-bolder text-center mb-7">İstanbul'un Kaybolan Yılları</h2> -->
						<!--end::Title-->
{{--						<!--begin::Text-->--}}
{{--						<div class="d-none d-lg-block text-white fs-base text-center">In this kind of post,--}}
{{--						<a href="#" class="opacity-75-hover text-warning fw-bold me-1">the blogger</a>introduces a person they’ve interviewed--}}
{{--						<br />and provides some background information about--}}
{{--						<a href="#" class="opacity-75-hover text-warning fw-bold me-1">the interviewee</a>and their--}}
{{--						<br />work following this is a transcript of the interview.</div>--}}
						<!--end::Text-->
					</div>
					<!--end::Content-->
				</div>
				<!--end::Aside-->
			</div>
			<!--end::Authentication - Sign-in-->
		</div>
		@include('backoffice.include.footerJs')
	</body>
	<!--end::Body-->
</html>
