@extends('layouts.boot')

@section('content')
<div  align="right" class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="{{ $user->profile->profileImage() }}" class="rounded-circle w-100">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <div class="d-flex align-items-center pb-3">
                    <div class="h4">{{ $user->username }}</div>

                    <follow-button user-id="{{ $user->id }}" follows="{{ $follows }}"></follow-button>
                </div>

                @can('update', $user->profile)
                    <a href="/p/create">Add New Post</a>
                @endcan
                
                @can('update', $user->profile)
                    <a href="/profile/{{ $user->id }}/createTrans">Add New Transaction</a>
                @endcan

            </div>

            
            
            @can('update', $user->profile)
                <a href="/profile/{{ $user->id }}/edit">Edit Profile</a>
            @endcan

            <div class="d-flex">
                <div class="pr-5"><strong>{{ $postCount }}</strong> posts</div>
                <div class="pr-5"><strong>{{ $followersCount }}</strong> followers</div>
                <div class="pr-5"><strong>{{ $followingCount }}</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
            <div class="pt-4 font-weight-bold" >{{ $user->profile->description }}</div>
            <div><a href="#">{{ $user->profile->url }}</a></div>
            @if($user->profile->location != null)
             <div><a href="https://www.google.com/maps/search/{{$user->profile->location}}" >Show on Maps</a></div>
            @endif
        
        </div>
        
        
    </div>
    <div class="row pt-5">
        
           <table class="table">
                    <thead bgcolor="#ebfafa">
                    <td>Name</td>
                    <td>Type</td>
                    <td align="right">Amount (MYR)</td>
                    <td>Date</td>
                    <td>Desc</td>
                    </thead>
        @foreach($user->transactions as $transactions)
            <div class="col-12 pb-12">
                    @if($transactions->category == "Expenses")
                    <tr bgcolor="#5933cc">
                    @else
                    <tr bgcolor="#cc2280">
                    @endif
                    
                    
                    <td>{{ $transactions->Name }}</td>
                    <td>{{ $transactions->category }}</td>
                    <td align="right">{{ $transactions->amount }}</td>
                    <td>{{ $transactions->created_at }}</td>
                    <td>{{ $transactions->Desc }}</td>
                    </tr>
                
                    
               
                </a>
            </div>
        @endforeach
        
        </table>
    </div>
    <div class="row pt-5">
        @foreach($user->posts as $post)
            <div class="col-4 pb-4">
                <a href="/p/{{ $post->id }}">
                    <img src="/storage/{{ $post->image }}" class="w-100">
                </a>
            </div>
        @endforeach
    </div>
    
    
    
</div>
@endsection
