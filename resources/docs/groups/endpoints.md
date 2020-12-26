# Endpoints


## api/v1/test

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/test?api_token=%7BYOUR_AUTH_KEY%7D" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Api-Version: v1"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/test"
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
            "id": 1,
            "name": "flamez 1",
            "api_token": "IsIwnQR3Fm7qGyGN8D8wDjj4I9ZA5eCr1GnIpZCKqIKetfMofwyUOASv1KM8",
            "created_at": "2020-10-16T10:08:07.000000Z",
            "updated_at": "2020-10-16T10:08:07.000000Z"
        }
    ]
}
```
<div id="execution-results-GETapi-v1-test" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-test"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-test"></code></pre>
</div>
<div id="execution-error-GETapi-v1-test" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-test"></code></pre>
</div>
<form id="form-GETapi-v1-test" data-method="GET" data-path="api/v1/test" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Api-Version":"v1"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-test', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-test" onclick="tryItOut('GETapi-v1-test');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-test" onclick="cancelTryOut('GETapi-v1-test');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-test" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/test</code></b>
</p>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/v1/test</code></b>
</p>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/v1/test</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>api/v1/test</code></b>
</p>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/v1/test</code></b>
</p>
<p>
<small class="badge badge-grey">OPTIONS</small>
 <b><code>api/v1/test</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>api_token</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="api_token" data-endpoint="GETapi-v1-test" data-component="query" required  hidden>
<br>
Authentication key.</p>
</form>


## api/v1/tokens

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/tokens?api_token=%7BYOUR_AUTH_KEY%7D" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Api-Version: v1"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/tokens"
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
            "id": 1,
            "name": "flamez 1",
            "api_token": "IsIwnQR3Fm7qGyGN8D8wDjj4I9ZA5eCr1GnIpZCKqIKetfMofwyUOASv1KM8",
            "created_at": "2020-10-16T10:08:07.000000Z",
            "updated_at": "2020-10-16T10:08:07.000000Z"
        }
    ]
}
```
<div id="execution-results-GETapi-v1-tokens" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-tokens"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-tokens"></code></pre>
</div>
<div id="execution-error-GETapi-v1-tokens" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-tokens"></code></pre>
</div>
<form id="form-GETapi-v1-tokens" data-method="GET" data-path="api/v1/tokens" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Api-Version":"v1"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-tokens', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-tokens" onclick="tryItOut('GETapi-v1-tokens');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-tokens" onclick="cancelTryOut('GETapi-v1-tokens');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-tokens" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/tokens</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>api_token</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="api_token" data-endpoint="GETapi-v1-tokens" data-component="query" required  hidden>
<br>
Authentication key.</p>
</form>


## api/v1/tokens/create

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X POST \
    "http://localhost/api/v1/tokens/create?api_token=%7BYOUR_AUTH_KEY%7D" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Api-Version: v1"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/tokens/create"
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
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTapi-v1-tokens-create" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-v1-tokens-create"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-tokens-create"></code></pre>
</div>
<div id="execution-error-POSTapi-v1-tokens-create" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-tokens-create"></code></pre>
</div>
<form id="form-POSTapi-v1-tokens-create" data-method="POST" data-path="api/v1/tokens/create" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Api-Version":"v1"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-tokens-create', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-v1-tokens-create" onclick="tryItOut('POSTapi-v1-tokens-create');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-v1-tokens-create" onclick="cancelTryOut('POSTapi-v1-tokens-create');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-v1-tokens-create" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/v1/tokens/create</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>api_token</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="api_token" data-endpoint="POSTapi-v1-tokens-create" data-component="query" required  hidden>
<br>
Authentication key.</p>
</form>


## api/v1/list/regions/all

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/list/regions/all?api_token=%7BYOUR_AUTH_KEY%7D" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Api-Version: v1"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/list/regions/all"
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
        "moniya",
        "dugbe",
        "ogunpa",
        "aleshinloye",
        "eleyele",
        "jericho",
        "nihort",
        "bodija",
        "secretariat",
        "agodi",
        "ikolaba",
        "sango",
        "u.i",
        "mokola",
        "samonda",
        "apete",
        "ijokodo",
        "agbaje",
        "yemetu",
        "total garden",
        "gate",
        "orita-bashorun"
    ]
}
```
<div id="execution-results-GETapi-v1-list-regions-all" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-list-regions-all"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-list-regions-all"></code></pre>
</div>
<div id="execution-error-GETapi-v1-list-regions-all" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-list-regions-all"></code></pre>
</div>
<form id="form-GETapi-v1-list-regions-all" data-method="GET" data-path="api/v1/list/regions/all" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Api-Version":"v1"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-list-regions-all', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-list-regions-all" onclick="tryItOut('GETapi-v1-list-regions-all');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-list-regions-all" onclick="cancelTryOut('GETapi-v1-list-regions-all');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-list-regions-all" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/list/regions/all</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>api_token</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="api_token" data-endpoint="GETapi-v1-list-regions-all" data-component="query" required  hidden>
<br>
Authentication key.</p>
</form>


## api/v1/zones

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/zones?api_token=%7BYOUR_AUTH_KEY%7D" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Api-Version: v1"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/zones"
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
            "id": 11,
            "name": "zone 10",
            "regions": [
                "moniya"
            ],
            "created_at": "2020-11-09 09:37:02",
            "updated_at": "2020-11-09 09:41:16"
        },
        {
            "id": 10,
            "name": "zone 2",
            "regions": [
                "dugbe",
                "ogunpa",
                "aleshinloye",
                "eleyele",
                "jericho",
                "nihort"
            ],
            "created_at": "2020-11-04 03:29:22",
            "updated_at": "2020-11-04 03:29:22"
        },
        {
            "id": 9,
            "name": "zone 1",
            "regions": [
                "bodija",
                "secretariat",
                "agodi",
                "ikolaba",
                "sango",
                "u.i",
                "mokola",
                "samonda",
                "apete",
                "ijokodo",
                "agbaje",
                "yemetu",
                "total garden",
                "gate",
                "orita-bashorun"
            ],
            "created_at": "2020-11-04 03:28:31",
            "updated_at": "2020-11-04 03:28:31"
        }
    ]
}
```
<div id="execution-results-GETapi-v1-zones" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-zones"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-zones"></code></pre>
</div>
<div id="execution-error-GETapi-v1-zones" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-zones"></code></pre>
</div>
<form id="form-GETapi-v1-zones" data-method="GET" data-path="api/v1/zones" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Api-Version":"v1"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-zones', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-zones" onclick="tryItOut('GETapi-v1-zones');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-zones" onclick="cancelTryOut('GETapi-v1-zones');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-zones" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/zones</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>api_token</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="api_token" data-endpoint="GETapi-v1-zones" data-component="query" required  hidden>
<br>
Authentication key.</p>
</form>


## Create record

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X POST \
    "http://localhost/api/v1/zones?api_token=%7BYOUR_AUTH_KEY%7D" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Api-Version: v1"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/zones"
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
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTapi-v1-zones" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-v1-zones"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-zones"></code></pre>
</div>
<div id="execution-error-POSTapi-v1-zones" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-zones"></code></pre>
</div>
<form id="form-POSTapi-v1-zones" data-method="POST" data-path="api/v1/zones" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Api-Version":"v1"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-zones', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-v1-zones" onclick="tryItOut('POSTapi-v1-zones');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-v1-zones" onclick="cancelTryOut('POSTapi-v1-zones');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-v1-zones" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/v1/zones</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>api_token</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="api_token" data-endpoint="POSTapi-v1-zones" data-component="query" required  hidden>
<br>
Authentication key.</p>
</form>


## update single record

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X POST \
    "http://localhost/api/v1/zones/assumenda?api_token=%7BYOUR_AUTH_KEY%7D" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Api-Version: v1"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/zones/assumenda"
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
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTapi-v1-zones--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-v1-zones--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-zones--id-"></code></pre>
</div>
<div id="execution-error-POSTapi-v1-zones--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-zones--id-"></code></pre>
</div>
<form id="form-POSTapi-v1-zones--id-" data-method="POST" data-path="api/v1/zones/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Api-Version":"v1"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-zones--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-v1-zones--id-" onclick="tryItOut('POSTapi-v1-zones--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-v1-zones--id-" onclick="cancelTryOut('POSTapi-v1-zones--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-v1-zones--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/v1/zones/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="POSTapi-v1-zones--id-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>api_token</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="api_token" data-endpoint="POSTapi-v1-zones--id-" data-component="query" required  hidden>
<br>
Authentication key.</p>
</form>


## update product category record - to add new category

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X POST \
    "http://localhost/api/v1/zones/regions/delete/quaerat?api_token=%7BYOUR_AUTH_KEY%7D" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Api-Version: v1"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/zones/regions/delete/quaerat"
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
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTapi-v1-zones-regions-delete--zone_id-" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-v1-zones-regions-delete--zone_id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-zones-regions-delete--zone_id-"></code></pre>
</div>
<div id="execution-error-POSTapi-v1-zones-regions-delete--zone_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-zones-regions-delete--zone_id-"></code></pre>
</div>
<form id="form-POSTapi-v1-zones-regions-delete--zone_id-" data-method="POST" data-path="api/v1/zones/regions/delete/{zone_id}" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Api-Version":"v1"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-zones-regions-delete--zone_id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-v1-zones-regions-delete--zone_id-" onclick="tryItOut('POSTapi-v1-zones-regions-delete--zone_id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-v1-zones-regions-delete--zone_id-" onclick="cancelTryOut('POSTapi-v1-zones-regions-delete--zone_id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-v1-zones-regions-delete--zone_id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/v1/zones/regions/delete/{zone_id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>zone_id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="zone_id" data-endpoint="POSTapi-v1-zones-regions-delete--zone_id-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>api_token</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="api_token" data-endpoint="POSTapi-v1-zones-regions-delete--zone_id-" data-component="query" required  hidden>
<br>
Authentication key.</p>
</form>


## delete single record

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X POST \
    "http://localhost/api/v1/zones/delete/accusamus?api_token=%7BYOUR_AUTH_KEY%7D" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Api-Version: v1"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/zones/delete/accusamus"
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
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTapi-v1-zones-delete--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-v1-zones-delete--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-zones-delete--id-"></code></pre>
</div>
<div id="execution-error-POSTapi-v1-zones-delete--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-zones-delete--id-"></code></pre>
</div>
<form id="form-POSTapi-v1-zones-delete--id-" data-method="POST" data-path="api/v1/zones/delete/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Api-Version":"v1"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-zones-delete--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-v1-zones-delete--id-" onclick="tryItOut('POSTapi-v1-zones-delete--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-v1-zones-delete--id-" onclick="cancelTryOut('POSTapi-v1-zones-delete--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-v1-zones-delete--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/v1/zones/delete/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="POSTapi-v1-zones-delete--id-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>api_token</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="api_token" data-endpoint="POSTapi-v1-zones-delete--id-" data-component="query" required  hidden>
<br>
Authentication key.</p>
</form>


## api/v1/find/zone/via/region/{region}

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/find/zone/via/region/at?api_token=%7BYOUR_AUTH_KEY%7D" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Api-Version: v1"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/find/zone/via/region/at"
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
    "response": null
}
```
<div id="execution-results-GETapi-v1-find-zone-via-region--region-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-find-zone-via-region--region-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-find-zone-via-region--region-"></code></pre>
</div>
<div id="execution-error-GETapi-v1-find-zone-via-region--region-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-find-zone-via-region--region-"></code></pre>
</div>
<form id="form-GETapi-v1-find-zone-via-region--region-" data-method="GET" data-path="api/v1/find/zone/via/region/{region}" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Api-Version":"v1"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-find-zone-via-region--region-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-find-zone-via-region--region-" onclick="tryItOut('GETapi-v1-find-zone-via-region--region-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-find-zone-via-region--region-" onclick="cancelTryOut('GETapi-v1-find-zone-via-region--region-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-find-zone-via-region--region-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/find/zone/via/region/{region}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>region</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="region" data-endpoint="GETapi-v1-find-zone-via-region--region-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>api_token</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="api_token" data-endpoint="GETapi-v1-find-zone-via-region--region-" data-component="query" required  hidden>
<br>
Authentication key.</p>
</form>


## Calculate Fee

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X POST \
    "http://localhost/api/v1/calculate/fee?api_token=%7BYOUR_AUTH_KEY%7D" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Api-Version: v1"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/calculate/fee"
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
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTapi-v1-calculate-fee" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-v1-calculate-fee"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-calculate-fee"></code></pre>
</div>
<div id="execution-error-POSTapi-v1-calculate-fee" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-calculate-fee"></code></pre>
</div>
<form id="form-POSTapi-v1-calculate-fee" data-method="POST" data-path="api/v1/calculate/fee" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Api-Version":"v1"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-calculate-fee', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-v1-calculate-fee" onclick="tryItOut('POSTapi-v1-calculate-fee');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-v1-calculate-fee" onclick="cancelTryOut('POSTapi-v1-calculate-fee');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-v1-calculate-fee" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/v1/calculate/fee</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>api_token</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="api_token" data-endpoint="POSTapi-v1-calculate-fee" data-component="query" required  hidden>
<br>
Authentication key.</p>
</form>


## api/v1/orders/dispatch

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/orders/dispatch?api_token=%7BYOUR_AUTH_KEY%7D" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Api-Version: v1"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/orders/dispatch"
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
            "pickup_info": {
                "zone": "zone1",
                "location": "apata"
            },
            "delivery_info": {
                "zone": "zone 3",
                "location": "bodija"
            }
        },
        {
            "pickup_info": null,
            "delivery_info": {
                "zone": "zone 3",
                "location": "bodija"
            }
        }
    ]
}
```
<div id="execution-results-GETapi-v1-orders-dispatch" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-orders-dispatch"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-orders-dispatch"></code></pre>
</div>
<div id="execution-error-GETapi-v1-orders-dispatch" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-orders-dispatch"></code></pre>
</div>
<form id="form-GETapi-v1-orders-dispatch" data-method="GET" data-path="api/v1/orders/dispatch" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Api-Version":"v1"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-orders-dispatch', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-orders-dispatch" onclick="tryItOut('GETapi-v1-orders-dispatch');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-orders-dispatch" onclick="cancelTryOut('GETapi-v1-orders-dispatch');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-orders-dispatch" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/orders/dispatch</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>api_token</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="api_token" data-endpoint="GETapi-v1-orders-dispatch" data-component="query" required  hidden>
<br>
Authentication key.</p>
</form>


## Create record

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X POST \
    "http://localhost/api/v1/orders/dispatch?api_token=%7BYOUR_AUTH_KEY%7D" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Api-Version: v1"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/orders/dispatch"
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
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTapi-v1-orders-dispatch" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-v1-orders-dispatch"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-orders-dispatch"></code></pre>
</div>
<div id="execution-error-POSTapi-v1-orders-dispatch" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-orders-dispatch"></code></pre>
</div>
<form id="form-POSTapi-v1-orders-dispatch" data-method="POST" data-path="api/v1/orders/dispatch" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Api-Version":"v1"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-orders-dispatch', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-v1-orders-dispatch" onclick="tryItOut('POSTapi-v1-orders-dispatch');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-v1-orders-dispatch" onclick="cancelTryOut('POSTapi-v1-orders-dispatch');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-v1-orders-dispatch" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/v1/orders/dispatch</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>api_token</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="api_token" data-endpoint="POSTapi-v1-orders-dispatch" data-component="query" required  hidden>
<br>
Authentication key.</p>
</form>


## Show single record

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/orders/dispatch/error?api_token=%7BYOUR_AUTH_KEY%7D" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Api-Version: v1"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/orders/dispatch/error"
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
    "response": "record not found"
}
```
<div id="execution-results-GETapi-v1-orders-dispatch--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-orders-dispatch--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-orders-dispatch--id-"></code></pre>
</div>
<div id="execution-error-GETapi-v1-orders-dispatch--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-orders-dispatch--id-"></code></pre>
</div>
<form id="form-GETapi-v1-orders-dispatch--id-" data-method="GET" data-path="api/v1/orders/dispatch/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Api-Version":"v1"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-orders-dispatch--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-orders-dispatch--id-" onclick="tryItOut('GETapi-v1-orders-dispatch--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-orders-dispatch--id-" onclick="cancelTryOut('GETapi-v1-orders-dispatch--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-orders-dispatch--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/orders/dispatch/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETapi-v1-orders-dispatch--id-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>api_token</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="api_token" data-endpoint="GETapi-v1-orders-dispatch--id-" data-component="query" required  hidden>
<br>
Authentication key.</p>
</form>


## api/test

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/test?api_token=%7BYOUR_AUTH_KEY%7D" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Api-Version: v1"
```

```javascript
const url = new URL(
    "http://localhost/api/test"
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
            "id": 1,
            "name": "flamez 1",
            "api_token": "IsIwnQR3Fm7qGyGN8D8wDjj4I9ZA5eCr1GnIpZCKqIKetfMofwyUOASv1KM8",
            "created_at": "2020-10-16T10:08:07.000000Z",
            "updated_at": "2020-10-16T10:08:07.000000Z"
        }
    ]
}
```
<div id="execution-results-GETapi-test" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-test"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-test"></code></pre>
</div>
<div id="execution-error-GETapi-test" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-test"></code></pre>
</div>
<form id="form-GETapi-test" data-method="GET" data-path="api/test" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Api-Version":"v1"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-test', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-test" onclick="tryItOut('GETapi-test');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-test" onclick="cancelTryOut('GETapi-test');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-test" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/test</code></b>
</p>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/test</code></b>
</p>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/test</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>api/test</code></b>
</p>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/test</code></b>
</p>
<p>
<small class="badge badge-grey">OPTIONS</small>
 <b><code>api/test</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>api_token</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="api_token" data-endpoint="GETapi-test" data-component="query" required  hidden>
<br>
Authentication key.</p>
</form>


## api/failed

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/failed?api_token=%7BYOUR_AUTH_KEY%7D" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Api-Version: v1"
```

```javascript
const url = new URL(
    "http://localhost/api/failed"
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
    "response": "API Authentication Failed"
}
```
<div id="execution-results-GETapi-failed" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-failed"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-failed"></code></pre>
</div>
<div id="execution-error-GETapi-failed" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-failed"></code></pre>
</div>
<form id="form-GETapi-failed" data-method="GET" data-path="api/failed" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Api-Version":"v1"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-failed', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-failed" onclick="tryItOut('GETapi-failed');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-failed" onclick="cancelTryOut('GETapi-failed');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-failed" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/failed</code></b>
</p>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/failed</code></b>
</p>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/failed</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>api/failed</code></b>
</p>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/failed</code></b>
</p>
<p>
<small class="badge badge-grey">OPTIONS</small>
 <b><code>api/failed</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>api_token</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="api_token" data-endpoint="GETapi-failed" data-component="query" required  hidden>
<br>
Authentication key.</p>
</form>


## /

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "http://localhost/?api_token=%7BYOUR_AUTH_KEY%7D" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Api-Version: v1"
```

```javascript
const url = new URL(
    "http://localhost/"
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

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            
            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://vapor.laravel.com">Vapor</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html>

```
<div id="execution-results-GET-" hidden>
    <blockquote>Received response<span id="execution-response-status-GET-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GET-"></code></pre>
</div>
<div id="execution-error-GET-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GET-"></code></pre>
</div>
<form id="form-GET-" data-method="GET" data-path="/" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Api-Version":"v1"}' onsubmit="event.preventDefault(); executeTryOut('GET-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GET-" onclick="tryItOut('GET-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GET-" onclick="cancelTryOut('GET-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GET-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>/</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>api_token</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="api_token" data-endpoint="GET-" data-component="query" required  hidden>
<br>
Authentication key.</p>
</form>



