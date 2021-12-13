<?php

namespace ContainerX0LW99d;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldera393f = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerdc85d = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties8ca65 = [
        
    ];

    public function getConnection()
    {
        $this->initializerdc85d && ($this->initializerdc85d->__invoke($valueHoldera393f, $this, 'getConnection', array(), $this->initializerdc85d) || 1) && $this->valueHoldera393f = $valueHoldera393f;

        return $this->valueHoldera393f->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerdc85d && ($this->initializerdc85d->__invoke($valueHoldera393f, $this, 'getMetadataFactory', array(), $this->initializerdc85d) || 1) && $this->valueHoldera393f = $valueHoldera393f;

        return $this->valueHoldera393f->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerdc85d && ($this->initializerdc85d->__invoke($valueHoldera393f, $this, 'getExpressionBuilder', array(), $this->initializerdc85d) || 1) && $this->valueHoldera393f = $valueHoldera393f;

        return $this->valueHoldera393f->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerdc85d && ($this->initializerdc85d->__invoke($valueHoldera393f, $this, 'beginTransaction', array(), $this->initializerdc85d) || 1) && $this->valueHoldera393f = $valueHoldera393f;

        return $this->valueHoldera393f->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerdc85d && ($this->initializerdc85d->__invoke($valueHoldera393f, $this, 'getCache', array(), $this->initializerdc85d) || 1) && $this->valueHoldera393f = $valueHoldera393f;

        return $this->valueHoldera393f->getCache();
    }

    public function transactional($func)
    {
        $this->initializerdc85d && ($this->initializerdc85d->__invoke($valueHoldera393f, $this, 'transactional', array('func' => $func), $this->initializerdc85d) || 1) && $this->valueHoldera393f = $valueHoldera393f;

        return $this->valueHoldera393f->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerdc85d && ($this->initializerdc85d->__invoke($valueHoldera393f, $this, 'wrapInTransaction', array('func' => $func), $this->initializerdc85d) || 1) && $this->valueHoldera393f = $valueHoldera393f;

        return $this->valueHoldera393f->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerdc85d && ($this->initializerdc85d->__invoke($valueHoldera393f, $this, 'commit', array(), $this->initializerdc85d) || 1) && $this->valueHoldera393f = $valueHoldera393f;

        return $this->valueHoldera393f->commit();
    }

    public function rollback()
    {
        $this->initializerdc85d && ($this->initializerdc85d->__invoke($valueHoldera393f, $this, 'rollback', array(), $this->initializerdc85d) || 1) && $this->valueHoldera393f = $valueHoldera393f;

        return $this->valueHoldera393f->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerdc85d && ($this->initializerdc85d->__invoke($valueHoldera393f, $this, 'getClassMetadata', array('className' => $className), $this->initializerdc85d) || 1) && $this->valueHoldera393f = $valueHoldera393f;

        return $this->valueHoldera393f->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerdc85d && ($this->initializerdc85d->__invoke($valueHoldera393f, $this, 'createQuery', array('dql' => $dql), $this->initializerdc85d) || 1) && $this->valueHoldera393f = $valueHoldera393f;

        return $this->valueHoldera393f->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerdc85d && ($this->initializerdc85d->__invoke($valueHoldera393f, $this, 'createNamedQuery', array('name' => $name), $this->initializerdc85d) || 1) && $this->valueHoldera393f = $valueHoldera393f;

        return $this->valueHoldera393f->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerdc85d && ($this->initializerdc85d->__invoke($valueHoldera393f, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerdc85d) || 1) && $this->valueHoldera393f = $valueHoldera393f;

        return $this->valueHoldera393f->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerdc85d && ($this->initializerdc85d->__invoke($valueHoldera393f, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerdc85d) || 1) && $this->valueHoldera393f = $valueHoldera393f;

        return $this->valueHoldera393f->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerdc85d && ($this->initializerdc85d->__invoke($valueHoldera393f, $this, 'createQueryBuilder', array(), $this->initializerdc85d) || 1) && $this->valueHoldera393f = $valueHoldera393f;

        return $this->valueHoldera393f->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerdc85d && ($this->initializerdc85d->__invoke($valueHoldera393f, $this, 'flush', array('entity' => $entity), $this->initializerdc85d) || 1) && $this->valueHoldera393f = $valueHoldera393f;

        return $this->valueHoldera393f->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerdc85d && ($this->initializerdc85d->__invoke($valueHoldera393f, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerdc85d) || 1) && $this->valueHoldera393f = $valueHoldera393f;

        return $this->valueHoldera393f->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerdc85d && ($this->initializerdc85d->__invoke($valueHoldera393f, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerdc85d) || 1) && $this->valueHoldera393f = $valueHoldera393f;

        return $this->valueHoldera393f->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerdc85d && ($this->initializerdc85d->__invoke($valueHoldera393f, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerdc85d) || 1) && $this->valueHoldera393f = $valueHoldera393f;

        return $this->valueHoldera393f->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerdc85d && ($this->initializerdc85d->__invoke($valueHoldera393f, $this, 'clear', array('entityName' => $entityName), $this->initializerdc85d) || 1) && $this->valueHoldera393f = $valueHoldera393f;

        return $this->valueHoldera393f->clear($entityName);
    }

    public function close()
    {
        $this->initializerdc85d && ($this->initializerdc85d->__invoke($valueHoldera393f, $this, 'close', array(), $this->initializerdc85d) || 1) && $this->valueHoldera393f = $valueHoldera393f;

        return $this->valueHoldera393f->close();
    }

    public function persist($entity)
    {
        $this->initializerdc85d && ($this->initializerdc85d->__invoke($valueHoldera393f, $this, 'persist', array('entity' => $entity), $this->initializerdc85d) || 1) && $this->valueHoldera393f = $valueHoldera393f;

        return $this->valueHoldera393f->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerdc85d && ($this->initializerdc85d->__invoke($valueHoldera393f, $this, 'remove', array('entity' => $entity), $this->initializerdc85d) || 1) && $this->valueHoldera393f = $valueHoldera393f;

        return $this->valueHoldera393f->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerdc85d && ($this->initializerdc85d->__invoke($valueHoldera393f, $this, 'refresh', array('entity' => $entity), $this->initializerdc85d) || 1) && $this->valueHoldera393f = $valueHoldera393f;

        return $this->valueHoldera393f->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerdc85d && ($this->initializerdc85d->__invoke($valueHoldera393f, $this, 'detach', array('entity' => $entity), $this->initializerdc85d) || 1) && $this->valueHoldera393f = $valueHoldera393f;

        return $this->valueHoldera393f->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerdc85d && ($this->initializerdc85d->__invoke($valueHoldera393f, $this, 'merge', array('entity' => $entity), $this->initializerdc85d) || 1) && $this->valueHoldera393f = $valueHoldera393f;

        return $this->valueHoldera393f->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerdc85d && ($this->initializerdc85d->__invoke($valueHoldera393f, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerdc85d) || 1) && $this->valueHoldera393f = $valueHoldera393f;

        return $this->valueHoldera393f->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerdc85d && ($this->initializerdc85d->__invoke($valueHoldera393f, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerdc85d) || 1) && $this->valueHoldera393f = $valueHoldera393f;

        return $this->valueHoldera393f->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerdc85d && ($this->initializerdc85d->__invoke($valueHoldera393f, $this, 'getRepository', array('entityName' => $entityName), $this->initializerdc85d) || 1) && $this->valueHoldera393f = $valueHoldera393f;

        return $this->valueHoldera393f->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerdc85d && ($this->initializerdc85d->__invoke($valueHoldera393f, $this, 'contains', array('entity' => $entity), $this->initializerdc85d) || 1) && $this->valueHoldera393f = $valueHoldera393f;

        return $this->valueHoldera393f->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerdc85d && ($this->initializerdc85d->__invoke($valueHoldera393f, $this, 'getEventManager', array(), $this->initializerdc85d) || 1) && $this->valueHoldera393f = $valueHoldera393f;

        return $this->valueHoldera393f->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerdc85d && ($this->initializerdc85d->__invoke($valueHoldera393f, $this, 'getConfiguration', array(), $this->initializerdc85d) || 1) && $this->valueHoldera393f = $valueHoldera393f;

        return $this->valueHoldera393f->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerdc85d && ($this->initializerdc85d->__invoke($valueHoldera393f, $this, 'isOpen', array(), $this->initializerdc85d) || 1) && $this->valueHoldera393f = $valueHoldera393f;

        return $this->valueHoldera393f->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerdc85d && ($this->initializerdc85d->__invoke($valueHoldera393f, $this, 'getUnitOfWork', array(), $this->initializerdc85d) || 1) && $this->valueHoldera393f = $valueHoldera393f;

        return $this->valueHoldera393f->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerdc85d && ($this->initializerdc85d->__invoke($valueHoldera393f, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerdc85d) || 1) && $this->valueHoldera393f = $valueHoldera393f;

        return $this->valueHoldera393f->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerdc85d && ($this->initializerdc85d->__invoke($valueHoldera393f, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerdc85d) || 1) && $this->valueHoldera393f = $valueHoldera393f;

        return $this->valueHoldera393f->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerdc85d && ($this->initializerdc85d->__invoke($valueHoldera393f, $this, 'getProxyFactory', array(), $this->initializerdc85d) || 1) && $this->valueHoldera393f = $valueHoldera393f;

        return $this->valueHoldera393f->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerdc85d && ($this->initializerdc85d->__invoke($valueHoldera393f, $this, 'initializeObject', array('obj' => $obj), $this->initializerdc85d) || 1) && $this->valueHoldera393f = $valueHoldera393f;

        return $this->valueHoldera393f->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerdc85d && ($this->initializerdc85d->__invoke($valueHoldera393f, $this, 'getFilters', array(), $this->initializerdc85d) || 1) && $this->valueHoldera393f = $valueHoldera393f;

        return $this->valueHoldera393f->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerdc85d && ($this->initializerdc85d->__invoke($valueHoldera393f, $this, 'isFiltersStateClean', array(), $this->initializerdc85d) || 1) && $this->valueHoldera393f = $valueHoldera393f;

        return $this->valueHoldera393f->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerdc85d && ($this->initializerdc85d->__invoke($valueHoldera393f, $this, 'hasFilters', array(), $this->initializerdc85d) || 1) && $this->valueHoldera393f = $valueHoldera393f;

        return $this->valueHoldera393f->hasFilters();
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

        $instance->initializerdc85d = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHoldera393f) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldera393f = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldera393f->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerdc85d && ($this->initializerdc85d->__invoke($valueHoldera393f, $this, '__get', ['name' => $name], $this->initializerdc85d) || 1) && $this->valueHoldera393f = $valueHoldera393f;

        if (isset(self::$publicProperties8ca65[$name])) {
            return $this->valueHoldera393f->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera393f;

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

        $targetObject = $this->valueHoldera393f;
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
        $this->initializerdc85d && ($this->initializerdc85d->__invoke($valueHoldera393f, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerdc85d) || 1) && $this->valueHoldera393f = $valueHoldera393f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera393f;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldera393f;
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
        $this->initializerdc85d && ($this->initializerdc85d->__invoke($valueHoldera393f, $this, '__isset', array('name' => $name), $this->initializerdc85d) || 1) && $this->valueHoldera393f = $valueHoldera393f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera393f;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldera393f;
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
        $this->initializerdc85d && ($this->initializerdc85d->__invoke($valueHoldera393f, $this, '__unset', array('name' => $name), $this->initializerdc85d) || 1) && $this->valueHoldera393f = $valueHoldera393f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera393f;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldera393f;
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
        $this->initializerdc85d && ($this->initializerdc85d->__invoke($valueHoldera393f, $this, '__clone', array(), $this->initializerdc85d) || 1) && $this->valueHoldera393f = $valueHoldera393f;

        $this->valueHoldera393f = clone $this->valueHoldera393f;
    }

    public function __sleep()
    {
        $this->initializerdc85d && ($this->initializerdc85d->__invoke($valueHoldera393f, $this, '__sleep', array(), $this->initializerdc85d) || 1) && $this->valueHoldera393f = $valueHoldera393f;

        return array('valueHoldera393f');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerdc85d = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerdc85d;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerdc85d && ($this->initializerdc85d->__invoke($valueHoldera393f, $this, 'initializeProxy', array(), $this->initializerdc85d) || 1) && $this->valueHoldera393f = $valueHoldera393f;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldera393f;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldera393f;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
