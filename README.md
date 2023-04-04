# Itella SmartPost API client

## How to install

    composer require inkr/smartpost-apiclient 

## How to use

Initialize client

    $client = new SmartPost\SmartPostApiClient((new SmartPost\SmartPostApiClientConf())
        ->setApiUrl('https://gateway.posti.fi/smartpost/api/ext/v1/')
        ->setAuthKey('apikey')
    );

List places

    foreach ($client->getPlaces('ee', 'apt') as $place)
    {
        print_r($place);
    }

Get tracking info
    
    print_r($client->getTracking(['barcode1', 'barcode2']));

Create a new order

    print_r($client->createOrders([
        (new SmartPost\Model\Order\OrderCreateRequest())
            ->setReference('123')
            ->setContent('new shipment')
            ->setSourceCountry((new OrderCreateRequestSource())->setCountry('ee'))
            ->setRecipient((new SmartPost\Model\Order\OrderCreateRequestRecipient())
                ->setName('John Smith')
                ->setPhone('55667788')
            )
            ->setDestination((new SmartPost\Model\Order\OrderCreateRequestDestination())
                ->setPlaceId('01007225')
            )
    ]));

License (GitHub function can create LICENSE file)
