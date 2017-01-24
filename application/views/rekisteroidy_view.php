<?php
print validation_errors("<p style='color:red'>","</p>");
?>
<div class="row">
    <div class="col-xs-12 col-md-offset-4 col-md-4">
        <h3>Rekisteröidy</h3>
        <form role="form" method="post" action="<?php print site_url(). '/kayttaja/rekisteroidy'?>">
             <div class="form-group">
                <label for="tunnus">Email</label><?php echo form_error('email');?>
                <input type="email" name="email" class="form-control">
            </div>
            <div class="form-group">
                <label for="salasana">Salasana</label><?php echo form_error('salasana');?>
                <input name="salasana" type="password" class="form-control">
            </div><div class="form-group">
                <label for="salasana2">Toista salasana</label>
                <input name="salasana2" type="password" class="form-control">
            </div>
            <button class="btn btn-primary">Tallenna</button>
            <a class="btn btn-default" href="<?php print site_url() . 'kayttaja'?>">Kirjaudu</a> 
        </form>
    </div>
</div>
