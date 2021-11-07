<?php
/**
 *
 * @version Jomres 9.23.x
 *
 * @copyright	2021 Mark the Shark
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 *
 **/
 
// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class plugin_info_save_core_plugin_files
	{
	function __construct()
		{
		$this->data=array(
			"name"=>"save_core_plugin_files",
			"category"=>"System",
			"marketing"=>"This Plugin will Save your Jomres Core Plugins files for later use if you did not need it not and after your Jomres Subscription has expires. After this plugin is installed; All you need to do is just hit the blue Install or Reinstall button under the Add/reinstall/upgrade plugin column.",
			"version"=>"1.01",
			"description"=> "This Plugin will Save your Jomres Core Plugins files for later use if you did not need them now and after your Jomres Subscription has expired. After this plugin is installed; All you need to do is just hit the blue \"Install\" or \"Reinstall\" button under the \"Add/reinstall/upgrade plugin\" column.",
			"lastupdate"=>"11/07/2021",
			"min_jomres_ver"=>"9.23.0",
			'third_party_plugin_latest_available_version' => "http://www.fixmycomputermark.com/jomrespluginsinfo/save_core_plugin_files.json",
			"manual_link"=>'',
			'change_log'=>'None.',
			'highlight'=>'',
			'image'=>'https://snippets.jomres.net/plugin_screenshots/2017-08-02_4tti8.png',
			'demo_url'=>'',
			 "developer_page" => "http://www.fixmycomputermark.com/free-downloads/file/129-save-jomres-core-plugin-files.html",
			"author"=>"Mark",
			"authoremail"=>"<a href=mailto:info@fixmycomputermark.com?subject=save_core_plugin_files>Email_Me</a>"
			);
		}
	}
?>