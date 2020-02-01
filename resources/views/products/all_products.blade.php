@extends('layouts.app')
@section('content')
    <h1>Products</h1>
    <div class="products justify-content-center ">
        <div class="card">
            <div class="card-header">All products <span>|</span>
                <select name="Category" id="catId" value="Category" onchange="location = this.value;">
                    <option value="" selected>Category</option>
                    @foreach($categories as $category)
                        <option value="{{ route('category', $category->id) }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="card-body">
                <table class="table table-bordered text-sm-center">
                    <tr>
                        <th>Name</th>
                        <th>Initial price</th>
                        <th>Product status</th>
                        <th>Due date</th>
                        <th></th>
                    </tr>
                    @if(count($products)>0)
                        @foreach ($products as $product)
                            @if(Auth::user()->id != $product -> userId)
                                <tr>
                                    <td>{{ $product-> name }}</td>
                                    <td>{{ $product-> starter_price }}</td>
                                    <td>{{ $product-> due_date }}</td>
                                    <td>
                                        @if( !empty($product))
                                            @if($product -> sold)
                                                {{'Sold'}}
                                            @else
                                                {{'Active'}}
                                            @endif
                                        @else
                                            {{'Active'}}
                                        @endif
                                    </td>
                                    <td>
                                        @if($product -> sold == 0)
                                            <a class="btn btn-success" href="{{route('products.show',$product->id)}}">View
                                                <i class="glyphicon glyphicon-pencil"></i>
                                            </a>
                                        @else
                                            {{ 'Product sold!' }}
                                        @endif
                                    </td>
                                </tr>
                            @endif
                        @endforeach
                    @else
                        <p>Go for "Make Auction" tab for your first one!</p>
                    @endif
                </table>
            </div>
        </div>
    </div>
@endsection
