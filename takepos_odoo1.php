<?php
/* Copyright (C) 2018	Andreu Bisquerra	<jove@bisquerra.com>
 * Thank you to Odoo for the best pos theme
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program. If not, see <http://www.gnu.org/licenses/>.
 */

define('NOCSRFCHECK',1);	// This is main home and login page. We must be able to go on it from another web site.
$res=@include("../main.inc.php");
if (! $res) $res=@include("../../main.inc.php");
require_once DOL_DOCUMENT_ROOT.'/core/class/html.formother.class.php';
require_once DOL_DOCUMENT_ROOT.'/categories/class/categorie.class.php';
require_once DOL_DOCUMENT_ROOT . '/compta/facture/class/facture.class.php';

$place = GETPOST('place');
if ($place=="") $place="0";
$action = GETPOST('action');

$langs->load("main");
$langs->load("bills");
$langs->load("orders");
$langs->load("commercial");

// Title
$title='TakePOS - Dolibarr '.DOL_VERSION;
if (! empty($conf->global->MAIN_APPLICATION_TITLE)) $title='TakePOS - '.$conf->global->MAIN_APPLICATION_TITLE;
top_htmlhead($head, $title, $disablejs, $disablehead, $arrayofjs, $arrayofcss);
?>
<!DOCTYPE html>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>TakePOS</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content=" width=1024, user-scalable=no">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="mobile-web-app-capable" content="yes">
        <link rel="shortcut icon" sizes="196x196" href="http://127.0.0.1:8069/point_of_sale/static/src/img/touch-icon-196.png">
        <link rel="shortcut icon" sizes="128x128" href="http://127.0.0.1:8069/point_of_sale/static/src/img/touch-icon-128.png">
        <link rel="apple-touch-icon" href="http://127.0.0.1:8069/point_of_sale/static/src/img/touch-icon-iphone.png">
        <link rel="apple-touch-icon" sizes="76x76" href="http://127.0.0.1:8069/point_of_sale/static/src/img/touch-icon-ipad.png">
        <link rel="apple-touch-icon" sizes="120x120" href="http://127.0.0.1:8069/point_of_sale/static/src/img/touch-icon-iphone-retina.png">
        <link rel="apple-touch-icon" sizes="152x152" href="http://127.0.0.1:8069/point_of_sale/static/src/img/touch-icon-ipad-retina.png">

        <style> body { background: #222; } </style>

        <link rel="shortcut icon" href="http://127.0.0.1:8069/web/static/src/img/favicon.ico" type="image/x-icon">
        <link type="text/css" rel="stylesheet" href="./odoo_theme/point_of_sale.assets.0.css">
		<link href="./odoo_theme/chrome50.css" rel="stylesheet" type="text/css">
		
		<link rel="stylesheet" href="css/colorbox.css" type="text/css" media="screen" />
		<script type="text/javascript" src="js/jquery.colorbox-min.js"></script>
		<script type="text/javascript" src="js/taffy-min.js"></script>
		<script type="text/javascript">
		var place="<?php echo $place;?>";
		var editnumber="";
		var editaction="qty";
		
		<?php
		// Products to javascript multidimensional array
		echo "var products = TAFFY([";
		$sql = 'SELECT * FROM '.MAIN_DB_PREFIX.'product as p,';
		$sql.= ' ' . MAIN_DB_PREFIX . "categorie_product as c";
		$sql.= ' WHERE p.entity IN ('.getEntity('product').')';
		$sql.= ' AND c.fk_product = p.rowid';
		$resql = $db->query($sql);
		$rows = array();
		while($row = $db->fetch_array ($resql)){
			$row['prettyprice']=price($row['price_ttc'], 1, '', 1, - 1, - 1, $conf->currency);
			echo "{rowid:".$row['rowid'].",cat:".$row['fk_categorie'].",label:'".$row['label']."',prettyprice:'".$row['prettyprice']."'},";
		}
		echo "]);";
		?>
		
		
		
		$(document).on('click', '.js-category-switch', function () {
			var catid=$(this).attr( "data-category-id" );
			LoadProducts(catid);
			$(".header-row").removeClass("selected");
		});
		
		$(document).on('click', '.product', function () {
			$(".content-row").removeClass("selected");
		});
		
		$(document).on('click', '.searchbox', function () {
			$(".header-row").removeClass("selected");
		});
		
		function LoadProducts(catid){
			var text="";
			products({cat:{'==':catid}}).each(function (r) {
				text+='<span class="product" onclick="ClickProduct('+r.rowid+')"><div class="product-img"><img src="getimg/?query=pro&id='+r.rowid+'"><span class="price-tag">'+r.prettyprice+'</span></div><div class="product-name">'+r.label+'</div></span>';
			});
			$( "div.product-list" ).html(text);
		}
		
		function Refresh(){
			$("div.order").load("invoice.php?place="+place);
		}
		
		function CloseBill(){
			$.colorbox({href:"pay.php?place="+place, width:"80%", height:"90%", transition:"none", iframe:"true", title:"<?php echo $langs->trans("CloseBill");?>"});
		}
		
		function Customer(){
			$.colorbox({href:"customers.php?place="+place, width:"90%", height:"80%", transition:"none", iframe:"true", title:"<?php echo $langs->trans("Customer");?>"});
		}
		
		
		function Edit(number){
			var text=selectedtext+"<br> ";
			if (number=='c'){
				editnumber="";
				Refresh();
				return;
			}
			else if (number=='qty'){
				if (editaction=='qty' && editnumber!=""){
					$("div.order").load("invoice.php?action=updateqty&place="+place+"&idline="+selectedline+"&number="+editnumber, function() {
						editnumber="";
						$("#qty").html("<?php echo $langs->trans("Qty"); ?>");
					});
					return;
				}
				else {
					editaction="qty";
				}
			}
			else if (number=='p'){
				if (editaction=='p' && editnumber!=""){
					$("div.order").load("invoice.php?action=updateprice&place="+place+"&idline="+selectedline+"&number="+editnumber, function() {
						editnumber="";
						$("#price").html("<?php echo $langs->trans("Price"); ?>");
					});
					return;
				}
				else {
					editaction="p";
				}
			}
			else if (number=='r'){
				if (editaction=='r' && editnumber!=""){
					$("div.order").load("invoice.php?action=updatereduction&place="+place+"&idline="+selectedline+"&number="+editnumber, function() {
						editnumber="";
						$("#reduction").html("<?php echo $langs->trans("ReductionShort"); ?>");
					});
					return;
				}
				else {
					editaction="r";
				}
			}
			else {
				editnumber=editnumber+number;
			}
			if (editaction=='qty'){
				text=text+"<?php echo $langs->trans("Modify")." -> ".$langs->trans("Qty").": "; ?>";
				$("#qty").html("OK");
				$("#price").html("Price");
				$("#reduction").html("Disc");
			}
			if (editaction=='p'){
				text=text+"<?php echo $langs->trans("Modify")." -> ".$langs->trans("Price").": "; ?>";
				$("#qty").html("Qty");
				$("#price").html("OK");
				$("#reduction").html("Disc");
			}
			if (editaction=='r'){
				text=text+"<?php echo $langs->trans("Modify")." -> ".$langs->trans("ReductionShort").": "; ?>";
				$("#qty").html("Qty");
				$("#price").html("Price");
				$("#reduction").html("OK");
			}
			$('#'+selectedline).find("td:first").html(text+editnumber);
		}
		
		function deleteline(){
			$("#poslines").load("invoice.php?action=deleteline&place="+place+"&idline="+selectedline);
		}
        
        
        function ClickProduct(idproduct){
            $("div.order").load("invoice.php?action=addline&place="+place+"&idproduct="+idproduct);
        }
		
		function Search(){
			var text="";
			$.getJSON('./ajax.php?action=search&term='+$('#search').val(), function(data) {
				$.each(data, function(i, obj) {
					text+='<span class="product" onclick="ClickProduct('+obj.rowid+')"><div class="product-img"><img src="getimg/?query=pro&id='+obj.rowid+'"><span class="price-tag">'+obj.prettyprice+'</span></div><div class="product-name">'+obj.label+'</div></span>';
				});	
				$( "div.product-list" ).html(text);
			});
		}
		
		function Floor(floor){
			$.colorbox({href:"floors.php?floor="+floor, width:"90%", height:"90%", transition:"none", iframe:"true", title:"<?php echo $langs->trans("Floors");?>"});
		}
		
		function TakeposPrintingOrder(){
			$("#poslines").load("invoice.php?action=order&place="+place, function() {
		});
}
		
		$( document ).ready(function() {
			var firstcategory=$('span:first', 'div.category-list').attr( "data-category-id" );
			LoadProducts(firstcategory);
		});
		
		</script>
		
		
	</head>
    <body class="o_touch_device">
        <div class="o_main_content"><div class="o_control_panel o_hidden"></div><div class="o_content"><div class="pos">
            <div class="pos-topheader">
                <div class="pos-branding">
                    <img class="pos-logo" src="./odoo_theme/logo.png">
                    <span class="username">
						<?php echo $user->login;;?>
					</span>
                </div>
                <div class="pos-rightheader">
                    <div class="order-selector">
            <span class="orders touch-scrollable">
			
			
			<?php
			if($conf->global->TAKEPOS_BAR_RESTAURANT){
				echo '<span class="order-button select-order selected" data-uid="1" onclick="Floor(1);"><span class="floor-button">'.$langs->trans("Floor").' 1</span></span>';
				$sql="SELECT floor from ".MAIN_DB_PREFIX."takepos_floor_tables where floor>1 group by floor";
				$resql = $db->query($sql);
				$rows = array();
				while($row = $db->fetch_array ($resql)){
					echo '<span class="order-button select-order selected" data-uid="'.$row[0].'" onclick="Floor('.$row[0].');"><span class="floor-button">'.$langs->trans("Floor").' '.$row[0].'
                            </span>
                        </span>';
				
				}  
			}
			?>                   
                
            <?php /*</span>
            <span class="order-button square neworder-button">
                <i class="fa fa-plus"></i>
            </span>
            <span class="order-button square deleteorder-button">
                <i class="fa fa-minus"></i>
            </span>*/?>
        </div>
                    
		<div class="header-button" onclick="location.href='<?php echo DOL_URL_ROOT;?>';">
            <?php echo $langs->trans("Close");?>
        </div></div>
            </div>

            <div class="pos-content">

                <div class="window">
                    <div class="subwindow">
                        <div class="subwindow-container">
                            <div class="subwindow-container-fix screens">
                                
                            <div class="scale-screen screen oe_hidden">
            <div class="screen-content">
            </div>
        </div><div class="product-screen screen">
            <div class="leftpane">
                <div class="window">
                    <div class="subwindow">
                        <div class="subwindow-container">
                            <div class="subwindow-container-fix">
                                <div class="order-container">
            <div class="order-scroller touch-scrollable">
                <div class="order" id="poslines">
                </div>
            </div>
        </div>
                            </div>
                        </div>
                    </div>

                    <div class="subwindow collapsed">
                        <div class="subwindow-container">
                            <div class="subwindow-container-fix pads">
                                <div class="control-buttons oe_hidden"></div>
                                <div class="actionpad">
			
			<?php if($conf->global->TAKEPOS_BAR_RESTAURANT && $conf->global->TAKEPOS_ORDER_PRINTERS){
				echo '<button class="button set-customer" onclick="TakeposPrintingOrder();"><i class="fa fa-user"></i>'.$langs->trans("Order").'</button>';
			}
			else echo '<button class="button set-customer" onclick="Customer();"><i class="fa fa-user"></i>'.$langs->trans("Customer").'</button>';
			?>	
            <button class="button pay" onclick="CloseBill();">
                <div class="pay-circle">
                    <i class="fa fa-chevron-right"></i> 
                </div>
                <?php echo $langs->trans("CloseBill");?>
            </button>
        </div>
                                <div class="numpad">
            <button class="input-button number-char" onclick="Edit(1);">1</button>
            <button class="input-button number-char" onclick="Edit(2);">2</button>
            <button class="input-button number-char" onclick="Edit(3);">3</button>
            <button class="mode-button" id="qty" data-mode="quantity" onclick="Edit('qty');">Qty</button>
            <br>
            <button class="input-button number-char" onclick="Edit(4);">4</button>
            <button class="input-button number-char" onclick="Edit(5);">5</button>
            <button class="input-button number-char" onclick="Edit(6);">6</button>
            <button class="mode-button" id="reduction" data-mode="discount" onclick="Edit('r');">Disc</button>
            <br>
            <button class="input-button number-char" onclick="Edit(7);">7</button>
            <button class="input-button number-char" onclick="Edit(8);">8</button>
            <button class="input-button number-char" onclick="Edit(9);">9</button>
            <button class="mode-button" id="price" data-mode="price" onclick="Edit('p');">Price</button>
            <br>
            <button class="input-button numpad-minus" onclick="Edit('c');">C</button>
            <button class="input-button number-char" onclick="Edit(0);">0</button>
            <button class="input-button number-char" onclick="Edit('.');">.</button>
            <button class="input-button numpad-backspace" onclick="deleteline();">
                <img height="21" src="./odoo_theme/backspace.png" style="pointer-events: none;" width="24">
            </button>
        </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="rightpane">
                <table class="layout-table">

                    <tbody><tr class="header-row">
                        <td class="header-cell">
                            <div>
        <header class="rightpane-header">
            <div class="breadcrumbs">
                <span class="breadcrumb">
                    <span class=" breadcrumb-button breadcrumb-home js-category-switch">
                        <a href="takepos.php"><i class="fa fa-home"></i></a>
                    </span>
                </span>
                
            </div>
            <div class="searchbox">
                <input placeholder="<?php echo $langs->trans('Search');?>" onkeyup="Search();" id="search">
                <span class="search-clear"></span>
            </div>
        </header>
        
            <div class="categories">
                <div class="category-list-scroller touch-scrollable">
                    <div class="category-list simple">
					
					<?php
					$categorie = new Categorie($db);
					$categories = $categorie->get_full_arbo('product');
					foreach($categories as $key => $val)
					{
						echo '<span class="category-simple-button js-category-switch" data-category-id="'.$val['id'].'">';
						echo $val['label'];
						echo '</span>';
					}
					?>
					
					</div>
                </div>
            </div>
        
        </div>
                        </td>
                    </tr>

                    <tr class="content-row">
                        <td class="content-cell">
                            <div class="content-container">
                                <div class="product-list-container">
            <div class="product-list-scroller touch-scrollable">
                <div class="product-list">
				</div>
            </div>
            <span class="placeholder-ScrollbarWidget"></span>
        </div>
                            </div>
                        </td>
                    </tr>

                </tbody></table>
            </div>
        </div>
		</div>
                        </div>
                    </div>
                </div>

                <div class="keyboard_frame">
            <ul class="keyboard simple_keyboard">
                <li class="symbol firstitem row_qwerty"><span class="off">q</span><span class="on">1</span></li>
                <li class="symbol"><span class="off">w</span><span class="on">2</span></li>
                <li class="symbol"><span class="off">e</span><span class="on">3</span></li>
                <li class="symbol"><span class="off">r</span><span class="on">4</span></li>
                <li class="symbol"><span class="off">t</span><span class="on">5</span></li>
                <li class="symbol"><span class="off">y</span><span class="on">6</span></li>
                <li class="symbol"><span class="off">u</span><span class="on">7</span></li>
                <li class="symbol"><span class="off">i</span><span class="on">8</span></li>
                <li class="symbol"><span class="off">o</span><span class="on">9</span></li>
                <li class="symbol lastitem"><span class="off">p</span><span class="on">0</span></li>

                <li class="symbol firstitem row_asdf"><span class="off">a</span><span class="on">@</span></li>
                <li class="symbol"><span class="off">s</span><span class="on">#</span></li>
                <li class="symbol"><span class="off">d</span><span class="on">%</span></li>
                <li class="symbol"><span class="off">f</span><span class="on">*</span></li>
                <li class="symbol"><span class="off">g</span><span class="on">/</span></li>
                <li class="symbol"><span class="off">h</span><span class="on">-</span></li>
                <li class="symbol"><span class="off">j</span><span class="on">+</span></li>
                <li class="symbol"><span class="off">k</span><span class="on">(</span></li>
                <li class="symbol lastitem"><span class="off">l</span><span class="on">)</span></li>

                <li class="symbol firstitem row_zxcv"><span class="off">z</span><span class="on">?</span></li>
                <li class="symbol"><span class="off">x</span><span class="on">!</span></li>
                <li class="symbol"><span class="off">c</span><span class="on">"</span></li>
                <li class="symbol"><span class="off">v</span><span class="on">'</span></li>
                <li class="symbol"><span class="off">b</span><span class="on">:</span></li>
                <li class="symbol"><span class="off">n</span><span class="on">;</span></li>
                <li class="symbol"><span class="off">m</span><span class="on">,</span></li>
                <li class="delete lastitem">delete</li>

                <li class="numlock firstitem row_space"><span class="off">123</span><span class="on">ABC</span></li>
                <li class="space">&nbsp;</li>
                <li class="symbol"><span class="off">.</span><span class="on">.</span></li>
                <li class="return lastitem">return</li>
            </ul>
            <p class="close_button">close</p>
        </div>
        </div>

            <div class="popups">
        </div></div></div>
    

<div class="o_notification_manager"></div><div class="o_loading" style="display: none;">Loading</div></body></html>