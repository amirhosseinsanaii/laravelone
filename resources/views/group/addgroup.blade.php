@extends('layout.master')


@section('contant')
    <br>
    <br>
    @if ($errors->any())
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <br>
    <form action="{{ route('progect.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Title group:</label>
            <input name="titilegroup" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Title group">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Description group:</label>
            <textarea name="descriptiongroup" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Description group"></textarea>

        </div>

        <button type="submit" class="btn btn-primary">Add Group</button>
        <a href="/" type="submit" class="btn btn-primary">Back Home</a>



    </form>

@endsection

