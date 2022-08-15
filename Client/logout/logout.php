<?php

session_unset();
session_destroy();
header("Location: ../../log_in/log_in_page.php");