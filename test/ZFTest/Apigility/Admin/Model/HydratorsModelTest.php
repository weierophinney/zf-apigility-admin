<?php
/**
 * @license   http://opensource.org/licenses/BSD-3-Clause BSD-3-Clause
 * @copyright Copyright (c) 2013 Zend Technologies USA Inc. (http://www.zend.com)
 */

namespace ZFTest\Apigility\Admin\Model;

use Zend\Stdlib\Hydrator\HydratorPluginManager;
use ZF\Apigility\Admin\Model\HydratorsModel;

class HydratorsModelTest extends AbstractPluginManagerModelTest
{
    public function setUp()
    {
        $this->plugins = new HydratorPluginManager();
        $this->model = new HydratorsModel($this->plugins);
    }
}
