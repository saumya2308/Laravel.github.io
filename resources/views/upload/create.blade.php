@extends('layouts.app')
@section('content')
<div class="ms_register_form">
    {!! Form::open(['action' => 'UploadController@store', 'method' => 'POST'] ) !!}
    {{Form::file('song'),['class' => 'form-control22']}}
 <br>   {{Form::text('song_name', '', ['class' => 'form-control22','placeholder' => 'song_name'])}}
<br>    {{Form::submit('submit',['class' => 'save_btn2'])}}
    {!! Form::close() !!}
</div>
@endsection