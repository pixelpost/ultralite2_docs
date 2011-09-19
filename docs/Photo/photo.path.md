# API

## photo.path

Retrieve photo path.

### Request example

```json
{
	"method"  : "photo.path",
	"request" : 
	{
		"id"   : 123456,
		"size" : "thumb"
	}
}
```

```xml
<?xml version="1.0" encoding="UTF-8" standalone="yes" ?>
<xml>
	<method>photo.path</method>
	<request>
		<id>123456</id>
		<size>thumb</size>
	</request>
</xml>
```

### Response example

```json
{
	"status"   : "valid",
	"response" : 
	{
		"path" : "/var/www/photoblog/photos/thumb/AP3BJD4SIAZEOFFFFFMAZEKT.jpeg",
	}
}
```

```xml
<?xml version="1.0" encoding="UTF-8" standalone="yes" ?>
<xml>
	<status>valid</status>
	<response>
		<path>/var/www/photoblog/photos/thumb/AP3BJD4SIAZEOFFFFFMAZEKT.jpeg</path>
	</response>
</xml>
```

### Arguments

* __id__: The photo ID.
* __size__: possible value are `original` | `resized` | `thumb`.

> __NOTE:__   
> `resized` and `thumb` size can be known by using [[photo.size|api-photo-size]] api method.
> `original` size is always unknown
