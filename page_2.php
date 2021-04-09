<h2>The Participants are:</h2>
<div class="form-group">
    <form>
        <div class="form-group">
            <?php foreach($namesArray as $name){ ?>
                <button class="btn btn-outline-primary">
                    <?php echo $name; ?>
                </button>

            <?php }?>

            <input 
            type="hidden"
            name="names"
            value=<?php echo implode(',', $namesArray);?>
            >

                <div class="form-group">
                    <input class="btn btn-primary" 
                    type="submit" name="do_math" 
                    value="Know the choosen one"
                    />


                </div>
        </div>
    </form>
</div>