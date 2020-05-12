Default Reviewers
=================
[Back to user API](../user.md)

#### Get repository's default reviewers
```php
$bitbucket->repositories()->user('account')->defaultReviewers('repo_slug')->all();
```

#### Add user to default reviewer list
```php
$bitbucket->repositories()->user('account')->defaultReviewers('repo_slug')->add('account');
```

#### Get specific default reviewer
```php
$bitbucket->repositories()->user('account')->defaultReviewers('repo_slug')->show('account');
```

#### Remove user from default reviewer list
```php
$bitbucket->repositories()->user('account')->defaultReviewers('repo_slug')->remove('account');
```
