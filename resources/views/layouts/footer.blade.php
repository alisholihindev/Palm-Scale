<!-- General JS Scripts -->
<script src="{{ asset('admin_assets/js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('admin_assets/js/popper.min.js') }}"></script>
<script src="{{ asset('admin_assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('admin_assets/js/jquery.nicescroll.min.js') }}"></script>
<script src="{{ asset('admin_assets/js/moment.min.js') }}"></script>
<script src="{{ asset('admin_assets/js/stisla.js') }}"></script>

<!-- JS Libraies -->
<script src="{{ asset('admin_assets/js/jquery.simpleWeather.min.js') }}"></script>
<script src="{{ asset('admin_assets/js/jquery.sparkline.min.js') }}"></script>
<script src="{{ asset('admin_assets/js/Chart.min.js') }}"></script>
<script src="{{ asset('admin_assets/js/jquery.vmap.min.js') }}"></script>
<script src="{{ asset('admin_assets/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('admin_assets/js/summernote-bs4.js') }}"></script>
<script src="{{ asset('admin_assets/js/jquery.chocolat.min.js') }}"></script>
<script src="{{ asset('admin_assets/js/select2.full.min.js') }}"></script>

<!-- Template JS File -->
<script src="{{ asset('admin_assets/js/scripts.js') }}"></script>
<script src="{{ asset('admin_assets/js/custom.js') }}"></script>

<!-- Page Specific JS File -->
<script src="{{ asset('admin_assets/js/index-0.js') }}"></script>
<script src="{{ asset('admin_assets/js/sweetalert.js') }}"></script>
<script src="{{ asset('admin_assets/js/bootstrap-timepicker.min.js') }}"></script>
<script src="{{ asset('admin_assets/js/daterangepicker.js') }}"></script>

<script>
	$(document).ready(function($) {
		$(".select2").select2({
			width: '100%',
		});

		$('.daterange-cus').daterangepicker({
			locale: {format: 'YYYY-MM-DD'},
			drops: 'down',
			opens: 'right',
			alwaysShowCalendars: true,
			showCustomRangeLabel: false,
			ranges: {
				'Today': [moment(), moment()],
				'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
				'Last 7 Days': [moment().subtract(6, 'days'), moment()],
				'Last 30 Days': [moment().subtract(29, 'days'), moment()],
				'This Month': [moment().startOf('month'), moment().endOf('month')],
				'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
			}
		});
		
	});
</script>
