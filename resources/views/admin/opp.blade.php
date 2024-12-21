@extends('layouts.app')
@section('content')

<div class="table-container">
    <table class="styled-table">
        <thead>
            <tr>
                <th>Book Name</th>
                <th>Book Image</th>
                <th>Book</th>
                <th>Operations</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $mydata)
            <tr>
                <td>{{ $mydata->bookName }}</td>
                <td><img src="image/{{ $mydata->bookImage }}" alt="Book Image" class="table-img"></td>
                <td>
                    <a href="doc/{{ $mydata->bookPdf }}" class="btn btn-primary" target="_blank">View PDF</a>
                </td>
                <td>
                    <button class="btn btn-danger"><a href="{{ url ('delete',$mydata->id) }}">Delete</a></button>
                    <button class="btn btn-warning"><a href="{{ url ('update',$mydata->id) }}">Update</a></button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection

@push('css')
<style>
/* Table container for layout and spacing */
.table-container {
    margin: 20px auto;
    max-width: 90%;
    overflow-x: auto;
    padding: 10px;
}

/* Base table styling */
.styled-table {
    width: 100%;
    border-collapse: collapse;
    font-family: Arial, sans-serif;
    font-size: 16px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    background-color: #fff;
}

/* Table header styling */
.styled-table thead tr {
    background-color: #009879;
    color: #ffffff;
    text-align: left;
}

/* Table cell styling */
.styled-table th,
.styled-table td {
    padding: 12px 15px;
    border: 1px solid #ddd;
    text-align: center;
}

/* Alternating row colors */
.styled-table tbody tr:nth-child(even) {
    background-color: #f3f3f3;
}

.styled-table tbody tr:nth-child(odd) {
    background-color: #ffffff;
}

/* Row hover effect */
.styled-table tbody tr:hover {
    background-color: #f1f1f1;
}

/* Styling for images */
.table-img {
    width: 80px;
    height: 80px;
    object-fit: cover;
    border-radius: 5px;
}

/* Button styles */
.btn {
    padding: 8px 12px;
    font-size: 14px;
    text-decoration: none;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    color: #fff;
}

.btn-primary {
    background-color: #007bff;
}

.btn-primary:hover {
    background-color: #0056b3;
}

.btn-danger {
    background-color: #dc3545;
}

.btn-danger:hover {
    background-color: #bd2130;
}

.btn-warning {
    background-color: #ffc107;
    color: #000;
}

.btn-warning:hover {
    background-color: #e0a800;
}
</style>
@endpush
