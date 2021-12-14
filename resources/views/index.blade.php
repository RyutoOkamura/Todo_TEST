<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport"content="width=device-width, initial-scale=1">
<meta name="description" content="検索結果でサイト名の下に表示される「サイトの説明文」">
<link rel="apple-touch-icon" sizes="180x180" href="アップルタッチ用のファビコン(相対パスOK）.png">
<link rel="icon" type="image/png" sizes="32x32" href="32サイズのファビコン画像(相対パスOK）.png">
<link rel="icon" type="image/png" sizes="16x16" href="16サイズのファビコン画像(相対パスOK）.png">
<link rel="manifest" href="PWA化のためのマニフェストファイル.webmanifest">
<meta name="msapplication-TileColor" content="Windowsピン留めのテーマカラーを設定→#ffffff">
<meta name="theme-color" content="theme-colorを設定→#ffffff">
<meta name="msapplication-TileImage" content="Windowsピン留め時の画像(絶対パス）.png" />
<meta property="og:description" content="SNSでシェアされたときに表示するサイトの説明文">
<meta property="og:title" content="SNSでシェアされたときに表示するサイトのタイトル">
<meta property="og:image" content="SNSでシェアされたときに表示する画像※かならず絶対パスを記載（相対パス不可）https://....../img/icons/logo.png">
<meta property="og:image:width" content="画像の幅px">
<meta property="og:image:height" content="画像の高さpx">
<meta property="og:type" content="urlがトップページの場合→website、トップページ以外の場合→article">
<meta property="og:url" content="https://........">
<title>COACHTECH</title>
<link rel="stylesheet"  href="css/style.css">
</head>
<body>
    <div class="top-wrapper">
      <div class="container">
        <h2 class="title">Todo List</h2>
        <div class="add-todo">
          <form action="/todo/create" method="post">
            @csrf
            <input class="content-input" type="text" name="content">
            <input type="submit" value="送信" class="add-button">
          </form>
          <table>
            <tbody>
              <tr>
                <th>作成日</th>
                <th>タスク名</th>
                <th>更新</th>
                <th>削除</th>
              </tr>
              @foreach ($todos as $todo)
              <tr>
                <td>
                  {{$todo->created_at}}
                </td>
                <td>
                  <input class="content-update" type="text" name="content" value="{{$todo->content}}">
                </td>
                <td>
                  <button class="update-button" action="/todo/update" method="post">更新</button>
                </td>
                <td>
                  <form action="/todo/delete" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="delete-button">削除</button>
                  </form>
                </td>
              </tr>
              @endforeach
            </tbody>

          </table>
        </div>
      </div>
    </div>
</body>
</html>