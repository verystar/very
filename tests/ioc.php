<?php

/**
 * Created by PhpStorm.
 * User: 蔡旭东 caixudong@verystar.cn
 * Date: 10/03/2017 2:52 PM
 */
class IndexController
{
    public function __construct(User $user, Order $order)
    {
        echo 'I am IndexController' . PHP_EOL;
        $user->foo();
        $order->foo();
    }

    public function testAction(Order $order)
    {
        $order->foo();
    }
}


class User
{
    public function foo()
    {
        echo 'i am user foo' . PHP_EOL;
    }
}

class Order
{
    public function foo()
    {
        echo 'i am order foo' . PHP_EOL;
    }
}





function make($className)
{
    $reflector    = new ReflectionClass($className);
    $dependencies = $reflector->getConstructor()->getParameters();

//    var_dump($dependencies);
//    exit;

    $results = [];

    foreach ($dependencies as $dependency) {
        $class     = $dependency->getClass();
        $results[] = new $class->name;
    }

    //var_dump($results);
    //exit;

    return $reflector->newInstanceArgs($results);
}


$instance = make('IndexController');
var_dump($instance);

$action    = 'testAction';
$reflector = new \ReflectionMethod($instance, $action);
$parameters = [];
foreach ($reflector->getParameters() as $key => $parameter) {
    $class = $parameter->getClass();
    $parameters[] = new $class->name;
}

call_user_func_array([$instance, $action], $parameters);
