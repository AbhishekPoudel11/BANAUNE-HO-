
<!--header-->
@include ('dashboard.layout.header')
<!--header close-->
  <div class="container-scroller">
    <!-- navbar.html -->
    @include ('dashboard.layout.nav')
    <!-- navbar end -->
        <!--main body-->
    <div class="container-fluid page-body-wrapper">
            <!-- sidebar.html -->
    @include ('dashboard.layout.sidebar')
            <!-- End of sidebar -->
                <!--work-->
                <div>
					  @if(session()->has('success'))
                    <div class="alert alert-success">
                        {{session()->get('success')}}
                    </div>
                    @endif
    <button class="btn btn-primary form-control">My Profile</button>
<div class="card">	
	<div class="card-body">	
		@if(Auth::user()->images)
		<img src="{{asset('storage/images/'.Auth::user()->images)}}" alt="" style="width:130px; height:130px; padding:9px;"  class="image rounded-circle img-circle">
		@endif
		<form method="POST" action="/user/profile_pic/{{Auth::user()->id}}" enctype="multiparts/form-data">
    @csrf
	@method('PATCH')
	<input type="file" id="ïmg" name="images"/>
	<input type="submit" value="Upload Picture" class="form-control">
</form>
								<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<label>Name:</label>
													<input type="text" class="form-control" name="name" id="name" value="{{Auth::user()->name}}"  placeholder="Name" readonly>
												</div>
											</div>
											<div class="col-md-12"> 
												<div class="form-group">
												<label>Email:</label>
													<input type="email" class="form-control" name="email" id="email" value="{{Auth::user()->email}}" placeholder="Email" readonly>
												</div>
											</div>
                                            <div class="col-md-12">
												<div class="form-group">
												<label>Address:</label>
													<input type="text" class="form-control" name="address" id="address" value="{{Auth::user()->address}}" placeholder="Subject" readonly>
												</div>
											</div>
                                            <div class="col-md-12">
												<div class="form-group">
												<label>PHONE NO:</label>
													<input type="text" class="form-control" name="phone" id="phone" value="{{Auth::user()->phone}}" placeholder="Subject" readonly>
												</div>
											</div>	
											</div>
										</div>
									
								</div>
								</div>
								</div>
							</div>
                <!--end work-->
    </div>
    <!-- page-body-wrapper ends -->
    </div>

    <!-- end of container-scroller -->
    <!--footer-->
    @include ('dashboard.layout.footer')
    <!--footer close-->