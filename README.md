# Laravel 10 Livewire 訂單收入圖表

藉由分析訂單收入數據，掌握銷售趨勢，制定收入目標，優化營運流程及產品服務，以實現收入增加、資金累積，推動企業的發展，提高獲利能力。

## 使用方式
- 打開 php.ini 檔案，啟用 PHP 擴充模組 gd，並重啟服務器。
- 把整個專案複製一份到你的電腦裡，這裡指的「內容」不是只有檔案，而是指所有整個專案的歷史紀錄、分支、標籤等內容都會複製一份下來。
```sh
$ git clone
```
- 將 __.env.example__ 檔案重新命名成 __.env__，如果應用程式金鑰沒有被設定的話，你的使用者 sessions 和其他加密的資料都是不安全的！
- 當你的專案中已經有 composer.lock，可以直接執行指令以讓 Composer 安裝 composer.lock 中指定的套件及版本。
```sh
$ composer install
```
- 產生 Laravel 要使用的一組 32 字元長度的隨機字串 APP_KEY 並存在 .env 內。
```sh
$ php artisan key:generate
```
- 執行 __Artisan__ 指令的 __migrate__ 來執行所有未完成的遷移，並執行資料庫填充（如果要測試的話）。
```sh
$ php artisan migrate --seed
```
- 執行安裝 Vite 和 Laravel 擴充套件引用的依賴項目。
```sh
$ npm install
```
- 執行正式環境版本化資源管道並編譯。
```sh
$ npm run build
```
- 在瀏覽器中輸入已定義的路由 URL 來訪問，例如：http://127.0.0.1:8000。
- 你可以經由 `/register` 來進行註冊。
- 完成註冊後，可以經由 `/login` 來進行登入。

----

## 畫面截圖
![](https://i.imgur.com/PsHoNAd.png)
> 消費者在購買產品時，會考慮許多面向，有時候價格並非唯一考量點，更多的時候是圖個方便

![](https://i.imgur.com/3b0Tkcp.png)
> 為保障交易資料安全，訂單成立後，所有訂單資訊是無法修改的

![](https://i.imgur.com/X55s01g.png)
> 除了保持品牌的「初心」外，還要尋找適合與消費者對話的方式，善用各種軟硬體設備，才能在後疫情時代讓業績及品牌知名度雙雙起飛