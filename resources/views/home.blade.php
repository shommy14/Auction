@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Sold Products</div>
                <div class="card-body">
                    <table class="table table-bordered text-sm-center">
                        <tr>
                            <th>Name</th>
                            <th>Price sold</th>
                            <th>Date sold</th>
                            <th>Sold To</th>
                        </tr>
                        @if(count($products)>0)
                            @foreach ($products as $product)
                                @if($product -> sold == 1)
                                    @if(Auth::user()->id == $product -> userId)
                                        <tr>
                                            <td>{{ $product-> name }}</td>
                                            <td>{{ $product-> price_sold }}</td>
                                            <td>{{ $product-> due_date }}</td>
                                            <td>
                                                @foreach($users as $user)
                                                    @if($user -> id == $product->buyer_id)
                                                        {{ $user -> name }}
                                                    @endif
                                                @endforeach
                                            </td>
                                        </tr>
                                    @endif
                                @endif
                            @endforeach
                        @else
                            <p>You still have no soled products!</p>
                        @endif
                    </table>
                </div>
            </div>
                <div class="card">
                    <div class="card-header">Bought Products</div>
                        <div class="card-body">
                        <table class="table table-bordered text-sm-center">
                            <tr>
                                <th>Name</th>
                                <th>Date</th>
                                <th>Price Bought</th>
                                <th>Previus Owner</th>
                            </tr>
                            @if(count($products)>0)
                                @foreach ($products as $product)
                                    @if($product -> sold == 1)
                                        @if(Auth::user()->id == $product -> buyer_id)
                                            <tr>
                                                <td>{{ $product-> name }}</td>
                                                <td>{{ $product-> due_date }}</td>
                                                <td>{{ $product-> price_sold }}</td>
                                                <td>{{ $product-> user -> name }}</td>
                                            </tr>
                                        @endif
                                    @endif
                                @endforeach
                            @else
                                <p>You still have no bought products!</p>
                            @endif
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

<style>
    .card{
        margin-top: 20px;
    }
</style>
