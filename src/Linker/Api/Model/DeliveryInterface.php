<?php

namespace Linker\Api\Model;

/**
 * Interface DeliveryInterface
 */
interface DeliveryInterface
{
    /**
     * @return string
     */
    public function getCarrier();

    /**
     * @param string $carrier
     * @return OrderInterface
     */
    public function setCarrier($carrier);

    /**
     * @return int
     */
    public function getDepotId();

    /**
     * @param int $depotId
     * @return DeliveryInterface
     */
    public function setDepotId($depotId);

    /**
     * @return string
     */
    public function getDeliveryCountry();

    /**
     * @param string $deliveryCountry
     * @return OrderInterface
     */
    public function setDeliveryCountry($deliveryCountry);

    /**
     * @return string
     */
    public function getDeliveryPostCode();

    /**
     * @param string $deliveryPostCode
     * @return OrderInterface
     */
    public function setDeliveryPostCode($deliveryPostCode);

    /**
     * @return string
     */
    public function getDeliveryCity();

    /**
     * @param string $deliveryCity
     * @return OrderInterface
     */
    public function setDeliveryCity($deliveryCity);

    /**
     * @return string
     */
    public function getDeliveryStreet();

    /**
     * @param string $deliveryStreet
     * @return OrderInterface
     */
    public function setDeliveryStreet($deliveryStreet);

    /**
     * @return string
     */
    public function getDeliveryCompany();

    /**
     * @param string $deliveryCompany
     * @return OrderInterface
     */
    public function setDeliveryCompany($deliveryCompany);

    /**
     * @return string
     */
    public function getDeliveryRecipient();

    /**
     * @param string $deliveryRecipient
     * @return OrderInterface
     */
    public function setDeliveryRecipient($deliveryRecipient);

    /**
     * @return string
     */
    public function getDeliveryPhone();

    /**
     * @param string $deliveryPhone
     * @return OrderInterface
     */
    public function setDeliveryPhone($deliveryPhone);

    /**
     * @return string
     */
    public function getDeliveryEmail();

    /**
     * @param string $deliveryEmail
     * @return OrderInterface
     */
    public function setDeliveryEmail($deliveryEmail);

    /**
     * @return string
     */
    public function getDeliveryPointName();

    /**
     * @param string $deliveryPointName
     * @return OrderInterface
     */
    public function setDeliveryPointName($deliveryPointName);
}