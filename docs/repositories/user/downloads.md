Downloads
=========
[Back to user API](../user.md)

#### Upload new download artifacts
```php
$bitbucket->repositories()->user('account')->downloads('repo_slug')->create([{params}]);
```

#### List all download links for repository
```php
$bitbucket->repositories()->user('account')->downloads('repo_slug')->all();
```

#### Get contents of download artifact
```php
$bitbucket->repositories()->user('account')->downloads('repo_slug')->show('filename');
```

#### Delete specified download artifact
```php
$bitbucket->repositories()->user('account')->downloads('repo_slug')->remove('filename');
```
