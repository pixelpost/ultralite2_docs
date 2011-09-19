# Example in XML

## Request

This is requesting the photo `123456` informations: `title`, `description` and `publish-date`

```xml
<?xml version="1.0" encoding="UTF-8" standalone="yes" ?>
<xml>
	<method>photo.get</method>
	<request>
		<id>123456</id>
		<fields>title</fields>
		<fields>description</fields>
		<fields>publish-date</fields>
	</request>
</xml>
```

## Response

The requested data are provided like this:

```xml
<?xml version="1.0" encoding="UTF-8" standalone="yes" ?>
<xml>
	<status>valid</status> 
	<response>
		<title>My best photo</title>
		<description>This photo was token ...</description>
		<publish-date>2011-08-24T12:33:42+01:00</publish-date>
	</response>
</xml>
```
    
## Response Error

If an error occurs like an unknow photo id:

```xml
<?xml version="1.0" encoding="UTF-8" standalone="yes" ?>
<xml>
	<status>error</status>
	<code>no_result</code>
	<message>There is no photo corresponding to the 'id' : 123456</message>
</xml>
```
