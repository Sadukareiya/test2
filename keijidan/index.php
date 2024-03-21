<!doctype html>
<html lang="ja">
    
<head>
    <meta charset="utf-8">
    <title>diworksblog 掲示板</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
    
<body>
    <header>
        <h1><img class="main" src="diblog_logo.jpg" alt="diblog"></h1>
    
    <nav>
        <ul>
        <li></li>
        <li>プロフィール</li>
        <li>D.I.Blogについて</li>
        <li>登録フォーム</li>
        <li>問い合わせ</li>
        <li>その他</li>
        </ul>
    </nav>
    </header>
    
    <main>
        <div class="main">
        <div class="left">
            <h2>プログラミングに役立つ掲示板</h2>
            <form method="post" action="insert.php">
                <div>
                <label>ハンドルネーム</label><br>
                <input type="text" class="text" size-"35" name="handlename">
                </div>

                <div>
                <label>タイトル</label><br>
                <input type="text" class="text" size-"35" name="title">
                </div>
                    
                <div>
                <label>コメント</label><br>
                    <textatea cols="35" roes="7" name="comments"></textatea>
                </div>
                
                <div>
                <inpet type="submit" class="submit" value="送信する"></inpet>
                </div>
                
            </form>
            
            <div class="kiji1">
            <h3>タイトル</h3>
            
            <p>記事の中身　記事の中身　記事の中身　記事の中身　記事の中身　記事の中身　記事の中身　記事の中身　記事の中身　記事の中身　記事の中身　記事の中身</p>
            <p class="hh">poited by通りすがり</p>
            </div>
                
            <div class="kiji2">    
            <h3>タイトル</h3>
            
            <p>記事の中身　記事の中身　記事の中身　記事の中身　記事の中身　記事の中身　記事の中身　記事の中身　記事の中身　記事の中身　記事の中身　記事の中身</p>
            <p class="hh">poited by通りすがり</p>
            </div>
            
        </div>
        
        <div class="right">
            <h4>人気の記事</h4>
            <p>PHPオススメの本</p>
            <p>PHP MyAdminの使い方</p>
            <p>いま人気のエディタTop5</p>
            <p>HTMLの基礎</p>
            <h4>オススメリンク</h4>
            <p>ﾃﾞｨｰｱｲﾜｰｽｸ株式会社</p>
            <p>XAMMPのダウンロード</p>
            <p>Eclipseのダウンロード</p>
            <p>Braketsのダウンロード</p>
            <h4>カテゴリ</h4>
            <p>HTML</p>
            <p>PHP</p>
            <p>MySQL</p>
            <p>JavaScript</p>
        </div>
        </div>
        </main>
    <footer>Copyright D.I.works| D.I.blog is the one which provides A to Z about programming</footer>
</body>

    