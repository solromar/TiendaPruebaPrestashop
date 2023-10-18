<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder4eefa = null;
    private $initializer0977f = null;
    private static $publicPropertiesba168 = [
        
    ];
    public function getConnection()
    {
        $this->initializer0977f && ($this->initializer0977f->__invoke($valueHolder4eefa, $this, 'getConnection', array(), $this->initializer0977f) || 1) && $this->valueHolder4eefa = $valueHolder4eefa;
        return $this->valueHolder4eefa->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer0977f && ($this->initializer0977f->__invoke($valueHolder4eefa, $this, 'getMetadataFactory', array(), $this->initializer0977f) || 1) && $this->valueHolder4eefa = $valueHolder4eefa;
        return $this->valueHolder4eefa->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer0977f && ($this->initializer0977f->__invoke($valueHolder4eefa, $this, 'getExpressionBuilder', array(), $this->initializer0977f) || 1) && $this->valueHolder4eefa = $valueHolder4eefa;
        return $this->valueHolder4eefa->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer0977f && ($this->initializer0977f->__invoke($valueHolder4eefa, $this, 'beginTransaction', array(), $this->initializer0977f) || 1) && $this->valueHolder4eefa = $valueHolder4eefa;
        return $this->valueHolder4eefa->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer0977f && ($this->initializer0977f->__invoke($valueHolder4eefa, $this, 'getCache', array(), $this->initializer0977f) || 1) && $this->valueHolder4eefa = $valueHolder4eefa;
        return $this->valueHolder4eefa->getCache();
    }
    public function transactional($func)
    {
        $this->initializer0977f && ($this->initializer0977f->__invoke($valueHolder4eefa, $this, 'transactional', array('func' => $func), $this->initializer0977f) || 1) && $this->valueHolder4eefa = $valueHolder4eefa;
        return $this->valueHolder4eefa->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializer0977f && ($this->initializer0977f->__invoke($valueHolder4eefa, $this, 'wrapInTransaction', array('func' => $func), $this->initializer0977f) || 1) && $this->valueHolder4eefa = $valueHolder4eefa;
        return $this->valueHolder4eefa->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializer0977f && ($this->initializer0977f->__invoke($valueHolder4eefa, $this, 'commit', array(), $this->initializer0977f) || 1) && $this->valueHolder4eefa = $valueHolder4eefa;
        return $this->valueHolder4eefa->commit();
    }
    public function rollback()
    {
        $this->initializer0977f && ($this->initializer0977f->__invoke($valueHolder4eefa, $this, 'rollback', array(), $this->initializer0977f) || 1) && $this->valueHolder4eefa = $valueHolder4eefa;
        return $this->valueHolder4eefa->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer0977f && ($this->initializer0977f->__invoke($valueHolder4eefa, $this, 'getClassMetadata', array('className' => $className), $this->initializer0977f) || 1) && $this->valueHolder4eefa = $valueHolder4eefa;
        return $this->valueHolder4eefa->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer0977f && ($this->initializer0977f->__invoke($valueHolder4eefa, $this, 'createQuery', array('dql' => $dql), $this->initializer0977f) || 1) && $this->valueHolder4eefa = $valueHolder4eefa;
        return $this->valueHolder4eefa->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer0977f && ($this->initializer0977f->__invoke($valueHolder4eefa, $this, 'createNamedQuery', array('name' => $name), $this->initializer0977f) || 1) && $this->valueHolder4eefa = $valueHolder4eefa;
        return $this->valueHolder4eefa->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer0977f && ($this->initializer0977f->__invoke($valueHolder4eefa, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer0977f) || 1) && $this->valueHolder4eefa = $valueHolder4eefa;
        return $this->valueHolder4eefa->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer0977f && ($this->initializer0977f->__invoke($valueHolder4eefa, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer0977f) || 1) && $this->valueHolder4eefa = $valueHolder4eefa;
        return $this->valueHolder4eefa->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer0977f && ($this->initializer0977f->__invoke($valueHolder4eefa, $this, 'createQueryBuilder', array(), $this->initializer0977f) || 1) && $this->valueHolder4eefa = $valueHolder4eefa;
        return $this->valueHolder4eefa->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer0977f && ($this->initializer0977f->__invoke($valueHolder4eefa, $this, 'flush', array('entity' => $entity), $this->initializer0977f) || 1) && $this->valueHolder4eefa = $valueHolder4eefa;
        return $this->valueHolder4eefa->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer0977f && ($this->initializer0977f->__invoke($valueHolder4eefa, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer0977f) || 1) && $this->valueHolder4eefa = $valueHolder4eefa;
        return $this->valueHolder4eefa->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer0977f && ($this->initializer0977f->__invoke($valueHolder4eefa, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer0977f) || 1) && $this->valueHolder4eefa = $valueHolder4eefa;
        return $this->valueHolder4eefa->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer0977f && ($this->initializer0977f->__invoke($valueHolder4eefa, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer0977f) || 1) && $this->valueHolder4eefa = $valueHolder4eefa;
        return $this->valueHolder4eefa->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer0977f && ($this->initializer0977f->__invoke($valueHolder4eefa, $this, 'clear', array('entityName' => $entityName), $this->initializer0977f) || 1) && $this->valueHolder4eefa = $valueHolder4eefa;
        return $this->valueHolder4eefa->clear($entityName);
    }
    public function close()
    {
        $this->initializer0977f && ($this->initializer0977f->__invoke($valueHolder4eefa, $this, 'close', array(), $this->initializer0977f) || 1) && $this->valueHolder4eefa = $valueHolder4eefa;
        return $this->valueHolder4eefa->close();
    }
    public function persist($entity)
    {
        $this->initializer0977f && ($this->initializer0977f->__invoke($valueHolder4eefa, $this, 'persist', array('entity' => $entity), $this->initializer0977f) || 1) && $this->valueHolder4eefa = $valueHolder4eefa;
        return $this->valueHolder4eefa->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer0977f && ($this->initializer0977f->__invoke($valueHolder4eefa, $this, 'remove', array('entity' => $entity), $this->initializer0977f) || 1) && $this->valueHolder4eefa = $valueHolder4eefa;
        return $this->valueHolder4eefa->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer0977f && ($this->initializer0977f->__invoke($valueHolder4eefa, $this, 'refresh', array('entity' => $entity), $this->initializer0977f) || 1) && $this->valueHolder4eefa = $valueHolder4eefa;
        return $this->valueHolder4eefa->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer0977f && ($this->initializer0977f->__invoke($valueHolder4eefa, $this, 'detach', array('entity' => $entity), $this->initializer0977f) || 1) && $this->valueHolder4eefa = $valueHolder4eefa;
        return $this->valueHolder4eefa->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer0977f && ($this->initializer0977f->__invoke($valueHolder4eefa, $this, 'merge', array('entity' => $entity), $this->initializer0977f) || 1) && $this->valueHolder4eefa = $valueHolder4eefa;
        return $this->valueHolder4eefa->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer0977f && ($this->initializer0977f->__invoke($valueHolder4eefa, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer0977f) || 1) && $this->valueHolder4eefa = $valueHolder4eefa;
        return $this->valueHolder4eefa->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer0977f && ($this->initializer0977f->__invoke($valueHolder4eefa, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer0977f) || 1) && $this->valueHolder4eefa = $valueHolder4eefa;
        return $this->valueHolder4eefa->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer0977f && ($this->initializer0977f->__invoke($valueHolder4eefa, $this, 'getRepository', array('entityName' => $entityName), $this->initializer0977f) || 1) && $this->valueHolder4eefa = $valueHolder4eefa;
        return $this->valueHolder4eefa->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer0977f && ($this->initializer0977f->__invoke($valueHolder4eefa, $this, 'contains', array('entity' => $entity), $this->initializer0977f) || 1) && $this->valueHolder4eefa = $valueHolder4eefa;
        return $this->valueHolder4eefa->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer0977f && ($this->initializer0977f->__invoke($valueHolder4eefa, $this, 'getEventManager', array(), $this->initializer0977f) || 1) && $this->valueHolder4eefa = $valueHolder4eefa;
        return $this->valueHolder4eefa->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer0977f && ($this->initializer0977f->__invoke($valueHolder4eefa, $this, 'getConfiguration', array(), $this->initializer0977f) || 1) && $this->valueHolder4eefa = $valueHolder4eefa;
        return $this->valueHolder4eefa->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer0977f && ($this->initializer0977f->__invoke($valueHolder4eefa, $this, 'isOpen', array(), $this->initializer0977f) || 1) && $this->valueHolder4eefa = $valueHolder4eefa;
        return $this->valueHolder4eefa->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer0977f && ($this->initializer0977f->__invoke($valueHolder4eefa, $this, 'getUnitOfWork', array(), $this->initializer0977f) || 1) && $this->valueHolder4eefa = $valueHolder4eefa;
        return $this->valueHolder4eefa->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer0977f && ($this->initializer0977f->__invoke($valueHolder4eefa, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer0977f) || 1) && $this->valueHolder4eefa = $valueHolder4eefa;
        return $this->valueHolder4eefa->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer0977f && ($this->initializer0977f->__invoke($valueHolder4eefa, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer0977f) || 1) && $this->valueHolder4eefa = $valueHolder4eefa;
        return $this->valueHolder4eefa->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer0977f && ($this->initializer0977f->__invoke($valueHolder4eefa, $this, 'getProxyFactory', array(), $this->initializer0977f) || 1) && $this->valueHolder4eefa = $valueHolder4eefa;
        return $this->valueHolder4eefa->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer0977f && ($this->initializer0977f->__invoke($valueHolder4eefa, $this, 'initializeObject', array('obj' => $obj), $this->initializer0977f) || 1) && $this->valueHolder4eefa = $valueHolder4eefa;
        return $this->valueHolder4eefa->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer0977f && ($this->initializer0977f->__invoke($valueHolder4eefa, $this, 'getFilters', array(), $this->initializer0977f) || 1) && $this->valueHolder4eefa = $valueHolder4eefa;
        return $this->valueHolder4eefa->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer0977f && ($this->initializer0977f->__invoke($valueHolder4eefa, $this, 'isFiltersStateClean', array(), $this->initializer0977f) || 1) && $this->valueHolder4eefa = $valueHolder4eefa;
        return $this->valueHolder4eefa->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer0977f && ($this->initializer0977f->__invoke($valueHolder4eefa, $this, 'hasFilters', array(), $this->initializer0977f) || 1) && $this->valueHolder4eefa = $valueHolder4eefa;
        return $this->valueHolder4eefa->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer0977f = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder4eefa) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder4eefa = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder4eefa->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializer0977f && ($this->initializer0977f->__invoke($valueHolder4eefa, $this, '__get', ['name' => $name], $this->initializer0977f) || 1) && $this->valueHolder4eefa = $valueHolder4eefa;
        if (isset(self::$publicPropertiesba168[$name])) {
            return $this->valueHolder4eefa->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
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
