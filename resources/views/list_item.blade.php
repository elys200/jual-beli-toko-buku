<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Book Store</title>
  <style>
    .book-list {
      list-style-type: none;
      padding: 0;
    }

    .book-item {
      display: flex;
      align-items: center;
      padding: 10px;
      border-bottom: 1px solid #ddd;
    }

    .book-image {
      width: 100px;
      height: 150px;
      margin-right: 10px;
    }

    .book-image img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .book-info {
      flex: 1;
    }

    .book-title {
      font-size: 18px;
      font-weight: bold;
      margin-bottom: 5px;
    }

    .book-author {
      font-size: 14px;
      color: #666;
      margin-bottom: 5px;
    }

    .book-price {
      font-size: 16px;
      font-weight: bold;
      color: #f60;
    }
  </style>
</head>
<body>
  <h1>Book Store</h1>
  <ul class="book-list">
    <li class="book-item">
      <div class="book-image">
        <img src="book1.jpg" alt="Book 1">
      </div>
      <div class="book-info">
        <div class="book-title">Book 1</div>
        <div class="book-author">Author 1</div>
        <div class="book-price">$20</div>
      </div>
    </li>
    <li class="book-item">
      <div class="book-image">
        <img src="book2.jpg" alt="Book 2">
      </div>
      <div class="book-info">
        <div class="book-title">Book 2</div>
        <div class="book-author">Author 2</div>
        <div class="book-price">$25</div>
      </div>
    </li>
    <li class="book-item">
      <div class="book-image">
        <img src="book3.jpg" alt="Book 3">
      </div>
      <div class="book-info">
        <div class="book-title">Book 3</div>
        <div class="book-author">Author 3</div>
        <div class="book-price">$30</div>
      </div>
    </li>
  </ul>
</body>
</html>