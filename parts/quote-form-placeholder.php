<?php
/**
 * Visual placeholder for the enquiry form.
 *
 * The working form — nonce, honeypot, validation, EXIF-stripped photo upload,
 * storage and email — is owned by harbour-core (PLUGIN-SPEC Module 1) and will
 * replace this via harbour_render_enquiry_form() in Phase 4. This markup exists
 * so the home page reads correctly in the meantime; it does not submit.
 *
 * @package HarbourTreeCare
 */

defined( 'ABSPATH' ) || exit;
?>
<form class="form-card" method="post" action="#" novalidate aria-describedby="quote-form-note">
	<div class="field-row">
		<div class="field">
			<label for="name"><?php esc_html_e( 'Your name', 'harbour-tree-care' ); ?></label>
			<input id="name" name="name" type="text" autocomplete="name" required>
		</div>
		<div class="field">
			<label for="phone"><?php esc_html_e( 'Phone', 'harbour-tree-care' ); ?></label>
			<input id="phone" name="phone" type="tel" autocomplete="tel" required>
		</div>
	</div>
	<div class="field-row">
		<div class="field">
			<label for="email"><?php esc_html_e( 'Email', 'harbour-tree-care' ); ?></label>
			<input id="email" name="email" type="email" autocomplete="email" required>
		</div>
		<div class="field">
			<label for="postcode"><?php esc_html_e( 'Postcode', 'harbour-tree-care' ); ?> <span class="hint"><?php esc_html_e( 'so we know the travel', 'harbour-tree-care' ); ?></span></label>
			<input id="postcode" name="postcode" type="text" autocomplete="postal-code" required>
		</div>
	</div>
	<div class="field">
		<label for="service"><?php esc_html_e( 'What do you need?', 'harbour-tree-care' ); ?></label>
		<select id="service" name="service" required>
			<option value=""><?php esc_html_e( 'Choose one…', 'harbour-tree-care' ); ?></option>
			<option><?php esc_html_e( 'Pruning / crown reduction', 'harbour-tree-care' ); ?></option>
			<option><?php esc_html_e( 'Felling / tree removal', 'harbour-tree-care' ); ?></option>
			<option><?php esc_html_e( 'Stump grinding', 'harbour-tree-care' ); ?></option>
			<option><?php esc_html_e( 'Site clearance', 'harbour-tree-care' ); ?></option>
			<option><?php esc_html_e( 'Survey or report', 'harbour-tree-care' ); ?></option>
			<option><?php esc_html_e( 'Firewood', 'harbour-tree-care' ); ?></option>
			<option><?php esc_html_e( 'Storm damage — urgent', 'harbour-tree-care' ); ?></option>
			<option><?php esc_html_e( 'Not sure — please advise', 'harbour-tree-care' ); ?></option>
		</select>
	</div>
	<div class="field">
		<label for="msg"><?php esc_html_e( 'Anything else we should know?', 'harbour-tree-care' ); ?></label>
		<textarea id="msg" name="message" placeholder="<?php esc_attr_e( 'Roughly how big, how close to the house, is there side access…', 'harbour-tree-care' ); ?>"></textarea>
	</div>
	<div class="field">
		<label for="photos"><?php esc_html_e( 'Photos', 'harbour-tree-care' ); ?> <span class="hint"><?php esc_html_e( 'optional, but they speed things up', 'harbour-tree-care' ); ?></span></label>
		<div class="dropzone"><b><?php esc_html_e( 'Add photos', 'harbour-tree-care' ); ?></b> — <?php esc_html_e( 'drag them here or tap to browse', 'harbour-tree-care' ); ?><input id="photos" name="photos" type="file" accept="image/*" multiple hidden></div>
	</div>
	<label class="consent" style="margin-bottom:var(--s-5)">
		<input type="checkbox" required>
		<span><?php esc_html_e( "I'm happy for Harbour Tree Care to contact me about this enquiry. We don't share details with anyone else.", 'harbour-tree-care' ); ?></span>
	</label>
	<button class="btn btn-primary btn-lg" type="submit" style="width:100%"><?php esc_html_e( 'Send my enquiry', 'harbour-tree-care' ); ?></button>
	<p id="quote-form-note" class="small muted center" style="margin:var(--s-4) 0 0"><?php esc_html_e( 'We usually reply the same working day.', 'harbour-tree-care' ); ?></p>
</form>
