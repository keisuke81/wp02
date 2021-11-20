<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link https://ja.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define( 'DB_NAME', 'wp02db' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'root' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', 'root' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'localhost' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8mb4' );

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define( 'DB_COLLATE', '' );

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '@=pMnV#|`u`oe4c0wn=xL@jZ*RzY=Q.Z{OVUi3]g}JhDK1Hr7]mrio2(1~83BB}G' );
define( 'SECURE_AUTH_KEY',  ')M(R}Q@7?`e#8gj6He.H__=vP8:}AC3K%z|{2J_#k+?!PB)D&Tl]g|+Qy|PPruTp' );
define( 'LOGGED_IN_KEY',    'vt1[}CK6k#WCBA2:Mb!{)Qc<XGW+`PHBuioeBS]5![jPL@TRo kJ<bp5yTd>7vFN' );
define( 'NONCE_KEY',        'lp#vAZF0P5c|E~y.OIF _#JwJMO+OOqU#Jh^=7#p[t}FpJspTXZ``RI{>.PcNS?.' );
define( 'AUTH_SALT',        'L@gGIk?#4o:j5};bL8*R6C??n~SM~nr$[GAsv*95k)jghBV!5&,=$)wd3/tS}x[[' );
define( 'SECURE_AUTH_SALT', 'Txp@Pq{csi8}H0.WSj+mb h>aARjCxHz^Ff5sFuq5!;0[;qt</N*&?@}NQ _%nrW' );
define( 'LOGGED_IN_SALT',   'TBQ}!DrrT-$pKt5x9=g>ZGErG:hh}Y^tbtX4c]|tU@y}vacy41T/5^/+o)4z!4xr' );
define( 'NONCE_SALT',       ' Tk=z3UL&B|6Tw{-OHex4h~^X=|55/EkUT~7rB}ISr/dNEM-MrXtA6U|j_R-gv*%' );

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数についてはドキュメンテーションをご覧ください。
 *
 * @link https://ja.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* カスタム値は、この行と「編集が必要なのはここまでです」の行の間に追加してください。 */



/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
