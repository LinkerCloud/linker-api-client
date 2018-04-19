<?php

namespace Linker\Api\Client;

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Response;
use JMS\Serializer\SerializerInterface;
use Linker\Api\Model\Order;
use Linker\Api\Model\OrderList;
use Linker\Api\Model\StockList;

class ApiClientTest extends \PHPUnit_Framework_TestCase
{
    /** @var \PHPUnit_Framework_MockObject_MockObject|Client */
    protected $client;
    /** @var \PHPUnit_Framework_MockObject_MockObject|SerializerInterface */
    protected $serializer;
    /** @var string */
    protected $endpoint;
    /** @var HttpApiClient */
    protected $subject;

    protected function setUp()
    {
        $this->client     = $this->getMockBuilder(Client::class)->disableOriginalConstructor()->getMock();
        $this->endpoint   = 'http://domain.tld/abc';
        $this->serializer = $this->createMock(SerializerInterface::class);
        $apiKey           = 'apikey';
        $this->subject    = new HttpApiClient($this->client, $this->serializer, $this->endpoint, $apiKey);
    }

    public function testGetOrdersReturnsSuccessResponse()
    {
        $id  = 'id';
        $url = $this->endpoint . '/orders?limit=10&offset=0&sortCol=created_at&sortDir=ASC&apikey=apikey';

        $expectedResult = $this->createMock(OrderList::class);
        $this->getFindExpectations($url, $expectedResult, OrderList::class);

        $result = $this->subject->getOrders();
        $this->assertEquals($expectedResult, $result);
    }

    public function testGetOrderReturnsSuccessResponse()
    {
        $id  = 'id';
        $url = $this->endpoint . '/orders/' . $id;

        $expectedResult = $this->createMock(Order::class);
        $this->getFindExpectations($url, $expectedResult, Order::class);

        $result = $this->subject->getOrder($id);
        $this->assertEquals($expectedResult, $result);
    }

    public function testGetStocksReturnsSuccessResponse()
    {
        $url = $this->endpoint . '/stocks?&apikey=apikey';

        $expectedResult = $this->createMock(StockList::class);
        $this->getFindExpectations($url, $expectedResult, StockList::class);

        $result = $this->subject->getStocks();
        $this->assertEquals($expectedResult, $result);
    }

    /**
     * @param string $url
     * @param mixed  $result
     * @param string $serializationType
     * @return string
     */
    protected function getFindExpectations($url, $result, $serializationType)
    {
        $response = $this->createMock(Response::class);
        $this->client->expects($this->once())
            ->method('request')
            ->with('GET', $url)
            ->willReturn($response);

        $responseBody = 'Response Body';
        $response->expects($this->once())
            ->method('getBody')
            ->willReturn($responseBody);

        $this->serializer->expects($this->once())
            ->method('deserialize')
            ->with($responseBody, $serializationType, 'json')
            ->willReturn($result);
    }

}