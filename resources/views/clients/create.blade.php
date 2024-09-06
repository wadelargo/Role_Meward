@extends('layout')

@section('content')
<div class="container">
    <h1>Create Client</h1>
    <form action="{{ route('clients.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="first_name">First Name</label>
            <input type="text" name="first_name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="last_name">Last Name</label>
            <input type="text" name="last_name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="birth_date">Birth Date</label>
            <input type="date" name="birth_date" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</div>

<style>
    body {
        background: linear-gradient(to right, #ffecd2 0%, #fcb69f 100%);
        font-family: Arial, sans-serif;
    }

    .container {
        max-width: 500px;
        margin: auto;
        padding: 20px;
        background: rgba(255, 255, 255, 0.9);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        border-radius: 10px;
    }

    h1 {
        color: #333;
        text-align: center;
        margin-bottom: 20px;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-group label {
        color: #333;
        font-size: 16px; /* Adjusted for better alignment */
        display: block;
        margin-bottom: 5px;
    }

    .form-control {
        width: 100%;
        padding: 10px;
        border: 1px solid #ced4da;
        border-radius: 4px;
        box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
        /* Removed margin-bottom to align with text better */
    }

    .btn-primary {
        width: 100%;
        padding: 10px;
        background-color: #5e49cb;
        color: white;
        text-align: center;
        text-decoration: none;
        border-radius: 4px;
        border: none;
        transition: background-color 0.3s, color 0.3s;
    }

    .btn-primary:hover {
        background-color: #4e3e9e;
    }
</style>

@endsection
