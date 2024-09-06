@extends('layout')

@section('content')

<div class="Landing-main">
    <div class="button-container justify-between">
        @can('create_client')
        <a href="{{ route('clients.create') }}" class="export-button-excel">Add Client</a>
        @endcan

        @can('export_client')
            <form action="{{ route('clients.download-excel')}}" method="POST" target="__blank">
                @csrf
                <div>
                    <button class="export-button-excel">
                        Export Excel
                    </button>
                </div>
            </form>
        @endcan
    </div>

    <table class="client-table">
        <thead>
            <tr>
                <th>FirstName</th>
                <th>LastName</th>
                <th>Email</th>
                <th>BirthDate</th>
                @can('update_client')
                   <th class="action">Action</th>
                @endcan
            </tr>
        </thead>
        <tbody>
            @foreach($clients as $client)
                <tr>
                    <td>{{ $client->first_name }}</td>
                    <td>{{ $client->last_name }}</td>
                    <td>{{ $client->email }}</td>
                    <td>{{ $client->birth_date }}</td>
                    @can('update_client')
                    <td class='button1'>
                        @can('update_client')
                            <a href="{{ route('clients.edit', $client) }}" class="export-button">Edit</a>
                        @endcan
                        @can('delete_client')
                            <form action="{{ route('clients.destroy', $client) }}" method="POST" >
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="export-button-delete" >Delete</button>
                            </form>
                        @endcan
                    </td>
                    @endcan
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<style>
    .Landing-main {
        padding: 20px;
    }

    .button-container {
        margin-bottom: 20px;
        display: flex;
        justify-content: space-between;
    }

    .export-button-excel, .export-button, .export-button-delete {
        display: inline-block;
        padding: 10px 15px;
        margin: 5px;
        text-align: center;
        text-decoration: none;
        border-radius: 5px;
    }

    .export-button-excel {
        background-color: #4CAF50; /* Green */
        color: white;
    }

    .export-button-excel:hover {
        background-color: #45a049;
    }

    .export-button {
        background-color: #008CBA; /* Blue */
        color: white;
    }

    .export-button:hover {
        background-color: #007bb5;
    }

    .export-button-delete {
        background-color: #f44336; /* Red */
        color: white;
        border: none;
        cursor: pointer;
    }

    .export-button-delete:hover {
        background-color: #da190b;
    }

    .client-table {
        width: 100%;
        border-collapse: collapse;
    }

    .client-table th, .client-table td {
        border: 1px solid #ddd;
        padding: 8px;
    }

    .client-table th {
        background-color: #f2f2f2;
        text-align: left;
    }

    .client-table tr:nth-child(even) {
        background-color: #f9f9f9;
    }

    .client-table tr:hover {
        background-color: #ddd;
    }

    .client-table .action {
        width: 150px; /* Adjust width for the action buttons column */
    }
    .button1 {
        display: flex;

    }
</style>
@endsection
