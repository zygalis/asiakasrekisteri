<form method="post" action="<?php print site_url() . 'asiakas/index' ?>" class="search-form">
    <div class="form-group has-feedback">
        <label for="search" class="sr-only">Search</label>
        <input type="text" class="form-control" name="search" id="search" placeholder="search">
        <span class="glyphicon glyphicon-search form-control-feedback"></span>
    </div>
</form>
<h3>Asiakkaat</h3>
        <?php
        print anchor('asiakas/lisaa', 'Lisää');
        print '<table class="table">';
                print '<tr>';
                print '<th>Id</th>';
                print '<th>Sukunimi</th>';
                print '<th>Etunimi</th>';
                print '<th>Lähiosoite</th>';
                print '<th>Postitoimipaikka</th>';
                print '<th>Postinumero</th>';
                print '<th></th>';
                print '<th></th>';
                print '<th></th>';
                print '</tr>';
        foreach ($asiakkaat as $asiakas){
                print "<tr>";
                print "<td>$asiakas->id</td>";
                print "<td>$asiakas->sukunimi</td>";
                print "<td>$asiakas->etunimi</td>";
                print "<td>$asiakas->osoite</td>";
                print "<td>$asiakas->postitmp</td>";
                print "<td>$asiakas->postinro</td>";
                print "<td>" . anchor("asiakas/poista/$asiakas->id","Poista") . "</td>";
                print "<td>" . anchor("asiakas/muokkaa/$asiakas->id","Muokkaa") . "</td>";
                print "<td>" . anchor("muistio/index/$asiakas->id",'<span class="glyphicon glyphicon-pencil"></span>') . "</td>";
                print "</tr>"; 
        }
        print '</table>';
        ?>

