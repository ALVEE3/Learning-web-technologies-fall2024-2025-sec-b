<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup - Online Shop Management System</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="script.js"></script>
</head>
<body>
<h1>Signup - Online Shop Management System</h1>

<!-- Employee Registration Form -->
<h2>Register New Employee</h2>
<form id="registerEmployeeForm">
    <input type="text" id="empName" placeholder="Employee Name" required><br>
    <input type="text" id="empUsername" placeholder="Employee Username" required><br>
    <input type="password" id="empPassword" placeholder="Employee Password" required><br>
    <button type="submit">Register Employee</button>
</form>

<hr>

<!-- Admin Registration Form -->
<h2>Register New Admin</h2>
<form id="registerAdminForm">
    <input type="text" id="adminName" placeholder="Admin Name" required><br>
    <input type="text" id="adminUsername" placeholder="Admin Username" required><br>
    <input type="password" id="adminPassword" placeholder="Admin Password" required><br>
    <button type="submit">Register Admin</button>
</form>

</body>
</html>
