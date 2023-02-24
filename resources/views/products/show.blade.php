@include('partials.header')
@include('partials.navbar')
@include('partials.sidebar')



<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Show Products</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('products.index') }}">Home</a></li>
                        <li class="breadcrumb-item active">Table </li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <!-- <h3 class="card-title">Table Detail</h3> -->
                
                <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
            </div>

            </div>
            <div class="card-body">
                <p>
                    <a href="form.blade.php" class="btn btn-success">Add Product</a>
                </p>
                <div class="row">
                    <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 ">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width: 10px">Sr#</th>
                                    <th>Product</th>
                                    <th>Description</th>
                                    <th style="width: 40px">Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1.</td>
                                    <td>  {{ $product->product_name }}</td>
                                    <td>
                                    <p> {{ $product->product_detail }}</p>
                                    </td>
                                    <td><span class="badge bg-danger"> {{ $product->product_status }}</span></td>

                                    <td> 
                                        <a href="" class="btn btn-danger"> <i class="fa fa-trash"></i> </a>   
                                        <a href="" class="btn btn-success"> <i class="fa fa-edit"></i> </a>
                                    </td>

                                </tr>
                                <tr>
                                    <td>2.</td>
                                    <td>CS</td>
                                    <td>
                                    <p>Description Content will bw show here</p>
                                    </td>
                                    <td><span class="badge bg-danger">40%</span></td>

                                    <td> 
                                        <a href="" class="btn btn-danger"> <i class="fa fa-trash"></i> </a>   
                                        <a href="" class="btn btn-success"> <i class="fa fa-edit"></i> </a>
                                    </td>

                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
     
                <!-- Pagination -->
                <nav aria-label="Contacts Page Navigation">
            <ul class="pagination mt-2">
              <li class="page-item active"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item"><a class="page-link" href="#">4</a></li>
              <li class="page-item"><a class="page-link" href="#">5</a></li>
              <li class="page-item"><a class="page-link" href="#">6</a></li>
              <li class="page-item"><a class="page-link" href="#">7</a></li>
              <li class="page-item"><a class="page-link" href="#">8</a></li>
            </ul>
          </nav>
          <!-- End of -->

            </div>
            <!-- /.card-body -->
            <div class="card-footer">
         
            </div>
            <!-- /.card-footer-->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@include('partials.footer') 