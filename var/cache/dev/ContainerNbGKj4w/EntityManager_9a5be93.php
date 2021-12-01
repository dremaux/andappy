<?php

namespace ContainerNbGKj4w;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldere2fb4 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer2b734 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties0485c = [
        
    ];

    public function getConnection()
    {
        $this->initializer2b734 && ($this->initializer2b734->__invoke($valueHoldere2fb4, $this, 'getConnection', array(), $this->initializer2b734) || 1) && $this->valueHoldere2fb4 = $valueHoldere2fb4;

        return $this->valueHoldere2fb4->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer2b734 && ($this->initializer2b734->__invoke($valueHoldere2fb4, $this, 'getMetadataFactory', array(), $this->initializer2b734) || 1) && $this->valueHoldere2fb4 = $valueHoldere2fb4;

        return $this->valueHoldere2fb4->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer2b734 && ($this->initializer2b734->__invoke($valueHoldere2fb4, $this, 'getExpressionBuilder', array(), $this->initializer2b734) || 1) && $this->valueHoldere2fb4 = $valueHoldere2fb4;

        return $this->valueHoldere2fb4->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer2b734 && ($this->initializer2b734->__invoke($valueHoldere2fb4, $this, 'beginTransaction', array(), $this->initializer2b734) || 1) && $this->valueHoldere2fb4 = $valueHoldere2fb4;

        return $this->valueHoldere2fb4->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer2b734 && ($this->initializer2b734->__invoke($valueHoldere2fb4, $this, 'getCache', array(), $this->initializer2b734) || 1) && $this->valueHoldere2fb4 = $valueHoldere2fb4;

        return $this->valueHoldere2fb4->getCache();
    }

    public function transactional($func)
    {
        $this->initializer2b734 && ($this->initializer2b734->__invoke($valueHoldere2fb4, $this, 'transactional', array('func' => $func), $this->initializer2b734) || 1) && $this->valueHoldere2fb4 = $valueHoldere2fb4;

        return $this->valueHoldere2fb4->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer2b734 && ($this->initializer2b734->__invoke($valueHoldere2fb4, $this, 'wrapInTransaction', array('func' => $func), $this->initializer2b734) || 1) && $this->valueHoldere2fb4 = $valueHoldere2fb4;

        return $this->valueHoldere2fb4->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer2b734 && ($this->initializer2b734->__invoke($valueHoldere2fb4, $this, 'commit', array(), $this->initializer2b734) || 1) && $this->valueHoldere2fb4 = $valueHoldere2fb4;

        return $this->valueHoldere2fb4->commit();
    }

    public function rollback()
    {
        $this->initializer2b734 && ($this->initializer2b734->__invoke($valueHoldere2fb4, $this, 'rollback', array(), $this->initializer2b734) || 1) && $this->valueHoldere2fb4 = $valueHoldere2fb4;

        return $this->valueHoldere2fb4->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer2b734 && ($this->initializer2b734->__invoke($valueHoldere2fb4, $this, 'getClassMetadata', array('className' => $className), $this->initializer2b734) || 1) && $this->valueHoldere2fb4 = $valueHoldere2fb4;

        return $this->valueHoldere2fb4->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer2b734 && ($this->initializer2b734->__invoke($valueHoldere2fb4, $this, 'createQuery', array('dql' => $dql), $this->initializer2b734) || 1) && $this->valueHoldere2fb4 = $valueHoldere2fb4;

        return $this->valueHoldere2fb4->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer2b734 && ($this->initializer2b734->__invoke($valueHoldere2fb4, $this, 'createNamedQuery', array('name' => $name), $this->initializer2b734) || 1) && $this->valueHoldere2fb4 = $valueHoldere2fb4;

        return $this->valueHoldere2fb4->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer2b734 && ($this->initializer2b734->__invoke($valueHoldere2fb4, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer2b734) || 1) && $this->valueHoldere2fb4 = $valueHoldere2fb4;

        return $this->valueHoldere2fb4->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer2b734 && ($this->initializer2b734->__invoke($valueHoldere2fb4, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer2b734) || 1) && $this->valueHoldere2fb4 = $valueHoldere2fb4;

        return $this->valueHoldere2fb4->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer2b734 && ($this->initializer2b734->__invoke($valueHoldere2fb4, $this, 'createQueryBuilder', array(), $this->initializer2b734) || 1) && $this->valueHoldere2fb4 = $valueHoldere2fb4;

        return $this->valueHoldere2fb4->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer2b734 && ($this->initializer2b734->__invoke($valueHoldere2fb4, $this, 'flush', array('entity' => $entity), $this->initializer2b734) || 1) && $this->valueHoldere2fb4 = $valueHoldere2fb4;

        return $this->valueHoldere2fb4->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer2b734 && ($this->initializer2b734->__invoke($valueHoldere2fb4, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer2b734) || 1) && $this->valueHoldere2fb4 = $valueHoldere2fb4;

        return $this->valueHoldere2fb4->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer2b734 && ($this->initializer2b734->__invoke($valueHoldere2fb4, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer2b734) || 1) && $this->valueHoldere2fb4 = $valueHoldere2fb4;

        return $this->valueHoldere2fb4->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer2b734 && ($this->initializer2b734->__invoke($valueHoldere2fb4, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer2b734) || 1) && $this->valueHoldere2fb4 = $valueHoldere2fb4;

        return $this->valueHoldere2fb4->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer2b734 && ($this->initializer2b734->__invoke($valueHoldere2fb4, $this, 'clear', array('entityName' => $entityName), $this->initializer2b734) || 1) && $this->valueHoldere2fb4 = $valueHoldere2fb4;

        return $this->valueHoldere2fb4->clear($entityName);
    }

    public function close()
    {
        $this->initializer2b734 && ($this->initializer2b734->__invoke($valueHoldere2fb4, $this, 'close', array(), $this->initializer2b734) || 1) && $this->valueHoldere2fb4 = $valueHoldere2fb4;

        return $this->valueHoldere2fb4->close();
    }

    public function persist($entity)
    {
        $this->initializer2b734 && ($this->initializer2b734->__invoke($valueHoldere2fb4, $this, 'persist', array('entity' => $entity), $this->initializer2b734) || 1) && $this->valueHoldere2fb4 = $valueHoldere2fb4;

        return $this->valueHoldere2fb4->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer2b734 && ($this->initializer2b734->__invoke($valueHoldere2fb4, $this, 'remove', array('entity' => $entity), $this->initializer2b734) || 1) && $this->valueHoldere2fb4 = $valueHoldere2fb4;

        return $this->valueHoldere2fb4->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer2b734 && ($this->initializer2b734->__invoke($valueHoldere2fb4, $this, 'refresh', array('entity' => $entity), $this->initializer2b734) || 1) && $this->valueHoldere2fb4 = $valueHoldere2fb4;

        return $this->valueHoldere2fb4->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer2b734 && ($this->initializer2b734->__invoke($valueHoldere2fb4, $this, 'detach', array('entity' => $entity), $this->initializer2b734) || 1) && $this->valueHoldere2fb4 = $valueHoldere2fb4;

        return $this->valueHoldere2fb4->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer2b734 && ($this->initializer2b734->__invoke($valueHoldere2fb4, $this, 'merge', array('entity' => $entity), $this->initializer2b734) || 1) && $this->valueHoldere2fb4 = $valueHoldere2fb4;

        return $this->valueHoldere2fb4->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer2b734 && ($this->initializer2b734->__invoke($valueHoldere2fb4, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer2b734) || 1) && $this->valueHoldere2fb4 = $valueHoldere2fb4;

        return $this->valueHoldere2fb4->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer2b734 && ($this->initializer2b734->__invoke($valueHoldere2fb4, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer2b734) || 1) && $this->valueHoldere2fb4 = $valueHoldere2fb4;

        return $this->valueHoldere2fb4->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer2b734 && ($this->initializer2b734->__invoke($valueHoldere2fb4, $this, 'getRepository', array('entityName' => $entityName), $this->initializer2b734) || 1) && $this->valueHoldere2fb4 = $valueHoldere2fb4;

        return $this->valueHoldere2fb4->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer2b734 && ($this->initializer2b734->__invoke($valueHoldere2fb4, $this, 'contains', array('entity' => $entity), $this->initializer2b734) || 1) && $this->valueHoldere2fb4 = $valueHoldere2fb4;

        return $this->valueHoldere2fb4->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer2b734 && ($this->initializer2b734->__invoke($valueHoldere2fb4, $this, 'getEventManager', array(), $this->initializer2b734) || 1) && $this->valueHoldere2fb4 = $valueHoldere2fb4;

        return $this->valueHoldere2fb4->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer2b734 && ($this->initializer2b734->__invoke($valueHoldere2fb4, $this, 'getConfiguration', array(), $this->initializer2b734) || 1) && $this->valueHoldere2fb4 = $valueHoldere2fb4;

        return $this->valueHoldere2fb4->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer2b734 && ($this->initializer2b734->__invoke($valueHoldere2fb4, $this, 'isOpen', array(), $this->initializer2b734) || 1) && $this->valueHoldere2fb4 = $valueHoldere2fb4;

        return $this->valueHoldere2fb4->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer2b734 && ($this->initializer2b734->__invoke($valueHoldere2fb4, $this, 'getUnitOfWork', array(), $this->initializer2b734) || 1) && $this->valueHoldere2fb4 = $valueHoldere2fb4;

        return $this->valueHoldere2fb4->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer2b734 && ($this->initializer2b734->__invoke($valueHoldere2fb4, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer2b734) || 1) && $this->valueHoldere2fb4 = $valueHoldere2fb4;

        return $this->valueHoldere2fb4->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer2b734 && ($this->initializer2b734->__invoke($valueHoldere2fb4, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer2b734) || 1) && $this->valueHoldere2fb4 = $valueHoldere2fb4;

        return $this->valueHoldere2fb4->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer2b734 && ($this->initializer2b734->__invoke($valueHoldere2fb4, $this, 'getProxyFactory', array(), $this->initializer2b734) || 1) && $this->valueHoldere2fb4 = $valueHoldere2fb4;

        return $this->valueHoldere2fb4->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer2b734 && ($this->initializer2b734->__invoke($valueHoldere2fb4, $this, 'initializeObject', array('obj' => $obj), $this->initializer2b734) || 1) && $this->valueHoldere2fb4 = $valueHoldere2fb4;

        return $this->valueHoldere2fb4->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer2b734 && ($this->initializer2b734->__invoke($valueHoldere2fb4, $this, 'getFilters', array(), $this->initializer2b734) || 1) && $this->valueHoldere2fb4 = $valueHoldere2fb4;

        return $this->valueHoldere2fb4->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer2b734 && ($this->initializer2b734->__invoke($valueHoldere2fb4, $this, 'isFiltersStateClean', array(), $this->initializer2b734) || 1) && $this->valueHoldere2fb4 = $valueHoldere2fb4;

        return $this->valueHoldere2fb4->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer2b734 && ($this->initializer2b734->__invoke($valueHoldere2fb4, $this, 'hasFilters', array(), $this->initializer2b734) || 1) && $this->valueHoldere2fb4 = $valueHoldere2fb4;

        return $this->valueHoldere2fb4->hasFilters();
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

        $instance->initializer2b734 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHoldere2fb4) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldere2fb4 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldere2fb4->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer2b734 && ($this->initializer2b734->__invoke($valueHoldere2fb4, $this, '__get', ['name' => $name], $this->initializer2b734) || 1) && $this->valueHoldere2fb4 = $valueHoldere2fb4;

        if (isset(self::$publicProperties0485c[$name])) {
            return $this->valueHoldere2fb4->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere2fb4;

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

        $targetObject = $this->valueHoldere2fb4;
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
        $this->initializer2b734 && ($this->initializer2b734->__invoke($valueHoldere2fb4, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer2b734) || 1) && $this->valueHoldere2fb4 = $valueHoldere2fb4;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere2fb4;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldere2fb4;
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
        $this->initializer2b734 && ($this->initializer2b734->__invoke($valueHoldere2fb4, $this, '__isset', array('name' => $name), $this->initializer2b734) || 1) && $this->valueHoldere2fb4 = $valueHoldere2fb4;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere2fb4;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldere2fb4;
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
        $this->initializer2b734 && ($this->initializer2b734->__invoke($valueHoldere2fb4, $this, '__unset', array('name' => $name), $this->initializer2b734) || 1) && $this->valueHoldere2fb4 = $valueHoldere2fb4;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere2fb4;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldere2fb4;
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
        $this->initializer2b734 && ($this->initializer2b734->__invoke($valueHoldere2fb4, $this, '__clone', array(), $this->initializer2b734) || 1) && $this->valueHoldere2fb4 = $valueHoldere2fb4;

        $this->valueHoldere2fb4 = clone $this->valueHoldere2fb4;
    }

    public function __sleep()
    {
        $this->initializer2b734 && ($this->initializer2b734->__invoke($valueHoldere2fb4, $this, '__sleep', array(), $this->initializer2b734) || 1) && $this->valueHoldere2fb4 = $valueHoldere2fb4;

        return array('valueHoldere2fb4');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer2b734 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer2b734;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer2b734 && ($this->initializer2b734->__invoke($valueHoldere2fb4, $this, 'initializeProxy', array(), $this->initializer2b734) || 1) && $this->valueHoldere2fb4 = $valueHoldere2fb4;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldere2fb4;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldere2fb4;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
