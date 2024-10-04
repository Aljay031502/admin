<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login/Registration</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
        .form-container {
            display: none;
        }
        .active {
            display: block;
        }
        .toggle-link {
            cursor: pointer;
            color: #f7f7f7;
            text-decoration: underline;
        }
        .toggle-link:hover {
            color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Login Form -->
        <div id="login-form" class="form-container active">
            <h1>Automatic Watering System</h1>
            <h2>Login</h2>
            <form onsubmit="login(event)">
                <div class="input-box">
                    <input type="text" id="username" placeholder="Email or Username" required>
                    <i class='bx bx-envelope'></i>
                </div>
                <div class="input-box">
                    <input type="password" id="password" placeholder="Password" required>
                    <i class='bx bxs-hide' id="eyeicon"></i>
                </div>
                <div class="remember-forgot">
                    <label>
                        <input type="checkbox"> Remember me
                    </label>
                    <a href="#">Forgot password?</a>
                </div>
                <button type="submit" class="btn">Login</button>
                <p class="toggle-link" onclick="showForm('registration-form')">Don't have an account? Register</p>
            </form>
        </div>

        <!-- Registration Form -->
        <div id="registration-form" class="form-container">
            <h1>Create an Account</h1>
            <form>
                <div class="input-box">
                    <input type="text" id="name" placeholder="Name" required>
                    <i class='bx bxs-face'></i>
                </div>
                <div class="input-box">
                    <input type="text" id="email-username" placeholder="Email or Username" required>
                    <i class='bx bx-envelope'></i>
                </div>
                <div class="input-box">
                    <input type="password" id="register-password" placeholder="Password" required>
                    <i class='bx bxs-hide' id="eyeicon-register"></i>
                </div>
                <div class="terms-condition">
                    <label>
                        <input type="checkbox"> I agree to the <a href="#">Terms & Conditions</a>
                    </label>
                </div>
                <button type="submit" class="btn">Sign Up</button>
                <p class="toggle-link" onclick="showForm('login-form')">Have an account? Login</p>
            </form>
        </div>
    </div>

    <script>
        function showForm(formId) {
            document.querySelectorAll('.form-container').forEach(form => {
                form.classList.remove('active');
            });
            document.getElementById(formId).classList.add('active');
        }

        function login(event) {
            event.preventDefault(); // Prevent form submission

            const correctUsername = "jay";
            const correctPassword = "123456";

            const typedUsername = document.getElementById('username').value;
            const typedPassword = document.getElementById('password').value;

            if (typedUsername === correctUsername && typedPassword === correctPassword) {
                alert("Login Successful");
            } else {
                alert("Invalid Username or Password");
            }
        }

        // Toggle password visibility
        document.getElementById("eyeicon").onclick = function() {
            const passwordField = document.getElementById("password");
            if (passwordField.type === "password") {
                passwordField.type = "text";
                this.classList.remove('bxs-hide');
                this.classList.add('bx-show');
            } else {
                passwordField.type = "password";
                this.classList.remove('bx-show');
                this.classList.add('bxs-hide');
            }
        };
        
        // For the registration form
        document.getElementById("eyeicon-register").onclick = function() {
            const passwordField = document.getElementById("register-password");
            if (passwordField.type === "password") {
                passwordField.type = "text";
                this.classList.remove('bxs-hide');
                this.classList.add('bx-show');
            } else {
                passwordField.type = "password";
                this.classList.remove('bx-show');
                this.classList.add('bxs-hide');
            }
        };
    </script>
</body>
</html>
