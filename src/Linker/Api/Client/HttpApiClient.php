<?php

namespace Linker\Api\Client;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use JMS\Serializer\SerializerInterface;
use GuzzleHttp\Exception\BadResponseException;
use Linker\Api\LinkerClientInterface;
use Linker\Api\Model\Order;
use Linker\Api\Model\OrderInterface;
use Linker\Api\Model\OrderList;
use Linker\Api\Model\ShipmentInterface;
use Linker\Api\Model\StockList;
use Linker\Api\Model\TrackingNumber;
use Linker\Api\Model\SupplierOrderInterface;
use Linker\Api\Model\SupplierOrder;
use Linker\Api\Model\SupplierOrderList;
use Linker\Api\Model\Parcel;

class HttpApiClient implements LinkerClientInterface
{
    /** @var Client */
    protected $client;
    /** @var string */
    protected $endpoint;
    /** @var string */
    protected $apiKey;
    /** @var SerializerInterface */
    protected $serializer;
    /** @var array */
    protected $headers;

    /**
     * @param Client              $client
     * @param SerializerInterface $serializer
     * @param string              $endpoint
     * @param string              $apiKey
     */
    public function __construct(
        Client $client,
        SerializerInterface $serializer,
        $endpoint,
        $apiKey
    )
    {
        $this->client     = $client;
        $this->endpoint   = $endpoint;
        $this->serializer = $serializer;
        $this->apiKey     = $apiKey;
        $this->headers    = [
            'Accept'       => 'application/json',
            'Content-Type' => 'application/json',
            'apikey'       => $apiKey,
        ];
    }

    /**
     * @param ClientInterface $client
     */
    public function setClient(ClientInterface $client): void
    {
        $this->client = $client;
    }

    /**
     * {@inheritDoc}
     */
    public function getOrders($limit = 10, $offset = 0, array $filters = [], $sortColumn = 'created_at', $sortDir = 'ASC')
    {
        $options = [
            'headers' => $this->headers
        ];

        if ($limit < 0) {
            $limit = 10;
        }

        $sortDir = ($sortDir == 'ASC') ? 'ASC' : 'DESC';

        $query = '?limit=' . $limit . '&offset=' . $offset . '&sortCol=' . $sortColumn . '&sortDir=' . $sortDir;
        foreach ($filters as $key => $val) {
            $query .= '&filters[' . $key . ']=' . $val;
        }

        $endpoint = $this->endpoint . '/orders' . $query;

        $response = $this->client->request('GET', $endpoint, $options);

        $body = $response->getBody();
        return $this->serializer->deserialize($body, OrderList::class, 'json');
    }

    /**
     * {@inheritDoc}
     */
    public function getStocks($limit = 100, $offset = 0, array $filters = [])
    {
        $options = [
            'headers' => $this->headers
        ];

        if ($limit < 0) {
            $limit = 100;
        }

        $query = '?limit=' . $limit . '&offset=' . $offset;
        foreach ($filters as $key => $val) {
            $query .= '&filters[' . $key . ']=' . $val;
        }

        $endpoint = $this->endpoint . '/stocks' . $query;

        $response = $this->client->request('GET', $endpoint, $options);

        $body = $response->getBody();
        return $this->serializer->deserialize($body, StockList::class, 'json');
    }

    /**
     * {@inheritDoc}
     */
    public function getOrder($id)
    {
        $endpoint = $this->endpoint . '/orders/' . $id;
        $options  = [
            'headers' => $this->headers
        ];
        $response = $this->client->request('GET', $endpoint, $options);

        $body = $response->getBody();
        return $this->serializer->deserialize($body, Order::class, 'json');

    }

    /**
     * {@inheritDoc}
     */
    public function createOrder(OrderInterface $order)
    {
        $order->setOrigin($order->getOrigin() . '_LinkerAPI');
        $endpoint = $this->endpoint . '/orders';
        $content  = $this->serializer->serialize($order, 'json');
        $options  = [
            'headers' => $this->headers,
            'body'    => $content
        ];
        try {
            $response = $this->client->request('POST', $endpoint, $options);
            return $this->serializer->deserialize((string)$response->getBody(), Order::class, 'json');
        } catch (BadResponseException $e) {
            throw new ApiException($e->getResponse()->getReasonPhrase(), $e->getResponse()->getStatusCode(), $e);
        }
    }

    /**
     * {@inheritDoc}
     */
    public function updateOrder($id, OrderInterface $order)
    {
        $endpoint = $this->endpoint . '/orders/' . $id;
        $content  = $this->serializer->serialize($order, 'json');
        $options  = [
            'headers' => $this->headers,
            'body'    => $content
        ];

        try {
            return $response = $this->client->request('POST', $endpoint, $options);

        } catch (BadResponseException $e) {
            throw new ApiException($e->getResponse()->getReasonPhrase(), $e->getResponse()->getStatusCode(), $e);
        }
    }

    /**
     * {@inheritDoc}
     */
    public function setTrackingNumber($id, TrackingNumber $trackingNumber)
    {
        $endpoint = $this->endpoint . '/orders/' . $id . '/trackingnumber';
        $content  = $this->serializer->serialize($trackingNumber, 'json');
        $options  = [
            'headers' => $this->headers,
            'body'    => $content
        ];
        try {
            return $this->client->request('PUT', $endpoint, $options);
        } catch (BadResponseException $e) {
            throw new ApiException($e->getResponse()->getReasonPhrase(), $e->getResponse()->getStatusCode(), $e);
        }
    }

    /**
     * {@inheritDoc}
     */
    public function getSupplierOrders($limit = 10, $offset = 0, array $filters = [], $sortColumn = 'created_at', $sortDir = 'ASC')
    {
        if ($limit < 0) {
            $limit = 10;
        }

        $query = '';
        foreach ($filters as $key => $val) {
            $query .= '&filters[' . $key . ']=' . $val;
        }

        $sortDir  = ($sortDir == 'ASC') ? 'ASC' : 'DESC';
        $endpoint = $this->endpoint . '/supplierorders?limit=' . $limit .
            '&offset=' . $offset . '&sortCol=' . $sortColumn . '&sortDir=' . $sortDir;

        $response = $this->client->request('GET', $endpoint);

        $body = $response->getBody();
        return $this->serializer->deserialize($body, SupplierOrderList::class, 'json');
    }

    /**
     * {@inheritDoc}
     */
    public function getSupplierOrder($id)
    {
        $endpoint = $this->endpoint . '/supplierorders/' . $id;
        $options  = [
            'headers' => $this->headers
        ];
        $response = $this->client->request('GET', $endpoint, $options);

        $body       = $response->getBody();
        $contents   = $body->getContents();

        $decodeJson = json_decode($contents, true);
        $object     = $this->serializer->deserialize($contents, SupplierOrder::class, 'json');

        $object->setDepotId($decodeJson['depot_id']);
        $object->setCreatedAt(\DateTime::createFromFormat(\DateTime::RFC3339, $decodeJson['createdAt']));
        $object->setUpdatedAt(\DateTime::createFromFormat(\DateTime::RFC3339, $decodeJson['updatedAt']));

        return $object;

    }

    /**
     * {@inheritDoc}
     */
    public function createSupplierOrder(SupplierOrderInterface $order)
    {
        $endpoint = $this->endpoint . '/supplierorders';
        $content  = $this->serializer->serialize($order, 'json');
        $options  = [
            'headers' => $this->headers,
            'body'    => $content
        ];
        try {
            $response = $this->client->request('POST', $endpoint, $options);
            return $this->serializer->deserialize($response->getBody()->getContents(), SupplierOrder::class, 'json');
        } catch (BadResponseException $e) {
            throw new ApiException($e->getResponse()->getReasonPhrase(), $e->getResponse()->getStatusCode(), $e);
        }
    }

    /**
     * {@inheritDoc}
     */
    public function updateSupplierOrder($id, SupplierOrderInterface $order)
    {
        $endpoint = $this->endpoint . '/supplierorders/' . $id;
        $content  = $this->serializer->serialize($order, 'json');
        $options  = [
            'headers' => $this->headers,
            'body'    => $content
        ];

        try {
            return $response = $this->client->request('POST', $endpoint, $options);

        } catch (BadResponseException $e) {
            throw new ApiException($e->getResponse()->getReasonPhrase(), $e->getResponse()->getStatusCode(), $e);
        }
    }

    /**
     * {@inheritDoc}
     */
    public function createShipment(ShipmentInterface $shipment)
    {
        $endpoint = $this->endpoint . '/deliveries/packages';
        $content  = $this->serializer->serialize($shipment, 'json');
        $options  = [
            'headers' => $this->headers,
            'body'    => $content
        ];

        try {
            $response = $this->client->request('POST', $endpoint, $options);
            return $this->serializer->deserialize((string)$response->getBody(), 'array<Linker\Api\Model\Parcel>', 'json');
        } catch (BadResponseException $e) {
            throw new ApiException($e->getResponse()->getReasonPhrase(), $e->getResponse()->getStatusCode(), $e);
        }
    }
}