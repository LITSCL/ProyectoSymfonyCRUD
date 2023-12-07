<?php

namespace ContainerHJTVJMa;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder85afd = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializera1c45 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiese2db3 = [
        
    ];

    public function getConnection()
    {
        $this->initializera1c45 && ($this->initializera1c45->__invoke($valueHolder85afd, $this, 'getConnection', array(), $this->initializera1c45) || 1) && $this->valueHolder85afd = $valueHolder85afd;

        return $this->valueHolder85afd->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializera1c45 && ($this->initializera1c45->__invoke($valueHolder85afd, $this, 'getMetadataFactory', array(), $this->initializera1c45) || 1) && $this->valueHolder85afd = $valueHolder85afd;

        return $this->valueHolder85afd->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializera1c45 && ($this->initializera1c45->__invoke($valueHolder85afd, $this, 'getExpressionBuilder', array(), $this->initializera1c45) || 1) && $this->valueHolder85afd = $valueHolder85afd;

        return $this->valueHolder85afd->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializera1c45 && ($this->initializera1c45->__invoke($valueHolder85afd, $this, 'beginTransaction', array(), $this->initializera1c45) || 1) && $this->valueHolder85afd = $valueHolder85afd;

        return $this->valueHolder85afd->beginTransaction();
    }

    public function getCache()
    {
        $this->initializera1c45 && ($this->initializera1c45->__invoke($valueHolder85afd, $this, 'getCache', array(), $this->initializera1c45) || 1) && $this->valueHolder85afd = $valueHolder85afd;

        return $this->valueHolder85afd->getCache();
    }

    public function transactional($func)
    {
        $this->initializera1c45 && ($this->initializera1c45->__invoke($valueHolder85afd, $this, 'transactional', array('func' => $func), $this->initializera1c45) || 1) && $this->valueHolder85afd = $valueHolder85afd;

        return $this->valueHolder85afd->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializera1c45 && ($this->initializera1c45->__invoke($valueHolder85afd, $this, 'wrapInTransaction', array('func' => $func), $this->initializera1c45) || 1) && $this->valueHolder85afd = $valueHolder85afd;

        return $this->valueHolder85afd->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializera1c45 && ($this->initializera1c45->__invoke($valueHolder85afd, $this, 'commit', array(), $this->initializera1c45) || 1) && $this->valueHolder85afd = $valueHolder85afd;

        return $this->valueHolder85afd->commit();
    }

    public function rollback()
    {
        $this->initializera1c45 && ($this->initializera1c45->__invoke($valueHolder85afd, $this, 'rollback', array(), $this->initializera1c45) || 1) && $this->valueHolder85afd = $valueHolder85afd;

        return $this->valueHolder85afd->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializera1c45 && ($this->initializera1c45->__invoke($valueHolder85afd, $this, 'getClassMetadata', array('className' => $className), $this->initializera1c45) || 1) && $this->valueHolder85afd = $valueHolder85afd;

        return $this->valueHolder85afd->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializera1c45 && ($this->initializera1c45->__invoke($valueHolder85afd, $this, 'createQuery', array('dql' => $dql), $this->initializera1c45) || 1) && $this->valueHolder85afd = $valueHolder85afd;

        return $this->valueHolder85afd->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializera1c45 && ($this->initializera1c45->__invoke($valueHolder85afd, $this, 'createNamedQuery', array('name' => $name), $this->initializera1c45) || 1) && $this->valueHolder85afd = $valueHolder85afd;

        return $this->valueHolder85afd->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializera1c45 && ($this->initializera1c45->__invoke($valueHolder85afd, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializera1c45) || 1) && $this->valueHolder85afd = $valueHolder85afd;

        return $this->valueHolder85afd->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializera1c45 && ($this->initializera1c45->__invoke($valueHolder85afd, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializera1c45) || 1) && $this->valueHolder85afd = $valueHolder85afd;

        return $this->valueHolder85afd->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializera1c45 && ($this->initializera1c45->__invoke($valueHolder85afd, $this, 'createQueryBuilder', array(), $this->initializera1c45) || 1) && $this->valueHolder85afd = $valueHolder85afd;

        return $this->valueHolder85afd->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializera1c45 && ($this->initializera1c45->__invoke($valueHolder85afd, $this, 'flush', array('entity' => $entity), $this->initializera1c45) || 1) && $this->valueHolder85afd = $valueHolder85afd;

        return $this->valueHolder85afd->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializera1c45 && ($this->initializera1c45->__invoke($valueHolder85afd, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera1c45) || 1) && $this->valueHolder85afd = $valueHolder85afd;

        return $this->valueHolder85afd->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializera1c45 && ($this->initializera1c45->__invoke($valueHolder85afd, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializera1c45) || 1) && $this->valueHolder85afd = $valueHolder85afd;

        return $this->valueHolder85afd->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializera1c45 && ($this->initializera1c45->__invoke($valueHolder85afd, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializera1c45) || 1) && $this->valueHolder85afd = $valueHolder85afd;

        return $this->valueHolder85afd->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializera1c45 && ($this->initializera1c45->__invoke($valueHolder85afd, $this, 'clear', array('entityName' => $entityName), $this->initializera1c45) || 1) && $this->valueHolder85afd = $valueHolder85afd;

        return $this->valueHolder85afd->clear($entityName);
    }

    public function close()
    {
        $this->initializera1c45 && ($this->initializera1c45->__invoke($valueHolder85afd, $this, 'close', array(), $this->initializera1c45) || 1) && $this->valueHolder85afd = $valueHolder85afd;

        return $this->valueHolder85afd->close();
    }

    public function persist($entity)
    {
        $this->initializera1c45 && ($this->initializera1c45->__invoke($valueHolder85afd, $this, 'persist', array('entity' => $entity), $this->initializera1c45) || 1) && $this->valueHolder85afd = $valueHolder85afd;

        return $this->valueHolder85afd->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializera1c45 && ($this->initializera1c45->__invoke($valueHolder85afd, $this, 'remove', array('entity' => $entity), $this->initializera1c45) || 1) && $this->valueHolder85afd = $valueHolder85afd;

        return $this->valueHolder85afd->remove($entity);
    }

    public function refresh($entity, ?int $lockMode = null)
    {
        $this->initializera1c45 && ($this->initializera1c45->__invoke($valueHolder85afd, $this, 'refresh', array('entity' => $entity, 'lockMode' => $lockMode), $this->initializera1c45) || 1) && $this->valueHolder85afd = $valueHolder85afd;

        return $this->valueHolder85afd->refresh($entity, $lockMode);
    }

    public function detach($entity)
    {
        $this->initializera1c45 && ($this->initializera1c45->__invoke($valueHolder85afd, $this, 'detach', array('entity' => $entity), $this->initializera1c45) || 1) && $this->valueHolder85afd = $valueHolder85afd;

        return $this->valueHolder85afd->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializera1c45 && ($this->initializera1c45->__invoke($valueHolder85afd, $this, 'merge', array('entity' => $entity), $this->initializera1c45) || 1) && $this->valueHolder85afd = $valueHolder85afd;

        return $this->valueHolder85afd->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializera1c45 && ($this->initializera1c45->__invoke($valueHolder85afd, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializera1c45) || 1) && $this->valueHolder85afd = $valueHolder85afd;

        return $this->valueHolder85afd->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializera1c45 && ($this->initializera1c45->__invoke($valueHolder85afd, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera1c45) || 1) && $this->valueHolder85afd = $valueHolder85afd;

        return $this->valueHolder85afd->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializera1c45 && ($this->initializera1c45->__invoke($valueHolder85afd, $this, 'getRepository', array('entityName' => $entityName), $this->initializera1c45) || 1) && $this->valueHolder85afd = $valueHolder85afd;

        return $this->valueHolder85afd->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializera1c45 && ($this->initializera1c45->__invoke($valueHolder85afd, $this, 'contains', array('entity' => $entity), $this->initializera1c45) || 1) && $this->valueHolder85afd = $valueHolder85afd;

        return $this->valueHolder85afd->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializera1c45 && ($this->initializera1c45->__invoke($valueHolder85afd, $this, 'getEventManager', array(), $this->initializera1c45) || 1) && $this->valueHolder85afd = $valueHolder85afd;

        return $this->valueHolder85afd->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializera1c45 && ($this->initializera1c45->__invoke($valueHolder85afd, $this, 'getConfiguration', array(), $this->initializera1c45) || 1) && $this->valueHolder85afd = $valueHolder85afd;

        return $this->valueHolder85afd->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializera1c45 && ($this->initializera1c45->__invoke($valueHolder85afd, $this, 'isOpen', array(), $this->initializera1c45) || 1) && $this->valueHolder85afd = $valueHolder85afd;

        return $this->valueHolder85afd->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializera1c45 && ($this->initializera1c45->__invoke($valueHolder85afd, $this, 'getUnitOfWork', array(), $this->initializera1c45) || 1) && $this->valueHolder85afd = $valueHolder85afd;

        return $this->valueHolder85afd->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializera1c45 && ($this->initializera1c45->__invoke($valueHolder85afd, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializera1c45) || 1) && $this->valueHolder85afd = $valueHolder85afd;

        return $this->valueHolder85afd->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializera1c45 && ($this->initializera1c45->__invoke($valueHolder85afd, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializera1c45) || 1) && $this->valueHolder85afd = $valueHolder85afd;

        return $this->valueHolder85afd->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializera1c45 && ($this->initializera1c45->__invoke($valueHolder85afd, $this, 'getProxyFactory', array(), $this->initializera1c45) || 1) && $this->valueHolder85afd = $valueHolder85afd;

        return $this->valueHolder85afd->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializera1c45 && ($this->initializera1c45->__invoke($valueHolder85afd, $this, 'initializeObject', array('obj' => $obj), $this->initializera1c45) || 1) && $this->valueHolder85afd = $valueHolder85afd;

        return $this->valueHolder85afd->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializera1c45 && ($this->initializera1c45->__invoke($valueHolder85afd, $this, 'getFilters', array(), $this->initializera1c45) || 1) && $this->valueHolder85afd = $valueHolder85afd;

        return $this->valueHolder85afd->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializera1c45 && ($this->initializera1c45->__invoke($valueHolder85afd, $this, 'isFiltersStateClean', array(), $this->initializera1c45) || 1) && $this->valueHolder85afd = $valueHolder85afd;

        return $this->valueHolder85afd->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializera1c45 && ($this->initializera1c45->__invoke($valueHolder85afd, $this, 'hasFilters', array(), $this->initializera1c45) || 1) && $this->valueHolder85afd = $valueHolder85afd;

        return $this->valueHolder85afd->hasFilters();
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

        $instance->initializera1c45 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, ?\Doctrine\Common\EventManager $eventManager = null)
    {
        static $reflection;

        if (! $this->valueHolder85afd) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder85afd = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder85afd->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializera1c45 && ($this->initializera1c45->__invoke($valueHolder85afd, $this, '__get', ['name' => $name], $this->initializera1c45) || 1) && $this->valueHolder85afd = $valueHolder85afd;

        if (isset(self::$publicPropertiese2db3[$name])) {
            return $this->valueHolder85afd->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder85afd;

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

        $targetObject = $this->valueHolder85afd;
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
        $this->initializera1c45 && ($this->initializera1c45->__invoke($valueHolder85afd, $this, '__set', array('name' => $name, 'value' => $value), $this->initializera1c45) || 1) && $this->valueHolder85afd = $valueHolder85afd;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder85afd;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder85afd;
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
        $this->initializera1c45 && ($this->initializera1c45->__invoke($valueHolder85afd, $this, '__isset', array('name' => $name), $this->initializera1c45) || 1) && $this->valueHolder85afd = $valueHolder85afd;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder85afd;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder85afd;
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
        $this->initializera1c45 && ($this->initializera1c45->__invoke($valueHolder85afd, $this, '__unset', array('name' => $name), $this->initializera1c45) || 1) && $this->valueHolder85afd = $valueHolder85afd;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder85afd;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder85afd;
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
        $this->initializera1c45 && ($this->initializera1c45->__invoke($valueHolder85afd, $this, '__clone', array(), $this->initializera1c45) || 1) && $this->valueHolder85afd = $valueHolder85afd;

        $this->valueHolder85afd = clone $this->valueHolder85afd;
    }

    public function __sleep()
    {
        $this->initializera1c45 && ($this->initializera1c45->__invoke($valueHolder85afd, $this, '__sleep', array(), $this->initializera1c45) || 1) && $this->valueHolder85afd = $valueHolder85afd;

        return array('valueHolder85afd');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializera1c45 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializera1c45;
    }

    public function initializeProxy() : bool
    {
        return $this->initializera1c45 && ($this->initializera1c45->__invoke($valueHolder85afd, $this, 'initializeProxy', array(), $this->initializera1c45) || 1) && $this->valueHolder85afd = $valueHolder85afd;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder85afd;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder85afd;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
