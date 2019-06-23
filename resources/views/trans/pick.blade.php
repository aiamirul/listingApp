@extends('layouts.boot')

@section('content')
<div class="container">
    
    
            <div class="row pt-5">
                <div class="card-header">
           <a href="/profile/{user}/createTransIN">
               <button class="btn btn-success">Add CASH IN RECORD</button>
           </a>
                    
                     </div>

               
                <div class="card-header">
           <a href="/profile/{user}/createTransOUT">
               <button class="btn btn-warning">
               Add CASH OUT RECORD</button>
           </a></div>
                    
                    
                   
                <div class="card-header">
           <a href="/profile/{user}/createTransDOC">
               <button class="btn btn-primary">
               Add DOC RECORD</button>
           </a></div>
                    
                    
               
                <div class="card-header">
           <a href="/profile/{user}/createTransADVANCE">
               <button class="btn btn-info">
               Add RECORD ADVANCED</button>
           </a>
          </div></div>
</div>
@endsection
