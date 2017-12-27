@extends('dashboard.default')
@section('content')
<!-- MAIN CONTENT -->

<div id="content">
	<div id="content-header">
		<div id="breadcrumb"> <a href="{{ url('/dashboard') }}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">main-blade</a> </div>
		<!-- <h1>USER LISTS</h1> -->
	</div>
	<div class="container-fluid">
		<hr>
		<div class="row-fluid">
			<div class="span12">

				
			<!-- 	<a class="btn btn-primary btn-mini pull-left" href="{{ route("mainslides.create") }}">Add New mainslide</a>
		-->

		<div class="widget-box">
			<div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
				<h5>Main</h5>
			</div>
			<div class="widget-content nopadding">
				<table class="table table-bordered data-table">
					

					<thead>
						<tr>
							<th>sort</th>
							<th>Photo</th>					
							<th>title</th>
							<th>mtitle</th>
							<th>stitle</th>
							<th>mstitle</th>
							<th>description</th>
							<th>mdescription</th>
							<th></th>
						</tr>
					</thead>
					<tbody>

						@foreach($mainslides as $mainslide)
						<tr lass="gradeX">   
							<td>{{ $mainslide->id }}</td>
							<td><img src="{{ $mainslide->photourl1 }}" width="200" height="100"></td>
							
							<td>{{ $mainslide->title }}</td>
							<td>{{ $mainslide->mtitle }}</td>

							<td>{{ $mainslide->stitle }}</td>
							<td>{{ $mainslide->mstitle }}</td>

							<td>{{ $mainslide->description }}</td>
							<td>{{ $mainslide->mdescription }}</td>

							<td>
								<a class="btn btn-mini btn-primary" href="{{ route("mainslides.edit", $mainslide->id ) }}">Edit</a>
							</td>
						</tr>
						@endforeach


					</tbody>
				</table>

			</div>

		</div>
	</div>

</div>
</div>

</div>

<script src="<?php echo url(); ?>/assets/js/jquery.min.js"></script> 
<script src="<?php echo url(); ?>/assets/js/jquery.ui.custom.js"></script> 
<script src="<?php echo url(); ?>/assets/js/bootstrap.min.js"></script> 
<script src="<?php echo url(); ?>/assets/js/jquery.uniform.js"></script> 
<script src="<?php echo url(); ?>/assets/js/select2.min.js"></script> 
<script src="<?php echo url(); ?>/assets/js/jquery.dataTables.min.js"></script> 
<script src="<?php echo url(); ?>/assets/js/matrix.js"></script> 
<script src="<?php echo url(); ?>/assets/js/matrix.tables.js"></script>

@stop

