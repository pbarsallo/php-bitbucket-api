Add-On Linker Values
====================
[Back to linkers API](../linkers.md)

#### Edit linker values
```php
$bitbucket->addon()->linkers()->values('linker_key')->update([{params}]);
```

#### Add linker values
```php
$bitbucket->addon()->linkers()->values('linker_key')->create([{params}]);
```

#### List all linker values
```php
$bitbucket->addon()->linkers()->values('linker_key')->all();
```

#### Remove linker values
```php
$bitbucket->addon()->linkers()->values('linker_key')->remove();
```
