<?php
class MyClass {
    public $property = "Hello";

    public function myMethod() {
        echo $this->property;
    }
}

$obj = new MyClass();
$obj->myMethod(); // 输出 "Hello"

class ParentClass {
  public function sayHello() {
      echo "Hello from ParentClass";
  }
}

class ChildClass extends ParentClass {
  public function sayHello() {
      echo "Hello from ChildClass";
  }
}

$obj = new ChildClass();
$obj->sayHello(); // 输出 "Hello from ChildClass"