<?php

namespace Linker\Api\Model;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class Parcel implements ParcelInterface
{
    /**
     * @var string
     * @Type("string")
     * @SerializedName("packageId")
     */
    protected $packageId;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("parcelId")
     */
    protected $parcelId;

    /**
     * @var string
     * @Type("string")
     */
    protected $label;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("trackingUrl")
     */
    protected $trackingUrl;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("operatorName")
     */
    protected $operatorName;

    /**
     * @return string
     */
    public function getPackageId()
    {
        return $this->packageId;
    }

    /**
     * @param string $packageId
     * @return Parcel
     */
    public function setPackageId($packageId)
    {
        $this->packageId = $packageId;
        return $this;
    }

    /**
     * @return string
     */
    public function getParcelId()
    {
        return $this->parcelId;
    }

    /**
     * @param string $parcelId
     * @return Parcel
     */
    public function setParcelId($parcelId)
    {
        $this->parcelId = $parcelId;
        return $this;
    }

    /**
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * @param string $label
     * @return Parcel
     */
    public function setLabel($label)
    {
        $this->label = $label;
        return $this;
    }

    /**
     * @return string
     */
    public function getTrackingUrl()
    {
        return $this->trackingUrl;
    }

    /**
     * @param string $trackingUrl
     * @return Parcel
     */
    public function setTrackingUrl($trackingUrl)
    {
        $this->trackingUrl = $trackingUrl;
        return $this;
    }

    /**
     * @return string
     */
    public function getOperatorName()
    {
        return $this->operatorName;
    }

    /**
     * @param string $operatorName
     * @return Parcel
     */
    public function setOperatorName($operatorName)
    {
        $this->operatorName = $operatorName;
        return $this;
    }
}
