<?php

namespace Linker\Api\Model;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

/**
 * Class SupplierOrderItem
 *
 */
class SupplierOrderItem implements SupplierOrderItemInterface
{

    /**
     * @var string
     * @Type("string")
     */
    protected $id;

    /**
     * @var SupplierOrderInterface
     * @Type("OrderBundle\Entity\SupplierOrder")
     */
    protected $order;

    /**
     * @var int
     * @Type("integer")
     */
    protected $externalId;

    /**
     * @var int
     * @Type("integer")
     */
    protected $productExternalId;

    /**
     * @var int
     * @Type("integer")
     */
    protected $variantExternalId;

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
    protected $vatCode;

    /**
     * @var int
     * @Type("integer")
     */
    protected $ordered;

    /**
     * @var int
     * @Type("integer")
     */
    protected $realized;

    /**
     * @var int
     * @Type("integer")
     */
    protected $toBook;

    /**
     * @var int
     * @Type("integer")
     */
    protected $toAchieve;

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
     * @var float
     * @Type("float")
     */
    protected $priceGrossInForeignCurrency;

    /**
     * @var float
     * @Type("float")
     */
    protected $priceNetInForeignCurrency;

    /**
     * @var float
     * @Type("float")
     */
    protected $converter;

    /**
     * @var string
     * @Type("string")
     */
    protected $unit;

    /**
     * @var float
     * @Type("float")
     */
    protected $margin;

    /**
     * @var string
     * @Type("string")
     */
    protected $description;

    /**
     * @var float
     * @Type("float")
     */
    protected $weight;

    /**
     * @var float
     * @Type("float")
     */
    protected $width;

    /**
     * @var float
     * @Type("float")
     */
    protected $length;

    /**
     * @var float
     * @Type("float")
     */
    protected $depth;

    /**
     * @var string
     * @Type("string")
     */
    protected $category;

    /**
     * @var \DateTime
     * 
     * @Type("DateTime")
     */
    protected $createdAt;

    /**
     * @var \DateTime
     * 
     * @Type("DateTime")
     */
    protected $updatedAt;

    /**
     * @var string
     * @Type("string")
     */
    protected $lotNumber;

    /**
     * @var string
     * @Type("string")
     */
    protected $expirationDate;

    /**
     * @var float
     * @Type("float")
     */
    protected $netPurchasePrice;

    /**
     * @var float
     * @Type("float")
     */
    protected $grossPurchasePrice;

    /**
     * @var array
     * @Type("array")
     */
    protected $sources;

    /**
     * @var int
     * @Type("integer")
     * @SerializedName("shipped_quantity")
     */
    protected $shippedQuantity;

    /**
     * @var int
     * @Type("integer")
     * @SerializedName("damaged_quantity")
     */
    protected $damagedQuantity;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return SupplierOrderItem
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return SupplierOrderInterface
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * @param SupplierOrderInterface $order
     * @return SupplierOrderItem
     */
    public function setOrder($order)
    {
        $this->order = $order;
        return $this;
    }

    /**
     * @return int
     */
    public function getExternalId()
    {
        return $this->externalId;
    }

    /**
     * @param int $externalId
     * @return SupplierOrderItem
     */
    public function setExternalId($externalId)
    {
        $this->externalId = $externalId;
        return $this;
    }

    /**
     * @return int
     */
    public function getProductExternalId()
    {
        return $this->productExternalId;
    }

    /**
     * @param int $productExternalId
     * @return SupplierOrderItem
     */
    public function setProductExternalId($productExternalId)
    {
        $this->productExternalId = $productExternalId;
        return $this;
    }

    /**
     * @return int
     */
    public function getVariantExternalId()
    {
        return $this->variantExternalId;
    }

    /**
     * @param int $variantExternalId
     * @return SupplierOrderItem
     */
    public function setVariantExternalId($variantExternalId)
    {
        $this->variantExternalId = $variantExternalId;
        return $this;
    }

    /**
     * @return string
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * @param string $sku
     * @return SupplierOrderItem
     */
    public function setSku($sku)
    {
        $this->sku = $sku;
        return $this;
    }

    /**
     * @return string
     */
    public function getEan()
    {
        return $this->ean;
    }

    /**
     * @param string $ean
     * @return SupplierOrderItemInterface
     */
    public function setEan($ean)
    {
        $this->ean = $ean;
        return $this;
    }

    /**
     * @return string
     */
    public function getVatCode()
    {
        return $this->vatCode;
    }

    /**
     * @param string $vatCode
     * @return SupplierOrderItem
     */
    public function setVatCode($vatCode)
    {
        $this->vatCode = $vatCode;
        return $this;
    }

    /**
     * @return int
     */
    public function getOrdered()
    {
        return (int)$this->ordered;
    }

    /**
     * @param int $ordered
     * @return SupplierOrderItem
     */
    public function setOrdered($ordered)
    {
        $this->ordered = (int)$ordered;
        return $this;
    }

    /**
     * @return int
     */
    public function getRealized()
    {
        return $this->realized;
    }

    /**
     * @param int $realized
     * @return SupplierOrderItem
     */
    public function setRealized($realized)
    {
        $this->realized = $realized;
        return $this;
    }

    /**
     * @return int
     */
    public function getToBook()
    {
        return $this->toBook;
    }

    /**
     * @param int $toBook
     * @return SupplierOrderItem
     */
    public function setToBook($toBook)
    {
        $this->toBook = $toBook;
        return $this;
    }

    /**
     * @return int
     */
    public function getToAchieve()
    {
        return $this->toAchieve;
    }

    /**
     * @param int $toAchieve
     * @return SupplierOrderItem
     */
    public function setToAchieve($toAchieve)
    {
        $this->toAchieve = $toAchieve;
        return $this;
    }

    /**
     * @return float
     */
    public function getPriceGross()
    {
        return $this->priceGross;
    }

    /**
     * @param float $priceGross
     * @return SupplierOrderItem
     */
    public function setPriceGross($priceGross)
    {
        $this->priceGross = $priceGross;
        return $this;
    }

    /**
     * @return float
     */
    public function getPriceNet()
    {
        return $this->priceNet;
    }

    /**
     * @param float $priceNet
     * @return SupplierOrderItem
     */
    public function setPriceNet($priceNet)
    {
        $this->priceNet = $priceNet;
        return $this;
    }

    /**
     * @return float
     */
    public function getPriceGrossInForeignCurrency()
    {
        return $this->priceGrossInForeignCurrency;
    }

    /**
     * @param float $priceGrossInForeignCurrency
     * @return SupplierOrderItem
     */
    public function setPriceGrossInForeignCurrency($priceGrossInForeignCurrency)
    {
        $this->priceGrossInForeignCurrency = $priceGrossInForeignCurrency;
        return $this;
    }

    /**
     * @return float
     */
    public function getPriceNetInForeignCurrency()
    {
        return $this->priceNetInForeignCurrency;
    }

    /**
     * @param float $priceNetInForeignCurrency
     * @return SupplierOrderItem
     */
    public function setPriceNetInForeignCurrency($priceNetInForeignCurrency)
    {
        $this->priceNetInForeignCurrency = $priceNetInForeignCurrency;
        return $this;
    }

    /**
     * @return float
     */
    public function getConverter()
    {
        return $this->converter;
    }

    /**
     * @param float $converter
     * @return SupplierOrderItem
     */
    public function setConverter($converter)
    {
        $this->converter = $converter;
        return $this;
    }

    /**
     * @return string
     */
    public function getUnit()
    {
        return $this->unit;
    }

    /**
     * @param string $unit
     * @return SupplierOrderItem
     */
    public function setUnit($unit)
    {
        $this->unit = $unit;
        return $this;
    }

    /**
     * @return float
     */
    public function getMargin()
    {
        return $this->margin;
    }

    /**
     * @param float $margin
     * @return SupplierOrderItem
     */
    public function setMargin($margin)
    {
        $this->margin = $margin;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return SupplierOrderItem
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return float
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @param float $weight
     * @return SupplierOrderItem
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;
        return $this;
    }

    /**
     * @return float
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @param float $width
     * @return SupplierOrderItem
     */
    public function setWidth($width)
    {
        $this->width = $width;
        return $this;
    }

    /**
     * @return float
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * @param float $length
     * @return SupplierOrderItem
     */
    public function setLength($length)
    {
        $this->length = $length;
        return $this;
    }

    /**
     * @return float
     */
    public function getDepth()
    {
        return $this->depth;
    }

    /**
     * @param float $depth
     * @return SupplierOrderItem
     */
    public function setDepth($depth)
    {
        $this->depth = $depth;
        return $this;
    }

    /**
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param string $category
     * @return SupplierOrderItem
     */
    public function setCategory($category)
    {
        $this->category = $category;
        return $this;
    }

    /**
     * @return array
     */
    public function getSources()
    {
        return $this->sources;
    }

    /**
     * @param array $sources
     * @return SupplierOrderItem
     */
    public function setSources($sources)
    {
        $this->sources = $sources;
        return $this;
    }

    /**
     * @return string
     */
    public function getExpirationDate()
    {
        return $this->expirationDate;
    }

    /**
     * @param string $expirationDate
     * @return SupplierOrderItem
     */
    public function setExpirationDate($expirationDate)
    {
        $this->expirationDate = $expirationDate;
        return $this;
    }

    /**
     * @return float
     */
    public function getNetPurchasePrice()
    {
        return $this->netPurchasePrice;
    }

    /**
     * @param float $netPurchasePrice
     * @return SupplierOrderItem
     */
    public function setNetPurchasePrice($netPurchasePrice)
    {
        $this->netPurchasePrice = $netPurchasePrice;
        return $this;
    }

    /**
     * @return float
     */
    public function getGrossPurchasePrice()
    {
        return $this->grossPurchasePrice;
    }

    /**
     * @param float $grossPurchasePrice
     * @return SupplierOrderItem
     */
    public function setGrossPurchasePrice($grossPurchasePrice)
    {
        $this->grossPurchasePrice = $grossPurchasePrice;
        return $this;
    }

    /**
     * @return string
     */
    public function getLotNumber()
    {
        return $this->lotNumber;
    }

    /**
     * @param string $lotNumber
     */
    public function setLotNumber($lotNumber)
    {
        $this->lotNumber = $lotNumber;
    }

    /**
     * @return int
     */
    public function getShippedQuantity(): int
    {
        return $this->shippedQuantity;
    }

    /**
     * @param int $shippedQuantity
     */
    public function setShippedQuantity(int $shippedQuantity): void
    {
        $this->shippedQuantity = $shippedQuantity;
    }

    /**
     * @return int
     */
    public function getDamagedQuantity(): int
    {
        return $this->damagedQuantity;
    }

    /**
     * @param int $damagedQuantity
     */
    public function setDamagedQuantity(int $damagedQuantity): void
    {
        $this->damagedQuantity = $damagedQuantity;
    }
}
