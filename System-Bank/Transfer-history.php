<?php
include 'inc/nav.php';
include "classes/Model.php";
$transfer = new Transfer;
$row = $transfer->selectAll();
?>

<div class="container">
    <h2 class="text-center pt-4">Transaction History</h2>

    <br>
    <div class="table-responsive-sm">
        <table class="table table-hover table-striped table-condensed table-bordered">
            <thead>
                <tr>
                    <th class="text-center">S.No.</th>
                    <th class="text-center">Sender</th>
                    <th class="text-center">Receiver</th>
                    <th class="text-center">Amount</th>
                    <th class="text-center">Date & Time</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($row as $rows) : ?>

                    <tr>
                        <td class="py-2"><?= $rows['sno']; ?></td>
                        <td class="py-2"><?= $rows['sender']; ?></td>
                        <td class="py-2"><?= $rows['receiver']; ?></td>
                        <td class="py-2"><?= $rows['balance']; ?> </td>
                        <td class="py-2"><?= date("d M,Y  h:i a", strtotime($rows['datetime'])) ?> </td>

                    </tr>

                    <?php endforeach;?>
            </tbody>
        </table>

    </div>
</div>

<?php include('inc/footer.php'); ?>

