<?php

namespace ContainerUrHS8zG;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder588f5 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializeradabf = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties66b32 = [
        
    ];

    public function getConnection()
    {
        $this->initializeradabf && ($this->initializeradabf->__invoke($valueHolder588f5, $this, 'getConnection', array(), $this->initializeradabf) || 1) && $this->valueHolder588f5 = $valueHolder588f5;

        return $this->valueHolder588f5->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializeradabf && ($this->initializeradabf->__invoke($valueHolder588f5, $this, 'getMetadataFactory', array(), $this->initializeradabf) || 1) && $this->valueHolder588f5 = $valueHolder588f5;

        return $this->valueHolder588f5->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializeradabf && ($this->initializeradabf->__invoke($valueHolder588f5, $this, 'getExpressionBuilder', array(), $this->initializeradabf) || 1) && $this->valueHolder588f5 = $valueHolder588f5;

        return $this->valueHolder588f5->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializeradabf && ($this->initializeradabf->__invoke($valueHolder588f5, $this, 'beginTransaction', array(), $this->initializeradabf) || 1) && $this->valueHolder588f5 = $valueHolder588f5;

        return $this->valueHolder588f5->beginTransaction();
    }

    public function getCache()
    {
        $this->initializeradabf && ($this->initializeradabf->__invoke($valueHolder588f5, $this, 'getCache', array(), $this->initializeradabf) || 1) && $this->valueHolder588f5 = $valueHolder588f5;

        return $this->valueHolder588f5->getCache();
    }

    public function transactional($func)
    {
        $this->initializeradabf && ($this->initializeradabf->__invoke($valueHolder588f5, $this, 'transactional', array('func' => $func), $this->initializeradabf) || 1) && $this->valueHolder588f5 = $valueHolder588f5;

        return $this->valueHolder588f5->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializeradabf && ($this->initializeradabf->__invoke($valueHolder588f5, $this, 'wrapInTransaction', array('func' => $func), $this->initializeradabf) || 1) && $this->valueHolder588f5 = $valueHolder588f5;

        return $this->valueHolder588f5->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializeradabf && ($this->initializeradabf->__invoke($valueHolder588f5, $this, 'commit', array(), $this->initializeradabf) || 1) && $this->valueHolder588f5 = $valueHolder588f5;

        return $this->valueHolder588f5->commit();
    }

    public function rollback()
    {
        $this->initializeradabf && ($this->initializeradabf->__invoke($valueHolder588f5, $this, 'rollback', array(), $this->initializeradabf) || 1) && $this->valueHolder588f5 = $valueHolder588f5;

        return $this->valueHolder588f5->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializeradabf && ($this->initializeradabf->__invoke($valueHolder588f5, $this, 'getClassMetadata', array('className' => $className), $this->initializeradabf) || 1) && $this->valueHolder588f5 = $valueHolder588f5;

        return $this->valueHolder588f5->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializeradabf && ($this->initializeradabf->__invoke($valueHolder588f5, $this, 'createQuery', array('dql' => $dql), $this->initializeradabf) || 1) && $this->valueHolder588f5 = $valueHolder588f5;

        return $this->valueHolder588f5->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializeradabf && ($this->initializeradabf->__invoke($valueHolder588f5, $this, 'createNamedQuery', array('name' => $name), $this->initializeradabf) || 1) && $this->valueHolder588f5 = $valueHolder588f5;

        return $this->valueHolder588f5->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializeradabf && ($this->initializeradabf->__invoke($valueHolder588f5, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializeradabf) || 1) && $this->valueHolder588f5 = $valueHolder588f5;

        return $this->valueHolder588f5->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializeradabf && ($this->initializeradabf->__invoke($valueHolder588f5, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializeradabf) || 1) && $this->valueHolder588f5 = $valueHolder588f5;

        return $this->valueHolder588f5->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializeradabf && ($this->initializeradabf->__invoke($valueHolder588f5, $this, 'createQueryBuilder', array(), $this->initializeradabf) || 1) && $this->valueHolder588f5 = $valueHolder588f5;

        return $this->valueHolder588f5->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializeradabf && ($this->initializeradabf->__invoke($valueHolder588f5, $this, 'flush', array('entity' => $entity), $this->initializeradabf) || 1) && $this->valueHolder588f5 = $valueHolder588f5;

        return $this->valueHolder588f5->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializeradabf && ($this->initializeradabf->__invoke($valueHolder588f5, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializeradabf) || 1) && $this->valueHolder588f5 = $valueHolder588f5;

        return $this->valueHolder588f5->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializeradabf && ($this->initializeradabf->__invoke($valueHolder588f5, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializeradabf) || 1) && $this->valueHolder588f5 = $valueHolder588f5;

        return $this->valueHolder588f5->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializeradabf && ($this->initializeradabf->__invoke($valueHolder588f5, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializeradabf) || 1) && $this->valueHolder588f5 = $valueHolder588f5;

        return $this->valueHolder588f5->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializeradabf && ($this->initializeradabf->__invoke($valueHolder588f5, $this, 'clear', array('entityName' => $entityName), $this->initializeradabf) || 1) && $this->valueHolder588f5 = $valueHolder588f5;

        return $this->valueHolder588f5->clear($entityName);
    }

    public function close()
    {
        $this->initializeradabf && ($this->initializeradabf->__invoke($valueHolder588f5, $this, 'close', array(), $this->initializeradabf) || 1) && $this->valueHolder588f5 = $valueHolder588f5;

        return $this->valueHolder588f5->close();
    }

    public function persist($entity)
    {
        $this->initializeradabf && ($this->initializeradabf->__invoke($valueHolder588f5, $this, 'persist', array('entity' => $entity), $this->initializeradabf) || 1) && $this->valueHolder588f5 = $valueHolder588f5;

        return $this->valueHolder588f5->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializeradabf && ($this->initializeradabf->__invoke($valueHolder588f5, $this, 'remove', array('entity' => $entity), $this->initializeradabf) || 1) && $this->valueHolder588f5 = $valueHolder588f5;

        return $this->valueHolder588f5->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializeradabf && ($this->initializeradabf->__invoke($valueHolder588f5, $this, 'refresh', array('entity' => $entity), $this->initializeradabf) || 1) && $this->valueHolder588f5 = $valueHolder588f5;

        return $this->valueHolder588f5->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializeradabf && ($this->initializeradabf->__invoke($valueHolder588f5, $this, 'detach', array('entity' => $entity), $this->initializeradabf) || 1) && $this->valueHolder588f5 = $valueHolder588f5;

        return $this->valueHolder588f5->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializeradabf && ($this->initializeradabf->__invoke($valueHolder588f5, $this, 'merge', array('entity' => $entity), $this->initializeradabf) || 1) && $this->valueHolder588f5 = $valueHolder588f5;

        return $this->valueHolder588f5->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializeradabf && ($this->initializeradabf->__invoke($valueHolder588f5, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializeradabf) || 1) && $this->valueHolder588f5 = $valueHolder588f5;

        return $this->valueHolder588f5->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializeradabf && ($this->initializeradabf->__invoke($valueHolder588f5, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializeradabf) || 1) && $this->valueHolder588f5 = $valueHolder588f5;

        return $this->valueHolder588f5->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializeradabf && ($this->initializeradabf->__invoke($valueHolder588f5, $this, 'getRepository', array('entityName' => $entityName), $this->initializeradabf) || 1) && $this->valueHolder588f5 = $valueHolder588f5;

        return $this->valueHolder588f5->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializeradabf && ($this->initializeradabf->__invoke($valueHolder588f5, $this, 'contains', array('entity' => $entity), $this->initializeradabf) || 1) && $this->valueHolder588f5 = $valueHolder588f5;

        return $this->valueHolder588f5->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializeradabf && ($this->initializeradabf->__invoke($valueHolder588f5, $this, 'getEventManager', array(), $this->initializeradabf) || 1) && $this->valueHolder588f5 = $valueHolder588f5;

        return $this->valueHolder588f5->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializeradabf && ($this->initializeradabf->__invoke($valueHolder588f5, $this, 'getConfiguration', array(), $this->initializeradabf) || 1) && $this->valueHolder588f5 = $valueHolder588f5;

        return $this->valueHolder588f5->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializeradabf && ($this->initializeradabf->__invoke($valueHolder588f5, $this, 'isOpen', array(), $this->initializeradabf) || 1) && $this->valueHolder588f5 = $valueHolder588f5;

        return $this->valueHolder588f5->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializeradabf && ($this->initializeradabf->__invoke($valueHolder588f5, $this, 'getUnitOfWork', array(), $this->initializeradabf) || 1) && $this->valueHolder588f5 = $valueHolder588f5;

        return $this->valueHolder588f5->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializeradabf && ($this->initializeradabf->__invoke($valueHolder588f5, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializeradabf) || 1) && $this->valueHolder588f5 = $valueHolder588f5;

        return $this->valueHolder588f5->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializeradabf && ($this->initializeradabf->__invoke($valueHolder588f5, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializeradabf) || 1) && $this->valueHolder588f5 = $valueHolder588f5;

        return $this->valueHolder588f5->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializeradabf && ($this->initializeradabf->__invoke($valueHolder588f5, $this, 'getProxyFactory', array(), $this->initializeradabf) || 1) && $this->valueHolder588f5 = $valueHolder588f5;

        return $this->valueHolder588f5->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializeradabf && ($this->initializeradabf->__invoke($valueHolder588f5, $this, 'initializeObject', array('obj' => $obj), $this->initializeradabf) || 1) && $this->valueHolder588f5 = $valueHolder588f5;

        return $this->valueHolder588f5->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializeradabf && ($this->initializeradabf->__invoke($valueHolder588f5, $this, 'getFilters', array(), $this->initializeradabf) || 1) && $this->valueHolder588f5 = $valueHolder588f5;

        return $this->valueHolder588f5->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializeradabf && ($this->initializeradabf->__invoke($valueHolder588f5, $this, 'isFiltersStateClean', array(), $this->initializeradabf) || 1) && $this->valueHolder588f5 = $valueHolder588f5;

        return $this->valueHolder588f5->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializeradabf && ($this->initializeradabf->__invoke($valueHolder588f5, $this, 'hasFilters', array(), $this->initializeradabf) || 1) && $this->valueHolder588f5 = $valueHolder588f5;

        return $this->valueHolder588f5->hasFilters();
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

        $instance->initializeradabf = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder588f5) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder588f5 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder588f5->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializeradabf && ($this->initializeradabf->__invoke($valueHolder588f5, $this, '__get', ['name' => $name], $this->initializeradabf) || 1) && $this->valueHolder588f5 = $valueHolder588f5;

        if (isset(self::$publicProperties66b32[$name])) {
            return $this->valueHolder588f5->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder588f5;

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

        $targetObject = $this->valueHolder588f5;
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
        $this->initializeradabf && ($this->initializeradabf->__invoke($valueHolder588f5, $this, '__set', array('name' => $name, 'value' => $value), $this->initializeradabf) || 1) && $this->valueHolder588f5 = $valueHolder588f5;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder588f5;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder588f5;
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
        $this->initializeradabf && ($this->initializeradabf->__invoke($valueHolder588f5, $this, '__isset', array('name' => $name), $this->initializeradabf) || 1) && $this->valueHolder588f5 = $valueHolder588f5;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder588f5;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder588f5;
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
        $this->initializeradabf && ($this->initializeradabf->__invoke($valueHolder588f5, $this, '__unset', array('name' => $name), $this->initializeradabf) || 1) && $this->valueHolder588f5 = $valueHolder588f5;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder588f5;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder588f5;
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
        $this->initializeradabf && ($this->initializeradabf->__invoke($valueHolder588f5, $this, '__clone', array(), $this->initializeradabf) || 1) && $this->valueHolder588f5 = $valueHolder588f5;

        $this->valueHolder588f5 = clone $this->valueHolder588f5;
    }

    public function __sleep()
    {
        $this->initializeradabf && ($this->initializeradabf->__invoke($valueHolder588f5, $this, '__sleep', array(), $this->initializeradabf) || 1) && $this->valueHolder588f5 = $valueHolder588f5;

        return array('valueHolder588f5');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializeradabf = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializeradabf;
    }

    public function initializeProxy() : bool
    {
        return $this->initializeradabf && ($this->initializeradabf->__invoke($valueHolder588f5, $this, 'initializeProxy', array(), $this->initializeradabf) || 1) && $this->valueHolder588f5 = $valueHolder588f5;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder588f5;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder588f5;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
