
# API

## photo.version

This return the version of the photo plugin api

### Request example

```json
{
	"method"  : "photo.version",
	"request" : ""
}
```

```xml
<?xml version="1.0" encoding="UTF-8" standalone="yes" ?>
<xml>
	<method>photo.version</method>
	<request />
</xml>
```

### Response example

```json
{
	"status"   : "valid",
	"response" : { "version" : "1.0.0" }
}
```

```xml
<?xml version="1.0" encoding="UTF-8" standalone="yes" ?>
<xml>
	<status>valid</status>
	<response>
		<version>1.0.0</version>
	</response>
</xml>
```

### Arguments

No argument needed.

> __NOTE:__ Even if no argument needed in the request the field `request` still mandatory, keep it empty.
