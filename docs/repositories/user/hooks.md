Hooks
=====
[Back to user API](../user.md)

#### Create a new webhook for repository
```php
$bitbucket->repositories()->user('account')->hooks('repo_slug')->create([{params}]);
```

#### List all webhooks for repository
```php
$bitbucket->repositories()->user('account')->hooks('repo_slug')->all();
```

#### Update a webhook for repository
```php
$bitbucket->repositories()->user('account')->hooks('repo_slug')->update([{params}]);
```

#### Get specified webhook for repository
```php
$bitbucket->repositories()->user('account')->hooks('repo_slug')->show('uid');
```

#### Delete specified webhook for repository
```php
$bitbucket->repositories()->user('account')->hooks('repo_slug')->remove('uid');
```
