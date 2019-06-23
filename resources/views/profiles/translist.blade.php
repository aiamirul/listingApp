@extends('layouts.boot')

@section('content')
<div class="container">
    <div class="row">
        
        <div class="col-3">
        <div class="card-header">
            Total Cash IN
             <div class="card-body">
               <div class="card-text">
                   
                   
                     @foreach($user->transactions as $transactions)
                     @if($transactions->category == "Expenses")
                         {{ $transactions->amount }}
                     @endif
                     @endforeach

                   
               </div>
            
        </div>
            </div>
        </div>
        
        <div class="col-3">
          <div class="card-header">
            Total Cash OUT
             <div class="card-body">
               <div class="card-text">

                   
               </div>
            
        </div>
            
        </div></div>
        
         <div class="col-3 ">
        
          <div class="card-header">
            Total 
             <div class="card-body">
               <div class="card-text">

                   
               </div>
            
        </div>
            
        </div> </div>
        
        <div class="col-3">
          <div class="card-header">
            Total
             <div class="card-body">
               <div class="card-text">

                   
               </div>
            
        </div>
            
        </div>
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
