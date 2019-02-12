<?php

namespace Linker\Api\Model;

use JMS\Serializer\Annotation\Type;

/**
 * Class OrderItem
 *
 */
class OrderItem implements OrderItemInterface
{
    /**
     * @var int
     * @Type("integer")
     */
    protected $id;

    /**
     * @var string
     * @Type("string")
     */
    protected $externalId;

    /**
     * @var string
     * @Type("string")
     */
    protected $productExternalId;

    /**
     * @var string
     * @Type("string")
     */
    protected $productVariantExternalId;

    /**
     * @var string
     * @Type("string")
     */
    protected $vatCode;

    /**
     * @var float
     * @Type("float")
     */
    protected $priceGross;

    /**
     * @var float
     * @Type("float")
     */
    protected $priceNet;

    /**
     * @var string
     * @Type("string")
     */
    protected $unit;

    /**
     * @var float
     * @Type("float")
     */
    protected $quantity;

    /**
     * @var string
     * @Type("string")
     */
    protected $sku;

    /**
     * @var string
     * @Type("string")
     */
    protected $ean;

    /**
     * @var string
     * @Type("string")
     */
    protected $description;

    /**
     * @var string
     * @Type("string")
     */
    protected $additionalInfo;

    /**
     * @var float
     * @Type("float")
     */
    protected $weight;

    /**
     * @var string
     * @Type("string")
     */
    protected $weightUnit;

    /**
     * @var float
     * @Type("float")
     */
    protected $length;

    /**
     * @var float
     * @Type("float")
     */
    protected $width;

    /**
     * @var float
     * @Type("float")
     */
    protected $depth;

    /**
     * @var string
     * @Type("string")
     */
    protected $dimensionsUnit;

    /**
     * @var string
     * @Type("string")
     */
    protected $origin;


    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getExternalId()
    {
        return $this->externalId;
    }

    /**
     * @param string $externalId
     * @return OrderItem
     */
    public function setExternalId($externalId)
    {
        $this->externalId = $externalId;
        return $this;
    }

    /**
     * @return string
     */
    public function getProductExternalId()
    {
        return $this->productExternalId;
    }

    /**
     * @param string $productExternalId
     * @return OrderItem
     */
    public function setProductExternalId($productExternalId)
    {
        $this->productExternalId = $productExternalId;
        return $this;
    }

    /**
     * @return string
     */
    public function getProductVariantExternalId()
    {
        return $this->productVariantExternalId;
    }

    /**
     * @param string $productVariantExternalId
     * @return OrderItem
     */
    public function setProductVariantExternalId($productVariantExternalId)
    {
        $this->productVariantExternalId = $productVariantExternalId;
        return $this;
    }

    public function getVatCode()
    {
        return $this->vatCode;
    }

    public function setVatCode($vatCode)
    {
        $this->vatCode = $vatCode;

        return $this;
    }

    public function getPriceGross()
    {
        return $this->priceGross;
    }

    public function setPriceGross($priceGross)
    {
        $this->priceGross = $priceGross;

        return $this;
    }

    public function getPriceNet()
    {
        return $this->priceNet;
    }

    public function setPriceNet($priceNet)
    {
        $this->priceNet = $priceNet;

        return $this;
    }

    public function getUnit()
    {
        return $this->unit;
    }

    public function setUnit($unit)
    {
        $this->unit = $unit;

        return $this;
    }

    public function getQuantity()
    {
        return $this->quantity;
    }

    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    public function getSku()
    {
        return $this->sku;
    }

    public function setSku($sku)
    {
        $this->sku = $sku;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getEan()
    {
        return $this->ean;
    }

    /**
     * @inheritdoc
     */
    public function setEan($ean)
    {
        $this->ean = $ean;
        return $this;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * {@inheritdoc}
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getWeightUnit()
    {
        return $this->weightUnit;
    }

    /**
     * {@inheritdoc}
     */
    public function setWeightUnit($weightUnit)
    {
        $this->weightUnit = $weightUnit;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * {@inheritdoc}
     */
    public function setLength($length)
    {
        $this->length = $length;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * {@inheritdoc}
     */
    public function setWidth($width)
    {
        $this->width = $width;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getDepth()
    {
        return $this->depth;
    }

    /**
     * {@inheritdoc}
     */
    public function setDepth($depth)
    {
        $this->depth = $depth;
        return $this;
    }

    /**
     * @return string
     */
    public function getDimensionsUnit()
    {
        return $this->dimensionsUnit;
    }

    /**
     * @param string $dimensionsUnit
     * @return OrderItem
     */
    public function setDimensionsUnit($dimensionsUnit)
    {
        $this->dimensionsUnit = $dimensionsUnit;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getAdditionalInfo()
    {
        return $this->additionalInfo;
    }

    /**
     * {@inheritdoc}
     */
    public function setAdditionalInfo($additionalInfo)
    {
        $this->additionalInfo = $additionalInfo;
        return $this;
    }

    /**
     * @return string
     */
    public function getOrigin()
    {
        return $this->origin;
    }

    /**
     * @param string $origin
     * @return OrderItem
     */
    public function setOrigin($origin)
    {
        $this->origin = $origin;
        return $this;
    }

}
