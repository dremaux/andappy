<?php

namespace ContainerBfx9TbB;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder5c788 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer93f81 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesec618 = [
        
    ];

    public function getConnection()
    {
        $this->initializer93f81 && ($this->initializer93f81->__invoke($valueHolder5c788, $this, 'getConnection', array(), $this->initializer93f81) || 1) && $this->valueHolder5c788 = $valueHolder5c788;

        return $this->valueHolder5c788->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer93f81 && ($this->initializer93f81->__invoke($valueHolder5c788, $this, 'getMetadataFactory', array(), $this->initializer93f81) || 1) && $this->valueHolder5c788 = $valueHolder5c788;

        return $this->valueHolder5c788->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer93f81 && ($this->initializer93f81->__invoke($valueHolder5c788, $this, 'getExpressionBuilder', array(), $this->initializer93f81) || 1) && $this->valueHolder5c788 = $valueHolder5c788;

        return $this->valueHolder5c788->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer93f81 && ($this->initializer93f81->__invoke($valueHolder5c788, $this, 'beginTransaction', array(), $this->initializer93f81) || 1) && $this->valueHolder5c788 = $valueHolder5c788;

        return $this->valueHolder5c788->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer93f81 && ($this->initializer93f81->__invoke($valueHolder5c788, $this, 'getCache', array(), $this->initializer93f81) || 1) && $this->valueHolder5c788 = $valueHolder5c788;

        return $this->valueHolder5c788->getCache();
    }

    public function transactional($func)
    {
        $this->initializer93f81 && ($this->initializer93f81->__invoke($valueHolder5c788, $this, 'transactional', array('func' => $func), $this->initializer93f81) || 1) && $this->valueHolder5c788 = $valueHolder5c788;

        return $this->valueHolder5c788->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer93f81 && ($this->initializer93f81->__invoke($valueHolder5c788, $this, 'wrapInTransaction', array('func' => $func), $this->initializer93f81) || 1) && $this->valueHolder5c788 = $valueHolder5c788;

        return $this->valueHolder5c788->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer93f81 && ($this->initializer93f81->__invoke($valueHolder5c788, $this, 'commit', array(), $this->initializer93f81) || 1) && $this->valueHolder5c788 = $valueHolder5c788;

        return $this->valueHolder5c788->commit();
    }

    public function rollback()
    {
        $this->initializer93f81 && ($this->initializer93f81->__invoke($valueHolder5c788, $this, 'rollback', array(), $this->initializer93f81) || 1) && $this->valueHolder5c788 = $valueHolder5c788;

        return $this->valueHolder5c788->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer93f81 && ($this->initializer93f81->__invoke($valueHolder5c788, $this, 'getClassMetadata', array('className' => $className), $this->initializer93f81) || 1) && $this->valueHolder5c788 = $valueHolder5c788;

        return $this->valueHolder5c788->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer93f81 && ($this->initializer93f81->__invoke($valueHolder5c788, $this, 'createQuery', array('dql' => $dql), $this->initializer93f81) || 1) && $this->valueHolder5c788 = $valueHolder5c788;

        return $this->valueHolder5c788->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer93f81 && ($this->initializer93f81->__invoke($valueHolder5c788, $this, 'createNamedQuery', array('name' => $name), $this->initializer93f81) || 1) && $this->valueHolder5c788 = $valueHolder5c788;

        return $this->valueHolder5c788->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer93f81 && ($this->initializer93f81->__invoke($valueHolder5c788, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer93f81) || 1) && $this->valueHolder5c788 = $valueHolder5c788;

        return $this->valueHolder5c788->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer93f81 && ($this->initializer93f81->__invoke($valueHolder5c788, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer93f81) || 1) && $this->valueHolder5c788 = $valueHolder5c788;

        return $this->valueHolder5c788->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer93f81 && ($this->initializer93f81->__invoke($valueHolder5c788, $this, 'createQueryBuilder', array(), $this->initializer93f81) || 1) && $this->valueHolder5c788 = $valueHolder5c788;

        return $this->valueHolder5c788->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer93f81 && ($this->initializer93f81->__invoke($valueHolder5c788, $this, 'flush', array('entity' => $entity), $this->initializer93f81) || 1) && $this->valueHolder5c788 = $valueHolder5c788;

        return $this->valueHolder5c788->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer93f81 && ($this->initializer93f81->__invoke($valueHolder5c788, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer93f81) || 1) && $this->valueHolder5c788 = $valueHolder5c788;

        return $this->valueHolder5c788->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer93f81 && ($this->initializer93f81->__invoke($valueHolder5c788, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer93f81) || 1) && $this->valueHolder5c788 = $valueHolder5c788;

        return $this->valueHolder5c788->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer93f81 && ($this->initializer93f81->__invoke($valueHolder5c788, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer93f81) || 1) && $this->valueHolder5c788 = $valueHolder5c788;

        return $this->valueHolder5c788->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer93f81 && ($this->initializer93f81->__invoke($valueHolder5c788, $this, 'clear', array('entityName' => $entityName), $this->initializer93f81) || 1) && $this->valueHolder5c788 = $valueHolder5c788;

        return $this->valueHolder5c788->clear($entityName);
    }

    public function close()
    {
        $this->initializer93f81 && ($this->initializer93f81->__invoke($valueHolder5c788, $this, 'close', array(), $this->initializer93f81) || 1) && $this->valueHolder5c788 = $valueHolder5c788;

        return $this->valueHolder5c788->close();
    }

    public function persist($entity)
    {
        $this->initializer93f81 && ($this->initializer93f81->__invoke($valueHolder5c788, $this, 'persist', array('entity' => $entity), $this->initializer93f81) || 1) && $this->valueHolder5c788 = $valueHolder5c788;

        return $this->valueHolder5c788->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer93f81 && ($this->initializer93f81->__invoke($valueHolder5c788, $this, 'remove', array('entity' => $entity), $this->initializer93f81) || 1) && $this->valueHolder5c788 = $valueHolder5c788;

        return $this->valueHolder5c788->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer93f81 && ($this->initializer93f81->__invoke($valueHolder5c788, $this, 'refresh', array('entity' => $entity), $this->initializer93f81) || 1) && $this->valueHolder5c788 = $valueHolder5c788;

        return $this->valueHolder5c788->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer93f81 && ($this->initializer93f81->__invoke($valueHolder5c788, $this, 'detach', array('entity' => $entity), $this->initializer93f81) || 1) && $this->valueHolder5c788 = $valueHolder5c788;

        return $this->valueHolder5c788->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer93f81 && ($this->initializer93f81->__invoke($valueHolder5c788, $this, 'merge', array('entity' => $entity), $this->initializer93f81) || 1) && $this->valueHolder5c788 = $valueHolder5c788;

        return $this->valueHolder5c788->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer93f81 && ($this->initializer93f81->__invoke($valueHolder5c788, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer93f81) || 1) && $this->valueHolder5c788 = $valueHolder5c788;

        return $this->valueHolder5c788->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer93f81 && ($this->initializer93f81->__invoke($valueHolder5c788, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer93f81) || 1) && $this->valueHolder5c788 = $valueHolder5c788;

        return $this->valueHolder5c788->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer93f81 && ($this->initializer93f81->__invoke($valueHolder5c788, $this, 'getRepository', array('entityName' => $entityName), $this->initializer93f81) || 1) && $this->valueHolder5c788 = $valueHolder5c788;

        return $this->valueHolder5c788->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer93f81 && ($this->initializer93f81->__invoke($valueHolder5c788, $this, 'contains', array('entity' => $entity), $this->initializer93f81) || 1) && $this->valueHolder5c788 = $valueHolder5c788;

        return $this->valueHolder5c788->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer93f81 && ($this->initializer93f81->__invoke($valueHolder5c788, $this, 'getEventManager', array(), $this->initializer93f81) || 1) && $this->valueHolder5c788 = $valueHolder5c788;

        return $this->valueHolder5c788->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer93f81 && ($this->initializer93f81->__invoke($valueHolder5c788, $this, 'getConfiguration', array(), $this->initializer93f81) || 1) && $this->valueHolder5c788 = $valueHolder5c788;

        return $this->valueHolder5c788->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer93f81 && ($this->initializer93f81->__invoke($valueHolder5c788, $this, 'isOpen', array(), $this->initializer93f81) || 1) && $this->valueHolder5c788 = $valueHolder5c788;

        return $this->valueHolder5c788->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer93f81 && ($this->initializer93f81->__invoke($valueHolder5c788, $this, 'getUnitOfWork', array(), $this->initializer93f81) || 1) && $this->valueHolder5c788 = $valueHolder5c788;

        return $this->valueHolder5c788->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer93f81 && ($this->initializer93f81->__invoke($valueHolder5c788, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer93f81) || 1) && $this->valueHolder5c788 = $valueHolder5c788;

        return $this->valueHolder5c788->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer93f81 && ($this->initializer93f81->__invoke($valueHolder5c788, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer93f81) || 1) && $this->valueHolder5c788 = $valueHolder5c788;

        return $this->valueHolder5c788->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer93f81 && ($this->initializer93f81->__invoke($valueHolder5c788, $this, 'getProxyFactory', array(), $this->initializer93f81) || 1) && $this->valueHolder5c788 = $valueHolder5c788;

        return $this->valueHolder5c788->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer93f81 && ($this->initializer93f81->__invoke($valueHolder5c788, $this, 'initializeObject', array('obj' => $obj), $this->initializer93f81) || 1) && $this->valueHolder5c788 = $valueHolder5c788;

        return $this->valueHolder5c788->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer93f81 && ($this->initializer93f81->__invoke($valueHolder5c788, $this, 'getFilters', array(), $this->initializer93f81) || 1) && $this->valueHolder5c788 = $valueHolder5c788;

        return $this->valueHolder5c788->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer93f81 && ($this->initializer93f81->__invoke($valueHolder5c788, $this, 'isFiltersStateClean', array(), $this->initializer93f81) || 1) && $this->valueHolder5c788 = $valueHolder5c788;

        return $this->valueHolder5c788->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer93f81 && ($this->initializer93f81->__invoke($valueHolder5c788, $this, 'hasFilters', array(), $this->initializer93f81) || 1) && $this->valueHolder5c788 = $valueHolder5c788;

        return $this->valueHolder5c788->hasFilters();
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

        $instance->initializer93f81 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder5c788) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder5c788 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder5c788->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer93f81 && ($this->initializer93f81->__invoke($valueHolder5c788, $this, '__get', ['name' => $name], $this->initializer93f81) || 1) && $this->valueHolder5c788 = $valueHolder5c788;

        if (isset(self::$publicPropertiesec618[$name])) {
            return $this->valueHolder5c788->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5c788;

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

        $targetObject = $this->valueHolder5c788;
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
        $this->initializer93f81 && ($this->initializer93f81->__invoke($valueHolder5c788, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer93f81) || 1) && $this->valueHolder5c788 = $valueHolder5c788;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5c788;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder5c788;
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
        $this->initializer93f81 && ($this->initializer93f81->__invoke($valueHolder5c788, $this, '__isset', array('name' => $name), $this->initializer93f81) || 1) && $this->valueHolder5c788 = $valueHolder5c788;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5c788;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder5c788;
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
        $this->initializer93f81 && ($this->initializer93f81->__invoke($valueHolder5c788, $this, '__unset', array('name' => $name), $this->initializer93f81) || 1) && $this->valueHolder5c788 = $valueHolder5c788;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5c788;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder5c788;
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
        $this->initializer93f81 && ($this->initializer93f81->__invoke($valueHolder5c788, $this, '__clone', array(), $this->initializer93f81) || 1) && $this->valueHolder5c788 = $valueHolder5c788;

        $this->valueHolder5c788 = clone $this->valueHolder5c788;
    }

    public function __sleep()
    {
        $this->initializer93f81 && ($this->initializer93f81->__invoke($valueHolder5c788, $this, '__sleep', array(), $this->initializer93f81) || 1) && $this->valueHolder5c788 = $valueHolder5c788;

        return array('valueHolder5c788');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer93f81 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer93f81;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer93f81 && ($this->initializer93f81->__invoke($valueHolder5c788, $this, 'initializeProxy', array(), $this->initializer93f81) || 1) && $this->valueHolder5c788 = $valueHolder5c788;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder5c788;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder5c788;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
