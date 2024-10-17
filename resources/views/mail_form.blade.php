<!-- resources/views/mail_form.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send Mail</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Send Email</h1>

        <!-- Email Form -->
        <form method="POST" action="{{ route('sendEmail') }}">
            @csrf
            <div class="form-group">
                <label for="to">Recipient Email</label>
                <input type="email" class="form-control" id="to" name="to" required>
            </div>
            <div class="form-group">
                <label for="subject">Subject</label>
                <input type="text" class="form-control" id="subject" name="subject" required>
            </div>
            <div class="form-group">
                <label for="msg">Message</label>
                <textarea class="form-control" id="msg" name="msg" rows="4" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Send Email</button>
            <a class="btn btn-primary" style="text-decoration:none" href="{{ url('/') }}" class="button">Home</a>
        </form>
    </div>
</body>
</html>
