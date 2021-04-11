<?php
session_start();
include 'checkSessionID.php';
$viewerID = $_SESSION['sessionID'];

$iniConfig = parse_ini_file("php.ini");

//Establishing connection
include_once 'components/dbConnection.php';
$connection = getConnection();

// Output error message if connection unsuccessful.
if (mysqli_connect_errno() || $connection === false) {
    die("Database connection failed: " . mysqli_connect_error() . "(" . mysqli_connect_errno() . ")");
}

?>
<html>
<head>
    <title>View Your Offers</title>
    <?php include_once("components/imports.php"); ?>
</head>
<body>
<?php include('components/header.php') ?>
<div class="pageContent">
    <div id="useroffers">
        <h1>Your Sent Offers:</h1>
        <?php
        $counter = 0;
        // Fetches all offers from table to display sequentially
        $query = "SELECT * FROM offer WHERE fromUserid = '$viewerID';";
        $qresult = mysqli_query($connection, $query);

        if (mysqli_num_rows($qresult) == 0) {
            echo '<h2 id = "acceptmsg">You have made no offers!</h2>';
        } else {
            echo '<p id = "acceptmsg">The other party will contact you to accept your offer, or delete it.  Please be patient!</p>';


            // Prints results from row fetch and prints sequentially
            while ($row = mysqli_fetch_array($qresult, MYSQLI_ASSOC)) {
                $counter++;
                $offerid = $row['id'];
                $listingid = $row['listingid'];
                $contact = $row['contact'];
                $offerdesc = $row['offerdesc'];
                $posterid = $row['toUserid'];

                // Obtains title of the post from the listing table.
                $query = "SELECT * FROM listing WHERE id = '$listingid';";
                $result = mysqli_query($connection, $query);
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                $title = $row['title'];

                // Obtains the name of the poster from the user table.
                $query = "SELECT * FROM user WHERE id = '$posterid';";
                $result = mysqli_query($connection, $query);
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                $posterName = $row['username'];

                // Output the offer
                echo '<h2> Offer ' . $counter . ':</h2>';
                echo '<h3><a href="userProfile.php?user=' . $posterid . '">' . $posterName . '</a>\'s <b><a href = "viewListing.php?whichListing=' . $listingid . ' "></b>' . $title . '</a></h3>';
                echo '';
                echo '<h4>What you offered:</h4><p>' . $offerdesc . '</p><br>';
                // Prints out button that allows user to delete offer corresponding with offerid.
                echo '<input type="button" class="delbtn" value ="Delete Offer" onclick="window.location.href=\'deleteSentOffer.php?offerid=' . $offerid . '\'"><br>';
            }
        }
        ?>
    </div>
</div>
</body>
</html>