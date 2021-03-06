<?php
/**
 * @license   http://opensource.org/licenses/BSD-3-Clause BSD-3-Clause
 * @copyright Copyright (c) 2013 Zend Technologies USA Inc. (http://www.zend.com)
 */

namespace ZF\Apigility\Admin\Model;

class ValidatorsModelFactory extends AbstractPluginManagerModelFactory
{
    /**
     * @var string
     */
    protected $pluginManagerService = 'ValidatorManager';

    /**
     * @var string
     */
    protected $pluginManagerModel = 'ZF\Apigility\Admin\Model\ValidatorsModel';
}
