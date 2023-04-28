<!DOCTYPE html>
<html>
<head>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <style>
.opblock-summary {
  display: flex;
  align-items: center;
  margin-bottom: 1rem;
  background-color: #fff;
  border-radius: 0.25rem;
  box-shadow: 0 0 0.25rem rgba(0, 0, 0, 0.1);
}

.opblock-summary:hover {
  background-color: #f5f5f5;
}

.opblock-summary-control {
  display: flex;
  align-items: center;
  width: 100%;
  padding: 1rem;
  border-radius: 0.25rem;
  cursor: pointer;
}

.opblock-summary-control:hover {
  background-color: #f5f5f5;
}

.opblock-summary-method {
  display: inline-block;
  margin-right: 1rem;
  padding: 0.5rem;
  background-color: #007bff;
  color: #fff;
  font-size: 1.25rem;
  font-weight: bold;
  text-transform: uppercase;
  border-radius: 0.25rem;
}

.opblock-summary-path {
  flex: 1;
  margin-right: 1rem;
  font-size: 1.25rem;
}

.opblock-summary-description {
  flex: 3;
  font-size: 1rem;
}

.arrow {
  margin-left: 1rem;
  fill: #007bff;
}

.arrow-rotate {
  transform: rotate(180deg);
}

.api-section-title {
  margin-top: 2rem;
  margin-bottom: 1rem;
  font-size: 2rem;
  font-weight: bold;
  text-transform: uppercase;
}
.tooltip {
  position: relative;
  display: inline-block;
}

.tooltip .tooltiptext {
  visibility: hidden;
  width: 140px;
  background-color: #555;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 5px;
  position: absolute;
  z-index: 1;
  bottom: 150%;
  left: 50%;
  margin-left: -75px;
  opacity: 0;
  transition: opacity 0.3s;
}

.tooltip .tooltiptext::after {
  content: "";
  position: absolute;
  top: 100%;
  left: 50%;
  margin-left: -5px;
  border-width: 5px;
  border-style: solid;
  border-color: #555 transparent transparent transparent;
}

.tooltip:hover .tooltiptext {
  visibility: visible;
  opacity: 1;
}

  </style>
  <script>
    $(document).ready(function() {
      $("table tr").click(function() {
        $(this).next(".details").toggle();
      });
    });
    function myFunction() {
  // Get the text field
  var copyText = document.getElementById("myInput");

  // Select the text field
  copyText.select();
  copyText.setSelectionRange(0, 99999); // For mobile devices

   // Copy the text inside the text field
  navigator.clipboard.writeText(copyText.value);

  // Alert the copied text
  alert("Copied the text: " + copyText.value);

  <script>
  $(document).ready(function() {
    // Add a click event to the span element with class "copyable"
    $(".copyable").click(function() {
      // Toggle the visibility of the dropdown menu
      $(this).find(".dropdown").toggle();
    });
    
    // Prevent the dropdown from closing when clicked inside
    $(".dropdown").click(function(event) {
      event.stopPropagation();
    });
    
    // Copy the text content of the clicked link to the clipboard
    $(".dropdown a").click(function() {
      var text = $(this).text();
      navigator.clipboard.writeText(text);
      
      // Add a success message (optional)
      $(this).after("<span class='copy-success'>Copied!</span>");
      setTimeout(function() {
        $(".copy-success").remove();
      }, 1000);
      
      // Hide the dropdown menu
      $(this).closest(".dropdown").hide();
    });
  });
</script>
</head>
<body>
<div class="api-section">
  <h2 class="api-section-title">Authors</h2>
  <div class="opblock opblock-get">
    <!-- Your existing code for GET /atomicassets/v1/assets block goes here -->
    <div class="opblock-summary opblock-summary-get">
    <button aria-label="get ​/atomicassets​/v1​/assets" aria-expanded="true" class="opblock-summary-control">
        <span class="opblock-summary-method">GET</span><span class="opblock-summary-path" data-path="http://185.154.192.245/api/authors/getAllAuthors">
            <a class="nostyle" >
                <span class="copyable">api<wbr>/authors<wbr>/getAllAuthors</span></a>
               
            </span>
        <div class="opblock-summary-description">Получает список всех авторов</div>
        <svg class="arrow" width="20" height="20" aria-hidden="true" focusable="false">
            <use href="#large-arrow-up" xlink:href="#large-arrow-up"></use>
        </svg>
    </button>
</div>
  </div>
  <div class="opblock opblock-post">
    <!-- Your code for POST /atomicassets/v1/assets block goes here -->
    <div class="opblock-summary opblock-summary-get">
    <button aria-label="get ​/atomicassets​/v1​/assets" aria-expanded="true" class="opblock-summary-control">
        <span class="opblock-summary-method">POST</span><span class="opblock-summary-path" data-path="/atomicassets/v1/assets">
            <a class="nostyle" >
            <span class="copyable">api<wbr>/authors<wbr>/postAuthor</span></a>
            
        </a>
    </span>
        <div class="opblock-summary-description">Добавляет автора в бд. Обязательные парметры - id,
        name,
        middlename,
        lastname
        </div>
        <svg class="arrow" width="20" height="20" aria-hidden="true" focusable="false">
            <use href="#large-arrow-up" xlink:href="#large-arrow-up"></use>
        </svg>
    </button>
  </div>
  <div class="opblock opblock-post">
    <!-- Your code for POST /atomicassets/v1/assets block goes here -->
    <div class="opblock-summary opblock-summary-get">
    <button aria-label="get ​/atomicassets​/v1​/assets" aria-expanded="true" class="opblock-summary-control">
        <span class="opblock-summary-method">PATCH</span><span class="opblock-summary-path" data-path="/atomicassets/v1/assets">
            <a class="nostyle" >
            <span class="copyable">api<wbr>/authors<wbr>/updateAuthors</span></a>
            
        </a>
    </span>
        <div class="opblock-summary-description">Обновляет автора в бд. Обязательные парметры - id,
        name,
        middlename,
        lastname
        </div>
        <svg class="arrow" width="20" height="20" aria-hidden="true" focusable="false">
            <use href="#large-arrow-up" xlink:href="#large-arrow-up"></use>
        </svg>
    </button>
  </div>
</div>
<div class="opblock opblock-post">
    <!-- Your code for POST /atomicassets/v1/assets block goes here -->
    <div class="opblock-summary opblock-summary-get">
    <button aria-label="get ​/atomicassets​/v1​/assets" aria-expanded="true" class="opblock-summary-control">
        <span class="opblock-summary-method">DELETE</span><span class="opblock-summary-path" data-path="/atomicassets/v1/assets">
            <a class="nostyle" >
            <span class="copyable">api<wbr>/authors<wbr>/deleteAuthor</span></a>
        </a>
    </span>
        <div class="opblock-summary-description">Удаляет автора из бд. Обязательные парметры - id
        </div>
        <svg class="arrow" width="20" height="20" aria-hidden="true" focusable="false">
            <use href="#large-arrow-up" xlink:href="#large-arrow-up"></use>
        </svg>
    </button>
  </div>

<div class="api-section">
  <h2 class="api-section-title">BOOKS</h2>
  <div class="opblock opblock-get">
    <!-- Your existing code for GET /atomicassets/v1/assets block goes here -->
    <div class="opblock-summary opblock-summary-get">
    <button aria-label="get ​/atomicassets​/v1​/assets" aria-expanded="true" class="opblock-summary-control">
        <span class="opblock-summary-method">GET</span><span class="opblock-summary-path" data-path="http://185.154.192.245/api/authors/getAllAuthors">
            <a class="nostyle" >
                <span class="copyable">api<wbr>/books<wbr>/getAllBooks</span></a>
               
            </span>
        <div class="opblock-summary-description">Получает список всех книг</div>
        <svg class="arrow" width="20" height="20" aria-hidden="true" focusable="false">
            <use href="#large-arrow-up" xlink:href="#large-arrow-up"></use>
        </svg>
    </button>
</div>
<div class="opblock-summary opblock-summary-get">
    <button aria-label="get ​/atomicassets​/v1​/assets" aria-expanded="true" class="opblock-summary-control">
        <span class="opblock-summary-method">POST</span><span class="opblock-summary-path" data-path="/atomicassets/v1/assets">
            <a class="nostyle" >
            <span class="copyable">api<wbr>/books<wbr>/postBook</span></a>
        </a>
    </span>
        <div class="opblock-summary-description">Добавляет книгу в бд. Обязательные парметры - id,
    title,
    description,
    year,
    genre,
    author_id </div>
        <svg class="arrow" width="20" height="20" aria-hidden="true" focusable="false">
            <use href="#large-arrow-up" xlink:href="#large-arrow-up"></use>
        </svg>
    </button>
  </div>
  <div class="opblock-summary opblock-summary-get">
    <button aria-label="get ​/atomicassets​/v1​/assets" aria-expanded="true" class="opblock-summary-control">
        <span class="opblock-summary-method">PATCH</span><span class="opblock-summary-path" data-path="/atomicassets/v1/assets">
            <a class="nostyle" >
            <span class="copyable">api<wbr>/books<wbr>/updateBooks</span></a>
        </a>
    </span>
        <div class="opblock-summary-description">Обновляет книгу в бд. Обязательные парметры - id,
    title,
    description,
    year,
    genre,
    author_id</div>
        <svg class="arrow" width="20" height="20" aria-hidden="true" focusable="false">
            <use href="#large-arrow-up" xlink:href="#large-arrow-up"></use>
        </svg>
    </button>
  </div>
  <div class="opblock-summary opblock-summary-get">
    <button aria-label="get ​/atomicassets​/v1​/assets" aria-expanded="true" class="opblock-summary-control">
        <span class="opblock-summary-method">GET</span><span class="opblock-summary-path" data-path="/atomicassets/v1/assets">
            <a class="nostyle" >
            <span class="copyable">api<wbr>/books<wbr>/getBookFromTitle</span></a>
        </a>
    </span>
        <div class="opblock-summary-description">Получает книгу в по ее названию. Обязательные парметры - title
        </div>
        <svg class="arrow" width="20" height="20" aria-hidden="true" focusable="false">
            <use href="#large-arrow-up" xlink:href="#large-arrow-up"></use>
        </svg>
    </button>
  </div>
  </div>
  <div class="opblock-summary opblock-summary-get">
    <button aria-label="get ​/atomicassets​/v1​/assets" aria-expanded="true" class="opblock-summary-control">
        <span class="opblock-summary-method">GET</span><span class="opblock-summary-path" data-path="/atomicassets/v1/assets">
            <a class="nostyle" >
            <span class="copyable">api<wbr>/books<wbr>/getBookFromAuthor</span></a>
        </a>
    </span>
        <div class="opblock-summary-description">получает все книги по автору. Обязательные парамаетры - author_id </div>
        <svg class="arrow" width="20" height="20" aria-hidden="true" focusable="false">
            <use href="#large-arrow-up" xlink:href="#large-arrow-up"></use>
        </svg>
    </button>
  </div>
  <div class="opblock-summary opblock-summary-get">
    <button aria-label="get ​/atomicassets​/v1​/assets" aria-expanded="true" class="opblock-summary-control">
        <span class="opblock-summary-method">GET</span><span class="opblock-summary-path" data-path="/atomicassets/v1/assets">
            <a class="nostyle" >
            <span class="copyable">api<wbr>/books<wbr>/getBooksFromId</span></a>
        </a>
    </span>
        <div class="opblock-summary-description">Получает книгу в по ее названию. Обязательные парметры - id</div>
        <svg class="arrow" width="20" height="20" aria-hidden="true" focusable="false">
            <use href="#large-arrow-up" xlink:href="#large-arrow-up"></use>
        </svg>
    </button>
  </div>

  </div>
</body>
</html>
