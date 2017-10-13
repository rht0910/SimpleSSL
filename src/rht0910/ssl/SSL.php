<?php

namespace rht0910\ssl;

class SSL
{
    /**
     * Enable SSL.<br>
     * Change url to httpa://<URL> .<br>
     * <br>
     * Do not run in not supported https environment.
     */
    public function enable() {
      if(php_sapi_name() == 'cli') {
	return 0;
      }
      if(empty($_SERVER['SERVER_PORT'])) {
	$_SERVER['SERVER_PORT'] = 80;
      }
      if(empty($_SERVER['REQUEST_URI'])) {
	$_SERVER['REQUEST_URI'] = "/";
      }
      $port = (int) $_SERVER['SERVER_PORT'];
      if($port == 80) {
        echo "<meta http-equiv=\"refresh\" content=\"0 ; URL=https://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']."\" />";
	return 0;
      } else {
	return 1;
      }
    }

    /**
     * Disable SSL.<br>
     * Change url to http://<URL> .<br>
     * <br>
     * Do not run in https redirecting server
     */
    public function disable() {
      if(php_sapi_name() == 'cli') {
	return 0;
      }
      if(empty($_SERVER['SERVER_PORT'])) {
	$_SERVER['SERVER_PORT'] = 443;
      }
      if(empty($_SERVER['REQUEST_URI'])) {
	$_SERVER['REQUEST_URI'] = "/";
      }
      $port = (int) $_SERVER['SERVER_PORT'];
      if($port == 443) {
        echo "<meta http-equiv=\"refresh\" content=\"0 ; URL=http://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']."\" />";
	return 0;
      } else {
	return 1;
      }
    }
}
