<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login | {{ config('app.name') || ''}}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: #f4f7f6;
            font-family: 'Inter', sans-serif;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .login-card {
            border: none;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.05);
            width: 100%;
        }

        .brand-logo {
            width: 150px;
            height: 150px;
            box-shadow: #094fb7 0px 0 13px;
            border-radius: 50%;
            
   
            color: white;
            font-weight: bold;
            font-size: 1.2rem;
            padding: 5px;
        }

        .form-control {
            padding: 12px;
            border-radius: 8px;
        }

        .btn-primary {
            padding: 12px;
            border-radius: 8px;
            font-weight: 600;
            width: 100%;
        }
    </style>
</head>

<body>

    <div class="container my-5 my-sm-2">
        <div class="row justify-content-center">
            <div class="col-md-5">

                <div class="text-center mb-4">
                    <div class="d-flex justify-content-center">
                        <img src="{{ asset('logo.png') }}" alt="Logo" class="brand-logo">
                    </div>
                    <h2 class="fw-bold text-dark">{{ config('app.name')}}</h2>
                    <p class="text-muted">Management Control Panel</p>
                </div>

                <div class="card login-card">
                    <div class="card-body p-4 p-sm-5">
                        <h4 class="text-center mb-4">Admin Login</h4>

                        @include('admin.layout.notifications')

                        <form action="{{ route('admin-login') }}" method="POST" id="login" class="needs-validation"
                            novalidate>
                            @csrf

                            <div class="mb-3">
                                <label for="email" class="form-label text-muted small fw-bold">Email Address</label>
                                <input type="email" name="email"
                                    class="form-control @error('email') is-invalid @enderror" id="email"
                                    placeholder="admin@example.com" required autofocus>
                                <div class="invalid-feedback">Please enter a valid email address.</div>
                            </div>

                            <div class="mb-4">
                                <label for="password" class="form-label text-muted small fw-bold">Password</label>
                                <input type="password" name="password"
                                    class="form-control @error('password') is-invalid @enderror" id="password"
                                    placeholder="••••••••" required>
                                <div class="invalid-feedback">Password is required.</div>
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Log In</button>
                            </div>

                            <div class="text-center mt-3 d-none">
                                <a href="#" class="text-decoration-none small text-muted">Forgot Password?</a>
                            </div>
                        </form>
                    </div>
                </div>

                <p class="text-center mt-4 text-muted small">
                    &copy; {{ date('Y') }} {{ config('app.name') }}. All rights reserved.
                </p>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Bootstrap validation script
        (function () {
            'use strict'
            var forms = document.querySelectorAll('.needs-validation')
            Array.prototype.slice.call(forms).forEach(function (form) {
                form.addEventListener('submit', function (event) {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }
                    form.classList.add('was-validated')
                }, false)
            })
        })()
    </script>

</body>

</html>