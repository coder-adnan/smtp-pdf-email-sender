<!-- resources/views/welcome.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> <!-- Add your CSS file -->
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .button-container {
            text-align: right;
            margin-bottom: 20px;
        }
        .button {
            padding: 10px 15px;
            margin-left: 10px;
            color: white;
            background-color: #007BFF;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #000;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

    <div class="button-container">
        <a style="text-decoration:none" href="{{ url('/pdf-view') }}" class="button">View PDF</a>
        <a style="text-decoration:none" href="{{ url('/generate-pdf') }}" class="button">Generate PDF</a>
        <a style="text-decoration:none" href="{{ url('/send-mail') }}" class="button">Send Email</a>
    </div>

    <h1>Guests List</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Created At</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($customers as $customer)
                <tr>
                    <td>{{ $customer->id }}</td>
                    <td>{{ $customer->name }}</td>
                    <td>{{ $customer->email }}</td>
                    <td>{{ $customer->created_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>
