@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">My bids</div>
                    <div class="card-body">
                        <table class="table table-bordered text-sm-center">
                            <tr>
                                <th>Product id number</th>
                                <th>Product name</th>
                                <th>Your bid</th>
                                <th></th>
                            </tr>
                            @if(count($bids)>0)
                                @foreach ($bids as $bid)
                                    @if(Auth::user()->id == $bid -> user_id)
                                        <tr>
                                            <td>{{ $bid-> product -> id }}</td>
                                            <td>{{ $bid-> product -> name }}</td>
                                            <td>{{ $bid-> price }}</td>
                                            <td>
                                                @if($bid -> product -> sold == 0)
                                                <a class="btn btn-success" href="{{route('bids.destroy',$bid->id)}}"> Cancel Bid
                                                    <i class="glyphicon glyphicon-pencil"></i>
                                                </a>
                                                @else
                                                    {{ 'Auction expired' }}
                                                @endif
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            @else
                                <p>Find product that you need and make a first bid!</p>
                            @endif
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
