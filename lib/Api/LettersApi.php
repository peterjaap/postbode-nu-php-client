<?php
/**
 * LettersApi
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
 * LettersApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LettersApi
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
     * @return LettersApi
     */
    public function setApiClient(\Swagger\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation letterCancelByMailboxIdAndLetterIdGet
     *
     * Cancel letter
     *
     * @param string $x_authorization  (required)
     * @param string $mailbox_id  (required)
     * @param string $letter_id  (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return void
     */
    public function letterCancelByMailboxIdAndLetterIdGet($x_authorization, $mailbox_id, $letter_id)
    {
        list($response) = $this->letterCancelByMailboxIdAndLetterIdGetWithHttpInfo($x_authorization, $mailbox_id, $letter_id);
        return $response;
    }

    /**
     * Operation letterCancelByMailboxIdAndLetterIdGetWithHttpInfo
     *
     * Cancel letter
     *
     * @param string $x_authorization  (required)
     * @param string $mailbox_id  (required)
     * @param string $letter_id  (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function letterCancelByMailboxIdAndLetterIdGetWithHttpInfo($x_authorization, $mailbox_id, $letter_id)
    {
        // verify the required parameter 'x_authorization' is set
        if ($x_authorization === null) {
            throw new \InvalidArgumentException('Missing the required parameter $x_authorization when calling letterCancelByMailboxIdAndLetterIdGet');
        }
        // verify the required parameter 'mailbox_id' is set
        if ($mailbox_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $mailbox_id when calling letterCancelByMailboxIdAndLetterIdGet');
        }
        // verify the required parameter 'letter_id' is set
        if ($letter_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $letter_id when calling letterCancelByMailboxIdAndLetterIdGet');
        }
        // parse inputs
        $resourcePath = "/{mailbox_id}/letter/{letter_id}/cancel";
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
        // path params
        if ($mailbox_id !== null) {
            $resourcePath = str_replace(
                "{" . "mailbox_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($mailbox_id),
                $resourcePath
            );
        }
        // path params
        if ($letter_id !== null) {
            $resourcePath = str_replace(
                "{" . "letter_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($letter_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires HTTP basic authentication
        if (strlen($this->apiClient->getConfig()->getUsername()) !== 0 or strlen($this->apiClient->getConfig()->getPassword()) !== 0) {
            $headerParams['Authorization'] = 'Basic ' . base64_encode($this->apiClient->getConfig()->getUsername() . ":" . $this->apiClient->getConfig()->getPassword());
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/{mailbox_id}/letter/{letter_id}/cancel'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

    /**
     * Operation lettersByMailboxIdGet
     *
     * Get letter
     *
     * @param string $x_authorization  (required)
     * @param string $mailbox_id  (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\Getletter[]
     */
    public function lettersByMailboxIdGet($x_authorization, $mailbox_id)
    {
        list($response) = $this->lettersByMailboxIdGetWithHttpInfo($x_authorization, $mailbox_id);
        return $response;
    }

    /**
     * Operation lettersByMailboxIdGetWithHttpInfo
     *
     * Get letter
     *
     * @param string $x_authorization  (required)
     * @param string $mailbox_id  (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\Getletter[], HTTP status code, HTTP response headers (array of strings)
     */
    public function lettersByMailboxIdGetWithHttpInfo($x_authorization, $mailbox_id)
    {
        // verify the required parameter 'x_authorization' is set
        if ($x_authorization === null) {
            throw new \InvalidArgumentException('Missing the required parameter $x_authorization when calling lettersByMailboxIdGet');
        }
        // verify the required parameter 'mailbox_id' is set
        if ($mailbox_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $mailbox_id when calling lettersByMailboxIdGet');
        }
        // parse inputs
        $resourcePath = "/{mailbox_id}/letters";
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
        // path params
        if ($mailbox_id !== null) {
            $resourcePath = str_replace(
                "{" . "mailbox_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($mailbox_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires HTTP basic authentication
        if (strlen($this->apiClient->getConfig()->getUsername()) !== 0 or strlen($this->apiClient->getConfig()->getPassword()) !== 0) {
            $headerParams['Authorization'] = 'Basic ' . base64_encode($this->apiClient->getConfig()->getUsername() . ":" . $this->apiClient->getConfig()->getPassword());
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\Getletter[]',
                '/{mailbox_id}/letters'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\Getletter[]', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\Getletter[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation lettersByMailboxIdPost
     *
     * Create letter
     *
     * @param string $x_authorization  (required)
     * @param string $content_type  (required)
     * @param \Swagger\Client\Model\CreateletterRequest $body  (required)
     * @param string $mailbox_id  (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\Postletterresponse200OK
     */
    public function lettersByMailboxIdPost($x_authorization, $content_type, $body, $mailbox_id)
    {
        list($response) = $this->lettersByMailboxIdPostWithHttpInfo($x_authorization, $content_type, $body, $mailbox_id);
        return $response;
    }

    /**
     * Operation lettersByMailboxIdPostWithHttpInfo
     *
     * Create letter
     *
     * @param string $x_authorization  (required)
     * @param string $content_type  (required)
     * @param \Swagger\Client\Model\CreateletterRequest $body  (required)
     * @param string $mailbox_id  (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\Postletterresponse200OK, HTTP status code, HTTP response headers (array of strings)
     */
    public function lettersByMailboxIdPostWithHttpInfo($x_authorization, $content_type, $body, $mailbox_id)
    {
        // verify the required parameter 'x_authorization' is set
        if ($x_authorization === null) {
            throw new \InvalidArgumentException('Missing the required parameter $x_authorization when calling lettersByMailboxIdPost');
        }
        // verify the required parameter 'content_type' is set
        if ($content_type === null) {
            throw new \InvalidArgumentException('Missing the required parameter $content_type when calling lettersByMailboxIdPost');
        }
        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling lettersByMailboxIdPost');
        }
        // verify the required parameter 'mailbox_id' is set
        if ($mailbox_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $mailbox_id when calling lettersByMailboxIdPost');
        }
        // parse inputs
        $resourcePath = "/{mailbox_id}/letters";
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
        // header params
        if ($content_type !== null) {
            $headerParams['Content-Type'] = $this->apiClient->getSerializer()->toHeaderValue($content_type);
        }
        // path params
        if ($mailbox_id !== null) {
            $resourcePath = str_replace(
                "{" . "mailbox_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($mailbox_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires HTTP basic authentication
        if (strlen($this->apiClient->getConfig()->getUsername()) !== 0 or strlen($this->apiClient->getConfig()->getPassword()) !== 0) {
            $headerParams['Authorization'] = 'Basic ' . base64_encode($this->apiClient->getConfig()->getUsername() . ":" . $this->apiClient->getConfig()->getPassword());
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\Postletterresponse200OK',
                '/{mailbox_id}/letters'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\Postletterresponse200OK', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\Postletterresponse200OK', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
