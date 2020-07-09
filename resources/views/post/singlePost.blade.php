@extends('layouts.app')

@section('title')
  {{$singlePost->title}} - ReadyMart
@endsection


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-body">
                    <h1 style="font-size: 25px; font-weight: 500">{{$singlePost->title}}</h1>
                    <br>
                    <img src="{{asset('public/post/')}}/images/{{$singlePost->image}}" alt="image"  style="width:100%; height:auto; border: 1px solid">
                    <p style="margin: 15px 0px;">{{$singlePost->description}}</p>  
                    <!-- Social share buttons -->
                <div class="addthis_inline_share_toolbox"></div>
                    <h1></h1>
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection
