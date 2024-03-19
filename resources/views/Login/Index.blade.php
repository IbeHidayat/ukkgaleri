<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gallery | Login</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="css/sign-in.css">
</head>

<body class="d-flex align-items-center py-4">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                @if (session()->has('loginSuccess'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('loginSuccess') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                @if (session()->has('error'))
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        {{ session('error') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <main class="form-signin w-100 m-auto">

                    <form action="/login" method="POST">
                        @csrf
                        <h1 class="h3 mb-3 fw-semibold text-center">Please Login</h1>

                        <div class="form-floating">
                            <input type="email"
                                class="form-control @error('email')
                                is-invalid
                            @enderror"
                                id="email" name="email" placeholder="Email" required>
                            <label for="email">Email</label>
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-floating">
                            <input type="password" class="form-control " id="password" name="password"
                                placeholder="Password">
                            <label for="password">Password</label>
                        </div>

                        <button class="btn btn-brown w-100 py-2 fw-semibold" type="submit">Login</button>

                        <p class="mt-3">Belum Punya Akun? Daftar <a href="/register"
                                class="text-decoration-none">Disini!</a></p>
                        <p class="mt-3 mb-3 text-body-secondary">&copy; Ibe Hidayat</p>
                    </form>
                </main>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
                    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
                </script>
            </div>
        </div>
    </div>
</body>

</html>
