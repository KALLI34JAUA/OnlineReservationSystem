<?php include "db.php"; ?>

<form method="POST">
 Enter PNR: <input type="number" name="pnr">
 <button type="submit" name="search">Search</button>
</form>

<?php
if(isset($_POST['search'])){
    $pnr = $_POST['pnr'];

    $query = "SELECT * FROM reservations WHERE pnr=$pnr";
    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result)==1){
        $data = mysqli_fetch_assoc($result);
        echo "Passenger: ".$data['name']."<br>";
        echo "Train: ".$data['train_name']."<br><br>";

        echo "<form method='POST'>
                <input type='hidden' name='pnr' value='$pnr'>
                <button name='cancel'>Confirm Cancellation</button>
              </form>";
    } else {
        echo "PNR Not Found!";
    }
}

if(isset($_POST['cancel'])){
    $pnr = $_POST['pnr'];
    mysqli_query($conn, "DELETE FROM reservations WHERE pnr=$pnr");
    echo "Ticket Cancelled!";
}
?>
