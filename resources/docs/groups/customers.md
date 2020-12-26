# Customers

APIs for managing users

## Create Customer Record

<small class="badge badge-darkred">requires authentication</small>

This endpoint allows you to create customer

> Example request:

```bash
curl -X POST \
    "http://localhost/api/v1/customers/register?api_token=%7BYOUR_AUTH_KEY%7D" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Api-Version: v1" \
    -d '{"username":"placeat","fullname":"ea","mobile":1323741.40689,"email":"eum","password":"qui"}'

```

```javascript
const url = new URL(
    "http://localhost/api/v1/customers/register"
);

let params = {
    "api_token": "{YOUR_AUTH_KEY}",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Version": "v1",
};

let body = {
    "username": "placeat",
    "fullname": "ea",
    "mobile": 1323741.40689,
    "email": "eum",
    "password": "qui"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


> Example response (200):

```json
{
    "success": true,
    "response": {
        "username": "flamezbaba",
        "fullname": "sangosanya segun",
        "email": "flamezbaba@gmail.com",
        "mobile": "08093894657",
        "created_at": "2020-12-26 08:21:17",
        "updated_at": "2020-12-26 08:21:17"
    }
}
```
<div id="execution-results-POSTapi-v1-customers-register" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-v1-customers-register"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-customers-register"></code></pre>
</div>
<div id="execution-error-POSTapi-v1-customers-register" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-customers-register"></code></pre>
</div>
<form id="form-POSTapi-v1-customers-register" data-method="POST" data-path="api/v1/customers/register" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Api-Version":"v1"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-customers-register', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-v1-customers-register" onclick="tryItOut('POSTapi-v1-customers-register');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-v1-customers-register" onclick="cancelTryOut('POSTapi-v1-customers-register');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-v1-customers-register" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/v1/customers/register</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>api_token</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="api_token" data-endpoint="POSTapi-v1-customers-register" data-component="query" required  hidden>
<br>
Authentication key.</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>username</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="username" data-endpoint="POSTapi-v1-customers-register" data-component="body" required  hidden>
<br>
the customer username</p>
<p>
<b><code>fullname</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="fullname" data-endpoint="POSTapi-v1-customers-register" data-component="body" required  hidden>
<br>
the customer fullname</p>
<p>
<b><code>mobile</code></b>&nbsp;&nbsp;<small>number</small>  &nbsp;
<input type="number" name="mobile" data-endpoint="POSTapi-v1-customers-register" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="email" data-endpoint="POSTapi-v1-customers-register" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="password" data-endpoint="POSTapi-v1-customers-register" data-component="body" required  hidden>
<br>
</p>

</form>



