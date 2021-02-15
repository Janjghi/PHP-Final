@extends("home")
@section("content")
    <body class="antialiased container">
    <div class="container">
        <h3>hi</h3>
        <table class="table">
                <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Surname</th>
                    <th scope="col">Position</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Status</th>
                    <th scope="col">edit</th>
                </tr>
                </thead>
                <tbody>
                @foreach($applicants as $applicant)
                    <tr>
                        <td>{{$applicant->id}}</td>
                        <td>{{$applicant->name}}</td>
                        <td>{{$applicant->surname}}</td>
                        <td>{{$applicant->position}}</td>
                        <td>{{$applicant->phone}}</td>
                        @if($applicant->is_hired == 1)
                            <td>hired</td>
                        @else
                            <td>not hired</td>
                        @endif
                        <td>
                            <button type="button" class="btn btn-info">
                                <a href="{{route('applicants.edit', $applicant->id)}}">Edit</a>
                            </button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
    </div>
    </body>
@endsection
