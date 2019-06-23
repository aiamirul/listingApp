@extends('layouts.boot')

@section('content')
<div  align="right" class="container">
    <div class="row">
        <div class="col-12 p-5"  ><center>
            <img src="{{ $user->profile->profileImage() }}" class="rounded-circle w-50"></center>
        </div>
         </div>
         <div class="row">
        <div class="col-12 pt-5">
            
                    <center><div class="h4">{{ $user->username }}</div>
                           
                    <follow-button user-id="{{ $user->id }}" follows="{{ $follows }}"></follow-button>
                

                @can('update', $user->profile)
                    <a href="/p/create">Add New Job Advertisement</a>
                @endcan
                 
                

            

            
            
            @can('update', $user->profile)
                <br><a href="/profile/{{ $user->id }}/edit">Edit CV</a>
            @endcan

            <div class="pt-4 font-weight-bold" >Full Name</div>
            <div class="pt-4 font-weight">{{ $user->profile->title }}</div>
           
            <div class="pt-4 font-weight-bold" >Education</div>
            <div class="pt-4 font-weight" >{{ $user->profile->description }}</div>
            
            
            <div class="pt-4 font-weight-bold" >Work Experience</div>
            <div class="pt-4 font-weight" >{{ $user->profile->location }}</div>
           
            <div class="pt-4 font-weight-bold" >Language</div>
           <div class="pt-4 font-weight" >{{ $user->profile->url }}</div>
        
              <div class="pt-4 font-weight-bold" >Location</div>
           <div class="pt-4 font-weight" >{{ $user->profile->Adress }}</div>
           
            <div class="pt-4 font-weight-bold" >Contact Info</div>
           <div class="pt-4 font-weight" >{{ $user->profile->contact }}</div>
               
                    </center>
        </div>
        
        
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
