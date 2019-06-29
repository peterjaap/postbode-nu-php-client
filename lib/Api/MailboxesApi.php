<?php
/**
 * MailboxesApi
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Postbode.nu
 *
 * Postbode.nu API for sending letters   # Getting started  ## Authentication  To make use of the API one needs a account and an API-Key  Account: https://app.postbode.nu/register<br/> API Key: https://app.postbode.nu/settings/api -> \"API Key Aanmaken\"  Use API key in header: > X-Authorization: XXXXXXXXX-YOUR-API-KEY-XXXXXXXXX   ## Sandbox mode  For testing purposes there is a sandbox mode.   To activate: https://app.postbode.nu/mailbox/settings -> Testomgeving  While active no letters will be send in production. After disabling only new letters will be printed and send to reciever.   ## Billing  Payement by letter and upfront via you mailbox balance.  To deposit credit: Login app.postbode.nu -> Tegoed -> Tegoed aanvullen  For seamless experience activate auto deposit. Please reach out to us on postkantoor@postbode.nu for activation.
 *
 * OpenAPI spec version: 1.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Api;

use \Swagger\Client\ApiClient;
use \Swagger\Client\ApiException;
use \Swagger\Client\Configuration;
use \Swagger\Client\ObjectSerializer;

/**
 * MailboxesApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MailboxesApi
{
    /**
     * API Client
     *
     * @var \Swagger\Client\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \Swagger\Client\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\Swagger\Client\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \Swagger\Client\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \Swagger\Client\ApiClient $apiClient set the API client
     *
     * @return MailboxesApi
     */
    public function setApiClient(\Swagger\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation unnammedEndpointGet
     *
     * Get available mailboxes
     *
     * @param string $x_authorization  (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return string
     */
    public function unnammedEndpointGet($x_authorization)
    {
        list($response) = $this->unnammedEndpointGetWithHttpInfo($x_authorization);
        return $response;
    }

    /**
     * Operation unnammedEndpointGetWithHttpInfo
     *
     * Get available mailboxes
     *
     * @param string $x_authorization  (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of string, HTTP status code, HTTP response headers (array of strings)
     */
    public function unnammedEndpointGetWithHttpInfo($x_authorization)
    {
        // verify the required parameter 'x_authorization' is set
        if ($x_authorization === null) {
            throw new \InvalidArgumentException('Missing the required parameter $x_authorization when calling unnammedEndpointGet');
        }
        // parse inputs
        $resourcePath = "/";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // header params
        if ($x_authorization !== null) {
            $headerParams['X-Authorization'] = $this->apiClient->getSerializer()->toHeaderValue($x_authorization);
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                'string',
                '/'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, 'string', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'string', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
