@extends('layouts.app')

@section('content')
<div class='center'>
    

@foreach ($cars as $car)
<div>
    <div>
    <div>
        <h1 class='redheading'>
            Cars
        </h1>
    </div>

    <span class='uppercase'>founded:{{$car->founded}}</span>
    <h2>Audi</h2>
    <p>{{$car->description}}</p>
</div>
</div>


@endforeach
</div>
@endsection
