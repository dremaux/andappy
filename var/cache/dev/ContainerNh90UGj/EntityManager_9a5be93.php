<?php

namespace ContainerNh90UGj;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder7fa91 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerb218c = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties9234a = [
        
    ];

    public function getConnection()
    {
        $this->initializerb218c && ($this->initializerb218c->__invoke($valueHolder7fa91, $this, 'getConnection', array(), $this->initializerb218c) || 1) && $this->valueHolder7fa91 = $valueHolder7fa91;

        return $this->valueHolder7fa91->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerb218c && ($this->initializerb218c->__invoke($valueHolder7fa91, $this, 'getMetadataFactory', array(), $this->initializerb218c) || 1) && $this->valueHolder7fa91 = $valueHolder7fa91;

        return $this->valueHolder7fa91->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerb218c && ($this->initializerb218c->__invoke($valueHolder7fa91, $this, 'getExpressionBuilder', array(), $this->initializerb218c) || 1) && $this->valueHolder7fa91 = $valueHolder7fa91;

        return $this->valueHolder7fa91->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerb218c && ($this->initializerb218c->__invoke($valueHolder7fa91, $this, 'beginTransaction', array(), $this->initializerb218c) || 1) && $this->valueHolder7fa91 = $valueHolder7fa91;

        return $this->valueHolder7fa91->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerb218c && ($this->initializerb218c->__invoke($valueHolder7fa91, $this, 'getCache', array(), $this->initializerb218c) || 1) && $this->valueHolder7fa91 = $valueHolder7fa91;

        return $this->valueHolder7fa91->getCache();
    }

    public function transactional($func)
    {
        $this->initializerb218c && ($this->initializerb218c->__invoke($valueHolder7fa91, $this, 'transactional', array('func' => $func), $this->initializerb218c) || 1) && $this->valueHolder7fa91 = $valueHolder7fa91;

        return $this->valueHolder7fa91->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerb218c && ($this->initializerb218c->__invoke($valueHolder7fa91, $this, 'wrapInTransaction', array('func' => $func), $this->initializerb218c) || 1) && $this->valueHolder7fa91 = $valueHolder7fa91;

        return $this->valueHolder7fa91->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerb218c && ($this->initializerb218c->__invoke($valueHolder7fa91, $this, 'commit', array(), $this->initializerb218c) || 1) && $this->valueHolder7fa91 = $valueHolder7fa91;

        return $this->valueHolder7fa91->commit();
    }

    public function rollback()
    {
        $this->initializerb218c && ($this->initializerb218c->__invoke($valueHolder7fa91, $this, 'rollback', array(), $this->initializerb218c) || 1) && $this->valueHolder7fa91 = $valueHolder7fa91;

        return $this->valueHolder7fa91->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerb218c && ($this->initializerb218c->__invoke($valueHolder7fa91, $this, 'getClassMetadata', array('className' => $className), $this->initializerb218c) || 1) && $this->valueHolder7fa91 = $valueHolder7fa91;

        return $this->valueHolder7fa91->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerb218c && ($this->initializerb218c->__invoke($valueHolder7fa91, $this, 'createQuery', array('dql' => $dql), $this->initializerb218c) || 1) && $this->valueHolder7fa91 = $valueHolder7fa91;

        return $this->valueHolder7fa91->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerb218c && ($this->initializerb218c->__invoke($valueHolder7fa91, $this, 'createNamedQuery', array('name' => $name), $this->initializerb218c) || 1) && $this->valueHolder7fa91 = $valueHolder7fa91;

        return $this->valueHolder7fa91->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerb218c && ($this->initializerb218c->__invoke($valueHolder7fa91, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerb218c) || 1) && $this->valueHolder7fa91 = $valueHolder7fa91;

        return $this->valueHolder7fa91->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerb218c && ($this->initializerb218c->__invoke($valueHolder7fa91, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerb218c) || 1) && $this->valueHolder7fa91 = $valueHolder7fa91;

        return $this->valueHolder7fa91->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerb218c && ($this->initializerb218c->__invoke($valueHolder7fa91, $this, 'createQueryBuilder', array(), $this->initializerb218c) || 1) && $this->valueHolder7fa91 = $valueHolder7fa91;

        return $this->valueHolder7fa91->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerb218c && ($this->initializerb218c->__invoke($valueHolder7fa91, $this, 'flush', array('entity' => $entity), $this->initializerb218c) || 1) && $this->valueHolder7fa91 = $valueHolder7fa91;

        return $this->valueHolder7fa91->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerb218c && ($this->initializerb218c->__invoke($valueHolder7fa91, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb218c) || 1) && $this->valueHolder7fa91 = $valueHolder7fa91;

        return $this->valueHolder7fa91->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerb218c && ($this->initializerb218c->__invoke($valueHolder7fa91, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerb218c) || 1) && $this->valueHolder7fa91 = $valueHolder7fa91;

        return $this->valueHolder7fa91->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerb218c && ($this->initializerb218c->__invoke($valueHolder7fa91, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerb218c) || 1) && $this->valueHolder7fa91 = $valueHolder7fa91;

        return $this->valueHolder7fa91->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerb218c && ($this->initializerb218c->__invoke($valueHolder7fa91, $this, 'clear', array('entityName' => $entityName), $this->initializerb218c) || 1) && $this->valueHolder7fa91 = $valueHolder7fa91;

        return $this->valueHolder7fa91->clear($entityName);
    }

    public function close()
    {
        $this->initializerb218c && ($this->initializerb218c->__invoke($valueHolder7fa91, $this, 'close', array(), $this->initializerb218c) || 1) && $this->valueHolder7fa91 = $valueHolder7fa91;

        return $this->valueHolder7fa91->close();
    }

    public function persist($entity)
    {
        $this->initializerb218c && ($this->initializerb218c->__invoke($valueHolder7fa91, $this, 'persist', array('entity' => $entity), $this->initializerb218c) || 1) && $this->valueHolder7fa91 = $valueHolder7fa91;

        return $this->valueHolder7fa91->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerb218c && ($this->initializerb218c->__invoke($valueHolder7fa91, $this, 'remove', array('entity' => $entity), $this->initializerb218c) || 1) && $this->valueHolder7fa91 = $valueHolder7fa91;

        return $this->valueHolder7fa91->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerb218c && ($this->initializerb218c->__invoke($valueHolder7fa91, $this, 'refresh', array('entity' => $entity), $this->initializerb218c) || 1) && $this->valueHolder7fa91 = $valueHolder7fa91;

        return $this->valueHolder7fa91->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerb218c && ($this->initializerb218c->__invoke($valueHolder7fa91, $this, 'detach', array('entity' => $entity), $this->initializerb218c) || 1) && $this->valueHolder7fa91 = $valueHolder7fa91;

        return $this->valueHolder7fa91->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerb218c && ($this->initializerb218c->__invoke($valueHolder7fa91, $this, 'merge', array('entity' => $entity), $this->initializerb218c) || 1) && $this->valueHolder7fa91 = $valueHolder7fa91;

        return $this->valueHolder7fa91->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerb218c && ($this->initializerb218c->__invoke($valueHolder7fa91, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerb218c) || 1) && $this->valueHolder7fa91 = $valueHolder7fa91;

        return $this->valueHolder7fa91->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerb218c && ($this->initializerb218c->__invoke($valueHolder7fa91, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb218c) || 1) && $this->valueHolder7fa91 = $valueHolder7fa91;

        return $this->valueHolder7fa91->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerb218c && ($this->initializerb218c->__invoke($valueHolder7fa91, $this, 'getRepository', array('entityName' => $entityName), $this->initializerb218c) || 1) && $this->valueHolder7fa91 = $valueHolder7fa91;

        return $this->valueHolder7fa91->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerb218c && ($this->initializerb218c->__invoke($valueHolder7fa91, $this, 'contains', array('entity' => $entity), $this->initializerb218c) || 1) && $this->valueHolder7fa91 = $valueHolder7fa91;

        return $this->valueHolder7fa91->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerb218c && ($this->initializerb218c->__invoke($valueHolder7fa91, $this, 'getEventManager', array(), $this->initializerb218c) || 1) && $this->valueHolder7fa91 = $valueHolder7fa91;

        return $this->valueHolder7fa91->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerb218c && ($this->initializerb218c->__invoke($valueHolder7fa91, $this, 'getConfiguration', array(), $this->initializerb218c) || 1) && $this->valueHolder7fa91 = $valueHolder7fa91;

        return $this->valueHolder7fa91->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerb218c && ($this->initializerb218c->__invoke($valueHolder7fa91, $this, 'isOpen', array(), $this->initializerb218c) || 1) && $this->valueHolder7fa91 = $valueHolder7fa91;

        return $this->valueHolder7fa91->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerb218c && ($this->initializerb218c->__invoke($valueHolder7fa91, $this, 'getUnitOfWork', array(), $this->initializerb218c) || 1) && $this->valueHolder7fa91 = $valueHolder7fa91;

        return $this->valueHolder7fa91->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerb218c && ($this->initializerb218c->__invoke($valueHolder7fa91, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb218c) || 1) && $this->valueHolder7fa91 = $valueHolder7fa91;

        return $this->valueHolder7fa91->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerb218c && ($this->initializerb218c->__invoke($valueHolder7fa91, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb218c) || 1) && $this->valueHolder7fa91 = $valueHolder7fa91;

        return $this->valueHolder7fa91->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerb218c && ($this->initializerb218c->__invoke($valueHolder7fa91, $this, 'getProxyFactory', array(), $this->initializerb218c) || 1) && $this->valueHolder7fa91 = $valueHolder7fa91;

        return $this->valueHolder7fa91->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerb218c && ($this->initializerb218c->__invoke($valueHolder7fa91, $this, 'initializeObject', array('obj' => $obj), $this->initializerb218c) || 1) && $this->valueHolder7fa91 = $valueHolder7fa91;

        return $this->valueHolder7fa91->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerb218c && ($this->initializerb218c->__invoke($valueHolder7fa91, $this, 'getFilters', array(), $this->initializerb218c) || 1) && $this->valueHolder7fa91 = $valueHolder7fa91;

        return $this->valueHolder7fa91->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerb218c && ($this->initializerb218c->__invoke($valueHolder7fa91, $this, 'isFiltersStateClean', array(), $this->initializerb218c) || 1) && $this->valueHolder7fa91 = $valueHolder7fa91;

        return $this->valueHolder7fa91->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerb218c && ($this->initializerb218c->__invoke($valueHolder7fa91, $this, 'hasFilters', array(), $this->initializerb218c) || 1) && $this->valueHolder7fa91 = $valueHolder7fa91;

        return $this->valueHolder7fa91->hasFilters();
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

        $instance->initializerb218c = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder7fa91) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder7fa91 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder7fa91->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerb218c && ($this->initializerb218c->__invoke($valueHolder7fa91, $this, '__get', ['name' => $name], $this->initializerb218c) || 1) && $this->valueHolder7fa91 = $valueHolder7fa91;

        if (isset(self::$publicProperties9234a[$name])) {
            return $this->valueHolder7fa91->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7fa91;

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

        $targetObject = $this->valueHolder7fa91;
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
        $this->initializerb218c && ($this->initializerb218c->__invoke($valueHolder7fa91, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerb218c) || 1) && $this->valueHolder7fa91 = $valueHolder7fa91;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7fa91;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder7fa91;
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
        $this->initializerb218c && ($this->initializerb218c->__invoke($valueHolder7fa91, $this, '__isset', array('name' => $name), $this->initializerb218c) || 1) && $this->valueHolder7fa91 = $valueHolder7fa91;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7fa91;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder7fa91;
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
        $this->initializerb218c && ($this->initializerb218c->__invoke($valueHolder7fa91, $this, '__unset', array('name' => $name), $this->initializerb218c) || 1) && $this->valueHolder7fa91 = $valueHolder7fa91;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7fa91;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder7fa91;
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
        $this->initializerb218c && ($this->initializerb218c->__invoke($valueHolder7fa91, $this, '__clone', array(), $this->initializerb218c) || 1) && $this->valueHolder7fa91 = $valueHolder7fa91;

        $this->valueHolder7fa91 = clone $this->valueHolder7fa91;
    }

    public function __sleep()
    {
        $this->initializerb218c && ($this->initializerb218c->__invoke($valueHolder7fa91, $this, '__sleep', array(), $this->initializerb218c) || 1) && $this->valueHolder7fa91 = $valueHolder7fa91;

        return array('valueHolder7fa91');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerb218c = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerb218c;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerb218c && ($this->initializerb218c->__invoke($valueHolder7fa91, $this, 'initializeProxy', array(), $this->initializerb218c) || 1) && $this->valueHolder7fa91 = $valueHolder7fa91;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder7fa91;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder7fa91;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
