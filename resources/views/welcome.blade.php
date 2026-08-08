<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Information</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
            margin: 0;
            padding: 40px;
        }

        .container {
            max-width: 600px;
            margin: auto;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
        }

        .info {
            margin: 15px 0;
            padding: 12px;
            background: #f8f8f8;
            border-radius: 5px;
        }

        .label {
            font-weight: bold;
        }
    </style>
</head>

<body>

<div class="container">
    <h1>Student Information</h1>

    <div class="info">
        <span class="label">Student Name:</span>
        Paul Andrey A. Roldan
    </div>

    <div class="info">
        <span class="label">Student Number:</span>
        0125 - 1953
    </div>

    <div class="info">
        <span class="label">Course:</span>
        BS in Information Technology
    </div>

    <div class="info">
        <span class="label">Section:</span>
        3A
    </div>

    <div class="info">
        <span class="label">Subject:</span>
        ITST 302 – Client-Server Technologies
    </div>

    <div class="info">
        <span class="label">Current Date:</span>
        {{ date('F d, Y') }}
    </div>
</div>

</body>
</html>