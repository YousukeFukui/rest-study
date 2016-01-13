<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>シンプルTODOアプリ</title>
</head>
<body>
<!-- コンテンツ -->
<div id="main"></div>
   <!-- TODO一覧表示のレイアウトテンプレート -->
   <script type="text/template" id="todo-layout-template">
    <h1>TODOリスト</h1>
   <div id="todo-lists"></div>
   </script>

   <!-- TODO一覧表示のテンプレート -->
   <script type="text/template" id="todo-composite-template">
   <textarea style="width:300px;height:50px"id="new-todo" placeholder="Todo?" autofocus></textarea>
   <input type="button" id="addTodo" value="追加">
   <hr>
   <div>
       <table border="1" width="350px">
           <tbody></tbody>
       </table>
   </div>
   </script>

   <!-- TODO一行分のテンプレート（上のtbody部分に挿入される） -->
   <script type="text/template" id="todo-item-template">
<td><input type="checkbox" class="toggle" <%- status === '1' ? 'checked' : '' %>></td> 
  <td style="margin:0px">
       <span class="todo-edit" style="margin:0px"><%- todo %></span>
   </td>
   <td>
       <a class="remove-link" href="#">削除</a>
	<a class="detail-link" href="#todo-lists/<%- id %>">詳細</a>  
 </td>
   </script>
   <!-- 詳細画面のレイアウトテンプレート -->
   <script type="text/template" id="todo-detail-layout-template">
   <div id="todo-item"></div>
   </script>

   <!-- 詳細画面の表示内容テンプレート -->
   <script type="text/template" id="todo-detail-item-template">

   <h2>Todo #<%- id %></h2>
   <div>
   <textarea style="width:300px;height:50px" id="edit-todo" autofocus placeholder="Todo?"><%- todo %></textarea>
<input type="button" id="updateTodo" value="更新"></input>
   <input type="button" id="updateCancel" value="キャンセル"></input>
   </div>
   </script>

   <!-- require -->
   <script type="text/javascript" src="js/require-config.js"></script>
   <script type="text/javascript" src="js/lib/require.js" data-main="main.js"></script>
</body>
</html>
