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

    foreach ($client->getPlaces('EE', 'APT') as $place)
    {
        print_r($place);
    }

Create a new order

    $client->createOrders([
        (new SmartPost\Model\Order\OrderCreateRequest())
            ->setReference('123')
            ->setContent('new shipment')
            ->setSource((new OrderCreateRequestSource())->setCountry('EE'))
            ->setRecipient((new SmartPost\Model\Order\OrderCreateRequestRecipient())
                ->setName('John Smith')
                ->setPhone('55667788')
            )
            ->setDestination((new SmartPost\Model\Order\OrderCreateRequestDestination())
                ->setCountry('EE')
                ->setPlaceId('01007225')
            )
    ]);

Get tracking info

    $client->getTracking(['barcode1', 'barcode2']);