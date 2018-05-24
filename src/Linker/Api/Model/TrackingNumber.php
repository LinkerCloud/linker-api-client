<?php

namespace Linker\Api\Model;

use JMS\Serializer\Annotation as Serializer;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class TrackingNumber
{
    /**
     * @var string
     * @Type("string")
     */
    protected $id;
    /**
     * @var string
     * @Type("string")
     */
    protected $trackingNumber;
    /**
     * @var string
     * @Type("string")
     */
    protected $operator;
    /**
     * @var string
     * @Type("string")
     */
    protected $parcelId;
    /**
     * @var string
     * @Type("string")
     */
    protected $packed_at;

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param $id
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getTrackingNumber()
    {
        return $this->trackingNumber;
    }

    /**
     * @param string $trackingNumber
     */
    public function setTrackingNumber($trackingNumber)
    {
        $this->trackingNumber = $trackingNumber;
    }

    /**
     * @return string
     */
    public function getOperator()
    {
        return $this->operator;
    }

    /**
     * @param string $operator
     */
    public function setOperator($operator)
    {
        $this->operator = $operator;
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
     */
    public function setParcelId($parcelId)
    {
        $this->parcelId = $parcelId;
    }

    /**
     * @return string
     */
    public function getPackedAt()
    {
        return $this->packed_at;
    }

    /**
     * @param string $packed_at
     */
    public function setPackedAt(string $packed_at)
    {
        $this->packed_at = $packed_at;
    }
}
