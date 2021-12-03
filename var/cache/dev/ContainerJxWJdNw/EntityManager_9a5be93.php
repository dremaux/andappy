<?php

namespace ContainerJxWJdNw;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder4719a = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializeraae2c = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiese12f9 = [
        
    ];

    public function getConnection()
    {
        $this->initializeraae2c && ($this->initializeraae2c->__invoke($valueHolder4719a, $this, 'getConnection', array(), $this->initializeraae2c) || 1) && $this->valueHolder4719a = $valueHolder4719a;

        return $this->valueHolder4719a->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializeraae2c && ($this->initializeraae2c->__invoke($valueHolder4719a, $this, 'getMetadataFactory', array(), $this->initializeraae2c) || 1) && $this->valueHolder4719a = $valueHolder4719a;

        return $this->valueHolder4719a->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializeraae2c && ($this->initializeraae2c->__invoke($valueHolder4719a, $this, 'getExpressionBuilder', array(), $this->initializeraae2c) || 1) && $this->valueHolder4719a = $valueHolder4719a;

        return $this->valueHolder4719a->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializeraae2c && ($this->initializeraae2c->__invoke($valueHolder4719a, $this, 'beginTransaction', array(), $this->initializeraae2c) || 1) && $this->valueHolder4719a = $valueHolder4719a;

        return $this->valueHolder4719a->beginTransaction();
    }

    public function getCache()
    {
        $this->initializeraae2c && ($this->initializeraae2c->__invoke($valueHolder4719a, $this, 'getCache', array(), $this->initializeraae2c) || 1) && $this->valueHolder4719a = $valueHolder4719a;

        return $this->valueHolder4719a->getCache();
    }

    public function transactional($func)
    {
        $this->initializeraae2c && ($this->initializeraae2c->__invoke($valueHolder4719a, $this, 'transactional', array('func' => $func), $this->initializeraae2c) || 1) && $this->valueHolder4719a = $valueHolder4719a;

        return $this->valueHolder4719a->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializeraae2c && ($this->initializeraae2c->__invoke($valueHolder4719a, $this, 'wrapInTransaction', array('func' => $func), $this->initializeraae2c) || 1) && $this->valueHolder4719a = $valueHolder4719a;

        return $this->valueHolder4719a->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializeraae2c && ($this->initializeraae2c->__invoke($valueHolder4719a, $this, 'commit', array(), $this->initializeraae2c) || 1) && $this->valueHolder4719a = $valueHolder4719a;

        return $this->valueHolder4719a->commit();
    }

    public function rollback()
    {
        $this->initializeraae2c && ($this->initializeraae2c->__invoke($valueHolder4719a, $this, 'rollback', array(), $this->initializeraae2c) || 1) && $this->valueHolder4719a = $valueHolder4719a;

        return $this->valueHolder4719a->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializeraae2c && ($this->initializeraae2c->__invoke($valueHolder4719a, $this, 'getClassMetadata', array('className' => $className), $this->initializeraae2c) || 1) && $this->valueHolder4719a = $valueHolder4719a;

        return $this->valueHolder4719a->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializeraae2c && ($this->initializeraae2c->__invoke($valueHolder4719a, $this, 'createQuery', array('dql' => $dql), $this->initializeraae2c) || 1) && $this->valueHolder4719a = $valueHolder4719a;

        return $this->valueHolder4719a->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializeraae2c && ($this->initializeraae2c->__invoke($valueHolder4719a, $this, 'createNamedQuery', array('name' => $name), $this->initializeraae2c) || 1) && $this->valueHolder4719a = $valueHolder4719a;

        return $this->valueHolder4719a->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializeraae2c && ($this->initializeraae2c->__invoke($valueHolder4719a, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializeraae2c) || 1) && $this->valueHolder4719a = $valueHolder4719a;

        return $this->valueHolder4719a->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializeraae2c && ($this->initializeraae2c->__invoke($valueHolder4719a, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializeraae2c) || 1) && $this->valueHolder4719a = $valueHolder4719a;

        return $this->valueHolder4719a->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializeraae2c && ($this->initializeraae2c->__invoke($valueHolder4719a, $this, 'createQueryBuilder', array(), $this->initializeraae2c) || 1) && $this->valueHolder4719a = $valueHolder4719a;

        return $this->valueHolder4719a->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializeraae2c && ($this->initializeraae2c->__invoke($valueHolder4719a, $this, 'flush', array('entity' => $entity), $this->initializeraae2c) || 1) && $this->valueHolder4719a = $valueHolder4719a;

        return $this->valueHolder4719a->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializeraae2c && ($this->initializeraae2c->__invoke($valueHolder4719a, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializeraae2c) || 1) && $this->valueHolder4719a = $valueHolder4719a;

        return $this->valueHolder4719a->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializeraae2c && ($this->initializeraae2c->__invoke($valueHolder4719a, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializeraae2c) || 1) && $this->valueHolder4719a = $valueHolder4719a;

        return $this->valueHolder4719a->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializeraae2c && ($this->initializeraae2c->__invoke($valueHolder4719a, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializeraae2c) || 1) && $this->valueHolder4719a = $valueHolder4719a;

        return $this->valueHolder4719a->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializeraae2c && ($this->initializeraae2c->__invoke($valueHolder4719a, $this, 'clear', array('entityName' => $entityName), $this->initializeraae2c) || 1) && $this->valueHolder4719a = $valueHolder4719a;

        return $this->valueHolder4719a->clear($entityName);
    }

    public function close()
    {
        $this->initializeraae2c && ($this->initializeraae2c->__invoke($valueHolder4719a, $this, 'close', array(), $this->initializeraae2c) || 1) && $this->valueHolder4719a = $valueHolder4719a;

        return $this->valueHolder4719a->close();
    }

    public function persist($entity)
    {
        $this->initializeraae2c && ($this->initializeraae2c->__invoke($valueHolder4719a, $this, 'persist', array('entity' => $entity), $this->initializeraae2c) || 1) && $this->valueHolder4719a = $valueHolder4719a;

        return $this->valueHolder4719a->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializeraae2c && ($this->initializeraae2c->__invoke($valueHolder4719a, $this, 'remove', array('entity' => $entity), $this->initializeraae2c) || 1) && $this->valueHolder4719a = $valueHolder4719a;

        return $this->valueHolder4719a->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializeraae2c && ($this->initializeraae2c->__invoke($valueHolder4719a, $this, 'refresh', array('entity' => $entity), $this->initializeraae2c) || 1) && $this->valueHolder4719a = $valueHolder4719a;

        return $this->valueHolder4719a->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializeraae2c && ($this->initializeraae2c->__invoke($valueHolder4719a, $this, 'detach', array('entity' => $entity), $this->initializeraae2c) || 1) && $this->valueHolder4719a = $valueHolder4719a;

        return $this->valueHolder4719a->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializeraae2c && ($this->initializeraae2c->__invoke($valueHolder4719a, $this, 'merge', array('entity' => $entity), $this->initializeraae2c) || 1) && $this->valueHolder4719a = $valueHolder4719a;

        return $this->valueHolder4719a->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializeraae2c && ($this->initializeraae2c->__invoke($valueHolder4719a, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializeraae2c) || 1) && $this->valueHolder4719a = $valueHolder4719a;

        return $this->valueHolder4719a->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializeraae2c && ($this->initializeraae2c->__invoke($valueHolder4719a, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializeraae2c) || 1) && $this->valueHolder4719a = $valueHolder4719a;

        return $this->valueHolder4719a->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializeraae2c && ($this->initializeraae2c->__invoke($valueHolder4719a, $this, 'getRepository', array('entityName' => $entityName), $this->initializeraae2c) || 1) && $this->valueHolder4719a = $valueHolder4719a;

        return $this->valueHolder4719a->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializeraae2c && ($this->initializeraae2c->__invoke($valueHolder4719a, $this, 'contains', array('entity' => $entity), $this->initializeraae2c) || 1) && $this->valueHolder4719a = $valueHolder4719a;

        return $this->valueHolder4719a->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializeraae2c && ($this->initializeraae2c->__invoke($valueHolder4719a, $this, 'getEventManager', array(), $this->initializeraae2c) || 1) && $this->valueHolder4719a = $valueHolder4719a;

        return $this->valueHolder4719a->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializeraae2c && ($this->initializeraae2c->__invoke($valueHolder4719a, $this, 'getConfiguration', array(), $this->initializeraae2c) || 1) && $this->valueHolder4719a = $valueHolder4719a;

        return $this->valueHolder4719a->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializeraae2c && ($this->initializeraae2c->__invoke($valueHolder4719a, $this, 'isOpen', array(), $this->initializeraae2c) || 1) && $this->valueHolder4719a = $valueHolder4719a;

        return $this->valueHolder4719a->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializeraae2c && ($this->initializeraae2c->__invoke($valueHolder4719a, $this, 'getUnitOfWork', array(), $this->initializeraae2c) || 1) && $this->valueHolder4719a = $valueHolder4719a;

        return $this->valueHolder4719a->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializeraae2c && ($this->initializeraae2c->__invoke($valueHolder4719a, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializeraae2c) || 1) && $this->valueHolder4719a = $valueHolder4719a;

        return $this->valueHolder4719a->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializeraae2c && ($this->initializeraae2c->__invoke($valueHolder4719a, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializeraae2c) || 1) && $this->valueHolder4719a = $valueHolder4719a;

        return $this->valueHolder4719a->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializeraae2c && ($this->initializeraae2c->__invoke($valueHolder4719a, $this, 'getProxyFactory', array(), $this->initializeraae2c) || 1) && $this->valueHolder4719a = $valueHolder4719a;

        return $this->valueHolder4719a->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializeraae2c && ($this->initializeraae2c->__invoke($valueHolder4719a, $this, 'initializeObject', array('obj' => $obj), $this->initializeraae2c) || 1) && $this->valueHolder4719a = $valueHolder4719a;

        return $this->valueHolder4719a->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializeraae2c && ($this->initializeraae2c->__invoke($valueHolder4719a, $this, 'getFilters', array(), $this->initializeraae2c) || 1) && $this->valueHolder4719a = $valueHolder4719a;

        return $this->valueHolder4719a->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializeraae2c && ($this->initializeraae2c->__invoke($valueHolder4719a, $this, 'isFiltersStateClean', array(), $this->initializeraae2c) || 1) && $this->valueHolder4719a = $valueHolder4719a;

        return $this->valueHolder4719a->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializeraae2c && ($this->initializeraae2c->__invoke($valueHolder4719a, $this, 'hasFilters', array(), $this->initializeraae2c) || 1) && $this->valueHolder4719a = $valueHolder4719a;

        return $this->valueHolder4719a->hasFilters();
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

        $instance->initializeraae2c = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder4719a) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder4719a = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder4719a->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializeraae2c && ($this->initializeraae2c->__invoke($valueHolder4719a, $this, '__get', ['name' => $name], $this->initializeraae2c) || 1) && $this->valueHolder4719a = $valueHolder4719a;

        if (isset(self::$publicPropertiese12f9[$name])) {
            return $this->valueHolder4719a->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4719a;

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

        $targetObject = $this->valueHolder4719a;
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
        $this->initializeraae2c && ($this->initializeraae2c->__invoke($valueHolder4719a, $this, '__set', array('name' => $name, 'value' => $value), $this->initializeraae2c) || 1) && $this->valueHolder4719a = $valueHolder4719a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4719a;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder4719a;
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
        $this->initializeraae2c && ($this->initializeraae2c->__invoke($valueHolder4719a, $this, '__isset', array('name' => $name), $this->initializeraae2c) || 1) && $this->valueHolder4719a = $valueHolder4719a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4719a;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder4719a;
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
        $this->initializeraae2c && ($this->initializeraae2c->__invoke($valueHolder4719a, $this, '__unset', array('name' => $name), $this->initializeraae2c) || 1) && $this->valueHolder4719a = $valueHolder4719a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4719a;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder4719a;
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
        $this->initializeraae2c && ($this->initializeraae2c->__invoke($valueHolder4719a, $this, '__clone', array(), $this->initializeraae2c) || 1) && $this->valueHolder4719a = $valueHolder4719a;

        $this->valueHolder4719a = clone $this->valueHolder4719a;
    }

    public function __sleep()
    {
        $this->initializeraae2c && ($this->initializeraae2c->__invoke($valueHolder4719a, $this, '__sleep', array(), $this->initializeraae2c) || 1) && $this->valueHolder4719a = $valueHolder4719a;

        return array('valueHolder4719a');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializeraae2c = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializeraae2c;
    }

    public function initializeProxy() : bool
    {
        return $this->initializeraae2c && ($this->initializeraae2c->__invoke($valueHolder4719a, $this, 'initializeProxy', array(), $this->initializeraae2c) || 1) && $this->valueHolder4719a = $valueHolder4719a;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder4719a;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder4719a;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
