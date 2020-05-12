Issues
======
[Back to user API](../user.md)

#### Create a new issue in issue tracker
```php
$bitbucket->repositories()->user('account')->issues('repo_slug')->create({params});
```

#### List all issues from issue tracker
```php
$bitbucket->repositories()->user('account')->issues('repo_slug')->all();
```

#### Modify an issue from issue tracker
```php
$bitbucket->repositories()->user('account')->issues('repo_slug')->update('issue_id');
```

#### Get specified issue from issue tracker
```php
$bitbucket->repositories()->user('account')->issues('repo_slug')->show('issue_id');
```

#### Delete specified issue from issue tracker
```php
$bitbucket->repositories()->user('account')->issues('repo_slug')->remove('issue_id');
```

#### Additional APIs
* [](Export)
* [](Import)
* [](Issue)
