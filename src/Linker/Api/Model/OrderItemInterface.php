<?php

namespace Linker\Api\Model;

/**
 * Interface OrderItemInterface
 *
 */
interface OrderItemInterface
{
    /**
     * @return int
     */
    public function getId();

    /**
     * @param int $id
     * @return OrderItemInterface
     */
    public function setId($id);

    /**
     * @return string
     */
    public function getExternalId();

    /**
     * @param string $externalId
     * @return OrderItem
     */
    public function setExternalId($externalId);

    /**
     * @return string
     */
    public function getProductExternalId();

    /**
     * @param string $productExternalId
     * @return OrderItem
     */
    public function setProductExternalId($productExternalId);

    /**
     * @return string
     */
    public function getProductVariantExternalId();

    /**
     * @param string $productVariantExternalId
     * @return OrderItem
     */
    public function setProductVariantExternalId($productVariantExternalId);

    /**
     * @return string
     */
    public function getVatCode();

    /**
     * @param string $vatCode
     * @return OrderItemInterface
     */
    public function setVatCode($vatCode);

    /**
     * @return float
     */
    public function getPriceGross();

    /**
     * @param float $priceGross
     * @return OrderItemInterface
     */
    public function setPriceGross($priceGross);

    /**
     * @return float
     */
    public function getPriceNet();

    /**
     * @param float $priceNet
     * @return OrderItemInterface
     */
    public function setPriceNet($priceNet);

    /**
     * @return string
     */
    public function getUnit();

    /**
     * @param string $unit
     * @return OrderItemInterface
     */
    public function setUnit($unit);

    /**
     * @return float
     */
    public function getQuantity();

    /**
     * @param float $quantity
     * @return OrderItemInterface
     */
    public function setQuantity($quantity);

    /**
     * @return string
     */
    public function getSku();

    /**
     * @param string $sku
     * @return OrderItemInterface
     */
    public function setSku($sku);

    /**
     * @return string
     */
    public function getDescription();

    /**
     * @param string $description
     * @return OrderItemInterface
     */
    public function setDescription($description);

    /**
     * @return float
     */
    public function getWeight();

    /**
     * @param float $weight
     * @return OrderItem
     */
    public function setWeight($weight);

    /**
     * @return string
     */
    public function getWeightUnit();

    /**
     * @param $unitWeight
     * @return OrderItem
     */
    public function setWeightUnit($unitWeight);

    /**
     * @return float
     */
    public function getLength();

    /**
     * @param float $length
     * @return OrderItem
     */
    public function setLength($length);

    /**
     * @return float
     */
    public function getWidth();

    /**
     * @param float $width
     * @return OrderItem
     */
    public function setWidth($width);

    /**
     * @return float
     */
    public function getDepth();

    /**
     * @param float $depth
     * @return OrderItem
     */
    public function setDepth($depth);

    /**
     * @return string
     */
    public function getAdditionalInfo();

    /**
     * @param string $additionalInfo
     * @return OrderItem
     */
    public function setAdditionalInfo($additionalInfo);

    /**
     * @return string
     */
    public function getOrigin();

    /**
     * @param string $origin
     * @return OrderItem
     */
    public function setOrigin($origin);

    /**
     * @return string
     */
    public function getDimensionsUnit();

    /**
     * @param string $dimensionsUnit
     * @return OrderItem
     */
    public function setDimensionsUnit($dimensionsUnit);
}
