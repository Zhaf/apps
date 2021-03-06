<?php

/**
* ownCloud - ocDownloader plugin
*
* @author Xavier Beurois
* @copyright 2012 Xavier Beurois www.djazz-lab.net
* 
* This library is free software; you can redistribute it and/or
* modify it under the terms of the GNU AFFERO GENERAL PUBLIC LICENSE
* License as published by the Free Software Foundation; either 
* version 3 of the License, or any later version.
* 
* This library is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
* GNU AFFERO GENERAL PUBLIC LICENSE for more details.
*  
* You should have received a copy of the GNU Lesser General Public 
* License along with this library.  If not, see <http://www.gnu.org/licenses/>.
* 
*/

require_once '../../../../lib/base.php';
OC_JSON::checkAppEnabled('ocdownloader');
OC_JSON::checkLoggedIn();

$k = Array();
if(is_numeric($_POST['prov'])) {
	$p = $_POST['prov'];
	$k = OC_ocDownloader::getProvider($p);
}

if(count($k) > 0) {
	OC_JSON::encodedPrint($k);
}