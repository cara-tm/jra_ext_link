function jra_ext_link($atts, $thing='') {

	global $prefs;

	extract(lAtts(array(
		'all' 		=> false,
		'class' 	=> '_',
		'nofollow' 	=> false,
	), $atts));

	$url = preg_quote($prefs['siteurl']);
	// Regex
	$f = '/class="' . $class . '([ "])/';
	$g = '/<a(([^>](?!'.$url.'))+)>/is';

	if ($all && $nofollow)
		$out = preg_replace( $g, '<a$1 rel="nofollow" target="_blank">', parse($thing));
	elseif ($all)
		$out = preg_replace( $g, '<a$1 target="_blank">', parse($thing));
	else
		$out = preg_replace( $f, 'rel="nofollow" target="_blank" class="' .$class . '$1', parse($thing));

	return $out;

}
