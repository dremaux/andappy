<?php

namespace ContainerRA7VXBB;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder7d081 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer37d94 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties1b589 = [
        
    ];

    public function getConnection()
    {
        $this->initializer37d94 && ($this->initializer37d94->__invoke($valueHolder7d081, $this, 'getConnection', array(), $this->initializer37d94) || 1) && $this->valueHolder7d081 = $valueHolder7d081;

        return $this->valueHolder7d081->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer37d94 && ($this->initializer37d94->__invoke($valueHolder7d081, $this, 'getMetadataFactory', array(), $this->initializer37d94) || 1) && $this->valueHolder7d081 = $valueHolder7d081;

        return $this->valueHolder7d081->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer37d94 && ($this->initializer37d94->__invoke($valueHolder7d081, $this, 'getExpressionBuilder', array(), $this->initializer37d94) || 1) && $this->valueHolder7d081 = $valueHolder7d081;

        return $this->valueHolder7d081->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer37d94 && ($this->initializer37d94->__invoke($valueHolder7d081, $this, 'beginTransaction', array(), $this->initializer37d94) || 1) && $this->valueHolder7d081 = $valueHolder7d081;

        return $this->valueHolder7d081->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer37d94 && ($this->initializer37d94->__invoke($valueHolder7d081, $this, 'getCache', array(), $this->initializer37d94) || 1) && $this->valueHolder7d081 = $valueHolder7d081;

        return $this->valueHolder7d081->getCache();
    }

    public function transactional($func)
    {
        $this->initializer37d94 && ($this->initializer37d94->__invoke($valueHolder7d081, $this, 'transactional', array('func' => $func), $this->initializer37d94) || 1) && $this->valueHolder7d081 = $valueHolder7d081;

        return $this->valueHolder7d081->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer37d94 && ($this->initializer37d94->__invoke($valueHolder7d081, $this, 'wrapInTransaction', array('func' => $func), $this->initializer37d94) || 1) && $this->valueHolder7d081 = $valueHolder7d081;

        return $this->valueHolder7d081->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer37d94 && ($this->initializer37d94->__invoke($valueHolder7d081, $this, 'commit', array(), $this->initializer37d94) || 1) && $this->valueHolder7d081 = $valueHolder7d081;

        return $this->valueHolder7d081->commit();
    }

    public function rollback()
    {
        $this->initializer37d94 && ($this->initializer37d94->__invoke($valueHolder7d081, $this, 'rollback', array(), $this->initializer37d94) || 1) && $this->valueHolder7d081 = $valueHolder7d081;

        return $this->valueHolder7d081->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer37d94 && ($this->initializer37d94->__invoke($valueHolder7d081, $this, 'getClassMetadata', array('className' => $className), $this->initializer37d94) || 1) && $this->valueHolder7d081 = $valueHolder7d081;

        return $this->valueHolder7d081->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer37d94 && ($this->initializer37d94->__invoke($valueHolder7d081, $this, 'createQuery', array('dql' => $dql), $this->initializer37d94) || 1) && $this->valueHolder7d081 = $valueHolder7d081;

        return $this->valueHolder7d081->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer37d94 && ($this->initializer37d94->__invoke($valueHolder7d081, $this, 'createNamedQuery', array('name' => $name), $this->initializer37d94) || 1) && $this->valueHolder7d081 = $valueHolder7d081;

        return $this->valueHolder7d081->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer37d94 && ($this->initializer37d94->__invoke($valueHolder7d081, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer37d94) || 1) && $this->valueHolder7d081 = $valueHolder7d081;

        return $this->valueHolder7d081->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer37d94 && ($this->initializer37d94->__invoke($valueHolder7d081, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer37d94) || 1) && $this->valueHolder7d081 = $valueHolder7d081;

        return $this->valueHolder7d081->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer37d94 && ($this->initializer37d94->__invoke($valueHolder7d081, $this, 'createQueryBuilder', array(), $this->initializer37d94) || 1) && $this->valueHolder7d081 = $valueHolder7d081;

        return $this->valueHolder7d081->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer37d94 && ($this->initializer37d94->__invoke($valueHolder7d081, $this, 'flush', array('entity' => $entity), $this->initializer37d94) || 1) && $this->valueHolder7d081 = $valueHolder7d081;

        return $this->valueHolder7d081->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer37d94 && ($this->initializer37d94->__invoke($valueHolder7d081, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer37d94) || 1) && $this->valueHolder7d081 = $valueHolder7d081;

        return $this->valueHolder7d081->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer37d94 && ($this->initializer37d94->__invoke($valueHolder7d081, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer37d94) || 1) && $this->valueHolder7d081 = $valueHolder7d081;

        return $this->valueHolder7d081->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer37d94 && ($this->initializer37d94->__invoke($valueHolder7d081, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer37d94) || 1) && $this->valueHolder7d081 = $valueHolder7d081;

        return $this->valueHolder7d081->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer37d94 && ($this->initializer37d94->__invoke($valueHolder7d081, $this, 'clear', array('entityName' => $entityName), $this->initializer37d94) || 1) && $this->valueHolder7d081 = $valueHolder7d081;

        return $this->valueHolder7d081->clear($entityName);
    }

    public function close()
    {
        $this->initializer37d94 && ($this->initializer37d94->__invoke($valueHolder7d081, $this, 'close', array(), $this->initializer37d94) || 1) && $this->valueHolder7d081 = $valueHolder7d081;

        return $this->valueHolder7d081->close();
    }

    public function persist($entity)
    {
        $this->initializer37d94 && ($this->initializer37d94->__invoke($valueHolder7d081, $this, 'persist', array('entity' => $entity), $this->initializer37d94) || 1) && $this->valueHolder7d081 = $valueHolder7d081;

        return $this->valueHolder7d081->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer37d94 && ($this->initializer37d94->__invoke($valueHolder7d081, $this, 'remove', array('entity' => $entity), $this->initializer37d94) || 1) && $this->valueHolder7d081 = $valueHolder7d081;

        return $this->valueHolder7d081->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer37d94 && ($this->initializer37d94->__invoke($valueHolder7d081, $this, 'refresh', array('entity' => $entity), $this->initializer37d94) || 1) && $this->valueHolder7d081 = $valueHolder7d081;

        return $this->valueHolder7d081->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer37d94 && ($this->initializer37d94->__invoke($valueHolder7d081, $this, 'detach', array('entity' => $entity), $this->initializer37d94) || 1) && $this->valueHolder7d081 = $valueHolder7d081;

        return $this->valueHolder7d081->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer37d94 && ($this->initializer37d94->__invoke($valueHolder7d081, $this, 'merge', array('entity' => $entity), $this->initializer37d94) || 1) && $this->valueHolder7d081 = $valueHolder7d081;

        return $this->valueHolder7d081->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer37d94 && ($this->initializer37d94->__invoke($valueHolder7d081, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer37d94) || 1) && $this->valueHolder7d081 = $valueHolder7d081;

        return $this->valueHolder7d081->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer37d94 && ($this->initializer37d94->__invoke($valueHolder7d081, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer37d94) || 1) && $this->valueHolder7d081 = $valueHolder7d081;

        return $this->valueHolder7d081->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer37d94 && ($this->initializer37d94->__invoke($valueHolder7d081, $this, 'getRepository', array('entityName' => $entityName), $this->initializer37d94) || 1) && $this->valueHolder7d081 = $valueHolder7d081;

        return $this->valueHolder7d081->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer37d94 && ($this->initializer37d94->__invoke($valueHolder7d081, $this, 'contains', array('entity' => $entity), $this->initializer37d94) || 1) && $this->valueHolder7d081 = $valueHolder7d081;

        return $this->valueHolder7d081->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer37d94 && ($this->initializer37d94->__invoke($valueHolder7d081, $this, 'getEventManager', array(), $this->initializer37d94) || 1) && $this->valueHolder7d081 = $valueHolder7d081;

        return $this->valueHolder7d081->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer37d94 && ($this->initializer37d94->__invoke($valueHolder7d081, $this, 'getConfiguration', array(), $this->initializer37d94) || 1) && $this->valueHolder7d081 = $valueHolder7d081;

        return $this->valueHolder7d081->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer37d94 && ($this->initializer37d94->__invoke($valueHolder7d081, $this, 'isOpen', array(), $this->initializer37d94) || 1) && $this->valueHolder7d081 = $valueHolder7d081;

        return $this->valueHolder7d081->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer37d94 && ($this->initializer37d94->__invoke($valueHolder7d081, $this, 'getUnitOfWork', array(), $this->initializer37d94) || 1) && $this->valueHolder7d081 = $valueHolder7d081;

        return $this->valueHolder7d081->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer37d94 && ($this->initializer37d94->__invoke($valueHolder7d081, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer37d94) || 1) && $this->valueHolder7d081 = $valueHolder7d081;

        return $this->valueHolder7d081->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer37d94 && ($this->initializer37d94->__invoke($valueHolder7d081, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer37d94) || 1) && $this->valueHolder7d081 = $valueHolder7d081;

        return $this->valueHolder7d081->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer37d94 && ($this->initializer37d94->__invoke($valueHolder7d081, $this, 'getProxyFactory', array(), $this->initializer37d94) || 1) && $this->valueHolder7d081 = $valueHolder7d081;

        return $this->valueHolder7d081->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer37d94 && ($this->initializer37d94->__invoke($valueHolder7d081, $this, 'initializeObject', array('obj' => $obj), $this->initializer37d94) || 1) && $this->valueHolder7d081 = $valueHolder7d081;

        return $this->valueHolder7d081->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer37d94 && ($this->initializer37d94->__invoke($valueHolder7d081, $this, 'getFilters', array(), $this->initializer37d94) || 1) && $this->valueHolder7d081 = $valueHolder7d081;

        return $this->valueHolder7d081->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer37d94 && ($this->initializer37d94->__invoke($valueHolder7d081, $this, 'isFiltersStateClean', array(), $this->initializer37d94) || 1) && $this->valueHolder7d081 = $valueHolder7d081;

        return $this->valueHolder7d081->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer37d94 && ($this->initializer37d94->__invoke($valueHolder7d081, $this, 'hasFilters', array(), $this->initializer37d94) || 1) && $this->valueHolder7d081 = $valueHolder7d081;

        return $this->valueHolder7d081->hasFilters();
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

        $instance->initializer37d94 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder7d081) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder7d081 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder7d081->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer37d94 && ($this->initializer37d94->__invoke($valueHolder7d081, $this, '__get', ['name' => $name], $this->initializer37d94) || 1) && $this->valueHolder7d081 = $valueHolder7d081;

        if (isset(self::$publicProperties1b589[$name])) {
            return $this->valueHolder7d081->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7d081;

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

        $targetObject = $this->valueHolder7d081;
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
        $this->initializer37d94 && ($this->initializer37d94->__invoke($valueHolder7d081, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer37d94) || 1) && $this->valueHolder7d081 = $valueHolder7d081;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7d081;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder7d081;
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
        $this->initializer37d94 && ($this->initializer37d94->__invoke($valueHolder7d081, $this, '__isset', array('name' => $name), $this->initializer37d94) || 1) && $this->valueHolder7d081 = $valueHolder7d081;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7d081;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder7d081;
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
        $this->initializer37d94 && ($this->initializer37d94->__invoke($valueHolder7d081, $this, '__unset', array('name' => $name), $this->initializer37d94) || 1) && $this->valueHolder7d081 = $valueHolder7d081;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7d081;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder7d081;
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
        $this->initializer37d94 && ($this->initializer37d94->__invoke($valueHolder7d081, $this, '__clone', array(), $this->initializer37d94) || 1) && $this->valueHolder7d081 = $valueHolder7d081;

        $this->valueHolder7d081 = clone $this->valueHolder7d081;
    }

    public function __sleep()
    {
        $this->initializer37d94 && ($this->initializer37d94->__invoke($valueHolder7d081, $this, '__sleep', array(), $this->initializer37d94) || 1) && $this->valueHolder7d081 = $valueHolder7d081;

        return array('valueHolder7d081');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer37d94 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer37d94;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer37d94 && ($this->initializer37d94->__invoke($valueHolder7d081, $this, 'initializeProxy', array(), $this->initializer37d94) || 1) && $this->valueHolder7d081 = $valueHolder7d081;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder7d081;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder7d081;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
