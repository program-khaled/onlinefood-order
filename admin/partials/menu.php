<?php 

    include('../config/constants.php'); 
    include('login-check.php');

?>


<html>
    <head>
        <title>نظام المطعم الالكتروني</title>

        <link rel="stylesheet" href="../css/admin.css">
    </head>
    
    <body>
        <!-- Menu Section Starts -->
        <div class="menu text-center">
            <div class="wrapper">
                <ul>
                    <li><a href="index.php">لوحة التحكم</a></li>
                    <li><a href="manage-category.php">الفئات</a></li>
                    <li><a href="manage-food.php">الوجبات</a></li>
                    <li><a href="manage-order.php">قسم الطلبات</a></li>
                    <li><a href="manage-admin.php">ادارة المسؤولين</a></li>
                    <li><a href="logout.php">تسجيل خروج</a></li>
                </ul>
            </div>
        </div>
        <!-- Menu Section Ends -->