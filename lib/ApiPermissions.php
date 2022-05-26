<?php

namespace PHPShopify;

/**
 * --------------------------------------------------------------------------
 * @method array current()
 *
 */

class ApiPermissions extends ShopifyResource
{
    /**
     * @inheritDoc
     */
    protected $resourceKey = 'api_permission';

    /**
     * @inheritDoc
     */
    protected $customDeleteActions = array (
      'current'
    );
}
