<?php echo "<ul>"; ?>
            <?php echo "<li>" . $tache['nom_tache'] . "</li>" . '<a href=traitementDelete.php?id=' . $tache['id'] . '> suprimer</a>'; ?>
        <?php echo "</ul>"; ?>