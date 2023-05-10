<?php 
    include('./pages/db_connect.php');


     include('./pages/header.php');
?>


<main>
        <div class="banner">
            <h1> Come Experienced Canada</h1>
        </div>
        <section>
            <div class="title-section">
                <h1>Upcoming Adventures</h1>
            </div>

            <?php
    // select query 
       $query="SELECT * FROM `adventures`";
       $result= mysqli_query($connex,$query);
       while($row = mysqli_fetch_assoc($result)){
        ?>
            <article>
                    <h2><?php echo $row['heading'] ?></h2>
                    <div class="info">
                    <p><span>Date:</span><?php echo $row['tripDate'] ?></p>
                    <p> <span> Duration:</span> <?php echo $row['duration']?> Days </p>
                    </div>
                    <div class="summary">
                     <h3>Summary</h3>
                     <p>
                      <?php echo $row['summary']?>
                    </p>
                    </div>
            </article>
        
       

        <?php
       }
         ?>

        </section>
    </main>


<?php   
        include('./pages/footer.php');
?>