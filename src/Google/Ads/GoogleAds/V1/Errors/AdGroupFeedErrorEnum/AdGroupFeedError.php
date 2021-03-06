<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/errors/ad_group_feed_error.proto

namespace Google\Ads\GoogleAds\V1\Errors\AdGroupFeedErrorEnum;

/**
 * Enum describing possible ad group feed errors.
 *
 * Protobuf type <code>google.ads.googleads.v1.errors.AdGroupFeedErrorEnum.AdGroupFeedError</code>
 */
class AdGroupFeedError
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
     * An active feed already exists for this ad group and place holder type.
     *
     * Generated from protobuf enum <code>FEED_ALREADY_EXISTS_FOR_PLACEHOLDER_TYPE = 2;</code>
     */
    const FEED_ALREADY_EXISTS_FOR_PLACEHOLDER_TYPE = 2;
    /**
     * The specified feed is removed.
     *
     * Generated from protobuf enum <code>CANNOT_CREATE_FOR_REMOVED_FEED = 3;</code>
     */
    const CANNOT_CREATE_FOR_REMOVED_FEED = 3;
    /**
     * The AdGroupFeed already exists. UPDATE operation should be used to modify
     * the existing AdGroupFeed.
     *
     * Generated from protobuf enum <code>ADGROUP_FEED_ALREADY_EXISTS = 4;</code>
     */
    const ADGROUP_FEED_ALREADY_EXISTS = 4;
    /**
     * Cannot operate on removed AdGroupFeed.
     *
     * Generated from protobuf enum <code>CANNOT_OPERATE_ON_REMOVED_ADGROUP_FEED = 5;</code>
     */
    const CANNOT_OPERATE_ON_REMOVED_ADGROUP_FEED = 5;
    /**
     * Invalid placeholder type.
     *
     * Generated from protobuf enum <code>INVALID_PLACEHOLDER_TYPE = 6;</code>
     */
    const INVALID_PLACEHOLDER_TYPE = 6;
    /**
     * Feed mapping for this placeholder type does not exist.
     *
     * Generated from protobuf enum <code>MISSING_FEEDMAPPING_FOR_PLACEHOLDER_TYPE = 7;</code>
     */
    const MISSING_FEEDMAPPING_FOR_PLACEHOLDER_TYPE = 7;
    /**
     * Location AdGroupFeeds cannot be created unless there is a location
     * CustomerFeed for the specified feed.
     *
     * Generated from protobuf enum <code>NO_EXISTING_LOCATION_CUSTOMER_FEED = 8;</code>
     */
    const NO_EXISTING_LOCATION_CUSTOMER_FEED = 8;
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AdGroupFeedError::class, \Google\Ads\GoogleAds\V1\Errors\AdGroupFeedErrorEnum_AdGroupFeedError::class);

