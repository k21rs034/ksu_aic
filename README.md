# 総合機器センター予約システム
1. 仕様
 - すべての機能や画面のソースファイルは、srcフォルダ以下に集約する。．
 - 各機能や画面の利用は、必ずindex.phpを通して行う。
 - 各機能や画面のURLは以下のような相対URLに統一。

2. コーディング規約
- PHPタグ
- PHPタグは`<?php `, `<?= `しか使わない。PHPコードのみの場合、終了タグ`?>` を付けない`<?=$foo?>` は`<?phpecho $foo;?>` の簡略式
- 文字コードUTF-8 BOM無しに統一
- 副作用
- 副作用のあるコードと副作用のないコードを同じフィルにしない。副作用のあるコードとは、画面出力、設定変更等を行うコードを指す。副作用のないコードとは、クラス、関数、定数等の記号を宣言・定義するコードを指す中括弧クラス、関数の場合は、中括弧を新しい行とする。その他は、開き括弧前に改行せず、閉じ括弧のみ新しい行とする。
- 改行
- PHPファイルの最後に空白行を1行入れる。名前空間のあとに空白行を1行入れる。インデントTabを使わず、スペース4文字とする
- スペース
- 制御文のキーワード後にスペースを一つ入れる。関数呼び出し時に丸括弧（開き・閉じ括弧とも）の前後にスペースなし。コンマ「,」の前にスペースを入れず、コンマの後に一つ入れる。
- クラス名大文字から始まる`StudlyCaps` `class KsuCalendar{ }`
- 関数名小文字から始まる`camelCase``function getName($dept_id)`
- 変数・引数名全て小文字。アンダーバーで単語をつなぐ`$first_name`
- 定数名全て大文字。アンダーバーで単語をつなぐ`const FACULTY_CODE='RS';`
- 行長 強制はしないが、おすすめは80文字以内 文数同じ行に複数の文を書かない

3. 役割分担
- 申請関連 石橋
- 空き状況 機器設備 金政
