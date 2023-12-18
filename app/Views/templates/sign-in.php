<!doctype html>
<html>
<!--begin::Head-->

<head>
	<title>Project Luminary - Data based Projections</title>
	<meta charset="utf-8" />
	<meta name="description"
		content="Spark inspiration with iBlocks – experiential PBL activities that engage students in critical thinking, teamwork, and fun!" />
	<meta name="keywords"
		content="iBlock Package, experiential, project-based learning, classroom, Learning skills, critical thinking, reflection, impactful learning experiences" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta property="og:locale" content="en_US" />
	<meta property="og:type" content="article" />
	<meta property="og:title" content="iBlocks online - Project Based Learning" />
	<meta property="og:url" content="https://www.iBlocksonline.com" />
	<meta property="og:site_name" content="iBlocks Online" />
	<link rel="shortcut icon" href="/assets/media/logos/favicon.ico" />
	<!--begin::Fonts(mandatory for all pages)-->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link
		href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
		rel="stylesheet">
	<link
		href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
		rel="stylesheet">
	<!--end::Fonts-->
	<!--begin::Vendor Stylesheets(used for this page only)-->
	<link href="/assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
	<link href="/assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
	<!--end::Vendor Stylesheets-->
	<!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
	<link href="/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
	<link href="/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
	<!--end::Global Stylesheets Bundle-->
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" class="app-blank app-blank">
	<!--begin::Theme mode setup on page load-->
	<script>
		var defaultThemeMode = "light";
		var themeMode;
		if (document.documentElement) {
			if (document.documentElement.hasAttribute("data-theme-mode")) {
				themeMode = document.documentElement.getAttribute("data-theme-mode");
			} else {
				if (localStorage.getItem("data-theme") !== null) {
					themeMode = localStorage.getItem("data-theme");
				} else {
					themeMode = defaultThemeMode;
				}
			}
			if (themeMode === "system") {
				themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
			}
			document.documentElement.setAttribute("data-theme", themeMode);
		}
	</script>
	<!--end::Theme mode setup on page load-->
	<!--begin::Root-->
	<div class="d-flex flex-column flex-root" id="kt_app_root">
		<!--begin::Authentication - Sign-in -->
		<div class="d-flex flex-column flex-lg-row flex-column-fluid">
			<!--begin::Aside-->
			<div class="d-flex flex-lg-row-fluid w-lg-50 bgi-size-cover bgi-position-center order-1 order-lg-1"
				style="background-image: url(/assets/media/misc/auth-bg-dk.png)">
				<!--begin::Content-->
				<div class="d-flex flex-column flex-center py-7 py-lg-15 px-5 px-md-15 w-100">
					<!--begin::Logo-->
					<!-- <a href="index.html" class="mb-0 mb-lg-12">
						<img alt="Teq" src="/assets/media/logos/online_iblocks_Logo.png" class="h-150px h-lg-150px" />
					</a> -->
					<!--end::Logo-->
					<!--begin::Title-->
					<h1 class="d-none d-lg-block text-white fs-2qx fw-bolder mb-1 text-start w-500px">Project Luminary
					</h1>
					<!--end::Title-->
					<!--begin::SubTitle-->
					<h1 class="d-none d-lg-block text-primary fs-2 fw-bolder mb-2 w-500px">Like the stars, the possibilities are endless.</h1>
					<!--end::SubTitle-->
					<!--begin::Text-->
					<div class="d-none d-lg-block text-white fs-5 mb-7 w-500px">This is a site I am developing. Who knows what it will be. The future is bright.
					</div>
					<!--end::Text-->

					<!--begin::Image-->
					<!-- <img class="d-none d-lg-block mx-auto w-300px w-md-50 w-xl-550px mb-10 mb-lg-20 w-xxl-550px"
						src="assets/media/misc/auth-screens3.png" alt="iBloks Online" /> -->
					<!--end::Image-->

				</div>
				<!--end::Content-->
			</div>
			<!--end::Aside-->
			<!--begin::Body-->
			<div class="d-flex flex-column flex-lg-row-fluid w-lg-50 p-10 order-2 order-lg-2">
				<!--begin::Form-->
				<div class="d-flex flex-center flex-column flex-lg-row-fluid">
					<!--begin::Wrapper-->
					<div class="w-500px">
						<!--begin::Heading-->
						<div class="text-center mb-5">
							<!--begin::Title-->
							<h1 class="text-dark fw-bolder mb-3">Sign In</h1>
							<!--end::Title-->
						</div>
						<!--begin::Heading-->
						<!--begin::Accordion-->
						<div class="accordion" id="kt_accordion_1">
							<div class="accordion-item">
								<h2 class="accordion-header" id="kt_accordion_1_header_1">
									<button
										class="accordion-button fs-4 fw-bold <?php if(isset($_GET['teacher'])) { ?> <?php } else { ?> collapsed <?php } ?> text-primary"
										type="button" data-bs-toggle="collapse" data-bs-target="#kt_accordion_1_body_1"
										<?php if(isset($_GET['teacher'])) { ?> aria-expanded="true" <?php } else { ?>
										aria-expanded="false" <?php } ?> aria-controls="kt_accordion_1_body_1">
										<img alt="Teacher" src="/assets/media/svg/general/teacher.svg"
											class="h-35px me-3" />Are you a Admin? </button>
								</h2>
								<div id="kt_accordion_1_body_1"
									class="accordion-collapse collapse <?php if(isset($_GET['teacher'])) { ?>show<?php } ?>"
									aria-labelledby="kt_accordion_1_header_1" data-bs-parent="#kt_accordion_1">
									<div class="accordion-body">
										<form class="form w-100" id="login_main" method="POST"
											action="<?php echo base_url('/users/login'); ?>">
											<?php if(isset($_GET['password_error']) && $_GET['password_error'] == 1) { ?>
											<p style="color: red; font-weight: thin;">Incorrect Password, try again...
											</p>
											<?php } ?>
											<?php if(isset($_GET['deleted_acc']) && $_GET['deleted_acc'] == 1) { ?>
											<p style="color: red; font-weight: thin;">This account has been deleted....
											</p>
											<?php } ?>
											<?php if(isset($_GET['email_not_found']) && $_GET['email_not_found'] == 1) { ?>
											<p style="color: red; font-weight: thin;">No account associated with that
												email...</p>
											<?php } ?>
											<?php if(isset($_GET['valid_email_request']) && $_GET['valid_email_request'] == 1) { ?>
											<p style="color: red; font-weight: thin;">Please enter a valid email
												address..</p>
											<?php } ?>
											<div class="fv-row mb-8">
												<!--begin::Email-->
												<input type="text" placeholder="Email" name="email" autocomplete="off"
													class="form-control bg-transparent" />
												<!--end::Email-->
											</div>
											<!--end::Input group=-->
											<div class="fv-row mb-3">
												<!--begin::Password-->
												<input type="password" placeholder="Password" name="password"
													autocomplete="off" class="form-control bg-transparent" />
												<!--end::Password-->
											</div>
											<!--end::Input group=-->
											<!--begin::Wrapper-->
											<div class="d-flex flex-stack flex-wrap gap-3 fs-base fw-semibold mb-8">
												<div></div>
												<!--begin::Link-->
												<a href="/staff/forgot_password" class="link-primary">Forgot Password?</a>
												<!--end::Link-->
											</div>
											<!--end::Wrapper-->
											<!--begin::Submit button-->
											<div class="d-grid mb-10">
												<button type="submit" id="kt_sign_in_submit" class="btn btn-primary">
													<!--begin::Indicator label-->
													<span class="indicator-label">Sign In</span>
													<!--end::Indicator label-->
													<!--begin::Indicator progress-->
													<span class="indicator-progress">Please wait... <span
															class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
													<!--end::Indicator progress-->
												</button>
											</div>
											<!--end::Submit button-->
										</form>
										<!--sso here--> 
										<div class="login-footer text-center">
											<span class="bold">or Sign in with:</span>
											<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
												viewBox="0 0 500 60" style="enable-background:new 0 0 500 60;" xml:space="preserve">
												<style type="text/css">
												.st0 {fill:#DB3436;}
												</style>
												<rect y="0.1" class="st0" width="500" height="60"/>
												<a class="googleSSOURL" href="<?php echo base_url('/users/google_signon_login'); ?>">
												<g>
												<path id="path2998" d="M227.4,25.7h-10.4v3.1h7.3c-0.4,4.3-3.9,6.1-7.3,6.1c-4.3,0-8.1-3.4-8.1-8.2c0-4.7,3.6-8.2,8.1-8.2
													c3.5,0,5.5,2.2,5.5,2.2l2.2-2.2c0,0-2.8-3.1-7.8-3.1c-6.4,0-11.4,5.4-11.4,11.3c0,5.7,4.7,11.3,11.5,11.3c6,0,10.5-4.1,10.5-10.3
													C227.6,26.5,227.4,25.7,227.4,25.7L227.4,25.7z"/>
												<path id="path3000" d="M235.9,23.5c-4.2,0-7.3,3.3-7.3,7.2c0,3.9,3,7.3,7.3,7.3c4,0,7.2-3,7.2-7.2C243.2,26,239.4,23.5,235.9,23.5
													L235.9,23.5z M236,26.4c2.1,0,4.1,1.7,4.1,4.4c0,2.7-2,4.4-4.1,4.4c-2.3,0-4.1-1.9-4.1-4.4C231.8,28.2,233.6,26.4,236,26.4
													L236,26.4z"/>
												<path id="path3005" d="M251.8,23.5c-4.2,0-7.3,3.3-7.3,7.2c0,3.9,3,7.3,7.3,7.3c4,0,7.2-3,7.2-7.2C259.1,26,255.3,23.5,251.8,23.5
													L251.8,23.5z M251.8,26.4c2.1,0,4.1,1.7,4.1,4.4c0,2.7-2,4.4-4.1,4.4c-2.3,0-4.1-1.9-4.1-4.4C247.7,28.2,249.5,26.4,251.8,26.4
													L251.8,26.4z"/>
												<path id="path3007" d="M267.4,23.5c-3.9,0-7,3.4-7,7.3c0,4.4,3.6,7.3,6.9,7.3c2.1,0,3.2-0.8,4-1.8v1.4c0,2.5-1.5,4-3.8,4
													c-2.2,0-3.3-1.6-3.7-2.6l-2.8,1.2c1,2.1,3,4.3,6.5,4.3c3.9,0,6.8-2.4,6.8-7.6v-13h-3v1.2C270.3,24.2,269.1,23.5,267.4,23.5
													L267.4,23.5z M267.6,26.4c1.9,0,3.9,1.6,3.9,4.4c0,2.8-2,4.4-3.9,4.4c-2.1,0-4-1.7-4-4.4C263.6,28,265.6,26.4,267.6,26.4
													L267.6,26.4z"/>
												<path id="path3011" d="M287.8,23.5c-3.7,0-6.8,2.9-6.8,7.2c0,4.6,3.4,7.3,7.1,7.3c3.1,0,5-1.7,6.1-3.2l-2.5-1.7c-0.7,1-1.7,2-3.6,2
													c-2,0-3-1.1-3.6-2.2l9.7-4l-0.5-1.2C292.9,25.4,290.7,23.5,287.8,23.5L287.8,23.5z M288,26.3c1.3,0,2.3,0.7,2.7,1.5l-6.5,2.7
													C283.9,28.4,285.9,26.3,288,26.3L288,26.3z"/>
												<path id="path3015" d="M276.4,37.6h3.2V16.2h-3.2V37.6z"/>
												</g>
												</a>
												</svg>
                							</div>
										<!--sso end here-->
									</div>
								</div>
							</div>

							<div class="accordion-item">
								<h2 class="accordion-header" id="kt_accordion_1_header_2">
									<button
										class="accordion-button fs-4 fw-bold <?php if(isset($_GET['student'])) { ?> <?php } else { ?> collapsed <?php } ?> text-primary"
										type="button" data-bs-toggle="collapse" data-bs-target="#kt_accordion_1_body_2"
										<?php if(isset($_GET['student'])) { ?> aria-expanded="true" <?php } else { ?>
										aria-expanded="false" <?php } ?> aria-controls="kt_accordion_1_body_2">
										<img alt="Student" src="/assets/media/svg/general/student.svg"
											class="h-35px me-3" />Are you Staff? </button>
								</h2>
								<div id="kt_accordion_1_body_2"
									class="accordion-collapse collapse <?php if(isset($_GET['student'])) { ?>show<?php } ?>"
									aria-labelledby="kt_accordion_1_header_2" data-bs-parent="#kt_accordion_1">
									<div class="accordion-body">
										<form action="<?php echo base_url('/users/student_login'); ?>" method="POST"
											class="form w-100" novalidate="novalidate" id="kt_sign_in_form_student"
											data-kt-redirect-url="index.html">
											<?php if(isset($_GET['password_error']) && $_GET['password_error'] == 1) { ?>
											<p style="color: red; font-weight: thin;">Incorrect Password, try again...
											</p>
											<?php } ?>
											<?php if(isset($_GET['pin_not_found']) && $_GET['pin_not_found'] == 1) { ?>
											<p style="color: red; font-weight: thin;">No account associated with that
												email...</p>
											<?php } ?>
											<?php if(isset($_GET['valid_pin_request']) && $_GET['valid_pin_request'] == 1) { ?>
											<p style="color: red; font-weight: thin;">Please enter a valid email
												address..</p>
											<?php } ?>
											<div class="fv-row mb-8">
												<!--begin::Email-->
												<input type="text" placeholder="PIN" name="pin" autocomplete="off"
													class="form-control bg-transparent" />
												<!--end::Email-->
											</div>
											<!--end::Input group=-->
											<div class="fv-row mb-3">
												<!--begin::Password-->
												<input type="password" placeholder="Password" name="password"
													autocomplete="off" class="form-control bg-transparent" />
												<!--end::Password-->
											</div>
											<!--end::Input group=-->
											<!--begin::Wrapper-->
											<div class="d-flex flex-stack flex-wrap gap-3 fs-base fw-semibold mb-8">
												<div></div>
												<!--begin::Link-->
												<a href="reset-password.html" class="link-primary">Forgot Password?</a>
												<!--end::Link-->
											</div>
											<!--end::Wrapper-->
											<!--begin::Submit button-->
											<div class="d-grid mb-10">
												<button type="submit" id="kt_sign_in_submit_student"
													class="btn btn-primary">
													<!--begin::Indicator label-->
													<span class="indicator-label">Sign In</span>
													<!--end::Indicator label-->
													<!--begin::Indicator progress-->
													<span class="indicator-progress">Please wait... <span
															class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
													<!--end::Indicator progress-->
												</button>
											</div>
											<!--end::Submit button-->
										</form>
									</div>
								</div>
							</div>
							<br>
							<div class="w-500px fs-base fw-semibold mb-8">
								<!--begin::Link-->
								<!-- <a href="#" class="link-primary" data-bs-toggle="modal" data-bs-target="#kt_hubspot">Not
									a member? Contact us.</a> -->
								<!--end::Link-->
							</div>
						</div>
						<!--end::Accordion-->
						<br>
						<!--begin::Accordion-->
					</div>
					<!--end::Wrapper-->
					<div class="mt-8 mb-12 align-content-center align-middle">
            <div class="w-500px">
              <div class="align-middle fs-5 text-gray-700">The platform makes it easy for you to do whatever you want. I am still building it. Its me. I am building it. I am the one. I
				will see how it will turn out.
              </div>
            </div>
          </div>


          <!-- <div class="w-500px d-flex">
            <div class="col-4 ">
              <script src="https://fast.wistia.com/embed/medias/rxo9yi4rya.jsonp" async></script>
              <script src="https://fast.wistia.com/assets/external/E-v1.js" async></script>
              <div class="wistia_responsive_padding" style="padding:56.25% 0 0 0;position:relative;">
                <div class="wistia_responsive_wrapper" style="height:100%;left:0;position:absolute;top:0;width:100%;">
                  <span class="wistia_embed wistia_async_rxo9yi4rya popover=true videoFoam=true"
                    style="display:inline-block;height:100%;position:relative;width:100%">&nbsp;</span></div>
              </div>
            </div>
            <div class="col-8 align-middle ps-5">
              <h2 class="text-primary fw-bolder mb-3">Teacher Experience.</h2>
              <h5 class="text-dark mb-3 fw-normal">Play this video for a complete overview of the entire teacher
                features and capabilities.</h5>
            </div>
          </div> -->


          <!-- <div class="separator my-8 w-500px"></div>

          <div class="w-500px d-flex mb-10">
            <div class="col-4 ">
              <script src="https://fast.wistia.com/embed/medias/a9772k3vxv.jsonp" async></script>
              <script src="https://fast.wistia.com/assets/external/E-v1.js" async></script>
              <div class="wistia_responsive_padding" style="padding:56.25% 0 0 0;position:relative;">
                <div class="wistia_responsive_wrapper" style="height:100%;left:0;position:absolute;top:0;width:100%;">
                  <span class="wistia_embed wistia_async_a9772k3vxv popover=true videoFoam=true"
                    style="display:inline-block;height:100%;position:relative;width:100%">&nbsp;</span></div>
              </div>
            </div>
            <div class="col-8 align-middle ps-5">
              <h2 class="text-primary fw-bolder mb-3">Student Experience.</h2>
              <h5 class="text-dark mb-3 fw-normal">Play this video for a complete overview of the entire student
                features and capabilities.</h5>
            </div>

          </div> -->
        </div>
        <!--end::Form-->
				<!--begin::Footer-->
				<div class="d-flex flex-center flex-wrap px-5">
					<!--begin::Links-->
					<div class="d-flex fw-semibold text-primary fs-base">
						<a href="#" class="px-5" target="_blank">Privacy
							Policy</a>
					</div>
					<!--end::Links-->
				</div>
				<!--end::Footer-->
			</div>
			<!--end::Body-->

		</div>
		<!--end::Authentication - Sign-in-->
	</div>
	<!--end::Root-->

	<!--begin::Modal - Student Help Request-->

	<div class="modal fade" id="kt_hubspot" tabindex="-1" aria-hidden="true">
		<!--begin::Modal dialog-->
		<div class="modal-dialog modal-dialog-centered mw-900px">
			<!--begin::Modal content-->
			<div class="modal-content">
				<!--begin::Modal header-->
				<div class="modal-header">
					<!--begin::Modal title-->
					<h2 class="text-primary fw-bold serif-font">Get Information</h2>
					<!--end::Modal title-->
					<!--begin::Close-->
					<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
						<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
						<span class="svg-icon svg-icon-1">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
								xmlns="http://www.w3.org/2000/svg">
								<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
									transform="rotate(-45 6 17.3137)" fill="currentColor" />
								<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)"
									fill="currentColor" />
							</svg>
						</span>
						<!--end::Svg Icon-->
					</div>
					<!--end::Close-->
				</div>
				<!--end::Modal header-->
				<div class="rb-gradient mb-5">&nbsp;</div>
				<!--begin::Modal body-->
				<div class="modal-body py-lg-1 px-lg-10">



					<script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/embed/v2.js"></script>
					<script>
						hbspt.forms.create({
							region: "na1",
							portalId: "182596",
							formId: "30a39dd5-eb02-4f42-8f33-cf1048a9c984"
						});
					</script>







				</div>
				<!--end::Modal body-->
			</div>
			<!--end::Modal content-->
		</div>
		<!--end::Modal dialog-->
	</div>

	<!--end::Modal - Student Help Request-->

	<!--begin::Javascript-->
	<script>
		var hostUrl = "/assets/";
	</script>
	<!--begin::Global Javascript Bundle(mandatory for all pages)-->
	<script src="/assets/plugins/global/plugins.bundle.js"></script>
	<script src="/assets/js/scripts.bundle.js"></script>
	<!--end::Global Javascript Bundle-->
	<!--begin::Custom Javascript(used for this page only)-->
	<script src="/assets/js/custom/authentication/sign-in/general.js"></script>
	<!--end::Custom Javascript-->
	<!--end::Javascript-->
</body>
<!--end::Body-->

</html>
<script>
	$('#login_main').on('submit', function () {
		$('#kt_sign_in_submit').attr('disabled', 'disabled');
	});

	$('#kt_sign_in_form_student').on('submit', function () {
		$('#kt_sign_in_submit_student').attr('disabled', 'disabled');
	});
</script>