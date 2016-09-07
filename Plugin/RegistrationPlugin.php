<?php
/**
 * Copyright (c) 2016 Salvatore Guarino. All rights reserved.
 */

namespace Deved\DisableRegistration\Plugin;

use Magento\Customer\Model\Registration;

class RegistrationPlugin
{
    /**
     * @var \Magento\Framework\App\Config\ScopeConfigInterface
     */
    protected $scopeConfig;
    const XML_PATH_DISABLE_CUSTOMER_REGISTRATION = 'customer/create_account/disable_customer_registration';

    public function __construct(\Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig)
    {
        $this->scopeConfig = $scopeConfig;
    }

    public function afterIsAllowed(Registration $subject)
    {
        $storeScope = \Magento\Store\Model\ScopeInterface::SCOPE_STORE;

        if ($this->scopeConfig->getValue(self::XML_PATH_DISABLE_CUSTOMER_REGISTRATION, $storeScope))
        {
            return false;
        }
        return true;
    }
}
