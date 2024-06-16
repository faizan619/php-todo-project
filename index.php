<!DOCTYPE html>
<html lang="en">
<head><?php require('./component/metaTag.php') ?>
    <link rel="stylesheet" href="./style/home.css">
    <title>Home : ToDo-App (Control the takes under your Fingertip)</title>
</head>
<body>
    <div class="bg-red-200 h-screen overflow-hidden selection:bg-[#ff725e] selection:text-white">
        <?php require('./component/navbar.php') ?>
        <?php require('./component/homeContent.php') ?>
    </div>
</body>

</html>