 
 @extends('Layout.Adminnav')
@section("content")
 
 
 
 
  <!-- Sidebar Navigation end-->
  <div class="page-content">
        <!-- Page Header-->
        <div class="page-header no-margin-bottom">
          <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Basic forms</h2>
          </div>
        </div>
        <!-- Breadcrumb-->
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">Basic forms            </li>
          </ul>
        </div>
        <section class="no-padding-top">
          <div class="container-fluid">
            <div class="row">
              <!-- Basic Form-->
              <div class="col-lg-12">
                <div class="block">
                  <div class="title"><strong class="d-block">Basic Form</strong><span class="d-block">Lorem ipsum dolor sit amet consectetur.</span></div>
                  <div class="block-body">
                    <form action="/" method="POST">
                    @csrf
                      <div class="form-group">
                        <label class="form-control-label">Name</label>
                        <input type="text" placeholder="Name" class="form-control" name="product_name">
                      </div>
                      <div class="form-group">       
                        <label class="form-control-label">Contact</label>
                        <input type="text" placeholder="Type" class="form-control" name="cell_no">
                      </div>

                      <div class="form-group">       
                        <label class="form-control-label">Quantity</label>
                        <input type="text" placeholder="Price" class="form-control" name="product_quan">
                      </div>
                      <div class="form-group">       
                        <label class="form-control-label">Category</label>
                        <input type="text" placeholder="Category" class="form-control" name="product_cat">
                      </div>
                      <div class="form-group">       
                        <input type="submit" value="Submit" class="btn btn-primary">
                      </div>
                    </form>
                  </div>
                </div>
              </div>



              </div> <!--row-->
          </div>
          <!--container fluid-->
        </section>



</div>
        <!-- Page Content-->


              @endsection