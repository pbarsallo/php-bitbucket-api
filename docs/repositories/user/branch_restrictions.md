Branch Restrictions
===================
[Back to user API](../user.md)

#### Create a new branch restriction rule for repository
```php
$bitbucket->repositories()->user('account')->branchRestrictions('repo_slug')->create([{params}]);
```

#### List branch restrictions on repository
```php
$bitbucket->repositories()->user('account')->branchRestrictions('repo_slug')->all();
```

#### Update an existing branch restriction rule
```php
$bitbucket->repositories()->user('account')->branchRestrictions('repo_slug')->update('id', [{params}]);
```

#### Get specific branch restriction rule
```php
$bitbucket->repositories()->user('account')->branchRestrictions('repo_slug')->show('id');
```

#### Delete an existing branch restriction rule
```php
$bitbucket->repositories()->user('account')->branchRestrictions('repo_slug')->remove('id');
```
