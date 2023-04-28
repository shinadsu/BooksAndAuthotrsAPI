


## Развертывание и использование
- приложение готово к использованию по адресу  `http://185.154.192.245`
- тестовое API с авторами находится в `http://185.154.192.24/api/authors/`
- тестовоге API с книгами находится в `http://185.154.192.24/api/books/`
- кофигурационные файлы находятся в `http://185.154.192.24/api/config/`

## Методы API



##### Responses

> | http code     | content-type                      | response                                                            |
> |---------------|-----------------------------------|---------------------------------------------------------------------|
> | `201`         | `application/jso;charset=UTF-8`        | `Configuration created successfully`                                |
> | `400`         | `application/json`                | `{"code":"400","message":"Bad Request"}`                            	|       
> | `200`         | `application/jso;charset=utf-8`         | None                                                                |




</details>

------------------------------------------------------------------------------------------

#### Listing existing stubs & proxy configs as JSON string




<details>
 <summary><code>GET</code> <code><b>/getAllBooks</b></code> <code>(gets list of all books)</code></summary>

##### Responses

> | http code     | content-type                      | response                                                            |
> |---------------|-----------------------------------|---------------------------------------------------------------------|
> | `200`         | `text/plain;charset=UTF-8`        | JSON                                                          |
> | `400`         |                                   | `{"code":"400","message":"Bad Request"}`                            |


</details>

<details>
  <summary><code>GET</code> <code><b>/getBooksFromId</b></code> <code>(gets book from id)</code></summary>

##### Parameters

> | name   |  type      | data type      | description                                          |
> |--------|------------|----------------|------------------------------------------------------|
> | `id`   |  required  | int            | integer value                  						|

##### Responses

> | http code     | content-type                      | response                                                            |
> |---------------|-----------------------------------|---------------------------------------------------------------------|
> | `200`         | `text/plain;charset=UTF-8`        | JSON                                                          |
> | `400`         | `application/json`                | `{"code":"400","message":"Bad Request"}`                            |


</details>


<details>
  <summary><code>GET</code> <code><b>/getBookFromTitle</b></code> <code>(get books from title)</code></summary>

##### Parameters

> | name   |  type      | data type      | description                                          |
> |--------|------------|----------------|------------------------------------------------------|
> | `title`|  required  | string         | string value                  						|

##### Responses

> | http code     | content-type                      | response                                                            |
> |---------------|-----------------------------------|---------------------------------------------------------------------|
> | `200`         | `text/plain;charset=UTF-8`        | JSON                                                        |
> | `400`         | `application/json`                | `{"code":"400","message":"Bad Request"}`                            |


</details>


<details>
  <summary><code>GET</code> <code><b>/getBooksFromAuthor</b></code> <code>(get books from author_id)</code></summary>

##### Parameters

> | name   |  type      | data type      | description                                                  |
> |--------|------------|----------------|--------------------------------------------------------------|
> | `author_id` |  required  | int         | integer value                  |

##### Responses

> | http code     | content-type                      | response                                                            |
> |---------------|-----------------------------------|---------------------------------------------------------------------|
> | `200`         | `text/plain;charset=UTF-8`        | JSON                                                         |
> | `400`         | `application/json`                | `{"code":"400","message":"Bad Request"}`                             |


</details>

<details>
  <summary><code>GET</code> <code><b>/getAllAuthors</b></code> <code>(get all authors)</code></summary>


##### Responses

> | http code     | content-type                      | response                                                            |
> |---------------|-----------------------------------|---------------------------------------------------------------------|
> | `200`         | `text/plain;charset=UTF-8`        | JSON                                                          |
> | `400`         |                                   | `{"code":"400","message":"Bad Request"}`                            |


</details>

------------------------------------------------------------------------------------------
#### Posting existing & proxy configs
<details>
  <summary><code>POST</code> <code><b>/postBook</b></code> <code>(posting book)</code></summary>
  

##### Parameters

> | name   |  type      | data type      | description                                                  |
> |--------|------------|----------------|--------------------------------------------------------------|
> | `id`   |  required  	| int            | integer value                  |
> | `title` |  required | str            | string value                  |
> | `description` |  required  | str     | string value                  |
> | `year` |  required  | int            | integer value                  |
> | `genre` |  required  | str           | string value                  |
> | `author_id` |  required  | int       | integer value                  |

##### Responses

> | http code     | content-type                      | response                                                            |
> |---------------|-----------------------------------|---------------------------------------------------------------------|
> | `200`         | `text/plain;charset=UTF-8`        | `{"status" => 200,,"message":"book was updated"}`                                                        |
> | `400`         | `application/json`                |  `{"code":"400","message":"Bad Request"}`                        |


</details>

<details>
  <summary><code>POST</code> <code><b>/postAuthor</b></code> <code>(posting author)</code></summary>
  

##### Parameters

> | name   |  type      | data type      | description                                                  |
> |--------|------------|----------------|--------------------------------------------------------------|
> | `id`   |  required  	| int            | integer value                 							|
> | `name` |  required | str            | string value                  								|
> | `middlename` |  required  | str     | string value                  								|
> | `lastname` |  required  | str            | string value                  							|

##### Responses

> | http code     | content-type                      | response                                                            |
> |---------------|-----------------------------------|---------------------------------------------------------------------|
> | `200`         | `text/plain;charset=UTF-8`        | `{"status" => 201,"message":"author was createdd"}`                           
> | `400`         | `application/json`                |  `{"code":"400","message":"Bad Request"}`                           


</details>


------------------------------------------------------------------------------------------
#### Updating existing stubs & proxy configs

<details>
  <summary><code>PATCH</code> <code><b>/updateBook</b></code> <code>(update book)</code></summary>

##### Parameters

> | name   |  type      | data type      | description                                                  |
> |--------|------------|----------------|--------------------------------------------------------------|
> | `id`   |  required  	| int        | integer value                  |
> | `title` |  required | str            | string value                  |
> | `description` |  required  | str     | string value                  |
> | `year` |  required  | int            | integer value                  |
> | `genre` |  required  | str           | string value                  |
> | `author_id` |  required  | int       | integer value                  |

##### Responses

> | http code     | content-type                      | response                                                            |
> |---------------|-----------------------------------|---------------------------------------------------------------------|
> | `200`         | `text/plain;charset=UTF-8`        | `{"status" => 200,"message":"book was updated"`}        |
> | `400`         | `application/json`                | `{"code":"400","message":"Bad Request"}`                            |
                                                            


</details>

<details>
  <summary><code>PATCH</code> <code><b>/updateAuthor</b></code> <code>(update author)</code></summary>
  
##### Parameters

> | name   |  type      | data type      | description                                                  |
> |--------|------------|----------------|--------------------------------------------------------------|
> | `id`   |  required  	| int            | integer value                 							|
> | `name` |  required | str            | string value                  								|
> | `middlename` |  required  | str     | string value                  								|
> | `lastname` |  required  | str            | string value                  							|

##### Responses

> | http code     | content-type                      | response                                                            |
> |---------------|-----------------------------------|---------------------------------------------------------------------|
> | `200`         | `text/plain;charset=UTF-8`        | `{"status" => 200,"message":"author was updated"`}`                                                     |
> | `400`         | `application/json`                | `{"code":"400","message":"Bad Request"}`                             



</details>



------------------------------------------------------------------------------------------

#### Deleting existing stubs & proxy configs

<details>
  <summary><code>DELETE</code> <code><b>/deleteAuthor</b></code> <code>(delete author from id)</code></summary>

##### Parameters

> | name   |  type      | data type      | description                                          |
> |--------|------------|----------------|------------------------------------------------------|
> | `id`   |  required  | int         	 | integer value                  						|

##### Responses

> | http code     | content-type                      | response                                                            |
> |---------------|-----------------------------------|---------------------------------------------------------------------|
> | `200`         | `text/plain;charset=UTF-8`        | `{"status" => 200,"message":"author was deleted"`}`                |




</details>



------------------------------------------------------------------------------------------
