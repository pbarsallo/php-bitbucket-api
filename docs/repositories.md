Repositories
============
[Back to Table of Contents](README.md)

#### List public repositories
```php
$bitbucket->repositories()->all();
```

#### List repositories owned by specific user
```php
$bitbucket->repositories()->show('account');
```

#### Additional APIs
* [User](repositories/user.md)
    * [Commit](repositories/user/commit.md)
        * [Comments](repositories/user/commit/comments.md)
        * [Statuses](repositories/user/commit/statuses.md)
* [Workspace](repositories/workspace.md)
