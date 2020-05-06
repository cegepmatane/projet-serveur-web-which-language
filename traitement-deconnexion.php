<?php

require "configuration.php";
session_destroy();
header("Location: index.php");

?>