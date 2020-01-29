<div class="margina">
    <div class="row">
        <div class="col-sm-2">
            {!! form::label('name','Name') !!}
        </div>
        <div class="col-sm-10">
            <div class="form-group {{ $errors->has('name') ? 'has-error' : "" }}">
                {{ Form::text('name',NULL, ['class'=>'form-control', 'id'=>'name', 'placeholder'=>'Insert']) }}
                {{ $errors->first('name', ':message') }}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-2">
            {!! form::label('description','Description') !!}
        </div>
        <div class="col-sm-10">
            <div class="form-group {{ $errors->has('description') ? 'has-error' : "" }}">
                {{ Form::text('description',NULL, ['class'=>'form-control', 'id'=>'description', 'placeholder'=>'Insert']) }}
                {{ $errors->first('description', ':message') }}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-2">
            {!! form::label('starter_price','Price') !!}
        </div>
        <div class="col-sm-10">
            <div class="form-group {{ $errors->has('starter_price') ? 'has-error' : "" }}">
                {{ Form::text('starter_price',NULL, ['class'=>'form-control', 'id'=>'starter_price', 'placeholder'=>'Insert']) }}
                {{ $errors->first('starter_price', ':message') }}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-2">
            {!! form::label('payment','Payment') !!}
        </div>
        <div class="col-sm-10">
            <div class="form-group {{ $errors->has('payment') ? 'has-error' : "" }}">
                {{ Form::text('payment',NULL, ['class'=>'form-control', 'id'=>'payment', 'placeholder'=>'Insert']) }}
                {{ $errors->first('payment', ':message') }}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-2">
            {!! form::label('shipment','Shipment') !!}
        </div>
        <div class="col-sm-10">
            <div class="form-group {{ $errors->has('shipment') ? 'has-error' : "" }}">
                {{ Form::text('shipment',NULL, ['class'=>'form-control', 'id'=>'shipment', 'placeholder'=>'Insert']) }}
                {{ $errors->first('shipment', ':message') }}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-10">
            <div class="form-group {{ $errors->has('sold') ? 'has-error' : "" }}">
                {{ Form::hidden('sold', 0, ['class'=>'form-control', 'id'=>'sold', 'placeholder'=>'Insert']) }}
                {{ $errors->first('sold', ':message') }}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-2">
            {!! form::label('catId','Category') !!}
        </div>
        <div class="col-sm-10">
            <div class="form-group {{ $errors->has('catId') ? 'has-error' : "" }}">
                <select name="catId" id="catId" class="form-control">
                    @foreach($categories as $category)
                        <option value="{{$category -> id}}">{{ $category -> name }}</option>
                    @endforeach
                </select>
                {{ $errors->first('catId', ':message') }}
            </div>
        </div>
    </div>

    <div class="col-sm-10">
        <div class="form-group {{ $errors->has('userId') ? 'has-error' : "" }}">
            {{ Form::hidden('userId',Auth::user()->id, ['class'=>'form-control', 'id'=>'userId', 'placeholder'=>'Insert']) }}
            {{ $errors->first('userId', ':message') }}
        </div>
    </div>
    <div class="form-group">
        {{ Form::button(isset($model)? 'Update' : 'save' , ['class'=>'btn btn-success', 'type'=>'submit']) }}
    </div>
</div>


<style>
    .margina{
        margin-top: 10%;
        margin-left: 10px;
    }
</style>
