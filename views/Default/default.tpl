<h1><?=$title?></h1>

<p>Statický Obsah šablony</p>

<p>Zde dynamicky vypište data z tabulky role</p>


<table class="table table-hover">
    <thead>
    <tr>
        <th>ID</th>
        <th>ROLE</th>
        <th>NÁZEV ROLE</th>
    </tr>
    </thead>

    <tbody>
    <!--Zde provedete dynamický výpis dat z proměnné
    Použijte cyklus FOREACH - jako např. při výpisu menu v souboru head.php-->

        <?php foreach ($role as $value):?>
            <table>
                <tr>
                    <td><?=$value['id']?></td>
                    <td><?=$value['role']?></td>
                    <td><?=$value['role_name']?></td>
                </tr>
            </table>
        <?php endforeach;?>

    </tbody>
</table>

