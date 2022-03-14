<?php

namespace ContainerUJwOXXe;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder8679f = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializercd1b3 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesdcc21 = [
        
    ];

    public function getConnection()
    {
        $this->initializercd1b3 && ($this->initializercd1b3->__invoke($valueHolder8679f, $this, 'getConnection', array(), $this->initializercd1b3) || 1) && $this->valueHolder8679f = $valueHolder8679f;

        return $this->valueHolder8679f->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializercd1b3 && ($this->initializercd1b3->__invoke($valueHolder8679f, $this, 'getMetadataFactory', array(), $this->initializercd1b3) || 1) && $this->valueHolder8679f = $valueHolder8679f;

        return $this->valueHolder8679f->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializercd1b3 && ($this->initializercd1b3->__invoke($valueHolder8679f, $this, 'getExpressionBuilder', array(), $this->initializercd1b3) || 1) && $this->valueHolder8679f = $valueHolder8679f;

        return $this->valueHolder8679f->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializercd1b3 && ($this->initializercd1b3->__invoke($valueHolder8679f, $this, 'beginTransaction', array(), $this->initializercd1b3) || 1) && $this->valueHolder8679f = $valueHolder8679f;

        return $this->valueHolder8679f->beginTransaction();
    }

    public function getCache()
    {
        $this->initializercd1b3 && ($this->initializercd1b3->__invoke($valueHolder8679f, $this, 'getCache', array(), $this->initializercd1b3) || 1) && $this->valueHolder8679f = $valueHolder8679f;

        return $this->valueHolder8679f->getCache();
    }

    public function transactional($func)
    {
        $this->initializercd1b3 && ($this->initializercd1b3->__invoke($valueHolder8679f, $this, 'transactional', array('func' => $func), $this->initializercd1b3) || 1) && $this->valueHolder8679f = $valueHolder8679f;

        return $this->valueHolder8679f->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializercd1b3 && ($this->initializercd1b3->__invoke($valueHolder8679f, $this, 'wrapInTransaction', array('func' => $func), $this->initializercd1b3) || 1) && $this->valueHolder8679f = $valueHolder8679f;

        return $this->valueHolder8679f->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializercd1b3 && ($this->initializercd1b3->__invoke($valueHolder8679f, $this, 'commit', array(), $this->initializercd1b3) || 1) && $this->valueHolder8679f = $valueHolder8679f;

        return $this->valueHolder8679f->commit();
    }

    public function rollback()
    {
        $this->initializercd1b3 && ($this->initializercd1b3->__invoke($valueHolder8679f, $this, 'rollback', array(), $this->initializercd1b3) || 1) && $this->valueHolder8679f = $valueHolder8679f;

        return $this->valueHolder8679f->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializercd1b3 && ($this->initializercd1b3->__invoke($valueHolder8679f, $this, 'getClassMetadata', array('className' => $className), $this->initializercd1b3) || 1) && $this->valueHolder8679f = $valueHolder8679f;

        return $this->valueHolder8679f->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializercd1b3 && ($this->initializercd1b3->__invoke($valueHolder8679f, $this, 'createQuery', array('dql' => $dql), $this->initializercd1b3) || 1) && $this->valueHolder8679f = $valueHolder8679f;

        return $this->valueHolder8679f->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializercd1b3 && ($this->initializercd1b3->__invoke($valueHolder8679f, $this, 'createNamedQuery', array('name' => $name), $this->initializercd1b3) || 1) && $this->valueHolder8679f = $valueHolder8679f;

        return $this->valueHolder8679f->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializercd1b3 && ($this->initializercd1b3->__invoke($valueHolder8679f, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializercd1b3) || 1) && $this->valueHolder8679f = $valueHolder8679f;

        return $this->valueHolder8679f->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializercd1b3 && ($this->initializercd1b3->__invoke($valueHolder8679f, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializercd1b3) || 1) && $this->valueHolder8679f = $valueHolder8679f;

        return $this->valueHolder8679f->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializercd1b3 && ($this->initializercd1b3->__invoke($valueHolder8679f, $this, 'createQueryBuilder', array(), $this->initializercd1b3) || 1) && $this->valueHolder8679f = $valueHolder8679f;

        return $this->valueHolder8679f->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializercd1b3 && ($this->initializercd1b3->__invoke($valueHolder8679f, $this, 'flush', array('entity' => $entity), $this->initializercd1b3) || 1) && $this->valueHolder8679f = $valueHolder8679f;

        return $this->valueHolder8679f->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializercd1b3 && ($this->initializercd1b3->__invoke($valueHolder8679f, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializercd1b3) || 1) && $this->valueHolder8679f = $valueHolder8679f;

        return $this->valueHolder8679f->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializercd1b3 && ($this->initializercd1b3->__invoke($valueHolder8679f, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializercd1b3) || 1) && $this->valueHolder8679f = $valueHolder8679f;

        return $this->valueHolder8679f->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializercd1b3 && ($this->initializercd1b3->__invoke($valueHolder8679f, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializercd1b3) || 1) && $this->valueHolder8679f = $valueHolder8679f;

        return $this->valueHolder8679f->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializercd1b3 && ($this->initializercd1b3->__invoke($valueHolder8679f, $this, 'clear', array('entityName' => $entityName), $this->initializercd1b3) || 1) && $this->valueHolder8679f = $valueHolder8679f;

        return $this->valueHolder8679f->clear($entityName);
    }

    public function close()
    {
        $this->initializercd1b3 && ($this->initializercd1b3->__invoke($valueHolder8679f, $this, 'close', array(), $this->initializercd1b3) || 1) && $this->valueHolder8679f = $valueHolder8679f;

        return $this->valueHolder8679f->close();
    }

    public function persist($entity)
    {
        $this->initializercd1b3 && ($this->initializercd1b3->__invoke($valueHolder8679f, $this, 'persist', array('entity' => $entity), $this->initializercd1b3) || 1) && $this->valueHolder8679f = $valueHolder8679f;

        return $this->valueHolder8679f->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializercd1b3 && ($this->initializercd1b3->__invoke($valueHolder8679f, $this, 'remove', array('entity' => $entity), $this->initializercd1b3) || 1) && $this->valueHolder8679f = $valueHolder8679f;

        return $this->valueHolder8679f->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializercd1b3 && ($this->initializercd1b3->__invoke($valueHolder8679f, $this, 'refresh', array('entity' => $entity), $this->initializercd1b3) || 1) && $this->valueHolder8679f = $valueHolder8679f;

        return $this->valueHolder8679f->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializercd1b3 && ($this->initializercd1b3->__invoke($valueHolder8679f, $this, 'detach', array('entity' => $entity), $this->initializercd1b3) || 1) && $this->valueHolder8679f = $valueHolder8679f;

        return $this->valueHolder8679f->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializercd1b3 && ($this->initializercd1b3->__invoke($valueHolder8679f, $this, 'merge', array('entity' => $entity), $this->initializercd1b3) || 1) && $this->valueHolder8679f = $valueHolder8679f;

        return $this->valueHolder8679f->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializercd1b3 && ($this->initializercd1b3->__invoke($valueHolder8679f, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializercd1b3) || 1) && $this->valueHolder8679f = $valueHolder8679f;

        return $this->valueHolder8679f->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializercd1b3 && ($this->initializercd1b3->__invoke($valueHolder8679f, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializercd1b3) || 1) && $this->valueHolder8679f = $valueHolder8679f;

        return $this->valueHolder8679f->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializercd1b3 && ($this->initializercd1b3->__invoke($valueHolder8679f, $this, 'getRepository', array('entityName' => $entityName), $this->initializercd1b3) || 1) && $this->valueHolder8679f = $valueHolder8679f;

        return $this->valueHolder8679f->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializercd1b3 && ($this->initializercd1b3->__invoke($valueHolder8679f, $this, 'contains', array('entity' => $entity), $this->initializercd1b3) || 1) && $this->valueHolder8679f = $valueHolder8679f;

        return $this->valueHolder8679f->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializercd1b3 && ($this->initializercd1b3->__invoke($valueHolder8679f, $this, 'getEventManager', array(), $this->initializercd1b3) || 1) && $this->valueHolder8679f = $valueHolder8679f;

        return $this->valueHolder8679f->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializercd1b3 && ($this->initializercd1b3->__invoke($valueHolder8679f, $this, 'getConfiguration', array(), $this->initializercd1b3) || 1) && $this->valueHolder8679f = $valueHolder8679f;

        return $this->valueHolder8679f->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializercd1b3 && ($this->initializercd1b3->__invoke($valueHolder8679f, $this, 'isOpen', array(), $this->initializercd1b3) || 1) && $this->valueHolder8679f = $valueHolder8679f;

        return $this->valueHolder8679f->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializercd1b3 && ($this->initializercd1b3->__invoke($valueHolder8679f, $this, 'getUnitOfWork', array(), $this->initializercd1b3) || 1) && $this->valueHolder8679f = $valueHolder8679f;

        return $this->valueHolder8679f->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializercd1b3 && ($this->initializercd1b3->__invoke($valueHolder8679f, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializercd1b3) || 1) && $this->valueHolder8679f = $valueHolder8679f;

        return $this->valueHolder8679f->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializercd1b3 && ($this->initializercd1b3->__invoke($valueHolder8679f, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializercd1b3) || 1) && $this->valueHolder8679f = $valueHolder8679f;

        return $this->valueHolder8679f->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializercd1b3 && ($this->initializercd1b3->__invoke($valueHolder8679f, $this, 'getProxyFactory', array(), $this->initializercd1b3) || 1) && $this->valueHolder8679f = $valueHolder8679f;

        return $this->valueHolder8679f->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializercd1b3 && ($this->initializercd1b3->__invoke($valueHolder8679f, $this, 'initializeObject', array('obj' => $obj), $this->initializercd1b3) || 1) && $this->valueHolder8679f = $valueHolder8679f;

        return $this->valueHolder8679f->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializercd1b3 && ($this->initializercd1b3->__invoke($valueHolder8679f, $this, 'getFilters', array(), $this->initializercd1b3) || 1) && $this->valueHolder8679f = $valueHolder8679f;

        return $this->valueHolder8679f->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializercd1b3 && ($this->initializercd1b3->__invoke($valueHolder8679f, $this, 'isFiltersStateClean', array(), $this->initializercd1b3) || 1) && $this->valueHolder8679f = $valueHolder8679f;

        return $this->valueHolder8679f->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializercd1b3 && ($this->initializercd1b3->__invoke($valueHolder8679f, $this, 'hasFilters', array(), $this->initializercd1b3) || 1) && $this->valueHolder8679f = $valueHolder8679f;

        return $this->valueHolder8679f->hasFilters();
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

        $instance->initializercd1b3 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder8679f) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder8679f = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder8679f->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializercd1b3 && ($this->initializercd1b3->__invoke($valueHolder8679f, $this, '__get', ['name' => $name], $this->initializercd1b3) || 1) && $this->valueHolder8679f = $valueHolder8679f;

        if (isset(self::$publicPropertiesdcc21[$name])) {
            return $this->valueHolder8679f->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8679f;

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

        $targetObject = $this->valueHolder8679f;
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
        $this->initializercd1b3 && ($this->initializercd1b3->__invoke($valueHolder8679f, $this, '__set', array('name' => $name, 'value' => $value), $this->initializercd1b3) || 1) && $this->valueHolder8679f = $valueHolder8679f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8679f;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder8679f;
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
        $this->initializercd1b3 && ($this->initializercd1b3->__invoke($valueHolder8679f, $this, '__isset', array('name' => $name), $this->initializercd1b3) || 1) && $this->valueHolder8679f = $valueHolder8679f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8679f;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder8679f;
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
        $this->initializercd1b3 && ($this->initializercd1b3->__invoke($valueHolder8679f, $this, '__unset', array('name' => $name), $this->initializercd1b3) || 1) && $this->valueHolder8679f = $valueHolder8679f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8679f;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder8679f;
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
        $this->initializercd1b3 && ($this->initializercd1b3->__invoke($valueHolder8679f, $this, '__clone', array(), $this->initializercd1b3) || 1) && $this->valueHolder8679f = $valueHolder8679f;

        $this->valueHolder8679f = clone $this->valueHolder8679f;
    }

    public function __sleep()
    {
        $this->initializercd1b3 && ($this->initializercd1b3->__invoke($valueHolder8679f, $this, '__sleep', array(), $this->initializercd1b3) || 1) && $this->valueHolder8679f = $valueHolder8679f;

        return array('valueHolder8679f');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializercd1b3 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializercd1b3;
    }

    public function initializeProxy() : bool
    {
        return $this->initializercd1b3 && ($this->initializercd1b3->__invoke($valueHolder8679f, $this, 'initializeProxy', array(), $this->initializercd1b3) || 1) && $this->valueHolder8679f = $valueHolder8679f;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder8679f;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder8679f;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
