File History
============
[Back to user API](../user.md)

#### Get list of commits that modified the specified file
```php
$bitbucket->repositories()->user('account')->fileHistory('repo_slug')->show('node', 'path');
```
