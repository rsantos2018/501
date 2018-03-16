<?php

namespace Site;

require 'view.php';



require 'model.php';

use Model\Pessoa as ModelPessoa;
use View\Pessoa as ViewPessoa;
use DateTime as data;

$viewPessoa = new ViewPessoa();
echo "<br>";
$modelPessoa = new ModelPessoa();


$data = new data();