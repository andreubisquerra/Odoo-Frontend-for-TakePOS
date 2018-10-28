<?php
/* Copyright (C) 2018	Andreu Bisquerra	<jove@bisquerra.com>
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
$_GET['theme']="md"; // Force theme. MD theme provides better look and feel to TakePOS
$res=@include("../main.inc.php");
if (! $res) $res=@include("../../main.inc.php");
require_once DOL_DOCUMENT_ROOT . '/compta/facture/class/facture.class.php';
$place = GETPOST('place');

$sql="SELECT rowid FROM ".MAIN_DB_PREFIX."facture where facnumber='ProvPOS-$place'";
$resql = $db->query($sql);
$row = $db->fetch_array ($resql);
$placeid=$row[0];
if (! $placeid) $placeid=0; // Developing error message with no lines
else{
	$invoice = new Facture($db);
	$invoice->fetch($placeid);
}

top_htmlhead($head, $title, $disablejs, $disablehead, $arrayofjs, $arrayofcss);

$langs->load("main");
$langs->load("bills");
$langs->load("cashdesk");
?>
<link rel="stylesheet" href="css/pos.css"> 
	<script>
	var received='';
	function addreceived(price)
	{
	received+=price;
	var received_int=parseFloat(received);
	$('#change1').html(received_int.toFixed(2));
	if (received_int><?php echo $invoice->total_ttc;?>)
		{
		var change=parseFloat(received_int-<?php echo $invoice->total_ttc;?>);
		$('#change2').html(change.toFixed(2));
		}
	}
	
	function reset()
	{
		received='';
		received_int=0;
		$('#change1').html('<?php echo price(0) ?>');
		$('#change2').html('<?php echo price(0) ?>');
	}
	
	function Validate(payment){
        parent.$("#poslines").load("invoice.php?place=<?php echo $place;?>&action=valid&pay="+payment, function() {
            parent.$("#poslines").scrollTop(parent.$("#poslines")[0].scrollHeight);
            parent.$.colorbox.close();
        });
		
	}
</script>
</head>
<body>

<div style="position:absolute; top:2%; left:5%; height:36%; width:91%;">
<center>
<div style="width:40%; background-color:#222222; border-radius:8px; margin-bottom: 4px;">
<center><span style='font-family: digital; font-size: 280%;'><font color="white"><?php echo $langs->trans('TotalTTC');?>: </font><font color="red"><span id="totaldisplay"><?php echo price($invoice->total_ttc, 1, '', 1, - 1, - 1, $conf->currency) ?></span></span></center>
</div>
<div style="width:40%; background-color:#333333; border-radius:8px; margin-bottom: 4px;">
<center><span style='font-family: digital; font-size: 250%;'><font color="white"><?php echo $langs->trans("AlreadyPaid"); ?>: </font><font color="red"><span id="change1"><?php echo price(0) ?></span></center>
</div>
<div style="width:40%; background-color:#333333; border-radius:8px; margin-bottom: 4px;">
<center><span style='font-family: digital; font-size: 250%;'><font color="white"><?php echo $langs->trans("Change"); ?>: </font><font color="red"><span id="change2"><?php echo price(0) ?></span></span></center>
</div>
</center>
</div>

<div style="position:absolute; top:40%; left:5%; height:55%; width:91%;">
<button type="button" class="calcbutton" onclick="addreceived(7);">7</button>
<button type="button" class="calcbutton" onclick="addreceived(8);">8</button>
<button type="button" class="calcbutton" onclick="addreceived(9);">9</button>
<button type="button" class="calcbutton2" onclick="Validate('cash');"><?php echo $langs->trans("Cash"); ?></button>
<button type="button" class="calcbutton" onclick="addreceived(4);">4</button>
<button type="button" class="calcbutton" onclick="addreceived(5);">5</button>
<button type="button" class="calcbutton" onclick="addreceived(6);">6</button>
<button type="button" class="calcbutton2" onclick="Validate('card');"><?php echo $langs->trans("PaymentTypeCB"); ?></button>
<button type="button" class="calcbutton" onclick="addreceived(1);">1</button>
<button type="button" class="calcbutton" onclick="addreceived(2);">2</button>
<button type="button" class="calcbutton" onclick="addreceived(3);">3</button>
<button type="button" class="calcbutton2" onclick="printclick();"><span id="printtext"><?php echo $langs->trans("GoBack"); ?></span></button>
<button type="button" class="calcbutton" onclick="addreceived('0');">0</button>
<button type="button" class="calcbutton" onclick="addreceived('00');">00</button>
<button type="button" class="calcbutton" onclick="addreceived('.');">,</button>
<button type="button" class="calcbutton2" onclick="reset();"><span style='font-size: 150%;'>C</span></button>
</div>

</body>
</html>