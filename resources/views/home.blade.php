@extends('layouts.guest')

@section('content')
<div>
    <p>
        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
    </p>
</div>
@endsection

