@extends("home")
@section("content")
    <body>
    <div class="container">
        <form method="post" enctype="multipart/form-data" action="{{route('applicants.update', $applicants->id)}}">
            @csrf
            @method("PUT")
            <div class="box-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{old('name', $applicants->name)}}" >
                    @error('name')
                    <p class="text-danger">{{$errors->first('name')}}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">surname</label>
                    <input type="text" class="form-control  @error('surname') is-invalid @enderror" name="surname" value="{{old('surname', $applicants->surname)}}" >
                    @error('surname')
                    <p class="text-danger">{{$errors->first('surname')}}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">position</label>
                    <input type="text" class="form-control  @error('position') is-invalid @enderror" name="position" value="{{old('position', $applicants->position)}}" >
                    @error('position')
                    <p class="text-danger">{{$errors->first('position')}}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">phone</label>
                    <input type="text" class="form-control  @error('phone') is-invalid @enderror" name="phone" value="{{old('phone', $applicants->phone)}}" >
                    @error('phone')
                    <p class="text-danger">{{$errors->first('phone')}}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">is_hired</label>
                    <input type="text" class="form-control  @error('is_hired') is-invalid @enderror" name="phone" value="{{old('is_hired', $applicants->is_hired)}}" >
                    @error('is_hired')
                    <p class="text-danger">{{$errors->first('is_hired')}}</p>
                    @enderror
                </div>
            </div>
            <input type="hidden" name="_token" id='csrf_toKen' value="{{ csrf_toKen() }}">
            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
    </body>
@endsection
