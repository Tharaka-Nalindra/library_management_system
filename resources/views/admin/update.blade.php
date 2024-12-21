@extends('layouts.app')
@section('content')
   <form action="{{ url('newupdate' , $updateBook->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div>
        <label for="">New Book Name</label>
        <input type="text" name="newBookName" value="{{ $updateBook->bookName }}">
    </div>
    <div>
        <label for="">Old Book</label>
        <img src="/image/{{ $updateBook->bookImage }}" alt="img">
    </div>
    <div>
        <label for="">Change Image</label>
        <input type="file" name="newImage">
    </div>
    <div>
        <label for="">Change File</label>
        <input type="file" name="newBook">
    </div>
    <div>
        <input type="submit" value="Update">
    </div>
</form>

<a href="{{ url('crd') }}">back</a>
@endsection



@push('css')
@endpush
