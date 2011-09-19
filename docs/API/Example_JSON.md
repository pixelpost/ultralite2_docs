
# Example in JSON

## Request 

This is requesting the photo `123456` informations: `title`, `description` and `publish-date`

```json
{
	"method"  : "photo.get",
	"request" : 
	{
		"id"     : 123456,
		"fields" : [ "title", "description", "publish-date" ]
	}
}
```

## Response

The requested data are provided like this:

```json
{
	"status"   : "valid",
	"response" : 
	{
		"title"        : "My best photo",
		"description"  : "This photo was token ..."
		"publish-date" : "2011-08-24T12:33:42+01:00"
	}
}
```

## Response Error

If an error occurs like an unknow photo id:

```json
{
	"status"  : "error",
	"code"    : "no_result",
	"message" : "There is no photo corresponding to the 'id' : 123456"
}
```
