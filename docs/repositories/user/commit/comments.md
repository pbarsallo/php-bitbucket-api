Comments
========
[Back to commit API](../commit.md)

#### Create new comment on commit
```php
$bitbucket->repositories()->user('account')->commit('repo_slug')->comments('node')->create([{params}]);
```

#### List all comments on commit
```php
$bitbucket->repositories()->user('account')->commit('repo_slug')->comments('node')->all();
```

#### Get specified comment on commit
```php
$bitbucket->repositories()->user('account')->commit('repo_slug')->comments('node')->show('comment_id');
```
