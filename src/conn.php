<?php

mysqli_report(MYSQLI_REPORT_ERROR);
$conn = new mysqli(DB_PASSWD, DB_USER, DB_PASSWD, DB_NAME);