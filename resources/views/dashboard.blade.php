@extends('layouts.app')

@section('title')
Admin Dashboard - ReadyMart
@endsection


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center"><h5 class="text-bold">{{ __('Dashboard') }}</h5></div>

                <div class="card-body">

                    @if(session()->has('msg'))
                    <div class="text-center alert alert-success alert-dismissible fade show" role="alert">

                        <strong> {{ session()->get('msg') }} </strong>

                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif

                    <br>
                    <a href="{{ url('/create') }}" style="text-decoration: none"><button class="btn btn-block btn-outline-info">Create  Post / Video</button></a>
                    <br> <br>

                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr class="text-center">
                                <th scope="col"> Id</th>
                                <th scope="col">Type</th>
                                <th scope="col">Title</th>
                                <th scope="col">Image / Video</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(count($posts) == '')
                            <tr>
                                <th scope="row" colspan="4" style="text-align: center">There is no Post/Video to show .</th>
                            </tr>
                            @else
                            @foreach($posts as $post)

                            <tr>
                                <th class="text-center" >{{$post->id}}</th>
                                <td >
                                    @if($post->content == 1)
                                    post
                                    @else 
                                    video 
                                    @endif
                                </td>
                                <td class="text-justify">{{$post->title}}</td>
                                <td class="text-justify">
                                    @if($post->content == 2)
                                    <a href="https://www.youtube.com/watch?v={{$post->video}}" target="_blank">https://www.youtube.com/watch?v={{$post->video}}</a>
                                    @else
                                    <img src="{{asset('public/post/')}}/images/{{$post->image}}" alt="image not found" style="height: 50px; width: auto; border: 1px solid">
                                    @endif
                                    
                                </td>
                            </tr>
                            
                            @endforeach 
                            @endif 
                        </tbody>
                    </table>

                    <br><br>




                </div>
            </div>
        </div>
    </div>
</div>
@endsection
