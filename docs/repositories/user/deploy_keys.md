Deploy Keys
===========
[Back to user API](../user.md)

#### Create new deploy key for repository
```php
$bitbucket->repositories()->user('account')->deployKeys('repo_slug')->create([{params}]);
```

#### List deploy keys for repository
```php
$bitbucket->repositories()->user('account')->deployKeys('repo_slug')->all();
```

#### Update a deploy key
```php
$bitbucket->repositories()->user('account')->deployKeys('repo_slug')->update('key_id');
```

#### Show specifed deploy key
```php
$bitbucket->repositories()->user('account')->deployKeys('repo_slug')->show('key_id');
```

#### Delete specified deploy key
```php
$bitbucket->repositories()->user('account')->deployKeys('repo_slug')->remove('key_id');
```
