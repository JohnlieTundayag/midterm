<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="w-100" style="max-width: 400px;">
            <!-- Error Message -->
            <div id="error-box" class="alert alert-danger d-none" role="alert">
                <strong>System Errors</strong>
                <ul id="error-list" class="mb-0">
                    <!-- Error messages will be injected here -->
                </ul>
            </div>

            <!-- Login Form -->
            <div class="card shadow-sm">
                <div class="card-body">
                    <h3 class="card-title text-center mb-4">Login</h3>
                    <form id="login-form">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter email">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" placeholder="Password">
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('login-form').addEventListener('submit', function(event) {
            event.preventDefault();
            
            // Clear any previous error messages
            const errorBox = document.getElementById('error-box');
            const errorList = document.getElementById('error-list');
            errorList.innerHTML = '';
            errorBox.classList.add('d-none');
            
            // Get input values
            const email = document.getElementById('email').value.trim();
            const password = document.getElementById('password').value.trim();
            
            // Track errors
            let errors = [];
            
            // Validate fields
            if (!email) errors.push("Email is required");
            if (!password) errors.push("Password is required");
            
            // Show errors if any
            if (errors.length > 0) {
                errors.forEach(error => {
                    const li = document.createElement('li');
                    li.textContent = error;
                    errorList.appendChild(li);
                });
                errorBox.classList.remove('d-none');
            } else {
                // Proceed with form submission if no errors
                // (You can add form submission logic here)
                alert("Form submitted successfully");
            }
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
