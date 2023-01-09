<!DOCTYPE html>
<html lang="en">
<head>
    @include('head')
</head>
<body>
@include('header')
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-6">
                <h2>Add new project</h2>
                @if(Session::has('success'))
                    <div class="alert alert-success" role="alert">
                        {{Session::get('success')}}
                    </div>
                @endif
                <form method="post" action="{{url('save-project')}}">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input name="name" type="text" class="form-control" id="name" placeholder="Enter your name"
                        value="{{old('name')}}">
                        @error('name')
                        <div class="alert alert-danger" role="alert">
                        {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <input name="description" type="text" class="form-control" id="description" placeholder="Enter a description"
                        value="{{old('description')}}">
                        @error('description')
                        <div class="alert alert-danger" role="alert">
                        {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="starting_date">Starting date</label>
                        <input name="starting_date" type="date" class="form-control" id="starting_date"
                        value="{{old('starting_date')}}" >
                        @error('starting_date')
                        <div class="alert alert-danger" role="alert">
                        {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="ending_date">Ending date</label>
                        <input name="ending_date" type="date" class="form-control" id="ending_date" 
                        value="{{old('ending_date')}}">
                        @error('ending_date')
                        <div class="alert alert-danger" role="alert">
                        {{$message}}
                        </div>
                        @enderror
                    </div>
                    <button class="btn btn-primary" type="submit">Save </button>
                    <a href="{{url('projects')}}" class="btn btn-danger">Cancel</a>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>