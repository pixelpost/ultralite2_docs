# API

## photo.list

Retrieve photo list.

### Request example

```json
{
	"method"  : "photo.list",
	"request" : 
	{
		"fields" : [ "id", "title", "publish-date", "thumb-url" ],
		"pager"  :
		{
			"page"         : 1,
			"max-per-page" : 10
		},
		"sort"   : 
		{ 
			"publish-date" : "desc", 
			"title"        : "asc" 
		},
		"filter" :
		{
			"visible"               : true,
			"publish-date-interval" :
			{
				"start" : "2011-05-01T00:00:00+00:00",
				"end"   : "2011-05-31T23:59:59+00:00"  
			}
		}
	}
}
```

```xml
<?xml version="1.0" encoding="UTF-8" standalone="yes" ?>
<xml>
	<method>photo.list</method>
	<request>
		<fields>id</fields>
		<fields>title</fields>
		<fields>publish-date</fields>
		<fields>thumb-url</fields>
		<pager>
			<page>1</page>
			<max-per-page>10</max-per-page>
		</pager>
		<sort>
			<publish-date>desc</publish-date>
			<title>asc</title>
		</sort>
		<filter>
			<visible>true</visible>
			<publish-date-interval>
				<start>2011-05-01T00:00:00+00:00</start>
				<end>2011-05-31T23:59:59+00:00</end>
			</publish-date-interval>
		</filter>
	</request>
</xml>
```

### Response example

```json
{
	"status"   : "valid",
	"response" :
	{
		"photo" :
		[
			{ 
				"id"          : 12, 
				"title"       : "A butterfly", 
				"publish-date": "2011-05-03T16:38:12+00:00", 
				"thumb-url"   : "http://something.com/photos/thumb/kGj123.jpeg" 
			},
			{ 
				"id"          : 23, 
				"title"       : "Daddy Portrait", 
				"publish-date": "2011-05-12T09:12:54+00:00", 
				"thumb-url"   : "http://something.com/photos/thumb/ACv3hI.jpeg" 
			}
		]
	}
}
```

```xml
<?xml version="1.0" encoding="UTF-8" standalone="yes" ?>
<xml>
	<status>valid</status>
	<response>
		<photo>
			<id>12</id>
			<title>A butterfly</title>
			<publish-date>2011-05-03T16:38:12+00:00</publish-date>
			<thumb-url>http://something.com/photos/thumb/kGj123.jpeg</thumb-url>
		</photo>
		<photo>
			<id>23</id>
			<title>Daddy Portrait</title>
			<publish-date>2011-05-12T09:12:54+00:00</publish-date>
			<thumb-url>http://something.com/photos/thumb/ACv3hI.jpeg</thumb-url>
		</photo>
	</response>
</xml>
```

### Arguments

* __id__: The photo ID.
* __fields__: an array of field: `id` | `filename` | `title` | `description` | `publish-date` | `visible` | `thumb-url` | `resized-url` | `original-url`.
* __[pager]__: `page` and `max-per-page` is mandatory.
* __[sort]__: associated array; values can be `asc` or `desc` and indexes: `id` | `filename` | `title` | `description` | `publish-date` | `visible`.
* __[filter]__: filters options are `visible` a boolean value and `publish-date-interval` an associated array with two index `start` and `end`.

> __NOTE:__
> `thumb-url` and `resized-url` photo size can be known by using [[photo.size|api-photo-size]] api method.
> `original-url` photo size is always unknown.

### Return values

> __NOTE:__   
> `publish-date` : follow RFC 3339    
> `visible` : returned as boolean
