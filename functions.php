<?php
//このテーマでサポートする機能の設定
//投稿のアイキャッチ画像のサポート
add_theme_support('post-thumbnails');


$custom_header_args = array(
	// ヘッダー画像の横幅
	'width' => 960,
	// ヘッダー画像の縦幅
  'height' => 500,
  // ヘッダー画像をランダムにローテーションするかどうか(trueもしくはfalse)
	'random-default' => true,
);
add_theme_support( 'custom-header', $custom_header_args );







?>
