<?php
$u = $_POST['uid'];
$p = $_POST['pass'];

// 仮のデータベースの代わりに、uid、uname、urole、upassを作成
$mockUsers = [
    ['uid' => 'k21rs005', 'uname' => '石橋潤時', 'urole' => 1, 'upass' => '1234'],
    ['uid' => 'k21rs034', 'uname' => '金政拓実', 'urole' => 1, 'upass' => '1234'],
    ['uid' => 'k23gjk03', 'uname' => '井手伊織', 'urole' => 1, 'upass' => '1234'],
    ['uid' => 'admin', 'uname' => '管理者', 'urole' => 2, 'upass' => '5678']
];

$authenticatedUser = null;

foreach ($mockUsers as $user) {
    if ($user['uid'] === $u && $user['upass'] === $p) {
        $authenticatedUser = $user;
        break;
    }
}

if ($authenticatedUser) { // ログイン成功
    $_SESSION['uid'] = $authenticatedUser['uid'];
    $_SESSION['uname'] = $authenticatedUser['uname'];
    $_SESSION['urole'] = $authenticatedUser['urole'];
    header('Location:index.php');
} else {
    header('Location:?do=usr_login');
}
?>
