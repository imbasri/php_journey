<?php
// start session
session_start();

// set session
$_SESSION["nama"] = "imbasri";

// check session
if (isset($_SESSION["nama"])) {
    echo $_SESSION["nama"];
} else {
    echo "session tidak ada";
}

// delete session with key
unset($_SESSION["nama"]);

// delete all session
session_destroy();
$_SESSION = [];
// check session
echo "<br>";
if (isset($_SESSION["nama"])) {
    echo $_SESSION["nama"];
} else {
    echo "session tidak ada";
}
