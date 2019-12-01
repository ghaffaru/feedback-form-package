<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
    <h3>Get in Touch</h3>
    <form method="POST" action=" {{ route('feedback') }}">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" />
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" />
        </div>
        <div class="form-group">
                <label for="subject">Subject</label>
                <input type="text" name="subject" class="form-control" />
        </div>
        <div class="form-group">
                <label for="message">Message</label>
                <textarea name="message" id="" cols="120" rows="10" class="form-control"></textarea>
                {{-- <input type="text" name="message" class="form-control" /> --}}
            </div>
            <button type="submit" class="btn btn-primary">Send mail</button>
    </form>

    </div>
</body>
</html>