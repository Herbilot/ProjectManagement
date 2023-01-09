<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project details</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col">
            <a href="{{url('projects')}}" class="btn btn-danger mb-2">Back</a>
                <div class="card">
                    <div class="card-header">
                        <h2 class="card-title">Project {{$data->name}}'s details</h2>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <ul class="list-group list-group-flush">
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
                                        <table class="table">
                    <thead>
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
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $project->name }}</td>
                            <td>{{ $project->duration }}</td>
                            <td>{{ $project->priority }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                                        <a href="{{ url('project-details/'.$data->id.'/add-phase') }}" class="btn btn-success">Add</a>
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