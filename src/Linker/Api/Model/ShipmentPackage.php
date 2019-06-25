<?php

namespace Linker\Api\Model;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class ShipmentPackage
{
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
    protected $height;

    /**
     * @var float
     * @Type("float")
     */
    protected $depth;

    /**
     * @Type("array<Linker\Api\Model\Item>")
     */
    protected $items;

    /**
     * @return mixed
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @param mixed $weight
     * @return ShipmentPackage
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;
        return $this;
    }


    /**
     * @return mixed
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @param mixed $width
     * @return ShipmentPackage
     */
    public function setWidth($width)
    {
        $this->width = $width;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param mixed $height
     * @return ShipmentPackage
     */
    public function setHeight($height)
    {
        $this->height = $height;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDepth()
    {
        return $this->depth;
    }

    /**
     * @param mixed $depth
     * @return ShipmentPackage
     */
    public function setDepth($depth)
    {
        $this->depth = $depth;
        return $this;
    }

    /**
     * @return Item[]
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @param Item[] $items
     * @return ShipmentPackage
     */
    public function setItems($items)
    {
        $this->items = $items;
        return $this;
    }
}
