@extends('layouts.base')
@section('content')
    <div class="container overflow-hidden">
        <div class="row gx-5"><h1><a href="{{asset('plan/'.$menu->plan_id)}}">{{$menu->plan->name}}</a> {{$menu->name}}</h1></div>
        
        @foreach($menu->dishes as $dish)
        <div class="row align-items-center">
            <div class="col-6">
                
                   <!-- @if($menu->picture)
                   <img src="{{$menu->picture}}">
                   @endif 
                    <div> {!!$menu->body!!}</div> -->
                <div class="row">
                    <div class="col-12 p-3">
                        <img src="{{$dish->img}}">
                    </div>
                    <div class="col-12">
                        <h2>
                        {{$dish->name}}
                        </h2>
                        
                    </div>
                </div>  
            </div>
            <div class="col-6">
                <div class="row d-flex justify-content-between">
                    <div class="col-12">
                    {{$dish->body}} 
                    </div>
                    <div class="col-4">
                        Вес:    
                        {{$dish->weight}}
                    </div>
                    <div class="col-4">
                        Калорийность:
                        {{$dish->calories}}
                    </div>
                </div>
            </div>   
        </div>
        <hr/>
        @endforeach
    </div>

@endsection



