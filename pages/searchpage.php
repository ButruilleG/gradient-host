<?php include "header.php" ?>
<?php require "../usefulfunctions.php" ?>
<h1>Search</h1>
<?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // collect value of input field
                $search = textValidation($_POST['search']);
                if (empty($search)) {
                        echo "<p>No text input.";
                }
                else {
                        echo "<p>This feature is incomplete. Please check back later. ";
                        echo "<a href='filehandler.php?file=" . $search . "'>If you have a file in particular you'd like to search for, please click here.";
                }
        }
        else{
                echo "<p>No search made.";
        }
?>

<?php include "footer.php" ?>
