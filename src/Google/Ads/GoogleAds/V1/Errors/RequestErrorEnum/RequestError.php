<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/errors/request_error.proto

namespace Google\Ads\GoogleAds\V1\Errors\RequestErrorEnum;

/**
 * Enum describing possible request errors.
 *
 * Protobuf type <code>google.ads.googleads.v1.errors.RequestErrorEnum.RequestError</code>
 */
class RequestError
{
    /**
     * Enum unspecified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * The received error code is not known in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * Resource name is required for this request.
     *
     * Generated from protobuf enum <code>RESOURCE_NAME_MISSING = 3;</code>
     */
    const RESOURCE_NAME_MISSING = 3;
    /**
     * Resource name provided is malformed.
     *
     * Generated from protobuf enum <code>RESOURCE_NAME_MALFORMED = 4;</code>
     */
    const RESOURCE_NAME_MALFORMED = 4;
    /**
     * Resource name provided is malformed.
     *
     * Generated from protobuf enum <code>BAD_RESOURCE_ID = 17;</code>
     */
    const BAD_RESOURCE_ID = 17;
    /**
     * Customer ID is invalid.
     *
     * Generated from protobuf enum <code>INVALID_CUSTOMER_ID = 16;</code>
     */
    const INVALID_CUSTOMER_ID = 16;
    /**
     * Mutate operation should have either create, update, or remove specified.
     *
     * Generated from protobuf enum <code>OPERATION_REQUIRED = 5;</code>
     */
    const OPERATION_REQUIRED = 5;
    /**
     * Requested resource not found.
     *
     * Generated from protobuf enum <code>RESOURCE_NOT_FOUND = 6;</code>
     */
    const RESOURCE_NOT_FOUND = 6;
    /**
     * Next page token specified in user request is invalid.
     *
     * Generated from protobuf enum <code>INVALID_PAGE_TOKEN = 7;</code>
     */
    const INVALID_PAGE_TOKEN = 7;
    /**
     * Next page token specified in user request has expired.
     *
     * Generated from protobuf enum <code>EXPIRED_PAGE_TOKEN = 8;</code>
     */
    const EXPIRED_PAGE_TOKEN = 8;
    /**
     * Required field is missing.
     *
     * Generated from protobuf enum <code>REQUIRED_FIELD_MISSING = 9;</code>
     */
    const REQUIRED_FIELD_MISSING = 9;
    /**
     * The field cannot be modified because it's immutable. It's also possible
     * that the field can be modified using 'create' operation but not 'update'.
     *
     * Generated from protobuf enum <code>IMMUTABLE_FIELD = 11;</code>
     */
    const IMMUTABLE_FIELD = 11;
    /**
     * Received too many entries in request.
     *
     * Generated from protobuf enum <code>TOO_MANY_MUTATE_OPERATIONS = 13;</code>
     */
    const TOO_MANY_MUTATE_OPERATIONS = 13;
    /**
     * Request cannot be executed by a manager account.
     *
     * Generated from protobuf enum <code>CANNOT_BE_EXECUTED_BY_MANAGER_ACCOUNT = 14;</code>
     */
    const CANNOT_BE_EXECUTED_BY_MANAGER_ACCOUNT = 14;
    /**
     * Mutate request was attempting to modify a readonly field.
     * For instance, Budget fields can be requested for Ad Group,
     * but are read-only for adGroups:mutate.
     *
     * Generated from protobuf enum <code>CANNOT_MODIFY_FOREIGN_FIELD = 15;</code>
     */
    const CANNOT_MODIFY_FOREIGN_FIELD = 15;
    /**
     * Enum value is not permitted.
     *
     * Generated from protobuf enum <code>INVALID_ENUM_VALUE = 18;</code>
     */
    const INVALID_ENUM_VALUE = 18;
    /**
     * The developer-token parameter is required for all requests.
     *
     * Generated from protobuf enum <code>DEVELOPER_TOKEN_PARAMETER_MISSING = 19;</code>
     */
    const DEVELOPER_TOKEN_PARAMETER_MISSING = 19;
    /**
     * The login-customer-id parameter is required for this request.
     *
     * Generated from protobuf enum <code>LOGIN_CUSTOMER_ID_PARAMETER_MISSING = 20;</code>
     */
    const LOGIN_CUSTOMER_ID_PARAMETER_MISSING = 20;
    /**
     * page_token is set in the validate only request
     *
     * Generated from protobuf enum <code>VALIDATE_ONLY_REQUEST_HAS_PAGE_TOKEN = 21;</code>
     */
    const VALIDATE_ONLY_REQUEST_HAS_PAGE_TOKEN = 21;
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(RequestError::class, \Google\Ads\GoogleAds\V1\Errors\RequestErrorEnum_RequestError::class);

