<?php
/**
 * CartonActivityApi
 * PHP version 5
 *
 * @category Class
 * @package  Infoplus
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
/**
 *  Copyright 2016 SmartBear Software
 *
 *  Licensed under the Apache License, Version 2.0 (the "License");
 *  you may not use this file except in compliance with the License.
 *  You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 *  Unless required by applicable law or agreed to in writing, software
 *  distributed under the License is distributed on an "AS IS" BASIS,
 *  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  See the License for the specific language governing permissions and
 *  limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program. 
 * https://github.com/swagger-api/swagger-codegen 
 * Do not edit the class manually.
 */

namespace Infoplus\Api;

use \Infoplus\Configuration;
use \Infoplus\ApiClient;
use \Infoplus\ApiException;
use \Infoplus\ObjectSerializer;

/**
 * CartonActivityApi Class Doc Comment
 *
 * @category Class
 * @package  Infoplus
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CartonActivityApi
{

    /**
     * API Client
     * @var \Infoplus\ApiClient instance of the ApiClient
     */
    protected $apiClient;
  
    /**
     * Constructor
     * @param \Infoplus\ApiClient|null $apiClient The api client to use
     */
    function __construct($apiClient = null)
    {
        if ($apiClient == null) {
            $apiClient = new ApiClient();
            $apiClient->getConfig()->setHost('https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api');
        }
  
        $this->apiClient = $apiClient;
    }
  
    /**
     * Get API client
     * @return \Infoplus\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }
  
    /**
     * Set the API client
     * @param \Infoplus\ApiClient $apiClient set the API client
     * @return CartonActivityApi
     */
    public function setApiClient(ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }
  
    
    /**
     * addCartonActivity
     *
     * Create a cartonActivity
     *
     * @param \Infoplus\Model\CartonActivity $body CartonActivity to be inserted. (required)
     * @return \Infoplus\Model\CartonActivity
     * @throws \Infoplus\ApiException on non-2xx response
     */
    public function addCartonActivity($body)
    {
        list($response, $statusCode, $httpHeader) = $this->addCartonActivityWithHttpInfo ($body);
        return $response; 
    }


    /**
     * addCartonActivityWithHttpInfo
     *
     * Create a cartonActivity
     *
     * @param \Infoplus\Model\CartonActivity $body CartonActivity to be inserted. (required)
     * @return Array of \Infoplus\Model\CartonActivity, HTTP status code, HTTP response headers (array of strings)
     * @throws \Infoplus\ApiException on non-2xx response
     */
    public function addCartonActivityWithHttpInfo($body)
    {
        
        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling addCartonActivity');
        }
  
        // parse inputs
        $resourcePath = "/beta/cartonActivity";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array('application/json'));
  
        
        
        
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
        
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('API-Key');
        if (strlen($apiKey) !== 0) {
            $headerParams['API-Key'] = $apiKey;
        }
        
        
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, 'POST',
                $queryParams, $httpBody,
                $headerParams, '\Infoplus\Model\CartonActivity'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\Infoplus\ObjectSerializer::deserialize($response, '\Infoplus\Model\CartonActivity', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \Infoplus\ObjectSerializer::deserialize($e->getResponseBody(), '\Infoplus\Model\CartonActivity', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            case 405:
                $data = \Infoplus\ObjectSerializer::deserialize($e->getResponseBody(), '\Infoplus\Model\ApiResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
    /**
     * addCartonActivityAudit
     *
     * Add new audit for a cartonActivity
     *
     * @param int $carton_activity_id Id of the cartonActivity to add an audit to (required)
     * @param string $carton_activity_audit The audit to add (required)
     * @return void
     * @throws \Infoplus\ApiException on non-2xx response
     */
    public function addCartonActivityAudit($carton_activity_id, $carton_activity_audit)
    {
        list($response, $statusCode, $httpHeader) = $this->addCartonActivityAuditWithHttpInfo ($carton_activity_id, $carton_activity_audit);
        return $response; 
    }


    /**
     * addCartonActivityAuditWithHttpInfo
     *
     * Add new audit for a cartonActivity
     *
     * @param int $carton_activity_id Id of the cartonActivity to add an audit to (required)
     * @param string $carton_activity_audit The audit to add (required)
     * @return Array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws \Infoplus\ApiException on non-2xx response
     */
    public function addCartonActivityAuditWithHttpInfo($carton_activity_id, $carton_activity_audit)
    {
        
        // verify the required parameter 'carton_activity_id' is set
        if ($carton_activity_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $carton_activity_id when calling addCartonActivityAudit');
        }
        // verify the required parameter 'carton_activity_audit' is set
        if ($carton_activity_audit === null) {
            throw new \InvalidArgumentException('Missing the required parameter $carton_activity_audit when calling addCartonActivityAudit');
        }
  
        // parse inputs
        $resourcePath = "/beta/cartonActivity/{cartonActivityId}/audit/{cartonActivityAudit}";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array('application/json'));
  
        
        
        // path params
        
        if ($carton_activity_id !== null) {
            $resourcePath = str_replace(
                "{" . "cartonActivityId" . "}",
                $this->apiClient->getSerializer()->toPathValue($carton_activity_id),
                $resourcePath
            );
        }// path params
        
        if ($carton_activity_audit !== null) {
            $resourcePath = str_replace(
                "{" . "cartonActivityAudit" . "}",
                $this->apiClient->getSerializer()->toPathValue($carton_activity_audit),
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
        
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('API-Key');
        if (strlen($apiKey) !== 0) {
            $headerParams['API-Key'] = $apiKey;
        }
        
        
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, 'PUT',
                $queryParams, $httpBody,
                $headerParams
            );
            
            return array(null, $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            }
  
            throw $e;
        }
    }
    
    /**
     * addCartonActivityTag
     *
     * Add new tags for a cartonActivity.
     *
     * @param int $carton_activity_id Id of the cartonActivity to add a tag to (required)
     * @param string $carton_activity_tag The tag to add (required)
     * @return void
     * @throws \Infoplus\ApiException on non-2xx response
     */
    public function addCartonActivityTag($carton_activity_id, $carton_activity_tag)
    {
        list($response, $statusCode, $httpHeader) = $this->addCartonActivityTagWithHttpInfo ($carton_activity_id, $carton_activity_tag);
        return $response; 
    }


    /**
     * addCartonActivityTagWithHttpInfo
     *
     * Add new tags for a cartonActivity.
     *
     * @param int $carton_activity_id Id of the cartonActivity to add a tag to (required)
     * @param string $carton_activity_tag The tag to add (required)
     * @return Array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws \Infoplus\ApiException on non-2xx response
     */
    public function addCartonActivityTagWithHttpInfo($carton_activity_id, $carton_activity_tag)
    {
        
        // verify the required parameter 'carton_activity_id' is set
        if ($carton_activity_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $carton_activity_id when calling addCartonActivityTag');
        }
        // verify the required parameter 'carton_activity_tag' is set
        if ($carton_activity_tag === null) {
            throw new \InvalidArgumentException('Missing the required parameter $carton_activity_tag when calling addCartonActivityTag');
        }
  
        // parse inputs
        $resourcePath = "/beta/cartonActivity/{cartonActivityId}/tag/{cartonActivityTag}";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array('application/json'));
  
        
        
        // path params
        
        if ($carton_activity_id !== null) {
            $resourcePath = str_replace(
                "{" . "cartonActivityId" . "}",
                $this->apiClient->getSerializer()->toPathValue($carton_activity_id),
                $resourcePath
            );
        }// path params
        
        if ($carton_activity_tag !== null) {
            $resourcePath = str_replace(
                "{" . "cartonActivityTag" . "}",
                $this->apiClient->getSerializer()->toPathValue($carton_activity_tag),
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
        
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('API-Key');
        if (strlen($apiKey) !== 0) {
            $headerParams['API-Key'] = $apiKey;
        }
        
        
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, 'PUT',
                $queryParams, $httpBody,
                $headerParams
            );
            
            return array(null, $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            }
  
            throw $e;
        }
    }
    
    /**
     * deleteCartonActivity
     *
     * Delete a cartonActivity
     *
     * @param int $carton_activity_id Id of the cartonActivity to be deleted. (required)
     * @return void
     * @throws \Infoplus\ApiException on non-2xx response
     */
    public function deleteCartonActivity($carton_activity_id)
    {
        list($response, $statusCode, $httpHeader) = $this->deleteCartonActivityWithHttpInfo ($carton_activity_id);
        return $response; 
    }


    /**
     * deleteCartonActivityWithHttpInfo
     *
     * Delete a cartonActivity
     *
     * @param int $carton_activity_id Id of the cartonActivity to be deleted. (required)
     * @return Array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws \Infoplus\ApiException on non-2xx response
     */
    public function deleteCartonActivityWithHttpInfo($carton_activity_id)
    {
        
        // verify the required parameter 'carton_activity_id' is set
        if ($carton_activity_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $carton_activity_id when calling deleteCartonActivity');
        }
  
        // parse inputs
        $resourcePath = "/beta/cartonActivity/{cartonActivityId}";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array());
  
        
        
        // path params
        
        if ($carton_activity_id !== null) {
            $resourcePath = str_replace(
                "{" . "cartonActivityId" . "}",
                $this->apiClient->getSerializer()->toPathValue($carton_activity_id),
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
        
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('API-Key');
        if (strlen($apiKey) !== 0) {
            $headerParams['API-Key'] = $apiKey;
        }
        
        
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, 'DELETE',
                $queryParams, $httpBody,
                $headerParams
            );
            
            return array(null, $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            }
  
            throw $e;
        }
    }
    
    /**
     * deleteCartonActivityTag
     *
     * Delete a tag for a cartonActivity.
     *
     * @param int $carton_activity_id Id of the cartonActivity to remove tag from (required)
     * @param string $carton_activity_tag The tag to delete (required)
     * @return void
     * @throws \Infoplus\ApiException on non-2xx response
     */
    public function deleteCartonActivityTag($carton_activity_id, $carton_activity_tag)
    {
        list($response, $statusCode, $httpHeader) = $this->deleteCartonActivityTagWithHttpInfo ($carton_activity_id, $carton_activity_tag);
        return $response; 
    }


    /**
     * deleteCartonActivityTagWithHttpInfo
     *
     * Delete a tag for a cartonActivity.
     *
     * @param int $carton_activity_id Id of the cartonActivity to remove tag from (required)
     * @param string $carton_activity_tag The tag to delete (required)
     * @return Array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws \Infoplus\ApiException on non-2xx response
     */
    public function deleteCartonActivityTagWithHttpInfo($carton_activity_id, $carton_activity_tag)
    {
        
        // verify the required parameter 'carton_activity_id' is set
        if ($carton_activity_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $carton_activity_id when calling deleteCartonActivityTag');
        }
        // verify the required parameter 'carton_activity_tag' is set
        if ($carton_activity_tag === null) {
            throw new \InvalidArgumentException('Missing the required parameter $carton_activity_tag when calling deleteCartonActivityTag');
        }
  
        // parse inputs
        $resourcePath = "/beta/cartonActivity/{cartonActivityId}/tag/{cartonActivityTag}";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array());
  
        
        
        // path params
        
        if ($carton_activity_id !== null) {
            $resourcePath = str_replace(
                "{" . "cartonActivityId" . "}",
                $this->apiClient->getSerializer()->toPathValue($carton_activity_id),
                $resourcePath
            );
        }// path params
        
        if ($carton_activity_tag !== null) {
            $resourcePath = str_replace(
                "{" . "cartonActivityTag" . "}",
                $this->apiClient->getSerializer()->toPathValue($carton_activity_tag),
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
        
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('API-Key');
        if (strlen($apiKey) !== 0) {
            $headerParams['API-Key'] = $apiKey;
        }
        
        
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, 'DELETE',
                $queryParams, $httpBody,
                $headerParams
            );
            
            return array(null, $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            }
  
            throw $e;
        }
    }
    
    /**
     * getCartonActivityByFilter
     *
     * Search cartonActivitys by filter
     *
     * @param string $filter Query string, used to filter results. (optional)
     * @param int $page Result page number.  Defaults to 1. (optional)
     * @param int $limit Maximum results per page.  Defaults to 20.  Max allowed value is 250. (optional)
     * @param string $sort Sort results by specified field. (optional)
     * @return \Infoplus\Model\CartonActivity[]
     * @throws \Infoplus\ApiException on non-2xx response
     */
    public function getCartonActivityByFilter($filter = null, $page = null, $limit = null, $sort = null)
    {
        list($response, $statusCode, $httpHeader) = $this->getCartonActivityByFilterWithHttpInfo ($filter, $page, $limit, $sort);
        return $response; 
    }


    /**
     * getCartonActivityByFilterWithHttpInfo
     *
     * Search cartonActivitys by filter
     *
     * @param string $filter Query string, used to filter results. (optional)
     * @param int $page Result page number.  Defaults to 1. (optional)
     * @param int $limit Maximum results per page.  Defaults to 20.  Max allowed value is 250. (optional)
     * @param string $sort Sort results by specified field. (optional)
     * @return Array of \Infoplus\Model\CartonActivity[], HTTP status code, HTTP response headers (array of strings)
     * @throws \Infoplus\ApiException on non-2xx response
     */
    public function getCartonActivityByFilterWithHttpInfo($filter = null, $page = null, $limit = null, $sort = null)
    {
        
  
        // parse inputs
        $resourcePath = "/beta/cartonActivity/search";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array());
  
        // query params
        
        if ($filter !== null) {
            $queryParams['filter'] = $this->apiClient->getSerializer()->toQueryValue($filter);
        }// query params
        
        if ($page !== null) {
            $queryParams['page'] = $this->apiClient->getSerializer()->toQueryValue($page);
        }// query params
        
        if ($limit !== null) {
            $queryParams['limit'] = $this->apiClient->getSerializer()->toQueryValue($limit);
        }// query params
        
        if ($sort !== null) {
            $queryParams['sort'] = $this->apiClient->getSerializer()->toQueryValue($sort);
        }
        
        
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        
  
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('API-Key');
        if (strlen($apiKey) !== 0) {
            $headerParams['API-Key'] = $apiKey;
        }
        
        
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, 'GET',
                $queryParams, $httpBody,
                $headerParams, '\Infoplus\Model\CartonActivity[]'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\Infoplus\ObjectSerializer::deserialize($response, '\Infoplus\Model\CartonActivity[]', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \Infoplus\ObjectSerializer::deserialize($e->getResponseBody(), '\Infoplus\Model\CartonActivity[]', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
    /**
     * getCartonActivityById
     *
     * Get a cartonActivity by id
     *
     * @param int $carton_activity_id Id of the cartonActivity to be returned. (required)
     * @return \Infoplus\Model\CartonActivity
     * @throws \Infoplus\ApiException on non-2xx response
     */
    public function getCartonActivityById($carton_activity_id)
    {
        list($response, $statusCode, $httpHeader) = $this->getCartonActivityByIdWithHttpInfo ($carton_activity_id);
        return $response; 
    }


    /**
     * getCartonActivityByIdWithHttpInfo
     *
     * Get a cartonActivity by id
     *
     * @param int $carton_activity_id Id of the cartonActivity to be returned. (required)
     * @return Array of \Infoplus\Model\CartonActivity, HTTP status code, HTTP response headers (array of strings)
     * @throws \Infoplus\ApiException on non-2xx response
     */
    public function getCartonActivityByIdWithHttpInfo($carton_activity_id)
    {
        
        // verify the required parameter 'carton_activity_id' is set
        if ($carton_activity_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $carton_activity_id when calling getCartonActivityById');
        }
  
        // parse inputs
        $resourcePath = "/beta/cartonActivity/{cartonActivityId}";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array());
  
        
        
        // path params
        
        if ($carton_activity_id !== null) {
            $resourcePath = str_replace(
                "{" . "cartonActivityId" . "}",
                $this->apiClient->getSerializer()->toPathValue($carton_activity_id),
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
        
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('API-Key');
        if (strlen($apiKey) !== 0) {
            $headerParams['API-Key'] = $apiKey;
        }
        
        
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, 'GET',
                $queryParams, $httpBody,
                $headerParams, '\Infoplus\Model\CartonActivity'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\Infoplus\ObjectSerializer::deserialize($response, '\Infoplus\Model\CartonActivity', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \Infoplus\ObjectSerializer::deserialize($e->getResponseBody(), '\Infoplus\Model\CartonActivity', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
    /**
     * getCartonActivityTags
     *
     * Get the tags for a cartonActivity.
     *
     * @param int $carton_activity_id Id of the cartonActivity to get tags for (required)
     * @return void
     * @throws \Infoplus\ApiException on non-2xx response
     */
    public function getCartonActivityTags($carton_activity_id)
    {
        list($response, $statusCode, $httpHeader) = $this->getCartonActivityTagsWithHttpInfo ($carton_activity_id);
        return $response; 
    }


    /**
     * getCartonActivityTagsWithHttpInfo
     *
     * Get the tags for a cartonActivity.
     *
     * @param int $carton_activity_id Id of the cartonActivity to get tags for (required)
     * @return Array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws \Infoplus\ApiException on non-2xx response
     */
    public function getCartonActivityTagsWithHttpInfo($carton_activity_id)
    {
        
        // verify the required parameter 'carton_activity_id' is set
        if ($carton_activity_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $carton_activity_id when calling getCartonActivityTags');
        }
  
        // parse inputs
        $resourcePath = "/beta/cartonActivity/{cartonActivityId}/tag";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array());
  
        
        
        // path params
        
        if ($carton_activity_id !== null) {
            $resourcePath = str_replace(
                "{" . "cartonActivityId" . "}",
                $this->apiClient->getSerializer()->toPathValue($carton_activity_id),
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
        
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('API-Key');
        if (strlen($apiKey) !== 0) {
            $headerParams['API-Key'] = $apiKey;
        }
        
        
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, 'GET',
                $queryParams, $httpBody,
                $headerParams
            );
            
            return array(null, $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            }
  
            throw $e;
        }
    }
    
    /**
     * getDuplicateCartonActivityById
     *
     * Get a duplicated a cartonActivity by id
     *
     * @param int $carton_activity_id Id of the cartonActivity to be duplicated. (required)
     * @return \Infoplus\Model\CartonActivity
     * @throws \Infoplus\ApiException on non-2xx response
     */
    public function getDuplicateCartonActivityById($carton_activity_id)
    {
        list($response, $statusCode, $httpHeader) = $this->getDuplicateCartonActivityByIdWithHttpInfo ($carton_activity_id);
        return $response; 
    }


    /**
     * getDuplicateCartonActivityByIdWithHttpInfo
     *
     * Get a duplicated a cartonActivity by id
     *
     * @param int $carton_activity_id Id of the cartonActivity to be duplicated. (required)
     * @return Array of \Infoplus\Model\CartonActivity, HTTP status code, HTTP response headers (array of strings)
     * @throws \Infoplus\ApiException on non-2xx response
     */
    public function getDuplicateCartonActivityByIdWithHttpInfo($carton_activity_id)
    {
        
        // verify the required parameter 'carton_activity_id' is set
        if ($carton_activity_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $carton_activity_id when calling getDuplicateCartonActivityById');
        }
  
        // parse inputs
        $resourcePath = "/beta/cartonActivity/duplicate/{cartonActivityId}";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array());
  
        
        
        // path params
        
        if ($carton_activity_id !== null) {
            $resourcePath = str_replace(
                "{" . "cartonActivityId" . "}",
                $this->apiClient->getSerializer()->toPathValue($carton_activity_id),
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
        
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('API-Key');
        if (strlen($apiKey) !== 0) {
            $headerParams['API-Key'] = $apiKey;
        }
        
        
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, 'GET',
                $queryParams, $httpBody,
                $headerParams, '\Infoplus\Model\CartonActivity'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\Infoplus\ObjectSerializer::deserialize($response, '\Infoplus\Model\CartonActivity', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \Infoplus\ObjectSerializer::deserialize($e->getResponseBody(), '\Infoplus\Model\CartonActivity', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
    /**
     * updateCartonActivity
     *
     * Update a cartonActivity
     *
     * @param \Infoplus\Model\CartonActivity $body CartonActivity to be updated. (required)
     * @return void
     * @throws \Infoplus\ApiException on non-2xx response
     */
    public function updateCartonActivity($body)
    {
        list($response, $statusCode, $httpHeader) = $this->updateCartonActivityWithHttpInfo ($body);
        return $response; 
    }


    /**
     * updateCartonActivityWithHttpInfo
     *
     * Update a cartonActivity
     *
     * @param \Infoplus\Model\CartonActivity $body CartonActivity to be updated. (required)
     * @return Array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws \Infoplus\ApiException on non-2xx response
     */
    public function updateCartonActivityWithHttpInfo($body)
    {
        
        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling updateCartonActivity');
        }
  
        // parse inputs
        $resourcePath = "/beta/cartonActivity";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array('application/json'));
  
        
        
        
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
        
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('API-Key');
        if (strlen($apiKey) !== 0) {
            $headerParams['API-Key'] = $apiKey;
        }
        
        
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, 'PUT',
                $queryParams, $httpBody,
                $headerParams
            );
            
            return array(null, $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            }
  
            throw $e;
        }
    }
    
}
