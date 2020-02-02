@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="full-right">
                <h2>Product</h2>
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        {{ Form::open(['route'=>'products.store', 'method'=>'POST', 'enctype'=>"multipart/form-data"]) }}
                        @include('products.form_master')
                        {{ form::close() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

<style>
    h2{
        margin-left: 30px;
    }
    .margina{
        margin-left: 25px;
    }
</style>
