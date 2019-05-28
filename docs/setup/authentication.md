Authentication
==============
[Back to Basic Setup](../setup.md)

#### HTTP Basic Authentication
```php
$httpClient = new \Bitbucket\Http\BasicAuthClient('username', 'password');
```

#### OAuth 2.0
```php
$httpClient = new \Bitbucket\Http\OauthClient('oauth_token');
```

#### Bitbucket Connect JWT Authentication
```php
$httpClient = new \Bitbucket\Http\JwtAuthClient('integration_key', 'client_key', 'shared_secret');
```
