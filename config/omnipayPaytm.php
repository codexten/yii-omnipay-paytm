<?php

/* @var $params array */

return [
    'components' => [
        'omnipay' => [
            'defaultGateway' => 'paytm',
            'gateways' => [
                'paytm' => [
                    'driverName' => 'Paytm',
                    'parameters' => [
                        'MID' =>$params['paytm.mid'],
                        'MerchantKey' => $params['paytm.key'],
                        'IndustryTypeId' =>$params['paytm.industryTypeId'],
                        'ChannelId' =>$params['paytm.channelId'],
                        'Website' =>$params['paytm.webSite'],
                        'environment' =>$params['paytm.environment'],
                    ],
                ],
            ],
        ],
    ],
];
