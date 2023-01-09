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
                <h2>Add new phase</h2>
                @if(Session::has('success'))
                    <div class="alert alert-success" role="alert">
                        {{Session::get('success')}}
                    </div>
                @endif
                <form method="post" action="{{url('save-phase')}}">
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
                        <label for="duration">Duration:</label>
                        <input name="duration" type="text" class="form-control" id="duration" placeholder="1 week"
                        value="{{old('duration')}}">
                        @error('duration')
                        <div class="alert alert-danger" role="alert">
                        {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="priority">Priority:</label>
                        <select name="priority" class="form-control" id="priority" value="{{old('priority')}}">
                        <option>Important</option>
                        <option>Urgent</option>
                        <option>Important and urgent</option>
                        <option>Important but not urgent</option>
                        <option>Neither</option>
                        </select>
                        @error('priority')
                        <div class="alert alert-danger" role="alert">
                        {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="project_id">Project ID:</label>
                        
                        <input name="project_id" type="text" class="form-control" id="project_id" placeholder="1"
                        value="{{old('project_id')}}">
                        <small>Project ID can be found in the details page</small>
                        @error('project_id')
                        <div class="alert alert-danger" role="alert">
                        {{$message}}
                        </div>
                        @enderror
                    </div>
                    
                    <button class="btn btn-primary" type="submit">Save </button>
                    <a href="{{ url('project-details/'.$project->id) }}" class="btn btn-danger">Cancel</a>
                    
                    
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>