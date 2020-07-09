@extends('layouts.app')

@section('title')
Post/Video Create - ReadyMart 
@endsection


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center"><h5 class="text-bold">Post/Video  Create Form</h5></div>

                <div class="card-body">



                    <form  method="POST" action="{{url('savePost')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12 col-lg-12 col-sm-12">

                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 offset-3">
                                        <h5>Type of content</h5>
                                        <select name="content" class="form-control @error('content') is-invalid @enderror" @change="changeContent($event)">
                                            <option value="" selected disabled>Choose</option>
                                            <option v-for="content in contents" :value="content.id" :key="content.id">@{{ content.name }}</option>
                                        </select>

                                        @error('content')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <br>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 offset-3">
                                        <h5>Post will appear</h5>
                                        <select  name="section" class="form-control @error('section') is-invalid @enderror">
                                            <option value="" selected disabled>Choose</option>
                                            <option value="1">Section 1</option>
                                            <option value="2">Section 2</option>
                                        </select>

                                        @error('section')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <br>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 offset-3">
                                        <h5>Title</h5>
                                        <input type="text" placeholder="write a title" name="title" style="width: 450px" class="form-control @error('title') is-invalid @enderror" >

                                        @error('title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <br>
                                <div class="row" v-if="selectedContent == 2">
                                    <div class="col-lg-6 col-md-6 col-sm-6 offset-3">
                                        <h5>Video unique code</h5>
                                        <div class="input-group mb-3" style="width: 450px">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon3">https://www.youtube.com/watch?v=</span>
                                            </div>
                                            <input type="text" name="video" class="form-control @error('video') is-invalid @enderror" id="basic-url" aria-describedby="basic-addon3" required >
                                        </div>

                                        @error('video')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <br>
                                <div class="row" v-if="selectedContent == 1">
                                    <div class="col-lg-6 col-md-6 col-sm-6 offset-3">
                                        <h5>Upload post image</h5>
                                        <input type="file" name="image" accept="images/*" class="btn btn-sm btn-outline-info @error('image') is-invalid @enderror" style="width: 450px" required>

                                        @error('image')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <br>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 offset-3">
                                        <h5>Description</h5>
                                        <textarea name="description" placeholder="write a description" rows="8" class="form-control @error('description') is-invalid @enderror" style="width: 450px"></textarea>

                                        @error('description')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <br>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 offset-3">
                                        <h5>Action</h5>
                                        <select name="action" class="form-control @error('action') is-invalid @enderror">
                                            <option value="" selected disabled>Choose</option>
                                            <option value="1">Publish</option>
                                            <option value="2">Unpublish</option>
                                        </select>

                                        @error('action')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <br>
                                <br>

                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 offset-3">
                                        <button type="submit" class="btn btn-success " style="width: 450px"> SAVE </button>
                                    </div>
                                </div>



                            </div>

                        </div>
                    </form>






                </div>
            </div>
        </div>
    </div>
</div>
@endsection