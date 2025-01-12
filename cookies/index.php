<?php
setcookie("user_id", "aovoasdees12", time() + 3600, "/");

if (isset($_COOKIE["user_id"])) {
    echo $_COOKIE["user_id"];
} else {
    echo "cookie user_id tidak ada";
}
// delete cookies
setcookie("user_id", "", time() - 3600, "/");
