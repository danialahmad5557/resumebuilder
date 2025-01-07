<?php
session_start();
session_destroy();

header('Location: /resumebuilder/login.php');