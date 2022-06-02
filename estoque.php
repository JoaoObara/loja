<?php
// include './includes/head.inc'; 
session_start();
include 'UI_include.php';
include INC_DIR . 'header.inc';
?>

<!-- PARTE 1 -->
<body>
  <div class="container">
    <?php include INC_DIR . 'menu.inc'; ?>
  </div>

  <h3 style="text-align: center;">Estoque de carros</h3>
<table class="table">
<thead>
<tr>
<th>Marca</th>
<th>Modelo</th>
<th>Descrição</th>
<th>Mod/Fab</th>
<th>Cor</th>
<th>Placa</th>
<th>Preço</th>
<th>Ações</th>
</tr>
</thead>
<tbody>
<tr>
<td>Ford</td>
<td>Ka</td>
<td>1.0 MPI 8V Flex 2P MANUAL</td>
<td>2019/2019</td>
<td>branco</td>
<td>GHF3453</td>
<td>R$ 40.225,00</td>
<td class="td-actions text-right">
<button type="button" rel="tooltip" class="btn-sm btn-info">
<i class="material-icons">person</i>
</button>

<!-- PARTE 2 -->
<button type="button" rel="tooltip" class="btn-sm btn-success">
<i class="material-icons">edit</i>
</button>
<button type="button" rel="tooltip" class="btn-sm btn-danger">
<i class="material-icons">close</i>
</button>
</td>
</tr>
<tr>
<td>Toyota</td>
<td>Corola</td>
<td>1.8 SE-G 16V FLEX 4P AUTOMÁTICO</td>
<td>2021/2022</td>
<td>prata</td>
<td>BHF3A53</td>
<td>R$ 100.100,00</td>
<td class="td-actions text-right">
<button type="button" rel="tooltip" class="btn-sm btn-info btn-round">
<i class="material-icons">person</i>
</button>
<button type="button" rel="tooltip" class="btn-sm btn-success btn-round">
<i class="material-icons">edit</i>
</button>
<button type="button" rel="tooltip" class="btn-sm btn-danger btn-round">
<i class="material-icons">close</i>
</button>
</td>

<!-- PARTE 3 -->
</tr>
<tr>
<td>Chevrolet</td>
<td>Onix</td>
<td>1.0 FLEX 4P</td>
<td>2022/2022</td>
<td>Branco</td>
<td>FRF7A52</td>
<td>R$ 50.400,00</td>
<td class="td-actions text-right">
<button type="button" rel="tooltip" class="btn-sm btn-info">
<i class="material-icons">person</i>
</button>
<button type="button" rel="tooltip" class="btn-sm btn-success">
<i class="material-icons">edit</i>
</button>
<button type="button" rel="tooltip" class="btn-sm btn-danger">
<i class="material-icons">close</i>
</button>
</td>
</tr>
</tbody>
</table>

  <?php
  include INC_DIR . 'foot.inc';
  ?>
</body>

</html>