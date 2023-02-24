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
                    <h1>Edit Product</h1>
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
                
               <!-- Show error message on top in form of list 
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

            </div> <!-- End of card header -->

            <div class="card-body">

                <p> <a href="{{ route('products.index') }}" class="btn btn-default">Back</a> </p>

                <div class="row">

                    <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 ">

                        <!-- Form -->
                        <form action="{{ route('products.update',$product->id) }}" method="post">

                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label for="">Product Name </label>
                                        <input type="text" name="product_name" value="{{ $product->product_name }}" class="form-control" id="">
                                    </div>
                                        <!-- error message for name field -->
                                        <span class="text-danger">@error('product_name') {{ $message }} @enderror </span>
                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label for="">Product Description</label>
                                        <input type="text" class="form-control" id="" name="product_description" value="{{ $product->product_description }}">
                                    </div>
                                        <!-- error message for description field -->
                                        <span class="text-danger">@error('product_description') {{ $message }} @enderror </span>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                                    <div class="form-group">
                                        <label for="">status</label>
                                        <input type="text" class="form-control" name="product_status" id="" value="{{ $product->product_status }}">
                                    </div>
                                        <!-- error message for status field -->
                                        <span class="text-danger">@error('product_status') {{ $message }} @enderror </span>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <input href="" type="submit" value="Submit" class="btn btn-primary">
                                    <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
                                </div>
                            </div>


                        </form> <!-- End of Form -->

                    </div>

                </div>

            </div> <!-- End of card-body -->
        </div> <!-- End of card header    -->

    </section><!-- End of section -->
    
</div> <!-- End-of-content-wrapper -->
 



@include('partials.footer')