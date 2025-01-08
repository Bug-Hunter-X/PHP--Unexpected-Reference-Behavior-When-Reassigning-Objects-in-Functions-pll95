The solution involves avoiding the reassignment of the object within the function.  Modify the object's properties directly instead:

```php
class MyClass {
    public $value = 0;
}

function modifyObject(MyClass &$obj) {
    $obj->value = 20; // Modify the object's property directly
}

$obj1 = new MyClass();
modifyObject($obj1);
echo $obj1->value; // Outputs 20 (correct)
```

By modifying the object's property (`$obj->value`) directly, we ensure that the changes are reflected in the original object due to the maintained reference.  This approach correctly handles the pass-by-reference semantics in PHP.