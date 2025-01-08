In PHP, a common yet subtle error arises when dealing with references and objects.  Consider this scenario:

```php
class MyClass {
    public $value = 0;
}

$obj1 = new MyClass();
$obj2 = &$obj1; // $obj2 is now a reference to $obj1

$obj2->value = 10;

echo $obj1->value; // Outputs 10
```

This works as expected. However, unexpected behavior emerges when using references within functions or methods that modify objects:

```php
function modifyObject(MyClass &$obj) {
    $obj = new MyClass(); // Creates a *new* object
    $obj->value = 20;
}

modifyObject($obj1);
echo $obj1->value; // Outputs 0 (surprisingly)
```

The problem: Inside `modifyObject`, assigning a new object to `$obj` doesn't modify the original object referenced by `$obj1`.  Instead, it breaks the reference, making `$obj` point to a completely new object. The original `$obj1` remains untouched. This is a common mistake when expecting pass-by-reference to behave differently than it actually does.