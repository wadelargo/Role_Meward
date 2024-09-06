@extends('layout')

@section('content')
<div class="container">
    <h1 class="header">Edit Client</h1>
    <form action="{{ route('clients.update', $client) }}" method="POST">
        @csrf
        @method('PATCH')
        <div class="form-group">
            <label for="first_name">First Name</label>
            <input type="text" name="first_name" id="first_name" class="form-control" value="{{ $client->first_name }}" required>
        </div>
        <div class="form-group">
            <label for="last_name">Last Name</label>
            <input type="text" name="last_name" id="last_name" class="form-control" value="{{ $client->last_name }}" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" value="{{ $client->email }}" required>
        </div>
        <div class="form-group">
            <label for="birth_date">Birth Date</label>
            <input type="date" name="birth_date" id="birth_date" class="form-control" value="{{ $client->birth_date }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>

<style>
    body {
        background: linear-gradient(to right, #f5f7fa 0%, #c3cfe2 100%);
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        color: #333;
        margin: 0;
        padding: 0;
    }

    .container {
        max-width: 500px;
        margin: 40px auto;
        padding: 30px;
        background: #ffffff;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
    }

    .header {
        font-size: 2em;
        color: #5a2d81;
        text-align: center;
        margin-bottom: 20px;
        font-weight: bold;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-group label {
        display: block;
        color: #5a2d81;
        font-size: 16px; /* Reduced font size for better alignment */
        margin-bottom: 8px;
        text-align: left;
    }

    .form-control {
        width: 100%;
        padding: 12px; /* Increased padding for better user experience */
        border: 1px solid #ced4da;
        border-radius: 4px;
        box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
        margin-bottom: 10px;
    }

    .btn-primary {
        width: 100%;
        padding: 12px;
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
