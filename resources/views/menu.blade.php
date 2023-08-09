@extends('layouts.base')
@section('content')
    <div class="container overflow-hidden">
        <div class="row gx-5"><h1>Все меню</h1></div>
        @foreach ($plans as $plan)  
        <div class="row gy-5 ">
            <div class="col">
                <div class="p-3 border bg-light">
                        <h2>
                            {{$plan->name}}
                        </h2>
                        @foreach ($plan->menus as $menu)  
        <div class="row gy-5 ">
            <div class="col">
                <div class="p-3 border bg-light">
                    <h6>
                        <a href="{{asset('menu/'.$menu->id)}}">
                            <h5>
                            <!-- !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!{{$menu->plan_id}} -->
                            </h5>
                            {{$menu->name}}
                        </a>
                    </h6>
                    <!-- <div> {!!$menu->body!!}</div> -->
                </div>
            </div>
        </div>
    @endforeach
                </div>
            </div>
        </div>
    @endforeach
      
    </div>

@endsection



