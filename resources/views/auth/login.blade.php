<!DOCTYPE html>
<html lang="en">

	<head>
		<title>E-Farm</title>
		<meta charset="utf-8" />
		<meta name="description" content="The most advanced Bootstrap 5 Admin Theme with 40 unique prebuilt layouts on Themeforest trusted by 100,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel versions. Grab your copy now and get life-time updates for free." />
		<meta name="keywords" content="metronic, bootstrap, bootstrap 5, angular, VueJs, React, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel starter kits, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="Metronic - The World's #1 Selling Bootstrap Admin Template by KeenThemes" />
		<meta property="og:url" content="https://keenthemes.com/metronic" />
		<meta property="og:site_name" content="Metronic by Keenthemes" />
		<link rel="canonical" href="http://authentication/layouts/creative/sign-in.html" />
		<link rel="shortcut icon" href="{{asset('logo.png')}}" />
		<!--begin::Fonts(mandatory for all pages)-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
		<link href="{{asset('assets/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('assets/css/style.bundle.css')}}" rel="stylesheet" type="text/css" />
		<!--end::Global Stylesheets Bundle-->

	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="auth-bg bgi-size-cover bgi-attachment-fixed bgi-position-center bgi-no-repeat">
		<!--begin::Theme mode setup on page load-->

		<div class="d-flex flex-column flex-root">
			<!--begin::Page bg image-->
			<style>body { background-image: url('assets/media/auth/bg4.jpg'); } [data-bs-theme="dark"] body { background-image: url('assets/media/auth/bg4-dark.jpg'); }</style>
			<!--end::Page bg image-->
			<!--begin::Authentication - Sign-in -->
			<div class="d-flex flex-column flex-column-fluid flex-lg-row">
				<!--begin::Aside-->
				<div class="px-10 d-flex flex-center w-lg-50 pt-15 pt-lg-0">
					<!--begin::Aside-->
					<div class="d-flex flex-center flex-lg-start flex-column">
						<!--begin::Logo-->
						<a href="index.html" class="mb-7">
							<img alt="Logo" src="{{asset('logo.png')}}" />
						</a>
						<!--end::Logo-->

					</div>
					<!--begin::Aside-->
				</div>
				<!--begin::Aside-->
				<!--begin::Body-->
				<div class="p-12 d-flex flex-column-fluid flex-lg-row-auto justify-content-center justify-content-lg-end p-lg-20">
					<!--begin::Card-->
					<div class="p-20 bg-body d-flex flex-column align-items-stretch flex-center rounded-4 w-md-600px">
						<!--begin::Wrapper-->
						<div class="d-flex flex-center flex-column flex-column-fluid px-lg-10 pb-15 pb-lg-20">
							<!--begin::Form-->
                            @if ($errors->any())
                            <div>
                                <div class="font-medium text-danger">
                                    {{ __('Whoops! Something went wrong.') }}
                                </div>

                                <ul class="mt-3 text-sm list-disc list-inside text-danger">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
							<form class="form w-100" method='POST' action="{{route('login')}}">
                                @csrf
								<!--begin::Heading-->
								<div class="mb-11 text-center">
									<!--begin::Title-->
									<h1 class="mb-3 text-gray-900 fw-bolder">Sign In</h1>
									<!--end::Title-->

								</div>
								<!--begin::Heading-->


								<!--begin::Input group=-->
								<div class="mb-8 fv-row">
									<!--begin::Email-->
									<input type="text" placeholder="Email" name="email" autocomplete="off" class="bg-transparent form-control" />
									<!--end::Email-->
								</div>
								<!--end::Input group=-->
								<div class="mb-3 fv-row">
									<!--begin::Password-->
									<input type="password" placeholder="Password" name="password" autocomplete="off" class="bg-transparent form-control" />
									<!--end::Password-->
								</div>
								<!--end::Input group=-->

								<!--begin::Submit button-->
								<div class="mb-10 d-grid">
									<button type="submit" class="btn btn-primary">Sign In</button>
								</div>
								<!--end::Submit button-->

							</form>
							<!--end::Form-->
						</div>
						<!--end::Wrapper-->
						<!--begin::Footer-->
						<div class="d-flex flex-stack px-lg-10">

							<!--begin::Links-->
							<div class="gap-5 d-flex fw-semibold text-primary fs-base">
								<a >Pengembangan Perangkat Lunak Agroteknologi</a>
							</div>
							<!--end::Links-->
						</div>
						<!--end::Footer-->
					</div>
					<!--end::Card-->
				</div>
				<!--end::Body-->
			</div>
			<!--end::Authentication - Sign-in-->
		</div>
		<!--end::Root-->
		<!--end::Main-->
		<!--begin::Javascript-->

		<!--begin::Global Javascript Bundle(mandatory for all pages)-->
		<script src="{{asset('assets/plugins/global/plugins.bundle.js')}}"></script>
		<script src="{{asset('assets/js/scripts.bundle.js')}}"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Custom Javascript(used for this page only)-->
		<script src="{{asset('assets/js/custom/authentication/sign-in/general.js')}}"></script>
		<!--end::Custom Javascript-->
		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>
