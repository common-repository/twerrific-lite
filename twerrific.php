<?php
/*
Plugin Name: Twerrific Lite
Version: 0.1
Description: Twerrific Lite allows you to link a any twitter account in post. Just write @twitter_id in your posts and it will automatically make a link to respective Twitter profile.
Author: Adnan Siddiqi
Author URI: http://adnansiddiqi.com/
Plugin URI: http://adnansiddiqi.com/plugins/wp/twerrific-lite/
*/

/* Version check */
global $wp_version;
$exit_msg='Twerrific Litw This requires WordPress 2.5 or newer.
<a href="http://codex.wordpress.org/Upgrading_WordPress">Please
update!</a>';

if (version_compare($wp_version,"2.5","<"))
{
    exit ($exit_msg);
}

function twerrific($content)
{
   return preg_replace('/@([aA-zZ0-9_-]*)/im',"<a href='http://twitter.com/$1' rel='nofollow' target='_blank'>@$1</a>", $content);
}

//Add Filter
add_filter('the_content', 'twerrific');
?>
