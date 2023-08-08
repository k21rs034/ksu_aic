<!DOCTYPE html>
<html lang="ja"><head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>総合機器センター予約システム</title>
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.3/jquery.ui.touch-punch.min.js'></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="navbar navbar-inverse bg-primary">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">ナビゲーションの切替</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">HOME</a>
    </div>  <!-- /.navbar-header -->
    <div class="navbar-collapse collapse">
    <ul class="nav navbar-nav navbar-right">
<?php
if (isset($_SESSION['urole'])){
  $menu = array();
  if ($_SESSION['urole']==1){  //利用者
    $menu = array(   //申請者メニュー
      '機器設備一覧'  => 'eps_grade',
      '利用申請一覧'  => 'eps_submit'
    );
  }

  if($_SESSION['urole']==2) { //管理者
    $menu = array(   //管理者メニュー
      '利用者一覧'  => 'eps_list',
      '機器設備一覧'  => 'eps_noentry',
      '年間スケジュール'  => 'eps_summary',
      'お知らせ一覧' => '',
      '利用申請一覧' => '',
      '利用状況集計' => ''
    );
  }

  foreach($menu as $label=>$action){ 
    echo  '<li><a href="?do=' . $action . '">' . $label . '</a></li>' ;
  }

  echo  '<li><a href="?do=usr_logout">ログアウト</a></li>' ;

}else{
  echo  '<li><a href="?do=usr_login">ログイン</a></li>' ;
}
?>
    </ul>
    </div>
  </div>
</div>
<div class="container">