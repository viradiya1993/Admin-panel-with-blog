@extends('admin.layouts.app')

@section('main-content')
	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
	
	  <!-- Main content -->
	  <section class="content">
	    <div class="row">
	      <div class="col-md-12">
	        <!-- general form elements -->
	        <div class="box box-primary">
	          <div class="box-header with-border">
	            <h3 class="box-title">Add Tags</h3>
	          </div>

	          @include('includes.messages')
	          <!-- /.box-header -->
	          <!-- form start -->
	          <form role="form" action="{{ route('tag.store') }}" method="post">
	          {{ csrf_field() }}
	            <div class="box-body">
	            <div class="col-lg-offset-3 col-lg-6">
	              <div class="form-group">
	                <label for="name">Tag title</label>
	                <input type="text" class="form-control" id="name" name="name" placeholder="Tag Title">
	              </div>

	              <div class="form-group">
	                <label for="slug">Tag Slug</label>
	                <input type="text" class="form-control" id="slug" name="slug" placeholder="Slug">
	              </div>

	            <div class="form-group">
	              <button type="submit" class="btn btn-primary">Submit</button>
	              <a href='{{ route('tag.index') }}' class="btn btn-warning">Back</a>
	            </div>
	            	
	            </div>
					
				</div>

	          </form>
	        </div>
	        <!-- /.box -->

	        
	      </div>
	      <!-- /.col-->
	    </div>
	    <!-- ./row -->
	  </section>
	  <!-- /.content -->
	</div>
	<!-- /.content-wrapper -->
@endsection