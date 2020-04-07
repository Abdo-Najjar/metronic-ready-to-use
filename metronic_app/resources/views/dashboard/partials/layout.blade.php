<!DOCTYPE html>
<html lang="en">

<!-- begin::Head -->

<head>
	<meta charset="utf-8" />
	<title>@yield('title')</title>
	<meta name="description" content="Updates and statistics">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!--begin::Fonts -->
	<link rel="stylesheet"
		href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Roboto:300,400,500,600,700">
	<!--end::Fonts -->
	<!--begin::Page Vendors Styles(used by this page) -->
	<link href="/assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />

	<!--end::Page Vendors Styles -->

	<!--begin::Global Theme Styles(used by all pages) -->
	<link href="/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
	<link href="/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />

	{{-- for rtl --}}
	{{-- <link href="assets/css/style.bundle.rtl.css" rel="stylesheet" type="text/css" /> --}}
	<!--end::Global Theme Styles -->

	<!--begin::Layout Skins(used by all pages) -->
	<link href="/assets/css/skins/header/base/dark.css" rel="stylesheet" type="text/css" />
	<link href="/assets/css/skins/header/menu/light.css" rel="stylesheet" type="text/css" />
	<link href="/assets/css/skins/brand/dark.css" rel="stylesheet" type="text/css" />
	<link href="/assets/css/skins/aside/dark.css" rel="stylesheet" type="text/css" />

	<!--end::Layout Skins -->
	<link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
	@stack('css')
</head>

<!-- end::Head -->

<!-- begin::Body -->

<body
	class="kt-page--loading-enabled kt-page--loading kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--fixed kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading">



	<!--[html-partial:include:{"file":"partials/_page-loader.html"}]/-->
	@include('dashboard.partials._page-loader')


	<!-- begin:: Page -->
	<!--[html-partial:include:{"file":"partials/_header/base-mobile.html"}]/-->
	@include('dashboard.partials._header.base-mobile')

	<div class="kt-grid kt-grid--hor kt-grid--root">
		<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">

			<!--[html-partial:include:{"file":"partials/_aside/base.html"}]/-->
			@include('dashboard.partials._aside.base')

			<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">

				<!--[html-partial:include:{"file":"partials/_header/base.html"}]/-->
				@include('dashboard.partials._header.base')

				<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

					<!--[html-partial:include:{"file":"partials/_subheader/subheader-v1.html"}]/-->

					@component('dashboard.partials._subheader.subheader-v1')
					@slot('subheader__title')
					@yield('subheader__title')
					@endslot
					@endcomponent



					<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
						<!--[html-partial:include:{"file":"partials/_content/base.html"}]/-->
						@yield('content')
					</div>
				</div>

				<!--[html-partial:include:{"file":"partials/_footer/base.html"}]/-->
				@include('dashboard.partials._footer.base')

			</div>
		</div>
	</div>

	<!-- end:: Page -->

	<!--[html-partial:include:{"file":"partials/_quick-panel.html"}]/-->
	@include('dashboard.partials._quick-panel')

	<!--[html-partial:include:{"file":"partials/_scrolltop.html"}]/-->
	@include('dashboard.partials._scrolltop')

	<!--[html-partial:include:{"file":"partials/_toolbar.html"}]/-->
	{{-- @include('dashboard.partials._toolbar') --}}

	<!--[html-partial:include:{"file":"partials/_chat.html"}]/-->
	@include('dashboard.partials._chat')

	<!-- begin::Global Config(global config for global JS sciprts) -->
	<script>
		var KTAppOptions = {
				"colors": {
					"state": {
						"brand": "#5d78ff",
						"dark": "#282a3c",
						"light": "#ffffff",
						"primary": "#5867dd",
						"success": "#34bfa3",
						"info": "#36a3f7",
						"warning": "#ffb822",
						"danger": "#fd3995"
					},
					"base": {
						"label": [
							"#c5cbe3",
							"#a1a8c3",
							"#3d4465",
							"#3e4466"
						],
						"shape": [
							"#f0f3ff",
							"#d9dffa",
							"#afb4d4",
							"#646c9a"
						]
					}
				}
			};
	</script>

	<!-- end::Global Config -->
	<!--begin::Global Theme Bundle(used by all pages) -->
	<script src="/assets/plugins/global/plugins.bundle.js" type="text/javascript"></script>
	<script src="/assets/js/scripts.bundle.js" type="text/javascript"></script>

	<!--end::Global Theme Bundle -->

	<!--begin::Page Vendors(used by this page) -->
	<script src="/assets/plugins/custom/fullcalendar/fullcalendar.bundle.js" type="text/javascript"></script>
	<script src="//maps.google.com/maps/api/js?key=AIzaSyBTGnKT7dt597vo9QgeQ7BFhvSRP4eiMSM" type="text/javascript">
	</script>
	<script src="/assets/plugins/custom/gmaps/gmaps.js" type="text/javascript"></script>

	<!--end::Page Vendors -->

	<!--begin::Page Scripts(used by this page) -->
	<script src="/assets/js/pages/dashboard.js" type="text/javascript"></script>

	@stack('js')

	<!--end::Page Scripts -->
</body>

<!-- end::Body -->

</html>