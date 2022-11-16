 
 @extends('Layout.Adminnav')
@section("content")
 
 
 
 
 
 <!-- Sidebar Navigation end-->
 <div class="page-content">
        <!-- Page Header-->
        <div class="page-header no-margin-bottom">
          <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Tables</h2>
              @if(session('status'))
                <h4 class="alert  alert-warning">{{session('status')}}</h4>
              @endif
            <a href="/create"> <button class="btn btn-outline-primary"> Add New Data </button> </a>
          </div>
        </div>
        <!-- Breadcrumb-->
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">Tables            </li>
            <li class="breadcrumb-item active">Total:{{$total_contacts}}            </li>
          </ul>
        </div>
        <section class="no-padding-top">
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-12">
                <div class="block margin-bottom-sm">
                  <div class="title"><strong>Basic Table</strong></div>
                  <div class="table-responsive"> 
                    <table class="table">
                      <thead>
                        <tr>
                        <th> Id</th>
                          <th> Name</th>
                          <th>Type</th>
                          <th>Price</th>
                        </tr>
                      </thead>
                      <tbody>
                        <!-- table name -->
                        @php $i=1; @endphp
                         @forelse($Admins as $key => $item)
                            <tr>
                            <td> {{ $i++}} </td>
                            <!-- <td> {{ $key }} </td> -->
                            <td> {{ $item['pname']}} </td>
                            <td> {{ $item['product_category']}} </td>
                            <td> {{ $item['quantity']}} </td>
                              <td> {{ $item['cellno']}} </td>


<!--
id is from database -->

<td><a href = "{{url('edit/'.$key)}}"><i class="fa fa-edit"></i></a></td>
<td>
<form action="{{url('delete/'.$key)}}" method="POST">
@method('delete')
@csrf
<button style="border:none;background-color:none"><i class="fa fa-trash"></i></button>
</form>
</td>

</tr>
                    @empty
                                 <tr>
                               <td colspan="7">No record found</td>
                                 </tr>                
                                 @endforelse    
                      </tbody>
                    </table>
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