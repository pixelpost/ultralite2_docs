
# API

## photo.size

Return the photo sizes configured by the photoblog user.

### Request example

```json
{
	"method"  : "photo.size",
	"request" : ""
}
```

```xml
<?xml version="1.0" encoding="UTF-8" standalone="yes" ?>
<xml>
	<method>photo.size</method>
	<request />
</xml>
```

### Response example

```json
{
	"status"   : "valid",
	"response" : 
	{
	    "resized" : 
		{ 
			"type"   : "fixed", 
			"width"  : 600, 
			"height" : 200 
		},
		"thumb" : 
		{ 
			"type" : "square", 
			"size" : 150 
		}
	}
}
```

```xml
<?xml version="1.0" encoding="UTF-8" standalone="yes" ?>
<xml>
	<status>valid</status>
	<response>
		<resized>
			<type>fixed</type>
			<width>600</width>
			<height>200</height>
		</resized>
		<thumb>
			<type>square</type>
			<size>150</size>
		</thumb>
	</response>
</xml>
```

### Arguments

No argument needed.

> __NOTE:__ Even if no argument needed in the request the field `request` still mandatory, keep it empty.

### Return Value

Always return two node `resized` and `thumd` each one contains a `type` node

`type` node can be equal to: `larger-border` | `fixed-width` | `fixed-height` | `fixed` | `square`

All `type` node are followed by a `size` node except with value `fixed`, followed by a `width` and `height` node.
