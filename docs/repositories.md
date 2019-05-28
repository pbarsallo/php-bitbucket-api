Repositories
============
[Back to Table of Contents](README.md)

#### List public repositories
```php
$bitbucket->repositories()->all();
```

#### List repositories owned by specific user
```php
$bitbucket->repositories()->show('user_name');
```

#### Additional APIs
* [User](repositories/user.md)
* [Workspace](repositories/workspace.md)
