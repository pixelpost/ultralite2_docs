# API

## auth.config.set

Change the auth plugin configuration.

### Request example

```json
{
	"method"  : "auth.config.set",
	"request" : 
	{
		"lifetime" : 600
	}
}
```

```xml
<?xml version="1.0" encoding="UTF-8" standalone="yes" ?>
<xml>
	<method>auth.config.set</method>
	<request>
		<lifetime>600</lifetime>
	</request>
</xml>
```

### Response example

```json
{
	"status"   : "valid",
	"response" : 
	{
		"message" : "configuration updated"
    }
}
```

```xml
<?xml version="1.0" encoding="UTF-8" standalone="yes" ?>
<xml>
	<status>valid</status>
	<response>
		<message>configuration updated</message>
	</response>
</xml>
```

### Arguments

`lifetime` is the lifetime of challenge / token
