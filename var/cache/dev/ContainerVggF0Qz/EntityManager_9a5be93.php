<?php

namespace ContainerVggF0Qz;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder9ca63 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializeraf1ac = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties4297f = [
        
    ];

    public function getConnection()
    {
        $this->initializeraf1ac && ($this->initializeraf1ac->__invoke($valueHolder9ca63, $this, 'getConnection', array(), $this->initializeraf1ac) || 1) && $this->valueHolder9ca63 = $valueHolder9ca63;

        return $this->valueHolder9ca63->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializeraf1ac && ($this->initializeraf1ac->__invoke($valueHolder9ca63, $this, 'getMetadataFactory', array(), $this->initializeraf1ac) || 1) && $this->valueHolder9ca63 = $valueHolder9ca63;

        return $this->valueHolder9ca63->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializeraf1ac && ($this->initializeraf1ac->__invoke($valueHolder9ca63, $this, 'getExpressionBuilder', array(), $this->initializeraf1ac) || 1) && $this->valueHolder9ca63 = $valueHolder9ca63;

        return $this->valueHolder9ca63->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializeraf1ac && ($this->initializeraf1ac->__invoke($valueHolder9ca63, $this, 'beginTransaction', array(), $this->initializeraf1ac) || 1) && $this->valueHolder9ca63 = $valueHolder9ca63;

        return $this->valueHolder9ca63->beginTransaction();
    }

    public function getCache()
    {
        $this->initializeraf1ac && ($this->initializeraf1ac->__invoke($valueHolder9ca63, $this, 'getCache', array(), $this->initializeraf1ac) || 1) && $this->valueHolder9ca63 = $valueHolder9ca63;

        return $this->valueHolder9ca63->getCache();
    }

    public function transactional($func)
    {
        $this->initializeraf1ac && ($this->initializeraf1ac->__invoke($valueHolder9ca63, $this, 'transactional', array('func' => $func), $this->initializeraf1ac) || 1) && $this->valueHolder9ca63 = $valueHolder9ca63;

        return $this->valueHolder9ca63->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializeraf1ac && ($this->initializeraf1ac->__invoke($valueHolder9ca63, $this, 'wrapInTransaction', array('func' => $func), $this->initializeraf1ac) || 1) && $this->valueHolder9ca63 = $valueHolder9ca63;

        return $this->valueHolder9ca63->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializeraf1ac && ($this->initializeraf1ac->__invoke($valueHolder9ca63, $this, 'commit', array(), $this->initializeraf1ac) || 1) && $this->valueHolder9ca63 = $valueHolder9ca63;

        return $this->valueHolder9ca63->commit();
    }

    public function rollback()
    {
        $this->initializeraf1ac && ($this->initializeraf1ac->__invoke($valueHolder9ca63, $this, 'rollback', array(), $this->initializeraf1ac) || 1) && $this->valueHolder9ca63 = $valueHolder9ca63;

        return $this->valueHolder9ca63->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializeraf1ac && ($this->initializeraf1ac->__invoke($valueHolder9ca63, $this, 'getClassMetadata', array('className' => $className), $this->initializeraf1ac) || 1) && $this->valueHolder9ca63 = $valueHolder9ca63;

        return $this->valueHolder9ca63->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializeraf1ac && ($this->initializeraf1ac->__invoke($valueHolder9ca63, $this, 'createQuery', array('dql' => $dql), $this->initializeraf1ac) || 1) && $this->valueHolder9ca63 = $valueHolder9ca63;

        return $this->valueHolder9ca63->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializeraf1ac && ($this->initializeraf1ac->__invoke($valueHolder9ca63, $this, 'createNamedQuery', array('name' => $name), $this->initializeraf1ac) || 1) && $this->valueHolder9ca63 = $valueHolder9ca63;

        return $this->valueHolder9ca63->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializeraf1ac && ($this->initializeraf1ac->__invoke($valueHolder9ca63, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializeraf1ac) || 1) && $this->valueHolder9ca63 = $valueHolder9ca63;

        return $this->valueHolder9ca63->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializeraf1ac && ($this->initializeraf1ac->__invoke($valueHolder9ca63, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializeraf1ac) || 1) && $this->valueHolder9ca63 = $valueHolder9ca63;

        return $this->valueHolder9ca63->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializeraf1ac && ($this->initializeraf1ac->__invoke($valueHolder9ca63, $this, 'createQueryBuilder', array(), $this->initializeraf1ac) || 1) && $this->valueHolder9ca63 = $valueHolder9ca63;

        return $this->valueHolder9ca63->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializeraf1ac && ($this->initializeraf1ac->__invoke($valueHolder9ca63, $this, 'flush', array('entity' => $entity), $this->initializeraf1ac) || 1) && $this->valueHolder9ca63 = $valueHolder9ca63;

        return $this->valueHolder9ca63->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializeraf1ac && ($this->initializeraf1ac->__invoke($valueHolder9ca63, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializeraf1ac) || 1) && $this->valueHolder9ca63 = $valueHolder9ca63;

        return $this->valueHolder9ca63->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializeraf1ac && ($this->initializeraf1ac->__invoke($valueHolder9ca63, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializeraf1ac) || 1) && $this->valueHolder9ca63 = $valueHolder9ca63;

        return $this->valueHolder9ca63->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializeraf1ac && ($this->initializeraf1ac->__invoke($valueHolder9ca63, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializeraf1ac) || 1) && $this->valueHolder9ca63 = $valueHolder9ca63;

        return $this->valueHolder9ca63->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializeraf1ac && ($this->initializeraf1ac->__invoke($valueHolder9ca63, $this, 'clear', array('entityName' => $entityName), $this->initializeraf1ac) || 1) && $this->valueHolder9ca63 = $valueHolder9ca63;

        return $this->valueHolder9ca63->clear($entityName);
    }

    public function close()
    {
        $this->initializeraf1ac && ($this->initializeraf1ac->__invoke($valueHolder9ca63, $this, 'close', array(), $this->initializeraf1ac) || 1) && $this->valueHolder9ca63 = $valueHolder9ca63;

        return $this->valueHolder9ca63->close();
    }

    public function persist($entity)
    {
        $this->initializeraf1ac && ($this->initializeraf1ac->__invoke($valueHolder9ca63, $this, 'persist', array('entity' => $entity), $this->initializeraf1ac) || 1) && $this->valueHolder9ca63 = $valueHolder9ca63;

        return $this->valueHolder9ca63->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializeraf1ac && ($this->initializeraf1ac->__invoke($valueHolder9ca63, $this, 'remove', array('entity' => $entity), $this->initializeraf1ac) || 1) && $this->valueHolder9ca63 = $valueHolder9ca63;

        return $this->valueHolder9ca63->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializeraf1ac && ($this->initializeraf1ac->__invoke($valueHolder9ca63, $this, 'refresh', array('entity' => $entity), $this->initializeraf1ac) || 1) && $this->valueHolder9ca63 = $valueHolder9ca63;

        return $this->valueHolder9ca63->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializeraf1ac && ($this->initializeraf1ac->__invoke($valueHolder9ca63, $this, 'detach', array('entity' => $entity), $this->initializeraf1ac) || 1) && $this->valueHolder9ca63 = $valueHolder9ca63;

        return $this->valueHolder9ca63->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializeraf1ac && ($this->initializeraf1ac->__invoke($valueHolder9ca63, $this, 'merge', array('entity' => $entity), $this->initializeraf1ac) || 1) && $this->valueHolder9ca63 = $valueHolder9ca63;

        return $this->valueHolder9ca63->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializeraf1ac && ($this->initializeraf1ac->__invoke($valueHolder9ca63, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializeraf1ac) || 1) && $this->valueHolder9ca63 = $valueHolder9ca63;

        return $this->valueHolder9ca63->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializeraf1ac && ($this->initializeraf1ac->__invoke($valueHolder9ca63, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializeraf1ac) || 1) && $this->valueHolder9ca63 = $valueHolder9ca63;

        return $this->valueHolder9ca63->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializeraf1ac && ($this->initializeraf1ac->__invoke($valueHolder9ca63, $this, 'getRepository', array('entityName' => $entityName), $this->initializeraf1ac) || 1) && $this->valueHolder9ca63 = $valueHolder9ca63;

        return $this->valueHolder9ca63->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializeraf1ac && ($this->initializeraf1ac->__invoke($valueHolder9ca63, $this, 'contains', array('entity' => $entity), $this->initializeraf1ac) || 1) && $this->valueHolder9ca63 = $valueHolder9ca63;

        return $this->valueHolder9ca63->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializeraf1ac && ($this->initializeraf1ac->__invoke($valueHolder9ca63, $this, 'getEventManager', array(), $this->initializeraf1ac) || 1) && $this->valueHolder9ca63 = $valueHolder9ca63;

        return $this->valueHolder9ca63->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializeraf1ac && ($this->initializeraf1ac->__invoke($valueHolder9ca63, $this, 'getConfiguration', array(), $this->initializeraf1ac) || 1) && $this->valueHolder9ca63 = $valueHolder9ca63;

        return $this->valueHolder9ca63->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializeraf1ac && ($this->initializeraf1ac->__invoke($valueHolder9ca63, $this, 'isOpen', array(), $this->initializeraf1ac) || 1) && $this->valueHolder9ca63 = $valueHolder9ca63;

        return $this->valueHolder9ca63->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializeraf1ac && ($this->initializeraf1ac->__invoke($valueHolder9ca63, $this, 'getUnitOfWork', array(), $this->initializeraf1ac) || 1) && $this->valueHolder9ca63 = $valueHolder9ca63;

        return $this->valueHolder9ca63->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializeraf1ac && ($this->initializeraf1ac->__invoke($valueHolder9ca63, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializeraf1ac) || 1) && $this->valueHolder9ca63 = $valueHolder9ca63;

        return $this->valueHolder9ca63->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializeraf1ac && ($this->initializeraf1ac->__invoke($valueHolder9ca63, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializeraf1ac) || 1) && $this->valueHolder9ca63 = $valueHolder9ca63;

        return $this->valueHolder9ca63->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializeraf1ac && ($this->initializeraf1ac->__invoke($valueHolder9ca63, $this, 'getProxyFactory', array(), $this->initializeraf1ac) || 1) && $this->valueHolder9ca63 = $valueHolder9ca63;

        return $this->valueHolder9ca63->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializeraf1ac && ($this->initializeraf1ac->__invoke($valueHolder9ca63, $this, 'initializeObject', array('obj' => $obj), $this->initializeraf1ac) || 1) && $this->valueHolder9ca63 = $valueHolder9ca63;

        return $this->valueHolder9ca63->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializeraf1ac && ($this->initializeraf1ac->__invoke($valueHolder9ca63, $this, 'getFilters', array(), $this->initializeraf1ac) || 1) && $this->valueHolder9ca63 = $valueHolder9ca63;

        return $this->valueHolder9ca63->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializeraf1ac && ($this->initializeraf1ac->__invoke($valueHolder9ca63, $this, 'isFiltersStateClean', array(), $this->initializeraf1ac) || 1) && $this->valueHolder9ca63 = $valueHolder9ca63;

        return $this->valueHolder9ca63->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializeraf1ac && ($this->initializeraf1ac->__invoke($valueHolder9ca63, $this, 'hasFilters', array(), $this->initializeraf1ac) || 1) && $this->valueHolder9ca63 = $valueHolder9ca63;

        return $this->valueHolder9ca63->hasFilters();
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

        $instance->initializeraf1ac = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder9ca63) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder9ca63 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder9ca63->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializeraf1ac && ($this->initializeraf1ac->__invoke($valueHolder9ca63, $this, '__get', ['name' => $name], $this->initializeraf1ac) || 1) && $this->valueHolder9ca63 = $valueHolder9ca63;

        if (isset(self::$publicProperties4297f[$name])) {
            return $this->valueHolder9ca63->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9ca63;

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

        $targetObject = $this->valueHolder9ca63;
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
        $this->initializeraf1ac && ($this->initializeraf1ac->__invoke($valueHolder9ca63, $this, '__set', array('name' => $name, 'value' => $value), $this->initializeraf1ac) || 1) && $this->valueHolder9ca63 = $valueHolder9ca63;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9ca63;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder9ca63;
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
        $this->initializeraf1ac && ($this->initializeraf1ac->__invoke($valueHolder9ca63, $this, '__isset', array('name' => $name), $this->initializeraf1ac) || 1) && $this->valueHolder9ca63 = $valueHolder9ca63;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9ca63;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder9ca63;
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
        $this->initializeraf1ac && ($this->initializeraf1ac->__invoke($valueHolder9ca63, $this, '__unset', array('name' => $name), $this->initializeraf1ac) || 1) && $this->valueHolder9ca63 = $valueHolder9ca63;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9ca63;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder9ca63;
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
        $this->initializeraf1ac && ($this->initializeraf1ac->__invoke($valueHolder9ca63, $this, '__clone', array(), $this->initializeraf1ac) || 1) && $this->valueHolder9ca63 = $valueHolder9ca63;

        $this->valueHolder9ca63 = clone $this->valueHolder9ca63;
    }

    public function __sleep()
    {
        $this->initializeraf1ac && ($this->initializeraf1ac->__invoke($valueHolder9ca63, $this, '__sleep', array(), $this->initializeraf1ac) || 1) && $this->valueHolder9ca63 = $valueHolder9ca63;

        return array('valueHolder9ca63');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializeraf1ac = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializeraf1ac;
    }

    public function initializeProxy() : bool
    {
        return $this->initializeraf1ac && ($this->initializeraf1ac->__invoke($valueHolder9ca63, $this, 'initializeProxy', array(), $this->initializeraf1ac) || 1) && $this->valueHolder9ca63 = $valueHolder9ca63;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder9ca63;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder9ca63;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
