# API

## auth.config.get

Return the auth plugin configuration.

### Request example

```json
{
	"method"  : "auth.config.get",
	"request" : ""
}
```

```xml
<?xml version="1.0" encoding="UTF-8" standalone="yes" ?>
<xml>
	<method>auth.config.get</method>
	<request />
</xml>
```

### Response example

```json
{
	"status"   : "valid",
	"response" : 
	{
		"lifetime" : 600
    }
}
```

```xml
<?xml version="1.0" encoding="UTF-8" standalone="yes" ?>
<xml>
	<status>valid</status>
	<response>
		<lifetime>600</lifetime>
	</response>
</xml>
```

### Arguments

No argument needed.

> __NOTE:__ Even if no argument needed in the request the field `request` still mandatory, keep it empty.

### Return Value

`lifetime` is the lifetime of challenge / token
