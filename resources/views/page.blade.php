@extends('layouts.base')
@section('content')
    <div class="container overflow-hidden">
        <div class="container p-5">
            <div class="row">
                <div class="col">
                    <h3>{{$page->name}}</h3>
                </div>
            </div>
            <div class="row py-4">
                <div class="col">{!!$page->body!!}</div>
            </div>
        </div>
    </div>
@endsection
