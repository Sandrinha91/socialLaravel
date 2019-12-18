@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $user->name }}</div>

                <div class="card-body">
                    

                @foreach($posts as $objava)
                    <!-- <h5>{{$objava->id}}</h5> -->
                
                    <p class='blue'><i>{{$objava->content}}</i></p>
                    <small>{{$objava->created_at->format('d.m.Y.')}}</small>
                    <small>{{$objava->created_at->diffForHumans()}}</small>
                    <hr>
          
                @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
