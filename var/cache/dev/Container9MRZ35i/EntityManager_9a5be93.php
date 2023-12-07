<?php

namespace Container9MRZ35i;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder1c487 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer49a64 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties1b086 = [
        
    ];

    public function getConnection()
    {
        $this->initializer49a64 && ($this->initializer49a64->__invoke($valueHolder1c487, $this, 'getConnection', array(), $this->initializer49a64) || 1) && $this->valueHolder1c487 = $valueHolder1c487;

        return $this->valueHolder1c487->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer49a64 && ($this->initializer49a64->__invoke($valueHolder1c487, $this, 'getMetadataFactory', array(), $this->initializer49a64) || 1) && $this->valueHolder1c487 = $valueHolder1c487;

        return $this->valueHolder1c487->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer49a64 && ($this->initializer49a64->__invoke($valueHolder1c487, $this, 'getExpressionBuilder', array(), $this->initializer49a64) || 1) && $this->valueHolder1c487 = $valueHolder1c487;

        return $this->valueHolder1c487->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer49a64 && ($this->initializer49a64->__invoke($valueHolder1c487, $this, 'beginTransaction', array(), $this->initializer49a64) || 1) && $this->valueHolder1c487 = $valueHolder1c487;

        return $this->valueHolder1c487->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer49a64 && ($this->initializer49a64->__invoke($valueHolder1c487, $this, 'getCache', array(), $this->initializer49a64) || 1) && $this->valueHolder1c487 = $valueHolder1c487;

        return $this->valueHolder1c487->getCache();
    }

    public function transactional($func)
    {
        $this->initializer49a64 && ($this->initializer49a64->__invoke($valueHolder1c487, $this, 'transactional', array('func' => $func), $this->initializer49a64) || 1) && $this->valueHolder1c487 = $valueHolder1c487;

        return $this->valueHolder1c487->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer49a64 && ($this->initializer49a64->__invoke($valueHolder1c487, $this, 'wrapInTransaction', array('func' => $func), $this->initializer49a64) || 1) && $this->valueHolder1c487 = $valueHolder1c487;

        return $this->valueHolder1c487->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer49a64 && ($this->initializer49a64->__invoke($valueHolder1c487, $this, 'commit', array(), $this->initializer49a64) || 1) && $this->valueHolder1c487 = $valueHolder1c487;

        return $this->valueHolder1c487->commit();
    }

    public function rollback()
    {
        $this->initializer49a64 && ($this->initializer49a64->__invoke($valueHolder1c487, $this, 'rollback', array(), $this->initializer49a64) || 1) && $this->valueHolder1c487 = $valueHolder1c487;

        return $this->valueHolder1c487->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer49a64 && ($this->initializer49a64->__invoke($valueHolder1c487, $this, 'getClassMetadata', array('className' => $className), $this->initializer49a64) || 1) && $this->valueHolder1c487 = $valueHolder1c487;

        return $this->valueHolder1c487->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer49a64 && ($this->initializer49a64->__invoke($valueHolder1c487, $this, 'createQuery', array('dql' => $dql), $this->initializer49a64) || 1) && $this->valueHolder1c487 = $valueHolder1c487;

        return $this->valueHolder1c487->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer49a64 && ($this->initializer49a64->__invoke($valueHolder1c487, $this, 'createNamedQuery', array('name' => $name), $this->initializer49a64) || 1) && $this->valueHolder1c487 = $valueHolder1c487;

        return $this->valueHolder1c487->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer49a64 && ($this->initializer49a64->__invoke($valueHolder1c487, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer49a64) || 1) && $this->valueHolder1c487 = $valueHolder1c487;

        return $this->valueHolder1c487->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer49a64 && ($this->initializer49a64->__invoke($valueHolder1c487, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer49a64) || 1) && $this->valueHolder1c487 = $valueHolder1c487;

        return $this->valueHolder1c487->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer49a64 && ($this->initializer49a64->__invoke($valueHolder1c487, $this, 'createQueryBuilder', array(), $this->initializer49a64) || 1) && $this->valueHolder1c487 = $valueHolder1c487;

        return $this->valueHolder1c487->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer49a64 && ($this->initializer49a64->__invoke($valueHolder1c487, $this, 'flush', array('entity' => $entity), $this->initializer49a64) || 1) && $this->valueHolder1c487 = $valueHolder1c487;

        return $this->valueHolder1c487->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer49a64 && ($this->initializer49a64->__invoke($valueHolder1c487, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer49a64) || 1) && $this->valueHolder1c487 = $valueHolder1c487;

        return $this->valueHolder1c487->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer49a64 && ($this->initializer49a64->__invoke($valueHolder1c487, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer49a64) || 1) && $this->valueHolder1c487 = $valueHolder1c487;

        return $this->valueHolder1c487->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer49a64 && ($this->initializer49a64->__invoke($valueHolder1c487, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer49a64) || 1) && $this->valueHolder1c487 = $valueHolder1c487;

        return $this->valueHolder1c487->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer49a64 && ($this->initializer49a64->__invoke($valueHolder1c487, $this, 'clear', array('entityName' => $entityName), $this->initializer49a64) || 1) && $this->valueHolder1c487 = $valueHolder1c487;

        return $this->valueHolder1c487->clear($entityName);
    }

    public function close()
    {
        $this->initializer49a64 && ($this->initializer49a64->__invoke($valueHolder1c487, $this, 'close', array(), $this->initializer49a64) || 1) && $this->valueHolder1c487 = $valueHolder1c487;

        return $this->valueHolder1c487->close();
    }

    public function persist($entity)
    {
        $this->initializer49a64 && ($this->initializer49a64->__invoke($valueHolder1c487, $this, 'persist', array('entity' => $entity), $this->initializer49a64) || 1) && $this->valueHolder1c487 = $valueHolder1c487;

        return $this->valueHolder1c487->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer49a64 && ($this->initializer49a64->__invoke($valueHolder1c487, $this, 'remove', array('entity' => $entity), $this->initializer49a64) || 1) && $this->valueHolder1c487 = $valueHolder1c487;

        return $this->valueHolder1c487->remove($entity);
    }

    public function refresh($entity, ?int $lockMode = null)
    {
        $this->initializer49a64 && ($this->initializer49a64->__invoke($valueHolder1c487, $this, 'refresh', array('entity' => $entity, 'lockMode' => $lockMode), $this->initializer49a64) || 1) && $this->valueHolder1c487 = $valueHolder1c487;

        return $this->valueHolder1c487->refresh($entity, $lockMode);
    }

    public function detach($entity)
    {
        $this->initializer49a64 && ($this->initializer49a64->__invoke($valueHolder1c487, $this, 'detach', array('entity' => $entity), $this->initializer49a64) || 1) && $this->valueHolder1c487 = $valueHolder1c487;

        return $this->valueHolder1c487->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer49a64 && ($this->initializer49a64->__invoke($valueHolder1c487, $this, 'merge', array('entity' => $entity), $this->initializer49a64) || 1) && $this->valueHolder1c487 = $valueHolder1c487;

        return $this->valueHolder1c487->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer49a64 && ($this->initializer49a64->__invoke($valueHolder1c487, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer49a64) || 1) && $this->valueHolder1c487 = $valueHolder1c487;

        return $this->valueHolder1c487->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer49a64 && ($this->initializer49a64->__invoke($valueHolder1c487, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer49a64) || 1) && $this->valueHolder1c487 = $valueHolder1c487;

        return $this->valueHolder1c487->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer49a64 && ($this->initializer49a64->__invoke($valueHolder1c487, $this, 'getRepository', array('entityName' => $entityName), $this->initializer49a64) || 1) && $this->valueHolder1c487 = $valueHolder1c487;

        return $this->valueHolder1c487->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer49a64 && ($this->initializer49a64->__invoke($valueHolder1c487, $this, 'contains', array('entity' => $entity), $this->initializer49a64) || 1) && $this->valueHolder1c487 = $valueHolder1c487;

        return $this->valueHolder1c487->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer49a64 && ($this->initializer49a64->__invoke($valueHolder1c487, $this, 'getEventManager', array(), $this->initializer49a64) || 1) && $this->valueHolder1c487 = $valueHolder1c487;

        return $this->valueHolder1c487->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer49a64 && ($this->initializer49a64->__invoke($valueHolder1c487, $this, 'getConfiguration', array(), $this->initializer49a64) || 1) && $this->valueHolder1c487 = $valueHolder1c487;

        return $this->valueHolder1c487->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer49a64 && ($this->initializer49a64->__invoke($valueHolder1c487, $this, 'isOpen', array(), $this->initializer49a64) || 1) && $this->valueHolder1c487 = $valueHolder1c487;

        return $this->valueHolder1c487->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer49a64 && ($this->initializer49a64->__invoke($valueHolder1c487, $this, 'getUnitOfWork', array(), $this->initializer49a64) || 1) && $this->valueHolder1c487 = $valueHolder1c487;

        return $this->valueHolder1c487->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer49a64 && ($this->initializer49a64->__invoke($valueHolder1c487, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer49a64) || 1) && $this->valueHolder1c487 = $valueHolder1c487;

        return $this->valueHolder1c487->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer49a64 && ($this->initializer49a64->__invoke($valueHolder1c487, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer49a64) || 1) && $this->valueHolder1c487 = $valueHolder1c487;

        return $this->valueHolder1c487->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer49a64 && ($this->initializer49a64->__invoke($valueHolder1c487, $this, 'getProxyFactory', array(), $this->initializer49a64) || 1) && $this->valueHolder1c487 = $valueHolder1c487;

        return $this->valueHolder1c487->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer49a64 && ($this->initializer49a64->__invoke($valueHolder1c487, $this, 'initializeObject', array('obj' => $obj), $this->initializer49a64) || 1) && $this->valueHolder1c487 = $valueHolder1c487;

        return $this->valueHolder1c487->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer49a64 && ($this->initializer49a64->__invoke($valueHolder1c487, $this, 'getFilters', array(), $this->initializer49a64) || 1) && $this->valueHolder1c487 = $valueHolder1c487;

        return $this->valueHolder1c487->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer49a64 && ($this->initializer49a64->__invoke($valueHolder1c487, $this, 'isFiltersStateClean', array(), $this->initializer49a64) || 1) && $this->valueHolder1c487 = $valueHolder1c487;

        return $this->valueHolder1c487->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer49a64 && ($this->initializer49a64->__invoke($valueHolder1c487, $this, 'hasFilters', array(), $this->initializer49a64) || 1) && $this->valueHolder1c487 = $valueHolder1c487;

        return $this->valueHolder1c487->hasFilters();
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

        $instance->initializer49a64 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, ?\Doctrine\Common\EventManager $eventManager = null)
    {
        static $reflection;

        if (! $this->valueHolder1c487) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder1c487 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder1c487->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer49a64 && ($this->initializer49a64->__invoke($valueHolder1c487, $this, '__get', ['name' => $name], $this->initializer49a64) || 1) && $this->valueHolder1c487 = $valueHolder1c487;

        if (isset(self::$publicProperties1b086[$name])) {
            return $this->valueHolder1c487->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1c487;

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

        $targetObject = $this->valueHolder1c487;
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
        $this->initializer49a64 && ($this->initializer49a64->__invoke($valueHolder1c487, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer49a64) || 1) && $this->valueHolder1c487 = $valueHolder1c487;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1c487;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder1c487;
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
        $this->initializer49a64 && ($this->initializer49a64->__invoke($valueHolder1c487, $this, '__isset', array('name' => $name), $this->initializer49a64) || 1) && $this->valueHolder1c487 = $valueHolder1c487;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1c487;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder1c487;
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
        $this->initializer49a64 && ($this->initializer49a64->__invoke($valueHolder1c487, $this, '__unset', array('name' => $name), $this->initializer49a64) || 1) && $this->valueHolder1c487 = $valueHolder1c487;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1c487;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder1c487;
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
        $this->initializer49a64 && ($this->initializer49a64->__invoke($valueHolder1c487, $this, '__clone', array(), $this->initializer49a64) || 1) && $this->valueHolder1c487 = $valueHolder1c487;

        $this->valueHolder1c487 = clone $this->valueHolder1c487;
    }

    public function __sleep()
    {
        $this->initializer49a64 && ($this->initializer49a64->__invoke($valueHolder1c487, $this, '__sleep', array(), $this->initializer49a64) || 1) && $this->valueHolder1c487 = $valueHolder1c487;

        return array('valueHolder1c487');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer49a64 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer49a64;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer49a64 && ($this->initializer49a64->__invoke($valueHolder1c487, $this, 'initializeProxy', array(), $this->initializer49a64) || 1) && $this->valueHolder1c487 = $valueHolder1c487;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder1c487;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder1c487;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
