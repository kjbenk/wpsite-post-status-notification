<div class="wrap">

	<div class="wpsite_plugin_wrapper">

	<div class="wpsite_plugin_header">
				<!-- ** UPDATE THE UTM LINK BELOW ** -->
				<div class="announcement">
					<h2><?php _e('Check out the all new', self::$text_domain); ?> <strong><?php _e('WPsite.net', self::$text_domain); ?></strong> <?php _e('for more WordPress resources, plugins, and news.', self::$text_domain); ?></h2>
					<a  class="show-me" href="http://www.wpsite.net/?utm_source=follow-us-badges-plugin&amp;utm_medium=announce&amp;utm_campaign=top"><?php _e('Click Here', self::$text_domain); ?></a>
				</div>

				<header class="headercontent">
					<!-- ** UPDATE THE NAME ** -->
					<h1 class="logo"><?php _e('Post Status Notifications', self::$text_domain); ?></h1>
					<span class="slogan"><?php _e('by', self::$text_domain); ?> <a href="http://www.wpsite.com/?utm_source=topadmin&amp;utm_medium=announce&amp;utm_campaign=top"><?php _e('WPsite.net', self::$text_domain); ?></a></span>

					<!-- ** UPDATE THE 2 LINKS ** -->
					<div class="top-call-to-actions">
						<a class="tweet-about-plugin" href="https://twitter.com/intent/tweet?text=Neat%20and%20simple%20plugin%20for%20WordPress%20users.%20Check%20out%20the%20Post%20Status%20Notifications%20plugin%20by%20@WPsite%20-%20&amp;url=http%3A%2F%2Fwpsite.net%2Fplugins%2F&amp;via=wpsite"><span></span><?php _e('Tweet About WPsite', self::$text_domain); ?></a>
						<a class="leave-a-review" href="http://wordpress.org/support/plugin/wpsite-post-status-notifications" target="_blank"><span></span> <?php _e('Leave A Review', self::$text_domain); ?></a>
					</div><!-- end .top-call-to-actions -->
				</header>
		</div> <!-- /wpsite_plugin_header -->

		<div id="wpsite_plugin_content">

			<div id="wpsite_plugin_settings">

				<form method="post">

					<div id="tabs">
							<ul>
								<li><a href="#wpsite_div_general"><span class="wpsite_admin_panel_content_tabs"><?php _e('General', self::$text_domain); ?></span></a></li>
								<li><a href="#wpsite_div_email"><span class="wpsite_admin_panel_content_tabs"><?php _e('Email',self::$text_domain); ?></span></a></li>
							</ul>

							<div id="wpsite_div_general">

								<h3><?php _e('Post Types', self::$text_domain); ?></h3>

								<table>
									<tbody>

										<!-- Include these post types -->

										<tr>
											<th class="wpsite_admin_table_th">
												<label><?php _e('Include these post types', self::$text_domain); ?></label>
												<td class="wpsite_admin_table_td">

													<?php foreach ($post_types as $post_type) { ?>
														<input type="checkbox" id="wpsite_post_status_notifications_settings_post_types_<?php echo $post_type; ?>" name="wpsite_post_status_notifications_settings_post_types_<?php echo $post_type; ?>" <?php echo (isset($settings['post_types']) && in_array($post_type, $settings['post_types']) ? 'checked="checked"' : '');?>/><label><?php printf(__('&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;%s', self::$text_domain), $post_type); ?></label><br />
													<?php } ?>

												</td>
											</th>
										</tr>

									</tbody>
								</table>

								<h3><?php _e('Share Links', self::$text_domain); ?></h3>

								<table>
									<tbody>

										<!-- Twitter -->

										<tr>
											<th class="wpsite_admin_table_th">
												<label><?php _e('Twitter', self::$text_domain); ?></label>
												<td class="wpsite_admin_table_td">
													<input id="wpsite_post_status_notifications_settings_message_share_links_twitter" name="wpsite_post_status_notifications_settings_message_share_links_twitter" type="checkbox" value="users" <?php echo isset($settings['message']['share_links']['twitter']) && $settings['message']['share_links']['twitter'] ? 'checked="checked"' : ''; ?>>
												</td>
											</th>
										</tr>

										<!-- Facebook -->

										<tr>
											<th class="wpsite_admin_table_th">
												<label><?php _e('Facebook', self::$text_domain); ?></label>
												<td class="wpsite_admin_table_td">
													<input id="wpsite_post_status_notifications_settings_message_share_links_facebook" name="wpsite_post_status_notifications_settings_message_share_links_facebook" type="checkbox" value="users" <?php echo isset($settings['message']['share_links']['facebook']) && $settings['message']['share_links']['facebook'] ? 'checked="checked"' : ''; ?>>
												</td>
											</th>
										</tr>

										<!-- Google -->

										<tr>
											<th class="wpsite_admin_table_th">
												<label><?php _e('Google', self::$text_domain); ?></label>
												<td class="wpsite_admin_table_td">
													<input id="wpsite_post_status_notifications_settings_message_share_links_google" name="wpsite_post_status_notifications_settings_message_share_links_google" type="checkbox" value="users" <?php echo isset($settings['message']['share_links']['google']) && $settings['message']['share_links']['google'] ? 'checked="checked"' : ''; ?>>
												</td>
											</th>
										</tr>

										<!-- LinkedIn -->

										<tr>
											<th class="wpsite_admin_table_th">
												<label><?php _e('LinkedIn', self::$text_domain); ?></label>
												<td class="wpsite_admin_table_td">
													<input id="wpsite_post_status_notifications_settings_message_share_links_linkedin" name="wpsite_post_status_notifications_settings_message_share_links_linkedin" type="checkbox" value="users" <?php echo isset($settings['message']['share_links']['linkedin']) && $settings['message']['share_links']['linkedin'] ? 'checked="checked"' : ''; ?>>
												</td>
											</th>
										</tr>

									</tbody>
								</table>

								<h3><?php _e('When a post is published notify: ', self::$text_domain); ?></h3>

								<table>
									<tbody>

										<!-- Notify Contributor only -->

										<tr>
											<th class="wpsite_admin_table_th">
												<label><?php _e('Contributor only', self::$text_domain); ?></label><br/>
												<td class="wpsite_admin_table_td">
													<input name="wpsite_post_status_notifications_settings_notify_users" type="radio" value="author" <?php echo isset($settings['notify']) && $settings['notify'] == 'author' ? 'checked' : ''; ?>>
												</td>
											</th>
										</tr>

										<!-- Notify all Users-->

										<tr>
											<th class="wpsite_admin_table_th">
												<label><?php _e('All Users', self::$text_domain); ?></label>
												<td class="wpsite_admin_table_td">
													<input name="wpsite_post_status_notifications_settings_notify_users" type="radio" value="users" <?php echo isset($settings['notify']) && $settings['notify'] == 'users' ? 'checked' : ''; ?>>
												</td>
											</th>
										</tr>

										<!-- Notify Admins only -->

										<tr>
											<th class="wpsite_admin_table_th">
												<label><?php _e('Admins only', self::$text_domain); ?></label>
												<td class="wpsite_admin_table_td">
													<input name="wpsite_post_status_notifications_settings_notify_users" type="radio" value="admins" <?php echo isset($settings['notify']) && $settings['notify'] == 'admins' ? 'checked' : ''; ?>>
												</td>
											</th>
										</tr>

									</tbody>
								</table>

							</div>


							<div id="wpsite_div_email">

								<h3><?php _e('Headers', self::$text_domain); ?></h3>

								<em><label><?php _e('Leave blank for defaults.', self::$text_domain); ?></label></em>

								<table>
									<tbody>

										<!-- From -->

										<tr>
											<th class="wpsite_admin_table_th">
												<label><?php _e('From', self::$text_domain); ?></label><br/>
												<td class="wpsite_admin_table_td">
													<input id="wpsite_post_status_notifications_settings_message_from_email" name="wpsite_post_status_notifications_settings_message_from_email" type="text" size="50" value="<?php echo esc_attr($settings['message']['from_email']); ?>"><br/>
													<em><label><?php _e('email (e.g. example@gmail.com or example@gmail.com, example1@gmail.com)', self::$text_domain); ?></label></em><br/>
													<em><label><?php _e('default (wordpress@yoursite.com)', self::$text_domain); ?></label></em>
												</td>
											</th>
										</tr>

										<!-- Cc -->

										<tr>
											<th class="wpsite_admin_table_th">
												<label><?php _e('Cc', self::$text_domain); ?></label><br/>
												<td class="wpsite_admin_table_td">
													<input id="wpsite_post_status_notifications_settings_message_cc_email" name="wpsite_post_status_notifications_settings_message_cc_email" type="text" size="50" value="<?php echo esc_attr($settings['message']['cc_email']); ?>"><br/>
													<em><label><?php _e('email (e.g. example@gmail.com or example@gmail.com, example1@gmail.com)', self::$text_domain); ?></label></em><br/>
													<em><label><?php _e('default (none)', self::$text_domain); ?></label></em>
												</td>
											</th>
										</tr>

										<!-- Bcc -->

										<tr>
											<th class="wpsite_admin_table_th">
												<label><?php _e('Bcc', self::$text_domain); ?></label><br/>
												<td class="wpsite_admin_table_td">
													<input id="wpsite_post_status_notifications_settings_message_bcc_email" name="wpsite_post_status_notifications_settings_message_bcc_email" type="text" size="50" value="<?php echo esc_attr($settings['message']['bcc_email']); ?>"><br/>
													<em><label><?php _e('email (e.g. example@gmail.com or example@gmail.com, example1@gmail.com)', self::$text_domain); ?></label></em><br/>
													<em><label><?php _e('default (none)', self::$text_domain); ?></label></em>
												</td>
											</th>
										</tr>

									</tbody>
								</table>

								<h3><?php _e('Content and Subjects', self::$text_domain); ?></h3>

								<em><label><?php _e('Leave blank for defaults.', self::$text_domain); ?></label></em>

								<table>
									<tbody>

										<!-- Email when post is published -->

										<tr>
											<th class="wpsite_admin_table_th">
												<label><?php _e('Email when post is published', self::$text_domain); ?></label><br/>
												<td class="wpsite_admin_table_td">
													<label><?php _e('Subject', self::$text_domain); ?></label><br/>
													<input id="wpsite_post_status_notifications_settings_message_subject_published" name="wpsite_post_status_notifications_settings_message_subject_published" type="text" size="50" value="<?php echo esc_attr($settings['message']['subject_published']); ?>"/><br/>

													<label><?php _e('Content', self::$text_domain); ?></label><br/>
													<textarea rows="10" cols="50" id="wpsite_post_status_notifications_settings_message_content_published" name="wpsite_post_status_notifications_settings_message_content_published"><?php echo esc_attr($settings['message']['content_published']); ?></textarea>
												</td>
											</th>
										</tr>


										<!-- Email sent to contributor when their post is published -->

										<tr>
											<th class="wpsite_admin_table_th">
												<label><?php _e('Email sent to contributor when their post is published', self::$text_domain); ?></label><br/>
												<td class="wpsite_admin_table_td">
													<label><?php _e('Subject', self::$text_domain); ?></label><br/>
													<input id="wpsite_post_status_notifications_settings_message_subject_published_contributor" name="wpsite_post_status_notifications_settings_message_subject_published_contributor" type="text" size="50" value="<?php echo esc_attr($settings['message']['subject_published_contributor']); ?>"/><br/>

													<label><?php _e('Content', self::$text_domain); ?></label><br/>
													<textarea rows="10" cols="50" id="wpsite_post_status_notifications_settings_message_content_published_contributor" name="wpsite_post_status_notifications_settings_message_content_published_contributor"><?php echo esc_attr($settings['message']['content_published_contributor']); ?></textarea>
												</td>
											</th>
										</tr>


										<!-- Email sent to admin when contributor submits post for review -->

										<tr>
											<th class="wpsite_admin_table_th">
												<label><?php _e('Email sent to admin when contributor submits post for review', self::$text_domain); ?></label><br/>
												<td class="wpsite_admin_table_td">
													<label><?php _e('Subject', self::$text_domain); ?></label><br/>
													<input id="wpsite_post_status_notifications_settings_message_subject_pending" name="wpsite_post_status_notifications_settings_message_subject_pending" type="text" size="50" value="<?php echo esc_attr($settings['message']['subject_pending']); ?>"/><br/>

													<label><?php _e('Content', self::$text_domain); ?></label><br/>
													<textarea rows="10" cols="50" id="wpsite_post_status_notifications_settings_message_content_pending" name="wpsite_post_status_notifications_settings_message_content_pending"><?php echo esc_attr($settings['message']['content_pending']); ?></textarea>
												</td>
											</th>
										</tr>

									</tbody>
								</table>

								<em><label><?php _e('*Please note that this does not affect the Share Links.', self::$text_domain); ?></label></em>

							</div>
						</div>

						<?php wp_nonce_field('wpsite_post_status_notifications_admin_settings'); ?>

						<?php submit_button(); ?>

					</form>

			</div> <!-- wpsite_plugin_settings -->

			<div id="wpsite_plugin_sidebar">
				<div class="wpsite_feed">
					<h3><?php _e('Must-Read Articles', self::$text_domain); ?></h3>
					<script src="http://feeds.feedburner.com/wpsite?format=sigpro" type="text/javascript" ></script><noscript><p><?php _e('Subscribe to WPsite Feed:', self::$text_domain); ?> <a href="http://feeds.feedburner.com/wpsite"></a><br/><?php _e('Powered by FeedBurner', self::$text_domain); ?></p> </noscript>
				</div>

				<div class="mktg-banner">
					<a target="_blank" href="http://www.wpsite.net/custom-wordpress-development/#utm_source=plugin-config&utm_medium=banner&utm_campaign=custom-development-banner"><img src="<?php echo WPSITE_LIMIT_POSTS_PLUGIN_URL . '/img/ad-custom-development.png' ?>"></a>
				</div>

				<div class="mktg-banner">
					<a target="_blank" href="http://www.wpsite.net/services/#utm_source=plugin-config&utm_medium=banner&utm_campaign=plugin-request-banner"><img src="<?php echo WPSITE_LIMIT_POSTS_PLUGIN_URL . '/img/ad-plugin-request.png' ?>"></a>
				</div>

				<div class="mktg-banner">
					<a target="_blank" href="http://www.wpsite.net/themes/#utm_source=plugin-config&utm_medium=banner&utm_campaign=themes-banner"><img src="<?php echo WPSITE_LIMIT_POSTS_PLUGIN_URL . '/img/ad-themes.png' ?>"></a>
				</div>

<!--
				<div class="mktg-banner">
					<a target="_blank" href="http://www.wpsite.net/services/#utm_source=plugin-config&utm_medium=banner&utm_campaign=need-support-banner"><img src="<?php echo WPSITE_LIMIT_POSTS_PLUGIN_URL . '/img/ad-need-support.png' ?>"></a>
				</div>
-->

			</div> <!-- wpsite_plugin_sidebar -->

		</div> <!-- /wpsite_plugin_content -->

	</div> 	<!-- /wpsite_plugin_wrapper -->

</div> 	<!-- /wrap -->

<script type="text/javascript">
jQuery(document).ready(function($) {
	$( "#tabs" ).tabs();
});
</script>