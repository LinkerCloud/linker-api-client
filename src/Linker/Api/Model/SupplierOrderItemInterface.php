<?php

namespace Linker\Api\Model;

/**
 * Interface SupplierOrderItemInterface
 *
 */
interface SupplierOrderItemInterface
{
    /**
     * @return int
     */
    public function getId();

    /**
     * @param int $id
     * @return SupplierOrderItemInterface
     */
    public function setId($id);

    /**
     * @return SupplierOrderInterface
     */
    public function getOrder();

    /**
     * @param SupplierOrderInterface $order
     * @return SupplierOrderItemInterface
     */
    public function setOrder($order);

    /**
     * @return int
     */
    public function getExternalId();

    /**
     * @param int $externalId
     * @return SupplierOrderItemInterface
     */
    public function setExternalId($externalId);

    /**
     * @return int
     */
    public function getProductExternalId();

    /**
     * @param int $productExternalId
     * @return SupplierOrderItemInterface
     */
    public function setProductExternalId($productExternalId);

    /**
     * @return int
     */
    public function getVariantExternalId();

    /**
     * @param int $variantExternalId
     * @return SupplierOrderItemInterface
     */
    public function setVariantExternalId($variantExternalId);

    /**
     * @return string
     */
    public function getSku();

    /**
     * @param string $sku
     * @return SupplierOrderItemInterface
     */
    public function setSku($sku);

    /**
     * @return string
     */
    public function getEan();

    /**
     * @param string $ean
     * @return SupplierOrderItemInterface
     */
    public function setEan($ean);

    /**
     * @return string
     */
    public function getVatCode();

    /**
     * @param string $vatCode
     * @return SupplierOrderItemInterface
     */
    public function setVatCode($vatCode);

    /**
     * @return int
     */
    public function getOrdered();

    /**
     * @param int $ordered
     * @return SupplierOrderItemInterface
     */
    public function setOrdered($ordered);

    /**
     * @return int
     */
    public function getRealized();

    /**
     * @param int $realized
     * @return SupplierOrderItemInterface
     */
    public function setRealized($realized);

    /**
     * @return int
     */
    public function getToBook();

    /**
     * @param int $toBook
     * @return SupplierOrderItemInterface
     */
    public function setToBook($toBook);

    /**
     * @return int
     */
    public function getToAchieve();

    /**
     * @param int $toAchieve
     * @return SupplierOrderItemInterface
     */
    public function setToAchieve($toAchieve);

    /**
     * @return float
     */
    public function getPriceGross();

    /**
     * @param float $priceGross
     * @return SupplierOrderItemInterface
     */
    public function setPriceGross($priceGross);

    /**
     * @return float
     */
    public function getPriceNet();

    /**
     * @param float $priceNet
     * @return SupplierOrderItemInterface
     */
    public function setPriceNet($priceNet);

    /**
     * @return float
     */
    public function getPriceGrossInForeignCurrency();

    /**
     * @param float $priceGrossInForeignCurrency
     * @return SupplierOrderItemInterface
     */
    public function setPriceGrossInForeignCurrency($priceGrossInForeignCurrency);

    /**
     * @return float
     */
    public function getPriceNetInForeignCurrency();

    /**
     * @param float $priceNetInForeignCurrency
     * @return SupplierOrderItemInterface
     */
    public function setPriceNetInForeignCurrency($priceNetInForeignCurrency);

    /**
     * @return float
     */
    public function getConverter();

    /**
     * @param float $converter
     * @return SupplierOrderItemInterface
     */
    public function setConverter($converter);

    /**
     * @return string
     */
    public function getUnit();

    /**
     * @param string $unit
     * @return SupplierOrderItemInterface
     */
    public function setUnit($unit);

    /**
     * @return float
     */
    public function getMargin();

    /**
     * @param float $margin
     * @return SupplierOrderItemInterface
     */
    public function setMargin($margin);

    /**
     * @return string
     */
    public function getDescription();

    /**
     * @param string $description
     * @return SupplierOrderItemInterface
     */
    public function setDescription($description);

    /**
     * @return float
     */
    public function getWeight();

    /**
     * @param float $weight
     * @return SupplierOrderItemInterface
     */
    public function setWeight($weight);

    /**
     * @return float
     */
    public function getWidth();

    /**
     * @param float $width
     * @return SupplierOrderItemInterface
     */
    public function setWidth($width);

    /**
     * @return float
     */
    public function getLength();

    /**
     * @param float $length
     * @return SupplierOrderItemInterface
     */
    public function setLength($length);

    /**
     * @return float
     */
    public function getDepth();

    /**
     * @param float $depth
     * @return SupplierOrderItemInterface
     */
    public function setDepth($depth);

    /**
     * @return string
     */
    public function getCategory();

    /**
     * @param string $category
     * @return SupplierOrderItemInterface
     */
    public function setCategory($category);

    /**
     * @return array
     */
    public function getSources();

    /**
     * @param array $sources
     * @return SupplierOrderItem
     */
    public function setSources($sources);

    /**
     * @return string
     */
    public function getExpirationDate();

    /**
     * @param string $expirationDate
     * @return SupplierOrderItemInterface
     */
    public function setExpirationDate($expirationDate);

    /**
     * @return float
     */
    public function getNetPurchasePrice();

    /**
     * @param float $netPurchasePrice
     * @return SupplierOrderItemInterface
     */
    public function setNetPurchasePrice($netPurchasePrice);

    /**
     * @return float
     */
    public function getGrossPurchasePrice();

    /**
     * @param float $grossPurchasePrice
     * @return SupplierOrderItemInterface
     */
    public function setGrossPurchasePrice($grossPurchasePrice);

    /**
     * @return string
     */
    public function getLotNumber();

    /**
     * @param string $lotNumber
     * @return OrderItem
     */
    public function setLotNumber($lotNumber);

    /**
     * @return int
     */
    public function getShippedQuantity(): int;

    /**
     * @param int $shippedQuantity
     */
    public function setShippedQuantity(int $shippedQuantity);

    /**
     * @return int
     */
    public function getDamagedQuantity(): int;

    /**
     * @param int $damagedQuantity
     */
    public function setDamagedQuantity(int $damagedQuantity);
}
