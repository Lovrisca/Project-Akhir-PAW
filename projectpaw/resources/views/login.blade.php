<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Login Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/loginAdmin.css') }}">

</head>

<body>
    <div class="container text-center">
        <div class="row">
            <div class="col">
                <h3>Login Admin</h3>
            </div>
        </div>
        <form action="{{ route('tryLogin') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col">
                    <div class="input-group">
                        <input type="email" placeholder="Email" name="email" id="email" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="input-group">
                        <input type="password" placeholder="Password" name="password" id="password" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="input-group">
                        <button type="submit" name="login" id="login" class="btn">Login</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
