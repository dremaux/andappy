<?php

namespace ContainerLuUi2kc;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder6d678 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer72a57 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties2751b = [
        
    ];

    public function getConnection()
    {
        $this->initializer72a57 && ($this->initializer72a57->__invoke($valueHolder6d678, $this, 'getConnection', array(), $this->initializer72a57) || 1) && $this->valueHolder6d678 = $valueHolder6d678;

        return $this->valueHolder6d678->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer72a57 && ($this->initializer72a57->__invoke($valueHolder6d678, $this, 'getMetadataFactory', array(), $this->initializer72a57) || 1) && $this->valueHolder6d678 = $valueHolder6d678;

        return $this->valueHolder6d678->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer72a57 && ($this->initializer72a57->__invoke($valueHolder6d678, $this, 'getExpressionBuilder', array(), $this->initializer72a57) || 1) && $this->valueHolder6d678 = $valueHolder6d678;

        return $this->valueHolder6d678->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer72a57 && ($this->initializer72a57->__invoke($valueHolder6d678, $this, 'beginTransaction', array(), $this->initializer72a57) || 1) && $this->valueHolder6d678 = $valueHolder6d678;

        return $this->valueHolder6d678->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer72a57 && ($this->initializer72a57->__invoke($valueHolder6d678, $this, 'getCache', array(), $this->initializer72a57) || 1) && $this->valueHolder6d678 = $valueHolder6d678;

        return $this->valueHolder6d678->getCache();
    }

    public function transactional($func)
    {
        $this->initializer72a57 && ($this->initializer72a57->__invoke($valueHolder6d678, $this, 'transactional', array('func' => $func), $this->initializer72a57) || 1) && $this->valueHolder6d678 = $valueHolder6d678;

        return $this->valueHolder6d678->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer72a57 && ($this->initializer72a57->__invoke($valueHolder6d678, $this, 'wrapInTransaction', array('func' => $func), $this->initializer72a57) || 1) && $this->valueHolder6d678 = $valueHolder6d678;

        return $this->valueHolder6d678->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer72a57 && ($this->initializer72a57->__invoke($valueHolder6d678, $this, 'commit', array(), $this->initializer72a57) || 1) && $this->valueHolder6d678 = $valueHolder6d678;

        return $this->valueHolder6d678->commit();
    }

    public function rollback()
    {
        $this->initializer72a57 && ($this->initializer72a57->__invoke($valueHolder6d678, $this, 'rollback', array(), $this->initializer72a57) || 1) && $this->valueHolder6d678 = $valueHolder6d678;

        return $this->valueHolder6d678->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer72a57 && ($this->initializer72a57->__invoke($valueHolder6d678, $this, 'getClassMetadata', array('className' => $className), $this->initializer72a57) || 1) && $this->valueHolder6d678 = $valueHolder6d678;

        return $this->valueHolder6d678->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer72a57 && ($this->initializer72a57->__invoke($valueHolder6d678, $this, 'createQuery', array('dql' => $dql), $this->initializer72a57) || 1) && $this->valueHolder6d678 = $valueHolder6d678;

        return $this->valueHolder6d678->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer72a57 && ($this->initializer72a57->__invoke($valueHolder6d678, $this, 'createNamedQuery', array('name' => $name), $this->initializer72a57) || 1) && $this->valueHolder6d678 = $valueHolder6d678;

        return $this->valueHolder6d678->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer72a57 && ($this->initializer72a57->__invoke($valueHolder6d678, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer72a57) || 1) && $this->valueHolder6d678 = $valueHolder6d678;

        return $this->valueHolder6d678->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer72a57 && ($this->initializer72a57->__invoke($valueHolder6d678, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer72a57) || 1) && $this->valueHolder6d678 = $valueHolder6d678;

        return $this->valueHolder6d678->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer72a57 && ($this->initializer72a57->__invoke($valueHolder6d678, $this, 'createQueryBuilder', array(), $this->initializer72a57) || 1) && $this->valueHolder6d678 = $valueHolder6d678;

        return $this->valueHolder6d678->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer72a57 && ($this->initializer72a57->__invoke($valueHolder6d678, $this, 'flush', array('entity' => $entity), $this->initializer72a57) || 1) && $this->valueHolder6d678 = $valueHolder6d678;

        return $this->valueHolder6d678->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer72a57 && ($this->initializer72a57->__invoke($valueHolder6d678, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer72a57) || 1) && $this->valueHolder6d678 = $valueHolder6d678;

        return $this->valueHolder6d678->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer72a57 && ($this->initializer72a57->__invoke($valueHolder6d678, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer72a57) || 1) && $this->valueHolder6d678 = $valueHolder6d678;

        return $this->valueHolder6d678->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer72a57 && ($this->initializer72a57->__invoke($valueHolder6d678, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer72a57) || 1) && $this->valueHolder6d678 = $valueHolder6d678;

        return $this->valueHolder6d678->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer72a57 && ($this->initializer72a57->__invoke($valueHolder6d678, $this, 'clear', array('entityName' => $entityName), $this->initializer72a57) || 1) && $this->valueHolder6d678 = $valueHolder6d678;

        return $this->valueHolder6d678->clear($entityName);
    }

    public function close()
    {
        $this->initializer72a57 && ($this->initializer72a57->__invoke($valueHolder6d678, $this, 'close', array(), $this->initializer72a57) || 1) && $this->valueHolder6d678 = $valueHolder6d678;

        return $this->valueHolder6d678->close();
    }

    public function persist($entity)
    {
        $this->initializer72a57 && ($this->initializer72a57->__invoke($valueHolder6d678, $this, 'persist', array('entity' => $entity), $this->initializer72a57) || 1) && $this->valueHolder6d678 = $valueHolder6d678;

        return $this->valueHolder6d678->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer72a57 && ($this->initializer72a57->__invoke($valueHolder6d678, $this, 'remove', array('entity' => $entity), $this->initializer72a57) || 1) && $this->valueHolder6d678 = $valueHolder6d678;

        return $this->valueHolder6d678->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer72a57 && ($this->initializer72a57->__invoke($valueHolder6d678, $this, 'refresh', array('entity' => $entity), $this->initializer72a57) || 1) && $this->valueHolder6d678 = $valueHolder6d678;

        return $this->valueHolder6d678->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer72a57 && ($this->initializer72a57->__invoke($valueHolder6d678, $this, 'detach', array('entity' => $entity), $this->initializer72a57) || 1) && $this->valueHolder6d678 = $valueHolder6d678;

        return $this->valueHolder6d678->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer72a57 && ($this->initializer72a57->__invoke($valueHolder6d678, $this, 'merge', array('entity' => $entity), $this->initializer72a57) || 1) && $this->valueHolder6d678 = $valueHolder6d678;

        return $this->valueHolder6d678->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer72a57 && ($this->initializer72a57->__invoke($valueHolder6d678, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer72a57) || 1) && $this->valueHolder6d678 = $valueHolder6d678;

        return $this->valueHolder6d678->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer72a57 && ($this->initializer72a57->__invoke($valueHolder6d678, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer72a57) || 1) && $this->valueHolder6d678 = $valueHolder6d678;

        return $this->valueHolder6d678->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer72a57 && ($this->initializer72a57->__invoke($valueHolder6d678, $this, 'getRepository', array('entityName' => $entityName), $this->initializer72a57) || 1) && $this->valueHolder6d678 = $valueHolder6d678;

        return $this->valueHolder6d678->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer72a57 && ($this->initializer72a57->__invoke($valueHolder6d678, $this, 'contains', array('entity' => $entity), $this->initializer72a57) || 1) && $this->valueHolder6d678 = $valueHolder6d678;

        return $this->valueHolder6d678->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer72a57 && ($this->initializer72a57->__invoke($valueHolder6d678, $this, 'getEventManager', array(), $this->initializer72a57) || 1) && $this->valueHolder6d678 = $valueHolder6d678;

        return $this->valueHolder6d678->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer72a57 && ($this->initializer72a57->__invoke($valueHolder6d678, $this, 'getConfiguration', array(), $this->initializer72a57) || 1) && $this->valueHolder6d678 = $valueHolder6d678;

        return $this->valueHolder6d678->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer72a57 && ($this->initializer72a57->__invoke($valueHolder6d678, $this, 'isOpen', array(), $this->initializer72a57) || 1) && $this->valueHolder6d678 = $valueHolder6d678;

        return $this->valueHolder6d678->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer72a57 && ($this->initializer72a57->__invoke($valueHolder6d678, $this, 'getUnitOfWork', array(), $this->initializer72a57) || 1) && $this->valueHolder6d678 = $valueHolder6d678;

        return $this->valueHolder6d678->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer72a57 && ($this->initializer72a57->__invoke($valueHolder6d678, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer72a57) || 1) && $this->valueHolder6d678 = $valueHolder6d678;

        return $this->valueHolder6d678->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer72a57 && ($this->initializer72a57->__invoke($valueHolder6d678, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer72a57) || 1) && $this->valueHolder6d678 = $valueHolder6d678;

        return $this->valueHolder6d678->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer72a57 && ($this->initializer72a57->__invoke($valueHolder6d678, $this, 'getProxyFactory', array(), $this->initializer72a57) || 1) && $this->valueHolder6d678 = $valueHolder6d678;

        return $this->valueHolder6d678->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer72a57 && ($this->initializer72a57->__invoke($valueHolder6d678, $this, 'initializeObject', array('obj' => $obj), $this->initializer72a57) || 1) && $this->valueHolder6d678 = $valueHolder6d678;

        return $this->valueHolder6d678->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer72a57 && ($this->initializer72a57->__invoke($valueHolder6d678, $this, 'getFilters', array(), $this->initializer72a57) || 1) && $this->valueHolder6d678 = $valueHolder6d678;

        return $this->valueHolder6d678->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer72a57 && ($this->initializer72a57->__invoke($valueHolder6d678, $this, 'isFiltersStateClean', array(), $this->initializer72a57) || 1) && $this->valueHolder6d678 = $valueHolder6d678;

        return $this->valueHolder6d678->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer72a57 && ($this->initializer72a57->__invoke($valueHolder6d678, $this, 'hasFilters', array(), $this->initializer72a57) || 1) && $this->valueHolder6d678 = $valueHolder6d678;

        return $this->valueHolder6d678->hasFilters();
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

        $instance->initializer72a57 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder6d678) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder6d678 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder6d678->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer72a57 && ($this->initializer72a57->__invoke($valueHolder6d678, $this, '__get', ['name' => $name], $this->initializer72a57) || 1) && $this->valueHolder6d678 = $valueHolder6d678;

        if (isset(self::$publicProperties2751b[$name])) {
            return $this->valueHolder6d678->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6d678;

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

        $targetObject = $this->valueHolder6d678;
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
        $this->initializer72a57 && ($this->initializer72a57->__invoke($valueHolder6d678, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer72a57) || 1) && $this->valueHolder6d678 = $valueHolder6d678;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6d678;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder6d678;
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
        $this->initializer72a57 && ($this->initializer72a57->__invoke($valueHolder6d678, $this, '__isset', array('name' => $name), $this->initializer72a57) || 1) && $this->valueHolder6d678 = $valueHolder6d678;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6d678;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder6d678;
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
        $this->initializer72a57 && ($this->initializer72a57->__invoke($valueHolder6d678, $this, '__unset', array('name' => $name), $this->initializer72a57) || 1) && $this->valueHolder6d678 = $valueHolder6d678;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6d678;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder6d678;
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
        $this->initializer72a57 && ($this->initializer72a57->__invoke($valueHolder6d678, $this, '__clone', array(), $this->initializer72a57) || 1) && $this->valueHolder6d678 = $valueHolder6d678;

        $this->valueHolder6d678 = clone $this->valueHolder6d678;
    }

    public function __sleep()
    {
        $this->initializer72a57 && ($this->initializer72a57->__invoke($valueHolder6d678, $this, '__sleep', array(), $this->initializer72a57) || 1) && $this->valueHolder6d678 = $valueHolder6d678;

        return array('valueHolder6d678');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer72a57 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer72a57;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer72a57 && ($this->initializer72a57->__invoke($valueHolder6d678, $this, 'initializeProxy', array(), $this->initializer72a57) || 1) && $this->valueHolder6d678 = $valueHolder6d678;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder6d678;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder6d678;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
