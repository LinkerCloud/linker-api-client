<?php

namespace Linker\Api\Model;

use DateTime;
use JMS\Serializer\Annotation as Serializer;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class SupplierOrder implements SupplierOrderInterface
{
    /**
     * @var string
     * @Type("string")
     */
    protected $id;

    /**
     * @var int
     * @Type("integer")
     */
    protected $supplier;

    /**
     * @var string
     * @Type("string")
     */
    protected $supplierId;

    /**
     * @var \Linker\Api\Model\SupplierOrderItemInterface[]
     * @Type("array<Linker\Api\Model\SupplierOrderItem>")
     */
    protected $items;

    /**
     * @var int
     * @Type("integer")
     */
    protected $externalId;

    /**
     * @var string
     * @Type("string")
     */
    protected $number;

    /**
     * @var int
     * @Type("integer")
     */
    protected $depotId;

    /**
     * @var DateTime
     * @Type("DateTime")
     */
    protected $orderDate;

    /**
     * @var DateTime
     * @Type("DateTime")
     */
    protected $executionDate;

    /**
     * @var float
     * @Type("float")
     */
    protected $installment;

    /**
     * @var int
     *
     * @Type("integer")
     */
    protected $priority;

    /**
     * @var string
     * @Type("string")
     */
    protected $clientOrderNumber;

    /**
     * @var int
     * @Type("integer")
     */
    protected $type;

    /**
     * @var int
     * @Type("integer")
     */
    protected $autoNumber;

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
    protected $exchangeRate;

    /**
     * @var string
     * @Type("string")
     */
    protected $currencySymbol;

    /**
     * @var boolean
     * @Type("boolean")
     */
    protected $documentInForeignCurrency;

    /**
     * @var DateTime
     * @Type("DateTime")
     */
    protected $exchangeRateDate;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("order_status")
     */
    protected $orderStatus;

    /**
     * @var string
     *
     * @Type("string")
     */
    protected $comments;

    /**
     * @var float
     *
     * @Type("float")
     */
    protected $discount;

    /**
     * @var boolean
     *
     * @Type("boolean")
     */
    protected $exportedToWMS;

    /**
     * @var \DateTime
     *
     * @Type("DateTime")
     */
    protected $exportedAt;

    /**
     * @var \Linker\Api\Model\SupplierInterface
     * @Type("Linker\Api\Model\Supplier")
     * @SerializedName("supplierObject")
     */
    protected $supplierObject;

    /**
     * @var boolean
     *
     * @Type("boolean")
     */
    protected $isReturn;

    /**
     * @var string
     *
     * @Type("string")
     * @SerializedName("returnNumber")
     */
    protected $returnNumber;

    /**
     * @var string
     *
     * @Type("string")
     * @SerializedName("orderNumber")
     */
    protected $orderNumber;

    /**
     * @var array
     * @Type("array")
     */
    protected $statusHistory;

    /**
     * @var string
     * @Type("string")
     */
    protected $wmsId;

    /**
     * @var integer
     * @Type("integer")
     */
    protected $numberOfParcels;

    /**
     * @var integer
     * @Type("integer")
     */
    protected $numberOfPallets;

    /**
     * @var integer
     * @Type("integer")
     */
    protected $numberOfContainers;

    /**
     * @var string
     * @Type("string")
     */
    protected $createdBy;

    /**
     * @var DateTime
     * @Type("DateTime")
     * @SerializedName("createdAt")
     */
    protected $createdAt;

    /**
     * @var DateTime
     * @Type("DateTime")
     * @SerializedName("updatedAt")
     */
    protected $updatedAt;

    /**
     * @return int
     */
    public function getId()
    {
        return (string)$this->id;
    }

    /**
     * @param int $id
     * @return SupplierOrder
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return int
     */
    public function getSupplier()
    {
        return $this->supplier;
    }

    /**
     * @param int $supplier
     * @return SupplierOrder
     */
    public function setSupplier($supplier)
    {
        $this->supplier = $supplier;
        return $this;
    }

    /**
     * @return string
     */
    public function getSupplierId()
    {
        return $this->supplierId;
    }

    /**
     * @param string $supplierId
     * @return SupplierOrderInterface
     */
    public function setSupplierId($supplierId)
    {
        $this->supplierId = $supplierId;
        return $this;
    }

    /**
     * @return SupplierOrderItemInterface[]
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @param SupplierOrderItemInterface[] $items
     * @return SupplierOrder
     */
    public function setItems($items)
    {
        $this->items = $items;
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
     * @return SupplierOrder
     */
    public function setExternalId($externalId)
    {
        $this->externalId = $externalId;
        return $this;
    }

    /**
     * @return string
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @param string $number
     * @return SupplierOrder
     */
    public function setNumber($number)
    {
        $this->number = $number;
        return $this;
    }

    /**
     * @return int
     */
    public function getDepotId()
    {
        return $this->depotId;
    }

    /**
     * @param int $depotId
     * @return SupplierOrder
     */
    public function setDepotId($depotId)
    {
        $this->depotId = $depotId;

        return $this;
    }

    /**
     * @return DateTime
     */
    public function getOrderDate()
    {
        return $this->orderDate;
    }

    /**
     * @param DateTime $orderDate
     * @return SupplierOrder
     */
    public function setOrderDate($orderDate)
    {
        $this->orderDate = $orderDate;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getExecutionDate()
    {
        return $this->executionDate;
    }

    /**
     * @param DateTime $executionDate
     * @return SupplierOrder
     */
    public function setExecutionDate($executionDate)
    {
        $this->executionDate = $executionDate;
        return $this;
    }

    /**
     * @return float
     */
    public function getInstallment()
    {
        return $this->installment;
    }

    /**
     * @param float $installment
     * @return SupplierOrder
     */
    public function setInstallment($installment)
    {
        $this->installment = $installment;
        return $this;
    }

    /**
     * @return int
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * @param int $priority
     * @return SupplierOrder
     */
    public function setPriority($priority)
    {
        $this->priority = $priority;
        return $this;
    }

    /**
     * @return string
     */
    public function getClientOrderNumber()
    {
        return $this->clientOrderNumber;
    }

    /**
     * @param string $clientOrderNumber
     * @return SupplierOrder
     */
    public function setClientOrderNumber($clientOrderNumber)
    {
        $this->clientOrderNumber = $clientOrderNumber;
        return $this;
    }

    /**
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param int $type
     * @return SupplierOrder
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return int
     */
    public function getAutoNumber()
    {
        return $this->autoNumber;
    }

    /**
     * @param int $autoNumber
     * @return SupplierOrder
     */
    public function setAutoNumber($autoNumber)
    {
        $this->autoNumber = $autoNumber;
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
     * @return SupplierOrder
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
     * @return SupplierOrder
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
     * @return SupplierOrder
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
     * @return SupplierOrder
     */
    public function setPriceNetInForeignCurrency($priceNetInForeignCurrency)
    {
        $this->priceNetInForeignCurrency = $priceNetInForeignCurrency;
        return $this;
    }

    /**
     * @return float
     */
    public function getExchangeRate()
    {
        return $this->exchangeRate;
    }

    /**
     * @param float $exchangeRate
     * @return SupplierOrder
     */
    public function setExchangeRate($exchangeRate)
    {
        $this->exchangeRate = $exchangeRate;
        return $this;
    }

    /**
     * @return float
     */
    public function getCurrencySymbol()
    {
        return $this->currencySymbol;
    }

    /**
     * @param float $currencySymbol
     * @return SupplierOrder
     */
    public function setCurrencySymbol($currencySymbol)
    {
        $this->currencySymbol = $currencySymbol;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isDocumentInForeignCurrency()
    {
        return $this->documentInForeignCurrency;
    }

    /**
     * @param boolean $documentInForeignCurrency
     * @return SupplierOrder
     */
    public function setDocumentInForeignCurrency($documentInForeignCurrency)
    {
        $this->documentInForeignCurrency = $documentInForeignCurrency;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getExchangeRateDate()
    {
        return $this->exchangeRateDate;
    }

    /**
     * @param DateTime $exchangeRateDate
     * @return SupplierOrder
     */
    public function setExchangeRateDate($exchangeRateDate)
    {
        $this->exchangeRateDate = $exchangeRateDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getOrderStatus()
    {
        return $this->orderStatus;
    }

    /**
     * @param string $orderStatus
     * @return SupplierOrder
     */
    public function setOrderStatus($orderStatus)
    {
        $this->orderStatus = $orderStatus;
        return $this;
    }

    /**
     * @return string
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * @param string $comments
     * @return SupplierOrder
     */
    public function setComments($comments)
    {
        $this->comments = $comments;
        return $this;
    }

    /**
     * @return float
     */
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * @param float $discount
     * @return SupplierOrder
     */
    public function setDiscount($discount)
    {
        $this->discount = $discount;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isExportedToWMS()
    {
        return $this->exportedToWMS;
    }

    /**
     * @param boolean $exportedToWMS
     * @return SupplierOrder
     */
    public function setExportedToWMS($exportedToWMS)
    {
        $this->exportedToWMS = $exportedToWMS;
        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getExportedAt()
    {
        return $this->exportedAt;
    }

    /**
     * @inheritdoc
     */
    public function setExportedAt($exportedAt)
    {
        $this->exportedAt = $exportedAt;

        return $this;
    }

    /**
     * @return SupplierInterface
     */
    public function getSupplierObject()
    {
        return $this->supplierObject;
    }

    /**
     * @param SupplierInterface $supplierObject
     * @return SupplierOrder
     */
    public function setSupplierObject($supplierObject)
    {
        $this->supplierObject = $supplierObject;

        return $this;
    }

    /**
     * @return boolean
     */
    public function isReturn()
    {
        return $this->isReturn;
    }

    /**
     * @param boolean $isReturn
     * @return SupplierOrderInterface
     */
    public function setIsReturn($isReturn)
    {
        $this->isReturn = $isReturn;
        return $this;
    }

    /**
     * @return string
     */
    public function getReturnNumber()
    {
        return $this->returnNumber;
    }

    /**
     * @param string $returnNumber
     * @return SupplierOrderInterface
     */
    public function setReturnNumber($returnNumber)
    {
        $this->returnNumber = $returnNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getOrderNumber()
    {
        return $this->orderNumber;
    }

    /**
     * @param string $orderNumber
     * @return SupplierOrderInterface
     */
    public function setOrderNumber($orderNumber)
    {
        $this->orderNumber = $orderNumber;
        return $this;
    }

    /**
     * @return array
     */
    public function getStatusHistory()
    {
        return $this->statusHistory;
    }

    /**
     * @param array $statusHistory
     * @return SupplierOrderInterface
     */
    public function setStatusHistory($statusHistory)
    {
        $this->statusHistory = $statusHistory;
        return $this;
    }

    /**
     * @return string
     */
    public function getWmsId()
    {
        return $this->wmsId;
    }

    /**
     * @param string $wmsId
     * @return SupplierOrderInterface
     */
    public function setWmsId($wmsId)
    {
        $this->wmsId = $wmsId;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param DateTime $createdAt
     * @return SupplierOrderInterface
     */
    public function setCreatedAt(DateTime $createdAt)
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * @param DateTime $updatedAt
     * @return SupplierOrderInterface
     */
    public function setUpdatedAt(DateTime $updatedAt)
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }

    /**
     * @return string
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }

    /**
     * @param string $createdBy
     * @return SupplierOrderInterface
     */
    public function setCreatedBy($createdBy)
    {
        $this->createdBy = $createdBy;
        return $this;
    }

    /**
     * @return int
     */
    public function getNumberOfParcels()
    {
        return $this->numberOfParcels;
    }

    /**
     * @param int $numberOfParcels
     * @return SupplierOrderInterface
     */
    public function setNumberOfParcels($numberOfParcels)
    {
        $this->numberOfParcels = $numberOfParcels;
        return $this;
    }

    /**
     * @return int
     */
    public function getNumberOfPallets()
    {
        return $this->numberOfPallets;
    }

    /**
     * @param int $numberOfPallets
     * @return SupplierOrderInterface
     */
    public function setNumberOfPallets($numberOfPallets)
    {
        $this->numberOfPallets = $numberOfPallets;
        return $this;
    }

    /**
     * @return int
     */
    public function getNumberOfContainers()
    {
        return $this->numberOfContainers;
    }

    /**
     * @param int $numberOfContainers
     * @return SupplierOrder
     */
    public function setNumberOfContainers($numberOfContainers)
    {
        $this->numberOfContainers = $numberOfContainers;
        return $this;
    }
}
