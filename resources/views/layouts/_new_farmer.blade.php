<!DOCTYPE html>

<html lang="en">
	<!--begin::Head-->
	<head>
		<title>@yield('title')</title>
		<meta charset="utf-8" />
		<meta name="description" content="The most advanced Bootstrap 5 Admin Theme with 40 unique prebuilt layouts on Themeforest trusted by 100,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel versions. Grab your copy now and get life-time updates for free." />
		<meta name="keywords" content="metronic, bootstrap, bootstrap 5, angular, VueJs, React, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel starter kits, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="Metronic - The World's #1 Selling Bootstrap Admin Template by KeenThemes" />
		<meta property="og:url" content="https://keenthemes.com/metronic" />
		<meta property="og:site_name" content="Metronic by Keenthemes" />
		<link rel="canonical" href="http://index.html" />
		<link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
		<!--begin::Fonts(mandatory for all pages)-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Vendor Stylesheets(used for this page only)-->

		<link href="{{asset('assets/plugins/custom/datatables/datatables.bundle.css')}}" rel="stylesheet" type="text/css" />
		<!--end::Vendor Stylesheets-->
		<!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
		<link href="{{asset('assets/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('assets/css/style.bundle.css')}}" rel="stylesheet" type="text/css" />
		<!--end::Global Stylesheets Bundle-->
		<script>// Frame-busting to prevent site from being loaded within a frame without permission (click-jacking) if (window.top != window.self) { window.top.location.replace(window.self.location.href); }</script>
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled">
		<!--begin::Theme mode setup on page load-->

		<!--end::Theme mode setup on page load-->
		<!--begin::Main-->
		<!--begin::Root-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Page-->
			<div class="flex-row page d-flex flex-column-fluid">
				<!--begin::Wrapper-->
				<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
					<!--begin::Header-->
					<div id="kt_header" class="mb-5 header align-items-stretch mb-lg-10" data-kt-sticky="true" data-kt-sticky-name="header" data-kt-sticky-offset="{default: '200px', lg: '300px'}">
						<!--begin::Container-->
						<div class="container-xxl d-flex align-items-center">
							<!--begin::Heaeder menu toggle-->
							<div class="d-flex topbar align-items-center d-lg-none ms-n2 me-3" title="Show aside menu">
								<div class="btn btn-icon btn-active-light-primary btn-custom w-30px h-30px w-md-40px h-md-40px" id="kt_header_menu_mobile_toggle">
									<i class="ki-duotone ki-abstract-14 fs-1">
										<span class="path1"></span>
										<span class="path2"></span>
									</i>
								</div>
							</div>
							<!--end::Heaeder menu toggle-->
							<!--begin::Header Logo-->
							<div class="header-logo me-5 me-md-10 flex-grow-1 flex-lg-grow-0">
								<a href="{{route('farmer')}}">
									<img alt="Logo" src="{{asset('logo.png')}}" class="logo-default h-50px" />
									<img alt="Logo" src="{{asset('logo.png')}}" class="logo-sticky h-50px" />
								</a>
							</div>
							<!--end::Header Logo-->
							<!--begin::Wrapper-->
							<div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1">
								<!--begin::Navbar-->
								<div class="d-flex align-items-stretch" id="kt_header_nav">
									<!--begin::Menu wrapper-->
									<div class="header-menu align-items-stretch">
										<!--begin::Menu-->
										<div class="px-2 my-5 menu menu-rounded menu-column menu-lg-row menu-active-bg menu-title-gray-700 menu-state-primary menu-arrow-gray-500 fw-semibold my-lg-0 align-items-stretch px-lg-0" id="#kt_header_menu" data-kt-menu="true">
											<!--begin:Menu item-->
											<div class="menu-item here show menu-here-bg me-0 me-lg-2">
												<!--begin:Menu link-->
												<span class="py-3 menu-link">
													<span class="menu-title"><a href="{{route('farmer')}}" class="text-white">Dashboard</a></span>
													<span class="menu-arrow d-lg-none"></span>
												</span>
												<!--end:Menu link-->

											</div>
                                            <div class="menu-item here show menu-here-bg me-0 me-lg-2">
												<!--begin:Menu link-->
												<span class="py-3 menu-link">
													<span class="menu-title"><a href="{{route('screening.index')}}" class="text-white">Screening</a></span>
													<span class="menu-arrow d-lg-none"></span>
												</span>
												<!--end:Menu link-->

											</div>

											<!--end:Menu item-->

										</div>
										<!--end::Menu-->
									</div>
									<!--end::Menu wrapper-->
								</div>
								<!--end::Navbar-->
								<!--begin::Toolbar wrapper-->
								<div class="flex-shrink-0 topbar d-flex align-items-stretch">

									<!--begin::User-->
									<div class="d-flex align-items-center me-lg-n2 ms-1 ms-lg-3" id="kt_header_user_menu_toggle">
										<!--begin::Menu wrapper-->
										<div class="btn btn-icon btn-active-light-primary btn-custom w-30px h-30px w-md-40px h-md-40px" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
											<img class="rounded h-30px w-30px" src="{{asset('assets/media/avatars/300-2.jpg')}}" alt="" />
										</div>
										<!--begin::User account menu-->
										<div class="py-4 menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold fs-6 w-275px" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="px-3 menu-item">
												<div class="px-3 menu-content d-flex align-items-center">
													<!--begin::Avatar-->
													<div class="symbol symbol-50px me-5">
														<img alt="Logo" src="{{asset('assets/media/avatars/300-2.jpg')}}" />
													</div>
													<!--end::Avatar-->
													<!--begin::Username-->
													<div class="d-flex flex-column">
														<div class="fw-bold d-flex align-items-center fs-5">{{auth()->user()->name}}
														<span class="px-2 py-1 badge badge-light-success fw-bold fs-8 ms-2">Farmer</span></div>
														<a href="#" class="fw-semibold text-muted text-hover-primary fs-7">{{auth()->user()->email}}</a>
													</div>
													<!--end::Username-->
												</div>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu separator-->
											<div class="my-2 separator"></div>
											<!--end::Menu separator-->

											<!--begin::Menu item-->

											<!--begin::Menu item-->
											<div class="px-5 menu-item">
                                                <form method="POST" action="{{ route('logout') }}">
                                                    @csrf
                                                    <a class="px-5 menu-link" href="{{route('logout')}}" onclick="event.preventDefault();
                                                    this.closest('form').submit();">Sign Out</a>

                                                </form>

											</div>
											<!--end::Menu item-->
										</div>
										<!--end::User account menu-->
										<!--end::Menu wrapper-->
									</div>
									<!--end::User -->
									<!--begin::Aside mobile toggle-->
									<!--end::Aside mobile toggle-->
								</div>
								<!--end::Toolbar wrapper-->
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Container-->
					</div>
					<!--end::Header-->
					@yield('contents')
					<!--begin::Footer-->
					<div class="py-4 footer d-flex flex-lg-column" id="kt_footer">
						<!--begin::Container-->
						<div class="container-xxl d-flex flex-column flex-md-row align-items-center justify-content-between">
							<!--begin::Copyright-->
							<div class="order-2 text-gray-900 order-md-1">
								<span class="text-muted fw-semibold me-1">{{date('Y')}}&copy;</span>
								<a href="#" target="_blank" class="text-gray-800 text-hover-primary">Pengembangan Perangkat Lunak Agroteknologi</a>
							</div>
							<!--end::Copyright-->
							<!--begin::Menu-->

							<!--end::Menu-->
						</div>
						<!--end::Container-->
					</div>
					<!--end::Footer-->
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Page-->
		</div>
		<!--end::Root-->

		<!--end::Main-->
		<!--begin::Scrolltop-->
		<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
			<i class="ki-duotone ki-arrow-up">
				<span class="path1"></span>
				<span class="path2"></span>
			</i>
		</div>
		<!--end::Scrolltop-->
		<!--begin::Modals-->





		<!--end::Modals-->
		<!--begin::Javascript-->

		<!--begin::Global Javascript Bundle(mandatory for all pages)-->
		<script src="{{asset('assets/plugins/global/plugins.bundle.js')}}"></script>
		<script src="{{asset('assets/js/scripts.bundle.js')}}"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Vendors Javascript(used for this page only)-->
		<script src="{{asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.js')}}"></script>

		<script src="{{asset('assets/plugins/custom/datatables/datatables.bundle.js')}}"></script>
		<!--end::Vendors Javascript-->
		<!--begin::Custom Javascript(used for this page only)-->
		<script src="{{asset('assets/js/widgets.bundle.js')}}"></script>
		<script src="{{asset('assets/js/custom/widgets.js')}}"></script>
		<script src="{{asset('assets/js/custom/apps/chat/chat.js')}}"></script>
		<script src="{{asset('assets/js/custom/utilities/modals/upgrade-plan.js')}}"></script>
		<script src="{{asset('assets/js/custom/utilities/modals/create-app.js')}}"></script>
		<script src="{{asset('assets/js/custom/utilities/modals/create-campaign.js')}}"></script>
		<script src="{{asset('assets/js/custom/utilities/modals/users-search.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tensorflow/2.0.1/tf.min.js"></script>

    <!-- Load the  External Javascript file for web app's functionality -->
    <script src="{{asset('script.js')}}"></script>
		<!--end::Custom Javascript-->
		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>
