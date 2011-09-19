# API

## auth.token

Valid authentification and get a token.

### Request example

```json
{
	"method"  : "auth.token",
	"request" :
	{
		"challenge" : "fa10c4d7b02a13e27a2ae5a5bbe8130b",
		"signature" : "27cee4f2a55d7cc1d03d152607199d59"
	}
}
```

```xml
<?xml version="1.0" encoding="UTF-8" standalone="yes" ?>
<xml>
	<method>auth.token</method>
	<request>
		<challenge>fa10c4d7b02a13e27a2ae5a5bbe8130b</challenge>
		<signature>27cee4f2a55d7cc1d03d152607199d59</signature>
	</refresh>
</xml>
```

### Response example

```json
{
	"status"   : "valid",
	"response" : 
	{
		"token" : "8b863651d51f3000226aa9a628df4ee8"
    }
}
```

```xml
<?xml version="1.0" encoding="UTF-8" standalone="yes" ?>
<xml>
	<status>valid</status>
	<response>
		<token>8b863651d51f3000226aa9a628df4ee8</token>
	</response>
</xml>
```

### Arguments

`challenge` the challenge provided via: [[auth.request|api-auth-request]]
`signature` the token signature

### Return Value

`token` the token
