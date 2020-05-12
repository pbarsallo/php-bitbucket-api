Commit
======
[Back to user API](../user.md)

#### Get specified commit
```php
$bitbucket->repositories()->user('account')->commit('repo_slug')->show('node');
```

#### Approve specified commit
```php
$bitbucket->repositories()->user('account')->commit('repo_slug')->approve('node');
```

#### Redact commit approval
```php
$bitbucket->repositories()->user('account')->commit('repo_slug')->redactApproval('node');
```

#### Additional APIs
* [Comments](commit/comments.md)
* [Statuses](commit/statuses.md)
