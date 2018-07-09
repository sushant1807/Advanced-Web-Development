<?php
/* Connect or disconnect a user.
 * The user interface is minimal.
 */
session_start();
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    do_get();
} else {
    do_post();
}

function do_get() {
    global $msg;
    ?>
    <form method="POST">
        <?php
        if (array_key_exists("user", $_SESSION)) {
            ?>
            <button type="submit" name="action" value="disconnect">Disconnect
                <?= $_SESSION["user"]["name"] ?></button>
            <?php
        } else {
            $login = (array_key_exists("login", $_POST)) ? $_POST['login'] : "";
            ?>
            Login: <input type="text" name="login" value="<?= $login ?>"/>
            Password: <input type = "password" name = "password"/>
            <button type="submit">Connect</button>
            <?= $msg ?>
            <?php
        }
        ?>
    </form>
    <?php
}

function do_post() {
    global $msg;
    require_once "PersonModel.php";
    if (array_key_exists("action", $_POST) && $_POST["action"] == "disconnect") {
        $_SESSION = array();
        session_destroy();
    } else {
        $login = $_POST["login"];
        $password = $_POST["password"];
        if (empty($login) || empty($password)) {
            $msg = "fields must be filled";
        } else {
            $user = PersonModel::getByLoginPassword($login, $password);
            if ($user != null) {
                $_SESSION["user"] = $user;
            } else {
                $msg = "Invalid password or user unknow";
            }
        }
    }
    do_get();
}
