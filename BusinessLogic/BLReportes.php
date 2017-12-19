<?php

include $_SERVER['DOCUMENT_ROOT'].'/NutriService/DataLayer/DAReportes.php';

$objDAReportes = new DAReportes();

$objDAReportes->EvaluacionNutricional();