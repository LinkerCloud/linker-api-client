<?php

namespace Linker\Api;


use Linker\Api\Model\OrderInterface;
use Linker\Api\Model\ShipmentInterface;
use Linker\Api\Model\SupplierOrderInterface;
use Linker\Api\Model\TrackingNumber;

interface LinkerClientInterface
{
    /**
     * Get orders list
     *
     * @param int $limit
     * @param int $offset
     * @param array $filters
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
     * @param string $id
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

    /**
     * @param $id
     * @param TrackingNumber $trackingNumber
     * @return OrderInterface
     */
    public function setTrackingNumber($id, TrackingNumber $trackingNumber);

    /**
     * Get supplier orders list
     *
     * @param int $limit
     * @param int $offset
     * @param array $filters
     * @param string $sortColumn
     * @param string $sortDir ASC|DESC
     * @return array
     */
    public function getSupplierOrders($limit = 10, $offset = 0, array $filters = [], $sortColumn = 'created_at', $sortDir = 'ASC');

    /**
     * Creates supplier order
     *
     * @param SupplierOrderInterface $order
     *
     * @return mixed
     */
    public function createSupplierOrder(SupplierOrderInterface $order);

    /**
     * Updates supplier order
     *
     * @param string $id
     * @param SupplierOrderInterface $order
     *
     * @return mixed
     */
    public function updateSupplierOrder($id, SupplierOrderInterface $order);

    /**
     * Get Supplier Order data
     *
     * @param string $id
     * @return SupplierOrderInterface
     */
    public function getSupplierOrder($id);

    /**
     * Create shipment for selected order
     *
     * @param ShipmentInterface $shipment
     * @return SupplierOrderInterface
     */
    public function createShipment(ShipmentInterface $shipment);
}