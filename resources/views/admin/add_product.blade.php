@extends('admin_layout')
@section('admin_content')
	<div class="content-wrapper">
    	<section class="content">
    	<div class="container-fluid">
			<div class="card card-default">
				<div class="card-header">
					<h3 class="card-title">Add Product</h3>
					<div class="card-tools">
						<button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
						<button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
					</div>
				</div>
				<div class="card-body">
					<div class="row">
						<form class="card-body" action="{{ URL::to('/save_product')}}" method="post" enctype="multipart/form-data">
							{{ csrf_field() }}
							<div class="col-md-12">
								<div class="form-group">
									<label>Cateogory *</label>
										<select class="form-control select2" style="width: 100%;" name="category_id" required="">
										<option>Select</option>
										<?php
										$all_category_info=DB::table('tbl_category')->get();
											foreach($all_category_info as $v_category)
											{
												if( $v_category->parent_id!=''){?>
													<option value="{{ $v_category->id }}">{{ $v_category->name }}</option>
										<?php 	}
											} ?>
									</select>
								</div>
								<div class="form-group">
									<label>Brand *</label>
										<select class="form-control select2" style="width: 100%;" name="brand_id" required="">
										<option>Select</option>
										<?php
										$all_brand_info=DB::table('tbl_brands')->get();
											foreach($all_brand_info as $v_brand)
											{?>
												<option value="{{ $v_brand->id }}">{{ $v_brand->name }}</option>
										<?php
											} ?>
									</select>
								</div>

								<div class="form-group">
									<label for="exampleInputEmail1">Size *</label>
									<input type="text" class="form-control" id="exampleInputEmail1" placeholder="100 characters maximum" name="size" required="">
								</div>
								<div class="form-group">
									<label for="exampleInputEmail1">Colour *</label>
									<input type="text" class="form-control" id="exampleInputEmail1" placeholder="100 characters maximum" name="colour" required="">
								</div>
								<div class="form-group">
									<label for="exampleInputEmail1">Title *</label>
									<input type="text" class="form-control" id="exampleInputEmail1" placeholder="100 characters maximum" name="title" required="">
								</div>
								<div class="form-group">
									<label for="exampleInputEmail1">Eng</label>
									<input type="text" class="form-control" id="exampleInputEmail1" placeholder="100 characters maximum" name="eng">
								</div>
								<div class="form-group">
									<label for="exampleInputEmail1">Slug</label>
									<input type="text" class="form-control" id="exampleInputEmail1" placeholder="200 characters maximum" name="slug">
								</div>
								<div class="form-group">
									<label for="exampleInputEmail1">Product Code *</label>
									<input type="text" class="form-control" id="exampleInputEmail1" placeholder="200 characters maximum" name="product_code" required="">
								</div>
								<div class="form-group">
									<label for="exampleInputEmail1">Sell Price *</label>
									<input type="text" class="form-control" id="exampleInputEmail1" placeholder="200 characters maximum" name="sell_price" required="">
								</div>
								<div class="form-group">
									<label for="exampleInputEmail1">Discount</label>
									<input type="text" class="form-control" id="exampleInputEmail1" placeholder="200 characters maximum" name="discount">
								</div>
							
								<div class="form-group">
									<label for="exampleInputEmail1">Regular Price *</label>
									<input type="text" class="form-control" id="exampleInputEmail1" placeholder="200 characters maximum" name="regular_price" required="">
								</div>
								<div class="form-group">
									<label for="exampleInputEmail1">Short Description *</label>
						            <div class="card-body pad">
						            	<div class="mb-3">
						                	<textarea class="textarea" name="short_description" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" required=""></textarea>
						                </div>
						            </div>
								</div>
								<div class="form-group">
									<label for="exampleInputEmail1">Long Description *</label>
						            <div class="card-body pad">
						            	<div class="mb-3">
						                	<textarea class="textarea" name="long_description" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" required=""></textarea>
						                </div>
						            </div>
								</div>
								<div class="form-group">
									<label for="exampleInputEmail1">Meta Description</label>
									<input type="text" class="form-control" id="exampleInputEmail1" placeholder="200 characters maximum" name="meta_description">
								</div>
								<div class="form-group">
									<label for="exampleInputEmail1">Meta Keyword</label>
									<input type="text" class="form-control" id="exampleInputEmail1" placeholder="200 characters maximum" name="meta_keyword">
								</div>
								<div class="form-group">
									<label for="exampleInputFile">Cover Image</label>
									<div class="input-group">
										<div class="custom-file">
											<input type="file" class="custom-file-input" name="cover_image" id="exampleInputFile" required="">
											<label class="custom-file-label" for="exampleInputFile">Choose file</label>
										</div>
									</div>
								</div>
								<div class="form-group">
									<label for="exampleInputFile">Another Image 1</label>
									<div class="input-group">
										<div class="custom-file">
											<input type="file" class="custom-file-input" name="other_image_1" id="exampleInputFile">
											<label class="custom-file-label" for="exampleInputFile">Choose file</label>
										</div>
									</div>
								</div>
								<div class="form-group">
									<label for="exampleInputFile">Another Image 2</label>
									<div class="input-group">
										<div class="custom-file">
											<input type="file" class="custom-file-input" name="other_image_2" id="exampleInputFile">
											<label class="custom-file-label" for="exampleInputFile">Choose file</label>
										</div>
									</div>
								</div>
								<div class="form-check">
									<input type="checkbox" class="form-check-input" name="availability" id="exampleCheck1" value="1">
									<label class="form-check-label" for="exampleCheck1">Availability</label>
								</div>
								<div class="form-check">
									<input type="checkbox" class="form-check-input" name="status" id="exampleCheck1" value="1">
									<label class="form-check-label" for="exampleCheck1">Publish</label>
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