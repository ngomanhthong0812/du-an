<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v16/errors/merchant_center_error.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V16\Errors;

class MerchantCenterError
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�
;google/ads/googleads/v16/errors/merchant_center_error.protogoogle.ads.googleads.v16.errors"�
MerchantCenterErrorEnum"�
MerchantCenterError
UNSPECIFIED 
UNKNOWN"
MERCHANT_ID_CANNOT_BE_ACCESSED5
1CUSTOMER_NOT_ALLOWED_FOR_SHOPPING_PERFORMANCE_MAXB�
#com.google.ads.googleads.v16.errorsBMerchantCenterErrorProtoPZEgoogle.golang.org/genproto/googleapis/ads/googleads/v16/errors;errors�GAA�Google.Ads.GoogleAds.V16.Errors�Google\\Ads\\GoogleAds\\V16\\Errors�#Google::Ads::GoogleAds::V16::Errorsbproto3'
        , true);
        static::$is_initialized = true;
    }
}

