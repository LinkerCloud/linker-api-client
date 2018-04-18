<?php

namespace Linker\Api\Model;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class Stock implements StockInterface
{
    /**
     * @var int
     * @Type("integer")
     */
    protected $id;

    /**
     * @var int
     * @Type("integer")
     */
    protected $sku;

    /**
     * @var string
     * @Type("string")
     */
    protected $finalSku;

    /**
     * @var int
     * @Type("integer")
     */
    protected $ean;

    /**
     * @var string
     * @Type("string")
     */
    protected $name;

    /**
     * @var string
     * @Type("string")
     */
    protected $reserved;

    /**
     * @var int
     * @Type("integer")
     */
    protected $free;

    /**
     * @var int
     * @Type("integer")
     */
    protected $total;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function getSku()
    {
        return $this->sku;
    }

    public function setSku($sku)
    {
        $this->sku = $sku;
    }

    public function getFinalSku()
    {
        return $this->finalSku;
    }

    public function setFinalSku($finalSku)
    {
        $this->finalSku = $finalSku;
    }

    public function getEan()
    {
        return $this->ean;
    }

    public function setEan($ean)
    {
        $this->ean = $ean;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getReserved()
    {
        return $this->reserved;
    }

    public function setReserved($reserved)
    {
        $this->reserved = $reserved;
    }

    public function getFree()
    {
        return $this->free;
    }

    public function setFree($free)
    {
        $this->free = $free;
    }

    public function getTotal()
    {
        return $this->total;
    }

    public function setTotal($total)
    {
        $this->total = $total;
    }
}
