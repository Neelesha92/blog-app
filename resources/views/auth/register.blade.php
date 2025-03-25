<x-guest-layout>
    <div class="registration-container">
        <div class="registration-card">
            <!-- Logo Section -->
            <div class="logo-section">
                <a href="/">
                    <x-application-logo class="logo" />
                </a>
                <h1 class="registration-title">Create Your Account</h1>
                <p class="registration-subtitle">Join us to get started</p>
            </div>

            <!-- Validation Errors -->
            <x-auth-validation-errors class="auth-errors" :errors="$errors" />

            <!-- Registration Form -->
            <form method="POST" action="{{ route('register') }}" class="registration-form">
                @csrf

                <!-- Name Field -->
                <div class="form-group">
                    <label for="name" class="form-label">Name</label>
                    <div class="input-wrapper">
                        <svg class="input-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                        </svg>
                        <input id="name" type="text" name="name" value="{{ old('name') }}" 
                               required autofocus placeholder="John Doe" class="form-input" />
                    </div>
                </div>

                <!-- Email Field -->
                <div class="form-group">
                    <label for="email" class="form-label">Email</label>
                    <div class="input-wrapper">
                        <svg class="input-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                        <input id="email" type="email" name="email" value="{{ old('email') }}" 
                               required placeholder="john@example.com" class="form-input" />
                    </div>
                </div>

                <!-- Password Field -->
                <div class="form-group">
                    <label for="password" class="form-label">Password</label>
                    <div class="input-wrapper">
                        <svg class="input-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                        </svg>
                        <input id="password" type="password" name="password" 
                               required autocomplete="new-password" placeholder="••••••••" class="form-input" />
                    </div>
                </div>

                <!-- Confirm Password Field -->
                <div class="form-group">
                    <label for="password_confirmation" class="form-label">Confirm Password</label>
                    <div class="input-wrapper">
                        <svg class="input-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <input id="password_confirmation" type="password" 
                               name="password_confirmation" required placeholder="••••••••" class="form-input" />
                    </div>
                </div>

                <!-- Form Footer -->
                <div class="form-footer">
                    <a href="{{ route('login') }}" class="login-link">
                        Already registered?
                    </a>
                    <button type="submit" class="submit-button">
                        Register
                    </button>
                </div>
            </form>
        </div>
    </div>

    <style>
        /* Basic Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Container for the registration page */
        .registration-container {
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: #f0f4ff;
            padding: 20px;
        }

        /* Card for the registration form */
        .registration-card {
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        /* Logo Section */
        .logo-section {
            text-align: center;
            margin-bottom: 20px;
        }

        .logo {
            width: 80px;
            height: 80px;
        }

        .registration-title {
            font-size: 24px;
            font-weight: 600;
            color: #1e293b;
            margin-top: 10px;
        }

        .registration-subtitle {
            font-size: 14px;
            color: #64748b;
            margin-top: 5px;
        }

        /* Form Styles */
        .registration-form {
            margin-top: 20px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-label {
            display: block;
            margin-bottom: 5px;
            font-weight: 500;
            color: #374151;
            font-size: 14px;
        }

        .input-wrapper {
            position: relative;
        }

        .input-icon {
            position: absolute;
            left: 10px;
            top: 50%;
            transform: translateY(-50%);
            width: 18px;
            height: 18px;
            color: #6b7280;
        }

        .form-input {
            width: 100%;
            padding: 10px 10px 10px 35px;
            border: 2px solid #e5e7eb;
            border-radius: 8px;
            font-size: 14px;
        }

        .form-input:focus {
            border-color: #6366f1;
            outline: none;
        }

        /* Error Messages */
        .auth-errors {
            color: #dc2626;
            background: #fee2e2;
            padding: 10px;
            border-radius: 8px;
            margin-bottom: 15px;
            font-size: 14px;
        }

        /* Form Footer */
        .form-footer {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-top: 20px;
        }

        .login-link {
            color: #6b7280;
            font-size: 14px;
            text-decoration: none;
        }

        .login-link:hover {
            color: #4f46e5;
        }

        .submit-button {
            background: #6366f1;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 8px;
            font-weight: 500;
            font-size: 14px;
            cursor: pointer;
        }

        .submit-button:hover {
            background: #4f46e5;
        }

        /* Responsive Design */
        @media (max-width: 480px) {
            .registration-card {
                padding: 20px;
            }

            .form-footer {
                flex-direction: column;
                gap: 10px;
            }

            .submit-button {
                width: 100%;
            }
        }
    </style>
</x-guest-layout>