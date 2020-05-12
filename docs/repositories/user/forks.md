Forks
=====
[Back to user API](../user.md)

#### Create a new repository fork
```php
$bitbucket->repositories()->user('account')->forks('repo_slug')->create([{params}]);
```

#### List all repository forks
```php
$bitbucket->repositories()->user('account')->forks('repo_slug')->all();
```
