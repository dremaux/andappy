<?php

namespace ContainerAmwje55;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder9f020 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerb845a = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesb33b3 = [
        
    ];

    public function getConnection()
    {
        $this->initializerb845a && ($this->initializerb845a->__invoke($valueHolder9f020, $this, 'getConnection', array(), $this->initializerb845a) || 1) && $this->valueHolder9f020 = $valueHolder9f020;

        return $this->valueHolder9f020->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerb845a && ($this->initializerb845a->__invoke($valueHolder9f020, $this, 'getMetadataFactory', array(), $this->initializerb845a) || 1) && $this->valueHolder9f020 = $valueHolder9f020;

        return $this->valueHolder9f020->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerb845a && ($this->initializerb845a->__invoke($valueHolder9f020, $this, 'getExpressionBuilder', array(), $this->initializerb845a) || 1) && $this->valueHolder9f020 = $valueHolder9f020;

        return $this->valueHolder9f020->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerb845a && ($this->initializerb845a->__invoke($valueHolder9f020, $this, 'beginTransaction', array(), $this->initializerb845a) || 1) && $this->valueHolder9f020 = $valueHolder9f020;

        return $this->valueHolder9f020->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerb845a && ($this->initializerb845a->__invoke($valueHolder9f020, $this, 'getCache', array(), $this->initializerb845a) || 1) && $this->valueHolder9f020 = $valueHolder9f020;

        return $this->valueHolder9f020->getCache();
    }

    public function transactional($func)
    {
        $this->initializerb845a && ($this->initializerb845a->__invoke($valueHolder9f020, $this, 'transactional', array('func' => $func), $this->initializerb845a) || 1) && $this->valueHolder9f020 = $valueHolder9f020;

        return $this->valueHolder9f020->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerb845a && ($this->initializerb845a->__invoke($valueHolder9f020, $this, 'wrapInTransaction', array('func' => $func), $this->initializerb845a) || 1) && $this->valueHolder9f020 = $valueHolder9f020;

        return $this->valueHolder9f020->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerb845a && ($this->initializerb845a->__invoke($valueHolder9f020, $this, 'commit', array(), $this->initializerb845a) || 1) && $this->valueHolder9f020 = $valueHolder9f020;

        return $this->valueHolder9f020->commit();
    }

    public function rollback()
    {
        $this->initializerb845a && ($this->initializerb845a->__invoke($valueHolder9f020, $this, 'rollback', array(), $this->initializerb845a) || 1) && $this->valueHolder9f020 = $valueHolder9f020;

        return $this->valueHolder9f020->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerb845a && ($this->initializerb845a->__invoke($valueHolder9f020, $this, 'getClassMetadata', array('className' => $className), $this->initializerb845a) || 1) && $this->valueHolder9f020 = $valueHolder9f020;

        return $this->valueHolder9f020->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerb845a && ($this->initializerb845a->__invoke($valueHolder9f020, $this, 'createQuery', array('dql' => $dql), $this->initializerb845a) || 1) && $this->valueHolder9f020 = $valueHolder9f020;

        return $this->valueHolder9f020->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerb845a && ($this->initializerb845a->__invoke($valueHolder9f020, $this, 'createNamedQuery', array('name' => $name), $this->initializerb845a) || 1) && $this->valueHolder9f020 = $valueHolder9f020;

        return $this->valueHolder9f020->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerb845a && ($this->initializerb845a->__invoke($valueHolder9f020, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerb845a) || 1) && $this->valueHolder9f020 = $valueHolder9f020;

        return $this->valueHolder9f020->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerb845a && ($this->initializerb845a->__invoke($valueHolder9f020, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerb845a) || 1) && $this->valueHolder9f020 = $valueHolder9f020;

        return $this->valueHolder9f020->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerb845a && ($this->initializerb845a->__invoke($valueHolder9f020, $this, 'createQueryBuilder', array(), $this->initializerb845a) || 1) && $this->valueHolder9f020 = $valueHolder9f020;

        return $this->valueHolder9f020->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerb845a && ($this->initializerb845a->__invoke($valueHolder9f020, $this, 'flush', array('entity' => $entity), $this->initializerb845a) || 1) && $this->valueHolder9f020 = $valueHolder9f020;

        return $this->valueHolder9f020->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerb845a && ($this->initializerb845a->__invoke($valueHolder9f020, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb845a) || 1) && $this->valueHolder9f020 = $valueHolder9f020;

        return $this->valueHolder9f020->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerb845a && ($this->initializerb845a->__invoke($valueHolder9f020, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerb845a) || 1) && $this->valueHolder9f020 = $valueHolder9f020;

        return $this->valueHolder9f020->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerb845a && ($this->initializerb845a->__invoke($valueHolder9f020, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerb845a) || 1) && $this->valueHolder9f020 = $valueHolder9f020;

        return $this->valueHolder9f020->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerb845a && ($this->initializerb845a->__invoke($valueHolder9f020, $this, 'clear', array('entityName' => $entityName), $this->initializerb845a) || 1) && $this->valueHolder9f020 = $valueHolder9f020;

        return $this->valueHolder9f020->clear($entityName);
    }

    public function close()
    {
        $this->initializerb845a && ($this->initializerb845a->__invoke($valueHolder9f020, $this, 'close', array(), $this->initializerb845a) || 1) && $this->valueHolder9f020 = $valueHolder9f020;

        return $this->valueHolder9f020->close();
    }

    public function persist($entity)
    {
        $this->initializerb845a && ($this->initializerb845a->__invoke($valueHolder9f020, $this, 'persist', array('entity' => $entity), $this->initializerb845a) || 1) && $this->valueHolder9f020 = $valueHolder9f020;

        return $this->valueHolder9f020->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerb845a && ($this->initializerb845a->__invoke($valueHolder9f020, $this, 'remove', array('entity' => $entity), $this->initializerb845a) || 1) && $this->valueHolder9f020 = $valueHolder9f020;

        return $this->valueHolder9f020->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerb845a && ($this->initializerb845a->__invoke($valueHolder9f020, $this, 'refresh', array('entity' => $entity), $this->initializerb845a) || 1) && $this->valueHolder9f020 = $valueHolder9f020;

        return $this->valueHolder9f020->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerb845a && ($this->initializerb845a->__invoke($valueHolder9f020, $this, 'detach', array('entity' => $entity), $this->initializerb845a) || 1) && $this->valueHolder9f020 = $valueHolder9f020;

        return $this->valueHolder9f020->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerb845a && ($this->initializerb845a->__invoke($valueHolder9f020, $this, 'merge', array('entity' => $entity), $this->initializerb845a) || 1) && $this->valueHolder9f020 = $valueHolder9f020;

        return $this->valueHolder9f020->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerb845a && ($this->initializerb845a->__invoke($valueHolder9f020, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerb845a) || 1) && $this->valueHolder9f020 = $valueHolder9f020;

        return $this->valueHolder9f020->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerb845a && ($this->initializerb845a->__invoke($valueHolder9f020, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb845a) || 1) && $this->valueHolder9f020 = $valueHolder9f020;

        return $this->valueHolder9f020->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerb845a && ($this->initializerb845a->__invoke($valueHolder9f020, $this, 'getRepository', array('entityName' => $entityName), $this->initializerb845a) || 1) && $this->valueHolder9f020 = $valueHolder9f020;

        return $this->valueHolder9f020->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerb845a && ($this->initializerb845a->__invoke($valueHolder9f020, $this, 'contains', array('entity' => $entity), $this->initializerb845a) || 1) && $this->valueHolder9f020 = $valueHolder9f020;

        return $this->valueHolder9f020->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerb845a && ($this->initializerb845a->__invoke($valueHolder9f020, $this, 'getEventManager', array(), $this->initializerb845a) || 1) && $this->valueHolder9f020 = $valueHolder9f020;

        return $this->valueHolder9f020->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerb845a && ($this->initializerb845a->__invoke($valueHolder9f020, $this, 'getConfiguration', array(), $this->initializerb845a) || 1) && $this->valueHolder9f020 = $valueHolder9f020;

        return $this->valueHolder9f020->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerb845a && ($this->initializerb845a->__invoke($valueHolder9f020, $this, 'isOpen', array(), $this->initializerb845a) || 1) && $this->valueHolder9f020 = $valueHolder9f020;

        return $this->valueHolder9f020->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerb845a && ($this->initializerb845a->__invoke($valueHolder9f020, $this, 'getUnitOfWork', array(), $this->initializerb845a) || 1) && $this->valueHolder9f020 = $valueHolder9f020;

        return $this->valueHolder9f020->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerb845a && ($this->initializerb845a->__invoke($valueHolder9f020, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb845a) || 1) && $this->valueHolder9f020 = $valueHolder9f020;

        return $this->valueHolder9f020->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerb845a && ($this->initializerb845a->__invoke($valueHolder9f020, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb845a) || 1) && $this->valueHolder9f020 = $valueHolder9f020;

        return $this->valueHolder9f020->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerb845a && ($this->initializerb845a->__invoke($valueHolder9f020, $this, 'getProxyFactory', array(), $this->initializerb845a) || 1) && $this->valueHolder9f020 = $valueHolder9f020;

        return $this->valueHolder9f020->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerb845a && ($this->initializerb845a->__invoke($valueHolder9f020, $this, 'initializeObject', array('obj' => $obj), $this->initializerb845a) || 1) && $this->valueHolder9f020 = $valueHolder9f020;

        return $this->valueHolder9f020->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerb845a && ($this->initializerb845a->__invoke($valueHolder9f020, $this, 'getFilters', array(), $this->initializerb845a) || 1) && $this->valueHolder9f020 = $valueHolder9f020;

        return $this->valueHolder9f020->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerb845a && ($this->initializerb845a->__invoke($valueHolder9f020, $this, 'isFiltersStateClean', array(), $this->initializerb845a) || 1) && $this->valueHolder9f020 = $valueHolder9f020;

        return $this->valueHolder9f020->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerb845a && ($this->initializerb845a->__invoke($valueHolder9f020, $this, 'hasFilters', array(), $this->initializerb845a) || 1) && $this->valueHolder9f020 = $valueHolder9f020;

        return $this->valueHolder9f020->hasFilters();
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

        $instance->initializerb845a = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder9f020) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder9f020 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder9f020->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerb845a && ($this->initializerb845a->__invoke($valueHolder9f020, $this, '__get', ['name' => $name], $this->initializerb845a) || 1) && $this->valueHolder9f020 = $valueHolder9f020;

        if (isset(self::$publicPropertiesb33b3[$name])) {
            return $this->valueHolder9f020->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9f020;

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

        $targetObject = $this->valueHolder9f020;
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
        $this->initializerb845a && ($this->initializerb845a->__invoke($valueHolder9f020, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerb845a) || 1) && $this->valueHolder9f020 = $valueHolder9f020;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9f020;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder9f020;
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
        $this->initializerb845a && ($this->initializerb845a->__invoke($valueHolder9f020, $this, '__isset', array('name' => $name), $this->initializerb845a) || 1) && $this->valueHolder9f020 = $valueHolder9f020;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9f020;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder9f020;
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
        $this->initializerb845a && ($this->initializerb845a->__invoke($valueHolder9f020, $this, '__unset', array('name' => $name), $this->initializerb845a) || 1) && $this->valueHolder9f020 = $valueHolder9f020;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9f020;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder9f020;
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
        $this->initializerb845a && ($this->initializerb845a->__invoke($valueHolder9f020, $this, '__clone', array(), $this->initializerb845a) || 1) && $this->valueHolder9f020 = $valueHolder9f020;

        $this->valueHolder9f020 = clone $this->valueHolder9f020;
    }

    public function __sleep()
    {
        $this->initializerb845a && ($this->initializerb845a->__invoke($valueHolder9f020, $this, '__sleep', array(), $this->initializerb845a) || 1) && $this->valueHolder9f020 = $valueHolder9f020;

        return array('valueHolder9f020');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerb845a = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerb845a;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerb845a && ($this->initializerb845a->__invoke($valueHolder9f020, $this, 'initializeProxy', array(), $this->initializerb845a) || 1) && $this->valueHolder9f020 = $valueHolder9f020;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder9f020;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder9f020;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
