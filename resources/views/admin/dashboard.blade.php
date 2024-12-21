@extends('layouts.app')

@section('content')

<div class="form-container">
    <form action="{{ url('upload_book') }}" method="POST" enctype="multipart/form-data" class="styled-form">
        @csrf
        <div class="form-group">
            <label for="bookName" class="form-label">Book Name</label>
            <input type="text" class="form-control" id="bookName" name="b_name" placeholder="Enter book name">
        </div>
        <div class="form-group">
            <label for="bookImage" class="form-label">Book Image</label>
            <input type="file" class="form-control" id="bookImage" name="b_img">
        </div>
        <div class="form-group">
            <label for="bookPdf" class="form-label">Book</label>
            <input type="file" class="form-control" id="bookPdf" name="book">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <div class="link-container">
        <a href="{{ url('/crd') }}" class="btn btn-secondary">Click</a>
    </div>
</div>

@endsection

@push('css')
<style>
/* Form container styling */
.form-container {
    max-width: 600px;
    margin: 20px auto;
    padding: 20px;
    border: 1px solid #ddd;
    border-radius: 8px;
    background-color: #f9f9f9;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

/* Form group styling */
.form-group {
    margin-bottom: 15px;
}

.form-label {
    display: block;
    font-weight: bold;
    margin-bottom: 5px;
}

.form-control {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
}

/* Button styling */
.btn {
    display: inline-block;
    padding: 10px 20px;
    font-size: 16px;
    text-align: center;
    text-decoration: none;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    color: #fff;
    margin-top: 10px;
}

.btn-primary {
    background-color: #007bff;
}

.btn-primary:hover {
    background-color: #0056b3;
}

.btn-secondary {
    background-color: #6c757d;
}

.btn-secondary:hover {
    background-color: #5a6268;
}

/* Link container styling */
.link-container {
    margin-top: 15px;
    text-align: center;
}

/* Responsive design */
@media (max-width: 768px) {
    .form-container {
        padding: 15px;
    }

    .btn {
        width: 100%;
        margin-top: 10px;
    }
}
</style>
@endpush
