@extends('layout.index')
@section('content')
<p><br><br><br></p>



<form action="/{{$utilisateur->id}}/update" method="post">
@csrf
@method('PUT')
<div>Poid : <input type="number" value="{{$utilisateur->poid}}" name="poid"></div>
<div>Calories : <input type="number" value="{{$utilisateur->calorie}}" name="calorie"></div>
<button type="submit">Update</button>
</form>
@endsection

