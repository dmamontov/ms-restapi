<?php
require 'MSRestApi.php';

$ms = new MSRestApi('admin@xxxxxxx', 'xxxxxxxxx');

$uuid = '7e4b5318-44df-11e5-7a07-673d0083fdac';
$uomGet = $ms->uomGet($uuid);

$headerXml = '<?xml version="1.0" encoding="UTF-8"?><%s/>';

$newUom = new SimpleXMLElement(sprintf($headerXml, 'uom'), LIBXML_NOENT |LIBXML_NOCDATA | LIBXML_COMPACT | LIBXML_PARSEHUGE);
$newUom->addAttribute('favourite', 'false');
$newUom->addAttribute('name', 'example');
$newUom->addChild('code', '999');
$newUom->addChild('externalcode', '999');
$newUom->addChild('description', 'Example 999');

$uomCreate = $ms->uomCreate($newUom);

$uomDelete = $ms->uomDelete($uuid);

$uomGetList = $ms->uomGetList(array('code' => '<=111'));
?>
