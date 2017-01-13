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
                print '</tr>';
        foreach ($asiakkaat as $asiakas){
                print "<tr>";
                print "<td>$asiakas->id</td>";
                print "<td>$asiakas->sukunimi</td>";
                print "<td>$asiakas->etunimi</td>";
                print "<td>$asiakas->osoite</td>";
                print "<td>$asiakas->postitmp</td>";
                print "<td>$asiakas->postinro</td>";
                print "</tr>"; 
        }
        print '</table>';
        ?>

