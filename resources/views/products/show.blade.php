
@extends('layouts.app')
@section('content')
    <div class="margina">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2> {{$product->name }}</h2>
                </div>
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        {{ Form::open(['route'=>'bids.store', 'method'=>'POST']) }}
                        @include('bids.price_offer')
                        {{ form::close() }}
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Description: </strong>
                    {{ $product->description }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Category: </strong>
                    {{ $product->category->name }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Shipment: </strong>
                    {{ $product->shipment }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Payment: </strong>
                    {{ $product->payment }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Initial price: </strong>
                    {{ $product->starter_price }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Due date: </strong>
                    {{ $product->due_date }}
                </div>
            </div>
        </div>
    </div>
@endsection

<style>
    .margina{
        margin-left: 25px;
    }
</style>
