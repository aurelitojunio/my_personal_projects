<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$active_group = 'default';
$query_builder = TRUE;

// if ($_SERVER['HTTP_HOST'] == 'localhost') {
$active_group = 'portal_entrega';
// }

if (isset($_SERVER['HTTP_HOST'])) {
    switch ($_SERVER['HTTP_HOST']) {
        case 'localhost':
            $active_group = 'portal_entrega_homolog'; //portal_entrega_dev
            break;
        case 'localhost:8080':
            $active_group = 'portal_entrega_homolog';
            break;
        default:
            $active_group = 'default';
    }
}


$db['default'] = array(
    'dsn'	=> '',
    'hostname' => '10.11.129.49',
    'username' => 'root',
    'password' => 'srvb2b@2017',
    'database' => 'portal_cadastrovada',
    'dbdriver' => 'mysqli',
    'dbprefix' => '',
    'pconnect' => FALSE,
    'db_debug' => (ENVIRONMENT !== 'production'),
    'cache_on' => FALSE,
    'cachedir' => 'application/cache',
    'char_set' => 'utf8',
    'dbcollat' => 'utf8_unicode_ci',
    'swap_pre' => '',
    'encrypt' => FALSE,
    'compress' => FALSE,
    'stricton' => FALSE,
    'failover' => array(),
    'save_queries' => TRUE
);

$db['development'] = array(
    'dsn'	=> '',
    'hostname' => '10.11.129.49',
    'username' => 'root',
    'password' => 'srvb2b@2017',
    'database' => '',
    'dbdriver' => 'mysqli',
    'dbprefix' => '',
    'pconnect' => FALSE,
    'db_debug' => (ENVIRONMENT !== 'production'),
    'cache_on' => FALSE,
    'cachedir' => 'application/cache',
    'char_set' => 'utf8',
    'dbcollat' => 'utf8_unicode_ci',
    'swap_pre' => '',
    'encrypt' => FALSE,
    'compress' => FALSE,
    'stricton' => FALSE,
    'failover' => array(),
    'save_queries' => TRUE
);

$db['portal_entrega'] = array(
    'dsn'	=> '',
    'hostname' => '10.11.129.49',
    'username' => 'root',
    'password' => 'srvb2b@2017',
    'database' => 'portal_cadastrovada',
    'dbdriver' => 'mysqli',
    'dbprefix' => '',
    'pconnect' => FALSE,
    'db_debug' => (ENVIRONMENT !== 'production'),
    'cache_on' => FALSE,
    'cachedir' => 'application/cache',
    'char_set' => 'utf8',
    'dbcollat' => 'utf8_unicode_ci',
    'swap_pre' => '',
    'encrypt' => FALSE,
    'compress' => FALSE,
    'stricton' => FALSE,
    'failover' => array(),
    'save_queries' => TRUE
);

$db['portal_entrega_homolog'] = array(
    'dsn'	=> '',
    'hostname' => '10.11.129.49',
    'username' => 'root',
    'password' => 'srvb2b@2017',
    'database' => 'portal_cadastrovada',
    'dbdriver' => 'mysqli',
    'dbprefix' => '',
    'pconnect' => FALSE,
    'db_debug' => TRUE,
    'cache_on' => FALSE,
    'cachedir' => 'application/cache',
    'char_set' => 'utf8',
    'dbcollat' => 'utf8_unicode_ci',
    'swap_pre' => '',
    'encrypt' => FALSE,
    'compress' => FALSE,
    'stricton' => FALSE,
    'failover' => array(),
    'save_queries' => TRUE
);

$db['ger_entrega_dev'] = array(
    'dsn'	=> '',
    'hostname' => '10.11.129.49',
    'username' => 'root',
    'password' => 'srvb2b@2017',
    'database' => 'ger_entrega',
    'dbdriver' => 'mysqli',
    'dbprefix' => '',
    'pconnect' => FALSE,
    'db_debug' => (ENVIRONMENT !== 'production'),
    'cache_on' => FALSE,
    'cachedir' => 'application/cache',
    'char_set' => 'utf8',
    'dbcollat' => 'utf8_unicode_ci',
    'swap_pre' => '',
    'encrypt' => FALSE,
    'compress' => FALSE,
    'stricton' => FALSE,
    'failover' => array(),
    'save_queries' => TRUE
);

$db['ger_entrega'] = array(
    'dsn'	=> '',
    'hostname' => '10.111.2.55',
    'username' => 'root',
    'password' => 'praia',
    'database' => 'ger_entrega',
    'dbdriver' => 'mysqli',
    'dbprefix' => '',
    'pconnect' => FALSE,
    'db_debug' => (ENVIRONMENT !== 'production'),
    'cache_on' => FALSE,
    'cachedir' => 'application/cache',
    'char_set' => 'utf8',
    'dbcollat' => 'utf8_unicode_ci',
    'swap_pre' => '',
    'encrypt' => FALSE,
    'compress' => FALSE,
    'stricton' => FALSE,
    'failover' => array(),
    'save_queries' => TRUE
);

$db['configuracao'] = array(
    'dsn'	=> '',
    'hostname' => '10.111.2.55',
    'username' => 'root',
    'password' => 'praia',
    'database' => 'configuracao',
    'dbdriver' => 'mysqli',
    'dbprefix' => '',
    'pconnect' => FALSE,
    'db_debug' => (ENVIRONMENT !== 'production'),
    'cache_on' => FALSE,
    'cachedir' => 'application/cache',
    'char_set' => 'utf8',
    'dbcollat' => 'utf8_unicode_ci',
    'swap_pre' => '',
    'encrypt' => FALSE,
    'compress' => FALSE,
    'stricton' => FALSE,
    'failover' => array(),
    'save_queries' => TRUE
);

$db['planta_online'] = array(
    'dsn'	=> '',
    'hostname' => '10.111.2.55',
    'username' => 'root',
    'password' => 'praia',
    'database' => 'bd_planta_online',
    'dbdriver' => 'mysqli',
    'dbprefix' => '',
    'pconnect' => FALSE,
    'db_debug' => (ENVIRONMENT !== 'production'),
    'cache_on' => FALSE,
    'cachedir' => 'application/cache',
    'char_set' => 'utf8',
    'dbcollat' => 'utf8_unicode_ci',
    'swap_pre' => '',
    'encrypt' => FALSE,
    'compress' => FALSE,
    'stricton' => FALSE,
    'failover' => array(),
    'save_queries' => TRUE
);

$db['ger_entrega_homolog'] = array(
    'dsn'	=> '',
    'hostname' => '10.111.2.55',
    'username' => 'portal_homolog',
    'password' => 'p0rt4l',
    'database' => 'ger_entrega',
    'dbdriver' => 'mysqli',
    'dbprefix' => '',
    'pconnect' => FALSE,
    'db_debug' => (ENVIRONMENT !== 'production'),
    'cache_on' => FALSE,
    'cachedir' => 'application/cache',
    'char_set' => 'utf8',
    'dbcollat' => 'utf8_unicode_ci',
    'swap_pre' => '',
    'encrypt' => FALSE,
    'compress' => FALSE,
    'stricton' => FALSE,
    'failover' => array(),
    'save_queries' => TRUE
);

$db['configuracao_dev'] = array(
    'dsn'	=> '',
    'hostname' => '10.111.2.55',
    'username' => 'root',
    'password' => 'praia',
    'database' => 'configuracao',
    'dbdriver' => 'mysqli',
    'dbprefix' => '',
    'pconnect' => FALSE,
    'db_debug' => (ENVIRONMENT !== 'production'),
    'cache_on' => FALSE,
    'cachedir' => 'application/cache',
    'char_set' => 'utf8',
    'dbcollat' => 'utf8_unicode_ci',
    'swap_pre' => '',
    'encrypt' => FALSE,
    'compress' => FALSE,
    'stricton' => FALSE,
    'failover' => array(),
    'save_queries' => TRUE
);

$db['configuracao_homolog'] = array(
    'dsn'	=> '',
    'hostname' => '10.111.2.55',
    'username' => 'portal_homolog',
    'password' => 'p0rt4l',
    'database' => 'configuracao',
    'dbdriver' => 'mysqli',
    'dbprefix' => '',
    'pconnect' => FALSE,
    'db_debug' => (ENVIRONMENT !== 'production'),
    'cache_on' => FALSE,
    'cachedir' => 'application/cache',
    'char_set' => 'utf8',
    'dbcollat' => 'utf8_unicode_ci',
    'swap_pre' => '',
    'encrypt' => FALSE,
    'compress' => FALSE,
    'stricton' => FALSE,
    'failover' => array(),
    'save_queries' => TRUE
);

$db['acompanhamento'] = array(
    'dsn'   => '',
    'hostname' => '10.11.129.49',
    'username' => 'root',
    'password' => 'srvb2b@2017',
    'database' => 'acompanhamento',
    'dbdriver' => 'mysqli',
    'dbprefix' => '',
    'pconnect' => FALSE,
    'db_debug' => (ENVIRONMENT !== 'production'),
    'cache_on' => FALSE,
    'cachedir' => 'application/cache',
    'char_set' => 'utf8',
    'dbcollat' => 'utf8_unicode_ci',
    'swap_pre' => '',
    'encrypt' => FALSE,
    'compress' => FALSE,
    'stricton' => FALSE,
    'failover' => array(),
    'save_queries' => TRUE

);

$db['carteira'] = array(
    'dsn'	=> '',
    'hostname' => '10.111.2.55',
    'username' => 'root',
    'password' => 'praia',
    'database' => 'carteira',
    'dbdriver' => 'mysqli',
    'dbprefix' => '',
    'pconnect' => FALSE,
    'db_debug' => (ENVIRONMENT !== 'production'),
    'cache_on' => FALSE,
    'cachedir' => 'application/cache',
    'char_set' => 'utf8',
    'dbcollat' => 'utf8_unicode_ci',
    'swap_pre' => '',
    'encrypt' => FALSE,
    'compress' => FALSE,
    'stricton' => FALSE,
    'failover' => array(),
    'save_queries' => TRUE
);

$db['capex'] = array(
    'dsn'	=> '',
    'hostname' => '10.111.2.55',
    'username' => 'root',
    'password' => 'praia',
    'database' => 'capex',
    'dbdriver' => 'mysqli',
    'dbprefix' => '',
    'pconnect' => FALSE,
    'db_debug' => (ENVIRONMENT !== 'production'),
    'cache_on' => FALSE,
    'cachedir' => 'application/cache',
    'char_set' => 'utf8',
    'dbcollat' => 'utf8_unicode_ci',
    'swap_pre' => '',
    'encrypt' => FALSE,
    'compress' => FALSE,
    'stricton' => FALSE,
    'failover' => array(),
    'save_queries' => TRUE
);

$db['bd_planta_online'] = array(
    'dsn'	=> '',
    'hostname' => '10.11.129.49',
    'username' => 'root',
    'password' => 'srvb2b@2017',
    'database' => 'planta_online',
    'dbdriver' => 'mysqli',
    'dbprefix' => '',
    'pconnect' => FALSE,
    'db_debug' => (ENVIRONMENT !== 'production'),
    'cache_on' => FALSE,
    'cachedir' => 'application/cache',
    'char_set' => 'utf8',
    'dbcollat' => 'utf8_unicode_ci',
    'swap_pre' => '',
    'encrypt' => FALSE,
    'compress' => FALSE,
    'stricton' => FALSE,
    'failover' => array(),
    'save_queries' => TRUE
);

$db['cadastro_vada'] = array(
    'dsn'	=> '',
    'hostname' => '10.111.2.55',
    'username' => 'root',
    'password' => 'praia',
    'database' => 'ger_cadastro',
    'dbdriver' => 'mysqli',
    'dbprefix' => '',
    'pconnect' => FALSE,
    'db_debug' => (ENVIRONMENT !== 'production'),
    'cache_on' => FALSE,
    'cachedir' => 'application/cache',
    'char_set' => 'utf8',
    'dbcollat' => 'utf8_unicode_ci',
    'swap_pre' => '',
    'encrypt' => FALSE,
    'compress' => FALSE,
    'stricton' => FALSE,
    'failover' => array(),
    'save_queries' => TRUE
);

$db['bd_calculadora'] = array(
    'dsn'	=> '',
    'hostname' => '10.111.2.55',
    'username' => 'root',
    'password' => 'praia',
    'database' => 'bd_calculadora',
    'dbdriver' => 'mysqli',
    'dbprefix' => '',
    'pconnect' => FALSE,
    'db_debug' => (ENVIRONMENT !== 'production'),
    'cache_on' => FALSE,
    'cachedir' => 'application/cache',
    'char_set' => 'utf8',
    'dbcollat' => 'utf8_unicode_ci',
    'swap_pre' => '',
    'encrypt' => FALSE,
    'compress' => FALSE,
    'stricton' => FALSE,
    'failover' => array(),
    'save_queries' => TRUE
);

$db['cadastro_vada'] = array(
    'dsn'	=> '',
    'hostname' => '10.111.2.55',
    'username' => 'root',
    'password' => 'praia',
    'database' => 'ger_cadastro',
    'dbdriver' => 'mysqli',
    'dbprefix' => '',
    'pconnect' => FALSE,
    'db_debug' => (ENVIRONMENT !== 'production'),
    'cache_on' => FALSE,
    'cachedir' => 'application/cache',
    'char_set' => 'utf8',
    'dbcollat' => 'utf8_unicode_ci',
    'swap_pre' => '',
    'encrypt' => FALSE,
    'compress' => FALSE,
    'stricton' => FALSE,
    'failover' => array(),
    'save_queries' => TRUE
);

$db['reports_cadastro'] = array(
    'dsn'	=> '',
    'hostname' => '10.111.2.55',
    'username' => 'root',
    'password' => 'praia',
    'database' => 'reports_cadastro',
    'dbdriver' => 'mysqli',
    'dbprefix' => '',
    'pconnect' => FALSE,
    'db_debug' => (ENVIRONMENT !== 'production'),
    'cache_on' => FALSE,
    'cachedir' => 'application/cache',
    'char_set' => 'utf8',
    'dbcollat' => 'utf8_unicode_ci',
    'swap_pre' => '',
    'encrypt' => FALSE,
    'compress' => FALSE,
    'stricton' => FALSE,
    'failover' => array(),
    'save_queries' => TRUE
);



$db['DB_PLANEMP'] = array(
    'dsn'      => '',
    'hostname' => 'SQLPW90DB07,1447',
    'username' => 'SDBPM6001',
    'password' => 'Ex2Aw5NF',
    'database' => 'DB_PLANEMP',
    'dbdriver' => 'sqlsrv',
    'dbprefix' => '',
    'pconnect' => FALSE,
    'db_debug' => (ENVIRONMENT !== 'production'),
    'cache_on' => FALSE,
    'cachedir' => 'application/cache',
    'char_set' => 'utf8',
    'dbcollat' => 'utf8_unicode_ci',
    'swap_pre' => '',
    'encrypt' => FALSE,
    'compress' => FALSE,
    'stricton' => FALSE,
    'failover' => array(),
    'save_queries' => TRUE
);