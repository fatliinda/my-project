@extends('layouts.app')

@section('content')
<h1>{{$car->name}}</h1>
<img  class='imgs'src="{{asset('images/'.$car->image_path)}}">


    

@endsection