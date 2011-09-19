
# API

## photo.add

Add a new photo in database.

### Request example

```json
{
	"method"  : "photo.add",
	"request" : { "file" : "/tmp/tempname-TzE24hLRdf5K.jpg" }
}
```

```xml
<?xml version="1.0" encoding="UTF-8" standalone="yes" ?>
<xml>
	<method>photo.add</method>
	<request>
		<file>/tmp/tempname-TzE24hLRdf5K.jpg</file>
	</request>
</xml>
```

### Response example

```json
{
	"status"   : "valid",
	"response" : { "id" : 123456 }
}
```

```xml
<?xml version="1.0" encoding="UTF-8" standalone="yes" ?>
<xml>
	<status>valid</status>
	<response>
		<id>123456</id>
	</response>
</xml>
```

### Arguments

* __file__: The photo Filename on the local storage.

> __NOTE:__
> The file `file` will be moved on its final directory. 
