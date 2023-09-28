@extends('layouts.guest')

@section('content')
<h1 style="text-align: center;margin-top: 2em;">{{ __('error')}} 404 {{ __('error_404')}}</h1>
<a style="text-align: center;color: blue;" href="{{ route('home') }}"><p>{{ __('home') }}</p></a>
@endsection
