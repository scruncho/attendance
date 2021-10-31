<?php 
    $title = 'Success';
    require_once 'includes/header.php'; ?>

    <h1 class="text-center text-success">Your Registration Was Successful!</h1>
<!-- this prints out values that were passed to the action page using METHOD GET -->
    <!-- <div class="card" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title"> <?php //echo $_GET['firstname'] . '' . $_GET['lastname'];?></h5>
        <h6 class="card-subtitle mb-2 text-muted">

        <?php //echo $_GET['specialty']?>

        </h6>

        <p class="card-text">
        Date Of Birth: <?php //echo $_GET['dob']?>
        </p>

        <p class="card-text">
        Email Address: <?php //echo $_GET['email']?>
        </p>


        <p class="card-text">
        Contact Number: <?php //echo $_GET['phone']?>
        </p>
    </div>
    </div>   -->

<!-- this prints out values that were passed to the action page using METHOD GET -->
     <div class="card" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title"> <?php echo $_POST['firstname'] . '' . $_POST['lastname'];?></h5>
        <h6 class="card-subtitle mb-2 text-muted">

        <?php echo $_POST['specialty']?>

        </h6>

        <p class="card-text">
        Date Of Birth: <?php echo $_POST['dob']?>
        </p>

        <p class="card-text">
        Email Address: <?php echo $_POST['email']?>
        </p>


        <p class="card-text">
        Contact Number: <?php echo $_POST['phone']?>
        </p>   
    </div>
    </div>   
 
<br>
<br>
<br>
<br>
<br>
    <?php require_once 'includes/footer.php'; ?>
