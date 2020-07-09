@extends('layouts.app')

@section('title')
  {{$singleVideo->title}} - ReadyMart
@endsection


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-body">
                    <h1 style="font-size: 25px; font-weight: 500">{{$singleVideo->title}}</h1>
                    <br><iframe width="100%" height="400px" src="https://www.youtube.com/embed/{{$singleVideo->video}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" ></iframe>
                    <p style="margin: 15px 0px;">{{$singleVideo->description}}</p>  
                    <!-- Social share buttons -->
                <div class="addthis_inline_share_toolbox"></div>
                    <h1></h1>
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection
