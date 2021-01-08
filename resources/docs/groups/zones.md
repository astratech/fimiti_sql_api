# Zones

APIs for managing zones

## List all regions

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


## List all zones

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


## Create Zone

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X POST \
    "http://localhost/api/v1/zones?api_token=%7BYOUR_AUTH_KEY%7D" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Api-Version: v1" \
    -d '{"name":"tempora","regions":"ullam"}'

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

let body = {
    "name": "tempora",
    "regions": "ullam"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
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
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="POSTapi-v1-zones" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>regions</code></b>&nbsp;&nbsp;<small>array</small>  &nbsp;
<input type="text" name="regions" data-endpoint="POSTapi-v1-zones" data-component="body" required  hidden>
<br>
</p>

</form>


## Update zone record

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X POST \
    "http://localhost/api/v1/zones/vero?api_token=%7BYOUR_AUTH_KEY%7D" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Api-Version: v1" \
    -d '{"name":"reprehenderit","regions":"voluptates"}'

```

```javascript
const url = new URL(
    "http://localhost/api/v1/zones/vero"
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
    "name": "reprehenderit",
    "regions": "voluptates"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
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
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="POSTapi-v1-zones--id-" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>regions</code></b>&nbsp;&nbsp;<small>array</small>  &nbsp;
<input type="text" name="regions" data-endpoint="POSTapi-v1-zones--id-" data-component="body" required  hidden>
<br>
</p>

</form>


## Delete region

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X POST \
    "http://localhost/api/v1/zones/regions/delete/laboriosam?api_token=%7BYOUR_AUTH_KEY%7D" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Api-Version: v1" \
    -d '{"region":"id"}'

```

```javascript
const url = new URL(
    "http://localhost/api/v1/zones/regions/delete/laboriosam"
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
    "region": "id"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
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
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>region</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="region" data-endpoint="POSTapi-v1-zones-regions-delete--zone_id-" data-component="body" required  hidden>
<br>
</p>

</form>


## delete zone

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X POST \
    "http://localhost/api/v1/zones/delete/et?api_token=%7BYOUR_AUTH_KEY%7D" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Api-Version: v1" \
    -d '{"id":"labore"}'

```

```javascript
const url = new URL(
    "http://localhost/api/v1/zones/delete/et"
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
    "id": "labore"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
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
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>numeric</small>  &nbsp;
<input type="text" name="id" data-endpoint="POSTapi-v1-zones-delete--id-" data-component="body" required  hidden>
<br>
</p>

</form>


## Find Zone via region name

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/find/zone/via/region/quos?api_token=%7BYOUR_AUTH_KEY%7D" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Api-Version: v1" \
    -d '{"region":"dolorum"}'

```

```javascript
const url = new URL(
    "http://localhost/api/v1/find/zone/via/region/quos"
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
    "region": "dolorum"
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
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>region</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="region" data-endpoint="GETapi-v1-find-zone-via-region--region-" data-component="body" required  hidden>
<br>
</p>

</form>



