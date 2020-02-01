<div class="margina">
    <div class="row">
        <div class="col-sm-2">
            {!! form::label('price','How much do you offer?') !!}
        </div>
        <div class="col-sm-10">
            <div class="form-group {{ $errors->has('price') ? 'has-error' : "" }}">
                {{ Form::text('price',NULL, ['class'=>'form-control', 'id'=>'price', 'placeholder'=>'Insert']) }}
                {{ $errors->first('price', ':message') }}
            </div>
        </div>
    </div>
    <div class="col-sm-10">
        <div class="form-group {{ $errors->has('user_id') ? 'has-error' : "" }}">
            {{ Form::hidden('user_id',Auth::user()->id, ['class'=>'form-control', 'id'=>'user_id', 'placeholder'=>'Insert']) }}
            {{ $errors->first('user_id', ':message') }}
        </div>
    </div>
    <div class="col-sm-10">
        <div class="form-group {{ $errors->has('product_id') ? 'has-error' : "" }}">
            {{ Form::hidden('product_id',$product->id, ['class'=>'form-control', 'id'=>'product_id', 'placeholder'=>'Insert']) }}
            {{ $errors->first('product_id', ':message') }}
        </div>
    </div>
    <div class="form-group">
        {{ Form::button(isset($model)? 'Update' : 'save' , ['class'=>'btn btn-success', 'type'=>'submit']) }}
    </div>
</div>
