<?php

namespace RocketCode\Shopify;

/**
 * This interface should be implemented using the trait UsesShopifyApi
 */
interface ShopifyApiUser extends ShopifyURL {
    /**
     * Get the Shopify API object to query Shopify
     *
     * @return \RocketCode\Shopify\API
     */
    public function ShopifyAPI();
}