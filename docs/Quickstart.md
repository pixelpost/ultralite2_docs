
# QuickStart Guide

You can make all is possible with the API.
API permit to communicate with it in XML format or JSON format.

Request are posted to the API url, generally `http://www.something.com/photoblog/api/`, all
request and response have same headers like explain below.

## JSON format

### Request

	{.javascript}
	{
		"method"  : "...",
		"request" : ...
	}

### Valid response

	{.javascript}
	{
		"status"   : "valid",
		"response" : ...
	}

### Error response

	{.javascript}
	{
		"status"  : "error",
		"code"    : "...",
		"message" : "..."
	}


## XML format

### Request

	{.xml}
	<?xml version="1.0" encoding="UTF-8" standalone="yes" ?>
	<xml>
		<method>...</method>
		<request>...</request>
	</xml>

### Valid response

	{.xml}
	<?xml version="1.0" encoding="UTF-8" standalone="yes" ?>
	<xml>
		<status>valid</status>
		<response>...</response>
	</xml>

### Error response

	{.xml}
	<?xml version="1.0" encoding="UTF-8" standalone="yes" ?>
	<xml>
		<status>error</status>
		<code>...</code>
		<message>...</message>
	</xml>
