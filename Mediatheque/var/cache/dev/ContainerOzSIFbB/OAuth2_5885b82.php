<?php

class OAuth2_5885b82 extends \OAuth2\OAuth2 implements \ProxyManager\Proxy\VirtualProxyInterface
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

    public function getVariable($name, $default = null)
    {
        $this->initializer7e561 && ($this->initializer7e561->__invoke($valueHolder6bff5, $this, 'getVariable', array('name' => $name, 'default' => $default), $this->initializer7e561) || 1) && $this->valueHolder6bff5 = $valueHolder6bff5;

        return $this->valueHolder6bff5->getVariable($name, $default);
    }

    public function setVariable($name, $value)
    {
        $this->initializer7e561 && ($this->initializer7e561->__invoke($valueHolder6bff5, $this, 'setVariable', array('name' => $name, 'value' => $value), $this->initializer7e561) || 1) && $this->valueHolder6bff5 = $valueHolder6bff5;

        return $this->valueHolder6bff5->setVariable($name, $value);
    }

    public function verifyAccessToken($tokenParam, $scope = null)
    {
        $this->initializer7e561 && ($this->initializer7e561->__invoke($valueHolder6bff5, $this, 'verifyAccessToken', array('tokenParam' => $tokenParam, 'scope' => $scope), $this->initializer7e561) || 1) && $this->valueHolder6bff5 = $valueHolder6bff5;

        return $this->valueHolder6bff5->verifyAccessToken($tokenParam, $scope);
    }

    public function getBearerToken(?\Symfony\Component\HttpFoundation\Request $request = null, $removeFromRequest = false)
    {
        $this->initializer7e561 && ($this->initializer7e561->__invoke($valueHolder6bff5, $this, 'getBearerToken', array('request' => $request, 'removeFromRequest' => $removeFromRequest), $this->initializer7e561) || 1) && $this->valueHolder6bff5 = $valueHolder6bff5;

        return $this->valueHolder6bff5->getBearerToken($request, $removeFromRequest);
    }

    public function grantAccessToken(?\Symfony\Component\HttpFoundation\Request $request = null)
    {
        $this->initializer7e561 && ($this->initializer7e561->__invoke($valueHolder6bff5, $this, 'grantAccessToken', array('request' => $request), $this->initializer7e561) || 1) && $this->valueHolder6bff5 = $valueHolder6bff5;

        return $this->valueHolder6bff5->grantAccessToken($request);
    }

    public function finishClientAuthorization($isAuthorized, $data = null, ?\Symfony\Component\HttpFoundation\Request $request = null, $scope = null)
    {
        $this->initializer7e561 && ($this->initializer7e561->__invoke($valueHolder6bff5, $this, 'finishClientAuthorization', array('isAuthorized' => $isAuthorized, 'data' => $data, 'request' => $request, 'scope' => $scope), $this->initializer7e561) || 1) && $this->valueHolder6bff5 = $valueHolder6bff5;

        return $this->valueHolder6bff5->finishClientAuthorization($isAuthorized, $data, $request, $scope);
    }

    public function createAccessToken(\OAuth2\Model\IOAuth2Client $client, $data, $scope = null, $access_token_lifetime = null, $issue_refresh_token = true, $refresh_token_lifetime = null)
    {
        $this->initializer7e561 && ($this->initializer7e561->__invoke($valueHolder6bff5, $this, 'createAccessToken', array('client' => $client, 'data' => $data, 'scope' => $scope, 'access_token_lifetime' => $access_token_lifetime, 'issue_refresh_token' => $issue_refresh_token, 'refresh_token_lifetime' => $refresh_token_lifetime), $this->initializer7e561) || 1) && $this->valueHolder6bff5 = $valueHolder6bff5;

        return $this->valueHolder6bff5->createAccessToken($client, $data, $scope, $access_token_lifetime, $issue_refresh_token, $refresh_token_lifetime);
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

        unset($instance->conf, $instance->storage, $instance->oldRefreshToken, $instance->usedAuthCode);

        $instance->initializer7e561 = $initializer;

        return $instance;
    }

    public function __construct(\OAuth2\IOAuth2Storage $storage, $config = [])
    {
        static $reflection;

        if (! $this->valueHolder6bff5) {
            $reflection = $reflection ?? new \ReflectionClass('OAuth2\\OAuth2');
            $this->valueHolder6bff5 = $reflection->newInstanceWithoutConstructor();
        unset($this->conf, $this->storage, $this->oldRefreshToken, $this->usedAuthCode);

        }

        $this->valueHolder6bff5->__construct($storage, $config);
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
        unset($this->conf, $this->storage, $this->oldRefreshToken, $this->usedAuthCode);
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
