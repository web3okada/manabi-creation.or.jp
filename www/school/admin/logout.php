<?php
//-------------------------------------------------------------------
// 作成日：2020/04/27
// 作成者：鈴木
// 内  容：ログアウト
//-------------------------------------------------------------------

//----------------------------------------
//  設定ファイル
//----------------------------------------
require "./config.ini";


//----------------------------------------
//  データ一覧取得
//----------------------------------------
// 操作クラス
$objManage = new DB_manage( _DNS );
$objStaff  = new SC_staff( $objManage );

// データ取得
$objStaff->logout();

// クラス削除
unset( $objManage );
unset( $objStaff  );


//----------------------------------------
//  表示
//----------------------------------------
// ログイン画面へ
header( "Location: ./" );

?>
