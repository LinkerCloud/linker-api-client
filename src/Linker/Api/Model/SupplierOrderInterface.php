<?php

namespace Linker\Api\Model;

use DateTime;

/**
 * Interface SupplierOrderInterface
 *
 */
interface SupplierOrderInterface
{
    /**
     * @return int
     */
    public function getId();

    /**
     * @param int $id
     * @return SupplierOrderInterface
     */
    public function setId($id);

    /**
     * @return int
     */
    public function getSupplier();

    /**
     * @param int $supplier
     * @return SupplierOrderInterface
     */
    public function setSupplier($supplier);

    /**
     * @return string
     */
    public function getSupplierId();

    /**
     * @param string $supplierId
     * @return SupplierOrderInterface
     */
    public function setSupplierId($supplierId);

    /**
     * @return SupplierOrderItemInterface[]
     */
    public function getItems();

    /**
     * @param SupplierOrderItemInterface[] $items
     * @return SupplierOrderInterface
     */
    public function setItems($items);

    /**
     * @return int
     */
    public function getExternalId();

    /**
     * @param int $externalId
     * @return SupplierOrderInterface
     */
    public function setExternalId($externalId);

    /**
     * @return string
     */
    public function getNumber();

    /**
     * @param string $number
     * @return SupplierOrderInterface
     */
    public function setNumber($number);

    /**
     * @return int
     */
    public function getDepotId();

    /**
     * @param int $depotId
     * @return SupplierOrderInterface
     */
    public function setDepotId($depotId);

    /**
     * @return DateTime
     */
    public function getOrderDate();

    /**
     * @param DateTime $orderDate
     * @return SupplierOrderInterface
     */
    public function setOrderDate($orderDate);

    /**
     * @return DateTime
     */
    public function getExecutionDate();

    /**
     * @param DateTime $executionDate
     * @return SupplierOrderInterface
     */
    public function setExecutionDate($executionDate);

    /**
     * @return float
     */
    public function getInstallment();

    /**
     * @param float $installment
     * @return SupplierOrderInterface
     */
    public function setInstallment($installment);

    /**
     * @return int
     */
    public function getPriority();

    /**
     * @param int $priority
     * @return SupplierOrderInterface
     */
    public function setPriority($priority);

    /**
     * @return string
     */
    public function getClientOrderNumber();

    /**
     * @param string $clientOrderNumber
     * @return SupplierOrderInterface
     */
    public function setClientOrderNumber($clientOrderNumber);

    /**
     * @return int
     */
    public function getType();

    /**
     * @param int $type
     * @return SupplierOrderInterface
     */
    public function setType($type);

    /**
     * @return int
     */
    public function getAutoNumber();

    /**
     * @param int $autoNumber
     * @return SupplierOrderInterface
     */
    public function setAutoNumber($autoNumber);

    /**
     * @return float
     */
    public function getPriceGross();

    /**
     * @param float $priceGross
     * @return SupplierOrderInterface
     */
    public function setPriceGross($priceGross);

    /**
     * @return float
     */
    public function getPriceNet();

    /**
     * @param float $priceNet
     * @return SupplierOrderInterface
     */
    public function setPriceNet($priceNet);

    /**
     * @return float
     */
    public function getPriceGrossInForeignCurrency();

    /**
     * @param float $priceGrossInForeignCurrency
     * @return SupplierOrderInterface
     */
    public function setPriceGrossInForeignCurrency($priceGrossInForeignCurrency);

    /**
     * @return float
     */
    public function getPriceNetInForeignCurrency();

    /**
     * @param float $priceNetInForeignCurrency
     * @return SupplierOrderInterface
     */
    public function setPriceNetInForeignCurrency($priceNetInForeignCurrency);

    /**
     * @return float
     */
    public function getExchangeRate();

    /**
     * @param float $exchangeRate
     * @return SupplierOrderInterface
     */
    public function setExchangeRate($exchangeRate);

    /**
     * @return float
     */
    public function getCurrencySymbol();

    /**
     * @param float $currencySymbol
     * @return SupplierOrderInterface
     */
    public function setCurrencySymbol($currencySymbol);

    /**
     * @return boolean
     */
    public function isDocumentInForeignCurrency();

    /**
     * @param boolean $documentInForeignCurrency
     * @return SupplierOrderInterface
     */
    public function setDocumentInForeignCurrency($documentInForeignCurrency);

    /**
     * @return DateTime
     */
    public function getExchangeRateDate();

    /**
     * @param DateTime $exchangeRateDate
     * @return SupplierOrderInterface
     */
    public function setExchangeRateDate($exchangeRateDate);

    /**
     * @return string
     */
    public function getOrderStatus();

    /**
     * @param string $orderStatus
     * @return SupplierOrderInterface
     */
    public function setOrderStatus($orderStatus);

    /**
     * @return string
     */
    public function getComments();

    /**
     * @param string $comments
     * @return SupplierOrderInterface
     */
    public function setComments($comments);

    /**
     * @return float
     */
    public function getDiscount();

    /**
     * @param float $discount
     * @return SupplierOrderInterface
     */
    public function setDiscount($discount);

    /**
     * @return boolean
     */
    public function isExportedToWMS();

    /**
     * @param boolean $exportedToWMS
     * @return SupplierOrderInterface
     */
    public function setExportedToWMS($exportedToWMS);

    /**
     * @return DateTime
     */
    public function getExportedAt();

    /**
     * @param DateTime $exportedAt
     * @return SupplierOrderInterface
     */
    public function setExportedAt($exportedAt);

    /**
     * @return SupplierInterface
     */
    public function getSupplierObject();

    /**
     * @param SupplierInterface $supplierObject
     * @return SupplierOrderInterface
     */
    public function setSupplierObject($supplierObject);

    /**
     * @return boolean
     */
    public function isReturn();

    /**
     * @param boolean $isReturn
     * @return SupplierOrderInterface
     */
    public function setIsReturn($isReturn);

    /**
     * @return string
     */
    public function getReturnNumber();

    /**
     * @param string $returnNumber
     * @return SupplierOrderInterface
     */
    public function setReturnNumber($returnNumber);

    /**
     * @return string
     */
    public function getOrderNumber();

    /**
     * @param string $orderNumber
     * @return SupplierOrderInterface
     */
    public function setOrderNumber($orderNumber);

    /**
     * @return array
     */
    public function getStatusHistory();

    /**
     * @param array $statusHistory
     * @return SupplierOrderInterface
     */
    public function setStatusHistory($statusHistory);

    /**
     * @return string
     */
    public function getWmsId();

    /**
     * @param string $wmsId
     * @return SupplierOrderInterface
     */
    public function setWmsId($wmsId);

    /**
     * @return DateTime
     */
    public function getCreatedAt();

    /**
     * @param DateTime $createdAt
     * @return SupplierOrderInterface
     */
    public function setCreatedAt(DateTime $createdAt);

    /**
     * @return DateTime
     */
    public function getUpdatedAt();

    /**
     * @param DateTime $updatedAt
     * @return SupplierOrderInterface
     */
    public function setUpdatedAt(DateTime $updatedAt);

    /**
     * @return string
     */
    public function getCreatedBy();

    /**
     * @param string $createdBy
     * @return SupplierOrderInterface
     */
    public function setCreatedBy($createdBy);

    /**
     * @return int
     */
    public function getNumberOfParcels();

    /**
     * @param int $numberOfParcels
     * @return SupplierOrderInterface
     */
    public function setNumberOfParcels($numberOfParcels);

    /**
     * @return int
     */
    public function getNumberOfPallets();

    /**
     * @param int $numberOfPallets
     * @return SupplierOrderInterface
     */
    public function setNumberOfPallets($numberOfPallets);

    /**
     * @return int
     */
    public function getNumberOfContainers();

    /**
     * @param int $numberOfContainers
     * @return SupplierOrder
     */
    public function setNumberOfContainers($numberOfContainers);
}
