<?php
require_once "pdo.php";
session_start();
?>

<html>
<head></head><body>
<?php

/*
Connects to database - Requires pdo.php for database access
Starts session - Enables flash messaging
Displays flash messages - Shows one-time error (red) or success (green) messages from previous actions
Lists all users - Fetches users from the database and displays them in a table with name, email, and password
Provides action links - Each user row has "Edit" and "Delete" links that pass the user_id to modify that user
Add button - Links to add.php to create new users
*/


// Flash pattern
if ( isset($_SESSION['error']) ) {
    echo '<p style="color:red">'.$_SESSION['error']."</p>\n";
    unset($_SESSION['error']);
}


/*
Check if success message exists

Show it in green

Remove it after displaying
*/

if ( isset($_SESSION['success']) ) {
    echo '<p style="color:green">'.$_SESSION['success']."</p>\n";
    unset($_SESSION['success']);
}

// Create Table and Display the user list with Edit and Delete links
echo('<table border="1">'."\n");
$stmt = $pdo->query("SELECT name, email, password, user_id FROM users");
// Note how we use the "user_id" column as the unique identifier
while ( $row = $stmt->fetch(PDO::FETCH_ASSOC) ) { // Loop for each user
    echo "<tr><td>";
    echo(htmlentities($row['name']));
    echo("</td><td>");
    echo(htmlentities($row['email']));
    echo("</td><td>");
    echo(htmlentities($row['password']));
    echo("</td><td>");
    // Edit and Delete links
    echo('<a href="edit.php?user_id='.$row['user_id'].'">Edit</a> / ');
    echo('<a href="delete.php?user_id='.$row['user_id'].'">Delete</a>');
    echo("</td></tr>\n");
}
?>
</table>
<a href="add.php">Add New</a>
