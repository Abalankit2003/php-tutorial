<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            display : flex;
            align-items : center;
            justify-content : center;
        }

        table {
            width : 60%;
            min-height : 95vh;
            /* border : 2px solid black; */
            border-width : 2px;
            border-style : solid;
            border-color : black;
            border-collapse : collapse;
        }

        th, td {
            border-right: 2px solid black;
            border-bottom : 2px solid black;
        }

        td {
            text-align : center;
        }
    </style>
</head>
<body>
    <table>
        <thead>
            <tr>
            <th>Date</th>
            <th>Check</th>
            <th>Description</th>
            <th>Amount</th>
            </tr>
        </thead>
        <tbody>

            <?php if(!empty($transactions)) : ?>
                <?php foreach($transactions as $transaction) : ?>
                    <tr>
                        <td><?= formatDate($transaction['date'])?></td>
                        <td><?= $transaction['checkNumber']?></td>
                        <td><?= $transaction['description']?></td>
                        <td>
                        <?php if($transaction['amount'] < 0) : ?>
                            <span style="color : red;">
                                <?= formatAmount($transaction['amount'])?>
                            </span>
                        <?php elseif($transaction['amount'] > 0) : ?>
                            <span style="color : green;">
                                <?= formatAmount($transaction['amount'])?>
                            </span>
                        <?php else : ?>
                            <span style="color : black;">
                                <?= formatAmount($transaction['amount'])?>
                            </span>
                        <?php endif ?>
                        </td>
                    </tr>
                <?php endforeach ?>
            <?php endif ?>
        </tbody>
        <tfoot style="text-align : end;">
            <tr>
                <th colspan="3">Total Income:</th>
                <td><?= formatAmount($totals['netTotal']) ?? 0 ?></td>
            </tr>
            <tr>
                <th colspan="3">Total Expense:</th>
                <td><?= formatAmount($totals['totalExpense']) ?? 0 ?></td>
            </tr>
            <tr>
                <th colspan="3">Total Income:</th>
                <td><?= formatAmount($totals['totalIncome']) ?? 0 ?></td>
            </tr>
        </tfoot>
    </table>
</body>
</html>
