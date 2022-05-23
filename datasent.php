<?php
    include_once 'includes/header.php';

    require_once 'includes/dbh.inc.php';
    ?>

<div class = "tablesql">


    <?php

    $reference =  $_SESSION['reference'];

    $sql = "SELECT * FROM projectbuildingobjects WHERE modelReference = '$reference';";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    if ($resultCheck > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
    ?>
    <table tableborder ="1" cellspacing="0" cellpadding="10">
            <tr>
                <td> <?php echo $row['objectClass'] ?> </td>
                <td> <?php echo $row['typeName'] ?> </td>
                <td> <?php echo $row['declaredUnit'] ?> </td>
            </tr>

    <?php
        }
    }
    ?>
    </table>
</div>
<script>
    alert("Your model was successfully uploaded!")
</script>

HELLO
</body>

</html>
<?php
