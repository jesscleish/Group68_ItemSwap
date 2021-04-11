<?php

session_start();
// Checks if user is logged in (session id set)
// include 'checkSessionID.php';

$error = "";

if (isset($_SESSION["sessionID"])) {
    $loggedIn = true;
} else {
    $loggedIn = false;
}

// Get session user's id
if ($loggedIn == true) {
    $viewerid = $_SESSION['sessionID'];
} else {
    $viewerid = null;
}


// Include and call function to connect to db
include_once 'components/dbConnection.php';
$connection = getConnection();

// Output error message if connection unsuccessful.
if (mysqli_connect_errno() || $connection === false) {
    die("Database connection failed: " . mysqli_connect_error() . "(" . mysqli_connect_errno() . ")");}
?>


<html>
<head>
    <title> <?php echo 'Search'?> </title>
    <?php include_once("components/imports.php"); ?>
<!--    <script type="text/javascript" src="components/editListing.js"></script>-->
    <script type="text/javascript">
        // Listener for button to redirect to offer page if clicked
        document.getElementById("offerbtn").onclick = function () {
            location.href = 'offer.php';
        }
    </script>
</head>
<body>
<?php include('components/header.php') ?>
<div class="pageContent">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

        <label for="searchBar">Search: </label>
        <input type="text" name="searchBar"  value="<?php if ($_SERVER["REQUEST_METHOD"] == "POST") {echo $_POST["searchBar"];}  ?>">

        <input type="submit">

        <p class="error"><?php echo $error; ?></p>

    </form>


<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
//    echo $_POST["searchBar"]. "    " ;
    // Gets all listings that have that text in title
    $title = $connection->real_escape_string($_POST["searchBar"]);

    $query = "SELECT  * FROM listing WHERE title LIKE CONCAT('%".$title."%');";
    //$query = "SELECT  * FROM listing WHERE title LIKE '" .$title."%';"; // was used to get only if match the beginning of title
    $qresult = mysqli_query($connection, $query);

    // Print out each listing
    if ($qresult) {
        if (mysqli_num_rows($qresult) == 0){
            echo '<h1>No Listings Found.</h1><br><h2>Try editing your phrase and searching again</h2>';
        }else{
            while ($row = mysqli_fetch_array($qresult, MYSQLI_ASSOC)) {
                // Stores details of table array in variables for output.
                $listingid = $row['id'];
                $title = $row['title'];
                $image = $row['image'];
                $userid = $row['userid'];

                // Fetches details about the user associated with the listing.
                $userquery = "SELECT * FROM user WHERE id = '$userid';";
                $result = mysqli_query($connection, $userquery);
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                $username = $row['username'];

                // Prints each listing in it's own div for flexboxes
                echo '<div class ="listingTile">';
                echo '<img class="listingImage" onclick="window.location.href=\'viewListing.php?whichListing=' . $listingid . '\'" src="' . $image . '" alt="listing">';
                echo '<div class="listingText">';
                echo '<h3 class="listingHeader"><a class="gridLink" href = "viewListing.php?whichListing=' . $listingid . '">' . $title . '</a></h3>';
                echo '<h4 class="listingHeader">Posted By: <a href = "userProfile.php?user=' . $userid . '">' . $username . '</a></h4>';
                echo '</div></div>';
            }
        }
    }else {
        echo '<h1> ERROR: COULD NOT FETCH LISTINGS!</h1>';

    }
}
?>