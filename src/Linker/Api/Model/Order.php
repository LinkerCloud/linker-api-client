<?php

namespace Linker\Api\Model;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class Order implements OrderInterface
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
    protected $externalId;

    /**
     * @var string
     * @Type("string")
     */
    protected $additionalOrderNumber;

    /**
     * @var int
     * @Type("integer")
     */
    protected $depotId;

    /**
     * @var string
     * @Type("string")
     */
    protected $srcClientId;

    /**
     * @var string
     * @Type("string")
     */
    protected $number;

    /**
     * @var string
     * @Type("string")
     */
    protected $invoiceNumber;

    /**
     * @var string
     * @Type("string")
     */
    protected $invoiceId;

    /**
     * @var string
     * @Type("string")
     */
    protected $receiptFiscalNumber;

    /**
     * @var string
     * @Type("string")
     */
    protected $receiptFiscalId;

    /**
     * @var string
     * @Type("string")
     */
    protected $goodsDispatchNumber;

    /**
     * @var string
     * @Type("string")
     */
    protected $goodsDispatchId;

    /**
     * @var string
     * @Type("string")
     */
    protected $clientOrderNumber;

    /**
     * @var int
     * @Type("integer")
     */
    protected $customer;

    /**
     * @var \DateTime
     * @Type("DateTime")
     */
    protected $orderDate;

    /**
     * @var \DateTime
     * @Type("DateTime")
     */
    protected $executionDate;

    /**
     * @var \DateTime
     * @Type("DateTime")
     */
    protected $importDate;

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
    protected $shipmentPrice;

    /**
     * @var string
     * @Type("string")
     */
    protected $currencySymbol;

    /**
     * @var string
     * @Type("string")
     */
    protected $orderStatus;

    /**
     * @var string
     * @Type("string")
     */
    protected $comments;

    /**
     * @var float
     * @Type("float")
     */
    protected $discount;

    /**
     * @var string
     * @Type("string")
     */
    protected $carrier;

    /**
     * @var string
     * @Type("string")
     */
    protected $deliveryCountry;

    /**
     * @var string
     * @Type("string")
     */
    protected $deliveryPostCode;

    /**
     * @var string
     * @Type("string")
     */
    protected $deliveryCity;

    /**
     * @var string
     * @Type("string")
     */
    protected $deliveryStreet;

    /**
     * @var string
     * @Type("string")
     */
    protected $deliveryCompany;

    /**
     * @var string
     * @Type("string")
     */
    protected $deliveryRecipient;

    /**
     * @var string
     * @Type("string")
     */
    protected $deliveryRecipientLogin;

    /**
     * @var string
     * @Type("string")
     */
    protected $deliveryPhone;

    /**
     * @var string
     * @Type("string")
     */
    protected $deliveryEmail;

    /**
     * @var string
     * @Type("string")
     */
    protected $deliveryPointName;

    /**
     * @var string
     * @Type("string")
     */
    protected $deliveryPointAddress;

    /**
     * @var string
     * @Type("string")
     */
    protected $deliveryPointPostcode;

    /**
     * @var string
     * @Type("string")
     */
    protected $deliveryPointCity;

    /**
     * @var array
     * @Type("array")
     */
    protected $deliveryConfiguration;

    /**
     * @var string
     * @Type("string")
     */
    protected $paymentMethod;

    /**
     * @var string
     * @Type("string")
     */
    protected $billingFirstName;

    /**
     * @var string
     * @Type("string")
     */
    protected $billingLastName;

    /**
     * @var string
     * @Type("string")
     */
    protected $billingCompany;

    /**
     * @var string
     * @Type("string")
     */
    protected $billingVatId;

    /**
     * @var string
     * @Type("string")
     */
    protected $billingCity;

    /**
     * @var string
     * @Type("string")
     */
    protected $billingPostCode;

    /**
     * @var string
     * @Type("string")
     */
    protected $billingStreet1;

    /**
     * @var string
     * @Type("string")
     */
    protected $billingStreet2;

    /**
     * @var string
     * @Type("string")
     */
    protected $billingState;

    /**
     * @var string
     * @Type("string")
     */
    protected $billingCountry;

    /**
     * @var string
     * @Type("string")
     */
    protected $billingPhone;

    /**
     * @var string
     * @Type("string")
     */
    protected $billingEmail;

    /**
     * @var string
     * @Type("string")
     */
    protected $billingCountryCode;

    /**
     * @var bool
     * @Type("boolean")
     */
    protected $cod;

    /**
     * @var float
     * @Type("float")
     */
    protected $codAmount;

    /**
     * @var string
     * @Type("string")
     */
    protected $codAccountNumber;

    /**
     * @var \Linker\Api\Model\OrderItemInterface[]
     * @Type("array<Linker\Api\Model\OrderItem>")
     */
    protected $items;

    /**
     * @var \Linker\Api\Model\CustomerInterface
     * @Type("Linker\Api\Model\Customer")
     * @SerializedName("customerObject")
     */
    protected $customerObject;

    /**
     * @Type("array")
     * @var array
     */
    protected $externalDeliveryIds;

    /**
     * @Type("array")
     * @var array
     */
    protected $externalDeliveryIdsCanceled;

    /**
     * @var string
     * @Type("string")
     */
    protected $integrationClientName;

    /**
     * @var array
     * @Type("array")
     */
    protected $statusHistory;

    /**
     * @var int
     * @Type("integer")
     */
    protected $internalDeliveryMethod;

    /**
     * @var int
     * @Type("integer")
     */
    protected $deliveryMethodMap;

    /**
     * @var string
     * @Type("string")
     */
    protected $returnDocumentsType;

    /**
     * @var string
     * @Type("string")
     */
    protected $deliveryHour;

    /**
     * @var string
     * @Type("string")
     */
    protected $transactionId;

    /**
     * @var string
     * @Type("string")
     */
    protected $externalSellerId;

    /**
     * Name of the system of origin
     *
     * @var string
     * @Type("string")
     */
    protected $origin = 'undefined';

    /**
     * @var \DateTime
     * @Type("DateTime")
     */
    protected $deliveryDueDate;

    /**
     * Delivery status
     *
     * @var string
     * @Type("string")
     */
    protected $deliveryStatus;

    /**
     * Package type
     *
     * @var string
     * @Type("string")
     */
    protected $packageType;

    /**
     * Number of packages
     *
     * @var integer
     * @Type("integer")
     */
    protected $numberOfPackages;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function setExternalId($externalId)
    {
        $this->externalId = $externalId;

        return $this;
    }

    public function getExternalId()
    {
        return $this->externalId;
    }

    public function getDepotId()
    {
        return $this->depotId;
    }

    public function setDepotId($depotId)
    {
        $this->depotId = $depotId;

        return $this;
    }

    public function getSrcClientId()
    {
        return $this->srcClientId;
    }

    public function setSrcClientId($srcClientId)
    {
        $this->srcClientId = $srcClientId;

        return $this;
    }

    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    public function getNumber()
    {
        return $this->number;
    }

    public function getClientOrderNumber()
    {
        return $this->clientOrderNumber;
    }

    public function setClientOrderNumber($clientOrderNumber)
    {
        $this->clientOrderNumber = $clientOrderNumber;

        return $this;
    }

    /**
     * @return string
     */
    public function getInvoiceNumber()
    {
        return $this->invoiceNumber;
    }

    /**
     * @param string $invoiceNumber
     * @return Order
     */
    public function setInvoiceNumber($invoiceNumber)
    {
        $this->invoiceNumber = $invoiceNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getInvoiceId()
    {
        return $this->invoiceId;
    }

    /**
     * @param string $invoiceId
     * @return Order
     */
    public function setInvoiceId($invoiceId)
    {
        $this->invoiceId = $invoiceId;
        return $this;
    }

    public function getCustomer()
    {
        return $this->customer;
    }

    public function setCustomer($customer)
    {
        $this->customer = $customer;

        return $this;
    }

    public function getOrderDate()
    {
        return $this->orderDate;
    }

    public function setOrderDate($orderDate)
    {
        $this->orderDate = $orderDate;

        return $this;
    }

    public function getExecutionDate()
    {
        return $this->executionDate;
    }

    public function setExecutionDate($executionDate)
    {
        $this->executionDate = $executionDate;

        return $this;
    }

    public function getImportDate()
    {
        return $this->importDate;
    }

    public function setImportDate($importDate)
    {
        $this->importDate = $importDate;

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

    public function getShipmentPrice()
    {
        return $this->shipmentPrice;
    }

    public function setShipmentPrice($shipmentPrice)
    {
        $this->shipmentPrice = $shipmentPrice;

        return $this;
    }

    public function getCurrencySymbol()
    {
        return $this->currencySymbol;
    }

    public function setCurrencySymbol($currencySymbol)
    {
        $this->currencySymbol = $currencySymbol;

        return $this;
    }

    public function getOrderStatus()
    {
        return $this->orderStatus;
    }

    public function setOrderStatus($orderStatus)
    {
        $this->orderStatus = $orderStatus;

        return $this;
    }

    public function getComments()
    {
        return $this->comments;
    }

    public function setComments($comments)
    {
        $this->comments = $comments;

        return $this;
    }

    public function getDiscount()
    {
        return $this->discount;
    }

    public function setDiscount($discount)
    {
        $this->discount = $discount;

        return $this;
    }

    public function getCarrier()
    {
        return $this->carrier;
    }

    public function setCarrier($carrier)
    {
        $this->carrier = $carrier;

        return $this;
    }

    public function getDeliveryCountry()
    {
        return trim(str_replace('?', ' ', strtoupper($this->deliveryCountry)));
    }

    public function setDeliveryCountry($deliveryCountry)
    {
        $this->deliveryCountry = $deliveryCountry;

        return $this;
    }

    public function getDeliveryPostCode()
    {
        return trim(str_replace('?', ' ', $this->deliveryPostCode));
    }

    public function setDeliveryPostCode($deliveryPostCode)
    {
        $this->deliveryPostCode = $deliveryPostCode;

        return $this;
    }

    public function getDeliveryCity()
    {
        return trim(str_replace('?', ' ', $this->deliveryCity));
    }

    public function setDeliveryCity($deliveryCity)
    {
        $this->deliveryCity = $deliveryCity;

        return $this;
    }

    public function getDeliveryStreet()
    {
        return trim(str_replace('?', ' ', $this->deliveryStreet));
    }

    public function setDeliveryStreet($deliveryStreet)
    {
        $this->deliveryStreet = $deliveryStreet;

        return $this;
    }

    public function getDeliveryCompany()
    {
        return trim(str_replace('?', ' ', $this->deliveryCompany));
    }

    public function setDeliveryCompany($deliveryCompany)
    {
        $this->deliveryCompany = $deliveryCompany;

        return $this;
    }

    public function getDeliveryRecipient()
    {
        return trim(str_replace('?', ' ', $this->deliveryRecipient));
    }

    public function setDeliveryRecipient($deliveryRecipient)
    {
        $this->deliveryRecipient = $deliveryRecipient;

        return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryRecipientLogin()
    {
        return $this->deliveryRecipientLogin;
    }

    /**
     * @param string $deliveryRecipientLogin
     * @return Order
     */
    public function setDeliveryRecipientLogin($deliveryRecipientLogin)
    {
        $this->deliveryRecipientLogin = $deliveryRecipientLogin;
        return $this;
    }

    public function getDeliveryPhone()
    {
        return str_replace('?', ' ', trim($this->deliveryPhone));
    }

    public function setDeliveryPhone($deliveryPhone)
    {
        $this->deliveryPhone = $deliveryPhone;

        return $this;
    }

    public function getDeliveryEmail()
    {
        return str_replace('?', ' ', trim($this->deliveryEmail));
    }

    public function setDeliveryEmail($deliveryEmail)
    {
        $this->deliveryEmail = $deliveryEmail;

        return $this;
    }

    public function getDeliveryPointName()
    {
        return $this->deliveryPointName;
    }

    public function setDeliveryPointName($deliveryPointName)
    {
        $this->deliveryPointName = $deliveryPointName;

        return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryPointAddress()
    {
        return $this->deliveryPointAddress;
    }

    /**
     * @param string $deliveryPointAddress
     * @return Order
     */
    public function setDeliveryPointAddress($deliveryPointAddress)
    {
        $this->deliveryPointAddress = $deliveryPointAddress;
        return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryPointPostcode()
    {
        return $this->deliveryPointPostcode;
    }

    /**
     * @param string $deliveryPointPostcode
     * @return Order
     */
    public function setDeliveryPointPostcode($deliveryPointPostcode)
    {
        $this->deliveryPointPostcode = $deliveryPointPostcode;
        return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryPointCity()
    {
        return $this->deliveryPointCity;
    }

    /**
     * @param string $deliveryPointCity
     * @return Order
     */
    public function setDeliveryPointCity($deliveryPointCity)
    {
        $this->deliveryPointCity = $deliveryPointCity;
        return $this;
    }

    public function isCod()
    {
        return $this->cod;
    }

    public function getCod()
    {
        return $this->cod;
    }

    public function setCod($cod)
    {
        $this->cod = $cod;

        return $this;
    }

    public function getCodAmount()
    {
        return $this->codAmount;
    }

    public function setCodAmount($codAmount)
    {
        $this->codAmount = $codAmount;

        return $this;
    }

    public function getItems()
    {
        return $this->items;
    }

    public function setItems($items)
    {
        $this->items = $items;

        return $this;
    }

    public function getCustomerObject()
    {
        return $this->customerObject;
    }

    public function setCustomerObject($customerObject)
    {
        $this->customerObject = $customerObject;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getExternalDeliveryIds()
    {
        return $this->externalDeliveryIds;
    }

    /**
     * {@inheritdoc}
     */
    public function setExternalDeliveryIds($externalDeliveryIds)
    {
        $this->externalDeliveryIds = $externalDeliveryIds;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getIntegrationClientName()
    {
        return $this->integrationClientName;
    }

    /**
     * {@inheritdoc}
     */
    public function setIntegrationClientName($integrationClientName)
    {
        $this->integrationClientName = $integrationClientName;
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
     * @return Order
     */
    public function setStatusHistory($statusHistory)
    {
        $this->statusHistory = $statusHistory;
        return $this;
    }

    /**
     * @return string
     */
    public function getReturnDocumentsType()
    {
        return $this->returnDocumentsType;
    }

    /**
     * @param string $returnDocumentsType
     * @return Order
     */
    public function setReturnDocumentsType($returnDocumentsType)
    {
        $this->returnDocumentsType = $returnDocumentsType;
        return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryHour()
    {
        return $this->deliveryHour;
    }

    /**
     * @param string $deliveryHour
     * @return Order
     */
    public function setDeliveryHour($deliveryHour)
    {
        $this->deliveryHour = $deliveryHour;
        return $this;
    }

    /**
     * @return string
     */
    public function getTransactionId()
    {
        return $this->transactionId;
    }

    /**
     * @param string $transactionId
     * @return Order
     */
    public function setTransactionId($transactionId)
    {
        $this->transactionId = $transactionId;
        return $this;
    }

    /**
     * @return string
     */
    public function getReceiptFiscalNumber()
    {
        return $this->receiptFiscalNumber;
    }

    /**
     * @param string $receiptFiscalNumber
     * @return Order
     */
    public function setReceiptFiscalNumber($receiptFiscalNumber)
    {
        $this->receiptFiscalNumber = $receiptFiscalNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getReceiptFiscalId()
    {
        return $this->receiptFiscalId;
    }

    /**
     * @param string $receiptFiscalId
     * @return Order
     */
    public function setReceiptFiscalId($receiptFiscalId)
    {
        $this->receiptFiscalId = $receiptFiscalId;
        return $this;
    }

    /**
     * @return string
     */
    public function getBillingFirstName()
    {
        return $this->billingFirstName;
    }

    /**
     * @param string $billingFirstName
     * @return OrderInterface
     */
    public function setBillingFirstName($billingFirstName)
    {
        $this->billingFirstName = $billingFirstName;
        return $this;
    }

    /**
     * @return string
     */
    public function getBillingLastName()
    {
        return $this->billingLastName;
    }

    /**
     * @param string $billingLastName
     * @return OrderInterface
     */
    public function setBillingLastName($billingLastName)
    {
        $this->billingLastName = $billingLastName;
        return $this;
    }

    /**
     * @return string
     */
    public function getBillingCompany()
    {
        return $this->billingCompany;
    }

    /**
     * @param string $billingCompany
     * @return OrderInterface
     */
    public function setBillingCompany($billingCompany)
    {
        $this->billingCompany = $billingCompany;
        return $this;
    }

    /**
     * @return string
     */
    public function getBillingVatId()
    {
        return $this->billingVatId;
    }

    /**
     * @param string $billingVatId
     * @return OrderInterface
     */
    public function setBillingVatId($billingVatId)
    {
        $this->billingVatId = $billingVatId;
        return $this;
    }

    /**
     * @return string
     */
    public function getBillingCity()
    {
        return $this->billingCity;
    }

    /**
     * @param string $billingCity
     * @return OrderInterface
     */
    public function setBillingCity($billingCity)
    {
        $this->billingCity = $billingCity;
        return $this;
    }

    /**
     * @return string
     */
    public function getBillingPostCode()
    {
        return $this->billingPostCode;
    }

    /**
     * @param string $billingPostCode
     * @return OrderInterface
     */
    public function setBillingPostCode($billingPostCode)
    {
        $this->billingPostCode = $billingPostCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getBillingStreet1()
    {
        return $this->billingStreet1;
    }

    /**
     * @param string $billingStreet1
     * @return OrderInterface
     */
    public function setBillingStreet1($billingStreet1)
    {
        $this->billingStreet1 = $billingStreet1;
        return $this;
    }

    /**
     * @return string
     */
    public function getBillingStreet2()
    {
        return $this->billingStreet2;
    }

    /**
     * @param string $billingStreet2
     * @return OrderInterface
     */
    public function setBillingStreet2($billingStreet2)
    {
        $this->billingStreet2 = $billingStreet2;
        return $this;
    }

    /**
     * @return string
     */
    public function getBillingState()
    {
        return $this->billingState;
    }

    /**
     * @param string $billingState
     * @return OrderInterface
     */
    public function setBillingState($billingState)
    {
        $this->billingState = $billingState;
        return $this;
    }

    /**
     * @return string
     */
    public function getBillingCountry()
    {
        return $this->billingCountry;
    }

    /**
     * @param string $billingCountry
     * @return OrderInterface
     */
    public function setBillingCountry($billingCountry)
    {
        $this->billingCountry = $billingCountry;
        return $this;
    }

    /**
     * @return string
     */
    public function getBillingPhone()
    {
        return $this->billingPhone;
    }

    /**
     * @param string $billingPhone
     * @return OrderInterface
     */
    public function setBillingPhone($billingPhone)
    {
        $this->billingPhone = $billingPhone;
        return $this;
    }


    /**
     * @return string
     */
    public function getBillingEmail()
    {
        return $this->billingEmail;
    }

    /**
     * @param string $billingEmail
     * @return OrderInterface
     */
    public function setBillingEmail($billingEmail)
    {
        $this->billingEmail = $billingEmail;
        return $this;
    }

    /**
     * @return string
     */
    public function getBillingCountryCode()
    {
        return $this->billingCountryCode;
    }

    /**
     * @param string $billingCountryCode
     * @return OrderInterface
     */
    public function setBillingCountryCode($billingCountryCode)
    {
        $this->billingCountryCode = $billingCountryCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getExternalSellerId()
    {
        return $this->externalSellerId;
    }

    /**
     * @param string $externalSellerId
     * @return OrderInterface
     */
    public function setExternalSellerId($externalSellerId)
    {
        $this->externalSellerId = $externalSellerId;
        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getOrigin()
    {
        return $this->origin;
    }

    /**
     * @inheritdoc
     */
    public function setOrigin($origin)
    {
        $this->origin = $origin;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDeliveryDueDate()
    {
        return $this->deliveryDueDate;
    }

    /**
     * @param \DateTime $deliveryDueDate
     * @return Order
     */
    public function setDeliveryDueDate($deliveryDueDate)
    {
        $this->deliveryDueDate = $deliveryDueDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getAdditionalOrderNumber()
    {
        return $this->additionalOrderNumber;
    }

    /**
     * @param string $additionalOrderNumber
     * @return Order
     */
    public function setAdditionalOrderNumber($additionalOrderNumber)
    {
        $this->additionalOrderNumber = $additionalOrderNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getPaymentMethod()
    {
        return $this->paymentMethod;
    }

    /**
     * @param string $paymentMethod
     * @return Order
     */
    public function setPaymentMethod($paymentMethod)
    {
        $this->paymentMethod = $paymentMethod;
        return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryStatus()
    {
        return $this->deliveryStatus;
    }

    /**
     * @param string $deliveryStatus
     * @return Order
     */
    public function setDeliveryStatus($deliveryStatus)
    {
        $this->deliveryStatus = $deliveryStatus;
        return $this;
    }

    /**
     * @return array
     */
    public function getDeliveryConfiguration()
    {
        return $this->deliveryConfiguration;
    }

    /**
     * @param array $deliveryConfiguration
     * @return Order
     */
    public function setDeliveryConfiguration($deliveryConfiguration)
    {
        $this->deliveryConfiguration = $deliveryConfiguration;
        return $this;
    }

    /**
     * @return string
     */
    public function getGoodsDispatchNumber()
    {
        return $this->goodsDispatchNumber;
    }

    /**
     * @param string $goodsDispatchNumber
     * @return Order
     */
    public function setGoodsDispatchNumber($goodsDispatchNumber)
    {
        $this->goodsDispatchNumber = $goodsDispatchNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getGoodsDispatchId()
    {
        return $this->goodsDispatchId;
    }

    /**
     * @param string $goodsDispatchId
     * @return Order
     */
    public function setGoodsDispatchId($goodsDispatchId)
    {
        $this->goodsDispatchId = $goodsDispatchId;
        return $this;
    }

    /**
     * @return string
     */
    public function getCodAccountNumber()
    {
        return $this->codAccountNumber;
    }

    /**
     * @param string $codAccountNumber
     * @return Order
     */
    public function setCodAccountNumber($codAccountNumber)
    {
        $this->codAccountNumber = $codAccountNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getPackageType()
    {
        return $this->packageType;
    }

    /**
     * @param string $packageType
     * @return Order
     */
    public function setPackageType($packageType)
    {
        $this->packageType = $packageType;
        return $this;
    }

    /**
     * @return int
     */
    public function getNumberOfPackages()
    {
        return $this->numberOfPackages;
    }

    /**
     * @param int $numberOfPackages
     * @return Order
     */
    public function setNumberOfPackages($numberOfPackages)
    {
        $this->numberOfPackages = $numberOfPackages;
        return $this;
    }

    public function getHash()
    {
        return md5($this->id . $this->depotId . $this->srcClientId . $this->clientOrderNumber);
    }

}
