<?php
defined('BASEPATH') or exit('No direct script access allowed');

?>
<!DOCTYPE html>
<html lang="pt">

<head>
	<meta charset="utf-8">
	<title>Conversor de Moeda</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">


	<style type="text/css">
		::selection {
			background-color: #E13300;
			color: white;
		}

		::-moz-selection {
			background-color: #E13300;
			color: white;
		}

		body {
			background-color: #fff;
			margin: 40px;
			font: 13px/20px normal Helvetica, Arial, sans-serif;
			color: #4F5155;
		}

		a {
			color: #003399;
			background-color: transparent;
			font-weight: normal;
			text-decoration: none;
		}

		a:hover {
			color: #97310e;
		}

		h1 {
			color: #444;
			background-color: transparent;
			border-bottom: 1px solid #D0D0D0;
			font-size: 19px;
			font-weight: normal;
			margin: 0 0 14px 0;
			padding: 14px 15px 10px 15px;
		}

		code {
			font-family: Consolas, Monaco, Courier New, Courier, monospace;
			font-size: 12px;
			background-color: #f9f9f9;
			border: 1px solid #D0D0D0;
			color: #002166;
			display: block;
			margin: 14px 0 14px 0;
			padding: 12px 10px 12px 10px;
		}

		#body {
			margin: 0 15px 0 15px;
			min-height: 96px;
		}

		p {
			margin: 0 0 10px;
			padding: 0;
		}

		p.footer {
			text-align: right;
			font-size: 11px;
			border-top: 1px solid #D0D0D0;
			line-height: 32px;
			padding: 0 10px 0 10px;
			margin: 20px 0 0 0;
		}

		#container {
			margin: 10px;
			border: 1px solid #D0D0D0;
			box-shadow: 0 0 8px #D0D0D0;
		}

		.centered {
			margin: 0 auto !important;
			float: none !important;
		}
	</style>
</head>

<body>

	<div id="" class="container">
		<h1 class="mt-2 text-center">Conversor de moeda</h1>
		<div id="input_valores" class="col-lg-2 centered">
			<label for="" class=""> <strong>Valor a ser convertido</strong></label>
			<input type="text" id='val' class="row mt-1" placeholder="Digite um valor em R$">
			<select name="" id="select_moeda" class="row mt-2">
				<option selected='disable'>Selecione</option>
				<?php foreach ($listarMoedas as $key => $moedas) { ?>
					<option value="<?php echo $moedas->high; ?>" id="tipo_moeda" class="tipoMoeda<?= $key ?>"><?php echo $moedas->name; ?></option>
				<?php } ?>
			</select>
			<button class="btn btn-primary row mt-1 mb-4" id='converte_moeda'>Converter</button>
			<input type="text mt-3" class="row" value="" id="resultado" placeholder="">
		</div>
	</div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript">
	let cotacao = '';
	var select = document.getElementById('select_moeda')

	select.addEventListener('change', function() {
		cotacao = select.value
	})


	$('#converte_moeda').on('click', function() {
		let valor_final = '';
		console.log(cotacao);

		let valor = document.getElementById('val').value;

		valor_final = valor * cotacao;

		$('#resultado').val(valor_final.toFixed(2).replace('.', ','));
	})
</script>

</html>