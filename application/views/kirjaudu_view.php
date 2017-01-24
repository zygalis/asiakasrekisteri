<?php
print validation_errors("<p style='color:red'>","</p>");
?>
<div class="row">
    <div class="col-xs-12 col-md-offset-4 col-md-4">
        <h3>Kirjaudu</h3>
        <form role="form" method="post" action="<?php print site_url(). 'kayttaja/kirjaudu'?>">
             <div class="form-group">
                <label for="tunnus">Email</label>
                <input type="text" name="email" class="form-control" >
            </div>
            <div class="form-group">
                <label for="salasana">Salasana</label>
                <input name="salasana" type="password" class="form-control">
            </div>
            <button class="btn btn-primary">Kirjaudu</button>   
            <a class="btn btn-default" href="<?php print site_url() . 'kayttaja/rekisteroityminen'?>">Rekisteröidy</a>
        </form>
    </div>
</div>
