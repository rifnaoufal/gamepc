<div class="wrapper">
    <ul class="nav-area">
        <li><a href=index.php?page=homepage>home</a> </li>
        <li><a href=index.php?page=registreer>register</a> </li>


        <?php
        if (in_array("username", $_SESSION)) {
            echo "<li><a href=index.php?page=pcbuild>pcbuild</a> </li>";
            echo "<li><a href=index.php?page=cart>cart</a> </li>";
            echo "<li><a href=index.php?page=logout>logout</a> </li>";

        } else {
            echo "<li><a href=index.php?page=login>login</a> </li>";
        }

        if (isset($_SESSION['ingelogd'])) {
            echo '<li><a href="index.php?page=adminwelkom">admin</a></li>';
        }

        elseif (isset($_SESSION['ingelogd1'])) {
        }
        ?>
    </ul>
</div>
