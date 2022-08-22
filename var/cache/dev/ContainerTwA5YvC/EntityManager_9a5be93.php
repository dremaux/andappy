<?php

namespace ContainerTwA5YvC;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldera4eee = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer2df84 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties2655e = [
        
    ];

    public function getConnection()
    {
        $this->initializer2df84 && ($this->initializer2df84->__invoke($valueHoldera4eee, $this, 'getConnection', array(), $this->initializer2df84) || 1) && $this->valueHoldera4eee = $valueHoldera4eee;

        return $this->valueHoldera4eee->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer2df84 && ($this->initializer2df84->__invoke($valueHoldera4eee, $this, 'getMetadataFactory', array(), $this->initializer2df84) || 1) && $this->valueHoldera4eee = $valueHoldera4eee;

        return $this->valueHoldera4eee->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer2df84 && ($this->initializer2df84->__invoke($valueHoldera4eee, $this, 'getExpressionBuilder', array(), $this->initializer2df84) || 1) && $this->valueHoldera4eee = $valueHoldera4eee;

        return $this->valueHoldera4eee->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer2df84 && ($this->initializer2df84->__invoke($valueHoldera4eee, $this, 'beginTransaction', array(), $this->initializer2df84) || 1) && $this->valueHoldera4eee = $valueHoldera4eee;

        return $this->valueHoldera4eee->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer2df84 && ($this->initializer2df84->__invoke($valueHoldera4eee, $this, 'getCache', array(), $this->initializer2df84) || 1) && $this->valueHoldera4eee = $valueHoldera4eee;

        return $this->valueHoldera4eee->getCache();
    }

    public function transactional($func)
    {
        $this->initializer2df84 && ($this->initializer2df84->__invoke($valueHoldera4eee, $this, 'transactional', array('func' => $func), $this->initializer2df84) || 1) && $this->valueHoldera4eee = $valueHoldera4eee;

        return $this->valueHoldera4eee->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer2df84 && ($this->initializer2df84->__invoke($valueHoldera4eee, $this, 'wrapInTransaction', array('func' => $func), $this->initializer2df84) || 1) && $this->valueHoldera4eee = $valueHoldera4eee;

        return $this->valueHoldera4eee->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer2df84 && ($this->initializer2df84->__invoke($valueHoldera4eee, $this, 'commit', array(), $this->initializer2df84) || 1) && $this->valueHoldera4eee = $valueHoldera4eee;

        return $this->valueHoldera4eee->commit();
    }

    public function rollback()
    {
        $this->initializer2df84 && ($this->initializer2df84->__invoke($valueHoldera4eee, $this, 'rollback', array(), $this->initializer2df84) || 1) && $this->valueHoldera4eee = $valueHoldera4eee;

        return $this->valueHoldera4eee->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer2df84 && ($this->initializer2df84->__invoke($valueHoldera4eee, $this, 'getClassMetadata', array('className' => $className), $this->initializer2df84) || 1) && $this->valueHoldera4eee = $valueHoldera4eee;

        return $this->valueHoldera4eee->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer2df84 && ($this->initializer2df84->__invoke($valueHoldera4eee, $this, 'createQuery', array('dql' => $dql), $this->initializer2df84) || 1) && $this->valueHoldera4eee = $valueHoldera4eee;

        return $this->valueHoldera4eee->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer2df84 && ($this->initializer2df84->__invoke($valueHoldera4eee, $this, 'createNamedQuery', array('name' => $name), $this->initializer2df84) || 1) && $this->valueHoldera4eee = $valueHoldera4eee;

        return $this->valueHoldera4eee->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer2df84 && ($this->initializer2df84->__invoke($valueHoldera4eee, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer2df84) || 1) && $this->valueHoldera4eee = $valueHoldera4eee;

        return $this->valueHoldera4eee->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer2df84 && ($this->initializer2df84->__invoke($valueHoldera4eee, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer2df84) || 1) && $this->valueHoldera4eee = $valueHoldera4eee;

        return $this->valueHoldera4eee->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer2df84 && ($this->initializer2df84->__invoke($valueHoldera4eee, $this, 'createQueryBuilder', array(), $this->initializer2df84) || 1) && $this->valueHoldera4eee = $valueHoldera4eee;

        return $this->valueHoldera4eee->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer2df84 && ($this->initializer2df84->__invoke($valueHoldera4eee, $this, 'flush', array('entity' => $entity), $this->initializer2df84) || 1) && $this->valueHoldera4eee = $valueHoldera4eee;

        return $this->valueHoldera4eee->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer2df84 && ($this->initializer2df84->__invoke($valueHoldera4eee, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer2df84) || 1) && $this->valueHoldera4eee = $valueHoldera4eee;

        return $this->valueHoldera4eee->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer2df84 && ($this->initializer2df84->__invoke($valueHoldera4eee, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer2df84) || 1) && $this->valueHoldera4eee = $valueHoldera4eee;

        return $this->valueHoldera4eee->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer2df84 && ($this->initializer2df84->__invoke($valueHoldera4eee, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer2df84) || 1) && $this->valueHoldera4eee = $valueHoldera4eee;

        return $this->valueHoldera4eee->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer2df84 && ($this->initializer2df84->__invoke($valueHoldera4eee, $this, 'clear', array('entityName' => $entityName), $this->initializer2df84) || 1) && $this->valueHoldera4eee = $valueHoldera4eee;

        return $this->valueHoldera4eee->clear($entityName);
    }

    public function close()
    {
        $this->initializer2df84 && ($this->initializer2df84->__invoke($valueHoldera4eee, $this, 'close', array(), $this->initializer2df84) || 1) && $this->valueHoldera4eee = $valueHoldera4eee;

        return $this->valueHoldera4eee->close();
    }

    public function persist($entity)
    {
        $this->initializer2df84 && ($this->initializer2df84->__invoke($valueHoldera4eee, $this, 'persist', array('entity' => $entity), $this->initializer2df84) || 1) && $this->valueHoldera4eee = $valueHoldera4eee;

        return $this->valueHoldera4eee->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer2df84 && ($this->initializer2df84->__invoke($valueHoldera4eee, $this, 'remove', array('entity' => $entity), $this->initializer2df84) || 1) && $this->valueHoldera4eee = $valueHoldera4eee;

        return $this->valueHoldera4eee->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer2df84 && ($this->initializer2df84->__invoke($valueHoldera4eee, $this, 'refresh', array('entity' => $entity), $this->initializer2df84) || 1) && $this->valueHoldera4eee = $valueHoldera4eee;

        return $this->valueHoldera4eee->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer2df84 && ($this->initializer2df84->__invoke($valueHoldera4eee, $this, 'detach', array('entity' => $entity), $this->initializer2df84) || 1) && $this->valueHoldera4eee = $valueHoldera4eee;

        return $this->valueHoldera4eee->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer2df84 && ($this->initializer2df84->__invoke($valueHoldera4eee, $this, 'merge', array('entity' => $entity), $this->initializer2df84) || 1) && $this->valueHoldera4eee = $valueHoldera4eee;

        return $this->valueHoldera4eee->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer2df84 && ($this->initializer2df84->__invoke($valueHoldera4eee, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer2df84) || 1) && $this->valueHoldera4eee = $valueHoldera4eee;

        return $this->valueHoldera4eee->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer2df84 && ($this->initializer2df84->__invoke($valueHoldera4eee, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer2df84) || 1) && $this->valueHoldera4eee = $valueHoldera4eee;

        return $this->valueHoldera4eee->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer2df84 && ($this->initializer2df84->__invoke($valueHoldera4eee, $this, 'getRepository', array('entityName' => $entityName), $this->initializer2df84) || 1) && $this->valueHoldera4eee = $valueHoldera4eee;

        return $this->valueHoldera4eee->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer2df84 && ($this->initializer2df84->__invoke($valueHoldera4eee, $this, 'contains', array('entity' => $entity), $this->initializer2df84) || 1) && $this->valueHoldera4eee = $valueHoldera4eee;

        return $this->valueHoldera4eee->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer2df84 && ($this->initializer2df84->__invoke($valueHoldera4eee, $this, 'getEventManager', array(), $this->initializer2df84) || 1) && $this->valueHoldera4eee = $valueHoldera4eee;

        return $this->valueHoldera4eee->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer2df84 && ($this->initializer2df84->__invoke($valueHoldera4eee, $this, 'getConfiguration', array(), $this->initializer2df84) || 1) && $this->valueHoldera4eee = $valueHoldera4eee;

        return $this->valueHoldera4eee->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer2df84 && ($this->initializer2df84->__invoke($valueHoldera4eee, $this, 'isOpen', array(), $this->initializer2df84) || 1) && $this->valueHoldera4eee = $valueHoldera4eee;

        return $this->valueHoldera4eee->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer2df84 && ($this->initializer2df84->__invoke($valueHoldera4eee, $this, 'getUnitOfWork', array(), $this->initializer2df84) || 1) && $this->valueHoldera4eee = $valueHoldera4eee;

        return $this->valueHoldera4eee->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer2df84 && ($this->initializer2df84->__invoke($valueHoldera4eee, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer2df84) || 1) && $this->valueHoldera4eee = $valueHoldera4eee;

        return $this->valueHoldera4eee->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer2df84 && ($this->initializer2df84->__invoke($valueHoldera4eee, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer2df84) || 1) && $this->valueHoldera4eee = $valueHoldera4eee;

        return $this->valueHoldera4eee->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer2df84 && ($this->initializer2df84->__invoke($valueHoldera4eee, $this, 'getProxyFactory', array(), $this->initializer2df84) || 1) && $this->valueHoldera4eee = $valueHoldera4eee;

        return $this->valueHoldera4eee->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer2df84 && ($this->initializer2df84->__invoke($valueHoldera4eee, $this, 'initializeObject', array('obj' => $obj), $this->initializer2df84) || 1) && $this->valueHoldera4eee = $valueHoldera4eee;

        return $this->valueHoldera4eee->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer2df84 && ($this->initializer2df84->__invoke($valueHoldera4eee, $this, 'getFilters', array(), $this->initializer2df84) || 1) && $this->valueHoldera4eee = $valueHoldera4eee;

        return $this->valueHoldera4eee->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer2df84 && ($this->initializer2df84->__invoke($valueHoldera4eee, $this, 'isFiltersStateClean', array(), $this->initializer2df84) || 1) && $this->valueHoldera4eee = $valueHoldera4eee;

        return $this->valueHoldera4eee->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer2df84 && ($this->initializer2df84->__invoke($valueHoldera4eee, $this, 'hasFilters', array(), $this->initializer2df84) || 1) && $this->valueHoldera4eee = $valueHoldera4eee;

        return $this->valueHoldera4eee->hasFilters();
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

        $instance->initializer2df84 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHoldera4eee) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldera4eee = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldera4eee->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer2df84 && ($this->initializer2df84->__invoke($valueHoldera4eee, $this, '__get', ['name' => $name], $this->initializer2df84) || 1) && $this->valueHoldera4eee = $valueHoldera4eee;

        if (isset(self::$publicProperties2655e[$name])) {
            return $this->valueHoldera4eee->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera4eee;

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

        $targetObject = $this->valueHoldera4eee;
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
        $this->initializer2df84 && ($this->initializer2df84->__invoke($valueHoldera4eee, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer2df84) || 1) && $this->valueHoldera4eee = $valueHoldera4eee;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera4eee;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldera4eee;
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
        $this->initializer2df84 && ($this->initializer2df84->__invoke($valueHoldera4eee, $this, '__isset', array('name' => $name), $this->initializer2df84) || 1) && $this->valueHoldera4eee = $valueHoldera4eee;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera4eee;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldera4eee;
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
        $this->initializer2df84 && ($this->initializer2df84->__invoke($valueHoldera4eee, $this, '__unset', array('name' => $name), $this->initializer2df84) || 1) && $this->valueHoldera4eee = $valueHoldera4eee;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera4eee;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldera4eee;
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
        $this->initializer2df84 && ($this->initializer2df84->__invoke($valueHoldera4eee, $this, '__clone', array(), $this->initializer2df84) || 1) && $this->valueHoldera4eee = $valueHoldera4eee;

        $this->valueHoldera4eee = clone $this->valueHoldera4eee;
    }

    public function __sleep()
    {
        $this->initializer2df84 && ($this->initializer2df84->__invoke($valueHoldera4eee, $this, '__sleep', array(), $this->initializer2df84) || 1) && $this->valueHoldera4eee = $valueHoldera4eee;

        return array('valueHoldera4eee');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer2df84 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer2df84;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer2df84 && ($this->initializer2df84->__invoke($valueHoldera4eee, $this, 'initializeProxy', array(), $this->initializer2df84) || 1) && $this->valueHoldera4eee = $valueHoldera4eee;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldera4eee;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldera4eee;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
