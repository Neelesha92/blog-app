<x-guest-layout>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        .login-container {
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(to bottom right, #f0f4ff, #e0e7ff);
        }

        .login-card {
            width: 100%;
            max-width: 400px;
            background: white;
            padding: 2rem;
            border-radius: 1rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            margin: 1rem;
        }

        .logo {
            width: 80px;
            height: 80px;
            margin: 0 auto 1.5rem;
            display: block;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 500;
            color: #374151;
            font-size: 0.875rem;
        }

        .form-input {
            width: 100%;
            padding: 0.75rem;
            border: 1px solid #e5e7eb;
            border-radius: 0.5rem;
            font-size: 0.875rem;
        }

        .form-input:focus {
            outline: none;
            border-color: #6366f1;
            box-shadow: 0 0 0 2px rgba(99, 102, 241, 0.2);
        }

        .remember-forgot {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin: 1.5rem 0;
            font-size: 0.875rem;
        }

        .login-button {
            width: 100%;
            padding: 0.75rem;
            background: #6366f1;
            color: white;
            border: none;
            border-radius: 0.5rem;
            font-weight: 500;
            cursor: pointer;
            transition: background 0.2s ease;
        }

        .login-button:hover {
            background: #4f46e5;
        }

        .signup-link {
            text-align: center;
            margin-top: 1.5rem;
            font-size: 0.875rem;
            color: #4b5563;
        }

        .signup-link a {
            color: #6366f1;
            text-decoration: none;
            font-weight: 500;
        }

        .signup-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="login-card">
            <div class="text-center">
                <a href="/">
                    <x-application-logo class="logo" />
                </a>
                <h1>Welcome Back</h1>
                <p>Please sign in to continue</p>
            </div>

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="form-group">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" required class="form-input" placeholder="Enter your email">
                </div>

                <div class="form-group">
                    <label class="form-label">Password</label>
                    <input type="password" name="password" required class="form-input" placeholder="••••••••">
                </div>

                <div class="remember-forgot">
                    <label>
                        <input type="checkbox" name="remember">
                        Remember me
                    </label>
                    <a href="{{ route('password.request') }}">Forgot password?</a>
                </div>

                <button type="submit" class="login-button">Sign In</button>

                <p class="signup-link">
                    Don't have an account? 
                    <a href="{{ route('register') }}">Create one</a>
                </p>
            </form>
        </div>
    </div>
</body>
</html>
</x-guest-layout>