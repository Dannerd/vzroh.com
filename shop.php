<?php
    $page = array(
        "name" => "Shop",
        "maintenance" => true,
        "content" => false
    );
?>
<!DOCTYPE html>
<html>

<head>
    <?php include 'external_header.php'; ?>
</head>

<body>
    <div id="particles">
        <?php include 'left_panel.php'; ?>
        <?php include 'right_panel.php'; ?>
        <!--CONTENT START-->
        <div id="content">
            <a href="/" id="content-logo"></a>
        </div>
        <!--CONTENT END-->
        <include file="footer.html"></include>
    </div>
    <?php include 'external_footer.php'; ?>
</body>

</html>