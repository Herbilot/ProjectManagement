<!DOCTYPE html>
<html lang="en">
<head>
    @include('head')
</head>
<body>
@include('header')
    <div class="container mt-5">
        <div class="row">
            <div class="col">
            <a href="{{url('projects')}}" class="btn btn-danger mb-2">Back</a>
                <div class="card">
                    <div class="card-header text-white bg-dark">
                        <h2 class="card-title">Project {{$data->name}}'s details</h2>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col ">
                                <ul class="list-group list-group-flush ">
                                <li class="list-group-item">
                                        <h4 class="card-title">Project ID:</h4>
                                        <p class="card-text">
                                            {{$data->id}}
                                        </p>
                                    </li>
                                    <li class="list-group-item">
                                        <h4 class="card-title">Description:</h4>
                                        <p class="card-text">
                                            {{$data->description}}
                                        </p>
                                    </li>
                                    <li class="list-group-item">
                                        <h4 class="card-title">Phase:</h4>
                                        <table class="table bg-light">
                                            <thead class="thead-dark">
                                                <tr>
                                                    <th>#</th>
                                                    <th>Name</th>
                                                    <th>Duration</th>
                                                    <th>Priority</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php $i = 1; @endphp
                                                @foreach ($phase as $project)
                                                @switch($project->priority)
                                                @case ("Important")
                                                   @php $code = "bg-info";@endphp
                                                    @break;
                                                @case ("Urgent")
                                                   @php $code = "bg-warning";@endphp
                                                    @break;
                                                @case ("Important and urgent")
                                                   @php $code = "bg-danger";@endphp
                                                    @break;
                                                @case ("Important but not urgent")
                                                   @php $code = "bg-success";@endphp
                                                    @break;
                                                @case ("Neither")
                                                   @php $code = "bg-primary";@endphp
                                                    @break;
                                                
                                                @endswitch
                                                <tr class="{{$code}}">
                                                    <td>{{ $i++ }}</td>
                                                    <td>{{ $project->name }}</td>
                                                    <td>{{ $project->duration }}</td>
                                                    <td>{{ $project->priority }}</td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                        <a href="{{ url('project-details/'.$data->id.'/add-phase') }}" class="btn btn-primary">Add</a>
                                    </li>
                                </ul>
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>       
    </div>
    
</body>
</html>