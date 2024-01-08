<div class="create">
   <form name="createNews" method="post" action="../../../controllers/newsManagement/createMove.php">
       <label for="newsHeadline">Заголовок:</label><br>
       <textarea  id="newsHeadline" name="title"></textarea><br>
       <label for="newsContent">Содержание:</label><br>
       <textarea name="text" rows="10" cols="30" id="newsContent"></textarea><br>
       <label for="newsAuthor">Автор:</label><br>
       <textarea id="newsAuthor" name="author"></textarea><br>
       <input type="submit" value="Отправить">
   </form>
</div>