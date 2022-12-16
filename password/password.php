<?php
$users = [
    "rose.lefevre@XXXXXXXX.com:841bc2f1edcbd2fa8b4554a07b17f97ee010c0e2fe2671d6b65efefc5b204651",
    "lina.guerin@XXXXXXXX.com:8d03dbf96a0b0e211d02880bae2b296b55788b2edeafb6c06e3869a26153bb2f",
    "lea.guillot@XXXXXXXX.com:3dd25e8d012827b33892fd0c34cd9432c42beb91f7ea0830841e75af2deddeec",
    "john.barbier@XXXXXXXX.com:a69b7be1ecda47c5b069b069e615008541bca87c3611fbf24f44c12bd8a2beeb",
    "amelie.schneider@XXXXXXXX.com:6e250b334a452c5bfc4d02a2a360a9830a25ff3b2d70f4ed3b4efc16e425b385",
    "louis.renard@XXXXXXXX.com:d82d7cb74516917b76c09fd6bab48b622127ae75454d1daeaf4d6ec41d4c899a",
    "agathe.noel@XXXXXXXX.com:4eaf7b071ec6c91b9496368cb33675909db3274c5f1021993b59b8d6b44c69f0",
    "martine.bailly@XXXXXXXX.com:10647e93be010f6deb476a210d45008ffba3a1a0dd6db288694ce8e63d10b013",
];

$alphabet = ["a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z"];

foreach ($users as $user) {
    $name = explode('.', $user)[0];
    $lastName = explode('.', explode('@', $user)[0])[1];
    $password = explode(':', $user)[1];

    for ($index = 10; $index < 100; $index++) {
        foreach ($alphabet as $letter) {

            $buildedPassword = strtolower($name) . strtoupper(substr($lastName, 0, 3)) . "@" . $index . strtoupper($letter);

            if (hash('sha256', $buildedPassword) == $password) {

                echo "finded !";
                echo '<br/>';
                echo $buildedPassword;
                return;
            }
        }
    }
}

echo "result";

?>