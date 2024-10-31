<?php
/*
Plugin Name: Scan2Login
Plugin Script: scan2login.php
Description: Just scan with your phone and you'll automatically logged in.
Version: 1.0
Author: Holabar LTD
Plugin URI: http://holabar.com/wp-plugin
Author URI: http://holabar.com
License: Copyright © 2013 Holabar Ltd. All right reserved; The plugin may be used free of charge by non-profit organizations, educational institutions, and bloggers. (For any other case please contact Holabar.ltd support team at support@hoalabar.ltd)


This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.

=== RELEASE NOTES ===
2013-01-31 - v1.0
*/

add_filter('login_form', 'scan2login_loginform_script');

function scan2login_loginform_script() {
?>
<script id="Scan2LoginEmbed" data-cfasync="false" type="text/javascript" src="http://authmatrix.com/embedded/scan2login_nc.js"></script>
<?php
}

?>