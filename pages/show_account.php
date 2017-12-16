<?php include 'headerPage.php' ?>

<form action="index.php?page=accounts&action=update&id=<?php echo $_SESSION['userID']; ?> " method="post" id="form1">
<?php
print utility\htmlTable::generateTableForOneAccount($data);
?>
    <div class="col-lg-2"><button class="btn btn-primary" type="submit" form="form1" value="save">Update</button><a
    href="index.php?page=tasks&action=allOneUser&id=<?php echo $_SESSION["userID"] ?>">Cancel</a></div>
    </form>

    <script src="js/scripts.js"></script>
    </body>
    </html>
