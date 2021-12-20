<?php

namespace ContainerZDxxVMx;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderbc618 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerccf8d = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties1d1bc = [
        
    ];

    public function getConnection()
    {
        $this->initializerccf8d && ($this->initializerccf8d->__invoke($valueHolderbc618, $this, 'getConnection', array(), $this->initializerccf8d) || 1) && $this->valueHolderbc618 = $valueHolderbc618;

        return $this->valueHolderbc618->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerccf8d && ($this->initializerccf8d->__invoke($valueHolderbc618, $this, 'getMetadataFactory', array(), $this->initializerccf8d) || 1) && $this->valueHolderbc618 = $valueHolderbc618;

        return $this->valueHolderbc618->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerccf8d && ($this->initializerccf8d->__invoke($valueHolderbc618, $this, 'getExpressionBuilder', array(), $this->initializerccf8d) || 1) && $this->valueHolderbc618 = $valueHolderbc618;

        return $this->valueHolderbc618->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerccf8d && ($this->initializerccf8d->__invoke($valueHolderbc618, $this, 'beginTransaction', array(), $this->initializerccf8d) || 1) && $this->valueHolderbc618 = $valueHolderbc618;

        return $this->valueHolderbc618->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerccf8d && ($this->initializerccf8d->__invoke($valueHolderbc618, $this, 'getCache', array(), $this->initializerccf8d) || 1) && $this->valueHolderbc618 = $valueHolderbc618;

        return $this->valueHolderbc618->getCache();
    }

    public function transactional($func)
    {
        $this->initializerccf8d && ($this->initializerccf8d->__invoke($valueHolderbc618, $this, 'transactional', array('func' => $func), $this->initializerccf8d) || 1) && $this->valueHolderbc618 = $valueHolderbc618;

        return $this->valueHolderbc618->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerccf8d && ($this->initializerccf8d->__invoke($valueHolderbc618, $this, 'wrapInTransaction', array('func' => $func), $this->initializerccf8d) || 1) && $this->valueHolderbc618 = $valueHolderbc618;

        return $this->valueHolderbc618->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerccf8d && ($this->initializerccf8d->__invoke($valueHolderbc618, $this, 'commit', array(), $this->initializerccf8d) || 1) && $this->valueHolderbc618 = $valueHolderbc618;

        return $this->valueHolderbc618->commit();
    }

    public function rollback()
    {
        $this->initializerccf8d && ($this->initializerccf8d->__invoke($valueHolderbc618, $this, 'rollback', array(), $this->initializerccf8d) || 1) && $this->valueHolderbc618 = $valueHolderbc618;

        return $this->valueHolderbc618->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerccf8d && ($this->initializerccf8d->__invoke($valueHolderbc618, $this, 'getClassMetadata', array('className' => $className), $this->initializerccf8d) || 1) && $this->valueHolderbc618 = $valueHolderbc618;

        return $this->valueHolderbc618->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerccf8d && ($this->initializerccf8d->__invoke($valueHolderbc618, $this, 'createQuery', array('dql' => $dql), $this->initializerccf8d) || 1) && $this->valueHolderbc618 = $valueHolderbc618;

        return $this->valueHolderbc618->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerccf8d && ($this->initializerccf8d->__invoke($valueHolderbc618, $this, 'createNamedQuery', array('name' => $name), $this->initializerccf8d) || 1) && $this->valueHolderbc618 = $valueHolderbc618;

        return $this->valueHolderbc618->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerccf8d && ($this->initializerccf8d->__invoke($valueHolderbc618, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerccf8d) || 1) && $this->valueHolderbc618 = $valueHolderbc618;

        return $this->valueHolderbc618->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerccf8d && ($this->initializerccf8d->__invoke($valueHolderbc618, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerccf8d) || 1) && $this->valueHolderbc618 = $valueHolderbc618;

        return $this->valueHolderbc618->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerccf8d && ($this->initializerccf8d->__invoke($valueHolderbc618, $this, 'createQueryBuilder', array(), $this->initializerccf8d) || 1) && $this->valueHolderbc618 = $valueHolderbc618;

        return $this->valueHolderbc618->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerccf8d && ($this->initializerccf8d->__invoke($valueHolderbc618, $this, 'flush', array('entity' => $entity), $this->initializerccf8d) || 1) && $this->valueHolderbc618 = $valueHolderbc618;

        return $this->valueHolderbc618->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerccf8d && ($this->initializerccf8d->__invoke($valueHolderbc618, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerccf8d) || 1) && $this->valueHolderbc618 = $valueHolderbc618;

        return $this->valueHolderbc618->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerccf8d && ($this->initializerccf8d->__invoke($valueHolderbc618, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerccf8d) || 1) && $this->valueHolderbc618 = $valueHolderbc618;

        return $this->valueHolderbc618->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerccf8d && ($this->initializerccf8d->__invoke($valueHolderbc618, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerccf8d) || 1) && $this->valueHolderbc618 = $valueHolderbc618;

        return $this->valueHolderbc618->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerccf8d && ($this->initializerccf8d->__invoke($valueHolderbc618, $this, 'clear', array('entityName' => $entityName), $this->initializerccf8d) || 1) && $this->valueHolderbc618 = $valueHolderbc618;

        return $this->valueHolderbc618->clear($entityName);
    }

    public function close()
    {
        $this->initializerccf8d && ($this->initializerccf8d->__invoke($valueHolderbc618, $this, 'close', array(), $this->initializerccf8d) || 1) && $this->valueHolderbc618 = $valueHolderbc618;

        return $this->valueHolderbc618->close();
    }

    public function persist($entity)
    {
        $this->initializerccf8d && ($this->initializerccf8d->__invoke($valueHolderbc618, $this, 'persist', array('entity' => $entity), $this->initializerccf8d) || 1) && $this->valueHolderbc618 = $valueHolderbc618;

        return $this->valueHolderbc618->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerccf8d && ($this->initializerccf8d->__invoke($valueHolderbc618, $this, 'remove', array('entity' => $entity), $this->initializerccf8d) || 1) && $this->valueHolderbc618 = $valueHolderbc618;

        return $this->valueHolderbc618->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerccf8d && ($this->initializerccf8d->__invoke($valueHolderbc618, $this, 'refresh', array('entity' => $entity), $this->initializerccf8d) || 1) && $this->valueHolderbc618 = $valueHolderbc618;

        return $this->valueHolderbc618->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerccf8d && ($this->initializerccf8d->__invoke($valueHolderbc618, $this, 'detach', array('entity' => $entity), $this->initializerccf8d) || 1) && $this->valueHolderbc618 = $valueHolderbc618;

        return $this->valueHolderbc618->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerccf8d && ($this->initializerccf8d->__invoke($valueHolderbc618, $this, 'merge', array('entity' => $entity), $this->initializerccf8d) || 1) && $this->valueHolderbc618 = $valueHolderbc618;

        return $this->valueHolderbc618->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerccf8d && ($this->initializerccf8d->__invoke($valueHolderbc618, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerccf8d) || 1) && $this->valueHolderbc618 = $valueHolderbc618;

        return $this->valueHolderbc618->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerccf8d && ($this->initializerccf8d->__invoke($valueHolderbc618, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerccf8d) || 1) && $this->valueHolderbc618 = $valueHolderbc618;

        return $this->valueHolderbc618->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerccf8d && ($this->initializerccf8d->__invoke($valueHolderbc618, $this, 'getRepository', array('entityName' => $entityName), $this->initializerccf8d) || 1) && $this->valueHolderbc618 = $valueHolderbc618;

        return $this->valueHolderbc618->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerccf8d && ($this->initializerccf8d->__invoke($valueHolderbc618, $this, 'contains', array('entity' => $entity), $this->initializerccf8d) || 1) && $this->valueHolderbc618 = $valueHolderbc618;

        return $this->valueHolderbc618->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerccf8d && ($this->initializerccf8d->__invoke($valueHolderbc618, $this, 'getEventManager', array(), $this->initializerccf8d) || 1) && $this->valueHolderbc618 = $valueHolderbc618;

        return $this->valueHolderbc618->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerccf8d && ($this->initializerccf8d->__invoke($valueHolderbc618, $this, 'getConfiguration', array(), $this->initializerccf8d) || 1) && $this->valueHolderbc618 = $valueHolderbc618;

        return $this->valueHolderbc618->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerccf8d && ($this->initializerccf8d->__invoke($valueHolderbc618, $this, 'isOpen', array(), $this->initializerccf8d) || 1) && $this->valueHolderbc618 = $valueHolderbc618;

        return $this->valueHolderbc618->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerccf8d && ($this->initializerccf8d->__invoke($valueHolderbc618, $this, 'getUnitOfWork', array(), $this->initializerccf8d) || 1) && $this->valueHolderbc618 = $valueHolderbc618;

        return $this->valueHolderbc618->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerccf8d && ($this->initializerccf8d->__invoke($valueHolderbc618, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerccf8d) || 1) && $this->valueHolderbc618 = $valueHolderbc618;

        return $this->valueHolderbc618->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerccf8d && ($this->initializerccf8d->__invoke($valueHolderbc618, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerccf8d) || 1) && $this->valueHolderbc618 = $valueHolderbc618;

        return $this->valueHolderbc618->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerccf8d && ($this->initializerccf8d->__invoke($valueHolderbc618, $this, 'getProxyFactory', array(), $this->initializerccf8d) || 1) && $this->valueHolderbc618 = $valueHolderbc618;

        return $this->valueHolderbc618->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerccf8d && ($this->initializerccf8d->__invoke($valueHolderbc618, $this, 'initializeObject', array('obj' => $obj), $this->initializerccf8d) || 1) && $this->valueHolderbc618 = $valueHolderbc618;

        return $this->valueHolderbc618->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerccf8d && ($this->initializerccf8d->__invoke($valueHolderbc618, $this, 'getFilters', array(), $this->initializerccf8d) || 1) && $this->valueHolderbc618 = $valueHolderbc618;

        return $this->valueHolderbc618->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerccf8d && ($this->initializerccf8d->__invoke($valueHolderbc618, $this, 'isFiltersStateClean', array(), $this->initializerccf8d) || 1) && $this->valueHolderbc618 = $valueHolderbc618;

        return $this->valueHolderbc618->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerccf8d && ($this->initializerccf8d->__invoke($valueHolderbc618, $this, 'hasFilters', array(), $this->initializerccf8d) || 1) && $this->valueHolderbc618 = $valueHolderbc618;

        return $this->valueHolderbc618->hasFilters();
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

        $instance->initializerccf8d = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderbc618) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderbc618 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderbc618->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerccf8d && ($this->initializerccf8d->__invoke($valueHolderbc618, $this, '__get', ['name' => $name], $this->initializerccf8d) || 1) && $this->valueHolderbc618 = $valueHolderbc618;

        if (isset(self::$publicProperties1d1bc[$name])) {
            return $this->valueHolderbc618->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbc618;

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

        $targetObject = $this->valueHolderbc618;
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
        $this->initializerccf8d && ($this->initializerccf8d->__invoke($valueHolderbc618, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerccf8d) || 1) && $this->valueHolderbc618 = $valueHolderbc618;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbc618;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderbc618;
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
        $this->initializerccf8d && ($this->initializerccf8d->__invoke($valueHolderbc618, $this, '__isset', array('name' => $name), $this->initializerccf8d) || 1) && $this->valueHolderbc618 = $valueHolderbc618;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbc618;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderbc618;
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
        $this->initializerccf8d && ($this->initializerccf8d->__invoke($valueHolderbc618, $this, '__unset', array('name' => $name), $this->initializerccf8d) || 1) && $this->valueHolderbc618 = $valueHolderbc618;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbc618;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderbc618;
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
        $this->initializerccf8d && ($this->initializerccf8d->__invoke($valueHolderbc618, $this, '__clone', array(), $this->initializerccf8d) || 1) && $this->valueHolderbc618 = $valueHolderbc618;

        $this->valueHolderbc618 = clone $this->valueHolderbc618;
    }

    public function __sleep()
    {
        $this->initializerccf8d && ($this->initializerccf8d->__invoke($valueHolderbc618, $this, '__sleep', array(), $this->initializerccf8d) || 1) && $this->valueHolderbc618 = $valueHolderbc618;

        return array('valueHolderbc618');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerccf8d = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerccf8d;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerccf8d && ($this->initializerccf8d->__invoke($valueHolderbc618, $this, 'initializeProxy', array(), $this->initializerccf8d) || 1) && $this->valueHolderbc618 = $valueHolderbc618;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderbc618;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderbc618;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
