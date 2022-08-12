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
                <div class="container">
                    @if(session()->has('success'))
                    <div class="alert alert-success">
                        {{session()->get('success')}}
                    </div>
                    @endif
                        <button class="btn btn-primary form-control">Edit Your Profile</button>
                    <div class="card">
                    <div class="card-body">
						<form action="/user/profile/{{Auth::user()->id}}" method="post">
                            @csrf
                            @method('PATCH')
								<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<label>Name:</label>
													<input type="text" class="form-control" name="name" id="name" value="{{Auth::user()->name}}"  placeholder="Name" >
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
												<label>Password:</label>
													<input type="text" class="form-control" name="password" id="password" value="{{Auth::user()->password}}" placeholder="password">
												</div>
											</div>
                                            <div class="col-md-12">
												<div class="form-group">
												<label>Confirm Password:</label>
													<input type="text" class="form-control" name="password" id="password" value="" placeholder="new password">
												</div>
											</div>
                                            <div class="col-md-12">
												<div class="form-group">
												<label>Address:</label>
													<input type="text" class="form-control" name="address" id="address" value="{{Auth::user()->address}}" placeholder="Subject">
												</div>
											</div>
                                            <div class="col-md-12">
												<div class="form-group">
												<label>PHONE NO:</label>
													<input type="text" class="form-control" name="phone" id="phone" value="{{Auth::user()->phone}}" placeholder="Subject" >
												</div>
											</div>	
                                            <button type="submit" class="btn btn-danger">Edit Profile</button>
											</div>
										</div>
									</form>
								    </div>
                                </div>
							</div>
                            </div>
                <!--end work-->
</div>
</div>
    <!-- end of container-scroller -->
    <!--footer-->
    @include ('dashboard.layout.footer')
    <!--footer close-->