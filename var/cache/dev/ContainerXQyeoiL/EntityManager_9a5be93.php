<?php

namespace ContainerXQyeoiL;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder9ae19 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerbe6c5 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties169fc = [
        
    ];

    public function getConnection()
    {
        $this->initializerbe6c5 && ($this->initializerbe6c5->__invoke($valueHolder9ae19, $this, 'getConnection', array(), $this->initializerbe6c5) || 1) && $this->valueHolder9ae19 = $valueHolder9ae19;

        return $this->valueHolder9ae19->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerbe6c5 && ($this->initializerbe6c5->__invoke($valueHolder9ae19, $this, 'getMetadataFactory', array(), $this->initializerbe6c5) || 1) && $this->valueHolder9ae19 = $valueHolder9ae19;

        return $this->valueHolder9ae19->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerbe6c5 && ($this->initializerbe6c5->__invoke($valueHolder9ae19, $this, 'getExpressionBuilder', array(), $this->initializerbe6c5) || 1) && $this->valueHolder9ae19 = $valueHolder9ae19;

        return $this->valueHolder9ae19->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerbe6c5 && ($this->initializerbe6c5->__invoke($valueHolder9ae19, $this, 'beginTransaction', array(), $this->initializerbe6c5) || 1) && $this->valueHolder9ae19 = $valueHolder9ae19;

        return $this->valueHolder9ae19->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerbe6c5 && ($this->initializerbe6c5->__invoke($valueHolder9ae19, $this, 'getCache', array(), $this->initializerbe6c5) || 1) && $this->valueHolder9ae19 = $valueHolder9ae19;

        return $this->valueHolder9ae19->getCache();
    }

    public function transactional($func)
    {
        $this->initializerbe6c5 && ($this->initializerbe6c5->__invoke($valueHolder9ae19, $this, 'transactional', array('func' => $func), $this->initializerbe6c5) || 1) && $this->valueHolder9ae19 = $valueHolder9ae19;

        return $this->valueHolder9ae19->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerbe6c5 && ($this->initializerbe6c5->__invoke($valueHolder9ae19, $this, 'wrapInTransaction', array('func' => $func), $this->initializerbe6c5) || 1) && $this->valueHolder9ae19 = $valueHolder9ae19;

        return $this->valueHolder9ae19->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerbe6c5 && ($this->initializerbe6c5->__invoke($valueHolder9ae19, $this, 'commit', array(), $this->initializerbe6c5) || 1) && $this->valueHolder9ae19 = $valueHolder9ae19;

        return $this->valueHolder9ae19->commit();
    }

    public function rollback()
    {
        $this->initializerbe6c5 && ($this->initializerbe6c5->__invoke($valueHolder9ae19, $this, 'rollback', array(), $this->initializerbe6c5) || 1) && $this->valueHolder9ae19 = $valueHolder9ae19;

        return $this->valueHolder9ae19->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerbe6c5 && ($this->initializerbe6c5->__invoke($valueHolder9ae19, $this, 'getClassMetadata', array('className' => $className), $this->initializerbe6c5) || 1) && $this->valueHolder9ae19 = $valueHolder9ae19;

        return $this->valueHolder9ae19->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerbe6c5 && ($this->initializerbe6c5->__invoke($valueHolder9ae19, $this, 'createQuery', array('dql' => $dql), $this->initializerbe6c5) || 1) && $this->valueHolder9ae19 = $valueHolder9ae19;

        return $this->valueHolder9ae19->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerbe6c5 && ($this->initializerbe6c5->__invoke($valueHolder9ae19, $this, 'createNamedQuery', array('name' => $name), $this->initializerbe6c5) || 1) && $this->valueHolder9ae19 = $valueHolder9ae19;

        return $this->valueHolder9ae19->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerbe6c5 && ($this->initializerbe6c5->__invoke($valueHolder9ae19, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerbe6c5) || 1) && $this->valueHolder9ae19 = $valueHolder9ae19;

        return $this->valueHolder9ae19->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerbe6c5 && ($this->initializerbe6c5->__invoke($valueHolder9ae19, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerbe6c5) || 1) && $this->valueHolder9ae19 = $valueHolder9ae19;

        return $this->valueHolder9ae19->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerbe6c5 && ($this->initializerbe6c5->__invoke($valueHolder9ae19, $this, 'createQueryBuilder', array(), $this->initializerbe6c5) || 1) && $this->valueHolder9ae19 = $valueHolder9ae19;

        return $this->valueHolder9ae19->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerbe6c5 && ($this->initializerbe6c5->__invoke($valueHolder9ae19, $this, 'flush', array('entity' => $entity), $this->initializerbe6c5) || 1) && $this->valueHolder9ae19 = $valueHolder9ae19;

        return $this->valueHolder9ae19->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerbe6c5 && ($this->initializerbe6c5->__invoke($valueHolder9ae19, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerbe6c5) || 1) && $this->valueHolder9ae19 = $valueHolder9ae19;

        return $this->valueHolder9ae19->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerbe6c5 && ($this->initializerbe6c5->__invoke($valueHolder9ae19, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerbe6c5) || 1) && $this->valueHolder9ae19 = $valueHolder9ae19;

        return $this->valueHolder9ae19->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerbe6c5 && ($this->initializerbe6c5->__invoke($valueHolder9ae19, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerbe6c5) || 1) && $this->valueHolder9ae19 = $valueHolder9ae19;

        return $this->valueHolder9ae19->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerbe6c5 && ($this->initializerbe6c5->__invoke($valueHolder9ae19, $this, 'clear', array('entityName' => $entityName), $this->initializerbe6c5) || 1) && $this->valueHolder9ae19 = $valueHolder9ae19;

        return $this->valueHolder9ae19->clear($entityName);
    }

    public function close()
    {
        $this->initializerbe6c5 && ($this->initializerbe6c5->__invoke($valueHolder9ae19, $this, 'close', array(), $this->initializerbe6c5) || 1) && $this->valueHolder9ae19 = $valueHolder9ae19;

        return $this->valueHolder9ae19->close();
    }

    public function persist($entity)
    {
        $this->initializerbe6c5 && ($this->initializerbe6c5->__invoke($valueHolder9ae19, $this, 'persist', array('entity' => $entity), $this->initializerbe6c5) || 1) && $this->valueHolder9ae19 = $valueHolder9ae19;

        return $this->valueHolder9ae19->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerbe6c5 && ($this->initializerbe6c5->__invoke($valueHolder9ae19, $this, 'remove', array('entity' => $entity), $this->initializerbe6c5) || 1) && $this->valueHolder9ae19 = $valueHolder9ae19;

        return $this->valueHolder9ae19->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerbe6c5 && ($this->initializerbe6c5->__invoke($valueHolder9ae19, $this, 'refresh', array('entity' => $entity), $this->initializerbe6c5) || 1) && $this->valueHolder9ae19 = $valueHolder9ae19;

        return $this->valueHolder9ae19->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerbe6c5 && ($this->initializerbe6c5->__invoke($valueHolder9ae19, $this, 'detach', array('entity' => $entity), $this->initializerbe6c5) || 1) && $this->valueHolder9ae19 = $valueHolder9ae19;

        return $this->valueHolder9ae19->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerbe6c5 && ($this->initializerbe6c5->__invoke($valueHolder9ae19, $this, 'merge', array('entity' => $entity), $this->initializerbe6c5) || 1) && $this->valueHolder9ae19 = $valueHolder9ae19;

        return $this->valueHolder9ae19->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerbe6c5 && ($this->initializerbe6c5->__invoke($valueHolder9ae19, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerbe6c5) || 1) && $this->valueHolder9ae19 = $valueHolder9ae19;

        return $this->valueHolder9ae19->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerbe6c5 && ($this->initializerbe6c5->__invoke($valueHolder9ae19, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerbe6c5) || 1) && $this->valueHolder9ae19 = $valueHolder9ae19;

        return $this->valueHolder9ae19->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerbe6c5 && ($this->initializerbe6c5->__invoke($valueHolder9ae19, $this, 'getRepository', array('entityName' => $entityName), $this->initializerbe6c5) || 1) && $this->valueHolder9ae19 = $valueHolder9ae19;

        return $this->valueHolder9ae19->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerbe6c5 && ($this->initializerbe6c5->__invoke($valueHolder9ae19, $this, 'contains', array('entity' => $entity), $this->initializerbe6c5) || 1) && $this->valueHolder9ae19 = $valueHolder9ae19;

        return $this->valueHolder9ae19->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerbe6c5 && ($this->initializerbe6c5->__invoke($valueHolder9ae19, $this, 'getEventManager', array(), $this->initializerbe6c5) || 1) && $this->valueHolder9ae19 = $valueHolder9ae19;

        return $this->valueHolder9ae19->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerbe6c5 && ($this->initializerbe6c5->__invoke($valueHolder9ae19, $this, 'getConfiguration', array(), $this->initializerbe6c5) || 1) && $this->valueHolder9ae19 = $valueHolder9ae19;

        return $this->valueHolder9ae19->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerbe6c5 && ($this->initializerbe6c5->__invoke($valueHolder9ae19, $this, 'isOpen', array(), $this->initializerbe6c5) || 1) && $this->valueHolder9ae19 = $valueHolder9ae19;

        return $this->valueHolder9ae19->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerbe6c5 && ($this->initializerbe6c5->__invoke($valueHolder9ae19, $this, 'getUnitOfWork', array(), $this->initializerbe6c5) || 1) && $this->valueHolder9ae19 = $valueHolder9ae19;

        return $this->valueHolder9ae19->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerbe6c5 && ($this->initializerbe6c5->__invoke($valueHolder9ae19, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerbe6c5) || 1) && $this->valueHolder9ae19 = $valueHolder9ae19;

        return $this->valueHolder9ae19->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerbe6c5 && ($this->initializerbe6c5->__invoke($valueHolder9ae19, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerbe6c5) || 1) && $this->valueHolder9ae19 = $valueHolder9ae19;

        return $this->valueHolder9ae19->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerbe6c5 && ($this->initializerbe6c5->__invoke($valueHolder9ae19, $this, 'getProxyFactory', array(), $this->initializerbe6c5) || 1) && $this->valueHolder9ae19 = $valueHolder9ae19;

        return $this->valueHolder9ae19->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerbe6c5 && ($this->initializerbe6c5->__invoke($valueHolder9ae19, $this, 'initializeObject', array('obj' => $obj), $this->initializerbe6c5) || 1) && $this->valueHolder9ae19 = $valueHolder9ae19;

        return $this->valueHolder9ae19->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerbe6c5 && ($this->initializerbe6c5->__invoke($valueHolder9ae19, $this, 'getFilters', array(), $this->initializerbe6c5) || 1) && $this->valueHolder9ae19 = $valueHolder9ae19;

        return $this->valueHolder9ae19->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerbe6c5 && ($this->initializerbe6c5->__invoke($valueHolder9ae19, $this, 'isFiltersStateClean', array(), $this->initializerbe6c5) || 1) && $this->valueHolder9ae19 = $valueHolder9ae19;

        return $this->valueHolder9ae19->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerbe6c5 && ($this->initializerbe6c5->__invoke($valueHolder9ae19, $this, 'hasFilters', array(), $this->initializerbe6c5) || 1) && $this->valueHolder9ae19 = $valueHolder9ae19;

        return $this->valueHolder9ae19->hasFilters();
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

        $instance->initializerbe6c5 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder9ae19) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder9ae19 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder9ae19->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializerbe6c5 && ($this->initializerbe6c5->__invoke($valueHolder9ae19, $this, '__get', ['name' => $name], $this->initializerbe6c5) || 1) && $this->valueHolder9ae19 = $valueHolder9ae19;

        if (isset(self::$publicProperties169fc[$name])) {
            return $this->valueHolder9ae19->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9ae19;

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

        $targetObject = $this->valueHolder9ae19;
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
        $this->initializerbe6c5 && ($this->initializerbe6c5->__invoke($valueHolder9ae19, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerbe6c5) || 1) && $this->valueHolder9ae19 = $valueHolder9ae19;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9ae19;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder9ae19;
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
        $this->initializerbe6c5 && ($this->initializerbe6c5->__invoke($valueHolder9ae19, $this, '__isset', array('name' => $name), $this->initializerbe6c5) || 1) && $this->valueHolder9ae19 = $valueHolder9ae19;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9ae19;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder9ae19;
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
        $this->initializerbe6c5 && ($this->initializerbe6c5->__invoke($valueHolder9ae19, $this, '__unset', array('name' => $name), $this->initializerbe6c5) || 1) && $this->valueHolder9ae19 = $valueHolder9ae19;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9ae19;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder9ae19;
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
        $this->initializerbe6c5 && ($this->initializerbe6c5->__invoke($valueHolder9ae19, $this, '__clone', array(), $this->initializerbe6c5) || 1) && $this->valueHolder9ae19 = $valueHolder9ae19;

        $this->valueHolder9ae19 = clone $this->valueHolder9ae19;
    }

    public function __sleep()
    {
        $this->initializerbe6c5 && ($this->initializerbe6c5->__invoke($valueHolder9ae19, $this, '__sleep', array(), $this->initializerbe6c5) || 1) && $this->valueHolder9ae19 = $valueHolder9ae19;

        return array('valueHolder9ae19');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerbe6c5 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerbe6c5;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerbe6c5 && ($this->initializerbe6c5->__invoke($valueHolder9ae19, $this, 'initializeProxy', array(), $this->initializerbe6c5) || 1) && $this->valueHolder9ae19 = $valueHolder9ae19;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder9ae19;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder9ae19;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
