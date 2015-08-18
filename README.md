[![Latest Stable Version](https://poser.pugx.org/dmamontov/ms-restapi/v/stable.svg)](https://packagist.org/packages/dmamontov/ms-restapi)
[![License](https://poser.pugx.org/dmamontov/ms-restapi/license.svg)](https://packagist.org/packages/dmamontov/ms-restapi)
[![Total Downloads](https://poser.pugx.org/dmamontov/ms-restapi/downloads.svg)](https://packagist.org/packages/dmamontov/ms-restapi)

Moy Sklad API Client
====================

This class can Manage accounts of Moy Sklad using its REST API.

It can obtain an authorization token for a given account, so it can send HTTP requests to the [Moy Sklad Rest API](http://wiki.moysklad.ru/wiki/REST-%D1%81%D0%B5%D1%80%D0%B2%D0%B8%D1%81_%D1%81%D0%B8%D0%BD%D1%85%D1%80%D0%BE%D0%BD%D0%B8%D0%B7%D0%B0%D1%86%D0%B8%D0%B8_%D0%B4%D0%B0%D0%BD%D0%BD%D1%8B%D1%85) in order to perform several types of operations.

Currently it can the current accounts, set and get contacts, contact links, leads, companies, tasks, notes and fields.

## Requirements
* PHP version >5.0
* curl

## Installation

1) Install [composer](https://getcomposer.org/download/)

2) Follow in the project folder:
```bash
composer require dmamontov/ms-restapi ~1.0.0
```

In config `composer.json` your project will be added to the library `dmamontov/ms-restapi`, who settled in the folder `vendor/`. In the absence of a config file or folder with vendors they will be created.

If before your project is not used `composer`, connect the startup file vendors. To do this, enter the code in the project:
```php
require 'path/to/vendor/autoload.php';
```

## Examples of use

### Get unit of measurement.

``` php
$ms = new MSRestApi('admin@xxxx.ru', 'xxxxxxxxxx');

$uuid = '7e4b5318-44df-11e5-7a07-673d0083fdac';
$uomGet = $ms->uomGet($uuid);
```
### Creating unit of measurement

``` php
$ms = new MSRestApi('admin@xxxx.ru', 'xxxxxxxxxx');

$headerXml = '<?xml version="1.0" encoding="UTF-8"?><%s/>';

$newUom = new SimpleXMLElement(
                  sprintf($headerXml, 'uom'),
                  LIBXML_NOENT | LIBXML_NOCDATA |
                  LIBXML_COMPACT | LIBXML_PARSEHUGE
          );

$newUom->addAttribute('favourite', 'false');
$newUom->addAttribute('name', 'example');
$newUom->addChild('code', '999');
$newUom->addChild('externalcode', '999');
$newUom->addChild('description', 'Example 999');

$uomCreate = $ms->uomCreate($newUom);
```

## Available methods

### References
* `uomGet`
* `uomCreate`
* `uomDelete`
* `uomGetList`
* `uomUpdateList`
* `goodGet`
* `goodCreate`
* `goodDelete`
* `goodGetList`
* `goodUpdateList`
* `goodDeleteList`
* `goodFolderGet`
* `goodFolderCreate`
* `goodFolderDelete`
* `goodFolderGetList`
* `goodFolderUpdateList`
* `goodFolderDeleteList`
* `serviceGet`
* `serviceCreate`
* `serviceDelete`
* `serviceGetList`
* `serviceUpdateList`
* `serviceDeleteList`
* `warehouseGet`
* `warehouseCreate`
* `warehouseDelete`
* `warehouseGetList`
* `warehouseUpdateList`
* `warehouseDeleteList`
* `companyGet`
* `companyCreate`
* `companyDelete`
* `companyGetList`
* `companyUpdateList`
* `companyDeleteList`
* `myCompanyGet`
* `myCompanyCreate`
* `myCompanyDelete`
* `myCompanyGetList`
* `myCompanyUpdateList`
* `myCompanyDeleteList`
* `personGet`
* `personCreate`
* `personDelete`
* `personGetList`
* `personUpdateList`
* `personDeleteList`
* `employeeGet`
* `employeeCreate`
* `employeeDelete`
* `employeeGetList`
* `employeeUpdateList`
* `employeeDeleteList`
* `countryGet`
* `countryCreate`
* `countryDelete`
* `countryGetList`
* `countryUpdateList`
* `countryDeleteList`
* `consignmentGet`
* `consignmentCreate`
* `consignmentDelete`
* `consignmentGetList`
* `consignmentUpdateList`
* `consignmentDeleteList`
* `currencyGet`
* `currencyCreate`
* `currencyDelete`
* `currencyGetList`
* `currencyUpdateList`
* `currencyDeleteList`
* `processingPlanFolderGet`
* `processingPlanFolderCreate`
* `processingPlanFolderDelete`
* `processingPlanFolderGetList`
* `processingPlanFolderUpdateList`
* `processingPlanFolderDeleteList`
* `processingPlanGet`
* `processingPlanCreate`
* `processingPlanDelete`
* `processingPlanGetList`
* `processingPlanUpdateList`
* `processingPlanDeleteList`
* `contractGet`
* `contractCreate`
* `contractDelete`
* `contractGetList`
* `contractUpdateList`
* `contractDeleteList`
* `projectGet`
* `projectCreate`
* `projectDelete`
* `projectGetList`
* `projectUpdateList`
* `projectDeleteList`
* `gtdGet`
* `gtdCreate`
* `gtdDelete`
* `gtdGetList`
* `gtdUpdateList`
* `gtdDeleteList`
* `thingGet`
* `thingCreate`
* `thingDelete`
* `thingGetList`
* `thingUpdateList`
* `thingDeleteList`
* `lossReasonGet`
* `lossReasonCreate`
* `lossReasonDelete`
* `lossReasonGetList`
* `lossReasonUpdateList`
* `lossReasonDeleteList`
* `enterReasonGet`
* `enterReasonCreate`
* `enterReasonDelete`
* `enterReasonGetList`
* `enterReasonUpdateList`
* `enterReasonDeleteList`
* `customEntityGet`
* `customEntityCreate`
* `customEntityDelete`
* `customEntityGetList`
* `customEntityUpdateList`
* `customEntityDeleteList`
* `workflowGet`
* `workflowCreate`
* `workflowDelete`
* `workflowGetList`
* `workflowUpdateList`

### Documentation
* `supplyGet`
* `supplyCreate`
* `supplyDelete`
* `supplyGetList`
* `supplyUpdateList`
* `supplyDeleteList`
* `demandGet`
* `demandCreate`
* `demandDelete`
* `demandGetList`
* `demandUpdateList`
* `demandDeleteList`
* `lossGet`
* `lossCreate`
* `lossDelete`
* `lossGetList`
* `lossUpdateList`
* `lossDeleteList`
* `enterGet`
* `enterCreate`
* `enterDelete`
* `enterGetList`
* `enterUpdateList`
* `enterDeleteList`
* `salesReturnGet`
* `salesReturnCreate`
* `salesReturnDelete`
* `salesReturnGetList`
* `salesReturnUpdateList`
* `salesReturnDeleteList`
* `purchaseReturnGet`
* `purchaseReturnCreate`
* `purchaseReturnDelete`
* `purchaseReturnGetList`
* `purchaseReturnUpdateList`
* `purchaseReturnDeleteList`
* `customerOrderGet`
* `customerOrderCreate`
* `customerOrderDelete`
* `customerOrderGetList`
* `customerOrderUpdateList`
* `customerOrderDeleteList`
* `purchaseOrderGet`
* `purchaseOrderCreate`
* `purchaseOrderDelete`
* `purchaseOrderGetList`
* `purchaseOrderUpdateList`
* `purchaseOrderDeleteList`
* `internalOrderGet`
* `internalOrderCreate`
* `internalOrderDelete`
* `internalOrderGetList`
* `internalOrderUpdateList`
* `internalOrderDeleteList`
* `processingOrderGet`
* `processingOrderCreate`
* `processingOrderDelete`
* `processingOrderGetList`
* `processingOrderUpdateList`
* `processingOrderDeleteList`
* `processingGet`
* `processingCreate`
* `processingDelete`
* `processingGetList`
* `processingUpdateList`
* `processingDeleteList`
* `moveGet`
* `moveCreate`
* `moveDelete`
* `moveGetList`
* `moveUpdateList`
* `moveDeleteList`
* `inventoryGet`
* `inventoryCreate`
* `inventoryDelete`
* `inventoryGetList`
* `inventoryUpdateList`
* `inventoryDeleteList`
* `cashInGet`
* `cashInCreate`
* `cashInDelete`
* `cashInGetList`
* `cashInUpdateList`
* `cashInDeleteList`
* `cashOutGet`
* `cashOutCreate`
* `cashOutDelete`
* `cashOutGetList`
* `cashOutUpdateList`
* `cashOutDeleteList`
* `paymentInGet`
* `paymentInCreate`
* `paymentInDelete`
* `paymentInGetList`
* `paymentInUpdateList`
* `paymentInDeleteList`
* `paymentOutGet`
* `paymentOutCreate`
* `paymentOutDelete`
* `paymentOutGetList`
* `paymentOutUpdateList`
* `paymentOutDeleteList`
* `retailDemandGet`
* `retailDemandCreate`
* `retailDemandDelete`
* `retailDemandGetList`
* `retailDemandUpdateList`
* `retailDemandDeleteList`
* `retailSalesReturnGet`
* `retailSalesReturnCreate`
* `retailSalesReturnDelete`
* `retailSalesReturnGetList`
* `retailSalesReturnUpdateList`
* `retailSalesReturnDeleteList`
