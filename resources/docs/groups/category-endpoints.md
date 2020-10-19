# Category Endpoints
 
APIs for Category Management

## GET Category List




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/categories" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
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
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://localhost/api/v1/categories',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'http://localhost/api/v1/categories'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()
```


> Example response (200):

```json
[
    {
        "id": 1,
        "name": "Men's Fashion",
        "is_active": 1,
        "created_at": "2020-09-20T06:56:21.000000Z",
        "updated_at": "2020-09-20T06:56:21.000000Z"
    },
    {
        "id": 1,
        "name": "Kids & Babies",
        "is_active": 0,
        "created_at": "2020-09-20T06:56:21.000000Z",
        "updated_at": "2020-09-20T06:56:21.000000Z"
    }
]
```

### Request
<small class="badge badge-green">GET</small>
 **`api/v1/categories`**



## POST Category




> Example request:

```bash
curl -X POST \
    "http://localhost/api/v1/categories" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
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
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'http://localhost/api/v1/categories',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'http://localhost/api/v1/categories'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('POST', url, headers=headers)
response.json()
```


> Example response (200):

```json
[
    {
        "id": 1,
        "name": "Men's Fashion",
        "is_active": 1,
        "created_at": "2020-09-20T06:56:21.000000Z",
        "updated_at": "2020-09-20T06:56:21.000000Z"
    }
]
```

### Request
<small class="badge badge-black">POST</small>
 **`api/v1/categories`**



## GET Category




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/categories/{category}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
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
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://localhost/api/v1/categories/{category}',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'http://localhost/api/v1/categories/{category}'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()
```


> Example response (200):

```json
{
    "id": 1,
    "name": "Men's Fashion",
    "is_active": 1,
    "created_at": "2020-09-20T06:56:21.000000Z",
    "updated_at": "2020-09-20T06:56:21.000000Z"
}
```

### Request
<small class="badge badge-green">GET</small>
 **`api/v1/categories/{category}`**



## Update the specified resource in storage.




> Example request:

```bash
curl -X PUT \
    "http://localhost/api/v1/categories/{category}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
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
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->put(
    'http://localhost/api/v1/categories/{category}',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'http://localhost/api/v1/categories/{category}'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('PUT', url, headers=headers)
response.json()
```



### Request
<small class="badge badge-darkblue">PUT</small>
 **`api/v1/categories/{category}`**

<small class="badge badge-purple">PATCH</small>
 **`api/v1/categories/{category}`**



## Remove the specified resource from storage.




> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/v1/categories/{category}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
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
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->delete(
    'http://localhost/api/v1/categories/{category}',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'http://localhost/api/v1/categories/{category}'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('DELETE', url, headers=headers)
response.json()
```



### Request
<small class="badge badge-red">DELETE</small>
 **`api/v1/categories/{category}`**



## GET Active Category List




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/activeCategories" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
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
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://localhost/api/v1/activeCategories',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'http://localhost/api/v1/activeCategories'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()
```


> Example response (200):

```json
[
    {
        "id": 1,
        "name": "Men's Fashion",
        "is_active": 1,
        "created_at": "2020-09-20T06:56:21.000000Z",
        "updated_at": "2020-09-20T06:56:21.000000Z"
    }
]
```

### Request
<small class="badge badge-green">GET</small>
 **`api/v1/activeCategories`**




