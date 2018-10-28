<?php
/* Copyright (C) 2001-2004	Andreu Bisquerra	<jove@bisquerra.com>
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

/**
 *	\file       htdocs/index.php
 *	\brief      Dolibarr home page
 */

define('NOCSRFCHECK',1);	// This is main home and login page. We must be able to go on it from another web site.

$res=@include("../main.inc.php");
if (! $res) $res=@include("../../main.inc.php");
require_once DOL_DOCUMENT_ROOT.'/categories/class/categorie.class.php';

$category = GETPOST('category');
$action = GETPOST('action');
$term = GETPOST('term');

if ($action=="getProducts"){	
	$sql = 'SELECT * FROM '.MAIN_DB_PREFIX.'product as p,';
	$sql.= ' ' . MAIN_DB_PREFIX . "categorie_product as c";
	$sql.= ' WHERE p.entity IN ('.getEntity('product').')';
	$sql.= ' AND c.fk_categorie = '.$category;
	$sql.= ' AND c.fk_product = p.rowid';
	$resql = $db->query($sql);
	$rows = array();
	while($row = $db->fetch_array ($resql)){
		$row['prettyprice']=price($row['price_ttc'], 1, '', 1, - 1, - 1, $conf->currency);
		$rows[] = $row;
	}
	echo json_encode($rows);
}

if ($action=="search"){
	$sql = 'SELECT * FROM '.MAIN_DB_PREFIX.'product';
	$sql.= ' WHERE entity IN ('.getEntity('product').')';
	$sql .= natural_search('label', $term);
	$sql .= " or barcode='".$term."'";
	$resql = $db->query($sql);
	$rows = array();
	while($row = $db->fetch_array ($resql)){
		$row['prettyprice']=price($row['price_ttc'], 1, '', 1, - 1, - 1, $conf->currency);
		$rows[] = $row;
	}
	echo json_encode($rows);
}