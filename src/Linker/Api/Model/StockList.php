<?php

namespace Linker\Api\Model;

use JMS\Serializer\Annotation as Serializer;
use JMS\Serializer\Annotation\Type;

class StockList
{
    /**
     * @var \Linker\Api\Model\Stock[]
     * @Type("array<Linker\Api\Model\Stock>")
     */
    protected $items;

    /**
     * @var int
     * @Type("integer")
     * @Serializer\SerializedName("recordsTotal")
     */
    protected $recordsTotal;


    /**
     * @return mixed
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @param mixed $items
     */
    public function setItems($items)
    {
        $this->items = $items;
    }

    /**
     * @return int
     */
    public function getRecordsTotal()
    {
        return $this->recordsTotal;
    }

    /**
     * @param int $recordsTotal
     */
    public function setRecordsTotal($recordsTotal)
    {
        $this->recordsTotal = $recordsTotal;
    }


}
