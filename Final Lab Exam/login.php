<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Online Shop Management System</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="script.js"></script>
</head>
<body>
<h1>Login - Online Shop Management System</h1>

<!-- Employee Login -->
<h2>Employee Login</h2>
<form id="loginEmployeeForm">
    <input type="text" id="empLoginUsername" placeholder="Username" required><br>
    <input type="password" id="empLoginPassword" placeholder="Password" required><br>
    <button type="submit">Login as Employee</button>
</form>

<hr>

<!-- Admin Login -->
<h2>Admin Login</h2>
<form id="loginAdminForm">
    <input type="text" id="adminLoginUsername" placeholder="Username" required><br>
    <input type="password" id="adminLoginPassword" placeholder="Password" required><br>
    <button type="submit">Login as Admin</button>
</form>

</body>
</html>
