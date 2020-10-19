<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>THE MEGA SHOP API</title>

    <link href="https://fonts.googleapis.com/css?family=PT+Sans&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="{{ asset("vendor/scribe/css/style.css") }}" media="screen" />
        <link rel="stylesheet" href="{{ asset("vendor/scribe/css/print.css") }}" media="print" />
        <script src="{{ asset("vendor/scribe/js/all.js") }}"></script>

        <link rel="stylesheet" href="{{ asset("vendor/scribe/css/highlight-darcula.css") }}" media="" />
        <script src="{{ asset("vendor/scribe/js/highlight.pack.js") }}"></script>
    <script>hljs.initHighlightingOnLoad();</script>

</head>

<body class="" data-languages="[&quot;bash&quot;,&quot;javascript&quot;,&quot;php&quot;,&quot;python&quot;]">
<a href="#" id="nav-button">
      <span>
        NAV
            <img src="{{ asset("vendor/scribe/images/navbar.png") }}" alt="-image" class=""/>
      </span>
</a>
<div class="tocify-wrapper">
        <img src="img/logo.png" alt="logo" class="logo" style="padding-top: 10px;" width="230px"/>
                <div class="lang-selector">
                            <a href="#" data-language-name="bash">bash</a>
                            <a href="#" data-language-name="javascript">javascript</a>
                            <a href="#" data-language-name="php">php</a>
                            <a href="#" data-language-name="python">python</a>
                    </div>
        <div class="search">
        <input type="text" class="search" id="input-search" placeholder="Search">
    </div>
    <ul class="search-results"></ul>

    <ul id="toc">
    </ul>

            <ul class="toc-footer" id="toc-footer">
                            <li><a href="{{ route("scribe.json") }}">View Postman Collection</a></li>
                            <li><a href="{{ route("scribe.openapi") }}">View OpenAPI (Swagger) Spec</a></li>
                            <li><a href='http://github.com/knuckleswtf/scribe'>Documentation powered by Scribe ✍</a></li>
                    </ul>
            <ul class="toc-footer" id="last-updated">
            <li>Last updated: September 21 2020</li>
        </ul>
</div>
<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1>Introduction</h1>
<p>Welcome to version 1 of THE MEGA SHOP API.</p>
<aside>As you scroll, you'll see code examples for working with the API in different programming languages in the dark area to the right (or as part of the content on mobile), and you can switch the programming language of the examples with the tabs in the top right (or from the nav menu at the top left on mobile).</aside><h1>Authenticating requests</h1>
<p>This API is not authenticated.</p><h1>Category Endpoints</h1>
<p>APIs for Category Management</p>
<h2>GET Category List</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/api/v1/categories" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/categories"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost/api/v1/categories',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost/api/v1/categories'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">[
    {
        "id": 1,
        "name": "Men's Fashion",
        "is_active": 1,
        "created_at": "2020-09-20T06:56:21.000000Z",
        "updated_at": "2020-09-20T06:56:21.000000Z"
    },
    {
        "id": 1,
        "name": "Kids &amp; Babies",
        "is_active": 0,
        "created_at": "2020-09-20T06:56:21.000000Z",
        "updated_at": "2020-09-20T06:56:21.000000Z"
    }
]</code></pre>
<h3>Request</h3>
<p><small class="badge badge-green">GET</small>
<strong><code>api/v1/categories</code></strong></p>
<h2>POST Category</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost/api/v1/categories" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/categories"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://localhost/api/v1/categories',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost/api/v1/categories'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">[
    {
        "id": 1,
        "name": "Men's Fashion",
        "is_active": 1,
        "created_at": "2020-09-20T06:56:21.000000Z",
        "updated_at": "2020-09-20T06:56:21.000000Z"
    }
]</code></pre>
<h3>Request</h3>
<p><small class="badge badge-black">POST</small>
<strong><code>api/v1/categories</code></strong></p>
<h2>GET Category</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/api/v1/categories/{category}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/categories/{category}"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost/api/v1/categories/{category}',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost/api/v1/categories/{category}'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "id": 1,
    "name": "Men's Fashion",
    "is_active": 1,
    "created_at": "2020-09-20T06:56:21.000000Z",
    "updated_at": "2020-09-20T06:56:21.000000Z"
}</code></pre>
<h3>Request</h3>
<p><small class="badge badge-green">GET</small>
<strong><code>api/v1/categories/{category}</code></strong></p>
<h2>Update the specified resource in storage.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X PUT \
    "http://localhost/api/v1/categories/{category}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/categories/{category}"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;put(
    'http://localhost/api/v1/categories/{category}',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost/api/v1/categories/{category}'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('PUT', url, headers=headers)
response.json()</code></pre>
<h3>Request</h3>
<p><small class="badge badge-darkblue">PUT</small>
<strong><code>api/v1/categories/{category}</code></strong></p>
<p><small class="badge badge-purple">PATCH</small>
<strong><code>api/v1/categories/{category}</code></strong></p>
<h2>Remove the specified resource from storage.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X DELETE \
    "http://localhost/api/v1/categories/{category}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/categories/{category}"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;delete(
    'http://localhost/api/v1/categories/{category}',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost/api/v1/categories/{category}'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('DELETE', url, headers=headers)
response.json()</code></pre>
<h3>Request</h3>
<p><small class="badge badge-red">DELETE</small>
<strong><code>api/v1/categories/{category}</code></strong></p>
<h2>GET Active Category List</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/api/v1/activeCategories" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/activeCategories"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost/api/v1/activeCategories',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost/api/v1/activeCategories'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">[
    {
        "id": 1,
        "name": "Men's Fashion",
        "is_active": 1,
        "created_at": "2020-09-20T06:56:21.000000Z",
        "updated_at": "2020-09-20T06:56:21.000000Z"
    }
]</code></pre>
<h3>Request</h3>
<p><small class="badge badge-green">GET</small>
<strong><code>api/v1/activeCategories</code></strong></p><h1>Endpoints</h1>
<h2>docs.json</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/docs.json" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/docs.json"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost/docs.json',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost/docs.json'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "variable": [],
    "info": {
        "name": "THE MEGA SHOP API",
        "_postman_id": "8fa27ad6-f1cf-4db6-92ba-c4ebc6c1b02a",
        "description": "",
        "schema": "https:\/\/schema.getpostman.com\/json\/collection\/v2.1.0\/collection.json"
    },
    "item": [
        {
            "name": "Category Endpoints",
            "description": " \nAPIs for Category Management",
            "item": [
                {
                    "name": "GET Category List",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost",
                            "path": "api\/v1\/categories",
                            "query": [],
                            "raw": "http:\/\/localhost\/api\/v1\/categories"
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": null,
                        "description": "",
                        "auth": {
                            "type": "noauth"
                        }
                    },
                    "response": []
                },
                {
                    "name": "POST Category",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost",
                            "path": "api\/v1\/categories",
                            "query": [],
                            "raw": "http:\/\/localhost\/api\/v1\/categories"
                        },
                        "method": "POST",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": null,
                        "description": "",
                        "auth": {
                            "type": "noauth"
                        }
                    },
                    "response": []
                },
                {
                    "name": "GET Category",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost",
                            "path": "api\/v1\/categories\/:category",
                            "query": [],
                            "raw": "http:\/\/localhost\/api\/v1\/categories\/:category"
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": null,
                        "description": "",
                        "auth": {
                            "type": "noauth"
                        }
                    },
                    "response": []
                },
                {
                    "name": "Update the specified resource in storage.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost",
                            "path": "api\/v1\/categories\/:category",
                            "query": [],
                            "raw": "http:\/\/localhost\/api\/v1\/categories\/:category"
                        },
                        "method": "PUT",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": null,
                        "description": "",
                        "auth": {
                            "type": "noauth"
                        }
                    },
                    "response": []
                },
                {
                    "name": "Remove the specified resource from storage.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost",
                            "path": "api\/v1\/categories\/:category",
                            "query": [],
                            "raw": "http:\/\/localhost\/api\/v1\/categories\/:category"
                        },
                        "method": "DELETE",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": null,
                        "description": "",
                        "auth": {
                            "type": "noauth"
                        }
                    },
                    "response": []
                },
                {
                    "name": "GET Active Category List",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost",
                            "path": "api\/v1\/activeCategories",
                            "query": [],
                            "raw": "http:\/\/localhost\/api\/v1\/activeCategories"
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": null,
                        "description": "",
                        "auth": {
                            "type": "noauth"
                        }
                    },
                    "response": []
                }
            ]
        },
        {
            "name": "Endpoints",
            "description": "",
            "item": [
                {
                    "name": "docs.json",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost",
                            "path": "docs.json",
                            "query": [],
                            "raw": "http:\/\/localhost\/docs.json"
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": null,
                        "description": "",
                        "auth": {
                            "type": "noauth"
                        }
                    },
                    "response": []
                },
                {
                    "name": "docs.openapi",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost",
                            "path": "docs.openapi",
                            "query": [],
                            "raw": "http:\/\/localhost\/docs.openapi"
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": null,
                        "description": "",
                        "auth": {
                            "type": "noauth"
                        }
                    },
                    "response": []
                },
                {
                    "name": "\/",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "localhost",
                            "path": "\/",
                            "query": [],
                            "raw": "http:\/\/localhost\/\/"
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": null,
                        "description": "",
                        "auth": {
                            "type": "noauth"
                        }
                    },
                    "response": []
                }
            ]
        }
    ],
    "auth": {
        "type": "noauth"
    }
}</code></pre>
<h3>Request</h3>
<p><small class="badge badge-green">GET</small>
<strong><code>docs.json</code></strong></p>
<h2>docs.openapi</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/docs.openapi" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/docs.openapi"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost/docs.openapi',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost/docs.openapi'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<h3>Request</h3>
<p><small class="badge badge-green">GET</small>
<strong><code>docs.openapi</code></strong></p>
<h2>/</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost/',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost//'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (302):</p>
</blockquote>
<pre><code class="language-json">
&lt;!DOCTYPE html&gt;
&lt;html&gt;
    &lt;head&gt;
        &lt;meta charset="UTF-8" /&gt;
        &lt;meta http-equiv="refresh" content="0;url='http://localhost/docs'" /&gt;

        &lt;title&gt;Redirecting to http://localhost/docs&lt;/title&gt;
    &lt;/head&gt;
    &lt;body&gt;
        Redirecting to &lt;a href="http://localhost/docs"&gt;http://localhost/docs&lt;/a&gt;.
    &lt;/body&gt;
&lt;/html&gt;</code></pre>
<h3>Request</h3>
<p><small class="badge badge-green">GET</small>
<strong><code>/</code></strong></p>
    </div>
    <div class="dark-box">
                    <div class="lang-selector">
                                    <a href="#" data-language-name="bash">bash</a>
                                    <a href="#" data-language-name="javascript">javascript</a>
                                    <a href="#" data-language-name="php">php</a>
                                    <a href="#" data-language-name="python">python</a>
                            </div>
            </div>
</div>
<script>
    $(function () {
        var languages = ["bash","javascript","php","python"];
        setupLanguages(languages);
    });
</script>
</body>
</html>