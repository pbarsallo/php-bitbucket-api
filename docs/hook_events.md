Hook Events
===========
[Back to Table of Contents](README.md)

#### List webhook-ready resource or subject types
```php
$bitbucket->hookEvents()->all();
```

#### List valid webhook events for specified entity
```php
$bitbucket->hookEvents()->show('subject_type');
```
