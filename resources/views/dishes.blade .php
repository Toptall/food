@extends('layouts.base')
@section('content')
    <div class="container overflow-hidden">
        <div class="row gx-5"><h1>{{$menu->name}}</h1></div>
       
        <div class="row gy-5 ">
            <div class="col">
                <div class="p-3 border bg-light">
                   @if($menu->picture)
                   <img src="{{$menu->picture}}">
                   @endif 
                    <div> {!!$menu->body!!}</div>
                </div>
            </div>
        </div>
    
    </div>

@endsection



