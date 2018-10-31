<?php
session_start();

unset($_SESSION['user_id']);
unset($_SESSION['priv']);
echo "Signed Out";
?>