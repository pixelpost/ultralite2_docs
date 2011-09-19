# API

## auth.request

Request for a authentification token.

### Request example

```json
{
	"method"  : "auth.request",
	"request" :
	{
		"username" : "guest"
	}
}
```

```xml
<?xml version="1.0" encoding="UTF-8" standalone="yes" ?>
<xml>
	<method>auth.token</method>
	<request>
		<username>guest</username>
	</refresh>
</xml>
```

### Response example

```json
{
	"status"   : "valid",
	"response" : 
	{
		"lifetime"  : 600,
		"challenge" : "8b863651d51f3000226aa9a628df4ee8"
    }
}
```

```xml
<?xml version="1.0" encoding="UTF-8" standalone="yes" ?>
<xml>
	<status>valid</status>
	<response>
		<lifetime>600</lifetime>
		<token>8b863651d51f3000226aa9a628df4ee8</token>
	</response>
</xml>
```

### Arguments

`username` the user name

### Return Value

`lifetime` the challenge and token lifetime
`challenge` the challenge
