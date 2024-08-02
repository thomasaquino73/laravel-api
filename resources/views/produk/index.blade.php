@extends('layout')
@section('konten')
    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Product</h1>
            </div>
            <div class="section-body">
                <div class="card">
                    <div class="card-header">
                        <h4>Add Product</h4>
                    </div>
                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $item)
                                    <li>{{ $item }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        @if (session()->has('success'))
                        <div class="alert alert-success">
                                {{ session('success') }}
                        </div>
                        @endif
                        <form method="POST" action="">
                            @csrf
                            <div class="form-group row">
                                <label for="recipient-name" class="col-sm-3  ">Product Name:</label>
                                <div class="col-sm-9">
                                    <input type="text" name="Product_name" value="{{ isset($data['Product_name'])?$data['Product_name']: old('Product_name') }}"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="recipient-name" class="col-sm-3  ">Category:</label>
                                <div class="col-sm-9">
                                    <input type="text" name="Category" class="form-control"
                                        value="{{ isset($data['Category'])?$data['Category']: old('Category') }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="recipient-name" class="col-sm-3  ">Price:</label>
                                <div class="col-sm-9">
                                    <input type="number" name="Price" class="form-control" value="{{ isset($data['Price'])?$data['Price']: old('Price') }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="recipient-name" class="col-sm-3  ">Discount:</label>
                                <div class="col-sm-9">
                                    <input type="text" name="Discount" class="form-control"
                                        value="{{ isset($data['Discount'])?$data['Discount']: old('Discount') }}">
                                </div>
                            </div>
                            
                    </div>
                    <div class="card-footer bg-whitesmoke">
                        <a href="{{ url('product') }}" type="button" class="btn btn-warning">Reset</a>
                        <button type="submit" class="btn btn-primary">Save</button>
                        </form>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h4>Product List</h4>

                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped" id="table-1">
                                <thead>
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th>Product</th>
                                        <th>Category</th>
                                        <th>Price</th>
                                        <th>Discount</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $no = 1;
                                    @endphp
                                    @foreach ($data as $item)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $item['Product_name'] }}</td>
                                            <td>{{ $item['Category'] }}</td>
                                            <td>{{ $item['Price'] }}</td>
                                            <td>{{ $item['Discount'] }}</td>
                                            <td>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-primary dropdown-toggle"
                                                        data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">Action</button>
                                                    <div class="dropdown-menu">
                                                        <a href="{{ url('product/' . $item['id']) }}"
                                                            class="btn btn-success dropdown-item "> Edit</a>


                                                        <form action="{{ url('product/' . $item['id']) }}" method="post"
                                                            onsubmit="return confirm('Are You Sure Want To Delete?')">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger dropdown-item ">
                                                                Delete
                                                            </button>
                                                        </form>


                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer bg-whitesmoke">
                        {{ $footer }}
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
