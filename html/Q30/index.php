<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>データの表示</title>
  </head>
  <body>
    <h1>データの表示<</h1>
    <form method="POST" action="search.php">
      <div>
        <label>整列項目</label><br />
        <input type="radio" name="type" value="0" checked />id
        <input type="radio" name="type" value="1" />氏名
        <input type="radio" name="type" value="2" />性別
        <input type="radio" name="type" value="3" />年齢
        <input type="radio" name="type" value="4" />登録日
      </div>
      <div>
        <label>整列順</label><br />
        <input type="radio" name="order" value="0" checked />昇順
        <input type="radio" name="order" value="1" />降順
      </div>
      <div>
        <input type="submit" value="表示" />
      </div>
    </form>
  </body>
</html>
