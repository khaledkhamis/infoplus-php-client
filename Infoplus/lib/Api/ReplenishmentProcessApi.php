<?php
/**
 * ReplenishmentProcessApi
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
 * ReplenishmentProcessApi Class Doc Comment
 *
 * @category Class
 * @package  Infoplus
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ReplenishmentProcessApi
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
     * @return ReplenishmentProcessApi
     */
    public function setApiClient(ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }
  
    
    /**
     * addReplenishmentProcessAudit
     *
     * Add new audit for a replenishmentProcess
     *
     * @param int $replenishment_process_id Id of the replenishmentProcess to add an audit to (required)
     * @param string $replenishment_process_audit The audit to add (required)
     * @return void
     * @throws \Infoplus\ApiException on non-2xx response
     */
    public function addReplenishmentProcessAudit($replenishment_process_id, $replenishment_process_audit)
    {
        list($response, $statusCode, $httpHeader) = $this->addReplenishmentProcessAuditWithHttpInfo ($replenishment_process_id, $replenishment_process_audit);
        return $response; 
    }


    /**
     * addReplenishmentProcessAuditWithHttpInfo
     *
     * Add new audit for a replenishmentProcess
     *
     * @param int $replenishment_process_id Id of the replenishmentProcess to add an audit to (required)
     * @param string $replenishment_process_audit The audit to add (required)
     * @return Array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws \Infoplus\ApiException on non-2xx response
     */
    public function addReplenishmentProcessAuditWithHttpInfo($replenishment_process_id, $replenishment_process_audit)
    {
        
        // verify the required parameter 'replenishment_process_id' is set
        if ($replenishment_process_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $replenishment_process_id when calling addReplenishmentProcessAudit');
        }
        // verify the required parameter 'replenishment_process_audit' is set
        if ($replenishment_process_audit === null) {
            throw new \InvalidArgumentException('Missing the required parameter $replenishment_process_audit when calling addReplenishmentProcessAudit');
        }
  
        // parse inputs
        $resourcePath = "/beta/replenishmentProcess/{replenishmentProcessId}/audit/{replenishmentProcessAudit}";
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
        
        if ($replenishment_process_id !== null) {
            $resourcePath = str_replace(
                "{" . "replenishmentProcessId" . "}",
                $this->apiClient->getSerializer()->toPathValue($replenishment_process_id),
                $resourcePath
            );
        }// path params
        
        if ($replenishment_process_audit !== null) {
            $resourcePath = str_replace(
                "{" . "replenishmentProcessAudit" . "}",
                $this->apiClient->getSerializer()->toPathValue($replenishment_process_audit),
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
     * addReplenishmentProcessTag
     *
     * Add new tags for a replenishmentProcess.
     *
     * @param int $replenishment_process_id Id of the replenishmentProcess to add a tag to (required)
     * @param string $replenishment_process_tag The tag to add (required)
     * @return void
     * @throws \Infoplus\ApiException on non-2xx response
     */
    public function addReplenishmentProcessTag($replenishment_process_id, $replenishment_process_tag)
    {
        list($response, $statusCode, $httpHeader) = $this->addReplenishmentProcessTagWithHttpInfo ($replenishment_process_id, $replenishment_process_tag);
        return $response; 
    }


    /**
     * addReplenishmentProcessTagWithHttpInfo
     *
     * Add new tags for a replenishmentProcess.
     *
     * @param int $replenishment_process_id Id of the replenishmentProcess to add a tag to (required)
     * @param string $replenishment_process_tag The tag to add (required)
     * @return Array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws \Infoplus\ApiException on non-2xx response
     */
    public function addReplenishmentProcessTagWithHttpInfo($replenishment_process_id, $replenishment_process_tag)
    {
        
        // verify the required parameter 'replenishment_process_id' is set
        if ($replenishment_process_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $replenishment_process_id when calling addReplenishmentProcessTag');
        }
        // verify the required parameter 'replenishment_process_tag' is set
        if ($replenishment_process_tag === null) {
            throw new \InvalidArgumentException('Missing the required parameter $replenishment_process_tag when calling addReplenishmentProcessTag');
        }
  
        // parse inputs
        $resourcePath = "/beta/replenishmentProcess/{replenishmentProcessId}/tag/{replenishmentProcessTag}";
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
        
        if ($replenishment_process_id !== null) {
            $resourcePath = str_replace(
                "{" . "replenishmentProcessId" . "}",
                $this->apiClient->getSerializer()->toPathValue($replenishment_process_id),
                $resourcePath
            );
        }// path params
        
        if ($replenishment_process_tag !== null) {
            $resourcePath = str_replace(
                "{" . "replenishmentProcessTag" . "}",
                $this->apiClient->getSerializer()->toPathValue($replenishment_process_tag),
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
     * deleteReplenishmentProcessTag
     *
     * Delete a tag for a replenishmentProcess.
     *
     * @param int $replenishment_process_id Id of the replenishmentProcess to remove tag from (required)
     * @param string $replenishment_process_tag The tag to delete (required)
     * @return void
     * @throws \Infoplus\ApiException on non-2xx response
     */
    public function deleteReplenishmentProcessTag($replenishment_process_id, $replenishment_process_tag)
    {
        list($response, $statusCode, $httpHeader) = $this->deleteReplenishmentProcessTagWithHttpInfo ($replenishment_process_id, $replenishment_process_tag);
        return $response; 
    }


    /**
     * deleteReplenishmentProcessTagWithHttpInfo
     *
     * Delete a tag for a replenishmentProcess.
     *
     * @param int $replenishment_process_id Id of the replenishmentProcess to remove tag from (required)
     * @param string $replenishment_process_tag The tag to delete (required)
     * @return Array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws \Infoplus\ApiException on non-2xx response
     */
    public function deleteReplenishmentProcessTagWithHttpInfo($replenishment_process_id, $replenishment_process_tag)
    {
        
        // verify the required parameter 'replenishment_process_id' is set
        if ($replenishment_process_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $replenishment_process_id when calling deleteReplenishmentProcessTag');
        }
        // verify the required parameter 'replenishment_process_tag' is set
        if ($replenishment_process_tag === null) {
            throw new \InvalidArgumentException('Missing the required parameter $replenishment_process_tag when calling deleteReplenishmentProcessTag');
        }
  
        // parse inputs
        $resourcePath = "/beta/replenishmentProcess/{replenishmentProcessId}/tag/{replenishmentProcessTag}";
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
        
        if ($replenishment_process_id !== null) {
            $resourcePath = str_replace(
                "{" . "replenishmentProcessId" . "}",
                $this->apiClient->getSerializer()->toPathValue($replenishment_process_id),
                $resourcePath
            );
        }// path params
        
        if ($replenishment_process_tag !== null) {
            $resourcePath = str_replace(
                "{" . "replenishmentProcessTag" . "}",
                $this->apiClient->getSerializer()->toPathValue($replenishment_process_tag),
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
     * getDuplicateReplenishmentProcessById
     *
     * Get a duplicated a replenishmentProcess by id
     *
     * @param int $replenishment_process_id Id of the replenishmentProcess to be duplicated. (required)
     * @return \Infoplus\Model\ReplenishmentProcess
     * @throws \Infoplus\ApiException on non-2xx response
     */
    public function getDuplicateReplenishmentProcessById($replenishment_process_id)
    {
        list($response, $statusCode, $httpHeader) = $this->getDuplicateReplenishmentProcessByIdWithHttpInfo ($replenishment_process_id);
        return $response; 
    }


    /**
     * getDuplicateReplenishmentProcessByIdWithHttpInfo
     *
     * Get a duplicated a replenishmentProcess by id
     *
     * @param int $replenishment_process_id Id of the replenishmentProcess to be duplicated. (required)
     * @return Array of \Infoplus\Model\ReplenishmentProcess, HTTP status code, HTTP response headers (array of strings)
     * @throws \Infoplus\ApiException on non-2xx response
     */
    public function getDuplicateReplenishmentProcessByIdWithHttpInfo($replenishment_process_id)
    {
        
        // verify the required parameter 'replenishment_process_id' is set
        if ($replenishment_process_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $replenishment_process_id when calling getDuplicateReplenishmentProcessById');
        }
  
        // parse inputs
        $resourcePath = "/beta/replenishmentProcess/duplicate/{replenishmentProcessId}";
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
        
        if ($replenishment_process_id !== null) {
            $resourcePath = str_replace(
                "{" . "replenishmentProcessId" . "}",
                $this->apiClient->getSerializer()->toPathValue($replenishment_process_id),
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
                $headerParams, '\Infoplus\Model\ReplenishmentProcess'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\Infoplus\ObjectSerializer::deserialize($response, '\Infoplus\Model\ReplenishmentProcess', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \Infoplus\ObjectSerializer::deserialize($e->getResponseBody(), '\Infoplus\Model\ReplenishmentProcess', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
    /**
     * getReplenishmentProcessByFilter
     *
     * Search replenishmentProcesses by filter
     *
     * @param string $filter Query string, used to filter results. (optional)
     * @param int $page Result page number.  Defaults to 1. (optional)
     * @param int $limit Maximum results per page.  Defaults to 20.  Max allowed value is 250. (optional)
     * @param string $sort Sort results by specified field. (optional)
     * @return \Infoplus\Model\ReplenishmentProcess[]
     * @throws \Infoplus\ApiException on non-2xx response
     */
    public function getReplenishmentProcessByFilter($filter = null, $page = null, $limit = null, $sort = null)
    {
        list($response, $statusCode, $httpHeader) = $this->getReplenishmentProcessByFilterWithHttpInfo ($filter, $page, $limit, $sort);
        return $response; 
    }


    /**
     * getReplenishmentProcessByFilterWithHttpInfo
     *
     * Search replenishmentProcesses by filter
     *
     * @param string $filter Query string, used to filter results. (optional)
     * @param int $page Result page number.  Defaults to 1. (optional)
     * @param int $limit Maximum results per page.  Defaults to 20.  Max allowed value is 250. (optional)
     * @param string $sort Sort results by specified field. (optional)
     * @return Array of \Infoplus\Model\ReplenishmentProcess[], HTTP status code, HTTP response headers (array of strings)
     * @throws \Infoplus\ApiException on non-2xx response
     */
    public function getReplenishmentProcessByFilterWithHttpInfo($filter = null, $page = null, $limit = null, $sort = null)
    {
        
  
        // parse inputs
        $resourcePath = "/beta/replenishmentProcess/search";
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
                $headerParams, '\Infoplus\Model\ReplenishmentProcess[]'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\Infoplus\ObjectSerializer::deserialize($response, '\Infoplus\Model\ReplenishmentProcess[]', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \Infoplus\ObjectSerializer::deserialize($e->getResponseBody(), '\Infoplus\Model\ReplenishmentProcess[]', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
    /**
     * getReplenishmentProcessById
     *
     * Get a replenishmentProcess by id
     *
     * @param int $replenishment_process_id Id of the replenishmentProcess to be returned. (required)
     * @return \Infoplus\Model\ReplenishmentProcess
     * @throws \Infoplus\ApiException on non-2xx response
     */
    public function getReplenishmentProcessById($replenishment_process_id)
    {
        list($response, $statusCode, $httpHeader) = $this->getReplenishmentProcessByIdWithHttpInfo ($replenishment_process_id);
        return $response; 
    }


    /**
     * getReplenishmentProcessByIdWithHttpInfo
     *
     * Get a replenishmentProcess by id
     *
     * @param int $replenishment_process_id Id of the replenishmentProcess to be returned. (required)
     * @return Array of \Infoplus\Model\ReplenishmentProcess, HTTP status code, HTTP response headers (array of strings)
     * @throws \Infoplus\ApiException on non-2xx response
     */
    public function getReplenishmentProcessByIdWithHttpInfo($replenishment_process_id)
    {
        
        // verify the required parameter 'replenishment_process_id' is set
        if ($replenishment_process_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $replenishment_process_id when calling getReplenishmentProcessById');
        }
  
        // parse inputs
        $resourcePath = "/beta/replenishmentProcess/{replenishmentProcessId}";
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
        
        if ($replenishment_process_id !== null) {
            $resourcePath = str_replace(
                "{" . "replenishmentProcessId" . "}",
                $this->apiClient->getSerializer()->toPathValue($replenishment_process_id),
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
                $headerParams, '\Infoplus\Model\ReplenishmentProcess'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\Infoplus\ObjectSerializer::deserialize($response, '\Infoplus\Model\ReplenishmentProcess', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \Infoplus\ObjectSerializer::deserialize($e->getResponseBody(), '\Infoplus\Model\ReplenishmentProcess', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
    /**
     * getReplenishmentProcessTags
     *
     * Get the tags for a replenishmentProcess.
     *
     * @param int $replenishment_process_id Id of the replenishmentProcess to get tags for (required)
     * @return void
     * @throws \Infoplus\ApiException on non-2xx response
     */
    public function getReplenishmentProcessTags($replenishment_process_id)
    {
        list($response, $statusCode, $httpHeader) = $this->getReplenishmentProcessTagsWithHttpInfo ($replenishment_process_id);
        return $response; 
    }


    /**
     * getReplenishmentProcessTagsWithHttpInfo
     *
     * Get the tags for a replenishmentProcess.
     *
     * @param int $replenishment_process_id Id of the replenishmentProcess to get tags for (required)
     * @return Array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws \Infoplus\ApiException on non-2xx response
     */
    public function getReplenishmentProcessTagsWithHttpInfo($replenishment_process_id)
    {
        
        // verify the required parameter 'replenishment_process_id' is set
        if ($replenishment_process_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $replenishment_process_id when calling getReplenishmentProcessTags');
        }
  
        // parse inputs
        $resourcePath = "/beta/replenishmentProcess/{replenishmentProcessId}/tag";
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
        
        if ($replenishment_process_id !== null) {
            $resourcePath = str_replace(
                "{" . "replenishmentProcessId" . "}",
                $this->apiClient->getSerializer()->toPathValue($replenishment_process_id),
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
     * updateReplenishmentProcessCustomFields
     *
     * Update a replenishmentProcess custom fields
     *
     * @param \Infoplus\Model\ReplenishmentProcess $body ReplenishmentProcess to be updated. (required)
     * @return void
     * @throws \Infoplus\ApiException on non-2xx response
     */
    public function updateReplenishmentProcessCustomFields($body)
    {
        list($response, $statusCode, $httpHeader) = $this->updateReplenishmentProcessCustomFieldsWithHttpInfo ($body);
        return $response; 
    }


    /**
     * updateReplenishmentProcessCustomFieldsWithHttpInfo
     *
     * Update a replenishmentProcess custom fields
     *
     * @param \Infoplus\Model\ReplenishmentProcess $body ReplenishmentProcess to be updated. (required)
     * @return Array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws \Infoplus\ApiException on non-2xx response
     */
    public function updateReplenishmentProcessCustomFieldsWithHttpInfo($body)
    {
        
        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling updateReplenishmentProcessCustomFields');
        }
  
        // parse inputs
        $resourcePath = "/beta/replenishmentProcess/customFields";
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
