@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">All bids</div>
                    <div class="card-body">
                        <table class="table table-bordered text-sm-center">
                            <tr>
                                <th>Product Name</th>
                                <th>User Name</th>
                                <th>Initial price</th>
                            </tr>
                            @if(count($bids)>0)
                                @foreach ($bids as $bid)
                                    @if($bid -> product_id == $bid -> product -> id)
                                        <tr>
                                            <td>{{ $bid -> product -> name }}</td>
                                            <td>{{ $bid-> user -> name }}</td>
                                            <td>{{ $bid-> price }}</td>
                                        </tr>
                                    @endif
                                @endforeach
                                @else
                                {{ 'There are no bids for this product. ' }}
                            @endif
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
