@extends('layouts.app')

@section('content')

    <div class="container">
        <h1>Data in Controller</h1>
        <div>
            <prop-component v-bind:url-data="{{json_encode($urlData)}}"></prop-component>
        </div>
    </div>

@endsection
