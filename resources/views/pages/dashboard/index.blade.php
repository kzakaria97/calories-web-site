@extends('layout.index')
@section('content')
<p><br><br><br></p>

<form action="/db/{{$utilisateur->id}}" method="post">
@csrf
@method('PUT')

<input type="text" value="{{$utilisateur->calorie}}">
<input type="text" value="{{$utilisateur->poid}}">

</form>
@endsection
