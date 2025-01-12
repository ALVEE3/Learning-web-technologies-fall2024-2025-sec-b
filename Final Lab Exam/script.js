$(document).ready(function() {
 
    // Register Employee
    $('#registerForm').submit(function(e) {
        e.preventDefault();
        let name = $('#name').val();
        let contactNo = $('#contact_no').val();
        let username = $('#username').val();
        let password = $('#password').val();
        // Null Validation
        if (!name || !contactNo || !username || !password) {
            alert("All fields must be filled out!");
            return;
        }
        $.ajax({
            url: 'register_employee.php',
            type: 'POST',
            data: { name, contactNo, username, password },
            success: function(response) {
                alert(response);
            }
        });
    });
    // Update Employee
    $('#updateForm').submit(function(e) {
        e.preventDefault();
        let username = $('#updateUsername').val();
        let newName = $('#updateName').val();
        let newContact = $('#updateContact').val();
        let newPassword = $('#updatePassword').val();
        // Null Validation
        if (!username || !newName || !newContact || !newPassword) {
            alert("All fields must be filled out!");
            return;
        }
        $.ajax({
            url: 'update_employee.php',
            type: 'POST',
            data: { username, newName, newContact, newPassword },
            success: function(response) {
                alert(response);
            }
        });
    });
    // Delete Employee
    $('#deleteForm').submit(function(e) {
        e.preventDefault();
        let username = $('#deleteUsername').val();
        if (!username) {
            alert("Please provide a username to delete!");
            return;
        }
        $.ajax({
            url: 'delete_employee.php',
            type: 'POST',
            data: { username },
            success: function(response) {
                alert(response);
            }
        });
    });
    // Search Employee
    $('#searchButton').click(function() {
        let searchTerm = $('#searchInput').val();
        if (!searchTerm) {
            alert("Please enter a username to search!");
            return;
        }
        $.ajax({
            url: 'search_employee.php',
            type: 'GET',
            data: { username: searchTerm },
            success: function(response) {
                $('#searchResult').html(response);
            }
        });
    });
});

 