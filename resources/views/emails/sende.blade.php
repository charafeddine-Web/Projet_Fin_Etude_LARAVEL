<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>You have received a new message from: {{ $data['name'] }} ({{ $data['email'] }})</p>
<p><strong>Subject:</strong> {{ $data['subject'] }}</p>
<p><strong>Message:</strong></p>
<p>{{ $data['message'] }}</p>

</body>
</html>
