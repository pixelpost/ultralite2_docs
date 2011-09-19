# API

## photo.set

Update photo data.

### Request example

```json
{
	"method"  : "photo.set",
	"request" : 
	{
		"id"     : 123456,
		"fields" : 
		{
			"title"        : "My new photo name",
			"description"  : "My new photo description",
			"publish-date" : "2010-05-13T19:03:48+02:00"
		}
	}
}
```

```xml
<?xml version="1.0" encoding="UTF-8" standalone="yes" ?>
<xml>
	<method>photo.set</method>
	<request>
		<id>123456</id>
		<fields>
			<title>My new photo name</title>
			<description>My new photo description</description>
			<publish-date>2010-05-13T19:03:48+02:00</publish-date>
		</fields>
	</request>
</xml>
```

### Response example

```json
{
	"status"   : "valid",
	"response" : { "message" : "photo updated" }
}
```

```xml
<?xml version="1.0" encoding="UTF-8" standalone="yes" ?>
<xml>
	<status>valid</status>
	<response>
		<message>photo updated</message>
	</response>
</xml>
```

### Arguments

* __id__: The photo ID.
* __fields__: an array of field: `title` | `description` | `publish-date` | `visible`.

> __NOTE:__
> `publish-date` : follow RFC 3339    
> `visible` : is a boolean (use `true` | `false` for JSON and `0` | `1` for XML).
