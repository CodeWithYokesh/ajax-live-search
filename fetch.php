<?php
include("db.php");

$search = isset($_GET['search']) ? $_GET['search'] : '';

$sql = "SELECT * FROM students WHERE name LIKE '%$search%' OR course LIKE '%$search%'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table>";
    echo "<tr>
            <th>ID</th>
            <th>Name</th>
            <th>Course</th>
            <th>Email</th>
          </tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['name']}</td>
                <td>{$row['course']}</td>
                <td>{$row['email']}</td>
              </tr>";
    }

    echo "</table>";
} else {
    echo "<p>No records found.</p>";
}
?>