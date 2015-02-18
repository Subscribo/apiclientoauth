<?php namespace Subscribo\ApiClientOAuth\Connectors;

use Subscribo\RestClient\RestClient;

/**
 * Class OAuthConnector
 *
 * @package Subscribo\ApiClientOAuth
 */
class OAuthConnector
{
    /**
     * @var \Subscribo\RestClient\RestClient
     */
    protected $restClient;

    public function __construct(RestClient $restClient)
    {
        $this->restClient = $restClient;
    }

    public function getConfig($driver, array $signatureOptions = null)
    {
        $responseData = $this->restClient->process('oauth/config/'.$driver, 'GET', null, null, null, $signatureOptions, false);

        return $responseData['result'][$driver];
    }

}
