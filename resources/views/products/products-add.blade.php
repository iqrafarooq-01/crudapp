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
                    <h1>Add Product</h1>
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

 <!-- Show error list on the top
            @if ($errors->any())
                <div class="alert alert-danger">
                    There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif -->


            </div>
            <div class="card-body">
                <p> <a href="{{ route('products.index') }}" class="btn btn-default">Back</a> </p>
                <div class="row">

                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <!-- Form -->
                        <form action="{{ route('products.store') }}" method="post" role="form">
                            @csrf
                            <div class="row">

                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                                    <div class="form-group">
                                        <label for="">Name </label>
                                        <input type="text" name="product_name" class="form-control" value="{{ old('product_name') }}" id="" placeholder="Enter product name here">
                                    </div>
                                     <!-- error message for name field -->
                                     <span class="text-danger">@error('product_name') {{ $message }} @enderror </span>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <label for="">Description </label>
                                        <input type="text" name="product_description" class="form-control" value="{{ old('product_description') }}" id="" placeholder="Enter product description here">
                                    </div>
                                    <!-- error message for description field -->
                                    <span class="text-danger">@error('product_description') {{ $message }} @enderror </span>
                                </div>


                            </div>

                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <label for="">Status</label>
                                        <input type="text" name="product_status" class="form-control" value="{{ old('product_status') }}" id="" placeholder="Enter Product status">
                                    </div>
                                    <!-- error message for status field -->
                                    <span class="text-danger">@error('product_status') {{ $message }} @enderror </span>
                                </div>
                            </div>

                            <div class="row">
                                <input href="" type="submit" value="Submit" class="btn btn-primary">
                            </div>

                        </form> <!-- End of Form -->

                    </div>

                </div>

            </div><!-- /.card-body -->
        </div><!-- /.card -->

    </section> <!-- /.Section -->

</div> <!-- /.content-wrapper -->

@include('partials.footer')