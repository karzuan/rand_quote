<?php

/*
 *	Plugin Name: RandQuote
 *	Plugin URI:
 *	Description: 15 randome phrases from admin panel
 *	Version: 1.0
 *	Author: Konstantin Kuts
 *	Author URI: zxcvbn.ru
 *	License: open
 *
*/

/*
 *	Assign global variables
 *
*/

$plugin_url = WP_PLUGIN_URL . '/rand_quote';

/*
 *	Add a link to our plugin in the admin menu
 *	under 'Settings > Treehouse Badges'
 *
*/

function kk_rand_phrase_menu() {

	/*
	 * 	Use the add_options_page function
	 * 	add_options_page( $page_title, $menu_title, $capability, $menu-slug, $function ) 
	 *
	*/

	add_options_page(
		'Плагин случайных фраз',
		'Случайные фразы',
		'manage_options',
		'kk_rand_phrase',
		'kk_rand_phrase_options_page'
	);

}
add_action( 'admin_menu', 'kk_rand_phrase_menu' );


function kk_rand_phrase_options_page() {

	if( !current_user_can( 'manage_options' ) ) {

		wp_die( 'You do not have suggicient permissions to access this page.' );

	}

	global $plugin_url;

	require( 'inc/options-page-wrapper.php' );


}


//******************* SHORTCODE *************************/
function kk_rand_phrase_short () {

    $result[0]==NULL;
    $result[1]==NULL;

    
        do{
    $rand = rand(0, 14);
    switch ($rand) {
    case 0:
        global $wpdb;
        $table_name = $wpdb->prefix . 'rndd_phss';
        $phrase = $wpdb->get_var( 'SELECT phrase FROM ' . $table_name . ' WHERE id = 1;');
        $author = $wpdb->get_var( 'SELECT author FROM ' . $table_name . ' WHERE id = 1;');
        $result = array ( 0=>$phrase, 1=>$author);
        break;
    case 1:
        global $wpdb;
        $table_name = $wpdb->prefix . 'rndd_phss';
        $phrase = $wpdb->get_var( 'SELECT phrase FROM ' . $table_name . ' WHERE id = 2;');
        $author = $wpdb->get_var( 'SELECT author FROM ' . $table_name . ' WHERE id = 2;');
        $result = array ( 0=>$phrase, 1=>$author);
        break;
    case 2:
        global $wpdb;
        $table_name = $wpdb->prefix . 'rndd_phss';
        $phrase = $wpdb->get_var( 'SELECT phrase FROM ' . $table_name . ' WHERE id = 3;');
        $author = $wpdb->get_var( 'SELECT author FROM ' . $table_name . ' WHERE id = 3;');
        $result = array ( 0=>$phrase, 1=>$author);
        break;
    case 3:
        global $wpdb;
        $table_name = $wpdb->prefix . 'rndd_phss';
        $phrase = $wpdb->get_var( 'SELECT phrase FROM ' . $table_name . ' WHERE id = 4;');
        $author = $wpdb->get_var( 'SELECT author FROM ' . $table_name . ' WHERE id = 4;');
        $result = array ( 0=>$phrase, 1=>$author);
        break;
    case 4:
        global $wpdb;
        $table_name = $wpdb->prefix . 'rndd_phss';
        $phrase = $wpdb->get_var( 'SELECT phrase FROM ' . $table_name . ' WHERE id = 5;');
        $author = $wpdb->get_var( 'SELECT author FROM ' . $table_name . ' WHERE id = 5;');
        $result = array ( 0=>$phrase, 1=>$author);
        break;
    case 5:
        global $wpdb;
        $table_name = $wpdb->prefix . 'rndd_phss';
        $phrase = $wpdb->get_var( 'SELECT phrase FROM ' . $table_name . ' WHERE id =7;');
        $author = $wpdb->get_var( 'SELECT author FROM ' . $table_name . ' WHERE id =7;');
        $result = array ( 0=>$phrase, 1=>$author);
        break;
    case 6:
        global $wpdb;
        $table_name = $wpdb->prefix . 'rndd_phss';
        $phrase = $wpdb->get_var( 'SELECT phrase FROM ' . $table_name . ' WHERE id = 7;');
        $author = $wpdb->get_var( 'SELECT author FROM ' . $table_name . ' WHERE id = 7;');
        $result = array ( 0=>$phrase, 1=>$author);
        break;
    case 7:
        global $wpdb;
        $table_name = $wpdb->prefix . 'rndd_phss';
        $phrase = $wpdb->get_var( 'SELECT phrase FROM ' . $table_name . ' WHERE id = 8;');
        $author = $wpdb->get_var( 'SELECT author FROM ' . $table_name . ' WHERE id = 8;');
        $result = array ( 0=>$phrase, 1=>$author);
        break;
    case 8:
        global $wpdb;
        $table_name = $wpdb->prefix . 'rndd_phss';
        $phrase = $wpdb->get_var( 'SELECT phrase FROM ' . $table_name . ' WHERE id = 9;');
        $author = $wpdb->get_var( 'SELECT author FROM ' . $table_name . ' WHERE id = 9;');
        $result = array ( 0=>$phrase, 1=>$author);
        break;
    case 9:
        global $wpdb;
        $table_name = $wpdb->prefix . 'rndd_phss';
        $phrase = $wpdb->get_var( 'SELECT phrase FROM ' . $table_name . ' WHERE id = 10;');
        $author = $wpdb->get_var( 'SELECT author FROM ' . $table_name . ' WHERE id = 10;');
        $result = array ( 0=>$phrase, 1=>$author);
        break;
    case 10:
        global $wpdb;
        $table_name = $wpdb->prefix . 'rndd_phss';
        $phrase = $wpdb->get_var( 'SELECT phrase FROM ' . $table_name . ' WHERE id = 11;');
        $author = $wpdb->get_var( 'SELECT author FROM ' . $table_name . ' WHERE id = 11;');
        $result = array ( 0=>$phrase, 1=>$author);
        break;
    case 11:
        global $wpdb;
        $table_name = $wpdb->prefix . 'rndd_phss';
        $phrase = $wpdb->get_var( 'SELECT phrase FROM ' . $table_name . ' WHERE id = 12;');
        $author = $wpdb->get_var( 'SELECT author FROM ' . $table_name . ' WHERE id = 12;');
        $result = array ( 0=>$phrase, 1=>$author);
        break;
    case 12:
        global $wpdb;
        $table_name = $wpdb->prefix . 'rndd_phss';
        $phrase = $wpdb->get_var( 'SELECT phrase FROM ' . $table_name . ' WHERE id = 13;');
        $author = $wpdb->get_var( 'SELECT author FROM ' . $table_name . ' WHERE id = 13;');
        $result = array ( 0=>$phrase, 1=>$author);
        break;
    case 13:
        global $wpdb;
        $table_name = $wpdb->prefix . 'rndd_phss';
        $phrase = $wpdb->get_var( 'SELECT phrase FROM ' . $table_name . ' WHERE id = 14;');
        $author = $wpdb->get_var( 'SELECT author FROM ' . $table_name . ' WHERE id = 14;');
        $result = array ( 0=>$phrase, 1=>$author);
        break;
    case 14:
        global $wpdb;
        $table_name = $wpdb->prefix . 'rndd_phss';
        $phrase = $wpdb->get_var( 'SELECT phrase FROM ' . $table_name . ' WHERE id = 15;');
        $author = $wpdb->get_var( 'SELECT author FROM ' . $table_name . ' WHERE id = 15;');
        $result = array ( 0=>$phrase, 1=>$author);
        break;
}
}   while ($result[0]==NULL && $result[1]==NULL);

    return '<blockquote>
<p><strong><<</strong> ' . $result[0] . ' <strong>>></strong></p>
<footer>
— <cite>' . $result[1] . '</cite>
</footer>
</blockquote>';
}
add_shortcode ('RANDOMEPHRESE', 'kk_rand_phrase_short');
/***********************************************************************
 ***********************************************************************
 ************************[RANDOMEPHRESE]*****************************
 ***********************************************************************
 **********************************************************************/

add_filter('widget_text', 'do_shortcode'); // this line add possibility to use shortcode in widgets

//$table_name = $wpdb->prefix . 'rndd_phss';

//// activation of plugin
function kk_rand_phrase_install ()   {


    global $wpdb;
    //global $table_name;
    $table_name = $wpdb->prefix . 'rndd_phss';

    $charset_collate = $wpdb->get_charset_collate();

    $sql = "CREATE TABLE " . $table_name . " (
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        phrase varchar(400),
        author varchar(400),
        UNIQUE KEY id (id)
    ) $charset_collate;
           
        ";

        $sql.= " INSERT INTO " . $table_name . "(`id`, `phrase`, `author`) VALUES (1, 'Поспешишь - людей насмешишь', 'Народная мудрость'); ";
        $sql.= " INSERT INTO " . $table_name . "(`id`, `phrase`, `author`) VALUES (2, 'Я заню - что ничего не знаю', 'Сократ (3 век до н.э.)'); ";

        for($i=3; $i<16; $i++){

            $sql.= " INSERT INTO " . $table_name . "(`id`, `phrase`, `author`) VALUES (" . $i . ", NULL, NULL); ";

                              }


       /*
                               INSERT INTO " . $table_name . " (`id`, `phrase`, `author`) VALUES (1, '', '');

            INSERT INTO " . $table_name . " (`id`, `phrase`, `author`) VALUES (2, '', '');

            INSERT INTO " . $table_name . " (`id`, `phrase`, `author`) VALUES (3, '', '');

            INSERT INTO " . $table_name . " (`id`, `phrase`, `author`) VALUES (4, '', '');

            INSERT INTO " . $table_name . " (`id`, `phrase`, `author`) VALUES (5, '', '')
        */


    require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
    dbDelta( $sql );

    //INSERT INTO `kot_rndd_phss`(`id`, `number`, `phrase`) VALUES ([value-1],[value-2],[value-3])

    }

register_activation_hook ( __FILE__, 'kk_rand_phrase_install' );

//****


/************ deactivation ************/

function kk_rand_phrase_deactivation () {


    global $wpdb;
     $table_name = $wpdb->prefix . 'rndd_phss';
     $sql = "DROP TABLE IF EXISTS $table_name;";
     $wpdb->query($sql);
     //delete_option("my_plugin_db_version");

    }

register_deactivation_hook( __FILE__, 'kk_rand_phrase_deactivation()' ); // deactivation of plugin
/************* end deact ***********************





?>