<?php include 'functions.php';?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="who pays the bill">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Document</title>
</head>
<body>
    
    <div class="container mt-5">
        <?php
            if($page == 1) {  

        ?>
        <form action="" method="get">

            <div class="form-group">
                <h2>Add Participants</h2>
                <input
                class="form-control"
                type="text"
                placeholder="name of participants"
                name="names"
                >

                <small id="namesHelp" class="form-text text-muted">
                    Add participants seperated by commas
                </small>
            </div>
             <button type="submit" class="btn btn-primary">
                    Add Participants
             </button>
        </form><br>

        <?php 
        foreach($errors as $error) {
        ?>
        <div class="alert alert-danger">
            <?php echo $error; ?>
        </div>

        <?php 
            } // end foreach
            } // end of if
        ?>
        <?php
            if($page == 2 ) { include 'page_2.php'; }
            if($page == 3 ) { include 'page_3.php'; }
        ?>
        
    </div>

</body>
</html>