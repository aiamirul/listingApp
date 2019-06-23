@extends('layouts.boot')

@section('content')
<div class="container">
    <div class="row"><center>
        <div class="col-12">
            <img src="/storage/{{ $post->image }}" class="w-100">
        </div></center> </div>
         <div class="row">
        <div class="col-12 pt-5">
           
                
                  <center>
                        EMPLOYER: <br> <a href="/profile/{{ $post->user->id }}">
                        <img src="{{ $post->user->profile->profileImage() }}" class="rounded-circle w-100" style="max-width: 40px;">
                        <h6>{{ $post->user->profile->title }}</h6></a>
                        
                    <div>
                        <div class="font-weight-bold">
                           
                                <span class="text-dark">{{ $post->user->username }}</span>
                            </a>
                            <a href="#" class="pl-3">Follow</a>
                            @if(auth()->user()->id==$post->user_id)
                            <a href="/p/{{ $post->id }}/{{ $post->user->id }}/edit">Edit Post</a>
                          @endif
                        </div>
                    </div>
                

                <hr>

                <p>
                    <span class="font-weight-bold">
                        <a href="/profile/{{ $post->user->id }}">
                            <span class="text-dark">{{ $post->user->username }}</span>
                        </a>
                    </span> {{ $post->caption }}
                </p>
              </center>
        </div>
    </div>
</div>
@endsection
