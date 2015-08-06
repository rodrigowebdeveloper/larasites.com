@extends('layout', ['title' => 'Submit a site | Larasites.com'])

@section('content')
{!! Form::open(['method' => 'post', 'url' => '/submit/submit']) !!}
<div class="form-group {{ $errors->has('url') || $errors->has('scheme') ? 'has-error' : '' }}">
    {!! Form::text('url', null, ['class' => 'form-control', 'autofocus' => 'autofocus', 'placeholder' => 'eg. http://laravel.com']) !!}
    @if ($errors->has('url'))
        <p class="help-block">{{ $errors->first('url') }}</p>
    @elseif ($errors->has('scheme'))
        <p class="help-block">{{ $errors->first('scheme') }}</p>
    @endif
</div>
{!! Form::submit(null, ['class' => 'btn btn-default']) !!}
{!! Form::close() !!}
@stop
