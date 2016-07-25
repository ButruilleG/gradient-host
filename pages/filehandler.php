<?php include "header.php"; ?>
<?php require "../sefulfunctions.php"; ?>

<?php
        if($_GET[file]){
                $handle_text = false;
                $filename = textValidation($_GET[file]);

                //determine how to handle this type of file
                $file_parts = pathinfo($filename);
                switch($file_parts['extension']){
                        //text files can currently be handled as a webpage
                        case "txt":
                        $handle_text = true;
                        break;

                        //other types of files should be provided for download
                        default:
                        break;
                }

                if(file_exists("downloads/" . $filename)){
                        $file = fopen("downloads/" . $filename, "r") or die("Unable to open file.");
                        if($handle_text){
                                while(!feof($file)){
                                        echo "<p>". fgets($file);
                                }
                                echo "<a href='downloads/".$filename."' download='$filename'>Download this text file</a>";
                        }
                        else {
                                echo "<a href='downloads/".$filename."' download='$filename'>Download this file</a>";
                        }
                        fclose($file);
                }
                else {
                        echo "<p>" . $filename . " is not present in this directory.";
                }
        }
        else{
                echo "<p>No file chosen.";
        }
?>

<form method="GET" action="<?php echo $_SERVER['PHP_SELF'];?>">
        <input type="text" placeholder="Search for another file" name="file">
        <input type="submit">
</form>

<?php include "footer.php"; ?>
