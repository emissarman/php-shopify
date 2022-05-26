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
    protected $resourceKey = 'api_permissions';

    /**
     * @inheritDoc
     */
    protected $customDeleteActions = array (
      'current'
    );
}
