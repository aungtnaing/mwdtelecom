@extends('dashboard.default')
@section('content')
<!-- MAIN CONTENT -->

<div id="content">
	<div id="content-header">
		<div id="breadcrumb"> <a href="{{ url('/dashboard') }}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">edit category</a> </div>
		<!-- <h1>USER LISTS</h1> -->
	</div>
	<div class="container-fluid">
		<hr>
		<div class="row-fluid">
			<div class="span4">
				<!-- <h3 class="panel-title">New Category</h3> -->
				@if (count($errors) > 0)
				<div class="alert alert-danger">
					<ul>
						@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>
				@endif	
				<div class="widget-box">
					<div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
						<h5>Category-info</h5>
					</div>
					<div class="widget-content nopadding">
						<form action="{{ route("categorys.update", $category->id) }}" method="POST" accept-charset="UTF-8" enctype="multipart/form-data">
							<input name="_method" type="hidden" value="PATCH">
							<input type="hidden" name="_token" value="{{ csrf_token() }}">
								<ul class="thumbnails">
									<li class="span3"> <a> 
										<input style="display:none;" id="file-input1" name="photourl1" type='file' onchange="readURL(this);"/>                    
										<label for="file-input1">
											<i class="icon-camera"></i>.Main 35 X 35<br>
											@if($category->photourl1!="")
											<img id="blah" src= "{{ $category->photourl1 }}" width="100" height="100">
											@else
											<img id="blah" src="//placehold.it/100" alt="avatar" alt="your image" />
											@endif
										</label>
										<div class="actions"><a id="preview1" class="lightbox_trigger" herf=""><i class="icon-search"></i></a> </div>

									</li>
									
									

								</ul>

							<div class="control-group">
								<label class="control-label">Name :</label>
								<div class="controls">
									<input type="text" class="span11" id="" name="name" placeholder="Enter Category Name" value="{{ $category->name }}" required>
								</div>
							</div>


							<div class="control-group">
								<label class="control-label">mName :</label>
								<div class="controls">
									<input type="text" class="span11" id="" name="mname" placeholder="Enter Category mName" value="{{ $category->mname }}" required>
								</div>
							</div> 

							<div class="control-group">
									<label class="control-label">Description:</label>
									<div class="controls">
										<textarea class="textarea_editor span12" name="description" placeholder="Enter your description" class="span11" rows="4">{{ $category->description }}</textarea>
										
									</div>
								</div>



							<div class="form-actions">
								<input class="btn btn-primary" type="submit" value="Save"> 
							</div>
						</form>
					</div>
				</div>

				
			</div>
		</div>
	</div>
</div>

<script src="<?php echo url(); ?>/assets/js/jquery.min.js"></script> 
	<script src="<?php echo url(); ?>/assets/js/jquery.ui.custom.js"></script> 
	<script src="<?php echo url(); ?>/assets/js/bootstrap.min.js"></script> 
	<script src="<?php echo url(); ?>/assets/js/bootstrap-colorpicker.js"></script> 
	<script src="<?php echo url(); ?>/assets/js/bootstrap-datepicker.js"></script> 
	<script src="<?php echo url(); ?>/assets/js/jquery.toggle.buttons.js"></script> 
	<script src="<?php echo url(); ?>/assets/js/masked.js"></script> 
	<script src="<?php echo url(); ?>/assets/js/jquery.uniform.js"></script> 
	<script src="<?php echo url(); ?>/assets/js/select2.min.js"></script> 
	<script src="<?php echo url(); ?>/assets/js/matrix.js"></script> 
	<script src="<?php echo url(); ?>/assets/js/matrix.form_common.js"></script> 
	<script src="<?php echo url(); ?>/assets/js/wysihtml5-0.3.0.js"></script> 
	<script src="<?php echo url(); ?>/assets/js/jquery.peity.min.js"></script> 
	<script src="<?php echo url(); ?>/assets/js/bootstrap-wysihtml5.js"></script> 

	<script>
		$('.textarea_editor').wysihtml5();
	</script>

<script type="text/javascript">
	function readURL(input) {
		if (input.files && input.files[0]) {
			var reader = new FileReader();

			reader.onload = function (e) {
				$('#blah')
				.attr('src', e.target.result)
				.width(100)
				.height(100);
			};

			reader.readAsDataURL(input.files[0]);
		}
	}


</script>

@stop




