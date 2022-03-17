<?php

namespace ContainerOwNIJHR;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder217d6 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializera093e = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties5aa8a = [
        
    ];

    public function getConnection()
    {
        $this->initializera093e && ($this->initializera093e->__invoke($valueHolder217d6, $this, 'getConnection', array(), $this->initializera093e) || 1) && $this->valueHolder217d6 = $valueHolder217d6;

        return $this->valueHolder217d6->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializera093e && ($this->initializera093e->__invoke($valueHolder217d6, $this, 'getMetadataFactory', array(), $this->initializera093e) || 1) && $this->valueHolder217d6 = $valueHolder217d6;

        return $this->valueHolder217d6->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializera093e && ($this->initializera093e->__invoke($valueHolder217d6, $this, 'getExpressionBuilder', array(), $this->initializera093e) || 1) && $this->valueHolder217d6 = $valueHolder217d6;

        return $this->valueHolder217d6->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializera093e && ($this->initializera093e->__invoke($valueHolder217d6, $this, 'beginTransaction', array(), $this->initializera093e) || 1) && $this->valueHolder217d6 = $valueHolder217d6;

        return $this->valueHolder217d6->beginTransaction();
    }

    public function getCache()
    {
        $this->initializera093e && ($this->initializera093e->__invoke($valueHolder217d6, $this, 'getCache', array(), $this->initializera093e) || 1) && $this->valueHolder217d6 = $valueHolder217d6;

        return $this->valueHolder217d6->getCache();
    }

    public function transactional($func)
    {
        $this->initializera093e && ($this->initializera093e->__invoke($valueHolder217d6, $this, 'transactional', array('func' => $func), $this->initializera093e) || 1) && $this->valueHolder217d6 = $valueHolder217d6;

        return $this->valueHolder217d6->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializera093e && ($this->initializera093e->__invoke($valueHolder217d6, $this, 'wrapInTransaction', array('func' => $func), $this->initializera093e) || 1) && $this->valueHolder217d6 = $valueHolder217d6;

        return $this->valueHolder217d6->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializera093e && ($this->initializera093e->__invoke($valueHolder217d6, $this, 'commit', array(), $this->initializera093e) || 1) && $this->valueHolder217d6 = $valueHolder217d6;

        return $this->valueHolder217d6->commit();
    }

    public function rollback()
    {
        $this->initializera093e && ($this->initializera093e->__invoke($valueHolder217d6, $this, 'rollback', array(), $this->initializera093e) || 1) && $this->valueHolder217d6 = $valueHolder217d6;

        return $this->valueHolder217d6->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializera093e && ($this->initializera093e->__invoke($valueHolder217d6, $this, 'getClassMetadata', array('className' => $className), $this->initializera093e) || 1) && $this->valueHolder217d6 = $valueHolder217d6;

        return $this->valueHolder217d6->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializera093e && ($this->initializera093e->__invoke($valueHolder217d6, $this, 'createQuery', array('dql' => $dql), $this->initializera093e) || 1) && $this->valueHolder217d6 = $valueHolder217d6;

        return $this->valueHolder217d6->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializera093e && ($this->initializera093e->__invoke($valueHolder217d6, $this, 'createNamedQuery', array('name' => $name), $this->initializera093e) || 1) && $this->valueHolder217d6 = $valueHolder217d6;

        return $this->valueHolder217d6->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializera093e && ($this->initializera093e->__invoke($valueHolder217d6, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializera093e) || 1) && $this->valueHolder217d6 = $valueHolder217d6;

        return $this->valueHolder217d6->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializera093e && ($this->initializera093e->__invoke($valueHolder217d6, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializera093e) || 1) && $this->valueHolder217d6 = $valueHolder217d6;

        return $this->valueHolder217d6->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializera093e && ($this->initializera093e->__invoke($valueHolder217d6, $this, 'createQueryBuilder', array(), $this->initializera093e) || 1) && $this->valueHolder217d6 = $valueHolder217d6;

        return $this->valueHolder217d6->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializera093e && ($this->initializera093e->__invoke($valueHolder217d6, $this, 'flush', array('entity' => $entity), $this->initializera093e) || 1) && $this->valueHolder217d6 = $valueHolder217d6;

        return $this->valueHolder217d6->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializera093e && ($this->initializera093e->__invoke($valueHolder217d6, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera093e) || 1) && $this->valueHolder217d6 = $valueHolder217d6;

        return $this->valueHolder217d6->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializera093e && ($this->initializera093e->__invoke($valueHolder217d6, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializera093e) || 1) && $this->valueHolder217d6 = $valueHolder217d6;

        return $this->valueHolder217d6->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializera093e && ($this->initializera093e->__invoke($valueHolder217d6, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializera093e) || 1) && $this->valueHolder217d6 = $valueHolder217d6;

        return $this->valueHolder217d6->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializera093e && ($this->initializera093e->__invoke($valueHolder217d6, $this, 'clear', array('entityName' => $entityName), $this->initializera093e) || 1) && $this->valueHolder217d6 = $valueHolder217d6;

        return $this->valueHolder217d6->clear($entityName);
    }

    public function close()
    {
        $this->initializera093e && ($this->initializera093e->__invoke($valueHolder217d6, $this, 'close', array(), $this->initializera093e) || 1) && $this->valueHolder217d6 = $valueHolder217d6;

        return $this->valueHolder217d6->close();
    }

    public function persist($entity)
    {
        $this->initializera093e && ($this->initializera093e->__invoke($valueHolder217d6, $this, 'persist', array('entity' => $entity), $this->initializera093e) || 1) && $this->valueHolder217d6 = $valueHolder217d6;

        return $this->valueHolder217d6->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializera093e && ($this->initializera093e->__invoke($valueHolder217d6, $this, 'remove', array('entity' => $entity), $this->initializera093e) || 1) && $this->valueHolder217d6 = $valueHolder217d6;

        return $this->valueHolder217d6->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializera093e && ($this->initializera093e->__invoke($valueHolder217d6, $this, 'refresh', array('entity' => $entity), $this->initializera093e) || 1) && $this->valueHolder217d6 = $valueHolder217d6;

        return $this->valueHolder217d6->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializera093e && ($this->initializera093e->__invoke($valueHolder217d6, $this, 'detach', array('entity' => $entity), $this->initializera093e) || 1) && $this->valueHolder217d6 = $valueHolder217d6;

        return $this->valueHolder217d6->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializera093e && ($this->initializera093e->__invoke($valueHolder217d6, $this, 'merge', array('entity' => $entity), $this->initializera093e) || 1) && $this->valueHolder217d6 = $valueHolder217d6;

        return $this->valueHolder217d6->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializera093e && ($this->initializera093e->__invoke($valueHolder217d6, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializera093e) || 1) && $this->valueHolder217d6 = $valueHolder217d6;

        return $this->valueHolder217d6->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializera093e && ($this->initializera093e->__invoke($valueHolder217d6, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera093e) || 1) && $this->valueHolder217d6 = $valueHolder217d6;

        return $this->valueHolder217d6->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializera093e && ($this->initializera093e->__invoke($valueHolder217d6, $this, 'getRepository', array('entityName' => $entityName), $this->initializera093e) || 1) && $this->valueHolder217d6 = $valueHolder217d6;

        return $this->valueHolder217d6->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializera093e && ($this->initializera093e->__invoke($valueHolder217d6, $this, 'contains', array('entity' => $entity), $this->initializera093e) || 1) && $this->valueHolder217d6 = $valueHolder217d6;

        return $this->valueHolder217d6->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializera093e && ($this->initializera093e->__invoke($valueHolder217d6, $this, 'getEventManager', array(), $this->initializera093e) || 1) && $this->valueHolder217d6 = $valueHolder217d6;

        return $this->valueHolder217d6->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializera093e && ($this->initializera093e->__invoke($valueHolder217d6, $this, 'getConfiguration', array(), $this->initializera093e) || 1) && $this->valueHolder217d6 = $valueHolder217d6;

        return $this->valueHolder217d6->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializera093e && ($this->initializera093e->__invoke($valueHolder217d6, $this, 'isOpen', array(), $this->initializera093e) || 1) && $this->valueHolder217d6 = $valueHolder217d6;

        return $this->valueHolder217d6->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializera093e && ($this->initializera093e->__invoke($valueHolder217d6, $this, 'getUnitOfWork', array(), $this->initializera093e) || 1) && $this->valueHolder217d6 = $valueHolder217d6;

        return $this->valueHolder217d6->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializera093e && ($this->initializera093e->__invoke($valueHolder217d6, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializera093e) || 1) && $this->valueHolder217d6 = $valueHolder217d6;

        return $this->valueHolder217d6->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializera093e && ($this->initializera093e->__invoke($valueHolder217d6, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializera093e) || 1) && $this->valueHolder217d6 = $valueHolder217d6;

        return $this->valueHolder217d6->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializera093e && ($this->initializera093e->__invoke($valueHolder217d6, $this, 'getProxyFactory', array(), $this->initializera093e) || 1) && $this->valueHolder217d6 = $valueHolder217d6;

        return $this->valueHolder217d6->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializera093e && ($this->initializera093e->__invoke($valueHolder217d6, $this, 'initializeObject', array('obj' => $obj), $this->initializera093e) || 1) && $this->valueHolder217d6 = $valueHolder217d6;

        return $this->valueHolder217d6->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializera093e && ($this->initializera093e->__invoke($valueHolder217d6, $this, 'getFilters', array(), $this->initializera093e) || 1) && $this->valueHolder217d6 = $valueHolder217d6;

        return $this->valueHolder217d6->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializera093e && ($this->initializera093e->__invoke($valueHolder217d6, $this, 'isFiltersStateClean', array(), $this->initializera093e) || 1) && $this->valueHolder217d6 = $valueHolder217d6;

        return $this->valueHolder217d6->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializera093e && ($this->initializera093e->__invoke($valueHolder217d6, $this, 'hasFilters', array(), $this->initializera093e) || 1) && $this->valueHolder217d6 = $valueHolder217d6;

        return $this->valueHolder217d6->hasFilters();
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

        $instance->initializera093e = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder217d6) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder217d6 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder217d6->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializera093e && ($this->initializera093e->__invoke($valueHolder217d6, $this, '__get', ['name' => $name], $this->initializera093e) || 1) && $this->valueHolder217d6 = $valueHolder217d6;

        if (isset(self::$publicProperties5aa8a[$name])) {
            return $this->valueHolder217d6->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder217d6;

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

        $targetObject = $this->valueHolder217d6;
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
        $this->initializera093e && ($this->initializera093e->__invoke($valueHolder217d6, $this, '__set', array('name' => $name, 'value' => $value), $this->initializera093e) || 1) && $this->valueHolder217d6 = $valueHolder217d6;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder217d6;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder217d6;
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
        $this->initializera093e && ($this->initializera093e->__invoke($valueHolder217d6, $this, '__isset', array('name' => $name), $this->initializera093e) || 1) && $this->valueHolder217d6 = $valueHolder217d6;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder217d6;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder217d6;
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
        $this->initializera093e && ($this->initializera093e->__invoke($valueHolder217d6, $this, '__unset', array('name' => $name), $this->initializera093e) || 1) && $this->valueHolder217d6 = $valueHolder217d6;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder217d6;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder217d6;
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
        $this->initializera093e && ($this->initializera093e->__invoke($valueHolder217d6, $this, '__clone', array(), $this->initializera093e) || 1) && $this->valueHolder217d6 = $valueHolder217d6;

        $this->valueHolder217d6 = clone $this->valueHolder217d6;
    }

    public function __sleep()
    {
        $this->initializera093e && ($this->initializera093e->__invoke($valueHolder217d6, $this, '__sleep', array(), $this->initializera093e) || 1) && $this->valueHolder217d6 = $valueHolder217d6;

        return array('valueHolder217d6');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializera093e = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializera093e;
    }

    public function initializeProxy() : bool
    {
        return $this->initializera093e && ($this->initializera093e->__invoke($valueHolder217d6, $this, 'initializeProxy', array(), $this->initializera093e) || 1) && $this->valueHolder217d6 = $valueHolder217d6;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder217d6;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder217d6;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
