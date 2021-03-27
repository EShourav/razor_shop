@extends('admin_layout')
@section('admin_content')
	<div class="content-wrapper">
    	<section class="content">
    	<div class="container-fluid">
			<div class="card card-default">
				<div class="card-header">
					<h3 class="card-title">Add Size</h3>
					<div class="card-tools">
						<button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
						<button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
					</div>
				</div>
				<div class="card-body">
					<div class="row">
						<form class="card-body" action="{{url('/save_size')}}" method="post" enctype="multipart/form-data">
							{{ csrf_field() }}
							<div class="col-md-12">
								<div class="form-group">
									<label for="exampleInputEmail1">Size</label>
									<input type="text" class="form-control" id="exampleInputEmail1" placeholder="100 characters maximum" name="size" required="">
								</div>
								<div class="card-footer">
									<button type="submit" class="btn btn-primary">Submit</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		</section>
	</div>

	<script src="../../plugins/jquery/jquery.min.js"></script>
	<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="../../plugins/select2/js/select2.full.min.js"></script>
	<script src="../../plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
	<script src="../../plugins/moment/moment.min.js"></script>
	<script src="../../plugins/inputmask/min/jquery.inputmask.bundle.min.js"></script>
	<script src="../../plugins/daterangepicker/daterangepicker.js"></script>
	<script src="../../plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
	<script src="../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
	<script src="../../plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
	<script src="../../dist/js/adminlte.min.js"></script>
	<script src="../../dist/js/demo.js"></script>
	<script>
	$(function () {
		//Initialize Select2 Elements
		$('.select2').select2()
		//Initialize Select2 Elements
		$('.select2bs4').select2({
		theme: 'bootstrap4'
		})
		//Datemask dd/mm/yyyy
		$('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
		//Datemask2 mm/dd/yyyy
		$('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
		//Money Euro
		$('[data-mask]').inputmask()
		//Date range picker
		$('#reservationdate').datetimepicker({
		format: 'L'
		});
		//Date range picker
		$('#reservation').daterangepicker()
		//Date range picker with time picker
		$('#reservationtime').daterangepicker({
			timePicker: true,
			timePickerIncrement: 30,
			locale: {
				format: 'MM/DD/YYYY hh:mm A'
			}
		})
		//Date range as a button
		$('#daterange-btn').daterangepicker(
		{
			ranges   : {
				'Today'       : [moment(), moment()],
				'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
				'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
				'Last 30 Days': [moment().subtract(29, 'days'), moment()],
				'This Month'  : [moment().startOf('month'), moment().endOf('month')],
				'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
			},
			startDate: moment().subtract(29, 'days'),
			endDate  : moment()
		},
		function (start, end) {
			$('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
		}
		)
		//Timepicker
		$('#timepicker').datetimepicker({
			format: 'LT'
		})
		//Bootstrap Duallistbox
		$('.duallistbox').bootstrapDualListbox()
		//Colorpicker
		$('.my-colorpicker1').colorpicker()
		//color picker with addon
		$('.my-colorpicker2').colorpicker()
		$('.my-colorpicker2').on('colorpickerChange', function(event) {
			$('.my-colorpicker2 .fa-square').css('color', event.color.toString());
		});
		$("input[data-bootstrap-switch]").each(function(){
			$(this).bootstrapSwitch('state', $(this).prop('checked'));
		});
	})
	</script>
@endsection