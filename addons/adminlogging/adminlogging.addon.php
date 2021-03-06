<?php
/* Copyright (C) XEHub <https://www.xehub.io> */

if(!defined('__XE__'))
	exit();

/**
 * @file adminlogging.addon.php
 * @author XEHub (developers@xpressengine.com)
 * @brief admin log
 */
$logged_info = Context::get('logged_info');
if($logged_info && $logged_info->is_admin == 'Y' && stripos(Context::get('act'), 'admin') !== false && $called_position == 'before_module_proc')
{
	$oAdminloggingController = getController('adminlogging');
	$oAdminloggingController->insertLog($this->module, $this->act);
}
/* End of file adminlogging.php */
/* Location: ./addons/adminlogging */
