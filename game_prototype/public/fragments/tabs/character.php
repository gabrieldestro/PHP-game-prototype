<h2>Character</h2>
<div>
    <img style="width: 200px; float: left;" src='resources/images/paladin.jpg'>
    <form action="home.php" method="post">
        <div class="form-inline">
            <label for="str">str </label>
            <p><?php echo $str ?></p>
            <input type="submit" class="btnAction form-control" name="str" id="str" value="+">
        </div>
        <div class="form-inline">
            <label for="agi">agi </label>
            <p><?php echo $agi ?></p>
            <input type="submit" class="btnAction form-control" name="agi" id="agi" value="+">
        </div>
        <div class="form-inline">
            <label for="int">int </label>
            <p><?php echo $int ?></p>
            <input type="submit" class="btnAction form-control" name="int" id="int" value="+">
        </div>
    </form>
</div>