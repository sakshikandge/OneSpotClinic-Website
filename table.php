<html>
    <head>
        <style>
    .admin-header {
    background-color: rgb(63, 120, 185)      ;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px 20px;
    color: white;
}

.admin-title {
    margin: 0;
}

.admin-buttons {
    display: flex;
    gap: 10px;
}

.admin-button {
    background-color:rgb(63, 120, 185);
    color: white;
    border: none;
    padding: 5px 10px;
    cursor: pointer;
}

.admin-button:hover {
    background-color:rgb(54, 104, 161);
}
</style>
</head>
    <body>
    <header class=" admin-header bg-info" >
        <h1 class="admin-title bg-info text-white" >Admin Page</h1>
        <div class="admin-buttons">
            <a href="logout.php"><button class="admin-button bg-info">Logout</button></a>
            <button class="admin-button bg-info">Admin</button>
        </div>
    </header>

        <table>
            <tr>
                <th>name</th>
                <th>email</th>
                <th>appointmentDate</th>
                <th>timeslot</th>
                <th>doctor</th>
</tr>
<?php
$conn=mysqli_connect('localhost','root','','appointment booking');
$sql="SELECT* FROM  entappointment";
$result= $conn->query($sql);

if ($result->num_rows > 0){
    while ($row = $result-> fetch_assoc()){
        echo "<tr><td>" . $row["name"] . "</td><td>" . $row["email"] . "</td><td>" . $row["appointmentDate"] . "</td><td>" . $row["timeslot"] . "</td><td>" . $row["doctor"] . "</td></tr>";
                           
    }
}
?>
</table>
</body>
    </html>