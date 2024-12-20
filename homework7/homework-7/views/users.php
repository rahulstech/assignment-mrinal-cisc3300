<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
</head>
<body>
    <h1>User List</h1>
    <ul id="userList"></ul>

    <script>
        fetch('/homework-7/users')
        .then(response => response.json())
        .then(data => {
            const userList = document.getElementById('userList');
            data.forEach(user => {
                const listItem = document.createElement('li');
                listItem.textContent = `${user.name} (${user.email})`;
                userList.appendChild(listItem);
            });
        });
    </script>
</body>
</html>
