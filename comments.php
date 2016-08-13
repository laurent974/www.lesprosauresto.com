<?php // Do not delete these lines
	if ('comments.php'== basename($_SERVER['SCRIPT_FILENAME'])) die ('Ne pas t&eacute;l&eacute;charger cette page directement, merci !');
	if (!empty($post->post_password)) { // if there's a password
		if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) { // and it doesn't match the cookie
?>

			<h2><?php _e('Prot&eacute;g&eacute; par mot de passe'); ?></h2>
			<p><?php _e('Entrer le mot de passe pour voir les commentaires'); ?></p>

	<?php return;
		}
	}

	/* This variable is for alternating comment background */

	$oddcomment = 'alt';

?>

<!-- You can start editing here. -->

<div class="Commentary">
<?php if ($comments) : ?>

	<ol class="Commentary-List">
	<?php foreach ($comments as $comment) : ?>

		<li class="Commentary-Item <?php echo $oddcomment; ?>" id="comment-<?php comment_ID() ?>">
			<?php comment_text() ?>
			<div class="Commentary-MetaList">
				<div class="Commentary-Meta Meta-Author">
					<i class="material-icons">&#xE7FD;</i> <strong><?php comment_author_link() ?></strong>,
				</div>

				<div class="Commentary-Meta Meta-Date">
					<i class="material-icons">&#xE24F;</i> <?php comment_date('j F, Y') ?> <?php _e('&agrave;');?> <?php comment_time() ?>
				</div>

				<div class="Commentary-Meta Meta-Modify">
					<?php edit_comment_link('<i class="material-icons">&#xE254;</i>','',''); ?>
				</div>
				<?php if ($comment->comment_approved == '0') : ?>
					<em><?php _e('Votre commentaire est en cours de mod&eacute;ration'); ?></em>
				<?php endif; ?>
			</div>
		</li>

	<?php /* Changes every other comment to a different class */
		if ('alt' == $oddcomment) $oddcomment = '';
		else $oddcomment = 'alt';
	?>

	<?php endforeach; /* end for each comment */ ?>
	</ol>

<?php else : // this is displayed if there are no comments so far ?>

<?php if ('open' == $post->comment_status) : ?>
	<!-- If comments are open, but there are no comments. -->
	<?php else : // comments are closed ?>

	<!-- If comments are closed. -->
<p class="nocomments">Les commentaires sont fermés !</p>

	<?php endif; ?>
<?php endif; ?>
</div>

<?php if ('open' == $post->comment_status) : ?>
		<div class="Commentary-Form">
			<h3 id="respond">Laissez un commentaire</h3>

			<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
			<p>Vous devez être <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php the_permalink(); ?>">connect&eacute;</a> pour laisser un commentaire.</p>

			<?php else : ?>

			<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
			<?php if ( $user_ID ) : ?>

			<p>Connecté en tant que <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href ="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="D&eacute;connect&eacute; de ce compte">D&eacute;connection &raquo;</a></p>

			<?php else : ?>

			<p><input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="40" tabindex="1" />
			<label for="author"><small>Nom <?php if ($req) echo "(requis)"; ?></small></label></p>

			<p><input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="40" tabindex="2" />
			<label for="email"><small>email (ne sera pas publi&eacute;) <?php if ($req) echo "(requis)"; ?></small></label></p>

			<p><input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="40" tabindex="3" />
			<label for="url"><small>Site Web</small></label></p>

			<?php endif; ?>

			<!--<p><small><strong>XHTML:</strong> <?php _e('Vous pouvez utiliser ces tags&#58;'); ?> <?php echo allowed_tags(); ?></small></p>-->

			<p><textarea name="comment" id="comment" cols="60" rows="10" tabindex="4"></textarea></p>

			<p><input name="submit" type="submit" id="submit" tabindex="5" value="Envoyer" />
			<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
			</p>

			<?php do_action('comment_form', $post->ID); ?>
		</div>
	</form>

<?php endif; // If registration required and not logged in ?>

<?php endif; // if you delete this the sky will fall on your head ?>
