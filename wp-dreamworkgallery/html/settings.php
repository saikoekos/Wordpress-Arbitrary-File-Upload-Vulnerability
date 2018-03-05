<?php
global $wpdb, $gdrm;
$ops = get_option('drm_settings', array());
//$ops = array_merge($drm_settings, $ops);
?>
<div class="wrap">
	<h2><?php _e('Create XML File'); ?></h2>
	<form action="" method="post">
		<input type="hidden" name="task" value="save_drm_settings" />
		<table>
		<tr>
			<td><?php _e('Slideshow Width (px)'); ?></td>
			<td><input type="text" name="settings[bannerWidth]"   value="<?php print @$ops['bannerWidth']; ?>" /></td>
		</tr>
		<tr>
			<td><?php _e('Slideshow Height (px)'); ?></td>
			<td><input type="text" name="settings[bannerHeight]"   value="<?php print @$ops['bannerHeight']; ?>" /></td>
		</tr>

        <tr>
            <td><?php _e('Apply banner height manually (for mobile)'); ?>
                <span style="font-size: 10px;color: #ccc;"><br/>Set banner height manually<br/>(yes=Recommended if different resolution images are shown,<br/> No=Automatically adjust gallery height and ignore below (4)heights)</span>
            </td>
            <td>
                <select name="settings[heightManual]">
                    <option value="no" <?php print (@$ops['heightManual'] == 'no') ? 'selected' : ''; ?>><?php _e('No'); ?></option>
                    <option value="yes" <?php print (@$ops['heightManual'] == 'yes') ? 'selected' : ''; ?>><?php _e('Yes'); ?></option>
                </select>
            </td>
        </tr>

        <tr>
			<td><?php _e('Height1 for width range[768-959](px)'); ?>
            <span style="font-size: 10px;color: #ccc;"><br/>Only tablet(portrait) and phone(landscape)</span>
            </td>
			<td><input type="text" name="settings[bannerHeight1]"   value="<?php print @$ops['bannerHeight1']; ?>" /></td>
		</tr>

        <tr>
			<td><?php _e('Height2 for width range[568-767](px)'); ?>
            <span style="font-size: 10px;color: #ccc;"><br/>Only tablet(landscape)</span>
            </td>
			<td><input type="text" name="settings[bannerHeight2]"   value="<?php print @$ops['bannerHeight2']; ?>" /></td>
		</tr>

        <tr>
			<td><?php _e('Height3 for width range[480-567](px)'); ?>
            <span style="font-size: 10px;color: #ccc;"><br/>Only phone(landscape)</span>
            </td>
			<td><input type="text" name="settings[bannerHeight3]"   value="<?php print @$ops['bannerHeight3']; ?>" /></td>
		</tr>

        <tr>
			<td><?php _e('Height4 for max-width[479](px)'); ?>
            <span style="font-size: 10px;color: #ccc;"><br/>Only phone(portrait)</span>
            </td>
			<td><input type="text" name="settings[bannerHeight4]"   value="<?php print @$ops['bannerHeight4']; ?>" /></td>
		</tr>

		<tr>
			<td><?php _e('Slideshow Background color'); ?></td>
			<td><input type="text" name="settings[base_color]" class="color {hash:true,caps:true}" value="<?php print @$ops['base_color']; ?>" /></td>
		</tr>
		<tr>
			<td><?php _e('Background Color Alpha'); ?></td>
			<td>
				<select name="settings[basecolor_alpha]">
					<option value="0" <?php print (@$ops['basecolor_alpha'] == '0') ? 'selected' : ''; ?>><?php _e('0'); ?></option>
					<option value="0.1" <?php print (@$ops['basecolor_alpha'] == '0.1') ? 'selected' : ''; ?>><?php _e('0.1'); ?></option>
					<option value="0.2" <?php print (@$ops['basecolor_alpha'] == '0.2') ? 'selected' : ''; ?>><?php _e('0.2'); ?></option>
					<option value="0.3" <?php print (@$ops['basecolor_alpha'] == '0.3') ? 'selected' : ''; ?>><?php _e('0.3'); ?></option>
					<option value="0.4" <?php print (@$ops['basecolor_alpha'] == '0.4') ? 'selected' : ''; ?>><?php _e('0.4'); ?></option>
					<option value="0.5" <?php print (@$ops['basecolor_alpha'] == '0.5') ? 'selected' : ''; ?>><?php _e('0.5'); ?></option>
					<option value="0.6" <?php print (@$ops['basecolor_alpha'] == '0.6') ? 'selected' : ''; ?>><?php _e('0.6'); ?></option>
					<option value="0.7" <?php print (@$ops['basecolor_alpha'] == '0.7') ? 'selected' : ''; ?>><?php _e('0.7'); ?></option>
					<option value="0.8" <?php print (@$ops['basecolor_alpha'] == '0.8') ? 'selected' : ''; ?>><?php _e('0.8'); ?></option>
					<option value="0.9" <?php print (@$ops['basecolor_alpha'] == '0.9') ? 'selected' : ''; ?>><?php _e('0.9'); ?></option>
					<option value="1" <?php print (@$ops['basecolor_alpha'] == '1') ? 'selected' : ''; ?>><?php _e('1'); ?></option>
				</select>
			</td>
		</tr>
		<tr>
			<td><?php _e('Image Allign In Fullscreen Mode'); ?></td>
			<td>
				<input type="radio" name="settings[imgalign_fullscreen]" value="top" <?php print (@$ops['imgalign_fullscreen'] == 'top') ? 'checked' : ''; ?>><span><?php _e('Top'); ?></span>
				<input type="radio" name="settings[imgalign_fullscreen]" value="center" <?php print (@$ops['imgalign_fullscreen'] == 'center') ? 'checked' : ''; ?>><span><?php _e('Center'); ?></span>
				<input type="radio" name="settings[imgalign_fullscreen]" value="bottom" <?php print (@$ops['imgalign_fullscreen'] == 'bottom') ? 'checked' : ''; ?>><span><?php _e('Bottom'); ?></span>
			</td>
		</tr>
		<tr>
			<td><?php _e('Slideshow Effect'); ?></td>
			<td>
				<select name="settings[effect_type]">
					<option value="1" <?php print (@$ops['effect_type'] == '1') ? 'selected' : ''; ?>><?php _e('Fades In'); ?></option>
					<option value="2" <?php print (@$ops['effect_type'] == '2') ? 'selected' : ''; ?>><?php _e('zooms out'); ?></option>
					<option value="3" <?php print (@$ops['effect_type'] == '3') ? 'selected' : ''; ?>><?php _e('Elastic Zoom In'); ?></option>
					<option value="4" <?php print (@$ops['effect_type'] == '4') ? 'selected' : ''; ?>><?php _e('Blur Zoom Out'); ?></option>
					<option value="5" <?php print (@$ops['effect_type'] == '5') ? 'selected' : ''; ?>><?php _e('Elastic Slide'); ?></option>
					<option value="6" <?php print (@$ops['effect_type'] == '6') ? 'selected' : ''; ?>><?php _e('Squares'); ?></option>
					<option value="7" <?php print (@$ops['effect_type'] == '7') ? 'selected' : ''; ?>><?php _e('Triple Squares'); ?></option>
					<option value="8" <?php print (@$ops['effect_type'] == '8') ? 'selected' : ''; ?>><?php _e('Horizontal Stripes'); ?></option>
					<option value="9" <?php print (@$ops['effect_type'] == '9') ? 'selected' : ''; ?>><?php _e('Vertical Stripes'); ?></option>
					<option value="10" <?php print (@$ops['effect_type'] == '10') ? 'selected' : ''; ?>><?php _e('Waves'); ?></option>
					<option value="11" <?php print (@$ops['effect_type'] == '11') ? 'selected' : ''; ?>><?php _e('Scales Bars'); ?></option>
					<option value="12" <?php print (@$ops['effect_type'] == '12') ? 'selected' : ''; ?>><?php _e('Bounce Slide'); ?></option>
					<option value="13" <?php print (@$ops['effect_type'] == '13') ? 'selected' : ''; ?>><?php _e('Iris'); ?></option>
					<option value="14" <?php print (@$ops['effect_type'] == '14') ? 'selected' : ''; ?>><?php _e('Alpha Mask'); ?></option>
					<option value="15" <?php print (@$ops['effect_type'] == '15') ? 'selected' : ''; ?>><?php _e('Intersected Bars'); ?></option>
				</select>
			</td>
		</tr>
		<tr>
			<td><?php _e('Image Transition Time'); ?></td>
			<td><input type="text" name="settings[effect_time]"   value="<?php print @$ops['effect_time']; ?>" /></td>
		</tr>
		<tr>
			<td><?php _e('Effect Closing Type'); ?></td>
			<td>
				<select name="settings[closing_type]">
					<option value="default" <?php print (@$ops['closing_type'] == 'default') ? 'selected' : ''; ?>><?php _e('default'); ?></option>
					<option value="fade" <?php print (@$ops['closing_type'] == 'fade') ? 'selected' : ''; ?>><?php _e('Fade'); ?></option>
				</select>
			</td>
		</tr>
		<tr>
			<td><?php _e('Description Position'); ?></td>
			<td>
				<input type="radio" name="settings[desc_position]" value="top" <?php print (@$ops['desc_position'] == 'top') ? 'checked' : ''; ?>><span><?php _e('Top'); ?></span>
				<input type="radio" name="settings[desc_position]" value="bottom" <?php print (@$ops['desc_position'] == 'bottom') ? 'checked' : ''; ?>><span><?php _e('Bottom'); ?></span>
			</td>
		</tr>
		<tr>
			<td><?php _e('Description Effect'); ?></td>
			<td>
				<select name="settings[desc_effect]">
					<option value="1" <?php print (@$ops['desc_effect'] == '1') ? 'selected' : ''; ?>><?php _e('No effect'); ?></option>
					<option value="2" <?php print (@$ops['desc_effect'] == '2') ? 'selected' : ''; ?>><?php _e('Linear Fade'); ?></option>
					<option value="3" <?php print (@$ops['desc_effect'] == '3') ? 'selected' : ''; ?>><?php _e('Linear Drop'); ?></option>
					<option value="4" <?php print (@$ops['desc_effect'] == '4') ? 'selected' : ''; ?>><?php _e('Linear Elastic Drop'); ?></option>
					<option value="5" <?php print (@$ops['desc_effect'] == '5') ? 'selected' : ''; ?>><?php _e('Linear Pop'); ?></option>
					<option value="6" <?php print (@$ops['desc_effect'] == '6') ? 'selected' : ''; ?>><?php _e('Linear Elastic Pop'); ?></option>
					<option value="7" <?php print (@$ops['desc_effect'] == '7') ? 'selected' : ''; ?>><?php _e('Random Elastic Drop'); ?></option>
				</select>
			</td>
		</tr>
		<tr>
			<td><?php _e('Description Base Color'); ?></td>
			<td><input type="text" name="settings[desc_basecolor]" class="color {hash:true,caps:true}" value="<?php print @$ops['desc_basecolor']; ?>" /></td>
		</tr>
		<tr>
			<td><?php _e('Description Basecolor Alpha'); ?></td>
			<td>
				<select name="settings[desc_alpha]">
					<option value="0" <?php print (@$ops['desc_alpha'] == '0') ? 'selected' : ''; ?>><?php _e('0'); ?></option>
					<option value="0.1" <?php print (@$ops['desc_alpha'] == '0.1') ? 'selected' : ''; ?>><?php _e('0.1'); ?></option>
					<option value="0.2" <?php print (@$ops['desc_alpha'] == '0.2') ? 'selected' : ''; ?>><?php _e('0.2'); ?></option>
					<option value="0.3" <?php print (@$ops['desc_alpha'] == '0.3') ? 'selected' : ''; ?>><?php _e('0.3'); ?></option>
					<option value="0.4" <?php print (@$ops['desc_alpha'] == '0.4') ? 'selected' : ''; ?>><?php _e('0.4'); ?></option>
					<option value="0.5" <?php print (@$ops['desc_alpha'] == '0.5') ? 'selected' : ''; ?>><?php _e('0.5'); ?></option>
					<option value="0.6" <?php print (@$ops['desc_alpha'] == '0.6') ? 'selected' : ''; ?>><?php _e('0.6'); ?></option>
					<option value="0.7" <?php print (@$ops['desc_alpha'] == '0.7') ? 'selected' : ''; ?>><?php _e('0.7'); ?></option>
					<option value="0.8" <?php print (@$ops['desc_alpha'] == '0.8') ? 'selected' : ''; ?>><?php _e('0.8'); ?></option>
					<option value="0.9" <?php print (@$ops['desc_alpha'] == '0.9') ? 'selected' : ''; ?>><?php _e('0.9'); ?></option>
					<option value="1" <?php print (@$ops['desc_alpha'] == '1') ? 'selected' : ''; ?>><?php _e('1'); ?></option>
				</select>
			</td>
		</tr>
		<tr>
			<td><?php _e('Description Size'); ?></td>
			<td><input type="text" name="settings[desctext_size]"   value="<?php print @$ops['desctext_size']; ?>" /></td>
		</tr>
		<tr>
			<td><?php _e('Description Color'); ?></td>
			<td><input type="text" name="settings[desctext_color]" class="color {hash:true,caps:true}" value="<?php print @$ops['desctext_color']; ?>" /></td>
		</tr>
		<tr>
			<td><?php _e('Description Color Alpha'); ?></td>
			<td>
				<select name="settings[desctext_alpha]">
					<option value="0" <?php print (@$ops['desctext_alpha'] == '0') ? 'selected' : ''; ?>><?php _e('0'); ?></option>
					<option value="0.1" <?php print (@$ops['desctext_alpha'] == '0.1') ? 'selected' : ''; ?>><?php _e('0.1'); ?></option>
					<option value="0.2" <?php print (@$ops['desctext_alpha'] == '0.2') ? 'selected' : ''; ?>><?php _e('0.2'); ?></option>
					<option value="0.3" <?php print (@$ops['desctext_alpha'] == '0.3') ? 'selected' : ''; ?>><?php _e('0.3'); ?></option>
					<option value="0.4" <?php print (@$ops['desctext_alpha'] == '0.4') ? 'selected' : ''; ?>><?php _e('0.4'); ?></option>
					<option value="0.5" <?php print (@$ops['desctext_alpha'] == '0.5') ? 'selected' : ''; ?>><?php _e('0.5'); ?></option>
					<option value="0.6" <?php print (@$ops['desctext_alpha'] == '0.6') ? 'selected' : ''; ?>><?php _e('0.6'); ?></option>
					<option value="0.7" <?php print (@$ops['desctext_alpha'] == '0.7') ? 'selected' : ''; ?>><?php _e('0.7'); ?></option>
					<option value="0.8" <?php print (@$ops['desctext_alpha'] == '0.8') ? 'selected' : ''; ?>><?php _e('0.8'); ?></option>
					<option value="0.9" <?php print (@$ops['desctext_alpha'] == '0.9') ? 'selected' : ''; ?>><?php _e('0.9'); ?></option>
					<option value="1" <?php print (@$ops['desctext_alpha'] == '1') ? 'selected' : ''; ?>><?php _e('1'); ?></option>
				</select>
			</td>
		</tr>
		<tr>
			<td><?php _e('Show Control Buttons'); ?></td>
			<td>
				<input type="radio" name="settings[show_control]" value="yes" <?php print (@$ops['show_control'] == 'yes') ? 'checked' : ''; ?>><span><?php _e('Yes'); ?></span>
				<input type="radio" name="settings[show_control]" value="no" <?php print (@$ops['show_control'] == 'no') ? 'checked' : ''; ?>><span><?php _e('No'); ?></span>
			</td>
		</tr>
		<tr>
			<td><?php _e('Control Buttons Position'); ?></td>
			<td>
				<input type="radio" name="settings[control_position]" value="top" <?php print (@$ops['control_position'] == 'top') ? 'checked' : ''; ?>><span><?php _e('Top'); ?></span>
				<input type="radio" name="settings[control_position]" value="bottom" <?php print (@$ops['control_position'] == 'bottom') ? 'checked' : ''; ?>><span><?php _e('Bottom'); ?></span>
			</td>
		</tr>
		<tr>
			<td><?php _e('Control Buttons Background Color'); ?></td>
			<td><input type="text" name="settings[control_basecolor]" class="color {hash:true,caps:true}" value="<?php print @$ops['control_basecolor']; ?>" /></td>
		</tr>
		<tr>
			<td><?php _e('Control Buttons Background Color Alpha'); ?></td>
			<td>
				<select name="settings[control_basecoloralpha]">
					<option value="0" <?php print (@$ops['control_basecoloralpha'] == '0') ? 'selected' : ''; ?>><?php _e('0'); ?></option>
					<option value="0.1" <?php print (@$ops['control_basecoloralpha'] == '0.1') ? 'selected' : ''; ?>><?php _e('0.1'); ?></option>
					<option value="0.2" <?php print (@$ops['control_basecoloralpha'] == '0.2') ? 'selected' : ''; ?>><?php _e('0.2'); ?></option>
					<option value="0.3" <?php print (@$ops['control_basecoloralpha'] == '0.3') ? 'selected' : ''; ?>><?php _e('0.3'); ?></option>
					<option value="0.4" <?php print (@$ops['control_basecoloralpha'] == '0.4') ? 'selected' : ''; ?>><?php _e('0.4'); ?></option>
					<option value="0.5" <?php print (@$ops['control_basecoloralpha'] == '0.5') ? 'selected' : ''; ?>><?php _e('0.5'); ?></option>
					<option value="0.6" <?php print (@$ops['control_basecoloralpha'] == '0.6') ? 'selected' : ''; ?>><?php _e('0.6'); ?></option>
					<option value="0.7" <?php print (@$ops['control_basecoloralpha'] == '0.7') ? 'selected' : ''; ?>><?php _e('0.7'); ?></option>
					<option value="0.8" <?php print (@$ops['control_basecoloralpha'] == '0.8') ? 'selected' : ''; ?>><?php _e('0.8'); ?></option>
					<option value="0.9" <?php print (@$ops['control_basecoloralpha'] == '0.9') ? 'selected' : ''; ?>><?php _e('0.9'); ?></option>
					<option value="1" <?php print (@$ops['control_basecoloralpha'] == '1') ? 'selected' : ''; ?>><?php _e('1'); ?></option>
				</select>
			</td>
		</tr>
		<tr>
			<td><?php _e('Show Price'); ?></td>
			<td>
				<input type="radio" name="settings[show_price]" value="yes" <?php print (@$ops['show_price'] == 'yes') ? 'checked' : ''; ?>><span><?php _e('Yes'); ?></span>
				<input type="radio" name="settings[show_price]" value="no" <?php print (@$ops['show_price'] == 'no') ? 'checked' : ''; ?>><span><?php _e('No'); ?></span>
			</td>
		</tr>
		<tr>
			<td><?php _e('Price Image'); ?></td>
			<td>
				<select name="settings[price_img]">
					<option value="flower_blue.png" <?php print (@$ops['price_img'] == 'flower_blue.png') ? 'selected' : ''; ?>><?php _e('Flower Blue'); ?></option>
					<option value="flower_green.png" <?php print (@$ops['price_img'] == 'flower_green.png') ? 'selected' : ''; ?>><?php _e('Flower Green'); ?></option>
					<option value="flower_mauve.png" <?php print (@$ops['price_img'] == 'flower_mauve.png') ? 'selected' : ''; ?>><?php _e('Flower Mauve'); ?></option>
					<option value="flower_red.png" <?php print (@$ops['price_img'] == 'flower_red.png') ? 'selected' : ''; ?>><?php _e('Flower Red'); ?></option>
					<option value="star_blue.png" <?php print (@$ops['price_img'] == 'star_blue.png') ? 'selected' : ''; ?>><?php _e('Star Blue'); ?></option>
					<option value="star_green.png" <?php print (@$ops['price_img'] == 'star_green.png') ? 'selected' : ''; ?>><?php _e('Star Green'); ?></option>
					<option value="star_fuchsia.png" <?php print (@$ops['price_img'] == 'star_fuchsia.png') ? 'selected' : ''; ?>><?php _e('Star Fuchsia'); ?></option>
					<option value="star_orange.png" <?php print (@$ops['price_img'] == 'star_orange.png') ? 'selected' : ''; ?>><?php _e('Star Orange'); ?></option>
					<option value="stiker_green.png" <?php print (@$ops['price_img'] == 'stiker_green.png') ? 'selected' : ''; ?>><?php _e('Stiker Green'); ?></option>
					<option value="stiker_mauve.png" <?php print (@$ops['price_img'] == 'stiker_mauve.png') ? 'selected' : ''; ?>><?php _e('Stiker Mauve'); ?></option>
					<option value="stiker_orange.png" <?php print (@$ops['price_img'] == 'stiker_orange.png') ? 'selected' : ''; ?>><?php _e('Stiker Orange'); ?></option>
					<option value="stiker_red.png" <?php print (@$ops['price_img'] == 'stiker_red.png') ? 'selected' : ''; ?>><?php _e('Stiker Red'); ?></option>		
				</select>
			</td>
		</tr>
		<tr>
			<td><?php _e('Price Image Width'); ?></td>
			<td><input type="text" name="settings[price_imgwidth]"   value="<?php print @$ops['price_imgwidth']; ?>" /></td>
		</tr>
		<tr>
			<td><?php _e('Price Image Height'); ?></td>
			<td><input type="text" name="settings[price_imgheight]"   value="<?php print @$ops['price_imgheight']; ?>" /></td>
		</tr>
		<tr>
			<td><?php _e('Price Tag Location'); ?></td>
			<td>
				<select name="settings[price_location]">
					<option value="TL" <?php print (@$ops['price_location'] == 'TL') ? 'selected' : ''; ?>><?php _e('Top Left'); ?></option>
					<option value="TR" <?php print (@$ops['price_location'] == 'TR') ? 'selected' : ''; ?>><?php _e('Top Right'); ?></option>
					<option value="BL" <?php print (@$ops['price_location'] == 'BL') ? 'selected' : ''; ?>><?php _e('Bottom Left'); ?></option>
					<option value="BR" <?php print (@$ops['price_location'] == 'BR') ? 'selected' : ''; ?>><?php _e('Bottom Right'); ?></option>
				</select>
			</td>
		</tr>
		<tr>
			<td><?php _e('Currency'); ?></td>
			<td><input type="text" name="settings[currency]"   value="<?php print @$ops['currency']; ?>" /></td>
		</tr>
		<tr>
			<td><?php _e('Price Text Size'); ?></td>
			<td><input type="text" name="settings[price_size]"   value="<?php print @$ops['price_size']; ?>" /></td>
		</tr>
		<tr>
			<td><?php _e('Price Text Color'); ?></td>
			<td><input type="text" name="settings[price_color]" class="color {hash:true,caps:true}" value="<?php print @$ops['price_color']; ?>" /></td>
		</tr>
		<tr>
			<td><?php _e('Price Color Aplha'); ?></td>
			<td>
				<select name="settings[price_color_alpha]">
					<option value="0" <?php print (@$ops['price_color_alpha'] == '0') ? 'selected' : ''; ?>><?php _e('0'); ?></option>
					<option value="0.1" <?php print (@$ops['price_color_alpha'] == '0.1') ? 'selected' : ''; ?>><?php _e('0.1'); ?></option>
					<option value="0.2" <?php print (@$ops['price_color_alpha'] == '0.2') ? 'selected' : ''; ?>><?php _e('0.2'); ?></option>
					<option value="0.3" <?php print (@$ops['price_color_alpha'] == '0.3') ? 'selected' : ''; ?>><?php _e('0.3'); ?></option>
					<option value="0.4" <?php print (@$ops['price_color_alpha'] == '0.4') ? 'selected' : ''; ?>><?php _e('0.4'); ?></option>
					<option value="0.5" <?php print (@$ops['price_color_alpha'] == '0.5') ? 'selected' : ''; ?>><?php _e('0.5'); ?></option>
					<option value="0.6" <?php print (@$ops['price_color_alpha'] == '0.6') ? 'selected' : ''; ?>><?php _e('0.6'); ?></option>
					<option value="0.7" <?php print (@$ops['price_color_alpha'] == '0.7') ? 'selected' : ''; ?>><?php _e('0.7'); ?></option>
					<option value="0.8" <?php print (@$ops['price_color_alpha'] == '0.8') ? 'selected' : ''; ?>><?php _e('0.8'); ?></option>
					<option value="0.9" <?php print (@$ops['price_color_alpha'] == '0.9') ? 'selected' : ''; ?>><?php _e('0.9'); ?></option>
					<option value="1" <?php print (@$ops['price_color_alpha'] == '1') ? 'selected' : ''; ?>><?php _e('1'); ?></option>
				</select>
			</td>
		</tr>
		<tr>
			<td><?php _e('Auto Play'); ?></td>
			<td>
				<input type="radio" name="settings[autoplay]" value="on" <?php print (@$ops['autoplay'] == 'on') ? 'checked' : ''; ?>><span><?php _e('Enable'); ?></span>
				<input type="radio" name="settings[autoplay]" value="off" <?php print (@$ops['autoplay'] == 'off') ? 'checked' : ''; ?>><span><?php _e('disable'); ?></span>
			</td>
		</tr>
		<tr>
			<td><?php _e('Autoplay Transition Time'); ?></td>
			<td><input type="text" name="settings[autoplay_display_time]"   value="<?php print @$ops['autoplay_display_time']; ?>" /></td>
		</tr>
		<tr>
			<td><?php _e('Thumb Navigation Arrow Color'); ?></td>
			<td><input type="text" name="settings[thumbnav_arrowcolor]" class="color {hash:true,caps:true}" value="<?php print @$ops['thumbnav_arrowcolor']; ?>" /></td>
		</tr>
		<tr>
			<td><?php _e('Thumb Navigation Arrow Color Alpha'); ?></td>
			<td>
				<select name="settings[thumbnav_arrow_alpha]">
					<option value="0" <?php print (@$ops['thumbnav_arrow_alpha'] == '0') ? 'selected' : ''; ?>><?php _e('0'); ?></option>
					<option value="0.1" <?php print (@$ops['thumbnav_arrow_alpha'] == '0.1') ? 'selected' : ''; ?>><?php _e('0.1'); ?></option>
					<option value="0.2" <?php print (@$ops['thumbnav_arrow_alpha'] == '0.2') ? 'selected' : ''; ?>><?php _e('0.2'); ?></option>
					<option value="0.3" <?php print (@$ops['thumbnav_arrow_alpha'] == '0.3') ? 'selected' : ''; ?>><?php _e('0.3'); ?></option>
					<option value="0.4" <?php print (@$ops['thumbnav_arrow_alpha'] == '0.4') ? 'selected' : ''; ?>><?php _e('0.4'); ?></option>
					<option value="0.5" <?php print (@$ops['thumbnav_arrow_alpha'] == '0.5') ? 'selected' : ''; ?>><?php _e('0.5'); ?></option>
					<option value="0.6" <?php print (@$ops['thumbnav_arrow_alpha'] == '0.6') ? 'selected' : ''; ?>><?php _e('0.6'); ?></option>
					<option value="0.7" <?php print (@$ops['thumbnav_arrow_alpha'] == '0.7') ? 'selected' : ''; ?>><?php _e('0.7'); ?></option>
					<option value="0.8" <?php print (@$ops['thumbnav_arrow_alpha'] == '0.8') ? 'selected' : ''; ?>><?php _e('0.8'); ?></option>
					<option value="0.9" <?php print (@$ops['thumbnav_arrow_alpha'] == '0.9') ? 'selected' : ''; ?>><?php _e('0.9'); ?></option>
					<option value="1" <?php print (@$ops['thumbnav_arrow_alpha'] == '1') ? 'selected' : ''; ?>><?php _e('1'); ?></option>
				</select>
			</td>
		</tr>
		<tr>
			<td><?php _e('Thumb Navigation Arrow Mouseover Color'); ?></td>
			<td><input type="text" name="settings[thumbnav_arrow_mouseovercolor]" class="color {hash:true,caps:true}" value="<?php print @$ops['thumbnav_arrow_mouseovercolor']; ?>" /></td>
		</tr>
		<tr>
			<td><?php _e('Thumb Navigation Arrow Mouseover Color Alpha'); ?></td>
			<td>
				<select name="settings[thumbnav_arrow_mouseovercolor_alpha]">
					<option value="0" <?php print (@$ops['thumbnav_arrow_mouseovercolor_alpha'] == '0') ? 'selected' : ''; ?>><?php _e('0'); ?></option>
					<option value="0.1" <?php print (@$ops['thumbnav_arrow_mouseovercolor_alpha'] == '0.1') ? 'selected' : ''; ?>><?php _e('0.1'); ?></option>
					<option value="0.2" <?php print (@$ops['thumbnav_arrow_mouseovercolor_alpha'] == '0.2') ? 'selected' : ''; ?>><?php _e('0.2'); ?></option>
					<option value="0.3" <?php print (@$ops['thumbnav_arrow_mouseovercolor_alpha'] == '0.3') ? 'selected' : ''; ?>><?php _e('0.3'); ?></option>
					<option value="0.4" <?php print (@$ops['thumbnav_arrow_mouseovercolor_alpha'] == '0.4') ? 'selected' : ''; ?>><?php _e('0.4'); ?></option>
					<option value="0.5" <?php print (@$ops['thumbnav_arrow_mouseovercolor_alpha'] == '0.5') ? 'selected' : ''; ?>><?php _e('0.5'); ?></option>
					<option value="0.6" <?php print (@$ops['thumbnav_arrow_mouseovercolor_alpha'] == '0.6') ? 'selected' : ''; ?>><?php _e('0.6'); ?></option>
					<option value="0.7" <?php print (@$ops['thumbnav_arrow_mouseovercolor_alpha'] == '0.7') ? 'selected' : ''; ?>><?php _e('0.7'); ?></option>
					<option value="0.8" <?php print (@$ops['thumbnav_arrow_mouseovercolor_alpha'] == '0.8') ? 'selected' : ''; ?>><?php _e('0.8'); ?></option>
					<option value="0.9" <?php print (@$ops['thumbnav_arrow_mouseovercolor_alpha'] == '0.9') ? 'selected' : ''; ?>><?php _e('0.9'); ?></option>
					<option value="1" <?php print (@$ops['thumbnav_arrow_mouseovercolor_alpha'] == '1') ? 'selected' : ''; ?>><?php _e('1'); ?></option>
				</select>
			</td>
		</tr>
		<tr>
			<td><?php _e('Thumb Navigation Arrow Onclick Color'); ?></td>
			<td><input type="text" name="settings[thumbnav_arrow_onclickcolor]" class="color {hash:true,caps:true}" value="<?php print @$ops['thumbnav_arrow_onclickcolor']; ?>" /></td>
		</tr>
		<tr>
			<td><?php _e('Thumb Navigation Arrow Onclick Color Alpha'); ?></td>
			<td>
				<select name="settings[thumbnav_arrow_Onclickcolor_alpha]">
					<option value="0" <?php print (@$ops['thumbnav_arrow_Onclickcolor_alpha'] == '0') ? 'selected' : ''; ?>><?php _e('0'); ?></option>
					<option value="0.1" <?php print (@$ops['thumbnav_arrow_Onclickcolor_alpha'] == '0.1') ? 'selected' : ''; ?>><?php _e('0.1'); ?></option>
					<option value="0.2" <?php print (@$ops['thumbnav_arrow_Onclickcolor_alpha'] == '0.2') ? 'selected' : ''; ?>><?php _e('0.2'); ?></option>
					<option value="0.3" <?php print (@$ops['thumbnav_arrow_Onclickcolor_alpha'] == '0.3') ? 'selected' : ''; ?>><?php _e('0.3'); ?></option>
					<option value="0.4" <?php print (@$ops['thumbnav_arrow_Onclickcolor_alpha'] == '0.4') ? 'selected' : ''; ?>><?php _e('0.4'); ?></option>
					<option value="0.5" <?php print (@$ops['thumbnav_arrow_Onclickcolor_alpha'] == '0.5') ? 'selected' : ''; ?>><?php _e('0.5'); ?></option>
					<option value="0.6" <?php print (@$ops['thumbnav_arrow_Onclickcolor_alpha'] == '0.6') ? 'selected' : ''; ?>><?php _e('0.6'); ?></option>
					<option value="0.7" <?php print (@$ops['thumbnav_arrow_Onclickcolor_alpha'] == '0.7') ? 'selected' : ''; ?>><?php _e('0.7'); ?></option>
					<option value="0.8" <?php print (@$ops['thumbnav_arrow_Onclickcolor_alpha'] == '0.8') ? 'selected' : ''; ?>><?php _e('0.8'); ?></option>
					<option value="0.9" <?php print (@$ops['thumbnav_arrow_Onclickcolor_alpha'] == '0.9') ? 'selected' : ''; ?>><?php _e('0.9'); ?></option>
					<option value="1" <?php print (@$ops['thumbnav_arrow_Onclickcolor_alpha'] == '1') ? 'selected' : ''; ?>><?php _e('1'); ?></option>
				</select>
			</td>
		</tr>
		<tr>
			<td><?php _e('Thumbpanel Position'); ?></td>
			<td>
				<input type="radio" name="settings[thumbpanel_position]" value="top" <?php print (@$ops['thumbpanel_position'] == 'top') ? 'checked' : ''; ?>><span><?php _e('Top'); ?></span>
				<input type="radio" name="settings[thumbpanel_position]" value="bottom" <?php print (@$ops['thumbpanel_position'] == 'bottom') ? 'checked' : ''; ?>><span><?php _e('Bottom'); ?></span>
			</td>
		</tr>
		<tr>
			<td><?php _e('Thumbpanel Height'); ?></td>
			<td><input type="text" name="settings[thumbpanel_height]"   value="<?php print @$ops['thumbpanel_height']; ?>" /></td>
		</tr>
		<tr>
			<td><?php _e('Thumbpanel Base Color'); ?></td>
			<td><input type="text" name="settings[thumbpanel_base_color]" class="color {hash:true,caps:true}" value="<?php print @$ops['thumbpanel_base_color']; ?>" /></td>
		</tr>
		<tr>
			<td><?php _e('Thumbpanel Base Color Alpha'); ?></td>
			<td>
				<select name="settings[thumbpanel_base_alpha]">
					<option value="0" <?php print (@$ops['thumbpanel_base_alpha'] == '0') ? 'selected' : ''; ?>><?php _e('0'); ?></option>
					<option value="0.1" <?php print (@$ops['thumbpanel_base_alpha'] == '0.1') ? 'selected' : ''; ?>><?php _e('0.1'); ?></option>
					<option value="0.2" <?php print (@$ops['thumbpanel_base_alpha'] == '0.2') ? 'selected' : ''; ?>><?php _e('0.2'); ?></option>
					<option value="0.3" <?php print (@$ops['thumbpanel_base_alpha'] == '0.3') ? 'selected' : ''; ?>><?php _e('0.3'); ?></option>
					<option value="0.4" <?php print (@$ops['thumbpanel_base_alpha'] == '0.4') ? 'selected' : ''; ?>><?php _e('0.4'); ?></option>
					<option value="0.5" <?php print (@$ops['thumbpanel_base_alpha'] == '0.5') ? 'selected' : ''; ?>><?php _e('0.5'); ?></option>
					<option value="0.6" <?php print (@$ops['thumbpanel_base_alpha'] == '0.6') ? 'selected' : ''; ?>><?php _e('0.6'); ?></option>
					<option value="0.7" <?php print (@$ops['thumbpanel_base_alpha'] == '0.7') ? 'selected' : ''; ?>><?php _e('0.7'); ?></option>
					<option value="0.8" <?php print (@$ops['thumbpanel_base_alpha'] == '0.8') ? 'selected' : ''; ?>><?php _e('0.8'); ?></option>
					<option value="0.9" <?php print (@$ops['thumbpanel_base_alpha'] == '0.9') ? 'selected' : ''; ?>><?php _e('0.9'); ?></option>
					<option value="1" <?php print (@$ops['thumbpanel_base_alpha'] == '1') ? 'selected' : ''; ?>><?php _e('1'); ?></option>
				</select>
			</td>
		</tr>
		<tr>
			<td><?php _e('Thumb Image Width'); ?></td>
			<td><input type="text" name="settings[thumb_width]"   value="<?php print @$ops['thumb_width']; ?>" /></td>
		</tr>
		<tr>
			<td><?php _e('Thumb Imgage Height'); ?></td>
			<td><input type="text" name="settings[thumb_height]"   value="<?php print @$ops['thumb_height']; ?>" /></td>
		</tr>
		<tr>
			<td><?php _e('Thumb Image Basecolor'); ?></td>
			<td><input type="text" name="settings[thumb_baseup_color]" class="color {hash:true,caps:true}" value="<?php print @$ops['thumb_baseup_color']; ?>" /></td>
		</tr>
		<tr>
			<td><?php _e('Thumb Image Active Color'); ?></td>
			<td><input type="text" name="settings[thumb_mouseover_color]" class="color {hash:true,caps:true}" value="<?php print @$ops['thumb_mouseover_color']; ?>" /></td>
		</tr>
		<tr>
			<td><?php _e('Tooltip Bgcolor'); ?></td>
			<td><input type="text" name="settings[tooltip_base_color]" class="color {hash:true,caps:true}" value="<?php print @$ops['tooltip_base_color']; ?>" /></td>
		</tr>
		<tr>
			<td><?php _e('Tooltip Bgcolor Alpha'); ?></td>
			<td>
				<select name="settings[tooltip_base_alpha]">
					<option value="0" <?php print (@$ops['tooltip_base_alpha'] == '0') ? 'selected' : ''; ?>><?php _e('0'); ?></option>
					<option value="0.1" <?php print (@$ops['tooltip_base_alpha'] == '0.1') ? 'selected' : ''; ?>><?php _e('0.1'); ?></option>
					<option value="0.2" <?php print (@$ops['tooltip_base_alpha'] == '0.2') ? 'selected' : ''; ?>><?php _e('0.2'); ?></option>
					<option value="0.3" <?php print (@$ops['tooltip_base_alpha'] == '0.3') ? 'selected' : ''; ?>><?php _e('0.3'); ?></option>
					<option value="0.4" <?php print (@$ops['tooltip_base_alpha'] == '0.4') ? 'selected' : ''; ?>><?php _e('0.4'); ?></option>
					<option value="0.5" <?php print (@$ops['tooltip_base_alpha'] == '0.5') ? 'selected' : ''; ?>><?php _e('0.5'); ?></option>
					<option value="0.6" <?php print (@$ops['tooltip_base_alpha'] == '0.6') ? 'selected' : ''; ?>><?php _e('0.6'); ?></option>
					<option value="0.7" <?php print (@$ops['tooltip_base_alpha'] == '0.7') ? 'selected' : ''; ?>><?php _e('0.7'); ?></option>
					<option value="0.8" <?php print (@$ops['tooltip_base_alpha'] == '0.8') ? 'selected' : ''; ?>><?php _e('0.8'); ?></option>
					<option value="0.9" <?php print (@$ops['tooltip_base_alpha'] == '0.9') ? 'selected' : ''; ?>><?php _e('0.9'); ?></option>
					<option value="1" <?php print (@$ops['tooltip_base_alpha'] == '1') ? 'selected' : ''; ?>><?php _e('1'); ?></option>
				</select>
			</td>
		</tr>
		<tr>
			<td><?php _e('Tooltip Color'); ?></td>
			<td><input type="text" name="settings[tooltip_label_color]" class="color {hash:true,caps:true}" value="<?php print @$ops['tooltip_label_color']; ?>" /></td>
		</tr>
		<tr>
			<td><?php _e('Tooltip Color Alpha'); ?></td>
			<td>
				<select name="settings[tooltip_label_alpha]">
					<option value="0" <?php print (@$ops['tooltip_label_alpha'] == '0') ? 'selected' : ''; ?>><?php _e('0'); ?></option>
					<option value="0.1" <?php print (@$ops['tooltip_label_alpha'] == '0.1') ? 'selected' : ''; ?>><?php _e('0.1'); ?></option>
					<option value="0.2" <?php print (@$ops['tooltip_label_alpha'] == '0.2') ? 'selected' : ''; ?>><?php _e('0.2'); ?></option>
					<option value="0.3" <?php print (@$ops['tooltip_label_alpha'] == '0.3') ? 'selected' : ''; ?>><?php _e('0.3'); ?></option>
					<option value="0.4" <?php print (@$ops['tooltip_label_alpha'] == '0.4') ? 'selected' : ''; ?>><?php _e('0.4'); ?></option>
					<option value="0.5" <?php print (@$ops['tooltip_label_alpha'] == '0.5') ? 'selected' : ''; ?>><?php _e('0.5'); ?></option>
					<option value="0.6" <?php print (@$ops['tooltip_label_alpha'] == '0.6') ? 'selected' : ''; ?>><?php _e('0.6'); ?></option>
					<option value="0.7" <?php print (@$ops['tooltip_label_alpha'] == '0.7') ? 'selected' : ''; ?>><?php _e('0.7'); ?></option>
					<option value="0.8" <?php print (@$ops['tooltip_label_alpha'] == '0.8') ? 'selected' : ''; ?>><?php _e('0.8'); ?></option>
					<option value="0.9" <?php print (@$ops['tooltip_label_alpha'] == '0.9') ? 'selected' : ''; ?>><?php _e('0.9'); ?></option>
					<option value="1" <?php print (@$ops['tooltip_label_alpha'] == '1') ? 'selected' : ''; ?>><?php _e('1'); ?></option>
				</select>
			</td>
		</tr>
		<tr>
			<td><?php _e('Zoom'); ?></td>
			<td>
				<input type="radio" name="settings[item_zoom]" value="enabled" <?php print (@$ops['item_zoom'] == 'enabled') ? 'checked' : ''; ?>><span><?php _e('Enabled'); ?></span>
				<input type="radio" name="settings[item_zoom]" value="disabled" <?php print (@$ops['item_zoom'] == 'disabled') ? 'checked' : ''; ?>><span><?php _e('Disabled'); ?></span>
			</td>
		</tr>
		<tr>
			<td><?php _e('Big Image Scaling'); ?></td>
			<td>
				<input type="radio" name="settings[mainImg_scale]" value="yes" <?php print (@$ops['mainImg_scale'] == 'yes') ? 'checked' : ''; ?>><span><?php _e('Yes'); ?></span>
				<input type="radio" name="settings[mainImg_scale]" value="no" <?php print (@$ops['mainImg_scale'] == 'no') ? 'checked' : ''; ?>><span><?php _e('No'); ?></span>
			</td>
		</tr>
		<tr>
			<td><?php _e('Thumb Image Scaling'); ?></td>
			<td>
				<input type="radio" name="settings[thumbImg_scale]" value="yes" <?php print (@$ops['thumbImg_scale'] == 'yes') ? 'checked' : ''; ?>><span><?php _e('Yes'); ?></span>
				<input type="radio" name="settings[thumbImg_scale]" value="no" <?php print (@$ops['thumbImg_scale'] == 'no') ? 'checked' : ''; ?>><span><?php _e('No'); ?></span>
			</td>
		</tr>  
		<tr>
			<td><?php _e('Thumb Images Tooltip'); ?></td>
			<td>
				<input type="radio" name="settings[show_tooltip]" value="on" <?php print (@$ops['show_tooltip'] == 'on') ? 'checked' : ''; ?>><span><?php _e('Show'); ?></span>
				<input type="radio" name="settings[show_tooltip]" value="off" <?php print (@$ops['show_tooltip'] == 'off') ? 'checked' : ''; ?>><span><?php _e('Hide'); ?></span>
			</td>
		</tr>
		<tr>
			<td><?php _e('Description'); ?></td>
			<td>
				<input type="radio" name="settings[show_desc]" value="on" <?php print (@$ops['show_desc'] == 'on') ? 'checked' : ''; ?>><span><?php _e('Show'); ?></span>
				<input type="radio" name="settings[show_desc]" value="off" <?php print (@$ops['show_desc'] == 'off') ? 'checked' : ''; ?>><span><?php _e('Hide'); ?></span>
			</td>
		</tr>
		<tr>
			<td><?php _e('Category Id'); ?></td>
			<td><input type="text" name="settings[category_id]"   value="<?php print @$ops['category_id']; ?>" /></td>
		</tr>
		<tr>
			<td><?php _e('Category List Height'); ?></td>
			<td><input type="text" name="settings[catlist_height]"   value="<?php print @$ops['catlist_height']; ?>" /></td>
		</tr>
		<tr>
			<td><?php _e('Category List Bgcolor'); ?></td>
			<td><input type="text" name="settings[catlist_bgcolor]" class="color {hash:false,caps:true}" value="<?php print @$ops['catlist_bgcolor']; ?>" /></td>
		</tr>
		<tr>
			<td><?php _e('Category list item width'); ?></td>
			<td><input type="text" name="settings[catlist_itemwidth]"   value="<?php print @$ops['catlist_itemwidth']; ?>" /></td>
		</tr>
		<tr>
			<td><?php _e('Category list item height'); ?></td>
			<td><input type="text" name="settings[catlist_itemheight]"   value="<?php print @$ops['catlist_itemheight']; ?>" /></td>
		</tr>
		<tr>
			<td><?php _e('Category list thumb border width'); ?></td>
			<td><input type="text" name="settings[catlist_thmbbordersize]"   value="<?php print @$ops['catlist_thmbbordersize']; ?>" /></td>
		</tr>
		<tr>
			<td><?php _e('Category list thumb border color'); ?></td>
			<td><input type="text" name="settings[catlist_thmbbordercolor]" class="color {hash:false,caps:true}" value="<?php print @$ops['catlist_thmbbordercolor']; ?>" /></td>
		</tr>
		<tr>
			<td><?php _e('Category Title Color'); ?></td>
			<td><input type="text" name="settings[catlist_titlecolor]" class="color {hash:false,caps:true}" value="<?php print @$ops['catlist_titlecolor']; ?>" /></td>
		</tr>
		<tr>
			<td><?php _e('Category Title Size'); ?></td>
			<td><input type="text" name="settings[catlist_titlesize]"   value="<?php print @$ops['catlist_titlesize']; ?>" /></td>
		</tr>
		<tr>
			<td><?php _e('Category Description Color'); ?></td>
			<td><input type="text" name="settings[catlist_desccolor]" class="color {hash:false,caps:true}" value="<?php print @$ops['catlist_desccolor']; ?>" /></td>
		</tr>
		<tr>
			<td><?php _e('Category Description Size'); ?></td>
			<td><input type="text" name="settings[catlist_descsize]"   value="<?php print @$ops['catlist_descsize']; ?>" /></td>
		</tr>
		<tr>
			<td><?php _e('Category List Scoller Bgcolor'); ?></td>
			<td><input type="text" name="settings[catlist_scollerbgcolor]" class="color {hash:false,caps:true}" value="<?php print @$ops['catlist_scollerbgcolor']; ?>" /></td>
		</tr>
		<tr>
			<td><?php _e('Category List Scoller Arrow color'); ?></td>
			<td><input type="text" name="settings[catlist_scollerarrowcolor]" class="color {hash:false,caps:true}" value="<?php print @$ops['catlist_scollerarrowcolor']; ?>" /></td>
		</tr>	
		<tr>
			<td><?php _e('Close Button Bgcolor'); ?></td>
			<td><input type="text" name="settings[close_bgcolor]" class="color {hash:false,caps:true}" value="<?php print @$ops['close_bgcolor']; ?>" /></td>
		</tr>
		<tr>
			<td><?php _e('Close Button Color'); ?></td>
			<td><input type="text" name="settings[close_iconcolor]" class="color {hash:false,caps:true}" value="<?php print @$ops['close_iconcolor']; ?>" /></td>
		</tr>
		<tr>
			<td><?php _e('Close Button Bgover color'); ?></td>
			<td><input type="text" name="settings[close_bgcolorover]" class="color {hash:false,caps:true}" value="<?php print @$ops['close_bgcolorover']; ?>" /></td>
		</tr>
		<tr>
			<td><?php _e('Close button Over color'); ?></td>
			<td><input type="text" name="settings[close_overcolor]" class="color {hash:false,caps:true}" value="<?php print @$ops['close_overcolor']; ?>" /></td>
		</tr>
		<tr>
			<td><?php _e('Link Target'); ?></td>
			<td>
				<select name="settings[target]">
					<option value="new" <?php print (@$ops['target'] == 'new') ? 'selected' : ''; ?>><?php _e('New Window'); ?></option>
					<option value="current" <?php print (@$ops['target'] == 'current') ? 'selected' : ''; ?>><?php _e('Same Window'); ?></option>		
				</select>
			</td>
		</tr>
		<tr>
			<td><?php _e('wmode'); ?></td>
			<td>
				<select name="settings[wmode]">
					<option value="opaque" <?php print (@$ops['wmode'] == 'opaque') ? 'selected' : ''; ?>><?php _e('opaque'); ?></option>
					<option value="transparent" <?php print (@$ops['wmode'] == 'transparent') ? 'selected' : ''; ?>><?php _e('transparent'); ?></option>
					<option value="window" <?php print (@$ops['wmode'] == 'window') ? 'selected' : ''; ?>><?php _e('window'); ?></option>
				</select>
			</td>
		</tr>
		</table>
	<p><button type="submit" class="button-primary"><?php _e('Save Config'); ?></button></p>
	</form>
</div>