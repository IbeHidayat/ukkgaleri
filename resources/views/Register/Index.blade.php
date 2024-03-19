<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gallery | Register</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="css/sign-in.css">

</head>

<body class="d-flex align-items-center py-4">
    <main class="form-signin w-100 m-auto">
        <form action="/register" method="POST">
            @csrf

            <h1 class="h3 mb-3 fw-semibold text-center">Please Register</h1>

            <div class="form-floating">
                <input type="text"
                    class="form-control @error('username')
                    is-invalid
                @enderror rounded-top"
                    id="username" name="username" placeholder="username" value="{{ old('username') }}" required>
                <label for="username">Username</label>
                @error('username')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-floating">
                <input type="text"
                    class="form-control @error('alamat')
                    is-invalid
                @enderror"
                    id="alamat" name="alamat" placeholder="alamat" value="{{ old('alamat') }}" required>
                <label for="alamat">Alamat</label>
                @error('alamat')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-floating">
                <input type="email"
                    class="form-control @error('email')
                    is-invalid
                @enderror"
                    id="email" name="email" placeholder="Email" value="{{ old('image') }}" required>
                <label for="email">Email</label>
                @error('alamat')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-floating">
                <input type="password"
                    class="form-control @error('password')
                    is-invalid
                @enderror rounded-bottom"
                    id="password" name="password" placeholder="Password" required>
                <label for="password">Password</label>
                @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <button class="btn btn-brown w-100 py-2 fw-semibold" type="submit">Register</button>
            <p class="mt-3">Sudah Punya Akun? <a href="/login" class="text-decoration-none">Login !</a></p>
            <p class="mt-3 mb-3 text-body-secondary">&copy; Ibe Hidayat</p>
        </form>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

</body>

</html>
