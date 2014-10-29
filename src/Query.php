<?php namespace Rapthera\Query;

class Query
{
    /**
     * Contains the address
     *
     * @string $address
     */
    protected $address;

    /**
     * Contains the port number
     *
     * @string $port
     */
    protected $port;

    /*
     * Contains the minecraft version
     *
     * @string $version
     */
    protected $version;

    /*
     * Connect to the server
     *
     * @param String $address
     * @param String $port
     * @return String
     */
    private function connect($address, $port)
    {
        //inb4 doesnt work
        $socket = socket_create(AF_INET, SOCKET_STREAM, SOL_TCP);
        $connect = socket_connect($address, $port);

    }
}