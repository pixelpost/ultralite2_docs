
# API

## photo.del

Delete a photo.

### Request example

```json
{
	"method"  : "photo.del",
	"request" : { "id" : 123456 }
}
```

```xml
<?xml version="1.0" encoding="UTF-8" standalone="yes" ?>
<xml>
	<method>photo.del</method>
	<request>
		<id>123456</id>
	</request>
</xml>
```

### Response example

```json
{
	"status"   : "valid",
	"response" : { "message" : "photo deleted" }
}
```

```xml
<?xml version="1.0" encoding="UTF-8" standalone="yes" ?>
<xml>
	<status>valid</status>
	<response>
		<message>photo deleted</message>
	</response>
</xml>
```

### Arguments

* __id__: The photo ID.
