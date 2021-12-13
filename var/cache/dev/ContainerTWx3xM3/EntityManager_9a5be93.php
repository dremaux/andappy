<?php

namespace ContainerTWx3xM3;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder39ae4 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerf062d = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties8a98e = [
        
    ];

    public function getConnection()
    {
        $this->initializerf062d && ($this->initializerf062d->__invoke($valueHolder39ae4, $this, 'getConnection', array(), $this->initializerf062d) || 1) && $this->valueHolder39ae4 = $valueHolder39ae4;

        return $this->valueHolder39ae4->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerf062d && ($this->initializerf062d->__invoke($valueHolder39ae4, $this, 'getMetadataFactory', array(), $this->initializerf062d) || 1) && $this->valueHolder39ae4 = $valueHolder39ae4;

        return $this->valueHolder39ae4->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerf062d && ($this->initializerf062d->__invoke($valueHolder39ae4, $this, 'getExpressionBuilder', array(), $this->initializerf062d) || 1) && $this->valueHolder39ae4 = $valueHolder39ae4;

        return $this->valueHolder39ae4->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerf062d && ($this->initializerf062d->__invoke($valueHolder39ae4, $this, 'beginTransaction', array(), $this->initializerf062d) || 1) && $this->valueHolder39ae4 = $valueHolder39ae4;

        return $this->valueHolder39ae4->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerf062d && ($this->initializerf062d->__invoke($valueHolder39ae4, $this, 'getCache', array(), $this->initializerf062d) || 1) && $this->valueHolder39ae4 = $valueHolder39ae4;

        return $this->valueHolder39ae4->getCache();
    }

    public function transactional($func)
    {
        $this->initializerf062d && ($this->initializerf062d->__invoke($valueHolder39ae4, $this, 'transactional', array('func' => $func), $this->initializerf062d) || 1) && $this->valueHolder39ae4 = $valueHolder39ae4;

        return $this->valueHolder39ae4->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerf062d && ($this->initializerf062d->__invoke($valueHolder39ae4, $this, 'wrapInTransaction', array('func' => $func), $this->initializerf062d) || 1) && $this->valueHolder39ae4 = $valueHolder39ae4;

        return $this->valueHolder39ae4->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerf062d && ($this->initializerf062d->__invoke($valueHolder39ae4, $this, 'commit', array(), $this->initializerf062d) || 1) && $this->valueHolder39ae4 = $valueHolder39ae4;

        return $this->valueHolder39ae4->commit();
    }

    public function rollback()
    {
        $this->initializerf062d && ($this->initializerf062d->__invoke($valueHolder39ae4, $this, 'rollback', array(), $this->initializerf062d) || 1) && $this->valueHolder39ae4 = $valueHolder39ae4;

        return $this->valueHolder39ae4->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerf062d && ($this->initializerf062d->__invoke($valueHolder39ae4, $this, 'getClassMetadata', array('className' => $className), $this->initializerf062d) || 1) && $this->valueHolder39ae4 = $valueHolder39ae4;

        return $this->valueHolder39ae4->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerf062d && ($this->initializerf062d->__invoke($valueHolder39ae4, $this, 'createQuery', array('dql' => $dql), $this->initializerf062d) || 1) && $this->valueHolder39ae4 = $valueHolder39ae4;

        return $this->valueHolder39ae4->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerf062d && ($this->initializerf062d->__invoke($valueHolder39ae4, $this, 'createNamedQuery', array('name' => $name), $this->initializerf062d) || 1) && $this->valueHolder39ae4 = $valueHolder39ae4;

        return $this->valueHolder39ae4->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerf062d && ($this->initializerf062d->__invoke($valueHolder39ae4, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerf062d) || 1) && $this->valueHolder39ae4 = $valueHolder39ae4;

        return $this->valueHolder39ae4->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerf062d && ($this->initializerf062d->__invoke($valueHolder39ae4, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerf062d) || 1) && $this->valueHolder39ae4 = $valueHolder39ae4;

        return $this->valueHolder39ae4->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerf062d && ($this->initializerf062d->__invoke($valueHolder39ae4, $this, 'createQueryBuilder', array(), $this->initializerf062d) || 1) && $this->valueHolder39ae4 = $valueHolder39ae4;

        return $this->valueHolder39ae4->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerf062d && ($this->initializerf062d->__invoke($valueHolder39ae4, $this, 'flush', array('entity' => $entity), $this->initializerf062d) || 1) && $this->valueHolder39ae4 = $valueHolder39ae4;

        return $this->valueHolder39ae4->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerf062d && ($this->initializerf062d->__invoke($valueHolder39ae4, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf062d) || 1) && $this->valueHolder39ae4 = $valueHolder39ae4;

        return $this->valueHolder39ae4->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerf062d && ($this->initializerf062d->__invoke($valueHolder39ae4, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerf062d) || 1) && $this->valueHolder39ae4 = $valueHolder39ae4;

        return $this->valueHolder39ae4->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerf062d && ($this->initializerf062d->__invoke($valueHolder39ae4, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerf062d) || 1) && $this->valueHolder39ae4 = $valueHolder39ae4;

        return $this->valueHolder39ae4->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerf062d && ($this->initializerf062d->__invoke($valueHolder39ae4, $this, 'clear', array('entityName' => $entityName), $this->initializerf062d) || 1) && $this->valueHolder39ae4 = $valueHolder39ae4;

        return $this->valueHolder39ae4->clear($entityName);
    }

    public function close()
    {
        $this->initializerf062d && ($this->initializerf062d->__invoke($valueHolder39ae4, $this, 'close', array(), $this->initializerf062d) || 1) && $this->valueHolder39ae4 = $valueHolder39ae4;

        return $this->valueHolder39ae4->close();
    }

    public function persist($entity)
    {
        $this->initializerf062d && ($this->initializerf062d->__invoke($valueHolder39ae4, $this, 'persist', array('entity' => $entity), $this->initializerf062d) || 1) && $this->valueHolder39ae4 = $valueHolder39ae4;

        return $this->valueHolder39ae4->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerf062d && ($this->initializerf062d->__invoke($valueHolder39ae4, $this, 'remove', array('entity' => $entity), $this->initializerf062d) || 1) && $this->valueHolder39ae4 = $valueHolder39ae4;

        return $this->valueHolder39ae4->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerf062d && ($this->initializerf062d->__invoke($valueHolder39ae4, $this, 'refresh', array('entity' => $entity), $this->initializerf062d) || 1) && $this->valueHolder39ae4 = $valueHolder39ae4;

        return $this->valueHolder39ae4->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerf062d && ($this->initializerf062d->__invoke($valueHolder39ae4, $this, 'detach', array('entity' => $entity), $this->initializerf062d) || 1) && $this->valueHolder39ae4 = $valueHolder39ae4;

        return $this->valueHolder39ae4->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerf062d && ($this->initializerf062d->__invoke($valueHolder39ae4, $this, 'merge', array('entity' => $entity), $this->initializerf062d) || 1) && $this->valueHolder39ae4 = $valueHolder39ae4;

        return $this->valueHolder39ae4->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerf062d && ($this->initializerf062d->__invoke($valueHolder39ae4, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerf062d) || 1) && $this->valueHolder39ae4 = $valueHolder39ae4;

        return $this->valueHolder39ae4->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerf062d && ($this->initializerf062d->__invoke($valueHolder39ae4, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf062d) || 1) && $this->valueHolder39ae4 = $valueHolder39ae4;

        return $this->valueHolder39ae4->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerf062d && ($this->initializerf062d->__invoke($valueHolder39ae4, $this, 'getRepository', array('entityName' => $entityName), $this->initializerf062d) || 1) && $this->valueHolder39ae4 = $valueHolder39ae4;

        return $this->valueHolder39ae4->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerf062d && ($this->initializerf062d->__invoke($valueHolder39ae4, $this, 'contains', array('entity' => $entity), $this->initializerf062d) || 1) && $this->valueHolder39ae4 = $valueHolder39ae4;

        return $this->valueHolder39ae4->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerf062d && ($this->initializerf062d->__invoke($valueHolder39ae4, $this, 'getEventManager', array(), $this->initializerf062d) || 1) && $this->valueHolder39ae4 = $valueHolder39ae4;

        return $this->valueHolder39ae4->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerf062d && ($this->initializerf062d->__invoke($valueHolder39ae4, $this, 'getConfiguration', array(), $this->initializerf062d) || 1) && $this->valueHolder39ae4 = $valueHolder39ae4;

        return $this->valueHolder39ae4->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerf062d && ($this->initializerf062d->__invoke($valueHolder39ae4, $this, 'isOpen', array(), $this->initializerf062d) || 1) && $this->valueHolder39ae4 = $valueHolder39ae4;

        return $this->valueHolder39ae4->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerf062d && ($this->initializerf062d->__invoke($valueHolder39ae4, $this, 'getUnitOfWork', array(), $this->initializerf062d) || 1) && $this->valueHolder39ae4 = $valueHolder39ae4;

        return $this->valueHolder39ae4->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerf062d && ($this->initializerf062d->__invoke($valueHolder39ae4, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf062d) || 1) && $this->valueHolder39ae4 = $valueHolder39ae4;

        return $this->valueHolder39ae4->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerf062d && ($this->initializerf062d->__invoke($valueHolder39ae4, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf062d) || 1) && $this->valueHolder39ae4 = $valueHolder39ae4;

        return $this->valueHolder39ae4->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerf062d && ($this->initializerf062d->__invoke($valueHolder39ae4, $this, 'getProxyFactory', array(), $this->initializerf062d) || 1) && $this->valueHolder39ae4 = $valueHolder39ae4;

        return $this->valueHolder39ae4->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerf062d && ($this->initializerf062d->__invoke($valueHolder39ae4, $this, 'initializeObject', array('obj' => $obj), $this->initializerf062d) || 1) && $this->valueHolder39ae4 = $valueHolder39ae4;

        return $this->valueHolder39ae4->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerf062d && ($this->initializerf062d->__invoke($valueHolder39ae4, $this, 'getFilters', array(), $this->initializerf062d) || 1) && $this->valueHolder39ae4 = $valueHolder39ae4;

        return $this->valueHolder39ae4->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerf062d && ($this->initializerf062d->__invoke($valueHolder39ae4, $this, 'isFiltersStateClean', array(), $this->initializerf062d) || 1) && $this->valueHolder39ae4 = $valueHolder39ae4;

        return $this->valueHolder39ae4->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerf062d && ($this->initializerf062d->__invoke($valueHolder39ae4, $this, 'hasFilters', array(), $this->initializerf062d) || 1) && $this->valueHolder39ae4 = $valueHolder39ae4;

        return $this->valueHolder39ae4->hasFilters();
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

        $instance->initializerf062d = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder39ae4) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder39ae4 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder39ae4->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerf062d && ($this->initializerf062d->__invoke($valueHolder39ae4, $this, '__get', ['name' => $name], $this->initializerf062d) || 1) && $this->valueHolder39ae4 = $valueHolder39ae4;

        if (isset(self::$publicProperties8a98e[$name])) {
            return $this->valueHolder39ae4->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder39ae4;

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

        $targetObject = $this->valueHolder39ae4;
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
        $this->initializerf062d && ($this->initializerf062d->__invoke($valueHolder39ae4, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerf062d) || 1) && $this->valueHolder39ae4 = $valueHolder39ae4;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder39ae4;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder39ae4;
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
        $this->initializerf062d && ($this->initializerf062d->__invoke($valueHolder39ae4, $this, '__isset', array('name' => $name), $this->initializerf062d) || 1) && $this->valueHolder39ae4 = $valueHolder39ae4;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder39ae4;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder39ae4;
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
        $this->initializerf062d && ($this->initializerf062d->__invoke($valueHolder39ae4, $this, '__unset', array('name' => $name), $this->initializerf062d) || 1) && $this->valueHolder39ae4 = $valueHolder39ae4;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder39ae4;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder39ae4;
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
        $this->initializerf062d && ($this->initializerf062d->__invoke($valueHolder39ae4, $this, '__clone', array(), $this->initializerf062d) || 1) && $this->valueHolder39ae4 = $valueHolder39ae4;

        $this->valueHolder39ae4 = clone $this->valueHolder39ae4;
    }

    public function __sleep()
    {
        $this->initializerf062d && ($this->initializerf062d->__invoke($valueHolder39ae4, $this, '__sleep', array(), $this->initializerf062d) || 1) && $this->valueHolder39ae4 = $valueHolder39ae4;

        return array('valueHolder39ae4');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerf062d = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerf062d;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerf062d && ($this->initializerf062d->__invoke($valueHolder39ae4, $this, 'initializeProxy', array(), $this->initializerf062d) || 1) && $this->valueHolder39ae4 = $valueHolder39ae4;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder39ae4;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder39ae4;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
