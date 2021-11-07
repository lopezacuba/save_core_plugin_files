<?php

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to this file is not allowed.' );
// ################################################################

class j13200save_core_plugin_files_tab {
	function __construct($componentArgs)
		{
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}

		$this->ret_vals = array  ( "TAB_ID" => "save_core_plugin_files" , "TAB_NAME" => "Save Core Plugin Files" , "TAB_CONTENTS" => "<table><tr>
				<td>This Plugin will Save your Jomres Core Plugins files for later use if you did not need them now and after your Jomres Subscription has expired.<br><br>
				 After this plugin is installed; All you need to do is just hit the blue \"Install\" or \"Reinstall\" button under the \"Add/reinstall/upgrade plugin\" column.
				<br><br>
				ALL your Jomres Core Plugins files are now saved here as a ZIP file: /jomres/saved_plugins/<br><br>
				You can even save your Plugin Manager files for later!<br><br>
				Check it out!<br><br>
				These \"Core Plugins\" files are the original files from Jomres Server before they are installed.<br><br>
				<b>DON'T FORGET TO DOWNLOAD THE CORE FILES AND SAVE THEM FOR LATER!</b>
				</td>
				</tr></table>
") ;
		}

	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return $this->ret_vals;
		}
	}
?>