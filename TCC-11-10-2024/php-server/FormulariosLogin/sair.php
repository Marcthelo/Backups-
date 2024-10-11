<?php
session_start();
unset($_SESSION['Tdocumento']);
unset($_SESSION['documento']);
unset($_SESSION['senha']);
header("Location: Login.html");