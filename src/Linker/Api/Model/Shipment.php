<?php

namespace Linker\Api\Model;

use JMS\Serializer\Annotation as Serializer;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class Shipment implements ShipmentInterface
{
    /**
     * @var string
     * @Type("string")
     * @SerializedName("orderNumber")
     */
    protected $orderNumber;


    /**
     * @Type("array<Linker\Api\Model\ShipmentPackage>")
     * @var array
     */
    protected $packages;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("labelFormat")
     */
    protected $labelFormat;

    /**
     * @var boolean
     * @Type("boolean")
     * @SerializedName("packOrder")
     */
    protected $packOrder;


    /**
     * @return string
     */
    public function getOrderNumber()
    {
        return $this->orderNumber;
    }

    /**
     * @param string $orderNumber
     * @return Shipment
     */
    public function setOrderNumber($orderNumber)
    {
        $this->orderNumber = $orderNumber;
        return $this;
    }

    /**
     * @return ShipmentPackage[]
     */
    public function getPackages()
    {
        return $this->packages;
    }

    /**
     * @param ShipmentPackage[] $packages
     * @return Shipment
     */
    public function setPackages($packages)
    {
        $this->packages = $packages;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLabelFormat()
    {
        return $this->labelFormat;
    }

    /**
     * @param mixed $labelFormat
     * @return Shipment
     */
    public function setLabelFormat($labelFormat)
    {
        $this->labelFormat = $labelFormat;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getPackOrder()
    {
        return $this->packOrder;
    }

    /**
     * @param boolean $packOrder
     * @return Shipment
     */
    public function setPackOrder($packOrder)
    {
        $this->packOrder = $packOrder;
        return $this;
    }
}
