@extends('layouts.boot')

@section('content')
<div class="container">
    <form action="/edit/{{$post->id}}/{{ $post->user->id }}" enctype="multipart/form-data" method="post">
        @csrf
        @method('PATCH')

        <div class="row">
            <div class="col-8 offset-2">

                <div class="row">
                    <h1>Update Job Ad</h1>
                </div>
                <div class="form-group row">
                    <label for="caption" class="col-md-4 col-form-label">Salary (RM)</label>

                    <input id="caption"
                           type="text"
                           class="form-control{{ $errors->has('caption') ? ' is-invalid' : '' }}"
                           name="caption"
                           value="{{ $post->caption }}"
                           autocomplete="caption" autofocus>

                    @if ($errors->has('caption'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('caption') }}</strong>
                        </span>
                    @endif
                </div>  
                
                
                <div class="form-group row">
                    <label for="position_col" class="col-md-4 col-form-label">Position</label>

                    <input id="position_col"
                           type="text"
                           class="form-control{{ $errors->has('position_col') ? ' is-invalid' : '' }}"
                           name="position_col"
                           value="{{$post->position_col}}"
                           autocomplete="position_col" autofocus>

                    @if ($errors->has('position_col'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('position_col') }}</strong>
                        </span>
                    @endif
                </div>
                
                <div class="form-group row">
                    <label for="company_col" class="col-md-4 col-form-label">Company</label>

                    <input id="company_col"
                           type="text"
                           class="form-control{{ $errors->has('company_col') ? ' is-invalid' : '' }}"
                           name="company_col"
                           value="{{$post->company_col }}"
                           autocomplete="company_col" autofocus>

                    @if ($errors->has('company_col'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('company_col') }}</strong>
                        </span>
                    @endif
                </div>
                
                  <div class="form-group row">
                    <label for="location_col" class="col-md-4 col-form-label">Location</label>

                    <input id="location_col"
                           type="text"
                           class="form-control{{ $errors->has('location_col') ? ' is-invalid' : '' }}"
                           name="location_col"
                           value="{{$post->location_col }}"
                           autocomplete="location_col" autofocus>

                    @if ($errors->has('location_col'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('location_col') }}</strong>
                        </span>
                    @endif
                </div>

                
                
                
                
                
                <div class="row">
            <label for="caption" class="col-md-4 col-form-label">Current Image</label> 
            <img src="/storage/{{ $post->image }}" class="w-100">
                
                </div>
                <div class="row">
                    <label for="image" class="col-md-4 col-form-label">Choose New Image</label>

                    <input type="file" class="form-control-file" id="image" name="image">

                    @if ($errors->has('image'))
                        <strong>{{ $errors->first('image') }}</strong>
                    @endif
                </div>

                <div class="row pt-4">
                    <button class="btn btn-primary">Update Post</button>
                </div>

            </div>
        </div>
    </form>
</div>
@endsection
