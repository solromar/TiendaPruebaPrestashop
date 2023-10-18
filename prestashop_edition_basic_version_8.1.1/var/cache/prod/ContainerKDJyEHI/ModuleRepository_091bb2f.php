<?php

class ModuleRepository_091bb2f extends \PrestaShop\PrestaShop\Core\Module\ModuleRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder4eefa = null;
    private $initializer0977f = null;
    private static $publicPropertiesba168 = [
        
    ];
    public function getList() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer0977f && ($this->initializer0977f->__invoke($valueHolder4eefa, $this, 'getList', array(), $this->initializer0977f) || 1) && $this->valueHolder4eefa = $valueHolder4eefa;
        return $this->valueHolder4eefa->getList();
    }
    public function getInstalledModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer0977f && ($this->initializer0977f->__invoke($valueHolder4eefa, $this, 'getInstalledModules', array(), $this->initializer0977f) || 1) && $this->valueHolder4eefa = $valueHolder4eefa;
        return $this->valueHolder4eefa->getInstalledModules();
    }
    public function getMustBeConfiguredModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer0977f && ($this->initializer0977f->__invoke($valueHolder4eefa, $this, 'getMustBeConfiguredModules', array(), $this->initializer0977f) || 1) && $this->valueHolder4eefa = $valueHolder4eefa;
        return $this->valueHolder4eefa->getMustBeConfiguredModules();
    }
    public function getUpgradableModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer0977f && ($this->initializer0977f->__invoke($valueHolder4eefa, $this, 'getUpgradableModules', array(), $this->initializer0977f) || 1) && $this->valueHolder4eefa = $valueHolder4eefa;
        return $this->valueHolder4eefa->getUpgradableModules();
    }
    public function getModule(string $moduleName) : \PrestaShop\PrestaShop\Core\Module\ModuleInterface
    {
        $this->initializer0977f && ($this->initializer0977f->__invoke($valueHolder4eefa, $this, 'getModule', array('moduleName' => $moduleName), $this->initializer0977f) || 1) && $this->valueHolder4eefa = $valueHolder4eefa;
        return $this->valueHolder4eefa->getModule($moduleName);
    }
    public function getModulePath(string $moduleName) : ?string
    {
        $this->initializer0977f && ($this->initializer0977f->__invoke($valueHolder4eefa, $this, 'getModulePath', array('moduleName' => $moduleName), $this->initializer0977f) || 1) && $this->valueHolder4eefa = $valueHolder4eefa;
        return $this->valueHolder4eefa->getModulePath($moduleName);
    }
    public function setActionUrls(\PrestaShop\PrestaShop\Core\Module\ModuleCollection $collection) : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer0977f && ($this->initializer0977f->__invoke($valueHolder4eefa, $this, 'setActionUrls', array('collection' => $collection), $this->initializer0977f) || 1) && $this->valueHolder4eefa = $valueHolder4eefa;
        return $this->valueHolder4eefa->setActionUrls($collection);
    }
    public function clearCache(?string $moduleName = null, bool $allShops = false) : bool
    {
        $this->initializer0977f && ($this->initializer0977f->__invoke($valueHolder4eefa, $this, 'clearCache', array('moduleName' => $moduleName, 'allShops' => $allShops), $this->initializer0977f) || 1) && $this->valueHolder4eefa = $valueHolder4eefa;
        return $this->valueHolder4eefa->clearCache($moduleName, $allShops);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $instance, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($instance);
        $instance->initializer0977f = $initializer;
        return $instance;
    }
    public function __construct(\PrestaShop\PrestaShop\Adapter\Module\ModuleDataProvider $moduleDataProvider, \PrestaShop\PrestaShop\Adapter\Module\AdminModuleDataProvider $adminModuleDataProvider, \Doctrine\Common\Cache\CacheProvider $cacheProvider, \PrestaShop\PrestaShop\Adapter\HookManager $hookManager, string $modulePath, int $contextLangId)
    {
        static $reflection;
        if (! $this->valueHolder4eefa) {
            $reflection = $reflection ?? new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
            $this->valueHolder4eefa = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);
        }
        $this->valueHolder4eefa->__construct($moduleDataProvider, $adminModuleDataProvider, $cacheProvider, $hookManager, $modulePath, $contextLangId);
    }
    public function & __get($name)
    {
        $this->initializer0977f && ($this->initializer0977f->__invoke($valueHolder4eefa, $this, '__get', ['name' => $name], $this->initializer0977f) || 1) && $this->valueHolder4eefa = $valueHolder4eefa;
        if (isset(self::$publicPropertiesba168[$name])) {
            return $this->valueHolder4eefa->$name;
        }
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4eefa;
            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder4eefa;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __set($name, $value)
    {
        $this->initializer0977f && ($this->initializer0977f->__invoke($valueHolder4eefa, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer0977f) || 1) && $this->valueHolder4eefa = $valueHolder4eefa;
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4eefa;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder4eefa;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __isset($name)
    {
        $this->initializer0977f && ($this->initializer0977f->__invoke($valueHolder4eefa, $this, '__isset', array('name' => $name), $this->initializer0977f) || 1) && $this->valueHolder4eefa = $valueHolder4eefa;
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4eefa;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder4eefa;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __unset($name)
    {
        $this->initializer0977f && ($this->initializer0977f->__invoke($valueHolder4eefa, $this, '__unset', array('name' => $name), $this->initializer0977f) || 1) && $this->valueHolder4eefa = $valueHolder4eefa;
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4eefa;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder4eefa;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }
    public function __clone()
    {
        $this->initializer0977f && ($this->initializer0977f->__invoke($valueHolder4eefa, $this, '__clone', array(), $this->initializer0977f) || 1) && $this->valueHolder4eefa = $valueHolder4eefa;
        $this->valueHolder4eefa = clone $this->valueHolder4eefa;
    }
    public function __sleep()
    {
        $this->initializer0977f && ($this->initializer0977f->__invoke($valueHolder4eefa, $this, '__sleep', array(), $this->initializer0977f) || 1) && $this->valueHolder4eefa = $valueHolder4eefa;
        return array('valueHolder4eefa');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer0977f = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer0977f;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer0977f && ($this->initializer0977f->__invoke($valueHolder4eefa, $this, 'initializeProxy', array(), $this->initializer0977f) || 1) && $this->valueHolder4eefa = $valueHolder4eefa;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder4eefa;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder4eefa;
    }
}
