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
        <div class="">
            <h1>Bhanaune ho</h1>
        </div>
                <!--end work-->
    </div>
        <!-- page-body-wrapper ends -->
  </div>
  <!-- end of container-scroller -->
    <!--footer-->
  @include ('dashboard.layout.footer')
    <!--footer close-->



