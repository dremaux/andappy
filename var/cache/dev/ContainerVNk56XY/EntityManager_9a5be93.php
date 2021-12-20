<?php

namespace ContainerVNk56XY;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder7043d = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer1d548 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesf2024 = [
        
    ];

    public function getConnection()
    {
        $this->initializer1d548 && ($this->initializer1d548->__invoke($valueHolder7043d, $this, 'getConnection', array(), $this->initializer1d548) || 1) && $this->valueHolder7043d = $valueHolder7043d;

        return $this->valueHolder7043d->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer1d548 && ($this->initializer1d548->__invoke($valueHolder7043d, $this, 'getMetadataFactory', array(), $this->initializer1d548) || 1) && $this->valueHolder7043d = $valueHolder7043d;

        return $this->valueHolder7043d->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer1d548 && ($this->initializer1d548->__invoke($valueHolder7043d, $this, 'getExpressionBuilder', array(), $this->initializer1d548) || 1) && $this->valueHolder7043d = $valueHolder7043d;

        return $this->valueHolder7043d->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer1d548 && ($this->initializer1d548->__invoke($valueHolder7043d, $this, 'beginTransaction', array(), $this->initializer1d548) || 1) && $this->valueHolder7043d = $valueHolder7043d;

        return $this->valueHolder7043d->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer1d548 && ($this->initializer1d548->__invoke($valueHolder7043d, $this, 'getCache', array(), $this->initializer1d548) || 1) && $this->valueHolder7043d = $valueHolder7043d;

        return $this->valueHolder7043d->getCache();
    }

    public function transactional($func)
    {
        $this->initializer1d548 && ($this->initializer1d548->__invoke($valueHolder7043d, $this, 'transactional', array('func' => $func), $this->initializer1d548) || 1) && $this->valueHolder7043d = $valueHolder7043d;

        return $this->valueHolder7043d->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer1d548 && ($this->initializer1d548->__invoke($valueHolder7043d, $this, 'wrapInTransaction', array('func' => $func), $this->initializer1d548) || 1) && $this->valueHolder7043d = $valueHolder7043d;

        return $this->valueHolder7043d->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer1d548 && ($this->initializer1d548->__invoke($valueHolder7043d, $this, 'commit', array(), $this->initializer1d548) || 1) && $this->valueHolder7043d = $valueHolder7043d;

        return $this->valueHolder7043d->commit();
    }

    public function rollback()
    {
        $this->initializer1d548 && ($this->initializer1d548->__invoke($valueHolder7043d, $this, 'rollback', array(), $this->initializer1d548) || 1) && $this->valueHolder7043d = $valueHolder7043d;

        return $this->valueHolder7043d->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer1d548 && ($this->initializer1d548->__invoke($valueHolder7043d, $this, 'getClassMetadata', array('className' => $className), $this->initializer1d548) || 1) && $this->valueHolder7043d = $valueHolder7043d;

        return $this->valueHolder7043d->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer1d548 && ($this->initializer1d548->__invoke($valueHolder7043d, $this, 'createQuery', array('dql' => $dql), $this->initializer1d548) || 1) && $this->valueHolder7043d = $valueHolder7043d;

        return $this->valueHolder7043d->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer1d548 && ($this->initializer1d548->__invoke($valueHolder7043d, $this, 'createNamedQuery', array('name' => $name), $this->initializer1d548) || 1) && $this->valueHolder7043d = $valueHolder7043d;

        return $this->valueHolder7043d->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer1d548 && ($this->initializer1d548->__invoke($valueHolder7043d, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer1d548) || 1) && $this->valueHolder7043d = $valueHolder7043d;

        return $this->valueHolder7043d->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer1d548 && ($this->initializer1d548->__invoke($valueHolder7043d, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer1d548) || 1) && $this->valueHolder7043d = $valueHolder7043d;

        return $this->valueHolder7043d->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer1d548 && ($this->initializer1d548->__invoke($valueHolder7043d, $this, 'createQueryBuilder', array(), $this->initializer1d548) || 1) && $this->valueHolder7043d = $valueHolder7043d;

        return $this->valueHolder7043d->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer1d548 && ($this->initializer1d548->__invoke($valueHolder7043d, $this, 'flush', array('entity' => $entity), $this->initializer1d548) || 1) && $this->valueHolder7043d = $valueHolder7043d;

        return $this->valueHolder7043d->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer1d548 && ($this->initializer1d548->__invoke($valueHolder7043d, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer1d548) || 1) && $this->valueHolder7043d = $valueHolder7043d;

        return $this->valueHolder7043d->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer1d548 && ($this->initializer1d548->__invoke($valueHolder7043d, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer1d548) || 1) && $this->valueHolder7043d = $valueHolder7043d;

        return $this->valueHolder7043d->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer1d548 && ($this->initializer1d548->__invoke($valueHolder7043d, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer1d548) || 1) && $this->valueHolder7043d = $valueHolder7043d;

        return $this->valueHolder7043d->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer1d548 && ($this->initializer1d548->__invoke($valueHolder7043d, $this, 'clear', array('entityName' => $entityName), $this->initializer1d548) || 1) && $this->valueHolder7043d = $valueHolder7043d;

        return $this->valueHolder7043d->clear($entityName);
    }

    public function close()
    {
        $this->initializer1d548 && ($this->initializer1d548->__invoke($valueHolder7043d, $this, 'close', array(), $this->initializer1d548) || 1) && $this->valueHolder7043d = $valueHolder7043d;

        return $this->valueHolder7043d->close();
    }

    public function persist($entity)
    {
        $this->initializer1d548 && ($this->initializer1d548->__invoke($valueHolder7043d, $this, 'persist', array('entity' => $entity), $this->initializer1d548) || 1) && $this->valueHolder7043d = $valueHolder7043d;

        return $this->valueHolder7043d->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer1d548 && ($this->initializer1d548->__invoke($valueHolder7043d, $this, 'remove', array('entity' => $entity), $this->initializer1d548) || 1) && $this->valueHolder7043d = $valueHolder7043d;

        return $this->valueHolder7043d->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer1d548 && ($this->initializer1d548->__invoke($valueHolder7043d, $this, 'refresh', array('entity' => $entity), $this->initializer1d548) || 1) && $this->valueHolder7043d = $valueHolder7043d;

        return $this->valueHolder7043d->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer1d548 && ($this->initializer1d548->__invoke($valueHolder7043d, $this, 'detach', array('entity' => $entity), $this->initializer1d548) || 1) && $this->valueHolder7043d = $valueHolder7043d;

        return $this->valueHolder7043d->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer1d548 && ($this->initializer1d548->__invoke($valueHolder7043d, $this, 'merge', array('entity' => $entity), $this->initializer1d548) || 1) && $this->valueHolder7043d = $valueHolder7043d;

        return $this->valueHolder7043d->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer1d548 && ($this->initializer1d548->__invoke($valueHolder7043d, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer1d548) || 1) && $this->valueHolder7043d = $valueHolder7043d;

        return $this->valueHolder7043d->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer1d548 && ($this->initializer1d548->__invoke($valueHolder7043d, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer1d548) || 1) && $this->valueHolder7043d = $valueHolder7043d;

        return $this->valueHolder7043d->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer1d548 && ($this->initializer1d548->__invoke($valueHolder7043d, $this, 'getRepository', array('entityName' => $entityName), $this->initializer1d548) || 1) && $this->valueHolder7043d = $valueHolder7043d;

        return $this->valueHolder7043d->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer1d548 && ($this->initializer1d548->__invoke($valueHolder7043d, $this, 'contains', array('entity' => $entity), $this->initializer1d548) || 1) && $this->valueHolder7043d = $valueHolder7043d;

        return $this->valueHolder7043d->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer1d548 && ($this->initializer1d548->__invoke($valueHolder7043d, $this, 'getEventManager', array(), $this->initializer1d548) || 1) && $this->valueHolder7043d = $valueHolder7043d;

        return $this->valueHolder7043d->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer1d548 && ($this->initializer1d548->__invoke($valueHolder7043d, $this, 'getConfiguration', array(), $this->initializer1d548) || 1) && $this->valueHolder7043d = $valueHolder7043d;

        return $this->valueHolder7043d->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer1d548 && ($this->initializer1d548->__invoke($valueHolder7043d, $this, 'isOpen', array(), $this->initializer1d548) || 1) && $this->valueHolder7043d = $valueHolder7043d;

        return $this->valueHolder7043d->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer1d548 && ($this->initializer1d548->__invoke($valueHolder7043d, $this, 'getUnitOfWork', array(), $this->initializer1d548) || 1) && $this->valueHolder7043d = $valueHolder7043d;

        return $this->valueHolder7043d->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer1d548 && ($this->initializer1d548->__invoke($valueHolder7043d, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer1d548) || 1) && $this->valueHolder7043d = $valueHolder7043d;

        return $this->valueHolder7043d->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer1d548 && ($this->initializer1d548->__invoke($valueHolder7043d, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer1d548) || 1) && $this->valueHolder7043d = $valueHolder7043d;

        return $this->valueHolder7043d->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer1d548 && ($this->initializer1d548->__invoke($valueHolder7043d, $this, 'getProxyFactory', array(), $this->initializer1d548) || 1) && $this->valueHolder7043d = $valueHolder7043d;

        return $this->valueHolder7043d->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer1d548 && ($this->initializer1d548->__invoke($valueHolder7043d, $this, 'initializeObject', array('obj' => $obj), $this->initializer1d548) || 1) && $this->valueHolder7043d = $valueHolder7043d;

        return $this->valueHolder7043d->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer1d548 && ($this->initializer1d548->__invoke($valueHolder7043d, $this, 'getFilters', array(), $this->initializer1d548) || 1) && $this->valueHolder7043d = $valueHolder7043d;

        return $this->valueHolder7043d->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer1d548 && ($this->initializer1d548->__invoke($valueHolder7043d, $this, 'isFiltersStateClean', array(), $this->initializer1d548) || 1) && $this->valueHolder7043d = $valueHolder7043d;

        return $this->valueHolder7043d->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer1d548 && ($this->initializer1d548->__invoke($valueHolder7043d, $this, 'hasFilters', array(), $this->initializer1d548) || 1) && $this->valueHolder7043d = $valueHolder7043d;

        return $this->valueHolder7043d->hasFilters();
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

        $instance->initializer1d548 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder7043d) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder7043d = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder7043d->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer1d548 && ($this->initializer1d548->__invoke($valueHolder7043d, $this, '__get', ['name' => $name], $this->initializer1d548) || 1) && $this->valueHolder7043d = $valueHolder7043d;

        if (isset(self::$publicPropertiesf2024[$name])) {
            return $this->valueHolder7043d->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7043d;

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

        $targetObject = $this->valueHolder7043d;
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
        $this->initializer1d548 && ($this->initializer1d548->__invoke($valueHolder7043d, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer1d548) || 1) && $this->valueHolder7043d = $valueHolder7043d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7043d;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder7043d;
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
        $this->initializer1d548 && ($this->initializer1d548->__invoke($valueHolder7043d, $this, '__isset', array('name' => $name), $this->initializer1d548) || 1) && $this->valueHolder7043d = $valueHolder7043d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7043d;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder7043d;
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
        $this->initializer1d548 && ($this->initializer1d548->__invoke($valueHolder7043d, $this, '__unset', array('name' => $name), $this->initializer1d548) || 1) && $this->valueHolder7043d = $valueHolder7043d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7043d;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder7043d;
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
        $this->initializer1d548 && ($this->initializer1d548->__invoke($valueHolder7043d, $this, '__clone', array(), $this->initializer1d548) || 1) && $this->valueHolder7043d = $valueHolder7043d;

        $this->valueHolder7043d = clone $this->valueHolder7043d;
    }

    public function __sleep()
    {
        $this->initializer1d548 && ($this->initializer1d548->__invoke($valueHolder7043d, $this, '__sleep', array(), $this->initializer1d548) || 1) && $this->valueHolder7043d = $valueHolder7043d;

        return array('valueHolder7043d');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer1d548 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer1d548;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer1d548 && ($this->initializer1d548->__invoke($valueHolder7043d, $this, 'initializeProxy', array(), $this->initializer1d548) || 1) && $this->valueHolder7043d = $valueHolder7043d;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder7043d;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder7043d;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
