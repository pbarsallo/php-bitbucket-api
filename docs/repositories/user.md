User Repositories
=================
[Back to repositories API](../repositories.md)

#### Update a specific repository
```php
$bitbucket->repositories()->user('account')->update('repo_slug', [{params}]);
```

#### Create a new repository
```php
$bitbucket->repositories()->user('account')->create('repo_slug', [{params}]);
```

#### Get repository description
```php
$bitbucket->repositories()->user('account')->show('repo_slug');
```

#### Delete a repository (irreversibly)
```php
$bitbucket->repositories()->user('account')->remove('repo_slug');
```

#### Additional APIs
* [Branch Restrictions](user/branch_restrictions.md)
* [Branching Model](user/branching_model.md)
* [Commit](user/commit.md)
    * [Comments](user/commit/comments.md)
    * [Statuses](user/commit/statuses.md)
* [Commits](user/commits.md)
* [Components](user/components.md)
* [Default Reviewers](user/default_reviewers.md)
* [Deploy Keys](user/deploy_keys.md)
* [Diff](user/diff.md)
* [Diff Stat](user/diff_stat.md)
* [Downloads](user/downloads.md)
* [File History](user/file_history.md)
* [Forks](user/forks.md)
* [Hooks](user/hooks.md)
* [Issues](user/issues.md)
* [Milestones](user/milestones.md)
* [Patch](user/patch.md)
* [Pull Requests](user/pull_requests.md)
* [Refs](user/refs.md)
* [Src](user/src.md)
* [Versions](user/versions.md)
* [Watchers](user/watchers.md)
