<?php
/**
 * @version		$Id: pagination.php 10381 2008-06-01 03:35:53Z pasamio $
 * @package		Joomla
 * @copyright	Copyright (C) 2005 - 2008 Open Source Matters. All rights reserved.
 * @license		GNU/GPL, see LICENSE.php
 * Joomla! is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 * See COPYRIGHT.php for copyright notices and details.
 */

// no direct access
defined('_JEXEC') or die('Restricted access');

/**
 * This is a file to add template specific chrome to pagination rendering.
 *
 * pagination_list_footer
 *	 Input variable $list is an array with offsets:
 *		 $list[limit]		: int
 *		 $list[limitstart]	: int
 *		 $list[total]		: int
 *		 $list[limitfield]	: string
 *		 $list[pagescounter]	: string
 *		 $list[pageslinks]	: string
 *
 * pagination_list_render
 *	 Input variable $list is an array with offsets:
 *		 $list[all]
 *			 [data]		: string
 *			 [active]	: boolean
 *		 $list[start]
 *			 [data]		: string
 *			 [active]	: boolean
 *		 $list[previous]
 *			 [data]		: string
 *			 [active]	: boolean
 *		 $list[next]
 *			 [data]		: string
 *			 [active]	: boolean
 *		 $list[end]
 *			 [data]		: string
 *			 [active]	: boolean
 *		 $list[pages]
 *			 [{PAGE}][data]		: string
 *			 [{PAGE}][active]	: boolean
 *
 * pagination_item_active
 *	 Input variable $item is an object with fields:
 *		 $item->base	: integer
 *		 $item->link	: string
 *		 $item->text	: string
 *
 * pagination_item_inactive
 *	 Input variable $item is an object with fields:
 *		 $item->base	: integer
 *		 $item->link	: string
 *		 $item->text	: string
 *
 * This gives template designers ultimate control over how pagination is rendered.
 *
 * NOTE: If you override pagination_item_active OR pagination_item_inactive you MUST override them both
 */

function pagination_list_footer($list)
{
	// Initialize variables
	$lang =& JFactory::getLanguage();
	$html = "<div class=\"list-footer\">\n";

	$html .= "\n<div class=\"limit\">".JText::_('Display Num').$list['limitfield']."</div>";
	$html .= $list['pageslinks'];
	$html .= "\n<div class=\"counter\">".$list['pagescounter']."</div>";

	$html .= "\n<input type=\"hidden\" name=\"limitstart\" value=\"".$list['limitstart']."\" />";
	$html .= "\n</div>";

	return $html;
}

function pagination_list_render($list)
{
	// Initialize variables
	$lang =& JFactory::getLanguage();
	$html = "<div class=\"pagination-list\"><ul class=\"pagination\">";

	$html .= $list['start']['data'];
	$html .= $list['previous']['data'];

	foreach( $list['pages'] as $page )
	{
		if($page['data']['active']) {
			// $html .= '<strong>';
		}

		$html .= $page['data'];

		if($page['data']['active']) {
			//  $html .= '</strong>';
		}
	}

	$html .= $list['next']['data'];
	$html .= $list['end']['data'];
	// $html .= '&#171;';

	$html .= "</ul></div>";
	return $html;
}

function pagination_item_active(&$item) {
	return "<li><strong><a href=\"".$item->link."\" title=\"".$item->text."\">".$item->text."</a></strong></li>";
}

function pagination_item_inactive(&$item) {
	return "<li>".$item->text."</li>";
}
?>





#slide {
 float:left;
 width:583px;
 height:274px !important;
 background:#fff;
 border:1px solid #e8e8e8;
 margin-left:45px;
 padding:0px;
 
 
 }
 
 #s3slider {   
 width: 593px; /* important to be same as image width */   
 height: 264px; /* important to be same as image height */  
 position: relative; /* important */   
 overflow: hidden; /* important */     
 padding:0;
  margin-left:-15px;
 margin-top:5px; 
 
 }
 
 #s3slider img {   
 margin:0 !important;   
 padding:0 !important;    

 }
 
 #s3sliderContent {   
 width: 595px; /* important to be same as image width or wider */   
 position: absolute; /* important */   
 top: 0; /* important */  
 margin-left: 0; /* important */
 
 }
 
 .s3sliderImage {   
 float: left; /* important */   
 position: relative; /* important */   
 display: none; /* important */
 margin:0 0 0 4px !important;
 padding:0;
 } 
 
 .s3sliderImage span {   
 position: absolute; /* important */   
 left: 0px;   
 top:220px;   
 font-size:16px;  /*  padding: 10px 13px; */  
 width: 593px;   
 height:50px;   
 background-color: #000;   
 line-height:42px;   
 filter: alpha(opacity=80); 
 /* here you can set the opacity of box with text */  
 -moz-opacity: 0.8; /* here you can set the opacity of box with text */   
 -khtml-opacity: 0.8; /* here you can set the opacity of box with text */   
 opacity: 0.8; /* here you can set the opacity of box with text */   
 color: #efefef;  display: none;     
 
 }
 
li.s3sliderImage {
list-style:none !important;
padding:0;
margin:0;
 
}

.clear {
clear: both;

} 



















