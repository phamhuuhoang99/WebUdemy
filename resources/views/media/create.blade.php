@extends('layouts.admin')
@section('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.2/min/dropzone.min.css">
@endsection
@section('content')
<h1>Upload Media</h1>
{!! Form::open(['method'=>'PATCH','action'=>'AdminMediaController@store','class'=>'dropzone']) !!}
{!! Form::close() !!}

@endsection
@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.2/min/dropzone.min.js"></script>
@endsection