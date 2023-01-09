<!DOCTYPE html>
<html lang="en">
<head>
    @include('head')
    
</head>
<body>   
@include('header')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
            <h2>Project List</h2>
            </div> 
            <div class="col-md-6">
                <div class="d-flex flex-wrap align-items-center justify-content-end gap-2 mb-3">
                    <div>
                    <a href="{{ url('add-project') }}" class="btn btn-primary"><i class="bx bx-plus me-1"></i> Add project</a>
                    </div>
                </div>
            </div>
            <div class="col-md-12">  
                <table class="table bg-light">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Id</th>
                            <th scope="col">Name</th>
                            <th scope="col">Starting date</th>
                            <th scope="col">Ending date</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $i = 1; @endphp
                        @foreach ($data as $project)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $project->id }}</td>
                            <td>{{ $project->name }}</td>
                            <td>{{ $project->starting_date }}</td>
                            <td>{{ $project->ending_date }}</td>
                            <td><a href="{{url('project-details/'.$project->id)}}" class="btn btn-success">see more</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
</body>
</html>