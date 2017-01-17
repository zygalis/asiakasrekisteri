
        <h3>Lisää asiakas</h3>
        <form action="<?php print site_url() . '/asiakas/tallenna';?>" method="post">
            <input type="hidden" name="id" value="<?php print $id?>">
            <div class="form-group">
                <label>Etunimi</label>
                <input name="etunimi" class="form-control" value="<?php print $etunimi?>">
            </div>
            <div class="form-group">
                <label>Sukunimi</label>
                <input name="sukunimi" class="form-control" value="<?php print $sukunimi?>">
            </div>
            <div class="form-group">
                <label>Lähiosoite</label>
                <input name="osoite" class="form-control" value="<?php print $osoite?>">
            </div>
            <div class="form-group">
                <label>Postitoimipaikka</label>
                <input name="postitmp" class="form-control" value="<?php print $postitmp?>">
            </div>
            <div class="form-group">
                <label>Postinumero</label>
                <input name="postinro" class="form-control" value="<?php print $postinro?>">
            </div>
            <button class="btn btn-default">Lisää</button>
        </form>
