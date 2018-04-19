<?php

namespace Linker\Api\Model;

/**
 * Interface OrderInterface
 *
 */
interface StockInterface
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
     * @param integer $id
     * @return OrderInterface
     */
    public function setId($id);

    /**
     * @return integer
     */
    public function getSku();

    /**
     * @param integer $sku
     * @return Stock
     */
    public function setSku($sku);

    /**
     * @return string
     */
    public function getFinalSku();

    /**
     * @param string $finalSku
     * @return Stock
     */
    public function setFinalSku($finalSku);

    /**
     * @return integer
     */
    public function getEan();

    /**
     * @param integer $ean
     * @return Stock
     */
    public function setEan($ean);

    /**
     * @return string
     */
    public function getName();

    /**
     * @param string $name
     * @return Stock
     */
    public function setName($name);

    /**
     * @return string
     */
    public function getReserved();

    /**
     * @param string $reserved
     * @return Stock
     */
    public function setReserved($reserved);

    /**
     * @return integer
     */
    public function getFree();

    /**
     * @param integer $free
     * @return Stock
     */
    public function setFree($free);

    /**
     * @return integer
     */
    public function getTotal();

    /**
     * @param integer $total
     * @return Stock
     */
    public function setTotal($total);
}
