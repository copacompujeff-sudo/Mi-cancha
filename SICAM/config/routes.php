<?php

return [
    'GET' => [
        '/' => ['AuthController', 'showLogin'],
        '/dashboard' => ['DashboardController', 'index'],
        '/adultos-mayores' => ['OlderAdultController', 'index'],
        '/adultos-mayores/crear' => ['OlderAdultController', 'create'],
        '/signos-vitales' => ['VitalSignController', 'index'],
        '/logout' => ['AuthController', 'logout'],
    ],
    'POST' => [
        '/login' => ['AuthController', 'login'],
        '/adultos-mayores/guardar' => ['OlderAdultController', 'store'],
        '/signos-vitales/guardar' => ['VitalSignController', 'store'],
    ],
];
