<?php
//require_once("../../../wp-config.php");
require_once("../../../../wp-load.php");

    // handle post data
/*
$sql = '';
    		//$charset_collate = $wpdb->get_charset_collate();
    		global $wpdb;
     		$table_name = $wpdb->prefix . 'rndd_phss';


            $sql = " UPDATE " . $table_name . " SET phrase = " . $_POST['phrase-1'] . ", author = " . $_POST['author-1'] . " WHERE id = 1 ; ";

            require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
    		dbDelta( $sql );
*/
global $wpdb;
$table_name = $wpdb->prefix .'rndd_phss';

$phrase1 = $_POST['phrase-1'];
$author1 = $_POST['author-1'];
$phrase2 = $_POST['phrase-2'];
$author2 = $_POST['author-2'];
$phrase3 = $_POST['phrase-3'];
$author3 = $_POST['author-3'];
$phrase4 = $_POST['phrase-4'];
$author4 = $_POST['author-4'];
$phrase5 = $_POST['phrase-5'];
$author5 = $_POST['author-5'];
$phrase6 = $_POST['phrase-6'];
$author6 = $_POST['author-6'];
$phrase7 = $_POST['phrase-7'];
$author7 = $_POST['author-7'];
$phrase8 = $_POST['phrase-8'];
$author8 = $_POST['author-8'];
$phrase9 = $_POST['phrase-9'];
$author9 = $_POST['author-9'];
$phrase10 = $_POST['phrase-10'];
$author10 = $_POST['author-10'];
$phrase11 = $_POST['phrase-11'];
$author11 = $_POST['author-11'];
$phrase12 = $_POST['phrase-12'];
$author12 = $_POST['author-12'];
$phrase13 = $_POST['phrase-13'];
$author13 = $_POST['author-13'];
$phrase14 = $_POST['phrase-14'];
$author14 = $_POST['author-14'];
$phrase15 = $_POST['phrase-15'];
$author15 = $_POST['author-15'];

//$sql = "UPDATE `kot_rndd_phss` SET `phrase`='there is no justice in the world',`author`='Lolir' WHERE `id`=9";
//$sql = "UPDATE kot_rndd_phss SET 'phrase'='Reference To Crap', 'author'='yakuza' WHERE 'id'=1";
/*
UPDATE `kot_rndd_phss` SET `phrase`='имя',`author`='любимое' WHERE `id`=3;
UPDATE `kot_rndd_phss` SET `phrase`='мое',`author`='твое именно' WHERE `id`=4
*/
$sql = "UPDATE `" . $table_name . "` SET `phrase`='" . $phrase1 . "', `author`='" . $author1 . "' WHERE `id`=1;";
$results = $wpdb->query( $sql );
$sql = "UPDATE `" . $table_name . "` SET `phrase`='" . $phrase2 . "', `author`='" . $author2 . "' WHERE `id`=2;";
$results = $wpdb->query( $sql );
$sql = "UPDATE `" . $table_name . "` SET `phrase`='" . $phrase3 . "', `author`='" . $author3 . "' WHERE `id`=3;";
$results = $wpdb->query( $sql );
$sql = "UPDATE `" . $table_name . "` SET `phrase`='" . $phrase4 . "', `author`='" . $author4 . "' WHERE `id`=4;";
$results = $wpdb->query( $sql );
$sql = "UPDATE `" . $table_name . "` SET `phrase`='" . $phrase5 . "', `author`='" . $author5 . "' WHERE `id`=5;";
$results = $wpdb->query( $sql );
$sql = "UPDATE `" . $table_name . "` SET `phrase`='" . $phrase6 . "', `author`='" . $author6 . "' WHERE `id`=6;";
$results = $wpdb->query( $sql );
$sql = "UPDATE `" . $table_name . "` SET `phrase`='" . $phrase7 . "', `author`='" . $author7 . "' WHERE `id`=7;";
$results = $wpdb->query( $sql );
$sql = "UPDATE `" . $table_name . "` SET `phrase`='" . $phrase8 . "', `author`='" . $author8 . "' WHERE `id`=8;";
$results = $wpdb->query( $sql );
$sql = "UPDATE `" . $table_name . "` SET `phrase`='" . $phrase9 . "', `author`='" . $author9 . "' WHERE `id`=9;";
$results = $wpdb->query( $sql );
$sql = "UPDATE `" . $table_name . "` SET `phrase`='" . $phrase10 . "', `author`='" . $author10 . "' WHERE `id`=10;";
$results = $wpdb->query( $sql );
$sql = "UPDATE `" . $table_name . "` SET `phrase`='" . $phrase11 . "', `author`='" . $author11 . "' WHERE `id`=11;";
$results = $wpdb->query( $sql );
$sql = "UPDATE `" . $table_name . "` SET `phrase`='" . $phrase12 . "', `author`='" . $author12 . "' WHERE `id`=12;";
$results = $wpdb->query( $sql );
$sql = "UPDATE `" . $table_name . "` SET `phrase`='" . $phrase13 . "', `author`='" . $author13 . "' WHERE `id`=13;";
$results = $wpdb->query( $sql );
$sql = "UPDATE `" . $table_name . "` SET `phrase`='" . $phrase14 . "', `author`='" . $author14 . "' WHERE `id`=14;";
$results = $wpdb->query( $sql );
$sql = "UPDATE `" . $table_name . "` SET `phrase`='" . $phrase15 . "', `author`='" . $author15 . "' WHERE `id`=15;";
$results = $wpdb->query( $sql );
//$sql.= " UPDATE `" . $table_name . "` SET `phrase`='" . $phrase4 . "', `author`='" . $author4 . "' WHERE `id`=4; ";
//$sql.= " UPDATE `" . $table_name . "` SET `phrase`='" . $phrase5 . "', `author`='" . $author5 . "' WHERE `id`=5; ";

print "Your information has been successfully added to the database." ;
header('Location: ' . '/wp-admin/');

?>