<?php

namespace Erutan409\Dreamhost;

use Erutan409\Dreamhost\API;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Psr7\Response;

abstract class Rest
{
    /**
     * Filters Guzzle request options.
     *
     * @param array $options
     *
     * @return $options
     */
    final protected function filterOptions(array $options)
    {
        $options['http_errors'] = true;

        return $options;
    }

    /**
     * Do REST call to Dreamhost API.
     *
     * @param string $method
     * @param string $uri
     * @param array $options
     *
     * @return Response
     * @throws GuzzleException
     */
    final protected function request(string $method, string $uri, array $options = [])
    {
        try {
            return (new Client())->request($method, $uri, self::filterOptions($options));
        } catch (ClientException $e) {
            return $e->getResponse();
        }
    }
}
