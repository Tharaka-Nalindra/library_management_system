@extends('layouts.app')

@section('content')
<div class="search-container">
    <form action="{{ url('search') }}" method="GET">
        <input type="search" name="search" class="search-input" placeholder="Search for a book...">
        <button type="submit" class="search-button">Search</button>
    </form>
</div>

<div class="card-container">
    @foreach ($data as $mydata)
        <div class="card">
            <img src="image/{{ $mydata->bookImage }}" class="card-img-top" alt="img">
            <div class="card-body">
                <h5 class="card-title">{{ $mydata->bookName }}</h5>
                <a href="doc/{{ $mydata->bookPdf }}" class="btn btn-success">Download</a>
            </div>
        </div>
    @endforeach
</div>
@endsection

@push('css')
<style>
/* Search Form Styling */
.search-container {
    display: flex;
    justify-content: center;
    margin: 20px 0;
}

.search-input {
    width: 250px;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    outline: none;
    font-size: 16px;
}

.search-input:focus {
    border-color: #28a745;
}

.search-button {
    padding: 10px 15px;
    background-color: #28a745;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    margin-left: 10px;
    font-size: 16px;
    transition: background-color 0.3s ease-in-out;
}

.search-button:hover {
    background-color: #218838;
}

/* Card Container */
.card-container {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    justify-content: center;
    padding: 20px;
    background-color: #f8f9fa;
    border-radius: 8px;
}

/* Individual Card */
.card {
    width: 200px;
    border: 1px solid #ddd;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    background-color: #fff;
    text-align: center;
    padding: 10px;
    transition: transform 0.2s ease-in-out;
}

.card:hover {
    transform: translateY(-5px);
}

/* Image Styling */
.card-img-top {
    width: 150px;
    height: 150px;
    object-fit: cover;
    margin: 10px auto;
    display: block;
    border-radius: 10px;
    border: 2px solid #28a745;
}

/* Card Title */
.card-title {
    font-size: 18px;
    font-weight: bold;
    margin: 10px 0;
    color: #333;
}

/* Download Button */
.btn-success {
    text-decoration: none;
    padding: 8px 12px;
    font-size: 14px;
    color: #fff;
    border-radius: 4px;
    background-color: #28a745;
    border: none;
    transition: background-color 0.3s ease-in-out;
}

.btn-success:hover {
    background-color: #218838;
}

/* Responsive Design */
@media (max-width: 768px) {
    .search-input {
        width: 100%;
        margin-bottom: 10px;
    }

    .card-container {
        gap: 10px;
    }

    .card {
        width: 150px;
    }

    .card-img-top {
        width: 120px;
        height: 120px;
    }

    .card-title {
        font-size: 16px;
    }

    .btn-success {
        font-size: 12px;
        padding: 6px 10px;
    }
}
</style>
@endpush
