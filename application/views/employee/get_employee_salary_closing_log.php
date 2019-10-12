<?php

/**
 * Description of get_employee_salary_closing_log
 *
 * @author  imcody
 * @name    Tarek Ibne Showkot
 * @contact priom2000@gmail.com
 * @web     http://imcody.com
 */
?>
<?php if($closing != FALSE){ $sl = 1; $total = 0; foreach($closing->result() as $closing){  ?>
<tr>
    <td style="text-align: center;"><?php echo $sl; ?></td>
    <td><?php echo $closing->Month; ?></td>
    <td><?php echo bdt() . $closing->Amount; ?></td>
    <td style="text-align: right;">
        <?php   
        $total = $total + $closing->Amount;
        echo bdt() . number_format($closing->Amount, 2);
        ?>
    </td>
</tr>
<?php $sl++;} ?>
<tr>
    <td style="text-align: right;" colspan="3">Total</td>
    <td style="text-align: right;">
        <?php echo bdt() . number_format($total, 2); ?>
    </td>
</tr>
<?php } ?>