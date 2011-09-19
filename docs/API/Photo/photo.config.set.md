# API

## photo.config.set

Update the photo plugin configuration.

### Request example

```json
{
	"method"  : "photo.config.set",
	"request" : 
	{
		"directory" : "photos",
		"original"  : "original",
		"resized"   : "resized",
		"thumb"     : "thumb",
		"quality"   : "quality",
		"sizes"     : 
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
}
```

```xml
<?xml version="1.0" encoding="UTF-8" standalone="yes" ?>
<xml>
	<method>photo.config.set</method>
	<request>
		<directory>photos</directory>
		<original>original</original>
		<resized>resized</resized>
		<thumb>thumb</thumb>
		<quality>90</quality>
		<sizes>
			<resized>
				<type>fixed</type>
				<width>600</width>
				<height>200</height>
			</resized>
			<thumb>
				<type>square</type>
				<size>150</size>
			</thumb>
		</sizes>
	</request>
</xml>
```

### Response example

```json
{
	"status"   : "valid",
	"response" : { "message" : "configuration updated" }
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

`directory` is the main folder contains all photos

`original` is a sub folder of `directory` contains all original photos.

`resized` is a sub folder of `directory` contains all medium size photos.

`thumb` is a sub folder of `directory` contains all thumb size photos.

`sizes` always contains two node `resized` and `thumd` each one contains a `type` node

`type` node can be equal to: `larger-border` | `fixed-width` | `fixed-height` | `fixed` | `square`

All `type` node are followed by a `size` node except with value `fixed`, followed by a `width` and `height` node.

> __NOTE:__
> All argument node is optional    
