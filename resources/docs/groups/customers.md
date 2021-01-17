# Customers

APIs for managing customers

## Create Customer Record

<small class="badge badge-darkred">requires authentication</small>

This endpoint allows you to create customer

> Example request:

```bash
curl -X POST \
    "http://localhost/fimiti_sql_api/api/v1/customers/register?api_token=%7BYOUR_AUTH_KEY%7D" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Api-Version: v1" \
    -d '{"username":"nam","fullname":"perspiciatis","mobile":71.47893953,"email":"nihil","password":"quo"}'

```

```javascript
const url = new URL(
    "http://localhost/fimiti_sql_api/api/v1/customers/register"
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
    "username": "nam",
    "fullname": "perspiciatis",
    "mobile": 71.47893953,
    "email": "nihil",
    "password": "quo"
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


## Customer Login

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X POST \
    "http://localhost/fimiti_sql_api/api/v1/customers/login?api_token=%7BYOUR_AUTH_KEY%7D" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Api-Version: v1" \
    -d '{"mobile":0,"password":"voluptas"}'

```

```javascript
const url = new URL(
    "http://localhost/fimiti_sql_api/api/v1/customers/login"
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
    "mobile": 0,
    "password": "voluptas"
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
<div id="execution-results-POSTapi-v1-customers-login" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-v1-customers-login"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-customers-login"></code></pre>
</div>
<div id="execution-error-POSTapi-v1-customers-login" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-customers-login"></code></pre>
</div>
<form id="form-POSTapi-v1-customers-login" data-method="POST" data-path="api/v1/customers/login" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Api-Version":"v1"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-customers-login', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-v1-customers-login" onclick="tryItOut('POSTapi-v1-customers-login');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-v1-customers-login" onclick="cancelTryOut('POSTapi-v1-customers-login');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-v1-customers-login" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/v1/customers/login</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>api_token</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="api_token" data-endpoint="POSTapi-v1-customers-login" data-component="query" required  hidden>
<br>
Authentication key.</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>mobile</code></b>&nbsp;&nbsp;<small>number</small>  &nbsp;
<input type="number" name="mobile" data-endpoint="POSTapi-v1-customers-login" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="password" data-endpoint="POSTapi-v1-customers-login" data-component="body" required  hidden>
<br>
</p>

</form>


## Customer Validate Login Via Token(JWT)

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X POST \
    "http://localhost/fimiti_sql_api/api/v1/customers/validate_login?api_token=%7BYOUR_AUTH_KEY%7D" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Api-Version: v1" \
    -d '{"token":6841.6751}'

```

```javascript
const url = new URL(
    "http://localhost/fimiti_sql_api/api/v1/customers/validate_login"
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
    "token": 6841.6751
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-v1-customers-validate_login" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-v1-customers-validate_login"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-customers-validate_login"></code></pre>
</div>
<div id="execution-error-POSTapi-v1-customers-validate_login" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-customers-validate_login"></code></pre>
</div>
<form id="form-POSTapi-v1-customers-validate_login" data-method="POST" data-path="api/v1/customers/validate_login" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Api-Version":"v1"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-customers-validate_login', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-v1-customers-validate_login" onclick="tryItOut('POSTapi-v1-customers-validate_login');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-v1-customers-validate_login" onclick="cancelTryOut('POSTapi-v1-customers-validate_login');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-v1-customers-validate_login" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/v1/customers/validate_login</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>api_token</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="api_token" data-endpoint="POSTapi-v1-customers-validate_login" data-component="query" required  hidden>
<br>
Authentication key.</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>token</code></b>&nbsp;&nbsp;<small>number</small>  &nbsp;
<input type="number" name="token" data-endpoint="POSTapi-v1-customers-validate_login" data-component="body" required  hidden>
<br>
</p>

</form>


## All Customer List

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "http://localhost/fimiti_sql_api/api/v1/customers/all?api_token=%7BYOUR_AUTH_KEY%7D" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Api-Version: v1"
```

```javascript
const url = new URL(
    "http://localhost/fimiti_sql_api/api/v1/customers/all"
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


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json
{
    "success": true,
    "response": [
        {
            "id": 10,
            "username": "flamezbaba",
            "fullname": "sangosanya segun",
            "email": "flamezbaba@gmail.com",
            "mobile": "123",
            "token": "xmOoY50MKFqOG6E1qxoa3oo43MYZ8f3C9Ca3oxSoV7HKULZ77cZ4NUCcJvVb",
            "avatar": null,
            "wallet_balance": "1000",
            "created_at": "2020-12-26 14:58:01",
            "updated_at": "2020-12-28 20:18:54"
        },
        {
            "id": 14,
            "username": "fddff",
            "fullname": "ffhdfhf",
            "email": "fdfdf@dfhfh.vdf",
            "mobile": "34443",
            "token": "GePw14zQMESK79MAelf06hnwGMSTdwG7JTfpcVbH8tZcpVn1VQQQr2UBhwWO",
            "avatar": null,
            "wallet_balance": "0",
            "created_at": "2020-12-27 07:28:01",
            "updated_at": "2020-12-27 07:28:01"
        },
        {
            "id": 15,
            "username": "fdff",
            "fullname": "fdf",
            "email": "dsd@daft.com",
            "mobile": "233",
            "token": "dPrYFjeD65wlu6AlRLOcfuqtohJi3MyVMnYK5okXL6hY3kDqzZCb751dM74Z",
            "avatar": null,
            "wallet_balance": "0",
            "created_at": "2020-12-27 08:35:33",
            "updated_at": "2020-12-27 08:35:33"
        },
        {
            "id": 20,
            "username": "fdfdfd",
            "fullname": "cvffd",
            "email": "fff@ff.com",
            "mobile": "1234",
            "token": "rdoVyyOPD7MzNnLoM1CFgEUtsKohZJQg1sA6mIFdvVkoawlL74GKIltaJPYY",
            "avatar": null,
            "wallet_balance": "0",
            "created_at": "2020-12-27 09:13:47",
            "updated_at": "2020-12-27 09:13:47"
        },
        {
            "id": 21,
            "username": "soj",
            "fullname": "soj",
            "email": "soj@gmail.com",
            "mobile": "1",
            "token": "1vUpkbDjs5r0srL5SmssL9bqkF8C3oUOr6M4AcdOy8Un4zwCvPRfpnvcXuxz",
            "avatar": null,
            "wallet_balance": "27200",
            "created_at": "2020-12-27 17:20:57",
            "updated_at": "2021-01-12 19:13:56"
        }
    ]
}
```
<div id="execution-results-GETapi-v1-customers-all" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-customers-all"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-customers-all"></code></pre>
</div>
<div id="execution-error-GETapi-v1-customers-all" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-customers-all"></code></pre>
</div>
<form id="form-GETapi-v1-customers-all" data-method="GET" data-path="api/v1/customers/all" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Api-Version":"v1"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-customers-all', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-customers-all" onclick="tryItOut('GETapi-v1-customers-all');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-customers-all" onclick="cancelTryOut('GETapi-v1-customers-all');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-customers-all" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/customers/all</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>api_token</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="api_token" data-endpoint="GETapi-v1-customers-all" data-component="query" required  hidden>
<br>
Authentication key.</p>
</form>


## Change Customer Password

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X POST \
    "http://localhost/fimiti_sql_api/api/v1/customers/update/password/et?api_token=%7BYOUR_AUTH_KEY%7D" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Api-Version: v1" \
    -d '{"old_password":"et","new_password":"et"}'

```

```javascript
const url = new URL(
    "http://localhost/fimiti_sql_api/api/v1/customers/update/password/et"
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
    "old_password": "et",
    "new_password": "et"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-v1-customers-update-password--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-v1-customers-update-password--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-customers-update-password--id-"></code></pre>
</div>
<div id="execution-error-POSTapi-v1-customers-update-password--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-customers-update-password--id-"></code></pre>
</div>
<form id="form-POSTapi-v1-customers-update-password--id-" data-method="POST" data-path="api/v1/customers/update/password/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Api-Version":"v1"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-customers-update-password--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-v1-customers-update-password--id-" onclick="tryItOut('POSTapi-v1-customers-update-password--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-v1-customers-update-password--id-" onclick="cancelTryOut('POSTapi-v1-customers-update-password--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-v1-customers-update-password--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/v1/customers/update/password/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="POSTapi-v1-customers-update-password--id-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>api_token</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="api_token" data-endpoint="POSTapi-v1-customers-update-password--id-" data-component="query" required  hidden>
<br>
Authentication key.</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>old_password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="old_password" data-endpoint="POSTapi-v1-customers-update-password--id-" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>new_password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="new_password" data-endpoint="POSTapi-v1-customers-update-password--id-" data-component="body" required  hidden>
<br>
</p>

</form>


## Change Customer Email

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X POST \
    "http://localhost/fimiti_sql_api/api/v1/customers/update/email/quia?api_token=%7BYOUR_AUTH_KEY%7D" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Api-Version: v1" \
    -d '{"email":"rem"}'

```

```javascript
const url = new URL(
    "http://localhost/fimiti_sql_api/api/v1/customers/update/email/quia"
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
    "email": "rem"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-v1-customers-update-email--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-v1-customers-update-email--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-customers-update-email--id-"></code></pre>
</div>
<div id="execution-error-POSTapi-v1-customers-update-email--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-customers-update-email--id-"></code></pre>
</div>
<form id="form-POSTapi-v1-customers-update-email--id-" data-method="POST" data-path="api/v1/customers/update/email/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Api-Version":"v1"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-customers-update-email--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-v1-customers-update-email--id-" onclick="tryItOut('POSTapi-v1-customers-update-email--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-v1-customers-update-email--id-" onclick="cancelTryOut('POSTapi-v1-customers-update-email--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-v1-customers-update-email--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/v1/customers/update/email/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="POSTapi-v1-customers-update-email--id-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>api_token</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="api_token" data-endpoint="POSTapi-v1-customers-update-email--id-" data-component="query" required  hidden>
<br>
Authentication key.</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="email" data-endpoint="POSTapi-v1-customers-update-email--id-" data-component="body" required  hidden>
<br>
</p>

</form>


## Change Customer Phone Number

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X POST \
    "http://localhost/fimiti_sql_api/api/v1/customers/update/mobile/sequi?api_token=%7BYOUR_AUTH_KEY%7D" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Api-Version: v1" \
    -d '{"mobile":"quidem"}'

```

```javascript
const url = new URL(
    "http://localhost/fimiti_sql_api/api/v1/customers/update/mobile/sequi"
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
    "mobile": "quidem"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-v1-customers-update-mobile--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-v1-customers-update-mobile--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-customers-update-mobile--id-"></code></pre>
</div>
<div id="execution-error-POSTapi-v1-customers-update-mobile--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-customers-update-mobile--id-"></code></pre>
</div>
<form id="form-POSTapi-v1-customers-update-mobile--id-" data-method="POST" data-path="api/v1/customers/update/mobile/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Api-Version":"v1"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-customers-update-mobile--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-v1-customers-update-mobile--id-" onclick="tryItOut('POSTapi-v1-customers-update-mobile--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-v1-customers-update-mobile--id-" onclick="cancelTryOut('POSTapi-v1-customers-update-mobile--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-v1-customers-update-mobile--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/v1/customers/update/mobile/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="POSTapi-v1-customers-update-mobile--id-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>api_token</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="api_token" data-endpoint="POSTapi-v1-customers-update-mobile--id-" data-component="query" required  hidden>
<br>
Authentication key.</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>mobile</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="mobile" data-endpoint="POSTapi-v1-customers-update-mobile--id-" data-component="body" required  hidden>
<br>
</p>

</form>


## Credit Customer Wallet

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X POST \
    "http://localhost/fimiti_sql_api/api/v1/customers/wallet/credit/ut?api_token=%7BYOUR_AUTH_KEY%7D" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Api-Version: v1" \
    -d '{"amount":10,"payment_mode":"maxime","trans_num":"architecto"}'

```

```javascript
const url = new URL(
    "http://localhost/fimiti_sql_api/api/v1/customers/wallet/credit/ut"
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
    "amount": 10,
    "payment_mode": "maxime",
    "trans_num": "architecto"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-v1-customers-wallet-credit--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-v1-customers-wallet-credit--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-customers-wallet-credit--id-"></code></pre>
</div>
<div id="execution-error-POSTapi-v1-customers-wallet-credit--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-customers-wallet-credit--id-"></code></pre>
</div>
<form id="form-POSTapi-v1-customers-wallet-credit--id-" data-method="POST" data-path="api/v1/customers/wallet/credit/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Api-Version":"v1"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-customers-wallet-credit--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-v1-customers-wallet-credit--id-" onclick="tryItOut('POSTapi-v1-customers-wallet-credit--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-v1-customers-wallet-credit--id-" onclick="cancelTryOut('POSTapi-v1-customers-wallet-credit--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-v1-customers-wallet-credit--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/v1/customers/wallet/credit/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="POSTapi-v1-customers-wallet-credit--id-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>api_token</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="api_token" data-endpoint="POSTapi-v1-customers-wallet-credit--id-" data-component="query" required  hidden>
<br>
Authentication key.</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>amount</code></b>&nbsp;&nbsp;<small>number</small>  &nbsp;
<input type="number" name="amount" data-endpoint="POSTapi-v1-customers-wallet-credit--id-" data-component="body" required  hidden>
<br>
total amount to be credited</p>
<p>
<b><code>payment_mode</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="payment_mode" data-endpoint="POSTapi-v1-customers-wallet-credit--id-" data-component="body" required  hidden>
<br>
either ('cash','transfer','atm', 'wallet')</p>
<p>
<b><code>trans_num</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="trans_num" data-endpoint="POSTapi-v1-customers-wallet-credit--id-" data-component="body" required  hidden>
<br>
</p>

</form>


## Get Single Customer Record

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "http://localhost/fimiti_sql_api/api/v1/customers/single/voluptate?api_token=%7BYOUR_AUTH_KEY%7D" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Api-Version: v1" \
    -d '{"id":440.451798}'

```

```javascript
const url = new URL(
    "http://localhost/fimiti_sql_api/api/v1/customers/single/voluptate"
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
    "id": 440.451798
}

fetch(url, {
    method: "GET",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


> Example response (200):

```json
{
    "success": false,
    "response": "record not found"
}
```
<div id="execution-results-GETapi-v1-customers-single--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-customers-single--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-customers-single--id-"></code></pre>
</div>
<div id="execution-error-GETapi-v1-customers-single--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-customers-single--id-"></code></pre>
</div>
<form id="form-GETapi-v1-customers-single--id-" data-method="GET" data-path="api/v1/customers/single/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Api-Version":"v1"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-customers-single--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-customers-single--id-" onclick="tryItOut('GETapi-v1-customers-single--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-customers-single--id-" onclick="cancelTryOut('GETapi-v1-customers-single--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-customers-single--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/customers/single/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETapi-v1-customers-single--id-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>api_token</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="api_token" data-endpoint="GETapi-v1-customers-single--id-" data-component="query" required  hidden>
<br>
Authentication key.</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>number</small>  &nbsp;
<input type="number" name="id" data-endpoint="GETapi-v1-customers-single--id-" data-component="body" required  hidden>
<br>
customer_id</p>

</form>


## Customer&#039;s unpaid orders

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "http://localhost/fimiti_sql_api/api/v1/customers/orders/unpaid/asperiores?api_token=%7BYOUR_AUTH_KEY%7D" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Api-Version: v1"
```

```javascript
const url = new URL(
    "http://localhost/fimiti_sql_api/api/v1/customers/orders/unpaid/asperiores"
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


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json
{
    "success": false,
    "response": "user not found"
}
```
<div id="execution-results-GETapi-v1-customers-orders-unpaid--user_id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-customers-orders-unpaid--user_id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-customers-orders-unpaid--user_id-"></code></pre>
</div>
<div id="execution-error-GETapi-v1-customers-orders-unpaid--user_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-customers-orders-unpaid--user_id-"></code></pre>
</div>
<form id="form-GETapi-v1-customers-orders-unpaid--user_id-" data-method="GET" data-path="api/v1/customers/orders/unpaid/{user_id}" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Api-Version":"v1"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-customers-orders-unpaid--user_id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-customers-orders-unpaid--user_id-" onclick="tryItOut('GETapi-v1-customers-orders-unpaid--user_id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-customers-orders-unpaid--user_id-" onclick="cancelTryOut('GETapi-v1-customers-orders-unpaid--user_id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-customers-orders-unpaid--user_id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/customers/orders/unpaid/{user_id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>user_id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="user_id" data-endpoint="GETapi-v1-customers-orders-unpaid--user_id-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>api_token</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="api_token" data-endpoint="GETapi-v1-customers-orders-unpaid--user_id-" data-component="query" required  hidden>
<br>
Authentication key.</p>
</form>


## Record Order

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X POST \
    "http://localhost/fimiti_sql_api/api/v1/customers/place/order/sunt?api_token=%7BYOUR_AUTH_KEY%7D" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Api-Version: v1" \
    -d '{"courier":"et","pickup_info":"sit","delivery_info":"tempore","package_info":"eum","timeline":"animi","pricing":"optio","rider_info":"odit","payment_info":"explicabo"}'

```

```javascript
const url = new URL(
    "http://localhost/fimiti_sql_api/api/v1/customers/place/order/sunt"
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
    "courier": "et",
    "pickup_info": "sit",
    "delivery_info": "tempore",
    "package_info": "eum",
    "timeline": "animi",
    "pricing": "optio",
    "rider_info": "odit",
    "payment_info": "explicabo"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-v1-customers-place-order--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-v1-customers-place-order--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-customers-place-order--id-"></code></pre>
</div>
<div id="execution-error-POSTapi-v1-customers-place-order--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-customers-place-order--id-"></code></pre>
</div>
<form id="form-POSTapi-v1-customers-place-order--id-" data-method="POST" data-path="api/v1/customers/place/order/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Api-Version":"v1"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-customers-place-order--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-v1-customers-place-order--id-" onclick="tryItOut('POSTapi-v1-customers-place-order--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-v1-customers-place-order--id-" onclick="cancelTryOut('POSTapi-v1-customers-place-order--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-v1-customers-place-order--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/v1/customers/place/order/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="POSTapi-v1-customers-place-order--id-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>api_token</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="api_token" data-endpoint="POSTapi-v1-customers-place-order--id-" data-component="query" required  hidden>
<br>
Authentication key.</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>courier</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="courier" data-endpoint="POSTapi-v1-customers-place-order--id-" data-component="body" required  hidden>
<br>
total amount to be credited</p>
<p>
<b><code>pickup_info</code></b>&nbsp;&nbsp;<small>json</small>  &nbsp;
<input type="text" name="pickup_info" data-endpoint="POSTapi-v1-customers-place-order--id-" data-component="body" required  hidden>
<br>
refer to order json for full details</p>
<p>
<b><code>delivery_info</code></b>&nbsp;&nbsp;<small>json</small>  &nbsp;
<input type="text" name="delivery_info" data-endpoint="POSTapi-v1-customers-place-order--id-" data-component="body" required  hidden>
<br>
refer to order json for full details</p>
<p>
<b><code>package_info</code></b>&nbsp;&nbsp;<small>json</small>     <i>optional</i> &nbsp;
<input type="text" name="package_info" data-endpoint="POSTapi-v1-customers-place-order--id-" data-component="body"  hidden>
<br>
refer to order json for full details</p>
<p>
<b><code>timeline</code></b>&nbsp;&nbsp;<small>json</small>     <i>optional</i> &nbsp;
<input type="text" name="timeline" data-endpoint="POSTapi-v1-customers-place-order--id-" data-component="body"  hidden>
<br>
refer to order json for full details</p>
<p>
<b><code>pricing</code></b>&nbsp;&nbsp;<small>json</small>  &nbsp;
<input type="text" name="pricing" data-endpoint="POSTapi-v1-customers-place-order--id-" data-component="body" required  hidden>
<br>
refer to order json for full details</p>
<p>
<b><code>rider_info</code></b>&nbsp;&nbsp;<small>json</small>     <i>optional</i> &nbsp;
<input type="text" name="rider_info" data-endpoint="POSTapi-v1-customers-place-order--id-" data-component="body"  hidden>
<br>
refer to order json for full details</p>
<p>
<b><code>payment_info</code></b>&nbsp;&nbsp;<small>json</small>  &nbsp;
<input type="text" name="payment_info" data-endpoint="POSTapi-v1-customers-place-order--id-" data-component="body" required  hidden>
<br>
refer to order json for full details</p>

</form>


## Debit Customer Wallet

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X POST \
    "http://localhost/fimiti_sql_api/api/v1/customers/wallet/debit/consequatur?api_token=%7BYOUR_AUTH_KEY%7D" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Api-Version: v1" \
    -d '{"order_id":5.86442,"total_amount":"rem","ref":"rerum","payment_mode":"ea"}'

```

```javascript
const url = new URL(
    "http://localhost/fimiti_sql_api/api/v1/customers/wallet/debit/consequatur"
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
    "order_id": 5.86442,
    "total_amount": "rem",
    "ref": "rerum",
    "payment_mode": "ea"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-v1-customers-wallet-debit--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-v1-customers-wallet-debit--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-customers-wallet-debit--id-"></code></pre>
</div>
<div id="execution-error-POSTapi-v1-customers-wallet-debit--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-customers-wallet-debit--id-"></code></pre>
</div>
<form id="form-POSTapi-v1-customers-wallet-debit--id-" data-method="POST" data-path="api/v1/customers/wallet/debit/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Api-Version":"v1"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-customers-wallet-debit--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-v1-customers-wallet-debit--id-" onclick="tryItOut('POSTapi-v1-customers-wallet-debit--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-v1-customers-wallet-debit--id-" onclick="cancelTryOut('POSTapi-v1-customers-wallet-debit--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-v1-customers-wallet-debit--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/v1/customers/wallet/debit/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="POSTapi-v1-customers-wallet-debit--id-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>api_token</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="api_token" data-endpoint="POSTapi-v1-customers-wallet-debit--id-" data-component="query" required  hidden>
<br>
Authentication key.</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>order_id</code></b>&nbsp;&nbsp;<small>number</small>  &nbsp;
<input type="number" name="order_id" data-endpoint="POSTapi-v1-customers-wallet-debit--id-" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>total_amount</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="total_amount" data-endpoint="POSTapi-v1-customers-wallet-debit--id-" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>ref</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="ref" data-endpoint="POSTapi-v1-customers-wallet-debit--id-" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>payment_mode</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="payment_mode" data-endpoint="POSTapi-v1-customers-wallet-debit--id-" data-component="body" required  hidden>
<br>
default "wallet"</p>

</form>


## api/v1/ppp/decode/{password}

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "http://localhost/fimiti_sql_api/api/v1/ppp/decode/voluptas?api_token=%7BYOUR_AUTH_KEY%7D" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Api-Version: v1"
```

```javascript
const url = new URL(
    "http://localhost/fimiti_sql_api/api/v1/ppp/decode/voluptas"
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


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json
{
    "success": true,
    "response": ""
}
```
<div id="execution-results-GETapi-v1-ppp-decode--password-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-ppp-decode--password-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-ppp-decode--password-"></code></pre>
</div>
<div id="execution-error-GETapi-v1-ppp-decode--password-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-ppp-decode--password-"></code></pre>
</div>
<form id="form-GETapi-v1-ppp-decode--password-" data-method="GET" data-path="api/v1/ppp/decode/{password}" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Api-Version":"v1"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-ppp-decode--password-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-ppp-decode--password-" onclick="tryItOut('GETapi-v1-ppp-decode--password-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-ppp-decode--password-" onclick="cancelTryOut('GETapi-v1-ppp-decode--password-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-ppp-decode--password-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/ppp/decode/{password}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="password" data-endpoint="GETapi-v1-ppp-decode--password-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>api_token</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="api_token" data-endpoint="GETapi-v1-ppp-decode--password-" data-component="query" required  hidden>
<br>
Authentication key.</p>
</form>



