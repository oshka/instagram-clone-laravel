@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8">
                <img src="/storage/{{$post->image}}" alt="" class="w-100">
            </div>
            <div class="col-4">
                <div>
                    <div class="d-flex align-items-center">
                        <div class="pr-3">
                            <img src="/storage/{{$post->user->profile->image}}" alt="" class="w-100 rounded-circle"
                                 style="max-width: 49px">
                        </div>
                        <div>
                            <div class="font-weight-bold">
                                <a href="/profile/{{$post->user->id}}"><span
                                        class="text-dark">{{$post->user->username}}</span></a> |
                                <a href="#" class="pl-3">Follow</a>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <p>
                    <span class="font-weight-bold"><a href="/profile/{{$post->user->id}}"><span
                                class="text-dark">{{$post->user->username}}</span></a></span>
                    {{$post->caption}}</p>
            </div>
        </div>
    </div>
@endsection
