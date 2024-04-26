

<?php

$result = "";

if(isset($_POST["submit"])){

    $first_input = $_POST['first_input'];
    $second_input = $_POST['second_input'];


   switch($result){
       case"+":
           $result = $first_input + $second_input;
           break;

       case"-":
           $result = $first_input - $second_input;
           break;

       case"*":
           $result = $first_input * $second_input;
           break;

       case"/":
           $result = $first_input / $second_input;
           break;

       case"%":
           $result = $first_input % $second_input;
           break;

     }

 }

?>



<form action="Clr.php" method="post">
    <table>
        <tr>
            <td>
                <textarea style="height:; width:280px; resize:none;">
                <?php echo $result; ?>
                </textarea>
            </td>
        </tr>

        <tr>
            <td></td>
        </tr>
        <tr>
            <td>
                <label>First Number :</label>
                <input type="text" name="first_input">
            </td>
        </tr>
        <tr>
            <td></td>
        </tr>
            <td>
                <label>Second Number :</label>
                <input type="text" name="second_input">
            </td>
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
            <td>

            </td>
        </tr>
    </table>
    <input type="submit" name="submit" value="+">
    <input type="submit" name="submit" value="-">
    <input type="submit" name="submit" value="/">
    <input type="submit" name="submit" value="*">
    <input type="submit" name="submit" value="%">
    <input type="reset" name="reset" value="Clear">
</form>


