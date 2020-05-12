Commits
=======
[Back to user API](../user.md)

#### List commits with additional parameters applied
```php
$bitbucket->repositories()->user('account')->commits('repo_slug')->listWithAdditionalParameters([{params}]);
```

#### List all repository commits
```php
$bitbucket->repositories()->user('account')->commits('repo_slug')->all();
```

#### Get commit revision with additional parameters
```php
$bitbucket->repositories()->user('account')->commits('repo_slug')->getRevisionWithAdditionalParameters('revision', [{$params}]);
```

#### Get specific revision
```php
$bitbucket->repositories()->user('account')->commits('repo_slug')->getRevision('revision');
```