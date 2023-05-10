<?php 
// Inclusion de la connexion Mysql
include('./pages/db_connect.php');

//verification du bouton submit 
if(isset($_POST['submit'])){

    $heading=$_POST['heading'];
    $tripDate = $_POST['tripDate'];
    $duration = $_POST['duration'];
    $summary=$_POST['summary'];

    $query = "INSERT INTO `adventures`(`heading`, `tripDate`, `duration`, `summary`) 
    VALUES ( '$heading','$tripDate','$duration','$summary')";

    $result= mysqli_query($connex, $query);

    if($result){
     header("Location: admin-confirm.php?msg=Ajout avec succes");

    }

    else{
        echo "Failed: ".mysqli_error($connex);
    }
 }


     include('./pages/header.php');
?>


<main>
    <div>
        <form action="" method="post">
                <input type="text" name="heading" id="" placeholder=" Heading" required>
                <input type="date" name="tripDate" required>
                <input type="number" name="duration" id="duarationNb" placeholder="Duration" required>
                <textarea name="summary" id="" cols="30" rows="10" required>
                </textarea>
                <button type="submit" name="submit">Submit</button>
        </form>

    </div>
</main>


<?php   
        include('./pages/footer.php');
?>