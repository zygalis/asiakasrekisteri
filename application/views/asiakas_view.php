
<div><h3>Lisää asiakas</h3></div>
        <form action="<?php print site_url() . '/asiakas/tallenna';?>" method="post">
            <div class="form-group">
                <label>Etunimi</label>
                <input name="etunimi" class="form-control">
            </div>
            <div class="form-group">
                <label>Sukunimi</label>
                <input name="sukunimi" class="form-control">
            </div>
            <div class="form-group">
                <label>Lähiosoite</label>
                <input name="osoite" class="form-control">
            </div>
            <div class="form-group">
                <label>Postitoimipaikka</label>
                <input name="postitmp" class="form-control">
            </div>
            <div class="form-group">
                <label>Postinumero</label>
                <input name="postinro" class="form-control">
            </div>
            <button class="btn btn-default">Lisää</button>
        </form>
