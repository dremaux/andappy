<?php

namespace Container5a4vzRm;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder9407d = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer9f1ce = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesf746b = [
        
    ];

    public function getConnection()
    {
        $this->initializer9f1ce && ($this->initializer9f1ce->__invoke($valueHolder9407d, $this, 'getConnection', array(), $this->initializer9f1ce) || 1) && $this->valueHolder9407d = $valueHolder9407d;

        return $this->valueHolder9407d->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer9f1ce && ($this->initializer9f1ce->__invoke($valueHolder9407d, $this, 'getMetadataFactory', array(), $this->initializer9f1ce) || 1) && $this->valueHolder9407d = $valueHolder9407d;

        return $this->valueHolder9407d->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer9f1ce && ($this->initializer9f1ce->__invoke($valueHolder9407d, $this, 'getExpressionBuilder', array(), $this->initializer9f1ce) || 1) && $this->valueHolder9407d = $valueHolder9407d;

        return $this->valueHolder9407d->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer9f1ce && ($this->initializer9f1ce->__invoke($valueHolder9407d, $this, 'beginTransaction', array(), $this->initializer9f1ce) || 1) && $this->valueHolder9407d = $valueHolder9407d;

        return $this->valueHolder9407d->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer9f1ce && ($this->initializer9f1ce->__invoke($valueHolder9407d, $this, 'getCache', array(), $this->initializer9f1ce) || 1) && $this->valueHolder9407d = $valueHolder9407d;

        return $this->valueHolder9407d->getCache();
    }

    public function transactional($func)
    {
        $this->initializer9f1ce && ($this->initializer9f1ce->__invoke($valueHolder9407d, $this, 'transactional', array('func' => $func), $this->initializer9f1ce) || 1) && $this->valueHolder9407d = $valueHolder9407d;

        return $this->valueHolder9407d->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer9f1ce && ($this->initializer9f1ce->__invoke($valueHolder9407d, $this, 'wrapInTransaction', array('func' => $func), $this->initializer9f1ce) || 1) && $this->valueHolder9407d = $valueHolder9407d;

        return $this->valueHolder9407d->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer9f1ce && ($this->initializer9f1ce->__invoke($valueHolder9407d, $this, 'commit', array(), $this->initializer9f1ce) || 1) && $this->valueHolder9407d = $valueHolder9407d;

        return $this->valueHolder9407d->commit();
    }

    public function rollback()
    {
        $this->initializer9f1ce && ($this->initializer9f1ce->__invoke($valueHolder9407d, $this, 'rollback', array(), $this->initializer9f1ce) || 1) && $this->valueHolder9407d = $valueHolder9407d;

        return $this->valueHolder9407d->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer9f1ce && ($this->initializer9f1ce->__invoke($valueHolder9407d, $this, 'getClassMetadata', array('className' => $className), $this->initializer9f1ce) || 1) && $this->valueHolder9407d = $valueHolder9407d;

        return $this->valueHolder9407d->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer9f1ce && ($this->initializer9f1ce->__invoke($valueHolder9407d, $this, 'createQuery', array('dql' => $dql), $this->initializer9f1ce) || 1) && $this->valueHolder9407d = $valueHolder9407d;

        return $this->valueHolder9407d->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer9f1ce && ($this->initializer9f1ce->__invoke($valueHolder9407d, $this, 'createNamedQuery', array('name' => $name), $this->initializer9f1ce) || 1) && $this->valueHolder9407d = $valueHolder9407d;

        return $this->valueHolder9407d->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer9f1ce && ($this->initializer9f1ce->__invoke($valueHolder9407d, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer9f1ce) || 1) && $this->valueHolder9407d = $valueHolder9407d;

        return $this->valueHolder9407d->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer9f1ce && ($this->initializer9f1ce->__invoke($valueHolder9407d, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer9f1ce) || 1) && $this->valueHolder9407d = $valueHolder9407d;

        return $this->valueHolder9407d->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer9f1ce && ($this->initializer9f1ce->__invoke($valueHolder9407d, $this, 'createQueryBuilder', array(), $this->initializer9f1ce) || 1) && $this->valueHolder9407d = $valueHolder9407d;

        return $this->valueHolder9407d->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer9f1ce && ($this->initializer9f1ce->__invoke($valueHolder9407d, $this, 'flush', array('entity' => $entity), $this->initializer9f1ce) || 1) && $this->valueHolder9407d = $valueHolder9407d;

        return $this->valueHolder9407d->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer9f1ce && ($this->initializer9f1ce->__invoke($valueHolder9407d, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer9f1ce) || 1) && $this->valueHolder9407d = $valueHolder9407d;

        return $this->valueHolder9407d->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer9f1ce && ($this->initializer9f1ce->__invoke($valueHolder9407d, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer9f1ce) || 1) && $this->valueHolder9407d = $valueHolder9407d;

        return $this->valueHolder9407d->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer9f1ce && ($this->initializer9f1ce->__invoke($valueHolder9407d, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer9f1ce) || 1) && $this->valueHolder9407d = $valueHolder9407d;

        return $this->valueHolder9407d->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer9f1ce && ($this->initializer9f1ce->__invoke($valueHolder9407d, $this, 'clear', array('entityName' => $entityName), $this->initializer9f1ce) || 1) && $this->valueHolder9407d = $valueHolder9407d;

        return $this->valueHolder9407d->clear($entityName);
    }

    public function close()
    {
        $this->initializer9f1ce && ($this->initializer9f1ce->__invoke($valueHolder9407d, $this, 'close', array(), $this->initializer9f1ce) || 1) && $this->valueHolder9407d = $valueHolder9407d;

        return $this->valueHolder9407d->close();
    }

    public function persist($entity)
    {
        $this->initializer9f1ce && ($this->initializer9f1ce->__invoke($valueHolder9407d, $this, 'persist', array('entity' => $entity), $this->initializer9f1ce) || 1) && $this->valueHolder9407d = $valueHolder9407d;

        return $this->valueHolder9407d->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer9f1ce && ($this->initializer9f1ce->__invoke($valueHolder9407d, $this, 'remove', array('entity' => $entity), $this->initializer9f1ce) || 1) && $this->valueHolder9407d = $valueHolder9407d;

        return $this->valueHolder9407d->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer9f1ce && ($this->initializer9f1ce->__invoke($valueHolder9407d, $this, 'refresh', array('entity' => $entity), $this->initializer9f1ce) || 1) && $this->valueHolder9407d = $valueHolder9407d;

        return $this->valueHolder9407d->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer9f1ce && ($this->initializer9f1ce->__invoke($valueHolder9407d, $this, 'detach', array('entity' => $entity), $this->initializer9f1ce) || 1) && $this->valueHolder9407d = $valueHolder9407d;

        return $this->valueHolder9407d->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer9f1ce && ($this->initializer9f1ce->__invoke($valueHolder9407d, $this, 'merge', array('entity' => $entity), $this->initializer9f1ce) || 1) && $this->valueHolder9407d = $valueHolder9407d;

        return $this->valueHolder9407d->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer9f1ce && ($this->initializer9f1ce->__invoke($valueHolder9407d, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer9f1ce) || 1) && $this->valueHolder9407d = $valueHolder9407d;

        return $this->valueHolder9407d->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer9f1ce && ($this->initializer9f1ce->__invoke($valueHolder9407d, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer9f1ce) || 1) && $this->valueHolder9407d = $valueHolder9407d;

        return $this->valueHolder9407d->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer9f1ce && ($this->initializer9f1ce->__invoke($valueHolder9407d, $this, 'getRepository', array('entityName' => $entityName), $this->initializer9f1ce) || 1) && $this->valueHolder9407d = $valueHolder9407d;

        return $this->valueHolder9407d->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer9f1ce && ($this->initializer9f1ce->__invoke($valueHolder9407d, $this, 'contains', array('entity' => $entity), $this->initializer9f1ce) || 1) && $this->valueHolder9407d = $valueHolder9407d;

        return $this->valueHolder9407d->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer9f1ce && ($this->initializer9f1ce->__invoke($valueHolder9407d, $this, 'getEventManager', array(), $this->initializer9f1ce) || 1) && $this->valueHolder9407d = $valueHolder9407d;

        return $this->valueHolder9407d->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer9f1ce && ($this->initializer9f1ce->__invoke($valueHolder9407d, $this, 'getConfiguration', array(), $this->initializer9f1ce) || 1) && $this->valueHolder9407d = $valueHolder9407d;

        return $this->valueHolder9407d->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer9f1ce && ($this->initializer9f1ce->__invoke($valueHolder9407d, $this, 'isOpen', array(), $this->initializer9f1ce) || 1) && $this->valueHolder9407d = $valueHolder9407d;

        return $this->valueHolder9407d->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer9f1ce && ($this->initializer9f1ce->__invoke($valueHolder9407d, $this, 'getUnitOfWork', array(), $this->initializer9f1ce) || 1) && $this->valueHolder9407d = $valueHolder9407d;

        return $this->valueHolder9407d->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer9f1ce && ($this->initializer9f1ce->__invoke($valueHolder9407d, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer9f1ce) || 1) && $this->valueHolder9407d = $valueHolder9407d;

        return $this->valueHolder9407d->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer9f1ce && ($this->initializer9f1ce->__invoke($valueHolder9407d, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer9f1ce) || 1) && $this->valueHolder9407d = $valueHolder9407d;

        return $this->valueHolder9407d->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer9f1ce && ($this->initializer9f1ce->__invoke($valueHolder9407d, $this, 'getProxyFactory', array(), $this->initializer9f1ce) || 1) && $this->valueHolder9407d = $valueHolder9407d;

        return $this->valueHolder9407d->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer9f1ce && ($this->initializer9f1ce->__invoke($valueHolder9407d, $this, 'initializeObject', array('obj' => $obj), $this->initializer9f1ce) || 1) && $this->valueHolder9407d = $valueHolder9407d;

        return $this->valueHolder9407d->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer9f1ce && ($this->initializer9f1ce->__invoke($valueHolder9407d, $this, 'getFilters', array(), $this->initializer9f1ce) || 1) && $this->valueHolder9407d = $valueHolder9407d;

        return $this->valueHolder9407d->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer9f1ce && ($this->initializer9f1ce->__invoke($valueHolder9407d, $this, 'isFiltersStateClean', array(), $this->initializer9f1ce) || 1) && $this->valueHolder9407d = $valueHolder9407d;

        return $this->valueHolder9407d->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer9f1ce && ($this->initializer9f1ce->__invoke($valueHolder9407d, $this, 'hasFilters', array(), $this->initializer9f1ce) || 1) && $this->valueHolder9407d = $valueHolder9407d;

        return $this->valueHolder9407d->hasFilters();
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

        $instance->initializer9f1ce = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder9407d) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder9407d = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder9407d->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer9f1ce && ($this->initializer9f1ce->__invoke($valueHolder9407d, $this, '__get', ['name' => $name], $this->initializer9f1ce) || 1) && $this->valueHolder9407d = $valueHolder9407d;

        if (isset(self::$publicPropertiesf746b[$name])) {
            return $this->valueHolder9407d->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9407d;

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

        $targetObject = $this->valueHolder9407d;
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
        $this->initializer9f1ce && ($this->initializer9f1ce->__invoke($valueHolder9407d, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer9f1ce) || 1) && $this->valueHolder9407d = $valueHolder9407d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9407d;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder9407d;
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
        $this->initializer9f1ce && ($this->initializer9f1ce->__invoke($valueHolder9407d, $this, '__isset', array('name' => $name), $this->initializer9f1ce) || 1) && $this->valueHolder9407d = $valueHolder9407d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9407d;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder9407d;
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
        $this->initializer9f1ce && ($this->initializer9f1ce->__invoke($valueHolder9407d, $this, '__unset', array('name' => $name), $this->initializer9f1ce) || 1) && $this->valueHolder9407d = $valueHolder9407d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9407d;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder9407d;
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
        $this->initializer9f1ce && ($this->initializer9f1ce->__invoke($valueHolder9407d, $this, '__clone', array(), $this->initializer9f1ce) || 1) && $this->valueHolder9407d = $valueHolder9407d;

        $this->valueHolder9407d = clone $this->valueHolder9407d;
    }

    public function __sleep()
    {
        $this->initializer9f1ce && ($this->initializer9f1ce->__invoke($valueHolder9407d, $this, '__sleep', array(), $this->initializer9f1ce) || 1) && $this->valueHolder9407d = $valueHolder9407d;

        return array('valueHolder9407d');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer9f1ce = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer9f1ce;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer9f1ce && ($this->initializer9f1ce->__invoke($valueHolder9407d, $this, 'initializeProxy', array(), $this->initializer9f1ce) || 1) && $this->valueHolder9407d = $valueHolder9407d;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder9407d;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder9407d;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}