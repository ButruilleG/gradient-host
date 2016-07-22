<?php include "header.php" ?>

<h1>Search</h1>
<?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // collect value of input field
                $search = $_POST['search'];
                if (empty($search)) {
                        echo "<p>No text input.";
                }
                else {
                        echo "<p>This feature is incomplete. Please check back later.";
                }
        }
        else{
                echo "<p>No search made.";
        }
?>

<?php include "footer.php" ?>
