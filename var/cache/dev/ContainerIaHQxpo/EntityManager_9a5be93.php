<?php

namespace ContainerIaHQxpo;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder3be02 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerbc47e = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties1c748 = [
        
    ];

    public function getConnection()
    {
        $this->initializerbc47e && ($this->initializerbc47e->__invoke($valueHolder3be02, $this, 'getConnection', array(), $this->initializerbc47e) || 1) && $this->valueHolder3be02 = $valueHolder3be02;

        return $this->valueHolder3be02->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerbc47e && ($this->initializerbc47e->__invoke($valueHolder3be02, $this, 'getMetadataFactory', array(), $this->initializerbc47e) || 1) && $this->valueHolder3be02 = $valueHolder3be02;

        return $this->valueHolder3be02->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerbc47e && ($this->initializerbc47e->__invoke($valueHolder3be02, $this, 'getExpressionBuilder', array(), $this->initializerbc47e) || 1) && $this->valueHolder3be02 = $valueHolder3be02;

        return $this->valueHolder3be02->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerbc47e && ($this->initializerbc47e->__invoke($valueHolder3be02, $this, 'beginTransaction', array(), $this->initializerbc47e) || 1) && $this->valueHolder3be02 = $valueHolder3be02;

        return $this->valueHolder3be02->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerbc47e && ($this->initializerbc47e->__invoke($valueHolder3be02, $this, 'getCache', array(), $this->initializerbc47e) || 1) && $this->valueHolder3be02 = $valueHolder3be02;

        return $this->valueHolder3be02->getCache();
    }

    public function transactional($func)
    {
        $this->initializerbc47e && ($this->initializerbc47e->__invoke($valueHolder3be02, $this, 'transactional', array('func' => $func), $this->initializerbc47e) || 1) && $this->valueHolder3be02 = $valueHolder3be02;

        return $this->valueHolder3be02->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerbc47e && ($this->initializerbc47e->__invoke($valueHolder3be02, $this, 'wrapInTransaction', array('func' => $func), $this->initializerbc47e) || 1) && $this->valueHolder3be02 = $valueHolder3be02;

        return $this->valueHolder3be02->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerbc47e && ($this->initializerbc47e->__invoke($valueHolder3be02, $this, 'commit', array(), $this->initializerbc47e) || 1) && $this->valueHolder3be02 = $valueHolder3be02;

        return $this->valueHolder3be02->commit();
    }

    public function rollback()
    {
        $this->initializerbc47e && ($this->initializerbc47e->__invoke($valueHolder3be02, $this, 'rollback', array(), $this->initializerbc47e) || 1) && $this->valueHolder3be02 = $valueHolder3be02;

        return $this->valueHolder3be02->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerbc47e && ($this->initializerbc47e->__invoke($valueHolder3be02, $this, 'getClassMetadata', array('className' => $className), $this->initializerbc47e) || 1) && $this->valueHolder3be02 = $valueHolder3be02;

        return $this->valueHolder3be02->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerbc47e && ($this->initializerbc47e->__invoke($valueHolder3be02, $this, 'createQuery', array('dql' => $dql), $this->initializerbc47e) || 1) && $this->valueHolder3be02 = $valueHolder3be02;

        return $this->valueHolder3be02->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerbc47e && ($this->initializerbc47e->__invoke($valueHolder3be02, $this, 'createNamedQuery', array('name' => $name), $this->initializerbc47e) || 1) && $this->valueHolder3be02 = $valueHolder3be02;

        return $this->valueHolder3be02->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerbc47e && ($this->initializerbc47e->__invoke($valueHolder3be02, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerbc47e) || 1) && $this->valueHolder3be02 = $valueHolder3be02;

        return $this->valueHolder3be02->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerbc47e && ($this->initializerbc47e->__invoke($valueHolder3be02, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerbc47e) || 1) && $this->valueHolder3be02 = $valueHolder3be02;

        return $this->valueHolder3be02->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerbc47e && ($this->initializerbc47e->__invoke($valueHolder3be02, $this, 'createQueryBuilder', array(), $this->initializerbc47e) || 1) && $this->valueHolder3be02 = $valueHolder3be02;

        return $this->valueHolder3be02->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerbc47e && ($this->initializerbc47e->__invoke($valueHolder3be02, $this, 'flush', array('entity' => $entity), $this->initializerbc47e) || 1) && $this->valueHolder3be02 = $valueHolder3be02;

        return $this->valueHolder3be02->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerbc47e && ($this->initializerbc47e->__invoke($valueHolder3be02, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerbc47e) || 1) && $this->valueHolder3be02 = $valueHolder3be02;

        return $this->valueHolder3be02->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerbc47e && ($this->initializerbc47e->__invoke($valueHolder3be02, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerbc47e) || 1) && $this->valueHolder3be02 = $valueHolder3be02;

        return $this->valueHolder3be02->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerbc47e && ($this->initializerbc47e->__invoke($valueHolder3be02, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerbc47e) || 1) && $this->valueHolder3be02 = $valueHolder3be02;

        return $this->valueHolder3be02->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerbc47e && ($this->initializerbc47e->__invoke($valueHolder3be02, $this, 'clear', array('entityName' => $entityName), $this->initializerbc47e) || 1) && $this->valueHolder3be02 = $valueHolder3be02;

        return $this->valueHolder3be02->clear($entityName);
    }

    public function close()
    {
        $this->initializerbc47e && ($this->initializerbc47e->__invoke($valueHolder3be02, $this, 'close', array(), $this->initializerbc47e) || 1) && $this->valueHolder3be02 = $valueHolder3be02;

        return $this->valueHolder3be02->close();
    }

    public function persist($entity)
    {
        $this->initializerbc47e && ($this->initializerbc47e->__invoke($valueHolder3be02, $this, 'persist', array('entity' => $entity), $this->initializerbc47e) || 1) && $this->valueHolder3be02 = $valueHolder3be02;

        return $this->valueHolder3be02->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerbc47e && ($this->initializerbc47e->__invoke($valueHolder3be02, $this, 'remove', array('entity' => $entity), $this->initializerbc47e) || 1) && $this->valueHolder3be02 = $valueHolder3be02;

        return $this->valueHolder3be02->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerbc47e && ($this->initializerbc47e->__invoke($valueHolder3be02, $this, 'refresh', array('entity' => $entity), $this->initializerbc47e) || 1) && $this->valueHolder3be02 = $valueHolder3be02;

        return $this->valueHolder3be02->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerbc47e && ($this->initializerbc47e->__invoke($valueHolder3be02, $this, 'detach', array('entity' => $entity), $this->initializerbc47e) || 1) && $this->valueHolder3be02 = $valueHolder3be02;

        return $this->valueHolder3be02->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerbc47e && ($this->initializerbc47e->__invoke($valueHolder3be02, $this, 'merge', array('entity' => $entity), $this->initializerbc47e) || 1) && $this->valueHolder3be02 = $valueHolder3be02;

        return $this->valueHolder3be02->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerbc47e && ($this->initializerbc47e->__invoke($valueHolder3be02, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerbc47e) || 1) && $this->valueHolder3be02 = $valueHolder3be02;

        return $this->valueHolder3be02->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerbc47e && ($this->initializerbc47e->__invoke($valueHolder3be02, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerbc47e) || 1) && $this->valueHolder3be02 = $valueHolder3be02;

        return $this->valueHolder3be02->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerbc47e && ($this->initializerbc47e->__invoke($valueHolder3be02, $this, 'getRepository', array('entityName' => $entityName), $this->initializerbc47e) || 1) && $this->valueHolder3be02 = $valueHolder3be02;

        return $this->valueHolder3be02->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerbc47e && ($this->initializerbc47e->__invoke($valueHolder3be02, $this, 'contains', array('entity' => $entity), $this->initializerbc47e) || 1) && $this->valueHolder3be02 = $valueHolder3be02;

        return $this->valueHolder3be02->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerbc47e && ($this->initializerbc47e->__invoke($valueHolder3be02, $this, 'getEventManager', array(), $this->initializerbc47e) || 1) && $this->valueHolder3be02 = $valueHolder3be02;

        return $this->valueHolder3be02->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerbc47e && ($this->initializerbc47e->__invoke($valueHolder3be02, $this, 'getConfiguration', array(), $this->initializerbc47e) || 1) && $this->valueHolder3be02 = $valueHolder3be02;

        return $this->valueHolder3be02->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerbc47e && ($this->initializerbc47e->__invoke($valueHolder3be02, $this, 'isOpen', array(), $this->initializerbc47e) || 1) && $this->valueHolder3be02 = $valueHolder3be02;

        return $this->valueHolder3be02->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerbc47e && ($this->initializerbc47e->__invoke($valueHolder3be02, $this, 'getUnitOfWork', array(), $this->initializerbc47e) || 1) && $this->valueHolder3be02 = $valueHolder3be02;

        return $this->valueHolder3be02->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerbc47e && ($this->initializerbc47e->__invoke($valueHolder3be02, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerbc47e) || 1) && $this->valueHolder3be02 = $valueHolder3be02;

        return $this->valueHolder3be02->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerbc47e && ($this->initializerbc47e->__invoke($valueHolder3be02, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerbc47e) || 1) && $this->valueHolder3be02 = $valueHolder3be02;

        return $this->valueHolder3be02->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerbc47e && ($this->initializerbc47e->__invoke($valueHolder3be02, $this, 'getProxyFactory', array(), $this->initializerbc47e) || 1) && $this->valueHolder3be02 = $valueHolder3be02;

        return $this->valueHolder3be02->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerbc47e && ($this->initializerbc47e->__invoke($valueHolder3be02, $this, 'initializeObject', array('obj' => $obj), $this->initializerbc47e) || 1) && $this->valueHolder3be02 = $valueHolder3be02;

        return $this->valueHolder3be02->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerbc47e && ($this->initializerbc47e->__invoke($valueHolder3be02, $this, 'getFilters', array(), $this->initializerbc47e) || 1) && $this->valueHolder3be02 = $valueHolder3be02;

        return $this->valueHolder3be02->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerbc47e && ($this->initializerbc47e->__invoke($valueHolder3be02, $this, 'isFiltersStateClean', array(), $this->initializerbc47e) || 1) && $this->valueHolder3be02 = $valueHolder3be02;

        return $this->valueHolder3be02->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerbc47e && ($this->initializerbc47e->__invoke($valueHolder3be02, $this, 'hasFilters', array(), $this->initializerbc47e) || 1) && $this->valueHolder3be02 = $valueHolder3be02;

        return $this->valueHolder3be02->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializerbc47e = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder3be02) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder3be02 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder3be02->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerbc47e && ($this->initializerbc47e->__invoke($valueHolder3be02, $this, '__get', ['name' => $name], $this->initializerbc47e) || 1) && $this->valueHolder3be02 = $valueHolder3be02;

        if (isset(self::$publicProperties1c748[$name])) {
            return $this->valueHolder3be02->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3be02;

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

        $targetObject = $this->valueHolder3be02;
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
        $this->initializerbc47e && ($this->initializerbc47e->__invoke($valueHolder3be02, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerbc47e) || 1) && $this->valueHolder3be02 = $valueHolder3be02;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3be02;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder3be02;
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
        $this->initializerbc47e && ($this->initializerbc47e->__invoke($valueHolder3be02, $this, '__isset', array('name' => $name), $this->initializerbc47e) || 1) && $this->valueHolder3be02 = $valueHolder3be02;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3be02;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder3be02;
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
        $this->initializerbc47e && ($this->initializerbc47e->__invoke($valueHolder3be02, $this, '__unset', array('name' => $name), $this->initializerbc47e) || 1) && $this->valueHolder3be02 = $valueHolder3be02;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3be02;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder3be02;
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
        $this->initializerbc47e && ($this->initializerbc47e->__invoke($valueHolder3be02, $this, '__clone', array(), $this->initializerbc47e) || 1) && $this->valueHolder3be02 = $valueHolder3be02;

        $this->valueHolder3be02 = clone $this->valueHolder3be02;
    }

    public function __sleep()
    {
        $this->initializerbc47e && ($this->initializerbc47e->__invoke($valueHolder3be02, $this, '__sleep', array(), $this->initializerbc47e) || 1) && $this->valueHolder3be02 = $valueHolder3be02;

        return array('valueHolder3be02');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerbc47e = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerbc47e;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerbc47e && ($this->initializerbc47e->__invoke($valueHolder3be02, $this, 'initializeProxy', array(), $this->initializerbc47e) || 1) && $this->valueHolder3be02 = $valueHolder3be02;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder3be02;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder3be02;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
