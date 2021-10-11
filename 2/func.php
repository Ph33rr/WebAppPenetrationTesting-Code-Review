<?php
#1.php?infosec_90=[code]
function getBare($content) {
  $content = preg_replace('~<script.*?/script>~is', '', $content);
  $content = preg_replace('~<style.*?/style>~is', '', $content);
  $content = preg_replace('~<!--.*?-->~is', '', $content);
  $content = strip_tags($content);
  $content = str_replace('&nbsp;', ' ', $content);
  return $content;
}

function sanitize_string($input, $sanitize_level) {
	if (is_string($input)) {
		$input = str_replace(chr(0), " ", $input);
		switch ($sanitize_level) {
			case 0:
				return $input;
			case 2:
				// Strips non-style tags.
				$input = sanitize_script($input);
				return ksesProcess($input, getAllowedTags('style_tags'));
			case 3:
				// Full sanitation.  Strips all code.
				return getBare($input);
 
			case 1:
				// Text formatting sanititation.
				$input = sanitize_script($input);
				return ksesProcess($input, getAllowedTags('allowed_tags'));
			case 4:
			default:
				// for internal use to eliminate security injections
				return sanitize_script($input);
		}
	}
	return $input;
}
function sanitize($input_string, $sanitize_level = 3) {
	if (is_array($input_string)) {
		$output_string = array();
		foreach ($input_string as $output_key => $output_value) {
			$output_string[$output_key] = sanitize($output_value, $sanitize_level);
		}
	} else {
		$output_string = sanitize_string($input_string, $sanitize_level);
	}
	return $output_string;
}


#1.php?infosec_90=[code]

if(isset($_GET['infosec_90'])){
    $ss= trim(sanitize($_GET['infosec_90']));
	echo $ss;
}
