Branching Model
===============
[Back to user API](../user.md)

#### Get branching model as applied to repository
```php
$bitbucket->repositories()->user('account')->branchingModel('repo_slug')->show();
```

#### Update branching model configuration
```php
$bitbucket->repositories()->user('account')->branchingModel('repo_slug')->settings()->update([{params}]);
```
#### Update branching model configuration
```php
$bitbucket->repositories()->user('account')->branchingModel('repo_slug')->settings()->all();
```
