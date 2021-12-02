<?php

namespace ContainerV0m7Q38;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldera7f3b = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerd865d = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties40151 = [
        
    ];

    public function getConnection()
    {
        $this->initializerd865d && ($this->initializerd865d->__invoke($valueHoldera7f3b, $this, 'getConnection', array(), $this->initializerd865d) || 1) && $this->valueHoldera7f3b = $valueHoldera7f3b;

        return $this->valueHoldera7f3b->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerd865d && ($this->initializerd865d->__invoke($valueHoldera7f3b, $this, 'getMetadataFactory', array(), $this->initializerd865d) || 1) && $this->valueHoldera7f3b = $valueHoldera7f3b;

        return $this->valueHoldera7f3b->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerd865d && ($this->initializerd865d->__invoke($valueHoldera7f3b, $this, 'getExpressionBuilder', array(), $this->initializerd865d) || 1) && $this->valueHoldera7f3b = $valueHoldera7f3b;

        return $this->valueHoldera7f3b->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerd865d && ($this->initializerd865d->__invoke($valueHoldera7f3b, $this, 'beginTransaction', array(), $this->initializerd865d) || 1) && $this->valueHoldera7f3b = $valueHoldera7f3b;

        return $this->valueHoldera7f3b->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerd865d && ($this->initializerd865d->__invoke($valueHoldera7f3b, $this, 'getCache', array(), $this->initializerd865d) || 1) && $this->valueHoldera7f3b = $valueHoldera7f3b;

        return $this->valueHoldera7f3b->getCache();
    }

    public function transactional($func)
    {
        $this->initializerd865d && ($this->initializerd865d->__invoke($valueHoldera7f3b, $this, 'transactional', array('func' => $func), $this->initializerd865d) || 1) && $this->valueHoldera7f3b = $valueHoldera7f3b;

        return $this->valueHoldera7f3b->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerd865d && ($this->initializerd865d->__invoke($valueHoldera7f3b, $this, 'wrapInTransaction', array('func' => $func), $this->initializerd865d) || 1) && $this->valueHoldera7f3b = $valueHoldera7f3b;

        return $this->valueHoldera7f3b->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerd865d && ($this->initializerd865d->__invoke($valueHoldera7f3b, $this, 'commit', array(), $this->initializerd865d) || 1) && $this->valueHoldera7f3b = $valueHoldera7f3b;

        return $this->valueHoldera7f3b->commit();
    }

    public function rollback()
    {
        $this->initializerd865d && ($this->initializerd865d->__invoke($valueHoldera7f3b, $this, 'rollback', array(), $this->initializerd865d) || 1) && $this->valueHoldera7f3b = $valueHoldera7f3b;

        return $this->valueHoldera7f3b->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerd865d && ($this->initializerd865d->__invoke($valueHoldera7f3b, $this, 'getClassMetadata', array('className' => $className), $this->initializerd865d) || 1) && $this->valueHoldera7f3b = $valueHoldera7f3b;

        return $this->valueHoldera7f3b->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerd865d && ($this->initializerd865d->__invoke($valueHoldera7f3b, $this, 'createQuery', array('dql' => $dql), $this->initializerd865d) || 1) && $this->valueHoldera7f3b = $valueHoldera7f3b;

        return $this->valueHoldera7f3b->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerd865d && ($this->initializerd865d->__invoke($valueHoldera7f3b, $this, 'createNamedQuery', array('name' => $name), $this->initializerd865d) || 1) && $this->valueHoldera7f3b = $valueHoldera7f3b;

        return $this->valueHoldera7f3b->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerd865d && ($this->initializerd865d->__invoke($valueHoldera7f3b, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerd865d) || 1) && $this->valueHoldera7f3b = $valueHoldera7f3b;

        return $this->valueHoldera7f3b->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerd865d && ($this->initializerd865d->__invoke($valueHoldera7f3b, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerd865d) || 1) && $this->valueHoldera7f3b = $valueHoldera7f3b;

        return $this->valueHoldera7f3b->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerd865d && ($this->initializerd865d->__invoke($valueHoldera7f3b, $this, 'createQueryBuilder', array(), $this->initializerd865d) || 1) && $this->valueHoldera7f3b = $valueHoldera7f3b;

        return $this->valueHoldera7f3b->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerd865d && ($this->initializerd865d->__invoke($valueHoldera7f3b, $this, 'flush', array('entity' => $entity), $this->initializerd865d) || 1) && $this->valueHoldera7f3b = $valueHoldera7f3b;

        return $this->valueHoldera7f3b->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerd865d && ($this->initializerd865d->__invoke($valueHoldera7f3b, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerd865d) || 1) && $this->valueHoldera7f3b = $valueHoldera7f3b;

        return $this->valueHoldera7f3b->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerd865d && ($this->initializerd865d->__invoke($valueHoldera7f3b, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerd865d) || 1) && $this->valueHoldera7f3b = $valueHoldera7f3b;

        return $this->valueHoldera7f3b->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerd865d && ($this->initializerd865d->__invoke($valueHoldera7f3b, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerd865d) || 1) && $this->valueHoldera7f3b = $valueHoldera7f3b;

        return $this->valueHoldera7f3b->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerd865d && ($this->initializerd865d->__invoke($valueHoldera7f3b, $this, 'clear', array('entityName' => $entityName), $this->initializerd865d) || 1) && $this->valueHoldera7f3b = $valueHoldera7f3b;

        return $this->valueHoldera7f3b->clear($entityName);
    }

    public function close()
    {
        $this->initializerd865d && ($this->initializerd865d->__invoke($valueHoldera7f3b, $this, 'close', array(), $this->initializerd865d) || 1) && $this->valueHoldera7f3b = $valueHoldera7f3b;

        return $this->valueHoldera7f3b->close();
    }

    public function persist($entity)
    {
        $this->initializerd865d && ($this->initializerd865d->__invoke($valueHoldera7f3b, $this, 'persist', array('entity' => $entity), $this->initializerd865d) || 1) && $this->valueHoldera7f3b = $valueHoldera7f3b;

        return $this->valueHoldera7f3b->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerd865d && ($this->initializerd865d->__invoke($valueHoldera7f3b, $this, 'remove', array('entity' => $entity), $this->initializerd865d) || 1) && $this->valueHoldera7f3b = $valueHoldera7f3b;

        return $this->valueHoldera7f3b->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerd865d && ($this->initializerd865d->__invoke($valueHoldera7f3b, $this, 'refresh', array('entity' => $entity), $this->initializerd865d) || 1) && $this->valueHoldera7f3b = $valueHoldera7f3b;

        return $this->valueHoldera7f3b->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerd865d && ($this->initializerd865d->__invoke($valueHoldera7f3b, $this, 'detach', array('entity' => $entity), $this->initializerd865d) || 1) && $this->valueHoldera7f3b = $valueHoldera7f3b;

        return $this->valueHoldera7f3b->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerd865d && ($this->initializerd865d->__invoke($valueHoldera7f3b, $this, 'merge', array('entity' => $entity), $this->initializerd865d) || 1) && $this->valueHoldera7f3b = $valueHoldera7f3b;

        return $this->valueHoldera7f3b->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerd865d && ($this->initializerd865d->__invoke($valueHoldera7f3b, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerd865d) || 1) && $this->valueHoldera7f3b = $valueHoldera7f3b;

        return $this->valueHoldera7f3b->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerd865d && ($this->initializerd865d->__invoke($valueHoldera7f3b, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerd865d) || 1) && $this->valueHoldera7f3b = $valueHoldera7f3b;

        return $this->valueHoldera7f3b->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerd865d && ($this->initializerd865d->__invoke($valueHoldera7f3b, $this, 'getRepository', array('entityName' => $entityName), $this->initializerd865d) || 1) && $this->valueHoldera7f3b = $valueHoldera7f3b;

        return $this->valueHoldera7f3b->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerd865d && ($this->initializerd865d->__invoke($valueHoldera7f3b, $this, 'contains', array('entity' => $entity), $this->initializerd865d) || 1) && $this->valueHoldera7f3b = $valueHoldera7f3b;

        return $this->valueHoldera7f3b->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerd865d && ($this->initializerd865d->__invoke($valueHoldera7f3b, $this, 'getEventManager', array(), $this->initializerd865d) || 1) && $this->valueHoldera7f3b = $valueHoldera7f3b;

        return $this->valueHoldera7f3b->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerd865d && ($this->initializerd865d->__invoke($valueHoldera7f3b, $this, 'getConfiguration', array(), $this->initializerd865d) || 1) && $this->valueHoldera7f3b = $valueHoldera7f3b;

        return $this->valueHoldera7f3b->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerd865d && ($this->initializerd865d->__invoke($valueHoldera7f3b, $this, 'isOpen', array(), $this->initializerd865d) || 1) && $this->valueHoldera7f3b = $valueHoldera7f3b;

        return $this->valueHoldera7f3b->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerd865d && ($this->initializerd865d->__invoke($valueHoldera7f3b, $this, 'getUnitOfWork', array(), $this->initializerd865d) || 1) && $this->valueHoldera7f3b = $valueHoldera7f3b;

        return $this->valueHoldera7f3b->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerd865d && ($this->initializerd865d->__invoke($valueHoldera7f3b, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerd865d) || 1) && $this->valueHoldera7f3b = $valueHoldera7f3b;

        return $this->valueHoldera7f3b->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerd865d && ($this->initializerd865d->__invoke($valueHoldera7f3b, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerd865d) || 1) && $this->valueHoldera7f3b = $valueHoldera7f3b;

        return $this->valueHoldera7f3b->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerd865d && ($this->initializerd865d->__invoke($valueHoldera7f3b, $this, 'getProxyFactory', array(), $this->initializerd865d) || 1) && $this->valueHoldera7f3b = $valueHoldera7f3b;

        return $this->valueHoldera7f3b->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerd865d && ($this->initializerd865d->__invoke($valueHoldera7f3b, $this, 'initializeObject', array('obj' => $obj), $this->initializerd865d) || 1) && $this->valueHoldera7f3b = $valueHoldera7f3b;

        return $this->valueHoldera7f3b->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerd865d && ($this->initializerd865d->__invoke($valueHoldera7f3b, $this, 'getFilters', array(), $this->initializerd865d) || 1) && $this->valueHoldera7f3b = $valueHoldera7f3b;

        return $this->valueHoldera7f3b->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerd865d && ($this->initializerd865d->__invoke($valueHoldera7f3b, $this, 'isFiltersStateClean', array(), $this->initializerd865d) || 1) && $this->valueHoldera7f3b = $valueHoldera7f3b;

        return $this->valueHoldera7f3b->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerd865d && ($this->initializerd865d->__invoke($valueHoldera7f3b, $this, 'hasFilters', array(), $this->initializerd865d) || 1) && $this->valueHoldera7f3b = $valueHoldera7f3b;

        return $this->valueHoldera7f3b->hasFilters();
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

        $instance->initializerd865d = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHoldera7f3b) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldera7f3b = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldera7f3b->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerd865d && ($this->initializerd865d->__invoke($valueHoldera7f3b, $this, '__get', ['name' => $name], $this->initializerd865d) || 1) && $this->valueHoldera7f3b = $valueHoldera7f3b;

        if (isset(self::$publicProperties40151[$name])) {
            return $this->valueHoldera7f3b->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera7f3b;

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

        $targetObject = $this->valueHoldera7f3b;
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
        $this->initializerd865d && ($this->initializerd865d->__invoke($valueHoldera7f3b, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerd865d) || 1) && $this->valueHoldera7f3b = $valueHoldera7f3b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera7f3b;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldera7f3b;
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
        $this->initializerd865d && ($this->initializerd865d->__invoke($valueHoldera7f3b, $this, '__isset', array('name' => $name), $this->initializerd865d) || 1) && $this->valueHoldera7f3b = $valueHoldera7f3b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera7f3b;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldera7f3b;
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
        $this->initializerd865d && ($this->initializerd865d->__invoke($valueHoldera7f3b, $this, '__unset', array('name' => $name), $this->initializerd865d) || 1) && $this->valueHoldera7f3b = $valueHoldera7f3b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera7f3b;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldera7f3b;
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
        $this->initializerd865d && ($this->initializerd865d->__invoke($valueHoldera7f3b, $this, '__clone', array(), $this->initializerd865d) || 1) && $this->valueHoldera7f3b = $valueHoldera7f3b;

        $this->valueHoldera7f3b = clone $this->valueHoldera7f3b;
    }

    public function __sleep()
    {
        $this->initializerd865d && ($this->initializerd865d->__invoke($valueHoldera7f3b, $this, '__sleep', array(), $this->initializerd865d) || 1) && $this->valueHoldera7f3b = $valueHoldera7f3b;

        return array('valueHoldera7f3b');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerd865d = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerd865d;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerd865d && ($this->initializerd865d->__invoke($valueHoldera7f3b, $this, 'initializeProxy', array(), $this->initializerd865d) || 1) && $this->valueHoldera7f3b = $valueHoldera7f3b;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldera7f3b;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldera7f3b;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
