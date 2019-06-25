<?php

namespace Linker\Api\Model;

/**
 * Interface ShipmentInterface
 *
 */
interface ShipmentInterface
{
    /**
     * @return string
     */
    public function getOrderNumber();

    /**
     * @param string $orderNumber
     * @return ShipmentInterface
     */
    public function setOrderNumber($orderNumber);

    /**
     * @return ShipmentPackage[]
     */
    public function getPackages();

    /**
     * @param ShipmentPackage[] $packages
     * @return ShipmentInterface
     */
    public function setPackages($packages);

    /**
     * @return mixed
     */
    public function getLabelFormat();

    /**
     * @param mixed $labelFormat
     * @return ShipmentInterface
     */
    public function setLabelFormat($labelFormat);

    /**
     * @return boolean
     */
    public function getPackOrder();

    /**
     * @param boolean $packOrder
     * @return ShipmentInterface
     */
    public function setPackOrder($packOrder);
}
