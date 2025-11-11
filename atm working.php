<?php
    echo " Atm Withdrawal Status <br>";
    echo "<br>";
    $BalanceAmt=5000;
    $WithdrawalAmt=3000;
    echo" Total Balance Rs  :" .$BalanceAmt ."<br>";
    echo " Withdrawal Amt Rs  :" .$WithdrawalAmt. "<br>";
    echo " The Balance Amt is Rs :" .$BalanceAmt -$WithdrawalAmt."<br>"; 
    if($WithdrawalAmt <= 5000)
    {
        echo "  Cash WithDrawal Successfully ! " ;
    }
    else
    {
        echo "  Insufficient Balance! " ;
    }
?>