@extends('layouts.unregistered')

@section('content')
    <div class="product-section container">
        <div class="sidebar">
            <h1>{{ $category-> name }}</h1>
            <div class="products justify-content-center ">
                <div class="card">
                    <div class="card-header">Products</div>
                    <div class="card-body">
                        <table class="table table-bordered text-sm-center">
                            <tr>
                                <th>Name</th>
                                <th>Initial price</th>
                                <th>Due Date</th>
                                <th></th>
                            </tr>
                            @if(count($products)>0)
                                @foreach ($products as $product)
                                    @if($product -> sold == 0)
                                    <tr>
                                        <td>{{ $product-> name }}</td>
                                        <td>{{ $product-> starter_price }}</td>
                                        <td>{{ $product-> due_date }}</td>
                                        <td>
                                            <a class="btn btn-success" href="{{route('products.show',$product->id)}}">View
                                                <i class="glyphicon glyphicon-pencil"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    @endif
                                @endforeach
                            @else
                                <p>There are no products for {{ $category-> name }} category.</p>
                            @endif
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
