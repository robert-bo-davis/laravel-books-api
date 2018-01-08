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
[Get Postman Collection](http://localhost/docs/collection.json)
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
[
    {
        "id": 1,
        "first_name": "Emil",
        "middle_name": "Zelda",
        "last_name": "Heathcote",
        "birth_year": 2007,
        "death_year": 1994,
        "created_at": "2018-01-07 22:43:13",
        "updated_at": "2018-01-07 22:43:13",
        "books": [
            {
                "id": 1,
                "title": "Iusto omnis nesciunt facere odio sit nam.",
                "subtitle": "Distinctio cumque impedit rem quas.",
                "author_id": 1,
                "created_at": "2018-01-07 22:43:13",
                "updated_at": "2018-01-07 22:43:13",
                "editions": [
                    {
                        "id": 1,
                        "number": 17,
                        "title": "ut",
                        "isbn": "0012345683546",
                        "book_id": 1,
                        "created_at": "2018-01-07 22:43:13",
                        "updated_at": "2018-01-07 22:43:13"
                    }
                ]
            },
            {
                "id": 2,
                "title": "Voluptas ipsam perspiciatis at ipsam soluta cum qui.",
                "subtitle": "Sit eos qui adipisci dolores.",
                "author_id": 1,
                "created_at": "2018-01-07 22:43:13",
                "updated_at": "2018-01-07 22:43:13",
                "editions": [
                    {
                        "id": 2,
                        "number": 22,
                        "title": "saepe",
                        "isbn": "0012345628954",
                        "book_id": 2,
                        "created_at": "2018-01-07 22:43:13",
                        "updated_at": "2018-01-07 22:43:13"
                    }
                ]
            },
            {
                "id": 3,
                "title": "Eveniet magni voluptas quia molestias unde quis eveniet ut.",
                "subtitle": "Pariatur debitis iusto ex suscipit et doloribus.",
                "author_id": 1,
                "created_at": "2018-01-07 22:43:13",
                "updated_at": "2018-01-07 22:43:13",
                "editions": [
                    {
                        "id": 3,
                        "number": 2,
                        "title": "rerum",
                        "isbn": "001234568770",
                        "book_id": 3,
                        "created_at": "2018-01-07 22:43:13",
                        "updated_at": "2018-01-07 22:43:13"
                    }
                ]
            }
        ]
    },
    {
        "id": 2,
        "first_name": "Adelbert",
        "middle_name": "Enola",
        "last_name": "Skiles",
        "birth_year": 1998,
        "death_year": 2001,
        "created_at": "2018-01-07 22:43:13",
        "updated_at": "2018-01-07 22:43:13",
        "books": [
            {
                "id": 4,
                "title": "Et aut tenetur a praesentium laborum voluptates odit praesentium.",
                "subtitle": "Corporis eos sit est architecto quod mollitia totam.",
                "author_id": 2,
                "created_at": "2018-01-07 22:43:14",
                "updated_at": "2018-01-07 22:43:14",
                "editions": [
                    {
                        "id": 4,
                        "number": 25,
                        "title": "qui",
                        "isbn": "0012345685818",
                        "book_id": 4,
                        "created_at": "2018-01-07 22:43:14",
                        "updated_at": "2018-01-07 22:43:14"
                    }
                ]
            },
            {
                "id": 5,
                "title": "Autem sint qui sint nesciunt aut.",
                "subtitle": "Debitis quasi repudiandae et et id aliquam.",
                "author_id": 2,
                "created_at": "2018-01-07 22:43:14",
                "updated_at": "2018-01-07 22:43:14",
                "editions": [
                    {
                        "id": 5,
                        "number": 5,
                        "title": "recusandae",
                        "isbn": "0012345616338",
                        "book_id": 5,
                        "created_at": "2018-01-07 22:43:14",
                        "updated_at": "2018-01-07 22:43:14"
                    }
                ]
            },
            {
                "id": 6,
                "title": "Illum impedit quia reprehenderit.",
                "subtitle": "Vel voluptatem aspernatur reiciendis ut.",
                "author_id": 2,
                "created_at": "2018-01-07 22:43:14",
                "updated_at": "2018-01-07 22:43:14",
                "editions": [
                    {
                        "id": 6,
                        "number": 9,
                        "title": "facilis",
                        "isbn": "0012345649946",
                        "book_id": 6,
                        "created_at": "2018-01-07 22:43:14",
                        "updated_at": "2018-01-07 22:43:14"
                    }
                ]
            }
        ]
    }
]
```

### HTTP Request
`GET api/authors`

`HEAD api/authors`


<!-- END_95699a9074268cd7aa7e621af899a9be -->

<!-- START_31c161d4e2e8dd0cef72967cb4f6a4af -->
## Get an author

> Example request:

```bash
curl -X GET "http://localhost/api/authors/{author}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/authors/{author}",
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
{
    "id": 1,
    "first_name": "Emil",
    "middle_name": "Zelda",
    "last_name": "Heathcote",
    "birth_year": 2007,
    "death_year": 1994,
    "created_at": "2018-01-07 22:43:13",
    "updated_at": "2018-01-07 22:43:13",
    "books": [
        {
            "id": 1,
            "title": "Iusto omnis nesciunt facere odio sit nam.",
            "subtitle": "Distinctio cumque impedit rem quas.",
            "author_id": 1,
            "created_at": "2018-01-07 22:43:13",
            "updated_at": "2018-01-07 22:43:13",
            "editions": [
                {
                    "id": 1,
                    "number": 17,
                    "title": "ut",
                    "isbn": "0012345683546",
                    "book_id": 1,
                    "created_at": "2018-01-07 22:43:13",
                    "updated_at": "2018-01-07 22:43:13"
                }
            ]
        },
        {
            "id": 2,
            "title": "Voluptas ipsam perspiciatis at ipsam soluta cum qui.",
            "subtitle": "Sit eos qui adipisci dolores.",
            "author_id": 1,
            "created_at": "2018-01-07 22:43:13",
            "updated_at": "2018-01-07 22:43:13",
            "editions": [
                {
                    "id": 2,
                    "number": 22,
                    "title": "saepe",
                    "isbn": "0012345628954",
                    "book_id": 2,
                    "created_at": "2018-01-07 22:43:13",
                    "updated_at": "2018-01-07 22:43:13"
                }
            ]
        },
        {
            "id": 3,
            "title": "Eveniet magni voluptas quia molestias unde quis eveniet ut.",
            "subtitle": "Pariatur debitis iusto ex suscipit et doloribus.",
            "author_id": 1,
            "created_at": "2018-01-07 22:43:13",
            "updated_at": "2018-01-07 22:43:13",
            "editions": [
                {
                    "id": 3,
                    "number": 2,
                    "title": "rerum",
                    "isbn": "001234568770",
                    "book_id": 3,
                    "created_at": "2018-01-07 22:43:13",
                    "updated_at": "2018-01-07 22:43:13"
                }
            ]
        }
    ]
}
```

### HTTP Request
`GET api/authors/{author}`

`HEAD api/authors/{author}`


<!-- END_31c161d4e2e8dd0cef72967cb4f6a4af -->

<!-- START_f6fe9c18a0ae3bcf79586e72a8572159 -->
## Get books by an author

> Example request:

```bash
curl -X GET "http://localhost/api/authors/{author}/books" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/authors/{author}/books",
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
[
    {
        "id": 1,
        "title": "Iusto omnis nesciunt facere odio sit nam.",
        "subtitle": "Distinctio cumque impedit rem quas.",
        "author_id": 1,
        "created_at": "2018-01-07 22:43:13",
        "updated_at": "2018-01-07 22:43:13"
    },
    {
        "id": 2,
        "title": "Voluptas ipsam perspiciatis at ipsam soluta cum qui.",
        "subtitle": "Sit eos qui adipisci dolores.",
        "author_id": 1,
        "created_at": "2018-01-07 22:43:13",
        "updated_at": "2018-01-07 22:43:13"
    },
    {
        "id": 3,
        "title": "Eveniet magni voluptas quia molestias unde quis eveniet ut.",
        "subtitle": "Pariatur debitis iusto ex suscipit et doloribus.",
        "author_id": 1,
        "created_at": "2018-01-07 22:43:13",
        "updated_at": "2018-01-07 22:43:13"
    }
]
```

### HTTP Request
`GET api/authors/{author}/books`

`HEAD api/authors/{author}/books`


<!-- END_f6fe9c18a0ae3bcf79586e72a8572159 -->

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

<!-- START_fa13f9c56aa6965785ab562044b59830 -->
## Update an author

> Example request:

```bash
curl -X PUT "http://localhost/api/authors/{author}" \
-H "Accept: application/json" \
    -d "first_name"="ex" \
    -d "middle_name"="ex" \
    -d "last_name"="ex" \
    -d "birth_year"="2018" \
    -d "death_year"="2018" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/authors/{author}",
    "method": "PUT",
    "data": {
        "first_name": "ex",
        "middle_name": "ex",
        "last_name": "ex",
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
`PUT api/authors/{author}`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    first_name | string |  required  | Maximum: `50`
    middle_name | string |  optional  | Maximum: `50`
    last_name | string |  required  | Maximum: `50`
    birth_year | date |  optional  | Date format: `Y`
    death_year | date |  optional  | Date format: `Y`

<!-- END_fa13f9c56aa6965785ab562044b59830 -->

<!-- START_54622b372d10ceea2d62536d006fd638 -->
## Delete an author

> Example request:

```bash
curl -X DELETE "http://localhost/api/authors/{author}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/authors/{author}",
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
`DELETE api/authors/{author}`


<!-- END_54622b372d10ceea2d62536d006fd638 -->

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
[
    {
        "id": 4,
        "title": "Et aut tenetur a praesentium laborum voluptates odit praesentium.",
        "subtitle": "Corporis eos sit est architecto quod mollitia totam.",
        "author_id": 2,
        "created_at": "2018-01-07 22:43:14",
        "updated_at": "2018-01-07 22:43:14",
        "author": {
            "id": 2,
            "first_name": "Adelbert",
            "middle_name": "Enola",
            "last_name": "Skiles",
            "birth_year": 1998,
            "death_year": 2001,
            "created_at": "2018-01-07 22:43:13",
            "updated_at": "2018-01-07 22:43:13"
        },
        "editions": [
            {
                "id": 4,
                "number": 25,
                "title": "qui",
                "isbn": "0012345685818",
                "book_id": 4,
                "created_at": "2018-01-07 22:43:14",
                "updated_at": "2018-01-07 22:43:14"
            }
        ]
    },
    {
        "id": 5,
        "title": "Autem sint qui sint nesciunt aut.",
        "subtitle": "Debitis quasi repudiandae et et id aliquam.",
        "author_id": 2,
        "created_at": "2018-01-07 22:43:14",
        "updated_at": "2018-01-07 22:43:14",
        "author": {
            "id": 2,
            "first_name": "Adelbert",
            "middle_name": "Enola",
            "last_name": "Skiles",
            "birth_year": 1998,
            "death_year": 2001,
            "created_at": "2018-01-07 22:43:13",
            "updated_at": "2018-01-07 22:43:13"
        },
        "editions": [
            {
                "id": 5,
                "number": 5,
                "title": "recusandae",
                "isbn": "0012345616338",
                "book_id": 5,
                "created_at": "2018-01-07 22:43:14",
                "updated_at": "2018-01-07 22:43:14"
            }
        ]
    },
    {
        "id": 6,
        "title": "Illum impedit quia reprehenderit.",
        "subtitle": "Vel voluptatem aspernatur reiciendis ut.",
        "author_id": 2,
        "created_at": "2018-01-07 22:43:14",
        "updated_at": "2018-01-07 22:43:14",
        "author": {
            "id": 2,
            "first_name": "Adelbert",
            "middle_name": "Enola",
            "last_name": "Skiles",
            "birth_year": 1998,
            "death_year": 2001,
            "created_at": "2018-01-07 22:43:13",
            "updated_at": "2018-01-07 22:43:13"
        },
        "editions": [
            {
                "id": 6,
                "number": 9,
                "title": "facilis",
                "isbn": "0012345649946",
                "book_id": 6,
                "created_at": "2018-01-07 22:43:14",
                "updated_at": "2018-01-07 22:43:14"
            }
        ]
    }
]
```

### HTTP Request
`GET api/books`

`HEAD api/books`


<!-- END_eb8df775503b6007bbbaeec13534e2e0 -->

<!-- START_5037bf4b2967efcaf3ff9ef1ac4dd532 -->
## Get a book

> Example request:

```bash
curl -X GET "http://localhost/api/books/{book}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/books/{book}",
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
{
    "id": 4,
    "title": "Et aut tenetur a praesentium laborum voluptates odit praesentium.",
    "subtitle": "Corporis eos sit est architecto quod mollitia totam.",
    "author_id": 2,
    "created_at": "2018-01-07 22:43:14",
    "updated_at": "2018-01-07 22:43:14",
    "author": {
        "id": 2,
        "first_name": "Adelbert",
        "middle_name": "Enola",
        "last_name": "Skiles",
        "birth_year": 1998,
        "death_year": 2001,
        "created_at": "2018-01-07 22:43:13",
        "updated_at": "2018-01-07 22:43:13"
    },
    "editions": [
        {
            "id": 4,
            "number": 25,
            "title": "qui",
            "isbn": "0012345685818",
            "book_id": 4,
            "created_at": "2018-01-07 22:43:14",
            "updated_at": "2018-01-07 22:43:14"
        }
    ]
}
```

### HTTP Request
`GET api/books/{book}`

`HEAD api/books/{book}`


<!-- END_5037bf4b2967efcaf3ff9ef1ac4dd532 -->

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

<!-- START_6f76bfcdd5eaf10c70a22333d5ff968a -->
## Update a book

@@param \App\Http\Request\BookRequest $request

> Example request:

```bash
curl -X PUT "http://localhost/api/books/{book}" \
-H "Accept: application/json" \
    -d "title"="voluptas" \
    -d "subtitle"="voluptas" \
    -d "author_id"="74361129" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/books/{book}",
    "method": "PUT",
    "data": {
        "title": "voluptas",
        "subtitle": "voluptas",
        "author_id": 74361129
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
`PUT api/books/{book}`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    title | string |  required  | Maximum: `300`
    subtitle | string |  optional  | Maximum: `500`
    author_id | integer |  required  | 

<!-- END_6f76bfcdd5eaf10c70a22333d5ff968a -->

<!-- START_d75ecf1315f29c879b459ea9788d1c21 -->
## Delete a book

> Example request:

```bash
curl -X DELETE "http://localhost/api/books/{book}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/books/{book}",
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
`DELETE api/books/{book}`


<!-- END_d75ecf1315f29c879b459ea9788d1c21 -->

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
[
    {
        "id": 5,
        "number": 5,
        "title": "recusandae",
        "isbn": "0012345616338",
        "book_id": 5,
        "created_at": "2018-01-07 22:43:14",
        "updated_at": "2018-01-07 22:43:14",
        "book": {
            "id": 5,
            "title": "Autem sint qui sint nesciunt aut.",
            "subtitle": "Debitis quasi repudiandae et et id aliquam.",
            "author_id": 2,
            "created_at": "2018-01-07 22:43:14",
            "updated_at": "2018-01-07 22:43:14",
            "author": {
                "id": 2,
                "first_name": "Adelbert",
                "middle_name": "Enola",
                "last_name": "Skiles",
                "birth_year": 1998,
                "death_year": 2001,
                "created_at": "2018-01-07 22:43:13",
                "updated_at": "2018-01-07 22:43:13"
            }
        }
    },
    {
        "id": 6,
        "number": 9,
        "title": "facilis",
        "isbn": "0012345649946",
        "book_id": 6,
        "created_at": "2018-01-07 22:43:14",
        "updated_at": "2018-01-07 22:43:14",
        "book": {
            "id": 6,
            "title": "Illum impedit quia reprehenderit.",
            "subtitle": "Vel voluptatem aspernatur reiciendis ut.",
            "author_id": 2,
            "created_at": "2018-01-07 22:43:14",
            "updated_at": "2018-01-07 22:43:14",
            "author": {
                "id": 2,
                "first_name": "Adelbert",
                "middle_name": "Enola",
                "last_name": "Skiles",
                "birth_year": 1998,
                "death_year": 2001,
                "created_at": "2018-01-07 22:43:13",
                "updated_at": "2018-01-07 22:43:13"
            }
        }
    }
]
```

### HTTP Request
`GET api/editions`

`HEAD api/editions`


<!-- END_0bc88c828f9ed60f973486f586c9f7dd -->

<!-- START_201aa0452dbcd20328b2af66eabeb5bc -->
## Get an edition

> Example request:

```bash
curl -X GET "http://localhost/api/editions/{edition}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/editions/{edition}",
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
{
    "id": 5,
    "number": 5,
    "title": "recusandae",
    "isbn": "0012345616338",
    "book_id": 5,
    "created_at": "2018-01-07 22:43:14",
    "updated_at": "2018-01-07 22:43:14",
    "book": {
        "id": 5,
        "title": "Autem sint qui sint nesciunt aut.",
        "subtitle": "Debitis quasi repudiandae et et id aliquam.",
        "author_id": 2,
        "created_at": "2018-01-07 22:43:14",
        "updated_at": "2018-01-07 22:43:14",
        "author": {
            "id": 2,
            "first_name": "Adelbert",
            "middle_name": "Enola",
            "last_name": "Skiles",
            "birth_year": 1998,
            "death_year": 2001,
            "created_at": "2018-01-07 22:43:13",
            "updated_at": "2018-01-07 22:43:13"
        }
    }
}
```

### HTTP Request
`GET api/editions/{edition}`

`HEAD api/editions/{edition}`


<!-- END_201aa0452dbcd20328b2af66eabeb5bc -->

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

<!-- START_58cdd3bdc5b20c1354556a881ba0d5a1 -->
## Update an edition

> Example request:

```bash
curl -X PUT "http://localhost/api/editions/{edition}" \
-H "Accept: application/json" \
    -d "number"="25" \
    -d "title"="asperiores" \
    -d "isbn"="asperiores" \
    -d "book_id"="10441693" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/editions/{edition}",
    "method": "PUT",
    "data": {
        "number": 25,
        "title": "asperiores",
        "isbn": "asperiores",
        "book_id": 10441693
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
`PUT api/editions/{edition}`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    number | integer |  required  | Maximum: `25`
    title | string |  required  | Maximum: `150`
    isbn | string |  optional  | Must match this regular expression: `/^(\d{10}(\d{3})?)?$/`
    book_id | integer |  required  | 

<!-- END_58cdd3bdc5b20c1354556a881ba0d5a1 -->

<!-- START_8000552f71f70d145486dbef43547b74 -->
## Delete an edition

> Example request:

```bash
curl -X DELETE "http://localhost/api/editions/{edition}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/editions/{edition}",
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
`DELETE api/editions/{edition}`


<!-- END_8000552f71f70d145486dbef43547b74 -->

