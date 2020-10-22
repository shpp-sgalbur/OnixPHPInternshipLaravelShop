
    
  <div class="container body">
      <div class="main_container">
        @include('admin.navbar')
        @include('admin.topmenu')
        <!-- top navigation -->
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
          @yield('user')
          @yield('users')
          
          
          <!-- /top tiles -->

          <div class="row">
            <div class="col-md-12 col-sm-12 ">
              
                <div class="clearfix"></div>
              </div>
            </div>

          </div>
          <br />

          <div class="row">


            <div class="col-md-4 col-sm-4 ">
              <div class="x_panel tile fixed_height_320">
                
              </div>
            </div>

            <div class="col-md-4 col-sm-4 ">
              <div class="x_panel tile fixed_height_320 overflow_hidden">
                <div class="x_content">
                  
                     
                </div>
              </div>
            </div>


            <div class="col-md-4 col-sm-4 ">
              
            </div>

          </div>


          <div class="row">
            <div class="col-md-4 col-sm-4 ">
              
            </div>


            <div class="col-md-8 col-sm-8 ">



              <div class="row">

                </div>

              </div>
              <div class="row">


                <!-- Start to do list -->
                <!-- End to do list -->
                
                <!-- start of weather widget -->
                <!-- end of weather widget -->
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        
        <!-- /footer content -->
      </div>
    </div>

