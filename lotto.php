<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/main.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <title>Lotto</title>
    </head>
    <body>
        <h3>
            Mark your numbers:
        </h3><br>
        <form action="#">
            <table class="numbersTable">
            <?php
                for($i = 1; $i <= 49; $i++){
                    // Open row tag
                    if(($i-1)%7 == 0){
                        echo "<tr>";
                    }

                    echo "
                    <td>
                        <label>
                            $i<br>
                            <input type='checkbox' class='numbers' name='numbers[]' value='$i'>
                        </label>
                    </td>";

                    // Close row tag
                    if($i%7 == 0){
                        echo "</tr>";
                    }
                }
            ?>
            </table>
            <button type="submit">
                Send
            </button>
        </form>
        <?php
            if(isset($_GET['numbers'])){
                include_once("lottoFunction.php");
                lotto();
            }
        ?>
    </body>
    <script>
    $(".numbers").change(function() {
        $limit = 6;
        var count = $(".numbers:checked").length; //get count of checked checkboxes

        if (count > $limit) {
            alert("Only 6 options allowed..!");
            $(this).prop('checked', false); // turn this one off
        }
    });
</script>
</html>