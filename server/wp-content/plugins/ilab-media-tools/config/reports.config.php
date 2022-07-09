<?php
// Copyright (c) 2016 Interfacelab LLC. All rights reserved.
//
// Released under the GPLv3 license
// http://www.gnu.org/licenses/gpl-3.0.html
//
// **********************************************************************
// This program is distributed in the hope that it will be useful, but
// WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
// **********************************************************************

if (!defined('ABSPATH')) { header('Location: /'); die; }

return [
	"id" => "reports",
	"name" => "Report Viewer",
	"description" => "Tool for viewing reports generated by Media Cloud.",
	"class" => "MediaCloud\\Plugin\\Tools\\Reports\\ReportsTool",
	"exclude" => true,
	"dependencies" => [],
	"env" => "ILAB_MEDIA_REPORT_VIEWER_ENABLED",  // this is always enabled btw
	"settings" => [
		"options-group" => "media-cloud-options-group-reporting",
	]
];