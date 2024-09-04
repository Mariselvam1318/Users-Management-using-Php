# Users Management CRUD

## Description

This project is a simple User Management System built with PHP and MySQL, allowing you to perform basic CRUD (Create, Read, Update, Delete) operations on user data. The application features a responsive design using Bootstrap, making it user-friendly across different devices.

## Features

*   **User List**: View a list of all users with their details.
*   **Add User**: Add new users to the system.
*   **Update User**: Edit existing user details.
*   **Delete User**: Remove users from the system.
*   **Responsive Design**: Built with Bootstrap for a mobile-friendly interface.

## Requirements

*   PHP (>= 7.0)
*   MySQL
*   A web server (e.g., Apache or Nginx)

## Installation

1.  **Clone the repository**:

```bash
git clone <repository-url>
cd users-crud
```

2.  **Set up the database**:

*   Create a database named `usercrud` in MySQL.
*   Run the SQL script to create the `users` table:

```sql
CREATE TABLE users (
    id INT AUTO\_INCREMENT PRIMARY KEY,
    Name VARCHAR(255) NOT NULL,
    Email VARCHAR(255) NOT NULL,
    Mobile VARCHAR(15) NOT NULL,
    City VARCHAR(100) NOT NULL
);
```
3.  **Configure the database connection**:

*   Open the connection script in your PHP files and update the connection details if necessary.

4.  **Run the application**:

*   Place the project files in the web server’s root directory (e.g., `htdocs` for XAMPP).
*   Access the application in your web browser:

```arduino
http://localhost/users-crud/
```
## Usage

*   Click on "Add User" to add a new user.
*   View the list of users, and use the "Update" button to edit user details or the "Delete" button to remove a user.
