@extends('layouts.app')

@section('content')
<div class='center'>
<h1 class='redheading'>
            Cars
        </h1>
        <a href='cars/create'><span class='button1'>Add a new car</span></a>

@foreach ($cars as $car)
<div class='center' >
    <div >
    

    <span class='uppercase'>founded:{{$car->founded}}</span>
    <h2>{{$car->name}}</h2>
    <p>{{$car->description}}</p>
    
</div>
</div>


@endforeach

@endsection
