<?php
   include_once('layout/header.php');
   include_once('budget_calculator.php');
?>


<ol class="breadcrumb">
  
  <li class="active">Eventin'</li>
</ol>

<div class="container">
    <div class="page-header">
        <h1>BUDGET TRACKER</h1>
    </div>

    <div class="row">
        <div class="col-md-12">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                <table class="table table-bordered">

                    <thead>
                        <tr>
                            <th colspan="2">Budget</th>
                            <th colspan="2">Expenditures</th>
                        </tr>
                        <tr>
                            <th>Item</th>
                            <th>Amount</th>
                            <th>Item</th>
                            <th>Amount</th>   
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="head-inputs">
                            <td>
                                <i class="glyphicon glyphicon-plus i-btn add-income-btn"></i> 
                                <input class="inpt" name="income" type="text">
                            </td>
                            <td>
                                <i class="glyphicon glyphicon-piggy-bank i-btn inc-amt"></i>
                                <input class="inpt"  name="income_amt" type="text">
                            </td>
                            <td>
                                <i class="glyphicon glyphicon-plus i-btn add-expense-btn"></i> 
                                <input class="inpt"  name="expense" type="text">
                            </td>
                            <td>
                                <i class="glyphicon glyphicon-piggy-bank i-btn exp-amt"></i>
                                <input class="inpt"  name="expense_amt" type="text">
                            </td>
                        </tr>

                        <?php 
                           
                                for ($i = 0; $i < $row_length; $i++) {        
                        ?>
                            <tr>
                                <td><?php echo isset($_POST['inc'][$i]) ? "<i class='glyphicon glyphicon-minus i-btn remove-income-btn'></i> <input type='text' class='td-inpt' readonly name='inc[]' value='".$_POST['inc'][$i]."' />" : ''; ?></td>
                                <td><?php echo isset($_POST['inc_amt'][$i]) ? "<input type='text' class='td-inpt' readonly name='inc_amt[]' value='".$_POST['inc_amt'][$i]."' />" : ''; ?></td>
                                
                                <td><?php echo isset($_POST['exp'][$i]) ? "<i class='glyphicon glyphicon-minus i-btn remove-expense-btn'></i> <input type='text' class='td-inpt' readonly name='exp[]' value='".$_POST['exp'][$i]."' />" : ''; ?></td>
                                <td><?php echo isset($_POST['exp_amt'][$i]) ? "<input type='text' class='td-inpt' readonly name='exp_amt[]' value='".$_POST['exp_amt'][$i]."' />" : ''; ?></td>
                            </tr>
                        <?php }
                         ?>

                    </tbody>
                </table>
                <div class="well">
                    <button type="submit" class="btn btn-success">Calculate</button>
                    <hr />
                    <p><strong>Budget : </strong> <?= $total_income; ?></p>
                    <p><strong>Expenses : </strong> <?= $total_exp; ?></p>
                    <p><strong>Balance : </strong> <?= $balance; ?></p>
                </div>
            </form>
        </div>
    </div>
</div><br><br>

<div class="well">
                    <button type="submit" a href="afterlogin.php" class="btn btn-success"><a href="afterlogin.php">BACK</a></button>
                  
<?php
   include_once('layout/footer.php');
?>


