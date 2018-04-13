<?php

namespace Linker\Api\Model;

/**
 * Interface OrderInterface
 *
 */
interface OrderInterface extends DeliveryInterface
{
    /**
     * Get id
     *
     * @return string
     */
    public function getId();

    /**
     * Set id
     *
     * @param string $id
     * @return OrderInterface
     */
    public function setId($id);

    /**
     * Set externalId
     *
     * @param int $externalId
     * @return OrderInterface
     */
    public function setExternalId($externalId);

    /**
     * Get externalId
     *
     * @return int
     */
    public function getExternalId();

    /**
     * @return string
     */
    public function getSrcClientId();

    /**
     * @param string $srcClientId
     * @return OrderInterface
     */
    public function setSrcClientId($srcClientId);

    /**
     * Set number
     *
     * @param string $number
     * @return OrderInterface
     */
    public function setNumber($number);

    /**
     * Get number
     *
     * @return string
     */
    public function getNumber();

    /**
     * @return string
     */
    public function getClientOrderNumber();

    /**
     * @param string $clientOrderNumber
     * @return OrderInterface
     */
    public function setClientOrderNumber($clientOrderNumber);

    /**
     * @return string
     */
    public function getInvoiceNumber();

    /**
     * @param string $invoiceNumber
     * @return Order
     */
    public function setInvoiceNumber($invoiceNumber);

    /**
     * @return string
     */
    public function getInvoiceId();

    /**
     * @param string $invoiceId
     * @return Order
     */
    public function setInvoiceId($invoiceId);

    /**
     * @return int
     */
    public function getCustomer();

    /**
     * @param int $customer
     * @return OrderInterface
     */
    public function setCustomer($customer);

    /**
     * @return \DateTime
     */
    public function getOrderDate();

    /**
     * @param \DateTime $orderDate
     * @return OrderInterface
     */
    public function setOrderDate($orderDate);

    /**
     * @return \DateTime
     */
    public function getExecutionDate();

    /**
     * @param \DateTime $executionDate
     * @return OrderInterface
     */
    public function setExecutionDate($executionDate);

    /**
     * @return float
     */
    public function getPriceGross();

    /**
     * @param float $priceGross
     * @return OrderInterface
     */
    public function setPriceGross($priceGross);

    /**
     * @return float
     */
    public function getPriceNet();

    /**
     * @param float $priceNet
     * @return OrderInterface
     */
    public function setPriceNet($priceNet);

    /**
     * @return float
     */
    public function getShipmentPrice();

    /**
     * @param float $shipmentPrice
     * @return OrderInterface
     */
    public function setShipmentPrice($shipmentPrice);

    /**
     * @return string
     */
    public function getCurrencySymbol();

    /**
     * @param string $currencySymbol
     * @return OrderInterface
     */
    public function setCurrencySymbol($currencySymbol);

    /**
     * @return string
     */
    public function getOrderStatus();

    /**
     * @param string $orderStatus
     * @return OrderInterface
     */
    public function setOrderStatus($orderStatus);

    /**
     * @return string
     */
    public function getComments();

    /**
     * @param string $comments
     * @return OrderInterface
     */
    public function setComments($comments);

    /**
     * @return string
     */
    public function getDeliveryRecipientLogin();

    /**
     * @param string $deliveryRecipientLogin
     * @return Order
     */
    public function setDeliveryRecipientLogin($deliveryRecipientLogin);

    /**
     * @return boolean
     */
    public function isCod();

    /**
     * @return boolean
     */
    public function getCod();

    /**
     * @param boolean $cod
     * @return OrderInterface
     */
    public function setCod($cod);

    /**
     * @return float
     */
    public function getCodAmount();

    /**
     * @param float $codAmount
     * @return OrderInterface
     */
    public function setCodAmount($codAmount);

    /**
     * @return OrderItemInterface[]
     */
    public function getItems();

    /**
     * @param OrderItemInterface[] $items
     * @return OrderInterface
     */
    public function setItems($items);

    /**
     * @return CustomerInterface
     */
    public function getCustomerObject();

    /**
     * @param CustomerInterface $customerObject
     * @return OrderInterface
     */
    public function setCustomerObject($customerObject);

    /**
     * @return string
     */
    public function getIntegrationClientName();

    /**
     * @param string $integrationClientName
     * @return Order
     */
    public function setIntegrationClientName($integrationClientName);

    /**
     * @return array
     */
    public function getStatusHistory();

    /**
     * @param array $statusHistory
     * @return Order
     */
    public function setStatusHistory($statusHistory);

    /**
     * @return string
     */
    public function getReturnDocumentsType();

    /**
     * @param string $returnDocumentsType
     * @return Order
     */
    public function setReturnDocumentsType($returnDocumentsType);

    /**
     * @return string
     */
    public function getDeliveryHour();

    /**
     * @param string $deliveryHour
     * @return Order
     */
    public function setDeliveryHour($deliveryHour);

    /**
     * @return string
     */
    public function getTransactionId();

    /**
     * @param string $transactionId
     * @return Order
     */
    public function setTransactionId($transactionId);

    /**
     * @return string
     */
    public function getReceiptFiscalNumber();

    /**
     * @param string $receiptFiscalNumber
     * @return Order
     */
    public function setReceiptFiscalNumber($receiptFiscalNumber);

    /**
     * @return string
     */
    public function getReceiptFiscalId();

    /**
     * @param string $receiptFiscalId
     * @return Order
     */
    public function setReceiptFiscalId($receiptFiscalId);

    /**
     * @return string
     */
    public function getBillingFirstName();

    /**
     * @param string $billingFirstName
     * @return OrderInterface
     */
    public function setBillingFirstName($billingFirstName);

    /**
     * @return string
     */
    public function getBillingLastName();

    /**
     * @param string $billingLastName
     * @return OrderInterface
     */
    public function setBillingLastName($billingLastName);

    /**
     * @return string
     */
    public function getBillingCompany();

    /**
     * @param string $billingCompany
     * @return OrderInterface
     */
    public function setBillingCompany($billingCompany);

    /**
     * @return string
     */
    public function getBillingVatId();

    /**
     * @param string $billingVatId
     * @return OrderInterface
     */
    public function setBillingVatId($billingVatId);

    /**
     * @return string
     */
    public function getBillingCity();

    /**
     * @param string $billingCity
     * @return OrderInterface
     */
    public function setBillingCity($billingCity);

    /**
     * @return string
     */
    public function getBillingPostCode();

    /**
     * @param string $billingPostCode
     * @return OrderInterface
     */
    public function setBillingPostCode($billingPostCode);

    /**
     * @return string
     */
    public function getBillingStreet1();

    /**
     * @param string $billingStreet1
     * @return OrderInterface
     */
    public function setBillingStreet1($billingStreet1);

    /**
     * @return string
     */
    public function getBillingStreet2();

    /**
     * @param string $billingStreet2
     * @return OrderInterface
     */
    public function setBillingStreet2($billingStreet2);

    /**
     * @return string
     */
    public function getBillingState();

    /**
     * @param string $billingState
     * @return OrderInterface
     */
    public function setBillingState($billingState);

    /**
     * @return string
     */
    public function getBillingCountry();

    /**
     * @param string $billingCountry
     * @return OrderInterface
     */
    public function setBillingCountry($billingCountry);

    /**
     * @return string
     */
    public function getBillingPhone();

    /**
     * @param string $billingPhone
     * @return OrderInterface
     */
    public function setBillingPhone($billingPhone);

    /**
     * @return string
     */
    public function getBillingEmail();

    /**
     * @param string $billingEmail
     * @return OrderInterface
     */
    public function setBillingEmail($billingEmail);

    /**
     * @return string
     */
    public function getBillingCountryCode();

    /**
     * @param string $billingCountryCode
     * @return OrderInterface
     */
    public function setBillingCountryCode($billingCountryCode);

    /**
     * @return string
     */
    public function getExternalSellerId();

    /**
     * @param string $externalSellerId
     * @return OrderInterface
     */
    public function setExternalSellerId($externalSellerId);

    /**
     * Set the name of system of origin
     *
     * @return string
     */
    public function getOrigin();

    /**
     * Set the name of system of origin
     *
     * @param string $origin
     * @return OrderInterface
     */
    public function setOrigin($origin);

    /**
     * @return \DateTime
     */
    public function getDeliveryDueDate();

    /**
     * @param \DateTime $deliveryDueDate
     * @return Order
     */
    public function setDeliveryDueDate($deliveryDueDate);

    /**
     * @return string
     */
    public function getAdditionalOrderNumber();

    /**
     * @param string $additionalOrderNumber
     * @return Order
     */
    public function setAdditionalOrderNumber($additionalOrderNumber);

    /**
     * @return string
     */
    public function getPaymentMethod();

    /**
     * @param string $paymentMethod
     * @return Order
     */
    public function setPaymentMethod($paymentMethod);

    /**
     * @return string
     */
    public function getDeliveryStatus();

    /**
     * @param string $deliveryStatus
     * @return Order
     */
    public function setDeliveryStatus($deliveryStatus);

    /**
     * @return array
     */
    public function getDeliveryConfiguration();

    /**
     * @param array $deliveryConfiguration
     * @return Order
     */
    public function setDeliveryConfiguration($deliveryConfiguration);

    /**
     * @return string
     */
    public function getGoodsDispatchNumber();

    /**
     * @param string $goodsDispatchNumber
     * @return Order
     */
    public function setGoodsDispatchNumber($goodsDispatchNumber);

    /**
     * @return string
     */
    public function getGoodsDispatchId();

    /**
     * @param string $goodsDispatchId
     * @return Order
     */
    public function setGoodsDispatchId($goodsDispatchId);

    /**
     * @return string
     */
    public function getCodAccountNumber();

    /**
     * @param string $codAccountNumber
     * @return Order
     */
    public function setCodAccountNumber($codAccountNumber);

    /**
     * @return string
     */
    public function getPackageType();

    /**
     * @param string $packageType
     * @return Order
     */
    public function setPackageType($packageType);

    /**
     * @return int
     */
    public function getNumberOfPackages();

    /**
     * @param int $numberOfPackages
     * @return Order
     */
    public function setNumberOfPackages($numberOfPackages);


    /**
     * @return string
     */
    public function getHash();
}
