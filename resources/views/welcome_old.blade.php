@extends('layouts.app')

@section('title')
Home - ReadyMart
@endsection


@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="col-md-8">
            <div class="card">
                <!--                <div class="card-header text-center">Section 1</div>-->
                <div class="card-body">

                    <div class="row">
                        @foreach($sectionones as $index =>$sectionone)

                        <div class="col-md-6">
                            @if($index == 0)
                            @if($sectionone->content == 1)
                            <img src="{{asset('public/post/')}}/images/{{$sectionone->image}}" alt="image"  style="height: auto; margin-bottom: 10px; width: 100%; border: 1px solid">
                            <h5>{{$sectionone->title}}</h5>
                            <p class="text-justify">
                                {{substr($sectionone->description, 0, 250)}} ...
                            </p>
                            @else
                            <iframe width="300" height="160" src="https://www.youtube.com/embed/{{$sectionone->video}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <h5>{{$sectionone->title}}</h5>
                            <p class="text-justify">{{substr($sectionone->description, 0, 250)}} ...</p>
                            @endif
                            @endif
                        </div> 

                        <div class="col-md-6">
                            @if($index > 0)
                            <div class="row">
                                <div class="col-md-6">
                                    @if($sectionone->content == 1)
                                    <img src="{{asset('public/post/')}}/images/{{$sectionone->image}}" alt="image"  style="height: 80px; max-width: 135px; margin-bottom: 7px; border: 1px solid">
                                    <h6>{{$sectionone->title}}</h6>
                                    @else
                                    <iframe width="135" height="80" src="https://www.youtube.com/embed/{{$sectionone->video}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    <h6>{{$sectionone->title}}</h6>
                                    @endif 
                                </div>
                            </div>
                            @endif
                        </div>  
                        @endforeach 
                    </div>

                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <!--                <div class="card-header text-center">Section 2</div>-->
                <div class="card-body">
                    @foreach($posts as $index =>$post)
                    @if($post->section == 2)
                    @if($index == 0)

                        @if($post->content == 1)
                        <img src="{{asset('public/post/')}}/images/{{$post->image}}" alt="image"  style="height: auto; margin-bottom: 10px; width: 100%; border: 1px solid">
                        <h5>{{$post->title}}</h5>
                        <p class="text-justify">
                            {{substr($post->description, 0, 150)}} ...
                        </p>
                        @else
                        <iframe width="300" height="160" src="https://www.youtube.com/embed/{{$post->video}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <h5>{{$post->title}}</h5>
                        <p class="text-justify">{{substr($post->description, 0, 150)}} ...</p>
                        @endif
                    @else

                    <div class="col-md-5" style="float: left; margin-right: 20px;">
                        @if($post->content == 1)
                        <img src="{{asset('public/post/')}}/images/{{$post->image}}" alt="image"  style="height: 80px; max-width: 135px; margin-bottom: 7px; border: 1px solid">
                        <h6>{{$post->title}}</h6>
                        @else
                        <iframe width="135" height="80" src="https://www.youtube.com/embed/{{$post->video}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <h6>{{$post->title}}</h6>
                        @endif 
                    </div>

                    @endif
                    @endif
                    @endforeach
                </div>
            </div>
        </div>

    </div>
</div>
@endsection

