function jra_ext_link($atts, $thing='') {

	global $prefs;

	extract(lAtts(array(
		'class' => '_',
		'all' 	=> false,
	), $atts));

	$url = preg_quote($prefs['siteurl']);
	// Regex
	$f = '/class="' . $class . '([ "])/';
	$g = '/<a(([^>](?!'.$url.'))+)>/is';

	$r = ' rel="nofollow" rel="nofollow" target="_blank" class="' .$class . '$1';

	if ($all)
		$out = preg_replace( $g, '<a$1 rel="nofollow" target="_blank">', parse($thing));
	else
		$out = preg_replace( $f, $r, parse($thing));

	return $out;

}
