<?php

declare(strict_types=1);


// // Database credentials
// $host = 'localhost';
// $username = 'root';
// $password = '';
// $database = 'userdb';

// // Create a connection
// $conn = new mysqli($host, $username, $password, $database);

// // Check the connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }


// echo "Connected successfully<br>";

// $query = 'SELECT * FROM users';

// $result = $conn->query($query);

// // Check if there are results and then fetch data
// if ($result->num_rows > 0) {

//     // Output data of each row
//     while ($row = $result->fetch_assoc()) {
//         echo '<pre>';
//             print_r($row);
//         echo '</pre>';
//     }

// } else {
//     echo "0 results";
// }

// // Close the connection
// $conn->close();




$router = new App\Router();
