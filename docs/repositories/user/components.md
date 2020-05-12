Components
==========
[Back to user API](../user.md)

#### List components defined in issue tracker
```php
$bitbucket->repositories()->user('account')->components('repo_slug')->all();
```

#### Get specified component defined in issue tracker
```php
$bitbucket->repositories()->user('account')->components('repo_slug')->show('component_id');
```
