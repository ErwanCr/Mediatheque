<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolder6bff5 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer7e561 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties0073a = [
        
    ];

    public function getConnection()
    {
        $this->initializer7e561 && ($this->initializer7e561->__invoke($valueHolder6bff5, $this, 'getConnection', array(), $this->initializer7e561) || 1) && $this->valueHolder6bff5 = $valueHolder6bff5;

        return $this->valueHolder6bff5->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer7e561 && ($this->initializer7e561->__invoke($valueHolder6bff5, $this, 'getMetadataFactory', array(), $this->initializer7e561) || 1) && $this->valueHolder6bff5 = $valueHolder6bff5;

        return $this->valueHolder6bff5->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer7e561 && ($this->initializer7e561->__invoke($valueHolder6bff5, $this, 'getExpressionBuilder', array(), $this->initializer7e561) || 1) && $this->valueHolder6bff5 = $valueHolder6bff5;

        return $this->valueHolder6bff5->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer7e561 && ($this->initializer7e561->__invoke($valueHolder6bff5, $this, 'beginTransaction', array(), $this->initializer7e561) || 1) && $this->valueHolder6bff5 = $valueHolder6bff5;

        return $this->valueHolder6bff5->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer7e561 && ($this->initializer7e561->__invoke($valueHolder6bff5, $this, 'getCache', array(), $this->initializer7e561) || 1) && $this->valueHolder6bff5 = $valueHolder6bff5;

        return $this->valueHolder6bff5->getCache();
    }

    public function transactional($func)
    {
        $this->initializer7e561 && ($this->initializer7e561->__invoke($valueHolder6bff5, $this, 'transactional', array('func' => $func), $this->initializer7e561) || 1) && $this->valueHolder6bff5 = $valueHolder6bff5;

        return $this->valueHolder6bff5->transactional($func);
    }

    public function commit()
    {
        $this->initializer7e561 && ($this->initializer7e561->__invoke($valueHolder6bff5, $this, 'commit', array(), $this->initializer7e561) || 1) && $this->valueHolder6bff5 = $valueHolder6bff5;

        return $this->valueHolder6bff5->commit();
    }

    public function rollback()
    {
        $this->initializer7e561 && ($this->initializer7e561->__invoke($valueHolder6bff5, $this, 'rollback', array(), $this->initializer7e561) || 1) && $this->valueHolder6bff5 = $valueHolder6bff5;

        return $this->valueHolder6bff5->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer7e561 && ($this->initializer7e561->__invoke($valueHolder6bff5, $this, 'getClassMetadata', array('className' => $className), $this->initializer7e561) || 1) && $this->valueHolder6bff5 = $valueHolder6bff5;

        return $this->valueHolder6bff5->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer7e561 && ($this->initializer7e561->__invoke($valueHolder6bff5, $this, 'createQuery', array('dql' => $dql), $this->initializer7e561) || 1) && $this->valueHolder6bff5 = $valueHolder6bff5;

        return $this->valueHolder6bff5->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer7e561 && ($this->initializer7e561->__invoke($valueHolder6bff5, $this, 'createNamedQuery', array('name' => $name), $this->initializer7e561) || 1) && $this->valueHolder6bff5 = $valueHolder6bff5;

        return $this->valueHolder6bff5->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer7e561 && ($this->initializer7e561->__invoke($valueHolder6bff5, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer7e561) || 1) && $this->valueHolder6bff5 = $valueHolder6bff5;

        return $this->valueHolder6bff5->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer7e561 && ($this->initializer7e561->__invoke($valueHolder6bff5, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer7e561) || 1) && $this->valueHolder6bff5 = $valueHolder6bff5;

        return $this->valueHolder6bff5->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer7e561 && ($this->initializer7e561->__invoke($valueHolder6bff5, $this, 'createQueryBuilder', array(), $this->initializer7e561) || 1) && $this->valueHolder6bff5 = $valueHolder6bff5;

        return $this->valueHolder6bff5->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer7e561 && ($this->initializer7e561->__invoke($valueHolder6bff5, $this, 'flush', array('entity' => $entity), $this->initializer7e561) || 1) && $this->valueHolder6bff5 = $valueHolder6bff5;

        return $this->valueHolder6bff5->flush($entity);
    }

    public function find($entityName, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer7e561 && ($this->initializer7e561->__invoke($valueHolder6bff5, $this, 'find', array('entityName' => $entityName, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer7e561) || 1) && $this->valueHolder6bff5 = $valueHolder6bff5;

        return $this->valueHolder6bff5->find($entityName, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer7e561 && ($this->initializer7e561->__invoke($valueHolder6bff5, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer7e561) || 1) && $this->valueHolder6bff5 = $valueHolder6bff5;

        return $this->valueHolder6bff5->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer7e561 && ($this->initializer7e561->__invoke($valueHolder6bff5, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer7e561) || 1) && $this->valueHolder6bff5 = $valueHolder6bff5;

        return $this->valueHolder6bff5->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer7e561 && ($this->initializer7e561->__invoke($valueHolder6bff5, $this, 'clear', array('entityName' => $entityName), $this->initializer7e561) || 1) && $this->valueHolder6bff5 = $valueHolder6bff5;

        return $this->valueHolder6bff5->clear($entityName);
    }

    public function close()
    {
        $this->initializer7e561 && ($this->initializer7e561->__invoke($valueHolder6bff5, $this, 'close', array(), $this->initializer7e561) || 1) && $this->valueHolder6bff5 = $valueHolder6bff5;

        return $this->valueHolder6bff5->close();
    }

    public function persist($entity)
    {
        $this->initializer7e561 && ($this->initializer7e561->__invoke($valueHolder6bff5, $this, 'persist', array('entity' => $entity), $this->initializer7e561) || 1) && $this->valueHolder6bff5 = $valueHolder6bff5;

        return $this->valueHolder6bff5->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer7e561 && ($this->initializer7e561->__invoke($valueHolder6bff5, $this, 'remove', array('entity' => $entity), $this->initializer7e561) || 1) && $this->valueHolder6bff5 = $valueHolder6bff5;

        return $this->valueHolder6bff5->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer7e561 && ($this->initializer7e561->__invoke($valueHolder6bff5, $this, 'refresh', array('entity' => $entity), $this->initializer7e561) || 1) && $this->valueHolder6bff5 = $valueHolder6bff5;

        return $this->valueHolder6bff5->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer7e561 && ($this->initializer7e561->__invoke($valueHolder6bff5, $this, 'detach', array('entity' => $entity), $this->initializer7e561) || 1) && $this->valueHolder6bff5 = $valueHolder6bff5;

        return $this->valueHolder6bff5->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer7e561 && ($this->initializer7e561->__invoke($valueHolder6bff5, $this, 'merge', array('entity' => $entity), $this->initializer7e561) || 1) && $this->valueHolder6bff5 = $valueHolder6bff5;

        return $this->valueHolder6bff5->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer7e561 && ($this->initializer7e561->__invoke($valueHolder6bff5, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer7e561) || 1) && $this->valueHolder6bff5 = $valueHolder6bff5;

        return $this->valueHolder6bff5->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer7e561 && ($this->initializer7e561->__invoke($valueHolder6bff5, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer7e561) || 1) && $this->valueHolder6bff5 = $valueHolder6bff5;

        return $this->valueHolder6bff5->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer7e561 && ($this->initializer7e561->__invoke($valueHolder6bff5, $this, 'getRepository', array('entityName' => $entityName), $this->initializer7e561) || 1) && $this->valueHolder6bff5 = $valueHolder6bff5;

        return $this->valueHolder6bff5->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer7e561 && ($this->initializer7e561->__invoke($valueHolder6bff5, $this, 'contains', array('entity' => $entity), $this->initializer7e561) || 1) && $this->valueHolder6bff5 = $valueHolder6bff5;

        return $this->valueHolder6bff5->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer7e561 && ($this->initializer7e561->__invoke($valueHolder6bff5, $this, 'getEventManager', array(), $this->initializer7e561) || 1) && $this->valueHolder6bff5 = $valueHolder6bff5;

        return $this->valueHolder6bff5->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer7e561 && ($this->initializer7e561->__invoke($valueHolder6bff5, $this, 'getConfiguration', array(), $this->initializer7e561) || 1) && $this->valueHolder6bff5 = $valueHolder6bff5;

        return $this->valueHolder6bff5->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer7e561 && ($this->initializer7e561->__invoke($valueHolder6bff5, $this, 'isOpen', array(), $this->initializer7e561) || 1) && $this->valueHolder6bff5 = $valueHolder6bff5;

        return $this->valueHolder6bff5->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer7e561 && ($this->initializer7e561->__invoke($valueHolder6bff5, $this, 'getUnitOfWork', array(), $this->initializer7e561) || 1) && $this->valueHolder6bff5 = $valueHolder6bff5;

        return $this->valueHolder6bff5->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer7e561 && ($this->initializer7e561->__invoke($valueHolder6bff5, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer7e561) || 1) && $this->valueHolder6bff5 = $valueHolder6bff5;

        return $this->valueHolder6bff5->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer7e561 && ($this->initializer7e561->__invoke($valueHolder6bff5, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer7e561) || 1) && $this->valueHolder6bff5 = $valueHolder6bff5;

        return $this->valueHolder6bff5->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer7e561 && ($this->initializer7e561->__invoke($valueHolder6bff5, $this, 'getProxyFactory', array(), $this->initializer7e561) || 1) && $this->valueHolder6bff5 = $valueHolder6bff5;

        return $this->valueHolder6bff5->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer7e561 && ($this->initializer7e561->__invoke($valueHolder6bff5, $this, 'initializeObject', array('obj' => $obj), $this->initializer7e561) || 1) && $this->valueHolder6bff5 = $valueHolder6bff5;

        return $this->valueHolder6bff5->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer7e561 && ($this->initializer7e561->__invoke($valueHolder6bff5, $this, 'getFilters', array(), $this->initializer7e561) || 1) && $this->valueHolder6bff5 = $valueHolder6bff5;

        return $this->valueHolder6bff5->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer7e561 && ($this->initializer7e561->__invoke($valueHolder6bff5, $this, 'isFiltersStateClean', array(), $this->initializer7e561) || 1) && $this->valueHolder6bff5 = $valueHolder6bff5;

        return $this->valueHolder6bff5->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer7e561 && ($this->initializer7e561->__invoke($valueHolder6bff5, $this, 'hasFilters', array(), $this->initializer7e561) || 1) && $this->valueHolder6bff5 = $valueHolder6bff5;

        return $this->valueHolder6bff5->hasFilters();
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
        $instance = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer7e561 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder6bff5) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder6bff5 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder6bff5->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer7e561 && ($this->initializer7e561->__invoke($valueHolder6bff5, $this, '__get', ['name' => $name], $this->initializer7e561) || 1) && $this->valueHolder6bff5 = $valueHolder6bff5;

        if (isset(self::$publicProperties0073a[$name])) {
            return $this->valueHolder6bff5->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6bff5;

            $backtrace = debug_backtrace(false);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    get_parent_class($this),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
            return;
        }

        $targetObject = $this->valueHolder6bff5;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer7e561 && ($this->initializer7e561->__invoke($valueHolder6bff5, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer7e561) || 1) && $this->valueHolder6bff5 = $valueHolder6bff5;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6bff5;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolder6bff5;
        $accessor = function & () use ($targetObject, $name, $value) {
            return $targetObject->$name = $value;
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer7e561 && ($this->initializer7e561->__invoke($valueHolder6bff5, $this, '__isset', array('name' => $name), $this->initializer7e561) || 1) && $this->valueHolder6bff5 = $valueHolder6bff5;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6bff5;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder6bff5;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer7e561 && ($this->initializer7e561->__invoke($valueHolder6bff5, $this, '__unset', array('name' => $name), $this->initializer7e561) || 1) && $this->valueHolder6bff5 = $valueHolder6bff5;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6bff5;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder6bff5;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __clone()
    {
        $this->initializer7e561 && ($this->initializer7e561->__invoke($valueHolder6bff5, $this, '__clone', array(), $this->initializer7e561) || 1) && $this->valueHolder6bff5 = $valueHolder6bff5;

        $this->valueHolder6bff5 = clone $this->valueHolder6bff5;
    }

    public function __sleep()
    {
        $this->initializer7e561 && ($this->initializer7e561->__invoke($valueHolder6bff5, $this, '__sleep', array(), $this->initializer7e561) || 1) && $this->valueHolder6bff5 = $valueHolder6bff5;

        return array('valueHolder6bff5');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer7e561 = $initializer;
    }

    public function getProxyInitializer()
    {
        return $this->initializer7e561;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer7e561 && ($this->initializer7e561->__invoke($valueHolder6bff5, $this, 'initializeProxy', array(), $this->initializer7e561) || 1) && $this->valueHolder6bff5 = $valueHolder6bff5;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder6bff5;
    }

    public function getWrappedValueHolderValue() : ?object
    {
        return $this->valueHolder6bff5;
    }


}
