@extends('redwerk')

@section('content')
    <div class="menu-form form-wrapper">
        <h1 class="apage-title">Edit menu item</h1>
        {!! Form::open(['action' => ['MenuController@update', $menu], 'method' => 'PATCH', 'class' => 'form']) !!}

        <div class="form-group col-md-6">
            {!! Form::label('title', 'Title:', ['class' => 'title-label']) !!}
            {!! Form::text('title', $menu->title, ['class' => 'form-control', 'placeholder' => 'Title']) !!}
        </div>

        <div class="form-group col-md-6">
            {!! Form::label('url', 'Url:', ['class' => 'title-label']) !!}
            {!! Form::text('url', $menu->url, ['class' => 'form-control', 'placeholder' => 'Url']) !!}
        </div>

        <div class="form-group checkbox-wrapper col-md-6">
            <label>Published:
                {!! Form::hidden('published', 0) !!}
                {!! Form::checkbox('published', 1, $menu->published, ['class' => 'checkbox-inline']) !!}
            </label>
        </div>

        <div class="form-group col-md-6">
            {!! Form::submit('Submit', ['class' => 'btn btn-success pull-right']) !!}
        </div>
        {!! Form::close() !!}
    </div>
@endsection
