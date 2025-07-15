<?php
$chaine = 'jE sUiS UnE pHrAsE éCrIte PoUr ÊtRe TeStÉe.';

echo mb_convert_case($chaine, MB_CASE_TITLE_SIMPLE, 'UTF-8');