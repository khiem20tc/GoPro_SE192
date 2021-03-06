<!DOCTYPE html>
<html lang="en">
<?php
    include '../header.php';
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src='https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.2/MathJax.js?config=TeX-MML-AM_CHTML' async></script>
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <title>Create Exam</title>
    <style>
        <?php
        include 'css/style.css';
        ?>
    </style>
    <!--<script type="text/javascript" src="js/main.js"></script>-->
</head>
<body>
    <br>
    <form action="view/createExamForm.php" method="POST">
        <label for=name>Tên đề thi:</label><br>
        <input type="text" id="name" name="name"><br><br>

        <label for=subject>Môn học:</label><br>
        <select name="subject" id="subject">
            <option value="Toán">Toán</option>
            <option value="Hóa">Hóa học</option>
            <option value="Anh">Tiếng Anh</option>
            <option value="Lý">Vật lý</option>
            <option value="Sinh">Sinh học</option>
            <option value="Sử">Lịch sử</option>
            <option value="Địa">Địa lý</option>
            <option value="GDCD">GDCD</option>
        </select>
        <br><br>

        <label for=author>Tác giả:</label><br>
        <input type="text" id="author" name="author"><br><br>
        <?php 
        if(isset($_SESSION['signed_in'])) {
            if ($_SESSION['user_level'] == 1) {
                echo '
                <label for=typeEx>Loại đề thi:</label><br>
                <select name="typeEx" id="typeEx">
                <option value="ranked">Đề thi thử xếp hạng tuần</option>
                <option value="normal">Đề thi thử luyện tập</option>
                </select>
                <br><br>';
            }
        }
        ?>
        <input name="submit" type="submit" id="submit" value="Tiếp tục"/> <br> <br>
    </form>
    <?php
        include "../footer.php";
    ?>
</body>

</html>