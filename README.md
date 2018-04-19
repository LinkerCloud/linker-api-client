Linker API Client

Install 
    composer `require linker/api-client`
        
Create instance

    use GuzzleHttp\Client;
    use JMS\Serializer\SerializerBuilder;
    use Linker\Api\Client\HttpApiClient;

    $uri     = 'https://api.test.linker.shop/public-api/v1';
    $apiKey  = 'api123';    
    $client  = new Client();
    //JMS Serializer
    $serializer = SerializerBuilder::create()->build();
        
    $client = new HttpApiClient($client, $serializer, $uri, $apiKey);
    
    
Get order list 

    $result = $client->getOrders();

    
Get order 

    $result = $client->getOrder('orderId');  
      
Create order 

    $order = new Order();
    $order->setClientOrderNumber('abcd');
    $order->setOrderDate(new \DateTime());
    $order->setCarrier('DHL');
    $order->setDeliveryCountry('PL');
    $order->setDeliveryPostCode('10-234');
    $order->setDeliveryCity('Warsaw');
    $order->setDeliveryStreet('Test Street');
    $order->setDeliveryEmail('info@linker.shop');
    $order->setDeliveryRecipient('Joh Snow');
    $result = $this->subject->createOrder($order);
        
Get stock list 

    $result = $client->getStocks();