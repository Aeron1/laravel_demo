@extends('app')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                Student-Form
            </div>
            <div class="card-body">
                @if (session('message'))
                <div class="my-2">{{ session('message') }}</div>
                    
                @endif
                <form action="/students/{{ $student->id }}" method="post">
                    @csrf
                    @method('put')
                <div class="form-group">
                    <label for="name">Name</label>
                    <input id="name" class="form-control" type="text" name="name" value="{{ $student->name }}">
               
                </div>

                <div class="form-group">
                    <label for="age">Age</label>
                    <input id="age" class="form-control" type="text" name="age" value="{{ $student->age }}">
                </div>

                <div class="form-group">
                    <label for="roll">Roll No</label>
                    <input id="roll" class="form-control" type="text" name="roll" value="{{ $student->roll }}">
                </div>

                <div class="form-group">
                    <label for="mobile">Mobile</label>
                    <input id="mobile" class="form-control" type="text" name="mobile" value="{{ $student->mobile }}">
                </div>
                <button type="submit" class="btn btn-primary btn-sm">Submit</button>
            </form>
            </div>
        </div>
    </div>
</div>
    
@endsection