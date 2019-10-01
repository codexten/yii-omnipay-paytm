<?php

/* @var $params array */

return [
    'components' => [
        'omnipay' => [
            'defaultGateway' => 'Paytm',
            'gateways' => [
                'paytm' => [
                    'driverName' => 'Paytm',
                    'parameters' => [
                        'mid' =>$params['paytm.mid'],
                        'key' => $params['paytm.key'],
                        'industryTypeId' =>$params['paytm.industryTypeId'],
                        'channelId' =>$params['paytm.channelId'],
                        'webSite' =>$params['paytm.webSite'],
                        'environment' =>$params['paytm.environment'],
                    ],
                ],
            ],
        ],
    ],
];
