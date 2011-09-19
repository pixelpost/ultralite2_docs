
# API

## photo.get

Retrieve photo data.

### Request example

```json
{
	"method"  : "photo.get",
	"request" : 
	{
		"id"     : 123456,
		"fields" : [ "title", "thumb-url", "visible" ]
	}
}
```

```xml
<?xml version="1.0" encoding="UTF-8" standalone="yes" ?>
<xml>
	<method>photo.get</method>
	<request>
		<id>123456</id>
		<fields>title</fields>
		<fields>thumb-url</fields>
		<fields>visible</fields>
	</request>
</xml>
```

### Response example

```json
{
	"status"   : "valid",
	"response" : 
	{
		"title"     : "A beautiful butterfly",
		"thumb-url" : "http://www.something.com/photoblog/photos/thumb/AP3BJD4SIAZEOFFFFFMAZEKT.jpeg",
		"visible"   : true
	}
}
```

```xml
<?xml version="1.0" encoding="UTF-8" standalone="yes" ?>
<xml>
	<status>valid</status>
	<response>
		<title>A beautiful butterfly</title>
		<thumb-url>http://www.something.com/photoblog/photos/thumb/AP3BJD4SIAZEOFFFFFMAZEKT.jpeg</thumb-url>
		<visible>1</visible>
	</response>
</xml>
```

### Arguments

* __id__: The photo ID.
* __fields__: an array of field: `id` | `filename` | `title` | `description` | `publish-date` | `visible` | `thumb-url` | `resized-url` | `original-url`.

> __NOTE:__
> `thumb-url` and `resized-url` photo size can be known by using [[photo.size|api-photo-size]] api method.
> `original-url` photo size is always unknown.

### Return values

> __NOTE:__   
> `publish-date` : follow RFC 3339    
> `visible` : returned as boolean
