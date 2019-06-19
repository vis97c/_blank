<?php
if (!function_exists('startsWith')) {
	function startsWith($haystack, $needle){
		$length = strlen($needle);
		return (substr($haystack, 0, $length) === $needle);
	}
}
if (!function_exists('base_url')) {
    function base_url($atRoot=FALSE, $atCore=FALSE, $parse=FALSE){
        if (isset($_SERVER['HTTP_HOST'])) {
            $http = isset($_SERVER['HTTPS']) && strtolower($_SERVER['HTTPS']) !== 'off' ? 'https' : 'http';
            $hostname = $_SERVER['HTTP_HOST'];
            $dir =  str_replace(basename($_SERVER['SCRIPT_NAME']), '', $_SERVER['SCRIPT_NAME']);

            $core = preg_split('@/@', str_replace($_SERVER['DOCUMENT_ROOT'], '', realpath(dirname(__FILE__))), NULL, PREG_SPLIT_NO_EMPTY);
            $core = $core[0];

            $tmplt = $atRoot ? ($atCore ? "%s://%s/%s/" : "%s://%s/") : ($atCore ? "%s://%s/%s/" : "%s://%s%s");
            $end = $atRoot ? ($atCore ? $core : $hostname) : ($atCore ? $core : $dir);
            $base_url = sprintf( $tmplt, $http, $hostname, $end );
        }
        else $base_url = 'http://localhost/';

        if ($parse) {
            $base_url = parse_url($base_url);
            if (isset($base_url['path'])) if ($base_url['path'] == '/') $base_url['path'] = '';
        }

        return $base_url;
    }
}
if (! function_exists('mix')) {
	/**
	 * Get the path to a versioned file.
	 *
	 * @param  string  $path
	 * @param  string  $manifestDirectory
	 * @return string
	 *
	 * @throws \Exception
	 */
	function mix($path, $manifestDirectory = ''){
		if (! startsWith($path, '/')) {
			$path = "/{$path}";
		}
		if ($manifestDirectory && ! startsWith($manifestDirectory, '/')) {
			$manifestDirectory = "/{$manifestDirectory}";
		}
		// if (! file_exists($manifestPath = $_SERVER['DOCUMENT_ROOT'] . $manifestDirectory.'/mix-manifest.json')) {
		if (! file_exists($manifestPath = 'mix-manifest.json')) {
			throw new Exception('The Mix manifest does not exist: '.$manifestPath);
		}
		$manifest = json_decode(file_get_contents($manifestPath), true);
		if (! array_key_exists($path, $manifest)) {
			throw new Exception(
				"Unable to locate Mix file: {$path}. Please check your ".
			'mix-manifest.json output paths and try again.'
			);
		}
		return base_url().substr($manifest[$path], 1);
	}
}
?>