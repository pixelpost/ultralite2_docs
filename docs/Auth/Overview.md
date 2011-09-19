# Authentication

A good auth system consist in a shared trust between both party in communication.

Trust is a difficult part in web communication. Both party need to be sure of:
- Who is speaking.
- Validity of the content exchanged.
- Keep this insurance during the whole exchange.

Our protocol attempt to respond to this problem. 

## How It Works

A good auth system consist in a shared secret. Both side need to know a secret key. 
This key is classically the couple username and password. That's what will use in our protocol.

This secret don't need to take part into the communication, it's important it is never transmitted. By having this common secret key, both party can be sure they only communicate with the other.

But we need to pass to the other party, who we are, we use for that a limited in time token. This token permit to tell who we are without sending our secret, and the time limit permit to block replay attacks.

With a token you are protected against replay attacks but no against man in the middle attacks, we can listen and change incoming or outgoing messages between the both party.

Protection against man in the middle can be made with a signature. The signature insure that messages are not changed. Here it's difficult to sign messages because
Request transit by http are encoded, and decoded, so the messages can be changed in it's form without be changed in it's content. 
Actually we don't sign messages, this can be a future feature. 

## Elements you need

- __Timestamp:__ A unix GMT timestamp (number of seconds since Jan. 1st 1970).
- __Username:__ Your identifier 
- __Password:__ Your password 
- __Lifetime:__ Send by the server when you request a challenge
- __Challenge:__ Send by the server when you request a challenge
- __Request:__ The request you send (more explanation later)
- __Response:__ The response you receive (more explanation later)
- __Domain:__ The domain name used by the server auth

## Algorithm

* The secret key is called: __Secret__  
* The token key is called: __Token__
* The signature key is called: __Signature__   

We need a forth element to make things limited in time and dynamically changing along the time. We called this: Nonce

* __Nouce:__ R( Timestamp / Lifetime ) * Lifetime     
* __Secret:__ K( Username , K( Password ) , Domain )   
* __Token:__ K( Challenge , Secret , Nonce )   
* __Signature:__ K( Token , Secret , Nonce )   

> __NOTE :__    
> - R() transformation consist in returning the next highest integer value by rounding up value.   
> - K() transformation consist in returning the md5 hash in hexadecimal.   
> - Signature use Request or Response in the hash respectively in a Request or in a Response content.   

## Protocol

### STEP 1: Request a token (see: [[auth.request|api-auth-request]])

* __Request:__ Username
* __Response:__ Lifetime, Challenge

The challenge is uniq and created by the server just for this Username. Each challenge request generate a new challenge key and invalidate the older. 

### STEP 2: Valid the token (see: [[auth.request|api-auth-token]])

* __Request:__ Challenge, Signature
* __Response:__ Token

The client, after step 1, receive the challenge and generate the token key. He use the token to create the signature.  
The server, by verifing the request signature he have the insurance that the message is not modified, the client have the good password. So he can trust the client.   
The client by receinving the token and signature can check validity of them and have the insurance the server is aware about the client password and that the response is not modified. The client can trust the server.   

### STEP 3: Communication

* __Request:__ Token, Signature, Method, Request
* __Response:__ Response

#### A JSON example

```json
{
	"method"    : "photo.get",
    "token"     : "5f15896d48ad3b0b6c033d769753734a",
    "signature" : "fa10c4d7b02a13e27a2ae5a5bbe8130b",
	"request"   : 
	{
		"id"     : 123456,
		"fields" : [ "title", "description", "publish-date" ]
	}
}
```

### STEP X: Refresh an expired token (see: [[auth.request|api-auth-refresh]])

* __Request:__ Token
* __Response:__ Token, Signature

After getting a new Token, the Client can verify with the signature that's really the server who sends the new token.
