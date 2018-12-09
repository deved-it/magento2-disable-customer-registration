[![Latest Stable Version](https://poser.pugx.org/deved/magento2-disable-customer-registration/v/stable)](https://packagist.org/packages/deved/magento2-disable-customer-registration)
[![Total Downloads](https://poser.pugx.org/deved/magento2-disable-customer-registration/downloads)](https://packagist.org/packages/deved/magento2-disable-customer-registration)
[![Build Status](https://travis-ci.org/deved-it/magento2-disable-customer-registration.svg?branch=master)](https://travis-ci.org/deved-it/magento2-disable-customer-registration)
[![License](https://poser.pugx.org/deved/magento2-disable-customer-registration/license)](https://packagist.org/packages/deved/magento2-disable-customer-registration)


## Magento 2 disable customer registration
This extension allows you to disable the customer registration in your Magento store.  
It can be very useful in cases where Admin wants to create account for customers (B2B) and do not want to show the
default Registration form & link on his Magento store

## Installation
via composer:
`cd` to your magento webroot    
1. `composer require deved/magento2-disable-customer-registration`  
2. `bin/magento module:enable Deved_DisableRegistration`
3. `bin/magento setup:upgrade`

## Configuration
1. Open you Magento admin interface and go to stores->configuration->customers->customer configuration
2. Under the "Create New Account Options" tab you will find the "Disable frontend customer registration" option
3. Enable this option to activate the plugin
