<?php



if (! function_exists('str_slug')) {
    /**
     * Generate a URL friendly "slug" from a given string.
     *
     * @param  string  $title
     * @param  string  $separator
     * @param  string  $language
     * @return string
     *
     * @deprecated Str::slug() should be used directly instead. Will be removed in Laravel 5.9.
     */
    function str_slug($title, $separator = '-', $language = 'en')
    {
        return Str::slug($title, $separator, $language);
    }
}


function make_slug($string = null, $separator = "-") {
    if (is_null($string)) {
        return "";
    }

    // Remove spaces from the beginning and from the end of the string
    $string = trim($string);

    // Lower case everything
    // using mb_strtolower() function is important for non-Latin UTF-8 string | more info: http://goo.gl/QL2tzK
    $string = mb_strtolower($string, "UTF-8");;

    $string = preg_replace("/[^a-z0-9_\sءاأإآؤئبتثجحخدذرزسشصضطظعغفقكلمنهويةى]#u/", "", $string);
  //  $string = preg_replace("/^[a-z0-9]([0-9a-z_-\s])-ءاأإآؤئبتثجحخدذرزسشصضطظعغفقكلمنهويةى]/u", "", $string);
    // Remove multiple dashes or whitespaces
    $string = preg_replace("/[\s-]+/", " ", $string);

    // Convert whitespaces and underscore to the given separator
    $string = preg_replace("/[\s_]/", $separator, $string);

    return $string;
}

if (!function_exists('isActiveRoute'))
{
    /**
     * Asserts active route
     *
     * @param $routes
     * @param string $output
     * @return string
     */
    function isActiveRoute($routes, $output = 'active')
    {
        foreach ((array)$routes as $route) {
            if (Route::currentRouteName() == $route) {
                return $output;
            }
        }
    }
}