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
                    <h1>Products</h1>
                </div>

                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('products.index') }}">Home</a></li>
                        <li class="breadcrumb-item active">Products </li>
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
                <!-- <h3 class="card-title">Product Detail </h3> -->
                @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
                @endif
            </div>
            <div class="card-body">
                <p>
                    <a href="{{ route('products.create') }}" class="btn btn-success">Add Product</a>
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
                                @foreach ($products as $product)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <!-- <td> {{ $product->id }} </td> -->
                                    <td> {{ $product->product_name }} </td>
                                    <td>
                                        <p> {{ $product->product_description }} </p>
                                    </td>
                                    <td> <span class="badge bg-danger"> {{ $product->product_status }} </span></td>
                                    <td>
                                        <form action="{{ route('products.destroy',$product->id) }}" method="POST">

                                            <a class="btn btn-success" href="{{ route('products.edit',$product->id) }}"><i class="fa fa-edit"></i></a>

                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger"> <i class="fa fa-trash"></i> </button>

                                        </form>
                                    </td>

                                </tr>
                                @endforeach

                            </tbody>
                        </table>

                        <!-- {!! $products->links() !!} -->

                    </div>
                </div>

                <!-- Pagination -->
                <nav aria-label="Contacts Page Navigation">
                    <ul class="pagination mt-2">
                    {!!$products->links()!!}
                    </ul>
                </nav>
                <!-- End of pagination-->

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