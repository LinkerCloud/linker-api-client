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