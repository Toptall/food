@extends('layouts.base')
@section('content')
<div class="container overflow-hidden">
    <div class="container p-5">
        <div class="row">
            <a href="{{asset('plan')}}">Планы</a>
            <h2>{{$plan->name}}</h2> 
            {{$plan->body}}
        </div>
        @foreach($plan->menus as $menu)
        <a href="{{asset('menu/'.$menu->id)}}">
            {{$menu->name}}
        </a>
        {!!$menu->body!!}
        @endforeach
    </div>     
</div>
@endsection