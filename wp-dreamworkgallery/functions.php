<?php
function drm_get_def_settings()
{
	$drm_settings = array('bannerWidth' => '710',
			'bannerHeight' => '630',
			'base_color' => '#cccccc',
			'basecolor_alpha' => '1',
			'imgalign_fullscreen' => 'center',
			'effect_type' => '1',
			'effect_time' => '2',
			'closing_type' => 'default',
			'desc_position' => 'top',
			'desc_effect' => '1',
			'desc_basecolor' => '#020202',
			'desc_alpha' => '0.7',
			'desctext_size' => '12',
			'desctext_color' => '#FFFFFF',
			'desctext_alpha' => '1',
			'show_control' => 'yes',
			'control_position' => 'bottom',
			'control_basecolor' => '#524B46',
			'control_basecoloralpha' => '0.7',
			'show_price' => 'yes',
			'price_img' => 'flower_red.png',
			'price_imgwidth' => '120',
			'price_imgheight' => '120',
			'price_location' => 'BL',
			'currency' => '$',
			'price_size' => '20',
			'price_color' => '#FFFFFF',
			'price_color_alpha' => '1',
			'autoplay' => 'on',
			'autoplay_display_time' => '10',
			'thumbnav_arrowcolor' => '#0EF44A',
			'thumbnav_arrow_alpha' => '1',
			'thumbnav_arrow_mouseovercolor' => '#0EF44A',
			'thumbnav_arrow_mouseovercolor_alpha' => '1',
			'thumbnav_arrow_onclickcolor' => '#0EF44A',
			'thumbnav_arrow_Onclickcolor_alpha' => '1',
			'thumbpanel_position' => 'bottom',
			'thumbpanel_height' => '76',
			'thumbpanel_base_color' => '#2C2C2C',
			'thumbpanel_base_alpha' => '1',
			'thumb_width' => '86',
			'thumb_height' => '64',
			'thumb_baseup_color' => '#FEFEFE',
			'thumb_mouseover_color' => '#0EF44A',
			'tooltip_base_color' => '#FBFBFB',
			'tooltip_base_alpha' => '0.8',
			'tooltip_label_color' => '#202020',
			'tooltip_label_alpha' => '1',
			'item_zoom' => 'enabled',
			'mainImg_scale' => 'yes',
			'thumbImg_scale' => 'yes',
  			'show_tooltip' => 'on',
			'show_desc' => 'on',
			'category_id' => '0',
			'catlist_height' => '365',
			'catlist_bgcolor' => '606060',
			'catlist_itemwidth' => '330',
			'catlist_itemheight' => '125',
			'catlist_thmbbordersize' => '4',
			'catlist_thmbbordercolor' => 'FFFFFF',
			'catlist_titlecolor' => 'FFFFFF',
			'catlist_titlesize' => '15',
			'catlist_desccolor' => 'FFFFFF',
			'catlist_descsize' => '12',
			'catlist_scollerbgcolor' => '77c001',
			'catlist_scollerarrowcolor' => 'f5f5f5',
			'close_bgcolor' => '77c001',
			'close_iconcolor' => 'f5f5f5',
			'close_bgcolorover' => 'f5f5f5',
			'close_overcolor' => '77c001',
			'target' => 'current',
			'wmode' => 'opaque'		
			);
	return $drm_settings;
}


function __get_drm_xml_settings($plugContId)
{
    $ops = get_option('drm_settings', array());
	$backgroundColor = '#FFFFFF';
	$bgcolor_alpha = 1;
	$show_control = $ops['show_control'];
	if($show_control =="yes"){
		 $generate_show_control = "true";
		}else{
			$generate_show_control = "false";
	}
	$xml_settings = '
	<mobileSettings>
	<currencySymbol>'.$ops['currency'].'</currencySymbol>

	<width>'.$ops['bannerWidth'].'</width>
	<height>'.$ops['bannerHeight'].'</height>
	<containerid>'.$plugContId.'</containerid>
    <heightManual>'.$ops['heightManual'].'</heightManual>
    <mheight1>'.$ops['bannerHeight1'].'</mheight1>
    <mheight2>'.$ops['bannerHeight2'].'</mheight2>
    <mheight3>'.$ops['bannerHeight3'].'</mheight3>
    <mheight4>'.$ops['bannerHeight4'].'</mheight4>
	</mobileSettings>

	<settings>
	
		<background>
	<color code="'.$backgroundColor.'" alpha="'.$bgcolor_alpha.'" />	</background><viewer>
	
	<align_image_in_fullscreen>'.$ops['imgalign_fullscreen'].'</align_image_in_fullscreen>
	<base>
			<color code="'.$ops['base_color'].'" alpha="'.$ops['basecolor_alpha'].'" />
		</base><effect>
			<type>'.$ops['effect_type'].'</type>
			<time>'.$ops['effect_time'].'</time>
			<closingType>'.$ops['closing_type'].'</closingType>
				<preloader>
					<color code="'.'#202020'.'" alpha="'.'1'.'" />
				</preloader>
		</effect>

		<description position="'.$ops['desc_position'].'">
				
				<effect>'.$ops['desc_effect'].'</effect>
				
				<base>
					<color code="'.$ops['desc_basecolor'].'" alpha="'.$ops['desc_alpha'].'" />
				</base>
				
				<text>
					<size>'.$ops['desctext_size'].'</size>
					<color code="'.$ops['desctext_color'].'" alpha="'.$ops['desctext_alpha'].'" />
				</text>
		</description>

		<priceTag enabled="'.$ops['show_price'].'">
				
				<tag width="'.$ops['price_imgwidth'].'" height="'.$ops['price_imgheight'].'">'.DRMW_PLUGIN_URL.'/price_images/'.$ops['price_img'].'</tag>
				
				<position>'.$ops['price_location'].'</position>
				
				<symbol>'.$ops['currency'].'</symbol>
				
				<label>
					<size>'.$ops['price_size'].'</size>
					<color code="'.$ops['price_color'].'" alpha="'.$ops['price_color_alpha'].'" />
				</label>
				
			</priceTag>';

			$xml_settings .= '<controls position="'.$ops['control_position'].'" show="'.$generate_show_control.'">

				<base>
					<color code="'.$ops['control_basecolor'].'" alpha="'.$ops['control_basecoloralpha'].'" />
				</base>
				
				<arrow>
					
					<base>
						<up>
							<color code="'.'#FBFBFB'.'" alpha="'.'0'.'" />
						</up>
						<over>
							<color code="'.'#FBFBFB'.'" alpha="'.'0.6'.'" />
						</over>
						<down>
							<color code="'.'#FBFBFB'.'" alpha="'.'0.6'.'" />
						</down>
					</base>
					
					<arrow>
						<up>
							<color code="'.'#FBFBFB'.'" alpha="'.'1'.'" />
						</up>
						<over>
							<color code="'.'#020202'.'" alpha="'.'1'.'" />
						</over>
						<down>
							<color code="'.'#020202'.'" alpha="'.'1'.'" />
						</down>
					</arrow>
					
				</arrow>';
				
		$xml_settings .= ' <category>
					
					<base>
						<up>
							<color code="'.'#FBFBFB'.'" alpha="'.'0'.'" />
						</up>
						<over>
							<color code="'.'#FBFBFB'.'" alpha="'.'0.6'.'" />
						</over>
						<down>
							<color code="'.'#FBFBFB'.'" alpha="'.'0.3'.'" />
						</down>
					</base>
					
					<symbol>
						<up>
							<color code="'.'#FBFBFB'.'" alpha="'.'1'.'" />
						</up>
						<over>
							<color code="'.'#020202'.'" alpha="'.'1'.'" />
						</over>
						<down>
							<color code="'.'#020202'.'" alpha="'.'0.5'.'" />
						</down>
					</symbol>
					
				</category>';

		$xml_settings .= ' <display>
					
					<base>
						<up>
							<color code="'.'#FBFBFB'.'" alpha="'.'0'.'" />
						</up>
						<over>
							<color code="'.'#FBFBFB'.'" alpha="'.'0.6'.'" />
						</over>
						<down>
							<color code="'. '#FBFBFB'.'" alpha="'.'1'.'" />
						</down>
					</base>
					
					<circle>
						<up>
							<color code="'.'#FBFBFB'.'" alpha="'.'1'.'" />
						</up>
						<over>
							<color code="'.'#020202'.'" alpha="'.'1'.'" />
						</over>
						<down>
							<color code="'.'#020202'.'" alpha="'.'1'.'" />
						</down>
					</circle>
					
					<symbol>
						<up>
							<color code="'.'#020202'.'" alpha="'.'1'.'" />
						</up>
						<over>
							<color code="'.'#FBFBFB'.'" alpha="'.'1'.'" />
						</over>
						<down>
							<color code="'.'#FBFBFB'.'" alpha="'.'1'.'" />
						</down>
					</symbol>
					
				</display>
				
				<autoplay displayTime="'.'10'.'" default="'.'on'.'">
					
					<base>
						<up>
							<color code="'.'#FBFBFB'.'" alpha="'.'0'.'" />
						</up>
						<over>
							<color code="'.'#FBFBFB'.'" alpha="'.'0.6'.'" />
						</over>
						<down>
							<color code="'.'#FBFBFB'.'" alpha="'.'0.6'.'" />
						</down>
					</base>
					
					<animation>
						<up>
							<color code="'.'#FBFBFB'.'" alpha="'.'1'.'" />
						</up>
						<over>
							<color code="'.'#020202'.'" alpha="'.'1'.'" />
						</over>
						<down>
							<color code="'.'#020202'.'" alpha="'.'1'.'" />
						</down>
					</animation>
					
					<symbol>
						<up>
							<color code="'.'#FBFBFB'.'" alpha="'.'1'.'" />
						</up>
						<over>
							<color code="'.'#020202'.'" alpha="'.'1'.'" />
						</over>
						<down>
							<color code="'.'#020202'.'" alpha="'.'1'.'" />
						</down>
					</symbol>
					
				</autoplay>
				
			</controls>';
$xml_settings .= '</viewer>

		<thumbsPanel position="'.$ops['thumbpanel_position'].'" height="'.$ops['thumbpanel_height'].'">
			
			<base>
				<color code="'.$ops['thumbpanel_base_color'].'" alpha="'.$ops['thumbpanel_base_alpha'].'" />
			</base>
			
			<thumb width="'.$ops['thumb_width'].'" height="'.$ops['thumb_height'].'">
				
				<base>
					<up>
						<color code="'.$ops['thumb_baseup_color'].'" alpha="'.$ops['thumbpanel_base_alpha'].'" />
					</up>
					<over>
						<color code="'.$ops['thumb_mouseover_color'].'" alpha="'.$ops['thumbpanel_base_alpha'].'" />
					</over>
					<down>
						<color code="'.$ops['thumb_mouseover_color'].'" alpha="'.$ops['thumbpanel_base_alpha'].'" />
					</down>
					<selected>
						<color code="'.$ops['thumb_mouseover_color'].'" alpha="'.$ops['thumbpanel_base_alpha'].'" />
					</selected>
				</base>
				
				<preloader>
					<color code="'.'#202020'.'" alpha="'.$ops['thumbpanel_base_alpha'].'" />
				</preloader>
				
			</thumb>
			
			<tooltip>
				
				<base>
					<color code="'.$ops['tooltip_base_color'].'" alpha="'.$ops['tooltip_base_alpha'].'" />
				</base>
				
				<label>
					<color code="'.$ops['tooltip_label_color'].'" alpha="'.$ops['tooltip_label_alpha'].'" />
				</label>
				
			</tooltip>
			
			
			<arrow>
				<up>
					<color code="'.$ops['thumbnav_arrowcolor'].'" alpha="'.$ops['thumbnav_arrow_alpha'].'" />
				</up>
				<over>
					<color code="'.$ops['thumbnav_arrow_mouseovercolor'].'" alpha="'.$ops['thumbnav_arrow_mouseovercolor_alpha'].'" />
				</over>
				<down>
					<color code="'.$ops['thumbnav_arrow_onclickcolor'].'" alpha="'.$ops['thumbnav_arrow_Onclickcolor_alpha'].'" />
				</down>
			</arrow>

			
		</thumbsPanel>';

$xml_settings .= '<category_list>			
			<height>'.$ops['catlist_height'].'</height>
			<item>
				<title_size>'.$ops['catlist_titlesize'].'</title_size>
				<description_size>'.$ops['catlist_descsize'].'</description_size>
				<title_color>'.$ops['catlist_titlecolor'].'</title_color>
				<description_color>'.$ops['catlist_desccolor'].'</description_color>
				<background_color>'.$ops['catlist_bgcolor'].'</background_color>
				<color_over>'.'1f1f1f'.'</color_over>
				<width>'.$ops['catlist_itemwidth'].'</width>
				<height>'.$ops['catlist_itemheight'].'</height>
				<thumb_width>'.'89'.'</thumb_width>
				<thumb_height>'.'97'.'</thumb_height>
				<thumb_border_size>'.$ops['catlist_thmbbordersize'].'</thumb_border_size>
				<thumb_border_color>'.$ops['catlist_thmbbordercolor'].'</thumb_border_color>				
			</item>
			<scroll>
				<background_color>'.$ops['catlist_scollerbgcolor'].'</background_color>
				<element_color>'.$ops['catlist_scollerarrowcolor'].'</element_color>
				<element_icon_color>'.'000000'.'</element_icon_color>
			</scroll>
			<close>
				<background_color>'.$ops['catlist_scollerbgcolor'].'</background_color>
				<icon_color>'.$ops['close_iconcolor'].'</icon_color>
				<background_color_over>'.$ops['close_bgcolorover'].'</background_color_over>
				<icon_color_over>'.$ops['close_overcolor'].'</icon_color_over>
			</close>
		</category_list>
				</settings>
				';
	return $xml_settings;
}

function drm_get_album_dir($album_id)
{
	global $gdrm;
	$album_dir = DRMW_PLUGIN_UPLOADS_DIR . "/{$album_id}_uploadfolder";
	return $album_dir;
}
/**
 * Get album url
 * @param $album_id
 * @return unknown_type
 */
function drm_get_album_url($album_id)
{
	global $gdrm;
	$album_url = DRMW_PLUGIN_UPLOADS_URL . "/{$album_id}_uploadfolder";
	return $album_url;
}
function drm_get_table_actions(array $tasks)
{
	?>
	<div class="bulk_actions">
		<form action="" method="post" class="bulk_form">Bulk action
			<select name="task">
				<?php foreach($tasks as $t => $label): ?>
				<option value="<?php print $t; ?>"><?php print $label; ?></option>
				<?php endforeach; ?>
			</select>
			<button class="button-secondary do_bulk_actions" type="submit">Do</button>
		</form>
	</div>
	<?php 
}
function shortcode_display_drm_gallery($atts)
{
	$vars = shortcode_atts( array(
									'cats' => '',
									'imgs' => '',
								), 
							$atts );
	//extract( $vars );
	
	$ret = display_drm_gallery($vars);
	return $ret;
}
function display_drm_gallery($vars)
{
	global $wpdb, $gdrm;
	$ops = get_option('drm_settings', array());
	$show_disprice = 'no'; //da dobavq kydeto se poqvi-sigurno v itemite
	$category_thumbscale = $ops['catthumb_scale'];
	if($category_thumbscale =="yes"){
		$generate_catthumb_scale = "true";
	} else {
		$generate_catthumb_scale = "false";
	}
	//print_r($ops);
	$albums = null;
	$images = null;
	$cids = trim($vars['cats']);
	if (strlen($cids) != strspn($cids, "0123456789,")) {
		$cids = '';
		$vars['cats'] = '';
	}
	$imgs = trim($vars['imgs']);
	if (strlen($imgs) != strspn($imgs, "0123456789,")) {
		$imgs = '';
		$vars['imgs'] = '';
	}
	$categories = '';
	$xml_filename = '';
	if( !empty($cids) && $cids{strlen($cids)-1} == ',')
	{
		$cids = substr($cids, 0, -1);
	}
	if( !empty($imgs) && $imgs{strlen($imgs)-1} == ',')
	{
		$imgs = substr($imgs, 0, -1);
	}
	//check for xml file
	if( !empty($vars['cats']) )
	{
		$xml_filename = "cat_".str_replace(',', '', $cids) . '.xml';	
	}
	elseif( !empty($vars['imgs']))
	{
		$xml_filename = "image_".str_replace(',', '', $imgs) . '.xml';
	}
	else
	{
		$xml_filename = "drm_all.xml";
	}
	//die(DRMW_PLUGIN_XML_DIR . '/' . $xml_filename);


	
	if( !empty($vars['cats']) )
	{
		$query = "SELECT * FROM {$wpdb->prefix}drm_albums WHERE album_id IN($cids) AND status = 1 ORDER BY `order` ASC";
		//print $query;
		$albums = $wpdb->get_results($query, ARRAY_A);
		foreach($albums as $key => $album)
		{
			$images = $gdrm->drm_get_album_images($album['album_id']);
			if ($images && !empty($images) && is_array($images)) {
			$album_dir = drm_get_album_url($album['album_id']);//DRMW_PLUGIN_UPLOADS_URL . '/' . $album['album_id']."_".$album['name'];
			$categories .= '<category>';
			$categories .= '<title>'.$album['name'].'</title>';
			$categories .= '<description>'.$album['description'].'</description>';
			$categories .= '<thumb scale="'.$generate_catthumb_scale.'">'.$album_dir."/thumb/".$album['thumb'].'</thumb>';
			foreach($images as $key => $img)
			{
				if( $img['status'] == 0 ) continue;
				$categories .= ' <item interactive="'.$ops['item_interactive'].'" zoom="'.$ops['item_zoom'].'">';

				$categories .= ' <main scale="'.$ops['mainImg_scale'].'">'.trim(str_replace(" ","-",$album_dir)."/big/".$img['image']).'</main>';

				$categories .= ' <thumb scale="'.$ops['thumbImg_scale'].'">'.trim(str_replace(" ","-",$album_dir)."/thumb/".$img['thumb']).'</thumb>';

				if ($ops['show_tooltip'] == 'on') {
					$categories .= '<label><![CDATA['.trim($img['title']).']]></label>';
				}else{
					$categories .= '<label><![CDATA[]]></label>';
				}

				if ($ops['show_desc'] == 'on') {
				$categories .= '<description><![CDATA['.trim($img['description']).']]></description>';
				}else{
					$categories .= '<description><![CDATA[]]></description>';
				}

				$categories .= '<link window="'.$ops['target'].'">'.trim($img['link']).'</link>';
				
				if ($ops['show_price'] == 'yes') {
					$categories .= '<price>';

					if($img['price'] > 0){
						$categories .= '<regular>'.$img['price'].'</regular>';
						$categories .= '<updated></updated>';
					}else{
						$categories .= '<regular></regular>';
						$categories .= '<updated></updated>';
					}
					$categories .= '</price>';
				}else{
					$categories .= '<price>';
					$categories .= '<regular></regular>';
					$categories .= '<updated></updated>';
					$categories .= '</price>';
				}

				$categories .= '</item>';
			}
			$categories .= "</category>";
			}
		}
		//$xml_filename = "cat_".str_replace(',', '', $cids) . '.xml';
	}
	elseif( !empty($vars['imgs']))
	{
		$query = "SELECT * FROM {$wpdb->prefix}drm_images WHERE image_id IN($imgs) AND status = 1 ORDER BY `order` ASC";
		$images = $wpdb->get_results($query, ARRAY_A);
		if ($images && !empty($images) && is_array($images)) {
			$categories .= '<category>';
			$categories .= '<title>All Albums</title>';
			$categories .= '<description>All Albums</description>';
			$categories .= '<thumb scale="'.$generate_catthumb_scale.'"></thumb>';
		foreach($images as $key => $img)
		{
			$album = $gdrm->drm_get_album($img['category_id']);
			$album_dir = drm_get_album_url($album['album_id']);//DRMW_PLUGIN_UPLOADS_URL . '/' . $album['album_id']."_".$album['name'];

			if( $img['status'] == 0 ) continue;
			$categories .= ' <item interactive="'.$ops['item_interactive'].'" zoom="'.$ops['item_zoom'].'">';

				$categories .= ' <main scale="'.$ops['mainImg_scale'].'">'.trim(str_replace(" ","-",$album_dir)."/big/".$img['image']).'</main>';

				$categories .= ' <thumb scale="'.$ops['thumbImg_scale'].'">'.trim(str_replace(" ","-",$album_dir)."/thumb/".$img['thumb']).'</thumb>';

				if ($ops['show_tooltip'] == 'on') {
					$categories .= '<label><![CDATA['.trim($img['title']).']]></label>';
				}else{
					$categories .= '<label><![CDATA[]]></label>';
				}

				if ($ops['show_desc'] == 'on') {
				$categories .= '<description><![CDATA['.trim($img['description']).']]></description>';
				}else{
					$categories .= '<description><![CDATA[]]></description>';
				}

				$categories .= '<link window="'.$ops['target'].'">'.trim($img['link']).'</link>';
				
				if ($ops['show_price'] == 'yes') {
					$categories .= '<price>';

					if($img['price'] > 0){
						$categories .= '<regular>'.$img['price'].'</regular>';
						$categories .= '<updated></updated>';
					}else{
						$categories .= '<regular></regular>';
						$categories .= '<updated></updated>';
					}
					$categories .= '</price>';
				}else{
					$categories .= '<price>';
					$categories .= '<regular></regular>';
					$categories .= '<updated></updated>';
					$categories .= '</price>';
				}

				$categories .= '</item>';
		}
		$categories .= "</category>";
		}
	}
	//no values paremeters setted
	else//( empty($vars['cats']) && empty($vars['imgs']))
	{
		$query = "SELECT * FROM {$wpdb->prefix}drm_albums WHERE status = 1 ORDER BY `order` ASC";
		$albums = $wpdb->get_results($query, ARRAY_A);
		foreach($albums as $key => $album)
		{
			$images = $gdrm->drm_get_album_images($album['album_id']);
			$album_dir = drm_get_album_url($album['album_id']);//DRMW_PLUGIN_UPLOADS_URL . '/' . $album['album_id']."_".$album['name'];
			if ($images && !empty($images) && is_array($images)) {
			$categories .= '<category>';
			$categories .= '<title>'.$album['name'].'</title>';
			$categories .= '<description>'.$album['description'].'</description>';
			$categories .= '<thumb scale="'.$generate_catthumb_scale.'">'.$album_dir."/thumb/".$album['thumb'].'</thumb>';
			foreach($images as $key => $img)
			{
				if($img['status'] == 0 ) continue;
				$categories .= ' <item interactive="'.$ops['item_interactive'].'" zoom="'.$ops['item_zoom'].'">';

				$categories .= ' <main scale="'.$ops['mainImg_scale'].'">'.trim(str_replace(" ","-",$album_dir)."/big/".$img['image']).'</main>';

				$categories .= ' <thumb scale="'.$ops['thumbImg_scale'].'">'.trim(str_replace(" ","-",$album_dir)."/thumb/".$img['thumb']).'</thumb>';

				if ($ops['show_tooltip'] == 'on') {
					$categories .= '<label><![CDATA['.trim($img['title']).']]></label>';
				}else{
					$categories .= '<label><![CDATA[]]></label>';
				}

				if ($ops['show_desc'] == 'on') {
				$categories .= '<description><![CDATA['.trim($img['description']).']]></description>';
				}else{
					$categories .= '<description><![CDATA[]]></description>';
				}

				$categories .= '<link window="'.$ops['target'].'">'.trim($img['link']).'</link>';
				
				if ($ops['show_price'] == 'yes') {
					$categories .= '<price>';

					if($img['price'] > 0){
						$categories .= '<regular>'.$img['price'].'</regular>';
						$categories .= '<updated></updated>';
					}else{
						$categories .= '<regular></regular>';
						$categories .= '<updated></updated>';
					}
					$categories .= '</price>';
				}else{
					$categories .= '<price>';
					$categories .= '<regular></regular>';
					$categories .= '<updated></updated>';
					$categories .= '</price>';
				}

				$categories .= '</item>';
			}
			$categories .= "</category>";
			}
		}
		//$xml_filename = "drm_all.xml";
	}
	
	$xml_tpl = __get_drm_xml_template();
    $plugContId= 'gal'.time();
	$settings = __get_drm_xml_settings($plugContId);


	$xml = str_replace(array('{settings}', '{categories}'), 
						array($settings, $categories), $xml_tpl);
	//write new xml file
	$fh = fopen(DRMW_PLUGIN_XML_DIR . '/' . $xml_filename, 'w+');
	fwrite($fh, $xml);
	fclose($fh);
	//print "<h3>Generated filename: $xml_filename</h3>";
	//print $xml;
	if( file_exists(DRMW_PLUGIN_XML_DIR . '/' . $xml_filename ) )
	{
		$fh = fopen(DRMW_PLUGIN_XML_DIR . '/' . $xml_filename, 'r');
		$xml = fread($fh, filesize(DRMW_PLUGIN_XML_DIR . '/' . $xml_filename));
		fclose($fh);
		//print "<h3>Getting xml file from cache: $xml_filename</h3>";
		$ret_str = "<div align='center' id='".$plugContId."'>
		<script language=\"javascript\">AC_FL_RunContent = 0;</script>
<script src=\"".DRMW_PLUGIN_URL."/js/AC_RunActiveContent.js\" language=\"javascript\"></script>

		<script language=\"javascript\"> 
	if (AC_FL_RunContent == 0) {
		alert(\"This page requires AC_RunActiveContent.js.\");
	} else {
		AC_FL_RunContent(
			'codebase', 'http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,0,0',
			'width', '".$ops['bannerWidth']."',
			'height', '".$ops['bannerHeight']."',
			'src', '".DRMW_PLUGIN_URL."/js/wp_dreamwork',
			'quality', 'high',
			'pluginspage', 'http://www.macromedia.com/go/getflashplayer',
			'align', 'middle',
			'play', 'true',
			'loop', 'true',
			'scale', 'showall',
			'wmode', '".$ops['wmode']."',
			'devicefont', 'false',
			'id', 'xmlswf_vmdrm',
			'bgcolor', '".$ops['base_color']."',
			'name', 'xmlswf_vmdrm',
			'menu', 'true',
			'mobile', '".DRMW_PLUGIN_URL."/xml/$xml_filename',
			'allowFullScreen', 'true',
			'allowScriptAccess','sameDomain',
			'movie', '".DRMW_PLUGIN_URL."/js/wp_dreamwork',
			'salign', '',
			'flashVars','data=".DRMW_PLUGIN_URL."/xml/$xml_filename'
			); //end AC code
	}
</script>
</div>
";
//echo DRMW_PLUGIN_UPLOADS_URL."<hr>";
//		print $xml;
		return $ret_str;
	}
	return true;
}
function __get_drm_xml_template()
{
	$xml_tpl = '<?xml version="1.0" encoding="iso-8859-1"?>
<data>
	
	
	{settings}
	
	<content>
	{categories}
	</content></data>';
	return $xml_tpl;
}
?>