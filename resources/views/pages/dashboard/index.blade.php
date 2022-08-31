@extends('layout.index')
@section('content')
<p><br><br><br></p>

@foreach ($utilisateur as $item)

@endforeach
<p>

    {{$item->id}}

    {{$item->calorie}}
    {{$item->poid}}

</p>


@endsection
