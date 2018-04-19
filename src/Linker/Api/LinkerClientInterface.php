<?php

namespace Linker\Api;


use Linker\Api\Model\OrderInterface;

interface LinkerClientInterface
{
    /**
     * Get orders list
     *
     * @param int    $limit
     * @param int    $offset
     * @param array  $filters
     * @param string $sortColumn
     * @param string $sortDir ASC|DESC
     * @return array
     */
    public function getOrders($limit = 10, $offset = 0, array $filters = [], $sortColumn = 'created_at', $sortDir = 'ASC');

    /**
     * Get stocks list
     *
     * @return array
     */
    public function getStocks();

    /**
     * Creates order
     *
     * @param OrderInterface $order
     *
     * @return mixed
     */
    public function createOrder(OrderInterface $order);

    /**
     * Updates order
     *
     * @param string         $id
     * @param OrderInterface $order
     *
     * @return mixed
     */
    public function updateOrder($id, OrderInterface $order);

    /**
     * Get Order data
     *
     * @param string $id
     * @return OrderInterface
     */
    public function getOrder($id);
}