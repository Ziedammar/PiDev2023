<?php
     $texte = file_get_contents('exemple.txt');
            
            //On ajoute notre nouveau texte à l'ancien
            $texte .= "\n**NOUVEAU TEXTE**";
            
            //On écrit tout le texte dans notre fichier
            file_put_contents('exemple.txt', $texte);        ?>