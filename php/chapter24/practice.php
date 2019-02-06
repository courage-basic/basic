<?php

// setcookie("name", "Tanaka");
// setcookie("name", "Tanaka", time()+3600); //  有効期限1時間
// setcookie("name", "Tanaka", time()-1); // Cookie削除

session_start();
$_SESSION["name"] = "Suzuki";

?>
