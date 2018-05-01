<?php

namespace Dhl\Middleware;

use GuzzleHttp\Psr7;
use Psr\Http\Message\RequestInterface;

/**
 * Class BodyRequestMiddleware
 *
 * middleware for moving the content in the (json-encoded) requestbody from the body-tag to the root
 * '{"body": {"example": "examplevalue"}}' would be '{"example": "examplevalue"}'
 *
 * @see http://docs.guzzlephp.org/en/stable/handlers-and-middleware.html#middleware
 *
 * @package Dhl\Middleware
 */
class RequestBodyRootMiddleware
{
    public function __invoke(callable $handler)
    {
        return function (RequestInterface $request, array $options) use ($handler) {
            /** @var Psr7\Stream $body */
            $body = $request->getBody();
            $contents = $body->getContents();
            if ($contents) {
                $object = json_decode($contents);
                if (json_last_error() === JSON_ERROR_NONE && property_exists($object, 'body')) {
                    $request = $request->withBody(Psr7\stream_for(\GuzzleHttp\json_encode($object->body)));
                }
            }
            return $handler($request, $options);
        };
    }
}