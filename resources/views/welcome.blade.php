@extends('layouts.app')

@section('title')
Home - ReadyMart
@endsection


@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="col-md-8">
            <div class="card">

                <div class="card-body">
                <div class="row">
                    @foreach($sectionones as $index =>$sectionone)


                    @if($index == 0)
                        <div class="col-md-6">
                            
                            @if($sectionone->content == 1)
                            <img src="{{asset('public/post/')}}/images/{{$sectionone->image}}" alt="image"  style="height: auto; margin-bottom: 10px; width: 100%; border: 1px solid">
                            <a href="{{ url('/post/'.str_replace(' ','-',$sectionone->title)) }}"><h5>{{$sectionone->title}}</h5></a>
                            <p class="text-justify">
                                {{substr($sectionone->description, 0, 250)}} ...
                            </p>
                            @else
                            <iframe width="100%" height="auto" src="https://www.youtube.com/embed/{{$sectionone->video}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" ></iframe>
                            <a href="{{ url('/video/'.str_replace(' ','-',$sectionone->title)) }}"><h5>{{$sectionone->title}}</h5></a>
                            <p class="text-justify">{{substr($sectionone->description, 0, 450)}} ...</p>
                            @endif
                            
                        </div> 
                    @endif
                    
                    @if($index > 0)
                        <div class="col-md-3">
                            
                                
                                    @if($sectionone->content == 1)
                                    <img src="{{asset('public/post/')}}/images/{{$sectionone->image}}" alt="image"  style="height: 80px; width: 145px; margin-bottom: 7px; border: 1px solid">
                                    <a href="{{ url('/post/'.str_replace(' ','-',$sectionone->title)) }}"><h6>{{$sectionone->title}}</h6></a>
                                    @else
                                    <iframe width="145" height="80" src="https://www.youtube.com/embed/{{$sectionone->video}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" ></iframe>
                                    <a href="{{ url('/video/'.str_replace(' ','-',$sectionone->title)) }}"><h6>{{$sectionone->title}}</h6></a>
                                    @endif 
                                
                            
                        </div> 
                    @endif

                    @endforeach 
                </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <!--                <div class="card-header text-center">Section 2</div>-->
                <div class="card-body">
                    @foreach($sectiontwos as $index => $sectiontwo)

                    @if($index == 0)
                    <div class="row">
                    <div class="col-md-12">
                        @if($sectiontwo->content == 1)
                        <img src="{{asset('public/post/')}}/images/{{$sectiontwo->image}}" alt="image"  style="height: auto; margin-bottom: 10px; width: 100%; border: 1px solid">
                        <a href="{{ url('/post/'.str_replace(' ','-',$sectiontwo->title)) }}"><h5>{{$sectiontwo->title}}</h5></a>
                        <p class="text-justify">
                            {{substr($sectiontwo->description, 0, 150)}} ...
                        </p>
                        @else
                        <iframe width="100%" height="160" src="https://www.youtube.com/embed/{{$sectiontwo->video}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <a href="{{ url('/video/'.str_replace(' ','-',$sectiontwo->title)) }}"><h5>{{$sectiontwo->title}}</h5></a>
                        <p class="text-justify">{{substr($sectiontwo->description, 0, 150)}} ...</p>
                    </div>
                    </div>
                    @endif
                    @else

                    <div class="col-md-5" style="float: left; margin-right: 20px;">
                        @if($sectiontwo->content == 1)
                        <img src="{{asset('public/post/')}}/images/{{$sectiontwo->image}}" alt="image"  style="height: 80px; max-width: 135px; margin-bottom: 7px; border: 1px solid">
                        <a href="{{ url('/post/'.str_replace(' ','-',$sectiontwo->title)) }}"><h6>{{$sectiontwo->title}}</h6></a>
                        @else
                        <iframe width="135" height="80" src="https://www.youtube.com/embed/{{$sectiontwo->video}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <a href="{{ url('/video/'.str_replace(' ','-',$sectiontwo->title)) }}"><h6>{{$sectiontwo->title}}</h6></a>
                        @endif 
                    </div>

                    @endif
                    @endforeach
                </div>
            </div>
        </div>

    </div>
</div>
@endsection

