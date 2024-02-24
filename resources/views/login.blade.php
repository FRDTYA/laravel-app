<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('style/style.css') }}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12 my-3">
                <form>
                    <div class="mb-3">
                        <label for="Email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="Email" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="Password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="Password">
                    </div>
                    <div class="mb-3">
                        <label for="Name" class="form-label">Haven't Account ? <a
                                href="{{ route('register') }}">Register</a></label>
                    </div>
                    <button type="submit" class="btnSubmit">
                        <span>Login</span>
                    </button>
                </form>

                {{-- <div class="cardAuth">
                    <h2>CARD</h2>
                </div> --}}
            </div>
        </div>
    </div>
</body>

</html>
