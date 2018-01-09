---
title: API Reference

language_tabs:
- bash
- javascript

includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---
<!-- START_INFO -->
# Info

Welcome to the generated API reference.
<!-- END_INFO -->

#general
<!-- START_95699a9074268cd7aa7e621af899a9be -->
## List all authors

> Example request:

```bash
curl -X GET "http://localhost/api/authors" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/authors",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/authors`

`HEAD api/authors`


<!-- END_95699a9074268cd7aa7e621af899a9be -->

<!-- START_afdb2c846e3f7f128f28238db7fdcc96 -->
## Get an author

> Example request:

```bash
curl -X GET "http://localhost/api/authors/{id}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/authors/{id}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/authors/{id}`

`HEAD api/authors/{id}`


<!-- END_afdb2c846e3f7f128f28238db7fdcc96 -->

<!-- START_6c3c1e669dfde6a482fe3abedc19337d -->
## Create an author

> Example request:

```bash
curl -X POST "http://localhost/api/authors" \
-H "Accept: application/json" \
    -d "first_name"="repudiandae" \
    -d "middle_name"="repudiandae" \
    -d "last_name"="repudiandae" \
    -d "birth_year"="2018" \
    -d "death_year"="2018" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/authors",
    "method": "POST",
    "data": {
        "first_name": "repudiandae",
        "middle_name": "repudiandae",
        "last_name": "repudiandae",
        "birth_year": "2018",
        "death_year": "2018"
},
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/authors`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    first_name | string |  required  | Maximum: `50`
    middle_name | string |  optional  | Maximum: `50`
    last_name | string |  required  | Maximum: `50`
    birth_year | date |  optional  | Date format: `Y`
    death_year | date |  optional  | Date format: `Y`

<!-- END_6c3c1e669dfde6a482fe3abedc19337d -->

<!-- START_abab4922c88be4f1e8e340aaa4917a4e -->
## Update an author

> Example request:

```bash
curl -X PUT "http://localhost/api/authors/{id}" \
-H "Accept: application/json" \
    -d "first_name"="dolorem" \
    -d "middle_name"="dolorem" \
    -d "last_name"="dolorem" \
    -d "birth_year"="2018" \
    -d "death_year"="2018" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/authors/{id}",
    "method": "PUT",
    "data": {
        "first_name": "dolorem",
        "middle_name": "dolorem",
        "last_name": "dolorem",
        "birth_year": "2018",
        "death_year": "2018"
},
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PUT api/authors/{id}`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    first_name | string |  required  | Maximum: `50`
    middle_name | string |  optional  | Maximum: `50`
    last_name | string |  required  | Maximum: `50`
    birth_year | date |  optional  | Date format: `Y`
    death_year | date |  optional  | Date format: `Y`

<!-- END_abab4922c88be4f1e8e340aaa4917a4e -->

<!-- START_80e795ceeb27a7a137c91c839f94fb6d -->
## Delete an author

> Example request:

```bash
curl -X DELETE "http://localhost/api/authors/{id}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/authors/{id}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/authors/{id}`


<!-- END_80e795ceeb27a7a137c91c839f94fb6d -->

<!-- START_eb8df775503b6007bbbaeec13534e2e0 -->
## List all books

> Example request:

```bash
curl -X GET "http://localhost/api/books" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/books",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/books`

`HEAD api/books`


<!-- END_eb8df775503b6007bbbaeec13534e2e0 -->

<!-- START_f59fca35e89a045dbc3e6cb01382b8e9 -->
## Get a book

> Example request:

```bash
curl -X GET "http://localhost/api/books/{id}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/books/{id}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/books/{id}`

`HEAD api/books/{id}`


<!-- END_f59fca35e89a045dbc3e6cb01382b8e9 -->

<!-- START_33c6d64a451af167032c5c54df96db5c -->
## Create a book

> Example request:

```bash
curl -X POST "http://localhost/api/books" \
-H "Accept: application/json" \
    -d "title"="exercitationem" \
    -d "subtitle"="exercitationem" \
    -d "author_id"="113" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/books",
    "method": "POST",
    "data": {
        "title": "exercitationem",
        "subtitle": "exercitationem",
        "author_id": 113
},
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/books`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    title | string |  required  | Maximum: `300`
    subtitle | string |  optional  | Maximum: `500`
    author_id | integer |  required  | 

<!-- END_33c6d64a451af167032c5c54df96db5c -->

<!-- START_eb51b3be62301c8509dfa75c7f633224 -->
## Update a book

> Example request:

```bash
curl -X PUT "http://localhost/api/books/{id}" \
-H "Accept: application/json" \
    -d "title"="sint" \
    -d "subtitle"="sint" \
    -d "author_id"="84710" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/books/{id}",
    "method": "PUT",
    "data": {
        "title": "sint",
        "subtitle": "sint",
        "author_id": 84710
},
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PUT api/books/{id}`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    title | string |  required  | Maximum: `300`
    subtitle | string |  optional  | Maximum: `500`
    author_id | integer |  required  | 

<!-- END_eb51b3be62301c8509dfa75c7f633224 -->

<!-- START_44d6e3710292e8361c7ccfeaa11680e1 -->
## Delete a book

> Example request:

```bash
curl -X DELETE "http://localhost/api/books/{id}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/books/{id}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/books/{id}`


<!-- END_44d6e3710292e8361c7ccfeaa11680e1 -->

<!-- START_0bc88c828f9ed60f973486f586c9f7dd -->
## Lists all editions

> Example request:

```bash
curl -X GET "http://localhost/api/editions" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/editions",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/editions`

`HEAD api/editions`


<!-- END_0bc88c828f9ed60f973486f586c9f7dd -->

<!-- START_9488897c71764bbedc60524b53987965 -->
## Get an edition

> Example request:

```bash
curl -X GET "http://localhost/api/editions/{id}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/editions/{id}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/editions/{id}`

`HEAD api/editions/{id}`


<!-- END_9488897c71764bbedc60524b53987965 -->

<!-- START_fda8a777ae1648fc7be870b0708fb126 -->
## Create an edition

> Example request:

```bash
curl -X POST "http://localhost/api/editions" \
-H "Accept: application/json" \
    -d "number"="22" \
    -d "title"="eos" \
    -d "isbn"="eos" \
    -d "book_id"="64100039" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/editions",
    "method": "POST",
    "data": {
        "number": 22,
        "title": "eos",
        "isbn": "eos",
        "book_id": 64100039
},
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/editions`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    number | integer |  required  | Maximum: `25`
    title | string |  required  | Maximum: `150`
    isbn | string |  optional  | Must match this regular expression: `/^(\d{10}(\d{3})?)?$/`
    book_id | integer |  required  | 

<!-- END_fda8a777ae1648fc7be870b0708fb126 -->

<!-- START_0e8e4c53e6a3d07691e5f95a184d7926 -->
## Update an edition

> Example request:

```bash
curl -X PUT "http://localhost/api/editions/{id}" \
-H "Accept: application/json" \
    -d "number"="15" \
    -d "title"="mollitia" \
    -d "isbn"="mollitia" \
    -d "book_id"="165639" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/editions/{id}",
    "method": "PUT",
    "data": {
        "number": 15,
        "title": "mollitia",
        "isbn": "mollitia",
        "book_id": 165639
},
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PUT api/editions/{id}`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    number | integer |  required  | Maximum: `25`
    title | string |  required  | Maximum: `150`
    isbn | string |  optional  | Must match this regular expression: `/^(\d{10}(\d{3})?)?$/`
    book_id | integer |  required  | 

<!-- END_0e8e4c53e6a3d07691e5f95a184d7926 -->

<!-- START_1f1f99e54d08736c4de4e0ad8934568e -->
## Delete an edition

> Example request:

```bash
curl -X DELETE "http://localhost/api/editions/{id}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/editions/{id}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/editions/{id}`


<!-- END_1f1f99e54d08736c4de4e0ad8934568e -->

