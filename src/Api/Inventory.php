<?php

namespace Mission11\Linnworks\Api;

class Inventory extends ApiClient
{
    public function AddInventoryItem(
        $itemDescription = '',
        $quantity = '',
        $inOrder = '',
        $due = '',
        $minimumLevel = '',
        $available = '',
        $isCompositeParent = true,
        $itemNumber = '',
        $itemTitle = '',
        $barcodeNumber = '',
        $metaData = '',
        $isBatchedStockType = false,
        $purchasePrice = '',
        $retailPrice = '',
        $taxRate = '',
        $postalServiceId = '',
        $postalServiceName = '',
        $categoryId = '',
        $categoryName = '',
        $packageGroupId = '',
        $packageGroupName = '',
        $height = '',
        $width = '',
        $depth = '',
        $weight = '',
        $creationDate = '',
        $inventoryTrackingType = '',
        $batchNumberScanRequired = true,
        $serialNumberScanRequired = true,
        $stockItemId = '',
        $stockItemIntId = ''
    ) {
        return $this->post('Inventory/AddInventoryItem', [
            [
                "ItemDescription" => $itemDescription,
                "Quantity" => $quantity,
                "InOrder" => $inOrder,
                "Due" => $due,
                "MinimumLevel" => $minimumLevel,
                "Available" => $available,
                "IsCompositeParent" => $isCompositeParent,
                "ItemNumber" => $itemNumber,
                "ItemTitle" => $itemTitle,
                "BarcodeNumber" => $barcodeNumber,
                "MetaData" => $metaData,
                "isBatchedStockType" => $isBatchedStockType,
                "PurchasePrice" => $purchasePrice,
                "RetailPrice" => $retailPrice,
                "TaxRate" => $taxRate,
                "PostalServiceId" => $postalServiceId,
                "PostalServiceName" => $postalServiceName,
                "CategoryId" => $categoryId,
                "CategoryName" => $categoryName,
                "PackageGroupId" => $packageGroupId,
                "PackageGroupName" => $packageGroupName,
                "Height" => $height,
                "Width" => $width,
                "Depth" => $depth,
                "Weight" => $weight,
                "CreationDate" => $creationDate,
                "InventoryTrackingType" => $inventoryTrackingType,
                "BatchNumberScanRequired" => $batchNumberScanRequired,
                "SerialNumberScanRequired" => $serialNumberScanRequired,
                "StockItemId" => $stockItemId,
                "StockItemIntId" => $stockItemIntId,
            ],
        ]);
    }
}
