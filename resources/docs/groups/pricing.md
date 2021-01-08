# Pricing


## Calculate Fee

<small class="badge badge-darkred">requires authentication</small>

This endpoint allows you to calculate dispatch order fee.

> Example request:

```bash
curl -X POST \
    "http://localhost/api/v1/calculate/fee?api_token=%7BYOUR_AUTH_KEY%7D" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Api-Version: v1" \
    -d '{"pickup_region":"quos","delivery_region":"veniam"}'

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

let body = {
    "pickup_region": "quos",
    "delivery_region": "veniam"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
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
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>pickup_region</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="pickup_region" data-endpoint="POSTapi-v1-calculate-fee" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>delivery_region</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="delivery_region" data-endpoint="POSTapi-v1-calculate-fee" data-component="body" required  hidden>
<br>
</p>

</form>



