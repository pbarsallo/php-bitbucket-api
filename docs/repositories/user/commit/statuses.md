Statuses
========
[Back to commit API](../commit.md)

#### List all statuses for specified commit
```php
$bitbucket->repositories()->user('account')->commit('repo_slug')->statuses('node')->all();
```

#### Create new build status against specified commit
```php
$bitbucket->repositories()->user('account')->commit('repo_slug')->statuses('node')->build()->create([{params}]);
```

#### Update current status of a build status object on specified commit
```php
$bitbucket->repositories()->user('account')->commit('repo_slug')->statuses('node')->build()->update('key', [{params}]);
```

#### Get current status of a build status object on specified commit
```php
$bitbucket->repositories()->user('account')->commit('repo_slug')->statuses('node')->build()->show('key');
```
