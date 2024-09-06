@extends('layout')

@section('content')
<div class="container">
    <h1>Welcome to Our Service!</h1>
    <h4>We are currently performing maintenance to bring you new features and improvements. We appreciate your patience!</h4>

    <h3>How Can We Assist You?</h3>
    <p>Our team is here to help you with a range of services. Whether you have questions, need support, or are looking for new opportunities, we're just a message away.</p>
    <p>Feel free to reach out to us with your inquiries or feedback. We look forward to serving you better!</p>
</div>

<style>
    body {
        background: linear-gradient(to right, #f3f4f6 0%, #ffffff 100%);
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        color: #333;
        margin: 0;
        padding: 0;
    }

    .container {
        max-width: 600px;
        margin: 40px auto;
        padding: 30px;
        background: #ffffff;
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
        text-align: center;
    }

    h1 {
        font-size: 2.5em;
        color: #5a2d81;
        margin-bottom: 20px;
        font-weight: bold;
    }

    h4 {
        font-size: 1.2em;
        color: #6c757d;
        margin-bottom: 20px;
    }

    h3 {
        font-size: 1.5em;
        color: #5e49cb;
        margin-bottom: 15px;
    }

    p {
        font-size: 1em;
        color: #555;
        line-height: 1.6;
        margin-bottom: 20px;
    }
</style>
@endsection
