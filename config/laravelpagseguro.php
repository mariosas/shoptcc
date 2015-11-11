<?php

return [
    'sandbox' => false,//DEFINI SE SERÃO UTILIZADO O AMBIENTE DE TESTES
    
    'credentials' => [//SETA AS CREDENCIAIS DE SUA LOJA
        'email' => "mario.santos@plusvision.com.br",
        'token' => "C617CDD295DD452995EA5B85ED022F5C",
        //'token' => "BA8B82B9B52141DD9E7C6C9C4B3BE670",
    ],
    'currency' => [//MOEDA QUE SERÃ� UTILIZADA COMO MEIO DE PAGAMENTO
        'type' => 'BRL'
    ],
    'reference' => [//CRIAR UMA REFERENCIA PARA OS PRODUTOS VENDIDOS
        'idReference' => "shoptcc"
    ],
    //'url' => 'https://ws.sandbox.pagseguro.uol.com.br/v2/checkout',
	'url' => 'https://ws.pagseguro.uol.com.br/v2/checkout',
];
