<!DOCTYPE html>
<html>
<head>
    <title>Contact</title>

    <style>
        body {
            font-family: Arial;
            background: #f4f4f4;
            text-align: center;
        }

        .container {
            width: 300px;
            margin: 50px auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px gray;
        }

        input {
            width: 90%;
            padding: 8px;
            margin: 10px 0;
        }

        button {
            padding: 10px 20px;
            background: blue;
            color: white;
            border: none;
            cursor: pointer;
        }

        .error {
            color: red;
        }
    </style>
</head>

<body>

<div class="container">
    <h2>Contact Form</h2>

    <form method="POST" action="/submit">
        @csrf

        <input type="text" name="name" placeholder="Enter your name"><br>

        @error('name')
            <p class="error">{{ $message }}</p>
        @enderror

        <input type="email" name="email" placeholder="Enter your email"><br>

        @error('email')
            <p class="error">{{ $message }}</p>
        @enderror

        <button type="submit">Send</button>
    </form>
</div>

</body>
</html>