<?php

unset($_SESSION['customer']);
unset($_SESSION['customerid']);
header('location: login.php');
