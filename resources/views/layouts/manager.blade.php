<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required Meta Tags Always Come First -->
	<base href="{{ url('/') }}/">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Title -->
	<title>{{$page_title}} | Fimiti Admin</title>

	<!-- Favicon -->
	<link rel="shortcut icon" href="favicon.ico">

	<!-- Font -->
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">

	<!-- CSS Implementing Plugins -->
	<link rel="stylesheet" href="assets/css/vendor.min.css">
	<link rel="stylesheet" href="assets/vendor/icon-set/style.css">



	<!-- CSS Front Template -->
	<link rel="stylesheet" href="assets/css/theme.min-9283.css">
</head>

<body class="footer-offset">

	<script src="assets/vendor/hs-navbar-vertical-aside/hs-navbar-vertical-aside-mini-cache.js"></script>


	<!-- ONLY DEV -->


	<!-- JS Preview mode only -->
	<div id="headerMain" class="d-none">
		<header id="header"
			class="navbar navbar-expand-lg navbar-fixed navbar-height navbar-flush navbar-container navbar-bordered">
			<div class="navbar-nav-wrap">
				<div class="navbar-brand-wrapper">
					<!-- Logo -->
					<a class="navbar-brand" href="index.html" aria-label="Front">
						<img class="navbar-brand-logo" src="assets/svg/logos/logo.svg" alt="Logo">
						<img class="navbar-brand-logo-mini" src="assets/svg/logos/logo-short.svg" alt="Logo">
					</a>
					<!-- End Logo -->
				</div>

				<div class="navbar-nav-wrap-content-left">
					<!-- Navbar Vertical Toggle -->
					<button type="button" class="js-navbar-vertical-aside-toggle-invoker close mr-3">
						<i class="tio-first-page navbar-vertical-aside-toggle-short-align" data-toggle="tooltip"
							data-placement="right" title="Collapse"></i>
						<i class="tio-last-page navbar-vertical-aside-toggle-full-align"
							data-template='<div class="tooltip d-none d-sm-block" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>'
							data-toggle="tooltip" data-placement="right" title="Expand"></i>
					</button>
					<!-- End Navbar Vertical Toggle -->

					<!-- Search Form -->
					<div class="d-none d-md-block">
						
					</div>
					<!-- End Search Form -->
				</div>

				<!-- Secondary Content -->
				<div class="navbar-nav-wrap-content-right">
					<!-- Navbar -->
					<ul class="navbar-nav align-items-center flex-row">

						<li class="nav-item d-none d-sm-inline-block">
							<!-- Activity -->
							<div class="hs-unfold">
								<a class="js-hs-unfold-invoker btn btn-icon btn-ghost-secondary rounded-circle"
									href="javascript:;" data-hs-unfold-options='{
						                "target": "#activitySidebar",
						                "type": "css-animation",
						                "animationIn": "fadeInRight",
						                "animationOut": "fadeOutRight",
						                "hasOverlay": true,
						                "smartPositionOff": true
						               }'>
									<i class="tio-voice-line"></i>
								</a>
							</div>
							<!-- Activity -->
						</li>

						<li class="nav-item">
							<!-- Account -->
							<div class="hs-unfold">
								<a class="js-hs-unfold-invoker navbar-dropdown-account-wrapper" href="javascript:;"
									data-hs-unfold-options='{
						                 "target": "#accountNavbarDropdown",
						                 "type": "css-animation"
						               }'>
									<div class="avatar avatar-sm avatar-circle">
										<img class="avatar-img" src="assets/img/160x160/img6.jpg"
											alt="Image Description">
										<span class="avatar-status avatar-sm-status avatar-status-success"></span>
									</div>
								</a>

								<div id="accountNavbarDropdown"
									class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-right navbar-dropdown-menu navbar-dropdown-account"
									style="width: 16rem;">
									<div class="dropdown-item-text">
										<div class="media align-items-center">
											<div class="avatar avatar-sm avatar-circle mr-2">
												<img class="avatar-img" src="assets/img/160x160/img6.jpg"
													alt="Image Description">
											</div>
											<div class="media-body">
												<span class="card-title h5">Mark Williams</span>
												<span class="card-text">mark@example.com</span>
											</div>
										</div>
									</div>

									<div class="dropdown-divider"></div>

									<!-- Unfold -->
									<div class="hs-unfold w-100">
										<a class="js-hs-unfold-invoker navbar-dropdown-submenu-item dropdown-item d-flex align-items-center"
											href="javascript:;" >
											<span class="text-truncate pr-2" title="Set status">Set status</span>
											<i
												class="tio-chevron-right navbar-dropdown-submenu-item-invoker ml-auto"></i>
										</a>

										
									</div>
									<!-- End Unfold -->

									
									
									<div class="dropdown-divider"></div>

									<a class="dropdown-item" href="#">
										<span class="text-truncate pr-2" title="Sign out">Sign out</span>
									</a>
								</div>
							</div>
							<!-- End Account -->
						</li>
					</ul>
					<!-- End Navbar -->
				</div>
				<!-- End Secondary Content -->
			</div>
		</header>
	</div>
	<div id="headerFluid" class="d-none">
		<header id="header"
			class="navbar navbar-expand-xl navbar-fixed navbar-height navbar-flush navbar-container navbar-bordered  ">
			<div class="js-mega-menu navbar-nav-wrap">
				<div class="navbar-brand-wrapper">
					<!-- Logo -->


					<a class="navbar-brand" href="index.html" aria-label="Front">
						<img class="navbar-brand-logo" src="assets/svg/logos/logo.svg" alt="Logo">
					</a>

					<!-- End Logo -->
				</div>

				<!-- Secondary Content -->
				<div class="navbar-nav-wrap-content-right">
					<!-- Navbar -->
					<ul class="navbar-nav align-items-center flex-row">
						
						<li class="nav-item">
							<!-- Toggle -->
							<button type="button" class="navbar-toggler btn btn-ghost-secondary rounded-circle"
								aria-label="Toggle navigation" aria-expanded="false" aria-controls="navbarNavMenu"
								data-toggle="collapse" data-target="#navbarNavMenu">
								<i class="tio-menu-hamburger"></i>
							</button>
							<!-- End Toggle -->
						</li>
					</ul>
					<!-- End Navbar -->
				</div>
				<!-- End Secondary Content -->

				<!-- Navbar -->
				<div class="navbar-nav-wrap-content-left collapse navbar-collapse" id="navbarNavMenu">
					<div class="navbar-body">
						<ul class="navbar-nav flex-grow-1">

							<!-- Layouts -->
							<li>
								<a class="navbar-nav-link nav-link" href="layouts/layouts.html">
									<i class="tio-dashboard-vs-outlined nav-icon"></i> Layouts
								</a>
							</li>
							<!-- End Layouts -->
							
						</ul>

					</div>
				</div>
				<!-- End Navbar -->
			</div>
		</header>
	</div>
	<div id="headerDouble" class="d-none">
		<header id="header" class="navbar navbar-expand-lg navbar-bordered flex-lg-column px-0">
			<div class="navbar-dark w-100">
				<div class="container-fluid">
					<div class="navbar-nav-wrap">
						<div class="navbar-brand-wrapper">
							<!-- Logo -->
							<a class="navbar-brand" href="index.html" aria-label="Front">
								<img class="navbar-brand-logo" src="assets/svg/logos/logo-white.svg" alt="Logo">
							</a>
							<!-- End Logo -->
						</div>

						<div class="navbar-nav-wrap-content-left">
							<!-- Search Form -->
							<div class="d-none d-lg-block">
								
							</div>
							<!-- End Search Form -->
						</div>

						<!-- Secondary Content -->
						<div class="navbar-nav-wrap-content-right">
							<!-- Navbar -->
							<ul class="navbar-nav align-items-center flex-row">
								
								
								<li class="nav-item d-none d-sm-inline-block">
									<!-- Activity -->
									<div class="hs-unfold">
										<a class="js-hs-unfold-invoker btn btn-icon btn-ghost-light rounded-circle"
											href="javascript:;" data-hs-unfold-options='{
						                    "target": "#activitySidebar",
						                    "type": "css-animation",
						                    "animationIn": "fadeInRight",
						                    "animationOut": "fadeOutRight",
						                    "hasOverlay": true,
						                    "smartPositionOff": true
						                   }'>
											<i class="tio-voice-line"></i>
										</a>
									</div>
									<!-- Activity -->
								</li>

								<li class="nav-item">
									<!-- Account -->
									<div class="hs-unfold">
										<a class="js-hs-unfold-invoker navbar-dropdown-account-wrapper"
											href="javascript:;" data-hs-unfold-options='{
							                     "target": "#accountNavbarDropdown",
							                     "type": "css-animation"
							                   }'>
											<div class="avatar avatar-sm avatar-circle">
												<img class="avatar-img" src="assets/img/160x160/img6.jpg"
													alt="Image Description">
												<span
													class="avatar-status avatar-sm-status avatar-status-success"></span>
											</div>
										</a>

										<div id="accountNavbarDropdown"
											class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-right navbar-dropdown-menu navbar-dropdown-account"
											style="width: 16rem;">
											<div class="dropdown-item-text">
												<div class="media align-items-center">
													<div class="avatar avatar-sm avatar-circle mr-2">
														<img class="avatar-img" src="assets/img/160x160/img6.jpg"
															alt="Image Description">
													</div>
													<div class="media-body">
														<span class="card-title h5">Mark Williams</span>
														<span class="card-text">mark@example.com</span>
													</div>
												</div>
											</div>

											


											
										</div>
									</div>
									<!-- End Account -->
								</li>

								
							</ul>
							<!-- End Navbar -->
						</div>
						<!-- End Secondary Content -->
					</div>
				</div>
			</div>

			<div class="container-fluid">
				<nav class="js-mega-menu flex-grow-1">
					<!-- Navbar -->
					<div class="navbar-nav-wrap-navbar collapse navbar-collapse" id="navbarNavMenu">
						<div class="navbar-body">
							<ul class="navbar-nav flex-grow-1">
								
							</ul>

						</div>
					</div>
					<!-- End Navbar -->
				</nav>
			</div>
		</header>
	</div>
	<div id="sidebarMain" class="d-none">
		<aside
			class="js-navbar-vertical-aside navbar navbar-vertical-aside navbar-vertical navbar-vertical-fixed navbar-expand-xl navbar-bordered  ">
			<div class="navbar-vertical-container">
				<div class="navbar-vertical-footer-offset">
					<div class="navbar-brand-wrapper justify-content-between">
						<!-- Logo -->


						<a class="navbar-brand" href="index.html" aria-label="Front">
							<img class="navbar-brand-logo" src="assets/svg/logos/logo.svg" alt="Logo">
							<img class="navbar-brand-logo-mini" src="assets/svg/logos/logo-short.svg" alt="Logo">
						</a>

						<!-- End Logo -->

						<!-- Navbar Vertical Toggle -->
						<button type="button"
							class="js-navbar-vertical-aside-toggle-invoker navbar-vertical-aside-toggle btn btn-icon btn-xs btn-ghost-dark">
							<i class="tio-clear tio-lg"></i>
						</button>
						<!-- End Navbar Vertical Toggle -->
					</div>

					<!-- Content -->
					<div class="navbar-vertical-content">
						<ul class="navbar-nav navbar-nav-lg nav-tabs">
							

							<li class="nav-item">
								<small class="nav-subtitle" title="Menu">Menu</small>
								<small class="tio-more-horizontal nav-subtitle-replacer"></small>
							</li>

							

							<li class="nav-item ">
								<a class="js-nav-tooltip-link nav-link " href="welcome-page.html">
									<i class="tio-visible-outlined nav-icon"></i>
									<span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">Dashboard
										</span>
								</a>
							</li>

							<li class="nav-item ">
								<a class="js-nav-tooltip-link nav-link " href="welcome-page.html">
									<i class="tio-visible-outlined nav-icon"></i>
									<span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">
										Riders</span>
								</a>
							</li>


							<li class="nav-item">
								<small class="tio-more-horizontal nav-subtitle-replacer"></small>
							</li>

							

						</ul>
					</div>
					<!-- End Content -->

					<!-- Footer -->
					<div class="navbar-vertical-footer">
						<ul class="navbar-vertical-footer-list">
							
						</ul>
					</div>
					<!-- End Footer -->
				</div>
			</div>
		</aside>
	</div>
	<div id="sidebarCompact" class="d-none">
		<aside
			class="js-navbar-vertical-aside navbar navbar-vertical-aside navbar-vertical navbar-vertical-fixed navbar-expand-xl navbar-bordered  ">
			<div class="navbar-vertical-container">
				<div class="navbar-brand d-flex justify-content-center">
					<!-- Logo -->


					<a class="navbar-brand" href="index.html" aria-label="Front">
						<img class="navbar-brand-logo-short" src="assets/svg/logos/logo-short.svg" alt="Logo">
					</a>

					<!-- End Logo -->
				</div>

				<!-- Content -->
				<div class="navbar-vertical-content">
					<ul class="navbar-nav nav-compact">
						
					</ul>
				</div>
				<!-- End Content -->
			</div>
		</aside>
	</div>

	<script src="assets/js/demo.js"></script>

	<!-- END ONLY DEV -->

	<!-- ========== HEADER ========== -->


	<!-- ========== END HEADER ========== -->

	@yield("content")

	<!-- ========== SECONDARY CONTENTS ========== -->

	<!-- Activity -->
	<div id="activitySidebar" class="hs-unfold-content sidebar sidebar-bordered sidebar-box-shadow">
		<div class="card card-lg sidebar-card">
			<div class="card-header">
				<h4 class="card-header-title">Activity stream</h4>

				<!-- Toggle Button -->
				<a class="js-hs-unfold-invoker btn btn-icon btn-xs btn-ghost-dark ml-2" href="javascript:;"
					data-hs-unfold-options='{
              "target": "#activitySidebar",
              "type": "css-animation",
              "animationIn": "fadeInRight",
              "animationOut": "fadeOutRight",
              "hasOverlay": true,
              "smartPositionOff": true
             }'>
					<i class="tio-clear tio-lg"></i>
				</a>
				<!-- End Toggle Button -->
			</div>

			<!-- Body -->
			<div class="card-body sidebar-body sidebar-scrollbar">
				<!-- Step -->
				<ul class="step step-icon-sm step-avatar-sm">
					<!-- Step Item -->
					<li class="step-item">
						<div class="step-content-wrapper">
							<div class="step-avatar">
								<img class="step-avatar-img" src="assets/img/160x160/img9.jpg" alt="Image Description">
							</div>

							<div class="step-content">
								<h5 class="mb-1">Iana Robinson</h5>

								<p class="font-size-sm mb-1">Added 2 files to task <a class="text-uppercase" href="#"><i
											class="tio-folder-bookmarked"></i> Fd-7</a></p>

								<ul class="list-group list-group-sm">
									<!-- List Item -->
									<li class="list-group-item list-group-item-light">
										<div class="row gx-1">
											<div class="col-6">
												<div class="media">
													<span class="mt-1 mr-2">
														<img class="avatar avatar-xs" src="assets/svg/brands/excel.svg"
															alt="Image Description">
													</span>
													<div class="media-body text-truncate">
														<span class="d-block font-size-sm text-dark text-truncate"
															title="weekly-reports.xls">weekly-reports.xls</span>
														<small class="d-block text-muted">12kb</small>
													</div>
												</div>
											</div>
											<div class="col-6">
												<div class="media">
													<span class="mt-1 mr-2">
														<img class="avatar avatar-xs" src="assets/svg/brands/word.svg"
															alt="Image Description">
													</span>
													<div class="media-body text-truncate">
														<span class="d-block font-size-sm text-dark text-truncate"
															title="weekly-reports.xls">weekly-reports.xls</span>
														<small class="d-block text-muted">4kb</small>
													</div>
												</div>
											</div>
										</div>
									</li>
									<!-- End List Item -->
								</ul>

								<small class="text-muted text-uppercase">Now</small>
							</div>
						</div>
					</li>
					<!-- End Step Item -->

					<!-- Step Item -->
					<li class="step-item">
						<div class="step-content-wrapper">
							<span class="step-icon step-icon-soft-dark">B</span>

							<div class="step-content">
								<h5 class="mb-1">Bob Dean</h5>

								<p class="font-size-sm mb-1">Marked <a class="text-uppercase" href="#"><i
											class="tio-folder-bookmarked"></i> Fr-6</a> as <span
										class="badge badge-soft-success badge-pill"><span
											class="legend-indicator bg-success"></span>"Completed"</span></p>

								<small class="text-muted text-uppercase">Today</small>
							</div>
						</div>
					</li>
					<!-- End Step Item -->

					<!-- Step Item -->
					<li class="step-item">
						<div class="step-content-wrapper">
							<div class="step-avatar">
								<img class="step-avatar-img" src="assets/img/160x160/img3.jpg" alt="Image Description">
							</div>

							<div class="step-content">
								<h5 class="h5 mb-1">Crane</h5>

								<p class="font-size-sm mb-1">Added 5 card to <a href="#">Payments</a></p>

								<ul class="list-group list-group-sm">
									<li class="list-group-item list-group-item-light">
										<div class="row gx-1">
											<div class="col">
												<img class="img-fluid rounded ie-sidebar-activity-img"
													src="assets/svg/illustrations/card-1.svg" alt="Image Description">
											</div>
											<div class="col">
												<img class="img-fluid rounded ie-sidebar-activity-img"
													src="assets/svg/illustrations/card-2.svg" alt="Image Description">
											</div>
											<div class="col">
												<img class="img-fluid rounded ie-sidebar-activity-img"
													src="assets/svg/illustrations/card-3.svg" alt="Image Description">
											</div>
											<div class="col-auto align-self-center">
												<div class="text-center">
													<a href="#">+2</a>
												</div>
											</div>
										</div>
									</li>
								</ul>

								<small class="text-muted text-uppercase">May 12</small>
							</div>
						</div>
					</li>
					<!-- End Step Item -->

					<!-- Step Item -->
					<li class="step-item">
						<div class="step-content-wrapper">
							<span class="step-icon step-icon-soft-info">D</span>

							<div class="step-content">
								<h5 class="mb-1">David Lidell</h5>

								<p class="font-size-sm mb-1">Added a new member to Front Dashboard</p>

								<small class="text-muted text-uppercase">May 15</small>
							</div>
						</div>
					</li>
					<!-- End Step Item -->

					<!-- Step Item -->
					<li class="step-item">
						<div class="step-content-wrapper">
							<div class="step-avatar">
								<img class="step-avatar-img" src="assets/img/160x160/img7.jpg" alt="Image Description">
							</div>

							<div class="step-content">
								<h5 class="mb-1">Rachel King</h5>

								<p class="font-size-sm mb-1">Marked <a class="text-uppercase" href="#"><i
											class="tio-folder-bookmarked"></i> Fr-3</a> as <span
										class="badge badge-soft-success badge-pill"><span
											class="legend-indicator bg-success"></span>"Completed"</span></p>

								<small class="text-muted text-uppercase">Apr 29</small>
							</div>
						</div>
					</li>
					<!-- End Step Item -->

					<!-- Step Item -->
					<li class="step-item">
						<div class="step-content-wrapper">
							<div class="step-avatar">
								<img class="step-avatar-img" src="assets/img/160x160/img5.jpg" alt="Image Description">
							</div>

							<div class="step-content">
								<h5 class="mb-1">Finch Hoot</h5>

								<p class="font-size-sm mb-1">Earned a "Top endorsed" <i
										class="tio-verified text-primary"></i> badge</p>

								<small class="text-muted text-uppercase">Apr 06</small>
							</div>
						</div>
					</li>
					<!-- End Step Item -->

					<!-- Step Item -->
					<li class="step-item">
						<div class="step-content-wrapper">
							<span class="step-icon step-icon-soft-primary">
								<i class="tio-user"></i>
							</span>

							<div class="step-content">
								<h5 class="mb-1">Project status updated</h5>

								<p class="font-size-sm mb-1">Marked <a class="text-uppercase" href="#"><i
											class="tio-folder-bookmarked"></i> Fr-3</a> as <span
										class="badge badge-soft-primary badge-pill"><span
											class="legend-indicator bg-primary"></span>"In progress"</span></p>

								<small class="text-muted text-uppercase">Feb 10</small>
							</div>
						</div>
					</li>
					<!-- End Step Item -->
				</ul>
				<!-- End Step -->

				<a class="btn btn-block btn-white" href="javascript:;">View all <i class="tio-chevron-right"></i></a>
			</div>
			<!-- End Body -->
		</div>
	</div>
	<!-- End Activity -->

	<!-- ========== END SECONDARY CONTENTS ========== -->


	<!-- JS Implementing Plugins -->
	<script src="assets/js/vendor.min.js"></script>
	<script src="assets/vendor/chart.js/dist/Chart.min.js"></script>
	<script src="assets/vendor/chart.js.extensions/chartjs-extensions.js"></script>
	<script src="assets/vendor/chartjs-plugin-datalabels/dist/chartjs-plugin-datalabels.min.js"></script>



	<!-- JS Front -->
	<script src="assets/js/theme.min.js"></script>

	<!-- JS Plugins Init. -->
	<script>
      $(document).on('ready', function () {
        // ONLY DEV
        // =======================================================
        
          if (window.localStorage.getItem('hs-builder-popover') === null) {
            $('#builderPopover').popover('show')
              .on('shown.bs.popover', function () {
                $('.popover').last().addClass('popover-dark')
              });

            $(document).on('click', '#closeBuilderPopover' , function() {
              window.localStorage.setItem('hs-builder-popover', true);
              $('#builderPopover').popover('dispose');
            });
          } else {
            $('#builderPopover').on('show.bs.popover', function () {
              return false
            });
          }
        
        // END ONLY DEV
        // =======================================================


        // BUILDER TOGGLE INVOKER
        // =======================================================
        $('.js-navbar-vertical-aside-toggle-invoker').click(function () {
          $('.js-navbar-vertical-aside-toggle-invoker i').tooltip('hide');
        });

        
          // INITIALIZATION OF MEGA MENU
          // =======================================================
          var megaMenu = new HSMegaMenu($('.js-mega-menu'), {
            desktop: {
              position: 'left'
            }
          }).init();
        

        
        // INITIALIZATION OF NAVBAR VERTICAL NAVIGATION
        // =======================================================
        var sidebar = $('.js-navbar-vertical-aside').hsSideNav();

        
        // INITIALIZATION OF TOOLTIP IN NAVBAR VERTICAL MENU
        // =======================================================
        $('.js-nav-tooltip-link').tooltip({ boundary: 'window' })

        $(".js-nav-tooltip-link").on("show.bs.tooltip", function(e) {
          if (!$("body").hasClass("navbar-vertical-aside-mini-mode")) {
            return false;
          }
        });

        
        // INITIALIZATION OF UNFOLD
        // =======================================================
        $('.js-hs-unfold-invoker').each(function () {
          var unfold = new HSUnfold($(this)).init();
        });

        
        // INITIALIZATION OF FORM SEARCH
        // =======================================================
        $('.js-form-search').each(function () {
          new HSFormSearch($(this)).init()
        });

        
        // INITIALIZATION OF SELECT2
        // =======================================================
        $('.js-select2-custom').each(function () {
          var select2 = $.HSCore.components.HSSelect2.init($(this));
        });

        
        // INITIALIZATION OF CHARTJS
        // =======================================================
        Chart.plugins.unregister(ChartDataLabels);

        $('.js-chart').each(function () {
          $.HSCore.components.HSChartJS.init($(this));
        });

        var updatingChart = $.HSCore.components.HSChartJS.init($('#updatingData'));

        // CALL WHEN TAB IS CLICKED
        // =======================================================
        $('[data-toggle="chart-bar"]').click(function(e) {
          let keyDataset = $(e.currentTarget).attr('data-datasets')

         if (keyDataset === 'lastWeek') {
           updatingChart.data.labels = ["Apr 22", "Apr 23", "Apr 24", "Apr 25", "Apr 26", "Apr 27", "Apr 28", "Apr 29", "Apr 30", "Apr 31"];
           updatingChart.data.datasets = [
             {
               "data": [120, 250, 300, 200, 300, 290, 350, 100, 125, 320],
               "backgroundColor": "#377dff",
               "hoverBackgroundColor": "#377dff",
               "borderColor": "#377dff"
             },
             {
               "data": [250, 130, 322, 144, 129, 300, 260, 120, 260, 245, 110],
               "backgroundColor": "#e7eaf3",
               "borderColor": "#e7eaf3"
             }
           ];
           updatingChart.update();
         } else {
           updatingChart.data.labels = ["May 1", "May 2", "May 3", "May 4", "May 5", "May 6", "May 7", "May 8", "May 9", "May 10"];
           updatingChart.data.datasets = [
             {
               "data": [200, 300, 290, 350, 150, 350, 300, 100, 125, 220],
               "backgroundColor": "#377dff",
               "hoverBackgroundColor": "#377dff",
               "borderColor": "#377dff"
             },
             {
               "data": [150, 230, 382, 204, 169, 290, 300, 100, 300, 225, 120],
               "backgroundColor": "#e7eaf3",
               "borderColor": "#e7eaf3"
             }
           ]
           updatingChart.update();
         }
        })

        
        // INITIALIZATION OF BUBBLE CHARTJS WITH DATALABELS PLUGIN
        // =======================================================
        $('.js-chart-datalabels').each(function () {
          $.HSCore.components.HSChartJS.init($(this), {
            plugins: [ChartDataLabels],
            options: {
              plugins: {
                datalabels: {
                  anchor: function(context) {
                    var value = context.dataset.data[context.dataIndex];
                    return value.r < 20 ? 'end' : 'center';
                  },
                  align: function(context) {
                    var value = context.dataset.data[context.dataIndex];
                    return value.r < 20 ? 'end' : 'center';
                  },
                  color: function(context) {
                    var value = context.dataset.data[context.dataIndex];
                    return value.r < 20 ? context.dataset.backgroundColor : context.dataset.color;
                  },
                  font: function(context) {
                    var value = context.dataset.data[context.dataIndex],
                      fontSize = 25;

                    if (value.r > 50) {
                      fontSize = 35;
                    }

                    if (value.r > 70) {
                      fontSize = 55;
                    }

                    return {
                      weight: 'lighter',
                      size: fontSize
                    };
                  },
                  offset: 2,
                  padding: 0
                }
              }
            },
          });
        });

        
        // INITIALIZATION OF DATERANGEPICKER
        // =======================================================
        $('.js-daterangepicker').daterangepicker();

        $('.js-daterangepicker-times').daterangepicker({
          timePicker: true,
          startDate: moment().startOf('hour'),
          endDate: moment().startOf('hour').add(32, 'hour'),
          locale: {
            format: 'M/DD hh:mm A'
          }
        });

        var start = moment();
        var end = moment();

        function cb(start, end) {
          $('#js-daterangepicker-predefined .js-daterangepicker-predefined-preview').html(start.format('MMM D') + ' - ' + end.format('MMM D, YYYY'));
        }

        $('#js-daterangepicker-predefined').daterangepicker({
          startDate: start,
          endDate: end,
          ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
          }
        }, cb);

        cb(start, end);

        
        // INITIALIZATION OF DATATABLES
        // =======================================================
        var datatable = $.HSCore.components.HSDatatables.init($('#datatable'), {
          select: {
            style: 'multi',
            selector: 'td:first-child input[type="checkbox"]',
            classMap: {
              checkAll: '#datatableCheckAll',
              counter: '#datatableCounter',
              counterInfo: '#datatableCounterInfo'
            }
          },
          language: {
            zeroRecords: '<div class="text-center p-4">' +
                '<img class="mb-3" src="./assets/svg/illustrations/sorry.svg" alt="Image Description" style="width: 7rem;">' +
                '<p class="mb-0">No data to show</p>' +
                '</div>'
          }
        });

        $('.js-datatable-filter').on('change', function() {
          var $this = $(this),
            elVal = $this.val(),
            targetColumnIndex = $this.data('target-column-index');

          datatable.column(targetColumnIndex).search(elVal).draw();
        });

        $('#datatableSearch').on('mouseup', function (e) {
          var $input = $(this),
            oldValue = $input.val();

          if (oldValue == "") return;

          setTimeout(function(){
            var newValue = $input.val();

            if (newValue == ""){
              // Gotcha
              datatable.search('').draw();
            }
          }, 1);
        });

        
        // INITIALIZATION OF CLIPBOARD
        // =======================================================
        $('.js-clipboard').each(function() {
          var clipboard = $.HSCore.components.HSClipboard.init(this);
        });
      });
    </script>

	<!-- IE Support -->
    <script>
      if (/MSIE \d|Trident.*rv:/.test(navigator.userAgent)) document.write('<script src="./assets/vendor/babel-polyfill/polyfill.min.js"><\/script>');
    </script>
</body>

</html>

<!-- Localized -->