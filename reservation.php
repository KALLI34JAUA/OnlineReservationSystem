<?php include "db.php"; ?>

<form method="POST">
 Name: <input type="text" name="name"><br>
 Age: <input type="number" name="age"><br>
 Train No: <input type="number" name="train_no"><br>
 Train Name: <input type="text" name="train_name"><br>
 Class: <input type="text" name="class"><br>
 Date of Journey: <input type="date" name="journey_date"><br>
 From: <input type="text" name="source"><br>
 To: <input type="text" name="destination"><br>

 <button type="submit" name="book">Book Ticket</button>
</form>

<?php
if(isset($_POST['book'])){
    $name = $_POST['name'];
    $age = $_POST['age'];
    $train_no = $_POST['train_no'];
    $train_name = $_POST['train_name'];
    $class = $_POST['class'];
    $date = $_POST['journey_date'];
    $source = $_POST['source'];
    $dest = $_POST['destination'];

    $query = "INSERT INTO reservations(name, age, train_no, train_name, class, journey_date, source, destination)
              VALUES('$name', '$age', '$train_no', '$train_name', '$class', '$date', '$source', '$dest')";

    mysqli_query($conn, $query);

    echo "Ticket Booked Successfully!";
}
?>
