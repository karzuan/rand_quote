<div class="wrap">

	<div id="icon-options-general" class="icon32"></div>
	<h2>Случайные фразы</h2>

	<div id="poststuff">

		<div id="post-body" class="metabox-holder columns-2">

			<!-- main content -->
			<div id="post-body-content">

				<div class="meta-box-sortables ui-sortable">

					<div class="postbox">

						<h3><span>Заполните поля случайных фраз</span></h3>
						<div class="inside">

							<form method="POST" action="/wp-content/plugins/rand_quote/inc/process.php">

							<table class="form-table">
<?php

$list = '';

for( $i=1; $i<16; $i++){
global $wpdb;
$table_name = $wpdb->prefix . 'rndd_phss';
$phrase = $wpdb->get_var( 'SELECT phrase FROM ' . $table_name . ' WHERE id = ' . $i .'; ');
$author = $wpdb->get_var( 'SELECT author FROM ' . $table_name . ' WHERE id = ' . $i .'; ');
$list.= "

								<tr>
									<td>" . $i . "</td>
									<td>
									<label for='phrase'>фраза</label>
										<input name='phrase-" . $i . "' type='text' value='" .
										$phrase . "' class='regular-text' /><br>
										<label for='phrase'>автор</label>
										<input name='author-" . $i . "' type='text' value='" .
										$author . "' class='regular-text' />
									</td>
								</tr>";

					}
					echo $list;

?>

							</table>

							<p>
								<input class="button-primary" type="submit" name="" value="Save" />
							</p>

							</form>

						</div> <!-- .inside -->

					</div> <!-- .postbox -->

					Используйте шорткод: [RANDOMEPHRESE]


				</div> <!-- .meta-box-sortables .ui-sortable -->

			</div> <!-- post-body-content -->


		</div> <!-- #post-body .metabox-holder .columns-2 -->

		<br class="clear">
	</div> <!-- #poststuff -->

</div> <!-- .wrap -->