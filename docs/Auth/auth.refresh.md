# API

## auth.refresh

Request a new token.

### Request example

```json
{
	"method"  : "auth.refresh",
	"request" :
	{
		"token" : "fa10c4d7b02a13e27a2ae5a5bbe8130b"
	}
}
```

```xml
<?xml version="1.0" encoding="UTF-8" standalone="yes" ?>
<xml>
	<method>auth.refresh</method>
	<request>
		<token>fa10c4d7b02a13e27a2ae5a5bbe8130b</token>
	</refresh>
</xml>
```

### Response example

```json
{
	"status"   : "valid",
	"response" : 
	{
		"token"     : "8b863651d51f3000226aa9a628df4ee8",
		"signature" : "27cee4f2a55d7cc1d03d152607199d59"
    }
}
```

```xml
<?xml version="1.0" encoding="UTF-8" standalone="yes" ?>
<xml>
	<status>valid</status>
	<response>
		<token>8b863651d51f3000226aa9a628df4ee8</token>
		<signature>27cee4f2a55d7cc1d03d152607199d59</signature>
	</response>
</xml>
```

### Arguments

`token` the actual token

### Return Value

`token` the new token
`signature` the token signature
