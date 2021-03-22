@extends('layouts.app')

@section('content')
<div class="container">
    <div class = "row" style = "background-color: white">
        <div class = "col-1"></div>
        <div class = "col-10 d-flex" style = "flex-wrap: wrap">
            <div class = "col-4" style = "padding-left: 55px">
                <img src = {{ $user->profile->profilepic ?? 'https://i.stack.imgur.com/34AD2.jpg' }} style = "width:150px; height:150px;" class = "rounded-circle">   
            </div>
            <div class = "col-7">
                <div><h3>{{ $user->name }}</h3></div>
                <div><strong>{{ $user->profile->title ?? 'N/A' }}</strong></div>
                <div><strong>{{ $user->profile->city ?? 'N/A' }}</strong></div>
                <div style ="padding-top:10px">{{ $user->profile->description ?? 'N/A' }}</p></div>
            </div>
            <hr style="padding-top: 20px; flex-shrink: 0; width: 100%; height: 1px" />
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-5"  style = "background-color: white; padding-left: 10px">
            <ul>
                <li>{{ $user->profile->address ?? 'N/A' }}</li>
                <li>{{ $user->profile->email ?? 'N/A' }}</li>
                <li>{{ $user->profile->phonenumber ?? 'N/A' }}</li>
                <li><a href={{ $user->profile->socialnetwork ?? 'N/A' }}>{{ $user->profile->socialnetwork ?? 'N/A' }}</a></li>
            </ul>
        </div>
    </div>
</div>
@endsection
