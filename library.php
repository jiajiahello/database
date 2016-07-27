<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>

  </head>
  <body>
    <?php

  // TODO 存入数据库
  define('DB_HOST','localhost');
  define('DB_USER','root');
  define('DB_PWD','xujiajia');//密码
  define('DB_NAME','library');//在phpmyadmi链接一个的数据库


  //连接数据库
  $connect = mysqli_connect(DB_HOST,DB_USER,DB_PWD,DB_NAME);
  if(!$connect){
    die('数据库连接失败，错误信息：'.mysqli_connect_error());
  }
  $sql ="insert into user(userorder,username,userdescrption,loginpassword,rolename,nameoforganization,whethertoenable,lastlandingtime,landingfrequency,createdate,updatepersonnel,updatetime)
  values('29','bxe','hif','21212','sfd','fg','s',now(),'62',now(),'syd',now()
);";
  $result = $connect->query($sql);
  echo "$sql";

  ?>



  </body>
</html>
